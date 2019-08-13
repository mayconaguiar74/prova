<?php	
//github.com/rafaelflorindo/InformaticaIntegrado/
	
class folha{
	public $id, $nome, $cpf, $ctps;
	public $cargo, $mes, $entrada, $inicioIntervalo, $fimIntervalo, $saida, $horaExtra;
	/********************************************************/
	public function setId($id){
		$this->id = $id;	
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function setCpf($cpf){
		$this->cpf = $cpf;
	}
	public function setCtps($ctps){
		$this->ctps = $ctps;
	}
	public function setCargo($cargo){
		$this->cargo = $cargo;
	}
	public function setMes($mes){
		$this->mes = $mes;
	}
	
	public function setEntrada($entrada){
		$this->entrada = $entrada;	
	}
	public function setInicioIntervalo($inicioIntervalo){
		$this->inicioIntervalo = $inicioIntervalo;	
	}
	public function setFimIntervalo($fimIntervalo){
		$this->fimIntervalo = $fimIntervalo;	
	}
	public function setSaida($saida){
		$this->saida = $saida;	
	}
	public function setHoraExtra($horaExtra){
		$this->horaExtra = $horaExtra;	
	}
	
	/********************************************************/
	public function getId(){
		return $this->id;
	}
	public function getNome(){
		return $this->nome;
	}
	public function getCpf(){
		return $this->cpf;
	}
	public function getCtps(){
		return $this->ctps;
	}
	public function getCargo(){
		return $this->cargo;
	}
	
	public function getMes(){
		return $this->mes;
	}
	public function getEntrada(){
		return $this->entrada;
	}
	public function getInicioIntervalo(){
		return $this->inicioIntervalo;
	}
	public function getFimIntervalo(){
		return $this->fimIntervalo;
	}
	public function getSaida(){
		return $this->saida;
	}
	public function getHoraExtra(){
		return $this->horaExtra;
	}
	/********************************************************/
	public function cadastrar($dados){
		//$dados=array($nome, $cpf, $ctps, $cargo, $mes, $dia, $entrada, $inicioIntervalo, $fimIntervalo, $saida, $horaExtra)
		list($nome, $cpf, $ctps, $cargo, $mes, $entrada, $inicioIntervalo, $fimIntervalo, $saida, $horaExtra) = $dados;
		
		$this->setNome($nome);
		$this->setCpf($cpf);
		$this->setCtps($ctps);
		$this->setCargo($cargo);
		$this->setMes($mes);
		$this->setEntrada($entrada);
		$this->setInicioIntervalo($inicioIntervalo);
		$this->setFimIntervalo($fimIntervalo);
		$this->setSaida($saida);
		$this->setHoraExtra($horaExtra);
		
		$conectar = new mysqli("localhost","root","","folha_ponto");
		$sql = "insert into folha 
					(nome, cpf, ctps, cargo, mes, entrada, inicioIntervalo, fimIntervalo, saida, horaExtra)
					values (
					'{$this->getNome()}', 
					'{$this->getCpf()}',
					'{$this->getCtps()}', 
					'{$this->getCargo()}',
					'{$this->getMes()}',
					'{$this->getEntrada()}',
					'{$this->getInicioIntervalo()}',
					'{$this->getFimIntervalo()}',
					'{$this->getSaida()}',
					'{$this->getHoraExtra()}'
					)		
		";		
		$gravar = $conectar->query($sql);
		#verificar quantos registros foram afetados com o $sql
		$num = $conectar->affected_rows;
		if($num==1) {
			echo "<fieldset>";
			echo "<h2>Os dados abaixo foram armazenados na classe com sucesso!!!</h2>";
			echo "<br>Nome: ". $this->getNome();
			echo "<br>Cpf: ". $this->getCpf();
			echo "<br>Ctps: ". $this->getCtps();	
			echo "<br>Cargo: ". $this->getCargo();
			echo "<br>Mes: ". $this->getMes();
			echo "<br>Entrada: ". $this->getEntrada();
			echo "<br>InicioIntervalo: ". $this->getInicioIntervalo();
			echo "<br>FimIntervalo: ". $this->getFimIntervalo();
			echo "<br>Saida: ". $this->getSaida();
			echo "<br>HoraExtra: ". $this->getHoraExtra();
			echo "</fieldset>";
		}else {
			echo "<fieldset>";
			echo "Erro ao gravar os dados";	
			echo "</fieldset>";
		}
	}
	public function alterar($dados){}
	
	/*public function ativarInativar($id,$situacao){
		$this->setId($id);
		$this->setSituacao($situacao);
		
		 $sql = "update folha set
					ativo=" . $this->getSituacao() . " where id= " . $this->getId();		
		
		$conectar = new mysqli("localhost","root","","folha_ponto");
		$executar = $conectar->query($sql);
		$num = $conectar->affected_rows;
		if ($num==1) {
			return 1;
		}else {
			return 0;
			
		}
	}*/
	
	public function buscarUm($id){}//fecha método buscarUm
	public function buscarTodos(){
		$sql = "select * from folha ORDER by nome desc ";
		$conectar = new mysqli("localhost","root","","folha_ponto");
		$listar = $conectar->query($sql);
		$folhaController = array();
		while($linha = $listar->fetch_array()) {
			$folhaController[] = $linha;
		}
		return $folhaController;
	}//fecha método buscarTodos
}//fecha classe
?>