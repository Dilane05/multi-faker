<?php

namespace Cupidontech\MultiFaker\Country\Europe;

use Illuminate\Support\Str;
use Faker\Generator as BaseGenerator;
use Cupidontech\MultiFaker\Contracts\FakerGeneratorInterface;

class FranceFakerGenerator extends BaseGenerator implements FakerGeneratorInterface
{
    public function first_name()
    {
        $firstNames = [
            'Achille', 'Adèle', 'Adrien', 'Agathe', 'Alain', 'Alice', 'Amélie', 'Amandine', 'Anaïs', 'André',
            'Angélique', 'Anne', 'Arnaud', 'Audrey', 'Augustin', 'Aurélie', 'Axel', 'Baptiste', 'Barbara', 'Benjamin',
            'Béatrice', 'Benoît', 'Bernadette', 'Brigitte', 'Camille', 'Caroline', 'Catherine', 'Cécile', 'Cédric',
            'Chantal', 'Charlotte', 'Christelle', 'Christian', 'Christine', 'Claire', 'Clémentine', 'Clément', 'Coralie',
            'Cyril', 'David', 'Delphine', 'Denis', 'Dominique', 'Éléonore', 'Élisabeth', 'Élodie', 'Émilie', 'Éric',
            'Estelle', 'Fabien', 'Fanny', 'Félix', 'Florence', 'Florian', 'François', 'Frédéric', 'Gabriel', 'Gaëlle',
            'Georges', 'Guillaume', 'Hélène', 'Henri', 'Inès', 'Isabelle', 'Jacqueline', 'Jean', 'Jérémie', 'Jessica',
            'Jonathan', 'Julie', 'Julien', 'Justine', 'Karine', 'Laura', 'Laurence', 'Léa', 'Léo', 'Léon',
            'Louis', 'Luc', 'Lucas', 'Lucie', 'Manon', 'Marcel', 'Margaux', 'Marie', 'Marion', 'Mathieu',
            'Mathilde', 'Maxime', 'Mélanie', 'Michel', 'Morgane', 'Muriel', 'Nathalie', 'Nicolas', 'Nina', 'Noémie',
            'Olivier', 'Pascal', 'Pauline', 'Philippe', 'Pierre', 'Rachel', 'Raphaël', 'Rémi', 'Romain', 'Sébastien',
            'Simon', 'Sophie', 'Stéphane', 'Sylvie', 'Théo', 'Thierry', 'Thomas', 'Thibault', 'Valentin', 'Valérie',
            'Vincent', 'Xavier', 'Yann', 'Yannick', 'Zoé', 'Antoine', 'Laure', 'Serge', 'Céline', 'Edith',
        ];

        return $firstNames[array_rand($firstNames)];
    }

    public function last_name()
    {
        $lastNames = [
            'Martin', 'Bernard', 'Dubois', 'Thomas', 'Robert', 'Richard', 'Petit', 'Durand', 'Leroy', 'Moreau',
            'Simon', 'Laurent', 'Lefebvre', 'Michel', 'Garcia', 'David', 'Bertrand', 'Roux', 'Vincent', 'Fournier',
            'Morel', 'Girard', 'André', 'Lefèvre', 'Mercier', 'Dupont', 'Lambert', 'Bonnet', 'François', 'Martinez',
            'Legrand', 'Garnier', 'Faure', 'Rousseau', 'Blanc', 'Guérin', 'Muller', 'Henry', 'Roussel', 'Nicolas',
            'Perrin', 'Morin', 'Mathieu', 'Clément', 'Gauthier', 'Dumont', 'Lopez', 'Fontaine', 'Chevalier', 'Robin',
            'Masson', 'Sanchez', 'Gérard', 'Nguyen', 'Boyer', 'Denis', 'Duval', 'Joly', 'Gautier', 'Royer',
            'Colin', 'Arnaud', 'Vidal', 'Caron', 'Picard', 'Roger', 'Fabre', 'Aubert', 'Renaud', 'Dumas',
            'Brun', 'Dufour', 'Leroux', 'Collet', 'Prévost', 'Poirier', 'Marchand', 'Lemoine', 'Renard', 'Leclerc',
            'Pelletier', 'Lecomte', 'Barbier', 'Brunet', 'Guillaume', 'Adam', 'Rey', 'Moulin', 'Gonzalez', 'Berger',
            'Lucas', 'Benoit', 'Lemaire', 'Meyer', 'Luc', 'Dufour', 'Olivier', 'Philippe', 'Pierre', 'Louis',
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
            'Bretonne', 'Normande', 'Alsacienne', 'Basque', 'Corse', 'Provençale', 'Savoyarde',
            'Béarnaise', 'Catalane', 'Occitane', 'Picarde', 'Champenoise', 'Lorraine', 'Bourguignonne',
            'Auvergnate', 'Lyonnaise', 'Poitevine', 'Tourangelle', 'Angevine', 'Nantaise',
        ];

        return $origins[array_rand($origins)];
    }

