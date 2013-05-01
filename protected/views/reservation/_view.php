<?php
/* @var $this ReservationController */
/* @var $data Reservation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passenger_id')); ?>:</b>
	<?php echo CHtml::encode($data->passenger_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passenger_name')); ?>:</b>
	<?php echo CHtml::encode($data->passenger_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_number')); ?>:</b>
	<?php echo CHtml::encode($data->phone_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cnic_number')); ?>:</b>
	<?php echo CHtml::encode($data->cnic_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_seats')); ?>:</b>
	<?php echo CHtml::encode($data->total_seats); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('reserve_seats')); ?>:</b>
	<?php echo CHtml::encode($data->reserve_seats); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('available_seats')); ?>:</b>
	<?php echo CHtml::encode($data->available_seats); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reserve_seats_numbers')); ?>:</b>
	<?php echo CHtml::encode($data->reserve_seats_numbers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terminal_from_id')); ?>:</b>
	<?php echo CHtml::encode($data->terminal_from_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terminal_to_id')); ?>:</b>
	<?php echo CHtml::encode($data->terminal_to_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('root_id')); ?>:</b>
	<?php echo CHtml::encode($data->root_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reserve_date_time')); ?>:</b>
	<?php echo CHtml::encode($data->reserve_date_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('travel_date')); ?>:</b>
	<?php echo CHtml::encode($data->travel_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('travel_time')); ?>:</b>
	<?php echo CHtml::encode($data->travel_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bus_id')); ?>:</b>
	<?php echo CHtml::encode($data->bus_id); ?>
	<br />

	*/ ?>

</div>