<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "newtask".
 *
 * @property integer $id
 * @property string $task
 * @property string $duein
 * @property string $importance
 * @property string $clarity
 * @property string $effort
 */
class Newtask extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'newtask';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['task', 'duein', 'importance', 'clarity', 'effort'], 'required'],
            [['task'], 'string', 'max' => 100],
            [['duein', 'importance', 'clarity', 'effort'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'task' => 'Task',
            'duein' => 'Duein',
            'importance' => 'Importance',
            'clarity' => 'Clarity',
            'effort' => 'Effort',
        ];
    }
}
