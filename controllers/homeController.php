<?php
class homeController extends controller {
	// controlador da pagina inicial do sistema

	public function index() {
		$anuncios = new Anuncios(); 
		$usuarios = new Usuarios();
		$dados = array(
			'quantidade' => $anuncios->getQuantidade(),
			'nome' => $usuarios->getNome(),
			'idade' => $usuarios->getIdade()
		); 
		$this->loadTemplate('home', $dados);  
	}

	
}
?>