<?php

namespace Cupidontech\MultiFaker\Country\Africa;

use Illuminate\Support\Str;
use Faker\Generator as BaseGenerator;

class NigeriaFakerGenerator extends BaseGenerator
{
    public function first_name()
    {
        $firstNames = [
            'Abigail', 'Ade', 'Adenike', 'Adewale', 'Adewumi', 'Afolabi', 'Agnes',
            'Aisha', 'Akintunde', 'Amarachi',
            'Amos', 'Anayo', 'Anthony', 'Ayodele', 'Babatunde', 'Bolanle', 'Bose',
            'Chidimma', 'Chidi', 'Chidubem',
            'Chigozie', 'Chioma', 'Chisom', 'Chukwudi', 'Chukwuma', 'Comfort', 'Daniel',
            'Deborah', 'Ebube', 'Ebere',
            'Echezona', 'Edith', 'Ejiro', 'Ekeoma', 'Emeka', 'Emmanuel', 'Esther',
            'Faith', 'Folake', 'Funke',
            'Gloria', 'Habib', 'Hannah', 'Hassan', 'Ibukun', 'Ifunanya', '
            Ifeanyichukwu', 'Ifunanya', 'Iheoma', 'Ikenna',
            'Ibrahim', 'Jane', 'Jennifer', 'Jibril', 'John', 'Joy', '
            Kehinde', 'Khadijah', 'Kingsley', 'Kufre',
            'Lanre', 'Linda', 'Lydia', 'Mojisola', 'Ngozi', 'Nkechi', 'Nneka',
            'Nnenna', 'Obinna', 'Ogechi',
            'Oluwaseun', 'Olufemi', 'Oluwakemi', 'Oluwaseyi', 'Onyinyechukwu', '
            Patience', 'Precious', 'Rebecca', 'Samuel', 'Sikiru',
            'Simisola', 'Stephen', 'Taiwo', 'Temitope', 'Titilayo', 'Tochukwu',
            'Uchechukwu', 'Uchenna', 'Uduak', 'Victoria',
            'Wisdom', 'Yakubu', 'Yusuf', 'Zainab', 'Zara', 'Abdul', 'Adeola', 'Agatha',
            'Agbaje', 'Aisha', 'Ajibola', 'Akin', 'Akpan', 'Amaechi', 'Amaka',
            'Amina', 'Amir', 'Aneke', 'Anita', 'Azubuike', 'Bassey', 'Beatrice',
            'Bello', 'Blessing', 'Bolarinwa',
            'Boluwatife', 'Chiamaka', 'Chidera', 'Chijioke', 'Chika', 'Chinedu', 'Chioma',
            'Chisom', 'Chuka', 'Chukwuemeka',
            'Chukwuka', 'Chukwuma', 'Clifford', 'Comfort', 'Damian', 'Damilola', 'Damilare',
            'Daniel', 'David', 'Deji',
            'Dorcas', 'Ebube', 'Echezona', 'Edith', 'Ejiro', 'Ekene', 'Elisha',
            'Emeka', 'Emmanuel', 'Ene',
            'Ese', 'Esther', 'Eucharia', 'Eunice', 'Evelyn', 'Eze', 'Femi', 'Francis',
            'Funmilayo', 'Gbenga',
            'George', 'Grace', 'Halima', 'Hannah', 'Hassan', 'Henry', 'Ibrahim', 'Ify',
            'Ijeoma', 'Ikechukwu',
            'Ifeanyi', 'Ike', 'Ikechukwu', 'Imelda', 'Isaac', 'Isabel', 'Jamil', 'Jane',
            'Japhet', 'Jennifer',
            'Jide', 'John', 'Joy', 'Judith', 'Juliet', 'Justina', 'Kabir',
            'Kafayat', 'Kemi', 'Kenny',
            'Kingsley', 'Kola', 'Lanre', 'Linda', 'Lydia', 'Mabel', 'Machukwu',
            'Martha', 'Michael', 'Miracle',
            'Mohammed', 'Moses', 'Ngozi', 'Nkechi', 'Nneka', 'Nnenna', 'Nonye',
            'Obinna', 'Ogechi', 'Oghenekevwe',
            'Olamide', 'Olufemi', 'Olumide', 'Oluwakemi', 'Oluwaseyi', 'Onyinyechukwu',
            'Patience', 'Peter', 'Princess', 'Rashidat',
            'Rebecca', 'Regina', 'Rita', 'Robert', 'Rose', 'Ruth', 'Sadiq',
            'Saidu', 'Salisu', 'Samson',
            'Sani', 'Segun', 'Shola', 'Sikiru', 'Simisola', 'Stanley', 'Tayo',
            'Timothy', 'Titilayo', 'Tobiloba',
            'Tochukwu', 'Uchechukwu', 'Uchenna', 'Uduak', 'Ugochukwu', 'Uzoma',
            'Victor', 'Vivian', 'Wisdom', 'Yakubu',
            'Yemi', 'Yusuf', 'Zainab', 'Zara', 'Zubairu',
        ];

        $randomIndex = rand(0, count($firstNames) - 1);
        return $firstNames[$randomIndex];
    }

