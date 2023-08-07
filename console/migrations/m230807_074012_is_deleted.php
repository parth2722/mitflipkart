<?php

use yii\db\Migration;

/**
 * Class m230807_074012_is_deleted
 */
class m230807_074012_is_deleted extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('product', 'is_deleted', $this->integer(20)->defaultValue(0));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230807_074012_is_deleted cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230807_074012_is_deleted cannot be reverted.\n";

        return false;
    }
    */
}
