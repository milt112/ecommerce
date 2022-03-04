<?php

use yii\db\Migration;

/**
 * Class m220301_035751_create_order
 */
class m220301_035751_create_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('order', [
            'id' => $this->primaryKey(),
            'order_date' => $this->integer()->notNull(),
            'address' => $this->text(),
            'user_id' => $this->integer(),
            'created_by' => $this->integer(),
            'created_at' => $this->integer(),

        ]);
    }

    public function down()
    {
        $this->dropTable('order');
    }
}