    public function last_name()
    {

        $lastNames = [
            'Abiola', 'Adebayo', 'Adeboye', 'Adeniji', 'Adewale', 'Afolabi', 'Agbakoba', 'Agboola', 'Agu', 'Akpabio',
            'Akunyili', 'Alakija', 'Amadi', 'Aminu', 'Anenih', 'Awolowo', 'Babangida', 'Balogun', 'Danjuma', 'Dangote',
            'Ejiofor', 'Ekwensi', 'Ekwueme', 'Ezeh', 'Fashola', 'Fayemi', 'Folarin', 'Gbaja-Biamila', 'Igbinedion', 'Igwe',
            'Iwu', 'Jegede', 'Jibril', 'Jonathan', 'Kalu', 'Maduka', 'Mba', 'Nwachukwu', 'Nwankwo', 'Nwosu',
            'Obasanjo', 'Ogundipe', 'Ogunlana', 'Ogunleye', 'Oguntunde', 'Ogunyemi', 'Okoye', 'Olatunji', 'Olowu', 'Oni',
            'Onyema', 'Osagie', 'Osunbor', 'Otedola', 'Owoh', 'Oyelola', 'Oyelowo', 'Sanusi', 'Saraki', 'Suleiman',
            'Ugwu', 'Umea', 'Umeh', 'Uzoma', 'Yaradua', 'Yusuf', 'Zubairu', 'Zubair', 'Zakari', 'Zik', 'Adenuga', 'Adetokunbo', 
            'Adewusi', 'Agbede', 'Aguwa', 'Akande', 'Akinjide', 'Akinyemi', 'Ali', 'Amakor',
            'Amao', 'Amusan', 'Anikulapo', 'Aremu', 'Babatunji', 'Balogun', 'Chinwuba', 'Dike', 'Egbuna', 'Egwu',
            'Emenike', 'Enechukwu', 'Enemuo', 'Enebeli', 'Folayan', 'Gbadebo', 'Gbajabiamila', 'Gbemudu', 'Ibe', 'Ibeneme',
            'Idris', 'Ifeadike', 'Igweze', 'Ijere', 'Ikpeazu', 'Iwu', 'Jelani', 'Jideofor', 'Kalu', 'Madu',
            'Mazi', 'Njoku', 'Nwanneka', 'Nwobodo', 'Nwosu', 'Nwachukwu', 'Obi', 'Obialo', 'Ochei', 'Odemwingie',
            'Ogbeche', 'Ogbuefi', 'Ogunbanjo', 'Ogunmodede', 'Ogunmekan', 'Ogunsanya', 'Ohakim', 'Ojukwu', 'Okonjo', 'Okoye',
            'Olagbegi', 'Oladele', 'Olaiya', 'Olajide', 'Olanrewaju', 'Olateru', 'Olumide', 'Omololu', 'Onwumere', 'Opeyemi',
            'Oshinaike', 'Osuntokun', 'Osuntola', 'Otudeko', 'Oyelami', 'Oyenusi', 'Sagay', 'Sanwo-Olu', 'Soludo', 'Soyinka',
            'Sule', 'Udofia', 'Udoji', 'Ugwu', 'Ukaegbu', 'Umebinyuo', 'Umeh', 'Uzodinma', 'Yakubu', 'Zayyad',
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
            'Yoruba', 'Igbo', 'Hausa', 'Fulani', 'Edo', 'Ibibio', 'Kanuri', 'Tiv', 'Ijaw', 'Nupe',
            'Igala', 'Idoma', 'Ebira', 'Efik', 'Igbanke', 'Isoko', 'Itsekiri', 'Annang', 'Oron', 'Ogoni',
            'Igede', 'Kadara', 'Bini', 'Ondo', 'Okrika', 'Owerri', 'Calabar', 'Akwa Ibom', 'Igbanke', 'Urhobo',
            'Isan', 'Auchi', 'Ika', 'Iselle-Uku', 'Ikwerre', 'Obudu', 'Ibibio', 'Kaduna', 'Abuja', 'Idoma',
            'Makurdi', 'Bauchi', 'Gwari', 'Kogi', 'Kwara', 'Yagba', 'Ibolo', 'Isu', 'Iduhu', 'Esan',
            'Akoko-Edo', 'Etsako', 'Ohafia', 'Nkporo', 'Yala', 'Ndokwa', 'Aniocha', 'Ijaw', 'Ibani', 'Obolo',
            'Tiv', 'Babur', 'Higgi', 'Fulfulde', 'Yauri', 'Nupe', 'Okun', 'Akoko', 'Ogori', 'Isoko',
            'Nembe', 'Nkalaha', 'Efik', 'Kambari', 'Kajuru', 'Kaje', 'Kubi', 'Kugama', 'Kurama', 'Kwanka',
            'Lala', 'Lere', 'Margi', 'Miship', 'Mumuye', 'Ngizim', 'Nungu', 'Nyeng', 'Ogori', 'Oirat',
            'Okun', 'Rogbaka', 'Tarok', 'Urhobo', 'Utonkon', 'Uyanga', 'Yala', 'Yoruba', 'Yoruba', 'Yoruba',
            'Ijaw', 'Anang', 'Tiv', 'Koma', 'Boghom', 'Kanuri', 'Jukun', 'Nupe', 'Igala', 'Bunu',
            'Yagba', 'Nupe', 'Igbanke', 'Itsekiri', 'Ibani', 'Andoni', 'Kalabari', 'Ibibio', 'Efik', 'Kanuri',
            'Koma', 'Hausa', 'Kwanka', 'Rogbaka', 'Yako', 'Tiv', 'Tiv', 'Fulani', 'Kaje', 'Jukun',
            'Ibibio', 'Ogoni', 'Itsekiri', 'Yoruba', 'Bini', 'Bini', 'Ibibio', 'Kwara', 'Kogi', 'Tiv',
            'Jukun', 'Yako', 'Igbira', 'Nupe', 'Nupe', 'Nupe', 'Ebira', 'Bassa', 'Kaje', 'Kwanka',
            'Tiv', 'Fulani', 'Hausa', 'Mumuye', 'Miship', 'Ngizim', 'Margi', 'Lere', 'Lala', 'Kwanka',
            'Kurama', 'Kugama', 'Kaje', 'Kanuri', 'Bunu', 'Yagba', 'Nupe', 'Nupe', 'Igala', 'Isan',
        ];

        $randomIndex = rand(0, count($origins) - 1);
        return $origins[$randomIndex];
    }

