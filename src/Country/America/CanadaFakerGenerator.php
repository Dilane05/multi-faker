<?php

namespace Cupidontech\MultiFaker\Country\America;

use Illuminate\Support\Str;
use Faker\Generator as BaseGenerator;

class CanadaFakerGenerator extends BaseGenerator
{
    public function first_name()
    {
        $firstNames = [
            'Liam', 'Olivia', 'Noah', 'Emma', 'Oliver', 'Ava', 'Ethan', 'Charlotte', 'William', 'Sophia',
            'Benjamin', 'Amelia', 'Lucas', 'Mia', 'Henry', 'Harper', 'Alexander', 'Evelyn', 'James', 'Abigail',
            'Michael', 'Emily', 'Daniel', 'Elizabeth', 'Matthew', 'Sofia', 'Joseph', 'Ella', 'Samuel', 'Grace',
            'Sebastian', 'Chloe', 'David', 'Scarlett', 'Jack', 'Aria', 'Nicholas', 'Riley', 'Aiden', 'Lily',
            'Elijah', 'Zoe', 'Eli', 'Hannah', 'Gabriel', 'Avery', 'Carter', 'Madison', 'Logan', 'Layla',
            'Jackson', 'Eleanor', 'John', 'Nora', 'Jonathan', 'Penelope', 'Dylan', 'Leah', 'Nathan', 'Aubrey',
            'Caleb', 'Victoria', 'Ryan', 'Brooklyn', 'Daniel', 'Lillian', 'Nicholas', 'Addison', 'Isaac', 'Ellie',
            'Levi', 'Zoey', 'Andrew', 'Stella', 'Christian', 'Hazel', 'Hunter', 'Natalie', 'Grayson', 'Emilia',
            'Isaiah', 'Elizabeth', 'Owen', 'Layla', 'Mason', 'Lucy', 'Lincoln', 'Zoe', 'Mateo', 'Hailey',
            'Anthony', 'Mila', 'Asher', 'Aria', 'Ezra', 'Nevaeh', 'Matthew', 'Elizabeth', 'Joseph', 'Aubree',
            'William', 'Natalia', 'James', 'Luna', 'Benjamin', 'Savannah', 'Sebastian', 'Camila', 'David', 'Scarlet',
            'Julian', 'Paisley', 'Wyatt', 'Skylar', 'Jack', 'Lily', 'Luke', 'Isabelle', 'Christopher', 'Sophie',
            'Henry', 'Nova', 'Jayden', 'Lila', 'Leo', 'Alice', 'Adam', 'Ariana', 'Samuel', 'Elena',
            'Oliver', 'Claire', 'Matthew', 'Ruby', 'Logan', 'Eva', 'Ryan', 'Samantha', 'Leo', 'Aaliyah',
            'Isaiah', 'Madeline', 'Elijah', 'Josephine', 'Charles', 'Cora', 'Isaac', 'Sadie', 'Jack', 'Violet',
            'Nathan', 'Gabriella', 'Anthony', 'Willow', 'Josiah', 'Harper', 'Max', 'Adeline', 'Daniel', 'Kaylee',
            'Jonathan', 'Alexandra', 'Christopher', 'Aurora', 'Tyler', 'Piper', 'Nicholas', 'Ruby', 'Mason', 'Elise',
            'Nolan', 'Bella', 'Hudson', 'Taylor', 'Caleb', 'Hannah', 'Henry', 'Layla', 'Zachary', 'Lilly',
            'Gavin', 'Zoe', 'Eli', 'Leilani', 'Dylan', 'Sadie', 'Levi', 'Nora', 'Aaron', 'Camilla',
            'Andrew', 'Lucia', 'Cooper', 'Serenity', 'Jordan', 'Vivian', 'Adrian', 'Nadia', 'Carson', 'Delilah',
            'Elias', 'Quinn', 'Maxwell', 'Alexis', 'Dominic', 'Daisy', 'Jackson', 'Valeria', 'Brody', 'Alexa',
            'Tristan', 'Tessa', 'Ian', 'Brianna', 'Colton', 'Lydia', 'Nicholas', 'Sophie', 'Xavier', 'Aria',
            'Parker', 'Sadie', 'Roman', 'Josephine', 'Jason', 'Sienna', 'Santiago', 'Makayla', 'Chase', 'Lila',
            'Leon', 'Ayla', 'Nathaniel', 'Maya', 'Thomas', 'Melanie', 'Harrison', 'Kylie', 'John', 'Eliza',
            'Cole', 'Eloise', 'Nolan', 'Ruby', 'Christian', 'Luna', 'Miles', 'Eleanor', 'Ezekiel', 'Madison',
            'Austin', 'Violet', 'Axel', 'Leah', 'Kai', 'Paisley', 'Cameron', 'Elise', 'Dominic', 'Elena',
            'Jaxson', 'Alexandra', 'Zane', 'Gianna', 'Hunter', 'Adalyn', 'Louis', 'Delaney', 'Derek', 'Jennifer',
            'Caleb', 'Daniela', 'Evan', 'Allison', 'Josiah', 'Gabrielle', 'Xander', 'Isabella', 'Jose', 'Danielle',
            'Brayden', 'Margaret', 'Carson', 'Ruby', 'Levi', 'Alice', 'Kayden', 'Josephine', 'Bentley', 'Valerie',
            'Blake', 'Maddison', 'Ian', 'Lyric', 'Peyton', 'Adelaide', 'Joseph', 'Alexandra', 'Emmett', 'Vivienne',
            'Jason', 'Evangeline', 'Hudson', 'Savannah', 'Kingston', 'Annabelle', 'Easton', 'Lucille', 'Mateo', 'Rose',
            'Adrian', 'Elsie', 'Liam', 'Cecilia', 'Asher', 'Alaina', 'Jace', 'Harmony', 'Theodore', 'Sierra',
            'Harrison', 'Bianca', 'Jeremiah', 'Amara', 'Hudson', 'Callie', 'Lincoln', 'Athena', 'Eli', 'Summer',
            'Henry', 'Willow', 'Leo', 'Ivy', 'Nolan', 'Jade', 'Elias', 'Noelle', 'Zachary', 'Hope',
            'Nathaniel', 'Alessandra', 'Ezra', 'Liliana', 'David', 'Katherine', 'Dylan', 'Ella', 'Samuel', 'Nina',
            'Gavin', 'Lena', 'Isaiah', 'Sarai', 'Tyler', 'Alexia', 'Mason', 'Vera', 'Austin', 'Talia',
            'Colton', 'Mariana', 'Josiah', 'Sasha', 'Joseph', 'Evelynn', 'Brody', 'Holly', 'Roman', 'Jessica',
            'Ian', 'Maggie', 'Jason', 'Zara', 'Xavier', 'Mira', 'Jaxson', 'Eileen', 'Chase', 'Dahlia',
            'Kai', 'Willa', 'Cameron', 'Serena', 'Maxwell', 'Rylee', 'Axel', 'Norah', 'Dominic', 'Isla',
            'Ezekiel', 'Lia', 'Hudson', 'Selena', 'Santiago', 'Felicity', 'Hunter', 'Elsa', 'Louis', 'Juliette',
            'Caleb', 'Hayley', 'Evan', 'Jane', 'Josiah', 'Amira', 'Xander', 'Daphne', 'Jose', 'Elliana',
            'Brayden', 'Miriam', 'Carson', 'Heidi', 'Levi', 'Gracelyn', 'Kayden', 'Rosalie', 'Bentley', 'Kira',
            'Blake', 'Phoebe', 'Ian', 'Diana', 'Peyton', 'Kamila', 'Joseph', 'Amari', 'Adrian', 'Ariella',
            'Liam', 'Mabel', 'Asher', 'Viviana', 'Jace', 'Annika', 'Theodore', 'Catalina', 'Harrison', 'Kamryn',
            'Kingston', 'Elyse', 'Easton', 'Anne', 'Mateo', 'Cynthia', 'Adrian', 'Cassandra', 'Silas', 'Rosemary',
            'Oliver', 'Julissa', 'Emmett', 'Cynthia', 'Jaxon', 'Dalia', 'Liam', 'Amina', 'Samuel', 'Sariyah',
            'Gavin', 'Helena', 'Isaiah', 'Leyla', 'Tyler', 'Tegan', 'Mason', 'Armani', 'Colton', 'Elianna',
            'Josiah', 'Alaya', 'Joseph', 'Sariya', 'Brody', 'Mara', 'Roman', 'Hana', 'Ian', 'Noemi',
            'Jason', 'Mina', 'Xavier', 'Dana', 'Jaxson', 'Zaniyah', 'Chase', 'Katalina', 'Kai', 'Nailah',
            'Cameron', 'Elia', 'Maxwell', 'Iliana', 'Axel', 'Riya', 'Dominic', 'Zahra', 'Ezekiel', 'Skye',
            'Hudson', 'Lina', 'Santiago', 'Leanna', 'Hunter', 'Lilyana', 'Louis', 'Kinsley', 'Caleb', 'Aspen',
            'Evan', 'Brynlee', 'Josiah', 'Tiana', 'Brayden', 'Hadassah', 'Carson', 'Lainey', 'Levi', 'Sylvie',
            'Kayden', 'Esmeralda', 'Bentley', 'Zuri', 'Blake', 'Lilianna', 'Ian', 'Anais', 'Peyton', 'Novalee',
            'Joseph', 'Myah', 'Adrian', 'Rayne', 'Avery', 'Emani', 'Ryker', 'Saoirse', 'Jayce', 'Aya',
            'Asher', 'Emmeline', 'Ezra', 'Amaris', 'Nicholas', 'Raylee', 'Dylan', 'Inaya', 'Zachary', 'Itzel',
            'Mason', 'Yara', 'Oliver', 'Milani', 'Lincoln'
        ];

        $randomIndex = rand(0, count($firstNames) - 1);
        return $firstNames[$randomIndex];
    }

