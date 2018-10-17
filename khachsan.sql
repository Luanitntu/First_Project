-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2018 at 05:57 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khachsan`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `mahoadon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manhanvien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayinhoadon` date NOT NULL,
  `tongtien` int(11) NOT NULL,
  `maloaiphong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maphong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`mahoadon`, `manhanvien`, `sodienthoai`, `ngayinhoadon`, `tongtien`, `maloaiphong`, `maphong`) VALUES
('hd01', 'nv01', '01678188295', '2018-07-15', 900, 'cc', 'p02');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mahoadon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manhanvien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mahoadon`, `manhanvien`, `sodienthoai`, `tongtien`) VALUES
('hd01', 'nv01', '01678188295', 900);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `sodienthoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkhachhang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayden` date NOT NULL,
  `ngaydi` date NOT NULL,
  `nguoilon` int(11) NOT NULL,
  `treem` int(11) NOT NULL,
  `maphong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`sodienthoai`, `tenkhachhang`, `ngayden`, `ngaydi`, `nguoilon`, `treem`, `maphong`) VALUES
('01678188295', 'nguyen duc tien', '2018-07-13', '2018-07-15', 2, 3, 'p02');

-- --------------------------------------------------------

--
-- Table structure for table `loaiphong`
--

CREATE TABLE `loaiphong` (
  `maloaiphong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenloaiphong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaiphong`
--

INSERT INTO `loaiphong` (`maloaiphong`, `tenloaiphong`) VALUES
('bt', 'Bình Thường'),
('cc', 'Cao Cấp'),
('VIP', 'V.I.P');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_09_081806_dangnhap', 1),
(4, '2018_07_11_130330_nhanvien', 2),
(5, '2018_07_11_131759_khachhang', 2),
(6, '2018_07_11_132116_hoadon', 2),
(7, '2018_07_12_061748_loaiphong', 2),
(8, '2018_07_12_062042_phong', 2),
(9, '2018_07_12_062829_chitiethoadon', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manhanvien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tennhanvien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luongnhanvien` int(11) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`manhanvien`, `tennhanvien`, `luongnhanvien`, `ngaysinh`, `gioitinh`) VALUES
('nv01', 'nguyen truong', 120, '1997-08-30', 0),
('nv02', 'Nguyễn Thành Luân', 200, '1997-07-15', 0),
('nv03', 'Nguyễn Đức Tiễn', 300, '1997-07-10', 0),
('nv04', 'Nguyễn Thị Thị', 250, '1996-07-09', 1),
('nv05', 'Lê Thị Hoa', 300, '1995-07-24', 0),
('nv06', 'Đinh Thị Bông', 280, '1994-07-31', 1);

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
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `id` int(100) NOT NULL,
  `maphong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sophong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giaphong` int(11) NOT NULL,
  `maloaiphong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urlPhong` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mieuta` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`id`, `maphong`, `sophong`, `giaphong`, `maloaiphong`, `urlPhong`, `mieuta`, `num`) VALUES
(1, 'p01', 'Phòng 101', 100, 'bt', 'room-1.jpg', 'Trẻ em và giường phụ: Trẻ em dưới 9 tuổi được ngủ miễn phí nếu dùng giường....', 1),
(2, 'p02', 'Phòng 202', 200, 'cc', 'room-4.jpg', 'Thiết bị cao cấp mới mua đem lại sự tiện nghi và thoải mái trong căn phòng của bạn, ban chỉ việc xách quần áo đến và ở', 2),
(3, 'p03', 'Phòng 102', 120, 'bt', 'room-6.jpg', 'Trẻ em và giường phụ: Trẻ em dưới 9 tuổi được ngủ miễn phí nếu dùng giường....', 1),
(4, 'p04', 'Phòng 201', 215, 'cc', 'room-1.jpg', 'Trẻ em và giường phụ: Trẻ em dưới 9 tuổi được ngủ miễn phí nếu dùng giường....', 2),
(5, 'p05', 'Phòng 301', 200, 'cc', 'room-3.jpg', 'Mỗi phòng nghỉ tại khách sạn này đều được trang bị máy điều hòa, TV màn hình phẳng và ấm đun nước. Một số phòng đi kèm khu vực ghế ngồi thuận tiện cho khách. Tất cả các phòng có phòng tắm riêng với dép và đồ vệ sinh cá nhân miễn phí.', 2),
(6, 'p06', 'Phòng 302', 310, 'VIP', 'room-4.jpg', 'The room designed luxury with Neoclassicism style and modern equipment, window towards the city will bring a new feel for you', 3),
(7, 'p07', 'Phòng 303', 120, 'cc', 'room-5.jpg', 'Theo quy định, một phòng khách sạn tối đa chỉ dành cho 02người lớn và 02 trẻ em dưới 12 tuổi,  hoặcba người lớn, mỗi phòng chỉ được kê một giường phụ.  Giá của giường phụ là 120usd/đêm bao gồm buffet sáng.', 2),
(8, 'p08', 'Phòng 401', 300, 'VIP', 'room-6.jpg', 'Theo quy định, một phòng khách sạn tối đa chỉ dành cho 02người lớn và 02 trẻ em dưới 12 tuổi,  hoặcba người lớn, mỗi phòng chỉ được kê một giường phụ.  Giá của giường phụ là 3usd/đêm bao gồm buffet sáng.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'as@gmail.com', '$2y$10$Yp8kkqCtIHan5gk1eQbcOOKGoLPfE8SNkcAj2NDoAS8xBSg8fh6.i', NULL, NULL, NULL),
(2, 'luan', 'luan@gmail.com', '1', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`mahoadon`),
  ADD KEY `manhanvien` (`manhanvien`),
  ADD KEY `sodienthoai` (`sodienthoai`),
  ADD KEY `maloaiphong` (`maloaiphong`),
  ADD KEY `maphong` (`maphong`),
  ADD KEY `mahoadon` (`mahoadon`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahoadon`),
  ADD KEY `manhanvien` (`manhanvien`),
  ADD KEY `sodienthoai` (`sodienthoai`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`sodienthoai`),
  ADD KEY `maphong` (`maphong`);

--
-- Indexes for table `loaiphong`
--
ALTER TABLE `loaiphong`
  ADD PRIMARY KEY (`maloaiphong`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manhanvien`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`maphong`),
  ADD KEY `maloaiphong` (`maloaiphong`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`manhanvien`) REFERENCES `nhanvien` (`manhanvien`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`mahoadon`) REFERENCES `hoadon` (`mahoadon`),
  ADD CONSTRAINT `chitiethoadon_ibfk_3` FOREIGN KEY (`sodienthoai`) REFERENCES `khachhang` (`sodienthoai`),
  ADD CONSTRAINT `chitiethoadon_ibfk_4` FOREIGN KEY (`maloaiphong`) REFERENCES `loaiphong` (`maloaiphong`),
  ADD CONSTRAINT `chitiethoadon_ibfk_5` FOREIGN KEY (`maphong`) REFERENCES `phong` (`maphong`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`sodienthoai`) REFERENCES `khachhang` (`sodienthoai`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`manhanvien`) REFERENCES `nhanvien` (`manhanvien`);

--
-- Constraints for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`maphong`) REFERENCES `phong` (`maphong`);

--
-- Constraints for table `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `phong_ibfk_1` FOREIGN KEY (`maloaiphong`) REFERENCES `loaiphong` (`maloaiphong`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
