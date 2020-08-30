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
 * Injecting our CSS code to all page headers.
 * 
 * Hook render_header.
 * Executed on every page render.
 *
 * Template placeholders:
 *   - buttons_toolbar
 *   - fields_toolbar
 * 
 * @see https://shaarli.readthedocs.io/en/master/Plugin-System/#render_header
 *
 * @param array $data - data passed to plugin
 * @param ConfigManager $conf - configmanager instance
 *
 * @return array altered $data
 */
function hook_custom_css_render_header($data, $conf)
{
    $customCss = $conf->get('plugins.CUSTOM_CSS');

    $html = file_get_contents(PluginManager::$PLUGINS_PATH . '/custom_css/custom_css.html');
    $html = sprintf($html, $customCss);
    $data['buttons_toolbar'][] = $html;

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
