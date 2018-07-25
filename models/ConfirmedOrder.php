<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "confirmed_order".
 *
 * @property int $id
 * @property int $order_id
 * @property int $counter_id
 * @property int $status
 * @property int $is_paid
 * @property string $reason
 * @property int $created_by
 * @property int $updated_by
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Order $order
 * @property Staff $counter
 */
class ConfirmedOrder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'confirmed_order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'counter_id', 'status', 'is_paid', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'required'],
            [['order_id', 'counter_id', 'status', 'is_paid', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['reason'], 'string', 'max' => 100],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['order_id' => 'id']],
            [['counter_id'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['counter_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'order_id' => Yii::t('app', 'Order ID'),
            'counter_id' => Yii::t('app', 'Counter ID'),
            'status' => Yii::t('app', 'Status'),
            'is_paid' => Yii::t('app', 'Is Paid'),
            'reason' => Yii::t('app', 'Reason'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCounter()
    {
        return $this->hasOne(Staff::className(), ['user_id' => 'counter_id']);
    }
}
