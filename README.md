Приложение состоит из 3 страниц: основная, страница добавление книги в каталог и страница редактирования информации о книге. 
Все, что связано с этими страницами и действиями на них имеет в сввоем составе слова main, add, edit соответственно.  
Функции для работы с базой данных находятся в файле model.php папки models.
Код действий на каталогом находится в файлах с названиями controller[Name]Ajax. 
Код для формирование видов страниц находится в файлах с названиями controller[Name].
Виды страниц и шаблон расположены в папке views. 
Точка входа в приложение файл index.php.

Для запуска приложения необходимо иметь базу данных в СУБД MySQL, у меня она называется list. 
В базе данных должна быть создана таблица catalog с полями id, jenre, author, name, year. 
При наличии в базе данных указанной таблицы для запуска приложения остается только отредактировать файл settings_for_db,
т.е. вписать в него имя пользователя, пароль, и названиие базы данных.