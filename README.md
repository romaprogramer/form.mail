# form.mail
tested component for Bitrix

В .zip-файле файлы компонента. 
Там названия для файлов .parameters.php и .description.php через точку, как нужно. 
Файлы были не полностью загружены (из-за названия с точкой).

# Обновления:

15.09.2023 около 13:30 - Доработан компонент для полной работы,
кроме кода загрузки прикрепленного файла.
Доработано:
- оформление по Bootstrap (размеры элементов, отступы, стили кнопок "+" и "-"),
- кнопки "+" и "-",
- код файла component.php  и файлы шаблона стали лучше как в логики "контроллера
и шаблона компонента".

15.09.2023 19:06 - Обновлен файл component.php:
- Исправлена ошибка (в плане логики работы контроллера) в получении адреса отправки -
теперь значение параметра массива для почтового шаблона $Arr["MAIL_TO"] берется 
из параметра массива контролера компонента $arResultх['Mail'].
- добавлен параметр MAIL_FROM со значением в массив для почтового шаблона виде строки:
  $Arr["MAIL_FROM"] = "info@bitrixcms.agiletelebot.ru";
