<?php 

/*
- Create table:
CREATE TABLE users(
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username varchar(255) NOT NULL,
  password varchar(255) NOT NULL
);

- Incert into table:
INSERT INTO users (username, password) VALUES ('Mary', '121212');
=> more than one value:
INSERT INTO users (username, password) VALUES ('Michael', '343434'), ('Kate', '454545');
=> error:
INSERT INTO users (username, password) VALUES (͟A͟n͟y͟b͟o͟d͟y͟,͟ ͟3͟4͟3͟4͟3͟4͟)͟;

- Select data:
=> * - all columns:
SELECT * FROM users;
=> select column 'username':
SELECT username FROM users;
=> select with condition:
SELECT * FROM users WHERE username = 'Nadiia';
=> using OR:
SELECT * FROM users WHERE username = 'Nadiia' OR id = '4';
=> empty result set:
SELECT * FROM users WHERE username = 'Marina' OR id = '10';

- Update data:
UPDATE users
SET username = 'Mike', password = 'newpassword'
WHERE id = '5';

- Delete data:
DELETE FROM users WHERE id = 3;
=> using OR:
DELETE FROM users WHERE id = 5 OR username = 'Mary';

- Ordering data:
=> using DESC:
SELECT * FROM users ORDER BY id DESC;
- or
SELECT * FROM users ORDER BY username DESC;
=> using ASC:
SELECT * FROM users ORDER BY id ASC;
- or
SELECT * FROM users ORDER BY username ASC;
*/