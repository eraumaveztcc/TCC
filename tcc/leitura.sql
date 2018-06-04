-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema leitura
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema leitura
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `leitura` DEFAULT CHARACTER SET utf8 ;
USE `leitura` ;

-- -----------------------------------------------------
-- Table `leitura`.`Livro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `leitura`.`Livro` (
  `li_idlivro` INT NOT NULL AUTO_INCREMENT,
  `li_titulo` VARCHAR(200) NULL,
  `li_ano` INT NULL,
  `li_autor` VARCHAR(100) NULL,
  `li_paginas` INT NULL,
  `li_editora` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL,
  `li_censura` INT NULL,
  PRIMARY KEY (`li_idlivro`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `leitura`.`Genero`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `leitura`.`Genero` (
  `ge_id` INT NOT NULL AUTO_INCREMENT,
  `ge_descricao` VARCHAR(45) NULL,
  PRIMARY KEY (`ge_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `leitura`.`GeneroLivro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `leitura`.`GeneroLivro` (
  `gl_id` INT NOT NULL AUTO_INCREMENT,
  `gl_idlivro` INT NULL,
  `gl_idgenero` INT NULL,
  PRIMARY KEY (`gl_id`),
  INDEX `gl_livro_idx` (`gl_idlivro` ASC),
  INDEX `gl_genero_idx` (`gl_idgenero` ASC),
  CONSTRAINT `gl_livro`
    FOREIGN KEY (`gl_idlivro`)
    REFERENCES `leitura`.`Livro` (`li_idlivro`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `gl_genero`
    FOREIGN KEY (`gl_idgenero`)
    REFERENCES `leitura`.`Genero` (`ge_id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `leitura`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `leitura`.`Usuario` (
  `us_id` INT NOT NULL AUTO_INCREMENT,
  `us_nome` VARCHAR(100) NULL,
  `us_email` VARCHAR(200) NULL,
  `us_senha` VARCHAR(200) NULL,
  `us_datanascimento` DATETIME NULL,
  `us_sexo` CHAR(1) NULL,
  PRIMARY KEY (`us_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `leitura`.`Fatores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `leitura`.`Fatores` (
  `fa_id` INT NOT NULL AUTO_INCREMENT,
  `fa_descricao` VARCHAR(100) NULL,
  PRIMARY KEY (`fa_id`))
ENGINE = InnoDB
COMMENT = '	';


-- -----------------------------------------------------
-- Table `leitura`.`FatorUsuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `leitura`.`FatorUsuario` (
  `fu_id` INT NOT NULL AUTO_INCREMENT,
  `fu_idfator` INT NULL,
  `fu_idusuario` INT NULL,
  `fu_nota` INT NULL,
  PRIMARY KEY (`fu_id`),
  INDEX `fu_fator_idx` (`fu_idfator` ASC),
  INDEX `fu_usuario_idx` (`fu_idusuario` ASC),
  CONSTRAINT `fu_fator`
    FOREIGN KEY (`fu_idfator`)
    REFERENCES `leitura`.`Fatores` (`fa_id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fu_usuario`
    FOREIGN KEY (`fu_idusuario`)
    REFERENCES `leitura`.`Usuario` (`us_id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `leitura`.`FatorLivro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `leitura`.`FatorLivro` (
  `fl_id` INT NOT NULL AUTO_INCREMENT,
  `fl_idfator` INT NULL,
  `fl_idlivro` INT NULL,
  `fl_idusuario` INT NULL,
  `fl_valor` INT NULL,
  PRIMARY KEY (`fl_id`),
  INDEX `fl_fator_idx` (`fl_idfator` ASC),
  INDEX `fl_livro_idx` (`fl_idlivro` ASC),
  INDEX `fl_usuario_idx` (`fl_idusuario` ASC),
  CONSTRAINT `fl_fator`
    FOREIGN KEY (`fl_idfator`)
    REFERENCES `leitura`.`Fatores` (`fa_id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fl_livro`
    FOREIGN KEY (`fl_idlivro`)
    REFERENCES `leitura`.`Livro` (`li_idlivro`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fl_usuario`
    FOREIGN KEY (`fl_idusuario`)
    REFERENCES `leitura`.`Usuario` (`us_id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `leitura`.`Prateleira`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `leitura`.`Prateleira` (
  `pr_id` INT NOT NULL AUTO_INCREMENT,
  `pr_descricao` VARCHAR(150) NULL,
  `pr_idusuario` INT NULL,
  `pr_datacriacao` DATETIME NULL,
  `pr_status` CHAR(1) NULL,
  PRIMARY KEY (`pr_id`),
  INDEX `pr_usuario_idx` (`pr_idusuario` ASC),
  CONSTRAINT `pr_usuario`
    FOREIGN KEY (`pr_idusuario`)
    REFERENCES `leitura`.`Usuario` (`us_id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `leitura`.`Biblioteca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `leitura`.`Biblioteca` (
  `bi_id` INT NOT NULL AUTO_INCREMENT,
  `bi_idlivro` INT NULL,
  `bi_idprateleira` INT NULL,
  `bi_datainclusao` DATETIME NULL,
  `bi_observacao` VARCHAR(1000) NULL,
  PRIMARY KEY (`bi_id`),
  INDEX `bi_livro_idx` (`bi_idlivro` ASC),
  INDEX `bi_prateleira_idx` (`bi_idprateleira` ASC),
  CONSTRAINT `bi_livro`
    FOREIGN KEY (`bi_idlivro`)
    REFERENCES `leitura`.`Livro` (`li_idlivro`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `bi_prateleira`
    FOREIGN KEY (`bi_idprateleira`)
    REFERENCES `leitura`.`Prateleira` (`pr_id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `leitura`.`Resenha`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `leitura`.`Resenha` (
  `re_id` INT NOT NULL AUTO_INCREMENT,
  `re_idlivro` INT NULL,
  `re_idusuario` INT NULL,
  `re_data` DATETIME NULL,
  `re_textoresenha` VARCHAR(4000) NULL,
  `re_status` CHAR(1) NULL,
  PRIMARY KEY (`re_id`),
  INDEX `re_livro_idx` (`re_idlivro` ASC),
  INDEX `re_usuario_idx` (`re_idusuario` ASC),
  CONSTRAINT `re_livro`
    FOREIGN KEY (`re_idlivro`)
    REFERENCES `leitura`.`Livro` (`li_idlivro`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `re_usuario`
    FOREIGN KEY (`re_idusuario`)
    REFERENCES `leitura`.`Usuario` (`us_id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `leitura`.`UsuarioGenero`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `leitura`.`UsuarioGenero` (
  `ug_id` INT NOT NULL AUTO_INCREMENT,
  `ug_idgenero` INT NULL,
  `ug_idusuario` INT NULL,
  `ug_nota` INT NULL,
  PRIMARY KEY (`ug_id`),
  INDEX `ug_genero_idx` (`ug_idgenero` ASC),
  INDEX `ug_usuario_idx` (`ug_idusuario` ASC),
  CONSTRAINT `ug_genero`
    FOREIGN KEY (`ug_idgenero`)
    REFERENCES `leitura`.`Genero` (`ge_id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `ug_usuario`
    FOREIGN KEY (`ug_idusuario`)
    REFERENCES `leitura`.`Usuario` (`us_id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `leitura`.`AvaliacaoLivro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `leitura`.`AvaliacaoLivro` (
  `al_idavaliacaolivro` INT NOT NULL AUTO_INCREMENT,
  `al_idlivro` INT NULL,
  `al_idusuario` INT NULL,
  `al_datahora` DATETIME NULL,
  `al_nota` INT NULL,
  PRIMARY KEY (`al_idavaliacaolivro`),
  INDEX `al_livro_idx` (`al_idlivro` ASC),
  INDEX `al_usuario_idx` (`al_idusuario` ASC),
  CONSTRAINT `al_livro`
    FOREIGN KEY (`al_idlivro`)
    REFERENCES `leitura`.`Livro` (`li_idlivro`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `al_usuario`
    FOREIGN KEY (`al_idusuario`)
    REFERENCES `leitura`.`Usuario` (`us_id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
