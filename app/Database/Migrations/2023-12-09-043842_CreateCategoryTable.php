<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCategoryTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
            'type'           => 'INT',
            'constraint'     => 5,
            'unsigned'       => true,
            'auto_increment' => true,
        ],
        'category'=>[
            'type'       => 'VARCHAR',
            'constraint' => 100,
        ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('category');
    }
       
    public function down()
    {
        $this->forge->dropTable('category');
    }
}
