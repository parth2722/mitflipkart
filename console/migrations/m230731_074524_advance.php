<?php

use yii\db\Migration;

/**
 * Class m230731_074524_advance
 */
class m230731_074524_advance extends Migration
{
    public function up()
    {
        $this->addColumn('{{%product}}', 'verification_token', $this->string()->defaultValue(null));
    }

    public function down()
    {
        $this->dropColumn('{{%product}}', 'verification_token');
    }
}
