<?php
namespace app\widgets;
use Yii;
use yii\base\widget;

class CurrencyWidget extends widget
{
	public function init()
	{
		parent::init();
	}
	
	public function run()
	{
		parent::run();
		 return $this->render('currency');
	}


}



?>