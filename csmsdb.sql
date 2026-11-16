-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 21 2025 г., 18:35
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `csmsdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(45) DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'admin', 'admin', 987654321, 'tester1@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2024-01-02 06:21:53');

-- --------------------------------------------------------

--
-- Структура таблицы `tblcars`
--

CREATE TABLE `tblcars` (
  `ID` int(10) NOT NULL,
  `CarName` varchar(50) DEFAULT NULL,
  `CarImage` varchar(120) DEFAULT NULL,
  `CarImage1` varchar(255) DEFAULT NULL,
  `CarImage2` varchar(255) DEFAULT NULL,
  `CarImage3` varchar(255) DEFAULT NULL,
  `CarImage4` varchar(255) DEFAULT NULL,
  `CarType` varchar(120) DEFAULT NULL,
  `CarCompany` varchar(120) DEFAULT NULL,
  `CarBodycolor` varchar(50) NOT NULL,
  `CarBodytype` varchar(50) NOT NULL,
  `CarModel` varchar(50) NOT NULL,
  `CarPrice` varchar(120) DEFAULT NULL,
  `CarNumber` varchar(120) DEFAULT NULL,
  `CarLength` varchar(120) DEFAULT NULL,
  `CarWidth` varchar(120) DEFAULT NULL,
  `CarHeight` varchar(120) DEFAULT NULL,
  `Seatingcapacity` varchar(120) DEFAULT NULL,
  `FuelType` varchar(120) DEFAULT NULL,
  `Displacement` varchar(120) DEFAULT NULL,
  `MaxPower` varchar(120) DEFAULT NULL,
  `MaxTorque` varchar(120) DEFAULT NULL,
  `Milage` varchar(120) DEFAULT NULL,
  `TransmissionType` varchar(120) DEFAULT NULL,
  `NoofGear` varchar(120) DEFAULT NULL,
  `AirCondition` varchar(120) DEFAULT NULL,
  `CarPowerwindow` varchar(120) DEFAULT NULL,
  `CarCenterlocking` varchar(120) DEFAULT NULL,
  `CarABS` varchar(120) DEFAULT NULL,
  `AirBags` varchar(120) DEFAULT NULL,
  `FrontType` varchar(120) DEFAULT NULL,
  `RearType` varchar(120) DEFAULT NULL,
  `CarDescription` varchar(300) DEFAULT NULL,
  `FuelCapacity` varchar(120) DEFAULT NULL,
  `BootSpace` varchar(120) DEFAULT NULL,
  `FogLamps` varchar(120) DEFAULT NULL,
  `EngineDisplay` varchar(120) DEFAULT NULL,
  `CentralLocking` varchar(120) DEFAULT NULL,
  `LastUpdationdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tblcars`
--

INSERT INTO `tblcars` (`ID`, `CarName`, `CarImage`, `CarImage1`, `CarImage2`, `CarImage3`, `CarImage4`, `CarType`, `CarCompany`, `CarBodycolor`, `CarBodytype`, `CarModel`, `CarPrice`, `CarNumber`, `CarLength`, `CarWidth`, `CarHeight`, `Seatingcapacity`, `FuelType`, `Displacement`, `MaxPower`, `MaxTorque`, `Milage`, `TransmissionType`, `NoofGear`, `AirCondition`, `CarPowerwindow`, `CarCenterlocking`, `CarABS`, `AirBags`, `FrontType`, `RearType`, `CarDescription`, `FuelCapacity`, `BootSpace`, `FogLamps`, `EngineDisplay`, `CentralLocking`, `LastUpdationdate`) VALUES
(1, 'Maruti Suzuki Swift', '915fa31995d88d74dabd8666dc52a4a3.jpg', NULL, NULL, NULL, NULL, 'Седан', 'Maruti Suzuki', 'Вишневый', 'Пластик', 'Triber', '5.43 - 10.12 млн тг', '78945', '3995 мм', '1735 мм', '1515', '5', 'Дизель', '1197 см³', '71 л.с.@6250 об/мин', '96Нм@3500 об/мин', '28.4 км/л', 'Автоматическая', '5', 'No', 'Передние и задние', 'Да', 'No', 'Водитель и пассажир', '2', '898', 'Maruti Swift Dzire VXi бензиновая версия стоит 6.27 лакх (ex-showroom) в Дели. Снаружи у этой версии VXi бамперы, дверные ручки и наружные зеркала заднего вида (ORVMs) окрашены в цвет кузова, с указателями поворота. Модель не имеет легкосплавных дисков, но оснащена полноразмерными колпаками.', '37 л', '378 мм', 'Нет', '1197 см³', 'No', '2024-01-10 11:43:41'),
(2, 'Renault Triber', 'a5b118bd8e7c40ffe7ae22e74cbe29c6.jpg', NULL, NULL, NULL, NULL, 'Хэтчбек', 'Renault', 'Белый', 'Пластик', 'ABC', '5.70 - 9.55 млн тг', '78945', '3990 мм', '1739 мм', '1643 мм', '7', 'Дизель', '999 см³', '72 л.с. @ 6250 об/мин', '96Нм @ 3500 об/мин', '28.4 км/л', 'Автоматическая', '5', 'No', 'Передние и задние', 'Да', 'No', 'Водитель и пассажир', 'Mcpherson Strut', 'Torsion Beam', 'Renault Triber — бюджетная модель MPV французской компании Renault. Это 7-местный автомобиль, построенный на базе Renault Kwid. Главное преимущество Renault Triber — возможность снять третий ряд сидений для оптимизации багажного отделения. Есть функция ручного складывания и раскладывания.', '40 л', '378 мм', 'Передние', '1197 см³', 'No', '2024-01-10 11:43:41'),
(3, 'Nissan Kicks', 'd41d8cd98f00b204e9800998ecf8427e.png', NULL, NULL, NULL, NULL, 'Внедорожник', 'Nissan', 'Синий', 'Пластик', 'Kicks', '5.70 - 9.55 млн тг', '78946', '4384 мм', '1813 мм', '1656 мм', '5', 'Дизель', '1498 см³', '104 л.с.@5600 об/мин', '142 Нм@4000 об/мин', '14.2 км/л', 'Автоматическая', '5', 'No', 'Передние и задние', 'Да', 'No', 'Водитель и пассажир', '2', '898', 'Nissan — новый участник, и хотя Kicks еще не производится в Казахстане, у нас была возможность сравнить его с эталоном сегмента — Hyundai Creta.', '50 л', '378 мм', 'Передние', '1197 см³', 'No', '2024-01-10 11:43:41'),
(4, 'MARUTI-SUZUKI ALTO K10', 'cddb23f513bccb3e89a12687fd9de4b2.jpg', NULL, NULL, NULL, NULL, 'Хэтчбек', 'Maruti Suzuki', 'Оранжевый', 'Пластик', 'ALTO K10', '5.70 - 9.55 млн тг', '774654', '3620 мм', '1495 мм', '1460 мм', '5', 'Бензин', '998 см³', '67 л.с.', '91@3500 об/мин', '20.2 км/л', 'Автоматическая', '5', 'No', 'Передние и задние', 'Да', 'No', 'Водитель и пассажир', 'McPherson Strut', '3-Link Rigid Axle', 'Alto K10 — старший брат Maruti-Suzuki Alto 800. Это самый продаваемый автомобиль в Индии и самый доступный для среднего класса. Доступен в цветах Tango Orange, Granite Grey, Fire Brick Red, Silky Silver и Superior White. Имеется сервисный центр.', '35 л', '268 мм', 'Передние', '64646 см³', 'No', '2024-01-10 11:43:41'),
(5, 'Ford Figo Ambiente 2.1', '985dbf74fe122ce6688bb403e28e0544.jpg', NULL, NULL, NULL, NULL, 'Хэтчбек', 'Ford', 'Серебристый', 'Пластик', 'Ambiente 2.1', '5.70 - 9.55 млн тг', '5689', '3886 мм', '1695 мм', '1525 мм', '5', 'Бензин', '1196 см³', '88 л.с.', '112@4000 об/мин', '18.16 км/л', 'Механическая', '5', 'No', 'Передние и задние', 'Да', 'No', 'Водитель и пассажир', 'McPherson Strut', 'Twist Beam', 'Новый хэтчбек Figo — модель следующего поколения Ford в сегменте B. Этот хэтчбек разработан по философии One Ford.', '42 л', '286 мм', 'Задние', '1197 см³', 'No', '2024-01-10 11:43:41'),
(6, 'HYUNDAI EON  Sportz Petrol', '2066225b0edcac9c46cfe98dab4a8cfb.jpg', NULL, NULL, NULL, NULL, 'Хэтчбек', 'Hyundai', 'Красный', 'Пластик', 'Sportz Petrol', '5.70 - 9.55 млн тг', '78456', '3495 мм', '1550 мм', '1500 мм', '5', 'Бензин', '1197 см³', '55 л.с.', '76@4000 об/мин', '21 км/л', 'Механическая', '5', 'No', 'Передние и задние', 'Да', 'No', 'Водитель и пассажир', 'McPherson Strut', 'Torsion Beam Axle', 'Hyundai Eon — городской автомобиль Hyundai. Выпущен в Индии в 2011 году, Eon предназначен для внутреннего и экспортного рынков, это начальный городской автомобиль компании.', '32 л', '378 мм', 'Передние', '1197 см³', 'No', '2024-01-10 11:43:41'),
(7, 'Hyundai Creta', '5e29671750025bdb838e7931f5f15783.jpg', NULL, NULL, NULL, NULL, 'Внедорожник', 'Hyundai', 'Оранжевый', 'Пластик', 'Creta', '5.70 - 9.55 млн тг', '235689', '4270 мм', '1780 мм', '1665 мм', '5', 'Дизель', '1582 см³', '126.2 л.с.@4000 об/мин', '259.87Нм@1500-3000 об/мин', '20.5 км/л', 'Механическая', '5', 'No', 'Передние и задние', 'Нет', 'No', 'Водитель, пассажир и боковые передние', 'McPherson Strut', 'Twist Beam', 'Hyundai Creta постоянно и незаметно обновляется. После выхода Creta facelift через шесть месяцев Hyundai добавила в линейку версию SX(O) Executive. Эта версия доступна с 1.6-литровыми бензиновыми и дизельными двигателями, 6-ступенчатой механической коробкой передач.', '50 л', '400 литров', 'Передние', '1582 см³', 'No', '2024-01-10 11:43:41'),
(8, 'BMW X1', 'd41d8cd98f00b204e9800998ecf8427e.jpg', 'ce04f21ba9b0624d83b0fe8f0f0a14e5.jpg', '455bca91a148120a9d2eb99961cb69bd.jpg', 'db990fb13e06d6de60cfc855b90a696a.jpg', '0e35987b92e2b5057af2208ed4182274.jpg', 'МУВ', 'BMW', 'Белый', 'Металл', 'X1', '5.70 - 9.55 млн тг', 'FSDS24234', '4439', '2060', '505', '4', 'Дизель', '1995', '190 л.с.@4000 об/мин', '400Нм@1750-2500 об/мин', '10 км/л', 'Механическая', '8', 'No', 'НЕТ', 'Да', 'No', 'Да', 'НЕТ', 'НЕТ', 'Характеристики, опции и цена BMW X1\r\nBMW X1 доступен с 1 дизельным и 1 бензиновым двигателем. Дизель — 1995 см³, бензин — 1998 см³. Доступен с автоматической коробкой передач. В зависимости от варианта и типа топлива расход X1 составляет от 15.71 до 20.68 км/л. X1 — ...', '61', '300', 'Передние', 'Да', 'No', '2024-01-10 11:43:41'),
(16, 'MG Hector', '14c14bc3542555241398984169993947.jpg', '156005c5baf40ff51a327f1c34f2975b1563600027.jpg', '799bad5a3b514f096e69bbc4a7896cd91563600027.jpg', 'd0096ec6c83575373e3a21d129ff8fef1563600027.jpg', '032b2cc936860b03048302d991c3498f1563600027.jpg', 'Внедорожник', 'Tata', 'Красный', 'металл', 'Автомат', '5.70 - 9.55 млн тг', 'HJGG25235', '1345', '233', '234', '7', 'Дизель', 'НЕТ', '12000HCC', '24234', '12 км/л', 'Автоматическая', '5', 'No', 'Да', 'Да', 'No', 'Да', 'ghfhgf', 'fdsfds', 'Это пример текста для тестирования', '45 л', 'Да', 'Да', 'Да', 'No', '2024-01-10 11:43:41');

-- --------------------------------------------------------

--
-- Структура таблицы `tblcompany`
--

CREATE TABLE `tblcompany` (
  `ID` int(10) NOT NULL,
  `CompanyName` varchar(120) DEFAULT NULL,
  `CompanyImage` varchar(200) NOT NULL,
  `CompanyRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tblcompany`
--

INSERT INTO `tblcompany` (`ID`, `CompanyName`, `CompanyImage`, `CompanyRegdate`) VALUES
(1, 'Nissan', 'b2a4e42ded25ef0cad02c7a8fe301541.jpg', '2024-01-05 11:01:58'),
(4, 'Audi', '165fa0886c15eb9ffee37819744af8b2.jpg', '2024-01-05 11:01:58'),
(5, 'Bajaj', 'fa6e631f905ad200b857cfb360bfee7b.png', '2024-01-05 11:01:58'),
(7, 'BMW', '0096fd0901bd53ae8874845888b12fa6.jpg', '2024-01-05 11:01:58'),
(9, 'Chevrolet', '2c9b6036d5cf5b7644d0df0fa52f6d1a.jpg', '2024-01-05 11:01:58'),
(10, 'Datsun', 'a66b52d27bdf5885e29f40a5203408b3.jpg', '2024-01-05 11:01:58'),
(12, 'Ferrari', 'd287be81932f2170ccd0fc00af3b77a9.png', '2024-01-05 11:01:58'),
(13, 'Fiat', '4b350a990a2d76f9982987f2e9860d39.jpg', '2024-01-05 11:01:58'),
(15, 'Ford', '1c56cb9527018d07f5846fc1b8dfa19e.jpg', '2024-01-05 11:01:58'),
(16, 'Honda', '7469caa8711f9cda518cbf8b532075c9.png', '2024-01-05 11:01:58'),
(17, 'Hyundai', '09c1ccd09bdc92ba0c07d5792252d0da.png', '2024-01-05 11:01:58'),
(19, 'Jaguar', '4b88c17cb0b9284013d7c7cc38a01c02.jpg', '2024-01-05 11:01:58'),
(24, 'Lexus', '610218a9544639fcbed9866a303fd01d.png', '2024-01-05 11:01:58'),
(25, 'Mahindra', 'a7afd646e3e169976110a92ba231784c.png', '2024-01-05 11:01:58'),
(26, 'Maruti Suzuki', 'e73abd734b96481f98c28fe0d56fa1cc.png', '2024-01-05 11:01:58'),
(28, 'Mercedes-Benz', '0a11b55c90f3f3d0226896e19cc019de.png', '2024-01-05 11:01:58'),
(30, 'MG Motor', '769eaa4877849154165c53f123b9a341.jpg', '2024-01-05 11:01:58'),
(32, 'Mitsubishi', '83c81af559880aa221bbe12f7e3952e1.png', '2024-01-05 11:01:58'),
(36, 'Renault', '53ae0f8889e1e66ac226d631e9826efc.jpg', '2024-01-05 11:01:58'),
(38, 'Skoda', 'edf43a4f08b9c8853c2f39336ee1e00b.png', '2024-01-05 11:01:58'),
(39, 'Tata', '54efb08fede8f0ab5257eeb02f952710.png', '2024-01-05 11:01:58'),
(40, 'Tesla', 'f915b8b50e6ea10b9069180ef592c0f9.jpg', '2024-01-05 11:01:58'),
(41, 'Toyota', '4b8b7b08c7899ca522d1f7a95860c6e8.jpg', '2024-01-05 11:01:58'),
(42, 'Volkswagen', '1ad26f835a2194b4f97c4db6d2d7a69a.jpg', '2024-01-05 11:01:58'),
(43, 'Volvo', 'd99e00f52a1198f15b4ec3bcb7b2cf14.jpg', '2024-01-05 11:01:58'),
(44, 'Test', '799bad5a3b514f096e69bbc4a7896cd9.jpg', '2024-01-05 11:01:58');

-- --------------------------------------------------------

--
-- Структура таблицы `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `ID` int(10) NOT NULL,
  `EnquiryNumber` varchar(10) NOT NULL,
  `CardId` mediumint(50) DEFAULT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Message` varchar(250) DEFAULT NULL,
  `EnquiryDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` varchar(10) NOT NULL,
  `AdminRemark` varchar(200) NOT NULL,
  `AdminRemarkdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tblenquiry`
--

INSERT INTO `tblenquiry` (`ID`, `EnquiryNumber`, `CardId`, `FullName`, `Email`, `MobileNumber`, `Message`, `EnquiryDate`, `Status`, `AdminRemark`, `AdminRemarkdate`) VALUES
(7, '583480868', 1, 'Ануж Кумар', 'ak@gmail.com', 1231231230, 'Я хочу купить этот автомобиль', '2024-01-26 16:07:18', 'Ответ дан', 'Пользователь купил автомобиль', '2024-01-26 16:51:39'),
(8, '240604751', 2, 'Амит', 'amitk123@gmail.com', 1234213123, 'Я хочу купить этот автомобиль в кредит', '2024-01-26 17:00:47', 'Ответ дан', 'Это для проверки.', '2024-01-26 17:01:17');

-- --------------------------------------------------------

--
-- Структура таблицы `tblpages`
--

CREATE TABLE `tblpages` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(120) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `HeadOffice` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `PhoneNumber` bigint(10) NOT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tblpages`
--

