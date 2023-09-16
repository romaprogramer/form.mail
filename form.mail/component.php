<? (!defined(B_PROLOG_INCLUDED) || B_PROLOG_INCLUDED !==true) or exit; ?>

<? 

    if(isset($arParams)){
        if(isset($_POST['brand'][0]) && isset($_POST['number'][0])) {
            $arResult['Mail'] = $arParams['MAIL']; 
            $arResult['ModeForm'] = "MAIL";
        }else{
            $arResult['ModeForm'] = "GETFORM";
        }
    }//else{
        // $arParams= array();
   // }
   
    if( $arResult['ModeForm'] == "MAIL"){
        //test mail
        /*$Arr["ACTIVE"] = "Y";
        $Arr["EVENT_NAME"] = "Test mail" ;
        $Arr["LID"] = "s1";
        $Arr["MAIL_TO"] = $arResult['Mail']; 
        $Arr["MAIL_FROM"] = "info@bitrixcms.agiletelebot.ru";
        $Arr["SUBJECT"] = "Проверка почты";
        $Arr["BODY_TYPE"] = "text";
        $Arr["MESSAGE"] = "\nПроверка почты\n\nПервое сообщение";
        //$Arr["NAME"] = 
        $ObjMl = new CEventMessage;
        $IdMl = $ObjMl->Add($Arr);
        $arResult['IdMl'] = $IdMl;
        */
        
        $Message = "\nЗаполненная заявка\n\n";
        foreach($_POST as $Key => $Value){
            switch($Key){
                case "title":
                    $Row = "Заголовок: ".$Value."\n\n";
                break;
                case "category":
                    $Row = "Категория: ".$Value."\n\n";
                break;
                case "type":
                    $Row = "Тип: ".$Value."\n\n";
                break;
                case "sklad":
                    $Row = "Склад: ".$Value."\n\n";
                break;
                case "comment":
                    $Comment = "Комментарий: ".$Value."\n\n";
                break;
            }
            $Message = $Message.$Row;
        }
        
        $Row = "\nСостав заявки\n\nБренд\tПродукт\tКоличество\tФасовка\tКлиент\n";
            foreach($_POST['brand'] as $Key=>$Value){
                $Row = $Row.$_POST['brand'][$Key]." ".$_POST['product'][$Key]." ".$_POST['number'][$Key]." ".$_POST['fasovka'][$Key]." ".$_POST['client'][$Key]."\n";     
                }
        $Sostav = $Row."\n";
        $Message = $Message.$Sostav.$Comment;
        
        if(isset($_FILES['file']) && $_FILES['file']['tmp_name'] !==""){
            $NewPath = $_SERVER['DOCUMENT_ROOT']."/uploads/".$_FILES['file']['name'];
            $ResultCopy = copy($_FILES['file']['tmp_name'], $NewPath);
            if ($ResultCopy) $FileName = $_FILES['file']['name'];
        }
        if($ResultCopy) $Message = $Message."Прикрепленный файл: ".$FileName."\n\n";
        
        $arResult['IdMl'] = mail($arResult['Mail'], "Заполнена заявка", $Message);
    }
    
    $this->IncludeComponentTemplate();
    
    
  /*  use Bitrix\Main\Mail\Event;
    $Id = Event::send(array(
        "EVENT_NAME" => "Test mail3",
        "LID"=>"s1",
        "C_FIELDS" => array(
            "EMAIL"=> "romaprogramer@gmail.com",
            "USER_ID"=>1)
        )) ;
    $arResult['IdMl3'] = $Id;   */     
    
?>
