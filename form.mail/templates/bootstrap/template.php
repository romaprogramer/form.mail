<?  (!defined(B_PROLOG_INCLUDED) || B_PROLOG_INCLUDED !==true) or exit; ?>

<? $this->addExternalCss("https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"); ?>

<?if($arResult['ModeForm']=="GETFORM"){?>
 
<script> 
    Num = 1
</script>

<div class="container">
  <!--  <form action="bitrix/components/market/form.mail/templates/bootstrap/sendform.php" method="post">-->
    <form  method="post" enctype="multipart/form-data">
        <div class="row my-4">
            <div class="col-md-5">
                <label for="title" class="form-label h6">Заголовок заявки</label>
                <input type="text" name="title" class="form-control form-control-sm" id="title">
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-4 ">
                <label class="form-label h6">Категория</label>
                <div class="form-check">
                    <input type="radio" name="category" class="form-check-input form-check-sm" name="category"  value="Масла, автохимия, фильтры." checked>
                    <label class="form-check-label">Масла, автохимия, фильтры.</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="category" class="class="form-check-input form-check-sm"" name="category" value="Шины, диски.">
                    <label class="form-check-label">Шины, диски.</label>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-4">
                <label class="form-label h6">Вид заявки</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="type" value="Запрос цены и сроки поставки" checked>
                    <label class="form-check-label">Запрос цены и сроки поставки</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="type" value="Попонение складов">
                    <label class="form-check-label">Попонение складов</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="type" value="Спецзаказ">
                    <label class="form-check-label">Спецзаказ</label>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-3">
                <label class="form-label h6">Склад поставки</label>
                <select class="form-select form-select-sm" name="sklad">
                    <option value="" selected>(выберите склад поставки)</option>
                </select>
            </div>
        </div>
        <div>
            <div class="h6">Состав заявки</div>
            <div id="groups">
                <div class="row">
                    <div class="col">
                        <label class="form-label">Бренд</label>
                    </div>
                    <div class="col">
                        <label class="form-label">Наименование</label>
                    </div>
                    <div class="col">
                        <label class="form-label">Количество</label>
                    </div>
                    <div class="col">
                        <label class="form-label">Фасовка</label>
                    </div>
                    <div class="col">
                        <label class="form-label">Клиент</label>
                    </div>
                    <div class="col">
                    </div>
                </div>
                <div id="group1" class="row my-4">
                    <div class="col">
                        <input type="text" class="form-control form-control-sm " name="brand[]" >
                    </div>
                    <div class="col">
                        <input type="text" class="form-control form-control-sm" name="product[]">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control form-control-sm" name="number[]">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control form-control-sm" name="fasovka[]">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control form-control-sm" name="client[]">
                    </div>
                    <div class="col mx-2">
                        <button type"button"  onclick="addGroup()" class="btn btn-primary p-1" >+</button>
                        <button type"button"  onclick="removeGroup()" class="btn btn-primary px-2 py-1">-</button>
                    </div>
                </div>
            </div>
        <div class="row my-4">
             <div id="groups">
                 <input type="file" name="file">
            </div>
        </div>
        <div class="row my-2">
            <div id="groups">
                 <div class="h6">Комментарий</div>
                 <div class="col-md-5">
                    <textarea class="form-control" rows="4" name="comment"></textarea>
                 </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-2 mx-3">
                <input type="submit" class="btn btn-primary" value="Отправить">
            </div>
        </div>
        <div>
            <input type="hidden" name="email" value="<? echo $arParams['MAIL'] ?>">
        </div>
    </form>
</div>  
  <? }elseif($arResult['ModeForm']=="MAIL" && $arResult['IdMl']!==false){ ?>
  <? //}elseif($arResult['ModeForm']=="MAIL"){ ?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <p>Заявка отправлена на почту компании.</p>
            </div>
        </div>
    </div>     
<?}?>  