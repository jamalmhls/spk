<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id' => [
        'type' => 'VARCHAR',
        'constraint' => 50,
      ],
      'name' => [
        'type' => 'VARCHAR',
        'constraint' => 60
      ],
      'email' => [
        'type' => 'VARCHAR',
        'constraint' => 100,
        'unique' => true
      ],
      'password' => [
        'type' => 'VARCHAR',
        'constraint' => 255
      ],
      'role' => [
        'type' => 'ENUM',
        'constraint' => ['admin', 'kepsek', 'bk', 'hubin', 'koordinator', 'siswa'],
        'default' => 'siswa'
      ]
    ]);
    $this->forge->addKey('id', true, true);
    $this->forge->createTable('users');
  }

  public function down()
  {
    $this->forge->dropTable('users');
  }
}
