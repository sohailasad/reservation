<?php
/* @var $this TerminalController */
/* @var $model Terminal */

$this->breadcrumbs=array(
	'Terminals'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Terminal', 'url'=>array('index')),
	array('label'=>'Create Terminal', 'url'=>array('create')),
	array('label'=>'Update Terminal', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Terminal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Terminal', 'url'=>array('admin')),
);
?>

<h1>View Terminal #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'terminal_name',
		'terminal_detail',
		'terminal_photo',
	),
)); ?>
