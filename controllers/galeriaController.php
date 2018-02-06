<?php
class galeriaController extends controller {

	public function index() {
		$dados = array(
			'qt' =>130
		);

		$this->loadTemplate('galeria', $dados); 
	}

	
}
?>