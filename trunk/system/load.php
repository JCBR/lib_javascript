<?php
/*
 * @version
 * @package         LIBJavascript.Framework
 * @author          Joomla! Coders Brazil - @JCoderBR
 * @copyright       Copyright (C) Joomla! Coders Brazil
 * @license         JCoderBR License
 */
defined('LIB_JAVASCRIPT') or die('Restricted access');

class LoadSystem
{

    public static function getInstance()
    {
        require_once dirname(__FILE__) . DS . 'twitter.php';
        $instance = new JCBRSystem;
        return $instance;
    }

}