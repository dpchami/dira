<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "purchase".
 *
 * @property int $id
 * @property int $drink_id
 * @property int $quantity
 * @property int $amount
 * @property string $receipt
 * @property int $supplier_id
 * @property string $reference
 * @property int $purchase_date
 * @property string $confirmed_by
 * @property int $created_by
 * @property int $updated_by
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Drink $drink
 * @property Supplier $supplier
 */
class Purchase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'purchase';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['drink_id', 'quantity', 'amount', 'receipt', 'supplier_id', 'purchase_date', 'confirmed_by', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'required'],
            [['drink_id', 'quantity', 'amount', 'supplier_id', 'purchase_date', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['receipt', 'reference', 'confirmed_by'], 'string', 'max' => 100],
            [['drink_id'], 'exist', 'skipOnError' => true, 'targetClass' => Drink::className(), 'targetAttribute' => ['drink_id' => 'id']],
            [['supplier_id'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::className(), 'targetAttribute' => ['supplier_id' => 'id']],
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
            'quantity' => Yii::t('app', 'Quantity'),
            'amount' => Yii::t('app', 'Amount'),
            'receipt' => Yii::t('app', 'Receipt'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
            'reference' => Yii::t('app', 'Reference'),
            'purchase_date' => Yii::t('app', 'Purchase Date'),
            'confirmed_by' => Yii::t('app', 'Confirmed By'),
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(Supplier::className(), ['id' => 'supplier_id']);
    }
}
