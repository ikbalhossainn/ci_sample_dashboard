<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products1Migration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'product_id'=>[
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'product'=>[
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'category'=>[
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'price'=>[
                'type' => 'INT',
            ],
            'sku'=>[
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'model'=>[
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
        ]);
        $this->forge->addKey('product_id', true);
        $this->forge->createTable('product1');
    }

    public function down()
    {
        $this->forge->dropTable('product1');
    }
}
