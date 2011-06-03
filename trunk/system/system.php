<?php
/*
 * @version
 * @package         LIBJavascript.Framework
 * @author          Joomla! Coders Brazil - @JCoderBR
 * @copyright       Copyright (C) Joomla! Coders Brazil
 * @license         JCoderBR License
 */
defined('LIB_JAVASCRIPT_PATH') or die('Restricted access');

class JCBRSystem
{

	public function __construct()
	{
		
	}
    
        /*
         * 
         * http://developers.facebook.com/docs/reference/plugins/comments
        */

        public static function tweetthis($mostra_na_pagina_inicial = FALSE, $url = NULL, $twitter_username = '', $text = NULL, $related = '', $count = 'vertical' ){
	
            //@todo: implementar $mostra_na_pagina_inicial	
            if ($url == NULL){$url = JURI::current(); }
            if ($text == NULL){
                    $document =& JFactory::getDocument();
                    $pagetitle = $document->getTitle();
                    $text = $pagetitle;
            }
	
            $twitter_tweetthis = '<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
            <div>
               <a href="http://twitter.com/share" class="twitter-share-button"
                  data-url="'.$url.'"
                  data-via="'.$twitter_username.'"
                  data-text="'.$text.'"
                  data-related="'.$related.'"
                  data-count="'.$count.'">Tweet</a>
            </div>';
	
	
	return $twitter_tweetthis;
        }
}
        

        
        
