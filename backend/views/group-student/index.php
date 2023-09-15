<?php

use common\models\GroupStudent;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var common\models\GroupStudentSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Group Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="breadcrumbs-area">
    <h3></h3>
    <ul>
        <li>
            <a href="/">Asosiy</a>
        </li>
        <li></li>
    </ul>
</div>
<div class="card height-auto">
    <div class="card-body">
        <div class="group-student-index">

            <p>
                <?= Html::a('Create', ['create'], ['class' => 'btn-fill-md radius-4 text-light bg-light-sea-green']) ?>
            </p>

                                            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
            
                            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
//                'student_id',
//                'group_id',
            [
                'attribute' => 'student_id',
                'value' => function ($model)
                {
                    return $model->student->fullName;
                },
                'filter' => \yii\helpers\ArrayHelper::map(\common\models\Student::find()->select(['id','concat(firstName,\' \',lastName) as fullName'])->asArray()->all(), 'id', 'fullName'),
            ],
                [
                    'attribute' => 'group_id',
                    'value' => 'group.title',
                    'filter' => \yii\helpers\ArrayHelper::map(\common\models\Group::find()->asArray()->all(), 'id', 'title')
                ],
                [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, GroupStudent $model, $key, $index, $column) {
                return Url::toRoute([$action, 'id' => $model->id]);
                }
                ],
                ],
                ]); ?>
            
            
        </div>
    </div>
</div>

