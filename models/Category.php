<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
class Category extends ActiveRecord
{
	public static function tableName()
	{
		return 'category';
	}
	public function getProducts()
	{
		return $this->hasMany(Product::className(),['category_id'=>'id']);
	}
}
