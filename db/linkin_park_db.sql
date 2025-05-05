-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 05, 2025 at 05:22 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linkin_park_db`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logged_in_users`
--

CREATE TABLE `logged_in_users` (
  `sessionId` varchar(100) NOT NULL,
  `userId` int(11) NOT NULL,
  `lastUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `status` enum('pending','delivered','cancelled') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total`, `description`, `status`, `created_at`) VALUES
(1, 7, 224.96, 'Hybrid Theory, ilość: 1, cena: 49.99 zł | Meteora, ilość: 2, cena: 119.98 zł | Minutes to Midnight, ilość: 1, cena: 54.99 zł', 'delivered', '2025-01-14 10:22:41'),
(2, 7, 149.97, 'Hybrid Theory, ilość: 3, cena: 149.97 zł', 'cancelled', '2025-01-14 12:19:55'),
(3, 7, 494.91, 'Hybrid Theory, ilość: 3, cena: 149.97 zł | Meteora, ilość: 3, cena: 179.97 zł | Minutes to Midnight, ilość: 3, cena: 164.97 zł', 'delivered', '2025-01-14 17:33:31'),
(4, 9, 164.97, 'Hybrid Theory, ilość: 1, cena: 49.99 zł | Meteora, ilość: 1, cena: 59.99 zł | Minutes to Midnight, ilość: 1, cena: 54.99 zł', 'cancelled', '2025-01-14 21:24:15'),
(5, 7, 389.97, 'Koszulka Gas Mask, ilość: 3, cena: 389.97 zł', 'pending', '2025-01-15 19:23:53'),
(6, 7, 844.93, 'Koszulka Gas Mask, ilość: 4, cena: 519.96 zł | Bluza World Tour, ilość: 1, cena: 209.99 zł | Minutes to Midnight, ilość: 1, cena: 54.99 zł | Meteora, ilość: 1, cena: 59.99 zł', 'pending', '2025-01-15 20:08:55'),
(7, 9, 339.98, 'Bluza World Tour, ilość: 1, cena: 209.99 zł | Koszulka Gas Mask, ilość: 1, cena: 129.99 zł', 'pending', '2025-01-15 20:20:00'),
(8, 9, 720.00, 'Bluza Hybrid Theory - biała, ilość: 3, cena: 720.00 zł', 'pending', '2025-01-15 20:42:00'),
(9, 9, 435.00, 'Koszulka Logo - zielona, ilość: 1, cena: 120.00 zł | Bluza Hybrid Theory - biała, ilość: 1, cena: 240.00 zł | Czapka Logo - Czarna, ilość: 1, cena: 75.00 zł', 'pending', '2025-01-15 21:07:28'),
(10, 7, 660.00, 'Czapka Logo - Czarna, ilość: 4, cena: 300.00 zł | Koszulka Logo - zielona, ilość: 3, cena: 360.00 zł', 'pending', '2025-01-16 12:05:34');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `ref_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `artist`, `price`, `ref_name`) VALUES
(1, 'Hybrid Theory', 'Linkin Park', 49.99, 'Hybrid_Theory'),
(2, 'Meteora', 'Linkin Park', 59.99, 'Meteora'),
(3, 'Minutes to Midnight', 'Linkin Park', 54.99, 'Minutes_to_Midnight'),
(4, 'Bluza World Tour', 'Linkin Park', 209.99, 'Bluza_World_Tour'),
(5, 'Koszulka Gas Mask', 'Linkin Park', 129.99, 'Koszulka_Gas_Mask'),
(6, 'Czapka Logo - Czarna', 'Linkin Park', 75.00, 'Czapka_Logo_czarna'),
(7, 'Koszulka Logo - zielona', 'Linkin Park', 120.00, 'Koszulka_Logo_zielona'),
(8, 'Bluza Hybrid Theory - biała', 'Linkin Park', 240.00, 'Bluza_Hybrid_Theory_biala');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userName`, `fullName`, `email`, `passwd`, `status`, `date`) VALUES
(1, 'kp', 'Kubuś Puchatek', 'kubus.puchatek@gmail.com', '$2y$10$iX8RXUt7E1eKUAUa6BqeMe6XJ9sdX01a1lNeL15BMjAGpOq.nYuJ6', 1, '2024-12-05 13:31:15'),
(2, 'Krzysiek', 'Krzysiek Stumilowy', 'krzysiek@stumilowy.pl', '$2y$10$Q0woStnipdHMJaT2yfM.aeAvUWfuj9trBvF3RpzKv6o7KhBAV8g/2', 1, '2024-12-05 13:34:07'),
(3, 'test', 'Jan Testowy', 't@test.pl', '$2y$10$uHMDpsoSczLye/t9wdBKRuwS7EI1hC4OGxNv8BuaY9W/2dmUqkhoG', 1, '2024-12-18 19:52:28'),
(4, 'admin', 'Adam Minkowski', 'admin.admin@admin.pl', '$2y$10$cOiJQNQ83SSGm5Y9qtiQB.dD06yAsu5SMSNESDr4pKRahBZNAAJ42', 2, '2025-01-14 22:21:35');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `logged_in_users`
--
ALTER TABLE `logged_in_users`
  ADD PRIMARY KEY (`sessionId`);

--
-- Indeksy dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userName` (`userName`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
