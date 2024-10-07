DROP DATABASE IF EXISTS my_members;
CREATE DATABASE my_members;

CREATE TABLE club_groups (
    group_id    INT(11)     NOT NULL    AUTO_INCREMENT,
    group_name  VARCHAR(45) NOT NULL,
    PRIMARY KEY (group_id)
);

CREATE TABLE group_members(
    member_id   INT(11)     NOT NULL    AUTO_INCREMENT,
    group_id    INT(11)     NOT NULL,
    member_name VARCHAR(45) NOT NULL,
    member_email    VARCHAR(45) NOT NULL,
    member_phone    INT(11) NOT NULL,
    PRIMARY KEY (member_id),
    FOREIGN KEY (group_id),
        REFERENCES club_groups(group_id)
)