<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\ProductModel;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Helper to generate random values
        helper('text');

        // Insert 5 Records with Dynamic values 
        for ($num = 0; $num < 10; $num++) {
            $product = new ProductModel();

            $insertdata['category_id'] = rand(1, 6);
            $insertdata['product'] = random_string('alpha', 10);
            // $insertdata['category'] = rand(50, 200);
            $insertdata['price'] = rand(50, 10);
            $insertdata['sku'] = random_string('alpha', 10);
            $insertdata['model'] = random_string('alpha', 10);

            $product->insert($insertdata);
        }
    }
}
