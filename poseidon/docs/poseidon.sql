-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 12:48 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

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
CREATE DATABASE IF NOT EXISTS `poseidon` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `poseidon`;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_number` bigint(20) NOT NULL,
  `room_cost` decimal(18,2) NOT NULL,
  `total_fees` decimal(18,2) NOT NULL,
  `total_taxes` decimal(18,2) NOT NULL,
  `total_cost` decimal(18,2) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `amount_payment` decimal(18,2) NOT NULL,
  `checkin_date` date DEFAULT NULL,
  `checkout_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='table that manages booking of the system';

-- --------------------------------------------------------

--
-- Table structure for table `booking_room`
--

CREATE TABLE `booking_room` (
  `booking_room_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `features_id` int(11) NOT NULL,
  `feature` varchar(255) NOT NULL,
  `feature_icon` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`features_id`, `feature`, `feature_icon`, `created_at`, `updated_at`) VALUES
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
  `room_amenities_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `features_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='create table';

--
-- Dumping data for table `feature_room`
--

INSERT INTO `feature_room` (`room_amenities_id`, `room_id`, `features_id`) VALUES
(1, 1, 3),
(2, 1, 6),
(3, 1, 8),
(4, 1, 10),
(5, 1, 13),
(6, 1, 19),
(7, 1, 22),
(8, 1, 23),
(9, 1, 24),
(10, 1, 25),
(11, 1, 27),
(12, 1, 28),
(13, 2, 3),
(14, 2, 6),
(15, 2, 8),
(16, 2, 10),
(17, 2, 13),
(18, 2, 19),
(19, 2, 22),
(20, 2, 23),
(21, 2, 24),
(22, 2, 25),
(23, 2, 27),
(24, 2, 28),
(25, 3, 3),
(26, 3, 6),
(27, 3, 8),
(28, 3, 10),
(29, 3, 13),
(30, 3, 19),
(31, 3, 22),
(32, 3, 23),
(33, 3, 24),
(34, 3, 25),
(35, 3, 27),
(36, 3, 28),
(37, 4, 3),
(38, 4, 6),
(39, 4, 8),
(40, 4, 10),
(41, 4, 13),
(42, 4, 19),
(43, 4, 22),
(44, 4, 23),
(45, 4, 24),
(46, 4, 25),
(47, 4, 27),
(48, 4, 28),
(49, 5, 3),
(50, 5, 6),
(51, 5, 8),
(52, 5, 10),
(53, 5, 13),
(54, 5, 19),
(55, 5, 22),
(56, 5, 23),
(57, 5, 24),
(58, 5, 25),
(59, 5, 27),
(60, 5, 28),
(61, 6, 3),
(62, 6, 6),
(63, 6, 8),
(64, 6, 10),
(65, 6, 13),
(66, 6, 19),
(67, 6, 22),
(68, 6, 23),
(69, 6, 24),
(70, 6, 25),
(71, 6, 27),
(72, 6, 28),
(73, 7, 3),
(74, 7, 6),
(75, 7, 8),
(76, 7, 10),
(77, 7, 13),
(78, 7, 19),
(79, 7, 22),
(80, 7, 23),
(81, 7, 24),
(82, 7, 25),
(83, 7, 27),
(84, 7, 28),
(85, 8, 3),
(86, 8, 6),
(87, 8, 8),
(88, 8, 10),
(89, 8, 13),
(90, 8, 19),
(91, 8, 22),
(92, 8, 23),
(93, 8, 24),
(94, 8, 25),
(95, 8, 27),
(96, 8, 28),
(97, 9, 3),
(98, 9, 6),
(99, 9, 8),
(100, 9, 10),
(101, 9, 13),
(102, 9, 19),
(103, 9, 22),
(104, 9, 23),
(105, 9, 24),
(106, 9, 25),
(107, 9, 27),
(108, 9, 28),
(109, 10, 3),
(110, 10, 6),
(111, 10, 8),
(112, 10, 10),
(113, 10, 13),
(114, 10, 19),
(115, 10, 22),
(116, 10, 23),
(117, 10, 24),
(118, 10, 25),
(119, 10, 27),
(120, 10, 28),
(121, 11, 3),
(122, 11, 6),
(123, 11, 8),
(124, 11, 10),
(125, 11, 13),
(126, 11, 19),
(127, 11, 22),
(128, 11, 23),
(129, 11, 24),
(130, 11, 25),
(131, 11, 27),
(132, 11, 28),
(133, 12, 3),
(134, 12, 6),
(135, 12, 8),
(136, 12, 10),
(137, 12, 13),
(138, 12, 19),
(139, 12, 22),
(140, 12, 23),
(141, 12, 24),
(142, 12, 25),
(143, 12, 27),
(144, 12, 28),
(145, 13, 3),
(146, 13, 6),
(147, 13, 8),
(148, 13, 10),
(149, 13, 13),
(150, 13, 19),
(151, 13, 22),
(152, 13, 23),
(153, 13, 24),
(154, 13, 25),
(155, 13, 27),
(156, 13, 28),
(157, 14, 3),
(158, 14, 6),
(159, 14, 8),
(160, 14, 10),
(161, 14, 13),
(162, 14, 19),
(163, 14, 22),
(164, 14, 23),
(165, 14, 24),
(166, 14, 25),
(167, 14, 27),
(168, 14, 28),
(169, 15, 3),
(170, 15, 6),
(171, 15, 8),
(172, 15, 10),
(173, 15, 13),
(174, 15, 19),
(175, 15, 22),
(176, 15, 23),
(177, 15, 24),
(178, 15, 25),
(179, 15, 27),
(180, 15, 28),
(181, 16, 3),
(182, 16, 6),
(183, 16, 8),
(184, 16, 10),
(185, 16, 13),
(186, 16, 19),
(187, 16, 22),
(188, 16, 23),
(189, 16, 24),
(190, 16, 25),
(191, 16, 27),
(192, 16, 28),
(193, 17, 3),
(194, 17, 6),
(195, 17, 8),
(196, 17, 10),
(197, 17, 13),
(198, 17, 19),
(199, 17, 22),
(200, 17, 23),
(201, 17, 24),
(202, 17, 25),
(203, 17, 27),
(204, 17, 28),
(205, 18, 3),
(206, 18, 6),
(207, 18, 8),
(208, 18, 10),
(209, 18, 13),
(210, 18, 19),
(211, 18, 22),
(212, 18, 23),
(213, 18, 24),
(214, 18, 25),
(215, 18, 27),
(216, 18, 28),
(217, 19, 3),
(218, 19, 6),
(219, 19, 8),
(220, 19, 10),
(221, 19, 13),
(222, 19, 19),
(223, 19, 22),
(224, 19, 23),
(225, 19, 24),
(226, 19, 25),
(227, 19, 27),
(228, 19, 28),
(229, 20, 3),
(230, 20, 6),
(231, 20, 8),
(232, 20, 10),
(233, 20, 13),
(234, 20, 19),
(235, 20, 22),
(236, 20, 23),
(237, 20, 24),
(238, 20, 25),
(239, 20, 27),
(240, 20, 28),
(241, 21, 3),
(242, 21, 6),
(243, 21, 8),
(244, 21, 10),
(245, 21, 13),
(246, 21, 19),
(247, 21, 22),
(248, 21, 23),
(249, 21, 24),
(250, 21, 25),
(251, 21, 27),
(252, 21, 28),
(253, 22, 3),
(254, 22, 6),
(255, 22, 8),
(256, 22, 10),
(257, 22, 13),
(258, 22, 19),
(259, 22, 22),
(260, 22, 23),
(261, 22, 24),
(262, 22, 25),
(263, 22, 27),
(264, 22, 28),
(265, 23, 3),
(266, 23, 6),
(267, 23, 8),
(268, 23, 10),
(269, 23, 13),
(270, 23, 19),
(271, 23, 22),
(272, 23, 23),
(273, 23, 24),
(274, 23, 25),
(275, 23, 27),
(276, 23, 28),
(277, 24, 3),
(278, 24, 6),
(279, 24, 8),
(280, 24, 10),
(281, 24, 13),
(282, 24, 19),
(283, 24, 22),
(284, 24, 23),
(285, 24, 24),
(286, 24, 25),
(287, 24, 27),
(288, 24, 28),
(289, 25, 3),
(290, 25, 6),
(291, 25, 8),
(292, 25, 10),
(293, 25, 13),
(294, 25, 19),
(295, 25, 22),
(296, 25, 23),
(297, 25, 24),
(298, 25, 25),
(299, 25, 27),
(300, 25, 28),
(301, 26, 3),
(302, 26, 6),
(303, 26, 8),
(304, 26, 10),
(305, 26, 13),
(306, 26, 19),
(307, 26, 22),
(308, 26, 23),
(309, 26, 24),
(310, 26, 25),
(311, 26, 27),
(312, 26, 28),
(313, 27, 3),
(314, 27, 6),
(315, 27, 8),
(316, 27, 10),
(317, 27, 13),
(318, 27, 19),
(319, 27, 22),
(320, 27, 23),
(321, 27, 24),
(322, 27, 25),
(323, 27, 27),
(324, 27, 28),
(325, 28, 3),
(326, 28, 6),
(327, 28, 8),
(328, 28, 10),
(329, 28, 13),
(330, 28, 19),
(331, 28, 22),
(332, 28, 23),
(333, 28, 24),
(334, 28, 25),
(335, 28, 27),
(336, 28, 28),
(337, 29, 3),
(338, 29, 6),
(339, 29, 8),
(340, 29, 10),
(341, 29, 13),
(342, 29, 19),
(343, 29, 22),
(344, 29, 23),
(345, 29, 24),
(346, 29, 25),
(347, 29, 27),
(348, 29, 28),
(349, 30, 3),
(350, 30, 6),
(351, 30, 8),
(352, 30, 10),
(353, 30, 13),
(354, 30, 19),
(355, 30, 22),
(356, 30, 23),
(357, 30, 24),
(358, 30, 25),
(359, 30, 27),
(360, 30, 28),
(361, 31, 3),
(362, 31, 6),
(363, 31, 8),
(364, 31, 10),
(365, 31, 13),
(366, 31, 19),
(367, 31, 22),
(368, 31, 23),
(369, 31, 24),
(370, 31, 25),
(371, 31, 27),
(372, 31, 28),
(373, 32, 3),
(374, 32, 6),
(375, 32, 8),
(376, 32, 10),
(377, 32, 13),
(378, 32, 19),
(379, 32, 22),
(380, 32, 23),
(381, 32, 24),
(382, 32, 25),
(383, 32, 27),
(384, 32, 28),
(385, 33, 3),
(386, 33, 6),
(387, 33, 8),
(388, 33, 10),
(389, 33, 13),
(390, 33, 19),
(391, 33, 22),
(392, 33, 23),
(393, 33, 24),
(394, 33, 25),
(395, 33, 27),
(396, 33, 28),
(397, 34, 3),
(398, 34, 6),
(399, 34, 8),
(400, 34, 10),
(401, 34, 13),
(402, 34, 19),
(403, 34, 22),
(404, 34, 23),
(405, 34, 24),
(406, 34, 25),
(407, 34, 27),
(408, 34, 28),
(409, 35, 3),
(410, 35, 6),
(411, 35, 8),
(412, 35, 10),
(413, 35, 13),
(414, 35, 19),
(415, 35, 22),
(416, 35, 23),
(417, 35, 24),
(418, 35, 25),
(419, 35, 27),
(420, 35, 28),
(421, 36, 3),
(422, 36, 6),
(423, 36, 8),
(424, 36, 10),
(425, 36, 13),
(426, 36, 19),
(427, 36, 22),
(428, 36, 23),
(429, 36, 24),
(430, 36, 25),
(431, 36, 27),
(432, 36, 28),
(433, 37, 3),
(434, 37, 6),
(435, 37, 8),
(436, 37, 10),
(437, 37, 13),
(438, 37, 19),
(439, 37, 22),
(440, 37, 23),
(441, 37, 24),
(442, 37, 25),
(443, 37, 27),
(444, 37, 28),
(445, 38, 3),
(446, 38, 6),
(447, 38, 8),
(448, 38, 10),
(449, 38, 13),
(450, 38, 19),
(451, 38, 22),
(452, 38, 23),
(453, 38, 24),
(454, 38, 25),
(455, 38, 27),
(456, 38, 28),
(457, 39, 3),
(458, 39, 6),
(459, 39, 8),
(460, 39, 10),
(461, 39, 13),
(462, 39, 19),
(463, 39, 22),
(464, 39, 23),
(465, 39, 24),
(466, 39, 25),
(467, 39, 27),
(468, 39, 28),
(469, 40, 3),
(470, 40, 6),
(471, 40, 8),
(472, 40, 10),
(473, 40, 13),
(474, 40, 19),
(475, 40, 22),
(476, 40, 23),
(477, 40, 24),
(478, 40, 25),
(479, 40, 27),
(480, 40, 28),
(481, 41, 3),
(482, 41, 6),
(483, 41, 8),
(484, 41, 10),
(485, 41, 13),
(486, 41, 19),
(487, 41, 22),
(488, 41, 23),
(489, 41, 24),
(490, 41, 25),
(491, 41, 27),
(492, 41, 28),
(493, 42, 3),
(494, 42, 6),
(495, 42, 8),
(496, 42, 10),
(497, 42, 13),
(498, 42, 19),
(499, 42, 22),
(500, 42, 23),
(501, 42, 24),
(502, 42, 25),
(503, 42, 27),
(504, 42, 28),
(505, 43, 3),
(506, 43, 6),
(507, 43, 8),
(508, 43, 10),
(509, 43, 13),
(510, 43, 19),
(511, 43, 22),
(512, 43, 23),
(513, 43, 24),
(514, 43, 25),
(515, 43, 27),
(516, 43, 28),
(517, 44, 3),
(518, 44, 6),
(519, 44, 8),
(520, 44, 10),
(521, 44, 13),
(522, 44, 19),
(523, 44, 22),
(524, 44, 23),
(525, 44, 24),
(526, 44, 25),
(527, 44, 27),
(528, 44, 28),
(529, 45, 3),
(530, 45, 6),
(531, 45, 8),
(532, 45, 10),
(533, 45, 13),
(534, 45, 19),
(535, 45, 22),
(536, 45, 23),
(537, 45, 24),
(538, 45, 25),
(539, 45, 27),
(540, 45, 28),
(541, 46, 3),
(542, 46, 6),
(543, 46, 8),
(544, 46, 10),
(545, 46, 13),
(546, 46, 19),
(547, 46, 22),
(548, 46, 23),
(549, 46, 24),
(550, 46, 25),
(551, 46, 27),
(552, 46, 28),
(553, 47, 3),
(554, 47, 6),
(555, 47, 8),
(556, 47, 10),
(557, 47, 13),
(558, 47, 19),
(559, 47, 22),
(560, 47, 23),
(561, 47, 24),
(562, 47, 25),
(563, 47, 27),
(564, 47, 28),
(565, 48, 3),
(566, 48, 6),
(567, 48, 8),
(568, 48, 10),
(569, 48, 13),
(570, 48, 19),
(571, 48, 22),
(572, 48, 23),
(573, 48, 24),
(574, 48, 25),
(575, 48, 27),
(576, 48, 28),
(577, 49, 3),
(578, 49, 6),
(579, 49, 8),
(580, 49, 10),
(581, 49, 13),
(582, 49, 19),
(583, 49, 22),
(584, 49, 23),
(585, 49, 24),
(586, 49, 25),
(587, 49, 27),
(588, 49, 28),
(589, 50, 3),
(590, 50, 6),
(591, 50, 8),
(592, 50, 10),
(593, 50, 13),
(594, 50, 19),
(595, 50, 22),
(596, 50, 23),
(597, 50, 24),
(598, 50, 25),
(599, 50, 27),
(600, 50, 28),
(601, 51, 3),
(602, 51, 6),
(603, 51, 8),
(604, 51, 10),
(605, 51, 13),
(606, 51, 19),
(607, 51, 22),
(608, 51, 23),
(609, 51, 24),
(610, 51, 25),
(611, 51, 27),
(612, 51, 28),
(613, 52, 3),
(614, 52, 6),
(615, 52, 8),
(616, 52, 10),
(617, 52, 13),
(618, 52, 19),
(619, 52, 22),
(620, 52, 23),
(621, 52, 24),
(622, 52, 25),
(623, 52, 27),
(624, 52, 28),
(625, 53, 3),
(626, 53, 6),
(627, 53, 8),
(628, 53, 10),
(629, 53, 13),
(630, 53, 19),
(631, 53, 22),
(632, 53, 23),
(633, 53, 24),
(634, 53, 25),
(635, 53, 27),
(636, 53, 28),
(637, 54, 3),
(638, 54, 6),
(639, 54, 8),
(640, 54, 10),
(641, 54, 13),
(642, 54, 19),
(643, 54, 22),
(644, 54, 23),
(645, 54, 24),
(646, 54, 25),
(647, 54, 27),
(648, 54, 28),
(649, 55, 3),
(650, 55, 6),
(651, 55, 8),
(652, 55, 10),
(653, 55, 13),
(654, 55, 19),
(655, 55, 22),
(656, 55, 23),
(657, 55, 24),
(658, 55, 25),
(659, 55, 27),
(660, 55, 28),
(661, 56, 3),
(662, 56, 6),
(663, 56, 8),
(664, 56, 10),
(665, 56, 13),
(666, 56, 19),
(667, 56, 22),
(668, 56, 23),
(669, 56, 24),
(670, 56, 25),
(671, 56, 27),
(672, 56, 28),
(673, 57, 3),
(674, 57, 6),
(675, 57, 8),
(676, 57, 10),
(677, 57, 13),
(678, 57, 19),
(679, 57, 22),
(680, 57, 23),
(681, 57, 24),
(682, 57, 25),
(683, 57, 27),
(684, 57, 28),
(685, 58, 3),
(686, 58, 6),
(687, 58, 8),
(688, 58, 10),
(689, 58, 13),
(690, 58, 19),
(691, 58, 22),
(692, 58, 23),
(693, 58, 24),
(694, 58, 25),
(695, 58, 27),
(696, 58, 28),
(697, 59, 3),
(698, 59, 6),
(699, 59, 8),
(700, 59, 10),
(701, 59, 13),
(702, 59, 19),
(703, 59, 22),
(704, 59, 23),
(705, 59, 24),
(706, 59, 25),
(707, 59, 27),
(708, 59, 28),
(709, 60, 3),
(710, 60, 6),
(711, 60, 8),
(712, 60, 10),
(713, 60, 13),
(714, 60, 19),
(715, 60, 22),
(716, 60, 23),
(717, 60, 24),
(718, 60, 25),
(719, 60, 27),
(720, 60, 28);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `hotel_location_id` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `checkin_time` time NOT NULL,
  `checkout_time` time NOT NULL,
  `airport_distance` decimal(18,2) NOT NULL,
  `airport_transportation` decimal(18,2) NOT NULL,
  `pet_friendly` bit(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hotelcol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Table that manages all the information regarding hotel basic info';

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `name`, `hotel_location_id`, `address`, `postal_code`, `phone_number`, `checkin_time`, `checkout_time`, `airport_distance`, `airport_transportation`, `pet_friendly`, `created_at`, `updated_at`, `hotelcol`) VALUES
(1, 'Royalton Hicacos Resort & Spa', 1, 'Carretera Las Morlas Km. 15', '0', '+53 45 668844', '12:00:00', '15:00:00', '35.00', '0.00', b'0', '2019-11-26 16:51:58', '2019-11-26 16:51:58', NULL),
(2, 'One&Only Reethi Rah', 2, 'Reethi Rah, Reethi Rah', '0', '+960 664-8800', '12:00:00', '16:00:00', '150.00', '0.00', b'0', '2019-11-26 16:55:22', '2019-11-26 16:55:22', NULL),
(3, 'Barceló Maya Tropical', 3, 'Carretera Chetumal Puerto Juárez, Riviera Maya', '77750', '+52 984 875 1500', '11:00:00', '15:00:00', '27.00', '0.00', b'0', '2019-11-26 16:58:42', '2019-11-26 16:58:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_amenities`
--

CREATE TABLE `hotel_amenities` (
  `hotel_amenities_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `amenity` varchar(255) NOT NULL,
  `amenity_icon` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='table that manages the relation between the hotel and the ammenities this hotel has';

--
-- Dumping data for table `hotel_amenities`
--

INSERT INTO `hotel_amenities` (`hotel_amenities_id`, `hotel_id`, `amenity`, `amenity_icon`, `created_at`, `updated_at`) VALUES
(1, 1, '24-hour front desk', 'clock.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(2, 1, 'All Inclusive', 'N/A', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(3, 1, 'Basketball court', 'ball.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(4, 1, 'Beauty Saloon', 'hairdryer.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(5, 1, 'Business center', 'screen.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(6, 1, 'Car rental', 'car.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(7, 1, 'Casino', 'money.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(8, 1, 'Children’s playroom', 'kid.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(9, 1, 'Complimentary WiFi in public areas', 'wifi.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(10, 1, 'Concierge desk', 'desk.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(11, 1, 'Conference facilities', 'cinema.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(12, 1, 'Convention center', 'hall.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(13, 1, 'Fitness room', 'dumbel.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(14, 1, 'Golf course', 'golf.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(15, 1, 'Laundry and Valet service', 'iron.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(16, 1, 'Lounge Room', 'couch.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(17, 1, 'Night club', 'light.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(18, 1, 'Pools', 'pool.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(19, 1, 'Private beach', 'umbrella.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(20, 1, 'Sauna', 'water.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(21, 1, 'Shops', 'bag.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(22, 1, 'Spa', 'steam.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(23, 1, 'Tenis courts', 'tenis.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(24, 1, 'Theme restaurants', 'fork.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(25, 1, 'Tours', 'plane.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(26, 2, '24-hour front desk', 'clock.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(27, 2, 'All Inclusive', 'N/A', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(28, 2, 'Basketball court', 'ball.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(29, 2, 'Beauty Saloon', 'hairdryer.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(30, 2, 'Business center', 'screen.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(31, 2, 'Car rental', 'car.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(32, 2, 'Casino', 'money.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(33, 2, 'Children’s playroom', 'kid.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(34, 2, 'Complimentary WiFi in public areas', 'wifi.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(35, 2, 'Concierge desk', 'desk.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(36, 2, 'Conference facilities', 'cinema.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(37, 2, 'Convention center', 'hall.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(38, 2, 'Fitness room', 'dumbel.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(39, 2, 'Golf course', 'golf.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(40, 2, 'Laundry and Valet service', 'iron.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(41, 2, 'Lounge Room', 'couch.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(42, 2, 'Night club', 'light.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(43, 2, 'Pools', 'pool.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(44, 2, 'Private beach', 'umbrella.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(45, 2, 'Sauna', 'water.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(46, 2, 'Shops', 'bag.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(47, 2, 'Spa', 'steam.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(48, 2, 'Tenis courts', 'tenis.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(49, 2, 'Theme restaurants', 'fork.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(50, 2, 'Tours', 'plane.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(51, 3, '24-hour front desk', 'clock.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(52, 3, 'All Inclusive', 'N/A', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(53, 3, 'Basketball court', 'ball.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(54, 3, 'Beauty Saloon', 'hairdryer.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(55, 3, 'Business center', 'screen.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(56, 3, 'Car rental', 'car.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(57, 3, 'Casino', 'money.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(58, 3, 'Children’s playroom', 'kid.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(59, 3, 'Complimentary WiFi in public areas', 'wifi.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(60, 3, 'Concierge desk', 'desk.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(61, 3, 'Conference facilities', 'cinema.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(62, 3, 'Convention center', 'hall.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(63, 3, 'Fitness room', 'dumbel.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(64, 3, 'Golf course', 'golf.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(65, 3, 'Laundry and Valet service', 'iron.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(66, 3, 'Lounge Room', 'couch.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(67, 3, 'Night club', 'light.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(68, 3, 'Pools', 'pool.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(69, 3, 'Private beach', 'umbrella.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(70, 3, 'Sauna', 'water.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(71, 3, 'Shops', 'bag.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(72, 3, 'Spa', 'steam.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(73, 3, 'Tenis courts', 'tenis.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(74, 3, 'Theme restaurants', 'fork.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50'),
(75, 3, 'Tours', 'plane.png', '2019-11-26 17:28:50', '2019-11-26 17:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_images`
--

CREATE TABLE `hotel_images` (
  `hotel_images_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_images`
--

INSERT INTO `hotel_images` (`hotel_images_id`, `hotel_id`, `image_id`) VALUES
(1, 1, 4),
(2, 1, 5),
(3, 1, 6),
(4, 1, 7),
(5, 2, 8),
(6, 2, 9),
(7, 2, 10),
(8, 2, 11),
(9, 3, 12),
(10, 3, 13),
(11, 3, 14),
(12, 3, 15);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_location`
--

CREATE TABLE `hotel_location` (
  `hotel_location_id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `hotel_location` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_location`
--

INSERT INTO `hotel_location` (`hotel_location_id`, `image_id`, `hotel_location`, `created_at`, `updated_at`) VALUES
(3, 1, 'Cuba', '2019-11-27 10:35:09', '2019-11-27 10:35:09'),
(4, 2, 'Maldives', '2019-11-27 10:35:09', '2019-11-27 10:35:09'),
(5, 3, 'Mexico', '2019-11-27 10:35:09', '2019-11-27 10:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `file_name`, `created_at`) VALUES
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
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` char(1) NOT NULL,
  `address` varchar(500) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Table that manages personal information of guests for contact purposes';

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`user_id`, `first_name`, `last_name`, `birthdate`, `gender`, `address`, `postal_code`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 'Krita', 'maharjan', '1994-09-20', 'F', 'Lorem Ipsum', 'R2C4J9', '204-555-2685', '2019-11-27 11:16:04', '2019-11-27 11:16:04'),
(2, 'Katie', 'Peters', '1993-11-26', 'F', 'Lorem Ipsum', 'R2C4J7', '204-555-2685', '2019-11-27 11:16:12', '2019-11-27 11:16:12'),
(3, 'Narain', 'Madabhushi', '1992-08-01', 'M', 'Lorem Ipsum', 'R1C3J8', '204-235-8741', '2019-11-27 11:16:12', '2019-11-27 11:16:12'),
(4, 'Evgheni', 'Sipco', '1995-06-20', 'M', 'Lorem Ipsum', 'R5C4B3', '204-365-7895', '2019-11-27 11:16:12', '2019-11-27 11:16:12'),
(5, 'Juan', 'Jimenez', '1980-06-25', 'M', 'Lorem Ipsum', 'R3C3J9', '204-218-2890', '2019-11-27 11:16:12', '2019-11-27 11:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_number` int(11) NOT NULL,
  `description` text NOT NULL,
  `max_adults` int(11) NOT NULL,
  `max_children` int(11) NOT NULL DEFAULT 0,
  `room_type_id` int(11) NOT NULL,
  `no_bathrooms` int(11) NOT NULL,
  `smoking` bit(1) NOT NULL,
  `featured` bit(1) DEFAULT b'0',
  `room_cost` decimal(18,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Table that manages room information';

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `hotel_id`, `room_number`, `description`, `max_adults`, `max_children`, `room_type_id`, `no_bathrooms`, `smoking`, `featured`, `room_cost`, `created_at`, `updated_at`) VALUES
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
-- Table structure for table `room_images`
--

CREATE TABLE `room_images` (
  `room_images_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_images`
--

INSERT INTO `room_images` (`room_images_id`, `room_id`, `image_id`) VALUES
(1, 1, 16),
(2, 2, 17),
(3, 3, 18),
(4, 4, 19),
(5, 5, 20),
(6, 6, 16),
(7, 7, 17),
(8, 8, 18),
(9, 9, 19),
(10, 10, 20),
(11, 11, 16),
(12, 12, 17),
(13, 13, 18),
(14, 14, 19),
(15, 15, 20),
(16, 16, 16),
(17, 17, 17),
(18, 18, 18),
(19, 19, 19),
(20, 20, 20),
(21, 21, 23),
(22, 22, 24),
(23, 23, 25),
(24, 24, 26),
(25, 25, 27),
(26, 26, 23),
(27, 27, 24),
(28, 28, 25),
(29, 29, 26),
(30, 30, 27),
(31, 31, 23),
(32, 32, 24),
(33, 33, 25),
(34, 34, 26),
(35, 35, 27),
(36, 36, 23),
(37, 37, 24),
(38, 38, 25),
(39, 39, 26),
(40, 40, 27),
(41, 41, 30),
(42, 42, 31),
(43, 43, 32),
(44, 44, 33),
(45, 45, 34),
(46, 46, 30),
(47, 47, 31),
(48, 48, 32),
(49, 49, 33),
(50, 50, 34),
(51, 51, 30),
(52, 52, 31),
(53, 53, 32),
(54, 54, 33),
(55, 55, 34),
(56, 56, 30),
(57, 57, 31),
(58, 58, 32),
(59, 59, 33),
(60, 60, 34);

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `room_type_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`room_type_id`, `type`, `created_at`, `updated_at`) VALUES
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
  `site_setting_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `fk_booking_user` (`user_id`);

--
-- Indexes for table `booking_room`
--
ALTER TABLE `booking_room`
  ADD PRIMARY KEY (`booking_room_id`),
  ADD KEY `fk_booking_room_booking` (`booking_id`),
  ADD KEY `fk_booking_room_room` (`room_id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`features_id`);

--
-- Indexes for table `feature_room`
--
ALTER TABLE `feature_room`
  ADD PRIMARY KEY (`room_amenities_id`),
  ADD KEY `fk_feature_room_room` (`room_id`),
  ADD KEY `fk_feature_room_feature` (`features_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`),
  ADD KEY `fk_hotel_location` (`hotel_location_id`);

--
-- Indexes for table `hotel_amenities`
--
ALTER TABLE `hotel_amenities`
  ADD PRIMARY KEY (`hotel_amenities_id`),
  ADD KEY `hotel_amenities` (`hotel_id`);

--
-- Indexes for table `hotel_images`
--
ALTER TABLE `hotel_images`
  ADD PRIMARY KEY (`hotel_images_id`),
  ADD KEY `fk_hotel_images_hotel` (`hotel_id`),
  ADD KEY `fk_hotel_images_image` (`image_id`);

--
-- Indexes for table `hotel_location`
--
ALTER TABLE `hotel_location`
  ADD PRIMARY KEY (`hotel_location_id`),
  ADD KEY `fk_hotel_location_image` (`image_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `fk_room_hotel` (`hotel_id`),
  ADD KEY `fk_room_room_type` (`room_type_id`);

--
-- Indexes for table `room_images`
--
ALTER TABLE `room_images`
  ADD PRIMARY KEY (`room_images_id`),
  ADD KEY `fk_room_images_room` (`room_id`),
  ADD KEY `fk_room_images_image` (`image_id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`room_type_id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`site_setting_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `features_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `feature_room`
--
ALTER TABLE `feature_room`
  MODIFY `room_amenities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=721;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hotel_amenities`
--
ALTER TABLE `hotel_amenities`
  MODIFY `hotel_amenities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `hotel_images`
--
ALTER TABLE `hotel_images`
  MODIFY `hotel_images_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hotel_location`
--
ALTER TABLE `hotel_location`
  MODIFY `hotel_location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `room_images`
--
ALTER TABLE `room_images`
  MODIFY `room_images_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `room_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_booking_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `booking_room`
--
ALTER TABLE `booking_room`
  ADD CONSTRAINT `fk_booking_room_booking` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`),
  ADD CONSTRAINT `fk_booking_room_room` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`);

--
-- Constraints for table `feature_room`
--
ALTER TABLE `feature_room`
  ADD CONSTRAINT `fk_feature_room_feature` FOREIGN KEY (`features_id`) REFERENCES `features` (`features_id`),
  ADD CONSTRAINT `fk_feature_room_room` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`);

--
-- Constraints for table `hotel_amenities`
--
ALTER TABLE `hotel_amenities`
  ADD CONSTRAINT `hotel_amenities` FOREIGN KEY (`hotel_id`) REFERENCES `hotel` (`hotel_id`);

--
-- Constraints for table `hotel_images`
--
ALTER TABLE `hotel_images`
  ADD CONSTRAINT `fk_hotel_images_hotel` FOREIGN KEY (`hotel_id`) REFERENCES `hotel` (`hotel_id`),
  ADD CONSTRAINT `fk_hotel_images_image` FOREIGN KEY (`image_id`) REFERENCES `images` (`image_id`);

--
-- Constraints for table `hotel_location`
--
ALTER TABLE `hotel_location`
  ADD CONSTRAINT `fk_hotel_location_image` FOREIGN KEY (`image_id`) REFERENCES `images` (`image_id`);

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `fk_person_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `fk_room_hotel` FOREIGN KEY (`hotel_id`) REFERENCES `hotel` (`hotel_id`),
  ADD CONSTRAINT `fk_room_room_type` FOREIGN KEY (`room_type_id`) REFERENCES `room_type` (`room_type_id`);

--
-- Constraints for table `room_images`
--
ALTER TABLE `room_images`
  ADD CONSTRAINT `fk_room_images_image` FOREIGN KEY (`image_id`) REFERENCES `images` (`image_id`),
  ADD CONSTRAINT `fk_room_images_room` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
