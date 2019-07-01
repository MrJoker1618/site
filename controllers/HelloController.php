<?php
 namespace app\controllers;
 use yii\web\Controller;

 class HelloController extends Controller{
     public function actionIndex()
     {
         return $this->render("welcome");
     }

     public function actionNew()
     {
         return$this->render("newpage");
     }
 }
?>