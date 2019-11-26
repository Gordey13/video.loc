<?php


namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;
use yii\web\HttpException;

class ProductController extends AppController
{
    public function actionView($id)
    {
        $id = Yii::$app->request->get('id', 'url');
        $product = Product::findOne($id);
        if(empty($product))
        {
            throw new HttpException(404, 'Пошел вон');
        }

        $comment = Product::findOne($id);

        return $this->render('view', compact('product'));
    }


}