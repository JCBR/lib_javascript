<?php
/*
 * @version
 * @package         LIBJavascript.Framework
 * @author          Joomla! Coders Brazil - @JCoderBR
 * @copyright       Copyright (C) Joomla! Coders Brazil
 * @license         JCoderBR License
 */
defined('LIB_JAVASCRIPT_PATH') or die('Restricted access');

class LoadCookie
{

    public static function getInstance()
    {
        require_once dirname(__FILE__) . DS . 'cookie.php';
        $instance = new JCBRCookie;
        return $instance;
    }

}