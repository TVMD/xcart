START TRANSACTION;
/*!40101 SET NAMES utf8, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET UNIQUE_CHECKS=0, FOREIGN_KEY_CHECKS=0 */;
/*!40111 SET SQL_NOTES=0 */;
CREATE TABLE `xlite_order_coupons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `coupon_id` int(10) unsigned DEFAULT NULL,
  `code` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `value` decimal(14,4) NOT NULL,
  `type` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_451D92198D9F6D38` (`order_id`),
  KEY `IDX_451D921966C5951B` (`coupon_id`),
  CONSTRAINT `FK_451D921966C5951B` FOREIGN KEY (`coupon_id`) REFERENCES `xlite_coupons` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_451D92198D9F6D38` FOREIGN KEY (`order_id`) REFERENCES `xlite_orders` (`order_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE `xlite_import_logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` int(11) NOT NULL,
  `type` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `code` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `arguments` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `row` int(10) unsigned NOT NULL,
  `processor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE `xlite_global_product_tabs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `enabled` tinyint(1) NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL,
  `service_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `service_name` (`service_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO `xlite_global_product_tabs` VALUES (1,1,NULL,10,'Description'),(2,1,NULL,20,'Specification'),(3,1,NULL,30,'Comments'),(4,1,NULL,60,'Reviews'),(5,1,'Shipping_info',60,NULL),(6,1,'Payment_methods',70,NULL),(7,1,'Return_Policy',80,NULL);
