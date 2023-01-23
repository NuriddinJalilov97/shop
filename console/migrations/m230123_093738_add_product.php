<?php

use yii\db\Migration;

/**
 * Class m230123_093738_add_product
 */
class m230123_093738_add_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'category_id'=> $this->integer(),
            'name' => $this->string()->notNull(),
            'content' => $this->text(),
            'price' => $this->double(),
            'keywords' => $this->string(),
            'description' => $this->string(),
            'img' => $this->string(),
            'hit' => $this->integer()->defaultValue(0),
            'new' => $this->integer()->defaultValue(0),
            'status' => $this->integer(),
        ]);

        $this->addForeignKey('fk-product-to-category', 'product', 'category_id', 'category', 'id');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230123_093738_add_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230123_093738_add_product cannot be reverted.\n";

        return false;
    }
    */
}
