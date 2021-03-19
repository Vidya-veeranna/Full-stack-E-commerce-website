CREATE TABLE `product` (
  `item_id` int(5) NOT NULL AUTO_INCREMENT primary key,
  `item_name` varchar(255) NOT NULL,
  `item_price` int(10) NOT NULL,
  `item_image1` varchar(255) NOT NULL,
  `item_image2` varchar(255) NOT NULL,
  `item_image3` varchar(255) NOT NULL,
  `Gender` varchar(10) NOT NULL
);



INSERT INTO `product` (`item_name`, `item_price`, `item_image1`, `item_image2`, `item_image3`, `Gender`) VALUES
('Green Printed Kurta',559,'./assets/Women/Women_Chudi1.1.jpg','./assets/Women/Women_Chudi1.2.jpg','./assets/Women/Women_Chudi1.3.jpg','F'),
('Green and Red Lehenga',2949,'./assets/Women/Women_Ethnic1.1.jpg','./assets/Women/Women_Ethnic1.2.jpg','./assets/Women/Women_Ethnic1.3.jpg','F'),
('Teal Solid Kurta',719,'./assets/Women/Women_Chudi2.1.jpg','./assets/Women/Women_Chudi2.2.jpg','./assets/Women/Women_Chudi2.3.jpg','F'),
('Embroidery Grand Lehenga',3995,'./assets/Women/Women_Ethnic2.1.jpg','./assets/Women/Women_Ethnic2.2.jpg','./assets/Women/Women_Ethnic2.3.jpg','F'),
('Mitera Banarasi Saree',1149,'./assets/Women/Women_Saree1.1.jpg','./assets/Women/Women_Saree1.2.jpg','./assets/Women/Women_Saree1.3.jpg','F'),
('Tikhi Black Embellished Saree',999,'./assets/Women/Women_Saree2.1.jpg','./assets/Women/Women_Saree2.2.jpg','./assets/Women/Women_Saree2.3.jpg','F'),
('Yufta Embroidered Kurta',1151,'./assets/Women/Women_Chudi3.1.jpg','./assets/Women/Women_Chudi3.2.jpg','./assets/Women/Women_Chudi3.3.jpg','F'),
('Chhabra Saree',4299,'./assets/Women/Women_Ethnic3.1.jpg','./assets/Women/Women_Ethnic3.2.jpg','./assets/Women/Women_Ethnic3.3.jpg','F'),
('Chhabar Printed Kurta',799,'./assets/Women/Women_Chudi4.1.jpg','./assets/Women/Women_Chudi4.2.jpg','./assets/Women/Women_Chudi4.3.jpg','F'),
('Black and Blue Crepe Printed Saree',989,'./assets/Women/Women_Saree3.1.jpg','./assets/Women/Women_Saree3.2.jpg','./assets/Women/Women_Saree3.3.jpg','F'),
('STREET Red Printed Top',779,'./assets/Women/Women_Top1.1.jpg','./assets/Women/Women_Top1.2.jpg','./assets/Women/Women_Top1.3.jpg','F'),
('Black Polka Dot Top',551,'./assets/Women/Women_Top2.1.jpg','./assets/Women/Women_Top2.2.jpg','./assets/Women/Women_Top2.3.jpg','F'),
('Black Kurta',859,'./assets/Women/Women_Chudi5.1.jpg','./assets/Women/Women_Chudi5.2.jpg','./assets/Women/Women_Chudi5.3.jpg','F'),
('Navy Blue Kanjeevaram Saree',1399,'./assets/Women/Women_Saree4.1.jpg','./assets/Women/Women_Saree4.2.jpg','./assets/Women/Women_Saree4.3.jpg','F'),
('Peach Satin Top',584,'./assets/Women/Women_Top4.1.jpg','./assets/Women/Women_Top4.2.jpg','./assets/Women/Women_Top4.3.jpg','F'),
('Pink Kanjeevaram Saree',1359,'./assets/Women/Women_Saree5.1.jpg','./assets/Women/Women_Saree5.2.jpg','./assets/Women/Women_Saree5.3.jpg','F'),
('Blue Printed Kurta',959,'./assets/Women/Women_Chudi6.1.jpg','./assets/Women/Women_Chudi6.2.jpg','./assets/Women/Women_Chudi6.3.jpg','F'),
('Design Pink Lehenga',1019,'./assets/Women/Women_Ethnic4.1.jpg','./assets/Women/Women_Ethnic4.2.jpg','./assets/Women/Women_Ethnic4.3.jpg','F'),
('Sharara Kurta',2789,'./assets/Women/Women_Chudi7.1.jpg','./assets/Women/Women_Chudi7.2.jpg','./assets/Women/Women_Chudi7.3.jpg','F'),
('Pink Organza Saree',2589,'./assets/Women/Women_Saree6.1.jpg','./assets/Women/Women_Saree6.2.jpg','./assets/Women/Women_Saree6.3.jpg','F'),
('Grand Pink Lehenga',1559,'./assets/Women/Women_Ethnic5.1.jpg','./assets/Women/Women_Ethnic5.2.jpg','./assets/Women/Women_Ethnic5.3.jpg','F'),
('White Embroidery Top',559,'./assets/Women/Women_Top5.1.jpg','./assets/Women/Women_Top5.2.jpg','./assets/Women/Women_Top5.3.jpg','F'),
('Dusty Pink Lehenga',5159,'./assets/Women/Women_Ethnic6.1.jpg','./assets/Women/Women_Ethnic6.2.jpg','./assets/Women/Women_Ethnic6.3.jpg','F'),
('White Solid Top',659,'./assets/Women/Women_Top6.1.jpg','./assets/Women/Women_Top6.2.jpg','./assets/Women/Women_Top6.3.jpg','F'),
('Floral Saree',759,'./assets/Women/Women_Saree7.1.jpg','./assets/Women/Women_Saree7.2.jpg','./assets/Women/Women_Saree7.3.jpg','F'),
('Burgundy Printed Top',449,'./assets/Women/Women_Top3.1.jpg','./assets/Women/Women_Top3.2.jpg','./assets/Women/Women_Top3.3.jpg','F'),
('Floral pink Saree',1559,'./assets/Women/Women_Saree8.1.jpg','./assets/Women/Women_Saree8.2.jpg','./assets/Women/Women_Saree8.3.jpg','F'),
('Peach Color Lehenga',1259,'./assets/Women/Women_Ethnic7.1.jpg','./assets/Women/Women_Ethnic7.2.jpg','./assets/Women/Women_Ethnic7.3.jpg','F'),
('Asymmetric Straight Kurta',1495 ,'./assets/Men/Men_Ethnic1.1.jpg','./assets/Men/Men_Ethnic1.2.jpg','./assets/Men/Men_Ethnic1.3.jpg','M'),
('Blue Solid Kurta patiala',1995 ,'./assets/Men/Men_Ethnic2.1.jpg','./assets/Men/Men_Ethnic2.2.jpg','./assets/Men/Men_Ethnic2.3.jpg','M'),
('Maroon T-shirt', 419,'./assets/Men/Men_Top1.1.jpg','./assets/Men/Men_Top1.2.jpg','./assets/Men/Men_Top1.3.jpg','M'),
('Round Neck T-Shirt', 514,'./assets/Men/Men_Top2.1.jpg','./assets/Men/Men_Top2.2.jpg','./assets/Men/Men_Top2.3.jpg','M'),
('White Kurta Pyjama',1615 ,'./assets/Men/Men_Ethnic3.1.jpg','./assets/Men/Men_Ethnic3.2.jpg','./assets/Men/Men_Ethnic3.3.jpg','M'),
('Blue T-shirt',254 ,'./assets/Men/Men_Top3.1.jpg','./assets/Men/Men_Top3.2.jpg','./assets/Men/Men_Top3.3.jpg','M'),
('Kurta with Churidar and Nehru jacket',2199 ,'./assets/Men/Men_Ethnic4.1.jpg','./assets/Men/Men_Ethnic4.2.jpg','./assets/Men/Men_Ethnic4.3.jpg','M'),
('Black And White T-shirt', 424,'./assets/Men/Men_Top4.1.jpg','./assets/Men/Men_Top4.2.jpg','./assets/Men/Men_Top4.3.jpg','M'),
('Grey Black Sherwani set',2199 ,'./assets/Men/Men_Ethnic5.1.jpg','./assets/Men/Men_Ethnic5.2.jpg','./assets/Men/Men_Ethnic5.3.jpg','M'),
('Yellow Black T-shirt',549 ,'./assets/Men/Men_Top5.1.jpg','./assets/Men/Men_Top5.2.jpg','./assets/Men/Men_Top5.3.jpg','M'),
('Men Solid Kurta set', 2789,'./assets/Men/Men_Ethnic6.1.jpg','./assets/Men/Men_Ethnic6.2.jpg','./assets/Men/Men_Ethnic6.3.jpg','M'),
('Solid Straight Kurta',999 ,'./assets/Men/Men_Ethnic7.1.jpg','./assets/Men/Men_Ethnic7.2.jpg','./assets/Men/Men_Ethnic7.3.jpg','M'),
('Grey Black Sherwani',2066 ,'./assets/kid/Boy_Ethnic1.1.jpg','./assets/kid/Boy_Ethnic1.2.jpg','./assets/kid/Boy_Ethnic1.3.jpg','K'),
('Pink Blue Lehenga', 987,'./assets/kid/Girl_Ethnic1.1.jpg','./assets/kid/Girl_Ethnic1.2.jpg','./assets/kid/Girl_Ethnic1.3.jpg','K'),
('Grey Kurta', 555,'./assets/kid/Boy_Ethnic2.1.jpg','./assets/kid/Boy_Ethnic2.2.jpg','./assets/kid/Boy_Ethnic2.3.jpg','K'),
('Floral Top', 354,'./assets/kid/Girl_Top3.1.jpg','./assets/kid/Girl_Top3.2.jpg','./assets/kid/Girl_Top3.3.jpg','K'),
('Yellow T-shirt', 399,'./assets/kid/Boy_Top1.1.jpg','./assets/kid/Boy_Top1.2.jpg','./assets/kid/Boy_Top1.3.jpg','K'),
('Black Top', 499,'./assets/kid/Girl_Top4.1.jpg','./assets/kid/Girl_Top4.2.jpg','./assets/kid/Girl_Top4.3.jpg','K'),
('White Pink Lehenga', 935,'./assets/kid/Girl_Ethnic2.1.jpg','./assets/kid/Girl_Ethnic2.2.jpg','./assets/kid/Girl_Ethnic2.3.jpg','K'),
('Floral Fancy Top', 385,'./assets/kid/Girl_Top6.1.jpg','./assets/kid/Girl_Top6.2.jpg','./assets/kid/Girl_Top6.3.jpg','K'),
('Raw Silk Sherwani', 1479,'./assets/kid/Boy_Ethnic5.1.jpg','./assets/kid/Boy_Ethnic5.2.jpg','./assets/kid/Boy_Ethnic5.3.jpg','K'),
('Black Fancy Top', 452,'./assets/kid/Girl_Top5.1.jpg','./assets/kid/Girl_Top5.2.jpg','./assets/kid/Girl_Top5.3.jpg','K'),
('Nautica Round neck t-shirt', 449,'./assets/kid/Boy_Top2.1.jpg','./assets/kid/Boy_Top2.2.jpg','./assets/kid/Boy_Top2.3.jpg','K'),
('Lehenga Choli', 1243,'./assets/kid/Girl_Ethnic3.1.jpg','./assets/kid/Girl_Ethnic3.2.jpg','./assets/kid/Girl_Ethnic3.3.jpg','K'),
('Dark Blue T-Shirt', 299,'./assets/kid/Boy_Top6.1.jpg','./assets/kid/Boy_Top6.2.jpg','./assets/kid/Boy_Top6.3.jpg','K'),
('Orange T-Shirt', 584,'./assets/kid/Boy_Top7.1.jpg','./assets/kid/Boy_Top7.2.jpg','./assets/kid/Boy_Top7.3.jpg','K'),
('Black Sherwani', 1527,'./assets/kid/Boy_Ethnic3.1.jpg','./assets/kid/Boy_Ethnic3.2.jpg','./assets/kid/Boy_Ethnic3.3.jpg','K'),
('Blue T-shirt', 759,'./assets/kid/Boy_Top3.1.jpg','./assets/kid/Boy_Top3.2.jpg','./assets/kid/Boy_Top3.3.jpg','K'),
('Printed Black Lehenga', 1221,'./assets/kid/Girl_Ethnic5.1.jpg','./assets/kid/Girl_Ethnic5.2.jpg','./assets/kid/Girl_Ethnic5.3.jpg','K'),
('Solid Henley T-shirt', 399,'./assets/kid/Boy_Top4.1.jpg','./assets/kid/Boy_Top4.2.jpg','./assets/kid/Boy_Top4.3.jpg','K'),
('Jeans Dangri', 569,'./assets/kid/Girl_Top2.1.jpg','./assets/kid/Girl_Top2.2.jpg','./assets/kid/Girl_Top2.3.jpg','K'),
('Printed Black Sherwani', 1400,'./assets/kid/Boy_Ethnic4.1.jpg','./assets/kid/Boy_Ethnic4.2.jpg','./assets/kid/Boy_Ethnic4.3.jpg','K'),
('White Top', 389,'./assets/kid/Girl_Top1.1.jpg','./assets/kid/Girl_Top1.2.jpg','./assets/kid/Girl_Top1.3.jpg','K'),
('Raw silk Lehenga', 547,'./assets/kid/Girl_Ethnic4.1.jpg','./assets/kid/Girl_Ethnic4.2.jpg','./assets/kid/Girl_Ethnic4.3.jpg','K'),
('Cherry Crumble Coat', 2248,'./assets/kid/Boy_Ethnic6.1.jpg','./assets/kid/Boy_Ethnic6.2.jpg','./assets/kid/Boy_Ethnic6.3.jpg','K'),
('White Shirt', 652,'./assets/kid/Boy_Top5.1.jpg','Top5.2.jpg./assets/kid/Boy_','./assets/kid/Boy_Top5.3.jpg','K');

