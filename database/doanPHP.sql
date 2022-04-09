USE doanPhoto;

CREATE TABLE Adminstrator(
	passAdmin varchar(10) primary key,
    nameAdmin varchar(20)
);

INSERT INTO Adminstrator
VALUES
('25102002','Black23B');

CREATE TABLE USers(
	idUser int auto_increment primary key,
    username varchar(20),
    address varchar(50),
    phonenumber varchar(10),
    email varchar(30),
    pass varchar(20),
    createDate datetime
);

INSERT INTO Users (username,address, phonenumber, email, pass, createDate)
VALUES
('Black2510','Sơn Trà - Đà Nẵng','0322456408','dennttinh@gmail.com','12345',''),
('Black','Liên Chiểu - Đà Nẵng','0322456408','den.ho23@student.passerellesnumeriques.org','12345','');

CREATE TABLE Contact(
	idContact int auto_increment primary key,
    fullname varchar(30),
    email varchar(30),
    subjects varchar(50),
    content text,
    dateContact date
);

INSERT INTO Contact(fullname, email, subjects, content, dateContact)
VALUES
('Hồ Thị Đen','dennttinh@gmail.com','Buying photo','I want to buy some photos in your website, pleaase reply me','');

CREATE TABLE Post(
	idPost int auto_increment primary key,
    title varchar(50),
    descriptions text,
    location varchar(20),
    datePost date
);

INSERT INTO Post(title, descriptions, location, datePost)
VALUES
('A trip to Hội An','It is a wonderful trip with a lot of memories','Hội An - Việt Nam','');

CREATE TABLE Category(
	idCategory int auto_increment primary key,
    nameCategory varchar(50)
);

INSERT INTO Category(nameCategory)
VALUES
('Portrait'),
('Landscape'),
('City'),
('Contryside'),
('Street');

CREATE TABLE Photos(
	idPhoto int auto_increment primary key,
    image varchar(50),
    story text,
    idPost int,
    idCategory int,
    foreign key(idPost) references Post(idPost),
    foreign key(idCategory) references Category(idCategory)
);

INSERT INTO Photos(image, story, idPost, idCategory)
VALUES
('CongHueMarket.jpg','In Hue, two days before the new year means busy markets and lots of colors. Tet Holiday has been quiet the past few years because of Covid-19 concerns, but the markets, when they are allowed to open, are always packed.','',5),
('GatesofHue#2.jpg','Heavy traffic on a cloudy day as folks make the late afternoon commute back home. One thing I truly love about this city is the fact that just by driving across town, a person may pass under, over, and around half-a-dozen reminders that they are in a city built around a castle. Americans have no concept of this kind of ancient history. For American culture is a young culture, and its artifacts are those of the peoples killed by Europeans to make room for Manifest Destiny.','',5),
('ThanhToanBridge.jpg','A few kilometers outside Hue City is a small village and a bridge that will take you back in time. Couples will come out here to take wedding pictures, and the village itself is about as close to untouched by the 21st Century as a person will find in Central Vietnam.','',5),
('AndroidMonk.jpg','Arrived in Hue City last week on the day the most famous monk in the world was laid to rest in the countryside outside of town. Every time I see a monk on a cell phone or buying sunglasses in a market I am reminded of their humanity. Ultimately even those who take vows and live in monasteries have wants and needs outside the monastic. Some may find it hypocritical. I find it reassuring.','',1),
('DongBaMarket#2.jpg','One thing I really enjoy doing is kneeling down and shooting up. It makes me look ridiculous enough to ensure people don’t take me seriously and gives me a bird’s eye view of conversations. Sometimes I end up shooting a whole lot of feet, but I usually end up with a few nice pics.','',5),
('CleaningtheImperialCitadel.jpg','At the end of another day, the cleaning crew comes out and clears away the refuse from the small number of visitors to the Imperial Citadel. Back in the days before Covid-19 and flight restrictions, this would be a massive undertaking. Now it is a small job. Two people.','',2),
('Love.jp','Outside Da Nang, there is a village near a pagoda. In that village, you will find love. I cannot tell you where it is.','',4),
('DaNangSkyline.jpg','The Da Nang skyline from the east side of the Thuan Phuoc Bridge around what would be sunset was there a sun to set yesterday. One can poke around along the shore and find some very interesting things. Including views of the city.','',2),
('SecondShift.jpg','This woman is responsible for feeding the evening staff at many of the bars and restaurants on the block. She puts everything she needs in those two baskets, places them between the long wooden rod you can see on the ground there, squats under the rod, stands up—to the degree she can under such weight—and balances everything on her shoulder as she walks from spot to spot. She has a customer base, and I’m sure she knows what time every business in the area opens or changes shifts. If she’s had a good night, her load will be much lighter when she walks home.','',1),
('AoDai.jpg','Every year around the Tet Holiday, Hue becomes the backdrop for many photoshoots. Young and old alike enjoy wearing traditional clothes for a few hours of making believe they’re in another time.','',1),
('HoiAnFishMarket#2.jpg','The fish market takes on a different look under the boardwalk on the edge of the harbor where the product hits the shore. There is no time to spare for the restaurant owners and vendors who want the best seafood. They must be ready. And they must be loud enough for the seller to hear above the crowd.','1',4),
('HoiAnFishMarket#3.jpg','One of the things most surprising to me at the fish market outside Hoi An was the number of women doing hard manual labor. These two and hundreds of others move just as fast as any of the men. It’s incredible. Load the cart. Push the heavy load of fish and ice to the land where bunches of people gather around to buy the product, and then back to the boat. Over and over and over.','1',4);



CREATE TABLE Comments(
	idComment int auto_increment primary key,
    idUser int,
    content varchar(100),
    idPost int auto_increment,
    dateComment date,
    foreign key(idUser) references Users(idUser),
    foreign key(idPost) references Post(idPost)
);

INSERT INTO Comments(idUser, content, idPost, dateContent)
VALUES
(1,'That is beautiful',1,'');

CREATE TABLE Likes(
	idLike int auto_increment primary key,
    idUser int,
    idPost int,
    foreign key(idUser) references Users(idUser),
    foreign key(idPost) references Post(idPost)
);

INSERT INTO Likes(idUser, idPost)
VALUES
(1,1);

CREATE TABLE Wishlist(
	idList int auto_increment primary key,
    idUser int,
    idPhoto int,
    foreign key(idUser) references Users(idUser),
    foreign key(idPost) references Photos(idPhoto)
);

INSERT INTO Wishlist(idUser, idPhoto)
VALUES
(1,11),
(1,12);