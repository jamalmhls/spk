<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Major extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'auto_increment' => true],
      'name' => ['type' => 'VARCHAR', 'constraint' => 255]
    ]);
    $this->forge->addPrimaryKey('id');
    $this->forge->createTable('majors');
  }

  public function down()
  {
    $this->forge->dropTable('majors');
  }
}
