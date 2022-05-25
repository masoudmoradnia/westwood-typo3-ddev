<?php

declare(strict_types=1);

namespace GG\Wwapi\Domain\Repository;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;



/**
 * This file is part of the "api" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Masoud Moradnia <masoud.moradnia@graphic-group.de>, Graphic Group Mensch und Media
 */

/**
 * The repository for Applications
 */
class ApplicationRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
public function initializeObject() {
      /** @var Typo3QuerySettings $querySettings */
      $querySettings = new Typo3QuerySettings();

      // don't add the pid constraint
      $querySettings->setRespectStoragePage(false);
    

      $this->setDefaultQuerySettings($querySettings);
   }
}
