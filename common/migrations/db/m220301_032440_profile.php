<?php

use yii\db\Migration;

/**
 * Class m220301_032440_profile
 */
class m220301_032440_profile extends Migration
{
    /**
     * {@inheritdoc}
     */
   


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('profile', [
            'user_id' => $this->integer()->notNull(),
            'firstname' => $this->string(100),
            'lastname' => $this->string(100),
            'address' => $this->text(),
            'avatar' => $this->string(100)
        ]);
        $this->createIndex(
            'idx-profile-user_id',
            'profile',
            'user_id'
        );
        $this->addForeignKey(
            'fk-profile-user_id',
            'profile',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropTable('profile');
    }

}
