<?php
 
$conn = mysqli_connect("127.0.0.1","root","","loja");

$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

$check_data = "SELECT respostas FROM chatbot WHERE mensagens LIKE '%$getMesg%'";

$run_Query = mysqli_query($conn, $check_data) or die("Error");

if(mysqli_num_rows($run_Query) > 0){
    
    $fetch_data = mysqli_fetch_assoc($run_Query);
    $replay = $fetch_data['respostas'];
    echo $replay;

}else{
    echo "Me desculpe, não consigo entendê-lo. <a href='link' style='color:gray'>Entre em contato com nossos administradores.</a>";
}