    function region()
    {
        $regions = [
            "Northwest", "Northeast", "North Central", "Southwest", "Southeast", "South-South"
        ];


        $regionAleatoire = $regions[array_rand($regions)];
        return $regionAleatoire;
    }

    function city($region)
    {
        $villesParRegion = [
            "Northwest" => ["Kano", "Kaduna", "Sokoto", "Katsina", "Zamfara", "Kebbi", "Jigawa"],
            "Northeast" => ["Borno", "Adamawa", "Yobe", "Bauchi", "Gombe", "Taraba"],
            "North Central" => ["Benue", "Kogi", "Kwara", "Niger", "Plateau", "Nasarawa", "FCT - Abuja"],
            "Southwest" => ["Lagos", "Ogun", "Oyo", "Osun", "Ekiti", "Ondo"],
            "Southeast" => ["Enugu", "Anambra", "Imo", "Abia", "Ebonyi"],
            "South-South" => ["Rivers", "Delta", "Akwa Ibom", "Cross River", "Bayelsa", "Edo"],
        ];

        $villeAleatoire = $villesParRegion[$region][array_rand($villesParRegion[$region])];
        return $villeAleatoire;
    }

    public function cities()
    {
        $villes = [
            "Lagos", "Abuja", "Kano", "Ibadan", "Kaduna", "Port Harcourt", "Benin City", "Maiduguri", "Jos", "Enugu",
            "Aba", "Owerri", "Abeokuta", "Uyo", "Calabar", "Ilorin", "Warri", "Ogbomosho", "Zaria", "Gombe",
            "Sokoto", "Bauchi", "Akure", "Makurdi", "Minna", "Osogbo", "Oyo", "Ado Ekiti", "Awka", "Yola",
            "Lokoja", "Gusau", "Onitsha", "Umuahia", "Efon-Alaaye", "Mubi", "Ijebu-Ode", "Uromi", "Ondo", "Ikot Ekpene",
            "Sagamu", "Ilawe-Ekiti", "Lafia", "Jalingo", "Okene", "Suleja", "Iseyin", "Ila", "Arochukwu", "Pindiga",
            "Yenagoa", "Sapele", "Otukpo", "Afikpo", "Gbongan", "Ejigbo", "Bonny", "Kumo", "Wukari", "Ode",
            "Ikirun", "Keffi", "Ikerre", "Ijero-Ekiti", "Owo", "Ikire", "Idanre", "Nkpor", "Saki", "Okrika",
            "Buguma", "Geidam", "Uga", "Ughelli", "Bida", "Ugep", "Ifo", "Ilobu", "Shagamu", "Kabba",
            "Ode", "Inisa", "Nnewi", "Igboho", "Okigwe", "Katsina-Ala", "Mokwa", "Isieke", "Epe", "Gwarzo",
            "Gumel", "Soba", "Nasarawa", "Kaura Namoda", "Damaturu", "Numan", "Igbo-Ora", "Effium", "Yola", "Zungeru",
            "Biu", "Gwaram", "Kontagora", "Potiskum", "Hadejia", "Ijebu Igbo", "Egbe", "Katsina", "Kamba", "Ise-Ekiti",
            "Saki", "Okpoko", "Yenagoa", "Keffi", "Mokwa", "Funtua", "Ikare", "Enugu-Ukwu", "Bama", "Kaura Namoda",
            "Gashua", "Lokoja", "Asaba", "Buguma", "Nnewi", "Uyo", "Ila", "Gwagwalada", "Okrika", "Gumel",
            "Birnin Kebbi", "Funtua", "Nguru", "Gumel", "Malumfashi", "Sakaba", "Kamba", "Ughelli", "Bama", "Abeokuta",
            "Jega", "Sokoto", "Gbongan", "Pankshin", "Igboho", "Okigwe", "Katsina-Ala", "Modakeke", "Ede", "Abejukolo",
            "Ogoja", "Awka", "Kabba", "Onueke", "Igbo-Ora", "Awgu", "Ibi", "Eha Amufu", "Okada", "Jalingo",
            "Ido Ekiti", "Nnewi", "Ibi", "Obubra", "Ikire", "Nkwerre", "Takum", "Nkpor", "Owerri", "Owerri",
            "Oke Mesi", "Ezillo", "Eket", "Fufu", "Aku", "Garko", "Asaba", "Ugbodo", "Ijebu-Jesa", "Ijebu-Jesa",
            "Tambuwal", "Potiskum", "Yola", "Kumo", "Nafada", "Kontagora", "Kontagora", "Jahun", "Daura", "Daura", "Sokoto",
            "Sokoto", "Sokoto", "Birnin Kebbi", "Birnin Kebbi", "Argungu", "Argungu", "Kano", "Kano", "Kano", "Kano",
            "Gwaram", "Gwaram", "Gombe", "Gombe", "Kumo", "Kumo", "Kaltungo", "Kaltungo", "Dutse", "Dutse", "Hadejia",
            "Hadejia", "Nguru", "Nguru", "Biu", "Biu", "Bama", "Bama", "Potiskum", "Potiskum", "Damaturu", "Damaturu",
            "Gashua", "Gashua", "Funtua", "Funtua", "Zaria", "Zaria", "Birnin Kudu", "Birnin Kudu", "Katsina", "Katsina",
            "Katsina", "Katsina", "Katsina", "Katsina", "Dutsin Ma", "Dutsin Ma", "Kankara", "Kankara", "Kankara", "Kankara",
            "Daura", "Daura", "Safana", "Safana", "Bakori", "Bakori", "Danja", "Danja", "Batsari", "Batsari", "Faskari",
            "Faskari", "Sabuwa", "Sabuwa", "Mashi", "Mashi", "Ingawa", "Ingawa", "Sandamu", "Sandamu", "Jibia", "Jibia",
            "Kaita", "Kaita", "Malumfashi", "Malumfashi", "Kafur", "Kafur", "Kankia", "Kankia", "Rimi", "Rimi", "Zurmi",
            "Zurmi", "Shinkafi", "Shinkafi", "Maradun", "Maradun", "Maru", "Maru", "Bungudu", "Bungudu", "Gummi", "Gummi",
            "Birnin Magaji/Kiyawa", "Birnin Magaji/Kiyawa", "Tsafe", "Tsafe", "Gusau", "Gusau", "Shinkafi", "Shinkafi", "Bakura", "Bakura"
        ];

        return $villes[array_rand($villes)];
    }


