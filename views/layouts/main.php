<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?/*= Html::csrfMetaTags() */?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body id="minovate" class="appWrapper">
<?php $this->beginBody() ?>

<div class="wrap"  id="wrap">
    <section id="header">
        <header class="clearfix">

            <!-- Branding -->
            <div class="branding">

                <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Branding end -->

        </header>

    </section>

    <div id="controls">
        <?php if(!Yii::$app->user->isGuest){

         ?>
        <aside id="sidebar" class="sidebar-div">
            <div id="sidebar-wrap">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="profile" aria-controls="home">Profile</a></li>
                    <li role="presentation"><a href="admin" aria-controls="users">Users</a></li>
                    <li role="presentation"><a href="account" aria-controls="account" >Account</a></li>
                    <li role="presentation"><a href="add" aria-controls="category" >Category</a>
                    </li>
                </ul>
            </div>

        </aside>
        <?php } ?>

    <section id="content" class="content-area">

        <div class="page page-dashboard">
            <div class="page-header">

                <?= $content ?>
            </div>
        </div>

    </section>
    </div>
</div>
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => '#',
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [

            Yii::$app->user->isGuest ?
                ['label' => 'Login', 'url' => ['/index.php/user/login']] : // or ['/user/login-email']
                ['label' => 'Logout (' . Yii::$app->user->displayName . ')',
                    'url' => ['/index.php/user/logout'],
                    'linkOptions' => ['data-method' => 'post']],

        ],
    ]);
    NavBar::end();
    ?>


<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
