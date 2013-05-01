<?php
/* @var $this ReservationController */
/* @var $model Reservation */

$this->breadcrumbs=array(
	'Reservations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Reservation', 'url'=>array('index')),
	array('label'=>'Create Reservation', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#reservation-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Reservations</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'reservation-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'passenger_id',
		'passenger_name',
		'phone_number',
		'email',
		'cnic_number',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
