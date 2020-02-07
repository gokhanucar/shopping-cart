<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://elcopcbonline.com/photos/product/4/176/4.jpg',
            'title' => 'Headphone',
            'description' => 'Headphones traditionally refer to a pair of small loudspeaker drivers worn on or around the head.',
            'price' => 40
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://cdn.vatanbilgisayar.com/Upload/PRODUCT/INTEL/thumb/v2-93220_large.jpg',
            'title' => 'Processor',
            'description' => 'Product Collection 9th Generation Intel® Core™ i5 Processors.',
            'price' => 300
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.itopya.com/picture/msi-b450m-gaming-plus-3446mhz-oc-ddr4-soket-am4-m-2-hdmi-dvi-matx-anakart.jpg',
            'title' => 'Mainboard',
            'description' => 'MSI, the world leading motherboard manufacturer, is definitely one of the shining stars in CES 2020.',
            'price' => 120
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.powerplanetonline.com/cdnassets/kingston_hyperx_fury_8gb_ddr4_3200mhz_rgb_01_l.jpg',
            'title' => 'DDR4 Ram',
            'description' => 'HyperX Fury 8GB (1x8GB) DDR4 2400MHz CL15 Siyah Gaming Ram.',
            'price' => 90
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://cdn.akakce.com/samsung/samsung-500-gb-860-evo-mz-m6e500bw-2-5-msata-z.jpg',
            'title' => 'SSD 500GB',
            'description' => 'A solid-state drive (SSD) is a solid-state storage device that uses integrated circuit assemblies to store data persistently, typically using flash memory, and functioning as secondary storage in the hierarchy of computer storage.',
            'price' => 240
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://azcd.harveynorman.com.au/media/catalog/product/l/u/lu32j590uqexxy-3.jpg',
            'title' => 'Ultra HD Monitor',
            'description' => 'Offering impressive picture quality and a large screen size, the Samsung 32-inch Ultra HD VA Monitor is a handy choice for your computer setup at home',
            'price' => 220
        ]);
        $product->save();
    }
}
