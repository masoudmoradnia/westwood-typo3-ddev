<?php

declare(strict_types=1);

namespace GG\Wwcontact\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use Symfony\Component\Mime\Address;
use TYPO3\CMS\Core\Mail\FluidEmail;
use TYPO3\CMS\Core\Mail\Mailer;

/**
 * This file is part of the "Kontakt Formular" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Masoud Moradnia <masoud.moradnia@graphic-group.de>, Graphic Group Mensch und Media GmbH
 */

/**
 * RequestController
 */
class RequestController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * requestRepository
     *
     * @var \GG\Wwcontact\Domain\Repository\RequestRepository
     */
    protected $requestRepository = null;

    /**
     * @param \GG\Wwcontact\Domain\Repository\RequestRepository $requestRepository
     */
    public function injectRequestRepository(\GG\Wwcontact\Domain\Repository\RequestRepository $requestRepository)
    {
        $this->requestRepository = $requestRepository;
    }

    /**
     * action new
     *
     * @return string|object|null|void
     */
    public function newAction()
    {
        $filesProcessor = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Frontend\DataProcessing\FilesProcessor::class);
        $image = $filesProcessor->process(
            $this->configurationManager->getContentObject(),
            [],
            [
                'references.' => [
                    'fieldName' => 'image',
                    'table' => 'tt_content',
                ],
                'as' => 'image',
            ],
            []
        );
        $this->view->assign('image', $image);
    }


    /**
     * action validate
     *
     * @param \GG\Wwcontact\Domain\Model\Request $newRequest
     * @return string|object|null|void
     */

    public function validateAction(\GG\Wwcontact\Domain\Model\Request $newRequest)
    {
        // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($newRequest);
        $errors = [];
        if ($newRequest) {
            if (!$newRequest->getName()) {
                $errors['name'] = "Bitte geben Sie Ihren Namen ein";
            }
            if (!$newRequest->getTel()) {
                $errors['tel'] = "Bitte geben Sie eine Telefonnummer an";
            }
            if ($newRequest->getEmail()) {
                if (!filter_var($newRequest->getEmail(), FILTER_VALIDATE_EMAIL)) {
                    $errors['email'] = "Die angegebene E-Mail-Adresse ist nicht gültig";
                }
            } else {
                    $errors['email'] = "Bitte geben Sie eine E-Mail-Adresse an";
            }
            
            if (strlen($newRequest->getMessage()) < 1) {
                $errors['message'] = "Bitte geben Sie Ihre Nachricht ein";
            }
            /*if (!$_POST['check1']) {
                $errors['check1'] = "Bitte stimmen Sie unserer Datenschutzerklärung zu";
            }*/
            

            if (empty($errors)) {
                $response['status'] = "success";
                $response['msg'][]= "Vielen Dank für Ihre Nachricht! Wir werden uns umgehend mit Ihnen in Verbindung setzen.";

                $this->createAction($newRequest);
            } else {
                $response['status'] = "warning";
                $response['msg'] = $errors;
            }
        } else {
            $errors['status'] = false;
        }


        return json_encode($response);
    }

    /**
     * action create
     *
     * @param \GG\Wwcontact\Domain\Model\Request $newRequest
     * @return string|object|null|void
     */
    public function createAction(\GG\Wwcontact\Domain\Model\Request $newRequest)
    {
        $this->requestRepository->add($newRequest);
        $this->sendTemplateEmail('info@westwood.de', 'contact', 'Email_from_contact_form_to_ww', null, null, $newRequest);
		//$this->sendTemplateEmail('masoud.moradnia@graphic-group.de', 'contact', 'Email_from_contact_form_to_ww', null, null, $newRequest);
    }

    /**
         * @param string $recipient recipient of the email in the format array('recipient@domain.tld' => 'Recipient Name')
         * @param string $subject subject of the email
         * @param string $templateName template name (UpperCamelCase)
         * @param string $cc
         * @param string $bcc
         * @param \GG\Wwcontact\Domain\Model\Request $newRequest
         *
         * @return boolean TRUE on success, otherwise false
         */
    protected function sendTemplateEmail($recipient, $subject, $templateName, $cc = null, $bcc = null, \GG\Wwcontact\Domain\Model\Request $newRequest)
    {
        $email = GeneralUtility::makeInstance(FluidEmail::class);
        $email
                ->to($recipient)
                ->subject($subject)
                ->format('both') // send HTML and plaintext mail
                ->setTemplate($templateName)
                ->assign('newRequest', $newRequest);
        GeneralUtility::makeInstance(Mailer::class)->send($email);
    }
    /**
     * action export (be)
     *
     * @return string|object|null|void
     */
    public function ExportAction()
    {
        if (isset($_POST['export'])) {
            $start = strtotime($_POST['start']);
            $end = strtotime($_POST['end']);
            if ($start && $end && $end > $start) {
                $this->view->assign('error', false);
                $requests = $this->requestRepository->findForExport($start, $end);
                $requestsArray = $this->requestsToArray($requests);
                // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($requests);
                $this->download_send_headers("Kontakt_data_export_" . date("Y-m-d") . ".csv");
                echo $this->array2csv($requestsArray);
                die();
            } else {
                $this->view->assign('error', true);
            }
        }

       
    }

    protected function requestsToArray($requests)
    {
        $result = [];
        // add column titles as first row
        $result[] = [
            "uid",
            "Datum",
            "Name",
            "Straße",
            "Plz",
            "Ort",
            "E-Mail",            
            "Telefon", 
            "Firma",
            "Funktion ",
            "Nachricht"            
        ];

        $requestModelProperties = [
            "uid",
            "crdate",
            "name",
            "street",
            "zip",
            "city",
            "email",            
            "tel",            
            "company",
            "function",
            "message"            
        ];

        foreach($requests->toArray() as $request) {
            $row = [];
            foreach($requestModelProperties as $prop) {
                $getter = "get". ucfirst($prop);
                if($prop == "crdate") {
                    $row[] = $request->getCrdate()->format("Y-m-d");
                } else {
                    $row[] = $request->$getter();
                }
                
            }
            $result[] = $row;
        }

        return $result;
    }

    protected function array2csv(array &$array)
    {
        if (count($array) == 0) {
            return null;
        }
        ob_start();
        $df = fopen("php://output", 'w');
        // fputcsv($df, array_keys(reset($array)));
        foreach ($array as $row) {
            fputcsv($df, $row, ";");
        }
        fclose($df);
        return ob_get_clean();
    }

    protected function download_send_headers($filename)
    {
        // disable caching
        $now = gmdate("D, d M Y H:i:s");
        header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
        header("Cache-Control: max-age=0, no-cache, must-revalidate, proxy-revalidate");
        header("Last-Modified: {$now} GMT");

        // force download  
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");

        // disposition / encoding on response body
        header("Content-Disposition: attachment;filename={$filename}");
        header("Content-Transfer-Encoding: binary");
    }

}
