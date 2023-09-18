# form.mail
tested component for Bitrix

В .zip-файле файлы компонента. 
Там названия для файлов .parameters.php и .description.php через точку, как нужно. 
Файлы были не полностью загружены (из-за названия с точкой).

# Обновления:

15.09.2023 около 13:30 - Доработан компонент для работы,
кроме кода загрузки прикрепленного файла.
Доработано:
- оформление по Bootstrap (размеры элементов, отступы, стили кнопок "+" и "-"),
- кнопки "+" и "-",
- код файла component.php  и файлы шаблона стали лучше как в логики "контроллера
и шаблона компонента".

15.09.2023 19:06 - Обновлен файл component.php:
- Исправлена ошибка (в плане логики работы контроллера) в получении адреса отправки -
теперь значение параметра массива для почтового шаблона $Arr["MAIL_TO"] берется 
из параметра массива контролера компонента $arResult['Mail'].
- добавлен параметр MAIL_FROM со значением в массив для почтового шаблона виде строки:
  $Arr["MAIL_FROM"] = "info@bitrixcms.agiletelebot.ru";

16.09.2023 14:50 - Обновлены файлы component.php и template.php:
- Добавлен код для обработки загруженного прикрепленного файла в файл контроллера
(для примера просто сделано копирование загруженного файла в папку /uploads в корне сайта
с тем же самым именем и расширением),
- Сделана отправка почты (через стандартную функцию mail()).
- Исправлен недочет в составлении текста письма - просто добавлен код для составления
 текста письма из принятой заявки.

16.09.2023 18:05 - Обновлены 3 файла: component.php, template.php и script.js :
- Исправлена ошибка в составлении текста письма (повтор некоторых строк),
- Исправлена ошибка при добалениии новой строки в блоке "Состав заявки"
и лучше написан код.

18.09.2023 12:37 - Обновлены файлы script.js и template.php :
- Обновлен JavaScript код, теперь используются объекты и их методы JS библиотеки Bitrix Framework.
-  Исправлена ошибка при удалении 1 строки в "Состав заявки" - добавлен атрибут со значением:
id="1"
 
Примечание: при работе кнопки "+" (нажатии), строка добавляется, но затем происходит перезагрузка
страницы, связано с со свойством проверки имеющем не точное название Window.BX.isProbablyReader.  

Компонент готов,
не считая возникающей перезагрузки страницы при нажатии кнопки "+".
