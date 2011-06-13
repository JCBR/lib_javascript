<?php
echo JText::_('MOD_JCBR_LIBJAVASCRIPT_TITLE');




jimport('javascript.javascript');
$cookie = &JCBR::getCookie();

//Old style
//$cookie->set('CookieJCBRText', '6');


//fluent Interface
$cookie->setName('MyExampleName')->setValue('MyExampleValue')->setCookie();
?>
