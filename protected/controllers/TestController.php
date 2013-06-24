<?php

class TestController extends Controller {

    public $layout = "//layouts/main";

    public function init() {

        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/test.css');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery/jquery-1.10.1.js', CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/test.js', CClientScript::POS_END);
//        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/css/imgPreview/CJL.0.1.min.js');
//        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/css/imgPreview/QuickUpload.js');
//        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/css/imgPreview/ImagePreviewd.js');
    }

    public function actionIndex() {

        phpinfo();
        $this->renderPartial('index');
    }

    public function actionPreview() {

        $this->render('preview');
    }

    public function actionTest() {

        echo time()."<br/>";
        echo strtotime('2013-06-15 00:00:00')."<br/>";
        $timeInterval = time() - strtotime('2013-06-15 00:00:00');
        echo $timeInterval;
        $this->render('test');
    }

    /**
     * 锋利的jQuery
     */
    public function actionJQuery() {

        $this->render('jQuery');
    }
}