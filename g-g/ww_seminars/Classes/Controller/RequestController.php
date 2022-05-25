<?php

declare(strict_types=1);

namespace GG\WwSeminars\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use Symfony\Component\Mime\Address;
use TYPO3\CMS\Core\Mail\FluidEmail;
use TYPO3\CMS\Core\Mail\Mailer;

/**
 * This file is part of the "Seminare" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Masoud Moradnia <masoud.moradnia@graphic-group.de>, Graphic Group Mensch&Medien GmbH
 */

/**
 * RequestController
 */
class RequestController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * requestRepository
     *
     * @var \GG\WwSeminars\Domain\Repository\RequestRepository
     */
    protected $requestRepository = null;

    /**
     * @param \GG\WwSeminars\Domain\Repository\RequestRepository $requestRepository
     */
    public function injectRequestRepository(\GG\WwSeminars\Domain\Repository\RequestRepository $requestRepository)
    {
        $this->requestRepository = $requestRepository;
    }

    /**
    * seminarRepository
    *
    * @var \GG\WwSeminars\Domain\Repository\SeminarRepository
    */
    protected $seminarRepository = null;

    /**
     * @param \GG\WwSeminars\Domain\Repository\SeminarRepository $seminarRepository
     */
    public function injectSeminarRepository(\GG\WwSeminars\Domain\Repository\SeminarRepository $seminarRepository)
    {
        $this->seminarRepository = $seminarRepository;
    }

    /**
     * action new
     *
     * @return string|object|null|void
     */
    public function newAction()
    {
        $seminar = $this->request->getArgument('seminar_id');
        $seminar = $this->seminarRepository->findByUid($seminar);
        $this->view->assign('seminar', $seminar);
        // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($seminar);
    }

    /**
     * action create
     *
     * @param \GG\WwSeminars\Domain\Model\Request $newRequest
     * @return string|object|null|void
     */
    public function createAction(\GG\WwSeminars\Domain\Model\Request $newRequest)
    {
        $validate_response = $this->validate($newRequest);
        

        if($validate_response['status'] == 'success'){
            $pesons= [];
            $conbined_perssons_array = array_combine($_POST['person']['first_name'], $_POST['person']['name']);
            foreach($conbined_perssons_array as $fn=>$ln) {
                $persons[] = $fn .' ' . $ln;
            }
            $newRequest->setPersonen(implode(',' , $persons));

            $this->requestRepository->add($newRequest); 
            // send email 
            $this->sendTemplateEmail('technikseminare@westwood.de', 'neue Seminar Anmeldung', 'Email_seminar', null, null, $newRequest);
        }
        return json_encode($validate_response);

        
    }


    /**
     *  validate
     *
     * @param \GG\WwSeminars\Domain\Model\Request $newRequest
     * @return string|object|null|void
     */

    public function validate(\GG\WwSeminars\Domain\Model\Request $newRequest)
    {
        // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($newRequest);
        $errors = [];
        if ($newRequest) {
            if (!$newRequest->getFirma()) {
                $errors['name'] = "Bitte geben Sie eine Firma ein";
            }

            if (!$newRequest->getStrasse()) {
                $errors['strasse'] = "Bitte geben Sie eine Straße ein";
            }

            if (!$newRequest->getPlz()) {
                $errors['plz'] = "Bitte geben Sie eine PLZ an";
            }

            if (!$newRequest->getOrt()) {
                $errors['ort'] = "Bitte geben Sie einen Ort an";
            }

            if (!$newRequest->getTelefon()) {
                $errors['telefon'] = "Bitte geben Sie eine Telefonnummer ein";
            }

            if ($newRequest->getEmail()) {
                if (!filter_var($newRequest->getEmail(), FILTER_VALIDATE_EMAIL)) {
                    $errors['email'] = "Die angegebene E-Mail-Adresse ist nicht gültig";
                }
            } else {
                $errors['email'] = "Bitte geben Sie eine E-Mail-Adresse an";
            }
            
            
            /*if (!$_POST['check1']) {
                $errors['check1'] = "Bitte stimmen Sie unserer Datenschutzerklärung zu";
            }*/

            $persons = $_POST['person'];
            // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($persons);
            foreach ($persons['first_name'] as $first_name) {
                if (! $first_name) {
                    $errors['teilnehmer-firstname'] = "Bitte geben Sie für jeden Teilnehmer einen Vornamen an";
                    break;
                }
            }
            foreach ($persons['name'] as $name) {
                if (! $name) {
                    $errors['teilnehmer-name'] = "Bitte geben Sie für jeden Teilnehmer einen Namen an";
                    break;
                }
            }
            


            

            if (empty($errors)) {
                $response['status'] = "success";
                $response['msg'][]= "Vielen Dank für Ihre Nachricht! Wir werden uns umgehend mit Ihnen in Verbindung setzen.";
            } else {
                $response['status'] = "warning";
                $response['msg'] = $errors;
            }
        } else {
            $errors['status'] = false;
        }


        return $response;
    }




        /**
         * @param string $recipient recipient of the email in the format array('recipient@domain.tld' => 'Recipient Name')
         * @param string $subject subject of the email
         * @param string $templateName template name (UpperCamelCase)
         * @param string $cc
         * @param string $bcc
         * @param \GG\WwSeminars\Domain\Model\Request $newRequest
         *
         * @return boolean TRUE on success, otherwise false
         */
        protected function sendTemplateEmail($recipient, $subject, $templateName, $cc = null, $bcc = null, \GG\WwSeminars\Domain\Model\Request $newRequest )
        {
            $email = GeneralUtility::makeInstance(FluidEmail::class);
            $email
                    ->to($recipient)
                    ->subject($subject)
                    ->format('html') // send HTML and plaintext mail
                    ->setTemplate($templateName)
                    ->assign('newRequest', $newRequest);
            GeneralUtility::makeInstance(Mailer::class)->send($email);
        }
}
