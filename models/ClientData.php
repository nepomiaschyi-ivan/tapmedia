<?php

namespace app\models;

use app\interfaces\IMessager;
use app\models\query\ClientDataQuery;
use app\interfaces\IFileManager;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%client_data}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property integer $created_at
 * @property integer $updated_at
 */
class ClientData extends ActiveRecord implements IMessager
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%client_data}}';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['name', 'email'], 'string', 'max' => 255],
            [['name', 'email'], 'required'],
            [['email'], 'email'],
            [['name', 'email'],'filter','filter'=>'\yii\helpers\HtmlPurifier::process'],
            ['name', 'match', 'pattern' => '/^[А-Яа-яЁё]{1,20}-?[А-Яа-яЁё]{1,20}$|^[a-zA-Z]{2,20}-?[a-zA-Z]{2,20}$/u', 'message' => 'Not valid name.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @inheritdoc
     * @return ClientDataQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ClientDataQuery(get_called_class());
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSubject()
    {
        return 'TapMedia Test';
    }

    public function getMessageBody()
    {
        return 'Лови файл';
    }

    public function getFile(IFileManager $fileManager)
    {
        return $fileManager->getFileByName('doc1.docx');
    }
}
