<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Mnp.ExpositionMnp',
            'P1',
            [
                'Artiste' => 'list, show, search',
                'Oeuvres' => 'list, show, highlight',
                'Exposition' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Artiste' => 'search'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    p1 {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('exposition_mnp') . 'Resources/Public/Icons/user_plugin_p1.svg
                        title = LLL:EXT:exposition_mnp/Resources/Private/Language/locallang_db.xlf:tx_exposition_mnp_domain_model_p1
                        description = LLL:EXT:exposition_mnp/Resources/Private/Language/locallang_db.xlf:tx_exposition_mnp_domain_model_p1.description
                        tt_content_defValues {
                            CType = list
                            list_type = expositionmnp_p1
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);
