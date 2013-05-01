<?php
/* @var $this AvailableSeatsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Available Seats',
);

$this->menu=array(
	array('label'=>'Create AvailableSeats', 'url'=>array('create')),
	array('label'=>'Manage AvailableSeats', 'url'=>array('admin')),
);
?>

<h1>Available Seats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
