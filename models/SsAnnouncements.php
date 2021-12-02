<?php

namespace humhub\modules\stepstone_announcements\models;

use Yii;

/**
 * This is the model class for table "ss_announcements".
 *
 * @property int $id
 * @property string $announcment_title
 * @property string|null $announcment
 * @property string|null $button_label
 * @property string|null $button
 * @property string $date_created
 * @property int|null $display
 */
class SsAnnouncements extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ss_announcements';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['announcment_title'], 'required'],
            [['announcment'], 'string'],
            [['date_created'], 'safe'],
            [['display'], 'integer'],
            [['announcment_title', 'button_label'], 'string', 'max' => 80],
            [['button'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'announcment_title' => 'Announcment Title',
            'announcment' => 'Announcment',
            'button_label' => 'Button Label',
            'button' => 'Button Link',
            'date_created' => 'Date Created',
            'display' => 'Display',
        ];
    }
}
