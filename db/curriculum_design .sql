-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-06-23 06:07:53
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `curriculum_design`
--

-- --------------------------------------------------------

--
-- 表的结构 `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `aid` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '管理员姓名',
  `class` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '班级',
  `ano` varchar(13) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '学号',
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '密码',
  `mobile` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '手机号',
  PRIMARY KEY (`aid`),
  UNIQUE KEY `sno` (`ano`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='注册管理员的信息' AUTO_INCREMENT=51 ;

--
-- 转存表中的数据 `administrator`
--

INSERT INTO `administrator` (`aid`, `name`, `class`, `ano`, `password`, `mobile`) VALUES
(21, '小熹子', '计算机162', '2016210402111', 'd41d8cd98f00b204e9', '17376503619'),
(22, '小熹子', '计算机162', '2016210402110', 'd41d8cd98f00b204e9', '17376503619'),
(30, '何熹', '计算机162', '2016210402113', '926686ae87870cac6d0aa45c269b962b', '17376503611'),
(31, '熹崽子', '计算机162', '2016210402014', 'c2a0d602be86652fe51df051bacd3db5', '17376503619'),
(32, '熹崽子', '计算机162', '2016210402018', '926686ae87870cac6d0aa45c269b962b', '17376503619'),
(33, '熹子', '计算机162', '2016210402019', 'dc54f45c4fd106b461135a077af850d3', '17376503619'),
(37, '陈嘉南', '计算机162', '2016210402112', 'd41d8cd98f00b204e9800998ecf8427e', '18869906066'),
(50, '何熹同学', '计算机162', '2016210402015', 'c2a0d602be86652fe51df051bacd3db5', '17376503619');

-- --------------------------------------------------------

--
-- 表的结构 `application_form`
--

CREATE TABLE IF NOT EXISTS `application_form` (
  `AFId` int(11) NOT NULL AUTO_INCREMENT COMMENT '报名表id',
  `AFName` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '报名者姓名',
  `AFPclass` varchar(10) NOT NULL COMMENT '报名者班级',
  `AFSno` varchar(13) NOT NULL COMMENT '报名者学号',
  `AFmobile` varchar(11) NOT NULL COMMENT '报名者手机号',
  `hoppy` varchar(1000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '爱好',
  `strength` varchar(1000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '特长',
  `InterestClass` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '感兴趣的科目',
  PRIMARY KEY (`AFId`),
  UNIQUE KEY `RegSno` (`AFSno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='社会实践报名表' AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `application_form`
--

INSERT INTO `application_form` (`AFId`, `AFName`, `AFPclass`, `AFSno`, `AFmobile`, `hoppy`, `strength`, `InterestClass`) VALUES
(8, '小熹子', '计算机162', '2016210402111', '17376503619', '跳舞', '唱歌', '音乐'),
(9, '何熹同学', '计算机162', '2016210402015', '17376503619', '听音乐', '吃东西', '音乐'),
(12, '熹崽子', '计算机162', '2016210402018', '17376503619', '听音乐', '吃东西', '音乐'),
(14, '何熹', '计算机162', '2016210402113', '17376503611', '　唱歌', '跳舞', '数学'),
(15, '吴小婷', '计算机162', '2017210402015', '17376503619', '看电视', '唱歌', '音乐'),
(18, '何熹', '计算机162', '2016210920169', '17376503619', '学习', '学习', '数学');

-- --------------------------------------------------------

--
-- 表的结构 `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `FBId` int(11) NOT NULL AUTO_INCREMENT COMMENT '舆情表的id',
  `FBtype` varchar(10) NOT NULL COMMENT '舆情类型',
  `FBcontent` varchar(400) NOT NULL COMMENT '舆情内容',
  PRIMARY KEY (`FBId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='舆情表' AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `feedback`
--

INSERT INTO `feedback` (`FBId`, `FBtype`, `FBcontent`) VALUES
(3, '食堂', '						\r\n	啦啦啦啦					'),
(4, '食堂', 'hahahah						'),
(6, '食堂', '		222				'),
(7, '食堂', '		222				'),
(8, '食堂', '		222				'),
(9, '食堂', '		222				'),
(10, '生活', '希望学校新校区在搬入之前能做好净化工作。'),
(12, '食堂', '				666'),
(13, '学习', '图书馆的许多插座都不能用。						'),
(14, '生活', '洗衣房有时候洗不干净衣服！'),
(15, '食堂', '						食堂的食材不干净！'),
(16, '食堂', '		食堂饭菜不行啊 				'),
(17, '学习', '教室空调太冷。');

-- --------------------------------------------------------

