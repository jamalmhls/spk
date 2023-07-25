<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'primary' => true, 'unsigned' => true, 'auto_increment' => true],
            'name' => ['type' => 'VARCHAR', 'constraint' => 120],
            'email' => ['type' => 'VARCHAR', 'constraint' => 60, 'unique' => true],
            'password' => ['type' => 'VARCHAR', 'constraint' => 200],
            'profile' => ['type' => 'VARCHAR', 'constraint' => 150, 'default' => 'profile.jpg'],
            'role' => ['type' => 'ENUM', 'constraint' => ['admin', 'ks', 'hubin', 'koordinator', 'bk', 'siswa'], 'default' => 'siswa'],
            'created_at' => ['type' => 'TIMESTAMP', 'default' => new RawSql('CURRENT_TIMESTAMP')],
            'updated_at' => ['type' => 'TIMESTAMP', 'default' => new RawSql('CURRENT_TIMESTAMP')]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
