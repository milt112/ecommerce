<?php

namespace frontend\modules\shop\controllers;

use common\models\Product;
use yii\httpclient\Exception;
use Yii;
use yii\data\ActiveDataProvider;
use yii\db\Expression;
class ProductController extends \yii\web\Controller
{
    public function actionDetail($id)
    {
        $model = $this->findModel($id);
        $related_product = new ActiveDataProvider([
            'query' => Product::find()->where(['category_id' => $model->category_id])->limit(4)->orderBy(new Expression('rand()')),
            'pagination' => false
        ]) ;
        return $this->render('detail', [
            'model' => $model,
            'related_product' => $related_product
        ]);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    protected function findModel($id) {
        $model = Product::findOne($id);
        if(!$model) {
            throw new Exception("Error request", 1);
        }
        return $model;
    }

}
