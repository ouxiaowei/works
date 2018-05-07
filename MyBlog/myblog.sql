-- MySQL dump 10.16  Distrib 10.1.30-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: myblog
-- ------------------------------------------------------
-- Server version	10.1.30-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `author` varchar(32) NOT NULL,
  `intro` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `keywords` varchar(50) DEFAULT NULL,
  `click_num` int(10) unsigned NOT NULL DEFAULT '0',
  `reply_num` int(255) NOT NULL,
  `insert_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (26,'常回家看看','55','常回家看看','“找点时间，找点空闲，领着孩子常回家看看……”几年前，陈红的一首脍炙人口的歌曲传唱了大江南北，也唱起了多少年轻人对父母无限的关爱和思念。以至于今天从收音机里听到这首歌，仍能让人十分的动情，勾起我归乡的期盼。\r\n    世界上最无私的爱是母爱，最博大的天空是父母的心胸，父母对儿女的关爱是世上任何一种文字都难以形容的。记得小时候，年少不更事，过着“衣来伸手，饭来张口”的生活，完全没有懂得父母对自己的呵护是那样的专注、那样的倾心。及至到了自己为人父、为人夫，把同样的一份爱传承给自己的儿女，才懂得做父母的心境。甚至有一种倾情于儿女身上的呵护是自身在强作欢颜，作出莫大牺牲后才能获取的。\r\n    十岁那年，我上小学三年级，十月是我的生日。那时的条件十分的艰难，我们能穿上一件新衣、吃上一顿猪肉都是做孩子的奢侈。于是我十分盼望自己的生日能早一天到来，缘由便是与父母约好穿上一身新衣服、吃一次红烧肉。\r\n    从八月桂花香浓的那一天，掰着手指数到九月重阳菊花黄，好不容易转到了十月。十月的天气已经显得寒意渐浓，自己用小笔在书上画着勾，还有十天就要过生日了。我问父亲：“什么时候给我做新衣服,就要过生日了。”父亲用那双带着淡淡忧郁的眼睛看着我，眉头紧蹙，半晌不说话，我又问母亲，母亲也叹了口气：“孩子，还早呢！放心吧，妈一定为你做一身新衣服。”我揪着的心放下了，蹦蹦跳跳地上学去……\r\n    第二天父亲便离开了家，我问妈妈：“爸爸上哪儿去了？”妈妈说：“爸爸到别人家帮工去了。”我仍未放在心上，及至到了过生日的前一天晚上，父亲才回到家中，拎回来5斤猪肉还有我的一身新衣服，那晚我的心美极了，为自己的衣服、为明天能吃上的一顿肉。\r\n    过了许多年，从母亲的口中才知道，父亲是去100多里外的沙矿上替别人挑沙，挣回来二十块钱为我过生日，一霎间，我什么都明白了。\r\n    从此一有空闲我总回到父母的身边去看看。不为别的，只想起父母亲老了许多，能时常陪陪他们，让他们感受儿子的孝心！享受亲情的关爱与满足。','20180310103941_920.jpg','回家',10,1,'2018-03-10 02:39:41'),(10,'学习javascript过程中的心得体会','xw','js学习','一、函数调用\r\n\r\n1、由于很多时候JS是写在head前面的，调用一些body里的元素ID，而此时body尚未载入，就会报错，找不到该元素，所以写成window.onload=function() {//调用一些元素..}写在head的前面，这样再调用就不会出错了\r\n\r\n2、不知道为什么按照下图方式无法调用函数，所以写成setTimeOut(\"function()\",毫秒数);setTimeOut只执行一次，里面的函数一定要加引号！','20180306093535_284.jpg','js',21,4,'2018-03-06 01:35:35'),(11,'jQuery学习心得','xw','jquery学习',' 我第一次接触jquery是在大二下学期的时候，当时我们课程在讲web基础，也就是html css和js那些，我在慕课网（一个不错的在线视频学习网站，现在也在用）上提前学习了jQuery和jQuery-UI。当时只是为了腾出点时间学习更多东西，想走在大多数人前面，时间久了，等到现在上这门课才真正领略到jquery（下面简称JQ）这个前端框架的魅力。\r\n\r\n        JQ是一个轻量级的js库，它的宗旨是write less, do more，写更少的代码，做更多的事情。事实上，我们在实操作过程中，彻彻底底体会到它的好处。譬如我要找到某个元素（它可以是标签，类或者ID），只需要用$(\"...\")即刻获得，而不需要使用原生JS长长的document.getElementBy..(\"...\")，而且很多时候还会拼写错。\r\n\r\n        这是一个ajax横行的时代，我们在做真实项目的时候，往往需要用到ajax异步请求，使用JQ的ajax方法则会让你事半功倍，行云流水。虽然我们课程还没有涉及到ajax，但是我相信有不少同学已经在使用了。当然，JQ的好处绝对不止以上两点，还有链式写法（就是可以一直“点下去”，不用重新获取元素对象，书本实验示例大量的使用了这种写法，也许有的同学会不理解为什么能这样写），以及各种封装好的炫酷的动画效果，丰富的第三方插件库，甚至对“古董”IE6及以上浏览器的支持，这些都让我爱不释手。','20180308101611_674.jpg','jquery',0,0,'2018-03-08 02:16:11'),(12,'canvas心得','xw','开始接触canvas的路径时，有些迷糊。','  由于我们正常生活的绘画逻辑，或者由于java的GUI编程的影响，我们总是以为绘画就是有纸有笔，直接画出图形就可以了。\r\n\r\n      这纸笔也就是编程环境，这是必不可少的，一般来说，我们就可以直接绘图了，但在canvas的绘图中，虽然也能直接绘制一些图，但是更多的图是通过路径来绘制的。刚开始接触的时候，有好几次都是设置好路径，运行程序，结果界面空白一片，就是没有图出来。经过一些研究，终于对路径有了一点体会。\r\n\r\n      原来canvas中的路径，就是设置好图画的形状，但并没有显示出来。举个例子，在电视剧中我们经常看到一些人得到了一张藏宝图，但是图上什么东西都看不到。其实上面是有图的，只不过是被隐藏起来的，只要滴点血或滴点墨水等等就能让图显示出来，这隐藏的图就相当于路径，而在canvas中要使路径显示出来，则要用到fill（）和stroke（）这两个方法，其中，stroke是把图勾勒出来，fill则是把图填充出来。\r\n\r\n      另外，我们再来说说关于路径的另外两个重要的方法，beginPath（）和closePath（），beginPath是用来重置路径的，如果没用这个方法会发生什么事呢，比如说，我们先画一条直线，没用这个方法，就又画一个圆，那么图上就会有两条直线一个圆（其中一条直线覆盖在另一条直线上，因为他们的路径时一样的），如两次绘画采用的颜色不一样，那我们就看不到第一次画的那条直线了。之所以发生这样的事，是因为我们画完直线的时候，它的路径还是存在的，这时我们再创建一个圆的路径，画布上就有一条直线一个圆的路径，之前的路径并没有被清除掉，而解决这种情况就要用到我们的beginPath（）；这个方法是用来重置路径的，也可以理解为，是用来清除之前的那些路径的，之后我们再设置路径，画布上就只有新创建的路径了，而closePath（），很多人一看，诶，关闭路径，那我关了之前的路径，是不是不用再beginPath（）也可以呢，其实呢，这个也坑过我，顾名思义有时真的害人，这个closePath（）更准确的说，应该是封闭路径，比如说，你画了一个半圆，没用closePath的话，图上就只有一条弧线，而用了closePath呢，图上就有一条弧线加一条直线，这条直线连接弧线的两个端点，把这个半圆封闭起来。总的来说，closePath就是用来连接路径的最终点与起点的。','20180308101722_833.gif','canvas',1,0,'2018-03-08 02:17:22'),(25,'Vue心得','xw','vue是什么','假设你已经通读vue官方文档（文档都没读一遍（至少），那不建议动手撸码），在大致了解vue是什么东西，有什么用，核心概念之后我们就可以开始着手学习vue。首先搭建环境。\r\n学习vue，我的建议是通过官手脚手架起步。\r\n>>>Installation$ npm install -g vue-cli>>Usage$ vue init <template-name> <project-name>>>>>Example:$ vue init webpack my-project\r\n根据需要安装插件yes or no,一直回车，脚手架就生成了。接下来剖析脚手架结构。\r\n脚手架结构剖析\r\n再开始写项目之前，我们需要弄清什么地方写什么代码。\r\nbuild文件夹\r\nwebpack配置文件。此处配置webpack规则。整个项目是通过webpack支持的。比如你要使用less，你需要在webapck规则里使用less。\r\nsrc 文件夹\r\n撸码的地方～基本你所有的代码都在这一块完成。\r\n####### assets文件夹\r\n存放web中引用的图片 媒体资源。\r\n####### components文件夹\r\n主要存放可复用组件，你可以在任意页面中复用这些组件。\r\n####### router文件夹\r\nindex.js 路由配置文件。在此处配置各个页面的跳转引用关系。\r\n####### APP.vue\r\n这里看一看做页面的根部。我们可以在这个页面进行一些css reset 操作。\r\n####### main.js\r\n根逻辑，页面加载首先会加载这份js文件。\r\nstatic文件夹\r\n主要存放外部引用资源。比如xxx.min.js\r\nindex.html\r\nvue是spa应用，所以只有一个入口，也就是index文件，这里我们进行一些不可更改资源（比如某某库）的引用，和html页面meta 、title之类的设定。','20180310102816_320.jpg','vue',4,1,'2018-03-10 02:28:16'),(24,'一网打尽h5与css3','xw','h5和css3',' html5与html其实并没有太大的区别,大部分都是一样的,只是html5中推出了一些新特性,一些新标签而已.学过或者了解过html的童鞋对html5上手是很快的,并不难.现在我们简单的玩一玩,讲一讲html5,css3到底是个什么东西.     \r\n\r\n        说h5到底是什么,比如说:我们要做菜(html5页面),首先我们要买菜对吧.^o^.超市里会有很多标签牌写着白菜大葱黄瓜(标签),把菜选好才能做菜,才能吃啊!然而html页面就是一桌菜,区别的就是看这桌菜是\"干豆腐卷大葱\"还是\"满汉全席\"了.偷笑功能多的(菜样多的)好看的(色香味俱全的)自然是好的页面(满汉全席)了.就算我们短时间内变不成厨师长级别的,但是家常菜还是可以做的嘛.慢慢来!奋斗\r\n        说了这么多,html5(以下统称html)就是由一个一个的标签组成,实现标签自己的功能从而让整个页面达到想要的效果.比如:鸡蛋炒柿子羡慕柿子和鸡蛋就标签.那css是什么呢,就是(样式)你的刀工,你放的调料,你是切成块还是切片还是切花,放点酱油就黑了.css就是用来调节样式的.样式做的炫酷也是很厉害的!\r\n        好了简单介绍过后我们来说html页面怎么写:\r\n        我用的开发软件是Hbuilder.一个html页面像一个人一样 : 有头,有身子.我们的html标签主要是脏器,写在body中,css主要是性格样貌外在,写在head中(称为头部引入).当然了css也可以用(外部引入):即在创建的web项目中的css文件夹中添加XXX.CSS文件,在文件中写样式,写法和头部引入的写法相同.','5aa2518374001.jpg','h5,css3',32,0,'2018-03-09 09:18:59'),(23,'thinkPHP学习心得 ---架构','xw','thinkPHP架构','thinkPHP架构对每一方面都有了明确的限制，为了，前后端及数据库分离，必须按照它设置的框架进行程序编写。\r\n\r\n         Think PHP５.０应用基于MVC，其中MVC是一个设计模式，这里的设计模式，跟我们平常所接触的软件设计模式不是一个概念，这里可以大致理解为代码的编写方式。\r\n\r\n         MVC强制行的使应用程序的  输入、处理 和输出分开。核心部件：M　模型，V视图，C控制器，他们个子处理自己的任务。\r\n\r\n入口文件：\r\n\r\n　　用户请求PHP的文件，负责处理一个请求的生命周期，这里应该是指的完成一个模块的功能吧\r\n\r\n应用：\r\n\r\n      一个管理系统架构及生命周期的对象。在入口文件中被调用和执行。一个应用可以存在多个入口文件，也就是说多个入口文件可以指向同一个应用。','5aa2512900c17.gif','thinkphp',1,0,'2018-03-09 09:17:31'),(27,'浅谈两个多月使用Laravel的自己的感受','xw',' 自己的感受','laravel框架本身运行原理，最多就是一直在强调容器的概念，其实这对你开发项目没有什么卵用的帮助。但是却可以从认识框架本身的原理当中，认识到闭包函数，容器，依赖注入的概念。为啥要这么do，为啥框架这么走是趋势。特别是依赖注入的概念，以工厂生产超人的demo举例讲的特别详细。也特别好，可以加深php面向对象的理解程度。其次涉及的是闭包函数，也就是所谓的匿名函数。似乎在js里面这个会用的较多，在php里面第一次会看到这么多所谓的闭包函数，但是以后谁还瞎BB拿闭包函数来忽悠人，特别是拿php的闭包函数来忽悠人，我只会对他说一句：去你妈的！\r\n\r\n      开发过程中，用的最多跟打交道最多的是就是route跟model，route就自然会涉及到controller跟view的东西，其中larevel的view模板引擎解析是blade，其实我也没仔细看它模板解析的原理跟格式。反正我就知道最常见的就是讲controller层的东西，带到模板用类似于smarty模板{{}}解析的方式就能解析出来我要的数据。然后结合@if、 @foreach就能玩转基本的前端view啦。\r\n\r\n    route里面我比较喜欢用resource模式来定义路由，这样一来就相当于在controller层定义了七个路由规则对应的函数。而且这样一来，可以强迫自己去熟悉http协议的提交方式。post、get、delete、put提交方式，同样的url请求地址，触发不同的函数。\r\n\r\n   其中为了防止跨站脚本攻击，框架本身做了一个_token的验证，post，put，delete请求的时候，会需要去验证token值。这个是laravel框架本身的原理，在提交过程中自动来处理的这一步，middleware中间件来处理，可以选择屏蔽这一步的处理。\r\n\r\n    其次用的最频繁的就是跟数据库打交道的，model模型。其实larevel框架本身提供两种，一种是自带的ORM模型，一种是全局模式的DB伪静态模式的直接调用。当时为了写mysql语句更加灵活，采用的DB门脸形式进行开发。有利也有弊，灵活程度来说，DB fades确实灵活，但是很多ORM模型封装好的比如像分页这种，就用的很蛋疼。ORM似乎也是在DB上进行再一次的封装。在项目开发中，我们是将DB封装在model层，提高代码的复用率跟灵活度。相比直接写繁杂无味的原生sql语句，用DB来写，确实快速的多有效率的多。\r\n\r\n    至于controller层，自然就是主要的业务逻辑处理，都集中在这里。这里就是程序猴子为什么被称为程序猿的地方，所有的东西最后你的业务逻辑都得集中在controller中来实现你的业务逻辑。然后这里就是实现你大堆的巴拉巴拉具体逻辑~但是基本的也无非增删改查~其他具体的需求以及处理方式，得在这里得到体现。','20180310104019_385.jpg','laravel',28,4,'2018-03-10 02:40:19'),(28,'bootstrap学习心得总结','xw','bootstrap框架','1.以栅栏式布局，分12列，16列，24列和32列，常用12列。\r\n 2.整个页面必须在container容器内部\r\n 3.移动端以 <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0\">\r\n   来使视图一比一缩放。（响应式布局）\r\n 4.载入bootstrap时需要经过七个步骤，才能支持CSS，js，IE，IE8以下等\r\n\r\n    a.引入bootstrap框架 <link rel=\"stylesheet\" href=\"../bootstrap.min.css\">\r\n\r\n    b.引入JQuery框架。引入在body结束标签之前。\r\n\r\n    c.引入JS文件，在JQuery框架之后引入。\r\n\r\n    d.引入移动端适应<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0\">。\r\n\r\n    e.将html标签添加<html lang=\"zh-cn\">\r\n\r\n    f.若支持IE得在meta标签，得添加<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">。\r\n\r\n    g。若要支持IE8之前，需添加responds。js文件','20180306093535_284.jpg','bootstrap',8,0,'2018-03-10 02:40:25');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_re`
