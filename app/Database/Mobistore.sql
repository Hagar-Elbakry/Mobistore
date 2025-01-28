
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- insert data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Samsung', 'Samsung Galaxy 10', 152.00, 'http://localhost/Projects/Mobistore/public/assets/products/1.png', '2025-01-28 18:13:57'), -- NOW()
(2, 'Redmi', 'Redmi Note 7', 122.00, 'http://localhost/Projects/Mobistore/public/assets/products/2.png', '2025-01-28 18:14:57'),
(3, 'Redmi', 'Redmi Note 6', 122.00, 'http://localhost/Projects/Mobistore/public/assets/products/3.png', '2025-01-28 18:14:57'),
(4, 'Redmi', 'Redmi Note 5', 122.00, 'http://localhost/Projects/Mobistore/public/assets/products/4.png', '2025-01-28 18:14:57'),
(5, 'Redmi', 'Redmi Note 4', 122.00, 'http://localhost/Projects/Mobistore/public/assets/products/5.png', '2025-01-28 18:15:57'),
(6, 'Redmi', 'Redmi Note 8', 122.00, 'http://localhost/Projects/Mobistore/public/assets/products/6.png', '2025-01-28 18:15:57'),
(7, 'Redmi', 'Redmi Note 9', 122.00, 'http://localhost/Projects/Mobistore/public/assets/products/8.png', '2025-01-28 18:15:57'),
(8, 'Redmi', 'Redmi Note', 122.00, 'http://localhost/Projects/Mobistore/public/assets/products/10.png', '2025-01-28 18:15:57'),
(9, 'Samsung', 'Samsung Galaxy S6', 152.00, 'http://localhost/Projects/Mobistore/public/assets/products/11.png', '2025-01-28 18:15:57'),
(10, 'Samsung', 'Samsung Galaxy S7', 152.00, 'http://localhost/Projects/Mobistore/public/assets/products/12.png', '2025-01-28 18:16:57'),
(11, 'Apple', 'Apple iPhone 5', 152.00, 'http://localhost/Projects/Mobistore/public/assets/products/13.png', '2025-01-28 18:16:57'),
(12, 'Apple', 'Apple iPhone 6', 152.00, 'http://localhost/Projects/Mobistore/public/assets/products/14.png', '2025-01-28 18:16:57'),
(13, 'Apple', 'Apple iPhone 7', 152.00, 'http://localhost/Projects/Mobistore/public/assets/products/15.png', '2025-01-28 18:16:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- insert data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `pwd`, `email`, `register_date`) VALUES
(1, 'Hagar', 'Elbakry', 'hagar123', 'hagar@gmail.com', '2025-01-28 18:16:17'),
(2, 'Seif', 'Ahmed', 'seif123', 'seif@gmail.com', '2025-01-28 18:16:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);


ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