    public function last_name()
    {

        $lastNames = [
            'Leclerc', 'Lapierre', 'Moreau', 'Lemieux', 'Morin', 'Dube', 'Larose',
            'Bergeron', 'Bouchard', 'Grenier', 'Beaulieu', 'Caron', 'Mercier',
            'Tremblay', 'Pelletier', 'Gagné', 'Renaud', 'Roy', 'Lévesque', 'Lapointe',
            'Richard', 'Léger', 'Desjardins', 'Deschamps', 'Marchand', 'Bélanger',
            'Fontaine', 'Laferrière', 'Laflamme', 'Thibault', 'Côté', 'Dion',
            'Martel', 'St-Pierre', 'Lapierre', 'Gagnon', 'Giroux', 'Boucher',
            'Hébert', 'Poirier', 'Giguère', 'Simard', 'Labonté', 'Bernier', 'Turcotte',
            'Lefebvre', 'Plante', 'Cormier', 'Bertrand', 'Dufour', 'Boisvert',
            'Lachance', 'Lemay', 'Couture', 'Trudeau', 'Daigle', 'Leclerc',
            'Lamontagne', 'Paquette', 'Beauchamp', 'Paradis', 'Fournier', 'Levesque',
            'Boudreau', 'Laplante', 'Lessard', 'Lapierre', 'Perreault', 'Leblanc',
            'Ouellet', 'Savard', 'Rivard', 'Girard', 'Tanguay', 'Caron', 'Gosselin',
            'Gauthier', 'Bolduc', 'Dubé', 'Bérubé', 'Séguin', 'Gagné', 'Picard',
            'Vachon', 'Lemelin', 'Lemay', 'Lajoie', 'Rioux', 'Thériault', 'Roy',
            'Bergeron', 'Lafontaine', 'Gosselin', 'Blanchard', 'Couturier', 'Leblanc',
            'Guillemette', 'Bélanger', 'Boivin', 'Hamel', 'Lussier', 'Desrochers',
            'Ferland', 'Lévesque', 'Leclair', 'Boucher', 'Landry', 'Sirois', 'Bouchard',
            'Doré', 'Desjardins', 'Perron', 'Bolduc', 'Couture', 'Leclerc', 'Cormier',
            'Grenier', 'Dubois', 'Lavoie', 'Michaud', 'Demers', 'Gagnon', 'Poirier',
            'Martin', 'Tardif', 'Fortin', 'Poulin', 'Létourneau', 'Dionne', 'Perrault',
            'Bissonnette', 'Bélisle', 'Allard', 'Deschamps', 'Fournier', 'St-Pierre',
            'Paré', 'Lehoux', 'Larose', 'Leclerc', 'Lafond', 'Champagne', 'Vézina',
            'Charbonneau', 'Grenier', 'Marcoux', 'Bertrand', 'Thibodeau', 'Noël',
            'Bouchard', 'Nadeau', 'Bélanger', 'Caron', 'Dufour', 'Benoit', 'Lachapelle',
            'Gagné', 'Roy', 'Boucher', 'Fortier', 'Leduc', 'Boulet', 'Morel',
            'Lalonde', 'Ouellette', 'Léger', 'Ménard', 'Daigle', 'Mongeau', 'Rivest',
            'Goulet', 'Blais', 'Morneau', 'Bellemare', 'Houle', 'Simard', 'Turgeon',
            'Robitaille', 'Lebeau', 'Cloutier', 'Bernier', 'Larouche', 'Lauzon',
            'Larocque', 'Dallaire', 'Carrière', 'Legault', 'Desroches', 'Laplante',
            'Beaudoin', 'Papineau', 'Guay', 'Rousseau', 'Pouliot', 'Perron', 'Leclerc',
            'Gauthier', 'Thibault', 'Rioux', 'Cormier', 'Pelletier', 'Breton', 'Béchard',
            'Dubois', 'Nadeau', 'Deschênes', 'Ménard', 'Lebrun', 'Dionne', 'Ferland',
            'Létourneau', 'Duguay', 'Barrette', 'Baron', 'Brousseau', 'Couturier',
            'Poirier', 'Baril', 'Cyr', 'Bourque', 'Vachon', 'Caron', 'Lapointe',
            'Côté', 'Cloutier', 'Grenier', 'Gagné', 'Pare', 'Giroux', 'Veilleux',
            'Dumont', 'Labrecque', 'Boulerice', 'Rancourt', 'Bilodeau', 'Leblond',
            'Plamondon', 'Provencher', 'Garneau', 'Laforest', 'Lemay', 'Desrochers',
            'Lapierre', 'Dumoulin', 'Bédard', 'Pothier', 'Guérin', 'Champagne', 'Lefrançois',
            'Gouin', 'Perreault', 'Gélinas', 'Lamoureux', 'Tessier', 'Lacasse', 'Legros',
            'Dallaire', 'Leblanc', 'Fortin', 'Bérubé', 'Lacroix', 'Paquin', 'Beaulieu',
            'Lamontagne', 'Pelletier', 'Fugère', 'Roy', 'Barrette', 'Bourgeois', 'Faubert',
            'Massé', 'Goulet', 'Blanchette', 'Benoit', 'Parent', 'Pomerleau', 'Poulin',
            'Mercier', 'Bélisle', 'Lacroix', 'Boucher', 'Bourassa', 'Dufresne',
            'Cardinal', 'Dumas', 'Sauvé', 'Chartrand', 'Allaire', 'Sirois', 'Dufour',
            'Leclaire', 'Trudeau', 'Marcoux', 'Charron', 'Audet', 'Bourbeau', 'Maurice',
            'Couture', 'Rondeau', 'Page', 'Laliberté', 'Charbonneau', 'Jetté', 'Ranger',
            'Charbonneau', 'Bourdon', 'Duchesne', 'Dubé', 'Plante', 'Laframboise',
            'Gosselin', 'Gouin', 'Giguère', 'Morency', 'Beaudoin', 'Baril', 'Renaud',
            'Poulin', 'Dumont', 'Grenier', 'Morin', 'Charron', 'St-Louis', 'Drapeau',
            'Bourque', 'Piché', 'Racine', 'Verret', 'Garneau', 'Beaudry', 'Cormier',
            'Bérubé', 'Robitaille', 'Coutu', 'Parent', 'Bédard', 'Fournier', 'Dugas',
            'Belzile', 'Desroches', 'Cliche', 'Bourbeau', 'Cormier', 'Rioux', 'Bernard',
            'Bisaillon', 'Tessier', 'Gagnon', 'Favreau', 'Gauthier', 'Boucher', 'Demers',
            'Champoux', 'Charest', 'Labrie', 'Vaillancourt', 'Lemay', 'Michel', 'Pelletier',
            'Gagné', 'Riopel', 'Ouellet', 'Vaillancourt', 'Nadon', 'Tardif', 'Laforest',
            'Cormier', 'Aubé', 'Plamondon', 'Goyette', 'Deschênes', 'Fortin', 'Simard',
            'Roy', 'Létourneau', 'Couture', 'Dion', 'Laplante', 'Boulanger', 'Boucher',
            'Desrochers', 'Blais', 'Ouellet', 'Larocque', 'Trépanier', 'Gingras', 'Lavoie',
            'Gagnon', 'Houle', 'Tanguay', 'Bourgeois', 'Gagné', 'Turcotte', 'Rancourt',
            'Laroche', 'Cyr', 'Hébert', 'Lefebvre', 'Pépin', 'Bourdon', 'Rondeau',
            'Gagnon', 'Roy', 'Poirier', 'Vachon', 'Lem',
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
            'Autochtone', 'Canadienne-française', 'Anglaise', 'Écossaise', 'Irlandaise', 'Allemande', 'Italienne', 'Ukrainienne', 'Chinoise', 'Punjabie',
            'Philippine', 'Portugaise', 'Grecque', 'Néerlandaise', 'Vietnamienne', 'Sri-Lankaise', 'Caribéenne', 'Africaine', 'Arabe', 'Mexicaine',
            'Japonaise', 'Coréenne', 'Inuit', 'Métisse',
        ];

        $randomIndex = rand(0, count($origins) - 1);
        return $origins[$randomIndex];
    }


