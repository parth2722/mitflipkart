<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $product_name
 * @property string $slug
 * @property float $price
 * @property string|null $sku
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_name', 'slug', 'price'], 'required'],
            [['price'], 'number'],
            [['product_name'], 'string', 'max' => 50],
            [['slug'], 'string', 'max' => 32],
            [['sku'], 'string', 'max' => 255],
            [['sku'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_name' => 'Product Name',
            'slug' => 'Slug',
            'price' => 'Price',
            'sku' => 'Sku',
        ];
    }
}
