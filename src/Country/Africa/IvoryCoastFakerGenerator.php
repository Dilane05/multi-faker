<?php

namespace Cupidontech\MultiFaker\Country\Africa;

use Illuminate\Support\Str;
use Faker\Generator as BaseGenerator;
use Cupidontech\MultiFaker\Contracts\FakerGeneratorInterface;

class IvoryCoastFakerGenerator extends BaseGenerator implements FakerGeneratorInterface
{
    // Implémentez les méthodes de génération spécifiques à la Cote D'IVOIRE ici

    public function first_name()
    {
        $firstNames = [
            'Kouamé', 'Konan', 'Koffi', 'Aya', 'Kouassi', 'Ahou', 'Ehouman', 'Gnagne', 'Yao', 'Kouadio',
            'Akissi', 'Abla', 'Adjoua', 'Affoue', 'Affouet', 'Aissatou', 'Akoua', 'Aminata', 'Awa', 'Binta',
            'Chantal', 'Fanta', 'Fatoumata', 'Gnouma', 'Kadiatou', 'Lala', 'Madou', 'Maimouna', 'Mariam', 'Adama',
            'Amadou', 'Moussa', 'Salif', 'Youssouf', 'Abdoulaye', 'Ibrahim', 'Oumar', 'Mamadou', 'Seydou', 'Drissa',
        ];

        $randomIndex = rand(0, count($firstNames) - 1);
        return $firstNames[$randomIndex];
    }

    public function last_name()
    {
        $lastNames = [
            'Aka', 'Bamba', 'Bakayoko', 'Barry', 'Brou', 'Camara', 'Cissé', 'Coulibaly', 'Dabo', 'Diabaté',
            'Diakité', 'Diallo', 'Diarra', 'Djedje', 'Diop', 'Doumbia', 'Fofana', 'Kamara', 'Kante', 'Koné',
            'Kouamé', 'Kouassi', 'Ouattara', 'Sanogo', 'Sangaré', 'Sidibé', 'Soro', 'Soumahoro', 'Sylla', 'Touré',
            'Traoré', 'Yao', 'Yeboua', 'Zongo',
        ];

        $randomIndex = rand(0, count($lastNames) - 1);
        return $lastNames[$randomIndex];
    }

    function gender()
    {
        $genders = ['Male', 'Female'];
        return $genders[array_rand($genders)];
    }

    public function origins()
    {
        $origins = [
            'Akan', 'Baoulé', 'Bété', 'Sénoufo', 'Malinké', 'Dan', 'Gour', 'Gouro', 'Krou', 'Lobi',
            'Yacouba', 'Wè', 'Koulango', 'Dida', 'Guéré', 'Tagbana', 'Abron', 'Agni', 'Abbey', 'Koyaka',
            'Wobé', 'Nafana', 'Gban', 'Gourounsi', 'Saraka', 'Bakwé',
        ];

        $randomIndex = rand(0, count($origins) - 1);
        return $origins[$randomIndex];
    }

    function region()
    {
        $regions = [
            "Agnéby", "Bafing", "Bagoué", "Bélier", "Béré", "Bounkani", "Cavally", "Denguélé", "Fromager",
            "Gôh", "Gbêkê", "Gbôklé", "Hambol", "Haut-Sassandra", "Iffou", "Indénié-Djuablin", "Kabadougou",
            "Kabadougou-Bafing-Folon", "La Mé", "Lacs", "Lagunes", "Lôh-Djiboua", "Marahoué", "Moyen-Cavally",
            "Moyen-Comoé", "Moyen-Logba", "N'zi-Comoé", "N'zi-Iffou", "Poro", "San-Pédro", "Savanes", "Sud-Bandama",
            "Sud-Comoé", "Tchologo", "Tonkpi", "Vallée du Bandama", "Worodougou", "Yamoussoukro",
            "Zanzan"
        ];

        $regionAleatoire = $regions[array_rand($regions)];
        return $regionAleatoire;
    }

