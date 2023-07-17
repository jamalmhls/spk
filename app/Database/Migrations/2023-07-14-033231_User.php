<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
  public function up()
  {
    $this->forge->dropColumn('users', ['username', 'status', 'status_message', 'active', 'last_active']);
    $this->forge->addColumn('users', [
      'name' => [
        'type' => 'VARCHAR',
        'constraint' => 60,
        'after' => 'id'
      ],
      'email' => [
        'type' => 'VARCHAR',
        'constraint' => 100,
        'unique' => true,
        'after' => 'name'
      ],
      'password' => [
        'type' => 'VARCHAR',
        'constraint' => 255,
        'after' => 'email',
      ],
      'role' => [
        'type' => 'ENUM',
        'constraint' => ['admin', 'kepsek', 'bk', 'hubin', 'koordinator', 'siswa'],
        'default' => 'siswa',
        'after' => 'password'
      ]
    ]);
  }

  public function down()
  {
    $this->forge->dropColumn('users', ['name', 'email', 'password', 'role']);
  }
}
