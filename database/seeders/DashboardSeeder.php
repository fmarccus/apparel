<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dashboard;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dashboard::create([
            'name' => 'Solid Ruffle Hem Tee',
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
            'sku' => '87833646',
            'quantity' => '457',
            'purchasePrice' => '350',
            'retailPrice' => '400',
            'style' => 'Basics',
            'type' => 'Bodycon',
            'color' => 'Dark',
            'image' => 'bodycon-dark-puffsleeveoff.png'
        ]);

        Dashboard::create([
            'name' => 'Dress Maxi',
            'sku' => '86783452',
            'quantity' => '489',
            'purchasePrice' => '455',
            'retailPrice' => '490',
            'style' => 'Basics',
            'type' => 'Bodycon',
            'color' => 'Lavender',
            'image' => 'bodycon-lavender-dressmaxi.png'
        ]);

        Dashboard::create([
            'name' => 'Puff Sleeve Off',
            'sku' => '86415612',
            'quantity' => '489',
            'purchasePrice' => '355',
            'retailPrice' => '400',
            'style' => 'Basics',
            'type' => 'Bodycon',
            'color' => 'Pink',
            'image' => 'bodycon-pink-puffsleeveoff.png'
        ]);

        Dashboard::create([
            'name' => 'Bodychain Belt',
            'sku' => '83246632',
            'quantity' => '489',
            'purchasePrice' => '100',
            'retailPrice' => '150',
            'style' => 'Boho',
            'type' => 'Tie dye',
            'color' => 'White Gold',
            'image' => 'boho-whitegold-bodychainbohobelt.png'
        ]);

        Dashboard::create([
            'name' => 'Trendy Tee',
            'sku' => '80026978',
            'quantity' => '489',
            'purchasePrice' => '200',
            'retailPrice' => '250',
            'style' => 'Coordinates',
            'type' => 'Tee',
            'color' => 'Brown',
            'image' => 'coordinates-brown-trendytee.png'
        ]);

        Dashboard::create([
            'name' => 'Oversized Temperament Casual',
            'sku' => '88429042',
            'quantity' => '129',
            'purchasePrice' => '452',
            'retailPrice' => '600',
            'style' => 'Coordinates',
            'type' => 'Romper',
            'color' => 'Cyan',
            'image' => 'coordinates-cyan-oversizedtemperamentcasual.png'
        ]);

        Dashboard::create([
            'name' => 'Madison Vintage',
            'sku' => '81234678',
            'quantity' => '345',
            'purchasePrice' => '300',
            'retailPrice' => '350',
            'style' => 'Coordinates',
            'type' => 'Romper',
            'color' => 'Cyan',
            'image' => 'coordinates-R_W-madisonvintage.png'
        ]);

        Dashboard::create([
            'name' => 'Madison Vintage',
            'sku' => '84568789',
            'quantity' => '328',
            'purchasePrice' => '200',
            'retailPrice' => '230',
            'style' => 'Preppy',
            'type' => 'Tie dye',
            'color' => 'Pink',
            'image' => 'preppy-lgbt-scarf.png'
        ]);
    }
}
