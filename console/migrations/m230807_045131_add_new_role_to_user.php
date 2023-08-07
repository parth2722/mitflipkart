<?php

use yii\db\Migration;

/**
 * Class m230807_045131_add_new_role_to_user
 */
class m230807_045131_add_new_role_to_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'role', $this->integer(200)->defaultValue(2));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230807_045131_add_new_role_to_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230807_045131_add_new_role_to_user cannot be reverted.\n";

        return false;
    }
    */
}
