CREATE table logins(id INTEGER PRIMARY KEY,
                    usuario varchar(64) NOT NULL UNIQUE,
                   	senha varchar(64) NOT NULL
                   );
                   
CREATE table anuncios(id INTEGER PRIMARY KEY,
                      titulo varchar(64) NOT NULL UNIQUE,
                      descricao Varchar(256) NOT NULL,
                      marca varchar(64) NOT NULL,
                      modelo varchar(64) NOT NULL,
                      ano_fabricacao int NOT NULL,
                      ano_modelo int NOT NULL,
                      valor real NOT NULL,
                      foto_do_possante varchar(64) NOT NULL,
                      status VARCHAR(64) NOT NULL,
                      owner int --não é necessario ser uma foreign key
                     );