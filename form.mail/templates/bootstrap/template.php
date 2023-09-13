<?  if(!defined(B_PROLOG_INCLUDED) || B_PROLOG_INCLUDED !==true) ?>

<? $this->addExternalCss("https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"); ?>

 <? 
  //var_dump($arParams);
 
  ?>
  
<div class="container-fluid">
    <form action="bitrix/components/market/form.mail/templates/bootstrap/sendform.php" method="post">
        <div class="mb-4">
            <label for="title" class="form-label h6">Заголовок заявки</label>
            <input type="text" name="title" class="form-control form-control-sm" id="title">
        </div>
        <div class="mb-4">
            <label class="form-label h6">Категория</label>
            <div class="form-check">
                <input type="radio" class="form-check-input form-check-sm" name="category"  value="Масла, автохимия, фильтры." checked>
                <label class="form-check-label">Масла, автохимия, фильтры.</label>
            </div>
            <div class="form-check">
                <input type="radio" class="class="form-check-input form-check-sm"" name="category" value="Шины, диски.">
                <label class="form-check-label">Шины, диски.</label>
            </div>
        </div>
        <div class="mb-4">
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
        <div class="mb-4">
            <label class="form-label h6">Склад поставки</label>
            <select class="form-select form-select-sm" name="sklad">
                <option selected>(выберите склад поставки)</option>
            </select>
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
                <div id="group1" class="row">
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
                    <div class="col">
                        <button type"button" id="add" onclick="addGroup()">+</button>
                        <button type"button" id="remove" onclick="removeGroup()">-</button>
                    </div>
                </div>
            </div>
         <div id="groups">
             <input type="file" name="" value="">
        </div>
        <div id="groups">
             <div class="h6">Комментарий</div>
            <textarea class="form-control" name="comment"></textarea>
        </div>
        <div id="groups">
            <input type="submit" class="btn btn-primary" value="Отправить">
        </div>
        <div>
            <input type="hidden" name="email" value="<? echo $arParams['MAIL'] ?>">
        </div>
    </form>
</div>  
    
   