CREATE TABLE `user` (
  `cart_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `number` int(10) NOT NULL,
  `state-name` varchar(30) NOT NULL,
  `city-name` varchar(30) NOT NULL,
  `Street-name` varchar(30) NOT NULL
);

CREATE TABLE `Cart`(
    `cart_id` int(10) NULL,
    `user_id` int(11) NOT NULL,
    `item_id` int(5) NOT NULL,
    FOREIGN KEY (`item_id`) REFERENCES `product`(`item_id`) ON DELETE CASCADE,
    FOREIGN KEY (`user_id`) REFERENCES `user`(`user_id`) ON DELETE CASCADE
);

DELIMITER $$
CREATE FUNCTION autoInc()
    RETURNS INT(10)
    BEGIN 
      DECLARE getcount INT(10);
      SET getcount=(
        SELECT COUNT(`cart_id`)
        FROM `Cart`) + 1;
      RETURN getcount;
    END$$
DELIMITER ;

CREATE TABLE `order`(
  `cart_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `quantity` int(5) NOT NULL,
  FOREIGN KEY (`user_id`) REFERENCES `user`(`user_id`) ON DELETE CASCADE
);


CREATE TABLE `state`(
  `state_id` int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `state_name` varchar(30)
);

CREATE TABLE `city`(
  `state_id` int(5),
  `city_id` int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `city_name` varchar(30),
  FOREIGN KEY (`state_id`) REFERENCES `state`(`state_id`) ON DELETE CASCADE
);

