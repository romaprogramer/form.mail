<?  if(!defined(B_PROLOG_INCLUDED) || B_PROLOG_INCLUDED !==true) ?>

 <? 
  //var_dump($arParams);
 
  ?>
  
<div>
    <form action="bitrix/components/market/form.mail/templates/bootstrap/sendform.php" method="post">
        <div>
            <label>Заголовок заявки</label>
            <input type="text" name="title">
        </div>
        <div>
            <div>Категория</div>
            <input type="radio" name="category" value="Масла, автохимия, фильтры." checked><label>Масла, автохимия, фильтры.</label>
            <input type="radio" name="category" value="Шины, диски."><label>Шины, диски.</label>
        </div>
        <div>
            <div>Вид заявки</div>
            <input type="radio" name="type" value="Запрос цены и сроки поставки" checked><label>Запрос цены и сроки поставки</label>
            <input type="radio" name="type" value="Попонение складов"><label>Попонение складов</label>
            <input type="radio" name="type" value="Спецзаказ"><label>Спецзаказ</label>
        </div>
        <div>
            <div>Склад поставки</div>
            <select name="sklad">
                <option selected>(выберите склад поставки)</option>
            </select>
        </div>
        <div>
            <div>Состав заявки</div>
            <div id="groups">
                <div>
                    <label>Бренд</label>
                    <label>Наименование</label>
                    <label>Количество</label>
                    <label>Фасовка</label>
                    <label>Клиент</label>
                </div>
                <div id="group1">
                    <input type="text" name="brand[]" >
                    <input type="text" name="product[]">
                    <input type="text" name="number[]">
                    <input type="text" name="fasovka[]">
                    <input type="text" name="client[]">
                    <button type"button" id="add" onclick="addGroup()">+</button>
                    <button type"button" id="remove" onclick="removeGroup()">-</button>
                </div>
            </div>
         <div id="groups">
             <input type="file" name="" value="">
        </div>
        <div id="groups">
             <div>Комментарий</div>
            <textarea name="comment"></textarea>
        </div>
        <div id="groups">
            <input type="submit" name="" value="Отправить">
        </div>
        <div>
            <input type="hidden" name="email" value="<? echo $arParams['MAIL'] ?>">
        </div>
    </form>
</div>  
    
    