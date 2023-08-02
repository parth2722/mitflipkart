<?php

use yii\db\Migration;

/**
 * Class m230802_075214_seeder
 */
class m230802_075214_seeder extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('user', [
            'username' => 'john_doe',
            'email' => 'john@example.com',
            'password_hash' => Yii::$app->security->generatePasswordHash('password'),
            'created_at' => time(),
            'updated_at' => time(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('{{%user}}');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230802_075214_seeder cannot be reverted.\n";

        return false;
    }
    */
}
