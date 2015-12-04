<?php

namespace app\modules\v1\controllers;

use yii\rest\Controller;

class AppController extends Controller
{
    public function actions()
    {
        return [
            'create' => 'app\actions\TestAction',
        ];
    }
    /**
     * @SWG\Get(
     *         tags={"app"},
     *         path="/v1/apps",
     *         @SWG\Response(response="200", description="An example resource")
     * )
     */
    public function actionIndex()
    {
        return [
            ['id' => 1000, 'username' => 'light'],
        ];
    }
}
