-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 06:26 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poseidon`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` int(11) NOT NULL,
  `amenity` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amenity_icon` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `amenity`, `amenity_icon`) VALUES
(1, '24-hour front desk', 'clock.png'),
(2, 'All Inclusive', 'N/A'),
(3, 'Basketball court', 'ball.png'),
(4, 'Beauty Saloon', 'hairdryer.png'),
(5, 'Business center', 'screen.png'),
(6, 'Car rental', 'car.png'),
(7, 'Casino', 'money.png'),
(8, 'Children’s playroom', 'kid.png'),
(9, 'Complimentary WiFi in public areas', 'wifi.png'),
(10, 'Concierge desk', 'desk.png'),
(11, 'Conference facilities', 'cinema.png'),
(12, 'Convention center', 'hall.png'),
(13, 'Fitness room', 'dumbel.png'),
(14, 'Golf course', 'golf.png'),
(15, 'Laundry and Valet service', 'iron.png'),
(16, 'Lounge Room', 'couch.png'),
(17, 'Night club', 'light.png'),
(18, 'Pools', 'pool.png'),
(19, 'Private beach', 'umbrella.png'),
(20, 'Sauna', 'water.png'),
(21, 'Shops', 'bag.png'),
(22, 'Spa', 'steam.png'),
(23, 'Tenis courts', 'tenis.png'),
(24, 'Theme restaurants', 'fork.png'),
(25, 'Tours', 'plane.png');

-- --------------------------------------------------------

--
-- Table structure for table `amenity_hotel`
--

CREATE TABLE `amenity_hotel` (
  `hotel_id` int(11) NOT NULL,
  `amenity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenity_hotel`
--

INSERT INTO `amenity_hotel` (`hotel_id`, `amenity_id`) VALUES
(1, 8),
(1, 10),
(1, 13),
(1, 15),
(2, 4),
(2, 9),
(2, 15),
(2, 19),
(2, 21),
(2, 22),
(2, 23),
(3, 1),
(3, 3),
(3, 4),
(3, 5),
(3, 7),
(3, 12),
(3, 13),
(3, 16),
(3, 17),
(3, 23),
(3, 24);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `transaction_number` varchar(100) NOT NULL,
  `room_cost` decimal(18,2) NOT NULL,
  `total_fees` decimal(18,2) NOT NULL,
  `total_taxes` decimal(18,2) NOT NULL,
  `total_cost` decimal(18,2) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `amount_payment` decimal(18,2) NOT NULL,
  `checkin_date` date DEFAULT NULL,
  `checkout_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='table that manages booking of the system';

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `feature` varchar(255) NOT NULL,
  `feature_icon` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `feature`, `feature_icon`, `created_at`, `updated_at`) VALUES
