-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2024 at 12:55 PM
-- Server version: 5.7.44
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_sebha_day6`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_year` int(11) NOT NULL,
  `genre_id` bigint(20) UNSIGNED DEFAULT NULL,
  `available_quantity` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `isbn`, `publish_year`, `genre_id`, `available_quantity`, `description`, `file`, `created_at`, `updated_at`) VALUES
(1, 'The Mystery of the Blue Train', 'Agatha Christie', '9780007119349', 1928, 3, 10, 'A Hercule Poirot mystery set on a luxurious train through France.', 'blue_train.png', '2022-01-15 07:00:00', '2022-01-20 08:00:00'),
(2, 'The Silent World', 'Jacques Cousteau', '9780008130012', 1953, 5, 5, 'A pioneering exploration of ocean life by the famous marine explorer.', 'silent_world.png', '2022-02-01 08:00:00', '2022-02-05 09:00:00'),
(3, 'Cosmos', 'Carl Sagan', '9780345331359', 1980, 9, 7, 'A journey through the universe, exploring the cosmos and our place within it.', 'cosmos.png', '2022-02-20 06:30:00', '2022-02-25 07:30:00'),
(4, '1984', 'George Orwell', '9780451524935', 1949, 2, 12, 'A dystopian novel about totalitarianism and surveillance.', '1984.png', '2022-03-10 05:00:00', '2022-03-15 06:00:00'),
(5, 'To Kill a Mockingbird', 'Harper Lee', '9780060935467', 1960, 1, 8, 'A novel about racial injustice in the Deep South.', 'mockingbird.png', '2022-04-05 07:00:00', '2022-04-10 08:00:00'),
(6, 'The Great Gatsby', 'F. Scott Fitzgerald', '9780743273565', 1925, 4, 9, 'A tale of love, wealth, and betrayal set in the Roaring Twenties.', 'gatsby.png', '2022-05-15 08:00:00', '2022-05-20 09:00:00'),
(7, 'Pride and Prejudice', 'Jane Austen', '9780679783268', 1813, 6, 6, 'A romantic novel about manners and marriage in early 19th-century England.', 'pride_prejudice.png', '2022-06-01 06:00:00', '2022-06-06 07:00:00'),
(8, 'The Hobbit', 'J.R.R. Tolkien', '9780547928227', 1937, 7, 7, 'A fantasy adventure story about Bilbo Baggins, a hobbit who joins a quest to reclaim a treasure.', 'hobbit.png', '2022-06-20 05:00:00', '2022-06-25 06:00:00'),
(9, 'Moby Dick', 'Herman Melville', '9780142437247', 1851, 8, 4, 'An epic sea adventure centered around the hunt for a giant whale.', 'moby_dick.png', '2022-07-05 07:00:00', '2022-07-10 08:00:00'),
(10, 'A Brief History of Time', 'Stephen Hawking', '9780553380163', 1988, 9, 11, 'An exploration of the universe and its mysteries, written by a renowned physicist.', 'brief_history.png', '2022-07-15 08:00:00', '2022-07-20 09:00:00'),
(11, 'War and Peace', 'Leo Tolstoy', '9781400079988', 1869, 1, 5, 'A historical novel set against the backdrop of the Napoleonic Wars.', 'war_peace.png', '2022-08-01 06:00:00', '2022-08-06 07:00:00'),
(12, 'The Catcher in the Rye', 'J.D. Salinger', '9780316769488', 1951, 2, 8, 'A novel about teenage rebellion and alienation.', 'catcher_rye.png', '2022-08-20 05:00:00', '2022-08-25 06:00:00'),
(13, 'The Alchemist', 'Paulo Coelho', '9780062315007', 1988, 6, 10, 'A philosophical story about following one\'s dreams and finding one\'s destiny.', 'alchemist.png', '2022-09-05 07:00:00', '2022-09-10 08:00:00'),
(14, 'Brave New World', 'Aldous Huxley', '9780060850524', 1932, 2, 7, 'A dystopian novel about a technologically advanced future where happiness is artificially generated.', 'brave_new_world.png', '2022-09-15 08:00:00', '2022-09-20 09:00:00'),
(15, 'Wuthering Heights', 'Emily Bronte', '9780141439556', 1847, 4, 6, 'A gothic novel about love and revenge on the Yorkshire moors.', 'wuthering_heights.png', '2022-10-01 06:00:00', '2022-10-06 07:00:00'),
(16, 'Crime and Punishment', 'Fyodor Dostoevsky', '9780143058144', 1866, 2, 5, 'A psychological novel exploring the moral dilemmas of crime.', 'crime_punishment.png', '2022-10-20 05:00:00', '2022-10-25 06:00:00'),
(17, 'The Lord of the Rings', 'J.R.R. Tolkien', '9780544003415', 1954, 7, 12, 'An epic fantasy about the quest to destroy a powerful ring.', 'lord_rings.png', '2022-11-05 07:00:00', '2022-11-10 08:00:00'),
(18, 'Frankenstein', 'Mary Shelley', '9780486282114', 1818, 3, 7, 'A novel about a scientist who creates a monster.', 'frankenstein.png', '2022-11-15 08:00:00', '2022-11-20 09:00:00'),
(19, 'The Grapes of Wrath', 'John Steinbeck', '9780143039433', 1939, 1, 9, 'A novel about a family\'s migration during the Great Depression.', 'grapes_wrath.png', '2022-12-01 06:00:00', '2022-12-06 07:00:00'),
(20, 'The Diary of a Young Girl', 'Anne Frank', '9780553296983', 1947, 8, 8, 'The diary of Anne Frank, a Jewish girl hiding during WWII.', 'anne_frank_diary.png', '2022-12-20 05:00:00', '2022-12-25 06:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Historical Fiction', NULL, NULL),
(2, 'Dystopian Fiction', NULL, NULL),
(3, 'Mystery', NULL, NULL),
(4, 'Classic Romance', NULL, NULL),
(5, 'Non-Fiction Oceanography', NULL, NULL),
(6, 'Philosophical Fiction', NULL, NULL),
(7, 'Fantasy', NULL, NULL),
(8, 'Classic Adventure', NULL, NULL),
(9, 'Science and Cosmology', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `rental_date` date NOT NULL,
  `due_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'available',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`id`, `user_id`, `book_id`, `rental_date`, `due_date`, `return_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 8, '2024-01-10', '2024-01-11', NULL, 'rented', NULL, NULL),
