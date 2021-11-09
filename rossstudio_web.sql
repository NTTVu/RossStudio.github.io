-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 09, 2021 lúc 01:15 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `rossstudio_web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `tenadmin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chitietdonhang`
--

CREATE TABLE `tbl_chitietdonhang` (
  `id_donhang` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(7, 'JACKET', 1),
(8, 'HOODIE', 2),
(9, 'TEE', 3),
(10, 'SHIRT', 4),
(11, 'PANT', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `id_donhang` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `sdt` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`id_dangky`, `tenkhachhang`, `email`, `matkhau`, `diachi`, `sdt`) VALUES
(21, 'bqxrick', 'buiquanghuy@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'thị trấn phước an', '0793673208'),
(22, 'quanghuy', 'buiquanghuy@abc', '25f9e794323b453885f5181f1b624d0b', 'aaaa', '01555445'),
(23, 'quanghuy123', 'buiquanghuy@gmail.com', '3ea1d7abbca2b03d2ef5b295244eeebb', 'dăk lăk', '0793673208'),
(24, 'nhan', 'nhanlol@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'dăk lăk', '0123456789'),
(25, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(26, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(27, 'longhai47', 'longhai47@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'phước an', '012345679');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `noidung` text NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `giasp`, `soluong`, `hinhanh`, `noidung`, `id_danhmuc`) VALUES
(5, 'TEE BASIC WHITE', '350000', 1, '1634052815_ao2.jpg', '', 9),
(6, 'TEE BUTERFLAG', '350000', 1, '1633699179_tee3.jpg', '', 9),
(9, 'HOODIE FULL ZIP', '350000', 1, '1634052788_Hoodie.jpg', '', 8),
(10, 'JACKET CLASSIC ', '400000', 1, '1634052778_jacket.jpg', '', 7),
(11, 'JACKET FULL ZIP', '400000', 1, '1634052767_jacket2.jpg', '', 7),
(12, 'SHIRT PLAID BLOUSE', '400000', 1, '1634052756_somi.jpg', '', 10),
(13, 'SHIRT NEW LOGO', '400000', 2, '1634052745_somi1.jpg', 'Chất liệu vải 100% cotton\r\nHoạ tiết được in chuyển nhiệt có độ tinh xảo, sắc nét cao\r\nÁo cài khuy, cổ chữ V\r\n', 10),
(14, 'PANT CHUTE TRACK', '400000', 1, '1634052732_pant.jpg', '', 11);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_chitietdonhang`
--
ALTER TABLE `tbl_chitietdonhang`
  ADD KEY `id_donhang` (`id_donhang`,`id_sanpham`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `id_khachhang` (`id_khachhang`);

--
-- Chỉ mục cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_chitietdonhang`
--
ALTER TABLE `tbl_chitietdonhang`
  ADD CONSTRAINT `tbl_chitietdonhang_ibfk_1` FOREIGN KEY (`id_donhang`) REFERENCES `tbl_donhang` (`id_donhang`),
  ADD CONSTRAINT `tbl_chitietdonhang_ibfk_2` FOREIGN KEY (`id_sanpham`) REFERENCES `tbl_sanpham` (`id_sanpham`);

--
-- Các ràng buộc cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD CONSTRAINT `tbl_donhang_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `tbl_khachhang` (`id_dangky`);

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `tbl_sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `tbl_danhmuc` (`id_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
