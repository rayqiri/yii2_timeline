<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "timeline".
 *
 * @property integer $id
 * @property string $title
 * @property string $tgl
 * @property string $item
 */
class Timeline extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'timeline';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'tgl', 'item'], 'required'],
            [['tgl'], 'safe'],
            [['item'], 'string'],
            [['title'], 'string', 'max' => 30],
            [['tgl'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'tgl' => 'Date',
            'item' => 'Item',
        ];
    }
}
