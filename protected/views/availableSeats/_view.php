<?php
/* @var $this AvailableSeatsController */
/* @var $data AvailableSeats */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bus_id')); ?>:</b>
	<?php echo CHtml::encode($data->bus_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terminal_from')); ?>:</b>
	<?php echo CHtml::encode($data->terminal_from); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terminal_to')); ?>:</b>
	<?php echo CHtml::encode($data->terminal_to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('root_id')); ?>:</b>
	<?php echo CHtml::encode($data->root_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_seats')); ?>:</b>
	<?php echo CHtml::encode($data->total_seats); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reserve_seats')); ?>:</b>
	<?php echo CHtml::encode($data->reserve_seats); ?>
	<br />

	 
	<b><?php echo CHtml::encode($data->getAttributeLabel('available_seats')); ?>:</b>
	<?php echo CHtml::encode($data->available_seats); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reserve_date')); ?>:</b>
	<?php echo CHtml::encode($data->reserve_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reserve_time')); ?>:</b>
	<?php echo CHtml::encode($data->reserve_time); ?>
	<br />

	 

</div>