Разработать модуль «Гостевая книга»:
Админпанель:
	- Вывод списка отзывов
	- Удаление отзыва
	- Редактирование отзыва 
- Модерация отзывов. то есть после добавления отзыва он не появляется на сайте, а появляется в админке со статусом "не опубликован" и  пока админ его не просмотрит и не поменяет ему статус он на сайте не будет выведен

Пользовательская часть:
	- Вывод списка отзывов с разбивкой по страницам
	- Добавление отзыва
	 Список полей
	 Имя (цифры и буквы латинского алфавита) – обязательное поле
	 E-mail (формат e-mail) – обязательное поле
	 Text (непосредственно сам текст сообщения, HTML тэги недопустимы) – обязательное поле
	CAPTCHA (любая) – обязательное поле

Для того что-бы запустить проект необходимо 

Скачать репозиторий
git clone https://github.com/VladimirMusatov/Laravel_Wezom_Modul2.git

Установить зависимости 
Composr install

Скопировать файл .env.exemple и перeиминовать его в .env

Сгенерировать app_key
php artisan key:generate

Изменить в файлке .env строчки
DB_DATABASE=Laravel
DB_USERNAME=root
DB_PASSWORD=

Запустить миграции
php artisan migrate

Запустить сиды
php artisan db:seed

Почта и пароль от админки
Почта:admin@admin.com
Пароль:admin

Для того чтобы Капча заработала необходимо добавить секретный ключ и ключ сайта в файл .env

NOCAPTCHA_SECRET=secret-key
NOCAPTCHA_SITEKEY=site-key

Я работал на localhost и получал ошибку (Localhost is not in the list of supported domains for this site key.),для того чтобы её исправить нужно перейти в админку капчи и добавить новый домен 127.0.0.1 
