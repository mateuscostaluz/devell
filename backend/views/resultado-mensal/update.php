<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ResultadoMensal */

$this->title = 'Update Resultado Mensal: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Resultado Mensal', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resultado-mensal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
