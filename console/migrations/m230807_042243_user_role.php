<?php

use yii\db\Migration;

/**
 * Class m230807_042243_user_role
 */
class m230807_042243_user_role extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_role}}', [
            'id' => $this->primaryKey(),
            'role_name' => $this->string(50)->notNull(),
            'access' => $this->string(32)->notNull(),
            'created_at' => $this->timestamp()->defaultValue(null),
            'update_at' => $this->timestamp()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230807_042243_user_role cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230807_042243_user_role cannot be reverted.\n";

        return false;
    }
    */
}
