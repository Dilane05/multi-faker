<?php

namespace Cupidontech\MultiFaker\Country\Europe;

use Faker\Generator as BaseGenerator;

class GermanyFakerGenerator extends BaseGenerator
{
    // Implémentez les méthodes de génération spécifiques à la France ici
    public function first_name()
    {
        // $firstNames = ['Jean', 'Marie', 'Pierre', 'Elise', 'Françoise'];
        $firstNames = [
            'Felix', 'Hanna', 'Isabella', 'Marie', 'Lucas',
            'Emma', 'Luisa', 'Luca', 'Leon', 'Sophia',
            'Samuel', 'Clara', 'David', 'Antonia', 'Laura',
            'Tim', 'Sophie', 'Elias', 'Mia', 'Paul',
            'Sarah', 'Maximilian', 'Katharina', 'Lena', 'Jonas',
            'Johanna', 'Matteo', 'Selina', 'Nicolas', 'Amelie',
            'Louis', 'Emily', 'Michael', 'Valerie', 'Elias', 'Miriam',
            'Niklas', 'Lina', 'Niklas', 'Hannah',
            'Felix', 'Sophia', 'Emma', 'Finn', 'Paulina', 'Tom',
            'Johanna', 'Tim', 'Charlotte', 'Leon',
            'Laura', 'Lena', 'Alexander', 'Jana', 'Luca', 'Lotta',
            'Emil', 'Zoe', 'Laura', 'Jonas',
            'Victoria', 'Luca', 'Johanna', 'Mia', 'Leo', 'Antonia',
            'Lukas', 'Marie', 'Moritz', 'Emily',
            'Philipp', 'Emilia', 'Noah', 'Vanessa', 'Alexander',
            'Pia', 'Niklas', 'Marie', 'Elias', 'Emma',
            'Paul', 'Sophie', 'Simon', 'Emilia', 'Julius', 'Maria',
            'Maximilian', 'Luisa', 'Ben', 'Clara',
            'Tim', 'Leonie', 'Niklas', 'Katharina', 'Luis', 'Laura',
            'David', 'Johanna', 'Mia', 'Finn',
            'Hannah', 'Nico', 'Clara', 'Simon', 'Leonie', 'Finn',
            'Sophia', 'Leo', 'Emily', 'Tom',
            'Anna', 'Jan', 'Paulina', 'Felix', 'Charlotte', 'Tim',
            'Antonia', 'Emil', 'Hanna', 'Samuel',
            'Mira', 'Jonas', 'Jana', 'Lena', 'Emil', 'Emily', 'Samuel',
            'Marie', 'Lukas', 'Katharina',
            'Paul', 'Jule', 'Maria', 'Julian', 'Selina', 'Luca', 'Lea',
            'Matteo', 'Lina', 'David',
            'Emilia', 'Vincent', 'Melina', 'Elias', 'Lotta', 'Timo',
            'Luisa', 'Tim', 'Sofia', 'Maximilian',
            'Pia', 'Leon', 'Maria', 'Alexander', 'Emily', 'Niklas',
            'Marie', 'Leo', 'Hannah', 'Jonas',
            'Elena', 'Luis', 'Lina', 'Noah', 'Anna', 'Niklas',
            'Sophie', 'Moritz', 'Laura', 'Felix',
            'Lea', 'Samuel', 'Zoe', 'Elias', 'Sophie', 'Luca',
            'Emilia', 'Philipp', 'Johanna', 'Leo',
            'Mia', 'Tom', 'Marie', 'Vincent', 'Selina', 'Maximilian',
            'Melina', 'David', 'Lotta', 'Elias',
            'Katharina', 'Tim', 'Hannah', 'Clara', 'Jan', 'Paulina',
            'Felix', 'Charlotte', 'Leonie', 'Antonia'
        ];

        $randomIndex = rand(0, count($firstNames) - 1);
        return $firstNames[$randomIndex];
    }

