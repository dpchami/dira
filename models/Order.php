<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int $waiter_id
 * @property int $drink_id
 * @property int $quantity
 * @property int $amount
 * @property int $status
 * @property int $is_paid
 * @property int $created_by
 * @property int $updated_by
 * @property int $created_at
 * @property int $updated_at
 *
 * @property ConfirmedOrder[] $confirmedOrders
 * @property Drink $drink
 * @property Staff $waiter
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['waiter_id', 'drink_id', 'quantity', 'amount', 'status', 'is_paid', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'required'],
            [['waiter_id', 'drink_id', 'quantity', 'amount', 'status', 'is_paid', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['drink_id'], 'exist', 'skipOnError' => true, 'targetClass' => Drink::className(), 'targetAttribute' => ['drink_id' => 'id']],
            [['waiter_id'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['waiter_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'waiter_id' => Yii::t('app', 'Waiter ID'),
            'drink_id' => Yii::t('app', 'Drink ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'amount' => Yii::t('app', 'Amount'),
            'status' => Yii::t('app', 'Status'),
            'is_paid' => Yii::t('app', 'Is Paid'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConfirmedOrders()
    {
        return $this->hasMany(ConfirmedOrder::className(), ['order_id' => 'id']);
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
    public function getWaiter()
    {
        return $this->hasOne(Staff::className(), ['user_id' => 'waiter_id']);
    }
}
