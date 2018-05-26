CREATE TABLE users (
    userID          SERIAL PRIMARY KEY,
    firstName       varchar(25),   
    lastName        varchar(25),
    userEmail       varchar(40),
    userPassword    varchar(255)
);

CREATE TABLE movies (
    movieID          SERIAL PRIMARY KEY,
    movieTitle       varchar(250)
);

CREATE TABLE quotes (
    quoteID         SERIAL PRIMARY KEY,
    quote           varchar(1000),   
    movieID         int,
    userID          int,
    FOREIGN KEY (movieID) REFERENCES movies(movieID),
    FOREIGN KEY (userID) REFERENCES users(userID)
);

ALTER TABLE movies 
ADD releaseYear int;

ALTER TABLE quotes 
ALTER COLUMN movieID SET NOT NULL;

ALTER TABLE quotes 
ALTER COLUMN userID SET NOT NULL;

INSERT INTO movies VALUES 
(0, 'Pumping Iron', 1977),
(1, 'The Terminator', 1984),
(2, 'Terminator 2: Judgment Day', 1991),
(3, 'The Long Goodbye', 1973),
(4, 'Predator', 1987),
(5, 'T2 3-D: Battle Across Time', 1996),
(6, 'Total Recall', 1990),
(7, 'Conan the Barbarian', 1982),
(8, 'True Lies', 1994),
(9, 'Dave', 1993),
(10, 'Escape Plan', 2012),
(11, 'Commando', 1985),
(12, 'The Rundown', 2003),
(13, 'The Expendables 2', 2012),
(14, 'The Running Man', 1987),
(15, 'The Expendables', 2010),
(16, 'Terminator Genisys', 2015),
(17, 'Scavenger Hunt', 1979),
(18, 'The Last Stand', 2013),
(19, 'Conan the Destroyer', 1984),
(20, 'Terminator 3: Rise of the Machines', 2003),
(21, 'Last Action Hero', 1993),
(22, 'Stay Hungry', 1976),
(23, 'The Expendables 3', 2014),
(24, 'Kindergarten Cop', 1990),
(25, 'Eraser', 1996),
(26, 'Twins', 1988),
(27, 'Red Heat', 1988),
(28, 'The 6th Day', 2000),
(29, 'The Villain', 1979),
(30, 'Around the World in 80 Days', 2004),
(31, 'End of Days', 1999),
(32, 'Sabotage', 2014),
(33, 'Aftermath', 2017),
(34, 'The Kid & I', 2005),
(35, 'Maggie', 2015),
(36, 'Collateral Damage', 2002),
(37, 'Jingle All the Way', 1996),
(38, 'Raw Deal', 1986),
(39, 'Red Sonja', 1985),
(40, 'Junior', 1994),
(41, 'Batman & Robin', 1997),
(42, 'Hercules in New York', 1970),
(43, 'T2 3-D Pre-Show', 1996);

INSERT INTO users VALUES
(0, 'admin', 'user', 'admin@user.com', '123456789');

INSERT INTO quotes VALUES
(0, 'You''ve just been ERASED.', 25, 0),
(1, 'I lied!', 11, 0),
(2, 'Ice to see you.', 41, 0),
(3, 'Yakety Yak, don''t talk back!', 26, 0),
(4, 'Who is your Daddy and what does he do?', 24, 0),
(5, 'If it bleeds, we can kill it.', 4, 0),
(6, 'Alright everyone, chill.', 41, 0),
(7, 'Milk is for babies. Men drink beer.', 0, 0),
(8, 'Look who''s talking.', 6, 0),
(9, 'But I''m all woman.', 40, 0),
(10, 'You''re luggage!', 25, 0),
(11, 'I need a vacation.', 1, 0),
(12, 'I eat Green Berets for breakfast and right now I''m VERY hungry!', 11, 0),
(13, 'I did nothing. The pavement was his enemy.', 26, 0),
(14, 'You''re fired.', 8, 0),
(15, 'It''s not a tumour!', 24, 0),
(16, 'Put that cookie down. NOW!', 37, 0);

