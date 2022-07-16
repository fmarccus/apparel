<?php

namespace Database\Seeders;

use App\Models\Apparel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApparelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Apparel::create([
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

        Apparel::create([
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

        Apparel::create([
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

        Apparel::create([
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

        Apparel::create([
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

        Apparel::create([
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

        Apparel::create([
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

        Apparel::create([
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

        Apparel::create([
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

        Apparel::create([
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

        Apparel::create([
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

        Apparel::create([
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


        Apparel::create([
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

        Apparel::create([
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

        Apparel::create([
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

        Apparel::create([
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

        Apparel::create([
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

        Apparel::create([
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

        Apparel::create([
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

        Apparel::create([
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

        Apparel::create([
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

        Apparel::create([
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

        Apparel::create([
            'name' => 'Puff Shortsleeve',
            'sku' => '87833646',
            'quantity' => '25',
            'purchasePrice' => '350',
            'retailPrice' => '400',
            'style' => 'Basics',
            'type' => 'Bodycon',
            'color' => 'Dark',
            'image' => 'bodycon-dark-puffsleeveoff.png'
        ]);

        Apparel::create([
            'name' => 'Dress Maxi',
            'sku' => '86783452',
            'quantity' => '30',
            'purchasePrice' => '455',
            'retailPrice' => '490',
            'style' => 'Basics',
            'type' => 'Bodycon',
            'color' => 'Lavender',
            'image' => 'bodycon-lavender-dressmaxi.png'
        ]);

        Apparel::create([
            'name' => 'Puff Sleeve Off',
            'sku' => '86415612',
            'quantity' => '40',
            'purchasePrice' => '355',
            'retailPrice' => '400',
            'style' => 'Basics',
            'type' => 'Bodycon',
            'color' => 'Pink',
            'image' => 'bodycon-pink-puffsleeveoff.png'
        ]);

        Apparel::create([
            'name' => 'Bodychain Belt',
            'sku' => '83246632',
            'quantity' => '60',
            'purchasePrice' => '100',
            'retailPrice' => '150',
            'style' => 'Boho',
            'type' => 'Tie dye',
            'color' => 'White Gold',
            'image' => 'boho-whitegold-bodychainbohobelt.png'
        ]);

        Apparel::create([
            'name' => 'Trendy Tee',
            'sku' => '80026978',
            'quantity' => '75',
            'purchasePrice' => '200',
            'retailPrice' => '250',
            'style' => 'Coordinates',
            'type' => 'Tee',
            'color' => 'Brown',
            'image' => 'coordinates-brown-trendytee.png'
        ]);

        Apparel::create([
            'name' => 'Oversized Temperament Casual',
            'sku' => '88429042',
            'quantity' => '40',
            'purchasePrice' => '452',
            'retailPrice' => '600',
            'style' => 'Coordinates',
            'type' => 'Romper',
            'color' => 'Cyan',
            'image' => 'coordinates-cyan-oversizedtemperamentcasual.png'
        ]);

        Apparel::create([
            'name' => 'Madison Vintage',
            'sku' => '81234678',
            'quantity' => '30',
            'purchasePrice' => '300',
            'retailPrice' => '350',
            'style' => 'Coordinates',
            'type' => 'Romper',
            'color' => 'Cyan',
            'image' => 'coordinates-R_W-madisonvintage.png'
        ]);

        Apparel::create([
            'name' => 'Madison Vintage',
            'sku' => '84568789',
            'quantity' => '20',
            'purchasePrice' => '200',
            'retailPrice' => '230',
            'style' => 'Preppy',
            'type' => 'Tie dye',
            'color' => 'Pink',
            'image' => 'preppy-lgbt-scarf.png'
        ]);

        Apparel::create([
            'name' => 'Suspender Skirt',
            'sku' => '83578347',
            'quantity' => '25',
            'purchasePrice' => '545',
            'retailPrice' => '600',
            'style' => 'Cute',
            'type' => 'Cami',
            'color' => 'Cyan',
            'image' => 'cute-cyan-Suspender Skirt-545.jpg'
        ]);

        Apparel::create([
            'name' => 'Chic Red Plaid Strap Dress',
            'sku' => '86832410',
            'quantity' => '45',
            'purchasePrice' => '560',
            'retailPrice' => '610',
            'style' => 'Cute',
            'type' => 'Bodycon',
            'color' => 'Red',
            'image' => 'cute-picnichahaha-Chic Red Plaid Strap Dress-560.jpg'
        ]);

        Apparel::create([
            'name' => 'Cute Cape Hood',
            'sku' => '87833616',
            'quantity' => '25',
            'purchasePrice' => '610',
            'retailPrice' => '670',
            'style' => 'Cute',
            'type' => 'Romper',
            'color' => 'Dark',
            'image' => 'cute-pink-Cute Cape Hood-610.jpg'
        ]);

        Apparel::create([
            'name' => 'Short Top Cross Little Cute',
            'sku' => '86783411',
            'quantity' => '100',
            'purchasePrice' => '150',
            'retailPrice' => '199',
            'style' => 'Cute',
            'type' => 'Bodycon',
            'color' => 'Rose',
            'image' => 'cute-rose-Short Top Cross Little Cute-100.jpg'
        ]);

        Apparel::create([
            'name' => 'Autumn and Winter Coral Fleece Cinnamoroll Babycinnamoroll Pajamas',
            'sku' => '86415601',
            'quantity' => '70',
            'purchasePrice' => '687',
            'retailPrice' => '700',
            'style' => 'Cute',
            'type' => 'Graphic',
            'color' => 'White',
            'image' => 'cute-white-Autumn and Winter Coral Fleece Cinnamoroll Babycinnamoroll Pajamas-687.jpg'
        ]);

        Apparel::create([
            'name' => 'Long-sleeved goddess fan backless',
            'sku' => '83246692',
            'quantity' => '30',
            'purchasePrice' => '565',
            'retailPrice' => '600',
            'style' => 'Cute',
            'type' => 'Bodycon',
            'color' => 'White',
            'image' => 'cute-white-long-sleeved goddess fan backless-565.jpg'
        ]);

        Apparel::create([
            'name' => 'Summer halter sling',
            'sku' => '80026987',
            'quantity' => '50',
            'purchasePrice' => '136',
            'retailPrice' => '200',
            'style' => 'Cute',
            'type' => 'Bodycon',
            'color' => 'White',
            'image' => 'cute-white-summer halter sling-136.jpg'
        ]);

        Apparel::create([
            'name' => 'Casual Loose Kawaii Tshirt',
            'sku' => '88429033',
            'quantity' => '60',
            'purchasePrice' => '299',
            'retailPrice' => '350',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'Dark',
            'image' => 'tee-dark-casual Loose Kawaii Tshirt-299.jpg'
        ]);

        Apparel::create([
            'name' => 'Summer Casual Tshirt',
            'sku' => '81234694',
            'quantity' => '65',
            'purchasePrice' => '149',
            'retailPrice' => '200',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'Lavender',
            'image' => 'tee-lavender-Summer Casual Tshirt-149.jpg'
        ]);

        Apparel::create([
            'name' => 'Aesthetic Clothes Grunge Harajuku Casual Graphic',
            'sku' => '84568766',
            'quantity' => '80',
            'purchasePrice' => '183',
            'retailPrice' => '230',
            'style' => 'Graphic',
            'type' => 'Tee',
            'color' => 'White',
            'image' => 'tee-white-Aesthetic Clothes Grunge Harajuku Casual Graphic-183.jpg'
        ]);

        Apparel::create([
            'name' => 'Graphic Korean Style Female T-shirt Harajuku Tshirt',
            'sku' => '34582395',
            'quantity' => '25',
            'purchasePrice' => '340',
            'retailPrice' => '370',
            'style' => 'Graphic',
            'type' => 'Tee',
            'color' => 'White',
            'image' => 'tee-white-Graphic Korean Style Female T-shirt Harajuku Tshirt-340.jpg'
        ]);

        Apparel::create([
            'name' => 'Harajuku Gildan short sleeve',
            'sku' => '82387417',
            'quantity' => '35',
            'purchasePrice' => '357',
            'retailPrice' => '400',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'White',
            'image' => 'tee-white-Harajuku Gildan short sleeve-357.jpg'
        ]);

        Apparel::create([
            'name' => 'Oversize soft t-shirt',
            'sku' => '86573983',
            'quantity' => '45',
            'purchasePrice' => '445',
            'retailPrice' => '510',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'White',
            'image' => 'tee-white-oversize soft t-shirt-445.jpg'
        ]);

        Apparel::create([
            'name' => 'Sweetheart Neck Twist Front Dress',
            'sku' => '89654246',
            'quantity' => '10',
            'purchasePrice' => '350',
            'retailPrice' => '385',
            'style' => 'Cute',
            'type' => 'Bodycon',
            'color' => 'Chocolate Brown',
            'image' => 'sweetheart.jpg'
        ]);

        Apparel::create([
            'name' => 'Square Neck Schiffy Dress',
            'sku' => '89654247',
            'quantity' => '8',
            'purchasePrice' => '300',
            'retailPrice' => '319',
            'style' => 'Boho',
            'type' => 'Bodycon',
            'color' => 'Mint Green',
            'image' => 'squareneck.jpg'
        ]);

        Apparel::create([
            'name' => 'Solid Slim Cami Crop Top',
            'sku' => '89654248',
            'quantity' => '15',
            'purchasePrice' => '140',
            'retailPrice' => '162',
            'style' => 'Basics',
            'type' => 'Top',
            'color' => 'Black',
            'image' => 'camitop.jpg'
        ]);

        Apparel::create([
            'name' => 'Criss Cross Contrast Binding Cami Top',
            'sku' => '89654249',
            'quantity' => '15',
            'purchasePrice' => '170',
            'retailPrice' => '195',
            'style' => 'Basics',
            'type' => 'Top',
            'color' => 'Dusty Blue',
            'image' => 'crisscross.jpg'
        ]);

        Apparel::create([
            'name' => 'Letter Graphic Crop Tee',
            'sku' => '89654250',
            'quantity' => '10',
            'purchasePrice' => '230',
            'retailPrice' => '258',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'White',
            'image' => 'calitee.jpg'
        ]);

        Apparel::create([
            'name' => 'Hat & Slogan Graphic Contrast Raglan Sleeve Crop Tee',
            'sku' => '89654251',
            'quantity' => '20',
            'purchasePrice' => '235',
            'retailPrice' => '264',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'Multicolor',
            'image' => 'hattee.jpg'
        ]);

        Apparel::create([
            'name' => 'Abstract Figure Graphic Drawstring Front Tee',
            'sku' => '89654252',
            'quantity' => '10',
            'purchasePrice' => '300',
            'retailPrice' => '320',
            'style' => 'Casual',
            'type' => 'Top',
            'color' => 'White',
            'image' => 'abstracttee.jpg'
        ]);

        Apparel::create([
            'name' => 'Heart & Slogan Print Tee',
            'sku' => '89654253',
            'quantity' => '10',
            'purchasePrice' => '310',
            'retailPrice' => '336',
            'style' => 'Casual',
            'type' => 'Top',
            'color' => 'White',
            'image' => 'heartslogan.jpg'
        ]);

        Apparel::create([
            'name' => 'Cartoon Graphic Crop Tee',
            'sku' => '89654254',
            'quantity' => '12',
            'purchasePrice' => '250',
            'retailPrice' => '280',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'White',
            'image' => 'coffeetea.jpg'
        ]);

        Apparel::create([
            'name' => 'Pocket Detail Solid Tee',
            'sku' => '29731862',
            'quantity' => '45',
            'purchasePrice' => '129',
            'retailPrice' => '189',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'White',
            'image' => 'PocketDetailSolidTee.jpg'
        ]);

        Apparel::create([
            'name' => 'Dazy-Less Solid Crew Neck Crop Tee',
            'sku' => '82289932',
            'quantity' => '50',
            'purchasePrice' => '123',
            'retailPrice' => '189',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'Black',
            'image' => 'Dazy-LessSolidCrewNeckCropTee.jpg'
        ]);

        Apparel::create([
            'name' => 'DAZY Solid Scoop Neck Tee',
            'sku' => '36361414',
            'quantity' => '50',
            'purchasePrice' => '129',
            'retailPrice' => '189',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'White',
            'image' => 'DAZYSolidScoopNeckTee.jpg'
        ]);

        Apparel::create([
            'name' => 'DAZY Striped Print Round Neck Tee',
            'sku' => '48668413',
            'quantity' => '50',
            'purchasePrice' => '149',
            'retailPrice' => '199',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'Blue and White',
            'image' => 'DAZYStripedPrintRoundNeckTee.jpg'
        ]);

        Apparel::create([
            'name' => 'DAZY Letter Patched Cut Out Rib Knit Tee',
            'sku' => '82391746',
            'quantity' => '50',
            'purchasePrice' => '149',
            'retailPrice' => '306',
            'style' => 'Casual',
            'type' => 'Te',
            'color' => 'Grey',
            'image' => 'DAZYLetterPatchedCutOutRibKnitTee.jpg'
        ]);

        Apparel::create([
            'name' => 'Solid Crew Neck Basic Tee',
            'sku' => '46971328',
            'quantity' => '50',
            'purchasePrice' => '109',
            'retailPrice' => '139',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'Black',
            'image' => 'SolidCrewNeckBasicTee.jpg'
        ]);

        Apparel::create([
            'name' => 'DAZY Ditsy Floral Square Neck Tee',
            'sku' => '64317955',
            'quantity' => '50',
            'purchasePrice' => '169',
            'retailPrice' => '288',
            'style' => 'Boho',
            'type' => 'Tee',
            'color' => 'Beige',
            'image' => 'DAZYDitsyFloralSquareNeckTee.jpg'
        ]);

        Apparel::create([
            'name' => 'Honeyspot Solid Puff Sleeve Tee',
            'sku' => '29973316',
            'quantity' => '50',
            'purchasePrice' => '299',
            'retailPrice' => '483',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'Mauve Purple',
            'image' => 'HoneyspotSolidPuffSleeveTee.jpg'
        ]);

        Apparel::create([
            'name' => 'Dazy-Less Solid Seam Detail Tee',
            'sku' => '82289339',
            'quantity' => '50',
            'purchasePrice' => '195',
            'retailPrice' => '408',
            'style' => 'Casual',
            'type' => 'Tee',
            'color' => 'Blue',
            'image' => 'Dazy-LessSolidSeamDetailTee.jpg'
        ]);

        Apparel::create([
            'name' => 'DAZY Cut Out Front Tee',
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
