<?php
namespace GG\Wwapi\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;


class SetColorValueViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

   public function initializeArguments()
   {
       $this->registerArgument('refId', 'int', 'the reference ID', true);
   }

   public static function renderStatic(
       array $arguments,
       \Closure $renderChildrenClosure,
       RenderingContextInterface $renderingContext
   ) {
    $refClasses = [
        1 => '#e1b42d',
        2 => '#1e2e73',
        3 => '#a9151b',
        4 => '#930055',
        5 => '#3a115f'
    ];
    $refId = $arguments['refId'];
    return $refClasses[$refId];
   }
}
