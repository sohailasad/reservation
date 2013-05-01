<?php
/* @var $this FareController */
/* @var $data Fare */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terminal_from_id')); ?>:</b>
	<?php echo CHtml::encode($data->terminal_from->terminal_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terminal_to_id')); ?>:</b>
	<?php echo CHtml::encode($data->terminal_to->terminal_name); ?>
	<br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('root_id')); ?>:</b>
	<?php echo CHtml::encode($data->root->terminal_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fare_price')); ?>:</b>
	<?php echo CHtml::encode($data->fare_price); ?>
	<br />


</div>