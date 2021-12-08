<?php
require_once("Controller.php");
class ContatosController extends Controller{

	//lista de contatos
	public function listar(){

		$contatos = Contato::all();
		return $this->view('grade',['contatos' => $contatos]);
	}

	//Mostrar formulario para criar um novo contato
	public function criar(){
		return $this->view('form');
	}

	//mostrar formulário para editar um contato

	public function editar($dados){
		$id = (int) $dados['id'];
		$contato = Contato::find($id); //Instanciando a classe Contato e usando o método find

		return $this->view('form',['contato' =>$contato]);
	}

	//Salvar o contato submetido pelo formulário
	public function salvar(){
		$contato = new Contato;
		$contato->nome =$this->request->nome;
		$contato->telefone = $this->request->telefone;
		$contato->email = $this->request->email;

		if ($contato->save()) {
			return $this->listar();
		}
	}

	//Atualizar o contato conforme dados submetidos
	public function atualizar($dados)
    {
        $id                = (int) $dados['id'];
        $contato           = Contato::find($id);
        $contato->nome     = $this->request->nome;
        $contato->telefone = $this->request->telefone;
        $contato->email    = $this->request->email;
        $contato->save();

        return $this->listar();
    }

	//Atualixar o contato conforme dados submetidos

	public function excluir($dados){
      $id = (int)$dados['id'];
      $contato = Contato::destroy($id);
      return $this->listar();
	}
}

?>