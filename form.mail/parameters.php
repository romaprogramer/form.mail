<? (!defined(B_PROLOG_INCLUDED) || B_PROLOG_INCLUDED !==true) or exit; ?>

   // define("GETMAIL", "GETMAIL");
   // define("MAIL", "MAIL");
    
    $arComponentParameters = array(
        "PARAMETERS" => array(
            "MAIL" => array(
                "PARENT" => "BASE",
                "NAME" => "Email",
                "TYPE" => "STRING",
                "DEFAULT" => "@mail.ru",
                "REFRESH" => "Y"
            )
        )
    );