    <?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "main_stock".
 *
 * @property int $id
 * @property int $drink_id
 * @property int $package_id
 * @property int $quantity
 * @property int $minstock
 * @property int $created_by
 * @property int $updated_by
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Drink $drink
 * @property Package $package
 */
class MainStock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'main_stock';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['drink_id', 'package_id', 'quantity', 'minstock', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'required'],
            [['drink_id', 'package_id', 'quantity', 'minstock', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['drink_id'], 'exist', 'skipOnError' => true, 'targetClass' => Drink::className(), 'targetAttribute' => ['drink_id' => 'id']],
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
            'drink_id' => Yii::t('app', 'Drink ID'),
            'package_id' => Yii::t('app', 'Package ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'minstock' => Yii::t('app', 'Minstock'),
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
    public function getPackage()
    {
        return $this->hasOne(Package::className(), ['id' => 'package_id']);
    }
}
