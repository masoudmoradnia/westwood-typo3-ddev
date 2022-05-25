<?php

declare(strict_types=1);

namespace GG\Wwnews\Domain\Repository;

/**
 * This file is part of the "News" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Masoud Moradnia <masoud.moradnia@graphic-group.de>, Graphic Group Mensch und Media
 */

/**
 * The repository for NewsItems
 */
class NewsItemRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * @var array
     */
    protected $defaultOrderings = ['sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING];

    public function filters($searchterm = null, $categories = null, $aplicationareas = null)
    {
        $whereClause = 'WHERE deleted = 0 AND hidden = 0';
        
        if ($searchterm) {
            $whereClause.= " AND CONCAT_WS('', title, subtitle, introduction, text, refplace, reftype) LIKE '%$searchterm%'";
        }

        if ($categories) {
            $implode = implode(',', $categories);
            $whereClauseFilter[] = "category IN ($implode)";
        }

        if ($aplicationareas) {
            $implode = implode(',', $aplicationareas);
            $whereClauseFilter[] = " application_area IN ($implode)";
        }

        if (is_array($whereClauseFilter)) {
            $whereClauseFilters = implode(' OR ', $whereClauseFilter);
        }
        
        if ($whereClauseFilter) {
            $whereClause .= " AND ($whereClauseFilters)";
        }
       


        $query = $this->createQuery();
        $result = $query->statement('SELECT * FROM tx_wwnews_domain_model_newsitem ' .$whereClause);

        return
            $query->execute();
    }
}
