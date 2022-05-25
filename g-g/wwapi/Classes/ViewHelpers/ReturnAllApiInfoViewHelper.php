<?php
namespace GG\Wwapi\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;


class ReturnAllApiInfoViewHelper extends AbstractViewHelper
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
    
    // $refId = $arguments['refId'];
    $url = $GLOBALS['TYPO3_CONF_VARS']['FE']['api_url'].'api/';
    $menu = file_get_contents($url."menu");
    $all_info = json_decode($menu, true);

    return $all_info;
   }
}
