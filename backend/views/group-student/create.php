<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\GroupStudent $model */

$this->title = 'Create Group Student';
$this->params['breadcrumbs'][] = ['label' => 'Group Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-student-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
