<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle = Yii::app()->name . ' - Login';
?>
<?php echo $this->renderPartial('signup',array('model'=>$model));?>
<?php echo $this->renderPartial('work',array(''));?>
<?php echo $this->renderPartial('whtdoes',array(''));?>