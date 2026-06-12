<?php

namespace Cupidontech\MultiFaker\Country\Europe;

use Illuminate\Support\Str;
use Faker\Generator as BaseGenerator;
use Cupidontech\MultiFaker\Contracts\FakerGeneratorInterface;

class GermanyFakerGenerator extends BaseGenerator implements FakerGeneratorInterface
{
    // Implémentez les méthodes de génération spécifiques à l'Allemagne ici
    public function first_name()
    {
        $firstNames = [
            'Felix', 'Hanna', 'Isabella', 'Marie', 'Lucas', 'Emma', 'Luisa', 'Luca', 'Leon', 'Sophia',
            'Samuel', 'Clara', 'David', 'Antonia', 'Laura', 'Tim', 'Sophie', 'Elias', 'Mia', 'Paul',
            'Sarah', 'Maximilian', 'Katharina', 'Lena', 'Jonas', 'Johanna', 'Matteo', 'Selina', 'Nicolas', 'Amelie',
            'Louis', 'Emily', 'Michael', 'Valerie', 'Miriam', 'Niklas', 'Lina', 'Hannah', 'Finn', 'Paulina',
            'Tom', 'Charlotte', 'Alexander', 'Jana', 'Lotta', 'Emil', 'Zoe', 'Victoria', 'Leo', 'Lukas',
            'Moritz', 'Philipp', 'Emilia', 'Noah', 'Vanessa', 'Pia', 'Ben', 'Leonie', 'Luis', 'Nico',
            'Simon', 'Julius', 'Maria', 'Jule', 'Julian', 'Lea', 'Vincent', 'Melina', 'Timo', 'Sofia',
            'Elena', 'Anna', 'Jan', 'Mira',
        ];

        return $firstNames[array_rand($firstNames)];
    }

    public function last_name()
    {

        $lastNames = [
            'Schmidt', 'Müller', 'Schneider', 'Fischer', 'Weber', 'Meyer', 'Wagner', 'Becker', 'Schulz', 'Hoffmann',
            'Schäfer', 'Koch', 'Bauer', 'Richter', 'Klein', 'Wolf', 'Schröder', 'Neumann', 'Schwarz', 'Zimmermann',
            'Braun', 'Krüger', 'Hofmann', 'Hartmann', 'Lange', 'Schmitt', 'Werner', 'Schmitz', 'Krause', 'Meier',
            'Lehmann', 'Schmid', 'Schulze', 'Maier', 'Köhler', 'Herrmann', 'Walter', 'Mayer', 'Huber', 'Kaiser',
            'Fuchs', 'Peters', 'Lang', 'Scholz', 'Möller', 'Weiß', 'Jung', 'Hahn', 'Schubert', 'Vogel',
            'Friedrich', 'Keller', 'Günther', 'Frank', 'Berger', 'Winkler', 'Roth', 'Beck', 'Lorenz', 'Baumann',
            'Franke', 'Albrecht', 'Schuster', 'Simon', 'Ludwig', 'Böhm', 'Winter', 'Kraus', 'Martin', 'Schumacher',
            'Krämer', 'Vogt', 'Stein', 'Jäger', 'Otto', 'Sommer', 'Graf', 'Heinrich', 'Seidel', 'Riedl',
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
            'Baden-Württemberg', 'Bavaria', 'Berlin', 'Brandenburg', 'Bremen', 'Hamburg', 'Hesse', 'Lower Saxony',
            'Mecklenburg-Vorpommern', 'North Rhine-Westphalia', 'Rhineland-Palatinate', 'Saarland', 'Saxony',
            'Saxony-Anhalt', 'Schleswig-Holstein', 'Thuringia',
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
'Aachen', 'Augsburg', 'Bergisch Gladbach', 'Berlin', 'Bielefeld', 'Bochum', 'Bonn', 'Bottrop', 'Braunschweig', 'Bremen',
            'Bremerhaven', 'Chemnitz', 'Cologne', 'Cottbus', 'Darmstadt', 'Dortmund', 'Dresden', 'Duisburg', 'Düsseldorf', 'Erfurt',
            'Erlangen', 'Essen', 'Frankfurt', 'Freiburg', 'Fürth', 'Gelsenkirchen', 'Gera', 'Göttingen', 'Hagen', 'Halle (Saale)',
            'Hamburg', 'Hamm', 'Hanover', 'Heidelberg', 'Heilbronn', 'Herne', 'Hildesheim', 'Ingolstadt', 'Jena', 'Kaiserslautern',
            'Karlsruhe', 'Kassel', 'Kiel', 'Koblenz', 'Krefeld', 'Leipzig', 'Leverkusen', 'Ludwigshafen', 'Lübeck', 'Magdeburg',
            'Mainz', 'Mannheim', 'Moers', 'Munich', 'Mönchengladbach', 'Mülheim an der Ruhr', 'Münster', 'Neuss', 'Nuremberg', 'Oberhausen',
            'Offenbach', 'Oldenburg', 'Osnabrück', 'Paderborn', 'Pforzheim', 'Potsdam', 'Recklinghausen', 'Regensburg', 'Remscheid', 'Reutlingen',
            'Rostock', 'Saarbrücken', 'Salzgitter', 'Schwerin', 'Siegen', 'Solingen', 'Stuttgart', 'Trier', 'Ulm', 'Wiesbaden',
            'Wolfsburg', 'Wuppertal', 'Würzburg',
        ];
        return $villes[array_rand($villes)];
    }

