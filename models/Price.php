<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "price".
 *
 * @property int $id
 * @property int $drink_id
 * @property int $sale_unit
 * @property int $sale_package
 * @property int $purchase_unit
 * @property int $purchase_package
 * @property int $created_by
 * @property int $updated_by
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Drink $drink
 */
class Price extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'price';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['drink_id', 'sale_unit', 'sale_package', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'required'],
            [['drink_id', 'sale_unit', 'sale_package', 'purchase_unit', 'purchase_package', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['drink_id'], 'exist', 'skipOnError' => true, 'targetClass' => Drink::className(), 'targetAttribute' => ['drink_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'drink_id' => Yii::t('app', 'Drink ID'),
            'sale_unit' => Yii::t('app', 'Sale Unit'),
            'sale_package' => Yii::t('app', 'Sale Package'),
            'purchase_unit' => Yii::t('app', 'Purchase Unit'),
            'purchase_package' => Yii::t('app', 'Purchase Package'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDrink()
    {
        return $this->hasOne(Drink::className(), ['id' => 'drink_id']);
    }
}