--

DROP TABLE IF EXISTS `auth_re`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_re` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid_re` int(10) unsigned NOT NULL,
  `reply_at` timestamp NULL DEFAULT NULL,
  `reply_contents` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_re`
--

LOCK TABLES `auth_re` WRITE;
/*!40000 ALTER TABLE `auth_re` DISABLE KEYS */;
INSERT INTO `auth_re` VALUES (1,8,'2018-03-28 10:20:56','666'),(2,11,'2018-03-28 10:21:20','11111'),(3,8,'2018-03-28 10:14:18',' <p>34234</p>'),(4,8,'2018-03-29 10:06:36',' <p>再来一发</p>'),(5,8,'2018-03-29 11:59:58',' <p>23623</p>');
/*!40000 ALTER TABLE `auth_re` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feel`
--

DROP TABLE IF EXISTS `feel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL,
  `contents` varchar(255) DEFAULT NULL,
  `insert_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feel`
--

LOCK TABLES `feel` WRITE;
/*!40000 ALTER TABLE `feel` DISABLE KEYS */;
INSERT INTO `feel` VALUES (1,'第一天','情绪高涨','2018-06-03 02:20:50'),(2,'第二天','生活不易','2018-06-03 02:25:50'),(3,'第三天','好好生活','2018-06-03 04:20:50'),(5,'第四天','二恶方法','2018-03-03 03:32:36'),(6,'第五天','阿道夫撒','2018-03-03 03:35:31');
/*!40000 ALTER TABLE `feel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `next_re`
--

