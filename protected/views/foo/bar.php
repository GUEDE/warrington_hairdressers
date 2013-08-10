<?php 
/* @var $this FooController */
/* @var AjaxController */
/* @var $data array */
?>


<div id="destination"></div>
<?php echo CHtml::ajaxLink('Get Content',
Yii::app()->createUrl('ajax/dynamicHtml'),
array(
	'dataType' => 'html',
	'type' => 'get',
	'update' => '#destination'
) // ajax
); //script
?>