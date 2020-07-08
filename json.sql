
-- 创建数据库
CREATE DATABASE ajaxdb
-- 选择数据库
USE ajaxdb

CREATE TABLE comclasstab(
       `id` INT NOT NULL PRIMARY KEY KEY AUTO_INCREMENT COMMENT'id',
       `tabname` VARCHAR(20) NOT NULL COMMENT'商品名'
)


SELECT COUNT(*) FROM comclasstab;

SELECT * FROM comclasstab

SELECT COUNT(*)AS 'count' FROM comInfotab WHERE fid=6
-- 创建商品信息表
CREATE TABLE comInfotab(
       `fid` INT  COMMENT'商品分类id',
       `name` VARCHAR(20) COMMENT'商品名称',
       `img` VARCHAR(100) COMMENT'商品图片'
)


SELECT COUNT(*) FROM comInfotab;
SELECT * FROM comInfotab
CREATE TABLE coment(
       `id` INT PRIMARY KEY AUTO_INCREMENT  NOT NULL,
       `pid` INT NOT NULL,
       `title` VARCHAR(20) NOT NULL
)

SELECT * FROM coment








