<?php

namespace GG\Ggkickstarter\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class ExistedTypeInKESearchResultViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

    public function initializeArguments()
    {
        $this->registerArgument('results', 'array', '', true);
    }


    public static function renderStatic(
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ) {

        $results = $arguments['results'];
        $type = [];
        $order = [
            'api_downloads', 
            'api_ref', 'api_systems', 
            'tx_wwnews_domain_model_newsitem', 
            'api_products', 'api_application', 
            'page', 'api_productlevels', 
            'api_product_group', 
            'api_solution'
        ];
        foreach ($results as $result) {
            $types[] = $result['type'];
        }

        $types = array_unique($types);
        $typesOrderd = [];
        foreach($order as $item) {
            if(in_array($item , $types)) {
                $typesOrderd[] = $item;
            }
        }
        // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($typesOrderd);

        return $typesOrderd;
    }
}
