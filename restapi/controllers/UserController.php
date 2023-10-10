<?php
namespace restapi\controllers;

use restapi\models\User;
use yii\rest\ActiveController;


class UserController extends ActiveController
{
    public $modelClass = User::class;

}