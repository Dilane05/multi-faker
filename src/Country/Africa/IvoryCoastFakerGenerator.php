<?php

namespace Cupidontech\MultiFaker\Country\Africa;

use Illuminate\Support\Str;
use Faker\Generator as BaseGenerator;

class IvoryCoastFakerGenerator extends BaseGenerator
{
    // Implémentez les méthodes de génération spécifiques à la Cote D'IVOIRE ici

    public function first_name()
    {
        $firstNames = [
            'Kouamé', 'Konan', 'Koffi', 'Aya', "N'Guessan", "N'Dri", 'Kouassi', 'Ahou', 'Ehouman', 'Gnagne', 'Ouattara', 'Yao', 'Kouadio',
            'Aka', 'Gbêkê', "N'Goran", 'Soro', 'Diarrassouba', 'Fofana', 'Touré', 'Bamba', 'Coulibaly', 'Traoré', 'Sangaré', 'Dembele', 'Koné',
            'Bakayoko', 'Kamara', 'Keïta', 'Sidibé', 'Togola', 'Kante', 'Diarra', 'Barry', 'Bah', 'Dabo', 'Sow', 'Diallo', 'Soumah', 'Camara',
            'Cissé', 'Diakité', 'Kamagate', 'Niane', 'Babou', 'Ba', 'Cissoko', 'Drame', 'Doumbia', 'Fane', 'Kanoute', 'Ndiaye', 'Sissoko',
            'Tandia', 'Toure', 'Bouaré', 'Bagayoko', 'Dabo', 'Fane', 'Fofana', 'Fadiga', 'Gakou', 'Keita', 'Koulibaly', 'Kante', 'Konate',
            'Ndao', 'Sow', 'Soumah', 'Tounkara', 'Traoré', 'Sangaré', 'Baradji', 'Dembele', 'Diabaté', 'Doumbia', 'Mariko', 'Sidibe', 'Cama',
            'Cisse', 'Diarra', 'Doucouré', 'Kamissoko', 'Koné', 'Traoré', 'Sow', 'Toure', 'Diakité', 'Bagayoko', 'Dabo', 'Fofana', 'Kané',
            'Kante', 'Konaté', 'Sow', 'Traoré', 'Cissoko', 'Diallo', 'Diarra', 'Sangaré', 'Sissoko', 'Bamba', 'Barry', 'Diabaté', 'Doumbia',
            'Fofana', 'Kamara', 'Kante', 'Sylla', 'Toure', 'Bakayoko', 'Diarra', 'Fofana', 'Kamagate', 'Sangaré', 'Sidibe', 'Toure', 'Bamba',
            'Coulibaly', 'Diarra', 'Diarra', 'Sangaré', 'Traoré', 'Soro', 'Fofana', 'Kante', 'Kouassi', 'Bamba', 'Diabate', 'Sangare', 'Sidibe',
            'Sow', 'Toure', 'Bakayoko', 'Barry', 'Cisse', 'Diarra', 'Doumbia', 'Kante', 'Traoré', 'Bamba', 'Bakayoko', 'Diakité', 'Diomandé',
            'Doumbia', 'Fofana', 'Kouassi', 'Koulibaly', 'Sangaré', 'Traoré', 'Bamba', 'Bakayoko', 'Cissé', 'Diakité', 'Doumbia', 'Fofana',
            'Kamara', 'Kouassi', 'Sangaré', 'Traoré', 'Bagayoko', 'Bamba', 'Cissé', 'Coulibaly', 'Diarra', 'Diarra', 'Fofana', 'Kante',
            'Koné', 'Sidibe', 'Sow', 'Toure', 'Bakayoko', 'Barry', 'Bamba', 'Cissé', 'Diarra', 'Doumbia', 'Fofana', 'Kamara', 'Kante',
            'Koné', 'Sangaré', 'Sidibe', 'Toure', 'Bagayoko', 'Bamba', 'Barry', 'Cissé', 'Diarra', 'Doumbia', 'Fofana', 'Kamara', 'Kante',
            'Koné', 'Sangaré', 'Sidibe', 'Toure', 'Bakayoko', 'Barry', 'Bamba', 'Cissé', 'Diarra', 'Doumbia', 'Fofana', 'Kamara', 'Kante',
            'Koné', 'Sangaré', 'Sidibe', 'Toure', 'Bakayoko', 'Barry', 'Bamba', 'Cissé', 'Diarra', 'Doumbia', 'Fofana', 'Kamara', 'Kante',
            'Koné', 'Sangaré', 'Sidibe', 'Toure', 'Ahou', 'Akissi', 'Abla', 'Adjoua', 'Affoue', 'Affouet', 'Aissatou',
            'Aka', 'Akissi', 'Akoua', 'Aminata', 'Awa', 'Binta', 'Chantal', 'Fanta',
            'Fatoumata', 'Gnouma', 'Kadiatou', 'Koffi', 'Kouadio', 'Kouakou', 'Lala',
            'Madou', 'Maimouna', 'Mariam', "N'da", "N'dri", "N'tia",
            "N'sa", "N'tamon", "N'te", "N'tchou", "'N'tia", 'Ouattara', 'Sanogo',
            'Sidibe', 'Soumahoro', 'Soumare', 'Soulemane', 'Toure', 'Traore', 'Yao',
            'Yeboua', 'Yeo', 'Zerbo', 'Zongo'
        ];

        $randomIndex = rand(0, count($firstNames) - 1);
        return $firstNames[$randomIndex];
    }

