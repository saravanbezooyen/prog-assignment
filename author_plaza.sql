CREATE DATABASE IF NOT EXISTS `author_plaza` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `author_plaza`;

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL AUTO_INCREMENT,
  `author_name` varchar(100) NOT NULL,
  `author_address` varchar(100) NOT NULL,
  `author_zipcode` varchar(7) NOT NULL,
  `author_city` varchar(100) NOT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `authors` (`author_id`, `author_name`, `author_address`, `author_zipcode`, `author_city`) VALUES
(1, 'Ernest Cline', 'Main street 1', '555 NY', 'New York'),
(2, 'Stephen King', 'Warren Ave 1285', '04105', 'Portland'),
(3, 'John Grisham', 'Goodman Rd 356', '38671', 'Southaven'),
(4, 'Emily Barr', 'Mercers road', 'N70AA', 'London'),
(5, 'Tom Clancy', 'Eastern Ave 843', '21224', 'Baltimore');

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_title` varchar(100) NOT NULL,
  `book_publisher` varchar(100) NOT NULL,
  `book_summary` text NOT NULL,
  `author_id` int(11) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `books` (`book_id`, `book_title`, `book_publisher`, `book_summary`, `author_id`) VALUES
(1, 'Eindspel', 'Luitingh-Sijthoff', 'Eindspel is het nieuwste boek van de Amerikaanse topauteur Tom Clancy, bekend van De jacht op de Red October en Golf van ontzetting. Na een vernietigende nucleaire confrontatie in het Midden-Oosten, staan Amerika en Rusland lijnrecht tegenover elkaar in hun honger naar werelddominantie. ', 5),
(2, 'Opperbevel', 'A.W. Bruna Uitgevers', 'In Rusland is de macht van president Valeri Volodin tanende en in een poging het verloren gegane terrein terug te veroveren, verlegt hij zijn ambities naar het buitenland. Omdat de Verenigde Staten in het verleden dergelijke expansieplannen altijd hebben gedwarsboomd, besluit Volodin tot een andere aanpak. Een drijvende gasinstallatie in Litouwen wordt opgeblazen. ', 5),
(3, 'Command Authority', 'Berkley Books', 'The rise of a powerful new authority figure in Russia is based on a dark secret hidden decades in the past with unexpected ties to President Jack Ryan. Co-written by the best-selling author of The Gray Man series. ', 5),
(4, 'Operatie Rode Storm', 'Bruna', 'Door een aanslag wordt er grote schade toegebracht aan de rijkste Russische olievelden in West-Siberië. Het olietekort wordt zo nijpend dat de Russen besluiten de gebieden rondom de Perzische Golf te bezetten en tegelijk West-Europa onder de voet te lopen om NAVO-interventie te voorkomen. De legertop krijgt exact vier maanden de tijd om deze gigantische aanval, die met Operatie Rode Storm wordt aangeduid, voor te bereiden.', 5),
(5, 'Ready Player One', 'Cornerstone', 't''s the year 2044, and the real world has become an ugly place. We''re out of oil. We''ve wrecked the climate. Famine, poverty, and disease are widespread. Like most of humanity, Wade Watts escapes this depressing reality by spending his waking hours jacked into the OASIS, a sprawling virtual utopia where you can be anything you want to be, where you can live and play and fall in love on any of ten thousand planets. ', 1),
(6, 'Armada', 'Cornerstone', 'Zack Lightman has spent his life dreaming. Dreaming that the real world could be a little more like the countless science-fiction books, movies, and videogames he?s spent his life consuming. Dreaming that one day, some fantastic, world-altering event will shatter the monotony of his humdrum existence and whisk him off on some grand space-faring adventure.', 1),
(7, 'The Importance of Being Ernest', 'Write Bloody Publishing', 'Familiar and resonant, Cline''s collection takes readers into a private landscape of science fiction, pop culture, and pornography. Ernest Cline is a geek, novelist, poet, and screenwriter based in Austin, Texas. In addition to winning poetry slams, Cline is known for screenwriting "Fanboys," released in 2009. He also recently sold the film rights to his latest book, "Armada."', 1),
(8, 'It', 'Luitingh-Sijthoff', 'Een achtentwintig jaar oude belofte brengt zeven volwassenen terug naar Derry, Maine. Hier streden ze als tieners tegen een nachtmerrie zonder einde, een duister kwaad zonder naam dat het voorzien had op jonge kinderen. Omdat ze niet zeker wisten of ze het monster definitief hadden verjaagd, beloofden ze terug te keren als het monster weer van zich liet horen.', 2),
(9, 'De Shining', 'Luitingh-Sijthoff', 'De Shining is waarschijnlijk Stephen Kings beroemdste boek, en werd onvergetelijk verfilmd door Stanley Kubrick.\r\n\r\nJack Torrance, zijn vrouw Wendy en hun vijfjarige zoon Danny verblijven in het Overlook Hotel, waar Jack is ingehuurd als huismeester. Danny heeft een gave: ''het licht'', zoals de oude meneer Hallorann het noemt.', 2),
(10, 'The Green Mile', 'Luitingh-Sijthoff', 'Hoe zou het zijn, vroeg ik me af, om die laatste veertig meter naar de elektrische stoel te lopen, wetend dat je daar zult sterven? En hoe zou de man zich voelen die de veroordeelde op de stoel moet vastsjorren, of de man die de schakelaar overhaalt?''', 2),
(11, 'Christine', 'Luitingh', 'Christine en Arnie zijn verliefd op elkaar. Maar ook de beeldschone Leigh is verliefd op Arnie. Er ontstaat een driehoeksverhouding waarbij de geheimzinnige Christine langzaam maar zeker terrein wint. Ze krijgt het voor elkaar dat Arnie steeds meer van zijn omgeving vervreemd.', 2),
(12, 'De klokkenluider', 'A.W. Bruna Uitgevers', '"Advocate Lacy Stolz werkt al tien jaar voor de Florida Board on Judicial Conduct. In al die tijd hebben slechts twee van haar zaken ertoe geleid dat rechters uit hun ambt werden gezet, in beide gevallen vanwege onbekwaamheid.', 3),
(13, 'De veroordeling', 'A.W. Bruna Uitgevers', 'Een rechter met haar eerste moordzaak.\r\nEen advocaat die het allemaal te veel wordt.\r\nEen aanklager die bloed ruikt en uit is op eeuwige roem.\r\nDe beklaagde, die misschien onschuldig is.\r\nEn de moordenaar, die mogelijk de perfecte misdaad heeft gepleegd', 3),
(14, 'De afperser', 'A.W. Bruna Uitgevers', 'Wanneer rechter Raymond Fawcett maandagochtend niet komt opdagen in de rechtszaal, nemen zijn medewerkers in paniek contact op met de FBI. Fawcetts lichaam wordt korte tijd later gevonden in de kelder van zijn vakantiehuisje, waar hij regelmatig de weekenden doorbracht. Er worden geen sporen van braak gevonden, geen aanwijzingen dat er een gevecht is geweest, alleen de twee lichamen: dat van rechter Fawcett en zijn secretaresse.', 3),
(15, 'De gevangene', 'A.W. Bruna Uitgevers', 'Op 7 december 1982 wordt de 21-jarige serveerster Debbie Carter in haar appartement vermoord. \r\nDe politie, die vrijwel geen aanwijzingen heeft, staat onder grote druk om snel de dader of daders te vinden. Ron Williamson, een aan lager wal geraakte lokale sportheld, is een van de laatsten die Debbie levend heeft gezien. Tenminste, dat beweert een getuige. ', 3),
(16, 'Backpack', 'Boekerij', 'Als Tansys vriend het op het laatste moment laat afweten, vertrekt ze alleen op reis naar het Verre Oosten. Daar aangekomen voelt ze zich tamelijk bedonderd: in tegenstelling tot wat de glossys haar hebben voorgespiegeld, is Saigon een smerige en luidruchtige stad. ', 4),
(17, 'Bedrieglijk', 'Boekerij', 'Een jonge vrouw is vastbesloten haar verloren zus te vinden... tegen elke prijs Liz Greene wist dat haar relatie met Steve niet zo lekker ging. Maar dat hij haar na tien jaar zou verlaten voor een ander, had ze niet verwacht. Eenzaam en wanhopig stort ze haar hart uit bij een vreemde man in het café, waarna ze dronken met hem in bed belandt. ', 4),
(18, 'Perfecte leugen', 'Boekerij', 'Voor Lucy Riddick is Venetië altijd een droombestemming geweest. Een droom die werd geïnspireerd door de romantische poster aan de muur van haar moeders keuken. Venetië lijkt Lucy de ideale plaats om jezelf te verliezen. En dat is precies wat ze nodig heeft wanneer het grote geheim dat ze al jaren voor haar geliefde en haar vrienden verborgen houdt, dreigt uit te komen.', 4);
