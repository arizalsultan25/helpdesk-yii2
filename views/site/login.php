<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4;

?>

<!-- Header Section -->
<header class="header-section">
    <a href="index.php" class="site-logo">
        <?= Html::img('@web/mondy/img/logo.png', ['width' => '150', 'height' => '43']) ?>
    </a>
    <nav class="header-nav">
        <ul class="main-menu">
            <li><?= Html::a('Home', ['/site']); ?></li>
            <li><?= Html::a('About', ['/site/about']); ?></li>
            <li><a href="#">Pages</a>
                <ul class="sub-menu">
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="search-result.html">Search Result</a></li>
                    <li><a href="single-property.html">Property</a></li>
                </ul>
            </li>
            <li><?= Html::a('Contact', ['/site/contact']); ?></li>
        </ul>
        <div class="header-right">
            <div class="user-panel">
                <?= Html::a('Login', ['/site/login'], ['class' => 'register']); ?>
            </div>
        </div>
    </nav>

</header>
<!-- Header Section end -->
<div class="container card" style="margin-bottom: 80px; padding: 20px; margin-top: 200px">
    <div class="site-login" style="margin-top:10px">
        <?php

        $this->title = 'Login';
        ?>
        <h1><?= Html::encode($this->title) ?></h1>

        <p>Please fill out the following fields to login:</p>

        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'layout' => 'horizontal',
            'fieldConfig' => [
                'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                'labelOptions' => ['class' => 'col-lg-1 control-label'],
            ],
        ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>

        <div class="col-lg-offset-1" style="color:#999;">
            You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
            To modify the username/password, please check out the code <code>app\models\User::$users</code>.
        </div>
    </div>
</div>