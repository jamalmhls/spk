<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Student extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id' => ['type' => 'VARCHAR', 'constraint' => 20, 'primary' => true],
      'nis' => ['type' => 'VARCHAR', 'constraint' => 5],
      'name' => ['type' => 'VARCHAR', 'constraint' => 100],
      'user_id' => ['type' => 'INT', 'constraint' => 11],
      'class_id' => ['type' => 'INT', 'constraint' => 11],
      'major_id' => ['type' => 'INT', 'constraint' => 11],
      'height' => ['type' => 'INT', 'constraint' => 6],
      'weight' => ['type' => 'INT', 'constraint' => 6],
      'form' => ['type' => 'BLOB'],
      'student_card' => ['type' => 'BLOB'],
      'vaccine_card' => ['type' => 'BLOB'],
      'report' => ['type' => 'BLOB'],
      'health_paper' => ['type' => 'BLOB'],
      'created_at' => ['type' => 'TIMESTAMP', 'default' => new RawSql('CURRENT_TIMESTAMP')],
      'updated_at' => ['type' => 'TIMESTAMP', 'default' => new RawSql('CURRENT_TIMESTAMP')],
    ]);
    // $this->forge->addKey('id', true);
    $this->forge->createTable('students');

    $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('class_id', 'classes', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('major_id', 'majors', 'id', 'CASCADE', 'CASCADE');
  }

  public function down()
  {
    $this->forge->dropTable('students');
  }
}
