<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:at_goodfood/Configuration/PageTSconfig/setup.typoscript">');

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:at_goodfood/Configuration/RTE/Default.yaml';