<?php
/* @var $this RootController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Roots',
);

$this->menu=array(
	array('label'=>'Create Root', 'url'=>array('create')),
	array('label'=>'Manage Root', 'url'=>array('admin')),
);
?>

<h1>Roots</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
