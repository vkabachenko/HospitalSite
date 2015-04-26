<?php

namespace frontend\actions;

use common\models\Articles;
use common\models\LeftMenu;
use yii\base\Action;
use yii\web\HttpException;

/**
 * Class ArticleAction
 * @package frontend\actions
 * Displays article in frontend action
 */
class ArticleAction  extends Action {

    /**
     * Runs the action
     *
     * @return string result content
     */
    public function run()
    {
        /* @var $currentMenu LeftMenu */
        $currentMenu = LeftMenu::getCurrentMenu($this->controller->id,$this->id);

        /* @var $article Articles */
        $article = Articles::findOne(['id_menu' => $currentMenu->id]);

        if ($article == null) {
            throw new HttpException(404);
        }

        $title = $article->title ?: $currentMenu->title;
        $article = $article->article ?: 'Статья в подготовке';

        return $this->controller->render('//common/article',
                ['title' => $title,'article' => $article]);
    }

} 