    public function last_name()
    {

        $lastNames = [
            'Schmidt', 'Müller', 'Schneider', 'Fischer', 'Weber',
            'Meyer', 'Wagner', 'Becker', 'Schulz', 'Hoffmann',
            'Schäfer', 'Koch', 'Bauer', 'Richter', 'Klein', 'Wolf',
            'Schröder', 'Neumann', 'Schwarz', 'Zimmermann',
            'Braun', 'Krüger', 'Hofmann', 'Hartmann', 'Lange',
            'Schmitt', 'Werner', 'Schmitz', 'Krause', 'Meier',
            'Lehmann', 'Schmid', 'Schulze', 'Maier', 'Köhler',
            'Herrmann', 'Walter', 'Mayer', 'Huber', 'Kaiser',
            'Fuchs', 'Peters', 'Lang', 'Scholz', 'Möller', 'Weiß',
            'Jung', 'Hahn', 'Schubert', 'Vogel',
            'Friedrich', 'Keller', 'Günther', 'Frank', 'Berger',
            'Winkler', 'Roth', 'Beck', 'Lorenz', 'Baumann',
            'Franke', 'Albrecht', 'Schuster', 'Simon', 'Ludwig',
            'Böhm', 'Winter', 'Kraus', 'Martin', 'Schumacher',
            'Krämer', 'Vogt', 'Stein', 'Jäger', 'Otto', 'Sommer',
            'Graf', 'Heinrich', 'Seidel', 'Riedl',
            'Hein', 'Pohl', 'Maurer', 'Schreiber', 'Schulte',
            'Kühn', 'Fink', 'Bergmann', 'Thomas', 'Voigt',
            'Sauer', 'Arnold', 'Brandt', 'Horn', 'Kaufmann',
            'Kern', 'Wolff', 'Lindner', 'Ernst', 'Lutz',
            'Baum', 'Haas', 'Brenner', 'Hammer', 'Picard',
            'Schneider', 'Leroy', 'Dupont', 'Moreau', 'Simon',
            'Becker', 'Klein', 'Wagner', 'Hoffmann', 'Schulz',
            'Müller', 'Schmidt', 'Koch', 'Meier', 'Fischer',
            'Schäfer', 'Weber', 'Schneider', 'Werner', 'Lange',
            'Zimmermann', 'Schröder', 'Meyer', 'Huber', 'Schwarz',
            'Walter', 'Krause', 'Fuchs', 'Braun', 'Köhler', 'Hartmann',
            'Lehmann', 'Kraus', 'Schubert', 'Herrmann',
            'Kaiser', 'Frank', 'Schmid', 'Peters', 'Scholz', 'Bauer',
            'Günther', 'Simon', 'Friedrich', 'Schuster',
            'Baumann', 'Lang', 'Mayer', 'Franke', 'Keller',
            'Otto', 'Böhm', 'Roth', 'Berger', 'Beck',
            'Winkler', 'Stein', 'Jung', 'Sommer', 'Riedl',
            'Krämer', 'Martin', 'Ludwig', 'Kühn', 'Vogt',
            'Lorenz', 'Hein', 'Seidel', 'Vogel', 'Graf',
            'Kern', 'Hammer', 'Thomas', 'Sauer', 'Ernst',
            'Brandt', 'Schreiber', 'Baum', 'Arnold', 'Maurer',
            'Kaufmann', 'Schulte', 'Bergmann', 'Haas', 'Lutz',
            'Lindner', 'Pohl', 'König', 'Wolff', 'Becker',
            'Klein', 'Wagner', 'Hoffmann', 'Schulz', 'Müller',
            'Schmidt', 'Koch', 'Meier', 'Fischer', 'Schäfer',
            'Weber', 'Schneider', 'Werner', 'Lange', 'Zimmermann'
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
            'Saxon', 'Bavarian', 'Hessian', 'Franconian', 'Thuringian', 'Westphalian', 'Swabian', 'Mecklenburgian', 'Pomeranian', 'Brandenburgian',
            'Rhineland', 'Palatinate', 'Saarland', 'Hamburgian', 'Schleswig-Holstein', 'North Frisian', 'East Frisian', 'Lower Saxon', 'Upper Saxon', 'Rhenish',
            'Frankish', 'Bergisch', 'Low German', 'High German', 'Swiss German', 'Alsatian', 'Luxembourgish', 'Austrian', 'Tyrolean', 'Bavarian'
        ];

        $randomIndex = rand(0, count($origins) - 1);
        return $origins[$randomIndex];
    }

    function region()
    {
        $regions = [
            'Baden-Württemberg', 'Bavaria', 'Berlin', 'Brandenburg', 'Bremen', 'Hamburg', 'Hesse', 'Lower Saxony', 'Mecklenburg-Vorpommern', 'North Rhine-Westphalia',
            'Rhineland-Palatinate', 'Saarland', 'Saxony', 'Saxony-Anhalt', 'Schleswig-Holstein', 'Thuringia', 'Schleswig-Holstein', 'Thuringia', 'North Rhine-Westphalia', 'Hesse',
            'Lower Saxony', 'Saxony', 'Bremen', 'Mecklenburg-Vorpommern', 'Brandenburg', 'Rhineland-Palatinate', 'Saarland', 'Saxony-Anhalt', 'Berlin', 'Hamburg',
        ];

        $regionAleatoire = $regions[array_rand($regions)];
        return $regionAleatoire;
    }