(2, 3, 16, '2023-12-27', '2024-01-25', NULL, 'rented', NULL, NULL),
(3, 3, 9, '2023-12-27', '2024-01-26', NULL, 'rented', NULL, NULL),
(4, 3, 5, '2024-01-04', '2024-01-15', NULL, 'rented', NULL, NULL),
(5, 4, 16, '2024-01-19', '2024-01-20', NULL, 'rented', NULL, NULL),
(6, 4, 4, '2024-01-04', '2024-01-23', '2024-02-03', 'returned', NULL, NULL),
(7, 4, 4, '2023-12-26', '2024-01-17', NULL, 'rented', NULL, NULL),
(8, 4, 11, '2024-01-15', '2024-01-24', '2024-01-18', 'returned', NULL, NULL),
(9, 5, 16, '2023-12-25', '2024-01-06', '2024-01-04', 'returned', NULL, NULL),
(10, 2, 10, '2024-01-18', '2024-02-03', NULL, 'rented', NULL, NULL),
(11, 3, 20, '2024-01-11', '2024-02-02', NULL, 'rented', NULL, NULL),
(12, 3, 12, '2024-01-03', '2024-01-04', '2024-01-17', 'returned', NULL, NULL),
(13, 3, 4, '2024-01-18', '2024-01-21', NULL, 'rented', NULL, NULL),
(14, 4, 11, '2024-01-04', '2024-01-05', '2024-01-07', 'returned', NULL, NULL),
(15, 4, 19, '2024-01-05', '2024-01-06', '2024-01-20', 'returned', NULL, NULL),
(16, 4, 6, '2024-01-23', '2024-01-29', NULL, 'rented', NULL, NULL),
(17, 4, 20, '2023-12-27', '2024-01-15', '2024-01-11', 'returned', NULL, NULL),
(18, 5, 16, '2024-01-20', '2024-02-18', NULL, 'rented', NULL, NULL),
(19, 5, 19, '2024-01-21', '2024-01-25', NULL, 'rented', NULL, NULL),
(20, 5, 9, '2023-12-27', '2024-01-18', '2023-12-31', 'returned', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Lysanne Hodkiewicz', 'tlarson@example.net', NULL, '$2y$10$rLH8xHu.HzGyF0Xzibo4K.GgqsruxLh0fuXqBjt4C3KY5Uj07THDG', 'user', NULL, NULL, NULL),
(3, 'Mrs. Zaria Sauer', 'kozey.neil@example.net', NULL, '$2y$10$YRZRMeson.YcNsE58YCHD.jkd.cj6biG7Tb/b63oT05XCuKcutgye', 'user', NULL, NULL, NULL),
(4, 'Miller Toy', 'koch.talon@example.org', NULL, '$2y$10$.PXcEIH6AXQL6N2R3gZ3XuOoNHKOLzWti46ecy88OZPmM.VgoWe7q', 'user', NULL, NULL, NULL),
(5, 'Mrs. Angela Glover I', 'cameron.yundt@example.net', NULL, '$2y$10$NLofuM2TQFM/XhXCbm.80ueYWukbU0I/7YgsdBC/krt7bnEXxb6LS', 'user', NULL, NULL, NULL),
(6, 'Carleton Kihn', 'niko.macejkovic@example.net', NULL, '$2y$10$toCk0vl.7steYjqsv3Ih7OsNY2yLSuXDmbFz6tXCHFn4/qZIJD6SC', 'admin', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `books_isbn_unique` (`isbn`),
  ADD KEY `books_genre_id_foreign` (`genre_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