    function city($region)
    {
        $villesParRegion = [
            "Agnéby" => ["Agboville", "Akoupé", "Rubino"],
            "Bafing" => ["Touba", "Kouibly", "Bako"],
            "Bagoué" => ["Boundiali", "Tengréla", "Koro"],
            "Bélier" => ["Dabou", "Sikensi", "Tiassalé"],
            "Béré" => ["Mankono", "Kounahiri", "Séguéla"],
            "Bouaké" => ["Bouaké", "Sakassou", "Béoumi"],
            "Bounkani" => ["Bouna", "Nassian", "Doropo"],
            "Cavally" => ["Guiglo", "Toulépleu", "Taï"],
            "Denguélé" => ["Odienné", "Madinani", "Samatiguila"],
            "Fromager" => ["Gagnoa", "Divo", "Hiré"],
            "Gôh" => ["Gagnoa", "Ouragahio", "Oumé"],
            "Gbêkê" => ["Béoumi", "Botro", "Bouaké"],
            "Gbôklé" => ["Soubré", "Sassandra", "San Pedro"],
            "Hambol" => ["Katiola", "Dabakala", "Tengréla"],
            "Haut-Sassandra" => ["Daloa", "Issia", "Zoukougbeu"],
            "Iffou" => ["Daoukro", "Bongouanou", "M'Bahiakro"],
            "Indénié-Djuablin" => ["Abengourou", "Agnibilékrou", "Bettié"],
            "Kabadougou" => ["Guiglo", "Toulepleu", "Taï"],
            "Kabadougou-Bafing-Folon" => ["Danzé", "Zouan-Hounien", "Zoukougbeu"],
            "La Mé" => ["Aboisso", "Adiaké", "Grand-Lahou"],
            "Lacs" => ["Dimbokro", "Daoukro", "Prikro"],
            "Lagunes" => ["Abidjan", "Grand-Bassam", "Jacqueville"],
            "Lôh-Djiboua" => ["Divo", "Guitry", "Lakota"],
            "Marahoué" => ["Bouaflé", "Sinfra", "Zuénoula"],
            "Moyen-Cavally" => ["Guéyo", "Tahouaké", "Guiglo"],
            "Moyen-Comoé" => ["Abengourou", "Adiaké", "Agnibilékrou"],
            "Moyen-Logba" => ["Akoupé", "Grand-Lahou", "Dabou"],
            "N'zi-Comoé" => ["Bongouanou", "Daoukro", "M'Bahiakro"],
            "N'zi-Iffou" => ["Daoukro", "Bongouanou", "M'Bahiakro"],
            "Poro" => ["Korhogo", "Ferkessédougou", "Boundiali"],
            "San-Pédro" => ["San Pedro", "Tabou", "Sassandra"],
            "Savanes" => ["Korhogo", "Ferkessédougou", "Boundiali"],
            "Sud-Bandama" => ["Divo", "Guitry", "Lakota"],
            "Sud-Comoé" => ["Aboisso", "Adiaké", "Grand-Lahou"],
            "Tchologo" => ["Ferkessédougou", "Kong", "M'Bengue"],
            "Tonkpi" => ["Man", "Danané", "Biankouma"],
            "Vallée du Bandama" => ["Bouaké", "Sakassou", "Béoumi"],
            "Worodougou" => ["Séguéla", "Kani", "Vavoua"],
            "Yamoussoukro" => ["Yamoussoukro"],
            "Zanzan" => ["Bondoukou", "Bouna", "Tanda"]
        ];

        $villeAleatoire = $villesParRegion[$region][array_rand($villesParRegion[$region])];
        return $villeAleatoire;
    }

