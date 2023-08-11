<?php

use yii\db\Migration;

/**
 * Class m230811_081309_addimage
 */
class m230811_081309_addimage extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%product}}', 'image', $this->string());
    }

    public function safeDown()
    {
        $this->dropColumn('{{%product}}', 'image');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230811_081309_addimage cannot be reverted.\n";

        return false;
    }
    */
}
