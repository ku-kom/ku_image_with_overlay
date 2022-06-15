<?php

defined('TYPO3_MODE') or die();

// KU flexible box
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
	'tt_content',
	'CType',
        [
            'LLL:EXT:ku_image_with_overlay/Resources/Private/Language/locallang_be.xlf:title',
            'ku_image_with_overlay',
            'content-text',
        ],
    'textmedia',
	'after'
);

$frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';

$ku_image_with_overlay=[
    'showitem' => '
    --palette--; LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general; general,header,header_link,ku_flexbox_color,bodytext,image,
    --div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
    --palette--;' . $frontendLanguageFilePrefix . 'palette.frames;frames,
    --palette--;;appearanceLinks,
    --div--;' . $frontendLanguageFilePrefix . 'tabs.access,
    --palette--;' . $frontendLanguageFilePrefix . 'palette.visibility;visibility,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
    --palette--;;language,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
        categories,
    --div--;' . $frontendLanguageFilePrefix . 'tabs.extended,
    --palette--;;hidden,
    --palette--;;access,
    ',
    'columnsOverrides' => [
      'bodytext' => [
         'config' => [
            'enableRichtext' => true,
            //'richtextConfiguration' => 'default'
         ]
      ]
    ]
    ];

    $GLOBALS['TCA']['tt_content']['types']['ku_image_with_overlay']=$ku_image_with_overlay;