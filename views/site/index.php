<?php

/* @var $this yii\web\View */

$this->title = 'Sisma Helpdesk';

use yii\data\SqlDataProvider;

$count = Yii::$app->db->createCommand('
    SELECT COUNT(*) FROM thread')->queryScalar();

$provider = new SqlDataProvider([
    'sql' => 'SELECT * FROM thread',
    'totalCount' => $count,
    'pagination' => [
        'pageSize' => 10,
    ],
    'sort' => [
        'attributes' => [
            'title',
            'view_count',
            'created_at',
        ],
    ],
]);

// returns an array of data rows
$models = $provider->getModels();
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome to Sisma Helpdesk</h1>

        <p class="lead">How can we help you ?</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-8">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>

                <?php foreach($models as $data){ ?>
                <div class="col-lg-6">
                    <h2><?= $data['title'] ?></h2>

                    <p><?= $data['description'] ?>.</p>

                    <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
                </div>
                
                <?php } ?>
            </div>

            <div class="col-lg-3">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>