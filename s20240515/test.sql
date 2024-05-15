CREATE TABLE `hello`.`studetns` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(32) NOT NULL,
    `mobile` VARCHAR(32) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `hello`.`teachers` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(32) NOT NULL,
    `mobile` VARCHAR(32) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- insert
INSERT INTO
    `studetns` (`id`, `name`, `mobile`)
VALUES
    (NULL, 'amy', '0911');

INSERT INTO
    `studetns` (`id`, `name`, `mobile`)
VALUES
    (NULL, 'bob', '0922-222-222');

INSERT INTO
    `studetns` (`id`, `name`, `mobile`)
VALUES
    (NULL, 'hello_cat', '0933-333-333');

INSERT INTO
    `studetns` (`id`, `name`, `mobile`)
VALUES
    (NULL, 'egg', '0955-555-555');

-- update
UPDATE
    `studetns`
SET
    `name` = 'cat'
WHERE
    `studetns`.`id` = 4;

-- del
DELETE FROM
    studetns
WHERE
    `studetns`.`id` = 2