-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 31, 2024 at 03:02 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moderna_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text,
  `btn_txt` varchar(50) DEFAULT NULL,
  `btn_url` varchar(100) DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '1=Active,2=Deactive',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `btn_txt`, `btn_url`, `status`, `created_at`) VALUES
(1, ' bd', '', NULL, 'efdd', 1, '2023-08-03 11:55:08'),
(4, 'Sunt optio et cons', 'Iure accusantium ex', 'Illo corporis quia e', 'Porro mollit laudant', 2, '2023-08-03 12:30:40'),
(6, 'Ex id unde placeat', 'Sit sit quam ea ea', 'Cupiditate veniam e', 'Voluptates enim tene', 2, '2023-08-03 12:32:17'),
(7, ' uzzal', 'Consequuntur amet a', 'Minima cupiditate co', 'Ut omnis libero rati', 1, '2023-08-03 12:35:34'),
(8, 'Obcaecati at eos iru', 'Exercitationem rerum', 'Labore ut duis velit', 'Impedit molestiae q', 1, '2023-08-03 12:37:18'),
(17, 'Quis cum placeat an', 'Voluptatibus veritat', 'Aute eaque animi mi', 'Molestias nostrud ve', 1, '2023-08-14 05:29:50'),
(18, 'Esse est eaque ut e', 'Aliquip reprehenderi', 'Nulla et et labore t', 'Est aliquip irure au', 1, '2023-08-14 05:35:00'),
(19, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaa', 'aaa', 'aa', 1, '2023-08-14 05:35:13'),
(20, 'Numquam consectetur', 'Minima temporibus se', 'Itaque nesciunt eli', 'Est assumenda delec', 1, '2023-08-14 05:36:40'),
(21, 'Officia in eveniet', 'Quam dolores consequ', 'Ad soluta omnis dese', 'Eligendi ducimus ra', 1, '2023-08-14 05:38:36');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `banner` varchar(191) NOT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '1=Active,2=Deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `description`, `banner`, `status`) VALUES
(12, 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.', '&lt;p class=&quot;fst-italic&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore\r\n              magna aliqua.\r\n            &lt;/p&gt;&lt;p&gt;\r\n            &lt;/p&gt;&lt;ul&gt;\r\n              &lt;li&gt;&lt;i class=&quot;bi bi-check&quot;&gt;&lt;/i&gt; Ullamco laboris nisi ut aliquip ex ea commodo consequat.&lt;/li&gt;\r\n              &lt;li&gt;&lt;i class=&quot;bi bi-check&quot;&gt;&lt;/i&gt; Duis aute irure dolor in reprehenderit in voluptate velit.&lt;/li&gt;&lt;/ul&gt;', '64eac31b9ccba.svg', 1),
(13, 'Corporis temporibus maiores provident', '&lt;p class=&quot;fst-italic&quot;&gt;&amp;nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore\r\n              magna aliqua.\r\n            &lt;/p&gt;&lt;p&gt;\r\n            &lt;/p&gt;&lt;p&gt;\r\n              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate\r\n              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in\r\n              culpa qui officia deserunt mollit anim id est laborum&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;/p&gt;', '64eac35cb1e20.svg', 1),
(14, 'Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas', '&lt;p&gt;Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia \r\nminima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor \r\ndoloremque.&lt;/p&gt;&lt;p&gt;\r\n            &lt;/p&gt;&lt;ul&gt;\r\n              &lt;li&gt;&lt;i class=&quot;bi bi-check&quot;&gt;&lt;/i&gt; Ullamco laboris nisi ut aliquip ex ea commodo consequat.&lt;/li&gt;\r\n              &lt;li&gt;&lt;i class=&quot;bi bi-check&quot;&gt;&lt;/i&gt; Duis aute irure dolor in reprehenderit in voluptate velit.&lt;/li&gt;\r\n              &lt;li&gt;&lt;i class=&quot;bi bi-check&quot;&gt;&lt;/i&gt; Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.&lt;/li&gt;&lt;/ul&gt;', '64eac3a2653ef.svg', 1),
(15, 'Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in', '&lt;p class=&quot;fst-italic&quot;&gt;&amp;nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore\r\n              magna aliqua.\r\n            &lt;/p&gt;&lt;p&gt;\r\n            &lt;/p&gt;&lt;p&gt;\r\n              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate\r\n              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in\r\n              culpa qui officia deserunt mollit anim id est laborum&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;/p&gt;', '64eac3d1ad927.svg', 1),
(17, ' Nisi libero dicta si', 'Nisi libero dicta si', '64eae016e45ad.svg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `box_color` varchar(50) DEFAULT NULL,
  `box_icon` varchar(50) DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '1=Active,2=Deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `box_color`, `box_icon`, `status`) VALUES
(1, ' Dolorem velit offic', 'Doloremque eaque eli', 'icon-box-blue', 'bx-dribbble', 1),
(2, ' Sint architecto ab m', 'Enim non aliquid exp', 'icon-box-green', 'Omnis hic ea in veli', 1),
(3, ' Ea aute dolor eum la', 'Dolor corrupti illu', 'icon-box-cyan', 'Voluptatibus provide', 1),
(4, ' Sint harum natus cup', 'Dolor ducimus commo', 'icon-box-pink', 'Ullamco facere aut c', 1),
(6, ' Temporibus incididun', ' Est id velit animi', 'Minim reprehenderit', 'icon-box-green', 1),
(7, ' Temporibus incididun', ' Est id velit animi', 'Minim reprehenderit', 'icon-box-green', 1),
(8, ' Exercitationem qui c', ' Enim provident hic', 'Laboriosam quis omn', 'icon-box-pink', 1),
(9, 'Aliquam et quia exer', 'Aut nesciunt dolor', 'icon-box-green', 'Magnam quia unde ali', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service_details`
--

CREATE TABLE `service_details` (
  `id` int NOT NULL,
  `banner` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '1=Active,2=Deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `service_details`
--

INSERT INTO `service_details` (`id`, `banner`, `title`, `description`, `status`) VALUES
(1, '64ede26b537b2.jpg', 'Our Mision', 'Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet', 1),
(2, '64ede2a0aff9c.jpg', 'Our Plan', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo', 1),
(3, '64ede2c5d04d8.jpg', 'Our Vision', 'Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet', 1),
(4, '64ede2e1ec608.jpg', 'Our Care', 'Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem. In molestiae earum ab sit esse voluptatem. Eos ipsam cumque ipsum officiis qui nihil aut incidunt aut', 1);

-- --------------------------------------------------------

--
-- Table structure for table `setting_options`
--

CREATE TABLE `setting_options` (
  `id` int NOT NULL,
  `about_banner` varchar(200) DEFAULT 'banner.jpg',
  `about_title` varchar(199) DEFAULT 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.',
  `about_description` text NOT NULL,
  `testimonial_heading` varchar(199) DEFAULT 'Tetstimonials',
  `testimonial_description` text NOT NULL,
  `pricing_heading` varchar(199) DEFAULT 'Pricing',
  `pricing_description` text NOT NULL,
  `contact_address` varchar(200) DEFAULT 'A108 Adam Street, New York, NY 535022',
  `email` varchar(199) DEFAULT 'info@example.com',
  `email2` varchar(199) DEFAULT 'contact@example.com',
  `phone` varchar(199) DEFAULT '+1 5589 55488 55',
  `phone2` varchar(199) DEFAULT '+1 6678 254445 41'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `setting_options`
--

INSERT INTO `setting_options` (`id`, `about_banner`, `about_title`, `about_description`, `testimonial_heading`, `testimonial_description`, `pricing_heading`, `pricing_description`, `contact_address`, `email`, `email2`, `phone`, `phone2`) VALUES
(1, '64eda0a8056a8.jpg', 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.', '&lt;p&gt;&amp;nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore\r\n              magna aliqua.\r\n            &lt;/p&gt;\r\n            &lt;ul&gt;\r\n              &lt;li&gt;&lt;i class=&quot;bi bi-check2-circle&quot;&gt;&lt;/i&gt; Ullamco laboris nisi ut aliquip ex ea commodo consequat.&lt;/li&gt;\r\n              &lt;li&gt;&lt;i class=&quot;bi bi-check2-circle&quot;&gt;&lt;/i&gt; Duis aute irure dolor in reprehenderit in voluptate velit.&lt;/li&gt;\r\n              &lt;li&gt;&lt;i class=&quot;bi bi-check2-circle&quot;&gt;&lt;/i&gt; Ullamco laboris \r\nnisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in \r\nreprehenderit in voluptate trideta storacalaperda mastiro dolore eu \r\nfugiat nulla pariatur.&lt;/li&gt;\r\n            &lt;/ul&gt;\r\n            &lt;p class=&quot;fst-italic&quot;&gt;Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate\r\n              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in\r\n              culpa qui officia deserunt mollit anim id est laborum&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;br&gt;&lt;/p&gt;', 'Tetstimonials', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'Pricingg', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'A108 Adam Street, New York, NY 535022', 'info@example.com', 'contact@example.com', '+1 5589 55488 55', '+1 6678 254445 41');

-- --------------------------------------------------------

--
-- Table structure for table `skill_element`
--

CREATE TABLE `skill_element` (
  `id` int NOT NULL,
  `feature_heading` varchar(255) DEFAULT 'Features',
  `feature_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `skill_heading` varchar(250) DEFAULT 'Our Skills',
  `skill_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `skill_1` varchar(50) DEFAULT 'HTML',
  `skill_2` varchar(50) DEFAULT 'CSS',
  `skill_3` varchar(50) DEFAULT 'JAVASCRIPT',
  `skill_4` varchar(50) DEFAULT 'PHOTOSHOP',
  `skill_%_1` varchar(50) DEFAULT '100%',
  `skill_%_2` varchar(50) DEFAULT '90%',
  `skill_%_3` varchar(50) DEFAULT '75%',
  `skill_%_4` varchar(50) DEFAULT '55%',
  `status` int DEFAULT '1' COMMENT '1=Active, 2= Deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skill_element`
--

INSERT INTO `skill_element` (`id`, `feature_heading`, `feature_description`, `skill_heading`, `skill_description`, `skill_1`, `skill_2`, `skill_3`, `skill_4`, `skill_%_1`, `skill_%_2`, `skill_%_3`, `skill_%_4`, `status`) VALUES
(1, 'Features', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'Our Skills', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'HTML', 'CSS', 'JAVASCRIPT', 'PHOTOSHOP', '99%', '90%', '75%', '55%', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int NOT NULL,
  `profile` varchar(200) NOT NULL,
  `name` varchar(199) NOT NULL,
  `designation` varchar(199) NOT NULL,
  `description` text NOT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '1=Active, 2=Deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `profile`, `name`, `designation`, `description`, `status`) VALUES
(1, '64edc20f885eb.jpg', 'Saul Goodman', 'Ceo Founder', 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.', 1),
(2, '64edc279744d4.jpg', 'Sara Wilsson', 'Designer', 'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.', 1),
(3, '64edc2a2d558a.jpg', 'Jena Karlis', 'Store Owner', 'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.', 1),
(4, '64edc38d9281e.jpg', 'Matt Brandon', 'Freelancer', 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.', 1),
(5, '64edc3b7e859e.jpg', 'John Larson', 'Entrepreneur', 'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `theme_options`
--

CREATE TABLE `theme_options` (
  `id` int NOT NULL,
  `header_logo` varchar(100) DEFAULT 'logo.png',
  `header_banner` varchar(100) DEFAULT 'banner.jpg',
  `footer_address` varchar(250) DEFAULT 'A108 Adam Street New York, NY 535022 United States',
  `footer_phone` varchar(250) DEFAULT ' +1 5589 55488 55',
  `footer_email` varchar(250) DEFAULT ' info@example.com',
  `footer_about` varchar(250) DEFAULT 'Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.',
  `footer_copy` varchar(250) DEFAULT '© Copyright Moderna. All Rights Reserved Designed by BootstrapMade',
  `news_title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'Our Newsletter',
  `news_description` varchar(500) DEFAULT 'Tamen quem nulla quae legam multos aute sint culpa legam noster magna',
  `status` int DEFAULT '1' COMMENT '1=Active,2=Deactive\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `theme_options`
--

INSERT INTO `theme_options` (`id`, `header_logo`, `header_banner`, `footer_address`, `footer_phone`, `footer_email`, `footer_about`, `footer_copy`, `news_title`, `news_description`, `status`) VALUES
(1, 'Moderna', '64ec2fdb5ca44.jpg', 'A108 Adam Street Neww York, NY 535022 United States', '+1 5589 55488 55', 'info@example.com', 'Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.', '&copy; Copyright Moderna. All Rights Reserved Designed by BootstrapMade', 'Our Newsletterr', 'Tamen quem nulla quae legam multos aute sint culpa legam noster magna', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '1=Active,2=Deactive',
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `photo` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `status`, `created_at`, `photo`) VALUES
(1, 'marufa', 'marufa@gmail.com', '123456', 1, '2023-07-11 04:47:18.000000', NULL),
(2, 'farnaz', 'farnaz@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2023-08-09 04:13:24.800254', NULL),
(3, 'farnaz', 'farnaz@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2023-08-09 04:14:45.919961', NULL),
(4, 'farnaz', 'farnaz@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2023-08-09 04:14:49.202671', NULL),
(5, 'a', 'a@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 1, '2023-08-09 04:15:16.319083', NULL),
(6, 'a', 'a@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 1, '2023-08-09 04:15:31.432434', NULL),
(7, 'b', 'b@gmail.com', '92eb5ffee6ae2fec3ad71c777531578f', 1, '2023-08-09 04:15:48.988960', NULL),
(8, 'b', 'b@gmail.com', '92eb5ffee6ae2fec3ad71c777531578f', 1, '2023-08-09 04:18:29.968611', NULL),
(9, 'Kato Buckner', 'soliso@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-09 04:18:48.680801', NULL),
(10, 'Maile Salas', 'mirum@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-09 04:19:43.725493', NULL),
(11, 'Keaton Leon', 'mekogufiw@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-09 04:20:45.079019', NULL),
(12, 'Kenyon Tyler', 'cokuxyhafu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-12 08:19:24.815239', NULL),
(13, 'Brynn Lowe', 'dyxaxun@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-12 08:55:22.771831', NULL),
(14, 'Maris Harvey', 'hetyda@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-12 08:59:14.425019', NULL),
(15, 'Isaac Holden', 'jasepijygi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-12 08:59:31.735060', NULL),
(16, 'Garrett Guzman', 'gyxycicupo@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-12 09:07:46.968446', NULL),
(17, 'Tamekah Wallace', 'hukelyro@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-12 09:08:59.723693', NULL),
(18, 'Wylie Foreman', 'galacepiv@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-12 09:12:40.215082', ''),
(19, 'Nerea Kramer', 'luxifih@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-12 09:12:49.732184', ''),
(22, 'Abbot Lindsay', 'tikyw@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-12 12:25:09.738757', ''),
(23, 'Hayes Knapp', 'pyki@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-12 12:26:24.294524', ''),
(24, 'Noelle Robles', 'jerewon@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-12 12:32:49.906890', ''),
(25, 'Nolan Cobb', 'ludepydy@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-12 12:33:09.597596', ''),
(26, 'Blythe Mccormick', 'kaqihinuga@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-12 15:22:06.940914', ''),
(27, 'Rae Potter', 'josy@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-12 15:42:13.934499', '64d7a855e3577.png'),
(28, 'toha', 'toha@gmail.com', '1bbd886460827015e5d605ed44252251', 1, '2023-08-14 04:45:22.255000', NULL),
(29, 'Xyla Fitzpatrick', 'zago@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-14 04:46:08.511040', NULL),
(30, 'Xyla Fitzpatrick', 'zago@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-14 04:47:20.380142', NULL),
(31, 'Malcolm Swanson', 'rozas@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-14 04:51:58.973771', NULL),
(32, 'Malcolm Swanson', 'rozas@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-14 04:52:47.757040', NULL),
(33, 'Malcolm Swanson', 'rozas@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-14 04:52:57.689263', NULL),
(34, 'Malcolm Swanson', 'rozas@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-14 04:53:19.757866', NULL),
(35, 'Malcolm Swanson', 'rozas@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-14 04:53:54.415064', NULL),
(36, 'Kiayada Mccarty', 'jitabeweb@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-14 05:18:41.988262', ''),
(37, 'Steven Woodard', 'tyfokol@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-14 05:18:49.992413', ''),
(38, 'Dane Herrera', 'pineqoh@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-14 05:18:59.773862', '64d9b943bc4b1.png'),
(39, 'Kaseem Burris', 'xogoxemo@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-08-14 05:19:04.103385', ''),
(40, 'rifat', 'rifat@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2023-08-14 05:20:49.541250', '64d9b9b1838ee.png');

-- --------------------------------------------------------

--
-- Table structure for table `whyus`
--

CREATE TABLE `whyus` (
  `id` int NOT NULL,
  `banner` varchar(100) NOT NULL,
  `vedio_link` varchar(150) NOT NULL,
  `icon_one` varchar(50) NOT NULL,
  `title_one` varchar(100) NOT NULL,
  `description_one` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `icon_two` varchar(50) NOT NULL,
  `title_two` varchar(100) NOT NULL,
  `description_two` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `status` int NOT NULL DEFAULT '1' COMMENT '1=Active,2=Deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `whyus`
--

INSERT INTO `whyus` (`id`, `banner`, `vedio_link`, `icon_one`, `title_one`, `description_one`, `icon_two`, `title_two`, `description_two`, `status`) VALUES
(1, '64ec15873fcb1.jpg', 'https://www.youtube.com/', 'Laboris laborum arch', 'Consequuntur eum omn', 'Porro sit qui volup', 'Et velit labore eum', 'Ut porro nihil rerum', 'Voluptates fugit qu', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_details`
--
ALTER TABLE `service_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_options`
--
ALTER TABLE `setting_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_element`
--
ALTER TABLE `skill_element`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme_options`
--
ALTER TABLE `theme_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whyus`
--
ALTER TABLE `whyus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `service_details`
--
ALTER TABLE `service_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `setting_options`
--
ALTER TABLE `setting_options`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skill_element`
--
ALTER TABLE `skill_element`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `theme_options`
--
ALTER TABLE `theme_options`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `whyus`
--
ALTER TABLE `whyus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
