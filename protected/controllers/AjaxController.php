<?php

class AjaxController extends Controller {
	
	// Simple Ajax action
	
	public function actionSimple() {
		echo 'true';
	}
	
	
	// Ajax action that returns HTML
	
	public function actionHtml() {
		echo '<p>Loren ipsum <em>dolor</em>this is nice HTML!</p>';
	}
	
	
	// Ajax action that returns dynamic HTML
	
	public function actionDynamicHtml() {
		// dynamic data
		$data = array(
			'title' => 'This is Dynamic!',
		 	'content' => '<p>This content has come from somwhere else!!</p>'
		);
		// render the page
		$this->renderPartial('dynamic', array('data'=>$data));
	}
	
	public function actionJson() {
		$data = array(
			'title' => 'This is Dynamic!',
			'content' => 'This content is in JSON'
		);
		echo CJSON::encode($data);
	}
	
	
}






