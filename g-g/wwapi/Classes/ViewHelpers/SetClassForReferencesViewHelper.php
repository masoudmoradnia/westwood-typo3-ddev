<?php
namespace GG\Wwapi\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;


class SetClassForReferencesViewHelper extends AbstractViewHelper
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
        1 => 'balkon',
        2 => 'parken',
        3 => 'verkehr',
        4 => 'dach',
        5 => 'spezial'
    ];
    $refId = $arguments['refId'];
    return $refClasses[$refId];
   }
}
