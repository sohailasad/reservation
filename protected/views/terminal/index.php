<?php
/* @var $this TerminalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Terminals',
);

$this->menu=array(
	array('label'=>'Create Terminal', 'url'=>array('create')),
	array('label'=>'Manage Terminal', 'url'=>array('admin')),
);
?>

<h1>Terminals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
