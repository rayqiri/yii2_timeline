<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property integer $id
 * @property string $task
 * @property string $duein
 * @property string $importance
 * @property string $clarity
 * @property string $effort
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['task', 'duein', 'importance', 'clarity', 'effort'], 'required'],
            [['task', 'duein', 'importance', 'clarity', 'effort'], 'string'],
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
            'duein' => 'Due in',
            'importance' => 'Importance',
            'clarity' => 'Clarity',
            'effort' => 'Effort',
            'priority' => 'Priority',
            'unpriority' => 'Unpriority',
        ];
    }
    public function getDuein() {
   return array('0' => 'This Week', '1' => 'Not This Week');
}
public function getPerformance() {
   return array('1' => 'Low', '2' => 'Medium','3'=>'High');
}
public function getEffort() {
   return array('1' => 'Low', '2' => 'Medium','3'=>'High');
}
public function getClarity() {
   return array('0' => 'Not Clear', '1' => 'Somewhat Clear','3'=>'Clear');
}
}
