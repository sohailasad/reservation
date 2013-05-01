<?php
/* @var $this ReservationController */
/* @var $model Reservation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reservation-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'passenger_id'); ?>
		<?php echo $form->textField($model,'passenger_id'); ?>
		<?php echo $form->error($model,'passenger_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'passenger_name'); ?>
		<?php echo $form->textField($model,'passenger_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'passenger_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone_number'); ?>
		<?php echo $form->textField($model,'phone_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'phone_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cnic_number'); ?>
		<?php echo $form->textField($model,'cnic_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cnic_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_seats'); ?>
		<?php echo $form->textField($model,'total_seats'); ?>
		<?php echo $form->error($model,'total_seats'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reserve_seats'); ?>
		<?php echo $form->textField($model,'reserve_seats'); ?>
		<?php echo $form->error($model,'reserve_seats'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'available_seats'); ?>
		<?php echo $form->textField($model,'available_seats'); ?>
		<?php echo $form->error($model,'available_seats'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reserve_seats_numbers'); ?>
		<?php echo $form->textField($model,'reserve_seats_numbers'); ?>
		<?php echo $form->error($model,'reserve_seats_numbers'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'terminal_from_id'); ?>
		<?php echo $form->textField($model,'terminal_from_id'); ?>
		<?php echo $form->error($model,'terminal_from_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'terminal_to_id'); ?>
		<?php echo $form->textField($model,'terminal_to_id'); ?>
		<?php echo $form->error($model,'terminal_to_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'root_id'); ?>
		<?php echo $form->textField($model,'root_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'root_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reserve_date_time'); ?>
		<?php echo $form->textField($model,'reserve_date_time',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'reserve_date_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'travel_date'); ?>
		<?php echo $form->textField($model,'travel_date',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'travel_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'travel_time'); ?>
		<?php echo $form->textField($model,'travel_time',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'travel_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bus_id'); ?>
		<?php echo $form->textField($model,'bus_id'); ?>
		<?php echo $form->error($model,'bus_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->