
<?php
require "init.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
$descricao  = $_POST["descricao"];
$valor		= $_POST["valor"];
$data 		= $_POST["data"];
$natureza	= 1;

if ($valor<=0||$valor==NULL){ 
	header("location: entradas.php");
		}else{

 $cmbanco =("INSERT INTO entradas VALUES (	NULL , '$descricao', '$valor', '$data', '$natureza')");
abre_conexao();
if(@mysql_query($cmbanco)) {

	if(mysql_affected_rows() == 1){
		echo "Registro efetuado com sucesso<br />";
	}	

} else {
	if(mysql_errno() == 1062) {
		echo $erros[mysql_errno()];
		exit;
	} else {	
		echo "Erro nao foi possivel efetuar o cadastro";
		exit;
	}	
	@mysql_close();
}

}

header("location: entradas.php"); 
}

?>
</html>
