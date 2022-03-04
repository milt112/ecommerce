<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int $order_date
 * @property string|null $address
 * @property int $user_id
 * @property int $created_by
 * @property int $created_at
 * @property int $status
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
            [['order_date', 'user_id', 'created_by', 'created_at', 'status'], 'required'],
            [['order_date', 'user_id', 'created_by', 'created_at', 'status'], 'integer'],
            [['address'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_date' => 'Order Date',
            'address' => 'Address',
            'user_id' => 'User ID',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'status' => 'Status',
        ];
    }
}
