<?php

namespace Cupidontech\MultiFaker\Country\Africa;

use Illuminate\Support\Str;
use Faker\Generator as BaseGenerator;

class UnitedStateFakerGenerator extends BaseGenerator
{
    public function first_name()
    {

        $firstNames = [
            'James', 'John', 'Robert', 'Michael', 'William', 'David',
            'Joseph', 'Charles', 'Thomas', 'Daniel',
            'Matthew', 'Christopher', 'Andrew', 'Joshua',
            'Anthony', 'Elizabeth', 'Jennifer', 'Patricia',
            'Linda', 'Mary',
            'Susan', 'Jessica', 'Sarah', 'Karen', 'Nancy',
            'Lisa', 'Betty', 'Dorothy', 'Helen', 'Sandra',
            'Donna', 'Carol', 'Ruth', 'Sharon', 'Michelle',
            'Laura', 'Kimberly', 'Melissa', 'Rebecca', 'Linda',
            'Cynthia', 'Barbara', 'Natalie', 'Amanda', 'Emily',
            'Anna', 'Samantha', 'Madison', 'Olivia', 'Grace',
            'Abigail', 'Hannah', 'Victoria', 'Ella', 'Sophia',
            'Isabella', 'Alexis', 'Avery', 'Aiden', 'Ethan',
            'Ryan', 'Nathan', 'Mason', 'Benjamin', 'William',
            'Elijah', 'Liam', 'Alexander', 'James', 'Jackson',
            'Lucas', 'Matthew', 'David', 'Joseph', 'William',
            'Daniel', 'Anthony', 'Thomas', 'Charles', 'Robert',
            'Brian', 'Jason', 'Timothy', 'Mark', 'Kevin',
            'Jeffrey', 'Richard', 'Donald', 'Mary', 'Patricia',
            'Linda', 'Elizabeth', 'Susan', 'Jessica',
            'Sarah', 'Karen', 'Nancy', 'Betty', 'Dorothy', 'Helen',
            'Sandra', 'Donna', 'Carol', 'Ruth', 'Sharon',
            'Michelle', 'Laura', 'Kimberly', 'Melissa', 'Rebecca',
            'Linda', 'Cynthia', 'Barbara', 'Natalie', 'Amanda',
            'Emily', 'Anna', 'Samantha', 'Madison', 'Olivia',
        ];

        $randomIndex = rand(0, count($firstNames) - 1);
        return $firstNames[$randomIndex];
    }

