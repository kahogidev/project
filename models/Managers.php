<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "managers".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $first_phone
 * @property string $email
 * @property string $position
 * @property int|null $status
 * @property string|null $images
 */
class Managers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'managers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'first_phone', 'email', 'position'], 'required'],
            [['status'], 'integer'],
            [['first_name', 'last_name', 'first_phone', 'email', 'position', 'images'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'first_phone' => 'First Phone',
            'email' => 'Email',
            'position' => 'Position',
            'status' => 'Status',
            'images' => 'Images',
        ];
    }
}
