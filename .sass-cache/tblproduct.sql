--Database Product Table for Shopping Cart

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `TSproducts` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `TSproducts` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 't-shirt homme blanc', 'TS-tsBlc', 'product-images/t-shirtBlanc.jpg', 15.00),
(2, 't-shirt homme noir', 'TS-tsNr', 'product-images/t-shirtNoir.jpg', 15.00),
(3, 't-shirt femme blanc', 'TS-tsFBlc', 'product-images/t-shirtFBlanc.jpg', 15.00),
(4, 't-shirt femme noir', 'TS-tsFNr', 'product-images/t-shirtFNoir.jpg', 15.00),
(5, 'sweat homme blanc', 'SW-tsBlc', 'product-images/sweatBlanc.jpg', 15.00),
(6, 'sweat homme noir', 'SW-tsNr', 'product-images/sweatNoir.jpg', 15.00),
(7, 'sweat femme blanc', 'SW-tsFBlc', 'product-images/sweatFBlanc.jpg', 15.00),
(8, 'sweat femme noir', 'SW-tsFNr', 'product-images/sweatFNoir.jpg', 15.00),
(9, 'mugTsBlc', 'mug-blc', 'product-images/mugBlanc.jpg', 10.00),
(10, 'mugTsNr', 'mug-noir', 'product-images/mugNoir.jpg', 10.00);



--
-- Indexes for table `tblproduct`
--
ALTER TABLE `TSproducts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `TSproducts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;