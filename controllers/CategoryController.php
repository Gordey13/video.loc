<?php


namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;
use yii\data\Pagination;
use yii\web\HttpException;

class CategoryController extends AppController
{
    public function actionView()
    {
        $id = Yii::$app->request->get('id');
        $category = Category::findOne($id);
        if(empty($category))
        {
            throw new HttpException(404, 'Пошел вон');
        }
        $query = Product::find()->select('id, video_title, submitted, yt_thumb')->where(['category' => $id])->orderBy('id');
//        $query = Product::find()->where(['category' => $id]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize'=>50, 'pageSizeParam' => false, 'forcePageParam'=>false]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
//        $this->setMeta($category->name, $category->keywords, $category->description);
        return $this->render('view', compact('posts', 'pages'));
    }

    public function actionIndex()
    {
        $popular = Product::find()->where(['>', 'site_views', 100000000])->limit(12)->all();
        $pets = Product::find()->where(['>', 'site_views', 100000])->andWhere(['category' => 1])->limit(12)->all();
        $entert = Product::find()->where(['>', 'site_views', 100000])->andWhere(['category' => 2])->limit(12)->all();
        $tech = Product::find()->where(['>', 'site_views', 100000])->andWhere(['category' => 3])->limit(12)->all();
        $music = Product::find()->where(['>', 'site_views', 100000])->andWhere(['category' => 4])->limit(12)->all();
        $cinema = Product::find()->where(['>', 'site_views', 100000])->andWhere(['category' => 5])->limit(12)->all();
        $game = Product::find()->where(['>', 'site_views', 100000])->andWhere(['category' => 6])->limit(12)->all();
        $comedy = Product::find()->where(['>', 'site_views', 100000])->andWhere(['category' => 7])->limit(12)->all();
        $engine = Product::find()->where(['>', 'site_views', 100000])->andWhere(['category' => 8])->limit(12)->all();
        $sport = Product::find()->where(['>', 'site_views', 100000])->andWhere(['category' => 9])->limit(12)->all();
        $style = Product::find()->where(['>', 'site_views', 100000])->andWhere(['category' => 10])->limit(12)->all();

        return $this->render('index',
            compact('pets', 'entert', 'tech', 'music', 'cinema', 'game', 'comedy', 'engine', 'sport', 'style', 'popular')
        );
    }

}