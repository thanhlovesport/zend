-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2016 at 11:46 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cates`
--

CREATE TABLE `cates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cates`
--

INSERT INTO `cates` (`id`, `name`, `order`, `keywords`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Áo thun', 1, 'shirt', 1, 'Áo thun thể thao', '2016-08-13 17:00:00', '2016-08-14 17:00:00'),
(2, 'Quần sort', 2, 'Tquan', 1, 'Quần sort chất lượng tốt', '2016-08-07 17:00:00', '2016-08-17 17:00:00'),
(3, 'Ba lô', 3, 'Tbalo', 1, 'Ba lô chất lượng tốt', '2016-08-07 17:00:00', '2016-08-17 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `news_article`
--

CREATE TABLE `news_article` (
  `id` int(11) NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_content` text NOT NULL,
  `status` int(11) NOT NULL,
  `poster_id` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_article`
--

INSERT INTO `news_article` (`id`, `article_title`, `article_content`, `status`, `poster_id`, `modified_by`) VALUES
(1, 'Hơn 800 người chết vì ngập lụt tại Pakistan', 'AP đưa tin những cơn mưa trong mùa mưa năm nay đổ xuống Pakistan với sức mạnh lớn chưa từng có. Đối với vùng tây bắc, đây là trận lụt dữ dội nhất kể từ năm 1929. Trong lúc mực nước của nhiều dòng sông liên tục dâng cao ở phía tây bắc Pakistan, người dân chạy tới những nơi chưa bị nước lũ nhấn chìm, trèo lên cây hoặc bám vào hàng rào để không bị nước cuốn trôi. Đài truyền hình Geo TV phát sóng hình ảnh những ngôi nhà tại thành phố Kalam sụp đổ trước sự tấn công của nước lũ hôm qua.\r\n\r\nBBC cho biết, chính phủ Pakistan ban bố tình trạng khẩn cấp sau khi Cơ quan Khí tượng quốc gia thông báo lượng mưa trong 36 giờ ở vùng tây bắc lên tới 312 mm. Đây là lượng mưa cao nhất trong nhiều thập kỷ. Nước lũ tàn phá đường xá, cầu và mạng lưới viễn thông khiến nỗ lực cứu hộ bị cản trở. Nguy cơ bùng phát dịch bệnh ngày càng tăng do người dân tập trung sơ tán tới các trại cùng bệnh tiêu chảy, sốt và các bệnh về da. Chính quyền nhiều nơi phải ra lệnh cắt điện để ngăn chặn tình trạng người dân bị điện giật trong lúc lội nước.', 1, 1, 1),
(2, 'Khủng bố gửi bom tới cơ quan tình báo Anh', 'AFP đưa tin, cảnh sát được gọi tới hôm 28/7 sau khi một bưu kiện đáng ngờ xuất hiện trong tòa nhà của Cục tình báo đối ngoại Anh. Hôm sau người ta lại phát hiện một bưu kiện chứa bom khác tại một bưu điện ở phía nam thủ đô London. Nó cũng được gửi tới Cục tình báo đối ngoại.\r\n\r\nCảnh sát đã bắt hai nghi phạm ở phía bắc xứ Wales và đưa họ tới London để thẩm vấn hôm nay. Hai nghi phạm, 21 và 52 tuổi, gửi bưu kiện từ hai địa chỉ khác nhau tại thành phố biển Caernarfon ở phía tây bắc xứ Wales vào ngày 30/7. Cảnh sát đang điều tra hai địa chỉ này, song họ không công bố thông tin về những thứ bên trong hai gói bưu kiện.\r\n\r\nTrụ sở của Cục quan tình báo đối ngoại Anh - thường được gọi là MI6 - nằm bên bờ sông Thames. Tòa nhà này từng xuất hiện trong nhiều phim về điệp viên lừng danh James Bond.\r\n\r\n', 0, 1, 1),
(3, 'Mỹ điều tra rò rỉ tài liệu quân sự mật', 'Julian Assange, chủ trang web Wikileaks, bảo vệ việc công bố thông tin và cho biết ông hy vọng nó sẽ gây tranh cãi về cuộc chiến Afghanistan. Assange khẳng định ông đã kiểm chứng các nguồn tin và có danh tính của họ trước khi đăng tải.\r\n\r\nAssange cho biết còn giữ trong tay khoảng 15.000 trang tài liệu mật nữa và đang cân nhắc có công bố hay không. Ông cáo buộc rằng Bộ trưởng Quốc phòng Mỹ Robert Gates chỉ trích Wikileaks để đánh lạc hướng dư luận khỏi cái chết của dân thường Afghanistan.\r\n\r\n"Máu đổ ở Afghanistan và đó là hậu quả của các chính sách của ông Gates và chính quyền (Tổng thống Mỹ) Obama cũng như xung đột chung trong khu vực", Reuters dẫn lời Assange nói.', 1, 3, 2),
(4, 'Canada chặn máy bay ném bom của Nga ', 'Paxton nói rằng vụ đối mặt diễn ra cách vịnh Goose thuộc tỉnh Newfoundland khoảng 460 km, trong vùng đệm của Canada. Ông cho biết thêm từ năm 2007, hàng loạt máy bay Nga bị phi cơ Canada chặn.\r\n\r\nTuy nhiên, giới chức Nga bác bỏ thông tin về bất kỳ vụ đối mặt nào. "Máy bay Nga ở vùng không phận quốc tế. Không có gì xảy ra cả. Quân đội Canada biết rõ về các chuyến bay này", phát ngôn viên sứ quán Nga tại Ottawa tuyên bố.\r\n\r\nNga và Canada đều đang tìm cách mở rộng chủ quyền lãnh thổ của họ ở Bắc cực bởi đây là khu vực có trữ lượng dầu mỏ lớn.', 1, 5, 2),
(5, '23 người chết vì cháy rừng tại Nga', '“Chúng tôi chẳng biết chạy tới chỗ nào. Mọi người gọi số điện thoại khẩn cấp nhưng chẳng có ai trả lời”, Galina Shibanova, một phụ nữ 52 tuổi, nói với Reuters khi bà đứng bên ngoài ngôi nhà cháy rụi trong thị trấn Maslovka, cách thủ đô khoảng 500 km về phía nam.\r\n\r\nCác máy bay phun nước vào các đám cháy, còn lính cứu hỏa và người tình nguyện vẫn đang chiến đấu với lửa tại nhiều nơi ở miền trung.\r\n\r\nIgor Vlasnev, người đứng đầu lực lượng cứu hỏa vùng Voronezh, nhận định tình hình có thể trở nên tồi tệ hơn trong hôm nay do nhiệt độ tiếp tục tăng.\r\n\r\nTổng thống Dmitry Medvedev ra lệnh cho quân đội tham gia hoạt động dập lửa. Ông cũng yêu cầu các bộ trưởng tới những vùng chịu ảnh hưởng bởi hỏa hoạn để đánh giá nhu cầu cứu trợ của người dân.', 0, 3, 1),
(6, 'Các cô dâu Việt trải lòng về cuộc sống ở xứ Hàn', 'Ông xã của chị là một người đàn ông hơn 40 tuổi, dáng người thấp đậm. Cả buổi tiệc, anh không ngồi cạnh vợ hay chăm cho con ăn như một số ông bố Hàn khác mà thường chỉ nói chuyện với mấy người đàn ông cùng nước. Vì thế, nhìn họ không mấy ai biết đó là một cặp vợ chồng.\r\n\r\nTheo lời chị Ngát, chồng chị ít khi quan tâm đến hai cô con gái. Lấy chồng xong, chị ở nhà nội trợ, lo chăm sóc các con. Thường, mỗi tháng, anh để một số tiền nhất định vào "cuốn sổ gia đình" cho vợ chi tiêu. Mỗi khi chị cần mua sắm gì thì cứ tự nhiên lấy nhưng phải thông báo cho chồng biết.\r\n\r\n"Ông ấy vẫn bảo mình là sướng nhất vì toàn được chồng mua mỹ phẩm về cho làm đẹp, mình cũng không có gì phải phàn nàn về cuộc sống ở nhà chồng", chị Ngát thổ lộ. ', 1, 4, 4),
(7, 'Làm giàu ở Mỹ dễ thế sao?', 'Xin được nói ngay rằng tôi không hề có ý định đả phá bạn Anhchu81, chỉ mượn những thông tin mà bạn ấy đưa ra để phân tích vấn đề. Tôi tôn trọng ý chí phấn đấu và tinh thần làm việc của bạn ấy, tuy nhiên cần nói rõ thêm rằng, tôi và hầu hết tất cả các bạn của tôi khi mới qua Mỹ đều làm việc như thế cả.\r\n\r\nBạn Anhchu81 bảo rằng bạn có bằng thạc sĩ tại Mỹ và hiện đang làm việc tại một ngân hàng. Điểm này có thể một số độc giả tại Việt Nam sẽ hiểu sai vấn đề. Ở Mỹ có bằng thạc sĩ là chuyện bình thường (Mỹ vốn không nặng bằng cấp như Việt Nam) và làm việc tại một ngân hàng lại càng bình thường hơn. Quan trọng là bạn ấy làm ở ngân hàng nào và làm việc gì tại đó. ', 1, 2, 1),
(8, 'Thành phố cấm nữ công chức mặc váy ngắn', 'Telegraph cho biết, trong một biên bản ghi nhớ dành cho nhân viên trong bộ máy công quyền, hội đồng thành phố Southampton cảnh báo váy của các nữ công chức "phải có độ dài hợp lý" và họ nhất định không được mặc váy ngắn. Ngoài ra các đấng mày râu cũng phải mặc trang phục nghiêm chỉnh khi tới chỗ làm. Những người vi phạm quy định sẽ bị đuổi về nhà.\r\n\r\nBiên bản ghi nhớ được gửi tới 400 nhân viên xã hội, giáo viên, công chức trẻ và những người làm công việc liên quan tới trẻ em trong thành phố Southampton. Hội đồng thành phố khẳng định ăn mặc nghiêm túc là cách thể hiện sự tôn trọng đối với trẻ em và phụ huynh của chúng.', 1, 1, 2),
(9, 'Một người Trung Quốc tự nhận là bé nhất thế giới', 'Sau khi He Pingping, người đàn ông được công nhận là bé nhất thế giới qua đời hồi tháng 3 ở tuổi 21, Huang Kaiquan trở thành ứng viên nặng ký cho vị trí này, NY Daily News cho hay.\r\n\r\nHuang chỉ cao hơn He 1,5 cm và nặng khoảng 12 kg, tương đương với một em bé ba tuổi. Anh là con thứ hai trong gia đình. Bố mẹ và chị gái của Huang có chiều cao bình thường. Bố mẹ Huang phát hiện cậu con trai phát triển không bình thường khi anh lên 3 tuổi.', 0, 4, 5),
(10, 'Trùm ma túy Mexico bị tiêu diệt', 'uân đội Mexico thực hiện chiến dịch truy quét tại ngoại ô thành phố Guadalajara, phía tây nước này, để săn lùng ông trùm ma túy Ignacio "Nacho" Coronel.\r\n\r\nCoronel cố thủ trong một ngôi nhà trong khi trực thăng quần đảo phía trên và các binh sĩ bao vây toàn bộ khu vực. Một người dân cho biết: "Trực thăng bay rất thấp và chúng tôi được lệnh không ra khỏi nhà, sau đó có nhiều tiếng súng và tiếng nổ lớn".\r\n\r\nKhi bị vây ráp, Coronel nổ súng khiến một binh sĩ thiệt mạng và một người bị thương, rồi sau đó y bị hạ sát tại chỗ. ', 1, 5, 6),
(11, 'Hàn Quốc truy tố kẻ môi giới tuyển vợ', 'Nhân viên mai mối họ Lee này không nói cho khách hàng của anh ta biết về những hạn chế đối với hôn nhân có yếu tố nước ngoài tại Campuchia, trong đó có chuyện phỏng vấn hàng loạt để chọn vợ. Nếu bị kết tội, Lee sẽ bị phạt 2.500 USD, AFP cho hay.\r\n\r\nTheo văn bản của tòa, Lee sắp xếp để một người đàn ông 43 tuổi đến Phnom Penh tháng 9 năm ngoái và đưa 25 cô gái từ vùng nông thôn lên xếp hàng cho ông ta xem mặt. Trước đó, một nhân viên môi giới hôn nhân người Campuchia bị tuyên án 10 năm tù trong vụ này.\r\n\r\nCampuchia ra lệnh cấm kết hôn với người nước ngoài năm 2008 để ngăn nạn buôn người. Nước này lo ngại rằng ngày càng nhiều đàn ông Hàn Quốc tìm đến các cô gái nghèo qua mai mối. Lệnh trên được xóa bỏ sau đó 8 tháng, sau khi Campuchia ra luật mới nhằm ngăn tình trạng đặt hàng cô dâu. ', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`id`, `category_name`) VALUES
(1, 'Xã hội'),
(2, 'Thế giới'),
(3, 'Kinh doanh'),
(4, 'Văn Hóa'),
(5, 'Thể thao'),
(6, 'Pháp luật'),
(7, 'Khoa học'),
(8, 'Vi tính');

-- --------------------------------------------------------

--
-- Table structure for table `news_category_artilce`
--

CREATE TABLE `news_category_artilce` (
  `category_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_category_artilce`
--

INSERT INTO `news_category_artilce` (`category_id`, `article_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(3, 9),
(3, 10),
(3, 11),
(4, 1),
(4, 2),
(4, 4),
(4, 5),
(4, 7),
(5, 1),
(5, 4),
(5, 8),
(5, 9);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `price` float NOT NULL DEFAULT '0',
  `special` tinyint(1) NOT NULL DEFAULT '0',
  `selloff` float NOT NULL DEFAULT '0',
  `publish_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `synopsis` text,
  `author` varchar(200) DEFAULT NULL,
  `content` mediumtext NOT NULL,
  `hits` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL,
  `order` int(11) NOT NULL DEFAULT '10',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `cat_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `picture`, `price`, `special`, `selloff`, `publish_date`, `synopsis`, `author`, `content`, `hits`, `created`, `created_by`, `modified`, `modified_by`, `order`, `status`, `cat_id`) VALUES
