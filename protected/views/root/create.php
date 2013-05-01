<?php
/* @var $this RootController */
/* @var $model Root */

$this->breadcrumbs=array(
	'Roots'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Root', 'url'=>array('index')),
	array('label'=>'Manage Root', 'url'=>array('admin')),
);
?>

<h1>Create Root</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>