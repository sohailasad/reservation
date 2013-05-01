<?php
/* @var $this TerminalController */
/* @var $model Terminal */

$this->breadcrumbs=array(
	'Terminals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Terminal', 'url'=>array('index')),
	array('label'=>'Manage Terminal', 'url'=>array('admin')),
);
?>

<h1>Create Terminal</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>