<?php
/* @var $this RootController */
/* @var $model Root */

$this->breadcrumbs=array(
	'Roots'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Root', 'url'=>array('index')),
	array('label'=>'Create Root', 'url'=>array('create')),
	array('label'=>'Update Root', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Root', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Root', 'url'=>array('admin')),
);
?>

<h1>View Root #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'terminal_from_id',
		'terminal_to_id',
		'journey_via',
		'bus_id',
	),
)); ?>
