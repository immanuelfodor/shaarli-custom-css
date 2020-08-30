<?php

/**
 * Shaarli Custom CSS Plugin
 *
 * @author Immánuel Fodor 
 * @link https://fodor.it
 */

use Shaarli\Plugin\PluginManager;
use Shaarli\Config\ConfigManager;

/**
 * Hook render_includes.
 * Executed on every page render.
 *
 * Template placeholders:
 *   - css_files
 *
 * Data:
 *   - _PAGE_: current page
 *   - _LOGGEDIN_: true/false
 * 
 * @see https://shaarli.readthedocs.io/en/master/Plugin-System/#render_includes
 *
 * @param array $data - data passed to plugin
 * @param ConfigManager $conf - configmanager instance
 *
 * @return array altered $data
 */
function hook_custom_css_render_includes($data, $conf)
{
    $customCss = $conf->get('resource.data_dir') . '/custom_css.css';

    if (file_exists($customCss)) {
        $data['css_files'][] = $customCss;
    }

    return $data;
}

/**
 * When plugin parameters are saved.
 * 
 * @see https://shaarli.readthedocs.io/en/master/Plugin-System/#save_plugin_parameters
 *
 * @param array $data - $_POST array
 * @param ConfigManager $conf - configmanager instance
 *
 * @return array Updated $_POST array
 */
function hook_custom_css_save_plugin_parameters($data, $conf)
{
    $customCss = '';

    if (!empty($data['CUSTOM_CSS'])) {
        $customCss = $data['CUSTOM_CSS'];
    }

    file_put_contents($conf->get('resource.data_dir') . '/custom_css.css', $customCss);

    return $data;
}


/**
 * This function is never called, but contains translation calls for GNU gettext extraction.
 */
function custom_css_dummy_translation()
{
    // meta
    t('Customizer plugin to add your own CSS rules to the header of every page.');
    t('Your CSS as one huge line. Default empty');
}
