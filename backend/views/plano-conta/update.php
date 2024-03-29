<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PlanoConta */

$this->title = 'Update Plano Conta: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Plano Contas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="plano-conta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
