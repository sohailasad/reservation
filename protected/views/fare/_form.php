<?php
/* @var $this FareController */
/* @var $model Fare */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fare-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'terminal_from_id'); ?>
		<?php //echo CHtml::dropDownList('options' ,NULL, Array ( 1 => 'Multan', 2 => 'Lahore', 3 => 'Karachi', 4 => 'Bahawalpur', 5 => 'Sahiwal' ) , array('prompt'=>'Select City From'));?>
            <?php echo $form->dropDownList($model,'terminal_from_id', CHtml::listData(Terminal::model()->findAll(), 'id', 'terminal_name'), array('empty'=>'Select City From'))?>
		<?php echo $form->error($model,'terminal_from_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'terminal_to_id'); ?>
		<?php echo $form->dropDownList($model,'terminal_to_id', CHtml::listData(Terminal::model()->findAll(), 'id', 'terminal_name'), array('empty'=>'Select City To'))?>
		<?php echo $form->error($model,'terminal_to_id'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'root_id'); ?>
		<?php echo $form->dropDownList($model,'root_id', CHtml::listData(Terminal::model()->findAll(), 'id', 'terminal_name'), array('empty'=>'Select Journey Via'))?>
		<?php echo $form->error($model,'root_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fare_price'); ?>
		<?php echo $form->textField($model,'fare_price'); ?>
		<?php echo $form->error($model,'fare_price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->