<?php

/*
 * This file is part of the package ku_image_with_overlay.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') or die('Access denied.');
// Add default RTE configuration
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['ku_image_with_overlay'] = 'EXT:ku_image_with_overlay/Configuration/RTE/Default.yaml';

// PageTS

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    @import \'EXT:ku_image_with_overlay/Configuration/TsConfig/Page/All.tsconfig\'
');
