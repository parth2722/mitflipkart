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

    public $image;

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
            // [['image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
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
            'image' => 'Image',
            
        ];
    }
       public function upload()
    {
        if ($this->validate()) {
            $fileName = 'your_unique_prefix_' . time() . '.' . $this->imageFile->extension;
            $this->imageFile->saveAs('/home/parth/Downloads' . $fileName);
            
            // Save the file name to the database
            $this->image = $fileName;
            return $this->save(false);
        } else {
            return false;
        }
    }
}
