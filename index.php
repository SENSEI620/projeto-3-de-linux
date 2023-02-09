<html>

<head>
<title> exemplo PHP </html>
</head>

<?php
ini_set("display_errors",1);
header('content-typer: text/html; charset=iso-8859-1);

echo 'versao atual do PHP:' . phpvision(). '<br>;

$servername = "54.234.153.24";
$username = "root";
$password = "senha123";
$database = "meubanco" ;

// criar conexao

$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$valor_rand1 =  rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$host_name = gethostname();


$query = "INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host) VALUES ('$valor_rand1' , '$valor_rand2', '$valor_rand2', '$valor_rand2', '$valor_rand2','$host_name')";


if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $link->error;
}

?>
</body>
</html>
