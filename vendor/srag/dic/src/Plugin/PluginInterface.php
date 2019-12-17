<?php

namespace srag\DIC\SrPluginGenerator\Plugin;

use ilPlugin;
use ilTemplate;
use ilTemplateException;
use srag\DIC\SrPluginGenerator\Exception\DICException;

/**
 * Interface PluginInterface
 *
 * @package srag\DIC\SrPluginGenerator\Plugin
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
interface PluginInterface
{

    /**
     * Get plugin directory
     *
     * @return string Plugin directory
     */
    public function directory() : string;


    /**
     * Get a template
     *
     * @param string $template                 Template path
     * @param bool   $remove_unknown_variables Should remove unknown variables?
     * @param bool   $remove_empty_blocks      Should remove empty blocks?
     * @param bool   $plugin                   Plugin template or ILIAS core template?
     *
     * @return ilTemplate ilTemplate instance
     *
     * @throws ilTemplateException
     */
    public function template(string $template, bool $remove_unknown_variables = true, bool $remove_empty_blocks = true, bool $plugin = true) : ilTemplate;


    /**
     * Translate text
     *
     * @param string $key          Language key
     * @param string $module       Language module
     * @param array  $placeholders Placeholders in your language texst to replace with vsprintf
     * @param bool   $plugin       Plugin language or ILIAS core language?
     * @param string $lang         Possibly specific language, otherwise current language, if empty
     * @param string $default      Default text, if language key not exists
     *
     * @return string Translated text
     *
     * @throws DICException Please use the placeholders feature and not direct `sprintf` or `vsprintf` in your code!
     * @throws DICException Please use only one placeholder in the default text for the key!
     */
    public function translate(string $key, string $module = "", array $placeholders = [], bool $plugin = true, string $lang = "", string $default = "MISSING %s") : string;


    /**
     * Get ILIAS plugin object instance
     *
     * Please avoid to use ILIAS plugin object instance and instead use methods in this class!
     *
     * @return ilPlugin ILIAS plugin object instance
     */
    public function getPluginObject() : ilPlugin;
}