INSERT INTO `tblpages` (`ID`, `PageType`, `PageTitle`, `HeadOffice`, `Email`, `PhoneNumber`, `PageDescription`, `UpdationDate`) VALUES
(1, 'aboutus', 'О нас', '', '', 0, 'Добро пожаловать в Car Showroom Management System. Крупнейший автосалон в Индии. Car Showroom Management System всегда стремится предоставить покупателям автомобилей самые полные и удобные услуги.<div><br></div><div><div><ol><li><span style=\"color: rgb(0, 0, 0); font-family: uni_neuebook; font-size: 18px; text-align: center;\">Наше сильное внимание к совершенствованию производства гарантирует, что каждый этап производственного процесса осуществляется с использованием передовых НИОКР и соответствует самым высоким стандартам качества.</span><br></li><li><span style=\"color: rgb(0, 0, 0); font-family: uni_neuebook; font-size: 18px; text-align: center;\">Наши НИОКР-центры инвестируют в внешний вид и дизайн наших автомобилей, а также в безопасность, эффективность и экономию топлива.<br></span></li><li><span style=\"color: rgb(0, 0, 0); font-family: uni_neuebook; font-size: 18px; text-align: center;\">Наши производственные объекты сертифицированы по мировым стандартам производства и качества. У нас есть современные технологии, мотивированные инженеры, квалифицированные специалисты и особое внимание к автоматизации и технологиям.<br></span></li></ol></div></div>', '2024-01-23 05:22:06'),
(2, 'contactus', 'Контакты', 'CSMS: 5-й этаж, ASV Ramana Towers, 52, Venkatnarayana Road, T.Nagar, Ченнай-600 017', 'info@gmail.com', 1234567890, 'Участок 30, Шиваджи Марг, дорога Наджафгарх, напротив CTC Mall, Моти Нагар, Нью-Дели, Дели, 110015<div><br></div>', '2024-01-25 05:22:34');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `tblcars`
--
ALTER TABLE `tblcars`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `tblcompany`
--
ALTER TABLE `tblcompany`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CompanyName` (`CompanyName`);

--
-- Индексы таблицы `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `tblcars`
--
ALTER TABLE `tblcars`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `tblcompany`
--
ALTER TABLE `tblcompany`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT для таблицы `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