    function coordinates()
    {
        // Limites géographiques du Cameroun (latitude et longitude)
        $limites = [
            'nord' => 13.8922,   // Latitude Nord
            'sud' => 4.2774,     // Latitude Sud
            'ouest' => 3.4982,   // Longitude Ouest
            'est' => 14.6774     // Longitude Est
        ];

        // Génération de coordonnées aléatoires dans les limites du Cameroun
        $latitude = $limites['sud'] + mt_rand() / mt_getrandmax() * ($limites['nord'] - $limites['sud']);
        $longitude = $limites['ouest'] + mt_rand() / mt_getrandmax() * ($limites['est'] - $limites['ouest']);

        return ['latitude' => $latitude, 'longitude' => $longitude];
    }

    public function address()
    {

        $streets = [

            'Lagos, Lagos State' => [
                'Victoria Island', 'Ikeja', 'Lekki', 'Surulere', 'Apapa', 'Yaba', 'Ajah', 'Ikorodu', 'Mushin', 'Egbeda',
            ],
            'Abuja, Federal Capital Territory' => [
                'Central Area', 'Garki', 'Wuse', 'Asokoro', 'Maitama', 'Gwarinpa', 'Kubwa', 'Jabi', 'Utako', 'Karu',
            ],
            'Kano, Kano State' => [
                'Kano Municipal', 'Dala', 'Fagge', 'Gwale', 'Kumbotso', 'Tarauni', 'Nassarawa', 'Ungogo', 'Dawakin Kudu', 'Tofa',
            ],
            'Ibadan, Oyo State' => [
                'Ibadan North', 'Ibadan South-West', 'Ibadan North-East', 'Ibadan South-East', 'Oluyole', 'Lagelu', 'Ona Ara', 'Egbeda', 'Akinyele', 'Ibarapa East',
            ],
            'Kaduna, Kaduna State' => [
                'Kaduna North', 'Kaduna South', 'Chikun', 'Kajuru', 'Igabi', 'Jema\'a', 'Kachia', 'Zaria', 'Sabon Gari', 'Kauru',
            ],
            'Port Harcourt, Rivers State' => [
                'Port Harcourt City', 'Obio-Akpor', 'Eleme', 'Ikwerre', 'Etche', 'Oyigbo', 'Khana', 'Degema', 'Gokana', 'Tai',
            ],
            'Benin City, Edo State' => [
                'Oredo', 'Egor', 'Ikpoba-Okha', 'Uhunmwonde', 'Ovia North-East', 'Ovia South-West', 'Esan Central', 'Esan West', 'Esan North-East', 'Igueben',
            ],
            'Maiduguri, Borno State' => [
                'Maiduguri Metropolitan', 'Jere', 'Konduga', 'Mafa', 'Dikwa', 'Bama', 'Ngala', 'Kala/Balge', 'Gwoza', 'Hawul',
            ],
            'Jos, Plateau State' => [
                'Jos North', 'Jos South', 'Barkin Ladi', 'Mangu', 'Langtang South', 'Langtang North', 'Bassa', 'Riyom', 'Pankshin', 'Kanke',
            ],
            'Enugu, Enugu State' => [
                'Enugu North', 'Enugu South', 'Udi', 'Nkanu West', 'Nkanu East', 'Igbo-Eze North', 'Igbo-Eze South', 'Isi-Uzo', 'Ezeagu', 'Oji River',
            ],
        ];

        $randomCity = array_rand($streets);

        // Choisissez une rue aléatoire dans la ville
        $randomStreet = $streets[$randomCity][array_rand($streets[$randomCity])];

        return "$randomStreet, $randomCity";
    }


