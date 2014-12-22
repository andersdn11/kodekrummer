--
-- Database: `codecrumbs`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci AUTO_INCREMENT=4 ;

--
-- Data dump for tabellen `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(2, 'HTML / CSS'),
(3, 'PHP');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comments_id` int(11) NOT NULL AUTO_INCREMENT,
  `comments_comment` text NOT NULL,
  `comments_date` date NOT NULL,
  `fk_users_id` int(11) NOT NULL,
  `fk_snippet_id` int(11) NOT NULL,
  PRIMARY KEY (`comments_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Data dump for tabellen `comments`
--

INSERT INTO `comments` (`comments_id`, `comments_comment`, `comments_date`, `fk_users_id`, `fk_snippet_id`) VALUES
(1, 'sadgsdg', '2014-12-21', 1, 1);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `likes_id` int(11) NOT NULL AUTO_INCREMENT,
  `likes_up` tinyint(1) NOT NULL,
  `likes_down` tinyint(1) NOT NULL,
  `fk_snippet_id` int(11) NOT NULL,
  `fk_users_id` int(11) NOT NULL,
  PRIMARY KEY (`likes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Data dump for tabellen `likes`
--

INSERT INTO `likes` (`likes_id`, `likes_up`, `likes_down`, `fk_snippet_id`, `fk_users_id`) VALUES
(3, 1, 0, 3, 0);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `navigation`
--

CREATE TABLE IF NOT EXISTS `navigation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `navn` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci AUTO_INCREMENT=4 ;

--
-- Data dump for tabellen `navigation`
--

INSERT INTO `navigation` (`id`, `navn`, `link`) VALUES
(1, 'Forside', 'forside'),
(2, 'HTML / CSS', 'htmlcss');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `snippet`
--

CREATE TABLE IF NOT EXISTS `snippet` (
  `snippet_id` int(11) NOT NULL AUTO_INCREMENT,
  `snippet_headline` varchar(255) NOT NULL,
  `snippet_content` text NOT NULL,
  `snippet_date` date NOT NULL,
  `fk_category_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  PRIMARY KEY (`snippet_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Data dump for tabellen `snippet`
--

INSERT INTO `snippet` (`snippet_id`, `snippet_headline`, `snippet_content`, `snippet_date`, `fk_category_id`, `fk_user_id`) VALUES
(1, 'Simple jQuery slider', '<p>\r\n        Lorem ipsum dolor sit amet, consectetur adipiscing elit. \r\n       Nullam in faucibus felis. Donec a rhoncus lacus, ut aliquet elit. \r\n        Integer sagittis quam ac urna vulputate, vel sagittis risus tincidunt.\r\n         Praesent euismod, sapien semper pulvinar molestie, ex tellus ullamcorper nisl, \r\n         et tristique turpis ligula sit amet ligula. Integer et consequat nisl. \r\n         Proin in venenatis leo. Mauris feugiat nisi et laoreet lacinia.\r\n      </p>\r\n      <pre><code>\r\n       $(document).ready(function(){\r\n\r\n       //Vis/skjul log ind boks \r\n         $(''#loginBtn'').on(''click'', function(){\r\n\r\n            if( $(''ul li > form'').is('':visible'')){\r\n\r\n              $(''ul li > form'').hide(100);  \r\n\r\n            } else{\r\n\r\n             $(''ul li > form'').show(100);  \r\n            }\r\n\r\n         });\r\n       });\r\n     </code></pre>\r\n\r\n     <p>\r\n       Lorem ipsum dolor sit amet, consectetur adipiscing elit. \r\n       Nullam in faucibus felis. Donec a rhoncus lacus, ut aliquet elit. \r\n        Integer sagittis quam ac urna vulputate, vel sagittis risus tincidunt.\r\n        Praesent euismod, sapien semper pulvinar molestie, ex tellus ullamcorper nisl, \r\n       et tristique turpis ligula sit amet ligula. Integer et consequat nisl. \r\n       Proin in venenatis leo. Mauris feugiat nisi et laoreet lacinia.\r\n     </p>\r\n    \r\n      <p>\r\n       Sed pellentesque faucibus sapien, sed pharetra magna consectetur id. \r\n       Interdum et malesuada fames ac ante ipsum primis in faucibus. \r\n        Ut condimentum scelerisque blandit. Vestibulum ex magna, hendrerit eget ligula sed, \r\n        pretium semper arcu. Mauris vitae arcu pretium purus elementum efficitur sed sed orci. \r\n       Sed at magna imperdiet, aliquet enim ac, semper elit. Nunc sit amet dui volutpat, \r\n        volutpat justo at, luctus metus. Duis lacus lacus, scelerisque ac dictum in, \r\n       suscipit a felis. Morbi non dignissim leo. Cras ac dapibus nisl. Mauris augue sapien, \r\n        convallis vel ligula quis, tincidunt scelerisque diam. Cras leo nulla, blandit ut ornare vitae, \r\n        faucibus non nunc. Fusce cursus vel magna in venenatis. Praesent finibus feugiat ante, \r\n       at tempor urna ultricies a.\r\n     </p>      \r\n    </article>\r\n  </div>', '2014-12-21', 3, 1);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `users_pass` varchar(255) COLLATE utf8_bin NOT NULL,
  `users_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `users_age` int(11) NOT NULL,
  `users_date` date NOT NULL,
  `users_role` int(11) NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_pass`, `users_email`, `users_age`, `users_date`, `users_role`) VALUES
(1, 'Rapzac', '1234', 'asdgasdg@adsgasd.fk', 22, '2014-12-21', 1);
