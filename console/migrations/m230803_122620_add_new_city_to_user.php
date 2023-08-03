<?php

use yii\db\Migration;

/**
 * Class m230803_122620_add_new_city_to_user
 */
class m230803_122620_add_new_city_to_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'number', $this->integer(200)->defaultValue(1));
        $this->addColumn('user', 'country', $this->string(50)->defaultValue(1));
        $this->addColumn('user', 'city', $this->string(50)->defaultValue(1));
        $this->addColumn('user', 'address', $this->string(200)->defaultValue(1));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230803_122620_add_new_city_to_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230803_122620_add_new_city_to_user cannot be reverted.\n";

        return false;
    }
    */
}
