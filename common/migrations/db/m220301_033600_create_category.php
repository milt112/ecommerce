<?php

use yii\db\Migration;

/**
 * Class m220301_033600_create_category
 */
class m220301_033600_create_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name' => $this->string(200)->notNull(),
            'description' => $this->text()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('category');
    }
}
