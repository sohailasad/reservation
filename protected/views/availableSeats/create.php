<?php
/* @var $this AvailableSeatsController */
/* @var $model AvailableSeats */

$this->breadcrumbs=array(
	'Available Seats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AvailableSeats', 'url'=>array('index')),
	array('label'=>'Manage AvailableSeats', 'url'=>array('admin')),
);
?>

<h1>Create AvailableSeats</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>