    public function coordinates()
    {
        // Limites géographiques de l'Allemagne (latitude et longitude)
        $limites = [
            'north' => 55.058334,
            'south' => 47.270111,
            'west' => 5.866240,
            'east' => 15.041896,
        ];

        // Génération de coordonnées aléatoires dans les limites de l'Allemagne
        $latitude = $limites['south'] + mt_rand() / mt_getrandmax() * ($limites['north'] - $limites['south']);
        $longitude = $limites['west'] + mt_rand() / mt_getrandmax() * ($limites['east'] - $limites['west']);

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
        $prefixes = [
            '0151', '0160', '0170', '0171', '0175',  // Telekom
            '0152', '0162', '0172', '0173', '0174',  // Vodafone
            '0176', '0177', '0178', '0179',          // O2
            '0157', '0163',                          // 1&1 / Drillisch
        ];
        $prefix = $prefixes[array_rand($prefixes)];
        return sprintf('+49 %s %07d', $prefix, rand(1000000, 9999999));
    }


    public function email()
    {
        // Générez un nom d'utilisateur aléatoire, par exemple un prénom suivi d'un numéro
        $username = $this->last_name() . rand(1, 100);

        // Le suffixe de l'adresse e-mail
        $suffix = '@example.de';

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
            'Volkswagen AG', 'BMW AG', 'Mercedes-Benz Group', 'Siemens AG', 'SAP SE',
            'Deutsche Telekom', 'Deutsche Bank', 'Allianz SE', 'Munich Re', 'BASF SE',
            'Bayer AG', 'Henkel AG', 'adidas AG', 'Puma SE', 'Bosch GmbH',
            'Continental AG', 'Thyssenkrupp', 'E.ON SE', 'RWE AG', 'Lufthansa AG',
            'Deutsche Post DHL', 'Zalando SE', 'Lidl', 'Aldi', 'REWE Group',
            'Otto GmbH', 'Infineon Technologies', 'LANXESS', 'Covestro AG',
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
        return strtolower($this->first_name() . $this->last_name() . rand(100, 999));
    }

    public function name()
    {
        return strtolower($this->first_name() . $this->last_name());
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

    public function university()
    {
        $universities = [
            'Ludwig-Maximilians-Universität München (LMU)',
            'Technische Universität München (TUM)',
            'Ruprecht-Karls-Universität Heidelberg',
            'Humboldt-Universität zu Berlin',
            'Freie Universität Berlin',
            'RWTH Aachen University',
            'Universität Hamburg',
            'Goethe-Universität Frankfurt',
            'Universität Stuttgart',
            'Albert-Ludwigs-Universität Freiburg',
            'Technische Universität Berlin (TU Berlin)',
            'Karlsruher Institut für Technologie (KIT)',
            'Universität Mannheim', 'Georg-August-Universität Göttingen',
            'Westfälische Wilhelms-Universität Münster',
        ];
        return $universities[array_rand($universities)];
    }

    public function district()
    {
        $districts = [
            'Mitte', 'Prenzlauer Berg', 'Friedrichshain', 'Kreuzberg',
            'Charlottenburg', 'Wilmersdorf', 'Schöneberg', 'Neukölln',
            'Wedding', 'Pankow', 'Steglitz', 'Zehlendorf',
            'Schwabing', 'Maxvorstadt', 'Bogenhausen', 'Haidhausen',
            'Altstadt', 'Lehel', 'Giesing', 'Pasing',
            'Altstadt Hamburg', 'Eimsbüttel', 'Eppendorf', 'Barmbek',
        ];
        return $districts[array_rand($districts)];
    }

    public function licensePlate()
    {
        $cities = ['B', 'M', 'HH', 'K', 'F', 'S', 'DU', 'DO', 'L', 'DD', 'HB', 'NÜ', 'MA', 'BO', 'WI'];
        $letters = 'ABCDEFGHJKLMNPRSTUVWXYZ';
        $city = $cities[array_rand($cities)];
        $l1 = $letters[rand(0, strlen($letters) - 1)];
        $l2 = $letters[rand(0, strlen($letters) - 1)];
        $number = rand(1, 9999);
        return $city . ' ' . $l1 . $l2 . ' ' . $number;
    }

    public function nationalId()
    {
        $letter = chr(rand(65, 90));
        $digits = str_pad(rand(10000000, 99999999), 8, '0', STR_PAD_LEFT);
        $check  = rand(0, 9);
        return $letter . $digits . $check;
    }
}
