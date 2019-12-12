-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 11, 2019 at 08:55 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

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
-- Table structure for table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE IF NOT EXISTS `hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `location_id` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `checkin_time` time NOT NULL,
  `checkout_time` time NOT NULL,
  `airport_distance` varchar(255) NOT NULL,
  `airport_transportation` varchar(255) NOT NULL,
  `pet_friendly` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_hotel_location` (`location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COMMENT='Table that manages all the information regarding hotel basic info';

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `slug`, `description`, `location_id`, `address`, `postal_code`, `phone_number`, `checkin_time`, `checkout_time`, `airport_distance`, `airport_transportation`, `pet_friendly`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Royalton Hicacos Resort & Spa', 'royalton-hicacos-resort-spa', 'Location\r\nLocated in the Saligao area of Cuba, the warm rooms of the Calangute is not too far from the sea beaches. People can visit the Paradise Play Zone located on the way to the beach. The Calangute Police Station is in close vicinity.\r\nSpecial Features\r\nThe rooms of the Calangute are large, spacious and airy. The paints on the wall are bright and charge points are available beside the headboards. The lawn outside the hotel offers a wonderful seating area. One can even enjoy a game of billiards during their stay here.\r\n\r\nAmenities\r\nThe visitors can enjoy AC, TV and the warmth of a queen-sized bed in the rooms of the Calangute. The swimming pool in the place is another wonderful addition to the bright aura. The place is protected by the strict surveillance of CCTV cameras.\r\n\r\nWhat\'s Nearby\r\nIf people want something more than the in-house restaurant available here, people can dine at the Saligao Stories, Foxes Fiesta, K.G.N. Family Restaurant, Cafe Sussegado Souza or the Domino\'s Pizza.', 1, 'Carretera Las Morlas Km. 15', '12345', '+53 45 668844', '00:00:00', '15:00:00', '35.00', '0.00', 1, NULL, '2019-11-26 16:51:58', '2019-12-11 20:19:50'),
(2, 'One&Only Reethi Rah', 'one-only-reethi-rah', 'Hotel is a comfortable, modern and Budgeted property located in Panjim. Tourist attractions nearby include Dona Paula View Point, Samad Fishery, Bridge Panji and Goa State Museum. Several beaches including Sinquerim Beach, Candolim Beach and Calangute Beach too are nearby.\r\n\r\nSpecial Features\r\n\r\nThe property has a traditional facade complete with balconies and a sloping roof. The rooms are bright, sunny and airy with a classic design. Some of the rooms have a balcony offering a place to sit and observe the area and its hustlebustle.\r\n\r\nAmenities\r\nThe hotel offers amenities like free WiFi and comfortable rooms offering a twinsingle bed, TV, AC, wardrobe and hygienic bathrooms with geysers.\r\n\r\nWhat\'s Nearby\r\nThe property has a number of restaurants close by offering various cuisines. Some of the popular ones are Route 66, Ritz Classic Restaurant and Bar, The Black Sheep Bistro, Viva Panjim, Kokni Kanteen and The Fisherman\'s Wharf Panjim.', 2, 'Reethi Rah, Reethi Rah', '847923', '+960 664-8800', '00:00:00', '16:00:00', '150.00', '0.00', 0, NULL, '2019-11-26 16:55:22', '2019-12-05 21:50:48'),
(3, 'Barcel', 'barcelo-maya-tropical', 'The closest you can get to the water\r\n\r\nThe Junior Suite is located on the hotel’s ground floor, granting direct access to the beach. You could be one of the first to hit the sand, but for an even calmer sun-bathing experience, make yourself at home in one of the deck chairs on your private balcony, while you listen to the pleasant sounds of the ocean waves. Inside, your spacious room awaits you with all the comforts and amenities you need for an unforgettable and relaxing stay.', 3, 'Carretera Chetumal Puerto Ju', '77750', '+52 984 875 1500', '11:00:00', '15:00:00', '27.00', '0.00', 0, NULL, '2019-11-26 16:58:42', '2019-12-11 20:17:08'),
(4, 'Test Hotel', 'test-hotel', 'This is a test Hotel updated', 2, '15 Yemen Street, Yemen', 'R3C 1L4', '(204) 869-8713', '11:00:00', '17:00:00', '13.00', '15.00', 0, NULL, '2019-12-03 12:13:00', '2019-12-05 16:49:03'),
(5, 'Test Hotel', 'test-hotel-1', 'Cviebrock', 1, '515 Portage Ave', 'R3B 2E9', '0433264879', '11:00:00', '11:00:00', '12.00', '14.00', 0, '2019-12-05 22:55:00', '2019-12-05 22:50:18', '2019-12-05 22:55:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