    public function region()
    {
        $regions = [
            "Alberta", "Colombie-Britannique", "Île-du-Prince-Édouard", "Manitoba", "Nouveau-Brunswick", "Nouvelle-Écosse", "Ontario", "Québec", "Saskatchewan", "Terre-Neuve-et-Labrador",
            "Territoires du Nord-Ouest", "Nunavut", "Yukon"
        ];

        $regionAleatoire = $regions[array_rand($regions)];
        return $regionAleatoire;
    }

    public function city($region)
    {
        $villesParRegion = [
            "Alberta" => ["Calgary", "Edmonton", "Red Deer", "Lethbridge", "Medicine Hat", "Grande Prairie"],
            "Colombie-Britannique" => ["Vancouver", "Victoria", "Surrey", "Burnaby", "Kelowna", "Kamloops"],
            "Île-du-Prince-Édouard" => ["Charlottetown", "Summerside", "Stratford", "Cornwall", "Montague", "Kensington"],
            "Manitoba" => ["Winnipeg", "Brandon", "Steinbach", "Thompson", "Portage la Prairie", "Selkirk"],
            "Nouveau-Brunswick" => ["Saint John", "Moncton", "Fredericton", "Miramichi", "Bathurst", "Edmundston"],
            "Nouvelle-Écosse" => ["Halifax", "Dartmouth", "Sydney", "Truro", "Glace Bay", "New Glasgow"],
            "Ontario" => ["Toronto", "Ottawa", "Mississauga", "Brampton", "Hamilton", "London"],
            "Québec" => ["Montréal", "Québec", "Laval", "Gatineau", "Longueuil", "Sherbrooke"],
            "Saskatchewan" => ["Saskatoon", "Regina", "Prince Albert", "Moose Jaw", "Swift Current", "North Battleford"],
            "Terre-Neuve-et-Labrador" => ["St. John's", "Mount Pearl", "Corner Brook", "Conception Bay South", "Grand Falls-Windsor", "Paradise"],
            "Territoires du Nord-Ouest" => ["Yellowknife", "Inuvik", "Hay River", "Fort Smith", "Behchoko", "Fort Simpson"],
            "Nunavut" => ["Iqaluit", "Rankin Inlet", "Arviat", "Baker Lake", "Cambridge Bay", "Igloolik"],
            "Yukon" => ["Whitehorse", "Carmacks", "Dawson City", "Watson Lake", "Haines Junction", "Faro"],
        ];

        $villeAleatoire = $villesParRegion[$region][array_rand($villesParRegion[$region])];
        return $villeAleatoire;
    }

