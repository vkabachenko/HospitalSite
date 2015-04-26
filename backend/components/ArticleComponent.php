<?php



namespace backend\components;

use yii\base\Component;
use common\models\Articles;
use Yii;
use yii\helpers\ArrayHelper;

class ArticleComponent extends Component {

    public function getArticles()
    {
        $articles = Articles::find()->select(['id','title','id_menu'])
                    ->with('idMenu')->asArray()->all();

        foreach($articles as $index => $article) {
            $articles[$index]['title'] = $article['title'] ?: $article['idMenu']['title'];
        }

        ArrayHelper::multisort($articles,'title');

        $items = [];
        foreach ($articles as $article) {
            $items[] = [
                'label' => $article['title'],
                'url' => ['site/article','id' => $article['id'], 'title' => $article['title']],
            ];
        }
        return $items;
    }




}