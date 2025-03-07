<?php

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;
use TYPO3\CMS\Core\Imaging\IconRegistry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use WapplerSystems\FormExtended\Controller\DoubleOptInController;


ExtensionUtility::configurePlugin(
    'form_extended',
    'DoubleOptIn',
    [
        DoubleOptInController::class => 'validation'
    ],
    [
        DoubleOptInController::class => 'validation'
    ]
);

$iconRegistry = GeneralUtility::makeInstance(
    IconRegistry::class
);
$iconRegistry->registerIcon(
    'plugin-formextended',
    SvgIconProvider::class,
    ['source' => 'EXT:form_extended/Resources/Public/Icons/PluginDoubleOptIn.svg']
);

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][TYPO3\CMS\Form\Mvc\Property\TypeConverter\UploadedFileReferenceConverter::class] = [
    'className' => WapplerSystems\FormExtended\Mvc\Property\TypeConverter\UploadedFileReferenceConverter::class
];


ExtensionManagementUtility::addTypoScriptSetup(
    'module.tx_form {
    settings {
        yamlConfigurations {
            321 = EXT:form_extended/Configuration/Yaml/FormSetup.yaml
        }
    }
}'
);