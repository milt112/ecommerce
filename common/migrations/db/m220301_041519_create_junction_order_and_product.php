<?php

use yii\db\Migration;

/**
 * Class m220301_041519_create_junction_order_and_product
 */
class m220301_041519_create_junction_order_and_product extends Migration
{
    /**
     * {@inheritdoc}
     */
        /**
         * {@inheritdoc}
         */
    public function up()
    {
        $this->createTable('order_product', [
            'order_id' => $this->integer(),
            'product_id' => $this->integer(),
            'price' => $this->integer()->notNull(),
            'PRIMARY KEY(order_id, product_id)',

        ]);
        $this->createIndex(
            'idx-product-order_id',
            'order_product',
            'order_id'
        );
        $this->addForeignKey(
            'fk-order_product-order_id',
            'order_product',
            'order_id',
            'order',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-order_product-product_id',
            'order_product',
            'product_id'
        );
        $this->addForeignKey(
            'fk-order_product-product_id',
            'order_product',
            'product_id',
            'product',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropForeignKey(
            'fk-order_product-order_id',
            'order_product'
        );

        $this->dropIndex(
            'idx-order_product-order_id',
            'order_product'
        );
        $this->dropForeignKey(
            'fk-order_product-product_id',
            'order_product'
        );

        $this->dropIndex(
            'idx-order_product-product_id',
            'order_product'
        );
        $this->dropTable('order_product');
    }
}
    
