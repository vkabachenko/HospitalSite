<?php

namespace common\models;

use kartik\tree\models\Tree;


class Structure extends Tree
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'structure';
    }

    public function rules()
    {
        return [
            [['name','collapsed','visible','content'], 'safe'],
        ];
    }

} 