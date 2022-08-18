<?php

/*
 * This file is part of the package ku_image_with_overlay.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') or die();

/**
 * Registers backend previewRenderer for custom content element "Image with overlay".
 */

$GLOBALS['TCA']['tt_content']['types']['ku_image_with_overlay']['previewRenderer'] = \UniversityOfCopenhagen\KuImageWithOverlay\Backend\Preview\imageWithOverlayPreviewRenderer::class;