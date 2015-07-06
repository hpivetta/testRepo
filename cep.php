<?php
require "init.php";
$cont=0;
abre_conexao();

    $re = mysql_query("SELECT  * FROM cidade ORDER BY Nome;");
		while($l = mysql_fetch_array($re)) {
			$id					= $l["Id"];
			$idEstado			= $l["IdEstado"];
			$codigoMunicipio	= $l["CodigoMunicipio"];	//10
			$nome				= $l["Nome"];
			$uf					= $l["Uf"];
			
			$nome = addslashes($nome); 
			echo $nome;	 
			
			$re2 = mysql_query("SELECT * FROM log_localidade WHERE loc_nosub = '$nome' AND ufe_sg = '$uf'");
				while($l = mysql_fetch_array($re2)) {
					$cep		= $l["cep"];
															//20
		
	$cmbanco =("UPDATE cidade SET 
		Id = '$id', 
		IdEstado = '$idEstado', 
		CodigoMunicipio = '$codigoMunicipio', 
		Nome = '$nome', 
		Uf = '$uf',
		cep = '$cep' 
		WHERE Id = '$id'");
	}
			
if(@mysql_query($cmbanco)) {

	if(mysql_affected_rows() == 1){
		echo "Conta Aletrado Com Sucesso! <br />";
	}	

} else {
	if(mysql_errno() == 1062) {
		echo $erros[mysql_errno()];
		exit;
	} else {	
		echo "Erro nao foi possivel efetuar o cadastro";
		exit;
	}	

}
}
?>