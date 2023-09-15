<?php
    $Mail = $_POST['email'];
    $Subject = "Заполненная форма заявки";
    
    $Table = "";
    $Row = "";
    $i=0;
    foreach($_POST['brand'] as $Brand){
        $Row = $Brand." ".$_POST['product'][$i]." ".$_POST['number'][$i]." ".$_POST['fasovka'][$i]." "    .$_POST['client'][$i];  
        $Table = $Table.$Row;
        ++$i;
    }
   
    $Message= "Заявка:".$_POST['title']."\n".
              "Категория:".$_POST['category']."\n".
              "Вид зявки:".$_POST['type']."\n".
              "Склад поставки:".$_POST['sklad']."\n".
              "Состав заявки:"."\n".
              $Table."\n".
              "Комментарий:".$_POST['comment'];
            
    $Result = mail($Mail, $Subject, $Message);
    if($Result) { 
        echo "Письмо отправлено";
        
    }else{
        echo "Письмо не отправлено";
        
    }  
