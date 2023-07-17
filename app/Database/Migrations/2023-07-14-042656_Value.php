<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Value extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 20, 'auto_increment' => true],
      'student_id' => ['type' => 'VARCHAR', 'constraint' => 20],
      'criteria_id' => ['type' => 'INT', 'constraint' => 11],
      'value' => ['type' => 'INT', 'constraint' => 20],
      'created_at' => ['type' => 'TIMESTAMP', 'default' => new RawSql('CURRENT_TIMESTAMP')],
    ]);
    $this->forge->addPrimaryKey('id');
    $this->forge->createTable('values');

    $this->forge->addForeignKey('student_id', 'students', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('criteria_id', 'criterias', 'id', 'CASCADE', 'CASCADE');
  }

  public function down()
  {
    $this->forge->dropTable('values');
  }
}
