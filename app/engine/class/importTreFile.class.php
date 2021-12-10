<?php

class importTreFile{
	public $file;

	public function __construct(){

	}
	public function decomp(){
		$linhas = utf8_encode(file_get_contents($this->file));
		$linhas = explode("\n", $linhas);
		foreach ($linhas as $key => $value) {
			$go = explode(";", $value);
			//$go = implode(", ", $go);
			print_r($go)."<br/>";
		}
		//print_r($linhas);
		//echo "<h1>$linhas</h1>";
	}
	public function votacao_candidato_munzona($tabela){
		$sql = 'insert into '.$tabela .' (DATA_GERACAO, HORA_GERACAO, ANO_ELEICAO, NUM_TURNO, DESCRICAO_ELEICAO, SIGLA_UF, SIGLA_UE, CODIGO_MUNICIPIO, NOME_MUNICIPIO, NUMERO_ZONA, CODIGO_CARGO, NUMERO_CAND, SQ_CANDIDATO, NOME_CANDIDATO, NOME_URNA_CANDIDATO, DESCRICAO_CARGO, COD_SIT_CAND_SUPERIOR, DESC_SIT_CAND_SUPERIOR, CODIGO_SIT_CANDIDATO, DESC_SIT_CANDIDATO, CODIGO_SIT_CAND_TOT, DESC_SIT_CAND_TOT, NUMERO_PARTIDO, SIGLA_PARTIDO, NOME_PARTIDO, SEQUENCIAL_LEGENDA, NOME_COLIGACAO, COMPOSICAO_LEGENDA, TOTAL_VOTOS) values ';
		$linhas = utf8_encode(file_get_contents($this->file));
		$linhas = explode("\n", $linhas);
		array_pop($linhas);
		$n = count($linhas);
		echo "<h1>".$n."</h1>";
		foreach ($linhas as $key => $value) {
			$go = explode(";", $value);
			echo $valores = $sql . "(".implode(", ", $go) . ");"."<br/>";
		}
	}
	public function votacao_munzona_2010($tabela){
		$sql = 'insert into '.$tabela.' (DATA_GERACAO, HORA_GERACAO, ANO_ELEICAO, NUM_TURNO, DESCRICAO_ELEICAO, SIGLA_UF, SIGLA_UE, CODIGO_MUNICIPIO, NOME_MUNICIPIO, NUMERO_ZONA, CODIGO_CARGO, DESCRICAO_CARGO, QTD_APTOS, QTD_SECOES, QTD_SECOES_AGREGADAS, QTD_APTOS_TOT, QTD_SECOES_TOT, QTD_COMPARECIMENTO, QTD_ABSTENCOES, QTD_VOTOS_NOMINAIS, QTD_VOTOS_BRANCOS, QTD_VOTOS_NULOS, QTD_VOTOS_LEGENDA, QTD_VOTOS_ANULADOS_APU_SEP, DATA_ULT_TOTALIZACAO, HORA_ULT_TOTALIZACAO) values ';
		$linhas = utf8_encode(file_get_contents($this->file));
		$linhas = explode("\n", $linhas);
		array_pop($linhas);
		foreach ($linhas as $key => $value) {
			$go = explode(";", $value);
			echo $valores = $sql . "(".implode(", ", $go) . ");"."<br/>";	
		}
	}
	public function partido_munzona_2010($tabela){
		$sql = 'insert into '.$tabela.' (DATA_GERACAO, HORA_GERACAO, ANO_ELEICAO, NUM_TURNO, DESCRICAO_ELEICAO, SIGLA_UF, SIGLA_UE, CODIGO_MUNICIPIO, NOME_MUNICIPIO, NUMERO_ZONA, CODIGO_CARGO, DESCRICAO_CARGO, TIPO_LEGENDA, NOME_COLIGACAO, COMPOSICAO_LEGENDA, SIGLA_PARTIDO, NUMERO_PARTIDO, NOME_PARTIDO, QTDE_VOTOS_NOMINAIS, QTDE_VOTOS_LEGENDA, SEQUENCIAL_COLIGACAO) values ';
		$linhas = utf8_encode(file_get_contents($this->file));
		$linhas = explode("\n", $linhas);
		array_pop($linhas);
		foreach ($linhas as $key => $value) {
			$go = explode(";", $value);
			echo $valores = $sql . "(".implode(", ", $go) . ");"."<br/>";	
		}
	}
	public function secao_2010($tabela){
	$sql = 'insert into '.$tabela. '(DATA_GERACAO, HORA_GERACAO, ANO_ELEICAO	NUM_TURNO, DESCRICAO_ELEICAO, SIGLA_UF, SIGLA_UE, CODIGO_MUNICIPIO, NOME_MUNICIPIO, NUM_ZONA, NUM_SECAO, CODIGO_CARGO, DESCRICAO_CARGO, NUM_VOTAVEL, QTDE_VOTOS)';
	}
}
?>

