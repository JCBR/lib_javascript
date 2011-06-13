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
        /*
         * @var      string
         */
        private $_name = 'DefaultName';
        
        /*
         * @var      string
         */        
        private $_value = 'DefaultValue';
        
        /*
         * @var      int
         * @note     Must be in seconds
         */
        private $_lifetime = 604800; //60 * 60 * 24 * 7, One week
        
        /*
         * Internal use. Do not touch
         */
        public function setName($name)
        {
            $this->_name = $name;
            return $this;
        }

        public function setValue($value)
        {
            $this->_value = $value;
            return $this;
        }
        
        public function setLifetime($lifetime)
        {
            $this->_lifetime = $value;
            return $this;
        }
        
       
        /*
         * @todo: mais tarde melhorar isso /fititnt em 2011/06/03
         * Tip: remember to set expires and path even, or some browsers will ignore the cookie
         */
        public function setCookie()
        {            
            $javascript = 'document.cookie = "'
                    . $this->_name .'='
                    .$this->_value.'; expires = 25/01/2012 00:00:00; path = /; /*domain=domain;*/"';	
            
            $result = JCBRCookie::setJavascript($javascript);            
            return $result;
        }
        
        public function delCookie()
        {
            $javascript = 'document.cookie = "'.$this->_name.'= 0; expires=25/01/2005 00:00:00; path = /; /*domain=domain;*/"';
            setJavascript($javascript);
            
            $result = JCBRCookie::setJavascript($javascript);            
            return $result;
        }
        
        /*
         * @note        Not implementet yet.
         */
        public function read( ){		
            return true;
        }
        
        /*
         * @note        Internal use. Do not touch
         */
        
        private function setJavascript($javascript)
        {            
            $document =& JFactory::getDocument();
            $document->addScriptDeclaration( $javascript );            
            return true;
        }
}