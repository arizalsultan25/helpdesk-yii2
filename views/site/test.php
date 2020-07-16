<?php

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

foreach ($models as $data){
    echo $data['title'];
    echo '<br>';
}