CREATE TABLE `xlite_countries` (
  `code` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `currency_id` int(10) unsigned DEFAULT NULL,
  `id` int(11) NOT NULL,
  `code3` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  PRIMARY KEY (`code`),
  UNIQUE KEY `UNIQ_C4F7794977153098` (`code`),
  KEY `IDX_C4F7794938248176` (`currency_id`),
  KEY `enabled` (`enabled`),
  CONSTRAINT `FK_C4F7794938248176` FOREIGN KEY (`currency_id`) REFERENCES `xlite_currencies` (`currency_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO `xlite_countries` VALUES ('AD',978,20,'AND',1),('AE',784,784,'ARE',1),('AF',971,4,'AFG',1),('AG',951,28,'ATG',1),('AI',951,660,'AIA',1),('AL',8,8,'ALB',1),('AM',51,51,'ARM',1),('AO',973,24,'AGO',1),('AQ',NULL,10,'ATA',1),('AR',32,32,'ARG',1),('AS',840,16,'ASM',1),('AT',978,40,'AUT',1),('AU',36,36,'AUS',1),('AW',533,533,'ABW',1),('AX',978,248,'ALA',1),('AZ',944,31,'AZE',1),('BA',977,70,'BIH',1),('BB',52,52,'BRB',1),('BD',50,50,'BGD',1),('BE',978,56,'BEL',1),('BF',952,854,'BFA',1),('BG',975,100,'BGR',1),('BH',48,48,'BHR',1),('BI',108,108,'BDI',1),('BJ',952,204,'BEN',1),('BL',978,652,'BLM',1),('BM',60,60,'BMU',1),('BN',96,96,'BRN',1),('BO',68,68,'BOL',1),('BQ',840,535,'BES',1),('BR',986,76,'BRA',1),('BS',44,44,'BHS',1),('BT',356,64,'BTN',1),('BV',578,74,'BVT',1),('BW',72,72,'BWA',1),('BY',974,112,'BLR',1),('BZ',84,84,'BLZ',1),('CA',124,124,'CAN',1),('CC',36,166,'CCK',1),('CD',976,180,'COD',1),('CF',950,140,'CAF',1),('CG',950,178,'COG',1),('CH',756,756,'CHE',1),('CI',950,384,'CIV',1),('CK',554,184,'COK',1),('CL',152,152,'CHL',1),('CM',950,120,'CMR',1),('CN',156,156,'CHN',1),('CO',170,170,'COL',1),('CR',188,188,'CRI',1),('CU',192,192,'CUB',1),('CV',132,132,'CPV',1),('CW',532,531,'CUW',1),('CX',36,162,'CXR',1),('CY',978,196,'CYP',1),('CZ',203,203,'CZE',1),('DE',978,276,'DEU',1),('DJ',262,262,'DJI',1),('DK',208,208,'DNK',1),('DM',951,212,'DMA',1),('DO',214,214,'DOM',1),('DZ',12,12,'DZA',1),('EC',840,218,'ECU',1),('EE',978,233,'EST',1),('EG',818,818,'EGY',1),('EH',504,732,'ESH',1),('ER',232,232,'ERI',1),('ES',978,724,'ESP',1),('ET',230,231,'ETH',1),('FI',978,246,'FIN',1),('FJ',242,242,'FJI',1),('FK',238,238,'FLK',1),('FM',840,583,'FSM',1),('FO',208,234,'FRO',1),('FR',978,250,'FRA',1),('GA',950,266,'GAB',1),('GB',826,826,'GBR',1),('GD',951,308,'GRD',1),('GE',981,268,'GEO',1),('GF',978,254,'GUF',1),('GG',826,831,'GGY',1),('GH',936,288,'GHA',1),('GI',292,292,'GIB',1),('GL',208,304,'GRL',1),('GM',270,270,'GMB',1),('GN',324,324,'GIN',1),('GP',978,312,'GLP',1),('GQ',950,226,'GNQ',1),('GR',978,300,'GRC',1),('GS',826,239,'SGS',1),('GT',320,320,'GTM',1),('GU',840,316,'GUM',1),('GW',952,624,'GNB',1),('GY',328,328,'GUY',1),('HK',344,344,'HKG',1),('HM',36,334,'HMD',1),('HN',340,340,'HND',1),('HR',191,191,'HRV',1),('HT',332,332,'HTI',1),('HU',348,348,'HUN',1),('ID',360,360,'IDN',1),('IE',978,372,'IRL',1),('IL',376,376,'ISR',1),('IM',826,833,'IMN',1),('IN',356,356,'IND',1),('IO',840,86,'IOT',1),('IQ',368,368,'IRQ',1),('IR',364,364,'IRN',1),('IS',352,352,'ISL',1),('IT',978,380,'ITA',1),('JE',826,832,'JEY',1),('JM',388,388,'JAM',1),('JO',400,400,'JOR',1),('JP',392,392,'JPN',1),('KE',404,404,'KEN',1),('KG',417,417,'KGZ',1),('KH',116,116,'KHM',1),('KI',36,296,'KIR',1),('KM',174,174,'COM',1),('KN',951,659,'KNA',1),('KP',408,408,'PRK',1),('KR',410,410,'KOR',1),('KW',414,414,'KWT',1),('KY',136,136,'CYM',1),('KZ',398,398,'KAZ',1),('LA',418,418,'LAO',1),('LB',422,422,'LBN',1),('LC',951,662,'LCA',1),('LI',756,438,'LIE',1),('LK',144,144,'LKA',1),('LR',430,430,'LBR',1),('LS',426,426,'LSO',1),('LT',440,440,'LTU',1),('LU',978,442,'LUX',1),('LV',428,428,'LVA',1),('LY',434,434,'LBY',1),('MA',504,504,'MAR',1),('MC',978,492,'MCO',1),('MD',498,498,'MDA',1),('ME',978,499,'MNE',1),('MF',978,663,'MAF',1),('MG',969,450,'MDG',1),('MH',840,584,'MHL',1),('MK',807,807,'MKD',1),('ML',952,466,'MLI',1),('MM',64,104,'MMR',1),('MN',496,496,'MNG',1),('MO',446,446,'MAC',1),('MP',840,580,'MNP',1),('MQ',978,474,'MTQ',1),('MR',478,478,'MRT',1),('MS',951,500,'MSR',1),('MT',978,470,'MLT',1),('MU',480,480,'MUS',1),('MV',462,462,'MDV',1),('MW',454,454,'MWI',1),('MX',484,484,'MEX',1),('MY',458,458,'MYS',1),('MZ',943,508,'MOZ',1),('NA',516,516,'NAM',1),('NC',953,540,'NCL',1),('NE',952,562,'NER',1),('NF',36,574,'NFK',1),('NG',566,566,'NGA',1),('NI',558,558,'NIC',1),('NL',978,528,'NLD',1),('NO',578,578,'NOR',1),('NP',524,524,'NPL',1),('NR',36,520,'NRU',1),('NU',554,570,'NIU',1),('NZ',554,554,'NZL',1),('OM',512,512,'OMN',1),('PA',590,591,'PAN',1),('PE',604,604,'PER',1),('PF',953,258,'PYF',1),('PG',598,598,'PNG',1),('PH',608,608,'PHL',1),('PK',586,586,'PAK',1),('PL',985,616,'POL',1),('PM',978,666,'SPM',1),('PN',554,612,'PCN',1),('PR',840,630,'PRI',1),('PS',400,275,'PSE',1),('PT',978,620,'PRT',1),('PW',840,585,'PLW',1),('PY',600,600,'PRY',1),('QA',634,634,'QAT',1),('RE',978,638,'REU',1),('RO',946,642,'ROU',1),('RS',941,688,'SRB',1),('RU',643,643,'RUS',1),('RW',646,646,'RWA',1),('SA',682,682,'SAU',1),('SB',90,90,'SLB',1),('SC',690,690,'SYC',1),('SD',938,729,'SDN',1),('SE',752,752,'SWE',1),('SG',702,702,'SGP',1),('SH',654,654,'SHN',1),('SI',978,705,'SVN',1),('SJ',978,744,'SJM',1),('SK',978,703,'SVK',1),('SL',694,694,'SLE',1),('SM',978,674,'SMR',1),('SN',952,686,'SEN',1),('SO',706,706,'SOM',1),('SR',968,740,'SUR',1),('SS',728,728,'SSD',1),('ST',678,678,'STP',1),('SV',222,222,'SLV',1),('SX',532,534,'SXM',1),('SY',760,760,'SYR',1),('SZ',748,748,'SWZ',1),('TC',840,796,'TCA',1),('TD',950,148,'TCD',1),('TF',978,260,'ATF',1),('TG',952,768,'TGO',1),('TH',764,764,'THA',1),('TJ',972,762,'TJK',1),('TK',554,772,'TKL',1),('TL',840,626,'TLS',1),('TM',934,795,'TKM',1),('TN',788,788,'TUN',1),('TO',776,776,'TON',1),('TR',949,792,'TUR',1),('TT',780,780,'TTO',1),('TV',36,798,'TUV',1),('TW',901,158,'TWN',1),('TZ',834,834,'TZA',1),('UA',980,804,'UKR',1),('UG',800,800,'UGA',1),('UM',840,581,'UMI',1),('US',840,840,'USA',1),('UY',858,858,'URY',1),('UZ',860,860,'UZB',1),('VA',978,336,'VAT',1),('VC',951,670,'VCT',1),('VE',937,862,'VEN',1),('VG',840,92,'VGB',1),('VI',840,850,'VIR',1),('VN',704,704,'VNM',1),('VU',548,548,'VUT',1),('WF',953,876,'WLF',1),('WS',882,882,'WSM',1),('YE',886,887,'YEM',1),('YT',978,175,'MYT',1),('ZA',710,710,'ZAF',1),('ZM',894,894,'ZMB',1),('ZW',932,716,'ZWE',1);
CREATE TABLE `xlite_pin_codes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `createDate` int(11) NOT NULL,
  `isSold` tinyint(1) NOT NULL,
  `isBlocked` tinyint(1) NOT NULL,
  `productId` int(10) unsigned DEFAULT NULL,
  `orderItemId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `productCode` (`code`,`productId`),
  KEY `IDX_454145C536799605` (`productId`),
  KEY `IDX_454145C5BBF22A26` (`orderItemId`),
  CONSTRAINT `FK_454145C5BBF22A26` FOREIGN KEY (`orderItemId`) REFERENCES `xlite_order_items` (`item_id`) ON DELETE SET NULL,
  CONSTRAINT `FK_454145C536799605` FOREIGN KEY (`productId`) REFERENCES `xlite_products` (`product_id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE `xlite_order_capost_parcel_shipment_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idx` int(11) DEFAULT NULL,
  `mediaType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipmentId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EB25DE223C5EEBE2` (`shipmentId`),
  CONSTRAINT `FK_EB25DE223C5EEBE2` FOREIGN KEY (`shipmentId`) REFERENCES `xlite_order_capost_parcel_shipment` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE `xlite_upselling_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned DEFAULT NULL,
  `parent_product_id` int(10) unsigned DEFAULT NULL,
  `orderBy` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1DF3D3E14584665A` (`product_id`),
  KEY `parent_product_index` (`parent_product_id`),
  CONSTRAINT `FK_1DF3D3E12C7E20A` FOREIGN KEY (`parent_product_id`) REFERENCES `xlite_products` (`product_id`) ON DELETE CASCADE,
  CONSTRAINT `FK_1DF3D3E14584665A` FOREIGN KEY (`product_id`) REFERENCES `xlite_products` (`product_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO `xlite_upselling_products` VALUES (1,12,16,0),(2,16,12,0),(3,13,16,0),(4,16,13,0),(5,14,16,0),(6,16,14,0),(7,17,16,0),(8,16,17,0),(9,13,12,0),(10,12,13,0),(11,14,12,0),(12,12,14,0),(13,17,12,0),(14,12,17,0),(15,14,13,0),(16,13,14,0),(17,17,13,0),(18,13,17,0),(19,14,17,0),(20,17,14,0),(27,28,41,0),(29,30,41,0),(31,39,41,0),(33,40,37,0),(35,40,41,0),(37,28,37,0),(39,30,37,0),(41,39,37,0),(43,28,42,0),(45,30,42,0),(47,39,42,0),(49,40,42,0);
CREATE TABLE `xlite_product_tab_translations` (
  `label_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brief_info` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `code` char(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`label_id`),
  KEY `IDX_D669DEC9BF396750` (`id`),
  CONSTRAINT `FK_D669DEC9BF396750` FOREIGN KEY (`id`) REFERENCES `xlite_product_tabs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO `xlite_product_tab_translations` VALUES (1,190,'Privacy','','<h1 class=\"hero-headline\">Apple’s commitment to your privacy</h1>\n<p>At Apple, your trust means everything to us. That’s why we respect your privacy and protect it with strong encryption, plus strict policies that govern how all data is handled.</p>\n<p>Security and privacy are fundamental to the design of all our hardware, software, and services, including iCloud and new services like Apple Pay. And we continue to make improvements. Two-step verification, which we encourage all our customers to use, in addition to protecting your Apple ID account information, now also protects all of the data you store and keep up to date with iCloud.</p>\n<p>We believe in telling you up front exactly what’s going to happen to your personal information and asking for your permission before you share it with us. And if you change your mind later, we make it easy to stop sharing with us. Every Apple product is designed around those principles. When we do ask to use your data, it’s to provide you with a better user experience.</p>\n<p>We’re publishing this website to explain how we handle your personal information, what we do and don’t collect, and why. We’re going to make sure you get updates here about privacy at Apple at least once a year and whenever there are significant changes to our policies.</p>\n<p>A few years ago, users of Internet services began to realize that when an online service is free, you’re not the customer. You’re the product. But at Apple, we believe a great customer experience shouldn’t come at the expense of your privacy.</p>\n<p>Our business model is very straightforward: We sell great products. We don’t build a profile based on your email content or web browsing habits to sell to advertisers. We don’t “monetize” the information you store on your iPhone or in iCloud. And we don’t read your email or your messages to get information to market to you. Our software and services are designed to make our devices better. Plain and simple.</p>\n<p>One very small part of our business does serve advertisers, and that’s iAd. We built an advertising network because some app developers depend on that business model, and we want to support them as well as a free iTunes Radio service. iAd sticks to the same privacy policy that applies to every other Apple product. It doesn’t get data from Health and HomeKit, Maps, Siri, iMessage, your call history, or any iCloud service like Contacts or Mail, and you can always just opt out altogether.</p>\n<p>Finally, I want to be absolutely clear that we have never worked with any government agency from any country to create a backdoor in any of our products or services. We have also never allowed access to our servers. And we never will.</p>\n<p>Our commitment to protecting your privacy comes from a deep respect for our customers. We know that your trust doesn’t come easy. That’s why we have and always will work as hard as we can to earn and keep it.</p>\n<p><strong>Tim Cook</strong><br /><span class=\"attribution-title\">CEO, Apple Inc.</span></p>','en'),(2,190,'Конфиденциальность','','<h1 class=\"hero-headline\">Политика конфиденциальности Apple</h1>\n<p>Компания Apple очень дорожит вашим доверием. И мы уважаем ваше право на защиту личных данных. Чтобы обеспечить конфиденциальность, мы используем надёжное шифрование и выполняем строгие правила, которые применяются при обработке любой информации.</p>\n<p>Безопасность и конфиденциальность лежат в основе всех наших устройств, приложений и служб, включая iCloud и новые сервисы, такие как Apple Pay. И мы продолжаем совершенствовать средства защиты. Так, все данные, которые хранятся в iCloud или синхронизируются через него, теперь защищаются при помощи проверки подлинности в два этапа. Мы всем рекомендуем пользоваться ей и обязательно хранить в тайне Apple ID и пароль.</p>\n<p>Мы считаем своей обязанностью заранее предупреждать вас о том, что может случиться с вашей личной информацией, и получать согласие на предоставление этих данных. А если вы передумаете, то в любой момент сможете отключить передачу личных данных. По этому принципу работает каждый продукт Apple. Если мы запрашиваем ваши данные, то только для того, чтобы вам было проще и удобнее пользоваться нашей продукцией.</p>\n<p>Мы создали этот веб-сайт, чтобы объяснить вам, как и почему мы используем личную информацию, какие сведения мы собираем, а какие нет. Мы обязательно будем обновлять текст Политики конфиденциальности на этом сайте как минимум раз в год, а также при внесении любых существенных изменений.</p>\n<p>Несколько лет назад пользователи некоторых интернет-сервисов стали замечать, что из клиентов они превращаются в товар. Мы в Apple убеждены, что высокое качество обслуживания не должно достигаться в ущерб конфиденциальности.</p>\n<p>Модель нашего бизнеса крайне проста: мы продаём отличные продукты. Мы не создаём досье на основе переписки, истории просмотра веб-сайтов и других действий, и мы никогда не выставим на продажу данные своих пользователей. Мы не пытаемся заработать на информации, которую вы храните на iPad и в iCloud. И мы не читаем вашу почту и сообщения, чтобы показывать вам рекламу. Наше программное обеспечение и услуги созданы для вашего удобства. И ни для чего другого.</p>\n<p>Единственное, что мы делаем для рекламодателей — это iAd. Мы создали рекламную сеть, потому что некоторые разработчики зависят от такой модели ведения бизнеса, и нам хотелось бы их поддержать. То же самое можно сказать про бесплатную службу iTunes Radio. iAd подчиняется той же политике безопасности, что и все остальные решения Apple. Она не получает информацию от приложений Здоровье, HomeKit, Карты, Siri и iMessage, не имеет доступа к истории звонков, не подключается к таким службам iCloud, как Контакты или Mail, и так далее. И вы можете полностью от неё отказаться в любой момент.</p>\n<p>Наконец, я хотел бы прямо заявить, что мы никогда не сотрудничали с государственными органами каких бы то ни было стран на предмет создания «лазеек» в наших продуктах и службах. Мы никогда не давали доступа к нашим серверам. И обязуемся не делать этого в будущем.</p>\n<p>Мы защищаем вашу личную информацию, потому что уважаем вас. Мы знаем, как непросто заслужить доверие. И именно поэтому мы всегда будем делать всё возможное, чтобы не утратить его.</p>\n<p><strong>Тим Кук</strong><br /><span class=\"attribution-title\">Генеральный директор Apple Inc.</span></p>','ru'),(3,191,'Конфиденциальность','','<h1 class=\"hero-headline\">Политика конфиденциальности Apple</h1>\n<p>Компания Apple очень дорожит вашим доверием. И мы уважаем ваше право на защиту личных данных. Чтобы обеспечить конфиденциальность, мы используем надёжное шифрование и выполняем строгие правила, которые применяются при обработке любой информации.</p>\n<p>Безопасность и конфиденциальность лежат в основе всех наших устройств, приложений и служб, включая iCloud и новые сервисы, такие как Apple Pay. И мы продолжаем совершенствовать средства защиты. Так, все данные, которые хранятся в iCloud или синхронизируются через него, теперь защищаются при помощи проверки подлинности в два этапа. Мы всем рекомендуем пользоваться ей и обязательно хранить в тайне Apple ID и пароль.</p>\n<p>Мы считаем своей обязанностью заранее предупреждать вас о том, что может случиться с вашей личной информацией, и получать согласие на предоставление этих данных. А если вы передумаете, то в любой момент сможете отключить передачу личных данных. По этому принципу работает каждый продукт Apple. Если мы запрашиваем ваши данные, то только для того, чтобы вам было проще и удобнее пользоваться нашей продукцией.</p>\n<p>Мы создали этот веб-сайт, чтобы объяснить вам, как и почему мы используем личную информацию, какие сведения мы собираем, а какие нет. Мы обязательно будем обновлять текст Политики конфиденциальности на этом сайте как минимум раз в год, а также при внесении любых существенных изменений.</p>\n<p>Несколько лет назад пользователи некоторых интернет-сервисов стали замечать, что из клиентов они превращаются в товар. Мы в Apple убеждены, что высокое качество обслуживания не должно достигаться в ущерб конфиденциальности.</p>\n<p>Модель нашего бизнеса крайне проста: мы продаём отличные продукты. Мы не создаём досье на основе переписки, истории просмотра веб-сайтов и других действий, и мы никогда не выставим на продажу данные своих пользователей. Мы не пытаемся заработать на информации, которую вы храните на iPad и в iCloud. И мы не читаем вашу почту и сообщения, чтобы показывать вам рекламу. Наше программное обеспечение и услуги созданы для вашего удобства. И ни для чего другого.</p>\n<p>Единственное, что мы делаем для рекламодателей — это iAd. Мы создали рекламную сеть, потому что некоторые разработчики зависят от такой модели ведения бизнеса, и нам хотелось бы их поддержать. То же самое можно сказать про бесплатную службу iTunes Radio. iAd подчиняется той же политике безопасности, что и все остальные решения Apple. Она не получает информацию от приложений Здоровье, HomeKit, Карты, Siri и iMessage, не имеет доступа к истории звонков, не подключается к таким службам iCloud, как Контакты или Mail, и так далее. И вы можете полностью от неё отказаться в любой момент.</p>\n<p>Наконец, я хотел бы прямо заявить, что мы никогда не сотрудничали с государственными органами каких бы то ни было стран на предмет создания «лазеек» в наших продуктах и службах. Мы никогда не давали доступа к нашим серверам. И обязуемся не делать этого в будущем.</p>\n<p>Мы защищаем вашу личную информацию, потому что уважаем вас. Мы знаем, как непросто заслужить доверие. И именно поэтому мы всегда будем делать всё возможное, чтобы не утратить его.</p>\n<p><strong>Тим Кук</strong><br /><span class=\"attribution-title\">Генеральный директор Apple Inc.</span></p>','ru'),(4,191,'Privacy','','<h1 class=\"hero-headline\">Apple’s commitment to your privacy</h1>\n<p>At Apple, your trust means everything to us. That’s why we respect your privacy and protect it with strong encryption, plus strict policies that govern how all data is handled.</p>\n<p>Security and privacy are fundamental to the design of all our hardware, software, and services, including iCloud and new services like Apple Pay. And we continue to make improvements. Two-step verification, which we encourage all our customers to use, in addition to protecting your Apple ID account information, now also protects all of the data you store and keep up to date with iCloud.</p>\n<p>We believe in telling you up front exactly what’s going to happen to your personal information and asking for your permission before you share it with us. And if you change your mind later, we make it easy to stop sharing with us. Every Apple product is designed around those principles. When we do ask to use your data, it’s to provide you with a better user experience.</p>\n<p>We’re publishing this website to explain how we handle your personal information, what we do and don’t collect, and why. We’re going to make sure you get updates here about privacy at Apple at least once a year and whenever there are significant changes to our policies.</p>\n<p>A few years ago, users of Internet services began to realize that when an online service is free, you’re not the customer. You’re the product. But at Apple, we believe a great customer experience shouldn’t come at the expense of your privacy.</p>\n<p>Our business model is very straightforward: We sell great products. We don’t build a profile based on your email content or web browsing habits to sell to advertisers. We don’t “monetize” the information you store on your iPhone or in iCloud. And we don’t read your email or your messages to get information to market to you. Our software and services are designed to make our devices better. Plain and simple.</p>\n<p>One very small part of our business does serve advertisers, and that’s iAd. We built an advertising network because some app developers depend on that business model, and we want to support them as well as a free iTunes Radio service. iAd sticks to the same privacy policy that applies to every other Apple product. It doesn’t get data from Health and HomeKit, Maps, Siri, iMessage, your call history, or any iCloud service like Contacts or Mail, and you can always just opt out altogether.</p>\n<p>Finally, I want to be absolutely clear that we have never worked with any government agency from any country to create a backdoor in any of our products or services. We have also never allowed access to our servers. And we never will.</p>\n<p>Our commitment to protecting your privacy comes from a deep respect for our customers. We know that your trust doesn’t come easy. That’s why we have and always will work as hard as we can to earn and keep it.</p>\n<p><strong>Tim Cook</strong><br /><span class=\"attribution-title\">CEO, Apple Inc.</span></p>','en');
CREATE TABLE `xlite_mailchimp_profile_interests` (
  `group_name_id` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `profile_id` int(11) NOT NULL,
  PRIMARY KEY (`group_name_id`,`profile_id`),
  KEY `IDX_BA74923AF717C8DA` (`group_name_id`),
  KEY `IDX_BA74923ACCFA12B8` (`profile_id`),
  CONSTRAINT `FK_BA74923ACCFA12B8` FOREIGN KEY (`profile_id`) REFERENCES `xlite_profiles` (`profile_id`) ON DELETE CASCADE,
  CONSTRAINT `FK_BA74923AF717C8DA` FOREIGN KEY (`group_name_id`) REFERENCES `xlite_mailchimp_list_group_name` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE `xlite_order_surcharges` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `type` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `include` tinyint(1) NOT NULL,
  `available` tinyint(1) NOT NULL,
  `value` decimal(14,4) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3583A1698D9F6D38` (`order_id`),
  CONSTRAINT `FK_3583A1698D9F6D38` FOREIGN KEY (`order_id`) REFERENCES `xlite_orders` (`order_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO `xlite_order_surcharges` VALUES (1,1,'shipping','SHIPPING','\\XLite\\Logic\\Order\\Modifier\\Shipping',0,1,1.5000,'Shipping cost',0),(2,1,'discount','DISCOUNT','\\XLite\\Module\\CDev\\VolumeDiscounts\\Logic\\Order\\Modifier\\Discount',0,1,-3.0000,'Discount',0),(3,2,'shipping','SHIPPING','\\XLite\\Logic\\Order\\Modifier\\Shipping',0,1,3.7200,'Shipping cost',0),(4,3,'shipping','SHIPPING','\\XLite\\Logic\\Order\\Modifier\\Shipping',0,1,0.0000,'Shipping cost',0),(5,4,'shipping','SHIPPING','\\XLite\\Logic\\Order\\Modifier\\Shipping',0,1,3.0200,'Shipping cost',0),(6,5,'shipping','SHIPPING','\\XLite\\Logic\\Order\\Modifier\\Shipping',0,1,1.5000,'Shipping cost',0);
CREATE TABLE `xlite_attribute_values_checkbox_translations` (
  `label_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) unsigned DEFAULT NULL,
  `code` char(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`label_id`),
  KEY `ci` (`code`,`id`),
  KEY `id` (`id`),
  CONSTRAINT `FK_5A770E51BF396750` FOREIGN KEY (`id`) REFERENCES `xlite_attribute_values_checkbox` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE `xlite_quick_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned DEFAULT NULL,
  `membership_id` int(10) unsigned DEFAULT NULL,
  `price` decimal(14,4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C6F6D1AD4584665A` (`product_id`),
  KEY `IDX_C6F6D1AD1FB354CD` (`membership_id`),
  KEY `customerArea` (`membership_id`,`product_id`),
  CONSTRAINT `FK_C6F6D1AD1FB354CD` FOREIGN KEY (`membership_id`) REFERENCES `xlite_memberships` (`membership_id`) ON DELETE CASCADE,
  CONSTRAINT `FK_C6F6D1AD4584665A` FOREIGN KEY (`product_id`) REFERENCES `xlite_products` (`product_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO `xlite_quick_data` VALUES (1,1,1,19.9900),(2,1,NULL,19.9900),(3,2,1,49.9900),(4,2,NULL,49.9900),(5,3,1,19.9900),(6,3,NULL,19.9900),(7,4,1,24.9900),(8,4,NULL,24.9900),(9,5,1,19.9900),(10,5,NULL,19.9900),(11,6,1,79.9900),(12,6,NULL,47.9900),(13,7,1,29.9900),(14,7,NULL,29.9900),(15,8,1,19.9900),(16,8,NULL,14.9900),(17,9,1,19.9900),(18,9,NULL,19.9900),(19,10,1,34.9900),(20,10,NULL,34.9900),(21,11,1,14.9900),(22,11,NULL,14.9900),(23,12,1,9.9900),(24,12,NULL,9.9900),(25,13,1,19.9900),(26,13,NULL,19.9900),(27,14,1,39.9900),(28,14,NULL,39.9900),(29,15,1,29.9900),(30,15,NULL,25.4900),(31,16,1,19.9900),(32,16,NULL,14.9900),(33,17,1,99.0000),(34,17,NULL,99.0000),(35,18,1,49.9900),(36,18,NULL,49.9900),(37,19,1,19.9900),(38,19,NULL,19.9900),(39,20,1,9.9900),(40,20,NULL,9.9900),(41,21,1,9.9900),(42,21,NULL,9.9900),(43,22,1,29.9900),(44,22,NULL,29.9900),(45,23,1,19.9900),(46,23,NULL,19.9900),(47,24,1,29.9900),(48,24,NULL,29.9900),(49,25,1,14.9900),(50,25,NULL,14.9900),(51,26,1,19.9900),(52,26,NULL,19.9900),(53,27,1,12.9900),(54,27,NULL,6.4900),(55,28,1,69.9900),(56,28,NULL,69.9900),(57,29,1,79.9900),(58,29,NULL,79.9900),(59,30,1,299.9900),(60,30,NULL,299.9900),(61,31,1,49.9900),(62,31,NULL,19.9900),(63,32,1,59.9900),(64,32,NULL,44.9900),(65,33,1,11.9900),(66,33,NULL,11.9900),(67,34,1,139.9900),(68,34,NULL,139.9900),(69,35,1,49.9900),(70,35,NULL,39.9900),(71,36,1,34.9900),(72,36,NULL,34.9900),(73,37,1,650.0000),(74,37,NULL,650.0000),(75,38,1,817.5900),(76,38,NULL,817.5900),(77,39,1,399.0000),(78,39,NULL,399.0000),(79,40,1,199.9900),(80,40,NULL,199.9900),(81,41,1,850.0000),(82,41,NULL,850.0000),(83,42,1,299.0000),(84,42,NULL,299.0000);
CREATE TABLE `xlite_menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lpos` int(11) NOT NULL,
  `rpos` int(11) NOT NULL,
  `depth` int(11) NOT NULL,
  `type` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `visibleFor` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_AC666883727ACA70` (`parent_id`),
  KEY `enabled` (`enabled`,`type`),
  KEY `position` (`position`),
  CONSTRAINT `FK_AC666883727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `xlite_menus` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO `xlite_menus` VALUES (1,2,'{home}',2,3,0,'P',100,1,'AL'),(2,NULL,'link',1,64,-1,'P',0,1,'AL'),(3,2,'{my account}',4,9,0,'P',600,1,'L'),(4,3,'?target=order_list',5,6,1,'P',100,1,'L'),(5,3,'?target=address_book',7,8,1,'P',200,1,'L'),(6,2,'shipping.html',10,11,0,'P',200,1,'AL'),(7,2,'{new arrivals}',12,13,0,'P',400,1,'AL'),(8,2,'{coming soon}',14,15,0,'P',500,1,'AL'),(9,2,NULL,16,23,0,'P',150,1,'AL'),(10,9,'{sale}',17,18,1,'P',100,1,'AL'),(11,9,'{bestsellers}',19,20,1,'P',200,1,'AL'),(12,9,'?target=special_offers',21,22,1,'P',300,0,'AL'),(13,2,'{contact us}',24,25,0,'P',700,1,'AL'),(14,2,NULL,26,33,0,'F',100,1,'AL'),(15,14,'apparel',27,28,1,'F',100,1,'AL'),(16,14,'igoods',29,30,1,'F',200,1,'AL'),(17,14,'toys',31,32,1,'F',300,1,'AL'),(18,2,NULL,34,41,0,'F',200,1,'AL'),(19,18,'{sale}',35,36,1,'F',100,1,'AL'),(20,18,'{coming soon}',37,38,1,'F',200,1,'AL'),(21,18,'{new arrivals}',39,40,1,'F',300,1,'AL'),(22,2,NULL,42,49,0,'F',300,1,'AL'),(23,22,'shipping.html',43,44,1,'F',100,1,'AL'),(24,22,'?target=map',45,46,1,'F',200,1,'AL'),(25,22,'terms-and-conditions.html',47,48,1,'F',300,1,'AL'),(26,2,NULL,50,55,0,'F',400,1,'AL'),(27,26,'shipping.html',51,52,1,'F',100,1,'AL'),(28,26,'{contact us}',53,54,1,'F',200,1,'AL'),(29,2,NULL,56,63,0,'F',500,1,'L'),(30,29,'?target=address_book',57,58,1,'F',100,1,'L'),(31,29,'?target=order_list',59,60,1,'F',200,1,'L'),(32,29,'?target=profile',61,62,1,'F',300,1,'L');
CREATE TABLE `xlite_category_banners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `hash` char(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `needProcess` tinyint(1) NOT NULL,
  `path` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `fileName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mime` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `storageType` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(10) unsigned NOT NULL,
  `date` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_69B8F0D412469DE2` (`category_id`),
  CONSTRAINT `FK_69B8F0D412469DE2` FOREIGN KEY (`category_id`) REFERENCES `xlite_categories` (`category_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO `xlite_category_banners` VALUES (1,2,'',2720,800,NULL,1,'banner_igoods_clean.jpg','','image/jpeg','r',125253,1394109447),(2,3,'',2720,800,NULL,1,'banner_igoods_clean.jpg','','image/jpeg','r',125253,1394109447),(3,4,'',2720,800,NULL,1,'banner_apparel_clean.jpg','','image/jpeg','r',122998,1394109447),(4,5,'',2720,800,NULL,1,'banner_toys_clean.jpg','','image/jpeg','r',124298,1394109447);
CREATE TABLE `xlite_banner_rotation_slide` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `enabled` tinyint(1) NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO `xlite_banner_rotation_slide` VALUES (1,1,'cart.php?target=category&category_id=4',20),(2,1,'cart.php?target=category&category_id=5',10);
COMMIT;