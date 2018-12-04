<?php 

namespace Cliente;

class Cadastro extends \Cadastro{

	public function registrarVenda(){
		echo "Foi Registrado uma venda para o Cliente".$this->getNome();
	}

} ?>