<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "drink".
 *
 * @property int $id
 * @property string $name
 * @property string $logo
 * @property int $category_id
 * @property int $package_id
 * @property int $created_by
 * @property int $updated_by
 * @property int $created_at
 * @property int $updated_at
 *
 * @property DrinkCategory $category
 * @property Package $package
 * @property MainStock[] $mainStocks
 * @property Order[] $orders
 * @property Price[] $prices
 * @property ProgressStock[] $progressStocks
 * @property Purchase[] $purchases
 */
class Drink extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'drink';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'logo', 'category_id', 'package_id', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'required'],
            [['category_id', 'package_id', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 45],
            [['logo'], 'string', 'max' => 100],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => DrinkCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['package_id'], 'exist', 'skipOnError' => true, 'targetClass' => Package::className(), 'targetAttribute' => ['package_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'logo' => Yii::t('app', 'Logo'),
            'category_id' => Yii::t('app', 'Category ID'),
            'package_id' => Yii::t('app', 'Package ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(DrinkCategory::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPackage()
    {
        return $this->hasOne(Package::className(), ['id' => 'package_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMainStocks()
    {
        return $this->hasMany(MainStock::className(), ['drink_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['drink_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrices()
    {
        return $this->hasMany(Price::className(), ['drink_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgressStocks()
    {
        return $this->hasMany(ProgressStock::className(), ['drink_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPurchases()
    {
        return $this->hasMany(Purchase::className(), ['drink_id' => 'id']);
    }
}
