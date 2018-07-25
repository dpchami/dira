<?php

namespace app\modules\counter\controllers;

use yii\web\Controller;

/**
 * Default controller for the `counter` module
 */
class DefaultController extends Controller
{

	public function init(){
		$this->layout = 'counter';
	}
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
    	
        return $this->render('index');
    }

    public function actionNyumbani()
    {
    	
        return $this->render('nyumbani');
    }

}