    public function last_name()
    {

        $lastNames = [
            'Smith', 'Johnson', 'Brown', 'Taylor', 'Williams',
            'Jones', 'Davis', 'Miller', 'Wilson', 'Moore',
            'Anderson', 'Jackson', 'White', 'Harris', 'Martin',
            'Thompson', 'Garcia', 'Martinez', 'Clark', 'Rodriguez',
            'Lewis', 'Lee', 'Walker', 'Hall', 'Allen', 'Young',
            'Hernandez', 'King', 'Wright', 'Lopez',
            'Scott', 'Green', 'Adams', 'Baker', 'Gonzalez',
            'Nelson', 'Carter', 'Mitchell', 'Perez', 'Roberts',
            'Turner', 'Phillips', 'Campbell', 'Parker', 'Evans',
            'Edwards', 'Collins', 'Stewart', 'Sanchez', 'Morris',
            'Rogers', 'Reed', 'Cook', 'Morgan', 'Bell', 'Murphy',
            'Bailey', 'Rivera', 'Cooper', 'Richardson',
            'Cox', 'Howard', 'Ward', 'Torres', 'Peterson', 'Gray',
            'Ramirez', 'James', 'Watson', 'Brooks',
            'Kelly', 'Sanders', 'Price', 'Bennett', 'Wood', 'Barnes',
            'Ross', 'Henderson', 'Coleman', 'Jenkins',
            'Perry', 'Powell', 'Long', 'Patterson', 'Hughes', 'Flores',
            'Washington', 'Butler', 'Simmons', 'Foster',
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
            'African American', 'European American', 'Asian American', 'Hispanic American', 'Native American', 'Pacific Islander',
            'Arab American', 'Jewish American', 'Irish American', 'Italian American', 'German American', 'Mexican American',
            'Chinese American', 'Indian American', 'Korean American', 'Filipino American', 'Vietnamese American', 'Japanese American',
            'Russian American', 'Greek American', 'Polish American', 'French American', 'English American', 'Scottish American',
            'Swedish American', 'Norwegian American', 'Danish American', 'Dutch American', 'Belgian American', 'Austrian American',
            'Swiss American', 'Czech American', 'Hungarian American', 'Spanish American', 'Portuguese American', 'Puerto Rican',
            'Cuban American', 'Dominican American', 'Guatemalan American', 'Salvadoran American', 'Honduran American', 'Nicaraguan American',
            'Costa Rican American', 'Colombian American', 'Venezuelan American', 'Peruvian American', 'Ecuadorian American', 'Bolivian American',
            'Chilean American', 'Argentinian American', 'Uruguayan American', 'Paraguayan American', 'Brazilian American', 'Canadian American',
            'Australian American', 'New Zealander American', 'Fijian American', 'Tongan American', 'Samoan American', 'Tahitian American',
            'Hawaiian American', 'Alaskan Native', 'Navajo', 'Cherokee', 'Lakota', 'Sioux', 'Chippewa', 'Apache', 'Hopi', 'Inuit',
            'Yupik', 'Aleut', 'Pueblo', 'Zuni', 'Papuan American', 'Melanesian American', 'Micronesian American', 'Marshallese American',
            'Palauan American', 'Polynesian American', 'Tongan American', 'Samoan American', 'Tahitian American', 'Hawaiian American',
            'Armenian American', 'Iranian American', 'Turkish American', 'Lebanese American', 'Syrian American', 'Egyptian American',
            'Iraqi American', 'Saudi Arabian American', 'Yemeni American', 'Omani American', 'Kuwaiti American', 'Qatari American',
            'Bahraini American', 'Emirati American', 'Jordanian American', 'Israeli American', 'Palestinian American', 'Mediterranean American',
            'Moroccan American', 'Algerian American', 'Tunisian American', 'Libyan American', 'Nigerian American', 'Ghanaian American',
            'Senegalese American', 'Kenyan American', 'Ethiopian American', 'Somali American', 'South African American', 'Zimbabwean American',
            'Afghan American', 'Pakistani American', 'Bangladeshi American', 'Sri Lankan American', 'Nepali American', 'Bhutanese American',
            'Tibetan American', 'Mongolian American', 'Kazakh American', 'Uzbek American', 'Turkmen American', 'Kyrgyz American', 'Tajik American',
            'Georgian American', 'Arabian American', 'Indian American', 'Punjabi American', 'Bengali American', 'Tamil American', 'Sikh American',
            'Gujarati American', 'Nepali American', 'Bhutanese American', 'Tibetan American', 'Mongolian American', 'Kazakh American', 'Uzbek American',
            'Turkmen American', 'Kyrgyz American', 'Tajik American', 'Georgian American', 'Arabian American', 'Jewish American', 'Irish American',
            'Italian American', 'German American', 'Russian American', 'Greek American', 'Polish American', 'French American', 'English American',
            'Scottish American', 'Swedish American', 'Norwegian American', 'Danish American', 'Dutch American', 'Belgian American', 'Austrian American',
            'Swiss American', 'Czech American', 'Hungarian American', 'Spanish American', 'Portuguese American', 'Finnish American', 'Romanian American',
            'Bulgarian American', 'Croatian American', 'Serbian American', 'Bosnian American', 'Montenegrin American', 'Slovenian American',
            'Slovak American', 'Macedonian American', 'Ukrainian American', 'Belarusian American', 'Lithuanian American', 'Latvian American',
            'Estonian American', 'Moldovan American', 'Albanian American', 'Kosovar American', 'Baltic American', 'Central Asian American',
            'Eastern European American', 'Southeast Asian American', 'Western European American', 'North African American', 'Sub-Saharan African American',

        ];

        $randomIndex = rand(0, count($origins) - 1);
        return $origins[$randomIndex];
    }
    public function name()
    {

        $firstName = $this->first_name;
        $lastName = $this->last_name;

        // Concaténez le prénom, le nom de famille et le numéro aléatoire pour former le nom d'utilisateur
        $name = strtolower($firstName . $lastName);

        return $name;
    }

