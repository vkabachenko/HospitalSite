<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property integer $id
 * @property integer $id_menu
 * @property string $title
 * @property string $article
 *
 * @property LeftMenu $idMenu
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_menu'], 'required'],
            [['id_menu'], 'integer'],
            [['article'], 'string'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_menu' => 'Id Menu',
            'title' => 'Title',
            'article' => 'Article',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMenu()
    {
        return $this->hasOne(LeftMenu::className(), ['id' => 'id_menu']);
    }
}
