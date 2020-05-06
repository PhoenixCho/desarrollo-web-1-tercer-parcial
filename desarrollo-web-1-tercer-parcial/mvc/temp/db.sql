create table users (
    id integer auto_increment primary key,
    rfc char(13) not null unique,
    ...
);

create table roles (
    id integer auto_increment primary key,
    ...
);

create table permissions (
    id integer auto_increment primary key,
    ...
);