    function region()
    {
        $regions = [
            "Connecticut", "Maine", "Massachusetts", "New Hampshire", "Rhode Island", "Vermont",
            "New York", "New Jersey", "Pennsylvania",
            "Alabama", "Georgia", "Louisiana", "Mississippi", "South Carolina",
            "Florida", "North Carolina", "Virginia",
            "Illinois", "Indiana", "Michigan", "Ohio", "Wisconsin",
            "Arizona", "New Mexico", "Texas", "Nevada", "Oklahoma",
            "California", "Oregon", "Washington",
            "Colorado", "Idaho", "Montana", "Utah", "Wyoming",
            "Colorado", "Montana", "Wyoming",
            "Kansas", "Nebraska", "North Dakota", "South Dakota",
            "Alaska", "Hawaii", "Delaware", "Maryland", "Arkansas", "Oklahoma",
            "Texas", "Louisiana", "Mississippi", "Alabama", "Florida"
        ];

        $regionAleatoire = $regions[array_rand($regions)];
        return $regionAleatoire;
    }

    public function city($region)
    {
        $villesParRegion = [
            "New England" => ["Connecticut", "Maine", "Massachusetts", "New Hampshire", "Rhode Island", "Vermont"],
            "Mid-Atlantic" => ["New York", "New Jersey", "Pennsylvania"],
            "Deep South" => ["Alabama", "Georgia", "Louisiana", "Mississippi", "South Carolina"],
            "Southeast Coast" => ["Florida", "North Carolina", "Virginia"],
            "Heartland" => ["Illinois", "Indiana", "Michigan", "Ohio", "Wisconsin"],
            "Southwest" => ["Arizona", "New Mexico", "Texas", "Nevada", "Oklahoma"],
            "Pacific Coast" => ["California", "Oregon", "Washington"],
            "Mountain West" => ["Colorado", "Idaho", "Montana", "Utah", "Wyoming"],
            "Rocky Mountains" => ["Colorado", "Montana", "Wyoming"],
            "Great Plains" => ["Kansas", "Nebraska", "North Dakota", "South Dakota"],
            "Alaska" => ["Alaska"],
            "Hawaii" => ["Hawaii"],
            "Mid-Atlantic" => ["Delaware", "Maryland"],
            "South Central" => ["Arkansas", "Oklahoma"],

            "Gulf Coast" => ["Texas", "Louisiana", "Mississippi", "Alabama", "Florida"],

        ];

        $villeAleatoire = $villesParRegion[$region][array_rand($villesParRegion[$region])];
        return $villeAleatoire;
    }

    public function cities()
    {
        $villes = [
            "New York", "Los Angeles", "Chicago", "Houston", "Phoenix", "Philadelphia", "San Antonio", "San Diego", "Dallas", "San Jose",
            "Austin", "Jacksonville", "Fort Worth", "Columbus", "Charlotte", "San Francisco", "Indianapolis", "Seattle", "Denver", "Washington, D.C.",
            "Boston", "El Paso", "Nashville", "Portland", "Las Vegas", "Detroit", "Oklahoma City", "Memphis", "Louisville", "Baltimore",
            "Milwaukee", "Albuquerque", "Tucson", "Fresno", "Sacramento", "Kansas City", "Long Beach", "Mesa", "Atlanta", "Colorado Springs",
            "Virginia Beach", "Raleigh", "Omaha", "Miami", "Oakland", "Minneapolis", "Tulsa", "Arlington", "Wichita", "New Orleans",
            "Bakersfield", "Tampa", "Honolulu", "Aurora", "Anaheim", "Santa Ana", "St. Louis", "Riverside", "Corpus Christi", "Lexington",
            "Pittsburgh", "Anchorage", "Stockton", "Cincinnati", "St. Paul", "Toledo", "Newark", "Greensboro", "Plano", "Henderson",
            "Lincoln", "Buffalo", "Fort Wayne", "Jersey City", "Chula Vista", "Orlando", "St. Petersburg", "Norfolk", "Chandler",
            "Laredo", "Madison", "Durham", "Lubbock", "Winston-Salem", "Garland", "Glendale", "Hialeah", "Reno", "Baton Rouge",
            "Irvine", "Chesapeake", "Irving", "Scottsdale", "North Las Vegas", "Fremont", "Gilbert", "San Bernardino", "Boise",
            "Birmingham", "Rochester", "Richmond", "Spokane", "Des Moines", "Montgomery", "Modesto", "Fayetteville", "Tacoma",
        ];
        return $villes[array_rand($villes)];
    }

