<?php

namespace Cupidontech\MultiFaker\Country\Africa;

use Illuminate\Support\Str;
use Faker\Generator as BaseGenerator;
use Cupidontech\MultiFaker\Contracts\FakerGeneratorInterface;

class CameroonFakerGenerator extends BaseGenerator implements FakerGeneratorInterface
{
    public function first_name()
    {
        $firstNames = [
            'Jean', 'Marie', 'Pierre', 'Elise', 'Françoise', 'Emmanuel', 'Frida', 'Dieudonné', 'Suzanne', 'Thierry',
            'Josiane', 'Olivier', 'Yvette', 'Serge', 'Estelle', 'Valentine', 'Romain', 'Chantal', 'Bruno', 'Isabelle',
            'Achille', 'Sylvie', 'Albert', 'Claudine', 'Grégoire', 'Caroline', 'Émile', 'Julienne', 'Blaise', 'Rachel',
            'Nathalie', 'Gaston', 'Évelyne', 'Lucien', 'Sylviane', 'Yannick', 'Bernadette', 'André', 'Nadia',
            'Hervé', 'Christiane', 'Luc', 'Yolande', 'Jérôme', 'Edith', 'David', 'Patricia', 'René', 'Sophie',
            'Philippe', 'Brigitte', 'Lucas', 'Jocelyne', 'Auguste', 'Antoine', 'Camille', 'Léa', 'Théo', 'Victor',
            'Manon', 'Nicolas', 'Margaux', 'Maxime', 'Alexandra', 'Guillaume', 'Pauline', 'Benjamin', 'Charlotte',
            'Hugo', 'Mathilde', 'Louis', 'Marine', 'Baptiste', 'Valérie', 'Lucie', 'Vincent', 'Laure', 'Damien',
            'Léonard', 'Clémence', 'Jean-Luc', 'Léo', 'Élodie', 'Matthieu', 'Amélie', 'Sophia', 'François', 'Léna',
            'Raphaël', 'Laurène', 'Étienne', 'Rosalie', 'Florent', 'Éva', 'Béatrice', 'Eliott', 'Julia', 'Cyril',
            'Bérengère', 'Martin', 'Jonathan', 'Eléonore', 'Jeanne', 'Édouard', 'Anouk', 'Maxence', 'Emma', 'Margot',
            'Tristan', 'Mathéa', 'Clara', 'Oscar', 'Zoé', 'Valentin', 'Elsa', 'Samuel', 'Louise', 'Thibault',
            'Marion', 'Gaspard', 'Mélanie', 'Bastien', 'Daphné', 'Alexis', 'Manuela', 'Fabien', 'Salomé', 'Charles',
            'Hélène', 'Julien', 'Stéphanie', 'Simon', 'Audrey', 'Gabriel', 'Lise', 'Alexandre', 'Camélia', 'Justine',
            'Léon', 'Carole', 'Tom', 'Juliette', 'Noémie', 'Soline', 'Éloïse', 'Morgane', 'Timothée', 'Lola',
            'Nathan', 'Sara', 'Victorien', 'Eugénie', 'Gilles', 'Alice', 'Thomas', 'Anne', 'Julius', 'Léonie',
            'Benoît', 'Mathias', 'Maëlle', 'Cédric', 'Inès', 'Gabin', 'Andréas', 'Marcel', 'Aurore', 'Antonin',
            'Anaïs', 'Thibaut', 'Sacha', 'Maud', 'Jérémie', 'Fanny', 'Corentin', 'Raphaëlle', 'Léopold', 'Maïlys',
            'Quentin', 'Laura', 'Adrien', 'Coralie', 'Lorenzo', 'Robin', 'Adèle', 'Chloé', 'Célestin', 'Lilian',
            'Flore', 'Nathanaël', 'Axel', 'Théodore', 'Flavien', 'Romane', 'Léandre', 'Jules', 'Augustin', 'Laurine',
            'Matéo', 'Mélissa', 'Lou', 'Lénaïc', 'Gustave', 'Julie', 'Noé', 'Diane', 'Carla', 'Sarah',
            'Maëlys', 'Jade', 'Marius', 'Léa', 'Florian', 'Solène', 'Clémentine', 'César',
        ];

        return $firstNames[array_rand($firstNames)];
    }