    public function cities()
    {
        $villes = [
            'Abidjan', 'Yamoussoukro', 'Bouaké', 'Daloa', 'San Pedro', 'Korhogo', 'Man', 'Divo', 'Gagnoa', 'Abengourou',
            'Séguéla', 'Odienné', 'Tiassalé', 'Bondoukou', 'Sinfra', 'Dimbokro', 'Katiola', 'Agboville', 'Grand-Bassam',
            'Agnibilékrou', 'Bongouanou', 'Ferkessédougou', 'Dabou', 'Toumodi', 'Duékoué', 'Bouna', 'Aboisso',
            'Bangolo', 'Akoupé', 'Daoukro', 'Issia', 'Sassandra', 'Adzopé', 'Toulepleu', 'Béoumi', 'Bingerville',
            'Vavoua', 'Guiglo', 'Kounahiri', 'Tengréla', 'Sakassou', 'Tabou', 'Oumé',
        ];

        return $villes[array_rand($villes)];
    }

    function coordinates()
    {
        // Limites géographiques de la Côte d'Ivoire (latitude et longitude)
        $limites = [
            'nord' => 10.7402,   // Latitude Nord
            'sud' => 4.3520,     // Latitude Sud
            'ouest' => -8.5992,   // Longitude Ouest
            'est' => -2.4949      // Longitude Est
        ];

        // Génération de coordonnées aléatoires dans les limites de la Côte d'Ivoire
        $latitude = $limites['sud'] + mt_rand() / mt_getrandmax() * ($limites['nord'] - $limites['sud']);
        $longitude = $limites['ouest'] + mt_rand() / mt_getrandmax() * ($limites['est'] - $limites['ouest']);

        return ['latitude' => $latitude, 'longitude' => $longitude];
    }

    public function address()
    {

        $cities = [
            'Abidjan' => [
                'Cocody', 'Marcory', 'Yopougon', 'Treichville', 'Adjamé', 'Koumassi', 'Plateau', 'Port-Bouët', 'Attecoube', 'Abobo',
            ],
            'Yamoussoukro' => [
                'Quartier Administratif', 'Quartier Commerce', 'Quartier Habitat', 'Quartier Industriel', 'Quartier Loisirs', 'Quartier Santé', 'Quartier Sports', 'Quartier Technique', 'Quartier Culture', 'Quartier Éducation',
            ],
            'Bouaké' => [
                'Belleville', 'Sokoura', 'Les Oliviers', 'Sankadiokro', "N'Gattakro", 'Koko', 'Gbazô', 'Tissékro', 'Fankakaha', 'Djidji',
            ],
            'Daloa' => [
                'Quartier Résidentiel', 'Quartier Industriel', 'Quartier Administratif', 'Quartier Commercial', 'Quartier Loisirs', 'Quartier Santé', 'Quartier Éducation', 'Quartier Culte', 'Quartier Sports', 'Quartier Village',
            ],
            'San Pedro' => [
                'Banco', 'Kabadougou', 'Molibokro', 'Petit Paris', 'Méagui', 'Sassandra', 'Haut Sassandra', 'Bas Sassandra', 'Marahoué', 'Worodougou',
            ],
            'Korhogo' => [
                'Quartier Nord', 'Quartier Sud', 'Quartier Est', 'Quartier Ouest', 'Quartier Central', 'Quartier Populaire', 'Quartier Résidentiel', 'Quartier Administratif', 'Quartier Commercial', 'Quartier Industriel',
            ],
            'Man' => [
                'Quartier Gare', 'Quartier Indénié', 'Quartier Goin-Débé', 'Quartier Académie', 'Quartier Djébé', 'Quartier Kodjo', 'Quartier N\'Douci', 'Quartier Tchologo', 'Quartier Yébé', 'Quartier Zatta',
            ],
            'Divo' => [
                'Quartier Résidentiel', 'Quartier Commercial', 'Quartier Industriel', 'Quartier Administratif', 'Quartier Loisirs', 'Quartier Santé', 'Quartier Sports', 'Quartier Éducation', 'Quartier Culte', 'Quartier Village',
            ],
            'Gagnoa' => [
                'Quartier Sogefiha', 'Quartier Cap Sud', 'Quartier Bia Sud', 'Quartier Azaguié', 'Quartier Bia Nord', 'Quartier Cap Nord', 'Quartier Conombo', 'Quartier Guéhiébly', 'Quartier Lipouhé', 'Quartier Sopéa',
            ],
            'Abengourou' => [
                'Quartier Gouabo', 'Quartier Yaoboué', 'Quartier Anoumabo', 'Quartier Abougnanou', 'Quartier Tiobly', 'Quartier Ahoussi', 'Quartier Ankouabo', 'Quartier Assouindé', 'Quartier Dida', 'Quartier Edikouabo',
            ],
        ];

        $randomCity = array_rand($cities);

        // Choisissez un quartier aléatoire dans la ville
        $randomNeighborhood = $cities[$randomCity][array_rand($cities[$randomCity])];

        return "$randomNeighborhood, $randomCity";
    }

