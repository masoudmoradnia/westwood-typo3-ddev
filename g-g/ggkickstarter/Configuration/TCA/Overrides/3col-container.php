<?php
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)-> configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            '3col-container', 
            '3 Column Container',
            'Insert an element dividing the content area into two columns',
            [
                [
                    ['name' => 'Left Column', 'colPos' => 301],
                    ['name' => 'middle Column', 'colPos' => 302],
                    ['name' => 'Right Column', 'colPos' => 303]
                ]
            ]
        )
    ) 
);