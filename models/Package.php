<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "package".
 *
 * @property int $id
 * @property string $name
 * @property int $quantity
 * @property int $created_by
 * @property int $updated_by
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Drink[] $drinks
 * @property MainStock[] $mainStocks
 */
class Package extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'package';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'quantity', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'required'],
            [['quantity', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 45],
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
            'quantity' => Yii::t('app', 'Quantity'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDrinks()
    {
        return $this->hasMany(Drink::className(), ['package_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMainStocks()
    {
        return $this->hasMany(MainStock::className(), ['package_id' => 'id']);
    }
}
