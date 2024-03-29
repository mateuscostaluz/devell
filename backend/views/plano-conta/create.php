<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PlanoConta */

$this->title = 'Create Plano Conta';
$this->params['breadcrumbs'][] = ['label' => 'Plano Contas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plano-conta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
