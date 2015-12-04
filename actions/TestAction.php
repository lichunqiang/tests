<?php

namespace app\actions;

use yii\base\Action;

class TestAction extends Action
{
	/**
	 * @SWG\Get(
	 *         tags={"app"},
	 *         path="/v1/create",
	 *         @SWG\Response(response="200", description="An example resource")
	 * )
	 */
	public function run()
	{

	}
}