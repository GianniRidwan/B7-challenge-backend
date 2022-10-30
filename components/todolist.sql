SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `todolist` (
  `id` int(11) NOT NULL,
  `title` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `task` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `duration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


ALTER TABLE `todolist`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `todolist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;