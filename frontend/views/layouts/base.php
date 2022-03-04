<?php
/**
 * @var yii\web\View $this
 * @var string $content
 */

use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use frontend\assets\FrontendAsset;
use yii\helpers\Html;
use yii\helpers\Url;

FrontendAsset::register($this);
$this->beginContent('@frontend/views/layouts/_clear.php')
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrapper">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <?= Html::a('E-Commerce', Url::toRoute('site/index'), ['class' => 'navbar-brand','title' => 'E-commerce']) ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item">
                            <?= Html::a('Home', Url::toRoute('site/index'), ['class' => 'nav-link active', 'title' => "Home"]) ?>    
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">2</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5">
            <div class="container">
                <div class="carousel slide" id="slide">
                    <ol class="carousel-indicators">
                        <li data-slide-to="0" data-target="#slide" class="active">
                        </li>
                        <li data-slide-to="1" data-target="#slide">
                        </li>
                        <li data-slide-to="2" data-target="#slide">
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" alt="Carousel Bootstrap First" src="https://www.layoutit.com/img/sports-q-c-1600-500-1.jpg" />
                            <div class="carousel-caption">
                                <h4>
                                    First Thumbnail label
                                </h4>
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap Second" src="https://www.layoutit.com/img/sports-q-c-1600-500-2.jpg" />
                            <div class="carousel-caption">
                                <h4>
                                    Second Thumbnail label
                                </h4>
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap Third" src="https://www.layoutit.com/img/sports-q-c-1600-500-3.jpg" />
                            <div class="carousel-caption">
                                <h4>
                                    Third Thumbnail label
                                </h4>
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                            </div>
                        </div>
                    </div> <a class="carousel-control-prev" href="#slide" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#slide" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                </div>
            </div>
        </header>
        
    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<?php $this->endContent() ?>