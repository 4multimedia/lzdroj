<?php

class Routing extends CBehavior
{
        public function attach($owner)
        {
                // set the event callback
                $owner->attachEventHandler('onBeginRequest', array($this, 'beginRequest'));
        }

        /**
         * This method is attached to the 'onBeginRequest' event above.
         **/
        public function beginRequest(CEvent $event)
        {
        	$url = Yii::app()->request->url;
        	if (substr($url, 0, 1) == "/") { $url = substr($url, 1, strlen($url)); }
        	
        	$params = explode("/", $url);
        	if (LanguagesData::model()->findData($params[0], "products", "1", "alias", "value", "record_id"))
			{
        		$rule = array('<alias:'.$params[0].'>' => 'products/categories');
				$urlManager = Yii::app()->getUrlManager();
				$urlManager->addRules($rule);
			}
        }
}

?>
