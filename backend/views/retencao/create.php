<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Retencao */

$this->title = 'Create Retencao';
$this->params['breadcrumbs'][] = ['label' => 'Retencoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="retencao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
