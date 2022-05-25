<?php
defined('TYPO3_MODE') || die();
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['gg'] =
'EXT:ggkickstarter/Configuration/Rte/Gg.yaml';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['routing']['aspects']['ApiAspect'] = \GG\Ggkickstarter\Routing\Aspect\ApiAspect::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['registerIndexerConfiguration'][] =
    \GG\Ggkickstarter\Hooks\ApplicationIndexer::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['customIndexer'][] =
    \GG\Ggkickstarter\Hooks\ApplicationIndexer::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['registerIndexerConfiguration'][] =
    \GG\Ggkickstarter\Hooks\ProductGroupIndexer::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['customIndexer'][] =
    \GG\Ggkickstarter\Hooks\ProductGroupIndexer::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['registerIndexerConfiguration'][] =
    \GG\Ggkickstarter\Hooks\DownloadsIndexer::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['customIndexer'][] =
    \GG\Ggkickstarter\Hooks\DownloadsIndexer::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['registerIndexerConfiguration'][] =
    \GG\Ggkickstarter\Hooks\ProductLevelsIndexer::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['customIndexer'][] =
    \GG\Ggkickstarter\Hooks\ProductLevelsIndexer::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['registerIndexerConfiguration'][] =
    \GG\Ggkickstarter\Hooks\ProducsIndexer::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['customIndexer'][] =
    \GG\Ggkickstarter\Hooks\ProducsIndexer::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['registerIndexerConfiguration'][] =
    \GG\Ggkickstarter\Hooks\SystemsIndexer::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['customIndexer'][] =
    \GG\Ggkickstarter\Hooks\SystemsIndexer::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['registerIndexerConfiguration'][] =
    \GG\Ggkickstarter\Hooks\RefIndexer::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['customIndexer'][] =
    \GG\Ggkickstarter\Hooks\RefIndexer::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['registerIndexerConfiguration'][] =
    \GG\Ggkickstarter\Hooks\SolutionIndexer::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['customIndexer'][] =
    \GG\Ggkickstarter\Hooks\SolutionIndexer::class;


$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['registerIndexerConfiguration'][] =
    \GG\Ggkickstarter\Hooks\NewsIndexer::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['customIndexer'][] =
    \GG\Ggkickstarter\Hooks\NewsIndexer::class;


