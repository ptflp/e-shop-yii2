<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
class Product extends Model
{
	public static function tableName()
	{
		return 'product';
	}
	public function getCategory()
	{
		return $this->hasOne(Category::className(),['id'=>'category_id']);
	}
}
