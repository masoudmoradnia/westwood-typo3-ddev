<?php
namespace GG\Wwapi\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;


class ChangeTagsViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

   public function initializeArguments()
   {
       $this->registerArgument('text', 'string', 'text', true);
       
   }

   public static function renderStatic(
       array $arguments,
       \Closure $renderChildrenClosure,
       RenderingContextInterface $renderingContext
   ) {      
    
    return str_replace(array('[b]','[/b]','[ul]','[li]','[/ul]','[/li]'), array('<b>','</b>','<ul>','<li>','</ul>','</li>'), $arguments['text']);

   }
}
