<?php

use PDO;

return new class {
    public function up(PDO $db): void {
        $db->exec("
            CREATE TABLE products (
                id uuid PRIMARY KEY,
                name varchar(150) not null,
                sku varchar(100) not null unique,
                stock integer not null default 0,
                price numeric(12,2) not null default 0,
                created_at timestamp not null default now(),
                updated_at timestamp not null default now()
            );
        ");
    }

    public function down(PDO $db): void {
        $db->exec("DROP TABLE IF EXISTS products;");
    }
};
