<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //Insert into database using database seed

        //Insert into users table
        /*DB::table('users')->insert([
            'name' => "Akram Hossain Rahat",
            'email' => "akramhossainrahat@gmail.com",
            'role' => "Admin",
            'password' => bcrypt('toothless'),
        ]);*/

        //Insert into Customers table
        /*DB::table('customers')->insert([
            'customer_id' => "CUS-".rand(000,999),
            'customer_name' => "Forhad Pathan",
            'customer_email' => "pathan@hotmail.com",
            'customer_phone' => "01995949409",
            'customer_address' => "Noakhali",
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);*/

        //Insert into Products table
        /*DB::table('products')->insert([
            'product_id' => "PRO-".rand(000,999),
            'product_name' => "D.Heavy wt Color Stone Locket",
            'product_desc' => "Set in Diamond (4.1 Ct, SI- IJ,  Round), 18 Kt Yellow Gold (22.594 Gms)",
            'product_price' => "529000",
            'product_image' => "assets/img/535_1_4904.jpg",
            'product_category' => "Locket",
            'product_brand' => "Diamond World",
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);*/

        /*DB::table('products')->insert([
            'product_id' => "PRO-".rand(000,999),
            'product_name' => "D.Heavy wt Locket",
            'product_desc' => "Set in Diamond ( 5.37 Ct, SI- IJ,  Round), 18 Kt Yellow Gold (28.94 Gms)",
            'product_price' => "521000",
            'product_image' => "assets/img/401_1_3106.jpg",
            'product_category' => "Locket",
            'product_brand' => "Diamond World",
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);*/

        /*DB::table('products')->insert([
            'product_id' => "PRO-".rand(000,999),
            'product_name' => "D.CS.Heavy Weight Necklace Sets",
            'product_desc' => "Set in Diamond (43.62 Ct , IJ, SI, Round), 18 Kt Yellow Gold (127.85 Gms )",
            'product_price' => "6966750",
            'product_image' => "assets/img/638_1_5584.jpg",
            'product_category' => "Necklace Set",
            'product_brand' => "Diamond World",
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);*/
    }
}
