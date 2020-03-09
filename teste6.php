<form method="POST">


	Nome:<br><input type="text" name="nome"><br>

	Data de Nascimento:<br> <input type="date" name="data"><br><br>

	<input type="submit" name="Enviar">

</form>

<?php


$nome = $_POST['nome'];

$data = $_POST['data'];

$anoS= new DateTime("$data");

$atual = new DateTime();

$idade = date_diff($anoS, $atual);

 



if (empty($data && $nome)){
	echo "Por favor digita o nome e sua data de nascimento";
}else if ($idade->format("%Y")> 18){
echo $nome.$idade->format(" você tem %Y anos e já é maior de idade");
}else{
	echo $nome.$idade->format(" você tem %Y anos e ainda é menor de idade");
}
?>