    public function region()
    {
        $regions = [
            'Auvergne-Rhône-Alpes', 'Bourgogne-Franche-Comté', 'Bretagne', 'Centre-Val de Loire',
            'Corse', 'Grand Est', 'Hauts-de-France', 'Île-de-France', 'Normandie', 'Nouvelle-Aquitaine',
            'Occitanie', 'Pays de la Loire', "Provence-Alpes-Côte d'Azur", 'Guadeloupe',
            'Martinique', 'Guyane', 'La Réunion', 'Mayotte',
        ];

        return $regions[array_rand($regions)];
    }

    public function city($region)
    {
        $villesParRegion = [
            'Auvergne-Rhône-Alpes'          => ['Lyon', 'Grenoble', 'Saint-Étienne', 'Clermont-Ferrand', 'Chambéry', 'Annecy'],
            'Bourgogne-Franche-Comté'        => ['Dijon', 'Besançon', 'Chalon-sur-Saône', 'Mâcon', 'Nevers', 'Belfort'],
            'Bretagne'                       => ['Rennes', 'Brest', 'Quimper', 'Lorient', 'Vannes', 'Saint-Malo'],
            'Centre-Val de Loire'            => ['Tours', 'Orléans', 'Blois', 'Chartres', 'Bourges', 'Châteauroux'],
            'Corse'                          => ['Ajaccio', 'Bastia', 'Corte', 'Porto-Vecchio', 'Calvi', 'Bonifacio'],
            'Grand Est'                      => ['Strasbourg', 'Metz', 'Nancy', 'Reims', 'Mulhouse', 'Colmar'],
            'Hauts-de-France'                => ['Lille', 'Amiens', 'Roubaix', 'Tourcoing', 'Calais', 'Dunkerque'],
            'Île-de-France'                  => ['Paris', 'Versailles', 'Créteil', 'Nanterre', 'Argenteuil', 'Montreuil'],
            'Normandie'                      => ['Rouen', 'Caen', 'Le Havre', 'Cherbourg-en-Cotentin', 'Évreux', 'Dieppe'],
            'Nouvelle-Aquitaine'             => ['Bordeaux', 'Limoges', 'Pau', 'La Rochelle', 'Agen', 'Angoulême'],
            'Occitanie'                      => ['Toulouse', 'Montpellier', 'Nîmes', 'Perpignan', 'Carcassonne', 'Albi'],
            'Pays de la Loire'               => ['Nantes', 'Angers', 'Le Mans', 'Saint-Nazaire', 'Laval', 'La Roche-sur-Yon'],
            "Provence-Alpes-Côte d'Azur"     => ['Marseille', 'Nice', 'Toulon', 'Aix-en-Provence', 'Avignon', 'Cannes'],
            'Guadeloupe'                     => ['Pointe-à-Pitre', 'Basse-Terre', 'Les Abymes', 'Le Gosier'],
            'Martinique'                     => ['Fort-de-France', 'Le Lamentin', 'Le Robert', 'Schoelcher'],
            'Guyane'                         => ['Cayenne', 'Matoury', 'Saint-Laurent-du-Maroni', 'Kourou'],
            'La Réunion'                     => ['Saint-Denis', 'Saint-Paul', 'Saint-Pierre', 'Le Tampon'],
            'Mayotte'                        => ['Mamoudzou', 'Koungou', 'Dzaoudzi', 'Dembeni'],
        ];

        return $villesParRegion[$region][array_rand($villesParRegion[$region])];
    }