    public function last_name()
    {
        $lastNames = [
            'Nkeng', 'Tchoua', 'Ekong', 'Makossa', 'Ngo', 'Ngombe', 'Mvondo', 'Mballa', 'Ngong', 'Takou',
            'Kouam', 'Ongolo', 'Moukouri', 'Bekolo', 'Ngando', 'Meyong', 'Ewane', 'Owona', 'Nkwenti', 'Tchami',
            'Biyong', 'Nkongo', 'Ondoa', 'Mvogo', 'Ndogmo', 'Elong', 'Mekoue', 'Ntoko', 'Mbia', 'Nkodo',
            'Tchouta', 'Mfoula', 'Ebangha', 'Ndam', 'Tchakounte', 'Mveng', 'Eseme', 'Mandeng', 'Mbekou', 'Njock',
            'Tchaptchet', 'Nguepi', 'Nnomo', 'Tchatchouang', 'Mbida', 'Eteme', 'Mvemba', 'Ngoma', 'Owono', 'Nkwelle',
            'Tchouanang', 'Mbezele', 'Nsong', 'Ekindi', 'Mfou', 'Nkwamba', 'Tchinda', 'Eboa', 'Nyebe', 'Meyap',
            'Tchekwa', 'Mvula', 'Ngounou', 'Ebanda', 'Nkouka', 'Moudourou', 'Tchouaffe', 'Meyoumbi', 'Ekoue', 'Ngoepe',
            'Tchapda', 'Onguene', 'Mbanda', 'Ngalim', 'Mekoulou', 'Elongo', 'Tchoumba', 'Nguimfack', 'Mbassi',
            'Tchoume', 'Nyeck', 'Meyoung', 'Njike', 'Tchapda', 'Ekotto', 'Nkoto', 'Mfoumbi',
            'Nkante', 'Ngoa', 'Mandessi', 'Ngoutou', 'Meka', 'Nkollo', 'Tchougong', 'Mboua', 'Ekani',
            'Mvoto', 'Noumbissi', 'Tchane', 'Ngomba', 'Ngaounde', 'Mbom', 'Njikam', 'Owoundi', 'Tchoumbou',
            'Mekulu', 'Nkou', 'Ekeke', 'Nga', 'Tchindou', 'Mbombo', 'Mvongo', 'Mvuala', 'Eyang', 'Nkolo',
        ];

        return $lastNames[array_rand($lastNames)];
    }

    public function gender()
    {
        return ['Male', 'Female'][array_rand(['Male', 'Female'])];
    }

    public function origins()
    {
        $origins = [
            'Bamiléké', 'Bassa', 'Beti', 'Bulu', 'Bafia', 'Bamun', 'Fang', 'Maka', 'Duala', 'Baka',
        ];

        return $origins[array_rand($origins)];
    }

    public function region()
    {
        $regions = [
            'Adamaoua', 'Centre', 'Est', 'Extrême-Nord', 'Littoral',
            'Nord', 'Nord-Ouest', 'Ouest', 'Sud', 'Sud-Ouest',
        ];

        return $regions[array_rand($regions)];
    }

    public function city($region)
    {
        $villesParRegion = [
            'Adamaoua'    => ['Ngaoundéré', 'Tibati', 'Meiganga'],
            'Centre'      => ['Yaoundé', 'Ebolowa', 'Akonolinga'],
            'Est'         => ['Bertoua', 'Batouri', 'Abong-Mbang'],
            'Extrême-Nord'=> ['Maroua', 'Mokolo', 'Kousséri'],
            'Littoral'    => ['Douala', 'Nkongsamba', 'Edea'],
            'Nord'        => ['Garoua', 'Poli', 'Rey Bouba'],
            'Nord-Ouest'  => ['Bamenda', 'Buea', 'Kumbo'],
            'Ouest'       => ['Dschang', 'Bafoussam', 'Mbouda'],
            'Sud'         => ['Ebolowa', 'Sangmélima', 'Meyomessala'],
            'Sud-Ouest'   => ['Buea', 'Limbe', 'Kumba'],
        ];

        return $villesParRegion[$region][array_rand($villesParRegion[$region])];
    }

