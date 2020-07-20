<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\DataProvider;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ThreadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Threads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thread-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Thread', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'thread_id',
            'title',
            'description',
            //'image',
            'date',
            'status',

        //    ['class' => 'yii\grid\ActionColumn'],
        ]
    ]); ?>


</div>
