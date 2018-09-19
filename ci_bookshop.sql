-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for ci_bookshop
CREATE DATABASE IF NOT EXISTS `ci_bookshop` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ci_bookshop`;

-- Dumping structure for table ci_bookshop.brands
CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(50) DEFAULT NULL,
  `brand_icon` varchar(50) DEFAULT NULL,
  `brand_img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table ci_bookshop.brands: ~3 rows (approximately)
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_icon`, `brand_img`) VALUES
	(1, 'Dell', NULL, NULL),
	(2, 'Accer', NULL, NULL),
	(3, 'WinkWhite', NULL, NULL);
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;

-- Dumping structure for table ci_bookshop.carts
CREATE TABLE IF NOT EXISTS `carts` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `ip` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table ci_bookshop.carts: ~0 rows (approximately)
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;
INSERT INTO `carts` (`cart_id`, `pro_id`, `qty`, `ip`) VALUES
	(1, 1, 1, '127.1.1.1');
/*!40000 ALTER TABLE `carts` ENABLE KEYS */;

-- Dumping structure for table ci_bookshop.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_cat_name` varchar(50) DEFAULT NULL,
  `pro_cat_icon` varchar(250) DEFAULT NULL,
  `pro_cat_img` varchar(50) DEFAULT NULL,
  `cat_status` enum('Y','N') DEFAULT 'Y',
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table ci_bookshop.categories: ~10 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`cat_id`, `pro_cat_name`, `pro_cat_icon`, `pro_cat_img`, `cat_status`) VALUES
	(1, 'Clothing', '<i class="icon fa fa-shopping-bag" aria-hidden="true"></i>', '1.png', 'Y'),
	(2, 'Electronics', '<i class="icon fa fa-laptop" aria-hidden="true"></i>', '2.png', 'Y'),
	(3, 'Shoes', '<i class="icon fa fa-paw" aria-hidden="true"></i>', '3.png', 'Y'),
	(4, 'Watches', '<i class="icon fa fa-clock-o"></i>', '4.png', 'Y'),
	(5, 'Jewellery', '<i class="icon fa fa-diamond"></i>', '5.png', 'Y'),
	(6, 'Heath and Beauty', '<i class="icon fa fa-heartbeat"></i>', '6.png', 'Y'),
	(7, 'Kids and Babies', '<i class="icon fa fa-paper-plane"></i>', '7.png', 'Y'),
	(8, 'Sports & Outdoor', '<i class="icon fa fa-futbol-o"></i>', '8.png', 'Y'),
	(9, 'Home and Garden', '<i class="icon fa fa-envira"></i>', '9.png', 'Y'),
	(10, 'Fashion & Beauty', '<i class="icon fa fa-heartbeat"></i>', '10.png', 'N');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table ci_bookshop.category_sub1
