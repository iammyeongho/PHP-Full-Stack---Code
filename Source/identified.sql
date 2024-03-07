USE mysql;

SELECT * FROM USER;

CREATE USER 'team2'@'192.168.0.%' IDENTIFIED BY 'team2';

GRANT ALL PRIVILEGES ON *.* TO 'team2'@'192.168.0.%' IDENTIFIED BY 'team2';

COMMIT;

FLUSH PRIVILEGES;


