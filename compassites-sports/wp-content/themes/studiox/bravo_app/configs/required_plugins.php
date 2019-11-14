<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 2/28/15
 * Time: 8:17 PM
 */


/**
 * List all required plugins for themes
 *
 * @see BravoRequiredPlugins::register_required_plugins();
 *
 *
 * */
$config['required_plugins'] = array(
    array(
        'name'     => 'Option Tree', // The plugin name.
        'slug'     => 'option-tree', // The plugin slug (typically the folder name).
        'required' => true, // If false, the plugin is only 'recommended' instead of required.
        'source'   =>  'http://www.themesindustry.com/plugins/option-tree.zip'
    ),
    array(
        'name'     => 'Contact Form 7',
        'slug'     => 'contact-form-7',
        'required' => true,
    ),
    array(
        'name'     => 'Visual Composer',
        'slug'     => 'js_composer',
        'required' => true,
        'source'   =>  'http://www.themesindustry.com/plugins/js_composer.zip'
    ),
    array(
        'name'     => 'cmsBlue Toolkit',
        'slug'     => 'cmsblue-toolkit',
        'required' => true,
        'source'   => ('http://www.themesindustry.com/plugins/cmsblue-toolkit1.1.4.zip')
    ),
    array(
        'name'     => 'Revolution Sliders',
        'slug'     => 'revslider',
        'required' => true,
        'source'   => 'http://www.themesindustry.com/plugins/revslider.zip'
    ),
);