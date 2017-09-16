<?php

use app\models\User;
use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m170915_155357_create_user_table extends Migration
{
    const TABLE_NAME = '{{%user}}';

    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = $this->db->driverName === 'mysql' ? 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB' : null;

        $this->createTable(self::TABLE_NAME, [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->insert(self::TABLE_NAME, [
            'id' => 1,
            'username' => 'webmaster',
            'auth_key' => Yii::$app->getSecurity()->generateRandomString(),
            'password_hash' => Yii::$app->getSecurity()->generatePasswordHash('webmaster'),
            'password_reset_token' => Yii::$app->getSecurity()->generateRandomString(40),
            'email' => 'webmaster@example.com',

            'status' => User::STATUS_ACTIVE,
            'created_at' => time(),
            'updated_at' => time()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
