<?php

use yii\db\Migration;

/**
 * Class m230123_090711_add_category
 */
class m230123_090711_add_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(),
            'name' => $this->string()->notNull(),
            'keywords' => $this->string(),
            'description' => $this->string()
        ]);

        $this->addForeignKey('fk-category-to-category', 'category', 'parent_id', 'category', 'id');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230123_090711_add_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230123_090711_add_category cannot be reverted.\n";

        return false;
    }
    */
}
