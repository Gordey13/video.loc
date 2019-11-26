<?php


namespace app\components;
use app\models\Category;
use yii\base\Widget;

class CategoryWidget extends Widget
{

    public function run()
    {
        $html = \Yii::$app->cache->get('category');
        if(!$html)
        {
            $cats = Category::find()->orderBy('name')->asArray()->all();
            $html = $this->render('index', compact('cats'));
            \Yii::$app->cache->set('category', $html, 15);
        }
            return $html;

    }

}