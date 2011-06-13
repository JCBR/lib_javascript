<?php
/*
 * @version
 * @package         LIBJavascript.Framework
 * @author          Joomla! Coders Brazil - @JCoderBR
 * @copyright       Copyright (C) Joomla! Coders Brazil
 * @license         JCoderBR License
 */
defined('LIB_JAVASCRIPT_PATH') or die('Restricted access');

class JCBRCookie
{

	public function __construct()
	{
		
        }
        
        /*
         * @todo: mais tarde melhorar isso /fititnt em 2011/06/03
         * Tip: remember to set expires and path even, or some browsers will ignore the cookie
         */

        public static function set( $name, $value, $exdays = null ){
            
           
            $setcookie = 'document.cookie = "'.$name.'='.$value.'; expires=25/01/2012 00:00:00; path = /; /*domain=domain;*/"';
            
            $document =& JFactory::getDocument();
            $document->addScriptDeclaration($setcookie);
		
            return true;
        }
        
        public static function delete( $name ){
		
            
            $setcookie = 'document.cookie = "'.$name.'= 0; expires=25/01/2005 00:00:00; path = /; /*domain=domain;*/"';
            
            $document =& JFactory::getDocument();
            $document->addScriptDeclaration($setcookie);
            
            return true;
        }
        
        
        public static function read( ){
		
            return;
        }
        
        
        
}
        

        
        
