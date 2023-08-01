<?php

use yii\db\Migration;

/**
 * Class m230731_115112_product_seeder
 */
class m230731_115112_product_seeder extends Migration
{

    public function up()
    {
        // Table name
        $tableName = '{{%product}}';

        // Generate fake data using Faker
        $faker = Faker\Factory::create();

        // Clear existing data (optional)
        // $this->truncateTable($product);

        // Insert multiple rows
        $rows = [];
        for ($i = 0; $i < 10; $i++) {
            $rows[] = [
                'product_name' => $this->string(50)->notNull(),
                'slug' => $this->string(32)->notNull(),
                'price' => $this->float(10000)->notNull(),
                'sku' => $this->string()->unique(),
            ];
        }

        $this->batchInsert($tableName, ['product_name', 'slug', 'price', 'sku'], $rows);
    }

    public function down()
    {
        // Delete the data (optional)
        $this->delete('{{%user}}');
    }
}


