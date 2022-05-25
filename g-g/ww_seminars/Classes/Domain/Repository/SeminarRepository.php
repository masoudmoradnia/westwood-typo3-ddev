<?php

declare(strict_types=1);

namespace GG\WwSeminars\Domain\Repository;

/**
 * This file is part of the "Seminare" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Masoud Moradnia <masoud.moradnia@graphic-group.de>, Graphic Group Mensch&Medien GmbH
 */

/**
 * The repository for Seminars
 */
class SeminarRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * @var array
     */
    protected $defaultOrderings = ['sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING];

    public function getCategorizedSeminars($plce_uid, $cat_uid)
    {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalAnd(
            [
                $query->equals('place', $plce_uid),
                $query->equals('category', $cat_uid)
            ]
        )
        );
        return $query->execute();
    }
}
