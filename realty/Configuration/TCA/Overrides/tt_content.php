<?php
defined('TYPO3_MODE') or die('Access denied.');

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['realty_pi1'] = 'layout,select_key,pages,recursive';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['realty_pi1'] = 'pi_flexform';
