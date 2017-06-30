<?php

if(isset($_POST))
{
    echo "post yra";
}else{
    echo "postas negautas";
}
// $fname=isset($_POST['fname']) ? $_POST['fname']:null;
// $.post('/form.php', serializedData, function(response) {
//     // Log the response to the console
//     console.log("Response: "+response);

$to = "gmaciuta@gmail.com";
$subject = "kazkas";
$txt = " labas";
$headers = 'From: gertautas@yahoo.com' . "\r\n" .
       'Reply-To: gmaciuta@gmail.com';

mail($to,$subject,$txt,$headers);
?>