(26, 'Giày sân 11 người', 'product_1472619181.jpg', 60, 1, 20, '0000-00-00 00:00:00', NULL, NULL, '', 5, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 14, 1, 69),
(73, 'Áo cầu lông Yonex nam đỏ', 'product_1473654174.jpg', 98000, 1, 31, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 51, 1, 60),
(74, 'Áo cầu lông Yonex nam vàng', 'product_1473654222.jpg', 146000, 1, 16, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 18, 1, 60),
(75, 'Áo cầu lông Yonex nam xanh dương', 'product_1473654260.jpg', 230000, 1, 32, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 56, 1, 60),
(76, 'White Shoes classic', 'product_1473665925.jpg', 380000, 1, 35, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 15, 1, 73),
(77, 'Giày Adidas xanh chuối messi lì', 'product_1473669728.jpg', 356000, 1, 17, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 26, 1, 69),
(62, 'Giày Nike tempo trắng đen', 'product_1473653172.jpg', 455000, 1, 20, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 85, 1, 72),
(63, 'Giày Nike tempo trắng cam', 'product_1473653265.jpg', 388888, 1, 18, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 26, 1, 72),
(64, 'Giày adidas messi xanh lá đen', 'product_1473653387.jpg', 430000, 1, 12000, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 30, 1, 73),
(65, 'Giày adidas messi bạc', 'product_1473653441.jpg', 2600000, 1, 21, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 35, 1, 73),
(66, 'Móc Khóa Arsernal', 'product_1473653714.jpg', 330000, 1, 23, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 19, 1, 34),
(67, 'Móc khóa Chelsea', 'product_1473653758.jpg', 26000, 1, 5, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 34, 1, 34),
(68, 'Móc Khóa MU', 'product_1473653817.jpg', 35000, 1, 12, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 13, 1, 34),
(69, 'Móc khóa  Liverpool', 'product_1473653848.jpg', 40000, 1, 4, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 23, 1, 34),
(70, 'Áo cầu lông Jin Jishen đỏ nam', 'product_1473654040.jpg', 240000, 1, 18, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 15, 1, 60),
(71, 'Áo cầu lông Jin Jishen xanh biển', 'product_1473654079.jpg', 39000, 1, 20, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 19, 1, 60),
(72, 'Áo cầu lông Jin Jishen xanh lá', 'product_1473654137.jpg', 26000, 1, 17, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 40, 1, 60),
(51, 'Giày Nike Mercurial cam dạ quang', 'product_1473650887.jpg', 90000, 1, 10, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 80, 1, 69),
(52, 'Giày Nike teimpo cam xanh', 'product_1473651761.jpg', 300000, 1, 15, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 19, 1, 69),
(53, 'Giày Nike teimpo xanh ngọc', 'product_1473651800.jpg', 3500000, 1, 10, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 26, 1, 69),
(54, 'Giày Span SalaPro xanh dương', 'product_1473652198.jpg', 400000, 1, 30, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 19, 1, 71),
(55, 'Giày Span SalaPro xanh lá', 'product_1473652282.jpg', 365000, 1, 10, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 15, 1, 71),
(56, 'Giày Span step cam', 'product_1473652364.jpg', 360000, 1, 20, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 30, 1, 71),
(57, 'Giày Span super star hồng', 'product_1473652405.jpg', 450000, 1, 18, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 46, 1, 71),
(58, 'Giày Span Step dạ quang', 'product_1473652474.jpg', 360000, 1, 5, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 17, 1, 71),
(59, 'Giày adidas cam xanh cổ điển', 'product_1473652842.jpg', 365000, 1, 18, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 22, 1, 70),
(60, 'Giày Nike tempo xanh biển', 'product_1473652932.jpg', 400000, 1, 30, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 68, 1, 70),
(61, 'Giày Nike F1', 'product_1473653068.jpg', 430000, 1, 35, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 36, 1, 72),
(40, 'Bóng Chuyền Ubete', 'product_1472619519.jpg', 90000, 1, 10000, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 15, 1, 59),
(41, 'Áo Cầu Lông Jinjisen', 'product_1472627016.jpg', 135000, 0, 10, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 16, 0, 60),
(42, 'Quần Cầu Lông Yenex', 'product_1472620023.jpg', 220000, 1, 15000, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 18, 0, 61),
(43, 'Giày Cầu Lông Adidas xanh trắng', 'product_1472624499.jpg', 88000, 1, 1000, '0000-00-00 00:00:00', NULL, NULL, '', 8, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 20, 0, 62),
(44, 'Vợt cầu lông Victor', 'product_1472624612.jpg', 200000, 1, 0, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 39, 1, 63),
(45, 'Hộp Cầu Lông Hải Yến', 'product_1473406162.jpg', 135000, 1, 0, '0000-00-00 00:00:00', NULL, NULL, '', 11, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 40, 1, 64),
(46, 'Đồ bơi nữ zumy', 'product_1472624935.jpg', 12000, 0, 1000, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 42, 1, 66),
(47, 'Quần bơi spedo Nam', 'product_1472625013.jpg', 900000, 1, 80, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 45, 1, 65),
(48, 'Kính bơi Phoenix', 'product_1472625156.jpg', 250000, 1, 20, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 38, 1, 67),
(49, 'Giày Span SalaPro', 'product_1472628134.jpg', 300000, 1, 10, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 46, 1, 71),
(50, 'Giày PumaEvo', 'product_1473406490.jpg', 350000, 1, 20, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 88, 1, 75),
(27, 'Giày Nike CR7', 'product_1472607677.jpg', 80000, 0, 20, '0000-00-00 00:00:00', NULL, NULL, '', 9, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 18, 1, 70),
(28, 'Giày Sân Cỏ Nhân Tạo', 'product_1472617563.jpg', 300000, 0, 18, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 20, 1, 70),
(29, 'Giày Nike', 'product_1472617693.jpg', 350000, 1, 20, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 18, 1, 72),
(30, 'Giày Adidas', 'product_1472617860.jpg', 4000000, 1, 30000, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 19, 1, 73),
(31, 'Giày Puma', 'product_1472617927.jpg', 360000, 1, 10000, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 15, 1, 75),
(32, 'Móc Khóa RealMadrid', 'product_1472618040.jpg', 60000, 1, 10000, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 20, 1, 34),
(33, 'Găng tay cho gôn', 'product_1472618309.jpg', 200000, 1, 19, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 30, 1, 30),
(34, 'Tất, Vớ Cầu thủ', 'product_1472618407.jpg', 360000, 0, 30, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 19, 1, 32),
(35, 'Áo Pitch màu xanh', 'product_1472618519.jpg', 67000, 0, 2000, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 35000, 1, 31),
(36, 'Bó Gối cho cầu thủ', 'product_1472618639.jpg', 80000, 0, 19000, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 15000, 0, 33),
(37, 'Quần áo bóng rổ Vikis', 'product_1472619044.jpg', 80000, 1, 15000, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 18, 1, 38),
(38, 'Giày Bóng Rổ Nikes', 'product_1472619113.jpg', 40000, 0, 12000, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 79, 1, 36),
(39, 'Bóng Rổ Geru Star', 'product_1472619306.jpg', 58000, 0, 9000, '0000-00-00 00:00:00', NULL, NULL, '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 16, 1, 37);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `parents` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL,
  `order` int(11) NOT NULL DEFAULT '10',
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `picture`, `parents`, `created`, `created_by`, `modified`, `modified_by`, `order`, `status`) VALUES
(19, 'Giày Bóng Đá', NULL, 0, '2011-01-15 00:00:00', 1, '2016-08-29 09:56:40', 0, 1, 1),
(2, 'Phụ Kiện Bóng Đá', NULL, 0, '2011-01-15 00:00:00', 1, '2016-08-29 09:57:44', 0, 8, 1),
(3, 'Bóng Rổ', NULL, 0, '2011-01-15 00:00:00', 1, '2016-08-29 09:22:50', 0, 18, 1),
(4, 'Bơi Lội', NULL, 0, '2011-01-15 00:00:00', 1, '2016-08-29 09:30:58', 0, 41, 1),
(5, 'Cầu Lông', NULL, 0, '2011-01-15 00:00:00', 1, '2016-08-29 09:10:55', 0, 29, 1),
(58, 'Quần bóng chuyền', NULL, 7, '2016-08-29 09:53:53', 1, '0000-00-00 00:00:00', 0, 22, 1),
(7, 'Bóng Chuyền', NULL, 0, '2011-01-15 00:00:00', 1, '2016-08-29 09:51:52', 0, 23, 1),
(8, 'Giày Sân Cỏ Nhân Tạo', NULL, 1, '2011-01-15 00:00:00', 1, '2016-08-29 09:19:42', 0, 18, 1),
(10, 'Giày Sân Lớn', NULL, 1, '2011-01-15 00:00:00', 1, '2016-08-29 09:49:42', 0, 15, 1),
(11, 'Giày Futsal', NULL, 1, '2011-01-15 00:00:00', 1, '2016-08-29 09:16:43', 0, 96, 1),
(12, 'Giày Nike', NULL, 1, '2011-01-15 00:00:00', 1, '2016-08-29 09:46:43', 0, 45, 1),
(13, 'Giày Adidas', NULL, 1, '2011-01-15 00:00:00', 1, '2016-08-29 09:03:44', 0, 6, 1),
(75, 'Giày Puma', NULL, 19, '2016-08-31 14:42:28', 9, '0000-00-00 00:00:00', 0, 85, 1),
(15, 'Giày Puma', NULL, 1, '2011-01-15 00:00:00', 1, '2016-08-29 09:18:44', 0, 7, 1),
(62, 'Giày Cầu Lông', NULL, 5, '2016-08-29 09:18:56', 1, '0000-00-00 00:00:00', 0, 34, 1),
(69, 'Giày Sân Lớn', NULL, 19, '2016-08-31 08:38:26', 1, '0000-00-00 00:00:00', 0, 15, 1),
(60, 'Áo Cầu Lông', NULL, 5, '2016-08-29 09:37:55', 1, '0000-00-00 00:00:00', 0, 30, 1),
(61, 'Quần Cầu Lông', NULL, 5, '2016-08-29 09:00:56', 1, '0000-00-00 00:00:00', 0, 32, 1),
(63, 'Vợt Cầu Lông', NULL, 5, '2016-08-29 09:38:56', 1, '0000-00-00 00:00:00', 0, 37, 1),
(64, 'Hộp Cầu Lông', NULL, 5, '2016-08-29 09:56:56', 1, '2016-08-31 13:03:25', 0, 38, 1),
(71, 'Giày Futsal', NULL, 19, '2016-08-31 08:48:27', 1, '0000-00-00 00:00:00', 0, 18, 1),
(72, 'Giày Nike', NULL, 19, '2016-08-31 08:43:28', 1, '0000-00-00 00:00:00', 0, 20, 1),
(73, 'Giày Adidas', NULL, 19, '2016-08-31 08:59:28', 1, '0000-00-00 00:00:00', 0, 21, 1),
(30, 'Găng tay thủ môn', NULL, 2, '2011-01-15 00:00:00', 1, '2016-08-29 09:45:47', 0, 12, 1),
(31, 'Áo Pitch', NULL, 2, '2011-01-15 00:00:00', 1, '2016-08-29 09:23:48', 0, 14, 1),
(32, 'Tất Vớ', NULL, 2, '2011-01-15 00:00:00', 1, '2016-08-29 09:48:46', 0, 13, 1),
(33, 'Bó Gối, Gót', NULL, 2, '2011-01-15 00:00:00', 1, '2016-08-29 09:52:48', 0, 15, 1),
(34, 'Móc Khóa CLB', NULL, 2, '2011-01-15 00:00:00', 1, '2016-08-29 09:03:46', 0, 11, 1),
(70, 'Giày Sân Cỏ Nhân Tạo', NULL, 19, '2016-08-31 08:15:27', 1, '0000-00-00 00:00:00', 0, 19, 1),
(36, 'Giày Bóng Rổ', NULL, 3, '2011-01-15 00:00:00', 1, '2016-08-29 09:33:51', 0, 21, 1),
(37, 'Quả Bóng Rổ', NULL, 3, '2011-01-15 00:00:00', 1, '2016-08-29 09:00:52', 0, 22, 1),
(38, 'Quần Bóng Rổ', NULL, 3, '2011-01-15 00:00:00', 1, '2016-08-29 13:28:15', 0, 20, 1),
(59, 'Quả bóng chuyền', NULL, 7, '2016-08-29 09:39:54', 1, '0000-00-00 00:00:00', 0, 27, 1),
(67, 'Phụ kiện bơi', NULL, 4, '2016-08-29 09:48:59', 1, '2016-08-31 13:20:31', 0, 80, 1),
(68, 'Áo bóng rổ', NULL, 3, '2016-08-29 13:12:16', 1, '0000-00-00 00:00:00', 0, 35, 1),
(66, 'Đồ bơi nữ', NULL, 4, '2016-08-29 09:22:59', 1, '0000-00-00 00:00:00', 0, 40, 1),
(65, 'Đồ bơi nam', NULL, 4, '2016-08-29 09:07:59', 1, '0000-00-00 00:00:00', 0, 43, 1),
(46, 'Áo bóng chuyền', NULL, 7, '2011-02-22 21:38:33', 1, '2016-08-29 09:16:53', 0, 25, 1),
(76, 'Áo Bóng Rổ 3 Lỗ', NULL, 68, '2016-09-09 10:43:54', 9, '0000-00-00 00:00:00', 0, 86, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `user_avatar` varchar(45) DEFAULT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `birthday` date DEFAULT '0000-00-00',
  `register_date` datetime DEFAULT NULL,
  `register_ip` varchar(20) DEFAULT NULL,
  `visited_date` datetime DEFAULT NULL,
  `visited_ip` varchar(20) DEFAULT NULL,
  `active_code` varchar(45) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `sign` text,
  `group_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_avatar`, `password`, `email`, `first_name`, `last_name`, `birthday`, `register_date`, `register_ip`, `visited_date`, `visited_ip`, `active_code`, `status`, `sign`, `group_id`) VALUES
