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
 *  
 */
class Product extends \yii\db\ActiveRecord
{
    const STATUS_DELETED = 1;
    const STATUS_ACTIVE = 0;

    public static function find()
    {
        return parent::find()->where(['is_deleted' => self::STATUS_ACTIVE]);
    }

    public function beforeDelete()
    {
        if (parent::beforeDelete()) {
            $this->is_deleted = self::STATUS_DELETED;
            $this->save(false); // Avoid validation as we're not changing other attributes
            return false;
        } else {
            return false;
        }
    }


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
