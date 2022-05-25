<?php

declare(strict_types=1);

namespace GG\Wwnews\Domain\Repository;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;



/**
 * This file is part of the "News" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Masoud Moradnia <masoud.moradnia@graphic-group.de>, Graphic Group Mensch und Media
 */

/**
 * The repository for AplicationAreas
 */
class AplicationAreaRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    

    /**
     * @var array
     */
    protected $defaultOrderings = ['sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING];
}