    public function city($region)
    {
        $villesParRegion = [
            "Baden-Württemberg" => ["Stuttgart", "Karlsruhe", "Freiburg"],
            "Bavaria" => ["Munich", "Nuremberg", "Augsburg"],
            "Berlin" => ["Berlin"],
            "Brandenburg" => ["Potsdam", "Cottbus", "Brandenburg an der Havel"],
            "Bremen" => ["Bremen", "Bremerhaven"],
            "Hamburg" => ["Hamburg"],
            "Hesse" => ["Frankfurt", "Wiesbaden", "Kassel"],
            "Lower Saxony" => ["Hannover", "Braunschweig", "Osnabrück"],
            "Mecklenburg-Vorpommern" => ["Schwerin", "Rostock", "Greifswald"],
            "North Rhine-Westphalia" => ["Cologne", "Düsseldorf", "Dortmund"],
            "Rhineland-Palatinate" => ["Mainz", "Ludwigshafen", "Trier"],
            "Saarland" => ["Saarbrücken"],
            "Saxony" => ["Dresden", "Leipzig", "Chemnitz"],
            "Saxony-Anhalt" => ["Magdeburg", "Halle", "Dessau"],
            "Schleswig-Holstein" => ["Kiel", "Lübeck", "Flensburg"],
            "Thuringia" => ["Erfurt", "Weimar", "Jena"],
        ];

        $villeAleatoire = $villesParRegion[$region][array_rand($villesParRegion[$region])];
        return $villeAleatoire;
    }

    public function cities()
    {
        $villes = [
            "Berlin", "Hamburg", "Munich", "Cologne", "Frankfurt",
            "Stuttgart", "Düsseldorf", "Dortmund", "Essen", "Leipzig",
            "Bremen", "Hanover", "Dresden", "Nuremberg", "Duisburg",
            "Bochum", "Wuppertal", "Bielefeld", "Bonn", "Münster",
            "Karlsruhe", "Mannheim", "Augsburg", "Wiesbaden", "Gelsenkirchen",
            "Mönchengladbach", "Braunschweig", "Kiel", "Chemnitz", "Aachen",
            "Halle (Saale)", "Magdeburg", "Freiburg", "Krefeld",
            "Lübeck", "Mainz", "Erfurt", "Oberhausen", "Rostock", "Kassel",
            "Hagen", "Hamm", "Saarbrücken", "Mülheim an der Ruhr",
            "Potsdam", "Ludwigshafen", "Oldenburg", "Leverkusen", "Osnabrück", "Solingen",
            "Heidelberg", "Herne", "Neuss", "Darmstadt", "Paderborn",
            "Regensburg", "Ingolstadt", "Würzburg", "Fürth", "Wolfsburg",
            "Ulm", "Offenbach", "Heilbronn", "Pforzheim", "Göttingen",
            "Bottrop", "Trier", "Recklinghausen", "Reutlingen", "Bremerhaven",
            "Koblenz", "Bergisch Gladbach", "Jena", "Remscheid",
            "Erlangen", "Moers", "Siegen", "Hildesheim", "Salzgitter", "Cottbus",
            "Gera", "Kaiserslautern", "Schwerin", "Hamm", "Herne",
            "Neuss", "Darmstadt", "Paderborn", "Regensburg", "Ingolstadt", "Würzburg",
            "Fürth", "Wolfsburg", "Ulm", "Offenbach", "Heilbronn",
            "Pforzheim", "Göttingen", "Bottrop", "Trier", "Recklinghausen", "Reutlingen",
            "Bremerhaven", "Koblenz", "Bergisch Gladbach", "Jena",
            "Remscheid", "Erlangen", "Moers", "Siegen", "Hildesheim", "Salzgitter", "Cottbus",
            "Gera", "Kaiserslautern", "Schwerin", "Hamm", "Herne",
            "Neuss", "Darmstadt", "Paderborn", "Regensburg", "Ingolstadt", "Würzburg",
            "Fürth", "Wolfsburg", "Ulm", "Offenbach", "Heilbronn",
            "Pforzheim", "Göttingen", "Bottrop", "Trier", "Recklinghausen", "Reutlingen",
            "Bremerhaven", "Koblenz", "Bergisch Gladbach", "Jena",
            "Remscheid", "Erlangen", "Moers", "Siegen", "Hildesheim", "Salzgitter", "Cottbus",
            "Gera", "Kaiserslautern", "Schwerin",
        ];
        return $villes[array_rand($villes)];
    }

