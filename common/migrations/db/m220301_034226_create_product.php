<?php

use yii\db\Migration;

/**
 * Class m220301_034226_create_product
 */
class m220301_034226_create_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'name' => $this->string(255)->notNull(),
            'description' => $this->text()->notNull(),
            'price' => $this->integer()->notNull(),
            //'image' => $this->string()->notNull(),
            'namepath' =>$this->string(),
            'created_by' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_by' => $this->integer(),
            'updated_at' => $this->integer(),

        ]);
        $this->createIndex(
            'idx-product-category_id',
            'product',
            'category_id'
        );
        $this->addForeignKey(
            'fk-product-category_id',
            'product',
            'category_id',
            'category',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-product-created_by',
            'product',
            'created_by'
        );
        $this->addForeignKey(
            'fk-product-created_by',
            'product',
            'created_by',
            'user',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-product-updated_by',
            'product',
            'updated_by'
        );
        $this->addForeignKey(
            'fk-product-updated_by',
            'product',
            'updated_by',
            'user',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropTable('product');
    }
    
}
