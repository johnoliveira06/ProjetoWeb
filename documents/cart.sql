CREATE TABLE IF NOT EXISTS cart (
  id INT(11) NOT NULL AUTO_INCREMENT,
  produtoId INT(11) NOT NULL,
  nome VARCHAR(11) NOT NULL,
  preco VARCHAR(255) NOT NULL,
  PRIMARY KEY (id))
ENGINE = InnoDB;