    public function cities()
    {
        $villes = [
            'Yaoundé', 'Douala', 'Bafoussam', 'Bamenda', 'Dschang', 'Ngaoundéré',
            'Garoua', 'Limbe', 'Kribi', 'Bertoua', 'Bafang', 'Ebolowa', 'Maroua', 'Tiko',
        ];

        return $villes[array_rand($villes)];
    }

    public function coordinates()
    {
        $limites = [
            'nord'  => 13.083333,
            'sud'   => 2.333333,
            'ouest' => 8.483333,
            'est'   => 16.083333,
        ];

        $latitude  = $limites['sud']   + mt_rand() / mt_getrandmax() * ($limites['nord'] - $limites['sud']);
        $longitude = $limites['ouest'] + mt_rand() / mt_getrandmax() * ($limites['est']  - $limites['ouest']);

        return ['latitude' => $latitude, 'longitude' => $longitude];
    }

    public function address()
    {
        $streets = [
            'Douala, Littoral'  => ['Rue de la Liberté', 'Avenue du Port', 'Boulevard de l\'Indépendance', 'Logpom Eneo', 'Makepe IBM', 'Ndogbong Zachman'],
            'Yaoundé, Centre'   => ['Boulevard de Yaoundé', 'Rue de l\'Unité', 'Avenue de l\'Indépendance', 'Boulevard de la Liberté'],
            'Bafoussam, Ouest'  => ['Avenue du Cameroun', 'Rue de la Mairie', 'Boulevard de l\'Espérance'],
            'Limbe, Sud-Ouest'  => ['Rue de Limbe', 'Avenue du Port de Limbe', 'Boulevard de la Plage'],
            'Buea, Sud-Ouest'   => ['Boulevard de Buea', 'Rue de la Montagne', 'Avenue de la Paix'],
            'Garoua, Nord'      => ['Avenue de Garoua', 'Boulevard de la République', 'Rue de la Solidarité'],
            'Bamenda, Nord-Ouest'=> ['Boulevard de Bamenda', 'Rue de la Ville', 'Avenue de l\'Espoir'],
            'Kribi, Sud'        => ['Rue de Kribi', 'Avenue de la Plage', 'Boulevard du Port'],
        ];

        $randomCity   = array_rand($streets);
        $randomStreet = $streets[$randomCity][array_rand($streets[$randomCity])];

        return "$randomStreet, $randomCity";
    }

    public function phone()
    {
        $prefixes = [
            '650', '651', '652', '653', '654', '655', '656', '657', '658', '659',
            '670', '671', '672', '673', '674', '675', '676', '677', '678', '679',
            '690', '691', '692', '693', '694', '695', '696', '697', '698', '699',
            '660', '661', '662', '663', '664', '665',
            '620', '621', '622',
        ];
        $prefix = $prefixes[array_rand($prefixes)];
        return sprintf('+237 %s %03d %03d', $prefix, rand(0, 999), rand(0, 999));
    }

    public function email()
    {
        return $this->last_name() . rand(1, 100) . '@237.cm';
    }

    public function date($startDate = '-30 years', $endDate = 'now', $format = 'Y-m-d')
    {
        return date($format, mt_rand(strtotime($startDate), strtotime($endDate)));
    }

    public function text($length)
    {
        $chars   = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $content = '';

        for ($i = 0; $i < $length; $i++) {
            $content .= $chars[rand(0, strlen($chars) - 1)];
        }

        return $content;
    }

    public function companyName()
    {
        $companies = [
            'MTN Cameroon', 'Orange Cameroun', 'Camtel', 'Nexttel Cameroun',
            'Afriland First Bank', 'Société Générale Cameroun', 'UBA Cameroun',
            'Ecobank Cameroun', 'BICEC', 'SCB Cameroun', 'BGFI Bank Cameroun',
            'SABC', 'Guinness Cameroun', 'CICAM', 'Total Énergies Cameroun',
            'Canal+ Cameroun', 'Campost', 'SCDP', 'Camair-Co', 'CFAO Motors',
            'Tradex', 'Express Exchange', 'Chanas Assurances', 'Activa Assurances',
            'CCA Bank', 'Crédit du Sahel', 'National Financial Credit (NFC)',
            'Boulangerie Nouvelle', 'Pharmacie de la Paix', 'Imprimerie Saint-Paul',
        ];
        return $companies[array_rand($companies)];
    }

