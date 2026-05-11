CREATE DATABASE cricket_board;

USE cricket_board;

CREATE TABLE players(

id INT AUTO_INCREMENT PRIMARY KEY,

name VARCHAR(100),
role VARCHAR(100),
runs INT,
wickets INT,
strike_rate VARCHAR(20),
career_stats TEXT,
match_history TEXT,
image VARCHAR(255)

);

INSERT INTO players
(name,role,runs,wickets,strike_rate,career_stats,match_history,image)

VALUES

('Shakib Al Hasan','All Rounder',7000,320,'125.5',
'Best all rounder in Bangladesh cricket history',
'Played against India, Pakistan, Australia',
'images/player1.jpg'),

('Tamim Iqbal','Batsman',8500,0,'118.2',
'Highest ODI run scorer of Bangladesh',
'Played against England, India, Sri Lanka',
'images/player2.jpg'),

('Mustafizur Rahman','Bowler',500,210,'95.3',
'Famous left arm pacer',
'Played IPL and international cricket',
'images/player3.jpg');

('Mushfiqur Rahim','Wicket Keeper Batsman',7800,0,'116.8',
'One of the most experienced wicket keeper batsmen of Bangladesh',
'Played against South Africa, India, New Zealand',
'images/player4.jpg'),

('Mahmudullah Riyad','All Rounder',5200,90,'112.4',
'Known for finishing matches under pressure',
'Played ICC World Cup and Asia Cup matches',
'images/player5.jpg'),

('Litton Das','Batsman',3500,0,'130.1',
'Aggressive opening batsman with stylish shots',
'Played against Pakistan, India, Afghanistan',
'images/player6.jpg'),

('Taskin Ahmed','Bowler',850,180,'101.7',
'Fast bowler with impressive pace and bounce',
'Played international and franchise cricket',
'images/player7.jpg'),

('Mehidy Hasan Miraz','All Rounder',2400,160,'108.5',
'Reliable spin bowling all rounder',
'Played against West Indies, Zimbabwe, Sri Lanka',
'images/player8.jpg'),

('Soumya Sarkar','Batsman',3200,25,'121.6',
'Explosive top order batsman',
'Played against Australia, England, New Zealand',
'images/player9.jpg');