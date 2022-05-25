<?php

declare(strict_types=1);

namespace GG\Fachverarbeitersuche\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use Symfony\Component\Mime\Address;
use TYPO3\CMS\Core\Mail\FluidEmail;
use TYPO3\CMS\Core\Mail\Mailer;

/**
 * This file is part of the "Fachverarbeitersuche" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Masoud Moradnia <masoud.moradnia@graphic-group.de>, Graphic Group Mensch und Media GmbH
 */

/**
 * RequestsController
 */
class RequestsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    public $api_url;
    // public $files_repo;

    public function __construct()
    {
        $this->api_url = $this->api_url = $GLOBALS['TYPO3_CONF_VARS']['FE']['api_url'];
        // $this->files_repo = "storage";
    }

    /**
     * requestsRepository
     *
     * @var \GG\Fachverarbeitersuche\Domain\Repository\RequestsRepository
     */
    protected $requestsRepository = null;

    /**
     * @param \GG\Fachverarbeitersuche\Domain\Repository\RequestsRepository $requestsRepository
     */
    public function injectRequestsRepository(\GG\Fachverarbeitersuche\Domain\Repository\RequestsRepository $requestsRepository)
    {
        $this->requestsRepository = $requestsRepository;
    }
    /**
     * salesRepresentativeRepository
     *
     * @var \GG\Fachverarbeitersuche\Domain\Repository\SalesRepresentativeRepository
     */
    protected $salesRepresentativeRepository = null;

    /**
     * @param \GG\Fachverarbeitersuche\Domain\Repository\SalesRepresentativeRepository $salesRepresentativeRepository
     */
    public function injectSalesRepresentativeRepository(\GG\Fachverarbeitersuche\Domain\Repository\SalesRepresentativeRepository $salesRepresentativeRepository)
    {
        $this->salesRepresentativeRepository = $salesRepresentativeRepository;
    }
    /**
     * action new
     *
     * @return string|object|null|void
     */
    public function newAction()
    {
		if(isset($_GET['consent_googlemap'])) {
			$GLOBALS['TSFE']->fe_user->setKey("ses","consent_googlemap","myValue");
			$GLOBALS['TSFE']->fe_user->storeSessionData(); 
		}
		 $consent_googlemap = $GLOBALS['TSFE']->fe_user->getKey("ses","consent_googlemap");
		// $applications = file_get_contents($this->api_url."api/applications");
        // $applications= json_decode($applications, true);
        $this->view->assign("consent_googlemap" , $consent_googlemap);
    }



    /**
     * action validate
     *
     * @param \GG\Fachverarbeitersuche\Domain\Model\Requests $newRequests = null
     * @return string|object|null|void
     */

    public function validateAction(\GG\Fachverarbeitersuche\Domain\Model\Requests $newRequests = null)
    {

        $errors = [];



        if ($newRequests) {
            $parts = [
                $newRequests->getRamp(),
                $newRequests->getStairway(),
                $newRequests->getParking(),
                $newRequests->getTopdeck(),
                $newRequests->getBetweendeck(),
                $newRequests->getBalkon(),
                $newRequests->getArcade(),
                $newRequests->getTerrasse(),
                $newRequests->getDachkuppel(),
                $newRequests->getFlachdach(),
                $newRequests->getDachterasse(),
                $newRequests->getKeller(),
                $newRequests->getKonstruktion(),
                $newRequests->getSonder(),
                $newRequests->getBetonfuge(),
                $newRequests->getBetonfahrbahntafel(),
                $newRequests->getBrueckenkappe(),
                $newRequests->getStahlbruecke(),
                $newRequests->getTrogbauwerk(),
            ];


            $if__any_part = false;
            foreach ($parts as $part) {
                if ($part) {
                    $if__any_part = true;
                    break;
                }
            }

            if (!$if__any_part) {
                $errors['parts'] = "Bitte geben Sie mindestens ein Bauteil an";
            }



            if (!(is_int($newRequests->getArea()) || $newRequests->getArea() > 0)) {
                $errors['area'] = "Bitte geben Sie eine Ganzzahl in das Feld für die geschätzte Gesamtfläche ein.";
            }

            if (!$newRequests->getFirstname()) {
                $errors['firstname'] = "Bitte geben Sie Ihren Vornamen ein";
            }
            if (!$newRequests->getLastname()) {
                $errors['lastname'] = "Bitte geben Sie Ihren Namen ein";
            }
            if (!$newRequests->getTel()) {
                $errors['tel'] = "Bitte geben Sie eine Telefonnummer an";
            }

            if ($newRequests->getEmail()) {
                if (!filter_var($newRequests->getEmail(), FILTER_VALIDATE_EMAIL)) {
                    $errors['email'] = "Die angegebene E-Mail-Adresse ist nicht gültig";
                }
            } else {
                $errors['email'] = "Bitte geben Sie eine E-Mail-Adresse an";
            }



            if (!$_POST['check1']) {
                $errors['check1'] = "Bitte stimmen Sie unserer Datenschutzerklärung zu";
            }
            /*if (!$_POST['check2']) {
                $errors['check2'] = "Bitte stimmen Sie der Weitergabe Ihrer Kontaktdaten zu";
            }*/

            if (empty($errors)) {
                $response['status'] = "success";
                $response['msg'][] = "Vielen Dank für Ihre Nachricht! Wir werden uns umgehend mit Ihnen in Verbindung setzen.";

                $appArea = $_POST['applicationarea']; //toDo: secure injection
                $this->createAction($appArea, $newRequests);
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
     * @param \GG\Fachverarbeitersuche\Domain\Model\Requests $newRequests
     * @return string|object|null|void
     */
    public function createAction($appArea, \GG\Fachverarbeitersuche\Domain\Model\Requests $newRequests)
    {
        // $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $zip = substr($this->request->getArgument('zip'), 0, 2);
        
        $contactPerson = $this->salesRepresentativeRepository->findByPlz($zip)->getFirst();

        $newRequests->setZip($this->request->getArgument('zip'));
        $newRequests->setContactperson($contactPerson);

        $newRequests->setApplicationarea($appArea);
        $this->objectManager->get("TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager")->persistAll();

        $this->requestsRepository->add($newRequests);

        // send email to ww
        $to_WW = 'info@westwood.de';
        $this->sendTemplateEmail($to_WW, 'Fachverarbeitersuche', 'Email_from_fachverarbeitersuche_to_ww', null, null, $newRequests);

        // send email to außendienst
        $this->sendTemplateEmail($contactPerson->getEmail(), 'Fachverarbeitersuche', 'Email_from_fachverarbeitersuche_to_ww', null, null, $newRequests);

        //send email to user
        $this->sendTemplateEmail($newRequests->getEmail(), 'WestWood Fachverarbeitersuche', 'Email_from_fachverarbeitersuche_to_user', null, null, $newRequests, $contactPerson);
    }


    /**
     * action export (be)
     *
     * @return string|object|null|void
     */
    public function ExportAction()
    {
        // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($this->requestsRepository->findAll());
        if (isset($_POST['export'])) {
            $start = strtotime($_POST['start']);
            $end = strtotime($_POST['end']);
            if ($start && $end && $end > $start) {
                $this->view->assign('error', false);
                $requests = $this->requestsRepository->findForExport($start, $end);
                $requestsArray = $this->requestsToArray($requests);
                // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($requestsArray);
                $this->download_send_headers("Fachverarbeitersuche_data_export_" . date("Y-m-d") . ".csv");
                echo $this->array2csv($requestsArray);
                die();
            } else {
                $this->view->assign('error', true);
            }
        }

       
    }

    /**
     * @param string $recipient recipient of the email
     * @param string $subject subject of the email
     * @param string $templateName template name (UpperCamelCase)
     * @param string $cc
     * @param string $bcc
     * @param \GG\Fachverarbeitersuche\Domain\Model\Requests $newRequests
     * @param \GG\Fachverarbeitersuche\Domain\Model\SalesRepresentative $salesRepresentative
     * 
     *
     * @return boolean TRUE on success, otherwise false
     */
    protected function sendTemplateEmail($recipient, $subject, $templateName, $cc = null, $bcc = null, \GG\Fachverarbeitersuche\Domain\Model\Requests $newRequests, \GG\Fachverarbeitersuche\Domain\Model\SalesRepresentative $salesRepresentative = null)
    {
        $email = GeneralUtility::makeInstance(FluidEmail::class);
        $email
            ->to($recipient)
            ->subject($subject)
            ->format('html') // send HTML and plaintext mail
            ->setTemplate($templateName)
            ->assign('newRequests', $newRequests)
            ->assign('salesRepresentative', $salesRepresentative);
        GeneralUtility::makeInstance(Mailer::class)->send($email);
    }

    protected function requestsToArray($requests)
    {
        $result = [];
        // add column titles as first row
        $result[] = [
            "uid",
            "datum",
            "Anrede",
            "Vorname",
            "Nachname",
            "Adresse",
            "PLZ",
            "E-Mail",           
            "Telefon",
            "Einsatzgebiet",
            "Rampe",
            "Treppe",
            "Tiefgarage",
            "Topdeck",
            "Zwischendeck",
            "Balkon",
            "Laubengang",
            "Terrasse",
            "Dachkuppel",
            "Flachdach",
            "Dachterasse",
            "Keller",
            "Konstruktion",
            "Sonder",
            " WU-Beton-Fuge ",
            "Betonfahrbahntafel",
            "Brückenkappe",
            "Stahlbrücke",
            "Trogbauwerk",
            "Gesamtfläche ",            
            "Nachricht",
            "Außendienstler"
            
        ];

        $requestModelProperties = [
            "uid",
            "crdate",
            "title",
            "firstname",
            "lastname",
            "address",
            "zip",
            "email",            
            "tel",
            "applicationarea",
            "ramp",
            "stairway",
            "parking",
            "topdeck",
            "betweendeck",
            "balkon",
            "arcade",
            "terrasse",
            "dachkuppel",
            "flachdach",
            "dachterasse",
            "keller",
            "konstruktion",
            "sonder",
            "betonfuge",
            "betonfahrbahntafel",
            "brueckenkappe",
            "stahlbruecke",
            "trogbauwerk",
            "area",            
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
            // add contact person
            if($request->getContactperson()) {
                    $row[] = $request->getContactperson()->getName();
                } else {
                    $row[] = "";
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