    public function creditCardNumber()
    {
        $prefix = ['4', '5', '37', '6'][array_rand(['4', '5', '37', '6'])];
        $card   = $prefix;

        for ($i = 0; $i < 16 - strlen($prefix); $i++) {
            $card .= rand(0, 9);
        }

        return $card;
    }

    public function password()
    {
        return Str::random(10);
    }

    public function username()
    {
        return strtolower($this->first_name() . $this->last_name() . rand(100, 999));
    }

    public function product()
    {
        $names       = ['Smartphone', 'Laptop', 'Tablet', 'TV', 'Headphones', 'Camera', 'Game Console', 'Bluetooth Speaker', 'Wireless Earbuds', 'Smartwatch'];
        $descriptions= ['An excellent choice to stay connected.', 'Exceptional performance in an elegant design.', 'Outstanding sound quality for an immersive experience.', 'Capture unforgettable moments.'];
        $categories  = ['Electronics', 'Computers', 'Audio', 'Photography', 'Gaming', 'Accessories'];

        return [
            'name'         => $names[array_rand($names)],
            'description'  => $descriptions[array_rand($descriptions)],
            'price'        => mt_rand(50, 1000000),
            'category'     => $categories[array_rand($categories)],
            'availability' => mt_rand(0, 1) ? 'In stock' : 'Out of stock',
        ];
    }

    public function food()
    {
        $plats = [
            'Ndolé', 'Poulet DG', 'Sauce arachide', 'Achu', 'Sanga', 'Koki', 'Mbongo Tchobi',
            'Corn chaff', 'Nkui', 'Eru', 'African Salad', 'Camerounian Jollof Rice',
            'Okok', 'Chawarma', 'Poumseh', 'Pile', 'Pomme Rotir',
        ];

        return $plats[array_rand($plats)];
    }

    public function university()
    {
        $universities = [
            'Université de Douala', 'Université de Yaoundé I', 'Université de Yaoundé II (Soa)',
            'Université de Dschang', 'Université de Ngaoundéré', 'Université de Buea',
            'Université de Maroua', 'Université de Bamenda',
            'École Nationale Supérieure Polytechnique (ENSP)',
            'École Nationale d\'Administration et de Magistrature (ENAM)',
            'Institut Supérieur de Management de Yaoundé (ISM)',
            'Université Catholique d\'Afrique Centrale (UCAC)',
            'Institut des Relations Internationales du Cameroun (IRIC)',
            'École Supérieure des Sciences et Techniques de l\'Information (ESSTIC)',
        ];
        return $universities[array_rand($universities)];
    }

    public function district()
    {
        $districts = [
            'Akwa', 'Bonanjo', 'Bonapriso', 'Bonamoussadi', 'Bali', 'Deido',
            'Logbessou', 'Makepe', 'Ndokotti', 'Bépanda', 'Ndog-Bong', 'Kotto',
            'Logpom', 'Sodiko', 'Mboppi', 'Ndog-Passi', 'Nkol-Eton',
            'Bastos', 'Tsinga', 'Mvan', 'Ekounou', 'Emana', 'Nkolbisson',
            'Ngousso', 'Efoulan', 'Mvog-Ada', 'Mendong', 'Elig-Essono',
            'Nlongkak', 'Santa Barbara', 'Omnisports', 'Essos', 'Mimboman',
        ];
        return $districts[array_rand($districts)];
    }

    public function licensePlate()
    {
        $regions = ['LT', 'CE', 'NO', 'EN', 'AD', 'NW', 'SW', 'SU', 'ES', 'OU'];
        $letters = 'ABCDEFGHJKLMNPRSTUVWXYZ';
        $region  = $regions[array_rand($regions)];
        $number  = str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);
        $suffix  = $letters[rand(0, strlen($letters) - 1)] . $letters[rand(0, strlen($letters) - 1)];
        return $region . ' ' . $number . ' ' . $suffix;
    }

    public function nationalId()
    {
        $letter = chr(rand(65, 90));
        return $letter . str_pad(rand(1, 99999999), 8, '0', STR_PAD_LEFT);
    }
}