    public function phone()
    {
        $prefixes = [
            '07', '27',  // Orange CI
            '05', '25',  // MTN CI
            '01', '21',  // Moov Africa
        ];
        $prefix = $prefixes[array_rand($prefixes)];
        return sprintf('+225 %s %02d %02d %02d %02d', $prefix, rand(10, 99), rand(10, 99), rand(10, 99), rand(10, 99));
    }

    public function email()
    {
        // Générez un nom d'utilisateur aléatoire, par exemple un prénom suivi d'un numéro
        $username = $this->last_name() . rand(1, 100);

        // Le suffixe de l'adresse e-mail
        $suffix = '@example.ci';

        return $username . $suffix;
    }

    public function date($startDate = '-30 years', $endDate = 'now', $format = 'Y-m-d')
    {
        $timestamp = mt_rand(strtotime($startDate), strtotime($endDate));
        return date($format, $timestamp);
    }

    public function text($length)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $content = '';

        for ($i = 0; $i < $length; $i++) {
            $content .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $content;
    }

    public function companyName()
    {
        $companies = [
            'MTN Côte d\'Ivoire', 'Orange Côte d\'Ivoire', 'Moov Africa Côte d\'Ivoire',
            'BICICI', 'SGBCI', 'Ecobank Côte d\'Ivoire', 'NSIA Banque',
            'Société Ivoirienne de Banque (SIB)', 'Banque Atlantique CI', 'UBA CI',
            'Brasseries Ivoiriennes', 'Solibra', 'Air Côte d\'Ivoire',
            'SODECI', 'CIE', 'Canal+ Côte d\'Ivoire', 'Total CI',
            'SIFCA', 'SUCRIVOIRE', 'Nestlé CI', 'CFAO CI',
            'Pharmacie Nationale', 'Université Mohammed VI Polytechnique', 'Wave CI',
        ];
        return $companies[array_rand($companies)];
    }

    public function creditCardNumber()
    {
        $prefixes = ['4', '5', '37', '6'];
        $prefix = $prefixes[rand(0, count($prefixes) - 1)];

        $length = 16; // La plupart des numéros de cartes ont 16 chiffres

        // Générez les chiffres aléatoires restants
        $remainingLength = $length - strlen($prefix);
        $cardNumber = $prefix;
        for ($i = 0; $i < $remainingLength; $i++) {
            $cardNumber .= rand(0, 9);
        }

        return $cardNumber;
    }

    public function password()
    {
        // Générez un mot de passe aléatoire avec la longueur spécifiée
        $password = Str::random(10);

        return $password;
    }

    public function username()
    {
        $randomNumber = rand(100, 999);
        $username = strtolower($this->first_name() . $this->last_name() . $randomNumber);

        return $username;
    }

