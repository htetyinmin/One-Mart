-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2021 at 09:30 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onemart`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(24, 'Oppo', '3265978692_oppo.png', '2021-09-30 08:09:06', '2021-09-30 08:09:06'),
(26, 'Samsung', '3265978808_samsung.png', '2021-09-30 08:10:04', '2021-09-30 08:10:04'),
(27, 'Apple', '3265978850_apple.png', '2021-09-30 08:10:25', '2021-09-30 08:10:25'),
(29, 'Nike', '3265978944_nike.png', '2021-09-30 08:11:12', '2021-09-30 08:11:12'),
(30, 'Victor', '3265978982_victor.png', '2021-09-30 08:11:31', '2021-09-30 08:11:31'),
(31, 'Puma', '3265979018_pumn.png', '2021-09-30 08:11:49', '2021-09-30 08:11:49'),
(32, 'Escort', '3265979090_escort.png', '2021-09-30 08:12:25', '2021-09-30 08:12:25'),
(34, 'Polo', '3265983320_polo.png', '2021-09-30 08:47:40', '2021-09-30 08:47:40'),
(35, 'Dell', '3265984794_dell.png', '2021-09-30 08:59:57', '2021-09-30 08:59:57'),
(36, 'Hp', '3265984808_hp.png', '2021-09-30 09:00:04', '2021-09-30 09:00:04'),
(37, 'Acer', '3265984820_acer.png', '2021-09-30 09:00:10', '2021-09-30 09:00:10'),
(38, 'Adidas', '3265986538_adidas.png', '2021-09-30 09:14:29', '2021-09-30 09:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(61, 'Electronic Device', '2021-09-26 14:25:16', '2021-09-26 14:25:16'),
(64, 'Fashion', '2021-09-30 08:05:04', '2021-09-30 08:05:04'),
(65, 'Health', '2021-09-30 08:05:20', '2021-09-30 08:05:20'),
(66, 'Home', '2021-09-30 08:05:38', '2021-09-30 08:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `cupons`
--

CREATE TABLE `cupons` (
  `id` int(11) NOT NULL,
  `cuponcode` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `codeno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `discount` varchar(225) DEFAULT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `brand_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `codeno`, `name`, `photo`, `price`, `discount`, `description`, `created_at`, `updated_at`, `brand_id`, `subcategory_id`) VALUES
(23, 'A-123256', 'Samsung Smart Phone', '3265985302_samsung-phone.png', '600000', '', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:04:11', '2021-09-30 09:04:11', 26, 18),
(24, 'A-123456', 'Apple Smart Phone', '3265985582_phone1.png', '2000000', '', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:06:31', '2021-09-30 09:06:31', 27, 18),
(25, 'A-123256', 'Oppo Smart Phone', '3265985744_phone3.png', '400000', '', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:07:52', '2021-09-30 09:07:52', 24, 18),
(26, 'L-123456', 'Dell Laptop', '3265985988_dell.png', '1300000', '', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:09:54', '2021-09-30 09:09:54', 35, 23),
(27, 'L-123456', 'Acer Laptop', '3265986086_acer.png', '1200000', '', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:10:43', '2021-09-30 09:10:43', 37, 23),
(28, 'S-123456', 'Men Shoes', '3265986268_shoe1.png', '100000', '', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:12:14', '2021-09-30 09:12:14', 29, 19),
(30, 'S-123456', 'Men Shoes', '3265986898_shoe3.png', '100000', '80000', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:17:29', '2021-09-30 09:17:29', 38, 19),
(31, 'S-123456', 'Men Shoes', '3265986998_shoe5.png', '120000', '60000', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:18:19', '2021-09-30 09:18:19', 38, 19),
(32, 'S-123456', 'Men Shoes', '3265987208_shoe2.png', '90000', '70000', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:20:04', '2021-09-30 09:20:04', 29, 19),
(33, 'S-123456', 'Men Shoes', '3265987588_shoe4.png', '80000', '50000', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:23:14', '2021-09-30 09:23:14', 29, 19),
(34, 'W-123456', 'Smart Watch', '3265987728_watch1.png', '200000', '180000', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:24:24', '2021-09-30 09:24:24', 27, 22),
(35, 'W-123456', 'Smart Watch', '3265987868_watch2.png', '190000', '', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:25:34', '2021-09-30 09:25:34', 27, 22),
(36, 'W-123456', 'Smart Watch', '3265987924_watch3.png', '250000', '', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:26:02', '2021-09-30 09:26:02', 27, 22),
(37, 'W-123456', 'Smart Watch', '3265988034_watch4.png', '150000', '100000', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:26:57', '2021-09-30 09:26:57', 27, 22),
(38, 'T-123456', 'Men T-Shirt', '3265988510_polo-shirt-2.png', '25000', '', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:30:55', '2021-09-30 09:30:55', 32, 20),
(39, 'T-123456', 'Men T-Shirt', '3265988588_polo-shirt-8.png', '25000', '23000', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:31:34', '2021-09-30 09:31:34', 32, 20),
(40, 'T-123456', 'Men T-Shirt', '3265988714_shirt1.png', '15000', '', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:32:37', '2021-09-30 09:32:37', 30, 20),
(41, 'T-123456', 'Men T-Shirt', '3265988814_shirt2.png', '15000', '', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:33:27', '2021-09-30 09:33:27', 30, 20),
(42, 'T-123456', 'Men T-Shirt', '3265988916_shirt4.png', '15000', '', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:34:18', '2021-09-30 09:34:18', 30, 20),
(43, 'T-123456', 'Men T-Shirt', '3265988982_shirt3.png', '15000', '', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:34:51', '2021-09-30 09:34:51', 30, 20),
(44, 'T-123456', 'Men T-Shirt', '3265989154_polo-shirt-5.png', '30000', '25000', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:36:17', '2021-09-30 09:36:17', 34, 20),
(45, 'T-123456', 'Men T-Shirt', '3265989250_T-shirt_9front_Navy-Blue-1.jpg', '30000', '', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:37:05', '2021-09-30 09:37:05', 34, 20),
(46, 'T-123456', 'Men T-Shirt', '3265989362_polo-shirt-4.png', '20000', '', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:38:01', '2021-09-30 09:38:01', 34, 20),
(47, 'T-123456', 'Men T-Shirt', '3265989458_polo-shirt-6.png', '18000', '', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:38:49', '2021-09-30 09:38:49', 34, 20),
(48, 'T-123456', 'Men T-Shirt', '3265989508_polo-shirt-7.png', '20000', '', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:39:14', '2021-09-30 09:39:14', 34, 20),
(49, 'T-123456', 'Men T-Shirt', '3265989588_500_32.png', '20000', '18000', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:39:54', '2021-09-30 09:39:54', 32, 20),
(50, 'T-123456', 'Women T-Shirt', '3265989766_polo-shirt-3.png', '20000', '', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:41:23', '2021-09-30 09:41:23', 32, 21),
(51, 'T-123456', 'Women T-Shirt', '3265989966_cloth1.png', '30000', '', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:43:03', '2021-09-30 09:43:03', 34, 21),
(52, 'T-123456', 'Women T-Shirt', '3265990078_cloth4.png', '30000', '', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2021-09-30 09:43:59', '2021-09-30 09:43:59', 34, 21);

-- --------------------------------------------------------

--
-- Table structure for table `item_order`
--

CREATE TABLE `item_order` (
  `id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_role`
--

CREATE TABLE `model_has_role` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `model_has_role`
--

INSERT INTO `model_has_role` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `orderdate` date NOT NULL DEFAULT current_timestamp(),
  `voucherno` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2021-09-12 14:18:56', '2021-09-12 14:18:56'),
(2, 'User', '2021-09-12 14:18:56', '2021-09-12 14:18:56');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `photo`, `created_at`, `updated_at`, `category_id`) VALUES
(18, 'Mobile Phone', '3265979670_smartphone.png', '2021-09-30 08:17:15', '2021-09-30 08:17:15', 61),
(19, 'Shoes', '3265983378_shoe3.png', '2021-09-30 08:48:09', '2021-09-30 08:48:09', 64),
(20, 'Men T-shirt', '3265983442_polo-shirt-5.png', '2021-09-30 08:48:41', '2021-09-30 08:48:41', 64),
(21, 'Women T-shirt', '3265983542_polo-shirt-3.png', '2021-09-30 08:49:31', '2021-09-30 08:49:31', 64),
(22, 'Watch', '3265984940_watch3.png', '2021-09-30 09:01:10', '2021-09-30 09:01:10', 64),
(23, 'Laptop', '3265984968_dezik_14_tranquilpink_naturalsilver_t_hdcam_nonodd_fpr_freedos_coreset_front_1.png', '2021-09-30 09:01:24', '2021-09-30 09:01:24', 61);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'a3KPgqChUXF9s', '09123456789', '2021-09-27 09:14:52', '2021-09-27 09:14:52'),
(2, 'users', 'user@gmail.com', '2cdSlMUrEM66Y', '09123456789', '2021-09-27 09:18:51', '2021-09-27 09:18:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cupons`
--
ALTER TABLE `cupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk` (`brand_id`),
  ADD KEY `fkk` (`subcategory_id`);

--
-- Indexes for table `item_order`
--
ALTER TABLE `item_order`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `item_id` (`item_id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `model_has_role`
--
ALTER TABLE `model_has_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fk` (`user_id`),
  ADD KEY `role_fk` (`role_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `cupons`
--
ALTER TABLE `cupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `item_order`
--
ALTER TABLE `item_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `model_has_role`
--
ALTER TABLE `model_has_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `fkk` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`);

--
-- Constraints for table `model_has_role`
--
ALTER TABLE `model_has_role`
  ADD CONSTRAINT `role_fk` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`),
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `name` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