    public function cities()
    {
        $villes = [
            'Paris', 'Marseille', 'Lyon', 'Toulouse', 'Nice', 'Nantes', 'Strasbourg', 'Montpellier', 'Bordeaux', 'Lille',
            'Rennes', 'Reims', 'Le Havre', 'Saint-Étienne', 'Toulon', 'Angers', 'Grenoble', 'Dijon', 'Nîmes',
            'Aix-en-Provence', 'Brest', 'Le Mans', 'Amiens', 'Tours', 'Limoges', 'Clermont-Ferrand', 'Besançon',
            'Orléans', 'Metz', 'Rouen', 'Mulhouse', 'Perpignan', 'Caen', 'Nancy', 'Cannes', 'Avignon',
        ];

        return $villes[array_rand($villes)];
    }

    public function coordinates()
    {
        $limites = [
            'nord'  => 51.1242,
            'sud'   => 41.3125,
            'ouest' => -5.1422,
            'est'   => 9.5618,
        ];

        $latitude  = $limites['sud']   + mt_rand() / mt_getrandmax() * ($limites['nord'] - $limites['sud']);
        $longitude = $limites['ouest'] + mt_rand() / mt_getrandmax() * ($limites['est']  - $limites['ouest']);

        return ['latitude' => $latitude, 'longitude' => $longitude];
    }

    public function address()
    {
        $cities = [
            'Paris', 'Marseille', 'Lyon', 'Toulouse', 'Nice', 'Nantes', 'Strasbourg', 'Montpellier', 'Bordeaux', 'Lille',
            'Rennes', 'Reims', 'Le Havre', 'Cannes', 'Grenoble', 'Brest', 'Limoges', 'Angers', 'Toulon', 'Amiens',
        ];

        $streets = [
            'Rue de la Paix', 'Avenue des Champs-Élysées', 'Boulevard Haussmann', 'Rue du Faubourg Saint-Honoré',
            'Rue de Rivoli', 'Boulevard Saint-Germain', 'Avenue Montaigne', 'Rue de la République',
            'Rue du Bac', 'Rue Saint-Antoine', 'Boulevard de la Villette', 'Avenue de Clichy', 'Avenue Foch',
        ];

        return $streets[array_rand($streets)] . ', ' . $cities[array_rand($cities)];
    }

    public function phone()
    {
        $prefixes = [
            '06 1', '06 2', '06 8',   // Orange
            '06 3', '06 7',            // SFR
            '06 6', '06 9',            // Bouygues
            '06 5', '07 5',            // Free Mobile
            '07 6', '07 8',            // autres
        ];
        $prefix = $prefixes[array_rand($prefixes)];
        return sprintf('+33 %s %02d %02d %02d %02d', $prefix, rand(10, 99), rand(10, 99), rand(10, 99), rand(10, 99));
    }

    public function email()
    {
        return strtolower($this->last_name() . rand(1, 100) . '@example.fr');
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
            'LVMH', 'TotalEnergies', 'BNP Paribas', 'AXA', 'Société Générale',
            'Crédit Agricole', 'Carrefour', 'EDF', 'Engie', 'Sanofi',
            'L\'Oréal', 'Michelin', 'Airbus', 'Renault', 'Stellantis',
            'Dassault Aviation', 'Thales', 'Safran', 'Schneider Electric',
            'Capgemini', 'Orange SA', 'Vivendi', 'Canal+', 'CMA CGM',
            'Air France-KLM', 'Danone', 'Kering', 'Hermès', 'Publicis Groupe',
            'Vinci', 'Bouygues', 'Eiffage', 'Veolia', 'Air Liquide',
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
        $names        = ['Smartphone', 'Laptop', 'Tablet', 'TV', 'Headphones', 'Camera', 'Game Console', 'Bluetooth Speaker', 'Smartwatch'];
        $descriptions = ['Un excellent choix pour rester connecté.', 'Performance exceptionnelle dans un design élégant.', 'Qualité sonore remarquable.', 'Capturez des moments inoubliables.'];
        $categories   = ['Électronique', 'Informatique', 'Audio', 'Photo', 'Gaming', 'Accessoires'];

        return [
            'name'         => $names[array_rand($names)],
            'description'  => $descriptions[array_rand($descriptions)],
            'price'        => mt_rand(50, 1000000),
            'category'     => $categories[array_rand($categories)],
            'availability' => mt_rand(0, 1) ? 'En stock' : 'Rupture de stock',
        ];
    }

