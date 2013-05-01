<?php
/* @var $this TerminalController */
/* @var $model Terminal */

$this->breadcrumbs=array(
	'Terminals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Terminal', 'url'=>array('index')),
	array('label'=>'Create Terminal', 'url'=>array('create')),
	array('label'=>'View Terminal', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Terminal', 'url'=>array('admin')),
);
?>

<h1>Update Terminal <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>