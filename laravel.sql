-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Дек 12 2019 г., 20:00
-- Версия сервера: 8.0.12
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Верхняя одежда', NULL, NULL),
(2, 'Женское', NULL, NULL),
(3, 'Мужское', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `maintexts`
--

CREATE TABLE `maintexts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `showhide` enum('show','hide') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `small_body`, `body`, `url`, `showhide`, `created_at`, `updated_at`) VALUES
(1, 'О нас', 'Краткое описание', 'Описание агентства', 'about', 'show', NULL, NULL),
(2, 'Контакты', 'Краткое описание', 'Контактные данные', 'contact', 'show', NULL, NULL),
(3, 'Отзывы', 'Краткое описание', 'Отзывы покупателей', 'comments', 'show', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_28_164441_create_maintexts_table', 1),
(5, '2019_11_13_165909_create_products_table', 2),
(6, '2019_11_13_170612_create_categories_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `small_body` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `showhide` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `category_id` int(11) DEFAULT NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `body`, `small_body`, `showhide`, `category_id`, `picture`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Одежда этническая', NULL, 'Платье с коротким рукавом', NULL, '1', NULL, NULL, NULL, NULL, '2019-11-13 14:35:51', '2019-11-13 14:35:51'),
(2, 'Одежда этническая', NULL, 'uyfuyjhbjhcff', NULL, '1', NULL, NULL, NULL, NULL, '2019-11-13 14:37:24', '2019-11-13 14:37:24'),
(3, 'j', NULL, '<p>j</p>', NULL, '1', NULL, NULL, NULL, NULL, '2019-11-13 18:11:48', '2019-11-13 18:11:48'),
(4, 'j', NULL, '<p>Шестяное пальто длинное</p>', NULL, '1', NULL, NULL, NULL, NULL, '2019-11-18 17:47:42', '2019-11-18 17:47:42'),
(5, 'Оjhbvjhb', NULL, '<p>nbv jhb jkhvjhg</p>', NULL, '1', NULL, NULL, NULL, NULL, '2019-11-18 17:49:06', '2019-11-18 17:49:06'),
(6, 'Одежда этническая', NULL, '<p>hgfikhbuyfjkubutygfjklunbui</p>', NULL, '1', NULL, NULL, NULL, NULL, '2019-11-18 17:49:51', '2019-11-18 17:49:51'),
(7, '45', NULL, '<p>iopip poi poi poi pip</p>', NULL, '1', NULL, NULL, NULL, NULL, '2019-11-18 17:53:08', '2019-11-18 17:53:08'),
(8, '45', NULL, '<p>tyjuyjk tyijtyij tyijuyk</p>', NULL, '1', NULL, '19_11_18_09_10_57.jpg', NULL, NULL, '2019-11-18 18:10:57', '2019-11-18 18:10:57'),
(9, '45', NULL, '<p>dth erhgrt ergreg</p>', NULL, '1', NULL, '', 1, NULL, '2019-11-25 17:21:29', '2019-11-25 17:21:29'),
(10, '67', NULL, '<p>ti7 crtjutu6 rtuyr6tu</p>', NULL, '1', NULL, '19_11_25_08_24_28.jpg', 1, NULL, '2019-11-25 17:24:28', '2019-11-25 17:24:28'),
(11, '79', NULL, '<p>tfiju7i rju rtuj</p>', NULL, '1', NULL, '19_11_25_08_26_44.jpg', 1, NULL, '2019-11-25 17:26:44', '2019-11-25 17:26:44'),
(12, 'Одежда этническая', '90', '<p>e5y55 erty5y e5ry55</p>', NULL, '1', NULL, '19_11_25_08_35_48.jpg', 1, NULL, '2019-11-25 17:35:48', '2019-11-25 17:35:48'),
(13, 'одежда', '100', '<p>уцке5е ук5ен5н куерн6кен</p>', NULL, '1', NULL, '19_11_25_08_36_40.jpg', 1, NULL, '2019-11-25 17:36:40', '2019-11-25 17:36:40'),
(14, 'одежда', '76', '<p>уе5 куенп у5кен</p>', NULL, '1', NULL, '19_11_25_08_37_03.jpg', 1, NULL, '2019-11-25 17:37:04', '2019-11-25 17:37:04');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ekaterina', 'katerinka.1992@mail.ru', NULL, '$2y$10$APayBDza2IyKmAtT5Dpbb.ui17QG2oKMhj4nUZHQGxyi83WwslAzy', NULL, '2019-11-06 15:55:08', '2019-11-06 15:55:08');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `maintexts`
--
ALTER TABLE `maintexts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `maintexts`
--
ALTER TABLE `maintexts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