(1, '24 Hour Housekeeping', 'room.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(2, '250 thread count sheets', 'room.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(3, '32-inch HDTV', 'tv.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(4, 'Air conditioning', 'ac.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(5, 'Bath slippers', 'towel.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(6, 'Bathrobe', 'towel.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(7, 'Alarm Clock Radio w/ MP3 Connection', 'radio.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(8, 'DVD/CD Player', 'cd.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(9, 'Electronic Locks', 'lock.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(10, 'Ergonomic Desk Chair', 'chair.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(11, 'Evening Room Service Available', 'clock.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(12, 'Feather Pillows Non Allergenic', 'pillow.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(13, 'Hairdryer', 'dryer.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(14, 'Hand-held shower', 'shower.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(15, 'High Speed Internet Access', 'wifi.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(16, 'Serenity Bed', 'bed.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(17, 'In-Suite Coffee/Welcome Caddy', 'coffee.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(18, 'Iron/ironing board', 'iron.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(19, 'Mini bar', 'bar.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(20, 'On-Demand Movies', 'movie.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(21, 'Private Jacuzzi', 'water.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(22, 'Safe', 'safe.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(23, 'Seating area with sofa', 'sofa.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(24, 'Telephone - Auto Wakeup', 'phone.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(25, 'Telephone - in Bath', 'phone2.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(26, 'Thermostat (adjustable)', 'termometer.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(27, 'Welcome Amenity', 'gift.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(28, 'Work Desk with Adjustable Lamp', 'desk.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34'),
(29, 'Workstation', 'pc.png', '2019-11-26 15:35:34', '2019-11-26 15:35:34');

-- --------------------------------------------------------

--
-- Table structure for table `feature_room`
--

CREATE TABLE `feature_room` (
  `room_id` int(11) NOT NULL,
  `feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='create table';

--
-- Dumping data for table `feature_room`
--

INSERT INTO `feature_room` (`room_id`, `feature_id`) VALUES
(1, 3),
(1, 6),
(1, 8),
(1, 10),
(1, 13),
(1, 19),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 27),
(1, 28),
(2, 3),
(2, 6),
(2, 8),
(2, 10),
(2, 13),
(2, 19),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 27),
(2, 28),
(3, 3),
(3, 6),
(3, 8),
(3, 10),
(3, 13),
(3, 19),
(3, 22),
(3, 23),
(3, 24),
(3, 25),
(3, 27),
(3, 28),
(4, 3),
(4, 6),
(4, 8),
(4, 10),
(4, 13),
(4, 19),
(4, 22),
(4, 23),
(4, 24),
(4, 25),
(4, 27),
(4, 28),
(5, 3),
(5, 6),
(5, 8),
(5, 10),
(5, 13),
(5, 19),
(5, 22),
(5, 23),
(5, 24),
(5, 25),
(5, 27),
(5, 28),
(6, 3),
(6, 6),
(6, 8),
(6, 10),
(6, 13),
(6, 19),
(6, 22),
(6, 23),
(6, 24),
(6, 25),
(6, 27),
(6, 28),
(7, 3),
(7, 6),
(7, 8),
(7, 10),
(7, 13),
(7, 19),
(7, 22),
(7, 23),
(7, 24),
(7, 25),
(7, 27),
(7, 28),
(8, 3),
(8, 6),
(8, 8),
(8, 10),
(8, 13),
(8, 19),
(8, 22),
(8, 23),
(8, 24),
(8, 25),
(8, 27),
(8, 28),
(9, 3),
(9, 6),
(9, 8),
(9, 10),
(9, 13),
(9, 19),
(9, 22),
(9, 23),
(9, 24),
(9, 25),
(9, 27),
(9, 28),
(10, 3),
(10, 6),
(10, 8),
(10, 10),
(10, 13),
(10, 19),
(10, 22),
(10, 23),
(10, 24),
(10, 25),
(10, 27),
(10, 28),
(11, 3),
(11, 6),
(11, 8),
(11, 10),
(11, 13),
(11, 19),
(11, 22),
(11, 23),
(11, 24),
(11, 25),
(11, 27),
(11, 28),
(12, 3),
(12, 6),
(12, 8),
(12, 10),
(12, 13),
(12, 19),
(12, 22),
(12, 23),
(12, 24),
(12, 25),
(12, 27),
(12, 28),
(13, 3),
(13, 6),
(13, 8),
(13, 10),
(13, 13),
(13, 19),
(13, 22),
(13, 23),
(13, 24),
(13, 25),
(13, 27),
(13, 28),
(14, 3),
(14, 6),
(14, 8),
(14, 10),
(14, 13),
(14, 19),
(14, 22),
(14, 23),
(14, 24),
(14, 25),
(14, 27),
(14, 28),
(15, 3),
(15, 6),
(15, 8),
(15, 10),
(15, 13),
(15, 19),
(15, 22),
(15, 23),
(15, 24),
(15, 25),
(15, 27),
(15, 28),
(16, 3),
(16, 6),
(16, 8),
(16, 10),
(16, 13),
(16, 19),
(16, 22),
(16, 23),
(16, 24),
(16, 25),
(16, 27),
(16, 28),
(17, 3),
(17, 6),
(17, 8),
(17, 10),
(17, 13),
(17, 19),
(17, 22),
(17, 23),
(17, 24),
(17, 25),
(17, 27),
(17, 28),
(18, 3),
(18, 6),
(18, 8),
(18, 10),
(18, 13),
(18, 19),
(18, 22),
(18, 23),
(18, 24),
(18, 25),
(18, 27),
(18, 28),
(19, 3),
(19, 6),
(19, 8),
(19, 10),
(19, 13),
(19, 19),
(19, 22),
(19, 23),
(19, 24),
(19, 25),
(19, 27),
(19, 28),
(20, 3),
(20, 6),
(20, 8),
(20, 10),
(20, 13),
(20, 19),
(20, 22),
(20, 23),
(20, 24),
(20, 25),
(20, 27),
(20, 28),
(21, 3),
(21, 6),
(21, 8),
(21, 10),
(21, 13),
(21, 19),
(21, 22),
(21, 23),
(21, 24),
(21, 25),
(21, 27),
(21, 28),
(22, 3),
(22, 6),
(22, 8),
(22, 10),
(22, 13),
(22, 19),
(22, 22),
(22, 23),
(22, 24),
(22, 25),
(22, 27),
(22, 28),
(23, 3),
(23, 6),
(23, 8),
(23, 10),
(23, 13),
(23, 19),
(23, 22),
(23, 23),
(23, 24),
(23, 25),
(23, 27),
(23, 28),
(24, 3),
(24, 6),
(24, 8),
(24, 10),
(24, 13),
(24, 19),
(24, 22),
(24, 23),
(24, 24),
(24, 25),
(24, 27),
(24, 28),
(25, 3),
(25, 6),
(25, 8),
(25, 10),
(25, 13),
(25, 19),
(25, 22),
(25, 23),
(25, 24),
(25, 25),
(25, 27),
(25, 28),
(26, 3),
(26, 6),
(26, 8),
(26, 10),
(26, 13),
(26, 19),
(26, 22),
(26, 23),
(26, 24),
(26, 25),
(26, 27),
(26, 28),
(27, 3),
(27, 6),
(27, 8),
(27, 10),
(27, 13),
(27, 19),
(27, 22),
(27, 23),
(27, 24),
(27, 25),
(27, 27),
(27, 28),
(28, 3),
(28, 6),
(28, 8),
(28, 10),
(28, 13),
(28, 19),
(28, 22),
(28, 23),
(28, 24),
(28, 25),
(28, 27),
(28, 28),
(29, 3),
(29, 6),
(29, 8),
(29, 10),
(29, 13),
(29, 19),
(29, 22),
(29, 23),
(29, 24),
(29, 25),
(29, 27),
(29, 28),
(30, 3),
(30, 6),
(30, 8),
(30, 10),
(30, 13),
(30, 19),
(30, 22),
(30, 23),
(30, 24),
(30, 25),
(30, 27),
(30, 28),
(31, 3),
(31, 6),
(31, 8),
(31, 10),
(31, 13),
(31, 19),
(31, 22),
(31, 23),
(31, 24),
(31, 25),
(31, 27),
(31, 28),
(32, 3),
(32, 6),
(32, 8),
(32, 10),
(32, 13),
(32, 19),
(32, 22),
(32, 23),
(32, 24),
(32, 25),
(32, 27),
(32, 28),
(33, 3),
(33, 6),
(33, 8),
(33, 10),
(33, 13),
(33, 19),
(33, 22),
(33, 23),
(33, 24),
(33, 25),
(33, 27),
(33, 28),
(34, 3),
(34, 6),
(34, 8),
(34, 10),
(34, 13),
(34, 19),
(34, 22),
(34, 23),
(34, 24),
(34, 25),
(34, 27),
(34, 28),
(35, 3),
(35, 6),
(35, 8),
(35, 10),
(35, 13),
(35, 19),
(35, 22),
(35, 23),
(35, 24),
(35, 25),
(35, 27),
(35, 28),
(36, 3),
(36, 6),
(36, 8),
(36, 10),
(36, 13),
(36, 19),
(36, 22),
(36, 23),
(36, 24),
(36, 25),
(36, 27),
(36, 28),
(37, 3),
(37, 6),
(37, 8),
(37, 10),
(37, 13),
(37, 19),
(37, 22),
(37, 23),
(37, 24),
(37, 25),
(37, 27),
(37, 28),
(38, 3),
(38, 6),
(38, 8),
(38, 10),
(38, 13),
(38, 19),
(38, 22),
(38, 23),
(38, 24),
(38, 25),
(38, 27),
(38, 28),
(39, 3),
(39, 6),
(39, 8),
(39, 10),
(39, 13),
(39, 19),
(39, 22),
(39, 23),
(39, 24),
(39, 25),
(39, 27),
(39, 28),
(40, 3),
(40, 6),
(40, 8),
(40, 10),
(40, 13),
(40, 19),
(40, 22),
(40, 23),
(40, 24),
(40, 25),
(40, 27),
(40, 28),
(41, 3),
(41, 6),
(41, 8),
(41, 10),
(41, 13),
(41, 19),
(41, 22),
(41, 23),
(41, 24),
(41, 25),
(41, 27),
(41, 28),
(42, 3),
(42, 6),
(42, 8),
(42, 10),
(42, 13),
(42, 19),
(42, 22),
(42, 23),
(42, 24),
(42, 25),
(42, 27),
(42, 28),
(43, 3),
(43, 6),
(43, 8),
(43, 10),
(43, 13),
(43, 19),
(43, 22),
(43, 23),
(43, 24),
(43, 25),
(43, 27),
(43, 28),
(44, 3),
(44, 6),
(44, 8),
(44, 10),
(44, 13),
(44, 19),
(44, 22),
(44, 23),
(44, 24),
(44, 25),
(44, 27),
(44, 28),
(45, 3),
(45, 6),
(45, 8),
(45, 10),
(45, 13),
(45, 19),
(45, 22),
(45, 23),
(45, 24),
(45, 25),
(45, 27),
(45, 28),
(46, 3),
(46, 6),
(46, 8),
(46, 10),
(46, 13),
(46, 19),
(46, 22),
(46, 23),
(46, 24),
(46, 25),
(46, 27),
(46, 28),
(47, 3),
(47, 6),
(47, 8),
(47, 10),
(47, 13),
(47, 19),
(47, 22),
(47, 23),
(47, 24),
(47, 25),
(47, 27),
(47, 28),
(48, 3),
(48, 6),
(48, 8),
(48, 10),
(48, 13),
(48, 19),
(48, 22),
(48, 23),
(48, 24),
(48, 25),
(48, 27),
(48, 28),
(49, 3),
(49, 6),
(49, 8),
(49, 10),
(49, 13),
(49, 19),
(49, 22),
(49, 23),
(49, 24),
(49, 25),
(49, 27),
(49, 28),
(50, 3),
(50, 6),
(50, 8),
(50, 10),
(50, 13),
(50, 19),
(50, 22),
(50, 23),
(50, 24),
(50, 25),
(50, 27),
(50, 28),
(51, 3),
(51, 6),
(51, 8),
(51, 10),
(51, 13),
(51, 19),
(51, 22),
(51, 23),
(51, 24),
(51, 25),
(51, 27),
(51, 28),
(52, 3),
(52, 6),
(52, 8),
(52, 10),
(52, 13),
(52, 19),
(52, 22),
(52, 23),
(52, 24),
(52, 25),
(52, 27),
(52, 28),
(53, 3),
(53, 6),
(53, 8),
(53, 10),
(53, 13),
(53, 19),
(53, 22),
(53, 23),
(53, 24),
(53, 25),
(53, 27),
(53, 28),
(54, 3),
(54, 6),
(54, 8),
(54, 10),
(54, 13),
(54, 19),
(54, 22),
(54, 23),
(54, 24),
(54, 25),
(54, 27),
(54, 28),
(55, 3),
(55, 6),
(55, 8),
(55, 10),
(55, 13),
(55, 19),
(55, 22),
(55, 23),
(55, 24),
(55, 25),
(55, 27),
(55, 28),
(56, 3),
(56, 6),
(56, 8),
(56, 10),
(56, 13),
(56, 19),
(56, 22),
(56, 23),
(56, 24),
(56, 25),
(56, 27),
(56, 28),
(57, 3),
(57, 6),
(57, 8),
(57, 10),
(57, 13),
(57, 19),
(57, 22),
(57, 23),
(57, 24),
(57, 25),
(57, 27),
(57, 28),
(58, 3),
(58, 6),
(58, 8),
(58, 10),
(58, 13),
(58, 19),
(58, 22),
(58, 23),
(58, 24),
(58, 25),
(58, 27),
(58, 28),
(59, 3),
(59, 6),
(59, 8),
(59, 10),
(59, 13),
(59, 19),
(59, 22),
(59, 23),
(59, 24),
(59, 25),
(59, 27),
(59, 28),
(60, 3),
(60, 6),
(60, 8),
(60, 10),
(60, 13),
(60, 19),
(60, 22),
(60, 23),
(60, 24),
(60, 25),
(60, 27),
(60, 28);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `location_id` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `checkin_time` time NOT NULL,
  `checkout_time` time NOT NULL,
  `airport_distance` decimal(18,2) NOT NULL,
  `airport_transportation` decimal(18,2) NOT NULL,
  `pet_friendly` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Table that manages all the information regarding hotel basic info';

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `description`, `location_id`, `address`, `postal_code`, `phone_number`, `checkin_time`, `checkout_time`, `airport_distance`, `airport_transportation`, `pet_friendly`, `created_at`, `updated_at`) VALUES
(1, 'Royalton Hicacos Resort & Spa', 'I am first hotel', 1, 'Carretera Las Morlas Km. 15', '12345', '+53 45 668844', '00:00:00', '15:00:00', '35.00', '0.00', 1, '2019-11-26 16:51:58', '2019-12-03 12:35:12'),
(2, 'One&Only Reethi Rah', '', 2, 'Reethi Rah, Reethi Rah', '0', '+960 664-8800', '12:00:00', '16:00:00', '150.00', '0.00', 0, '2019-11-26 16:55:22', '2019-11-26 16:55:22'),
(3, 'Barceló Maya Tropical', '', 3, 'Carretera Chetumal Puerto Juárez, Riviera Maya', '77750', '+52 984 875 1500', '11:00:00', '15:00:00', '27.00', '0.00', 0, '2019-11-26 16:58:42', '2019-11-26 16:58:42'),
(4, 'Test Hotel Updated', 'This is a test Hotel updated', 2, '15 Yemen Street, Yemen', 'R3C 1L4', '(204) 869-8713', '11:00:00', '17:00:00', '13.00', '15.00', 0, '2019-12-03 12:13:00', '2019-12-03 12:33:45');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_images`
--

CREATE TABLE `hotel_images` (
  `hotel_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_images`
--

INSERT INTO `hotel_images` (`hotel_id`, `image_id`) VALUES
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11),
(3, 12),
(3, 13),
(3, 14),
(3, 15);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `created_at`) VALUES
(1, 'Cuba.jpg', '2019-11-27 10:18:09'),
(2, 'Maldives.jpg', '2019-11-27 10:18:09'),
(3, 'Mexico.jpg', '2019-11-27 10:18:09'),
(4, 'hotelCuba1.jpg', '2019-11-27 10:18:09'),
(5, 'hotelCuba2.jpg', '2019-11-27 10:18:09'),
(6, 'hotelCuba3.jpg', '2019-11-27 10:18:09'),
(7, 'hotelCuba4.jpg', '2019-11-27 10:18:09'),
(8, 'hotelMaldives1.jpg', '2019-11-27 10:18:09'),
(9, 'hotelMaldives2.jpg', '2019-11-27 10:18:09'),
(10, 'hotelMaldives3.jpg', '2019-11-27 10:18:09'),
(11, 'hotelMaldive4.jpg', '2019-11-27 10:18:09'),
(12, 'hotelMexico1.jpg', '2019-11-27 10:18:09'),
(13, 'hotelMexico2.jpg', '2019-11-27 10:18:09'),
(14, 'hotelMexico3.jpg', '2019-11-27 10:18:09'),
(15, 'hotelMexico4.jpg', '2019-11-27 10:18:09'),
(16, 'cubaRoom1.jpg', '2019-11-27 10:18:09'),
(17, 'cubaRoom2.jpg', '2019-11-27 10:18:09'),
(18, 'cubaRoom3.jpg', '2019-11-27 10:18:09'),
(19, 'cubaRoom4.jpg', '2019-11-27 10:18:09'),
(20, 'cubaRoom5.jpg', '2019-11-27 10:18:09'),
(21, 'cubaRoom6.jpg', '2019-11-27 10:18:09'),
(22, 'cubaRoom7.jpg', '2019-11-27 10:18:09'),
(23, 'maldivesRoom1.jpg', '2019-11-27 10:18:09'),
(24, 'maldivesRoom2.jpg', '2019-11-27 10:18:09'),
(25, 'maldivesRoom3.jpg', '2019-11-27 10:18:09'),
(26, 'maldivesRoom4.jpg', '2019-11-27 10:18:09'),
(27, 'maldivesRoom5.jpg', '2019-11-27 10:18:09'),
(28, 'maldivesRoom6.jpg', '2019-11-27 10:18:09'),
(29, 'maldivesRoom7.jpg', '2019-11-27 10:18:09'),
(30, 'mexicoRoom1.jpg', '2019-11-27 10:18:09'),
(31, 'mexicoRoom2.jpg', '2019-11-27 10:18:09'),
(32, 'mexicoRoom3.jpg', '2019-11-27 10:18:09'),
(33, 'mexicoRoom4.jpg', '2019-11-27 10:18:09'),
(34, 'mexicoRoom5.jpg', '2019-11-27 10:18:09'),
(35, 'mexicoRoom6.jpg', '2019-11-27 10:18:09'),
(36, 'mexicoRoom7.jpg', '2019-11-27 10:18:09');

-- --------------------------------------------------------

--
-- Table structure for table `image_rooms`
--

CREATE TABLE `image_rooms` (
  `room_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_rooms`
--

INSERT INTO `image_rooms` (`room_id`, `image_id`) VALUES
(1, 16),
(2, 17),
(3, 18),
(4, 19),
(5, 20),
(6, 16),
(7, 17),
(8, 18),
(9, 19),
(10, 20),
(11, 16),
(12, 17),
(13, 18),
(14, 19),
(15, 20),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 23),
(22, 24),
(23, 25),
(24, 26),
(25, 27),
(26, 23),
(27, 24),
(28, 25),
(29, 26),
(30, 27),
(31, 23),
(32, 24),
(33, 25),
(34, 26),
(35, 27),
(36, 23),
(37, 24),
(38, 25),
(39, 26),
(40, 27),
(41, 30),
(42, 31),
(43, 32),
(44, 33),
(45, 34),
(46, 30),
(47, 31),
(48, 32),
(49, 33),
(50, 34),
(51, 30),
(52, 31),
(53, 32),
(54, 33),
(55, 34),
(56, 30),
(57, 31),
(58, 32),
(59, 33),
(60, 34);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` int(11) NOT NULL,
  `is_featured` tinyint(4) NOT NULL COMMENT '0: No | 1: Yes',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location`, `description`, `slug`, `image_id`, `is_featured`, `created_at`, `updated_at`) VALUES
(1, 'Cuba', '', 'cuba', 1, 1, '2019-12-03 01:03:52', '2019-12-03 01:05:35'),
(2, 'Maldives', '', 'maldives', 2, 1, '2019-12-03 01:03:52', '2019-12-03 01:05:38'),
(3, 'Mexico', '', 'mexico', 3, 1, '2019-12-03 01:04:11', '2019-12-03 01:05:41');

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` char(1) NOT NULL,
  `address` varchar(500) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Table that manages personal information of guests for contact purposes';

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `user_id`, `first_name`, `last_name`, `birthdate`, `gender`, `address`, `postal_code`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 1, 'Krita', 'maharjan', '1994-09-20', 'F', 'Lorem Ipsum', 'R2C4J9', '204-555-2685', '2019-11-27 11:16:04', '2019-12-03 17:24:22'),
(2, 2, 'Katie', 'Peters', '1993-11-26', 'F', 'Lorem Ipsum', 'R2C4J7', '204-555-2685', '2019-11-27 11:16:12', '2019-12-03 17:24:27'),
(3, 3, 'Narain', 'Madabhushi', '1992-08-01', 'M', 'Lorem Ipsum', 'R1C3J8', '204-235-8741', '2019-11-27 11:16:12', '2019-12-03 17:24:30'),
(4, 4, 'Evgheni', 'Sipco', '1995-06-20', 'M', 'Lorem Ipsum', 'R5C4B3', '204-365-7895', '2019-11-27 11:16:12', '2019-12-03 17:24:34'),
(5, 5, 'Juan', 'Jimenez', '1980-06-25', 'M', 'Lorem Ipsum', 'R3C3J9', '204-218-2890', '2019-11-27 11:16:12', '2019-12-03 17:24:37');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_number` int(11) NOT NULL,
  `description` text NOT NULL,
  `max_adults` int(11) NOT NULL,
  `max_children` int(11) NOT NULL DEFAULT '0',
  `room_type_id` int(11) NOT NULL,
  `no_bathrooms` int(11) NOT NULL,
  `smoking` bit(1) NOT NULL,
  `featured` bit(1) DEFAULT b'0',
  `room_cost` decimal(18,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Table that manages room information';

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `hotel_id`, `room_number`, `description`, `max_adults`, `max_children`, `room_type_id`, `no_bathrooms`, `smoking`, `featured`, `room_cost`, `created_at`, `updated_at`) VALUES
(1, 1, 101, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 0, 18, 2, b'1', b'0', '1200.00', '2019-11-27 09:36:37', '2019-11-27 09:36:37'),
(2, 1, 102, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 18, 2, b'0', b'0', '1200.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(3, 1, 103, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 18, 2, b'0', b'0', '1200.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(4, 1, 104, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 18, 2, b'0', b'0', '1200.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(5, 1, 105, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 0, 24, 1, b'1', b'0', '800.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(6, 1, 201, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 24, 1, b'0', b'0', '800.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(7, 1, 202, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 24, 1, b'0', b'0', '800.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(8, 1, 203, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 24, 1, b'0', b'0', '800.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(9, 1, 204, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 0, 21, 1, b'1', b'0', '750.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(10, 1, 205, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 0, 21, 1, b'1', b'0', '750.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(11, 1, 301, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 21, 1, b'0', b'0', '750.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(12, 1, 302, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 21, 1, b'0', b'0', '750.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(13, 1, 303, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 0, 19, 2, b'1', b'0', '1050.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(14, 1, 304, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 19, 2, b'0', b'0', '1050.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(15, 1, 305, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 4, 0, 23, 1, b'1', b'0', '850.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(16, 1, 401, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 4, 0, 23, 1, b'1', b'0', '850.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(17, 1, 402, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 4, 0, 23, 1, b'0', b'0', '850.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(18, 1, 403, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 0, 4, 23, 1, b'0', b'0', '850.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(19, 1, 404, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 1, 1, 25, 1, b'0', b'0', '530.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(20, 1, 405, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 0, 22, 2, b'0', b'1', '1500.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(21, 2, 101, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 0, 17, 1, b'1', b'0', '650.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(22, 2, 102, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 0, 17, 1, b'0', b'0', '650.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(23, 2, 103, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 4, 4, 18, 2, b'0', b'0', '1200.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(24, 2, 104, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 4, 4, 18, 2, b'0', b'0', '1200.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(25, 2, 105, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 24, 1, b'1', b'0', '800.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(26, 2, 201, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 24, 1, b'0', b'0', '800.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(27, 2, 202, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 24, 1, b'0', b'0', '800.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(28, 2, 203, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 24, 1, b'0', b'0', '800.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(29, 2, 204, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 21, 1, b'1', b'0', '750.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(30, 2, 205, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 21, 1, b'1', b'0', '750.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(31, 2, 301, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 21, 1, b'0', b'0', '750.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(32, 2, 302, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 21, 1, b'0', b'0', '750.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(33, 2, 303, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 0, 19, 2, b'1', b'0', '1050.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(34, 2, 304, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 0, 19, 2, b'0', b'1', '1050.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(35, 2, 305, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 4, 4, 23, 1, b'1', b'0', '850.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(36, 2, 401, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 4, 4, 23, 1, b'1', b'0', '850.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(37, 2, 402, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 4, 4, 23, 1, b'0', b'0', '850.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(38, 2, 403, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 4, 4, 23, 1, b'0', b'0', '850.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(39, 2, 404, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 1, 0, 25, 1, b'0', b'0', '530.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(40, 2, 405, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 0, 22, 2, b'0', b'0', '1500.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(41, 3, 101, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 0, 17, 1, b'1', b'0', '650.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(42, 3, 102, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 0, 17, 1, b'0', b'0', '650.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(43, 3, 103, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 4, 4, 18, 2, b'0', b'0', '1200.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(44, 3, 104, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 4, 4, 18, 2, b'0', b'0', '1200.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(45, 3, 105, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 24, 1, b'1', b'0', '800.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(46, 3, 201, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 24, 1, b'0', b'0', '800.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(47, 3, 202, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 24, 1, b'0', b'0', '800.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(48, 3, 203, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 24, 1, b'0', b'0', '800.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(49, 3, 204, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 21, 1, b'1', b'0', '750.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(50, 3, 205, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 21, 1, b'1', b'0', '750.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(51, 3, 301, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 21, 1, b'0', b'0', '750.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(52, 3, 302, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 2, 21, 1, b'0', b'0', '750.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(53, 3, 303, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 0, 19, 2, b'1', b'0', '1050.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(54, 3, 304, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 0, 19, 2, b'0', b'0', '1050.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(55, 3, 305, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 4, 4, 23, 1, b'1', b'0', '850.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(56, 3, 401, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 4, 4, 23, 1, b'1', b'0', '850.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(57, 3, 402, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 4, 4, 23, 1, b'0', b'0', '850.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(58, 3, 403, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 4, 4, 23, 1, b'0', b'0', '850.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(59, 3, 404, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 1, 0, 25, 1, b'0', b'0', '530.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53'),
(60, 3, 405, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, animi beatae consectetur dolor eligendi error incidunt iure, maxime minus molestiae nemo nihil nostrum quisquam ratione sequi sit voluptates, voluptatibus.', 2, 0, 22, 2, b'0', b'1', '1500.00', '2019-11-27 09:36:53', '2019-11-27 09:36:53');

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE `room_types` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(15, 'Apartment', '2019-11-26 17:01:20', '2019-11-26 17:01:20'),
(16, 'Cabana', '2019-11-26 17:01:20', '2019-11-26 17:01:20'),
(17, 'Double', '2019-11-26 17:01:20', '2019-11-26 17:01:20'),
(18, 'Double-Double', '2019-11-26 17:01:20', '2019-11-26 17:01:20'),
(19, 'Executive Suite', '2019-11-26 17:01:20', '2019-11-26 17:01:20'),
(20, 'Junion Suite', '2019-11-26 17:01:20', '2019-11-26 17:01:20'),
(21, 'King', '2019-11-26 17:01:20', '2019-11-26 17:01:20'),
(22, 'Presidential Suite', '2019-11-26 17:01:20', '2019-11-26 17:01:20'),
(23, 'Quad', '2019-11-26 17:01:20', '2019-11-26 17:01:20'),
(24, 'Queen', '2019-11-26 17:01:20', '2019-11-26 17:01:20'),
(25, 'Single', '2019-11-26 17:01:20', '2019-11-26 17:01:20'),
(26, 'Triple', '2019-11-26 17:01:20', '2019-11-26 17:01:20'),
(27, 'Twin', '2019-11-26 17:01:20', '2019-11-26 17:01:20'),
(28, 'Villa', '2019-11-26 17:01:20', '2019-11-26 17:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(45) DEFAULT NULL COMMENT 'for guests it will be null. ',
  `user_type` int(11) NOT NULL COMMENT '1: Admin\n2: Member\n3: Guest',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `user_type`, `created_at`, `updated_at`) VALUES
(1, 'krita.maharjan@gmail.com', 'admin123', 1, '2019-11-27 10:58:53', '2019-11-27 10:58:53'),
(2, 'katie.peters@hotmail.com', 'admin123', 1, '2019-11-27 10:58:53', '2019-11-27 10:58:53'),
(3, 'narayna@gmail.com', 'admin123', 1, '2019-11-27 10:58:53', '2019-11-27 10:58:53'),
(4, 'evgheni.sipco@gmail.com', 'admin123', 1, '2019-11-27 10:58:53', '2019-11-27 10:58:53'),
(5, 'juancaji00@gmail.com', 'admin123', 1, '2019-11-27 10:58:53', '2019-11-27 10:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amenity_hotel`
--
ALTER TABLE `amenity_hotel`
  ADD PRIMARY KEY (`hotel_id`,`amenity_id`),
  ADD KEY `fk_amenity` (`amenity_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_booking_user` (`user_id`),
  ADD KEY `fk_booking_room` (`room_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_room`
--
ALTER TABLE `feature_room`
  ADD PRIMARY KEY (`room_id`,`feature_id`),
  ADD KEY `fk_feature_room_room` (`room_id`),
  ADD KEY `fk_feature_room_feature` (`feature_id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hotel_location` (`location_id`);

--
-- Indexes for table `hotel_images`
--
ALTER TABLE `hotel_images`
  ADD PRIMARY KEY (`hotel_id`,`image_id`),
  ADD KEY `fk_hotel_images_hotel` (`hotel_id`),
  ADD KEY `fk_hotel_images_image` (`image_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_rooms`
--
ALTER TABLE `image_rooms`
  ADD PRIMARY KEY (`room_id`,`image_id`),
  ADD KEY `fk_room_images_room` (`room_id`),
  ADD KEY `fk_room_images_image` (`image_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
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
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_room_hotel` (`hotel_id`),
  ADD KEY `fk_room_room_type` (`room_type_id`);

--
-- Indexes for table `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

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
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `room_types`
--
ALTER TABLE `room_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `amenity_hotel`
--
ALTER TABLE `amenity_hotel`
  ADD CONSTRAINT `fk_amenity` FOREIGN KEY (`amenity_id`) REFERENCES `amenities` (`id`),
  ADD CONSTRAINT `fk_hotel` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`);

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `fk_booking_room` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `fk_booking_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `feature_room`
--
ALTER TABLE `feature_room`
  ADD CONSTRAINT `fk_feature_room_feature` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`),
  ADD CONSTRAINT `fk_feature_room_room` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `hotel_images`
--
ALTER TABLE `hotel_images`
  ADD CONSTRAINT `fk_hotel_images_hotel` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`),
  ADD CONSTRAINT `fk_hotel_images_image` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`);

--
-- Constraints for table `image_rooms`
--
ALTER TABLE `image_rooms`
  ADD CONSTRAINT `fk_room_images_image` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`),
  ADD CONSTRAINT `fk_room_images_room` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `fk_room_hotel` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`),
  ADD CONSTRAINT `fk_room_room_type` FOREIGN KEY (`room_type_id`) REFERENCES `room_types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