    public function cities()
    {
        $villes = [
            "Calgary", "Edmonton", "Vancouver", "Victoria", "Surrey", "Burnaby", "Winnipeg", "Toronto", "Ottawa", "Montreal",
            "Quebec City", "Halifax", "Moncton", "Fredericton", "Saskatoon", "Regina", "St. John's", "Yellowknife", "Iqaluit", "Whitehorse",
            "Red Deer", "Lethbridge", "Medicine Hat", "Grande Prairie", "Kelowna", "Kamloops", "Saint John", "Mississauga", "Brampton", "Hamilton",
            "London", "Gatineau", "Sherbrooke", "Prince Albert", "Moose Jaw", "Swift Current", "Corner Brook", "Truro", "Sydney", "Charlottetown",
            "Summerside", "Mount Pearl", "Conception Bay South", "Grand Falls-Windsor", "Corner Brook", "Yellowknife", "Iqaluit", "Rankin Inlet", "Whitehorse", "Carmacks",
            "Dawson City", "Watson Lake", "Haines Junction", "Fort Smith", "Behchoko", "Fort Simpson", "Arviat", "Baker Lake", "Cambridge Bay", "Igloolik",
        ];

        return $villes[array_rand($villes)];
    }


    function coordinates()
    {
        // Limites géographiques du Canada (latitude et longitude)
        $limites = [
            'nord' => 83.110626,   // Latitude Nord
            'sud' => 41.676129,    // Latitude Sud
            'ouest' => -141.002075, // Longitude Ouest
            'est' => -52.648098    // Longitude Est
        ];

        // Génération de coordonnées aléatoires dans les limites du Canada
        $latitude = $limites['sud'] + mt_rand() / mt_getrandmax() * ($limites['nord'] - $limites['sud']);
        $longitude = $limites['ouest'] + mt_rand() / mt_getrandmax() * ($limites['est'] - $limites['ouest']);

        return ['latitude' => $latitude, 'longitude' => $longitude];
    }


