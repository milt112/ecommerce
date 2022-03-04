<?php

use yii\db\Migration;

/**
 * Class m220301_060546_add_amount_to_order_product
 */
class m220301_060546_add_amount_to_order_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up(){
        $this->addColumn('order_product', 'amount', $this->integer());
    }

    public function down(){
        $this->dropColumn('order_product', 'amount');
    }
}
