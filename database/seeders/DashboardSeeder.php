<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dashboard;
use Faker\Factory as Faker;


class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create();

        Dashboard::create([
            'name' => 'Solid Ruffle Hem Tee',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '15975328',
            'quantity' => '50',
            'purchasePrice' => '100',
            'retailPrice' => '200',
            'style' => 'Coordinates',
            'type' => 'Tee',
            'color' => 'Black',
            'image' => 'SolidRuffleHemTee.jpg'
        ]);

        Dashboard::create([
            'name' => 'Geo Print Twist-Hem Crop Tee',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '95175382',
            'quantity' => '50',
            'purchasePrice' => '100',
            'retailPrice' => '200',
            'style' => 'Street',
            'type' => 'Tee',
            'color' => 'White',
            'image' => 'GeoPrintTwist-HemCropTee.jpg'
        ]);

        Dashboard::create([
            'name' => 'V-neck Petal Sleeve Tunic Dress',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '96385214',
            'quantity' => '50',
            'purchasePrice' => '100',
            'retailPrice' => '200',
            'style' => 'Elegant',
            'type' => 'Bodycon',
            'color' => 'Pink',
            'image' => 'V-neckPetalSleeveTunicDress.jpg'
        ]);

        Dashboard::create([
            'name' => 'Solid Butterfly Sleeve Belted Tunic Dress',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '14785236',
            'quantity' => '50',
            'purchasePrice' => '100',
            'retailPrice' => '200',
            'style' => 'Elegant',
            'type' => 'Bodycon',
            'color' => 'Red',
            'image' => 'SolidButterflySleeveBeltedTunicDress.jpg'
        ]);

        Dashboard::create([
            'name' => 'Solid Laser Cut Scalloped Top',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '28517493',
            'quantity' => '50',
            'purchasePrice' => '100',
            'retailPrice' => '200',
            'style' => 'Cute',
            'type' => 'Top',
            'color' => 'White',
            'image' => 'SolidLaserCutScallopedTop.jpg'
        ]);

        Dashboard::create([
            'name' => 'Polka Dot Round Neck Blouse',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '82517436',
            'quantity' => '50',
            'purchasePrice' => '100',
            'retailPrice' => '200',
            'style' => 'Cute',
            'type' => 'Top',
            'color' => 'White',
            'image' => 'PolkaDotRoundNeckBlouse.jpg'
        ]);

        Dashboard::create([
            'name' => 'Ruched Puff Sleeve Two Tone Top',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '24684655',
            'quantity' => '50',
            'purchasePrice' => '100',
            'retailPrice' => '200',
            'style' => 'Elegant',
            'type' => 'Top',
            'color' => 'White',
            'image' => 'RuchedPuffSleeveTwoToneTop.jpg'
        ]);

        Dashboard::create([
            'name' => 'Frenchy Frill Trim Schiffy Cami Top',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '86415937',
            'quantity' => '50',
            'purchasePrice' => '100',
            'retailPrice' => '200',
            'style' => 'Casual',
            'type' => 'Cami',
            'color' => 'Mint Green',
            'image' => 'FrenchyFrillTrimSchiffyCamiTop.jpg'
        ]);

        Dashboard::create([
            'name' => 'Mandala Print Ruffle Trim Cami Top',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '15975379',
            'quantity' => '50',
            'purchasePrice' => '100',
            'retailPrice' => '200',
            'style' => 'Boho',
            'type' => 'Cami',
            'color' => 'Blue and White',
            'image' => 'MandalaPrintRuffleTrimCamiTop.jpg'
        ]);

        Dashboard::create([
            'name' => 'Floral Print Tie Shoulder Cami Top',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '52851739',
            'quantity' => '50',
            'purchasePrice' => '100',
            'retailPrice' => '200',
            'style' => 'Casual',
            'type' => 'Cami',
            'color' => 'Multicolor',
            'image' => 'FloralPrintTieShoulderCamiTop.jpg'
        ]);

        Dashboard::create([
            'name' => 'Motorcycle And Letter Graphic Tee',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '89654236',
            'quantity' => '50',
            'purchasePrice' => '280',
            'retailPrice' => '300',
            'style' => 'Casual',
            'type' => 'Graphic',
            'color' => 'Black',
            'image' => 'motorcycletee.jpg'
        ]);

        Dashboard::create([
            'name' => 'Tie Back Off Shoulder Lettuce Trim Top',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '89654237',
            'quantity' => '20',
            'purchasePrice' => '360',
            'retailPrice' => '380',
            'style' => 'Sexy',
            'type' => 'Top',
            'color' => 'Brown',
            'image' => 'offshoulder_lettuce.jpg'
        ]);


        Dashboard::create([
            'name' => 'Single Breasted Notched Collar Tee',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '89654238',
            'quantity' => '30',
            'purchasePrice' => '350',
            'retailPrice' => '375',
            'style' => 'Casual',
            'type' => 'Polo',
            'color' => 'Rust Brown',
            'image' => 'notchedcollartee.jpg'
        ]);

        Dashboard::create([
            'name' => 'Plaid Crop Blouse & Split Detail Skirt Set',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '89654239',
            'quantity' => '20',
            'purchasePrice' => '600',
            'retailPrice' => '650',
            'style' => 'Coordinates',
            'type' => 'Top',
            'color' => 'Purple',
            'image' => 'plaidset.jpg'
        ]);

        Dashboard::create([
            'name' => 'Button Placket Ruched Front Rib-knit Solid Romper',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '89654240',
            'quantity' => '25',
            'purchasePrice' => '450',
            'retailPrice' => '670',
            'style' => 'Cute',
            'type' => 'Romper',
            'color' => 'Black',
            'image' => 'rutchedknotromper.jpg'
        ]);

        Dashboard::create([
            'name' => 'Tie Hem Tie Dye Tee',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '89654241',
            'quantity' => '10',
            'purchasePrice' => '190',
            'retailPrice' => '210',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'Multicolor',
            'image' => 'hemteetiedye.jpg'
        ]);

        Dashboard::create([
            'name' => 'Press Button Half Placket Tee',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '89654242',
            'quantity' => '15',
            'purchasePrice' => '200',
            'retailPrice' => '270',
            'style' => 'Casual',
            'type' => 'Top',
            'color' => 'White',
            'image' => 'buttontee.jpg'
        ]);

        Dashboard::create([
            'name' => 'Button Front Textured Shirt Romper',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '89654243',
            'quantity' => '10',
            'purchasePrice' => '500',
            'retailPrice' => '800',
            'style' => 'Casual',
            'type' => 'Romper',
            'color' => 'White',
            'image' => 'buttonfrontromper.jpg'
        ]);

        Dashboard::create([
            'name' => 'Dopamine Dressing Butterfly Detail Fluffy Crop Top',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '89654243',
            'quantity' => '10',
            'purchasePrice' => '150',
            'retailPrice' => '220',
            'style' => 'Casual',
            'type' => 'Top',
            'color' => 'blue',
            'image' => 'butterflycroptop.jpg'
        ]);

        Dashboard::create([
            'name' => 'Letter Graphic Contrast Collar Tee & Plaid Skirt Set',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '89654245',
            'quantity' => '5',
            'purchasePrice' => '450',
            'retailPrice' => '610',
            'style' => 'Preppy',
            'type' => 'Bodycon',
            'color' => 'Black and White',
            'image' => 'laset.jpg'
        ]);

        Dashboard::create([
            'name' => 'Long Sleeve',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '83578352',
            'quantity' => '55',
            'purchasePrice' => '299',
            'retailPrice' => '349',
            'style' => 'Basics',
            'type' => 'Bodycon',
            'color' => 'Brown',
            'image' => 'bodycon-brown-longsleeve.png'
        ]);

        Dashboard::create([
            'name' => 'Dress',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '86832476',
            'quantity' => '535',
            'purchasePrice' => '399',
            'retailPrice' => '450',
            'style' => 'Basics',
            'type' => 'Bodycon',
            'color' => 'Black',
            'image' => 'bodycon-black-shirt.png'
        ]);

        Dashboard::create([
            'name' => 'Puff Shortsleeve',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '87833646',
            'quantity' => '25',
            'purchasePrice' => '350',
            'retailPrice' => '400',
            'style' => 'Basics',
            'type' => 'Bodycon',
            'color' => 'Dark',
            'image' => 'bodycon-dark-puffsleeveoff.png'
        ]);

        Dashboard::create([
            'name' => 'Dress Maxi',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '86783452',
            'quantity' => '30',
            'purchasePrice' => '455',
            'retailPrice' => '490',
            'style' => 'Basics',
            'type' => 'Bodycon',
            'color' => 'Lavender',
            'image' => 'bodycon-lavender-dressmaxi.png'
        ]);

        Dashboard::create([
            'name' => 'Puff Sleeve Off',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '86415612',
            'quantity' => '40',
            'purchasePrice' => '355',
            'retailPrice' => '400',
            'style' => 'Basics',
            'type' => 'Bodycon',
            'color' => 'Pink',
            'image' => 'bodycon-pink-puffsleeveoff.png'
        ]);

        Dashboard::create([
            'name' => 'Bodychain Belt',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '83246632',
            'quantity' => '60',
            'purchasePrice' => '100',
            'retailPrice' => '150',
            'style' => 'Boho',
            'type' => 'Tie dye',
            'color' => 'White Gold',
            'image' => 'boho-whitegold-bodychainbohobelt.png'
        ]);

        Dashboard::create([
            'name' => 'Trendy Tee',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '80026978',
            'quantity' => '75',
            'purchasePrice' => '200',
            'retailPrice' => '250',
            'style' => 'Coordinates',
            'type' => 'Tee',
            'color' => 'Brown',
            'image' => 'coordinates-brown-trendytee.png'
        ]);

        Dashboard::create([
            'name' => 'Oversized Temperament Casual',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '88429042',
            'quantity' => '40',
            'purchasePrice' => '452',
            'retailPrice' => '600',
            'style' => 'Coordinates',
            'type' => 'Romper',
            'color' => 'Cyan',
            'image' => 'coordinates-cyan-oversizedtemperamentcasual.png'
        ]);

        Dashboard::create([
            'name' => 'Madison Vintage',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '81234678',
            'quantity' => '30',
            'purchasePrice' => '300',
            'retailPrice' => '350',
            'style' => 'Coordinates',
            'type' => 'Romper',
            'color' => 'Cyan',
            'image' => 'coordinates-R_W-madisonvintage.png'
        ]);

        Dashboard::create([
            'name' => 'Madison Vintage',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '84568789',
            'quantity' => '20',
            'purchasePrice' => '200',
            'retailPrice' => '230',
            'style' => 'Preppy',
            'type' => 'Tie dye',
            'color' => 'Pink',
            'image' => 'preppy-lgbt-scarf.png'
        ]);

        Dashboard::create([
            'name' => 'Suspender Skirt',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '83578347',
            'quantity' => '25',
            'purchasePrice' => '545',
            'retailPrice' => '600',
            'style' => 'Cute',
            'type' => 'Cami',
            'color' => 'Cyan',
            'image' => 'cute-cyan-Suspender Skirt-545.jpg'
        ]);

        Dashboard::create([
            'name' => 'Chic Red Plaid Strap Dress',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '86832410',
            'quantity' => '45',
            'purchasePrice' => '560',
            'retailPrice' => '610',
            'style' => 'Cute',
            'type' => 'Bodycon',
            'color' => 'Red',
            'image' => 'cute-picnichahaha-Chic Red Plaid Strap Dress-560.jpg'
        ]);

        Dashboard::create([
            'name' => 'Cute Cape Hood',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '87833616',
            'quantity' => '25',
            'purchasePrice' => '610',
            'retailPrice' => '670',
            'style' => 'Cute',
            'type' => 'Romper',
            'color' => 'Dark',
            'image' => 'cute-pink-Cute Cape Hood-610.jpg'
        ]);

        Dashboard::create([
            'name' => 'Short Top Cross Little Cute',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '86783411',
            'quantity' => '100',
            'purchasePrice' => '150',
            'retailPrice' => '199',
            'style' => 'Cute',
            'type' => 'Bodycon',
            'color' => 'Rose',
            'image' => 'cute-rose-Short Top Cross Little Cute-100.jpg'
        ]);

        Dashboard::create([
            'name' => 'Autumn and Winter Coral Fleece Cinnamoroll Babycinnamoroll Pajamas',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '86415601',
            'quantity' => '70',
            'purchasePrice' => '687',
            'retailPrice' => '700',
            'style' => 'Cute',
            'type' => 'Graphic',
            'color' => 'White',
            'image' => 'cute-white-Autumn and Winter Coral Fleece Cinnamoroll Babycinnamoroll Pajamas-687.jpg'
        ]);

        Dashboard::create([
            'name' => 'Long-sleeved goddess fan backless',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '83246692',
            'quantity' => '30',
            'purchasePrice' => '565',
            'retailPrice' => '600',
            'style' => 'Cute',
            'type' => 'Bodycon',
            'color' => 'White',
            'image' => 'cute-white-long-sleeved goddess fan backless-565.jpg'
        ]);

        Dashboard::create([
            'name' => 'Summer halter sling',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '80026987',
            'quantity' => '50',
            'purchasePrice' => '136',
            'retailPrice' => '200',
            'style' => 'Cute',
            'type' => 'Bodycon',
            'color' => 'White',
            'image' => 'cute-white-summer halter sling-136.jpg'
        ]);

        Dashboard::create([
            'name' => 'Casual Loose Kawaii Tshirt',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '88429033',
            'quantity' => '60',
            'purchasePrice' => '299',
            'retailPrice' => '350',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'Dark',
            'image' => 'tee-dark-casual Loose Kawaii Tshirt-299.jpg'
        ]);

        Dashboard::create([
            'name' => 'Summer Casual Tshirt',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '81234694',
            'quantity' => '65',
            'purchasePrice' => '149',
            'retailPrice' => '200',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'Lavender',
            'image' => 'tee-lavender-Summer Casual Tshirt-149.jpg'
        ]);

        Dashboard::create([
            'name' => 'Aesthetic Clothes Grunge Harajuku Casual Graphic',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '84568766',
            'quantity' => '80',
            'purchasePrice' => '183',
            'retailPrice' => '230',
            'style' => 'Graphic',
            'type' => 'Tee',
            'color' => 'White',
            'image' => 'tee-white-Aesthetic Clothes Grunge Harajuku Casual Graphic-183.jpg'
        ]);

        Dashboard::create([
            'name' => 'Graphic Korean Style Female T-shirt Harajuku Tshirt',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '34582395',
            'quantity' => '25',
            'purchasePrice' => '340',
            'retailPrice' => '370',
            'style' => 'Graphic',
            'type' => 'Tee',
            'color' => 'White',
            'image' => 'tee-white-Graphic Korean Style Female T-shirt Harajuku Tshirt-340.jpg'
        ]);

        Dashboard::create([
            'name' => 'Harajuku Gildan short sleeve',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '82387417',
            'quantity' => '35',
            'purchasePrice' => '357',
            'retailPrice' => '400',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'White',
            'image' => 'tee-white-Harajuku Gildan short sleeve-357.jpg'
        ]);

        Dashboard::create([
            'name' => 'Oversize soft t-shirt',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '86573983',
            'quantity' => '45',
            'purchasePrice' => '445',
            'retailPrice' => '510',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'White',
            'image' => 'tee-white-oversize soft t-shirt-445.jpg'
        ]);

        Dashboard::create([
            'name' => 'Sweetheart Neck Twist Front Dress',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '89654246',
            'quantity' => '10',
            'purchasePrice' => '350',
            'retailPrice' => '385',
            'style' => 'Cute',
            'type' => 'Bodycon',
            'color' => 'Chocolate Brown',
            'image' => 'sweetheart.jpg'
        ]);

        Dashboard::create([
            'name' => 'Square Neck Schiffy Dress',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '89654247',
            'quantity' => '8',
            'purchasePrice' => '300',
            'retailPrice' => '319',
            'style' => 'Boho',
            'type' => 'Bodycon',
            'color' => 'Mint Green',
            'image' => 'squareneck.jpg'
        ]);

        Dashboard::create([
            'name' => 'Solid Slim Cami Crop Top',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '89654248',
            'quantity' => '15',
            'purchasePrice' => '140',
            'retailPrice' => '162',
            'style' => 'Basics',
            'type' => 'Top',
            'color' => 'Black',
            'image' => 'camitop.jpg'
        ]);

        Dashboard::create([
            'name' => 'Criss Cross Contrast Binding Cami Top',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '89654249',
            'quantity' => '15',
            'purchasePrice' => '170',
            'retailPrice' => '195',
            'style' => 'Basics',
            'type' => 'Top',
            'color' => 'Dusty Blue',
            'image' => 'crisscross.jpg'
        ]);

        Dashboard::create([
            'name' => 'Letter Graphic Crop Tee',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '89654250',
            'quantity' => '10',
            'purchasePrice' => '230',
            'retailPrice' => '258',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'White',
            'image' => 'calitee.jpg'
        ]);

        Dashboard::create([
            'name' => 'Hat & Slogan Graphic Contrast Raglan Sleeve Crop Tee',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '89654251',
            'quantity' => '20',
            'purchasePrice' => '235',
            'retailPrice' => '264',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'Multicolor',
            'image' => 'hattee.jpg'
        ]);

        Dashboard::create([
            'name' => 'Abstract Figure Graphic Drawstring Front Tee',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '89654252',
            'quantity' => '10',
            'purchasePrice' => '300',
            'retailPrice' => '320',
            'style' => 'Casual',
            'type' => 'Top',
            'color' => 'White',
            'image' => 'abstracttee.jpg'
        ]);

        Dashboard::create([
            'name' => 'Heart & Slogan Print Tee',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '89654253',
            'quantity' => '10',
            'purchasePrice' => '310',
            'retailPrice' => '336',
            'style' => 'Casual',
            'type' => 'Top',
            'color' => 'White',
            'image' => 'heartslogan.jpg'
        ]);

        Dashboard::create([
            'name' => 'Cartoon Graphic Crop Tee',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '89654254',
            'quantity' => '12',
            'purchasePrice' => '250',
            'retailPrice' => '280',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'White',
            'image' => 'coffeetea.jpg'
        ]);

        Dashboard::create([
            'name' => 'Pocket Detail Solid Tee',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '29731862',
            'quantity' => '45',
            'purchasePrice' => '129',
            'retailPrice' => '189',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'White',
            'image' => 'PocketDetailSolidTee.jpg'
        ]);

        Dashboard::create([
            'name' => 'Dazy-Less Solid Crew Neck Crop Tee',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '82289932',
            'quantity' => '50',
            'purchasePrice' => '123',
            'retailPrice' => '189',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'Black',
            'image' => 'Dazy-LessSolidCrewNeckCropTee.jpg'
        ]);

        Dashboard::create([
            'name' => 'DAZY Solid Scoop Neck Tee',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '36361414',
            'quantity' => '50',
            'purchasePrice' => '129',
            'retailPrice' => '189',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'White',
            'image' => 'DAZYSolidScoopNeckTee.jpg'
        ]);

        Dashboard::create([
            'name' => 'DAZY Striped Print Round Neck Tee',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '48668413',
            'quantity' => '50',
            'purchasePrice' => '149',
            'retailPrice' => '199',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'Blue and White',
            'image' => 'DAZYStripedPrintRoundNeckTee.jpg'
        ]);

        Dashboard::create([
            'name' => 'DAZY Letter Patched Cut Out Rib Knit Tee',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '82391746',
            'quantity' => '50',
            'purchasePrice' => '149',
            'retailPrice' => '306',
            'style' => 'Casual',
            'type' => 'Te',
            'color' => 'Grey',
            'image' => 'DAZYLetterPatchedCutOutRibKnitTee.jpg'
        ]);

        Dashboard::create([
            'name' => 'Solid Crew Neck Basic Tee',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '46971328',
            'quantity' => '50',
            'purchasePrice' => '109',
            'retailPrice' => '139',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'Black',
            'image' => 'SolidCrewNeckBasicTee.jpg'
        ]);

        Dashboard::create([
            'name' => 'DAZY Ditsy Floral Square Neck Tee',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '64317955',
            'quantity' => '50',
            'purchasePrice' => '169',
            'retailPrice' => '288',
            'style' => 'Boho',
            'type' => 'Tee',
            'color' => 'Beige',
            'image' => 'DAZYDitsyFloralSquareNeckTee.jpg'
        ]);

        Dashboard::create([
            'name' => 'Honeyspot Solid Puff Sleeve Tee',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '29973316',
            'quantity' => '50',
            'purchasePrice' => '299',
            'retailPrice' => '483',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'Mauve Purple',
            'image' => 'HoneyspotSolidPuffSleeveTee.jpg'
        ]);

        Dashboard::create([
            'name' => 'Dazy-Less Solid Seam Detail Tee',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '82289339',
            'quantity' => '50',
            'purchasePrice' => '195',
            'retailPrice' => '408',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'Blue',
            'image' => 'Dazy-LessSolidSeamDetailTee.jpg'
        ]);

        Dashboard::create([
            'name' => 'DAZY Cut Out Front Tee',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month'),
            'sku' => '88775264',
            'quantity' => '50',
            'purchasePrice' => '239',
            'retailPrice' => '369',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'Khaki',
            'image' => 'DAZYCutOutFrontTee.jpg'
        ]);
    }
}
