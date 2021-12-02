<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ss_announcements}}`.
 */
class m211202_204023_create_ss_announcements_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ss_announcements}}', [
            'id' => $this->primaryKey(),
            'announcment_title' => $this->string(80),
            'announcment' => $this->text(),
            'button_label' => $this->string(80),
            'button' => $this->string(255),
            'date_created' => $this->timestamp(),
            'display' => $this->integer()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ss_announcements}}');
    }
}
