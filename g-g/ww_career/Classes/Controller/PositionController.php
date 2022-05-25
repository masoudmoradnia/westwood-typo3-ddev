<?php

declare(strict_types=1);

namespace GG\WwCareer\Controller;

/**
 * This file is part of the "Karriere" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Masoud Moradnia <masoud.moradnia@graphic-group.de>, Graphic Group Mensch und Media
 */

/**
 * PositionController
 */
class PositionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    public $career_api_url;
    public $jobs;
    
    public function __construct()
    {
        $this->career_api_url = "https://westwood.perbit-job.de/json_list.php?key=e4A4o8FqccbPPvbzLqTq";
        $this -> jobs = file_get_contents($this->career_api_url);
        $this -> jobs = json_decode($this -> jobs, true);        

    }
    
    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $category = $this->settings['category'];
        $jobs = $this->findJobByCategory($category);
        $this->view->assign('jobs', $jobs);
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function ShowAction()
    {
        $job = $this->findJobById($this->request->getArgument('jobId'));        
        $this->view->assign('job', $job);
    }
    
    private function findJobById($job_id) {
        foreach($this->jobs as $job) {
            if($job['adverts']['meta']['id'] == $job_id) {
                return $job;
            }
        } 
    }
    private function findJobByCategory($category) {
        $jobs = [];
        foreach($this->jobs as $job) {
            if($job['adverts']['meta']['category'] == $category) {
                $jobs[] = $job;
            }
        } 
        return $jobs;
    }
}
