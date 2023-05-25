-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 10:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animaniac`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Books'),
(2, 'Figures'),
(3, 'Clothing');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_name`) VALUES
(1, 'Adventure'),
(2, 'Action'),
(3, 'Comedy'),
(4, 'Drama'),
(5, 'Fantasy'),
(6, 'Horror'),
(7, 'Romance'),
(8, 'Sci-fi');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sold` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_img`, `description`, `price`, `category_id`, `sold`) VALUES
(1, 'SSSS.Dynazenon Mujina Non-Scale Figure', 'res/products/figure1.png', 'From Union Creative comes a non-scale figure of Kaiju Eugenicist Mujina from SSSS.Dynazenon! Her original character art from the anime has been brought to life as a 10.6\" tall figure that captures her posing in her familiar outfit with a hand on her hip. ', 9999.00, 2, 0),
(2, 'Moderoid SSSS.Dynazenon Dynazenon', 'res/products/figure2.png', 'From Good Smile Company’s Moderoid line of plastic models that are fun to build and display comes the titular mech Dynazenon from the popular anime SSSS.Dynazenon! The model features seven color-separated runners and pre-painted parts, so it’ll look amazi', 9499.00, 2, 0),
(3, 'Uchusen Bessatsu SSSS.Dynazenon', 'res/products/figure3.png', 'From the tag team of Tsuburaya Productions and TRIGGER comes a mook that serves as the perfect compendium to their new generation robot anime SSSS.Dynazenon! Spanning 95 pages, Uchusen Bessatsu SSSS.Dynazenon features must-see content spanning the entire ', 500.00, 1, 0),
(4, 'LISTEN FLAVOR Hatsune Miku Jersey Hoodie', 'res/products/figure4.png', 'Introducing a collaboration between Harajuku fashion brand LISTEN FLAVOR and Vocaloid Hatsune Miku! Available in a unisex free size in either black or emerald, this 100% polyester hoodie has a two-tone design with turquoise accents, a double zipper up the', 1000.00, 3, 0),
(5, 'Nendoroid Death Note L 2.0 (Re-run)', 'res/products/figure5.png', 'The world-renowned detective in search of Kira returns to the world of Nendoroid!\r\nFrom the popular anime series Death Note comes L looking as disheveled and languid as ever in chibi form. An all-new updated version over the previous release, he comes wit', 2520.45, 2, 0),
(6, 'To Love-Ru Darkness Tearju Lunatique: Swimsuit Ver', 'res/products/figure6.png', 'Tearju is ready for a day at the beach in a tiny two-piece bikini!\r\nFrom the popular anime To Love-Ru Darkness comes a 1/4 scale figure of Tearju Lunatique in a bikini! Based on artwork by Kentaro Yabuki, sculptor Akabeko has faithfully captured all of Ma', 15850.69, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_genre`
--

CREATE TABLE `product_genre` (
  `product_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_genre`
--

INSERT INTO `product_genre` (`product_id`, `genre_id`) VALUES
(1, 1),
(1, 2),
(1, 7),
(2, 1),
(2, 2),
(2, 7),
(3, 1),
(3, 2),
(3, 7),
(4, 6),
(5, 1),
(5, 4),
(5, 5),
(6, 2),
(6, 3),
(6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `product_id`, `user_id`, `rating`, `comment`) VALUES
(1, 1, 1, 4.5, 'Great product! Highly recommended.'),
(2, 2, 2, 3.8, 'Decent quality, but could be better.'),
(3, 1, 3, 5, 'Excellent product. I love it!'),
(4, 3, 4, 4.2, 'Good value for the price.'),
(5, 2, 1, 4, 'Satisfied with the purchase.'),
(6, 3, 3, 3.5, 'Average product, nothing special.'),
(7, 4, 1, 5, 'Eut gid ba'),
(8, 4, 2, 3, NULL),
(9, 4, 3, 5, NULL),
(10, 4, 2, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`) VALUES
(1, 'JohnDoe', 'johndoe@example.com'),
(2, 'JaneSmith', 'janesmith@example.com'),
(3, 'DavidBrown', 'davidbrown@example.com'),
(4, 'EmilyJohnson', 'emilyjohnson@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `user_id`, `product_id`, `added_date`) VALUES
(3, 1, 1, '2023-05-21 06:52:01'),
(8, 1, 3, '2023-05-21 07:48:06'),
(10, 1, 2, '2023-05-25 06:52:37'),
(11, 1, 4, '2023-05-25 06:52:37'),
(14, 1, 5, '2023-05-01 03:46:59'),
(15, 1, 6, '2023-04-12 00:39:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_genre`
--
ALTER TABLE `product_genre`
  ADD PRIMARY KEY (`product_id`,`genre_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_genre`
--
ALTER TABLE `product_genre`
  ADD CONSTRAINT `product_genre_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `product_genre_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