--
-- 表的结构 `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) COLLATE utf8_bin NOT NULL,
  `url` varchar(50) COLLATE utf8_bin NOT NULL,
  `parent_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `is_use` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `modules`
--

INSERT INTO `modules` (`id`, `name`, `url`, `parent_id`, `level`, `is_use`) VALUES
(1, '用户管理', '', 0, 1, 1),
(2, '增加用户', '../html/RegistrationForm-U.html', 1, 2, 1),
(3, '查询用户', 'index-U.php', 1, 2, 1),
(4, '管理员信息管理', '', 0, 1, 1),
(5, '增加管理员', '../html/RegistrationForm-A.html', 4, 2, 1),
(6, '查询管理员', 'index-A.php', 4, 2, 1),
(7, '用户统计', '', 0, 1, 1),
(9, '按专业统计用户量', '../html/get_domaininfo.html', 7, 2, 1),
(10, '推文管理', '', 0, 1, 1),
(11, '推文发布', '../html/tweets.html', 10, 2, 1),
(12, '推文编辑', 'index-T.php', 10, 2, 1),
(13, '暑期社会实践', '', 0, 1, 1),
(14, '增加成员', '../html/socialpractice.html', 13, 2, 1),
(15, '舆情反馈', '', 0, 1, 1),
(16, '反馈表上传', '../html/file.html', 15, 2, 1),
(17, '舆情汇总', 'index-F.php', 15, 2, 1),
(18, '推文评论管理', 'tweets_comment.php', 10, 2, 1),
(19, '成员编辑', 'index-S.php', 13, 2, 1);

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(100) NOT NULL AUTO_INCREMENT COMMENT '新闻id',
  `news_name` text NOT NULL COMMENT '新闻名字',
  `news_time` date NOT NULL COMMENT '新闻发布时间',
  `news_author` text NOT NULL COMMENT '新闻作者',
  `news_content` text NOT NULL COMMENT '新闻内容',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`news_id`, `news_name`, `news_time`, `news_author`, `news_content`) VALUES
(1, '国服学院即将搬入新校区', '2018-06-04', '114', ' \r\n							理工科气息极强的新校区						'),
(2, '杭师大110周年庆', '2018-06-01', '114', '迎来百十载华诞。'),
(3, '怀揣支教梦，走进马岙小学', '2018-07-09', '校园114', '六点刚到，便有家长带着他们的小可爱到来。\r\n这群小可爱们，看着他们牵着父母的手，\r\n来到我们的面前。\r\n拿着回执单，填写相关信息，\r\n咨询着上课的相关内容和注意事项。\r\n今日的我们，成为了老师，\r\n成为了那个可以传道授业解惑的人。\r\n\r\n   在报名过程中,队员们耐心的对家长关心的相关问题一一进行解答。队员们就场控、讲解、组织等分工合作,配合默契,效率极高。从上午六点半到下午四点,前来报名的家长和孩子络绎不绝。炎炎烈日下，招生宣传工作正在有条不紊地进行，家长们对我们的支教工作也表现出极大的兴趣。'),
(4, '欢迎新生', '2018-09-01', '114', '欢迎新一届！'),
(5, '欢迎新生', '2018-09-01', '114', 'nihao'),
(6, '欢迎新生', '2018-09-02', '114', '123');

-- --------------------------------------------------------

--
-- 表的结构 `news_comment`
--

CREATE TABLE IF NOT EXISTS `news_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '评论自身id',
  `news_id` int(11) NOT NULL COMMENT '新闻id（外键）',
  `comment_user_id` varchar(100) NOT NULL COMMENT '评论者id',
  `comment_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '评论时间',
  `comment_content` text NOT NULL COMMENT '评论内容',
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='新闻评论表' AUTO_INCREMENT=76 ;

--
-- 转存表中的数据 `news_comment`
--

