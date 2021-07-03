-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 07:28 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colortrade`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '2021-06-24 02:11:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Pl1MGzs4y8qe2SDK1KrGWSHCDD0YIwUO3LJVyGcaT8NiBosBk6tkIvDbUdjB', NULL, '1703480768115651martin-katler-2r_2aQLMrgE-unsplash.jpg', '2021-06-24 02:11:36', '2021-06-24 15:17:37');

-- --------------------------------------------------------

--
-- Table structure for table `bet_colors`
--

CREATE TABLE `bet_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `svbetting_id` bigint(20) UNSIGNED NOT NULL,
  `number` smallint(6) NOT NULL,
  `bet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bet_colors`
--

INSERT INTO `bet_colors` (`id`, `user_id`, `color_id`, `svbetting_id`, `number`, `bet`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 8, 30, 5, '9000', 2, '2021-06-29 00:57:40', '2021-07-02 09:15:30'),
(2, 2, 3, 31, 4, '70', 2, '2021-06-29 10:51:32', '2021-07-02 07:56:22'),
(3, 3, 2, 31, 1, '800', 2, '2021-06-29 10:57:02', '2021-07-02 07:56:22'),
(4, 4, 2, 31, 3, '300', 1, '2021-06-29 11:02:01', '2021-07-02 07:56:22'),
(5, 5, 2, 31, 3, '400', 1, '2021-06-29 11:03:29', '2021-07-02 07:56:22'),
(6, 6, 2, 31, 3, '20', 1, '2021-06-29 11:05:13', '2021-07-02 07:56:22'),
(7, 7, 3, 31, 0, '700', 1, '2021-06-29 11:08:55', '2021-07-02 07:56:22'),
(8, 8, 4, 31, 1, '20000', 2, '2021-06-29 11:10:56', '2021-07-02 07:56:23'),
(13, 10, 3, 32, 1, '10', 2, '2021-07-01 10:29:43', '2021-07-01 12:55:05'),
(14, 11, 4, 32, 2, '20', 2, '2021-07-01 10:30:56', '2021-07-01 12:55:05'),
(15, 12, 2, 32, 0, '10', 2, '2021-07-01 11:04:38', '2021-07-01 12:55:05'),
(16, 13, 2, 32, 2, '10', 1, '2021-07-01 11:18:08', '2021-07-01 12:55:05'),
(17, 1, 2, 31, 2, '10', 2, '2021-07-02 10:16:19', '2021-07-02 10:19:06'),
(18, 1, 2, 31, 4, '10', 0, '2021-07-02 10:21:52', '2021-07-02 10:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `state_id`, `city_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Rawalpindi', '2021-06-24 02:39:41', '2021-06-24 02:39:41'),
(2, 1, 'Islamabad', '2021-06-24 02:40:25', '2021-06-24 02:40:25'),
(3, 2, 'Karachi', '2021-06-24 02:52:23', '2021-06-24 05:56:54'),
(6, 1, 'Lahore', '2021-06-24 05:56:32', '2021-06-24 05:56:32'),
(7, 1, 'Multan', '2021-06-24 15:10:00', '2021-06-24 15:10:18'),
(8, 1, 'Asdfbn', '2021-06-24 15:10:33', '2021-06-24 15:10:33');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_code_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color_code`, `color_code_2`, `color_name`, `created_at`, `updated_at`) VALUES
(2, 'rgba(0, 0, 255, 1)', 'rgba(0,191,254,1)', 'Blue', '2021-06-25 10:20:18', '2021-06-25 10:20:18'),
(3, 'rgba(0,255,0,1)', 'rgba(192,255,142,1)', 'Green', '2021-06-25 10:21:16', '2021-06-25 10:21:16'),
(4, 'rgba(255,255,0,1)', 'rgba(251,251,146,1)', 'Yellow', '2021-06-25 10:22:19', '2021-06-25 10:22:19'),
(5, 'rgba(255,127,0,1)', 'rgba(255,180,105,1)', 'Orange', '2021-06-25 10:23:05', '2021-06-25 10:23:05'),
(6, 'rgba(148,0,211,1)', 'rgba(218,132,255,1)', 'Violet', '2021-06-25 10:24:12', '2021-06-25 10:24:12'),
(7, 'rgba(75,0,130,1)', 'rgba(185,90,255,1)', 'Indigo', '2021-06-25 10:25:02', '2021-06-25 10:25:02'),
(8, 'rgba(255,0,0,1)', 'rgba(255,137,137,1)', 'Red', '2021-06-25 10:26:59', '2021-06-25 10:26:59');

-- --------------------------------------------------------

--
-- Table structure for table `color_svbettings`
--

CREATE TABLE `color_svbettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `svbetting_id` bigint(20) UNSIGNED NOT NULL,
  `number` smallint(6) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color_svbettings`
--

INSERT INTO `color_svbettings` (`id`, `color_id`, `svbetting_id`, `number`, `status`, `created_at`, `updated_at`) VALUES
(7, 3, 28, 1, 0, '2021-06-26 02:27:28', '2021-06-26 02:27:28'),
(8, 4, 28, 2, 0, '2021-06-26 02:27:28', '2021-06-26 02:27:28'),
(9, 5, 28, 3, 0, '2021-06-26 02:27:28', '2021-06-26 02:27:28'),
(10, 6, 28, 4, 0, '2021-06-26 02:27:28', '2021-06-26 02:27:28'),
(11, 7, 28, 5, 0, '2021-06-26 02:27:28', '2021-06-26 02:27:28'),
(12, 8, 28, 6, 0, '2021-06-26 02:27:28', '2021-06-26 02:27:28'),
(19, 2, 30, 9, 0, '2021-06-26 03:18:11', '2021-06-26 06:12:25'),
(20, 3, 30, 1, 0, '2021-06-26 03:18:11', '2021-06-26 03:18:11'),
(21, 4, 30, 2, 0, '2021-06-26 03:18:11', '2021-06-26 03:18:11'),
(22, 5, 30, 3, 0, '2021-06-26 03:18:11', '2021-06-26 03:18:11'),
(23, 6, 30, 4, 0, '2021-06-26 03:18:12', '2021-06-26 03:18:12'),
(24, 7, 30, 5, 0, '2021-06-26 03:18:12', '2021-06-26 03:18:12'),
(25, 8, 30, 6, 0, '2021-06-26 03:18:12', '2021-06-26 03:18:12'),
(26, 2, 31, 3, 0, '2021-06-26 03:20:10', '2021-06-26 06:12:43'),
(27, 3, 31, 0, 0, '2021-06-26 03:20:10', '2021-06-26 03:20:10'),
(28, 4, 31, 1, 0, '2021-06-26 03:20:10', '2021-06-26 03:20:10'),
(29, 5, 31, 9, 0, '2021-06-26 03:20:10', '2021-06-26 03:20:10'),
(30, 6, 31, 4, 0, '2021-06-26 03:20:10', '2021-06-26 03:20:10'),
(31, 7, 31, 7, 0, '2021-06-26 03:20:10', '2021-06-26 03:20:10'),
(32, 8, 31, 2, 0, '2021-06-26 03:20:12', '2021-06-26 03:20:12'),
(33, 2, 32, 2, 0, '2021-06-26 03:27:17', '2021-06-26 03:27:17'),
(34, 3, 32, 0, 0, '2021-06-26 03:27:17', '2021-06-26 03:27:17'),
(35, 4, 32, 1, 0, '2021-06-26 03:27:17', '2021-06-26 03:27:17'),
(36, 5, 32, 6, 0, '2021-06-26 03:27:17', '2021-06-26 03:27:17'),
(37, 6, 32, 5, 0, '2021-06-26 03:27:18', '2021-06-26 03:27:18'),
(38, 7, 32, 4, 0, '2021-06-26 03:27:18', '2021-06-26 03:27:18'),
(39, 8, 32, 7, 0, '2021-06-26 03:27:18', '2021-06-26 03:27:18'),
(40, 2, 33, 0, 0, '2021-07-01 10:24:25', '2021-07-01 10:24:25'),
(41, 3, 33, 1, 0, '2021-07-01 10:24:25', '2021-07-01 10:24:25'),
(42, 4, 33, 2, 0, '2021-07-01 10:24:25', '2021-07-01 10:24:25'),
(43, 5, 33, 3, 0, '2021-07-01 10:24:25', '2021-07-01 10:24:25'),
(44, 6, 33, 5, 0, '2021-07-01 10:24:25', '2021-07-01 10:24:25'),
(45, 7, 33, 6, 0, '2021-07-01 10:24:26', '2021-07-01 10:24:26'),
(46, 8, 33, 7, 0, '2021-07-01 10:24:26', '2021-07-01 10:24:26'),
(47, 2, 34, 0, 0, '2021-07-01 10:25:00', '2021-07-01 10:25:00'),
(48, 3, 34, 1, 0, '2021-07-01 10:25:00', '2021-07-01 10:25:00'),
(49, 4, 34, 2, 0, '2021-07-01 10:25:00', '2021-07-01 10:25:00'),
(50, 5, 34, 3, 0, '2021-07-01 10:25:00', '2021-07-01 10:25:00'),
(51, 6, 34, 4, 0, '2021-07-01 10:25:00', '2021-07-01 10:25:00'),
(52, 7, 34, 5, 0, '2021-07-01 10:25:00', '2021-07-01 10:25:00'),
(53, 8, 34, 6, 0, '2021-07-01 10:25:00', '2021-07-01 10:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `phone_code`, `country_code`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', '93', 'AF', NULL, NULL),
(2, 'Aland Islands', '358', 'AX', NULL, NULL),
(3, 'Albania', '355', 'AL', NULL, NULL),
(4, 'Algeria', '213', 'DZ', NULL, NULL),
(5, 'American Samoa', '1684', 'AS', NULL, NULL),
(6, 'Andorra', '376', 'AD', NULL, NULL),
(7, 'Angola', '244', 'AO', NULL, NULL),
(8, 'Anguilla', '1264', 'AI', NULL, NULL),
(9, 'Antarctica', '672', 'AQ', NULL, NULL),
(10, 'Antigua and Barbuda', '1268', 'AG', NULL, NULL),
(11, 'Argentina', '54', 'AR', NULL, NULL),
(12, 'Armenia', '374', 'AM', NULL, NULL),
(13, 'Aruba', '297', 'AW', NULL, NULL),
(14, 'Australia', '61', 'AU', NULL, NULL),
(15, 'Austria', '43', 'AT', NULL, NULL),
(16, 'Azerbaijan', '994', 'AZ', NULL, NULL),
(17, 'Bahamas', '1242', 'BS', NULL, NULL),
(18, 'Bahrain', '973', 'BH', NULL, NULL),
(19, 'Bangladesh', '880', 'BD', NULL, NULL),
(20, 'Barbados', '1246', 'BB', NULL, NULL),
(21, 'Belarus', '375', 'BY', NULL, NULL),
(22, 'Belgium', '32', 'BE', NULL, NULL),
(23, 'Belize', '501', 'BZ', NULL, NULL),
(24, 'Benin', '229', 'BJ', NULL, NULL),
(25, 'Bermuda', '1441', 'BM', NULL, NULL),
(26, 'Bhutan', '975', 'BT', NULL, NULL),
(27, 'Bolivia', '591', 'BO', NULL, NULL),
(28, 'Bonaire, Sint Eustatius and Saba', '599', 'BQ', NULL, NULL),
(29, 'Bosnia and Herzegovina', '387', 'BA', NULL, NULL),
(30, 'Botswana', '267', 'BW', NULL, NULL),
(31, 'Bouvet Island', '55', 'BV', NULL, NULL),
(32, 'Brazil', '55', 'BR', NULL, NULL),
(33, 'British Indian Ocean Territory', '246', 'IO', NULL, NULL),
(34, 'Brunei Darussalam', '673', 'BN', NULL, NULL),
(35, 'Bulgaria', '359', 'BG', NULL, NULL),
(36, 'Burkina Faso', '226', 'BF', NULL, NULL),
(37, 'Burundi', '257', 'BI', NULL, NULL),
(38, 'Cambodia', '855', 'KH', NULL, NULL),
(39, 'Cameroon', '237', 'CM', NULL, NULL),
(40, 'Canada', '1', 'CA', NULL, NULL),
(41, 'Cape Verde', '238', 'CV', NULL, NULL),
(42, 'Cayman Islands', '1345', 'KY', NULL, NULL),
(43, 'Central African Republic', '236', 'CF', NULL, NULL),
(44, 'Chad', '235', 'TD', NULL, NULL),
(45, 'Chile', '56', 'CL', NULL, NULL),
(46, 'China', '86', 'CN', NULL, NULL),
(47, 'Christmas Island', '61', 'CX', NULL, NULL),
(48, 'Cocos (Keeling) Islands', '672', 'CC', NULL, NULL),
(49, 'Colombia', '57', 'CO', NULL, NULL),
(50, 'Comoros', '269', 'KM', NULL, NULL),
(51, 'Congo', '242', 'CG', NULL, NULL),
(52, 'Congo, Democratic Republic of the Congo', '242', 'CD', NULL, NULL),
(53, 'Cook Islands', '682', 'CK', NULL, NULL),
(54, 'Costa Rica', '506', 'CR', NULL, NULL),
(55, 'Cote D\'Ivoire', '225', 'CI', NULL, NULL),
(56, 'Croatia', '385', 'HR', NULL, NULL),
(57, 'Cuba', '53', 'CU', NULL, NULL),
(58, 'Curacao', '599', 'CW', NULL, NULL),
(59, 'Cyprus', '357', 'CY', NULL, NULL),
(60, 'Czech Republic', '420', 'CZ', NULL, NULL),
(61, 'Denmark', '45', 'DK', NULL, NULL),
(62, 'Djibouti', '253', 'DJ', NULL, NULL),
(63, 'Dominica', '1767', 'DM', NULL, NULL),
(64, 'Dominican Republic', '1809', 'DO', NULL, NULL),
(65, 'Ecuador', '593', 'EC', NULL, NULL),
(66, 'Egypt', '20', 'EG', NULL, NULL),
(67, 'El Salvador', '503', 'SV', NULL, NULL),
(68, 'Equatorial Guinea', '240', 'GQ', NULL, NULL),
(69, 'Eritrea', '291', 'ER', NULL, NULL),
(70, 'Estonia', '372', 'EE', NULL, NULL),
(71, 'Ethiopia', '251', 'ET', NULL, NULL),
(72, 'Falkland Islands (Malvinas)', '500', 'FK', NULL, NULL),
(73, 'Faroe Islands', '298', 'FO', NULL, NULL),
(74, 'Fiji', '679', 'FJ', NULL, NULL),
(75, 'Finland', '358', 'FI', NULL, NULL),
(76, 'France', '33', 'FR', NULL, NULL),
(77, 'French Guiana', '594', 'GF', NULL, NULL),
(78, 'French Polynesia', '689', 'PF', NULL, NULL),
(79, 'French Southern Territories', '262', 'TF', NULL, NULL),
(80, 'Gabon', '241', 'GA', NULL, NULL),
(81, 'Gambia', '220', 'GM', NULL, NULL),
(82, 'Georgia', '995', 'GE', NULL, NULL),
(83, 'Germany', '49', 'DE', NULL, NULL),
(84, 'Ghana', '233', 'GH', NULL, NULL),
(85, 'Gibraltar', '350', 'GI', NULL, NULL),
(86, 'Greece', '30', 'GR', NULL, NULL),
(87, 'Greenland', '299', 'GL', NULL, NULL),
(88, 'Grenada', '1473', 'GD', NULL, NULL),
(89, 'Guadeloupe', '590', 'GP', NULL, NULL),
(90, 'Guam', '1671', 'GU', NULL, NULL),
(91, 'Guatemala', '502', 'GT', NULL, NULL),
(92, 'Guernsey', '44', 'GG', NULL, NULL),
(93, 'Guinea', '224', 'GN', NULL, NULL),
(94, 'Guinea-Bissau', '245', 'GW', NULL, NULL),
(95, 'Guyana', '592', 'GY', NULL, NULL),
(96, 'Haiti', '509', 'HT', NULL, NULL),
(97, 'Heard Island and Mcdonald Islands', '0', 'HM', NULL, NULL),
(98, 'Holy See (Vatican City State)', '39', 'VA', NULL, NULL),
(99, 'Honduras', '504', 'HN', NULL, NULL),
(100, 'Hong Kong', '852', 'HK', NULL, NULL),
(101, 'Hungary', '36', 'HU', NULL, NULL),
(102, 'Iceland', '354', 'IS', NULL, NULL),
(103, 'India', '91', 'IN', NULL, NULL),
(104, 'Indonesia', '62', 'ID', NULL, NULL),
(105, 'Iran, Islamic Republic of', '98', 'IR', NULL, NULL),
(106, 'Iraq', '964', 'IQ', NULL, NULL),
(107, 'Ireland', '353', 'IE', NULL, NULL),
(108, 'Isle of Man', '44', 'IM', NULL, NULL),
(109, 'Israel', '972', 'IL', NULL, NULL),
(110, 'Italy', '39', 'IT', NULL, NULL),
(111, 'Jamaica', '1876', 'JM', NULL, NULL),
(112, 'Japan', '81', 'JP', NULL, NULL),
(113, 'Jersey', '44', 'JE', NULL, NULL),
(114, 'Jordan', '962', 'JO', NULL, NULL),
(115, 'Kazakhstan', '7', 'KZ', NULL, NULL),
(116, 'Kenya', '254', 'KE', NULL, NULL),
(117, 'Kiribati', '686', 'KI', NULL, NULL),
(118, 'Korea, Democratic People\'s Republic of', '850', 'KP', NULL, NULL),
(119, 'Korea, Republic of', '82', 'KR', NULL, NULL),
(120, 'Kosovo', '381', 'XK', NULL, NULL),
(121, 'Kuwait', '965', 'KW', NULL, NULL),
(122, 'Kyrgyzstan', '996', 'KG', NULL, NULL),
(123, 'Lao People\'s Democratic Republic', '856', 'LA', NULL, NULL),
(124, 'Latvia', '371', 'LV', NULL, NULL),
(125, 'Lebanon', '961', 'LB', NULL, NULL),
(126, 'Lesotho', '266', 'LS', NULL, NULL),
(127, 'Liberia', '231', 'LR', NULL, NULL),
(128, 'Libyan Arab Jamahiriya', '218', 'LY', NULL, NULL),
(129, 'Liechtenstein', '423', 'LI', NULL, NULL),
(130, 'Lithuania', '370', 'LT', NULL, NULL),
(131, 'Luxembourg', '352', 'LU', NULL, NULL),
(132, 'Macao', '853', 'MO', NULL, NULL),
(133, 'Macedonia, the Former Yugoslav Republic of', '389', 'MK', NULL, NULL),
(134, 'Madagascar', '261', 'MG', NULL, NULL),
(135, 'Malawi', '265', 'MW', NULL, NULL),
(136, 'Malaysia', '60', 'MY', NULL, NULL),
(137, 'Maldives', '960', 'MV', NULL, NULL),
(138, 'Mali', '223', 'ML', NULL, NULL),
(139, 'Malta', '356', 'MT', NULL, NULL),
(140, 'Marshall Islands', '692', 'MH', NULL, NULL),
(141, 'Martinique', '596', 'MQ', NULL, NULL),
(142, 'Mauritania', '222', 'MR', NULL, NULL),
(143, 'Mauritius', '230', 'MU', NULL, NULL),
(144, 'Mayotte', '269', 'YT', NULL, NULL),
(145, 'Mexico', '52', 'MX', NULL, NULL),
(146, 'Micronesia, Federated States of', '691', 'FM', NULL, NULL),
(147, 'Moldova, Republic of', '373', 'MD', NULL, NULL),
(148, 'Monaco', '377', 'MC', NULL, NULL),
(149, 'Mongolia', '976', 'MN', NULL, NULL),
(150, 'Montenegro', '382', 'ME', NULL, NULL),
(151, 'Montserrat', '1664', 'MS', NULL, NULL),
(152, 'Morocco', '212', 'MA', NULL, NULL),
(153, 'Mozambique', '258', 'MZ', NULL, NULL),
(154, 'Myanmar', '95', 'MM', NULL, NULL),
(155, 'Namibia', '264', 'NA', NULL, NULL),
(156, 'Nauru', '674', 'NR', NULL, NULL),
(157, 'Nepal', '977', 'NP', NULL, NULL),
(158, 'Netherlands', '31', 'NL', NULL, NULL),
(159, 'Netherlands Antilles', '599', 'AN', NULL, NULL),
(160, 'New Caledonia', '687', 'NC', NULL, NULL),
(161, 'New Zealand', '64', 'NZ', NULL, NULL),
(162, 'Nicaragua', '505', 'NI', NULL, NULL),
(163, 'Niger', '227', 'NE', NULL, NULL),
(164, 'Nigeria', '234', 'NG', NULL, NULL),
(165, 'Niue', '683', 'NU', NULL, NULL),
(166, 'Norfolk Island', '672', 'NF', NULL, NULL),
(167, 'Northern Mariana Islands', '1670', 'MP', NULL, NULL),
(168, 'Norway', '47', 'NO', NULL, NULL),
(169, 'Oman', '968', 'OM', NULL, NULL),
(170, 'Pakistan', '92', 'PK', NULL, NULL),
(171, 'Palau', '680', 'PW', NULL, NULL),
(172, 'Palestinian Territory, Occupied', '970', 'PS', NULL, NULL),
(173, 'Panama', '507', 'PA', NULL, NULL),
(174, 'Papua New Guinea', '675', 'PG', NULL, NULL),
(175, 'Paraguay', '595', 'PY', NULL, NULL),
(176, 'Peru', '51', 'PE', NULL, NULL),
(177, 'Philippines', '63', 'PH', NULL, NULL),
(178, 'Pitcairn', '64', 'PN', NULL, NULL),
(179, 'Poland', '48', 'PL', NULL, NULL),
(180, 'Portugal', '351', 'PT', NULL, NULL),
(181, 'Puerto Rico', '1787', 'PR', NULL, NULL),
(182, 'Qatar', '974', 'QA', NULL, NULL),
(183, 'Reunion', '262', 'RE', NULL, NULL),
(184, 'Romania', '40', 'RO', NULL, NULL),
(185, 'Russian Federation', '70', 'RU', NULL, NULL),
(186, 'Rwanda', '250', 'RW', NULL, NULL),
(187, 'Saint Barthelemy', '590', 'BL', NULL, NULL),
(188, 'Saint Helena', '290', 'SH', NULL, NULL),
(189, 'Saint Kitts and Nevis', '1869', 'KN', NULL, NULL),
(190, 'Saint Lucia', '1758', 'LC', NULL, NULL),
(191, 'Saint Martin', '590', 'MF', NULL, NULL),
(192, 'Saint Pierre and Miquelon', '508', 'PM', NULL, NULL),
(193, 'Saint Vincent and the Grenadines', '1784', 'VC', NULL, NULL),
(194, 'Samoa', '684', 'WS', NULL, NULL),
(195, 'San Marino', '378', 'SM', NULL, NULL),
(196, 'Sao Tome and Principe', '239', 'ST', NULL, NULL),
(197, 'Saudi Arabia', '966', 'SA', NULL, NULL),
(198, 'Senegal', '221', 'SN', NULL, NULL),
(199, 'Serbia', '381', 'RS', NULL, NULL),
(200, 'Serbia and Montenegro', '381', 'CS', NULL, NULL),
(201, 'Seychelles', '248', 'SC', NULL, NULL),
(202, 'Sierra Leone', '232', 'SL', NULL, NULL),
(203, 'Singapore', '65', 'SG', NULL, NULL),
(204, 'Sint Maarten', '1', 'SX', NULL, NULL),
(205, 'Slovakia', '421', 'SK', NULL, NULL),
(206, 'Slovenia', '386', 'SI', NULL, NULL),
(207, 'Solomon Islands', '677', 'SB', NULL, NULL),
(208, 'Somalia', '252', 'SO', NULL, NULL),
(209, 'South Africa', '27', 'ZA', NULL, NULL),
(210, 'South Georgia and the South Sandwich Islands', '500', 'GS', NULL, NULL),
(211, 'South Sudan', '211', 'SS', NULL, NULL),
(212, 'Spain', '34', 'ES', NULL, NULL),
(213, 'Sri Lanka', '94', 'LK', NULL, NULL),
(214, 'Sudan', '249', 'SD', NULL, NULL),
(215, 'Suriname', '597', 'SR', NULL, NULL),
(216, 'Svalbard and Jan Mayen', '47', 'SJ', NULL, NULL),
(217, 'Swaziland', '268', 'SZ', NULL, NULL),
(218, 'Sweden', '46', 'SE', NULL, NULL),
(219, 'Switzerland', '41', 'CH', NULL, NULL),
(220, 'Syrian Arab Republic', '963', 'SY', NULL, NULL),
(221, 'Taiwan, Province of China', '886', 'TW', NULL, NULL),
(222, 'Tajikistan', '992', 'TJ', NULL, NULL),
(223, 'Tanzania, United Republic of', '255', 'TZ', NULL, NULL),
(224, 'Thailand', '66', 'TH', NULL, NULL),
(225, 'Timor-Leste', '670', 'TL', NULL, NULL),
(226, 'Togo', '228', 'TG', NULL, NULL),
(227, 'Tokelau', '690', 'TK', NULL, NULL),
(228, 'Tonga', '676', 'TO', NULL, NULL),
(229, 'Trinidad and Tobago', '1868', 'TT', NULL, NULL),
(230, 'Tunisia', '216', 'TN', NULL, NULL),
(231, 'Turkey', '90', 'TR', NULL, NULL),
(232, 'Turkmenistan', '7370', 'TM', NULL, NULL),
(233, 'Turks and Caicos Islands', '1649', 'TC', NULL, NULL),
(234, 'Tuvalu', '688', 'TV', NULL, NULL),
(235, 'Uganda', '256', 'UG', NULL, NULL),
(236, 'Ukraine', '380', 'UA', NULL, NULL),
(237, 'United Arab Emirates', '971', 'AE', NULL, NULL),
(238, 'United Kingdom', '44', 'GB', NULL, NULL),
(239, 'United States', '1', 'US', NULL, NULL),
(240, 'United States Minor Outlying Islands', '1', 'UM', NULL, NULL),
(241, 'Uruguay', '598', 'UY', NULL, NULL),
(242, 'Uzbekistan', '998', 'UZ', NULL, NULL),
(243, 'Vanuatu', '678', 'VU', NULL, NULL),
(244, 'Venezuela', '58', 'VE', NULL, NULL),
(245, 'Viet Nam', '84', 'VN', NULL, NULL),
(246, 'Virgin Islands, British', '1284', 'VG', NULL, NULL),
(247, 'Virgin Islands, U.s.', '1340', 'VI', NULL, NULL),
(248, 'Wallis and Futuna', '681', 'WF', NULL, NULL),
(249, 'Western Sahara', '212', 'EH', NULL, NULL),
(250, 'Yemen', '967', 'YE', NULL, NULL),
(251, 'Zambia', '260', 'ZM', NULL, NULL),
(252, 'Zimbabwe', '263', 'ZW', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_02_02_203839_create_sessions_table', 1),
(7, '2021_02_02_212221_create_admins_table', 1),
(8, '2021_06_23_064705_create_countries_table', 1),
(9, '2021_06_23_092652_create_states_table', 1),
(11, '2021_06_24_065254_create_cities_table', 2),
(13, '2021_06_24_111828_create_user_profiles_table', 3),
(14, '2021_06_25_093758_create_colors_table', 4),
(15, '2021_06_25_093805_create_svbettings_table', 4),
(18, '2021_06_25_094451_create_color_svbettings_table', 5),
(20, '2021_06_28_132235_create_bet_colors_table', 6),
(22, '2021_07_01_060813_create_notifications_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('1a4623e1-8261-4aaa-97fb-abfe354a11e0', 'App\\Notifications\\WinnersNotification', 'App\\Models\\User', 5, '{\"offer_id\":\"You Won Bet of  Period1624695609\"}', NULL, '2021-07-02 07:56:22', '2021-07-02 07:56:22'),
('52f6213a-ddc1-4772-b44d-f9f4142efda0', 'App\\Notifications\\WinnersNotification', 'App\\Models\\User', 8, '{\"offer_id\":\"You lost bet of Period1624695609\"}', NULL, '2021-07-02 07:56:23', '2021-07-02 07:56:23'),
('5bd034f1-1591-489c-9b5a-6a440439dbeb', 'App\\Notifications\\WinnersNotification', 'App\\Models\\User', 6, '{\"offer_id\":\"You Won Bet of  Period1624695609\"}', NULL, '2021-07-02 07:56:22', '2021-07-02 07:56:22'),
('67256d25-9a83-4eca-8d03-9aa8ab724c39', 'App\\Notifications\\WinnersNotification', 'App\\Models\\User', 7, '{\"offer_id\":\"You Won Bet of  Period1624695609\"}', NULL, '2021-07-02 07:56:22', '2021-07-02 07:56:22'),
('6bbaecfd-2700-4d56-a87a-849c0a1eb980', 'App\\Notifications\\WinnersNotification', 'App\\Models\\User', 10, '{\"offer_id\":\"You lost bet of Period1624696037\"}', NULL, '2021-07-01 12:55:05', '2021-07-01 12:55:05'),
('8a018e30-6c76-4432-b97e-4eac0ac6d347', 'App\\Notifications\\WinnersNotification', 'App\\Models\\User', 4, '{\"offer_id\":\"You Won Bet of  Period1624695609\"}', NULL, '2021-07-02 07:56:22', '2021-07-02 07:56:22'),
('9390e7c9-b7e1-4af9-b7f4-01d6609bee73', 'App\\Notifications\\WinnersNotification', 'App\\Models\\User', 3, '{\"offer_id\":\"You lost bet of Period1624695609\"}', NULL, '2021-07-02 07:56:23', '2021-07-02 07:56:23'),
('a4813167-8f97-46eb-ae4d-1a14abe9980e', 'App\\Notifications\\WinnersNotification', 'App\\Models\\User', 13, '{\"offer_id\":\"You Won Bet of  Period1624696037\"}', NULL, '2021-07-01 12:55:05', '2021-07-01 12:55:05'),
('a63fbdef-02e3-48bd-9531-772f82f4606c', 'App\\Notifications\\WinnersNotification', 'App\\Models\\User', 12, '{\"offer_id\":\"You lost bet of Period1624696037\"}', NULL, '2021-07-01 12:55:05', '2021-07-01 12:55:05'),
('d4ce7c64-f856-4196-9a97-94162c8b8f77', 'App\\Notifications\\WinnersNotification', 'App\\Models\\User', 1, '{\"offer_id\":\"You lost bet of Period1624695491\"}', '2021-07-02 06:57:59', '2021-07-02 09:15:30', '2021-07-02 06:57:59'),
('ebe37eba-dc1a-4c62-937a-a3a1eca34b02', 'App\\Notifications\\WinnersNotification', 'App\\Models\\User', 11, '{\"offer_id\":\"You lost bet of Period1624696037\"}', NULL, '2021-07-01 12:55:05', '2021-07-01 12:55:05'),
('f3c6197a-98e2-476b-9f0c-6a73b490eac9', 'App\\Notifications\\WinnersNotification', 'App\\Models\\User', 1, '{\"offer_id\":\"You lost bet of Period1624695609\"}', '2021-07-02 06:57:59', '2021-07-02 10:19:08', '2021-07-02 06:57:59'),
('ff5c9e23-f419-48a0-a0ad-4edc32e0e14c', 'App\\Notifications\\WinnersNotification', 'App\\Models\\User', 2, '{\"offer_id\":\"You lost bet of Period1624695609\"}', NULL, '2021-07-02 07:56:22', '2021-07-02 07:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Ljn5HjM1tx8BzXvJcv7EmdtGfZZ0cliMspp3ovkQ', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieEw1SGRJazdIRm5WVG1USW5lVjdPd3hqN0cwcXRzQmtRYmV2MDh3QiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1625252664),
('XypZ9chBaN7QQMthzwYBZUCgAHbZCFzseHgECj3v', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZG9OVTJKN3dZeWh1dW5vMEduWUxEcGZQUE81YU1aTGV6cjNLSVQ0NyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ub3RpZmljYXRpb24iO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkbXdHNjN2cTZBMjdNdG1MZVE3SUxvZTFvUnhaSDlDRmEuZmxJeUxhLy5IWVpvd0hNN3ZTaHUiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJG13RzYzdnE2QTI3TXRtTGVRN0lMb2Uxb1J4Wkg5Q0ZhLmZsSXlMYS8uSFlab3dITTd2U2h1Ijt9', 1625227289);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `country_id`, `state_name`, `created_at`, `updated_at`) VALUES
(1, 170, 'Punjab', '2021-06-24 02:14:11', '2021-06-24 02:14:11'),
(2, 170, 'Sindh', '2021-06-24 02:14:26', '2021-06-24 05:57:17'),
(3, 170, 'Kpk', '2021-06-24 02:14:39', '2021-06-24 05:57:10'),
(4, 170, 'Balochistan', '2021-06-24 02:15:33', '2021-06-24 05:57:03');

-- --------------------------------------------------------

--
-- Table structure for table `svbettings`
--

CREATE TABLE `svbettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `auto_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `svbettings`
--

INSERT INTO `svbettings` (`id`, `auto_id`, `time`, `status`, `created_at`, `updated_at`) VALUES
(28, '1624692447', '2021-07-02 14:58:53', '0', '2021-06-26 02:27:27', '2021-07-02 09:57:54'),
(30, '1624695491', '2021-07-02 15:02:54', '2', '2021-06-26 03:18:11', '2021-07-02 10:00:54'),
(31, '1624695609', '2021-07-02 16:41:12', '1', NULL, '2021-07-02 11:36:13'),
(32, '1624696037', '2021-07-02 16:30:10', '2', NULL, '2021-07-02 11:36:12'),
(33, '1625135065', NULL, '1', '2021-07-01 10:24:25', '2021-07-02 10:10:54'),
(34, '1625135100', NULL, '1', '2021-07-01 10:25:00', '2021-07-01 10:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refer_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `refer`, `refer_number`, `remember_token`, `current_team_id`, `profile_photo_path`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'abdullah', 'abdullahkhurshid41@gmail.com', '$2y$10$mwG63vq6A27MtmLeQ7ILoe1oRxZH9CFa.flIyLa/.HYZowHM7vShu', NULL, NULL, '0585f59999daf4ac66973b8d66e654873fca3e25', NULL, NULL, NULL, '17035225184456311621323323.jpg', NULL, '2021-06-24 03:31:30', '2021-06-25 02:21:13'),
(2, 'abdullah', 'ali@ali.com', '$2y$10$/Zd9Ye2E9zuwYkrcXA7Zluv7CD9VQe6S5XADncXkcWwa8sqAgBjI2', NULL, NULL, 'e300f50b89149e11c6a40678ee622985a13f3bb1', NULL, NULL, NULL, NULL, NULL, '2021-06-29 01:24:04', '2021-06-29 01:24:04'),
(3, 'abdullah123', 'abdullah123@abdullah123.com', '$2y$10$XzJiRTSB7wITy73UT8Cxg.nugy0KrbHUtiUK4ry.1mkFI01mFC/pa', NULL, NULL, 'f27d21d8b44be630188ef19cc5fadcfdb9e305ea', NULL, NULL, NULL, NULL, NULL, '2021-06-29 05:54:05', '2021-06-29 05:54:05'),
(4, 'abdullah1234', 'abdullah1234@abdullah1234.com', '$2y$10$yeWTN7M.woJERXMlxM2o2umE9E1n7AepWPrl66Rht4Iozrmbax2iu', NULL, NULL, '33d8c120eb2d12d305db226462f527ee6ece4e24', NULL, NULL, NULL, NULL, 149400, '2021-06-29 06:01:26', '2021-07-02 07:56:22'),
(5, 'abdullah12345', 'abdullah12345@abdullah12345.com', '$2y$10$vhfmXNGYWdLPtC6oZLRoHuC1qTabpykSopvE6lC67kj8I5yNfeCtu', NULL, NULL, '3140e8de7ba7ca72e52813d7eb0d81a2089a9523', NULL, NULL, NULL, NULL, 167200, '2021-06-29 06:02:57', '2021-07-02 07:56:22'),
(6, 'abdullah123456', 'abdullah123456@abdullah123456.com', '$2y$10$LLi0TaPELSVrkcg8drg8Xuf6mBmwlSF5glVt930jWyipX7fksz9ci', NULL, NULL, 'd8eb5159e916c6942c3b5ce7f37702456088d3bf', NULL, NULL, NULL, NULL, 8360, '2021-06-29 06:04:46', '2021-07-02 07:56:22'),
(7, 'abdullah1234567', 'abdullah1234567@abdullah1234567.com', '$2y$10$B7npomJBTy8G03O6oietP.jZRRD8fAVMVHDjgjrUxf8mQrO7Z1XFW', NULL, NULL, '1c5b12938446233da0ee13e9c3834aa960ebbd11', NULL, NULL, NULL, NULL, 292600, '2021-06-29 06:06:51', '2021-07-02 07:56:19'),
(8, 'abdullah', 'abdullah12345678@abdullah12345678.com', '$2y$10$UPdi037TtIH1NCr5xByHLO3iPIV9NzyZQrZ8dmDieYl4CAgmml/Da', NULL, NULL, '4888ee45c57ddea4a248dc52016420b6da728984', NULL, NULL, NULL, NULL, NULL, '2021-06-29 06:09:59', '2021-06-29 06:09:59'),
(9, 'abdullah12345dfghg', 'abdullah12345dfghg@abdullah12345dfghg.com', '$2y$10$p9CLckLty8p2K.4U4G47FuR/ABwBjI1xfRLCP5uLDuObdl3IDvsja', NULL, NULL, 'b89ac22408509c74f43319de24b493b8136e95d6', NULL, NULL, NULL, NULL, NULL, '2021-06-30 07:33:02', '2021-06-30 07:33:02'),
(10, 'abdullah', 'AFSFSDFSDFDFS@ASDASFSAF.C0M', '$2y$10$NFJVuHQiHqeyyJjsCL4qSOvBxhmvHO6TKKPxkYjM0d512mTgb7.Jy', NULL, NULL, '4341a0bcc500f7b5872379af1958152441eeb6c5', NULL, NULL, NULL, NULL, NULL, '2021-07-01 05:29:29', '2021-07-01 05:29:29'),
(11, 'Dsafd@Dsafd.com', 'Dsafd@Dsafd.com', '$2y$10$6vBI1vMgrVbQbCxOzKiKJ.CzYH/EXnL1P/fE2sxRoWxeMHxpsa/ty', NULL, NULL, '952ea469b699ba177a2257caa063b9bfa5b50362', NULL, NULL, NULL, NULL, NULL, '2021-07-01 05:30:36', '2021-07-01 05:30:36'),
(12, 'vcxbv ,cxv x', 'hsbhs@dshshbfhs.com', '$2y$10$l8kijDCYaCGl6f9TcWjg9egyC691fsFEoJG1Xt8OrWz78SxrSZ4t.', NULL, NULL, 'd341a3230231dbe14596c7fb6e7052fb08c3fd90', NULL, NULL, NULL, NULL, NULL, '2021-07-01 06:04:21', '2021-07-01 06:04:21'),
(13, 'DVDSVD@AFGSFD.COM', 'DVDSVD@AFGSFD.COM', '$2y$10$CPC1K0bhd/syhV8qSoH/rewCuenD5gxr3LHBpt6RgpX0/qzGu7drW', NULL, NULL, '3087a7c5ae0ea2dbd40a5b021abdd8e8fd4193aa', NULL, NULL, NULL, NULL, 60, '2021-07-01 06:16:41', '2021-07-01 12:55:04'),
(14, 'abdullah', 'User@gmail.com', '$2y$10$U/2.YEVnQi7avmCh/QiRlOl18EoowjWnBOWPJPZ0NO9pBqPJJS6Xq', NULL, NULL, '2b7be2009a58cdc483c12a140e7a5d7c2a683317', NULL, NULL, NULL, NULL, NULL, '2021-07-02 04:13:27', '2021-07-02 04:13:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `country_id`, `state_id`, `mobile_number`, `whatsapp_number`, `email_address`, `address1`, `address2`, `city_name`, `pincode`, `created_at`, `updated_at`) VALUES
(1, 1, 170, 1, '03125020276', '03145153088', 'abdullahkhurshid41@gmail.com', '1127/704 Afshan colony', '1234 main street', 'Islamabad', '101010', '2021-06-24 15:48:04', '2021-06-25 02:21:13'),
(2, 1, 170, 1, '03125020276', '03145153088', 'abdullahkhurshid41@gmail.com', '1127/704 Afshan colony', '1234 main street', 'Islamabad', '101010', '2021-06-24 15:49:58', '2021-06-24 15:49:58'),
(3, 1, 170, 1, '03125020276', '03145153088', 'abdullahkhurshid41@gmail.com', '1127/704 Afshan colony', '1234 main street', 'Islamabad', '101010', '2021-06-24 15:53:06', '2021-06-24 15:53:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `bet_colors`
--
ALTER TABLE `bet_colors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bet_colors_user_id_foreign` (`user_id`),
  ADD KEY `bet_colors_color_id_foreign` (`color_id`),
  ADD KEY `bet_colors_svbetting_id_foreign` (`svbetting_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_state_id_foreign` (`state_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_svbettings`
--
ALTER TABLE `color_svbettings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `color_svbettings_color_id_foreign` (`color_id`),
  ADD KEY `color_svbettings_svbetting_id_foreign` (`svbetting_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_country_id_foreign` (`country_id`);

--
-- Indexes for table `svbettings`
--
ALTER TABLE `svbettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_profiles_user_id_foreign` (`user_id`),
  ADD KEY `user_profiles_country_id_foreign` (`country_id`),
  ADD KEY `user_profiles_state_id_foreign` (`state_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bet_colors`
--
ALTER TABLE `bet_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `color_svbettings`
--
ALTER TABLE `color_svbettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `svbettings`
--
ALTER TABLE `svbettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bet_colors`
--
ALTER TABLE `bet_colors`
  ADD CONSTRAINT `bet_colors_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bet_colors_svbetting_id_foreign` FOREIGN KEY (`svbetting_id`) REFERENCES `svbettings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bet_colors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `color_svbettings`
--
ALTER TABLE `color_svbettings`
  ADD CONSTRAINT `color_svbettings_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `color_svbettings_svbetting_id_foreign` FOREIGN KEY (`svbetting_id`) REFERENCES `svbettings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD CONSTRAINT `user_profiles_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_profiles_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `states` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
