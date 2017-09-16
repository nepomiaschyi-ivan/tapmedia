<?php

use yii\db\Migration;

/**
 * Handles the creation of table `client_data`.
 */
class m170915_160649_create_client_data_table extends Migration
{

    const TABLE_NAME = '{{%client_data}}';
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = $this->db->driverName === 'mysql' ? 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB' : null;

        $this->createTable(self::TABLE_NAME, [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'email' => $this->string(255),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11)
        ], $tableOptions);

        $this->insert(self::TABLE_NAME, [
            'id' => 1,
            'name' => 'Ivan',
            'email' => 'how.i.met.your.boobs@gmail.com',
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