    public function coordinates()
    {
        // Limites géographiques du Cameroun (latitude et longitude)
        $limites = [
            'north' => 49.384358,    // Northernmost point (Northwest Angle, Minnesota)
            'south' => 24.396308,    // Southernmost point (Key West, Florida)
            'west' => -125.000000,   // Westernmost point (Point Arena, California)
            'east' => -66.934570     // Easternmost point (Quoddy Head, Maine)
        ];

        // Génération de coordonnées aléatoires dans les limites du Cameroun
        $latitude = $limites['sud'] + mt_rand() / mt_getrandmax() * ($limites['nord'] - $limites['sud']);
        $longitude = $limites['ouest'] + mt_rand() / mt_getrandmax() * ($limites['est'] - $limites['ouest']);

        return ['latitude' => $latitude, 'longitude' => $longitude];
    }

    public function address()
    {

        $streets = [
            'New York, New York' => [
                'Fifth Avenue',
                'Broadway',
                'Madison Avenue',
                'Wall Street',
                'Park Avenue',
                'Times Square',
            ],
            'Los Angeles, California' => [
                'Sunset Boulevard',
                'Hollywood Boulevard',
                'Rodeo Drive',
                'Wilshire Boulevard',
                'Santa Monica Boulevard',
                'Venice Beach Boardwalk',
            ],
            'Chicago, Illinois' => [
                'Michigan Avenue',
                'State Street',
                'Wacker Drive',
                'LaSalle Street',
                'Dearborn Street',
                'Magnificent Mile',
            ],
            'Houston, Texas' => [
                'Main Street',
                'Kirby Drive',
                'Bissonnet Street',
                'Washington Avenue',
                'Westheimer Road',
                'Rice Boulevard',
            ],
            'Philadelphia, Pennsylvania' => [
                'Market Street',
                'Chestnut Street',
                'Walnut Street',
                'Broad Street',
                'South Street',
                'Arch Street',
            ],
        ];
        $randomCity = array_rand($streets);

        // Choisissez une rue aléatoire dans la ville
        $randomStreet = $streets[$randomCity][array_rand($streets[$randomCity])];

        return "$randomStreet, $randomCity";
    }

    public function phone()
    {
        $prefix = '+1';

        // Generate the first digit randomly from 2 to 9
        $firstDigit = rand(2, 9);


        // Générez les 5 derniers chiffres aléatoires
        $secondPart = '';
        for ($i = 0; $i < 9; $i++) {
            $secondPart .= rand(0, 9);
        }

        return $prefix . $firstDigit  . $secondPart;
    }

    public function email()
    {
        // Générez un nom d'utilisateur aléatoire, par exemple un prénom suivi d'un numéro
        $username = $this->last_name() . rand(1, 100);

        // Le suffixe de l'adresse e-mail
        $suffix = '@1.com';

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
        $prefixes = ['ABC', 'XYZ', 'Tech', 'First', 'Global', 'National', 'United', 'Innovative', 'American', 'Century', 'City', 'Strategic', 'Dynamic', 'Capital', 'Quality', 'Pioneer', 'Advanced', 'Frontier', 'Pro', 'Star', 'Peak', 'Worldwide', 'Blue', 'Green', 'Red', 'Yellow'];
        $suffixes = ['Inc', 'Corp', 'Group', 'Enterprises', 'Solutions', 'Industries', 'Incorporated', 'Services', 'International', 'Systems', 'Holdings', 'Enterprises', 'Associates', 'Ventures', 'Management', 'Partners', 'Technologies', 'Logistics', 'Consulting', 'Network', 'Innovations', 'America', 'Global', 'World', 'United', 'Enterprize'];

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
    

    function food() {
        $platsUs = [
            "Hamburger",
        "Pizza",
        "Hot Dog",
        "Cheeseburger",
        "French Fries",
        "Fried Chicken",
        "Burrito",
        "Taco",
        "Sushi",
        "Pancakes",
        "Waffles",
        "Donut",
        "Popcorn",
        "Cupcake",
        "BBQ Ribs",
        "Clam Chowder",
        "Apple Pie",
        "Chocolate Chip Cookie",
        "Ice Cream",
        "Blueberry Pancakes",
        ];
    
        // Sélection aléatoire d'un nom de plat
        $nomPlat = $platsUs[array_rand($platsUs)];
    
        return $nomPlat;
    }
    
}
