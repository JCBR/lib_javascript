<?php
/*
 * @version
 * @package         LIBJavascript.Framework
 * @author          Joomla! Coders Brazil - @JCoderBR
 * @copyright       Copyright (C) Joomla! Coders Brazil
 * @license         JCoderBR License
 */
defined('LIB_JAVASCRIPT') or die('Restricted access');
 
abstract class JUGRS
{

    public static $ajax = null;
	public static $system = null;

    

    /*
    * Return 
    * @since 
    */
    public static function getAjax()
	{
		if (!self::$ajax) {
			jimport('javascript.ajax.load');

			self::$ajax = LoadAjax::getInstance();
		}
		return self::$ajax;
	}
	
    /*
    * Return 
    * @since 
    */
    public static function getSystem()
	{
		if (!self::$system) {
			jimport('javascript.system.load');

			self::$system = LoadJavascript::getInstance();
		}
		return self::$system;
	}
	
}