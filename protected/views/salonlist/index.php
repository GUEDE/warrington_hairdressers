<?php
/* @var $this SalonlistController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Salonlists',
);

$this->menu=array(
	array('label'=>'Create Salonlist', 'url'=>array('create')),
	array('label'=>'Manage Salonlist', 'url'=>array('admin')),
);
?>

<h1>Salons</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


