<?php
namespace GG\Wwapi\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class T3ConfVarViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

//    public function initializeArguments()
//    {
//        $this->registerArgument('refId', 'int', 'the reference ID', true);
//    }

    public static function renderStatic(
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ) {
    
        $data = $GLOBALS['TYPO3_CONF_VARS']['FE'];
       

        return $data;
    }
}