(1, 'ThanhPham', 'user_1471919638.png', 'e10adc3949ba59abbe56e057f20f883e', 'phamngocthanh3009@gmail.com', 'Pham Ngoc', 'Thanh', '1994-09-30', '2010-07-01 00:00:00', '127.0.0.1', '2010-07-01 00:00:00', '127.0.0.1', NULL, 1, '<div>WonderfulLeader</div>', 3),
(2, 'Marsu', 'marsu.jpg', 'e10adc3949ba59abbe56e057f20f883e', 'marsu@zend.vn', 'Phạm Tiến', 'Thịnh', '1983-11-01', '2010-07-01 00:00:00', '127.0.0.1', '2010-07-01 00:00:00', '127.0.0.1', NULL, 1, 'I love Zend Framework', 2),
(3, 'VietRuss', '', 'e10adc3949ba59abbe56e057f20f883e', 'vietruss@zend.vn', 'Nguyễn Việt', 'Thắng', '1981-01-01', '2010-07-01 00:00:00', '127.0.0.1', '2010-07-01 00:00:00', '127.0.0.1', NULL, 1, '<div>&#160;sdfas</div>', 2),
(4, 'tuanha', 'tuanha.jpg', 'e10adc3949ba59abbe56e057f20f883e', 'tuanha@zend.vn', 'Tuan', 'Ha', '1984-11-01', '2010-07-01 00:00:00', '127.0.0.1', '2010-07-01 00:00:00', '127.0.0.1', NULL, 0, 'I love Zend Framework', 3),
(5, 'anhnga2607', 'anhnga2607.jpg', 'e10adc3949ba59abbe56e057f20f883e', 'anhnga2607@zend.vn', 'Anh', 'Nga', '1985-11-01', '2010-07-01 00:00:00', '127.0.0.1', '2010-07-01 00:00:00', '127.0.0.1', NULL, 1, '<div>&#160;sdfe</div>', 3),
(6, 'hoanglong', 'hoanglong.jpg', 'e10adc3949ba59abbe56e057f20f883e', 'hoanglong@gmail.com', 'Hoang', 'Long', '1988-11-01', '2010-07-01 00:00:00', '127.0.0.1', '2010-07-01 00:00:00', '127.0.0.1', NULL, 0, 'I love Zend Framework', 4),
(7, 'nhannghia', 'nhannghia.jpg', 'e10adc3949ba59abbe56e057f20f883e', 'nhannghia@gmail.com', 'Nhan', 'Nghia', '1988-11-01', '2010-07-01 00:00:00', '127.0.0.1', '2010-07-01 00:00:00', '127.0.0.1', NULL, 0, 'I love Zend Framework', 4),
(8, 'thanhphong', 'thanhphong.jpg', 'e10adc3949ba59abbe56e057f20f883e', 'thanhphong@gmail.com', 'Thanh', 'Phong', '1988-11-01', '2010-07-01 00:00:00', '127.0.0.1', '2010-07-01 00:00:00', '127.0.0.1', NULL, 0, 'I love Zend Framework', 4),
(9, 'antran', 'antran.jpg', 'e10adc3949ba59abbe56e057f20f883e', 'antran@gmail.com', 'An', 'Tran', '1988-11-01', '2010-07-01 00:00:00', '127.0.0.1', '2010-07-01 00:00:00', '127.0.0.1', NULL, 1, 'I love Zend Framework', 4),
(10, 'havu', 'havu.jpg', 'e10adc3949ba59abbe56e057f20f883e', 'havu@gmail.com', 'Ha', 'Vu', '1988-11-01', '2010-07-01 00:00:00', '127.0.0.1', '2010-07-01 00:00:00', '127.0.0.1', NULL, 0, 'I love Zend Framework', 4),
(11, 'thanhtam', 'thanhtam.jpg', 'e10adc3949ba59abbe56e057f20f883e', 'thanhtam@gmail.com', 'Thanh', 'Tam', '1988-11-01', '2010-07-01 00:00:00', '127.0.0.1', '2010-07-01 00:00:00', '127.0.0.1', NULL, 1, 'I love Zend Framework', 4),
(12, 'huyhiep', 'huyhiep.jpg', 'e10adc3949ba59abbe56e057f20f883e', 'huyhiep@gmail.com', 'Huy', 'Hiep', '1988-11-01', '2010-07-01 00:00:00', '127.0.0.1', '2010-07-01 00:00:00', '127.0.0.1', NULL, 1, 'I love Zend Framework', 4),
(13, 'longnguyen', 'longnguyen.jpg', 'e10adc3949ba59abbe56e057f20f883e', 'longnguyen@gmail.com', 'Nguyen', 'Long', '1988-11-01', '2010-07-01 00:00:00', '127.0.0.1', '2010-07-01 00:00:00', '127.0.0.1', NULL, 1, 'I love Zend Framework', 4),
(14, 'trieukinh', 'trieukinh.jpg', 'e10adc3949ba59abbe56e057f20f883e', 'trieukinh@gmail.com', 'Trieu', 'Kinh', '1988-11-01', '2010-07-01 00:00:00', '127.0.0.1', '2010-07-01 00:00:00', '127.0.0.1', NULL, 1, 'I love Zend Framework', 4),
(16, 'HoangNguyen', NULL, 'e10adc3949ba59abbe56e057f20f883e', 'hongan@gmail.com', 'Pham', 'Thanh', '1994-09-30', '2016-08-22 00:00:00', '::1', NULL, NULL, NULL, 1, '<div>&#160;khinguoiloncodon</div>', 2),
(17, 'VanTu', NULL, 'e10adc3949ba59abbe56e057f20f883e', 'letu@gmail.com', 'Le', 'Tu', '1998-10-18', '2016-08-22 00:00:00', '::1', NULL, NULL, NULL, 1, '<div>&#160;Trai tim luon bung chay</div>', 4),
(20, 'quynhtran', '', 'e10adc3949ba59abbe56e057f20f883e', 'quynhtran@gmail.com', 'quynh', 'tran', '1994-09-30', '2016-09-06 00:00:00', '::1', NULL, NULL, NULL, 1, '<div>A good manager of company</div>', 3),
(22, 'quynhnga', '', 'e10adc3949ba59abbe56e057f20f883e', 'quynhnga@gmail.com', 'quynh', 'nga', '1994-09-30', '2016-09-06 00:00:00', '::1', NULL, NULL, NULL, 1, '<div>sdfasdfaefoajdfauefhauefaef</div>', 15),
(23, 'HongAnh', 'user_1473156762.jpg', 'e10adc3949ba59abbe56e057f20f883e', 'honganh@gmail.com', 'hong', 'anh', '1994-09-30', '2016-09-06 00:00:00', '::1', NULL, NULL, NULL, 1, '<div>honganhabcdefghijk</div>', 3),
(21, 'haanh', '', 'e10adc3949ba59abbe56e057f20f883e', 'haanh@gmail.com', 'ha', 'anh', '1995-06-28', '2016-09-06 00:00:00', '::1', NULL, NULL, NULL, 1, '<div>A excellent staff of company</div>', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `group_name` varchar(100) DEFAULT NULL,
  `type` varchar(20) DEFAULT 'none',
  `avatar` varchar(45) DEFAULT NULL,
  `ranking` varchar(45) DEFAULT NULL,
  `group_acp` tinyint(1) DEFAULT '0',
  `group_default` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) DEFAULT '0',
  `modified` datetime DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0',
  `order` int(11) DEFAULT '99'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id`, `group_name`, `type`, `avatar`, `ranking`, `group_acp`, `group_default`, `created`, `created_by`, `modified`, `modified_by`, `status`, `order`) VALUES
(4, 'Member', 'none', 'member.gif', 'rMember.png', 1, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 0, 4),
(3, 'Manager', 'none', 'manager.gif', 'rManager.png', 1, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 6),
(40, 'Germany', 'none', '', '', 1, 0, '2016-08-11 00:00:00', 1, '0000-00-00 00:00:00', 0, 1, 12),
(15, 'TP.Ho Chi Minh', 'none', NULL, NULL, 1, 0, '2010-07-12 00:00:00', 1, '0000-00-00 00:00:00', 0, 1, 5),
(16, 'Huế', 'none', NULL, NULL, 1, 0, '2010-07-12 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 8),
(39, 'England', 'none', '', '', 1, 0, '2016-08-11 00:00:00', 1, '0000-00-00 00:00:00', 0, 1, 22),
(19, 'Cần Thơ', 'none', NULL, NULL, 0, 0, '2010-07-12 00:00:00', 1, '0000-00-00 00:00:00', 0, 1, 10),
(20, 'Vũng Tàu', 'none', NULL, NULL, 0, 0, '2010-07-12 00:00:00', 1, '0000-00-00 00:00:00', 0, 1, 10),
(21, 'Khánh Hòa', 'none', '', '', 0, 0, '2010-07-12 00:00:00', 1, '2016-08-10 00:00:00', 1, 1, 10),
(23, 'Vĩnh Long', 'none', NULL, NULL, 0, 0, '2010-07-12 00:00:00', 1, '0000-00-00 00:00:00', 0, 1, 10),
(24, 'An Giang', 'none', NULL, NULL, 0, 0, '2010-07-12 00:00:00', 1, '0000-00-00 00:00:00', 0, 1, 10),
(26, 'Binh Thuan my country', 'none', 'binhthuan.png', 'rbinhthuan.png', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 10),
(27, 'DaLat', 'none', 'dalat.png', 'rdalat.png', 1, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 11),
(28, 'Vinh', 'none', 'vip.png', 'rvip.png', 1, 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 1, 15),
(29, 'America', 'none', '', '', 0, 0, '2016-08-09 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 20),
(30, 'Drahma', 'none', '', '', 0, 0, '2016-08-09 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 25),
(41, 'AC', 'none', '', '', 1, 1, '2016-08-15 00:00:00', 1, '0000-00-00 00:00:00', 0, 1, 27),
(37, 'Real Madrid B', 'none', '', '', 0, 0, '2016-08-10 00:00:00', 1, '2016-08-10 00:00:00', 1, 1, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cates`
--
ALTER TABLE `cates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cates_name_unique` (`name`);

--
-- Indexes for table `news_article`
--
ALTER TABLE `news_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_category_artilce`
--
ALTER TABLE `news_category_artilce`
  ADD PRIMARY KEY (`category_id`,`article_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cates`
--
ALTER TABLE `cates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news_article`
--
ALTER TABLE `news_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
