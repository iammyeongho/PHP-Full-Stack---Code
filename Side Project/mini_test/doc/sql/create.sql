CREATE DATABASE newjeans;

USE newjeans;

CREATE TABLE boards(
	id INT PRIMARY KEY AUTO_INCREMENT
	,title varchar(100) NOT NULL
	,writet VARCHAR(100) NOT null
	,content VARCHAR(1000) NOT null
	,image 
	,created_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
	,delete_fig CHAR(1) NOT NULL DEFAULT '0'
	,delete_date DATETIME DEFAULT NULL
);

INSERT INTO boards(
	title
	,writet
	,content
)
VALUES
('제목1','작성자1','내용1')
,('제목2','작성자2','내용2')
,('제목3','작성자3','내용3')
,('제목4','작성자4','내용4')
,('제목5','작성자5','내용5')
,('제목6','작성자6','내용6')
,('제목7','작성자7','내용7')
,('제목8','작성자8','내용8')
,('제목9','작성자9','내용9')
,('제목10','작성자10','내용10')
,('제목11','작성자11','내용11')
,('제목12','작성자12','내용12')
,('제목13','작성자13','내용13')
,('제목14','작성자14','내용14')
,('제목15','작성자15','내용15')
,('제목16','작성자16','내용16')
,('제목17','작성자17','내용17')
,('제목18','작성자18','내용18')
,('제목19','작성자19','내용19')
,('제목20','작성자20','내용20')
,('제목21','작성자21','내용21')
,('제목22','작성자22','내용22')
,('제목23','작성자23','내용23')
,('제목24','작성자24','내용24')
,('제목25','작성자25','내용25')
,('제목26','작성자26','내용26')
,('제목27','작성자27','내용27')
,('제목28','작성자28','내용28')
,('제목29','작성자29','내용29')
,('제목30','작성자30','내용30')