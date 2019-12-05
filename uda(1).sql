-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2019 at 01:27 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uda`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Eloquent', 'Eloquent', 'default.png', NULL, NULL),
(5, 'Routing', 'Routing', 'default.png', NULL, NULL),
(9, 'Raw queries', 'Raw queries', 'default.png', NULL, NULL),
(13, 'Form', 'Form', 'default.png', NULL, NULL),
(17, 'Session', 'Session', 'default.png', NULL, NULL),
(21, 'Cache', 'Cache', 'default.png', NULL, NULL),
(25, 'Facade', 'Facade', 'default.png', NULL, NULL),
(29, 'IoC', 'IoC', 'default.png', NULL, NULL),
(33, 'Localization', 'Localization', 'default.png', NULL, NULL),
(37, 'Mail', 'Mail', 'default.png', NULL, NULL),
(41, 'Packages', 'Packages', 'default.png', NULL, NULL),
(45, 'Pagination', 'Pagination', 'default.png', NULL, NULL),
(49, 'Queues', 'Queues', 'default.png', NULL, NULL),
(53, 'Configuration', 'Configuration', 'default.png', NULL, NULL),
(57, 'Requests and Input', 'Requests and Input', 'default.png', NULL, NULL),
(61, 'Templating', 'Templating', 'default.png', NULL, NULL),
(65, 'Views', 'Views', 'default.png', NULL, NULL),
(69, 'Debugging', 'Debugging', 'default.png', NULL, NULL),
(73, 'Composer', 'Composer', 'default.png', NULL, NULL),
(77, 'Performance', 'Performance', 'default.png', NULL, NULL),
(78, 'Forge', 'Forge', 'default.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE `category_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_post`
--

INSERT INTO `category_post` (`id`, `post_id`, `category_id`, `created_at`, `updated_at`) VALUES
(5, 54, 1, NULL, NULL),
(6, 54, 13, NULL, NULL),
(7, 54, 21, NULL, NULL),
(8, 54, 9, NULL, NULL),
(9, 54, 25, NULL, NULL),
(10, 55, 9, NULL, NULL),
(11, 55, 21, NULL, NULL),
(12, 56, 5, NULL, NULL),
(13, 56, 21, NULL, NULL),
(14, 67, 5, NULL, NULL),
(15, 67, 17, NULL, NULL),
(25, 76, 9, NULL, NULL),
(26, 76, 29, NULL, NULL),
(27, 76, 5, NULL, NULL),
(28, 80, 5, NULL, NULL),
(29, 80, 21, NULL, NULL),
(30, 81, 13, NULL, NULL),
(33, 88, 9, NULL, NULL),
(34, 88, 17, NULL, NULL),
(35, 91, 13, NULL, NULL),
(36, 91, 25, NULL, NULL),
(37, 92, 9, NULL, NULL),
(38, 92, 21, NULL, NULL),
(39, 117, 9, NULL, NULL),
(40, 117, 5, NULL, NULL),
(41, 118, 5, NULL, NULL),
(42, 118, 17, NULL, NULL),
(43, 119, 9, NULL, NULL),
(44, 133, 9, NULL, NULL),
(45, 133, 17, NULL, NULL),
(46, 133, 5, NULL, NULL),
(52, 136, 9, NULL, NULL),
(53, 136, 17, NULL, NULL),
(54, 137, 9, NULL, NULL),
(55, 137, 17, NULL, NULL),
(56, 137, 5, NULL, NULL),
(57, 138, 5, NULL, NULL),
(58, 138, 17, NULL, NULL),
(59, 136, 17, NULL, NULL),
(60, 136, 17, NULL, NULL),
(61, 133, 17, NULL, NULL),
(62, 133, 17, NULL, NULL),
(63, 141, 9, NULL, NULL),
(64, 142, 9, NULL, NULL),
(65, 142, 17, NULL, NULL);

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
-- Table structure for table `image_user`
--

CREATE TABLE `image_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_user`
--

INSERT INTO `image_user` (`id`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(18, 'images/1649704363308155.jpg', 5, NULL, NULL),
(19, 'images/1650533455446962.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `like` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `created_at`, `updated_at`, `user_id`, `post_id`, `like`) VALUES
(123, NULL, NULL, 2, 141, 1),
(207, '2019-11-18 02:42:00', '2019-11-18 02:42:00', 1, 142, 1),
(212, '2019-11-18 03:48:07', '2019-11-18 03:48:07', 1, 139, 1),
(214, '2019-11-18 03:50:26', '2019-11-18 03:50:26', 6, 141, 1),
(215, '2019-11-18 03:50:38', '2019-11-18 03:50:38', 6, 137, 1),
(218, '2019-11-18 04:02:23', '2019-11-18 04:02:23', 1, 141, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(37, '2014_10_12_000000_create_users_table', 1),
(38, '2014_10_12_100000_create_password_resets_table', 1),
(39, '2018_04_24_134132_create_tags_table', 1),
(40, '2018_04_26_144755_create_categories_table', 1),
(41, '2018_04_30_163457_create_posts_table', 1),
(42, '2018_04_30_163658_create_category_post_table', 1),
(43, '2018_04_30_163710_create_post_tag_table', 1),
(44, '2018_07_12_154144_create_post_user_table', 1),
(45, '2019_08_19_000000_create_failed_jobs_table', 1),
(46, '2019_10_27_120516_add_code_to_posts', 2),
(47, '2019_10_27_121656_add_codes_to_posts_table', 3),
(48, '2019_10_28_185317_create_likes_table', 4),
(49, '2019_11_02_073316_create_image_user_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `codes` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `image`, `body`, `view_count`, `status`, `is_approved`, `created_at`, `updated_at`, `codes`) VALUES
(10, 1, 'jyhjtyhj', 'jdetkjtuyhk', 'default.png', 'jdtfhjktuhk', 3, 0, 0, '2019-10-28 02:48:26', '2019-11-01 23:13:41', 'jdetgkuyetuk\r\nkyhjtyuj'),
(11, 1, 'hjryjn', 'hjrfygjn', 'default.png', 'hnjrfgyjhnty', 1, 0, 0, '2019-10-28 02:48:52', '2019-10-28 02:57:35', 'hyrfjhn'),
(12, 1, 'ujhyj', 'jtdyh', 'default.png', 'jntym', 2, 0, 0, '2019-10-28 02:49:52', '2019-10-29 04:06:51', 'jyh'),
(13, 3, 'API response', 'API response', 'default.png', 'gbstdfh', 2, 0, 0, '2019-10-28 06:02:09', '2019-11-02 05:51:35', 'I had written tutorial of how to create multiple authentication in laravel 6 step by ste'),
(14, 4, 'hgrt', 'hrwth', 'default.png', 'hrth', 6, 0, 0, NULL, NULL, NULL),
(47, 1, 'jetyjjedtjk', 'jetyjjtyjktuk', 'default.png', 'jty', 1, 0, 0, '2019-11-02 00:13:20', '2019-11-02 05:09:20', 'jtyj'),
(49, 1, 'amar nam javed', 'hfgh', 'default.png', 'hrfgh', 1, 0, 0, '2019-11-02 00:30:13', '2019-11-02 05:08:07', 'hrsjh'),
(50, 1, 'jtyjh', 'jkfk', 'default.png', 'jk', 0, 0, 0, '2019-11-02 00:31:33', '2019-11-02 00:31:33', 'kmfyhk'),
(51, 1, 'hrtfgjh', 'hdeyj', 'default.png', 'jhdj', 2, 0, 0, '2019-11-02 00:31:53', '2019-11-02 22:22:12', 'jyh'),
(52, 1, 'kjfk', 'jkuyk', 'default.png', 'jkdfyujk', 1, 0, 0, '2019-11-02 00:32:24', '2019-11-02 04:56:34', 'kfyujk'),
(53, 1, 'jrtgn', 'jdtjk', 'default.png', 'jdtgjk', 3, 0, 0, '2019-11-02 00:36:52', '2019-11-02 22:24:07', 'jkdfujh'),
(54, 1, 'hello world', 'gsdfgh', 'default.png', 'hsgdfh', 1, 0, 0, '2019-11-02 01:01:12', '2019-11-02 04:37:06', 'gsdfgh'),
(55, 1, 'OKKK', 'jtgjk', 'default.png', 'jjk', 2, 0, 0, '2019-11-02 01:01:25', '2019-11-08 23:47:43', 'kjfryuk'),
(56, 1, 'ok re ba tham ebar', 'partam na', 'default.png', 'tui korbe tor bape korbo halar hala', 1, 0, 0, '2019-11-02 05:41:44', '2019-11-09 01:04:07', 'dekhi limu ne ....ay age samne'),
(67, 5, 'hrtherty', 'hneyje', 'default.png', 'nhjey', 1, 0, 0, '2019-11-09 00:21:39', '2019-11-09 00:29:36', 'hnjey'),
(68, 1, 'p1', 'p1', 'default.png', 'gvedfvb', 1, 0, 0, '2019-11-09 00:46:44', '2019-11-09 00:46:53', NULL),
(76, 5, 'jtdgj', 'mfgym', 'default.png', 'myfgum', 1, 0, 0, '2019-11-09 01:17:26', '2019-11-09 02:59:15', NULL),
(77, 5, 'gae', 'bsr', 'default.png', 'nbsrfgh', 0, 0, 0, '2019-11-09 01:33:50', '2019-11-09 01:33:50', NULL),
(78, 5, 'gvesrtfb', 'bsdgfb', 'default.png', 'b sdtgb', 0, 0, 0, '2019-11-09 01:34:40', '2019-11-09 01:34:40', NULL),
(79, 5, 'vbgrf', 'br', 'default.png', 'brh', 0, 0, 0, '2019-11-09 01:41:36', '2019-11-09 01:41:36', NULL),
(80, 5, 'njhrfth', 'nbrt', 'default.png', 'nb rftg', 0, 0, 0, '2019-11-09 01:47:09', '2019-11-09 01:47:09', NULL),
(81, 5, 'hrtfgbh', 'bnrf', 'default.png', 'n bfn', 0, 0, 0, '2019-11-09 01:47:22', '2019-11-09 01:47:22', NULL),
(82, 5, 'g', 'brfbnrtgn', 'default.png', 'nbrftgn', 0, 0, 0, '2019-11-09 01:47:37', '2019-11-09 01:47:37', NULL),
(83, 5, 'hgrterth', 'hbwt', 'default.png', 'hbretjn', 0, 0, 0, '2019-11-09 01:47:52', '2019-11-09 01:47:52', NULL),
(84, 5, 'hrtfgbhn', 'bn', 'default.png', 'nb', 0, 0, 0, '2019-11-09 01:48:13', '2019-11-09 01:48:13', NULL),
(85, 5, 'br', 'nbrfgtn', 'default.png', 'nrfgyn', 0, 0, 0, '2019-11-09 01:48:40', '2019-11-09 01:48:40', NULL),
(87, 5, 'fwgvf', 'brfgh', 'default.png', 'nhj', 1, 0, 0, '2019-11-09 02:49:01', '2019-11-09 02:59:10', NULL),
(88, 5, 'hbrftgh', 'bnrfth', 'default.png', 'nbjh', 0, 0, 0, '2019-11-09 02:49:09', '2019-11-09 02:49:09', NULL),
(89, 5, 'hrtfh', 'hrfth', 'default.png', 'hnrftjh', 0, 0, 0, '2019-11-09 02:51:09', '2019-11-09 02:51:09', NULL),
(90, 5, 'hnrfjhn', 'ntgyj', 'default.png', 'ntyjmn', 0, 0, 0, '2019-11-09 02:51:28', '2019-11-09 02:51:28', NULL),
(91, 5, 'nrfygjnfrty', 'nyj', 'default.png', 'ntfyjhm', 1, 0, 0, '2019-11-09 02:53:01', '2019-11-09 02:53:07', NULL),
(92, 5, 'nrnnrthjn', 'n ret', 'default.png', 'n rtng', 1, 0, 0, '2019-11-09 02:53:26', '2019-11-09 02:53:33', NULL),
(93, 5, 'hbrtgh', 'nbrtjh', 'default.png', 'nrj', 1, 0, 0, '2019-11-09 02:54:08', '2019-11-09 02:54:14', NULL),
(94, 5, 'brsdbn', 'b rfh', 'default.png', 'bnrftgnb', 1, 0, 0, '2019-11-09 02:54:33', '2019-11-09 02:54:36', NULL),
(95, 5, 'hrtgjhrwty', 'hnrejnw', 'default.png', 'jhnrtjhn', 1, 0, 0, '2019-11-09 02:57:56', '2019-11-09 02:58:00', NULL),
(96, 5, 'kju', 'mkyu', 'default.png', 'kmryu', 1, 0, 0, '2019-11-09 02:58:48', '2019-11-09 02:58:51', 'dqADFWE'),
(97, 5, 'brtbher', 'beth', 'default.png', 'b rt', 1, 0, 0, '2019-11-09 03:02:01', '2019-11-09 03:02:03', 'beth'),
(98, 5, 'jtyjhmnety6j', 'jntyj', 'default.png', 'jnmtyj', 1, 0, 0, '2019-11-09 03:04:09', '2019-11-09 03:06:44', NULL),
(99, 5, 'hgrtghret', 'nhret', 'default.png', 'nerm', 1, 0, 0, '2019-11-09 03:32:12', '2019-11-09 03:32:16', NULL),
(100, 5, 'yyy', 'yyy', 'default.png', 'yyy', 1, 0, 0, '2019-11-09 03:32:26', '2019-11-09 03:32:30', NULL),
(101, 5, 'ttt', 'ttttttt', 'default.png', 'tttttttt', 1, 0, 0, '2019-11-09 03:34:43', '2019-11-09 03:34:49', NULL),
(102, 5, 'ttttt', 'tttt', 'default.png', 'tttt', 0, 0, 0, '2019-11-09 03:35:10', '2019-11-09 03:35:10', NULL),
(103, 5, 'www', 'www', 'default.png', 'www', 1, 0, 0, '2019-11-09 03:36:34', '2019-11-09 03:36:39', NULL),
(104, 5, 'qqq', 'qqq', 'default.png', 'qqq', 1, 0, 0, '2019-11-09 03:37:00', '2019-11-09 03:37:03', NULL),
(105, 5, 'ggg', 'gg', 'default.png', 'ggg', 1, 0, 0, '2019-11-09 03:38:22', '2019-11-09 03:38:38', NULL),
(106, 5, 'hetb', 'hretgjn', 'default.png', 'n retn', 1, 0, 0, '2019-11-09 03:41:14', '2019-11-09 03:41:19', NULL),
(107, 5, 'gherh', 'wethb', 'default.png', 'bne4tn', 1, 0, 0, '2019-11-09 03:53:10', '2019-11-09 03:53:14', NULL),
(112, 5, 'hgetr', 'hbewrt', 'default.png', 'hbwtjn', 1, 0, 0, '2019-11-09 04:07:08', '2019-11-09 04:07:14', NULL),
(113, 5, 'hnrftgjn', 'nrfymn', 'default.png', 'mnrtfym', 1, 0, 0, '2019-11-09 04:07:50', '2019-11-09 04:07:55', NULL),
(114, 5, '\'/yipo', '\'/9ip', 'default.png', '\'/9p\'', 0, 0, 0, '2019-11-09 04:38:01', '2019-11-09 04:38:01', NULL),
(115, 5, ';op', ';.8io', 'default.png', 'kjuyrf', 0, 0, 0, '2019-11-09 04:38:32', '2019-11-09 04:38:32', NULL),
(116, 5, '.yil', '.iuok.', 'default.png', '.uoi', 0, 0, 0, '2019-11-09 04:39:34', '2019-11-09 04:39:34', '.oiu'),
(117, 5, 'gfgfg', 'bvefv', 'default.png', 'bv eftgb', 1, 0, 0, '2019-11-09 04:40:27', '2019-11-09 04:40:32', NULL),
(118, 5, 'vfadsgv', 've b', 'default.png', 'vberf', 1, 0, 0, '2019-11-09 04:41:55', '2019-11-09 04:42:01', NULL),
(119, 5, 'bhetdfhb', 'bedtn', 'default.png', 'bn rtgn', 1, 0, 0, '2019-11-09 04:43:56', '2019-11-09 04:44:00', NULL),
(120, 5, 'vsefb', 'bv ed', 'default.png', 'b etfb', 1, 0, 0, '2019-11-09 04:44:36', '2019-11-09 04:55:15', NULL),
(121, 5, 'ffeasrg', 'gwqrgv', 'default.png', 'bqe bn', 1, 0, 0, '2019-11-09 04:45:01', '2019-11-09 04:55:22', 'b qer bn'),
(122, 5, 'gaef', 'bedtfn', 'default.png', 'nbrtg', 1, 0, 0, '2019-11-09 04:45:55', '2019-11-09 04:55:12', NULL),
(123, 5, 'jreyj', 'hjnrjn', 'default.png', 'jnryj', 1, 0, 0, '2019-11-09 04:48:12', '2019-11-09 04:55:09', NULL),
(124, 5, 'brdtfgn', 'bedtfnnrfg', 'default.png', 'nbr g', 1, 0, 0, '2019-11-09 04:58:08', '2019-11-09 04:58:18', NULL),
(125, 5, 'brfg', 'brn', 'default.png', 'nbrfgn', 1, 0, 0, '2019-11-09 05:01:24', '2019-11-09 05:01:30', NULL),
(126, 5, 'vwad', 'vb esfvb', 'default.png', 'vasdv', 0, 0, 0, '2019-11-09 05:08:38', '2019-11-09 05:08:38', NULL),
(127, 5, 'l7tui', 'kryuk', 'default.png', 'kyruk', 1, 0, 0, '2019-11-09 05:09:45', '2019-11-09 05:10:02', NULL),
(128, 5, 'jnetgdh', 'hbrtgn', 'default.png', 'nb rfgn', 1, 0, 0, '2019-11-09 06:11:52', '2019-11-09 06:11:55', NULL),
(129, 5, 'fcf', 'vfasdv', 'default.png', 'vefb', 1, 0, 0, '2019-11-09 06:12:31', '2019-11-09 06:12:36', NULL),
(130, 5, 'bgvaefr', 'bef', 'default.png', 'bedn', 1, 0, 0, '2019-11-09 06:14:46', '2019-11-09 06:14:49', NULL),
(131, 5, 'gea', 'gbeatfhb', 'default.png', 'bth', 1, 0, 0, '2019-11-09 06:15:02', '2019-11-09 06:15:06', NULL),
(132, 5, 'fsdf', 'vasdf', 'default.png', 'vb aef', 1, 0, 0, '2019-11-09 06:16:44', '2019-11-10 00:02:05', NULL),
(133, 1, 'Feature Toggle in laravel', 'Feature Toggle in laravel', 'default.png', 'for software different features and set Feature On/Off', 1, 0, 0, '2019-11-10 00:01:53', '2019-11-10 00:01:58', '@feature(\'loginWithGoogle\')\n    <a href=\"#\" class=\"btn btn-primary-soft\">\n        <i class=\"fa fa-google\"></i>\n        <span>Login With Google</span>\n    </a>\n@endfeature'),
(136, 1, 'Laravel OrderBy relationship counter', 'Laravel OrderBy relationship counter', 'default.png', 'If you want to count the number of results from a relationship without actually loading them you may use the \"withCount\" method, which will place a \"{relation}_count\" column on your resulting models.', 1, 0, 0, '2019-11-10 00:08:14', '2019-11-10 01:18:30', 'foreach ($posts as $post) {\r\n    echo $post->comments_count;\r\n}'),
(137, 1, 'hgsb', 'hdfxg', 'default.png', 'hdfgh', 2, 0, 0, '2019-11-10 00:27:51', '2019-11-18 03:50:35', 'hdfg'),
(138, 1, 'jtyh', 'jhyt', 'default.png', 'kju', 2, 0, 0, '2019-11-10 01:16:16', '2019-11-18 04:02:12', 'kmfy'),
(139, 1, 'hdgnmry', 'hngjnrfmgn', 'default.png', 'n df mntg', 2, 0, 0, '2019-11-10 02:10:09', '2019-11-18 03:48:03', 'n dfmnrtgjmn'),
(140, 1, 'hbwsrtfet', 'bretgnrw', 'default.png', 'gdrtnqrt', 1, 0, 0, '2019-11-10 02:11:27', '2019-11-10 02:11:31', 'nbwrrrrrrrrr'),
(141, 1, 'Disable view cache in', 'disable-view-cache-in', 'default.png', 'Disable view cache in', 5, 0, 0, '2019-11-10 02:16:59', '2019-11-18 03:51:01', 'Disable view cache in'),
(142, 1, 'Disable view cache', 'disable-view-cache', 'default.png', 'Disable view cache in Laravel', 2, 0, 0, '2019-11-10 02:17:44', '2019-11-18 02:41:55', 'Disable view cache in Laravel');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(11, 53, 5, NULL, NULL),
(12, 53, 17, NULL, NULL),
(13, 53, 13, NULL, NULL),
(14, 53, 9, NULL, NULL),
(15, 54, 5, NULL, NULL),
(16, 54, 9, NULL, NULL),
(17, 54, 13, NULL, NULL),
(18, 54, 17, NULL, NULL),
(19, 54, 21, NULL, NULL),
(20, 55, 9, NULL, NULL),
(21, 55, 25, NULL, NULL),
(22, 55, 1, NULL, NULL),
(23, 55, 21, NULL, NULL),
(24, 56, 5, NULL, NULL),
(25, 56, 21, NULL, NULL),
(26, 56, 9, NULL, NULL),
(27, 57, 13, NULL, NULL),
(28, 57, 21, NULL, NULL),
(29, 67, 5, NULL, NULL),
(30, 67, 25, NULL, NULL),
(42, 76, 9, NULL, NULL),
(43, 76, 29, NULL, NULL),
(44, 76, 5, NULL, NULL),
(45, 80, 5, NULL, NULL),
(46, 80, 21, NULL, NULL),
(47, 81, 13, NULL, NULL),
(50, 88, 9, NULL, NULL),
(51, 88, 17, NULL, NULL),
(52, 91, 13, NULL, NULL),
(53, 91, 25, NULL, NULL),
(54, 92, 9, NULL, NULL),
(55, 92, 21, NULL, NULL),
(56, 117, 9, NULL, NULL),
(57, 117, 5, NULL, NULL),
(58, 117, 1, NULL, NULL),
(59, 118, 9, NULL, NULL),
(60, 118, 5, NULL, NULL),
(61, 118, 1, NULL, NULL),
(62, 119, 13, NULL, NULL),
(63, 119, 1, NULL, NULL),
(64, 133, 5, NULL, NULL),
(65, 133, 17, NULL, NULL),
(66, 133, 1, NULL, NULL),
(75, 136, 13, NULL, NULL),
(76, 136, 25, NULL, NULL),
(77, 136, 5, NULL, NULL),
(78, 137, 5, NULL, NULL),
(79, 137, 17, NULL, NULL),
(80, 137, 1, NULL, NULL),
(81, 138, 5, NULL, NULL),
(82, 138, 21, NULL, NULL),
(83, 136, 5, NULL, NULL),
(84, 136, 13, NULL, NULL),
(85, 136, 25, NULL, NULL),
(86, 136, 29, NULL, NULL),
(87, 141, 9, NULL, NULL),
(88, 141, 21, NULL, NULL),
(89, 141, 5, NULL, NULL),
(90, 142, 9, NULL, NULL),
(91, 142, 13, NULL, NULL),
(92, 142, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_user`
--