    public function coordinates()
    {
        // Limites géographiques du Cameroun (latitude et longitude)
        $limites = [
            'north' => 55.058334,
            'south' => 47.270111,
            'west' => 5.866240,
            'east' => 15.041896,     // Longitude Est
        ];

        // Génération de coordonnées aléatoires dans les limites du Cameroun
        $latitude = $limites['sud'] + mt_rand() / mt_getrandmax() * ($limites['nord'] - $limites['sud']);
        $longitude = $limites['ouest'] + mt_rand() / mt_getrandmax() * ($limites['est'] - $limites['ouest']);

        return ['latitude' => $latitude, 'longitude' => $longitude];
    }

    public function address()
    {

        $streets = [
            'Berlin, Berlin' => [
                'Brandenburger Tor',
                'Unter den Linden',
                'Friedrichstraße',
                'Alexanderplatz',
                'Potsdamer Platz',
                'Kurfürstendamm',
                'Schlossstraße',
                'Mauerstraße',
                'Fasanenstraße',
            ],
            'Munich, Bavaria' => [
                'Marienplatz',
                'Kaufingerstraße',
                'Odeonsplatz',
                'Maximilianstraße',
                'Sendlinger Tor',
                'Leopoldstraße',
                'Tal',
                'Schellingstraße',
                'Schwanthalerstraße',
            ],
            'Hamburg, Hamburg' => [
                'Reeperbahn',
                'Jungfernstieg',
                'Mönckebergstraße',
                'Spitalerstraße',
                'Große Freiheit',
                'Fischmarkt',
                'Dammtorstraße',
                'Steindamm',
                'Gänsemarkt',
            ],
            'Cologne, North Rhine-Westphalia' => [
                'Cologne Cathedral',
                'Hohe Straße',
                'Schildergasse',
                'Ehrenstraße',
                'Severinstraße',
                'Hohenzollernring',
                'Neumarkt',
                'Rathenauplatz',
                'Venloer Straße',
            ],
        ];
        $randomCity = array_rand($streets);

        // Choisissez une rue aléatoire dans la ville
        $randomStreet = $streets[$randomCity][array_rand($streets[$randomCity])];

        return "$randomStreet, $randomCity";
    }

    public function phone()
    {
        $prefix = '+49'; // Germany country code

        // Generate the first digit randomly from 1 to 9
        $firstDigit = rand(1, 9);

        // Generate the following 10 digits randomly
        $secondPart = '';
        for ($i = 0; $i < 10; $i++) {
            $secondPart .= rand(0, 9);
        }

        return $prefix . $firstDigit  . $secondPart;
    }


    public function email()
    {
        // Générez un nom d'utilisateur aléatoire, par exemple un prénom suivi d'un numéro
        $username = $this->last_name() . rand(1, 100);

        // Le suffixe de l'adresse e-mail
        $suffix = '@49.com';

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
        $prefixes = ['Firma', 'Unternehmen', 'Gruppe', 'Gesellschaft', 'AG', 'GmbH', 'KG', 'OHG'];
        $suffixes = ['& Co.', 'e.K.', 'mbH', 'AG', 'UG', 'KGaA', 'eG'];

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
    public function name()
    {

        $firstName = $this->first_name;
        $lastName = $this->last_name;

        // Concaténez le prénom, le nom de famille et le numéro aléatoire pour former le nom d'utilisateur
        $name = strtolower($firstName . $lastName);

        return $name;
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
    

    function food() {
        $platsGermany = [
            "Sauerbraten",
            "Bratwurst",
            "Wiener Schnitzel",
            "Kartoffelsalat",
            "Rouladen",
            "Goulash",
            "Rösti",
            "Sauerkraut",
            "Brezen (Pretzels)",
            "Kartoffelsuppe",
            "Maultaschen",
            "Spätzle",
            "Schweinshaxe",
            "Grünkohl",
            "Königsberger Klopse",
            "Hühnerfrikassee",
            "Eisbein",
            "Fischbrötchen",
            "Apfelstrudel",
            "Black Forest Cake"
        ];
    
        // Sélection aléatoire d'un nom de plat
        $nomPlat = $platsGermany[array_rand($platsGermany)];
    
        return $nomPlat;
    }

}
