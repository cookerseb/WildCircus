-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 03 Janvier 2016 à 18:43
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `wildcircus`
--

-- --------------------------------------------------------

--
-- Structure de la table `shows`
--

CREATE TABLE IF NOT EXISTS `shows` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `contents` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `keyword` (`keyword`,`meta_title`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `shows`
--

INSERT INTO `shows` (`id`, `keyword`, `meta_title`, `meta_description`, `meta_keywords`, `contents`) VALUES
(1, 'iceblast', 'The Ice Blast Show', 'This is the Ice Blast page desc', 'This is the Ice Blast page keywords', '<p><img width="605" height="454" src="images/clip_image002.jpg"><br><br>\r\nA wonderful  magical ice show, unprecedented in a circus!<br><br>Figures and combinations are surprising and incredibles.<br>The whole  company of Blast Ice Show will give you cold sweats and put you in the eyes !!</p>\r\n<p>Thrill  seekers but also sweets and beauty, you will never forget what you will see...</p>\r\n<img width="605" height="454" src="images/artists/iceblast2.jpg">'),
(2, 'magic', 'The Magician Dare - Amazings illusions moment', 'Here the meta description of the magician show', 'magic, magician, illusion, amazing', '<table width="786" border="0" style="text-align:center;">\r\n  <tr>\r\n    <td><img src="images/clip_image006.jpg" alt="" width="318" height="478"></td>\r\n    <td><p>This  magician will make you forget all the other illusions magicians <br>\r\n      and shows that  you have already seen. </p>\r\n      <p>As magical  as incredible Zakary will take you into his world.</p>\r\n      <p>&nbsp;</p>\r\n    <p><strong>Will you volunteer to participate in the show  with the magician?</strong></p></td>\r\n  </tr>\r\n  <tr>\r\n    <td><img src="images/clip_image004.jpg" alt="" width="339" height="226"></td>\r\n    <td><img src="images/clip_image002_0000.jpg" alt="" width="339" height="226"></td>\r\n  </tr>\r\n  <tr>\r\n    <td>&nbsp;</td>\r\n    <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n    <td>&nbsp;</td>\r\n    <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n    <td>&nbsp;</td>\r\n    <td>&nbsp;</td>\r\n  </tr>\r\n</table>'),
(3, 'flyingmans', 'The High-Flying Mans - The crazy trapeze', 'The description for meta content. The SEO crazy trapeze description', 'trapeze, seo, flying, mans', 'on image mouse hover you can see a flip animation\r\n<div class="flip-container" ontouchstart="this.classList.toggle(''hover'');">\r\n	<div class="flipper">\r\n		<div class="front">\r\n			<!-- front content -->\r\n   			<img src="images/clip_image002_0001.jpg" alt="" width="604" height="390">         \r\n		</div>\r\n		<div class="back">\r\n			<!-- back content -->\r\n            <img src="images/clip_image004_0000.jpg" alt="" width="604" height="390">\r\n		</div>\r\n	</div>\r\n</div>\r\n<p>These five outfielders will bring with them into the air. Defients the laws of gravitation,<br>without safety nets before your eyes they will perform breathtaking jumps and tricks.<br><br>\r\nSo many amazing performance and also more dangerous than each other that the show<br>will be punctuated by your hooooooo, haaaaaaaa !!!</p>\r\n<p>&nbsp;</p>\r\n'),
(4, 'motosphere', 'The Infernal Sphere', 'Acrobats on motorcycles locked in a metal sphere', 'acrobats, moto, sphere, fire', '<p>An intense and surprising moment</p>\r\n<p>Three bikers machinery full throttle enclosed in a metallic sphere take any risks at full speed for a show</p>\r\n<img width="600" class="zoomEffect" src="images/artists/CIMG4348.JPG" alt="when hover image there is a scale transition zomm" />\r\n<p>But what''s going on when the fire gets tangled? Yes you understand !!<br>\r\nFire jets cross the metallic cage, crazy bikers will they get away ??</p>\r\n'),
(5, 'lionscage', 'The Lions Cage SEO title', 'SEO description of the lion cage page', 'lion, lions, cage, lion show', '<p>&nbsp;</p>\r\n<p>The contrast of grace and ferocity between the baton of tamer</p>\r\n<p>&nbsp;</p>\r\n<div id="container">\r\n	<ul>\r\n      	<li><img src="images/animals/lionscage.jpg" width="604" /></li>\r\n            <li><img src="images/animals/lions1.jpeg" width="604" /></li>\r\n            <li><img src="images/animals/lions2.jpg" width="604" /></li>\r\n            <li><img src="images/animals/lions3.jpg" width="604" /></li>\r\n            <li><img src="images/animals/lions4.jpg" width="604" /></li>\r\n      </ul>\r\n      <span class="button prevButton"></span>\r\n      <span class="button nextButton"></span>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p>They are big, ferocious and very fast. White lions of Wild Circus obey the finger and the eye to the trainer.<br>With its twelve lions and tigers, it offers an incredible number taming through representations of the Wild Circus.<br>For the trainer, the white lion is much more intelligent than the usual lion and thus even more dangerous.</p>\r\n<p>&nbsp;</p\r\n<p>These animals are afraid of the fire will yet have to cross it, jump through hoops, accomplish together combinations and hard figures.</p>\r\n\r\n<script>\r\n$(window).load(function(){\r\n		var pages = $(''#container li''), current=0;\r\n		var currentPage,nextPage;\r\n		var timeoutID;\r\n		var buttonClicked=0;\r\n\r\n		var handler1=function(){\r\n			buttonClicked=1;\r\n			$(''#container .button'').unbind(''click'');\r\n			currentPage= pages.eq(current);\r\n			if($(this).hasClass(''prevButton''))\r\n			{\r\n				if (current <= 0)\r\n					current=pages.length-1;\r\n					else\r\n					current=current-1;\r\n			}\r\n			else\r\n			{\r\n\r\n				if (current >= pages.length-1)\r\n					current=0;\r\n				else\r\n					current=current+1;\r\n			}\r\n			nextPage = pages.eq(current);	\r\n			currentPage.fadeTo(''slow'',0.3,function(){\r\n				nextPage.fadeIn(''slow'',function(){\r\n					nextPage.css("opacity",1);\r\n					currentPage.hide();\r\n					currentPage.css("opacity",1);\r\n					$(''#container .button'').bind(''click'',handler1);\r\n				});	\r\n			});			\r\n		}\r\n\r\n		var handler2=function(){\r\n			if (buttonClicked==0)\r\n			{\r\n			$(''#container .button'').unbind(''click'');\r\n			currentPage= pages.eq(current);\r\n			if (current >= pages.length-1)\r\n				current=0;\r\n			else\r\n				current=current+1;\r\n			nextPage = pages.eq(current);	\r\n			currentPage.fadeTo(''slow'',0.3,function(){\r\n				nextPage.fadeIn(''slow'',function(){\r\n					nextPage.css("opacity",1);\r\n					currentPage.hide();\r\n					currentPage.css("opacity",1);\r\n					$(''#container .button'').bind(''click'',handler1);				\r\n				});	\r\n			});\r\n			timeoutID=setTimeout(function(){\r\n				handler2();	\r\n			}, 4000);\r\n			}\r\n		}\r\n\r\n		$(''#container .button'').click(function(){\r\n			clearTimeout(timeoutID);\r\n			handler1();\r\n		});\r\n\r\n		timeoutID=setTimeout(function(){\r\n			handler2();	\r\n			}, 4000);\r\n		\r\n});\r\n\r\n</script>\r\n'),
(6, 'licornes', 'The unicorns clan', 'The unicorns clan description', 'clan, unicorns, incredible', '<p>&nbsp;</p>\r\n<img src="images/animals/licorne.jpg" width="350" alt="licorne"> \r\n<img src="images/animals/licorne2.jpg" width="350" alt="licorne 2">\r\n<p>&nbsp;</p>\r\n<p style="text-align:left;">\r\nThe mystery unicorns! Yes they do exist ...<br><br>\r\nDiscover an amazing blades with our exclusive dancing unicorns.<br>\r\nThe grace of this gentle and loving pet will leave you feeling without comparison and unforgettable memories.\r\n</p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