    public function address()
    {
        $cities = [
            'Toronto', 'Montréal', 'Vancouver', 'Calgary', 'Edmonton', 'Ottawa', 'Québec', 'Winnipeg', 'Hamilton', 'Kitchener',
            'Halifax', 'London', 'Victoria', 'Saskatoon', 'Regina', 'St. John\'s', 'Sherbrooke', 'Kelowna', 'Kingston',
            'Thunder Bay', 'Guelph', 'Sudbury', 'Abbotsford', 'Red Deer', 'Fredericton', 'Charlottetown', 'Whitehorse', 'Yellowknife', 'Iqaluit',
        ];

        // Choisissez une ville aléatoire
        $randomCity = $cities[array_rand($cities)];

        // Générez une rue aléatoire (peut être personnalisé avec de vraies rues)
        $streetsInCity = [
            'Main Street', 'Queen Street', 'King Street', 'Elm Street', 'Maple Avenue',
            'Oak Drive', 'Cedar Lane', 'Birch Road', 'Pine Crescent', 'Hickory Place',
            'Spruce Court', 'Willow Lane', 'Cypress Avenue', 'Magnolia Street', 'Sycamore Drive',
            'Cherry Avenue', 'Aspen Road', 'Juniper Lane', 'Beech Street', 'Poplar Drive',
        ];

        $randomStreet = $streetsInCity[array_rand($streetsInCity)];

        return "$randomStreet, $randomCity, Canada";
    }


