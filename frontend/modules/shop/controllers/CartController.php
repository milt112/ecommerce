<?php

namespace frontend\modules\shop\controllers;
use Yii;
use common\models\Product;

class CartController extends \yii\web\Controller
{
    public $totalItems = 0;
    public $totalPrice = 0.00;
    public function actionAdd($id = null)
    {
        if(!intval($id) || empty($id)) {
            Yii::$app->session->setFlash('error');
            return $this->redirect(['/shop']);
        }
        if(!isset(Yii::$app->session['cart'])) {
            Yii::$app->session['cart'] = [];
            Yii::$app->session['total_items'] = 0;
            Yii::$app->session['total_price'] = 0.00;
        }
        $this->addtocart($id);
        $this->setTotal();

        return $this->redirect(['index']);
    }

    public function addtocart($id) {
        if(isset(Yii::$app->session['cart'][$id])) {
            $session = Yii::$app->session['cart'];
            $session[$id] = $session[$id] += 1;
            Yii::$app->session['cart'] = $session;
        } else {
            $session = Yii::$app->session['cart'];
            $session[$id] = 1;
            Yii::$app->session['cart'] = $session;
        }
    }

    public function setTotal(){
        Yii::$app->session['total_items'] = $this->totalItems(Yii::$app->session['cart']);
        Yii::$app->session['total_price'] = $this->totalPrice(Yii::$app->session['cart']);

        $this->totalItems = Yii::$app->session['total_items'];
        $this->totalPrice = Yii::$app->session['total_price'];
    }

    public function totalItems($cart) {
        $totalItems = 0;
        if(is_array($cart)) {
            foreach($cart as $id => $qty) {
                $totalItems += $qty;
            }
            return $totalItems;
        }
    }

    public function totalPrice($cart) {
        $sPrice = 0;
        if(is_array($cart)) {
            foreach($cart as $id => $qty) {
                $item = $this->findProduct($id);
                $sPrice += $item->price * $qty;
            }
            return $sPrice;
        }
    }

    public function findProduct($id) {
        return Product::findOne($id);
    }

    public function updateCart() {
        foreach(Yii::$app->session['cart'] as $id => $qty) {
            if (isset($_POST[$id])) {
                if($_POST[$id] == 0) {
                    $sesstion = Yii::$app->session['cart'];
                    unset($sesstion[$id]);
                    Yii::$app->session['cart'] = $sesstion;
                } else {
                    $cart = Yii::$app->session['cart'];
                    $cart[$id] = $_POST[$id];
                    Yii::$app->session['cart'] = $cart;
                }
            }
        }
    }

    public function actionIndex()
    {
        if(!isset(Yii::$app->session['cart']) || empty(Yii::$app->session['cart'])) {
            Yii::$app->session->setFlash('error', 'Empty cart');
            return $this->redirect(['/site/index']);
        }
        $this->updateCart();
        $this->setTotal();

        return $this->render('index', [
            'totalItems' => $this->totalItems,
            'totalPrice' => $this->totalPrice,
        ]);
    }

}
