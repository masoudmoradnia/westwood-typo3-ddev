<?php
namespace GG\Ggkickstarter\Routing\Aspect;

use TYPO3\CMS\Core\Site\SiteLanguageAwareTrait;
use TYPO3\CMS\Core\Routing\Aspect\PersistedAliasMapper;
use TYPO3\CMS\Core\DataHandling\SlugHelper;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use \TYPO3\CMS\Extbase\Reflection\ObjectAccess;


class ApiAspect extends PersistedAliasMapper
{
    use SiteLanguageAwareTrait;


    /**
     * {@inheritdoc}
     */
    public function generate(string $value): ?string
    {
        
        
     //Generiere einen neuen Slug
     

        
        
        return 'api1-'.$value;
    }
}