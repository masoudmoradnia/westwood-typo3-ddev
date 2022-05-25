<?php
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)-> configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            '1col-container', 
            '1 Column Container',
            'One Column Container ',
            [
                [
                    ['name' => 'Container', 'colPos' => 101]
                ]
            ]
        )
    ) 
);

