<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HPI - Sistema de Clintes</title>
<link href="css/Style_entrada.css" rel="stylesheet"/>

</head>

<body>

	 	<form id="form1" name="form1" method="post" action="cli_salvar.php">
 		
        <div class="box">
   		<h2>Dados Pessoais</h2>
        	<input name="nome"  type="text" id="nome" maxlength="45" size="45" placeholder="Nome Cliente"/>
         	<input size="30"name="cpf" type="text" id="mascaracpf" maxlength="11"  placeholder="CPF"/>
           <br>
         	<input size="30"name="identidade" type="text" id="mascararg" maxlength="20" placeholder="Identidade"/>
         	<input name="telefone" size="45" type="text" id="mascaratelefone" maxlength="12" placeholder="Telefone"  />
       </div>
    	
       <div class="box">
   		<h2>Endereço</h2>	
        	<input name="cep"  type="text" id="cep" maxlength="45" size="45" placeholder="CEP"/>
          	<input size="30"name="cpf" type="text" id="mascaracpf" maxlength="11"  placeholder="UF"/>
         <br>	
            <input size="30"name="cidade" type="text" id="cidade" maxlength="45" placeholder="Cidade"/>
            <input name="bairro" size="45" type="text" id="bairro" maxlength="45" placeholder="Bairro"  />
         <br>
         	<input name="rua" size="45" type="text" id="rua" maxlength="45" placeholder="Rua"  />
       		<input name="numero" size="45" type="text" id="numero" maxlength="10" placeholder="Número"  />
       	</div>
             
        <div class="box">
   		<h2>Referência</h2>     
            <input name="filiacao"  type="text" id="filiacao" maxlength="45" size="45" placeholder="Filiação"/>
          	<input size="30"name="referencia" type="text" id="referencia" maxlength="11"  placeholder="Nome Referência"/>
         <br>	
            <input size="30"name="telref" type="text" id="telref" maxlength="10" placeholder="Telefone Referência"/>
         	<input name="email" size="45" type="text" id="email" maxlength="10" placeholder="E-mail"  />
       	 <br>
          <input  name="Submit" type="submit" value="Cadastrar Cliente" class="textBox"/> </form>
       </div>
      
      
      </body>
</html>
