<?php
class homeController extends controller {
	// controlador da pagina inicial do sistema

	public function index() {
		$dados = array(
			'quantidade' => 5,
			'nome' => 'Souza',
			'idade' => '45'
		); 
		$this->loadTemplate('home', $dados);  
	}

	
}
?>