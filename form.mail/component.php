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
        $Arr["ACTIVE"] = "Y";
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
    }
    
    $this->IncludeComponentTemplate();
    
    /*use Bitrix\Main\Mail\Event;
    $Id = Event::send(array(
        "EVENT_NAME" => "Test mail3",
        "LID"=>"s1",
        "C_FIELDS" => array(
            "EMAIL"=> "romaprogramer@gmail.com",
            "USER_ID"=>1)
        ));
    $arResult['IdMl3'] = $Id;        
    */
?>
