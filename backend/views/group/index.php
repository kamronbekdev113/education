<?php

use common\models\Group;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var \common\models\GroupSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Groups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Group', ['create'], ['class' => 'btn-fill-md radius-4 text-light bg-light-sea-green']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
//            'teacher_id',
//            'course_id',
//            'room_id',
            [
                'attribute' => 'teacher_id',
                'value' => function ($model)
                {
                    return $model->teacher->fullName;
                },
                'filter' => \yii\helpers\ArrayHelper::map(\common\models\Teacher::find()->select(['id','concat(firstName,\' \',lastName) as fullName'])->asArray()->all(), 'id', 'fullName'),
//                'filter' => \yii\helpers\ArrayHelper::map(\backend\models\Teacher::find()->asArray()->all(), 'id', 'firstname')
            ],
            [
                'attribute' => 'course_id',
                'value' => 'course.name',
                'filter' => \yii\helpers\ArrayHelper::map(\common\models\Course::find()->asArray()->all(), 'id', 'name')
            ],
            [
                'attribute' => 'room_id',
                'value' => 'room.title',
                'filter' => \yii\helpers\ArrayHelper::map(\common\models\Room::find()->asArray()->all(), 'id', 'title')
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Group $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