INSERT INTO `news_comment` (`comment_id`, `news_id`, `comment_user_id`, `comment_time`, `comment_content`) VALUES
(9, 1, '2016210402015', '0000-00-00 00:00:00', '123'),
(10, 1, '2016210402015', '0000-00-00 00:00:00', '123'),
(11, 1, '2016210402015', '0000-00-00 00:00:00', '天气真好'),
(12, 1, '2016210402015', '2018-06-03 00:00:00', '天气真好'),
(13, 1, '2016210402015', '2018-06-03 06:06:26', '天气真好'),
(14, 1, '2016210402015', '2018-06-03 07:06:10', '天气真好！'),
(15, 1, '2016210402015', '2018-06-03 07:06:55', 'keke'),
(16, 1, '2016210402015', '2018-06-03 07:06:57', 'keke'),
(17, 1, '2016210402015', '2018-06-03 07:06:41', 'haha'),
(19, 1, '2016210402015', '2018-06-03 07:06:51', '1114'),
(20, 1, '2016210402015', '2018-06-03 07:06:12', '666'),
(22, 2, '2016210402015', '2018-06-04 15:37:47', 'fine'),
(23, 1, '2016210402015', '2018-06-04 14:06:30', '开心'),
(24, 1, '2016210402015', '2018-06-04 14:06:07', '123'),
(25, 1, '2016210402015', '2018-06-04 14:06:18', '123'),
(26, 1, '2016210402015', '2018-06-04 14:06:53', '123'),
(27, 1, '2016210402015', '2018-06-04 14:06:04', '嘿嘿嘿'),
(28, 1, '2016210402015', '2018-06-04 14:06:36', '星期一'),
(29, 1, '2016210402015', '2018-06-04 14:06:27', '周一'),
(30, 1, '2016210402015', '2018-06-04 14:06:46', '周一'),
(31, 1, '2016210402015', '2018-06-04 14:06:07', '周一啊'),
(32, 1, '2016210402015', '2018-06-05 03:06:29', ''),
(33, 1, '2016210402015', '2018-06-05 03:06:49', '今天周二'),
(34, 1, '2016210402015', '2018-06-05 12:06:39', 'tiana'),
(35, 1, '2016210402015', '2018-06-05 12:06:52', '123'),
(36, 1, '2016210402015', '2018-06-05 12:06:15', '11'),
(37, 1, '2016210402015', '2018-06-05 12:06:04', '123'),
(38, 1, '2016210402015', '2018-06-05 12:06:14', 'you can!'),
(39, 1, '2016210402015', '2018-06-05 12:06:34', 'text'),
(40, 1, '2016210402015', '2018-06-05 13:06:58', '111'),
(41, 1, '2016210402015', '2018-06-07 09:06:19', '16'),
(44, 3, '2016210402015', '2018-06-13 13:06:13', '我们承载着老师和孩子们的希望，带着如火的热情，开始一段奇妙的旅程，进行一次灵魂的碰撞，我们的精神将会得到一场无与伦比的升华！'),
(57, 3, '2016210402015', '2018-06-14 14:06:40', '11'),
(65, 3, '2016210402015', '2018-06-14 15:06:47', 'OMG!'),
(66, 3, '2016210402015', '2018-06-14 15:06:17', '321'),
(67, 3, '2016210402015', '2018-06-14 15:06:22', ''),
(68, 3, '2016210402015', '2018-06-14 15:06:29', '321'),
(69, 3, '2016210402015', '2018-06-14 15:06:34', ''),
(70, 3, '2016210402015', '2018-06-14 15:06:43', ''),
(71, 3, '2016210402015', '2018-06-14 15:06:52', '111'),
(72, 3, '2016210402015', '2018-06-15 12:06:07', '今天何熹同学的评论插入成功了吗？'),
(73, 3, '2016210402015', '2018-06-20 11:06:16', 'ZHENBANG!'),
(74, 3, '2016210920169', '2018-06-21 08:06:16', '真棒啊！2018-06-21'),
(75, 3, '2016210920169', '2018-06-21 08:06:43', '');

-- --------------------------------------------------------

--
-- 表的结构 `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `isdel` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='角色表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `roles`
--

INSERT INTO `roles` (`id`, `name`, `isdel`) VALUES
(1, '普通用户', 0),
(2, '管理员', 0);

-- --------------------------------------------------------

--
-- 表的结构 `role_visits`
--

CREATE TABLE IF NOT EXISTS `role_visits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `isdel` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `role_visits`
--

