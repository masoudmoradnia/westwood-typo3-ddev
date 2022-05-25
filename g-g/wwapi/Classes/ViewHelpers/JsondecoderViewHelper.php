<?php
namespace GG\Wwapi\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;


class JsondecoderViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

   public function initializeArguments()
   {
       $this->registerArgument('jsonstring', 'string', 'the string to decode', true);
   }

   public static function renderStatic(
       array $arguments,
       \Closure $renderChildrenClosure,
       RenderingContextInterface $renderingContext
   ) {
      return json_decode($arguments['jsonstring']);
   }
}
