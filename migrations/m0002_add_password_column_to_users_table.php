<?php

class m0002_add_password_column_to_users_table
{
    public function up()
    {
        $db = \anthonyhuynh\PhpMvcFramework\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users ADD COLUMN password VARCHAR(512) NOT NULL");
    }

    public function down()
    {
        $db = \anthonyhuynh\PhpMvcFramework\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users DROP COLUMN password;");
    }
}