    public function last_name()
    {
        $lastNames = [
            'Aka', 'Akissi', 'Kouassi', 'Kouakou', 'Brou', 'Djedje', 'Diop', 'Fofana', 'Kone', "N'Diaye",
            "N'Guessan", 'Ouattara', 'Sylla', 'Toure', 'Traore', 'Yao', 'Yeboua', 'Abo', 'Aboua', 'Adiko',
            'Allou', 'Assouan', 'Bamba', 'Barro', 'Ble', 'Camara', 'Cisse', 'Coulibaly', 'Dabo', 'Diarra',
            'Doumbia', 'Fofana', 'Kamara', 'Kante', 'Kone', 'Konan', 'Kouame', 'Kouassi', 'Mamadou', 'Sanogo',
            'Sawadogo', 'Sissoko', 'Soumare', 'Toure', 'Yameogo', 'Yoda', 'Zongo', 'Bah', 'Dabo', 'Diallo',
            'Drame', 'Jalloh', 'Keita', 'Ndiaye', 'Sow', 'Sylla', 'Thiam', 'Wane', 'Ba', 'Camara', 'Diallo',
            'Diawara', 'Faye', 'Gueye', 'Lopez', 'Moreno', 'Ndiaye', 'Nguyen', 'Sagna', 'Sokhna', 'Traore',
            'Abdoulaye', 'Ali', 'Bangoura', 'Camara', 'Cisse', 'Conde', 'Diakite', 'Diallo', 'Diané', 'Fofana',
            'Kaba', 'Keita', 'Magassa', 'Mamadou', 'Sacko', 'Soumah', 'Tounkara', 'Touré', 'Traoré', 'Yansané',
            'Aka', 'Akissi', 'Kouassi', 'Kouakou', 'Brou', 'Djedje', 'Diop', 'Fofana', 'Kone'
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
            'Akan', 'Bété', 'Baoulé', 'Sénoufo', 'Gour', 'Malinké', 'Dan', 'Gourounsi', 'Krou', 'Koyaka',
            'Koulango', 'Saraka', 'Lobi', 'Yacouba', 'Yacouba', 'Niarafolo', 'Bakwé', 'Gban', 'Gourounsi',
            'Gouro', 'Koulango', 'Moba', 'Tagbana', 'Bédiaré', 'Dida', 'Gueré', 'Kroumen', 'Wobé', 'Kouya',
            'Dida', 'Lobi', 'Nafaanra', 'Sénoufo', 'Ndyuka', 'Krou', "N'ko", 'Saro', 'Sérè', 'Wobé', 'Yacouba',
            'Bété', 'Dida', 'Gban', 'Gouro', 'Koulango', 'Moba', 'Tagbana', 'Wè', 'Gurma', 'Koulango', 'Krobu',
            'Toro', 'Kran', 'Krou', 'Bété', 'Gban', 'Gouro', 'Lobi', 'Tagbana', 'Wè', 'Yacouba', 'Yacouba',
            'Kran', 'Krou', 'Kwèlè', 'Toro', 'Abbey', 'Adangme', 'Afenmai', 'Agatu', 'Akoko', 'Akpo', 'Alumu',
            'Anufo', 'Asa', 'Atyap', 'Bini', 'Degema', 'Egun', 'Efik', 'Egbema', 'Ekpeye', 'Engenni', 'Etkywa',
            'Gbaya', 'Gbede', 'Gokana', 'Ibibio', 'Ibo', 'Ibani', 'Idoma', 'Ijaw', 'Ika', 'Isoko', 'Izon',
            'Kadara', 'Kainji', 'Kaje', 'Kakanda', 'Kambari', 'Kanufi', 'Kapin', 'Kanuri', 'Koma', 'Koromfé',
            'Kubu', 'Kulung', 'Lufu', 'Mbum', 'Mama', 'Mumuye', 'Ndokwa', 'Nkporo', 'Nnyi', 'Nnyobo', 'Nyangbo',
            'Nyangi', 'Nyon', 'Ogbia', 'Oko', 'Oron', 'Owan', 'Sariki', 'Tèèn', 'Tiv', 'Urhobo', 'Utonkon', 'Uyanga',
            'Yako', 'Yama', 'Yekhee', 'Yen', 'Yukuben'
        ];

        $randomIndex = rand(0, count($origins) - 1);
        return $origins[$randomIndex];
    }

