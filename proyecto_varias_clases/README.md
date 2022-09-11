# Proyecto de clase hasta fin de año

Este es el proyecto que el profe ira implementandole cosas nuevas clase a clase

Comandos para crear la db:
```php
  CREATE DATABASE db_tasks;
```

Comandos para crear la tabla:
``` php
  CREATE TABLE task(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(80) NOT NULL,
    body TEXT NOT NULL,
    importance TINYINT NOT NULL,
    completed TINYINT NOT NULL
  );
```