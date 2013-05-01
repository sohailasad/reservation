<?php
/* @var $this RootController */
/* @var $model Root */

$this->breadcrumbs=array(
	'Roots'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Root', 'url'=>array('index')),
	array('label'=>'Create Root', 'url'=>array('create')),
	array('label'=>'View Root', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Root', 'url'=>array('admin')),
);
?>

<h1>Update Root <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>