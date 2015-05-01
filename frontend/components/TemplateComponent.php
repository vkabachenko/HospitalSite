<?php

/**
 * global variables to layout main in frontend
 */

namespace frontend\components;

use yii\base\Component;
use common\models\TopMenu;
use common\models\LeftMenu;
use Yii;

class TemplateComponent extends Component {

    /**
     * @var TopMenu[] $_topMenuItems
     */
    private $_topMenuItems;
    /**
     * @var LeftMenu[] $_leftMenuItems
     */
    private $_leftMenuItems;

    /**
     * @return array
     */
    public function getTopMenuItems()
    {
        $items = [];
        foreach ($this->_topMenuItems as $topMenuItem) {
            $items[] = [
                'label' => $topMenuItem->title,
                'url' => [$topMenuItem->controller.'/index'],
                'linkOptions' => [
                    'class' => 'topNavLink',
                ],
            ];
        }
        return $items;
    }


    /**
     * @return array
     */
    public function getLeftMenuItems()
    {
        $items = [];
        foreach ($this->_leftMenuItems as $leftMenuItem) {
            $items[] = [
                'label' => $leftMenuItem->title,
                'url' => [$leftMenuItem->controller.'/'.$leftMenuItem->action],
            ];
        }
        return $items;
    }

    /**
     *
     */
    public function setTopMenuItems()
    {
        $this->_topMenuItems = TopMenu::find()->orderBy('order')->all();
    }

    /**
     * @params string $controller
     */
    public function setLeftMenuItems($controller = null)
    {
        if (!$controller) {
            $controller = Yii::$app->controller->id;
        }

        $this->_leftMenuItems = LeftMenu::find()->where(['controller' => $controller])
                                ->orderBy('order')->all();
    }


    /**
     *
     */
    public function init()
    {
        $this->setTopMenuItems();
        $this->setLeftMenuItems();
    }


} 