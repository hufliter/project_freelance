-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2015 at 08:09 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `saigon_industrial_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `is_active`, `created_at`, `updated_at`) VALUES
(3, 'Cate 2', 0, 1, '2015-11-06 13:59:45', '0000-00-00 00:00:00'),
(4, 'Sub Child Cate 1', 2, 1, '2015-11-06 14:03:51', '0000-00-00 00:00:00'),
(5, 'Sub child Cate 2', 3, 1, '2015-11-06 14:09:02', '0000-00-00 00:00:00'),
(7, 'Father Category', 0, 1, '2015-11-08 08:47:02', '2015-11-08 15:47:02'),
(8, 'Child Category', 7, 1, '2015-11-08 08:48:23', '2015-11-08 15:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `company_address` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_phone` varchar(255) NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `company_fax` varchar(255) NOT NULL,
  `img_slider` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `title`, `address`, `phone`, `fax`, `email`, `content`, `created_at`, `updated_at`) VALUES
(1, 'New Contact', '911 Ngô Quyền, Q.10 TP.HCM', '0919991992', '', 'luzsec@gmail.com', 'Phản hồi từ người dùng', '2015-11-16 17:40:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `introduce`
--

CREATE TABLE IF NOT EXISTS `introduce` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `introduce`
--

INSERT INTO `introduce` (`id`, `title`, `content`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(2, 'CHÀO MỪNG BẠN ĐẾN VỚI CÔNG TY TNHH PHÁT TRIỂN CÔNG NGHIỆP SÀI GÒN!', 'PHA+QyZvY2lyYztuZyB0eSBUTkhIIHBoYcyBdCB0cmkmZWNpcmM7zIluIGMmb2NpcmM7bmcgbmdoaSZlY2lyYzvMo3AgU2HMgGkgR2/MgG4gY2h1eSZlY2lyYztuIGN1bmcgYyZhY2lyYzvMgXAgY2HMgWMgZ2lhzIlpIHBoYcyBcCBi4bqjbyB24buHIGgmYWdyYXZlO25nIGgmb2FjdXRlO2EgeHXhuqV0IGto4bqpdSB0cm9uZyBjb250YWluZXIuIFPhu60gZOG7pW5nIGNo4bqldCBoJnVhY3V0ZTt0IOG6qW0gdHJvbmcgxJEmb2FjdXRlO25nIGcmb2FjdXRlO2kgc+G6o24gcGjhuqltLCB0cm9uZyBjJmFhY3V0ZTtjIHRoJnVncmF2ZTtuZyBoJmFncmF2ZTtuZywga2nhu4duIGgmYWdyYXZlO25nIHYmYWdyYXZlOyB0cm9uZyBjb250YWluZXIuIFPhu60gZOG7pW5nIHQmdWFjdXRlO2kga2gmaWFjdXRlOyBjaCZlZ3JhdmU7biB2JmFncmF2ZTtvIGMmYWFjdXRlO2Mga2hv4bqjbmcgdHLhu5FuZyBnaeG7r2EgYyZhYWN1dGU7YyBraeG7h24gaCZhZ3JhdmU7bmcgaGF5IGdp4buvYSBraeG7h24gaCZhZ3JhdmU7bmcgdiZhZ3JhdmU7IGNvbnRhaW5lci4gQ2jhuqV0IGgmdWFjdXRlO3Qg4bqpbSBkdXkgdHJpzIAgY2hvIGMmYWFjdXRlO2Mgc+G6o24gcGjhuqltLCB0aCZ1Z3JhdmU7bmcgaCZhZ3JhdmU7bmcsIGtp4buHbiBoJmFncmF2ZTtuZyB2JmFncmF2ZTsga2gmb2NpcmM7bmcga2gmaWFjdXRlOyB0cm9uZyBjb250YWluZXIgbHUmb2NpcmM7biBraCZvY2lyYzsgcmHMgW8sIG5nxINuIG5nxrDMgGEgaGkmZWNpcmM7zKNuIHTGsMahzKNuZyBo4bqlcCBoxqFpLCDEkSZvY2lyYzvMiSBtJm9jaXJjO8yAIGgmb2NpcmM7aSB0ciZlY2lyYztuIGhhzIBuZyBob8yBYSB2YcyAIGhpJmVjaXJjO8yjbiB0xrDGocyjbmcgbcawYSB0cm9uZyBjb250YWluZXIuIFQmdWFjdXRlO2kga2gmaWFjdXRlOyBjaCZlZ3JhdmU7biBoJmFncmF2ZTtuZyBnaSZ1YWN1dGU7cCBjaG8gaCZhZ3JhdmU7bmcgaCZvYWN1dGU7YSBraCZvY2lyYztuZyBi4buLIHgmZWNpcmM7IGThu4tjaCwgxJHhu5UgbmcmYXRpbGRlOyB0cm9uZyBxdSZhYWN1dGU7IHRyJmlncmF2ZTtuaCB24bqtbiBjaHV54buDbi4gxJBhzIltIGJhzIlvIGhhzIBuZyBob8yBYSDEkSZlY2lyYzvMgW4gdGF5IG5nxrDGocyAaSBuaCZhY2lyYzvMo24gdiZhY2lyYzvMg24gZ2nGsMyDIG5ndXkmZWNpcmM7biBwaCZhY2lyYzvMiW0gY2gmYWNpcmM7zIF0IGJhbiDEkSZhY2lyYzvMgHUsIGtoJm9jaXJjO25nIGJpzKMgxrDGocyBdCBoYcyAbmcsIG3hu6duIHRoJnVncmF2ZTtuZyBoYXkgZCZpYWN1dGU7bmggdGgmdWdyYXZlO25nIGNhcnRvbiwga2gmb2NpcmM7bmcgbCZhZ3JhdmU7bSBoxrAgaOG6oWkgbmgmYXRpbGRlO24gbSZhYWN1dGU7YyBt4bqldCB0JmlhY3V0ZTtuaCB0aOG6qW0gbeG7uSBj4bunYSBiYW8gYiZpZ3JhdmU7LCBraCZvY2lyYztuZyBi4buLIG3hu5FjIGhheSBuJmFjaXJjO8yBbSBtJm9jaXJjO8yBYywga2gmb2NpcmM7bmcgbCZhZ3JhdmU7bSBo4buPbmcgYyZhYWN1dGU7YyB0aGnhur90IGLhu4sgxJFp4buHbiB2JmFncmF2ZTsgxJFp4buHbiB04butLCBraCZvY2lyYztuZyBsJmFncmF2ZTttIGhvZW4gcuG7iSwgb3hpIGhvzIFhLCDEg24gbSZvZ3JhdmU7biwgcGhhaSBtJmFncmF2ZTt1IGtpbSBsb+G6oWksJmhlbGxpcDs8L3A+DQo8cD5NJm9jaXJjO8yDaSBuxINtIGNvzIEgaGHMgG5nIHRyxINtIHRyaSZlY2lyYzvMo3UgY29udGFpbmVyIGzGsHUgdGgmb2NpcmM7bmcgdHImZWNpcmM7biBiaSZlY2lyYzvMiW4gxJEmZWNpcmM7zIkgbWFuZyBoYcyAbmcgaG/MgWEgxJEmZWNpcmM7zIFuIGtoxIPMgXAgbsahaSB0ciZlY2lyYztuIHRoJmVjaXJjO8yBIGdpxqHMgWkuIEtob2HMiW5nIDIwJSBoJmFncmF2ZTtuZyBoJm9hY3V0ZTthIHRyb25nIHMmb2NpcmM7zIEgxJFvzIEgY2/MgSBuZ3V5IGPGoSBiacyjIGjGsCBob8yJbmcgZG8gxJHhu5UgbmcmYXRpbGRlOyB2JmFncmF2ZTsgZG8ga2gmb2NpcmM7bmcga2hpzIEgJmFjaXJjO8yJbSDGsMahzIF0IHRyb25nIGNvbnRhaW5lciBnJmFjaXJjO3kgcmEgbGHMgG0gdCZvY2lyYzvMgW4ga2XMgW0gaGHMgG5nIHR5zIkgVVNEIMSRJmVjaXJjO8yJIGtoxIPMgWMgcGh1zKNjIGgmYWNpcmM7zKN1IHF1YcyJLCDEkSZvY2lyYzvMgG5nIHRoxqHMgGkgbGHMgG0gbSZhY2lyYzvMgXQgdXkgdGnMgW4gxJEmb2NpcmM7zIFpIHbGocyBaSBraGHMgWNoIGhhzIBuZy48L3A+DQo8cD5DJm9jaXJjO25nIHR5IFROSEggcGhhzIF0IHRyaSZlY2lyYzvMiW4gYyZvY2lyYztuZyBuZ2hpJmVjaXJjO8yjcCBTYcyAaSBHb8yAbiBsdSZvY2lyYztuIGtodXkmZWNpcmM7zIFuIGNhzIFvIMSRJmVjaXJjO8yBbiBraGHMgWNoIGhhzIBuZyBzxrDMiSBkdcyjbmcgY2gmYWNpcmM7zIF0IGh1zIF0ICZhY2lyYzvMiW0gdiZhZ3JhdmU7IHQmdWFjdXRlO2kga2gmaWFjdXRlOyBjaCZlZ3JhdmU7biBoJmFncmF2ZTtuZyB0cm9uZyBjJmFhY3V0ZTtjIGNvbnRhaW5lciBoYcyAbmcgaG/MgWEgY3XMiWEgbWnMgG5oIMSRJmVjaXJjO8yJIMSRYcyJbSBiYcyJbyBraCZvY2lyYztuZyB4YcyJeSByYSBiJmFjaXJjO8yBdCBrecyAIHPGsMyjIGMmb2NpcmM7zIEgbmHMgG8uIMSQJm9jaXJjO8yAbmcgdGjGocyAaSBraGHMgWNoIGhhzIBuZyB0dSZhY2lyYztuIHRodcyJIG5naGkmZWNpcmM7bSBjYcyBYyB0aSZlY2lyYzt1IGNodSZhY2lyYzvMiW4gdiZlY2lyYzvMgCBjaCZhY2lyYzvMgXQgbMawxqHMo25nIGhhzIBuZyBob8yBYSwgY2HMgWMgcXV5IHTEg8yBYyBhbiB0b2HMgG4gdHJvbmcga2kmZWNpcmM7zIltIHRyYSBjb250YWluZXIgdmHMgCDEkW/MgW5nIGhhzIBuZy48L3A+DQo8cD5DaOG6pXQgaCZ1YWN1dGU7dCDhuqltIFNpbGljYSBHZWwgxJHGsOG7o2Mgc+G7rSBk4bulbmcgdHJvbmcgxJEmb2FjdXRlO25nIGcmb2FjdXRlO2kgc+G6o24gcGjhuqltIHYmYWdyYXZlOyB0cm9uZyBjJmFhY3V0ZTtjIHRoJnVncmF2ZTtuZyBoJmFncmF2ZTtuZyBsJmFncmF2ZTsgcGgmdWdyYXZlOyBo4bujcCwgYW4gdG8mYWdyYXZlO24gdiZhZ3JhdmU7IGtpbmggdOG6vyBuaOG6pXQuIMSQJm9jaXJjO2kga2hpIFNpbGljYSBHZWwgY8WpbmcgxJHGsOG7o2MgZCZ1Z3JhdmU7bmcgdHJvbmcgYyZhYWN1dGU7YyBraeG7h24gaCZhZ3JhdmU7bmcgaGF5IGNvbnRhaW5lci48L3A+DQo8cD5DaCZhY2lyYzvMgXQgaHXMgXQgJmFjaXJjO8yJbSBTdXBlckRyeSBz4butIGThu6VuZyB0cm9uZyBjJmFhY3V0ZTtjIGtp4buHbiBoJmFncmF2ZTtuZyB2JmFncmF2ZTs8L3A+DQo8cD50cm9uZyBjJmFhY3V0ZTtjIGNvbnRhaW5lciDEkeG6oXQgaGnhu4d1IHF14bqjIGNhbyBuaOG6pXQgbmjGsG5nIGzhuqFpIGtpbmggdOG6vyBuaOG6pXQuIFN1cGVyRHJ5IHLhuqV0IGFuIHRvJmFncmF2ZTtuLCBkJmVjaXJjO8yDIHBoJmFjaXJjO24gaHXMiXksIHRoJmFjaXJjO24gdGhpJmVjaXJjO8yjbiB2xqHMgWkgbSZvY2lyYztpIHRyxrDGocyAbmcuIMSQYcyDIMSRxrDGocyjYyBTR1Mga2kmZWNpcmM7zIltIMSRacyjbmgsIGtoJm9jaXJjO25nIGNvzIEgY2gmYWNpcmM7zIF0IGcmYWNpcmM7eSBkacyjIMawzIFuZyBEaW1ldGh5bCBGdW1hcmF0ZSAoRE1GKSwgdHUmYWNpcmM7biB0aHXMiSBjYcyBYyBxdXkgxJFpzKNuaCBSRUFDSCwgUm9IUyBjdcyJYSB0aGnMoyB0csawxqHMgG5nIENoJmFjaXJjO3UgJkFjaXJjO3UuIE5nb2HMgGkgcmEgU3VwZXJEcnkgY2/MgG4gY2/MgSBuaMawzINuZyDEkcSDzKNjIHRpzIFuaCBuJm9jaXJjO8yJaSB0ciZvY2lyYzvMo2k6PC9wPg0KPHVsPg0KPGxpPktoYcyJIG7Eg25nIGh1zIF0ICZhY2lyYzvMiW0gKHRpzIkgbCZlY2lyYzvMoyBodcyBdCAmYWNpcmM7zIltKSBkJmVjaXJjO8yDIGRhzIBuZyDEkWkmZWNpcmM7zIB1IGNoacyJbmggdMawzIAgNTAlIMSRJmVjaXJjO8yBbiAxNTAlIHNvIHbGocyBaSB0cm/Mo25nIGzGsMahzKNuZyBjaCZhY2lyYzvMgXQgaHXMgXQgJmFjaXJjO8yJbSwgdHXMgHkgdGhlbyB5JmVjaXJjO3UgYyZhY2lyYzvMgHUgY3XMiWEga2hhzIFjaCBoYcyAbmcuPC9saT4NCjxsaT5UJm9jaXJjO8yBYyDEkSZvY2lyYzvMoyBodcyBdCAmYWNpcmM7zIltLCB0aMahzIBpIGdpYW4gaHXMgXQgJmFjaXJjO8yJbSBwaHXMgCBoxqHMo3AgdsahzIFpIGhhzIBuaCB0cmnMgG5oIGRhzIBpIG5nYcyAeSBjdcyJYSBoYcyAbmcgaG/MgWEgdHJvbmcgY29udGFpbmVyLjwvbGk+DQo8bGk+xJBvzIFuZyBnb8yBaSBixIPMgG5nIGhhaSBsxqHMgXAgYmFvIGJpzIAuIEzGocyBcCBiJmVjaXJjO24gbmdvYcyAaSBsYcyAIHZhzIlpIGtoJm9jaXJjO25nIGQmZWNpcmM7zKN0LCBsxqHMgXAgYiZlY2lyYztuIHRyb25nIGxhzIAgdiZhY2lyYzvMo3QgbGkmZWNpcmM7zKN1IMSRxIPMo2MgYmkmZWNpcmM7zKN0IGNoacyJIGNobyBoxqFpIG7GsMahzIFjIMSRaSB2YcyAbyBtYcyAIGtoJm9jaXJjO25nIGNobyBiJmFjaXJjO8yBdCBrecyAIGNoJmFjaXJjO8yBdCBuYcyAbyDEkWkgbmfGsMahzKNjIHRyxqHMiSByYS4gRG8gxJFvzIEgciZhY2lyYzvMgXQgYW4gdG9hzIBuIGtoaSBzxrDMiSBkdcyjbmcsIGNoacyjdSDEkcawxqHMo2MgdmEgxJEmYWNpcmM7zKNwLCBjaGXMgG4gZcyBcCB0cm9uZyBxdWHMgSB0cmnMgG5oIHYmYWNpcmM7zKNuIGNodXkmZWNpcmM7zIluIGhhzIBuZyBob8yBYSBtYcyAIGNoJmFjaXJjO8yBdCBodcyBdCAmYWNpcmM7zIltIHYmYWNpcmM7zINuIGtoJm9jaXJjO25nIGJpzKMgcm/MgCByacyJLjwvbGk+DQo8bGk+U8awzIkgZHXMo25nIG1vzIFjIHRyZW8gY2h1eSZlY2lyYztuIGR1zKNuZyBjaG8gY29udGFpbmVyLCByJmFjaXJjO8yBdCBjaMSDzIFjIGNoxIPMgW4sIGQmZWNpcmM7zIMgdGhhbyB0YcyBYy4NCjxwPlRyxrDhu5tjIGtpYSBjaCZlZ3JhdmU7biBsJm9hY3V0ZTt0IGgmYWdyYXZlO25nIG5nxrDhu51pIHRhIHRoxrDhu51uZyBz4butIGThu6VuZyBwYWxsZXQsIGfhu5csIHjhu5FwLCBjYXJ0b24gbmjGsG5nIG3hu6ljIMSR4buZIGLhuqNvIHbhu4cgdGjhuqVwIHYmYWdyYXZlOyBy4bqldCBt4bqldCB0aOG7nWkgZ2lhbiB0cm9uZyB2aeG7h2MgxJEmb2FjdXRlO25nIGgmYWdyYXZlO25nIHYmYWdyYXZlOyByJnVhY3V0ZTt0IGgmYWdyYXZlO25nIHJhIGto4buPaSBjb250YWluZXIuIE5nJmFncmF2ZTt5IG5heSwgcGjGsMahbmcgcGgmYWFjdXRlO3AgY2gmZWdyYXZlO24gbCZvYWN1dGU7dCBoJmFncmF2ZTtuZyBi4bqxbmcgdCZ1YWN1dGU7aSBraCZpYWN1dGU7IHLhuqV0IHRp4buHbiBs4bujaSB2JmFncmF2ZTsgYW4gdG8mYWdyYXZlO24gY2hvIGgmYWdyYXZlO25nIGgmb2FjdXRlO2EgdiZhZ3JhdmU7IG0mb2NpcmM7aSB0csaw4budbmcsIHRo4budaSBnaWFuIMSRJm9hY3V0ZTtuZyBoJmFncmF2ZTtuZyB2JmFncmF2ZTsgciZ1YWN1dGU7dCBoJmFncmF2ZTtuZyBkaeG7hW4gcmEgbmhhbmggY2gmb2FjdXRlO25nLCBjaCZpYWN1dGU7bmggeCZhYWN1dGU7Yy48L3A+DQo8cD5DYcyJbSDGoW4sPC9wPg0KPHA+QyZvY2lyYztuZyB0eSBUTkhIIHBoYcyBdCB0cmkmZWNpcmM7zIluIGMmb2NpcmM7bmcgbmdoaSZlY2lyYzvMo3AgU2HMgGkgR2/MgG4uPC9wPg0KPC9saT4NCjwvdWw+', '', 1, '2015-11-03 07:47:36', '2015-11-06 12:47:40');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
`id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_type` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `weight` int(11) NOT NULL,
  `package` varchar(255) NOT NULL,
  `words` varchar(255) NOT NULL,
  `solder` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `usage` text NOT NULL,
  `description` text NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `is_popular` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cate_id`, `name`, `size`, `weight`, `package`, `words`, `solder`, `image`, `usage`, `description`, `is_active`, `is_popular`, `created_at`, `updated_at`, `slug`) VALUES
(3, 5, '', '', 0, '', '', '', '["564a0c8313249.png","564a0c83333e0.png"]', 'Mô tả sản phẩm', 'ứng dụng sản phẩm', 1, 1, '2015-11-16 10:04:03', '2015-11-16 17:04:03', 'SP001'),
(4, 4, '', '', 0, '', '', '', '["565204ad6cb8a.png","565204ae0f5c0.png"]', 'Mo ta', 'ung dung', 1, 1, '2015-11-22 11:08:46', '2015-11-22 18:08:46', 'KO102'),
(5, 3, '', '', 0, '', '', '', '["56573b89071de.png","56573b8953ad2.png"]', 'Không mô tả', 'Ứng dụng', 1, 1, '2015-11-26 10:04:09', '2015-11-26 17:04:09', 'PROMOTE-A-1'),
(6, 8, '', '', 0, '', '', '', '["56608eb3a25d8.jpg"]', 'Khong mo ta', 'ung dung', 1, 1, '2015-12-03 11:49:23', '2015-12-03 18:49:23', 'KO1020');

-- --------------------------------------------------------

--
-- Table structure for table `recruitment`
--

CREATE TABLE IF NOT EXISTS `recruitment` (
`id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `quantity` int(4) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `requirement` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `contact` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recruitment`
--

INSERT INTO `recruitment` (`id`, `job_title`, `position`, `quantity`, `salary`, `requirement`, `description`, `contact`, `active`, `created_at`, `updated_at`) VALUES
(2, 'New Jobs  Asdasd', 'Php developer qd qwd qwd', 6, '1000', 'No requirement', 'No description', 'My Contact', 1, '2015-11-21 12:40:21', '2015-11-21 19:45:41'),
(3, 'New Jobs Updated', 'Php developer Senior', 1, '2000', 'No requirement', 'No description', 'My Contact', 1, '2015-11-21 12:43:55', '2015-11-21 19:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `type` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `technical`
--

CREATE TABLE IF NOT EXISTS `technical` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `active` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `technical`
--

INSERT INTO `technical` (`id`, `name`, `url`, `active`, `created_at`, `updated_at`) VALUES
(1, 'My CV Edited', 'https://drive.google.com/file/d/0B2ru84q_uOSBNGZtd0E5QWNNek0/view?usp=sharing', 1, '2015-11-21 21:04:42', '2015-11-22 04:22:21'),
(2, 'Some Link', 'http;//', 1, '2015-12-03 12:27:45', '2015-12-03 19:27:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `password`, `role`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Super', 'User', 'finalfantasy812@gmail.com', '$2y$10$ki7rmXEFJXA/lGbTRN5TV.38WLIg2uWcpsFMmDicbdfeG8AFrjOaS', 1, 1, 'zXRniebdSyVaQSPdTxmOTLtJmPX7597Zu24AP76UQSq1UiKdDEfilWc9MpfR', '2015-10-28 11:10:06', '2015-12-03 19:17:23'),
(2, 'tester01', 'Test', 'Man', 'abcd@gmail.com', '$2y$10$cVzz4lMO/ltHToxiivS3e.uQdjZP99hMq7tYZqYyvau2./SK5nWVy', 2, 1, '2kPhfSRDvK43GOvNMq7eOFZPCyNe3skDZJAq1w6YHV8AB6raRSyHPB57xnQT', '2015-10-30 17:21:10', '2015-10-30 18:13:15'),
(3, 'tester02', 'Test', 'Man', 'abcde@gmail.com', '$2y$10$m/JaifbJkvANvFtN1vElFuKBJXB/OssYe3viEAVKkB49dV4qU2JCa', 2, 1, NULL, '2015-10-30 17:21:11', '0000-00-00 00:00:00'),
(4, 'tester03', 'Test', 'Man', 'abcdef@gmail.com', '$2y$10$rxdH1d2d2EU23CEoj3BM7ubmqKCstUHZebBUOcEKXFTSfXC80TmgC', 2, 1, NULL, '2015-10-30 17:21:11', '0000-00-00 00:00:00'),
(5, 'tester04', 'Test', 'Man', 'abcefgd@gmail.com', '$2y$10$LBElRu0fHtf3KuL8xWTHlOVBfmcFCYwnW6uEBf4a7Pt5itHykR4EW', 2, 1, NULL, '2015-10-30 17:21:11', '0000-00-00 00:00:00'),
(6, 'tester05', 'Test', 'Man', 'abcdefgh@gmail.com', '$2y$10$pXtm7UUptwUy4kp7PeSc9exzrk78FoqEDZMzrRTBQ3KpjU/I4rA8m', 2, 1, NULL, '2015-10-30 17:21:11', '0000-00-00 00:00:00'),
(7, 'tester01', 'Test', 'Man', 'abcd@gmail.com', '$2y$10$/ryDSghFicKioMjpUFDv7OyGLbdH//MnFyh3zpOgdAgYTeZjEg4fG', 2, 1, NULL, '2015-10-30 17:22:24', '0000-00-00 00:00:00'),
(9, 'tester07', 'Test', 'Man', 'abcdef123@gmail.com', '$2y$10$w291BJmw7v0KByaxQznVPOJLim8x1oUGZES92kad/Ay0eGPNht3ne', 2, 3, NULL, '2015-10-30 17:22:24', '0000-00-00 00:00:00'),
(11, 'tester09', 'Test', 'Man', 'abcdefgh123@gmail.com', '$2y$10$9tcdAc/puuAL2dyC0d4esOjHGkvD0EFrKna6y68kx4tRcdFABtHdG', 2, 1, NULL, '2015-10-30 17:22:24', '0000-00-00 00:00:00'),
(12, 'Fore', 'tinker', 'bell', 'wiizwii@gmail.com', 'newpass2015', 2, 2, NULL, '2015-11-02 09:20:34', '2015-11-02 16:20:34'),
(13, 'christopher', 'Tess', 'ass', 'teii@tmail.com', 'newpass2015', 2, 1, NULL, '2015-11-02 09:23:03', '2015-11-02 16:23:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `introduce`
--
ALTER TABLE `introduce`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruitment`
--
ALTER TABLE `recruitment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technical`
--
ALTER TABLE `technical`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `introduce`
--
ALTER TABLE `introduce`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `recruitment`
--
ALTER TABLE `recruitment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `technical`
--
ALTER TABLE `technical`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