CREATE TABLE IF NOT EXISTS `category_sub1` (
  `sub_cat1_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `subcat_name` varchar(250) DEFAULT NULL,
  `subcat_icon` varchar(250) DEFAULT NULL,
  `subcat_img` varchar(250) DEFAULT NULL,
  `subcat_note` varchar(250) DEFAULT NULL,
  `subcate_status` enum('Y','N') DEFAULT 'Y',
  `form_name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`sub_cat1_id`,`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table ci_bookshop.category_sub1: ~4 rows (approximately)
/*!40000 ALTER TABLE `category_sub1` DISABLE KEYS */;
INSERT INTO `category_sub1` (`sub_cat1_id`, `cat_id`, `subcat_name`, `subcat_icon`, `subcat_img`, `subcat_note`, `subcate_status`, `form_name`) VALUES
	(1, 1, 'Tennis', NULL, NULL, NULL, 'Y', 'ad_mobile'),
	(2, 2, 'Swimming', NULL, NULL, NULL, 'Y', 'ad_mobile'),
	(3, 3, 'Shoes11', NULL, NULL, NULL, 'Y', 'ad_mobile'),
	(4, 4, 'Tables', NULL, NULL, NULL, 'N', 'ad_mobile');
/*!40000 ALTER TABLE `category_sub1` ENABLE KEYS */;

-- Dumping structure for table ci_bookshop.category_sub2
CREATE TABLE IF NOT EXISTS `category_sub2` (
  `subcat2_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_cat1_id` int(11) NOT NULL,
  `subcat_name` varchar(250) DEFAULT NULL,
  `subcat_icon` varchar(250) DEFAULT NULL,
  `subcat_img` varchar(250) DEFAULT NULL,
  `subcat_note` varchar(250) DEFAULT NULL,
  `subcate_status` enum('Y','N') DEFAULT 'Y',
  PRIMARY KEY (`subcat2_id`,`sub_cat1_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table ci_bookshop.category_sub2: ~6 rows (approximately)
/*!40000 ALTER TABLE `category_sub2` DISABLE KEYS */;
INSERT INTO `category_sub2` (`subcat2_id`, `sub_cat1_id`, `subcat_name`, `subcat_icon`, `subcat_img`, `subcat_note`, `subcate_status`) VALUES
	(1, 1, 'Tennis1111', NULL, NULL, NULL, 'Y'),
	(2, 2, 'Coats & Jackets', NULL, NULL, NULL, 'Y'),
	(3, 4, 'Blouses & Shirts', NULL, NULL, NULL, 'Y'),
	(4, 2, 'Dresses', NULL, NULL, NULL, 'Y'),
	(5, 2, 'Coats & Jackets', NULL, NULL, NULL, 'Y'),
	(6, 3, 'Blouses & Shirts', NULL, NULL, NULL, 'Y');
/*!40000 ALTER TABLE `category_sub2` ENABLE KEYS */;

-- Dumping structure for table ci_bookshop.company
CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `comp_name` varchar(250) DEFAULT NULL,
  `comp_logo` varchar(250) DEFAULT NULL,
  `comp_detail` longtext,
  `comp_email` varchar(250) DEFAULT NULL,
  `comp_pass` varchar(250) DEFAULT NULL,
  `comp_phone` varchar(250) DEFAULT NULL,
  `comp_extra1` varchar(250) DEFAULT NULL,
  `comp_extra2` varchar(250) DEFAULT NULL,
  `comp_extra3` varchar(250) DEFAULT NULL,
  `comp_extra4` varchar(250) DEFAULT NULL,
  `comp_address` varchar(250) DEFAULT NULL,
  `comp_location` varchar(250) DEFAULT NULL,
  `fb` varchar(250) DEFAULT NULL,
  `site` varchar(250) DEFAULT NULL,
  `comp_status` enum('Y','N') DEFAULT 'Y',
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table ci_bookshop.company: ~8 rows (approximately)
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` (`company_id`, `comp_name`, `comp_logo`, `comp_detail`, `comp_email`, `comp_pass`, `comp_phone`, `comp_extra1`, `comp_extra2`, `comp_extra3`, `comp_extra4`, `comp_address`, `comp_location`, `fb`, `site`, `comp_status`) VALUES
	(1, 'SourngOnline', '4-15353428395b8378f78a11b1.94729774.jpg', 'SourngOnline Detail', 'company@gmail.com', '1234', '093882233', NULL, NULL, NULL, NULL, 'Siem Reap', 'Siem Reap', NULL, NULL, 'Y'),
	(2, 'WinkWhite', '4-15353428395b8378f79d9984.52614993.jpg', 'SourngOnline Detail', 'sengsourng@gmail.com', '1234', '093882233', NULL, NULL, NULL, NULL, 'Siem Reap', 'Siem Reap', NULL, NULL, 'Y'),
	(3, 'de1', '15353674645b83d92818e927.39444241.jpg', 'eded', 'com@gmail.com', '1234', '010', 'ded', 'ede', 'ede', 'dede', 'ded', 'eded', 'deded', 'ede', 'N'),
	(4, 'Youtube', '15356335455b87e889f1a5c3.59071753.jpg', '1212', 'admin@gmail.com', '1234', '121212', '212121', '21212', '121212', '1212', '13', '21212', 'youtube', 'youtube.com', 'Y'),
	(5, 'Long Dara', NULL, NULL, 'admin1@gmail.com', NULL, 'rerer', NULL, NULL, NULL, NULL, NULL, 'e', NULL, NULL, 'Y'),
	(6, 'Long Dara', NULL, NULL, 'company@gmail.com', NULL, 'rerer', NULL, NULL, NULL, NULL, NULL, 'qeqe', NULL, NULL, 'Y'),
	(7, 'Long Dara', NULL, NULL, 'company@gmail.com', NULL, 'rerer', NULL, NULL, NULL, NULL, NULL, 'qeqe', NULL, NULL, 'Y'),
	(8, 'Long Dara', NULL, NULL, 'company@gmail.com', NULL, 'rerer', NULL, NULL, NULL, NULL, NULL, 'qeqe', NULL, NULL, 'Y'),
	(9, 'ded', NULL, NULL, 'keamsan.sem@gmail.com', NULL, 'de', NULL, NULL, NULL, NULL, NULL, 'de', NULL, NULL, 'Y'),
	(10, 'Long Dara', NULL, NULL, 'keamsan.sem@gmail.com', NULL, 'rerer', NULL, NULL, NULL, NULL, NULL, '212', NULL, NULL, 'Y');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;

-- Dumping structure for table ci_bookshop.compares
CREATE TABLE IF NOT EXISTS `compares` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) DEFAULT NULL,
  `ip` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table ci_bookshop.compares: ~0 rows (approximately)
/*!40000 ALTER TABLE `compares` DISABLE KEYS */;
INSERT INTO `compares` (`com_id`, `pro_id`, `ip`) VALUES
	(13, 1, '::1');
/*!40000 ALTER TABLE `compares` ENABLE KEYS */;

-- Dumping structure for table ci_bookshop.coupon
CREATE TABLE IF NOT EXISTS `coupon` (
  `coupon_id` int(11) NOT NULL,
  `coupon_cod` varchar(250) NOT NULL,
  `dist` decimal(10,2) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `notice` varchar(250) DEFAULT NULL,
  `isActive` bit(1) DEFAULT b'1',
  PRIMARY KEY (`coupon_id`,`coupon_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table ci_bookshop.coupon: ~0 rows (approximately)
/*!40000 ALTER TABLE `coupon` DISABLE KEYS */;
/*!40000 ALTER TABLE `coupon` ENABLE KEYS */;

-- Dumping structure for table ci_bookshop.customers
CREATE TABLE IF NOT EXISTS `customers` (
  `cus_id` int(11) NOT NULL AUTO_INCREMENT,
  `cus_name` varchar(250) DEFAULT NULL,
  `cus_email` varchar(250) DEFAULT NULL,
  `cus_password` varchar(250) DEFAULT NULL,
  `cus_phone` varchar(250) DEFAULT NULL,
  `cus_address` text,
  `cus_avtar` varchar(250) DEFAULT NULL,
  `cus_status` enum('Y','N') DEFAULT 'Y',
  PRIMARY KEY (`cus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table ci_bookshop.customers: ~0 rows (approximately)
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` (`cus_id`, `cus_name`, `cus_email`, `cus_password`, `cus_phone`, `cus_address`, `cus_avtar`, `cus_status`) VALUES
	(1, 'Sem keamsan', 'customer@gmail.com', '1234', '0960140554', NULL, NULL, 'Y');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;

-- Dumping structure for table ci_bookshop.hot_deals
CREATE TABLE IF NOT EXISTS `hot_deals` (
  `hot_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) DEFAULT NULL,
  `hot_disacount` int(11) DEFAULT NULL,
  `hot_option` varchar(250) DEFAULT NULL,
  `hot_start` timestamp NULL DEFAULT NULL,
  `hot_end` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`hot_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table ci_bookshop.hot_deals: ~0 rows (approximately)
/*!40000 ALTER TABLE `hot_deals` DISABLE KEYS */;
INSERT INTO `hot_deals` (`hot_id`, `pro_id`, `hot_disacount`, `hot_option`, `hot_start`, `hot_end`) VALUES
	(1, 1, 49, 'Hot', '2018-07-08 03:48:45', '2018-07-30 03:48:46');
/*!40000 ALTER TABLE `hot_deals` ENABLE KEYS */;

-- Dumping structure for table ci_bookshop.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `cus_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `shipping_id` int(11) DEFAULT NULL,
  `ord_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`,`cus_id`,`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table ci_bookshop.orders: ~3 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`order_id`, `cus_id`, `pro_id`, `shipping_id`, `ord_date`) VALUES
	(5, 1, 2, NULL, '2018-08-29 19:49:35'),
	(6, 1, 3, NULL, '2018-08-29 23:22:34'),
	(7, 1, 4, NULL, '2018-08-29 23:22:35');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table ci_bookshop.orders_item
CREATE TABLE IF NOT EXISTS `orders_item` (
  `ord_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `unitprice` decimal(10,2) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `disacount` int(11) DEFAULT NULL,
  PRIMARY KEY (`ord_item_id`,`order_id`,`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table ci_bookshop.orders_item: ~3 rows (approximately)
/*!40000 ALTER TABLE `orders_item` DISABLE KEYS */;
INSERT INTO `orders_item` (`ord_item_id`, `order_id`, `pro_id`, `qty`, `unitprice`, `price`, `disacount`) VALUES
	(5, 5, 2, 1, 140.00, 140.00, NULL),
	(6, 6, 3, 1, 240.48, 240.48, NULL),
	(7, 7, 4, 1, 380.00, 380.00, NULL);
/*!40000 ALTER TABLE `orders_item` ENABLE KEYS */;

-- Dumping structure for table ci_bookshop.pay_credit_card
CREATE TABLE IF NOT EXISTS `pay_credit_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cus_id` int(11) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `first_name` varchar(250) DEFAULT NULL,
  `name_on_card` varchar(250) DEFAULT NULL,
  `card_number` varchar(250) DEFAULT NULL,
  `card_expiration` int(11) DEFAULT NULL,
  `cvv_number` varchar(250) DEFAULT NULL,
  `year` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`,`cus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table ci_bookshop.pay_credit_card: ~0 rows (approximately)
/*!40000 ALTER TABLE `pay_credit_card` DISABLE KEYS */;
/*!40000 ALTER TABLE `pay_credit_card` ENABLE KEYS */;

-- Dumping structure for table ci_bookshop.pay_dedit_card
CREATE TABLE IF NOT EXISTS `pay_dedit_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cus_id` int(11) NOT NULL,
  `name_on_card` varchar(250) DEFAULT NULL,
  `card_number` varchar(250) DEFAULT NULL,
  `card_expiration` int(11) DEFAULT NULL,
  `cvv_number` varchar(250) DEFAULT NULL,
  `year` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`,`cus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table ci_bookshop.pay_dedit_card: ~0 rows (approximately)
/*!40000 ALTER TABLE `pay_dedit_card` DISABLE KEYS */;
INSERT INTO `pay_dedit_card` (`id`, `cus_id`, `name_on_card`, `card_number`, `card_expiration`, `cvv_number`, `year`) VALUES
	(1, 1, '', '0000-0000-0000-0000', 6, 'xxxx', '1988');
/*!40000 ALTER TABLE `pay_dedit_card` ENABLE KEYS */;

-- Dumping structure for table ci_bookshop.pay_net_bank
CREATE TABLE IF NOT EXISTS `pay_net_bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cus_id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`,`cus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table ci_bookshop.pay_net_bank: ~0 rows (approximately)
/*!40000 ALTER TABLE `pay_net_bank` DISABLE KEYS */;
INSERT INTO `pay_net_bank` (`id`, `cus_id`, `name`) VALUES
	(2, 1, 'Canara Ban');
/*!40000 ALTER TABLE `pay_net_bank` ENABLE KEYS */;

-- Dumping structure for table ci_bookshop.products
CREATE TABLE IF NOT EXISTS `products` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) DEFAULT NULL,
  `subcat2_id` int(11) NOT NULL,
  `coupon_cod` varchar(250) DEFAULT NULL,
  `pro_name` varchar(250) DEFAULT NULL,
  `pro_feature` varchar(250) DEFAULT NULL,
  `pro_img_id` int(11) DEFAULT NULL,
  `pro_size` varchar(250) DEFAULT NULL,
  `pro_price` decimal(10,2) DEFAULT NULL,
  `pro_discount` int(11) DEFAULT NULL,
  `condition` varchar(150) DEFAULT NULL COMMENT 'New,Used,...',
  `color` varchar(150) DEFAULT NULL,
  `weight` varchar(150) DEFAULT NULL,
  `pro_detail` text,
  `pro_description` text,
  `information` text,
  `extra_info` text,
  `guarantees` text,
  `pro_keyword` text,
  `pro_status` enum('Y','N') DEFAULT 'Y',
  `add_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modify_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `sku` varchar(250) DEFAULT NULL COMMENT 'Stock Keeping Unit',
  `tags` mediumtext,
  `feature` tinyint(4) DEFAULT NULL,
  `views` bigint(20) DEFAULT NULL,
  `company_id` int(11) NOT NULL,
  PRIMARY KEY (`pro_id`,`company_id`,`subcat2_id`),
  KEY `FK_tbl_products_tbl_products_categories` (`cat_id`),
  CONSTRAINT `FK_tbl_products_tbl_products_categories` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

-- Dumping data for table ci_bookshop.products: ~25 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`pro_id`, `cat_id`, `subcat2_id`, `coupon_cod`, `pro_name`, `pro_feature`, `pro_img_id`, `pro_size`, `pro_price`, `pro_discount`, `condition`, `color`, `weight`, `pro_detail`, `pro_description`, `information`, `extra_info`, `guarantees`, `pro_keyword`, `pro_status`, `add_date`, `modify_date`, `sku`, `tags`, `feature`, `views`, `company_id`) VALUES
	(1, 2, 1, NULL, 'Floral Print A', '15347427605b7a50e8d57730.35256895.jpg', NULL, 'L,M,S,SL,XL', 100.70, 10, 'Used', 'Black,White,Green', '3kg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a libero. Vestibulum eu odio.\r\n\r\nMaecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.\r\n\r\nMaecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et nisl sagittis vestibulum. Aliquam eu nunc.', 'Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a libero. Vestibulum eu odio.\r\n\r\nMaecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.\r\n\r\nMaecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et nisl sagittis vestibulum. Aliquam eu nunc.', NULL, 'Y', '2018-07-23 20:26:52', '2018-07-23 20:27:21', '553217907', NULL, 1, 15, 1),
	(2, 1, 1, NULL, 'Floral Print B', '15347423265b7a4f36d844a9.29703198.jpg', NULL, 'L,S', 200.00, 30, 'New', 'Black,White,Green', '2kg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a libero. Vestibulum eu odio.\r\n\r\nMaecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.\r\n\r\nMaecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et nisl sagittis vestibulum. Aliquam eu nunc.', 'Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a libero. Vestibulum eu odio.\r\n\r\nMaecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.\r\n\r\nMaecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et nisl sagittis vestibulum. Aliquam eu nunc.', NULL, 'Y', '2018-04-23 20:26:52', '2018-07-23 20:27:21', '353217903', NULL, 1, 30, 2),
	(3, 1, 2, NULL, 'Floral Print C', '15347418375b7a4d4ded4d46.28640499.jpg', NULL, 'S', 300.60, 20, 'New', 'Black,White,Green', '10kg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a libero. Vestibulum eu odio.\r\n\r\nMaecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.\r\n\r\nMaecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et nisl sagittis vestibulum. Aliquam eu nunc.', 'Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a libero. Vestibulum eu odio.\r\n\r\nMaecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.\r\n\r\nMaecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et nisl sagittis vestibulum. Aliquam eu nunc.', NULL, 'Y', '2018-05-23 20:26:52', '2018-07-23 20:27:21', '853217907', NULL, 0, 19, 1),
	(4, 3, 3, NULL, 'Floral Print D', '15347418505b7a4d5ad79282.04188747.jpg', NULL, 'M,SL,XL', 400.00, 5, 'New', 'Black,White,Green', '0.4kg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a libero. Vestibulum eu odio.\r\n\r\nMaecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.\r\n\r\nMaecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et nisl sagittis vestibulum. Aliquam eu nunc.', NULL, NULL, 'Y', '2018-07-23 20:26:52', '2018-07-23 20:27:21', '453217907', NULL, 1, 10, 2),
	(5, 1, 2, NULL, 'Wink White Soap', '15347418585b7a4d6274b255.11168677.jpg', NULL, 'L,XL', 500.00, 9, 'Used', 'Blue,Green', '1kg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, 'Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a libero. Vestibulum eu odio.\r\n\r\nMaecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.\r\n\r\nMaecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et nisl sagittis vestibulum. Aliquam eu nunc.', 'Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a libero. Vestibulum eu odio.\r\n\r\nMaecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.\r\n\r\nMaecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et nisl sagittis vestibulum. Aliquam eu nunc.', NULL, 'N', '2018-06-23 20:26:52', '2018-07-23 20:27:21', '353217907', NULL, NULL, 20, 2),
	(6, 2, 3, NULL, 'Laravel Lesson', '15353442845b837e9c0b9835.76669208.jpg', NULL, 'M', 15.00, 5, NULL, 'Black,White,Green', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lesson all that Lesson all that Lesson all that Lesson all that Lesson all that Lesson all that Lesson all that Lesson all that Lesson all that Lesson all that Lesson all that Lesson all that Lesson all that Lesson all that ', NULL, NULL, NULL, NULL, 'N', '2018-08-27 11:31:24', '2018-08-27 11:31:24', NULL, NULL, NULL, NULL, 2),
	(7, 3, 4, NULL, 'T-shirt', '15353727555b83edd3b10e99.11161911.jpg', NULL, 'L,S', 20.00, 12, NULL, 'Black,White,Green', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, NULL, NULL, NULL, 'N', '2018-08-27 19:25:55', '2018-08-27 19:25:55', NULL, NULL, NULL, NULL, 2),
	(8, 2, 3, NULL, 'Laravel Lesson', '15353867405b8424742d95d5.29853031.jpg', NULL, 'M,SL', 15.00, 5, NULL, 'Black,White,Green', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, NULL, NULL, NULL, 'Y', '2018-08-27 23:19:00', '2018-08-27 23:19:00', NULL, NULL, NULL, NULL, 1),
	(9, 1, 4, NULL, 'T-shirt', '15361423595b8fac174fa5d5.41032536.jpg', NULL, 'L,M', 13.00, 12, NULL, 'Black,White,Green', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, NULL, NULL, NULL, 'Y', '2018-08-30 19:51:25', '2018-08-30 19:51:25', NULL, NULL, NULL, NULL, 1),
	(38, 1, 1, NULL, 'T-shirt', '15361423595b8fac174fa5d5.41032536.jpg', NULL, 'L,M', 13.00, 12, NULL, 'Black,White,Green', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, NULL, NULL, NULL, 'Y', '2018-08-30 19:51:25', '2018-08-30 19:51:25', NULL, NULL, NULL, NULL, 0),
	(39, 1, 1, NULL, 'T-shirt', '15361423595b8fac174fa5d5.41032536.jpg', NULL, 'L,M', 13.00, 12, NULL, 'Black,White,Green', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, NULL, NULL, NULL, 'Y', '2018-08-30 19:51:25', '2018-08-30 19:51:25', NULL, NULL, NULL, NULL, 0),
	(40, 1, 1, NULL, 'T-shirt', '15361423595b8fac174fa5d5.41032536.jpg', NULL, 'L,M', 13.00, 12, NULL, 'Black,White,Green', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, NULL, NULL, NULL, 'Y', '2018-08-30 19:51:25', '2018-08-30 19:51:25', NULL, NULL, NULL, NULL, 0),
	(41, 1, 1, NULL, 'T-shirt', '15361423595b8fac174fa5d5.41032536.jpg', NULL, 'L,M', 13.00, 12, NULL, 'Black,White,Green', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, NULL, NULL, NULL, 'Y', '2018-08-30 19:51:25', '2018-08-30 19:51:25', NULL, NULL, NULL, NULL, 0),
	(42, 1, 1, NULL, 'T-shirt', '15361423595b8fac174fa5d5.41032536.jpg', NULL, 'L,M', 13.00, 12, NULL, 'Black,White,Green', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, NULL, NULL, NULL, 'Y', '2018-08-30 19:51:25', '2018-08-30 19:51:25', NULL, NULL, NULL, NULL, 0),
	(43, 1, 1, NULL, 'T-shirt', '15361423595b8fac174fa5d5.41032536.jpg', NULL, 'L,M', 13.00, 12, NULL, 'Black,White,Green', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, NULL, NULL, NULL, 'Y', '2018-08-30 19:51:25', '2018-08-30 19:51:25', NULL, NULL, NULL, NULL, 0),
	(44, 1, 1, NULL, 'T-shirt', '15361423595b8fac174fa5d5.41032536.jpg', NULL, 'L,M', 13.00, 12, NULL, 'Black,White,Green', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, NULL, NULL, NULL, 'Y', '2018-08-30 19:51:25', '2018-08-30 19:51:25', NULL, NULL, NULL, NULL, 0),
	(45, 1, 1, NULL, 'T-shirt', '15361423595b8fac174fa5d5.41032536.jpg', NULL, 'L,M', 13.00, 12, NULL, 'Black,White,Green', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, NULL, NULL, NULL, 'Y', '2018-08-30 19:51:25', '2018-08-30 19:51:25', NULL, NULL, NULL, NULL, 0),
	(46, 1, 1, NULL, 'T-shirt', '15361423595b8fac174fa5d5.41032536.jpg', NULL, 'L,M', 13.00, 12, NULL, 'Black,White,Green', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, NULL, NULL, NULL, 'Y', '2018-08-30 19:51:25', '2018-08-30 19:51:25', NULL, NULL, NULL, NULL, 0),
	(47, 1, 1, NULL, 'T-shirt', '15361423595b8fac174fa5d5.41032536.jpg', NULL, 'L,M', 13.00, 12, NULL, 'Black,White,Green', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, NULL, NULL, NULL, 'Y', '2018-08-30 19:51:25', '2018-08-30 19:51:25', NULL, NULL, NULL, NULL, 0),
	(48, 1, 1, NULL, 'T-shirt', '15361423595b8fac174fa5d5.41032536.jpg', NULL, 'L,M', 13.00, 12, NULL, 'Black,White,Green', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, NULL, NULL, NULL, 'Y', '2018-08-30 19:51:25', '2018-08-30 19:51:25', NULL, NULL, NULL, NULL, 0),
	(49, 1, 1, NULL, 'T-shirt', '15361423595b8fac174fa5d5.41032536.jpg', NULL, 'L,M', 13.00, 12, NULL, 'Black,White,Green', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, NULL, NULL, NULL, 'Y', '2018-08-30 19:51:25', '2018-08-30 19:51:25', NULL, NULL, NULL, NULL, 0),
	(50, 1, 1, NULL, 'Bootstrap Resizable and draggable Modal', '15368860185b9b050256eb89.78576965.jpg', NULL, NULL, 434.00, NULL, 'New', NULL, NULL, NULL, 'e', NULL, NULL, NULL, NULL, 'Y', '2018-09-14 07:46:58', '2018-09-14 07:46:58', NULL, NULL, NULL, NULL, 0),
	(51, 1, 1, NULL, 'Bootstrap Resizable and draggable Modal', '15368863385b9b06424d3a56.58086219.jpg', NULL, NULL, 121212.00, NULL, 'Used', NULL, NULL, NULL, 'qqeq', NULL, NULL, NULL, NULL, 'Y', '2018-09-14 07:52:18', '2018-09-14 07:52:18', NULL, NULL, NULL, NULL, 0),
	(52, 1, 1, NULL, 'Bootstrap Resizable and draggable Modal', '15368864605b9b06bc957e09.21347456.jpg', NULL, NULL, 121212.00, NULL, 'Used', NULL, NULL, NULL, 'qqeq', NULL, NULL, NULL, NULL, 'Y', '2018-09-14 07:54:20', '2018-09-14 07:54:20', NULL, NULL, NULL, NULL, 0),
	(53, 1, 1, NULL, 'Bootstrap Resizable and draggable Modal', '15368869695b9b08b9d0d976.52512801.jpg', NULL, NULL, 121212.00, NULL, 'Used', NULL, NULL, NULL, 'qqeq', NULL, NULL, NULL, NULL, 'Y', '2018-09-14 08:02:49', '2018-09-14 08:02:49', NULL, NULL, NULL, NULL, 0),
	(54, 1, 1, NULL, 'Bootstrap Resizable and draggable Modal', '15368871685b9b0980500771.41438331.jpg', NULL, NULL, 121212.00, NULL, 'New', NULL, NULL, NULL, 'dde', NULL, NULL, NULL, NULL, 'Y', '2018-09-14 08:06:08', '2018-09-14 08:06:08', NULL, NULL, NULL, NULL, 0),
	(55, 1, 1, NULL, 'Bootstrap Resizable and draggable Modal', '15368905015b9b1685ba6459.19028398.jpg', NULL, NULL, 434.00, NULL, 'Used', NULL, NULL, NULL, 'frfrfw', NULL, NULL, NULL, NULL, 'Y', '2018-09-14 09:01:41', '2018-09-14 09:01:41', NULL, NULL, NULL, NULL, 0);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table ci_bookshop.products_images
CREATE TABLE IF NOT EXISTS `products_images` (
  `pro_img_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) DEFAULT '0',
  `pro_image` text,
  `pro_img_position` int(11) DEFAULT NULL,
  PRIMARY KEY (`pro_img_id`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=utf8;

-- Dumping data for table ci_bookshop.products_images: ~44 rows (approximately)
/*!40000 ALTER TABLE `products_images` DISABLE KEYS */;
INSERT INTO `products_images` (`pro_img_id`, `pro_id`, `pro_image`, `pro_img_position`) VALUES
	(25, 4, '4-15353428395b8378f773d903.51948478.jpg', 0),
	(26, 4, '4-15353428395b8378f78a11b1.94729774.jpg', 1),
	(27, 4, '4-15353428395b8378f79d9984.52614993.jpg', 2),
	(28, 4, '', 3),
	(29, 4, '', 4),
	(30, 4, '', 5),
	(31, 6, '6-15353442845b837e9c2a1f98.59183088.jpg', 0),
	(32, 6, '6-15353442845b837e9c4f3a60.95302057.jpg', 1),
	(46, 7, '7-15353727555b83edd3cc27d5.32298822.jpg', 0),
	(47, 7, '', 1),
	(48, 7, '', 2),
	(49, 7, '', 3),
	(50, 7, '', 4),
	(51, 7, '', 5),
	(60, 8, '8-15353867405b84247480d632.56204051.jpg', 0),
	(61, 8, '8-15353867405b842474997ec5.68047604.jpg', 1),
	(62, 8, '', 2),
	(63, 8, '', 3),
	(64, 8, '', 4),
	(65, 8, '', 5),
	(66, 3, '3-15355226525b86375c8ae879.80919128.jpg', 0),
	(67, 3, '3-15355226525b86375c9f2b03.32972802.jpg', 1),
	(68, 3, '3-15355226525b86375cb17ab0.20973805.jpg', 2),
	(69, 3, '3-15355226525b86375cc5be21.59912418.jpg', 3),
	(70, 3, '', 4),
	(71, 3, '', 5),
	(86, 9, '9-15361420275b8faacbe0ada5.36333325.jpg', 0),
	(87, 9, '9-15361420275b8faacbe35d35.29524577.jpg', 1),
	(88, 9, '', 2),
	(89, 9, '', 3),
	(90, 9, '', 4),
	(91, 9, '', 5),
	(128, 1, '1-15361432855b8fafb5884873.50597440.jpg', 0),
	(129, 1, '1-15352275785b81b6ba1de547.40830969.jpg', 1),
	(130, 1, '1-15361432855b8fafb5894278.80836824.jpg', 2),
	(131, 1, '', 3),
	(132, 1, '', 4),
	(133, 1, '1-15352275535b81b6a1bb9c68.24616896.jpg', 5),
	(134, 50, '50-15368860185b9b050259d998.33627816.jpg', 0),
	(135, 51, '51-15368863385b9b06425354f7.73647191.jpg', 0),
	(136, 52, '52-15368864605b9b06bc99e314.01865081.jpg', 0),
	(137, 53, '53-15368869695b9b08b9d4c184.03403754.jpg', 0),
	(138, 54, '54-15368871685b9b0980566093.97485131.jpg', 0),
	(139, 55, '55-15368905015b9b1685c0bd64.36402615.jpg', 0);
/*!40000 ALTER TABLE `products_images` ENABLE KEYS */;

-- Dumping structure for table ci_bookshop.product_size
CREATE TABLE IF NOT EXISTS `product_size` (
  `pro_size` varchar(50) NOT NULL,
  `note` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pro_size`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table ci_bookshop.product_size: ~5 rows (approximately)
/*!40000 ALTER TABLE `product_size` DISABLE KEYS */;
INSERT INTO `product_size` (`pro_size`, `note`) VALUES
	('L', NULL),
	('M', NULL),
	('S', NULL),
	('SL', NULL),
	('XL', NULL);
/*!40000 ALTER TABLE `product_size` ENABLE KEYS */;

-- Dumping structure for table ci_bookshop.user
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_rule` int(250) NOT NULL,
  `user_name` varchar(250) DEFAULT NULL,
  `user_email` varchar(250) DEFAULT NULL,
  `user_password` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`user_id`,`user_rule`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table ci_bookshop.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`user_id`, `user_rule`, `user_name`, `user_email`, `user_password`) VALUES
	(1, 1, 'Admin', 'admin@gmail.com', '1234');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping structure for table ci_bookshop.user_rule
CREATE TABLE IF NOT EXISTS `user_rule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table ci_bookshop.user_rule: ~3 rows (approximately)
/*!40000 ALTER TABLE `user_rule` DISABLE KEYS */;
INSERT INTO `user_rule` (`id`, `name`) VALUES
	(1, 'Admin'),
	(2, 'User'),
	(3, 'Editer');
/*!40000 ALTER TABLE `user_rule` ENABLE KEYS */;

-- Dumping structure for table ci_bookshop.wishlists
CREATE TABLE IF NOT EXISTS `wishlists` (
  `wish_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) DEFAULT NULL,
  `ip` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`wish_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table ci_bookshop.wishlists: ~0 rows (approximately)
/*!40000 ALTER TABLE `wishlists` DISABLE KEYS */;
/*!40000 ALTER TABLE `wishlists` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
