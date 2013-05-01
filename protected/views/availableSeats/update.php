<?php
/* @var $this AvailableSeatsController */
/* @var $model AvailableSeats */

$this->breadcrumbs=array(
	'Available Seats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AvailableSeats', 'url'=>array('index')),
	array('label'=>'Create AvailableSeats', 'url'=>array('create')),
	array('label'=>'View AvailableSeats', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AvailableSeats', 'url'=>array('admin')),
);
?>

<h1>Update AvailableSeats <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>