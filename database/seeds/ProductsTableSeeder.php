<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Sample Milling',
            'price' => '3',
            'details' => 'Cyclotec mill or romer mill'
        ]);

        Product::create([
            'name' => 'Aflatoxin',
            'price' => '20',
            'details' => 'UPLC-FLD, ELISA or Fluorometry'
        ]);

        Product::create([
            'name' => 'Multimycotoxin',
            'price' => '30',
            'details' => 'UPLC-MS'
        ]);

        Product::create([
            'name' => 'Dry Matter content',
            'price' => '8',
            'details' => 'Gravimetry- Oven drying'
        ]);

        Product::create([
            'name' => 'Protein',
            'price' => '20',
            'details' => 'Kjedhal or Folin-Lowry Method'
        ]);

        Product::create([
            'name' => 'Ash',
            'price' => '8',
            'details' => 'Gravimetry- Muffle furnace'
        ]);

        Product::create([
            'name' => 'Primary Amino Acids',
            'price' => '75',
            'details' => 'UPLC-FLD (OPA precolumn derivatisation)'
        ]);

        Product::create([
            'name' => 'Crude fat',
            'price' => '18',
            'details' => 'Soxlet pet ether extraction'
        ]);

        Product::create([
            'name' => 'Fatty acid profile',
            'price' => '60',
            'details' => 'Methylation followed by GC-MS'
        ]);

        Product::create([
            'name' => 'Crude fiber',
            'price' => '20',
            'details' => 'Acid digestion and Loss on Ignition Method'
        ]);

        Product::create([
            'name' => 'Water soluble vitamin (B1, B2, B3, B5, B6, B12 and folic acid)',
            'price' => '35',
            'details' => 'HPLC-UV detection'
        ]);

        Product::create([
            'name' => 'Fat soluble vitamins (vitamin A, E (alpha  and  gamma tocopherol)',
            'price' => '45',
            'details' => 'HPLC-UV detection'
        ]);

        Product::create([
            'name' => 'phytic acid',
            'price' => '40',
            'details' => 'phytic acid megazyme kit'
        ]);

        Product::create([
            'name' => 'Tannins',
            'price' => '10',
            'details' => 'Colorimetric'
        ]);

        Product::create([
            'name' => 'Total free phenolics',
            'price' => '10',
            'details' => 'Colorimetric'
        ]);

        Product::create([
            'name' => 'Antioxidant activity',
            'price' => '10',
            'details' => 'Colorimetric (DPPH method)'
        ]);

        Product::create([
            'name' => 'Sugars (Sucrose,glucose, Fructose and xylose)',
            'price' => '35',
            'details' => 'HPLC-ELSD quantification'
        ]);

        Product::create([
            'name' => 'total oxalate',
            'price' => '30',
            'details' => 'HPLC determination expressed as oxalic acid equivalent'
        ]);

        Product::create([
            'name' => 'Mineral analysis (Fe, Zn, Mg, P,Ca, Mn, Cu, Mo, Co, Al, K, Na)',
            'price' => '3',
            'details' => 'Sample milling(Cyclotec mill or Romer mill)'
        ]);

        Product::create([
            'name' => 'Mineral analysis (Fe, Zn, Mg, P,Ca, Mn, Cu, Mo, Co, Al, K, Na)',
            'price' => '10',
            'details' => 'Acid digestion (duplicate)'
        ]);

        Product::create([
            'name' => 'Mineral analysis (Fe, Zn, Mg, P,Ca, Mn, Cu, Mo, Co, Al, K, Na)',
            'price' => '5',
            'details' => 'Single  Element quantification by  ICP-OES (duplicate)'
        ]);
    }
}
