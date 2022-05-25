<?php
namespace GG\Wwapi\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;


class GetfirstletterViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

   public function initializeArguments()
   {
       $this->registerArgument('word', 'string', 'title', true);
   }

   public static function renderStatic(
       array $arguments,
       \Closure $renderChildrenClosure,
       RenderingContextInterface $renderingContext
   ) {
      
    $word =ucfirst($arguments['word']);
    return $word[0];
   }
}
