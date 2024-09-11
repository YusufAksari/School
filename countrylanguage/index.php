<?php

use app\models\Countrylanguage;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CountrylanguageSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Countrylanguages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="countrylanguage-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CountryCode',
            'Language',
            'IsOfficial',
            'Percentage',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Countrylanguage $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'CountryCode' => $model->CountryCode, 'Language' => $model->Language]);
                 }
            ],
        ],
    ]); ?>

    <p>
        <?= Html::a('Create Countrylanguage', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

</div>
