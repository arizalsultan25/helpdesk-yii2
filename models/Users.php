<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property string $username
 * @property string $name
 * @property string $email
 * @property string $password
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'name', 'email', 'password'], 'required'],
            [['username', 'password'], 'string', 'max' => 16],
            [['name', 'email'], 'string', 'max' => 90],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
        ];
    }
}
