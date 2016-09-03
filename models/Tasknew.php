<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tasknew".
 *
 * @property integer $id
 * @property string $task
 * @property integer $duein
 * @property integer $importance
 * @property integer $clarity
 * @property integer $effort
 */
class Tasknew extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tasknew';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['task', 'duein', 'importance', 'clarity', 'effort'], 'required'],
            [['duein', 'importance', 'clarity', 'effort'], 'integer'],
            [['task'], 'string', 'max' => 50],
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
            'priority' => 'Priority',
        ];
    }
}
