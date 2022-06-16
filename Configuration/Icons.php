<?php

/**
 * Icon Registry
 */

defined('TYPO3_MODE') || die();

   return [
       // icon identifier
       'ku-image-with-overlay-icon' => [
            // icon provider class
           'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            // the source SVG for the SvgIconProvider
           'source' => 'EXT:ku_image_with_overlay/Resources/Public/Icons/Extension.svg',
       ],
   ];