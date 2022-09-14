<?php

if (isset($_POST['cep_input'])) {
    $cep = preg_replace("/[^0-9]/", "", $_POST['cep_input']);
} else {
    $cep = "21775530";
}

$url = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // Retirando a validação SSL

$response = curl_exec($ch);

curl_close($ch);

//Transformando em array
$data = json_decode($response);

if (!empty($data)){
    header('Location: index.php');
}

/*
foreach($data as $value => $key){
    echo $value ."-> ". $key . "</br>";
}*/
?>