    public function food()
    {
        $plats = [
            'Bouillabaisse', 'Coq au Vin', 'Ratatouille', 'Croissant', 'Escargot', 'Quiche Lorraine',
            'Crème Brûlée', 'Bœuf Bourguignon', 'Cassoulet', 'Blanquette de Veau', 'Tarte Tatin',
            'Chateaubriand', 'Confit de Canard', 'Pot-au-Feu', 'Salade Niçoise', 'Moules Marinière',
            "Duck à l'Orange", 'Tarte Flambée', 'Pissaladière', "Boulette d'Avesnes", 'Champvallon',
            "Poulet Vallée d'Auge", 'Potée Lorraine', 'Aligot', 'Andouillette', 'Hachis Parmentier',
            'Rognons de Veau', 'Crêpe Suzette', 'Tarte aux Fraises', 'Boudin Noir', 'Boudin Blanc',
            'Quenelle', 'Truffade', 'Galette Complète', 'Potage Parmentier', "Navarin d'Agneau",
        ];

        return $plats[array_rand($plats)];
    }

    public function university()
    {
        $universities = [
            'Université Paris-Sorbonne (Paris IV)', 'Université Paris Cité',
            'Sciences Po Paris', 'HEC Paris', 'École Polytechnique',
            'ENS Paris', 'ESSEC Business School', 'INSEAD', 'Centrale Paris',
            'Mines Paris', 'Télécom Paris', 'ESCP Business School',
            'Université de Lyon I', 'Université de Bordeaux',
            'Université Paul Sabatier (Toulouse III)', 'Université Aix-Marseille',
            'Université de Strasbourg', 'Université de Lille',
        ];
        return $universities[array_rand($universities)];
    }

    public function district()
    {
        $districts = [
            'Le Marais', 'Saint-Germain-des-Prés', 'Montmartre', 'Bastille',
            'Belleville', 'République', 'Oberkampf', 'Canal Saint-Martin',
            'La Défense', 'Neuilly-sur-Seine', 'Boulogne-Billancourt',
            'Levallois-Perret', 'Issy-les-Moulineaux', 'Vincennes',
            'Montreuil', 'Pantin', 'Saint-Denis', 'Aubervilliers',
            'Part-Dieu', 'Confluence', 'Vieux-Port', 'Préfecture',
        ];
        return $districts[array_rand($districts)];
    }

    public function licensePlate()
    {
        $letters = 'ABCDEFGHJKLMNPRSTUVWXYZ';
        $l1 = $letters[rand(0, strlen($letters) - 1)];
        $l2 = $letters[rand(0, strlen($letters) - 1)];
        $l3 = $letters[rand(0, strlen($letters) - 1)];
        $l4 = $letters[rand(0, strlen($letters) - 1)];
        return $l1 . $l2 . '-' . rand(100, 999) . '-' . $l3 . $l4;
    }

    public function nationalId()
    {
        $sex  = rand(1, 2);
        $year = str_pad(rand(50, 99), 2, '0', STR_PAD_LEFT);
        $month = str_pad(rand(1, 12), 2, '0', STR_PAD_LEFT);
        $dept = str_pad(rand(1, 95), 2, '0', STR_PAD_LEFT);
        $order = str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);
        $key  = str_pad(rand(1, 97), 2, '0', STR_PAD_LEFT);
        return $sex . ' ' . $year . ' ' . $month . ' ' . $dept . ' ' . $order . ' ' . $key;
    }
}