    public function phone()
    {
        $prefix = '+1'; // Préfixe international pour le Canada

        // Générez les 10 chiffres suivants aléatoirement
        $phoneDigits = '';
        for ($i = 0; $i < 10; $i++) {
            $phoneDigits .= rand(0, 9);
        }

        return $prefix . $phoneDigits;
    }

    public function email()
    {
        // Générez un nom d'utilisateur aléatoire, par exemple un prénom suivi d'un numéro
        $username = $this->first_name() . rand(1, 100);

        // Le suffixe de l'adresse e-mail
        $suffix = '@1.ca'; // Utilisez le domaine .ca pour le Canada

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
            'Air Canada', 'Canadian National Railway', 'Toronto-Dominion Bank', 'Bank of Montreal', 'Royal Bank of Canada',
            'Suncor Energy', 'Brookfield Asset Management', 'Enbridge', 'Alimentation Couche-Tard', 'Shopify',
            'Bombardier', 'Manulife Financial', 'BCE Inc.', 'Cenovus Energy', 'Imperial Oil', 'Nutrien', 'Rogers Communications',
            'Canadian Natural Resources', 'Loblaw Companies', 'Telus', 'Pembina Pipeline', 'Waste Connections', 'Dollarama',
            'Barrick Gold', 'Restaurant Brands International', 'Goldcorp', 'Kinross Gold', 'First Quantum Minerals',
            'Franco-Nevada', 'Agnico Eagle Mines', 'Husky Energy', 'Gildan Activewear', 'Inter Pipeline', 'TransAlta Renewables',
            'WSP Global', 'Maple Leaf Foods', 'Lundin Mining', 'Air Transat', 'BlackBerry', 'WestJet Airlines', 'Magna International',
            'Cineplex', 'Canopy Growth', 'B2Gold', 'Kinross Gold', 'Aurora Cannabis', 'Yamana Gold', 'Great-West Lifeco', 'Emera',
            'Sun Life', 'Canadian Pacific Railway', 'Molson Coors', 'Agnico Eagle Mines', 'B2Gold', 'Aritzia', 'Lululemon Athletica',
            'Lightspeed', 'Kinaxis', 'ATS Automation Tooling Systems', 'Cameco', 'Eldorado Gold', 'TMX Group', 'CCL Industries',
            'Shaw Communications', 'Turquoise Hill Resources', 'Cargojet', 'West Fraser Timber', 'Sleep Country Canada',
            'Tilray', 'Canfor', 'CGI', 'CCL Industries', 'Wheaton Precious Metals', 'Stantec', 'Sienna Senior Living', 'Constellation Software',
            'Tucows', 'Stars Group', 'Tricon Capital Group', 'Pollard Banknote', 'Computer Modelling Group', 'NorthWest Healthcare Properties',
            'Sierra Wireless', 'Badger Daylighting', 'Enerplus', 'Trinidad Drilling', 'Detour Gold', 'Element Fleet Management', 'Celestica'
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

    public function food()
    {
        $platsCanadiens = [
            "Poutine",
            "Tourtière",
            "Butter Tarts",
            "Nanaimo Bar",
            "BeaverTails",
            "Peameal Bacon",
            "Ketchup Chips",
            "Caesar Cocktail",
            "Butter Tart",
            "Split Pea Soup",
            "Bannock",
            "Montreal-Style Bagel",
            "Bison Burger",
            "Fisherman's Brewis",
            "Jigg's Dinner",
            "Touton",
            "Blueberry Grunt",
            "Rappie Pie",
            "Flip",
            "Moose Stew",
            "Wild Blueberry Pie",
            "Acadian Meat Pie",
            "Rappie Pie",
            "Blueberry Grunt",
            "Touton",
            "Fisherman's Brewis",
            "Jigg's Dinner",
            "Moose Stew",
            "Bison Burger",
            "BeaverTails",
            "Peameal Bacon",
            "Ketchup Chips",
            "Caesar Cocktail",
            "Butter Tart",
            "Split Pea Soup",
            "Bannock",
            "Montreal-Style Bagel",
            "Blueberry Grunt",
            "Rappie Pie",
            "Flip",
            "Wild Blueberry Pie",
            "Acadian Meat Pie",
            "Touton",
            "Montreal Smoked Meat Sandwich",
            "Nanaimo Bar",
            "Pouding chômeur",
            "Pouding aux bleuets",
            "Kraft Dinner",
            "Jambon à l'érable",
            "Tarte au sucre",
            "Pouding chômeur",
            "Tarte au sucre",
            "Pouding aux bleuets",
            "Kraft Dinner",
            "Jambon à l'érable",
            "Tourtière",
            "Poutine",
            "Montreal Smoked Meat Sandwich"
        ];

        // Sélection aléatoire d'un nom de plat
        $nomPlat = $platsCanadiens[array_rand($platsCanadiens)];

        return $nomPlat;
    }
}