CREATE TABLE `post_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'patterns', 'patterns', NULL, NULL),
(5, 'templating', 'templating', NULL, NULL),
(9, 'repository', 'repository', NULL, NULL),
(13, '4.0', '4.0', NULL, NULL),
(17, '3.0', '3.0', NULL, NULL),
(21, '4.1', '4.1', NULL, NULL),
(25, 'testing', 'testing', NULL, NULL),
(29, 'database', 'database', NULL, NULL),
(33, 'blade', 'blade', NULL, NULL),
(37, 'macros', 'macros', NULL, NULL),
(41, 'authentication', 'authentication', NULL, NULL),
(45, 'filters', 'filters', NULL, NULL),
(49, 'view data', 'view data', NULL, NULL),
(53, 'events', 'events', NULL, NULL),
(57, 'models', 'models', NULL, NULL),
(61, 'relationships', 'relationships', NULL, NULL),
(65, 'sitemap', 'sitemap', NULL, NULL),
(69, 'troubleshooting', 'troubleshooting', NULL, NULL),
(73, '4.2', '4.2', NULL, NULL),
(77, '5.0', '5.0', NULL, NULL),
(78, '5.1', '5.1', NULL, NULL),
(79, '5.2', '5.2', NULL, NULL),
(80, '5.3', '5.3', NULL, NULL),
(81, '5.4', '5.4', NULL, NULL),
(82, '5.5', '5.5', NULL, NULL),
(83, '5.6', '5.6', NULL, NULL),
(84, 'eloquent', 'eloquent', NULL, NULL),
(85, 'forge', 'forge', NULL, NULL),
(86, 'horizon', 'horizon', NULL, NULL),
(87, 'cashier', 'cashier', NULL, NULL),
(88, 'passport', 'passport', NULL, NULL),
(89, 'queues', 'queues', NULL, NULL),
(90, 'mocking', 'mocking', NULL, NULL),
(91, 'container', 'container', NULL, NULL),
(92, 'facades', 'facades', NULL, NULL),
(93, 'cli', 'cli', NULL, NULL),
(94, 'commands', 'commands', NULL, NULL),
(95, 'jobs', 'jobs', NULL, NULL),
(96, 'scheduling', 'scheduling', NULL, NULL),
(97, '5.7', '5.7', NULL, NULL),
(98, '5.8', '5.8', NULL, NULL),
(99, 'telescope', 'telescope', NULL, NULL),
(100, 'nova', 'nova', NULL, NULL),
(101, 'api', 'api', NULL, NULL),
(102, 'dusk', 'dusk', NULL, NULL),
(103, 'notifications', 'notifications', NULL, NULL),
(104, 'envoy', 'envoy', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'javed', 'javed@gmail.com', '$2y$10$.MvSmzESHTKwZnDGQiaXzeZw8lRIzrv7Yn9.WA4/6NtwwMMKk5x4W', 'UDgrWXDQyAfXOSff5TuoLPERK0sA8KEjWzH93KUqA0AlrveNpwmFycKZk6Rc', '2019-10-26 04:46:52', '2019-10-30 03:05:16'),
(2, 'Mahfuz', 'Mahfuz@gmail.com', '12345678', NULL, NULL, NULL),
(3, 'mahfuz', 'mahfu@gmail.com', '12345678', '1HBcLuv5NmosRkIvzAvOlBS0wKikI6TMMzy1B6o8du9RrRzvUM1QqG5wRxWH', '2019-10-26 06:15:56', '2019-10-26 06:15:56'),
(4, 'grgh', 'hrtfgh@gmail.com', '$2y$10$sJAw.evLPGeN.72u.PWMOeiQP.Rdl5PlELOfoVCPK0LFsfN1zgrma', NULL, '2019-10-30 23:51:59', '2019-10-30 23:51:59'),
(5, 'mahfuz', 'mahflu@gmail.com', '$2y$10$2LnXZ6q8RpJW7nFsztmJOuO8k7wvu04UjCEkkNG0rEpnIvtLjAtuy', NULL, '2019-11-09 00:21:26', '2019-11-09 00:21:26'),
(6, 'farul', 'farul@gmail.com', '$2y$10$BBZmWc3KNT1RFl9PaDIwQ.OBowIaP3pp7akBZpw1.VI3GadN9Tjba', NULL, '2019-11-18 03:50:12', '2019-11-18 03:50:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_user`
--
ALTER TABLE `image_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_user`
--
ALTER TABLE `post_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_user_post_id_foreign` (`post_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_user`
--
ALTER TABLE `image_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `post_user`
--
ALTER TABLE `post_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_user`
--
ALTER TABLE `post_user`
  ADD CONSTRAINT `post_user_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
