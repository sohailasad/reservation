<?php
/* @var $this ReservationController */
/* @var $model Reservation */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'passenger_id'); ?>
		<?php echo $form->textField($model,'passenger_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'passenger_name'); ?>
		<?php echo $form->textField($model,'passenger_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone_number'); ?>
		<?php echo $form->textField($model,'phone_number',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cnic_number'); ?>
		<?php echo $form->textField($model,'cnic_number',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_seats'); ?>
		<?php echo $form->textField($model,'total_seats'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reserve_seats'); ?>
		<?php echo $form->textField($model,'reserve_seats'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'available_seats'); ?>
		<?php echo $form->textField($model,'available_seats'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reserve_seats_numbers'); ?>
		<?php echo $form->textField($model,'reserve_seats_numbers'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'terminal_from_id'); ?>
		<?php echo $form->textField($model,'terminal_from_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'terminal_to_id'); ?>
		<?php echo $form->textField($model,'terminal_to_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'root_id'); ?>
		<?php echo $form->textField($model,'root_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reserve_date_time'); ?>
		<?php echo $form->textField($model,'reserve_date_time',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'travel_date'); ?>
		<?php echo $form->textField($model,'travel_date',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'travel_time'); ?>
		<?php echo $form->textField($model,'travel_time',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bus_id'); ?>
		<?php echo $form->textField($model,'bus_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->