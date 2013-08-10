<?php 
/* @var $this FooController */
/* @var AjaxController */
/* @var $data array */
?>


<h3 id="updateTitle"></h3>
<div id="updateContent"></div>
<?php echo CHtml::ajaxButton('Get Content',
Yii::app()->createUrl('ajax/json'),
array(
	'dataType' => 'json',
	'type' => 'get',
	'success' => 'function(result){
		$("#updateTitle").html(result.title);
		var content = $("#updateContent").html(result.content);
		content.wrap("<p>");
	}'
) // ajax
); //script
?>

