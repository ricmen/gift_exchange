<?php

/**
 * SignController
 * 
 * @author
 * @version 
 */

class SignController extends Zend_Controller_Action {
	/**
	 * The default action - show the home page
	 */
	public function indexAction() {
		$registro = new Application_Form_Registro();
		
		$this->view->form = $registro;
	}
}
