<?php
/* @var $this TerminalController */
/* @var $model Terminal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'terminal-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'terminal_name'); ?>
		<?php echo $form->textField($model,'terminal_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'terminal_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'terminal_detail'); ?>
		<?php echo $form->textArea($model,'terminal_detail',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'terminal_detail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'terminal_photo'); ?>
		<?php echo $form->textField($model,'terminal_photo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'terminal_photo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->