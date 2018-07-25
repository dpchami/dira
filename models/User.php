<?php

namespace app\models;

use Yii;
use Da\User\Model\User as BaseUser;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $mobile
 * @property string $name
 * @property int $role_id
 * @property int $merchant_id
 * @property string $location
 * @property string $auth_key
 * @property string $password_hash
 * @property int $is_active
 * @property int $created_by
 * @property int $updated_by
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Merchant[] $merchants
 * @property Merchant[] $merchants0
 * @property MerchantService[] $merchantServices
 * @property MerchantService[] $merchantServices0
 * @property Role[] $roles
 * @property Role[] $roles0
 * @property Service[] $services
 * @property Service[] $services0
 * @property User $createdBy
 * @property User[] $users
 * @property User $updatedBy
 * @property User[] $users0
 * @property Merchant $merchant
 * @property Role $role
 */
class User extends BaseUser
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mobile', 'name', 'role_id', 'merchant_id', 'location', 'auth_key', 'password_hash', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'required'],
            [['role_id', 'merchant_id', 'is_active', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['mobile'], 'string', 'max' => 50],
            [['name', 'location', 'password_hash'], 'string', 'max' => 100],
            [['auth_key'], 'string', 'max' => 32],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['updated_by' => 'id']],
            [['merchant_id'], 'exist', 'skipOnError' => true, 'targetClass' => Merchant::className(), 'targetAttribute' => ['merchant_id' => 'id']],
            [['role_id'], 'exist', 'skipOnError' => true, 'targetClass' => Role::className(), 'targetAttribute' => ['role_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'mobile' => Yii::t('app', 'Mobile'),
            'name' => Yii::t('app', 'Name'),
            'role_id' => Yii::t('app', 'Role ID'),
            'merchant_id' => Yii::t('app', 'Merchant ID'),
            'location' => Yii::t('app', 'Location'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'password_hash' => Yii::t('app', 'Password Hash'),
            'is_active' => Yii::t('app', 'Is Active'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMerchants()
    {
        return $this->hasMany(Merchant::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMerchants0()
    {
        return $this->hasMany(Merchant::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMerchantServices()
    {
        return $this->hasMany(MerchantService::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMerchantServices0()
    {
        return $this->hasMany(MerchantService::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoles()
    {
        return $this->hasMany(Role::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoles0()
    {
        return $this->hasMany(Role::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Service::className(), ['created_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices0()
    {
        return $this->hasMany(Service::className(), ['updated_by' => 'id']);
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
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['created_by' => 'id']);
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
    public function getUsers0()
    {
        return $this->hasMany(User::className(), ['updated_by' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMerchant()
    {
        return $this->hasOne(Merchant::className(), ['id' => 'merchant_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(Role::className(), ['id' => 'role_id']);
    }
}
