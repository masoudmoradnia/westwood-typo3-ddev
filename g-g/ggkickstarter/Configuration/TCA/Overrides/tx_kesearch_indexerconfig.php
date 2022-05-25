<?php
// Add you own indexer to the array, use a comma to join more indexers. 
$GLOBALS['TCA']['tx_kesearch_indexerconfig']['columns']['sysfolder']['displayCond'] .= ',' . GG\Ggkickstarter\Hooks\ApplicationIndexer::KEY;
$GLOBALS['TCA']['tx_kesearch_indexerconfig']['columns']['sysfolder']['displayCond'] .= ',' . GG\Ggkickstarter\Hooks\ProductGroupIndexer::KEY;
$GLOBALS['TCA']['tx_kesearch_indexerconfig']['columns']['sysfolder']['displayCond'] .= ',' . GG\Ggkickstarter\Hooks\DownloadsIndexer::KEY;
$GLOBALS['TCA']['tx_kesearch_indexerconfig']['columns']['sysfolder']['displayCond'] .= ',' . GG\Ggkickstarter\Hooks\ProductLevelsIndexer::KEY;
$GLOBALS['TCA']['tx_kesearch_indexerconfig']['columns']['sysfolder']['displayCond'] .= ',' . GG\Ggkickstarter\Hooks\ProducsIndexer::KEY;
$GLOBALS['TCA']['tx_kesearch_indexerconfig']['columns']['sysfolder']['displayCond'] .= ',' . GG\Ggkickstarter\Hooks\SystemsIndexer::KEY;
$GLOBALS['TCA']['tx_kesearch_indexerconfig']['columns']['sysfolder']['displayCond'] .= ',' . GG\Ggkickstarter\Hooks\RefIndexer::KEY;
$GLOBALS['TCA']['tx_kesearch_indexerconfig']['columns']['sysfolder']['displayCond'] .= ',' . GG\Ggkickstarter\Hooks\SolutionIndexer::KEY;
$GLOBALS['TCA']['tx_kesearch_indexerconfig']['columns']['sysfolder']['displayCond'] .= ',' . GG\Ggkickstarter\Hooks\NewsIndexer::KEY;
