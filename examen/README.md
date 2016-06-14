examen
======

* Change your current directory to /document/root/path/examen

* Configure your application in app/config/parameters.yml file.

* Run your application:
    - Execute the php bin/console server:run command.
    - Browse to the http://localhost:8000 URL.

## Mysql

```sql
create user 'examen'@'localhost' identified by 'examen';
create database examen character set utf8;
grant all privileges on examen.* to 'examen'@'localhost' identified by 'examen'; 

CREATE TABLE `examen`.`empleado` (
        `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
        `nombre` VARCHAR(45) NOT NULL COMMENT '',
        `ap_paterno` VARCHAR(45) NOT NULL COMMENT '',
        `ap_materno` VARCHAR(45) NOT NULL COMMENT '',
        PRIMARY KEY (`id`)  COMMENT '');

CREATE TABLE `examen`.`datos` (
        `id` INT NOT NULL COMMENT '',
        `id_empleado` INT NOT NULL COMMENT '',
        `fecha_nacimiento` DATETIME NOT NULL COMMENT '',
        `ingreso` DECIMAL(6,4) NOT NULL DEFAULT 0.00 COMMENT '',
        PRIMARY KEY (`id`)  COMMENT '',
        INDEX `fk_empleado_idx` (`id_empleado` ASC)  COMMENT '',
        CONSTRAINT `fk_empleado`
        FOREIGN KEY (`id_empleado`)
        REFERENCES `examen`.`empleado` (`id`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION);
```
