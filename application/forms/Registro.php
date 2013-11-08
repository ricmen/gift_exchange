<?php
class Application_Form_Registro extends Zend_Form	{

	/* (non-PHPdoc)
	 * @see Zend_Form::init()
	 */
	public function init() {
		$this->addElement('text', 'txNombreCompleto', array('label'=>'Nombre Completo:', 'required'=>true, 'attribs'=>array('class'=>'input')))
			->addElement('text','txtRelacion', array('label'=>'Relacion','attribs'=>array('class'=>'input')))
			->addElement('text','txtEmail',array('label'=>'e-mail','attribs'=>array('class'=>'input')))
			->addElement('password','txtPassword',array('label'=>'Password', 'attribs'=>array('class'=>'input')))
			->addElement('password','txtConfirmPassword',array('label'=>'Corfirma Password', 'attribs'=>array('class'=>'input')))
			->addElement('captcha', 'captcha', array(
					'label'      => 'Para confirmar que no eres un duende o un robot por favor ingresa los 5 caracteres de abajo',
					'required'   => true,
					'captcha'    => array(
							'captcha' => 'Figlet',
							'wordLen' => 5,
							'timeout' => 300
					)
			))
		->addElement('submit','Aceptar', array('value'=>'Aceptar', 'attribs'=> array('class'=>'btn btn-success')));
		

	}

}
