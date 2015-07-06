<?php
function monta_select($campo, $start, $end) {
	$select = "<select name=\"$campo\" id=\"$campo\">\n";
	for($i = $start; $i <= $end; $i++) {		
		$select .= "\t<option value=\"". sprintf("%02d", $i) ."\">".sprintf("%02d", $i)."</option>\n";	
	} 							
		$select .= "</select>\n";
	return $select;	
}	

function monta_combo($campo) {
	if($campo == "") {
		return false;
	}
	$select = "<select name=\"campo\">\n";
	for($i = 0; $i < count($campo); $i++) {			
		$select .= "\t<option value=\"$i\">{$campo[$i]}</option>\n";	
	} 							
		$select .= "</select>\n";
	return $select;	
}

function Seleciona_Item($valor, $campo) {
	return preg_replace("#<option value=\"$valor\">#is", "<option value=\"$valor\" selected=\"selected\">", $campo);
}

function get_post_action($name)
{
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_POST[$name])) {
            return $name;
        }
    }
}

function mask($val, $mask)

{
 $maskared = '';
 $k = 0;
 for($i = 0; $i<=strlen($mask)-1; $i++)
 {

 if($mask[$i] == '#') {
 if(isset($val[$k]))
 $maskared .= $val[$k++];
 }
 else
 {
 if(isset($mask[$i]))

 $maskared .= $mask[$i];
 }
 }
 return $maskared;
}


?>