    function region()
    {
        $regions = [
            "Agnéby", "Bafing", "Bagoué", "Bélier", "Béré", "Bouaké", "Bounkani", "Cavally", "Denguélé", "Fromager",
            "Gôh", "Gbêkê", "Gbôklé", "Hambol", "Haut-Sassandra", "Iffou", "Indénié-Djuablin", "Kabadougou",
            "Kabadougou-Bafing-Folon", "La Mé", "Lacs", "Lagunes", "Lôh-Djiboua", "Marahoué", "Moyen-Cavally",
            "Moyen-Comoé", "Moyen-Logba", "N'zi-Comoé", "N'zi-Iffou", "Poro", "San-Pédro", "Savanes", "Sud-Bandama",
            "Sud-Comoé", "Sud-Comoé", "Tchologo", "Tonkpi", "Vallée du Bandama", "Worodougou", "Yamoussoukro",
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
            "Abidjan", "Yamoussoukro", "Bouaké", "Daloa", "San Pedro", "Korhogo", "Man", "Divo", "Gagnoa", "Abengourou",
            "Séguéla", "Odienné", "Tiassalé", "Bondoukou", "Sinfra", "Dimbokro", "Katiola", "Agboville", "Grand-Bassam",
            "Agnibilékrou", "Bongouanou", "Ferkessédougou", "Dabou", "Toumodi", "Duékoué", "Bouna", "Aboisso",
            "Bangolo", "Akoupé", "Daoukro", "Issia", "Sassandra", "Adzopé", "Toulepleu", "Béoumi", "Korhogo", "Bingerville",
            "Vavoua", "Guiglo", "Kounahiri", "Tengréla", "Sakassou", "Tabou", "Oumé", "Séguéla", "Bouaké", "Man",
            "Daloa", "Sinfra", "Katiola", "San Pedro", "Yamoussoukro", "Abidjan"
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
        $prefix = '+225';

        // Générez le premier chiffre aléatoire parmi 01, 02, 03, 04, 05, 06 ou 07
        $firstDigit = '0' . [1, 2, 3, 4, 5, 6, 7][rand(0, 6)];

        // Générez les 6 derniers chiffres aléatoires
        $secondPart = '';
        for ($i = 0; $i < 6; $i++) {
            $secondPart .= rand(0, 9);
        }

        return $prefix . $firstDigit  . $secondPart;
    }

    public function email()
    {
        // Générez un nom d'utilisateur aléatoire, par exemple un prénom suivi d'un numéro
        $username = $this->last_name() . rand(1, 100);

        // Le suffixe de l'adresse e-mail
        $suffix = '@225.civ';

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
        $prefixes = [
            'Ivoirienne', 'Abidjan', 'Cocody', 'Marcory', 'Plateau', 'Treichville', 'Yopougon', 'Adjamé', 'Koumassi', 'Port-Bouët',
            'Treichville', 'Attécoubé', 'Korhogo', 'Bouaké', 'Daloa', 'Yamoussoukro', 'San Pedro', 'Man', 'Divo', 'Gagnoa',
            'Abengourou', 'Bouaflé', 'Sassandra', 'Grand-Bassam', 'Bondoukou', 'Odienné', 'Seguela', 'Agboville', 'Bouna', 'Issia',
            'Ferkessédougou', 'Dabou', 'Bangolo', 'Tingrela', 'Sinfra', 'Danané', 'Katiola', 'Toumodi', 'Daoukro', 'Sakassou',
            'Tanda', 'Bonoua', 'Bingerville', 'Béoumi', 'Alepe', 'Adiaké', 'Lakota', 'Tiassalé', 'Djékanou', 'Facobly'
        ];


        $suffixes = [
            'Ltd', 'PLC', 'LLC', 'LLP', 'Limited', 'PLC', 'LLC', 'LLP', 'Holdings', 'Group', 'Corp', 'Corporation', 'Services',
            'Enterprises', 'Solutions', 'Global', 'Ventures', 'Industries', 'Integrators', 'Associates', 'Incorporated', 'Partners',
            'Resources', 'Technologies', 'Logistics', 'Management', 'Consulting', 'Enterprises', 'Solutions', 'Group', 'Industries',
            'Systems', 'Enterprises', 'Holdings', 'Development', 'Sustainable', 'Enterprises', 'Innovations', 'Foundation'

        ];

        $prefix = $prefixes[rand(0, count($prefixes) - 1)];
        $suffix = $suffixes[rand(0, count($suffixes) - 1)];

        return "$prefix $suffix";
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

        $firstName = $this->first_name;
        $lastName = $this->last_name;

        // Générez un nombre aléatoire à ajouter au nom d'utilisateur
        $randomNumber = rand(100, 999);

        // Concaténez le prénom, le nom de famille et le numéro aléatoire pour former le nom d'utilisateur
        $username = strtolower($firstName . $lastName . $randomNumber);

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
            "Attieké",
            "Foutou Banane",
            "Foutou Igname",
            "Garba",
            "Choukouya",
            "Poulet DG",
            "Kedjenou de poulet",
            "Alloco",
            "Aloko avec poisson braisé",
            "Bouillie",
            "Bouillie d'arachide",
            "Braffet",
            "Cabri Massala",
            "Chikwangue",
            "Crevettes Grillees",
            "Djoumblé",
            "Klaklo",
            "Kédjénou de poulet",
            "Garba",
            "Gbofloto",
            "Igname Glacée",
            "Kédjénou de poulet",
            "Kédjénou de Poisson",
            "Lafindé",
            "Mafé",
            "Moussoukou",
            "Nid d'oiseau",
            "Pâte d'Arachide",
            "Poisson braise",
            "Poisson Kédjénou",
            "Rougail Saucisse",
            "Rougail Poisson",
            "Sauce Gombo",
            "Sauce Arachide",
            "Sauce Aubergine",
            "Sauce Clou de Girofle",
            "Sauce Goyave",
            "Sauce Piment",
            "Soupe Kplala",
            "Soupe de Feuilles de Manioc",
            "Soupe de Feuilles de Patate Douce",
            "Soupe de Gombo",
            "Soupe de Kandja",
            "Soupe de Niébé",
            "Soupe de Poisson",
            "Soupe de Riz",
            "Soupe Jaune",
            "Tô",
            "Wakapate"
        ];

        // Sélection aléatoire d'un nom de plat ivoirien
        $nomPlat = $platsIvoiriens[array_rand($platsIvoiriens)];

        return $nomPlat;
    }
}
