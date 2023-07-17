<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Criteria extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'auto_increment' => true],
      'student_id' => ['type' => 'VARCHAR', 'constraint' => 20],
      'ranking' => ['type' => 'INT', 'constraint' => 11],
      'value' => ['type' => 'FLOAT'],
      'batch' => ['type' => 'VARCHAR', 'constraint' => 255],
      'created_at' => ['type' => 'TIMESTAMP', 'default' => new RawSql('CURRENT_TIMESTAMP')],
      'updated_at' => ['type' => 'TIMESTAMP', 'default' => new RawSql('CURRENT_TIMESTAMP')],
    ]);
    $this->forge->addPrimaryKey('id');
    $this->forge->createTable('criterias');

    $this->forge->addForeignKey('student_id', 'students', 'id', 'CASCADE', 'CASCADE');
  }

  public function down()
  {
    $this->forge->dropTable('criterias');
  }
}
