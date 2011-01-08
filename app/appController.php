<?php
class appController {
	public $root;
	public $controller;
	public $action;
	public $url;
	public $model;
	
	public function __construct($sModel = null) {
		global $sSiteRoot, $sController, $sAction, $aURL;
		
		$this->root = $sSiteRoot;
		$this->controller = $sController;
		$this->action = $sAction;
		$this->url = $aURL;
		
		## Auto-load model based on controller name
		if(!empty($sModel)) {
			$oModel = $this->loadModel($sModel);
			
			if($oModel) {
				$this->model = $oModel;
			}
		}
	}
	
	public function loadModel($sModel) {
		if(!class_exists($sModel."_model")) {
			if(is_file($this->root."app/models/".$sModel.".php")) {
				include($this->root."app/models/".$sModel.".php");
				
				if(class_exists($sModel."_model")) {
					$sModel = $sModel."_model";
					$oModel = new $sModel;
				}
			} else {
				return false;
			}
		} else {
			$sModel = $sModel."_model";
			$oModel = new $sModel;
		}
		
		return $oModel;
	}
	
	public function loadTemplate($sTemplate) {
		if(is_file($this->root."app/views/".$sTemplate)) {
			include($this->root."app/views/".$sTemplate);
		} else {
			return false;
		}
	}
}