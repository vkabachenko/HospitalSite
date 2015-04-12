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
        /* @var $leftMenu LeftMenu */
        $leftMenu = LeftMenu::findOne(['controller' => $this->controller->id,
                                       'action' => $this->id,]);
        if ($leftMenu == null) {
            throw new HttpException(404);
        }

        /* @var $article Articles */
        $article = Articles::findOne(['id_menu' => $leftMenu->id]);

        if ($article == null) {
            throw new HttpException(404);
        }

        $title = $article->title ?: $leftMenu->title;
        $article = $article->article ?: 'Статья в подготовке';

        return $this->controller->render('//common/article',
                ['title' => $title,'article' => $article]);
    }

} 