    public function phone()
    {
        $prefix = '+234';

        // Générez le premier chiffre aléatoire parmi 7, 9 ou 8
        $firstDigit = [7, 9, 8][rand(0, 4)];


        // Générez les 5 derniers chiffres aléatoires
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
        $suffix = '@234.com';

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

            'Nigerian', 'Lagos', 'Abuja', 'Kano', 'Zenith', 'First', 'Access', 'Guaranty', 'Union', 'United', 'Fidelity',
            'Diamond', 'Skye', 'Stanbic', 'Standard', 'Eco', 'Heritage', 'Keystone', 'Unity', 'Mainstreet', 'Wema',
            'Jaiz', 'Sterling', 'SunTrust', 'Providus', 'Trust', 'Coronation', 'ASO', 'Capital', 'Sovereign', 'Fortis',
            'Citi', 'Polaris', 'Rand', 'Ecobank', 'Unity', 'Enterprise', 'Legacy', 'Jaiz', 'Sun', 'Spring', 'VFD', 'Cititrust'

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

        $platsNigerian = [
            "Jollof Rice",
            "Egusi Soup",
            "Suya",
            "Pounded Yam and Egusi Soup",
            "Fufu and Egusi Soup",
            "Akara",
            "Amala and Ewedu Soup",
            "Moimoi",
            "Chinchinga (Nigerian Kebabs)",
            "Semovita and Egusi Soup",
            "Boli (Roasted Plantains)",
            "Pepper Soup",
            "Eba and Okra Soup",
            "Ofada Rice and Sauce",
            "Edikang Ikong Soup",
            "Abacha (African Salad)",
            "Yam Porridge",
            "Oha Soup",
            "Nkwobi",
            "Afang Soup",
            "Achara Soup",
            "Nigerian Fried Rice",
            "Egusi Pepper Soup",
            "Ogbono Soup",
            "Tuwo Shinkafa and Miyan Taushe",
            "Egusi and Okra Soup",
            "Coconut Rice",
            "Yam and Egg Sauce",
            "Ewa Agoyin",
            "Banga Soup (Palm Nut Soup)",
            "White Soup (Ofe Nsala)",
            "Kilishi (Nigerian Beef Jerky)",
            "Gbegiri Soup",
            "Ukodo (Yam Pepper Soup)",
            "Ojojo (Yam Fritters)",
            "Agidi Jollof",
            "Nigerian Jollof Spaghetti",
            "Boiled Plantains and Stew",
            "Afang and Edikang Soup",
            "Groundnut Soup",
            "Nigerian Shawarma",
            "Moi Moi Roll",
            "Tuwo Masara",
            "Fisherman Soup",
            "Nsala Soup",
            "Yam and Fresh Fish Pepper Soup",
            "Semo and Egusi Soup",
            "Ogbono and Okra Soup",
            "Owo Soup",
            "Fish Pepper Soup",
        ];


        // Sélection aléatoire d'un nom de plat
        $nomPlat = $platsNigerian[array_rand($platsNigerian)];

        return $nomPlat;
    }
}