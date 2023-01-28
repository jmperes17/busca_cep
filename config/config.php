<?php

session_start();

if (isset($_POST['cep_input'])) {
    $cep = preg_replace("/[^0-9]/", "", $_POST['cep_input']);
} else {
    header('Location: index.php');
}

$url = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // Retirando a validação SSL

$response = curl_exec($ch);

curl_close($ch);

// Transformando em array
$data = json_decode($response);

$_SESSION["data"] = $data;

if (!empty($data)) {
    header('Location: ../index.php');
} else {
    echo '<script type="text/javascript">';
    echo 'alert("CEP NÃO ENCONTRADO OU INVÁLIDO");';
    echo 'window.location.href = "../index.php";';
    echo '</script>';
}
