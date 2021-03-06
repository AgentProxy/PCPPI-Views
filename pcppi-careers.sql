-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 25, 2017 at 02:01 AM
-- Server version: 10.1.20-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2312159_pcppi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(2, 1, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '', 2),
(3, 1, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, '', 3),
(4, 1, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '', 4),
(5, 1, 'excerpt', 'text_area', 'excerpt', 1, 0, 1, 1, 1, 1, '', 5),
(6, 1, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '', 6),
(7, 1, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '\n{\n    \"resize\": {\n        \"width\": \"1000\",\n        \"height\": \"null\"\n    },\n    \"quality\": \"70%\",\n    \"upsize\": true,\n    \"thumbnails\": [\n        {\n            \"name\": \"medium\",\n            \"scale\": \"50%\"\n        },\n        {\n            \"name\": \"small\",\n            \"scale\": \"25%\"\n        },\n        {\n            \"name\": \"cropped\",\n            \"crop\": {\n                \"width\": \"300\",\n                \"height\": \"250\"\n            }\n        }\n    ]\n}', 7),
(8, 1, 'slug', 'text', 'slug', 1, 0, 1, 1, 1, 1, '\n{\n    \"slugify\": {\n        \"origin\": \"title\",\n        \"forceUpdate\": true\n    }\n}', 8),
(9, 1, 'meta_description', 'text_area', 'meta_description', 1, 0, 1, 1, 1, 1, '', 9),
(10, 1, 'meta_keywords', 'text_area', 'meta_keywords', 1, 0, 1, 1, 1, 1, '', 10),
(11, 1, 'status', 'select_dropdown', 'status', 1, 1, 1, 1, 1, 1, '\n{\n    \"default\": \"DRAFT\",\n    \"options\": {\n        \"PUBLISHED\": \"published\",\n        \"DRAFT\": \"draft\",\n        \"PENDING\": \"pending\"\n    }\n}', 11),
(12, 1, 'created_at', 'timestamp', 'created_at', 0, 1, 1, 0, 0, 0, '', 12),
(13, 1, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 13),
(14, 2, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(15, 2, 'author_id', 'text', 'author_id', 1, 0, 0, 0, 0, 0, '', 2),
(16, 2, 'title', 'text', 'title', 1, 1, 1, 1, 1, 1, '', 3),
(17, 2, 'excerpt', 'text_area', 'excerpt', 1, 0, 1, 1, 1, 1, '', 4),
(18, 2, 'body', 'rich_text_box', 'body', 1, 0, 1, 1, 1, 1, '', 5),
(19, 2, 'slug', 'text', 'slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"}}', 6),
(20, 2, 'meta_description', 'text', 'meta_description', 1, 0, 1, 1, 1, 1, '', 7),
(21, 2, 'meta_keywords', 'text', 'meta_keywords', 1, 0, 1, 1, 1, 1, '', 8),
(22, 2, 'status', 'select_dropdown', 'status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(23, 2, 'created_at', 'timestamp', 'created_at', 1, 1, 1, 0, 0, 0, '', 10),
(24, 2, 'updated_at', 'timestamp', 'updated_at', 1, 0, 0, 0, 0, 0, '', 11),
(25, 2, 'image', 'image', 'image', 0, 1, 1, 1, 1, 1, '', 12),
(26, 3, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(27, 3, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, '', 2),
(28, 3, 'email', 'text', 'email', 1, 1, 1, 1, 1, 1, '', 3),
(29, 3, 'password', 'password', 'password', 1, 0, 0, 1, 1, 0, '', 4),
(30, 3, 'remember_token', 'text', 'remember_token', 0, 0, 0, 0, 0, 0, '', 5),
(31, 3, 'created_at', 'timestamp', 'created_at', 0, 1, 1, 0, 0, 0, '', 6),
(32, 3, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 7),
(33, 3, 'avatar', 'image', 'avatar', 0, 1, 1, 1, 1, 1, '', 8),
(34, 5, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(35, 5, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, '', 2),
(36, 5, 'created_at', 'timestamp', 'created_at', 0, 0, 0, 0, 0, 0, '', 3),
(37, 5, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 4),
(38, 4, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(39, 4, 'parent_id', 'select_dropdown', 'parent_id', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(40, 4, 'order', 'text', 'order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(41, 4, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, '', 4),
(42, 4, 'slug', 'text', 'slug', 1, 1, 1, 1, 1, 1, '', 5),
(43, 4, 'created_at', 'timestamp', 'created_at', 0, 0, 1, 0, 0, 0, '', 6),
(44, 4, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 7),
(45, 6, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(46, 6, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2),
(47, 6, 'created_at', 'timestamp', 'created_at', 0, 0, 0, 0, 0, 0, '', 3),
(48, 6, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 4),
(49, 6, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, '', 5),
(50, 1, 'seo_title', 'text', 'seo_title', 0, 1, 1, 1, 1, 1, '', 14),
(51, 1, 'featured', 'checkbox', 'featured', 1, 1, 1, 1, 1, 1, '', 15),
(52, 3, 'role_id', 'text', 'role_id', 1, 1, 1, 1, 1, 1, '', 9),
(64, 8, 'id', 'checkbox', 'Id', 1, 1, 0, 0, 0, 0, NULL, 1),
(65, 8, 'closed_at', 'timestamp', 'Closed At', 0, 1, 1, 0, 0, 0, NULL, 3),
(66, 8, 'description', 'text_area', 'Description', 0, 1, 1, 1, 1, 1, NULL, 6),
(67, 8, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, NULL, 4),
(68, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 2),
(69, 8, 'updated_at', 'timestamp', 'Updated At', 0, 1, 0, 0, 0, 0, NULL, 10),
(70, 8, 'applicants', 'number', 'Applicants', 0, 1, 1, 0, 0, 0, NULL, 7),
(72, 8, 'closed', 'checkbox', 'Closed', 0, 1, 1, 1, 1, 1, '{\"on\":\"Closed\",\"off\":\"Open\",\"checked\":\"false\"}', 9),
(73, 8, 'address', 'text', 'Address', 0, 1, 1, 1, 1, 1, NULL, 5),
(74, 9, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(75, 9, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, NULL, 2),
(76, 9, 'latitude', 'text', 'Latitude', 0, 1, 1, 1, 1, 1, NULL, 3),
(77, 9, 'longitude', 'text', 'Longitude', 0, 1, 1, 1, 1, 1, NULL, 4),
(78, 9, 'location_id', 'select_dropdown', 'Location', 0, 1, 1, 1, 1, 1, '{\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 5),
(79, 8, 'region_id', 'select_dropdown', 'Region', 0, 1, 1, 1, 1, 1, '{\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 8),
(80, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 6),
(81, 9, 'updated_at', 'timestamp', 'Updated At', 0, 1, 1, 0, 0, 0, NULL, 7),
(82, 8, 'accountability', 'rich_text_box', 'Accountability', 0, 1, 1, 1, 1, 1, NULL, 11),
(83, 13, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(85, 13, 'description', 'text_area', 'Description', 0, 1, 1, 1, 1, 1, NULL, 7),
(87, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 1, NULL, 2),
(88, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 3),
(89, 13, 'applicants', 'checkbox', 'Applicants', 0, 1, 1, 0, 0, 0, NULL, 11),
(90, 13, 'closed', 'checkbox', 'Closed', 0, 1, 1, 1, 1, 1, '{\"on\":\"Closed\",\"off\":\"Open\"}', 8),
(91, 13, 'region_id', 'select_dropdown', 'Region', 0, 1, 1, 1, 1, 1, '{\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 5),
(92, 13, 'responsibilities', 'list_area', 'Responsibilities', 0, 1, 1, 1, 1, 1, NULL, 9),
(93, 13, 'qualifications', 'list_area', 'Qualifications', 0, 1, 1, 1, 1, 1, NULL, 10),
(94, 13, 'position', 'text', 'Position', 0, 1, 1, 1, 1, 1, NULL, 4),
(97, 18, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(98, 18, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, NULL, 2),
(99, 13, 'department_id', 'select_dropdown', 'Functions', 0, 1, 1, 1, 1, 1, '{\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 6);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `controller`, `description`, `generate_permissions`, `server_side`, `created_at`, `updated_at`) VALUES
(1, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', '', '', 1, 0, '2017-07-09 17:04:11', '2017-07-09 17:04:11'),
(2, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', '', '', 1, 0, '2017-07-09 17:04:11', '2017-07-09 17:04:11'),
(3, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', '', '', 1, 0, '2017-07-09 17:04:11', '2017-07-09 17:04:11'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', '', '', 1, 0, '2017-07-09 17:04:11', '2017-07-09 17:04:11'),
(5, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', '', '', 1, 0, '2017-07-09 17:04:11', '2017-07-09 17:04:11'),
(6, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', '', '', 1, 0, '2017-07-09 17:04:11', '2017-07-09 17:04:11'),
(8, 'positions', 'positions', 'Position', 'Positions', NULL, 'App\\Position', NULL, NULL, 1, 0, '2017-07-09 22:16:28', '2017-07-09 22:16:28'),
(9, 'regions', 'regions', 'Region', 'Regions', NULL, 'App\\Region', NULL, NULL, 1, 0, '2017-07-09 22:48:00', '2017-07-09 22:48:00'),
(13, 'vacancies', 'vacancies', 'Vacancy', 'Vacancies', NULL, 'App\\Vacancy', NULL, NULL, 1, 0, '2017-07-12 22:22:31', '2017-07-12 22:22:31'),
(18, 'departments', 'departments', 'Department', 'Departments', NULL, 'App\\Department', NULL, NULL, 1, 0, '2017-07-19 18:46:40', '2017-07-19 18:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'National Sales  & Distribution', '2017-07-19 20:33:19', '2017-07-19 20:33:19'),
(2, 'Human Resource', '2017-07-19 20:33:46', '2017-07-19 20:33:46'),
(3, 'Finance', '2017-07-19 20:34:09', '2017-07-19 20:34:09'),
(4, 'Manufacturing & Operation', '2017-07-19 20:34:44', '2017-07-19 20:34:44'),
(5, 'National Supply Chain', '2017-07-19 20:35:19', '2017-07-19 20:35:19'),
(6, 'Admin', '2017-07-19 20:35:46', '2017-07-19 20:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`) VALUES
(1, 'Luzon'),
(2, 'Visayas'),
(3, 'Mindanao');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2017-07-09 17:04:14', '2017-07-09 17:04:14');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '/admin', '_self', 'voyager-boat', NULL, NULL, 1, '2017-07-09 17:04:14', '2017-07-09 17:04:14', NULL, NULL),
(4, 1, 'Users', '/admin/users', '_self', 'voyager-person', NULL, NULL, 4, '2017-07-09 17:04:14', '2017-07-10 00:47:14', NULL, NULL),
(7, 1, 'Roles', '/admin/roles', '_self', 'voyager-lock', NULL, NULL, 3, '2017-07-09 17:04:14', '2017-07-10 00:47:14', NULL, NULL),
(8, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 5, '2017-07-09 17:04:14', '2017-07-19 19:53:42', NULL, NULL),
(9, 1, 'Menu Builder', '/admin/menus', '_self', 'voyager-list', NULL, 8, 1, '2017-07-09 17:04:14', '2017-07-09 19:46:22', NULL, NULL),
(10, 1, 'Database', '/admin/database', '_self', 'voyager-data', NULL, 8, 2, '2017-07-09 17:04:14', '2017-07-09 19:46:22', NULL, NULL),
(11, 1, 'Settings', '/admin/settings', '_self', 'voyager-settings', NULL, NULL, 6, '2017-07-09 17:04:14', '2017-07-19 19:53:42', NULL, NULL),
(25, 1, 'Regions', '/admin/regions', '_self', 'voyager-world', '#000000', 26, 1, '2017-07-09 22:45:26', '2017-07-10 00:47:14', NULL, ''),
(26, 1, 'Jobs', '', '_self', 'voyager-group', '#000000', NULL, 2, '2017-07-09 22:49:43', '2017-07-10 00:36:03', NULL, ''),
(27, 1, 'Vacancies', 'admin/vacancies', '_self', 'voyager-archive', '#000000', 26, 3, '2017-07-19 19:51:14', '2017-07-19 20:29:48', NULL, ''),
(28, 1, 'Departments', 'admin/departments', '_self', 'voyager-group', '#000000', 26, 2, '2017-07-19 20:29:32', '2017-07-19 20:29:48', NULL, '');

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_01_01_000000_create_pages_table', 1),
(6, '2016_01_01_000000_create_posts_table', 1),
(7, '2016_02_15_204651_create_categories_table', 1),
(8, '2016_05_19_173453_create_menu_table', 1),
(9, '2016_10_21_190000_create_roles_table', 1),
(10, '2016_10_21_190000_create_settings_table', 1),
(11, '2016_11_30_135954_create_permission_table', 1),
(12, '2016_11_30_141208_create_permission_role_table', 1),
(13, '2016_12_26_201236_data_types__add__server_side', 1),
(14, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(15, '2017_01_14_005015_create_translations_table', 1),
(16, '2017_01_15_000000_add_permission_group_id_to_permissions_table', 1),
(17, '2017_01_15_000000_create_permission_groups_table', 1),
(18, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(19, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(20, '2017_04_21_000000_add_order_to_data_rows_table', 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permission_group_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`, `permission_group_id`) VALUES
(1, 'browse_admin', NULL, '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(2, 'browse_database', NULL, '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(3, 'browse_media', NULL, '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(4, 'browse_settings', NULL, '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(5, 'browse_menus', 'menus', '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(6, 'read_menus', 'menus', '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(7, 'edit_menus', 'menus', '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(8, 'add_menus', 'menus', '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(9, 'delete_menus', 'menus', '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(10, 'browse_pages', 'pages', '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(11, 'read_pages', 'pages', '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(12, 'edit_pages', 'pages', '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(13, 'add_pages', 'pages', '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(14, 'delete_pages', 'pages', '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(15, 'browse_roles', 'roles', '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(16, 'read_roles', 'roles', '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(17, 'edit_roles', 'roles', '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(18, 'add_roles', 'roles', '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(19, 'delete_roles', 'roles', '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(20, 'browse_users', 'users', '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(21, 'read_users', 'users', '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(22, 'edit_users', 'users', '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(23, 'add_users', 'users', '2017-07-09 17:04:15', '2017-07-09 17:04:15', NULL),
(24, 'delete_users', 'users', '2017-07-09 17:04:16', '2017-07-09 17:04:16', NULL),
(25, 'browse_posts', 'posts', '2017-07-09 17:04:16', '2017-07-09 17:04:16', NULL),
(26, 'read_posts', 'posts', '2017-07-09 17:04:16', '2017-07-09 17:04:16', NULL),
(27, 'edit_posts', 'posts', '2017-07-09 17:04:16', '2017-07-09 17:04:16', NULL),
(28, 'add_posts', 'posts', '2017-07-09 17:04:16', '2017-07-09 17:04:16', NULL),
(29, 'delete_posts', 'posts', '2017-07-09 17:04:16', '2017-07-09 17:04:16', NULL),
(30, 'browse_categories', 'categories', '2017-07-09 17:04:16', '2017-07-09 17:04:16', NULL),
(31, 'read_categories', 'categories', '2017-07-09 17:04:16', '2017-07-09 17:04:16', NULL),
(32, 'edit_categories', 'categories', '2017-07-09 17:04:16', '2017-07-09 17:04:16', NULL),
(33, 'add_categories', 'categories', '2017-07-09 17:04:16', '2017-07-09 17:04:16', NULL),
(34, 'delete_categories', 'categories', '2017-07-09 17:04:16', '2017-07-09 17:04:16', NULL),
(40, 'browse_positions', 'positions', '2017-07-09 22:16:29', '2017-07-09 22:16:29', NULL),
(41, 'read_positions', 'positions', '2017-07-09 22:16:29', '2017-07-09 22:16:29', NULL),
(42, 'edit_positions', 'positions', '2017-07-09 22:16:29', '2017-07-09 22:16:29', NULL),
(43, 'add_positions', 'positions', '2017-07-09 22:16:29', '2017-07-09 22:16:29', NULL),
(44, 'delete_positions', 'positions', '2017-07-09 22:16:29', '2017-07-09 22:16:29', NULL),
(45, 'browse_regions', 'regions', '2017-07-09 22:48:00', '2017-07-09 22:48:00', NULL),
(46, 'read_regions', 'regions', '2017-07-09 22:48:00', '2017-07-09 22:48:00', NULL),
(47, 'edit_regions', 'regions', '2017-07-09 22:48:00', '2017-07-09 22:48:00', NULL),
(48, 'add_regions', 'regions', '2017-07-09 22:48:00', '2017-07-09 22:48:00', NULL),
(49, 'delete_regions', 'regions', '2017-07-09 22:48:00', '2017-07-09 22:48:00', NULL),
(50, 'browse_vacancies', 'vacancies', '2017-07-12 22:22:31', '2017-07-12 22:22:31', NULL),
(51, 'read_vacancies', 'vacancies', '2017-07-12 22:22:31', '2017-07-12 22:22:31', NULL),
(52, 'edit_vacancies', 'vacancies', '2017-07-12 22:22:31', '2017-07-12 22:22:31', NULL),
(53, 'add_vacancies', 'vacancies', '2017-07-12 22:22:32', '2017-07-12 22:22:32', NULL),
(54, 'delete_vacancies', 'vacancies', '2017-07-12 22:22:32', '2017-07-12 22:22:32', NULL),
(55, 'browse_departments', 'departments', '2017-07-19 18:46:41', '2017-07-19 18:46:41', NULL),
(56, 'read_departments', 'departments', '2017-07-19 18:46:41', '2017-07-19 18:46:41', NULL),
(57, 'edit_departments', 'departments', '2017-07-19 18:46:41', '2017-07-19 18:46:41', NULL),
(58, 'add_departments', 'departments', '2017-07-19 18:46:41', '2017-07-19 18:46:41', NULL),
(59, 'delete_departments', 'departments', '2017-07-19 18:46:41', '2017-07-19 18:46:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_groups`
--

CREATE TABLE `permission_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 3),
(6, 1),
(6, 3),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(15, 3),
(16, 1),
(16, 3),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(20, 2),
(20, 3),
(21, 1),
(21, 2),
(21, 3),
(22, 1),
(22, 3),
(23, 1),
(23, 3),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(45, 2),
(45, 3),
(46, 1),
(46, 2),
(46, 3),
(47, 1),
(47, 3),
(48, 1),
(48, 3),
(49, 1),
(50, 1),
(50, 2),
(50, 3),
(51, 1),
(51, 2),
(51, 3),
(52, 1),
(52, 2),
(52, 3),
(53, 1),
(53, 2),
(53, 3),
(54, 1),
(54, 2),
(54, 3),
(55, 1),
(55, 2),
(55, 3),
(56, 1),
(56, 2),
(56, 3),
(57, 1),
(57, 3),
(58, 1),
(58, 3),
(59, 1);

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `longitude` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `name`, `latitude`, `longitude`, `location_id`, `created_at`, `updated_at`) VALUES
(1, 'Cagayan Valley Operations', '16.9679036', '121.77049050000005', 1, NULL, NULL),
(2, 'North Luzon Operations', '16.2151433', '120.50037500000008', 1, NULL, NULL),
(3, 'Central Luzon', '15.070145', '120.649044', 1, NULL, NULL),
(4, 'Modern Trade Operations', '14.5881219', '121.0439725', 1, NULL, NULL),
(5, 'Metro Operations', '14.4042525', '121.04696360000003', 1, NULL, NULL),
(6, 'Head Office', '14.4042525', '121.04696360000003', 1, NULL, NULL),
(7, 'Metro Sales', '14.4042525', '121.04696360000003', 1, NULL, NULL),
(8, 'Southern Tagalog Region Operations', '14.1007803', '121.0793705', 1, NULL, NULL),
(9, 'Bicol Region', '13.4209885', '123.4136736', 1, NULL, NULL),
(10, 'Iloilo', '10.75844', '122.50033740000003', 2, NULL, '2017-07-14 01:11:35'),
(11, 'Tanuan', '11.1022234', '25.02005699999995', 2, NULL, '2017-07-14 01:11:07'),
(12, 'Cebu', '10.239339', '123.79384800000003', 2, NULL, '2017-07-14 01:10:35'),
(13, 'Bacolod', '10.7050794', '122.96313710000004', 2, NULL, '2017-07-14 01:10:09'),
(14, 'Cagayan De Oro', '8.494784', '124.74618099999998', 3, NULL, '2017-07-14 01:09:22'),
(15, 'Zamboanga', '6.965789999999999', '122.14028099999996', 3, NULL, '2017-07-14 01:06:42'),
(16, 'Davao', '7.030481361402168', '125.51293283700943', 3, NULL, '2017-07-14 01:28:39'),
(17, 'Cabuyao', '14.23326', '121.10077100000001', 1, '2017-07-14 01:29:39', '2017-07-14 01:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'site_admin', 'Site Administrator', '2017-07-09 17:04:14', '2017-07-12 22:25:32'),
(2, 'content_manager', 'Content Manager', '2017-07-09 17:04:14', '2017-07-16 21:29:22'),
(3, 'site_manager', 'Site Manager', '2017-07-16 21:28:45', '2017-07-16 21:28:45');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 2, 'EJFlow', 'ericjoseph.flores1@gmail.com', 'users/default.png', '$2y$10$zFiaZt4Cwt.4khSovjAfs.Wj0yvp/xWAqbmOnK3RKQMqkYqVXrF4S', 'iBNetn3Tg6tOW7gm2BIzWJQyXem79ykPayiOtUd2eS3aSH9QGWsqu9CFegiW', '2017-07-09 17:04:39', '2017-07-16 23:49:11'),
(2, 3, 'Eric Flores', 'ericjoseph.flores2@gmail.com', 'users/default.png', '$2y$10$MwNCI4r2RkeA4JQ0/k1V9OHujuypLhNpeWwM3p0QiPVfX3vl.l68S', '20r4PRHIXlsV2osMvIQGBFpXPtWomEOJABIMkUTDzezdLUVV5PrbfHEWCSGn', '2017-07-16 23:23:59', '2017-07-16 23:48:38'),
(3, 1, 'Eric Flores', 'ericjoseph.flores3@gmail.com', 'users/default.png', '$2y$10$QLHnr5eIoBWaY4aFcK9EGOT09aFp2qdDB.ofdEje7YIeAz82irkMW', '3n4AWwE0vEOcjtp7hRMjZBANdwkxIICpFrZ4xEsZzQByyhWhcrDBmNnPgEv0', '2017-07-16 23:24:40', '2017-07-16 23:24:40'),
(4, 1, 'PCPPI-Admin01', 'pcppiadmin01@pcppi.com', 'users/default.png', '$2y$10$2UoqrizKeaJL7a/4ktv4p.NImtNTTYSuQ6JwiA7ZxKL61PdirjRwm', NULL, '2017-07-23 14:17:38', '2017-07-23 14:17:38'),
(5, 1, 'PCPPI-Admin02', 'pcppiadmin02@pcppi.com', 'users/default.png', '$2y$10$lanUKYIiks6B6BwDBXFI3OPQpbeueGlWm624LsYXWucPRDq8/i7cC', 'K2s02apoX4TIq8oeyaLYFNY9hE4YJfDNYg01WXTU9kI20XaeggT99bRjT47p', '2017-07-23 14:20:31', '2017-07-23 14:20:31'),
(6, 1, 'PCPPI-Admin03', 'pcppiadmin03@pcppi.com', 'users/default.png', '$2y$10$sfjWoE7leWNw6VIWkxdE.e1PCRgQy58f/61h8YefbLMRFUsfhoEXy', '1SKgjB8aYusU4ShHnvvfQXG72fiincdZLbHreoELIVRAgxHQAaVFD5gnGjIi', '2017-07-23 21:41:45', '2017-07-23 21:41:45');

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE `vacancies` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` tinytext COLLATE utf8_unicode_ci,
  `position` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `applicants` int(10) UNSIGNED DEFAULT '0',
  `closed` tinyint(4) DEFAULT '0',
  `region_id` int(11) DEFAULT NULL,
  `responsibilities` mediumtext COLLATE utf8_unicode_ci,
  `qualifications` mediumtext COLLATE utf8_unicode_ci,
  `department_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vacancies`
--

INSERT INTO `vacancies` (`id`, `description`, `position`, `created_at`, `updated_at`, `applicants`, `closed`, `region_id`, `responsibilities`, `qualifications`, `department_id`) VALUES
(1, 'Manage', 'Sales Manager', '2017-07-10 20:10:00', '2017-07-19 19:56:40', 6, 0, 10, '• Handle sales', '• College Graduate', 2),
(2, 'Sell Pepsi', 'Sales Woman', '2017-07-17 01:09:16', '2017-07-24 02:58:56', 0, 0, 3, '• Sells', '• Woman', 1),
(3, 'Can Drive', 'Truck Driver', '2017-07-17 01:20:40', '2017-07-18 21:11:12', 1, 0, 17, '• Drive a truck safely', '• Professional Driver', 4),
(4, 'Manage Trade and Marketing', 'Trade Marketing Manager-Snacks', '2017-07-24 03:20:39', '2017-07-24 03:58:22', 0, 0, 4, '• Plan local and lead the execution of national trade marketing programs IN ORDER TO achieve channel strategies and grow the snacks business 3x in volume,\r\n• Plan local and implement national merchandising standards IN ORDER TO promote snacks product presence and awareness.\r\n• Plan, Monitor, and Control Discounts, Deals, DIPs, Concessions, Powered Coolers, Display Allowances, and other Trade Push spending IN ORDER To maximize utilization thereof.\r\n• Select, evaluate, motivate and train subordinates IN ORDER TO build and sustain a competent trade marketing staff.', '• Candidate must be a Business degree holder\r\n• Minimum 5 years of working experience in Sales Management or Marketing Experience\r\n• In-depth knowledge on the following aspects:\r\n 	•Field sales management experience with minimum 3 years in traditional trade/distributor and account\r\n 	management\r\n  	•Understands market dynamics for consumer goods\r\n   	•Understands key financial indicators', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_groups`
--
ALTER TABLE `permission_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permission_groups_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `permission_groups`
--
ALTER TABLE `permission_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
