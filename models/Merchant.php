<?php

namespace app\models;

use Yii;
use app\traits\Signature;
/**
 * This is the model class for table "merchant".
 *
 * @property int $id
 * @property string $name
 * @property string $database
 * @property string $logo
 * @property string $commercial_name
 * @property int $created_by
 * @property int $updated_by
 * @property int $created_at
 * @property int $updated_at
 * @property int $status
 *
 * @property User $createdBy
 * @property User $updatedBy
 * @property MerchantService[] $merchantServices
 * @property Service[] $services
 * @property User[] $users
 */
class Merchant extends \yii\db\ActiveRecord
{
    use Signature;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'merchant';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'database', 'logo'], 'required'],
            [['created_by', 'updated_by', 'created_at', 'updated_at', 'status'], 'integer'],
            [['name', 'database', 'logo'], 'string', 'max' => 100],
            [['commercial_name'], 'string', 'max' => 150],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['updated_by' => 'id']],
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
            'database' => Yii::t('app', 'Database'),
            'logo' => Yii::t('app', 'Logo'),
            'commercial_name' => Yii::t('app', 'Commercial Name'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'updated_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMerchantServices()
    {
        return $this->hasMany(MerchantService::className(), ['merchant_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Service::className(), ['id' => 'service_id'])->viaTable('merchant_service', ['merchant_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['merchant_id' => 'id']);
    }
}
