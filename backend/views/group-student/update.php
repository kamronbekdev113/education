<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\GroupStudent $model */

$this->title = 'Update Group Student: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Group Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="group-student-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
