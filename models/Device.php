<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "device".
 *
 * @property int $id
 * @property string $hardware_address
 * @property string $ip_address
 * @property int $is_active
 * @property string $device_type
 * @property int $created_by
 * @property int $updated_by
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Staff[] $staff
 */
class Device extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'device';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['hardware_address', 'is_active', 'device_type', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'required'],
            [['is_active', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['hardware_address', 'ip_address', 'device_type'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'hardware_address' => Yii::t('app', 'Hardware Address'),
            'ip_address' => Yii::t('app', 'Ip Address'),
            'is_active' => Yii::t('app', 'Is Active'),
            'device_type' => Yii::t('app', 'Device Type'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasMany(Staff::className(), ['device_id' => 'id']);
    }
}
