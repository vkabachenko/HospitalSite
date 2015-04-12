<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "top_menu".
 *
 * @property string $title
 * @property string $controller
 * @property integer $order
 *
 * @property LeftMenu[] $leftMenus
 */
class TopMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'top_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'controller', 'order'], 'required'],
            [['order'], 'integer'],
            [['title', 'controller'], 'string', 'max' => 30]
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLeftMenus()
    {
        return $this->hasMany(LeftMenu::className(), ['controller' => 'controller']);
    }
}
