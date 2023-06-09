<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\mahasiswa_017 $model */

$this->title = 'Update Mahasiswa 017: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswa 017s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mahasiswa-017-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
