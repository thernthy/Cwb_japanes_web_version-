-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 02:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new-world`
--

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

CREATE TABLE `actions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_jp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_jp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `actions`
--

INSERT INTO `actions` (`id`, `title_en`, `title_jp`, `desc_en`, `desc_jp`, `img`, `bg`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Workshop', 'ワークショップ', '<p>Workshop description</p>', 'ワークショップ', 'object-group', 'uploads/1/2022-10/sennin_game.jpg', 'workshop', '2022-10-22 00:11:19', '2022-10-26 04:20:15'),
(2, 'Learn/Game', '学び', 'Learn/Game', 'Descriptiion of 学び', 'gamepad', 'uploads/1/2022-10/senen_no_mori.jpg', 'learngame', '2022-10-22 00:12:28', '2022-10-26 03:21:05'),
(3, 'Tour', 'ツアー', 'ツアー\r\nTour', 'ツアー\r\nTour', 'suitcase', NULL, 'tour', '2022-10-22 00:13:16', '2022-10-26 02:21:47'),
(4, 'Idea', 'アイデア', '<p>Idea<br></p>', '<p>アイデア<br></p>', 'lightbulb-o', NULL, 'idea', '2022-10-22 00:14:54', '2022-10-26 02:21:39'),
(5, 'Shopping', '買物', '<p>Shopping</p>', 'Description of 買物', 'shopping-bag', NULL, 'shopping', '2022-10-22 02:21:39', '2022-10-26 02:21:32'),
(6, 'Entrepreneur Support', '起業家サポート', '起業家サポート\r\nEntrepreneur Support', '起業家サポート Entrepreneur Support', 'users', NULL, 'entrepreneur-support', '2022-10-22 02:22:40', '2022-10-26 02:21:25'),
(7, 'Join as Avatar', 'アバターとして参加する', 'アバターとして参加する\r\nJoin as Avatar', 'アバターとして参加する\r\nJoin as Avatar', 'user-plus', NULL, 'join-as-avatar', '2022-10-22 02:23:36', '2022-10-26 02:21:18');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_country` int(10) UNSIGNED NOT NULL,
  `id_action` int(10) UNSIGNED NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_jp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_jp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_cover` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `id_country`, `id_action`, `title_en`, `title_jp`, `desc_en`, `desc_jp`, `youtube`, `photo_cover`, `photo1`, `photo2`, `photo3`, `photo4`, `id_keyword`, `slug`, `created_at`, `updated_at`) VALUES