    function product()
    {
        // List of fictitious product names
        $productNames = [
            "Smartphone",
            "Laptop",
            "Tablet",
            "TV",
            "Headphones",
            "Camera",
            "Game Console",
            "Bluetooth Speaker",
            "Wireless Earbuds",
            "Smartwatch",
        ];

        // List of fictitious descriptions
        $descriptions = [
            "An excellent choice to stay connected at all times.",
            "Exceptional performance in an elegant design.",
            "The perfect tool for home entertainment.",
            "Outstanding sound quality for an immersive experience.",
            "Capture unforgettable moments with this camera.",
            "Dive into the world of video games with this console.",
            "Wirelessly stream music with superior quality.",
            "Comfortable and convenient, these earbuds are a must-have.",
            "Stay fit and connected with this smartwatch.",
        ];

        // Possible product categories
        $categories = ["Electronics", "Computers", "Audio", "Photography", "Gaming", "Accessories"];

        // Random generation of product data
        $productName = $productNames[array_rand($productNames)];
        $description = $descriptions[array_rand($descriptions)];
        $price = mt_rand(50, 10000000); // Random price between 50 and 10,000,000 currency units
        $category = $categories[array_rand($categories)];
        $availability = mt_rand(0, 1) ? "In stock" : "Out of stock"; // Product in stock or out of stock

        // Creating an associative array representing the product
        $product = [
            "name" => $productName,
            "description" => $description,
            "price" => $price,
            "category" => $category,
            "availability" => $availability,
        ];

        return $product;
    }

    function food()
    {
        $platsIvoiriens = [
            'Attieké', 'Foutou Banane', 'Foutou Igname', 'Garba', 'Choukouya', 'Poulet DG', 'Kedjenou de poulet',
            'Alloco', 'Aloko avec poisson braisé', 'Bouillie', "Bouillie d'arachide", 'Braffet', 'Cabri Massala',
            'Chikwangue', 'Crevettes Grillees', 'Djoumblé', 'Klaklo', 'Kédjénou de poulet', 'Gbofloto', 'Igname Glacée',
            'Kédjénou de Poisson', 'Lafindé', 'Mafé', 'Moussoukou', "Nid d'oiseau", "Pâte d'Arachide", 'Poisson braise',
            'Poisson Kédjénou', 'Rougail Saucisse', 'Rougail Poisson', 'Sauce Gombo', 'Sauce Arachide', 'Sauce Aubergine',
            'Sauce Clou de Girofle', 'Sauce Goyave', 'Sauce Piment', 'Soupe Kplala', 'Soupe de Feuilles de Manioc',
            'Soupe de Feuilles de Patate Douce', 'Soupe de Gombo', 'Soupe de Kandja', 'Soupe de Niébé',
            'Soupe de Poisson', 'Soupe de Riz', 'Soupe Jaune', 'Tô', 'Wakapate',
        ];

        // Sélection aléatoire d'un nom de plat ivoirien
        $nomPlat = $platsIvoiriens[array_rand($platsIvoiriens)];

        return $nomPlat;
    }

    public function university()
    {
        $universities = [
            'Université Félix Houphouët-Boigny (Cocody)',
            'Université Abobo-Adjamé', 'Université Jean Lorougnon Guédé (Daloa)',
            'Université Alassane Ouattara (Bouaké)',
            'Université Peleforo Gon Coulibaly (Korhogo)',
            'Institut National Polytechnique Félix Houphouët-Boigny (INPHB)',
            'École Nationale Supérieure d\'Ingénieurs (ENSI)',
            'ESATIC', 'INPHB Yamoussoukro', 'Université de Man',
            'Institut Supérieur des Sciences et Technologie d\'Abidjan (ISSTA)',
        ];
        return $universities[array_rand($universities)];
    }

    public function district()
    {
        $districts = [
            'Cocody', 'Plateau', 'Marcory', 'Treichville', 'Yopougon',
            'Abobo', 'Adjamé', 'Attécoubé', 'Koumassi', 'Port-Bouët',
            'Bingerville', 'Riviera', '2 Plateaux', 'Angré', 'Danga',
            'Blockhaus', 'Zone 4', 'Zone 3', 'Biétry', 'Vridi',
            'Songon', 'Anyama', 'Alepo',
        ];
        return $districts[array_rand($districts)];
    }

    public function licensePlate()
    {
        $letters = 'ABCDEFGHJKLMNPRSTUVWXYZ';
        $l1 = $letters[rand(0, strlen($letters) - 1)];
        $l2 = $letters[rand(0, strlen($letters) - 1)];
        $number = str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);
        return $l1 . $l2 . ' ' . $number . ' CI';
    }

    public function nationalId()
    {
        return str_pad(rand(1, 9999999999), 10, '0', STR_PAD_LEFT);
    }
}
