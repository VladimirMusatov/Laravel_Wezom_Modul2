Для выполнения этого задания я решил использовать Фреймворк Laravel последней версии.
Чтобы реализовать регистрацию и аутентификацию я использовал fortyfy.
Также я скачал пакет Laravel-permission для создания ролей и прав.

Я создал две роли, это user и admin.
Каждый новый зарегестрированный пользователь получает роль user.
Соответсвенно к админке есть доступ только у пользователя с ролью admin.

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

php artisan permission:create-role user

и роль admin 

php artisan permission:create-role admin

Каждый новый пользователь получает роль user и не может попасть в админку.
Что-бы дать права амина конкретному пользователю необходимо в таблице models_has_roles изменить запись, где model_id совпадает с id пользователя которому хотим дать права.
Конкретно изменить role_id с 1 на 2.

Для того чтобы Капча заработала необходимо добавить секретный ключ и ключ сайта в файл .env

NOCAPTCHA_SECRET=secret-key
NOCAPTCHA_SITEKEY=site-key

Я работал на localhost и получал ошибку (Localhost is not in the list of supported domains for this site key.),для того чтобы её исправить нужно перейти в админку капчи и добавить новый домен 127.0.0.1 