INSERT INTO `role_visits` (`id`, `module_id`, `role_id`, `isdel`) VALUES
(1, 1, 1, 0),
(2, 2, 1, 0),
(3, 3, 1, 0),
(4, 4, 1, 0),
(5, 5, 1, 0),
(6, 6, 1, 0),
(7, 7, 1, 0),
(9, 9, 1, 0),
(13, 10, 1, 0),
(14, 11, 1, 0),
(15, 12, 1, 0),
(16, 13, 1, 0),
(17, 14, 1, 0),
(18, 15, 1, 0),
(19, 16, 1, 0),
(20, 17, 1, 0),
(21, 18, 1, 0),
(22, 19, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `sid` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '学生姓名',
  `class` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '班级',
  `sno` varchar(13) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '学号',
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '密码',
  `mobile` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '手机号',
  PRIMARY KEY (`sid`),
  UNIQUE KEY `sno` (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='注册学生的信息' AUTO_INCREMENT=44 ;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`sid`, `name`, `class`, `sno`, `password`, `mobile`) VALUES
(22, '小熹子', '计算机162', '2016210402110', 'd41d8cd98f00b204e9', '17376503619'),
(30, '何熹', '计算机162', '2016210402113', '926686ae87870cac6d0aa45c269b962b', '17376503611'),
(31, '熹崽子', '物联网161', '2016210402014', 'c2a0d602be86652fe51df051bacd3db5', '17376503619'),
(32, '熹崽子', '计算机162', '2016210402018', '926686ae87870cac6d0aa45c269b962b', '17376503619'),
(33, '熹子', '软工161', '2016210402019', 'dc54f45c4fd106b461135a077af850d3', '17376503619'),
(36, '何熹同学', '计算机162', '2016210402015', 'c2a0d602be86652fe51df051bacd3db5', '17376503619'),
(37, '熹月', '计算机163', '2016210402010', 'e68eee38cbaec0f0def39ef9d44265e1', '17376503619'),
(38, '旺仔小馒头', '计算机162', '2016210401017', 'e68eee38cbaec0f0def39ef9d44265e1', '17376503619'),
(39, '小小西子', '计算机163', '2016210502015', 'e68eee38cbaec0f0def39ef9d44265e1', '17376503619'),
(40, '吴小婷', '计算机162', '2017210402015', 'e68eee38cbaec0f0def39ef9d44265e1', '17376503619'),
(41, '小熹子', '计算机162', '2016210902011', 'e68eee38cbaec0f0def39ef9d44265e1', '17376503619'),
(42, '陈', '计算机162', '2016210402013', '9cbf8a4dcb8e30682b927f352d6559a0', '17376503619'),
(43, '何熹', '计算机162', '2016210920169', 'e68eee38cbaec0f0def39ef9d44265e1', '17376503619');

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `TeacherId` int(11) NOT NULL AUTO_INCREMENT COMMENT '教师id',
  `TeacherName` varchar(18) NOT NULL COMMENT '教师姓名',
  `TeacherPosition` varchar(50) NOT NULL COMMENT '教师职务',
  `TeacherPhone` varchar(11) NOT NULL COMMENT '手机号',
  `TeacherMail` varchar(30) NOT NULL COMMENT '教师邮箱',
  `Office` varchar(10) NOT NULL COMMENT '办公室',
  PRIMARY KEY (`TeacherId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='教师信息表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `teacher`
--

INSERT INTO `teacher` (`TeacherId`, `TeacherName`, `TeacherPosition`, `TeacherPhone`, `TeacherMail`, `Office`) VALUES
(1, '张金玲', '计算机与金融服务系党总副支书记', '15988815799', 'zjlzjl0622@foxmail.com', '1-807'),
(2, '雷军', '辅导员（就业指导、计算机13、软工11级班）', '15990038327', '1740256427@qq.com', '1-807'),
(3, '张敬礼', '团委书记（兼计算机、金融服务系联合党总支副书记、计算机师范班）', '13675828500', 'zjl209@126.com', '1-702');

-- --------------------------------------------------------

--
-- 表的结构 `user_visits`
--

CREATE TABLE IF NOT EXISTS `user_visits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_visit_id` int(11) NOT NULL,
  `visit_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=29 ;

--
-- 转存表中的数据 `user_visits`
--

INSERT INTO `user_visits` (`id`, `user_id`, `role_visit_id`, `visit_date`) VALUES
(1, 28, 2, '2018-05-09'),
(2, 29, 2, '2018-05-09'),
(3, 29, 2, '2018-05-10'),
(4, 29, 2, '2018-05-14'),
(5, 29, 2, '2018-05-13'),
(6, 28, 2, '2018-05-13'),
(7, 28, 2, '2018-05-16'),
(8, 28, 2, '2018-05-18'),
(9, 28, 2, '2018-05-20'),
(10, 28, 2, '2018-05-22'),
(11, 29, 2, '2018-05-22'),
(12, 29, 1, '2018-05-22'),
(13, 30, 4, '2018-05-22'),
(14, 30, 4, '2018-05-10'),
(15, 30, 4, '2018-05-13'),
(16, 30, 4, '2018-05-16'),
(17, 30, 4, '2018-05-17'),
(18, 30, 4, '2018-05-18'),
(19, 30, 4, '2018-05-19'),
(20, 32, 5, '2018-05-09'),
(21, 32, 5, '2018-05-10'),
(22, 32, 5, '2018-05-12'),
(23, 32, 3, '2018-05-12'),
(24, 32, 3, '2018-05-18'),
(25, 32, 3, '2018-05-19'),
(26, 33, 3, '2018-05-22'),
(27, 33, 3, '2018-05-14'),
(28, 33, 3, '2018-05-11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
