
CREATE TABLE `album` (
  `id` int(100) NOT NULL,
  `tenalbum` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=2730 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `album`
--

INSERT INTO `album` (`id`, `tenalbum`, `image`) VALUES
(2, 'Tổng hợp', 'image/281235.jpg'),
(3, 'New Year Party 2022', 'image/24283563.jpg'),
(4, 'Những Bài Hát Nghe Khi Đi Phượt', 'image/19884928.jpg'),
(5, 'Mình Sẽ Mạnh Mẽ Yêu Nhau', 'image/20942104.jpg'),
(6, 'Người Lạ Ơi Người Lạ', 'image/22143245.jpg'),
(7, 'Halloween Party 2021', 'image/23866955.jpg'),
(8, 'Nhạc Nhẹ Cho Quán Cafe', 'image/2.jpg'),
(9, 'Chuyện Tình Của Mùa Đông', 'image/3.jpg'),
(10, 'Một Chút Hoài Niệm Của Thanh Xuân', 'image/5.jpg'),
(11, 'Tuyển Tập Những Bài Hát Bất Hủ', 'image/a2.jpg'),
(12, 'Mùa Đông Cô Đơn', 'image/6.jpg'),
(13, 'Anh Chưa Từng Yêu', 'image/9.jpg'),
(14, 'Đánh Thức Màn Đêm', 'image/4.jpg'),
(15, 'Crush À ! Em Yêu Anh', 'image/7.jpg'),
(16, 'Mùa Đông Của Anh', 'image/1.jpg'),
(17, 'Âm Nhạc Cuối Ngày', 'image/10.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baihat`
--

CREATE TABLE `baihat` (
  `id` int(100) NOT NULL,
  `tenbaihat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luotnghe` int(100) NOT NULL,
  `likes` int(100) NOT NULL DEFAULT 0,
  `idalbum` int(10) NOT NULL,
  `idcasi` int(10) NOT NULL,
  `idchude` int(10) NOT NULL,
  `ngaydang` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB AVG_ROW_LENGTH=744 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baihat`
--

INSERT INTO `baihat` (`id`, `tenbaihat`, `path`, `image`, `luotnghe`, `likes`, `idalbum`, `idcasi`, `idchude`, `ngaydang`) VALUES
(1, 'Hongkong1', 'nhac/hongkong1.mp3', 'image/anh16.jpg', 784, 0, 2, 2, 3, '2022-01-14 18:58:57'),
(2, 'Bé lên ba', 'nhac/belenba.mp3', 'image/23222192.jpg', 76, 0, 2, 2, 3, '2022-01-14 17:09:49'),
(3, 'Thu cuối', 'nhac/thucuoi.mp3', 'image/22247057.jpg', 7, 0, 2, 2, 3, '2022-01-14 17:10:17'),
(4, 'Lạc trôi', 'nhac/lactroi.mp3', 'image/22247057.jpg', 25, 0, 2, 2, 3, '2022-01-14 17:11:03'),
(5, 'Rực Rỡ Tháng Năm', 'nhac/rucrothangnam.mp3', 'image/166.jpg', 0, 0, 2, 6, 7, '2022-01-14 17:04:23'),
(6, 'Buông Đôi Tay Nhau Ra', 'nhac/buongdoitaynhaura.mp3', 'image/23310335.jpg', 3, 0, 5, 3, 3, '2022-01-14 17:22:13'),
(7, 'Âm Thầm Bên Em', 'nhac/amthambenem.mp3', 'image/23257481.jpg', 0, 0, 5, 3, 3, '2022-01-14 17:22:54'),
(8, 'Chắc Ai Đó Sẽ Về', 'nhac/chacaidoseve.mp3', 'image/23257481.jpg', 0, 0, 5, 2, 3, '2022-01-14 17:23:38'),
(9, 'Dưới Những Cơn Mưa', 'nhac/duoinhungconmua.mp3', 'image/140354.jpg', 0, 0, 6, 4, 3, '2022-01-14 17:26:22'),
(10, 'Tình Yêu Chắp Vá', 'nhac/tinhyeuchapva.mp3', 'image/140354.jpg', 2, 0, 6, 4, 3, '2022-01-14 17:26:48'),
(11, 'Vô Hình Trong Tim Em', 'nhac/vohinhtrongem.mp3', 'image/140354.jpg', 0, 0, 5, 4, 3, '2022-01-14 17:29:48'),
(12, 'Mãi Mãi Bên Nhau', 'nhac/maimaibennhau.mp3', 'image/167.jpg', 0, 0, 5, 2, 3, '2022-01-14 17:33:14'),
(13, 'Firework', 'nhac/hongkong1.mp3', 'image/19969907.jpg', 0, 0, 3, 5, 7, '2022-01-14 17:35:24'),
(14, '  Take Me Away', 'nhac/hongkong1.mp3', 'image/19884928.jpg', 0, 0, 4, 2, 7, '2022-01-14 17:37:59'),
(15, 'Việt Nam, Đi, Hôn Và Yêu', 'nhac/hongkong1.mp3', 'image/166.jpg', 0, 0, 4, 6, 7, '2022-01-14 17:39:58'),
(16, 'Em (Rap Version)', 'nhac/hongkong1.mp3', 'image/20235022.jpg', 0, 0, 5, 5, 6, '2022-01-14 17:41:30'),
(17, 'Ta Đã Yêu Chưa Vậy', 'nhac/hongkong1.mp3', 'image/22334189.jpg', 0, 0, 5, 5, 6, '2022-01-14 17:42:44'),
(18, 'Quán Cà Phê Ký Ức', 'nhac/hongkong1.mp3', 'image/23639501.jpg', 2, 0, 2, 6, 4, '2022-01-14 17:45:35'),
(19, 'Cà Phê Đắng Vị Cô Đơn', 'nhac/hongkong1.mp3', 'image/20673871.jpg', 0, 0, 4, 2, 4, '2022-01-14 17:46:30'),
(20, 'Taki Taki', 'nhac/hongkong1.mp3', 'image/12693.jpg', 1, 0, 3, 7, 5, '2022-01-14 17:49:49'),
(21, 'Mad Love (Single)', 'nhac/hongkong1.mp3', 'image/23745473.jpg', 5, 0, 7, 7, 5, '2022-01-14 17:50:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `casi`
--

CREATE TABLE `casi` (
  `id` int(100) NOT NULL,
  `tencasi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieusu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=3276 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `casi`
--

INSERT INTO `casi` (`id`, `tencasi`, `image`, `tieusu`) VALUES
(2, 'Noo Phước Thịnh', 'image/167.jpg', 'Tên thật: Nguyễn Phước Thịnh<br>\r\nNghệ danh: Noo Phước Thịnh<br>\r\nNickname: Noo<br>\r\nNgày sinh: 18/12/1988<br>\r\nQuê quán: Sài Gòn<br>\r\nQuốc gia: Việt Nam<br>\r\nGiải thưởng:<br>\r\nNoo Phước Thịnh là quán quân của chương trình The Remix (Hòa âm ánh sáng) mùa thứ 2 (2016).<br>\r\nThông tin thêm:<br>\r\nTrước khi trở thành ca sỹ, Noo Phước Thịnh (Noo) là một người mẫu sở hữu khuôn mặt điển trai, nụ cười tươi tắn và tính cách thân thiện dễ gần,được giới teen yêu thích với mật độ xuất hiện nhiều trên các trang báo học đường. <br>\r\nNhưng thật bất ngờ, ngay cả với Noo cũng không nghĩ là một ngày nào đó mình sẽ trở thành ca sỹ, thật tình cờ khi anh được người quản lý hiện tại là Tuấn Khanh phát hiện ra giọng hát của mình trong một show quảng cáo khi vô tình nghe Noo hát, anh nhận thấy rằng Noo rất có năng khiếu và có triển vọng trở thành ca sỹ. <br>\r\nChính cuộc gặp gỡ này đã đưa Noo bắt đầu bước chân vào lĩnh vực ca hát.Noo, mặc dù rất yêu nhạc Trịnh nhưng anh lại hướng đến dòng nhạc trẻ dành cho giới teen, đó chính là cách để Noo đến được với khán giả nhanh nhất và thực tế chứng minh anh đã lựa chọn đúng và điều đó được khẳng định bằng những ca khúc được giới trẻ ưa chuộng'),
(3, 'Sơn Tùng M-TP', 'image/a2578edbc.jpg', 'Tên thật: Nguyễn Thanh Tùng<br>\r\nNghệ danh: Sơn Tùng M-TP<br>\r\nNgày sinh: 05-07-1994<br>\r\nQuê quán: Thái Bình<br>\r\nQuốc gia: Việt Nam<br>\r\nGiải thưởng:<br>\r\n_ Năm 2012 : Bài hát \"Cơn Mưa Ngang Qua\" đoạt giải tháng trong chương trình Bài Hát Yêu Thích.<br>\r\n_ Năm 2014: Bài hát \"Em Của Ngày Hôm Qua\" đoạt giải tháng trong chương trình Bài Hát Yêu Thích. Giải thưởng \"Diễn viên trẻ triển vọng\" tại Cánh Diều Vàng qua bộ phim Chàng Trai Năm Ấy.<br>\r\n_ Năm 2015: Giải Làn Sóng Xanh top 10 nhạc sĩ được yêu thích nhất.<br>\r\nThông tin thêm:<br>\r\nSơn Tùng sớm bị hip-hop hớp hồn giống như bao bạn bè đồng trang lứa. Và với niềm đam mê này, Sơn Tùng quyết tâm khăn gói tới Hà Nội học hỏi thêm về hip-hop. Ngoài khả năng ca hát, Sơn Tùng còn có khả năng sáng tác, chơi piano và vũ đạo tốt. Với hàng loạt các bài hát được giới trẻ yêu thích như \"Cơn Mưa Ngang Qua\", \"Em Của Ngày Hôm Qua\", Sơn Tùng nhanh chóng trở thành một \"hiện tượng\" của Showbiz. <br>\r\nNăm 2014, Sơn Tùng lần đầu chạm ngõ điện ảnh với vai diễn Đình Phong trong bộ phim bom tấn \"Chàng Trai Năm Ấy\", ngay sau đó vai diễn đã mang lại cho anh giải thưởng \"Diễn viên trẻ triển vọng\" tại Cánh Diều Vàng 2014. <br>\r\nNăm 2016, Sơn Tùng cho ra mắt ca khúc \"Chúng Ta Không Thuộc Về Nhau\" và ca khúc này một lần nữa làm khuynh đảo các bảng sếp hạng và truyền thông, tạo nên một loạt những làn sóng trái chiều từ dư luận.'),
(4, 'Mr.Siro', 'image/3339_photo.jpg', 'Tên thật: Vương Quốc Tuân<br>\r\nNghệ danh: Mr.Siro<br>\r\nNickname: Mr Siro<br>\r\nNgày sinh: 18-11-1982<br>\r\nQuê quán: Hồ Chí Minh<br>\r\nQuốc gia: Đang cập nhật<br>\r\nGiải thưởng:<br>\r\nĐang cập nhật<br>\r\nThông tin thêm:<br>\r\nKhởi đầu thành công với ca khúc online \"Từ ngày còn đi du học\" từ đó sự nghiệp của anh gắn liền với những bài hát trên mạng. Mr Siro đã có sở thích là viết nhạc, thu âm và vô tình được bạn bè đăng tải những ca khúc đó lên mạng. Kể từ đó, anh thường xuyên tham gia các cuộc thi ca hát online.<br>\r\nLà một nhạc sỹ có khả năng tự trình bày những ca khúc do chính anh sáng tác được khán giả đặc biệt yêu thích. Từ năm 2008, Mr. Siro sớm có được những bài hit đầu tay như Em, Melancholy, Mây, Giấc Mơ Của Anh, I miss you từ năm cho đến gần đây (2012, 2013, 2014) Mr. Siro lập HIT liên tục với những sáng tác liên tiếp đứng đầu các bảng xếp hạng trong suốt nhiều tuần liền như Lắng Nghe Nước Mắt, Bức Tranh Từ Nước Mắt, Không Cần Thêm Một Ai Nữa (ft BigDaddy), Em Đã Sai Vì Em Tin (trình bày: Bích Phương). \r\n\r\nNổi tiếng với những hit chất chứa tâm trạng, có một chút gì đó từng trải trong ca từ, những bài hát của anh không chỉ được lòng giới trẻ ngay từ lần nghe đầu tiên mà còn để lại dư âm sâu đậm. Âm nhạc Mr. Siro luôn nhẹ nhàng, nhưng lại da diết và mang cảm giác day dứt, ám ảnh. Năm 2012 anh tự thành lập công ty EGG Production, ngoài việc thành công gần như tất cả những bài hát đứng đầu các bảng xếp hạng lớn.'),
(5, 'JustaTee', 'image/20229817.jpg', 'Tên thật: Nguyễn Thanh Tuấn<br>\r\nNghệ danh: JustaTee<br>\r\nNgày sinh: 01-11-1991<br>\r\nQuê quán: Hà Nội<br>\r\nQuốc gia: Đang cập nhật<br>\r\nGiải thưởng:<br>\r\nĐang cập nhật<br>\r\nThông tin thêm:<br>\r\nJustaTee bắt đầu sáng tác từ năm 2004 với nickname JayTee, sau này được đổi thành JustaTee.\r\nGiai đoạn 2005 - 2008, anh là rapper/Singer/Music producer trong nhóm Click Click Boom - nhóm nhạc rap đa thành viên đầu tiên tại Việt Nam. \r\nNăm 2008, JustaTee bắt đầu đánh dấu sự nghiệp R&B.<br>\r\nNăm 2010, JustaTee cùng Lil\' Knight đồng sáng lập nên LadyKillah với sự điều hành của Mr.J (Jan Saker) làm nên website R&B/Hiphop lớn mạnh nhất hiện nay.\r\n20/08/2010: Ra mắt mini album JUST-A-TEE đánh dấu tên tuổi mình trên nền nhạc R&B của nước nhà. \r\nJustaTee hiện đang là Music Producer của LadyKillah Proz - Nhóm các Rappers/Singers hàng đầu VN như Lil\'Knight, Emily, Mr.T, Yanbi,Mr.A, Bueno, Phúc Bồ, TmT, Big Daddy...Hiện nay, ngoài hoạt động nghệ thuật, JustaTee còn đeo đuổi công việc kinh doanh riêng với quán cà phê của riêng anh.\r\nNhững bài hát mang lại tên tuổi JustaTee: Người Lạ Nơi Cuối Đường, Imma HeartBreaker, K Part 2, Không Tin Một Sớm Mai Bình Yên, Call Me The Liar...'),
(6, 'Mỹ Tâm', 'image/166.jpg', 'Tên thật: Phan Thị Mỹ Tâm<br>\r\nNghệ danh: Mỹ Tâm<br>\r\nNickname: họa mi tóc nâu<br>\r\nNgày sinh: 16/01/1981<br>\r\nQuê quán: Đà Nẵng<br>\r\nQuốc gia: Việt Nam<br>\r\nGiải thưởng:<br>\r\n- Tháng 4/1998, Mỹ Tâm đoạt giải nhất hội thi đơn ca quận Tân Bình và quận 6.<br>\r\n- Tháng 11/1998, Mỹ Tâm đoạt giải nhất Giọng ca vàng báo Mực Tím.<br>\r\n- 3 giải Cống hiến cho \"Ca Sĩ Của Năm\", 1 giải Âm nhạc châu Âu của MTV, 11 lần liên tiếp nhận giải \"Ca Sĩ được yêu thích nhất\" và 3 năm liên tiếp nhận giải \"Gương Mặt Của Năm\" của Giải thưởng Làn Sóng Xanh.<br>\r\n- Năm 2014, tại sự kiện Top Asia Corporate Ball 2014 ở Kuala Lumpur, Mỹ Tâm thắng giải \"Huyền thoại Âm nhạc châu Á\" và là \"Nghệ sĩ có album bán chạy nhất lãnh thổ\" do Liên đoàn Công nghiệp ghi âm quốc tế (IFPI) công nhận.<br>\r\nThông tin thêm:<br>\r\n- Mỹ Tâm là con út trong một gia đình có tám anh chị em, ngay từ nhỏ cô đã thể hiện mình có khả năng về âm nhạc.<br>\r\n- Từ năm 1997 - 2001, cô học hệ trung cấp chính quy (4 năm) khoa thanh nhạc Nhạc viện Thành phố Hồ Chí Minh và tốt nghiệp thủ khoa.<br>\r\n- Từ 1997 - 1998, Mỹ Tâm tham gia liên tiếp những hội diễn văn nghệ, các cuộc thi giọng hát hay của quận, của thành phố. <br>\r\n- Tháng 01/1999, Mỹ Tâm trở thành ca sĩ độc quyền của Vafaco. Bản thu âm đầu tiên của Tâm được thực hiện dưới sự chỉ đạo của nhạc sĩ Nguyễn Hà. Ca khúc \"Nhé Anh\" vừa là bài tập thu thanh đầu đời vừa là bài hát đánh dấu một Mỹ Tâm đầy ấn tượng.<br>\r\n- Sau đó, Mỹ Tâm liên tục tung ra các sản phẩm HIT, những show diễn lớn và nhanh chóng trở thành một ngôi sao sáng trong làng âm nhạc Việt Nam. <br>\r\n- Ngoài âm nhạc, Mỹ Tâm còn được biết đến với một thương hiệu thời trang riêng My Time và Mỹ Tâm Foundation là quỹ từ thiện mà Mỹ Tâm Entertainment cùng với các Fan của cô lập nên nhằm giúp đỡ những hoàn cảnh khó khăn, các em nhỏ mồ côi.<br>\r\n* Các đĩa nhạc đã phát hành của Mỹ Tâm:<br>\r\nMãi Yêu (2001)<br>\r\nĐâu Chỉ Riêng Em (2002)<br>\r\nYesterday & Now (2003)<br>\r\nHoàng Hôn Thức Giấc (2005)<br>\r\nDường Như Ta Đã (2006)<br>\r\nVút Bay (2006)<br>\r\nTrở Lại (2008)<br>\r\nNhịp Đập (2008)<br>\r\nMelodies Of Time (2010)<br>\r\nCho Một Tình Yêu (2011)<br>\r\nTâm (2013)<br>\r\n* Các show diễn lớn:<br>\r\nYesterday & Now (Ngày Ấy & Bây Giờ) (2004)<br>\r\nSức Mạnh Của Những Ước Mơ (2005)<br>\r\nSóng Đa Tần (2008)<br>\r\nNhững Giai Điệu Của Thời Gian (2011)<br>\r\nCho Một Tình Yêu (2011)<br>\r\nGởi Tình Yêu Của Em (2013)<br>\r\nHeartbeat (2014)<br>\r\nÔ Cửa Màu Xanh (2016)'),
(7, 'DJ Snake', 'image/12693.jpg', 'Tên thật: Đang cập nhật<br>\r\nNghệ danh: DJ Snake<br>\r\nNgày sinh: Đang cập nhật<br>\r\nQuê quán: Đang cập nhật<br>\r\nQuốc gia: Đang cập nhật<br>\r\nGiải thưởng:<br>\r\nĐang cập nhật'),
(9, 'Quang Lê', 'image/ql.jpg', 'Tên thật:  Đang cập nhật<br>\r\nNghệ danh:  Đang cập nhật<br>\r\nNickname:  Đang cập nhật<br>\r\nNgày sinh:  Đang cập nhật<br>\r\nQuê quán:  Đang cập nhật<br>\r\nQuốc gia:  Đang cập nhật<br>\r\nGiải thưởng: Đang cập nhật<br>'),
(10, 'Châu Khải Phong', 'image/ckp.jpg', 'Tên thật:  Đang cập nhật<br>\r\nNghệ danh:  Đang cập nhật<br>\r\nNickname:  Đang cập nhật<br>\r\nNgày sinh:  Đang cập nhật<br>\r\nQuê quán:  Đang cập nhật<br>\r\nQuốc gia:  Đang cập nhật<br>\r\nGiải thưởng: Đang cập nhật<br>'),
(11, 'Da Lab', 'image/dl.jpg', 'Tên thật:  Đang cập nhật<br>\r\nNghệ danh:  Đang cập nhật<br>\r\nNickname:  Đang cập nhật<br>\r\nNgày sinh:  Đang cập nhật<br>\r\nQuê quán:  Đang cập nhật<br>\r\nQuốc gia:  Đang cập nhật<br>\r\nGiải thưởng: Đang cập nhật<br>'),
(12, 'Đức Phúc', 'image/dp.jpg', 'Tên thật:  Đang cập nhật<br>\r\nNghệ danh:  Đang cập nhật<br>\r\nNickname:  Đang cập nhật<br>\r\nNgày sinh:  Đang cập nhật<br>\r\nQuê quán:  Đang cập nhật<br>\r\nQuốc gia:  Đang cập nhật<br>\r\nGiải thưởng: Đang cập nhật<br>'),
(13, 'Hà Anh Tuấn', 'image/hat.jpg', 'Tên thật:  Đang cập nhật<br>\r\nNghệ danh:  Đang cập nhật<br>\r\nNickname:  Đang cập nhật<br>\r\nNgày sinh:  Đang cập nhật<br>\r\nQuê quán:  Đang cập nhật<br>\r\nQuốc gia:  Đang cập nhật<br>\r\nGiải thưởng: Đang cập nhật<br>'),
(14, 'Hương Tràm', 'image/ht.jpg', 'Tên thật:  Đang cập nhật<br>\r\nNghệ danh:  Đang cập nhật<br>\r\nNickname:  Đang cập nhật<br>\r\nNgày sinh:  Đang cập nhật<br>\r\nQuê quán:  Đang cập nhật<br>\r\nQuốc gia:  Đang cập nhật<br>\r\nGiải thưởng: Đang cập nhật<br>'),
(15, 'Issac', 'image/is.jpg', 'Tên thật:  Đang cập nhật<br>\r\nNghệ danh:  Đang cập nhật<br>\r\nNickname:  Đang cập nhật<br>\r\nNgày sinh:  Đang cập nhật<br>\r\nQuê quán:  Đang cập nhật<br>\r\nQuốc gia:  Đang cập nhật<br>\r\nGiải thưởng: Đang cập nhật<br>'),
(16, 'Tuấn Hưng', 'image/th.jpg', 'Tên thật:  Đang cập nhật<br>\r\nNghệ danh:  Đang cập nhật<br>\r\nNickname:  Đang cập nhật<br>\r\nNgày sinh:  Đang cập nhật<br>\r\nQuê quán:  Đang cập nhật<br>\r\nQuốc gia:  Đang cập nhật<br>\r\nGiải thưởng: Đang cập nhật<br>'),
(17, 'Soobin Hoàng Sơn', 'image/sb.jpg', 'Tên thật:  Đang cập nhật<br>\r\nNghệ danh:  Đang cập nhật<br>\r\nNickname:  Đang cập nhật<br>\r\nNgày sinh:  Đang cập nhật<br>\r\nQuê quán:  Đang cập nhật<br>\r\nQuốc gia:  Đang cập nhật<br>\r\nGiải thưởng: Đang cập nhật<br>'),
(18, 'Đang Cập Nhật', 'image/avatar.png', 'Tên thật:  Đang cập nhật<br>\r\nNghệ danh:  Đang cập nhật<br>\r\nNickname:  Đang cập nhật<br>\r\nNgày sinh:  Đang cập nhật<br>\r\nQuê quán:  Đang cập nhật<br>\r\nQuốc gia:  Đang cập nhật<br>\r\nGiải thưởng: Đang cập nhật<br>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chude`
--

CREATE TABLE `chude` (
  `id` int(100) NOT NULL,
  `tenchude` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=3276 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chude`
--

INSERT INTO `chude` (`id`, `tenchude`, `image`) VALUES
(3, 'Nhạc Trẻ', 'image/23222192.jpg'),
(4, 'Cà phê', 'image/21309893.jpg'),
(5, 'EDM', 'image/19975520.jpg'),
(6, 'Rap', 'image/22334189.jpg'),
(7, 'Thư giãn', 'image/19969907.jpg'),
(8, 'Tổng hợp', 'image/281235.jpg'),
(9, 'Love Song', 'image/a3.jpg'),
(10, 'Nhạc Phim Tuyển Chọn', 'image/anh153.jpg'),
(11, 'Cafe Thứ 7', 'image/anh209.jpg'),
(12, 'Sad Song For Heartbreaker', 'image/anh248.jpg'),
(13, 'Hát Về Hà Nội', 'image/anh234.jpg'),
(14, 'Thứ 2 Âm Nhạc', 'image/anh260.jpg'),
(16, 'Mình Đi Em Nhé', 'image/8.jpg'),
(17, 'Hát Về Biển Đảo', 'image/anh22.jpg'),
(18, 'Nhạc Phim Anime', 'image/anh241.jpg'),
(19, 'Tuyển Tập Underground', 'image/anh172.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `userName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passWord` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(1) NOT NULL DEFAULT 0,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'image/avatar.png',
  `ngaydangky` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB AVG_ROW_LENGTH=8192 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `userName`, `passWord`, `email`, `level`, `avatar`, `ngaydangky`) VALUES
(1, 'khanh', '$2y$12$a5a452f36cbb7344eafc9uxjFNRqeDYeiVSRyuuBe191GKNDjio2y', 'khanh@gmail.com', 2, 'image/avatar.png', '2022-01-13 20:17:02'),
(2, 'huy', '$2y$12$7edec7868f85329153658u0mR0MNl2rGC7P.nXW1MTczNYo8vWhkq', 'huy@gmail.com', 1, 'image/avatar.png', '2022-01-13 20:18:12'),
(3, 'dat', '$2y$12$a15c125148370184d914cuIdf9ZFxy0tMZ/JQU2S2ojrnsFY9taf.', 'dat@gmail.com', 0, 'image/avatar.png', '2022-01-13 22:28:03');

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `v_baihat`
-- (See below for the actual view)
--
CREATE TABLE `v_baihat` (
`id` int(100)
,`tenbaihat` varchar(100)
,`path` varchar(100)
,`image` varchar(100)
,`luotnghe` int(100)
,`likes` int(100)
,`tencasi` varchar(100)
,`tenalbum` varchar(100)
,`tenchude` varchar(100)
,`ngaydang` datetime
,`idchude` int(10)
,`idcasi` int(10)
,`idalbum` int(10)
);

-- --------------------------------------------------------

--
-- Cấu trúc cho view `v_baihat`
--
DROP TABLE IF EXISTS `v_baihat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_baihat`  AS SELECT `bh`.`id` AS `id`, `bh`.`tenbaihat` AS `tenbaihat`, `bh`.`path` AS `path`, `bh`.`image` AS `image`, `bh`.`luotnghe` AS `luotnghe`, `bh`.`likes` AS `likes`, `cs`.`tencasi` AS `tencasi`, `ab`.`tenalbum` AS `tenalbum`, `cd`.`tenchude` AS `tenchude`, `bh`.`ngaydang` AS `ngaydang`, `bh`.`idchude` AS `idchude`, `bh`.`idcasi` AS `idcasi`, `bh`.`idalbum` AS `idalbum` FROM (((`baihat` `bh` join `casi` `cs` on(`bh`.`idcasi` = `cs`.`id`)) join `chude` `cd` on(`bh`.`idchude` = `cd`.`id`)) join `album` `ab` on(`bh`.`idalbum` = `ab`.`id`)) ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idalbum` (`idalbum`),
  ADD KEY `idcasi` (`idcasi`),
  ADD KEY `idchude` (`idchude`);

--
-- Chỉ mục cho bảng `casi`
--
ALTER TABLE `casi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chude`
--
ALTER TABLE `chude`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `album`
--
ALTER TABLE `album`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `baihat`
--
ALTER TABLE `baihat`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `casi`
--
ALTER TABLE `casi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `chude`
--
ALTER TABLE `chude`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
