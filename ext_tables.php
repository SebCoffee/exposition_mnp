<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('exposition_mnp', 'Configuration/TypoScript', 'exposition_mnp');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_expositionmnp_domain_model_lieu', 'EXT:exposition_mnp/Resources/Private/Language/locallang_csh_tx_expositionmnp_domain_model_lieu.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_expositionmnp_domain_model_lieu');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_expositionmnp_domain_model_oeuvres', 'EXT:exposition_mnp/Resources/Private/Language/locallang_csh_tx_expositionmnp_domain_model_oeuvres.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_expositionmnp_domain_model_oeuvres');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_expositionmnp_domain_model_artiste', 'EXT:exposition_mnp/Resources/Private/Language/locallang_csh_tx_expositionmnp_domain_model_artiste.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_expositionmnp_domain_model_artiste');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_expositionmnp_domain_model_exposition', 'EXT:exposition_mnp/Resources/Private/Language/locallang_csh_tx_expositionmnp_domain_model_exposition.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_expositionmnp_domain_model_exposition');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_expositionmnp_domain_model_nationalite', 'EXT:exposition_mnp/Resources/Private/Language/locallang_csh_tx_expositionmnp_domain_model_nationalite.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_expositionmnp_domain_model_nationalite');

    }
);