(7, 3, 2, 'Hebatnya', 'Hebatnya', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Nam metus justo, dapibus id lorem at, sollicitudin bibendum leo. Quisque malesuada ut massa sit amet vehicula. Proin dictum vitae tortor sed luctus. Nulla faucibus lacinia porttitor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus nulla metus, vitae aliquam erat luctus nec. Nulla mollis ac tortor vel rhoncus. Ut facilisis lobortis dui, non consequat sapien. Suspendisse potenti. Suspendisse potenti. Integer nec laoreet odio, at convallis metus. Sed elementum augue a nisl pretium facilisis. Etiam mi nisi, faucibus ac eleifend sed, elementum et metus. Morbi id diam sagittis, ultricies lacus pulvinar, elementum tellus. Suspendisse pulvinar justo eu lectus fermentum facilisis.</span><br></p>', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Nam metus justo, dapibus id lorem at, sollicitudin bibendum leo. Quisque malesuada ut massa sit amet vehicula. Proin dictum vitae tortor sed luctus. Nulla faucibus lacinia porttitor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus nulla metus, vitae aliquam erat luctus nec. Nulla mollis ac tortor vel rhoncus. Ut facilisis lobortis dui, non consequat sapien. Suspendisse potenti. Suspendisse potenti. Integer nec laoreet odio, at convallis metus. Sed elementum augue a nisl pretium facilisis. Etiam mi nisi, faucibus ac eleifend sed, elementum et metus. Morbi id diam sagittis, ultricies lacus pulvinar, elementum tellus. Suspendisse pulvinar justo eu lectus fermentum facilisis.</span><br></p>', 'LBp967lApCQ', NULL, NULL, NULL, NULL, NULL, 'a:3:{i:0;s:1:\"3\";i:1;s:1:\"4\";i:2;s:1:\"7\";}', 'hebatnya', '2022-10-22 23:11:22', '2022-10-29 22:06:33'),
(8, 1, 2, 'Coba Muahaha Laper bangett', 'Coba Muahaha', '<p>coba banyakda ta<br></p>', '<p>coba banyakda ta<br></p>', 'https://youtube.com/@zeneight', 'uploads/1/2022-10/kotasawah.jpg', NULL, NULL, NULL, NULL, 'a:3:{i:0;s:1:\"2\";i:1;s:1:\"3\";i:2;s:1:\"8\";}', 'coba-muahaha-laper-bangett', '2022-10-23 00:22:57', '2022-10-29 20:54:46'),
(9, 1, 4, 'Another activity on the move', 'Another activity on the move', '<p>Another activity on the move<br></p>', '<p>Another activity on the move<br></p>', NULL, 'uploads/1/2022-11/aw5fmoqtt5b71.jpg', 'uploads/1/2022-11/untitled.png', 'uploads/1/2022-11/photo_6325473606024407196_y.jpg', 'uploads/1/2022-11/screenshot_266.png', NULL, 'a:2:{i:0;s:1:\"5\";i:1;s:1:\"6\";}', 'another-activity-on-the-move', '2022-11-03 03:21:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_apicustom`
--

CREATE TABLE `cms_apicustom` (
  `id` int(10) UNSIGNED NOT NULL,
  `permalink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tabel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kolom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_query_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sql_where` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `method_type` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responses` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_apikey`
--

CREATE TABLE `cms_apikey` (
  `id` int(10) UNSIGNED NOT NULL,
  `screetkey` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hit` int(11) DEFAULT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_dashboard`
--

CREATE TABLE `cms_dashboard` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_email_queues`
--

CREATE TABLE `cms_email_queues` (
  `id` int(10) UNSIGNED NOT NULL,
  `send_at` datetime DEFAULT NULL,
  `email_recipient` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_from_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_from_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_cc_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_attachments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_sent` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_email_templates`
--

CREATE TABLE `cms_email_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_email_templates`
--

INSERT INTO `cms_email_templates` (`id`, `name`, `slug`, `subject`, `content`, `description`, `from_name`, `from_email`, `cc_email`, `created_at`, `updated_at`) VALUES
(1, 'Email Template Forgot Password Backend', 'forgot_password_backend', 'Setting', '<p>Hi,</p><p>Someone requested forgot password, here is your new password : </p><p>[password]</p><p><br></p><p>--</p><p>Regards,</p><p>Admin</p>', '[password]', 'System', 'system@new-world.net', NULL, '2022-08-02 05:21:45', '2022-10-23 00:32:38');

-- --------------------------------------------------------

--
-- Table structure for table `cms_logs`
--

CREATE TABLE `cms_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `ipaddress` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `useragent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cms_users` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_logs`
--

INSERT INTO `cms_logs` (`id`, `ipaddress`, `useragent`, `url`, `description`, `details`, `id_cms_users`, `created_at`, `updated_at`) VALUES
(1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:91.0) Gecko/20100101 Firefox/91.0', 'http://localhost:8000/admin/login', 'admin@crudbooster.com login with IP Address 127.0.0.1', '', 1, '2022-08-02 05:22:43', NULL),
(2, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:91.0) Gecko/20100101 Firefox/91.0', 'http://localhost:8000/admin/users/edit-save/1', 'Update data Administrator at Users Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>name</td><td>Super Admin</td><td>Administrator</td></tr><tr><td>photo</td><td></td><td>uploads/1/2022-08/user.png</td></tr><tr><td>email</td><td>admin@crudbooster.com</td><td>admin@new-world.net</td></tr><tr><td>password</td><td>$2y$10$X6xcOftwjVn.7N/6VQD2KOZw0l2MnO2SXHCaBkySKbOW1knLJV8y2</td><td>$2y$10$7Q/043L5lx4Z7jMEjwN4buiGhb.fNGJETwMchyLv/2gg1xoAVkbKK</td></tr><tr><td>id_cms_privileges</td><td>1</td><td></td></tr><tr><td>status</td><td>Active</td><td></td></tr></tbody></table>', 1, '2022-08-02 05:23:54', NULL),
(3, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:91.0) Gecko/20100101 Firefox/91.0', 'http://localhost:8000/admin/logout', 'admin@new-world.net logout', '', 1, '2022-08-02 05:25:31', NULL),
(4, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:91.0) Gecko/20100101 Firefox/91.0', 'http://localhost:8000/admin/login', 'admin@new-world.net login with IP Address 127.0.0.1', '', 1, '2022-08-02 05:25:58', NULL),
(5, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64; rv:102.0) Gecko/20100101 Firefox/102.0', 'http://localhost:8000/admin/login', 'admin@new-world.net login with IP Address 127.0.0.1', '', 1, '2022-10-10 18:37:52', NULL),
(6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/login', 'admin@new-world.net login with IP Address 127.0.0.1', '', 1, '2022-10-21 19:36:27', NULL),
(7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/users/delete-image', 'Delete the image of Administrator at Users Management', '', 1, '2022-10-21 19:36:41', NULL),
(8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/users/edit-save/1', 'Update data Administrator at Users Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>photo</td><td></td><td>uploads/1/2022-10/tara.jfif</td></tr><tr><td>password</td><td>$2y$10$Ft/qa95kHeS8lw6.RTA3yuPmz.3nzMWW2jFnukivNYnug0gkwBKOW</td><td></td></tr><tr><td>id_cms_privileges</td><td>1</td><td></td></tr><tr><td>status</td><td>Active</td><td></td></tr></tbody></table>', 1, '2022-10-21 19:36:55', NULL),
(9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/logout', 'admin@new-world.net logout', '', 1, '2022-10-21 19:37:02', NULL),
(10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/login', 'admin@new-world.net login with IP Address 127.0.0.1', '', 1, '2022-10-21 19:37:07', NULL),
(11, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/menu_management/add-save', 'Add New Data Masters at Menu Management', '', 1, '2022-10-21 19:52:35', NULL),
(12, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/menu_management/edit-save/5', 'Update data Activities at Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>icon</td><td>fa fa-folder-o</td><td>fa fa-tasks</td></tr><tr><td>sorting</td><td>2</td><td></td></tr></tbody></table>', 1, '2022-10-21 19:53:36', NULL),
(13, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/menu_management/edit-save/2', 'Update data Countries at Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>icon</td><td>fa fa-folder</td><td>fa fa-flag</td></tr><tr><td>parent_id</td><td>6</td><td></td></tr><tr><td>sorting</td><td>4</td><td></td></tr></tbody></table>', 1, '2022-10-21 19:53:59', NULL),
(14, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/menu_management/edit-save/3', 'Update data Keywords at Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>icon</td><td>fa fa-folder-o</td><td>fa fa-tags</td></tr><tr><td>parent_id</td><td>6</td><td></td></tr></tbody></table>', 1, '2022-10-21 19:54:20', NULL),
(15, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/menu_management/edit-save/1', 'Update data Actions at Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>icon</td><td>fa fa-folder-o</td><td>fa fa-tag</td></tr><tr><td>parent_id</td><td>6</td><td></td></tr><tr><td>sorting</td><td>2</td><td></td></tr></tbody></table>', 1, '2022-10-21 19:54:40', NULL),
(16, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/menu_management/edit-save/4', 'Update data Links at Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>icon</td><td>fa fa-folder-o</td><td>fa fa-file-code-o</td></tr><tr><td>parent_id</td><td>6</td><td></td></tr><tr><td>sorting</td><td>3</td><td></td></tr></tbody></table>', 1, '2022-10-21 19:55:17', NULL),
(17, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/menu_management/edit-save/3', 'Update data Keywords at Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>parent_id</td><td>6</td><td></td></tr></tbody></table>', 1, '2022-10-21 19:55:26', NULL),
(18, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/menu_management/edit-save/1', 'Update data Actions at Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>parent_id</td><td>6</td><td></td></tr><tr><td>sorting</td><td>2</td><td></td></tr></tbody></table>', 1, '2022-10-21 19:55:34', NULL),
(19, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/menu_management/edit-save/2', 'Update data Countries at Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>parent_id</td><td>6</td><td></td></tr><tr><td>sorting</td><td>4</td><td></td></tr></tbody></table>', 1, '2022-10-21 19:55:42', NULL),
(20, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/menu_management/edit-save/5', 'Update data Activities at Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>sorting</td><td>2</td><td></td></tr></tbody></table>', 1, '2022-10-21 19:55:53', NULL),
(21, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/statistic_builder/add-save', 'Add New Data default at Statistic Builder', '', 1, '2022-10-21 19:58:24', NULL),
(22, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/menu_management/add-save', 'Add New Data Dashboard at Menu Management', '', 1, '2022-10-21 20:03:23', NULL),
(23, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/statistic_builder/edit-save/1', 'Update data Dashboard at Statistic Builder', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>name</td><td>default</td><td>Dashboard</td></tr><tr><td>slug</td><td>default</td><td></td></tr></tbody></table>', 1, '2022-10-21 20:03:48', NULL),
(24, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/countries/add-save', 'Add New Data Indonesia at Countries', '', 1, '2022-10-21 20:08:38', NULL),
(25, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/countries/add-save', 'Add New Data Cambodia at Countries', '', 1, '2022-10-21 20:08:51', NULL),
(26, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/countries/add-save', 'Add New Data Brunei at Countries', '', 1, '2022-10-21 20:09:27', NULL),
(27, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/countries/add-save', 'Add New Data East Timor at Countries', '', 1, '2022-10-21 20:09:37', NULL),
(28, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/countries/add-save', 'Add New Data Laos at Countries', '', 1, '2022-10-21 20:09:46', NULL),
(29, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/countries/add-save', 'Add New Data Malaysia at Countries', '', 1, '2022-10-21 20:09:56', NULL),
(30, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/countries/add-save', 'Add New Data Myanmar at Countries', '', 1, '2022-10-21 20:10:03', NULL),
(31, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/countries/add-save', 'Add New Data Philippines at Countries', '', 1, '2022-10-21 20:10:12', NULL),
(32, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/countries/add-save', 'Add New Data Singapore at Countries', '', 1, '2022-10-21 20:10:18', NULL),
(33, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/countries/add-save', 'Add New Data Thailand at Countries', '', 1, '2022-10-21 20:10:25', NULL),
(34, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/countries/add-save', 'Add New Data Vietnam at Countries', '', 1, '2022-10-21 20:10:31', NULL),
(35, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/countries/add-save', 'Add New Data Japan at Countries', '', 1, '2022-10-21 20:10:39', NULL),
(36, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/countries/edit-save/5', 'Update data Laos at Countries', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>desc</td><td></td><td><p><a href=\"https://en.wikipedia.org/wiki/Laos\" title=\"\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-weight: 700;\">Laos</a><br></p></td></tr></tbody></table>', 1, '2022-10-21 20:10:55', NULL),
(37, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/countries/edit-save/4', 'Update data East Timor at Countries', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>desc</td><td></td><td><p><a href=\"https://en.wikipedia.org/wiki/East_Timor\" title=\"\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-weight: 700;\">East Timor</a><br></p></td></tr></tbody></table>', 1, '2022-10-21 20:11:04', NULL),
(38, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/keywords/add-save', 'Add New Data Rice Field at Keywords', '', 1, '2022-10-21 20:12:30', NULL),
(39, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/keywords/add-save', 'Add New Data Forest - Land at Keywords', '', 1, '2022-10-21 20:13:06', NULL),
(40, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/keywords/add-save', 'Add New Data Water at Keywords', '', 1, '2022-10-21 20:14:45', NULL),
(41, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/keywords/add-save', 'Add New Data Herbs at Keywords', '', 1, '2022-10-21 20:15:45', NULL),
(42, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/keywords/add-save', 'Add New Data Cooperative at Keywords', '', 1, '2022-10-21 20:17:10', NULL),
(43, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/keywords/add-save', 'Add New Data Food at Keywords', '', 1, '2022-10-21 20:17:58', NULL),
(44, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/keywords/add-save', 'Add New Data Handicraft at Keywords', '', 1, '2022-10-21 20:18:46', NULL),
(45, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/keywords/add-save', 'Add New Data Traditional Culture at Keywords', '', 1, '2022-10-21 20:20:20', NULL),
(46, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/keywords/add-save', 'Add New Data Field at Keywords', '', 1, '2022-10-21 20:21:01', NULL),
(47, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/login', 'admin@new-world.net login with IP Address 127.0.0.1', '', 1, '2022-10-22 00:09:50', NULL),
(48, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/actions/add-save', 'Add New Data Workshop at Actions', '', 1, '2022-10-22 00:11:19', NULL),
(49, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/actions/add-save', 'Add New Data Learn/Game at Actions', '', 1, '2022-10-22 00:12:28', NULL),
(50, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/actions/add-save', 'Add New Data Tour at Actions', '', 1, '2022-10-22 00:13:16', NULL),
(51, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/actions/add-save', 'Add New Data Idea at Actions', '', 1, '2022-10-22 00:14:54', NULL),
(52, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/actions/add-save', 'Add New Data Shopping at Actions', '', 1, '2022-10-22 02:21:39', NULL),
(53, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/actions/add-save', 'Add New Data Entrepreneur Support at Actions', '', 1, '2022-10-22 02:22:40', NULL),
(54, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/actions/add-save', 'Add New Data Join as Avatar at Actions', '', 1, '2022-10-22 02:23:36', NULL),
(55, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/login', 'admin@new-world.net login with IP Address 127.0.0.1', '', 1, '2022-10-22 12:04:06', NULL),
(56, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/activities/add-save', 'Add New Data dafasdfasdf at Activities', '', 1, '2022-10-22 13:03:44', NULL),
(57, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/login', 'admin@new-world.net login with IP Address 127.0.0.1', '', 1, '2022-10-22 19:51:53', NULL),
(58, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/activities/add-save', 'Add New Data Coba input data at Activities', '', 1, '2022-10-22 22:51:56', NULL),
(59, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/activities/delete/2', 'Delete data dafasdfasdf at Activities', '', 1, '2022-10-22 23:04:49', NULL),
(60, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/activities/delete/1', 'Delete data coba test at Activities', '', 1, '2022-10-22 23:04:53', NULL),
(61, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/activities/add-save', 'Add New Data The best singing slazer at Activities', '', 1, '2022-10-22 23:05:16', NULL),
(62, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/activities/add-save', 'Add New Data coba banyakda ta at Activities', '', 1, '2022-10-22 23:08:30', NULL),
(63, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/activities/add-save', 'Add New Data Hebatnya at Activities', '', 1, '2022-10-22 23:11:22', NULL),
(64, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/activities/delete/4', 'Delete data The best singing slazer at Activities', '', 1, '2022-10-22 23:48:25', NULL),
(65, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/activities/delete/3', 'Delete data Coba input data at Activities', '', 1, '2022-10-22 23:48:55', NULL),
(66, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/links/add-save', 'Add New Data Sebuah link at Links', '', 1, '2022-10-23 00:06:30', NULL),
(67, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/activities/add-save', 'Add New Data coba banyakda ta at Activities', '', 1, '2022-10-23 00:22:57', NULL),
(68, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/activities/delete/6', 'Delete data coba banyakda ta at Activities', '', 1, '2022-10-23 00:23:31', NULL),
(69, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/activities/edit-save/8', 'Update data Coba Muahaha at Activities', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>title_en</td><td>coba banyakda ta</td><td>Coba Muahaha</td></tr><tr><td>title_jp</td><td>coba banyakda ta</td><td>Coba Muahaha</td></tr></tbody></table>', 1, '2022-10-23 00:25:42', NULL),
(70, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/activities/edit-save/8', 'Update data Coba Muahaha at Activities', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>id_keyword</td><td>a:1:{i:0;s:1:\"2\";}</td><td>a:3:{i:0;s:1:\"2\";i:1;s:1:\"3\";i:2;s:1:\"8\";}</td></tr></tbody></table>', 1, '2022-10-23 00:26:02', NULL),
(71, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/activities/edit-save/8', 'Update data Coba Muahaha at Activities', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>id_country</td><td>5</td><td>1</td></tr><tr><td>id_action</td><td>5</td><td>2</td></tr></tbody></table>', 1, '2022-10-23 00:26:48', NULL),
(72, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/settings/add-save', 'Add New Data about at Settings', '', 1, '2022-10-23 00:29:22', NULL),
(73, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/settings/edit-save/17', 'Update data  at Settings', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>name</td><td>about</td><td></td></tr><tr><td>content</td><td></td><td></td></tr><tr><td>content_input_type</td><td>wysiwyg</td><td>textarea</td></tr><tr><td>dataenum</td><td></td><td></td></tr><tr><td>helper</td><td></td><td></td></tr></tbody></table>', 1, '2022-10-23 00:31:19', NULL),
(74, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/email_templates/edit-save/1', 'Update data Email Template Forgot Password Backend at Email Templates', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>subject</td><td></td><td>Setting</td></tr><tr><td>from_email</td><td>system@crudbooster.com</td><td>system@new-world.net</td></tr><tr><td>cc_email</td><td></td><td></td></tr></tbody></table>', 1, '2022-10-23 00:32:38', NULL),
(75, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/activities/edit-save/8', 'Update data Coba Muahaha at Activities', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody></tbody></table>', 1, '2022-10-23 00:33:40', NULL),
(76, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/activities/edit-save/8', 'Update data Coba Muahaha Laper bangett at Activities', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody></tbody></table>', 1, '2022-10-23 00:35:35', NULL),
(77, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/login', 'admin@new-world.net login with IP Address 127.0.0.1', '', 1, '2022-10-26 02:20:03', NULL),
(78, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/actions/edit-save/7', 'Update data Join as Avatar at Actions', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody></tbody></table>', 1, '2022-10-26 02:21:18', NULL),
(79, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/actions/edit-save/6', 'Update data Entrepreneur Support at Actions', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody></tbody></table>', 1, '2022-10-26 02:21:25', NULL),
(80, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/actions/edit-save/5', 'Update data Shopping at Actions', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody></tbody></table>', 1, '2022-10-26 02:21:32', NULL),
(81, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/actions/edit-save/4', 'Update data Idea at Actions', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody></tbody></table>', 1, '2022-10-26 02:21:39', NULL),
(82, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/actions/edit-save/3', 'Update data Tour at Actions', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody></tbody></table>', 1, '2022-10-26 02:21:47', NULL),
(83, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/actions/edit-save/2', 'Update data Learn/Game at Actions', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody></tbody></table>', 1, '2022-10-26 02:21:55', NULL),
(84, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/actions/edit-save/2', 'Update data Learn/Game at Actions', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>slug</td><td>learngame</td><td></td></tr></tbody></table>', 1, '2022-10-26 02:22:03', NULL),
(85, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/actions/edit-save/1', 'Update data Workshop at Actions', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody></tbody></table>', 1, '2022-10-26 02:22:11', NULL),
(86, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/keywords/edit-save/9', 'Update data Field at Keywords', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>slug</td><td></td><td></td></tr></tbody></table>', 1, '2022-10-26 02:22:31', NULL),
(87, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/keywords/edit-save/8', 'Update data Traditional Culture at Keywords', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>slug</td><td></td><td></td></tr></tbody></table>', 1, '2022-10-26 02:22:38', NULL),
(88, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/keywords/edit-save/7', 'Update data Handicraft at Keywords', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>slug</td><td></td><td></td></tr></tbody></table>', 1, '2022-10-26 02:22:45', NULL),
(89, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/keywords/edit-save/6', 'Update data Food at Keywords', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>slug</td><td></td><td></td></tr></tbody></table>', 1, '2022-10-26 02:22:53', NULL),
(90, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/keywords/edit-save/5', 'Update data Cooperative at Keywords', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>slug</td><td></td><td></td></tr></tbody></table>', 1, '2022-10-26 02:23:28', NULL),
(91, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/keywords/edit-save/5', 'Update data Cooperative at Keywords', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>slug</td><td>cooperative</td><td></td></tr></tbody></table>', 1, '2022-10-26 02:23:35', NULL),
(92, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/actions/edit-save/2', 'Update data Learn/Game at Actions', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>bg</td><td></td><td>uploads/1/2022-10/senen_no_mori.jpg</td></tr><tr><td>slug</td><td>learngame</td><td></td></tr></tbody></table>', 1, '2022-10-26 03:21:05', NULL),
(93, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/actions/edit-save/1', 'Update data Workshop at Actions', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>bg</td><td></td><td>uploads/1/2022-10/sennin_game.jpg</td></tr><tr><td>slug</td><td>workshop</td><td></td></tr></tbody></table>', 1, '2022-10-26 04:20:15', NULL),
(94, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/login', 'admin@new-world.net login with IP Address 127.0.0.1', '', 1, '2022-10-29 20:53:53', NULL),
(95, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/activities/edit-save/8', 'Update data Coba Muahaha Laper bangett at Activities', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody></tbody></table>', 1, '2022-10-29 20:54:47', NULL),
(96, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/activities/edit-save/7', 'Update data Hebatnya at Activities', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody></tbody></table>', 1, '2022-10-29 20:55:10', NULL),
(97, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/activities/edit-save/7', 'Update data Hebatnya at Activities', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>slug</td><td>hebatnya</td><td></td></tr></tbody></table>', 1, '2022-10-29 20:56:05', NULL),
(98, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/activities/delete-image', 'Delete the image of Hebatnya at Activities', '', 1, '2022-10-29 21:04:27', NULL),
(99, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/keywords/edit-save/9', 'Update data Field at Keywords', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>slug</td><td>field</td><td></td></tr></tbody></table>', 1, '2022-10-29 21:36:13', NULL),
(100, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/keywords/edit-save/1', 'Update data Rice Field at Keywords', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>slug</td><td></td><td></td></tr></tbody></table>', 1, '2022-10-29 21:36:34', NULL),
(101, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/keywords/edit-save/2', 'Update data Forest - Land at Keywords', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>slug</td><td></td><td></td></tr></tbody></table>', 1, '2022-10-29 21:36:40', NULL),
(102, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/keywords/edit-save/3', 'Update data Water at Keywords', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>slug</td><td></td><td></td></tr></tbody></table>', 1, '2022-10-29 21:36:48', NULL),
(103, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/keywords/edit-save/4', 'Update data Herbs at Keywords', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>slug</td><td></td><td></td></tr></tbody></table>', 1, '2022-10-29 21:36:55', NULL),
(104, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/activities/edit-save/7', 'Update data Hebatnya at Activities', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>desc_en</td><td><p>Hebatnya<br></p></td><td><p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Nam metus justo, dapibus id lorem at, sollicitudin bibendum leo. Quisque malesuada ut massa sit amet vehicula. Proin dictum vitae tortor sed luctus. Nulla faucibus lacinia porttitor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus nulla metus, vitae aliquam erat luctus nec. Nulla mollis ac tortor vel rhoncus. Ut facilisis lobortis dui, non consequat sapien. Suspendisse potenti. Suspendisse potenti. Integer nec laoreet odio, at convallis metus. Sed elementum augue a nisl pretium facilisis. Etiam mi nisi, faucibus ac eleifend sed, elementum et metus. Morbi id diam sagittis, ultricies lacus pulvinar, elementum tellus. Suspendisse pulvinar justo eu lectus fermentum facilisis.</span><br></p></td></tr><tr><td>desc_jp</td><td><p>Hebatnya<br></p></td><td><p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Nam metus justo, dapibus id lorem at, sollicitudin bibendum leo. Quisque malesuada ut massa sit amet vehicula. Proin dictum vitae tortor sed luctus. Nulla faucibus lacinia porttitor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus nulla metus, vitae aliquam erat luctus nec. Nulla mollis ac tortor vel rhoncus. Ut facilisis lobortis dui, non consequat sapien. Suspendisse potenti. Suspendisse potenti. Integer nec laoreet odio, at convallis metus. Sed elementum augue a nisl pretium facilisis. Etiam mi nisi, faucibus ac eleifend sed, elementum et metus. Morbi id diam sagittis, ultricies lacus pulvinar, elementum tellus. Suspendisse pulvinar justo eu lectus fermentum facilisis.</span><br></p></td></tr><tr><td>slug</td><td>hebatnya</td><td></td></tr></tbody></table>', 1, '2022-10-29 22:06:33', NULL),
(105, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/login', 'admin@new-world.net login with IP Address 127.0.0.1', '', 1, '2022-11-03 03:15:01', NULL),
(106, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/activities/add-save', 'Add New Data Another activity on the move at Activities', '', 1, '2022-11-03 03:21:48', NULL),
(107, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'http://localhost:8000/admin/settings/edit-save/17', 'Update data  at Settings', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>name</td><td>about</td><td></td></tr><tr><td>content</td><td>Donec a suscipit turpis. Duis hendrerit risus arcu, et eleifend ipsum vaius vel. Nam tortor lacus, fringilla nec quam a, volupat laoreet dui. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam beatae ut, a blanditiis in aspernatur est debitis. Optio quis inventore officia numquam nostrum qui soluta, recusandae mollitia labore magnam doloribus.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae laudantium molestias eaque iusto. Eligendi iure consequatur, molestiae quaerat eaque maxime dolorem sapiente quia doloremque tempore, repellendus quasi aliquid cumque voluptas?\r\n\r\niure consequatur, molestiae quaerat eaque maxime dolorem sapiente quia doloremque tempore, repellendus quasi aliquid cumque</td><td></td></tr><tr><td>content_input_type</td><td>textarea</td><td>wysiwyg</td></tr><tr><td>dataenum</td><td></td><td></td></tr><tr><td>helper</td><td></td><td></td></tr></tbody></table>', 1, '2022-11-03 04:16:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_menus`
--

CREATE TABLE `cms_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'url',
  `path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_dashboard` tinyint(1) NOT NULL DEFAULT 0,
  `id_cms_privileges` int(11) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_menus`
--

INSERT INTO `cms_menus` (`id`, `name`, `type`, `path`, `color`, `icon`, `parent_id`, `is_active`, `is_dashboard`, `id_cms_privileges`, `sorting`, `created_at`, `updated_at`) VALUES
(1, 'Actions', 'Route', 'AdminActionsControllerGetIndex', 'normal', 'fa fa-tag', 6, 1, 0, 1, 2, '2022-10-21 19:38:07', '2022-10-21 19:55:33'),
(2, 'Countries', 'Route', 'AdminCountriesControllerGetIndex', 'normal', 'fa fa-flag', 6, 1, 0, 1, 4, '2022-10-21 19:39:48', '2022-10-21 19:55:42'),
(3, 'Keywords', 'Route', 'AdminKeywordsControllerGetIndex', 'normal', 'fa fa-tags', 6, 1, 0, 1, 1, '2022-10-21 19:41:43', '2022-10-21 19:55:26'),
(4, 'Links', 'Route', 'AdminLinksControllerGetIndex', 'normal', 'fa fa-file-code-o', 6, 1, 0, 1, 3, '2022-10-21 19:45:35', '2022-10-21 19:55:17'),
(5, 'Activities', 'Route', 'AdminActivitiesControllerGetIndex', 'normal', 'fa fa-tasks', 0, 1, 0, 1, 2, '2022-10-21 19:47:22', '2022-10-21 19:55:53'),
(6, 'Masters', 'URL', '#!', 'normal', 'fa fa-folder-open', 0, 1, 0, 1, 1, '2022-10-21 19:52:35', NULL),
(7, 'Dashboard', 'Statistic', 'statistic_builder/show/default', 'normal', 'fa fa-dashboard', 0, 1, 1, 1, NULL, '2022-10-21 20:03:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_menus_privileges`
--

CREATE TABLE `cms_menus_privileges` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cms_menus` int(11) DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_menus_privileges`
--

INSERT INTO `cms_menus_privileges` (`id`, `id_cms_menus`, `id_cms_privileges`) VALUES
(6, 6, 2),
(7, 6, 1),
(12, 4, 2),
(13, 4, 1),
(14, 3, 2),
(15, 3, 1),
(16, 1, 2),
(17, 1, 1),
(18, 2, 2),
(19, 2, 1),
(20, 5, 2),
(21, 5, 1),
(22, 7, 2),
(23, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_moduls`
--

CREATE TABLE `cms_moduls` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_protected` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_moduls`
--

INSERT INTO `cms_moduls` (`id`, `name`, `icon`, `path`, `table_name`, `controller`, `is_protected`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Notifications', 'fa fa-cog', 'notifications', 'cms_notifications', 'NotificationsController', 1, 1, '2022-08-02 05:21:45', NULL, NULL),
(2, 'Privileges', 'fa fa-cog', 'privileges', 'cms_privileges', 'PrivilegesController', 1, 1, '2022-08-02 05:21:45', NULL, NULL),
(3, 'Privileges Roles', 'fa fa-cog', 'privileges_roles', 'cms_privileges_roles', 'PrivilegesRolesController', 1, 1, '2022-08-02 05:21:45', NULL, NULL),
(4, 'Users Management', 'fa fa-users', 'users', 'cms_users', 'AdminCmsUsersController', 0, 1, '2022-08-02 05:21:45', NULL, NULL),
(5, 'Settings', 'fa fa-cog', 'settings', 'cms_settings', 'SettingsController', 1, 1, '2022-08-02 05:21:45', NULL, NULL),
(6, 'Module Generator', 'fa fa-database', 'module_generator', 'cms_moduls', 'ModulsController', 1, 1, '2022-08-02 05:21:45', NULL, NULL),
(7, 'Menu Management', 'fa fa-bars', 'menu_management', 'cms_menus', 'MenusController', 1, 1, '2022-08-02 05:21:45', NULL, NULL),
(8, 'Email Templates', 'fa fa-envelope-o', 'email_templates', 'cms_email_templates', 'EmailTemplatesController', 1, 1, '2022-08-02 05:21:45', NULL, NULL),
(9, 'Statistic Builder', 'fa fa-dashboard', 'statistic_builder', 'cms_statistics', 'StatisticBuilderController', 1, 1, '2022-08-02 05:21:45', NULL, NULL),
(10, 'API Generator', 'fa fa-cloud-download', 'api_generator', '', 'ApiCustomController', 1, 1, '2022-08-02 05:21:45', NULL, NULL),
(11, 'Log User Access', 'fa fa-flag-o', 'logs', 'cms_logs', 'LogsController', 1, 1, '2022-08-02 05:21:45', NULL, NULL),
(12, 'Actions', 'fa fa-folder-o', 'actions', 'actions', 'AdminActionsController', 0, 0, '2022-10-21 19:38:07', NULL, NULL),
(13, 'Countries', 'fa fa-folder-o', 'countries', 'countries', 'AdminCountriesController', 0, 0, '2022-10-21 19:39:48', NULL, NULL),
(14, 'Keywords', 'fa fa-folder-o', 'keywords', 'keywords', 'AdminKeywordsController', 0, 0, '2022-10-21 19:41:42', NULL, NULL),
(15, 'Links', 'fa fa-folder-o', 'links', 'links', 'AdminLinksController', 0, 0, '2022-10-21 19:45:35', NULL, NULL),
(16, 'Activities', 'fa fa-folder-o', 'activities', 'activities', 'AdminActivitiesController', 0, 0, '2022-10-21 19:47:22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_notifications`
--

CREATE TABLE `cms_notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cms_users` int(11) DEFAULT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_privileges`
--

CREATE TABLE `cms_privileges` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_superadmin` tinyint(1) DEFAULT NULL,
  `theme_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_privileges`
--

INSERT INTO `cms_privileges` (`id`, `name`, `is_superadmin`, `theme_color`, `created_at`, `updated_at`) VALUES
(1, 'Super Administrator', 1, 'skin-black', '2022-08-02 05:21:47', NULL),
(2, 'Admin', 0, 'skin-black', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_privileges_roles`
--

CREATE TABLE `cms_privileges_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `is_visible` tinyint(1) DEFAULT NULL,
  `is_create` tinyint(1) DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT NULL,
  `is_edit` tinyint(1) DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL,
  `id_cms_moduls` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_privileges_roles`
--

INSERT INTO `cms_privileges_roles` (`id`, `is_visible`, `is_create`, `is_read`, `is_edit`, `is_delete`, `id_cms_privileges`, `id_cms_moduls`, `created_at`, `updated_at`) VALUES
(12, 1, 1, 1, 1, 1, 1, 4, NULL, NULL),
(13, 1, 1, 1, 1, 1, 1, 12, NULL, NULL),
(14, 1, 1, 1, 1, 1, 1, 13, NULL, NULL),
(15, 1, 1, 1, 1, 1, 1, 14, NULL, NULL),
(16, 1, 1, 1, 1, 1, 1, 15, NULL, NULL),
(17, 1, 1, 1, 1, 1, 1, 16, NULL, NULL),
(18, 1, 1, 1, 1, 1, 2, 12, NULL, NULL),
(19, 1, 1, 1, 1, 1, 2, 16, NULL, NULL),
(20, 1, 1, 1, 1, 1, 2, 13, NULL, NULL),
(21, 1, 1, 1, 1, 1, 2, 14, NULL, NULL),
(22, 1, 1, 1, 1, 1, 2, 15, NULL, NULL),
(23, 1, 1, 1, 1, 1, 2, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_settings`
--

CREATE TABLE `cms_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_input_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dataenum` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `helper` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `group_setting` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_settings`
--

INSERT INTO `cms_settings` (`id`, `name`, `content`, `content_input_type`, `dataenum`, `helper`, `created_at`, `updated_at`, `group_setting`, `label`) VALUES
(1, 'login_background_color', NULL, 'text', NULL, 'Input hexacode', '2022-08-02 05:21:45', NULL, 'Login Register Style', 'Login Background Color'),
(2, 'login_font_color', NULL, 'text', NULL, 'Input hexacode', '2022-08-02 05:21:45', NULL, 'Login Register Style', 'Login Font Color'),
(3, 'login_background_image', 'uploads/2022-08/a3efe9568907485e4678ccaba27019c5.jpg', 'upload_image', NULL, NULL, '2022-08-02 05:21:45', NULL, 'Login Register Style', 'Login Background Image'),
(4, 'email_sender', 'support@new-world.net', 'text', NULL, NULL, '2022-08-02 05:21:45', NULL, 'Email Setting', 'Email Sender'),
(5, 'smtp_driver', 'mail', 'select', 'smtp,mail,sendmail', NULL, '2022-08-02 05:21:45', NULL, 'Email Setting', 'Mail Driver'),
(6, 'smtp_host', NULL, 'text', NULL, NULL, '2022-08-02 05:21:45', NULL, 'Email Setting', 'SMTP Host'),
(7, 'smtp_port', '25', 'text', NULL, 'default 25', '2022-08-02 05:21:45', NULL, 'Email Setting', 'SMTP Port'),
(8, 'smtp_username', NULL, 'text', NULL, NULL, '2022-08-02 05:21:45', NULL, 'Email Setting', 'SMTP Username'),
(9, 'smtp_password', NULL, 'text', NULL, NULL, '2022-08-02 05:21:45', NULL, 'Email Setting', 'SMTP Password'),
(10, 'appname', 'New World', 'text', NULL, NULL, '2022-08-02 05:21:45', NULL, 'Application Setting', 'Application Name'),
(11, 'default_paper_size', 'A4', 'text', NULL, 'Paper size, ex : A4, Legal, etc', '2022-08-02 05:21:45', NULL, 'Application Setting', 'Default Paper Print Size'),
(12, 'logo', 'uploads/2022-10/b887c300f72213f8015b58716acba21f.png', 'upload_image', NULL, NULL, '2022-08-02 05:21:45', NULL, 'Application Setting', 'Logo'),
(13, 'favicon', 'uploads/2022-08/9549278691f8d624bbc38f872378da24.png', 'upload_image', NULL, NULL, '2022-08-02 05:21:45', NULL, 'Application Setting', 'Favicon'),
(14, 'api_debug_mode', 'true', 'select', 'true,false', NULL, '2022-08-02 05:21:45', NULL, 'Application Setting', 'API Debug Mode'),
(15, 'google_api_key', NULL, 'text', NULL, NULL, '2022-08-02 05:21:45', NULL, 'Application Setting', 'Google API Key'),
(16, 'google_fcm_key', NULL, 'text', NULL, NULL, '2022-08-02 05:21:45', NULL, 'Application Setting', 'Google FCM Key'),
(17, 'about', '<p>Donec a suscipit turpis. Duis hendrerit risus arcu, et eleifend ipsum vaius vel. Nam tortor lacus, fringilla nec quam a, volupat laoreet dui. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam beatae ut, a blanditiis in aspernatur est debitis.</p>\r\n<p>Optio quis inventore officia numqam nostrum qui soluta, recusandae mollitia labore magnam doloribus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae laudantium molestias eaque iusto.</p>\r\n<p>Eligendi iure consequatur, molestiae quaerat eaque maxime dolorem sapiente quia doloremque tempore, repellendus quasi aliquid cumque voluptas? iure consequatur, molestiae quaerat eaque maxime dolorem sapiente quia doloremque tempore, repellendus quasi aliquid cumque</p>', 'wysiwyg', NULL, NULL, '2022-10-23 00:29:22', '2022-11-03 04:16:01', 'General Setting', 'About');

-- --------------------------------------------------------

--
-- Table structure for table `cms_statistics`
--

CREATE TABLE `cms_statistics` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_statistics`
--

INSERT INTO `cms_statistics` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'default', '2022-10-21 19:58:24', '2022-10-21 20:03:48');

-- --------------------------------------------------------

--
-- Table structure for table `cms_statistic_components`
--

CREATE TABLE `cms_statistic_components` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cms_statistics` int(11) DEFAULT NULL,
  `componentID` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `component_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_name` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `config` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_statistic_components`
--

INSERT INTO `cms_statistic_components` (`id`, `id_cms_statistics`, `componentID`, `component_name`, `area_name`, `sorting`, `name`, `config`, `created_at`, `updated_at`) VALUES
(1, 1, 'b4161574b423e96d9b2510e639865873', 'smallbox', 'area1', 0, NULL, '{\"name\":\"Keywords\",\"icon\":\"ion-bag\",\"color\":\"bg-red\",\"link\":\"\\/admin\\/keywords\",\"sql\":\"SELECT Count(*) FROM keywords\"}', '2022-10-21 19:58:34', NULL),
(2, 1, '04e3811d9f404da202f86d77b7980d66', 'smallbox', 'area2', 0, NULL, '{\"name\":\"Actions\",\"icon\":\"ion-bag\",\"color\":\"bg-red\",\"link\":\"\\/admin\\/actions\",\"sql\":\"SELECT Count(*) FROM actions\"}', '2022-10-21 19:58:39', NULL),
(3, 1, 'c5204046343d7d54bb63093e4a51c151', 'smallbox', 'area3', 0, NULL, '{\"name\":\"Countries\",\"icon\":\"ion-flag\",\"color\":\"bg-red\",\"link\":\"\\/admin\\/countries\",\"sql\":\"SELECT Count(*) FROM countries\"}', '2022-10-21 19:58:41', NULL),
(5, 1, '89baf6eedb21a814df56b3a4019bf431', 'smallbox', 'area4', 0, NULL, '{\"name\":\"Activities\",\"icon\":\"ion-bookmark\",\"color\":\"bg-yellow\",\"link\":\"\\/admin\\/activities\",\"sql\":\"SELECT Count(*) FROM activities\"}', '2022-10-21 19:58:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_users`
--

CREATE TABLE `cms_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_users`
--

INSERT INTO `cms_users` (`id`, `name`, `photo`, `email`, `password`, `id_cms_privileges`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Administrator', 'uploads/1/2022-10/tara.jfif', 'admin@new-world.net', '$2y$10$Ft/qa95kHeS8lw6.RTA3yuPmz.3nzMWW2jFnukivNYnug0gkwBKOW', 1, '2022-08-02 05:21:45', '2022-10-21 19:36:55', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `title`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Indonesia', '<p>indonesia</p>', '2022-10-21 20:08:38', NULL),
(2, 'Cambodia', '<p>Cambodia<br></p>', '2022-10-21 20:08:50', NULL),
(3, 'Brunei', 'Brunei', '2022-10-21 20:09:27', NULL),
(4, 'East Timor', '<p><a href=\"https://en.wikipedia.org/wiki/East_Timor\" title=\"\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-weight: 700;\">East Timor</a><br></p>', '2022-10-21 20:09:37', '2022-10-21 20:11:04'),
(5, 'Laos', '<p><a href=\"https://en.wikipedia.org/wiki/Laos\" title=\"\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-weight: 700;\">Laos</a><br></p>', '2022-10-21 20:09:46', '2022-10-21 20:10:55'),
(6, 'Malaysia', '<p><a href=\"https://en.wikipedia.org/wiki/Malaysia\" title=\"\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-weight: 700;\">Malaysia</a><br></p>', '2022-10-21 20:09:56', NULL),
(7, 'Myanmar', '<p><a href=\"https://en.wikipedia.org/wiki/Myanmar\" title=\"\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-weight: 700;\">Myanmar</a><br></p>', '2022-10-21 20:10:03', NULL),
(8, 'Philippines', '<table class=\"sortable wikitable jquery-tablesorter\" style=\"background-color: rgb(248, 249, 250); color: rgb(32, 33, 34); margin: 1em 0px; border: 1px solid rgb(162, 169, 177); font-family: sans-serif; text-align: right;\"><tbody><tr><th scope=\"row\" style=\"border: 1px solid rgb(162, 169, 177); padding: 0.2em 0.4em; background-color: rgb(234, 236, 240);\"><a href=\"https://en.wikipedia.org/wiki/Philippines\" title=\"Philippines\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Philippines</a><br></th></tr></tbody></table>', '2022-10-21 20:10:12', NULL),
(9, 'Singapore', '<p><a href=\"https://en.wikipedia.org/wiki/Singapore\" title=\"Singapore\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-weight: 700;\">Singapore</a><br></p>', '2022-10-21 20:10:18', NULL),
(10, 'Thailand', '<p><a href=\"https://en.wikipedia.org/wiki/Thailand\" title=\"Thailand\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-weight: 700;\">Thailand</a><br></p>', '2022-10-21 20:10:25', NULL),
(11, 'Vietnam', '<p><a href=\"https://en.wikipedia.org/wiki/Vietnam\" title=\"Vietnam\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-weight: 700;\">Vietnam</a><br></p>', '2022-10-21 20:10:31', NULL),
(12, 'Japan', '<p>Japan</p>', '2022-10-21 20:10:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_jp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_jp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`id`, `title_en`, `title_jp`, `desc_en`, `desc_jp`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Rice Field', '田んぼ', '<p>Rice Field<br></p>', '<p>田んぼ<br></p>', 'rice-field', '2022-10-21 20:12:30', '2022-10-29 21:36:34'),
(2, 'Forest - Land', '森 - 土地', '<p>Forest - Land<br></p>', '<p>森 - 土地<br></p>', 'forest-land', '2022-10-21 20:13:06', '2022-10-29 21:36:40'),
(3, 'Water', '森', '<p>Water<br></p>', '水の説明です', 'water', '2022-10-21 20:14:45', '2022-10-29 21:36:48'),
(4, 'Herbs', '草', '<p>Herbs<br></p>', 'これはハーブの説明です', 'herbs', '2022-10-21 20:15:45', '2022-10-29 21:36:55'),
(5, 'Cooperative', '協同組合', '<p>Cooperative<br></p>', 'これは協力的な説明です', 'cooperative', '2022-10-21 20:17:10', '2022-10-26 02:23:35'),
(6, 'Food', '食', '<p>Food<br></p>', 'これは食べ物の説明です', 'food', '2022-10-21 20:17:58', '2022-10-26 02:22:53'),
(7, 'Handicraft', '手芸', '<p>Handicraft<br></p>', 'これは手作りの説明です', 'handicraft', '2022-10-21 20:18:46', '2022-10-26 02:22:45'),
(8, 'Traditional Culture', '伝統文化', '<p>Traditional Culture<br></p>', '伝統文化の説明', 'traditional-culture', '2022-10-21 20:20:20', '2022-10-26 02:22:38'),
(9, 'Field', '畑', '<p>Field<br></p>', '空のフィールドの説明', 'field', '2022-10-21 20:21:01', '2022-10-29 21:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `keyword_activities`
--

CREATE TABLE `keyword_activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_keyword` int(10) UNSIGNED NOT NULL,
  `id_activity` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keyword_activities`
--

INSERT INTO `keyword_activities` (`id`, `id_keyword`, `id_activity`, `created_at`, `updated_at`) VALUES
(25, 2, 8, '2022-10-23 00:22:57', NULL),
(26, 3, 8, '2022-10-23 00:22:57', NULL),
(27, 8, 8, '2022-10-23 00:22:57', NULL),
(34, 3, 7, '2022-10-22 23:11:22', NULL),
(35, 4, 7, '2022-10-22 23:11:22', NULL),
(36, 7, 7, '2022-10-22 23:11:22', NULL),
(37, 5, 9, '2022-11-03 03:21:48', NULL),
(38, 6, 9, '2022-11-03 03:21:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_activity` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `id_activity`, `title`, `url`, `file`, `created_at`, `updated_at`) VALUES
(1, 7, 'Sebuah link', '', 'uploads/1/2022-10/agung.pdf', '2022-10-23 00:06:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_08_07_145904_add_table_cms_apicustom', 1),
(4, '2016_08_07_150834_add_table_cms_dashboard', 1),
(5, '2016_08_07_151210_add_table_cms_logs', 1),
(6, '2016_08_07_151211_add_details_cms_logs', 1),
(7, '2016_08_07_152014_add_table_cms_privileges', 1),
(8, '2016_08_07_152214_add_table_cms_privileges_roles', 1),
(9, '2016_08_07_152320_add_table_cms_settings', 1),
(10, '2016_08_07_152421_add_table_cms_users', 1),
(11, '2016_08_07_154624_add_table_cms_menus_privileges', 1),
(12, '2016_08_07_154624_add_table_cms_moduls', 1),
(13, '2016_08_17_225409_add_status_cms_users', 1),
(14, '2016_08_20_125418_add_table_cms_notifications', 1),
(15, '2016_09_04_033706_add_table_cms_email_queues', 1),
(16, '2016_09_16_035347_add_group_setting', 1),
(17, '2016_09_16_045425_add_label_setting', 1),
(18, '2016_09_17_104728_create_nullable_cms_apicustom', 1),
(19, '2016_10_01_141740_add_method_type_apicustom', 1),
(20, '2016_10_01_141846_add_parameters_apicustom', 1),
(21, '2016_10_01_141934_add_responses_apicustom', 1),
(22, '2016_10_01_144826_add_table_apikey', 1),
(23, '2016_11_14_141657_create_cms_menus', 1),
(24, '2016_11_15_132350_create_cms_email_templates', 1),
(25, '2016_11_15_190410_create_cms_statistics', 1),
(26, '2016_11_17_102740_create_cms_statistic_components', 1),
(27, '2017_06_06_164501_add_deleted_at_cms_moduls', 1),
(28, '2019_08_19_000000_create_failed_jobs_table', 1),
(29, '2020_08_25_072717_create_products_table', 1),
(30, '2022_10_22_030936_create_keywords_table', 2),
(31, '2022_10_22_031920_create_actions_table', 2),
(32, '2022_10_22_032154_create_countries_table', 2),
(33, '2022_10_22_032420_create_activities_table', 2),
(34, '2022_10_22_032820_create_keyword_activities_table', 2),
(35, '2022_10_22_033043_create_links_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Item One', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!', '24.99', 'http://placehold.it/700x400', '2022-08-02 05:21:38', '2022-08-02 05:21:38'),
(2, 'Item Two', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.', '24.99', 'http://placehold.it/700x400', '2022-08-02 05:21:39', '2022-08-02 05:21:39'),
(3, 'Item Three', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!', '24.99', 'http://placehold.it/700x400', '2022-08-02 05:21:39', '2022-08-02 05:21:39'),
(4, 'Item Four', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.', '24.99', 'http://placehold.it/700x400', '2022-08-02 05:21:39', '2022-08-02 05:21:39'),
(5, 'Item Five', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!', '24.99', 'http://placehold.it/700x400', '2022-08-02 05:21:39', '2022-08-02 05:21:39'),
(6, 'Item Six', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.', '24.99', 'http://placehold.it/700x400', '2022-08-02 05:21:39', '2022-08-02 05:21:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activities_id_country_foreign` (`id_country`),
  ADD KEY `activities_id_action_foreign` (`id_action`);

--
-- Indexes for table `cms_apicustom`
--
ALTER TABLE `cms_apicustom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_apikey`
--
ALTER TABLE `cms_apikey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_dashboard`
--
ALTER TABLE `cms_dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_email_queues`
--
ALTER TABLE `cms_email_queues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_email_templates`
--
ALTER TABLE `cms_email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_logs`
--
ALTER TABLE `cms_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_menus`
--
ALTER TABLE `cms_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_menus_privileges`
--
ALTER TABLE `cms_menus_privileges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_moduls`
--
ALTER TABLE `cms_moduls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_notifications`
--
ALTER TABLE `cms_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_privileges`
--
ALTER TABLE `cms_privileges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_privileges_roles`
--
ALTER TABLE `cms_privileges_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_settings`
--
ALTER TABLE `cms_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_statistics`
--
ALTER TABLE `cms_statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_statistic_components`
--
ALTER TABLE `cms_statistic_components`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_users`
--
ALTER TABLE `cms_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keyword_activities`
--
ALTER TABLE `keyword_activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keyword_activities_id_keyword_foreign` (`id_keyword`),
  ADD KEY `keyword_activities_id_activity_foreign` (`id_activity`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `links_id_activity_foreign` (`id_activity`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actions`
--
ALTER TABLE `actions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cms_apicustom`
--
ALTER TABLE `cms_apicustom`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_apikey`
--
ALTER TABLE `cms_apikey`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_dashboard`
--
ALTER TABLE `cms_dashboard`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_email_queues`
--
ALTER TABLE `cms_email_queues`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_email_templates`
--
ALTER TABLE `cms_email_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cms_logs`
--
ALTER TABLE `cms_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `cms_menus`
--
ALTER TABLE `cms_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cms_menus_privileges`
--
ALTER TABLE `cms_menus_privileges`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `cms_moduls`
--
ALTER TABLE `cms_moduls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cms_notifications`
--
ALTER TABLE `cms_notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_privileges`
--
ALTER TABLE `cms_privileges`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cms_privileges_roles`
--
ALTER TABLE `cms_privileges_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `cms_settings`
--
ALTER TABLE `cms_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cms_statistics`
--
ALTER TABLE `cms_statistics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cms_statistic_components`
--
ALTER TABLE `cms_statistic_components`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cms_users`
--
ALTER TABLE `cms_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `keyword_activities`
--
ALTER TABLE `keyword_activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_id_action_foreign` FOREIGN KEY (`id_action`) REFERENCES `actions` (`id`),
  ADD CONSTRAINT `activities_id_country_foreign` FOREIGN KEY (`id_country`) REFERENCES `countries` (`id`);

--
-- Constraints for table `keyword_activities`
--
ALTER TABLE `keyword_activities`
  ADD CONSTRAINT `keyword_activities_id_activity_foreign` FOREIGN KEY (`id_activity`) REFERENCES `activities` (`id`),
  ADD CONSTRAINT `keyword_activities_id_keyword_foreign` FOREIGN KEY (`id_keyword`) REFERENCES `keywords` (`id`);

--
-- Constraints for table `links`
--
ALTER TABLE `links`
  ADD CONSTRAINT `links_id_activity_foreign` FOREIGN KEY (`id_activity`) REFERENCES `activities` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
