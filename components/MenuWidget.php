<?php
namespace app\components;
use yii\base\Widget;

/**
 *
 */
class MenuWidget extends Widget
{
	public $tpl;
	public function init()
	{
		parent::init();
		if ($this->tpl === null || $this->tpl === false) {
			$this->tpl = 'menu';
		}
		$this->tpl.='.php';
	}

	function run()
	{
		return $this->tpl;
	}
}
 ?>