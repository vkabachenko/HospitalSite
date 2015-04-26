<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "jobs".
 *
 * @property integer $id
 * @property integer $speciality
 * @property string $position
 * @property string $comment
 * @property integer $quantity
 * @property string $salary
 * @property string $requirement
 * @property string $education
 * @property string $created_at
 * @property string $updated_at
 */
class Jobs extends \yii\db\ActiveRecord
{
    public static  $specialities = [
        1 => 'Врачи',
        2 => 'Средний медперсонал',
        3 => 'Младший медперсонал',
        4 => 'Прочий персонал',
    ];

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'value' => new Expression('CURDATE()'),
            ],
        ];
    }


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jobs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['speciality', 'quantity'], 'integer'],
            [['position'], 'required'],
            [['comment'], 'string'],
            [['position', 'requirement', 'education'], 'string', 'max' => 50],
            [['salary'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'speciality' => 'Тип вакансии',
            'position' => 'Должность',
            'comment' => 'Дополнения',
            'quantity' => 'Ставок',
            'salary' => 'Зарплата',
            'requirement' => 'Требования',
            'education' => 'Образование',
        ];
    }

}
