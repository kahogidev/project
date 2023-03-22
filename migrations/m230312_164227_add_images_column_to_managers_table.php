<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%managers}}`.
 */
class m230312_164227_add_images_column_to_managers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('managers', 'images', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('managers', 'images');
    }
}