INSERT INTO `state`(`state_name`) VALUES
('Andhra Pradesh'),
('Arunachal Pradesh'),
('Assam'),
('Bihar'),
('Chhattisgarh'),
('Delhi'),
('Goa'),
('Gujarat'),
('Haryana'),
('Himachal Pradesh'),
('Jammu and Kashmir'),
('Karnataka'),
('Kerala'),
('Mandhya Pradesh'),
('Maharashtra'),
('Punjab'),
('Rajasthan'),
('Tamil Nadu');

INSERT INTO `city`(`state_id`,`city_name`) VALUES
(1,'Vishakapatnam'),
(1,'Guntur'),
(1,'Nellore'),
(1,'Kurnool'),
(1,'Kakinada'),
(2,'Tawang'),
(2,'Itanagar'),
(2,'Ziro'),
(2,'Bomdila'),
(2,'Pasighat'),
(2,'Bhalukpong'),
(3,'Guwahati'),
(3,'Silchar'),
(3,'Dibrugarh'),
(3,'Nagaon'),
(3,'Jorhat'),
(3,'Bongaigon'),
(4,'Patna'),
(4,'Gaya'),
(4,'Bhagalpur'),
(4,'Purnia'),
(4,'Bihar Sharif'),
(4,'Arrah'),
(5,'Raipur'),
(5,'Durg-Bhilai'),
(5,'Bilaspur'),
(5,'Rajnandgaon'),
(5,'Korba'),
(5,'Raigarh'),
(5,'Jagdalpur'),
(6,'Mehrauli'),
(6,'Siri'),
(6,'New Delhi'),
(7,'Bicholim'),
(7,'Canacona'),
(7,'Cuncolim'),
(7,'Margao'),
(7,'Panaji'),
(7,'Ponda'),
(8,'Ahmedabad'),
(8,'Surat'),
(8,'Vadodara'),
(9,'Faridabad'),
(9,'Rohtak'),
(9,'Hisar'),
(9,'Panchkula'),
(9,'sirsa'),
(10,'Shimla'),
(10,'Solan'),
(10,'Dharamsala'),
(10,'Baddi'),
(10,'Chamba'),
(11,'Srinagar'),
(11,'Jammu'),
(11,'Anantnag'),
(12,'Mysuru'),
(12,'Bengaluru'),
(12,'Dharwad'),
(12,'Kalaburgi'),
(12,'Shivamogga'),
(13,'Thiruvananthapura'),
(13,'Kozhikode'),
(13,'Kochi'),
(13,'Kollam'),
(14,'Indore'),
(14,'Bhopal'),
(14,'Jabalpur'),
(15,'Mumbai'),
(15,'Pune'),
(15,'Nagpur'),
(16,'Ludhaiana'),
(16,'Amritsar'),
(16,'Mohali'),
(16,'Pathankot'),
(16,'Jalandhar'),
(17,'Jaipur'),
(17,'Jodhpur'),
(17,'Kota'),
(18,'chennai'),
(18,'coimbatore'),
(18,'Madurai'),
(18,'Tituchirapalli');