DROP TABLE IF EXISTS `next_re`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `next_re` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `re_id` int(10) NOT NULL,
  `nau_id` int(10) unsigned NOT NULL,
  `reply_at` timestamp NULL DEFAULT NULL,
  `reply_contents` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `next_re`
--

LOCK TABLES `next_re` WRITE;
/*!40000 ALTER TABLE `next_re` DISABLE KEYS */;
INSERT INTO `next_re` VALUES (1,1,8,'2018-03-28 10:20:56','aaaa'),(2,2,11,'2018-03-28 10:21:20','bbbb'),(4,2,8,'2018-03-29 10:05:30',' cccccc'),(5,1,8,'2018-03-29 10:06:16','是真的秀'),(6,4,8,'2018-03-29 10:06:56','一枝独秀'),(7,4,8,'2018-03-29 11:59:47',' 111'),(8,3,8,'2018-03-29 12:00:28',' 111');
/*!40000 ALTER TABLE `next_re` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reply`
--

DROP TABLE IF EXISTS `reply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `aid` int(10) unsigned NOT NULL,
  `reply_at` timestamp NULL DEFAULT NULL,
  `reply_contents` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reply`
--

LOCK TABLES `reply` WRITE;
/*!40000 ALTER TABLE `reply` DISABLE KEYS */;
INSERT INTO `reply` VALUES (1,8,9,'2018-03-06 22:01:51',' <p>asdfasd</p>'),(2,8,9,'2018-03-06 22:15:15',' <p>qwerqwerwer</p>'),(3,8,9,'2018-03-07 02:39:51',' <p>66666666666</p>'),(4,8,8,'2018-03-07 02:56:53',' <p>1234</p>'),(5,8,8,'2018-03-07 02:57:07',' <p>6666</p>'),(6,8,8,'2018-03-07 02:57:28',' <p>2223423424</p>'),(7,8,8,'2018-03-07 02:57:42',' <p>5435345435</p>'),(8,8,10,'2018-03-07 03:02:18',' <p><img src=\"http://img.t.sinajs.cn/t4/appstyle/expression/ext/normal/af/kl_thumb.gif\"><img src=\"http://img.t.sinajs.cn/t4/appstyle/expression/ext/normal/0b/tootha_thumb.gif\"><br></p><p><br></p>'),(9,8,10,'2018-03-07 03:09:02',' <p><img src=\"http://img.t.sinajs.cn/t4/appstyle/expression/ext/normal/af/kl_thumb.gif\"><br></p><p><br></p>'),(10,8,10,'2018-03-07 03:09:39',' <p><img src=\"http://img.t.sinajs.cn/t4/appstyle/expression/ext/normal/af/kl_thumb.gif\"><br></p><p><br></p>'),(11,8,10,'2018-03-07 03:10:58',' <p><img src=\"http://img.t.sinajs.cn/t4/appstyle/expression/ext/normal/3c/pcmoren_wu_thumb.png\"><br></p><p><br></p>'),(12,8,8,'2018-03-07 03:12:33',' <p><img src=\"http://img.t.sinajs.cn/t4/appstyle/expression/ext/normal/58/mb_thumb.gif\"><br></p><p><br></p>'),(13,8,9,'2018-03-07 03:18:52',' <p><img src=\"http://img.t.sinajs.cn/t4/appstyle/expression/ext/normal/98/yhh_thumb.gif\"><br></p><p><br></p>'),(14,8,9,'2018-03-07 03:18:52',' <p><img src=\"http://img.t.sinajs.cn/t4/appstyle/expression/ext/normal/98/yhh_thumb.gif\"><br></p><p><br></p>'),(15,8,9,'2018-03-07 03:20:59',' <p><img src=\"http://img.t.sinajs.cn/t4/appstyle/expression/ext/normal/3c/pcmoren_wu_thumb.png\"><br></p><p><br></p>'),(16,8,27,'2018-03-10 03:00:30',' <p>2341234&nbsp;</p>'),(17,8,26,'2018-03-28 09:23:20',' <p><img src=\"http://img.t.sinajs.cn/t4/appstyle/expression/ext/normal/3c/pcmoren_wu_thumb.png\"><br></p><p><br></p>'),(20,8,27,'2018-03-28 09:28:45',' <p><img src=\"http://img.t.sinajs.cn/t4/appstyle/expression/ext/normal/6e/shamea_thumb.gif\"><br></p><p><br></p>'),(21,8,27,'2018-03-28 09:47:28',' <p><img src=\"http://img.t.sinajs.cn/t4/appstyle/expression/ext/normal/0b/tootha_thumb.gif\"><br></p><p><br></p>'),(23,8,25,'2018-03-28 12:05:53',' <p><img src=\"http://img.t.sinajs.cn/t4/appstyle/expression/ext/normal/0b/tootha_thumb.gif\"><br></p><p><br></p>'),(24,11,27,'2018-03-29 10:21:11',' <p><img src=\"http://img.t.sinajs.cn/t4/appstyle/expression/ext/normal/af/kl_thumb.gif\"><br></p><p><br></p>');
/*!40000 ALTER TABLE `reply` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(16) NOT NULL,
  `password` varchar(64) NOT NULL,
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `phone` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nickname` (`nickname`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (11,'222','202cb962ac59075b964b07152d234b70',2,'18945245255'),(6,'老李','202cb962ac59075b964b07152d234b70',2,'18374851890'),(4,'老刘','202cb962ac59075b964b07152d234b70',2,'18525625625'),(7,'小明','202cb962ac59075b964b07152d234b70',2,'18625625625'),(8,'123','202cb962ac59075b964b07152d234b70',1,'18525625699'),(9,'234','289dff07669d7a23de0ef88d2f7129e7',1,'18525625688'),(10,'小八','123',1,'15815815855'),(12,'王五','202cb962ac59075b964b07152d234b70',2,'15825454585');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-31 20:02:45
