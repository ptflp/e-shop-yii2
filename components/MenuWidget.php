<?php
namespace app\components;
use yii\base\Widget;
use app\models\Category;

/**
 *
 */
class MenuWidget extends Widget
{
	public $tpl;
	public $data;
	public $tree;
	public $menuHtml;

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
		$this->data=Category::find()->indexBy('id')->asArray()->all();
		dump($this->data);
		return $this->tpl;
	}
}
 ?>