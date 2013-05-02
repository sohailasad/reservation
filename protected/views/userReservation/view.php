<?php
/* @var $this ReservationController */
/* @var $model Reservation */
//die ('jdjdjjd');
$this->breadcrumbs=array(
	'Reservations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Reservation', 'url'=>array('index')),
	array('label'=>'Create Reservation', 'url'=>array('create')),
	array('label'=>'Update Reservation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Reservation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Reservation', 'url'=>array('admin')),
);
?>

<h1>View Reservation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'passenger_id',
		'passenger_name',
		'phone_number',
		'email',
		'cnic_number',
		'total_seats',
		'reserve_seats',
		'available_seats',
		'reserve_seats_numbers',
		'terminal_from_id',
		'terminal_to_id',
		'root_id',
		'reserve_date_time',
		'travel_date',
		'travel_time',
		'bus_id',
	),
)); ?>
