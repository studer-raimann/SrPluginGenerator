<?php

namespace __NAMESPACE__\Config;

use __NAMESPACE__\Utils\__PLUGIN_NAME__Trait;
use il__PLUGIN_NAME__Plugin;
use srag\ActiveRecordConfig\__PLUGIN_NAME__\Config\AbstractFactory;

/**
 * Class Factory__VERSION_COMMENT__
 *
 * @package __NAMESPACE__\Config
 *
 * __AUTHOR_COMMENT__
 */
final class Factory extends AbstractFactory
{

    use __PLUGIN_NAME__Trait;
    const PLUGIN_CLASS_NAME = il__PLUGIN_NAME__Plugin::class;
    /**
     * @var self|null
     */
    protected static $instance = null;


    /**
     * @return self
     */
    public static function getInstance() : self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    /**
     * Factory constructor
     */
    protected function __construct()
    {
        parent::__construct();
    }


    /**
     * @param ConfigCtrl $parent
     *
     * @return ConfigFormGUI
     */
    public function newFormInstance(ConfigCtrl $parent) : ConfigFormGUI
    {
        $form = new ConfigFormGUI($parent);

        return $form;
    }
}
