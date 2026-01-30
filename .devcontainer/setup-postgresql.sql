CREATE SEQUENCE article_id_seq;

CREATE TABLE article (
     id int NOT NULL DEFAULT nextval('article_id_seq'),
     name varchar(255) NOT NULL,
     description text NOT NULL,
     created_at TIMESTAMP NOT NULL,
     PRIMARY KEY (id)
);

ALTER SEQUENCE article_id_seq
    OWNED BY article.id;