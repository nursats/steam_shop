# Steam Knives — Laravel интернет-магазин ножей

Простое приложение интернет-магазина, разработанное на Laravel. Поддерживает:

* Просмотр каталога ножей
* Регистрацию и авторизацию пользователей
* Добавление товаров в корзину
* Просмотр содержимого корзины
* Хранение данных в базе данных MySQL

## Установка

1. Клонируйте репозиторий:

```bash
git clone https://github.com/your-name/steam-knives.git
cd steam-knives
```

2. Установите зависимости PHP и JS:

```bash
composer install
npm install
npm run dev
```

3. Создайте файл .env:

```bash
cp .env.example .env
```

4. Сгенерируйте ключ приложения:

```bash
php artisan key:generate
```

5. Укажите настройки базы данных в .env:

Пример:

DB\_CONNECTION=mysql
DB\_HOST=127.0.0.1
DB\_PORT=3306
DB\_DATABASE=steam\_knives
DB\_USERNAME=root
DB\_PASSWORD=ваш\_пароль

6. Примените миграции и (если нужно) сидеры:

```bash
php artisan migrate --seed
```

7. Запустите локальный сервер:

```bash
php artisan serve
```

Откройте в браузере: [http://localhost:8000](http://localhost:8000)

## Стек технологий

* Laravel 12
* MySQL
* Laravel Breeze (авторизация)
* Tailwind CSS (оформление)
* Alpine.js (фронтенд)

## Структура

* Контроллеры: app/Http/Controllers
* Модели: app/Models
* Представления: resources/views
* Маршруты: routes/web.php
* Миграции: database/migrations
* Сидеры: database/seeders

---

## Маршруты (Routes)

| Метод  | URL                 | Описание                          | Доступ           |
| ------ | ------------------- | --------------------------------- | ---------------- |
| GET    | `/`                 | Главная страница                  | Все              |
| GET    | `/knives`           | Просмотр каталога ножей           | Все              |
| POST   | `/cart/add/{knife}` | Добавить нож в корзину            | Авторизованные   |
| GET    | `/cart`             | Просмотр содержимого корзины      | Все (гости/авт.) |
| DELETE | `/cart/remove/{id}` | Удалить товар из корзины          | Авторизованные   |
| GET    | `/login`            | Форма входа                       | Гости            |
| POST   | `/login`            | Авторизация пользователя          | Гости            |
| GET    | `/register`         | Форма регистрации                 | Гости            |
| POST   | `/register`         | Регистрация пользователя          | Гости            |
| POST   | `/logout`           | Выход из аккаунта                 | Авторизованные   |
| GET    | `/profile`          | Просмотр и редактирование профиля | Авторизованные   |

---

> Все маршруты аутентификации генерируются Laravel Breeze или другим пакетом.

---



## Автор

tg: @nursatse

