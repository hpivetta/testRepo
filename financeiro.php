<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HPI - Sistema de Controle</title>
<link rel='stylesheet' href='Style.css'/>

<section class="projects container clearfix">
			
			
			</div>

			<!-- Projects List  -->
			<div class="projects_list clearfix">
				<ul>
					<li class="animated wow fadeInRight" data-wow-delay=".2s">
						<a href='entradas.php'target="HOME"> <span class="p_logo1"></span></a></li>
				
                	<li class="animated wow fadeInRight" data-wow-delay=".2s">
	        		    <a href='gastos.php'target="HOME"><span class="p_logo2"></span></a></li>
                        
                  	<li class="animated wow fadeInRight" data-wow-delay=".2s">
						<a href='contas.php'target="HOME"><span class="p_logo3"></span></a></li>
                    
                    <li class="animated wow fadeInRight" data-wow-delay=".2s">
						<a href='analise.php'target="HOME"><span class="p_logo4"></span></a></li>
				
				</ul>
			</div>

	</section>
 
 
 <?php
 
 require "init.php";
 $totalentrada=0;  $totalgastos=0;  $totaldisponivel=0;
	
 Abre_conexao();
 
  $re = mysql_query("SELECT  * FROM entradas ORDER BY idEntradas;");
		while($l = mysql_fetch_array($re)) {
			$valor		= $l["valor"];
			$totalentrada= $valor+$totalentrada;
			}

 
  $re2 = mysql_query("SELECT  * FROM gastos ORDER BY idGastos;");
		while($l = mysql_fetch_array($re2)) {
			$valor		= $l["valor"];
			$totalgastos= $valor+$totalgastos;
			}
 
 
 $totaldisponivel=$totalentrada-$totalgastos;
 
 
 
 
 ?>
  <table align="center" width="60%">
            <td width="15%" align="center" bgcolor="#000099" style="font-size:16px"> <?php echo"<BR>Disponível		  "; echo"R$ - " .number_format($totaldisponivel, 2, ',', '.') ; echo "<br></br>"; ?></td>
 
 </table>
      </body>
</html>
