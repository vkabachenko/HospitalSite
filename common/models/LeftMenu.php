<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "left_menu".
 *
 * @property integer $id
 * @property string $title
 * @property string $controller
 * @property string $action
 * @property integer $order
 *
 * @property TopMenu $controller0
 *
 * @property Articles $Article
 */
class LeftMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'left_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'controller', 'action', 'order'], 'required'],
            [['order'], 'integer'],
            [['title', 'controller', 'action'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'title' => 'Заголовок',
            'controller' => 'Контроллер',
            'order' => 'Очередность',
            'action' => 'Действие',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getController0()
    {
        return $this->hasOne(TopMenu::className(), ['controller' => 'controller']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticle()
    {
        return $this->hasOne(Articles::className(), ['id_menu' => 'id']);
    }

}
