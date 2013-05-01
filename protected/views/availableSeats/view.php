<?php
/* @var $this AvailableSeatsController */
/* @var $model AvailableSeats */

$this->breadcrumbs=array(
	'Available Seats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AvailableSeats', 'url'=>array('index')),
	array('label'=>'Create AvailableSeats', 'url'=>array('create')),
	array('label'=>'Update AvailableSeats', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AvailableSeats', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AvailableSeats', 'url'=>array('admin')),
);
?>

<h1>View AvailableSeats #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'bus_id',
		'terminal_from',
		'terminal_to',
		'root_id',
		'total_seats',
		'reserve_seats',
		'available_seats',
		'reserve_date',
		'reserve_time',
	),
)); ?>
