<?php

use yii\db\Migration;

/**
 * Class m220301_061220_add_status_to_order
 */
class m220301_061220_add_status_to_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    // Use up()/down() to run migration code without a transaction.
    public function up(){
        $this->addColumn('order', 'status', $this->integer()->notNull());
    }

    public function down(){
        $this->dropColumn('order', 'status');
    }

}
