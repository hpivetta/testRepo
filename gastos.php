<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HPI - Sistema de Controle</title>
<link rel='stylesheet' href='css/Style_entrada.css'/>

</head>

<div class="box-contas">
 
	<form id="form1" name="form1" method="post" action="gas_salvar.php"/>
         <input name="descricao" size="50" type="text" id="descricao" maxlength="30" class="textBox"  /> 
         <input size="20"name="data" type="date" id="data" maxlength="20" class="textBox" value="<? echo date('Y-m-d');?>"/>
         <input name="valor" size="20" type="text" id="valor" maxlength="10" class="textBox"  />
        <input type="submit" value=""/>
 
 </div>

<?php   

require 'init.php';
$cont=0;
abre_conexao();

    $re = mysql_query("SELECT  * FROM gastos ORDER BY -data;");
		while($l = mysql_fetch_array($re)) {
			$descricao	= $l["descricao"];
			$data 		= $l["data"];
			$valor		= $l["valor"];
			$nat		= $l["natureza"];
			
		$cont=$cont+1; 
		
	if($cont%2==0)
	{	
		?>  
<table align="center"  bgcolor="#000066" width="85%">
<td width="30%" align="center" bgcolor="#666666"> <?php echo"$descricao"; ?></td>
<td width="10%" align="center" bgcolor="#666666"> <?php echo"$data"; ?></td>
<td width="10%" align="center" bgcolor="#666666"> <?php  echo"R$ - " .number_format($valor, 2, ',', '.') ; ?></td>
<td width="20%" align="center" bgcolor="#666666"> <?php echo"Natureza"; ?></td>

</table>
<?php 
	}else{
		?>	
<table align="center" width="85%" >
<td width="30%" align="center" bgcolor="#000066"> <?php echo"$descricao"; ?></td>
<td width="10%" align="center" bgcolor="#000066"> <?php echo"$data"; ?></td>
<td width="10%" align="center" bgcolor="#000066"> <?php  echo"R$ - " .number_format($valor, 2, ',', '.') ; ?></td>
<td width="20%" align="center" bgcolor="#000066"> <?php echo"Natureza"; ?></td>
</table>
    <?php
	}
		}
	?>
    	
</body>
</html>