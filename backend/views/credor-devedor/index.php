<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CredorDevedorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Credor Devedors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="credor-devedor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Credor Devedor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'cnpj',
            'idCidade',
            'endereco',
            //'complemento',
            //'bairro',
            //'telefone',
            //'email:email',
            //'idCliente',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
