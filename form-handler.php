<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Takk for at du sendte inn</h1>
<?php

#echo "Dett er fra php: ";
#echo var_dump($_GET);
#echo var_dump($_POST);

$msg = "";
$sender ="";
$to = "amundhalgunset@gmail.com";
if ($_POST) {
    #echo "<br>Det er data her...";
    foreach($_POST as $key => $value) {  
        $msg .= "\t"."$key: $value"."\r\n";
        if ($key == "email"){
            $sender = $value;
        }  
    }
}
#echo var_dump($msg);

if ($msg && $sender) {
    echo "<p>Skal prøve å sende mail!";
    $msg = "Dette ble sendt inn: "."\r\n".$msg;
    mail($to, $sender, $msg);
}   else{
    echo "<p>Beklager, Kunne ikke sende mail, prøv igjen!";
}

?>
    <p><a href=index.html>Back</a></p>
</body>
</html>

