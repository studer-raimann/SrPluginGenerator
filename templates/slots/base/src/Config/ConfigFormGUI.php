<?php

namespace __NAMESPACE__\Config;

use il__PLUGIN_NAME__ConfigGUI;
use il__PLUGIN_NAME__Plugin;
use ilTextInputGUI;
use srag\CustomInputGUIs\__PLUGIN_NAME__\PropertyFormGUI\PropertyFormGUI;

/**
 * Class ConfigFormGUI__VERSION_COMMENT__
 *
 * @package __NAMESPACE__\Config
 *
 * __AUTHOR_COMMENT__
 */
class ConfigFormGUI extends PropertyFormGUI
{

    const PLUGIN_CLASS_NAME = il__PLUGIN_NAME__Plugin::class;
    const LANG_MODULE = il__PLUGIN_NAME__ConfigGUI::LANG_MODULE;


    /**
     * ConfigFormGUI constructor
     *
     * @param il__PLUGIN_NAME__ConfigGUI $parent
     */
    public function __construct(il__PLUGIN_NAME__ConfigGUI $parent)
    {
        parent::__construct($parent);
    }


    /**
     * @inheritDoc
     */
    protected function getValue(/*string*/ $key)
    {
        switch ($key) {
            default:
                return Config::getField($key);
        }
    }


    /**
     * @inheritDoc
     */
    protected function initCommands()/*: void*/
    {
        $this->addCommandButton(il__PLUGIN_NAME__ConfigGUI::CMD_UPDATE_CONFIGURE, $this->txt("save"));
    }


    /**
     * @inheritDoc
     */
    protected function initFields()/*: void*/
    {
        $this->fields = [
            Config::KEY_SOME => [
                self::PROPERTY_CLASS    => ilTextInputGUI::class,
                self::PROPERTY_REQUIRED => true
            ]
        ];
        // TODO: Implement ConfigFormGUI
    }


    /**
     * @inheritDoc
     */
    protected function initId()/*: void*/
    {

    }


    /**
     * @inheritDoc
     */
    protected function initTitle()/*: void*/
    {
        $this->setTitle($this->txt("configuration"));
    }


    /**
     * @inheritDoc
     */
    protected function storeValue(/*string*/ $key, $value)/*: void*/
    {
        switch ($key) {
            default:
                Config::setField($key, $value);
                break;
        }
    }
}
