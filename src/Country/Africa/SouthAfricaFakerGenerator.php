<?php

namespace Cupidontech\MultiFaker\Country\Africa;

use Illuminate\Support\Str;
use Faker\Generator as BaseGenerator;

class SouthAfricaFakerGenerator extends BaseGenerator
{
    // Implémentez les méthodes de génération spécifiques au SouthAfrica ici

    public function first_name()
    {
        $firstNames = [
            'Thabo', 'Lerato', 'Sipho', 'Nomvula', 'Lungelo', 'Themba', 'Nandi', 'Kagiso', 'Mandla', 'Lindiwe', 'Bongani', 'Zanele', 'Enzo', 'Ayanda', 'Tariro', 'Neo', 'Sithembile', 'Tinashe', 'Refiloe', 'Karabo',
            'Rethabile', 'Mpho', 'Amahle', 'Siyabonga', 'Tshegofatso', 'Refentse', 'Kgothatso', 'Noluthando', 'Anathi', 'Zinhle', 'Musa', 'Nolwazi', 'Andile', 'Siyanda', 'Lethabo', 'Khanya', 'Thandeka', 'Mthokozisi',
            'Katlego', 'Siyabulela', 'Sizwe', 'Lulama', 'Zama', 'Anele', 'Ayize', 'Buhle', 'Chiloe', 'Dumisani', 'Fumane', 'Gugulethu', 'Hlengiwe', 'Jabulani', 'Kagiso', 'Kefilwe', 'Kgaogelo', 'Khwezi', 'Kwanele',
            'Lethabo', 'Letlotlo', 'Linda', 'Londiwe', 'Lwandle', 'Makgatho', 'Mandisa', 'Mapule', 'Mbalenhle', 'Mncedisi', 'Modiegi', 'Mongezi', 'Monwabisi', 'Motlatsi', 'Naledi', 'Nandi', 'Nkosana', 'Nkosi',
            'Nomalanga', 'Nomsa', 'Nontle', 'Nonhlanhla', 'Nontokozo', 'Nosipho', 'Nqobile', 'Nthabiseng', 'Phumelele', 'Puleng', 'Refilwe', 'Sanele', 'Sechaba', 'Siboniso', 'Sikhumbuzo', 'Siphesihle', 'Thabang',
            'Themba', 'Thokozani', 'Thulisile', 'Vuyisile', 'Xolani', 'Zinhle', 'Zenande', 'Zodwa'    
        ];

        $randomIndex = rand(0, count($firstNames) - 1);
        return $firstNames[$randomIndex];
    }

    public function last_name()
    {
        $lastNames = [
            'Mthembu', 'Nkosi', 'Zulu', 'Van der Merwe', 'Maharaj', 'Pillay', 'Govender', 'Mkhize', 'Mokoena', 'Botha', 'Vilakazi', 'Mbatha', 'Smith', 'Ndlovu', 'Mlambo', 'Ngwenya', 'Dlamini', 'Mbuyiseni', 'Buthelezi', 'Khumalo',
            'Nxumalo', 'Radebe', 'Zuma', 'Moloi', 'Mabaso', 'Motaung', 'Molefe', 'Sithole', 'Mthethwa', 'Mashaba', 'Mabuza', 'Maseko', 'Xaba', 'Mokwena', 'Naidoo', 'Reddy', 'Singh', 'Govender', 'Panday', 'Chetty', 'Naicker',
            'Nair', 'Kumar', 'Pillai', 'Moodley', 'Munsamy', 'Nkosi', 'Mnguni', 'Vilakazi', 'Khumalo', 'Mthembu', 'Mtshali', 'Ngubane', 'Sibanda', 'Ncube', 'Dube', 'Moyo', 'Zulu', 'Gumede', 'Ndlovu', 'Sithole', 'Mlambo',
            'Mhlongo', 'Mkhwanazi', 'Mthiyane', 'Mthembu', 'Ntuli', 'Zondi', 'Cele', 'Majola', 'Mthembu', 'Myeni', 'Langa', 'Zondo', 'Ndaba', 'Nene', 'Mlambo', 'Mashaba', 'Ngwenya', 'Dlamini', 'Mbuyiseni', 'Buthelezi',
            'Khathi', 'Mdluli', 'Mthiyane', 'Mhlongo', 'Ntshangase', 'Nkosi', 'Zuma', 'Moloi', 'Mabaso', 'Motaung', 'Molefe', 'Sithole', 'Mthethwa', 'Mashaba', 'Mabuza', 'Maseko', 'Xaba', 'Mokwena', 'Naidoo', 'Reddy',
            'Singh', 'Govender', 'Panday', 'Chetty', 'Naicker', 'Nair', 'Kumar', 'Pillai', 'Moodley', 'Munsamy', 'Nkosi', 'Mnguni', 'Vilakazi', 'Khumalo', 'Mthembu', 'Mtshali', 'Ngubane', 'Sibanda', 'Ncube', 'Dube',
            'Moyo', 'Zulu', 'Gumede', 'Ndlovu', 'Sithole', 'Mlambo', 'Mhlongo', 'Mkhwanazi', 'Mthiyane', 'Mthembu', 'Ntuli', 'Zondi', 'Cele', 'Majola', 'Mthembu', 'Myeni', 'Langa', 'Zondo', 'Ndaba', 'Nene', 'Mlambo',
            'Mashaba', 'Ngwenya', 'Dlamini', 'Mbuyiseni', 'Buthelezi', 'Khathi', 'Mdluli', 'Mthiyane', 'Mhlongo', 'Ntshangase', 'Nkosi', 'Zuma', 'Moloi', 'Mabaso', 'Motaung', 'Molefe', 'Sithole', 'Mthethwa', 'Mashaba',
            'Mabuza', 'Maseko', 'Xaba', 'Mokwena', 'Naidoo', 'Reddy', 'Singh', 'Govender', 'Panday', 'Chetty', 'Naicker', 'Nair', 'Kumar', 'Pillai', 'Moodley', 'Munsamy', 'Nkosi', 'Mnguni', 'Vilakazi', 'Khumalo',
            'Mthembu', 'Mtshali', 'Ngubane', 'Sibanda', 'Ncube', 'Dube', 'Moyo', 'Zulu', 'Gumede', 'Ndlovu', 'Sithole', 'Mlambo', 'Mhlongo', 'Mkhwanazi', 'Mthiyane', 'Mthembu', 'Ntuli', 'Zondi', 'Cele', 'Majola',
            'Mthembu', 'Myeni', 'Langa', 'Zondo', 'Ndaba', 'Nene', 'Mlambo', 'Mashaba', 'Ngwenya', 'Dlamini', 'Mbuyiseni', 'Buthelezi', 'Khathi', 'Mdluli', 'Mthiyane', 'Mhlongo', 'Ntshangase', 'Nkosi', 'Zuma',
            'Moloi', 'Mabaso', 'Motaung', 'Molefe', 'Sithole', 'Mthethwa', 'Mashaba', 'Mabuza', 'Maseko', 'Xaba', 'Mokwena', 'Naidoo', 'Reddy', 'Singh', 'Govender', 'Panday', 'Chetty', 'Naicker', 'Nair', 'Kumar',
            'Pillai', 'Moodley', 'Munsamy', 'Nkosi', 'Mnguni', 'Vilakazi', 'Khumalo', 'Mthembu', 'Mtshali', 'Ngubane', 'Sibanda', 'Ncube', 'Dube', 'Moyo', 'Zulu', 'Gumede', 'Ndlovu', 'Sithole', 'Mlambo', 'Mhlongo',
            'Mkhwanazi', 'Mthiyane', 'Mthembu', 'Ntuli', 'Zondi', 'Cele', 'Majola', 'Mthembu', 'Myeni', 'Langa', 'Zondo', 'Ndaba', 'Nene', 'Mlambo', 'Mashaba', 'Ngwenya', 'Dlamini', 'Mbuyiseni', 'Buthelezi',
            'Khathi', 'Mdluli', 'Mthiyane', 'Mhlongo', 'Ntshangase', 'Nkosi', 'Zuma', 'Moloi', 'Mabaso', 'Motaung', 'Molefe', 'Sithole', 'Mthethwa', 'Mashaba', 'Mabuza', 'Maseko', 'Xaba', 'Mokwena', 'Naidoo',
            'Reddy', 'Singh', 'Govender', 'Panday', 'Chetty', 'Naicker', 'Nair', 'Kumar', 'Pillai', 'Moodley', 'Munsamy', 'Nkosi', 'Mnguni', 'Vilakazi', 'Khumalo', 'Mthembu', 'Mtshali', 'Ngubane', 'Sibanda',
            'Ncube', 'Dube', 'Moyo', 'Zulu', 'Gumede', 'Ndlovu', 'Sithole', 'Mlambo', 'Mhlongo', 'Mkhwanazi', 'Mthiyane', 'Mthembu', 'Ntuli', 'Zondi', 'Cele', 'Majola', 'Mthembu', 'Myeni', 'Langa', 'Zondo',
            'Ndaba', 'Nene', 'Mlambo', 'Mashaba', 'Ngwenya', 'Dlamini', 'Mbuyiseni', 'Buthelezi', 'Khathi', 'Mdluli', 'Mthiyane', 'Mhlongo', 'Ntshangase', 'Nkosi', 'Zuma', 'Moloi', 'Mabaso', 'Motaung', 'Molefe',
            'Sithole', 'Mthethwa', 'Mashaba', 'Mabuza', 'Maseko', 'Xaba', 'Mokwena', 'Naidoo', 'Reddy', 'Singh', 'Govender', 'Panday', 'Chetty', 'Naicker', 'Nair', 'Kumar', 'Pillai', 'Moodley', 'Munsamy', 'Nkosi',
            'Mnguni', 'Vilakazi', 'Khumalo', 'Mthembu', 'Mtshali', 'Ngubane', 'Sibanda', 'Ncube', 'Dube', 'Moyo', 'Zulu', 'Gumede', 'Ndlovu', 'Sithole', 'Mlambo', 'Mhlongo', 'Mkhwanazi', 'Mthiyane', 'Mthembu',
            'Ntuli', 'Zondi', 'Cele', 'Majola', 'Mthembu', 'Myeni', 'Langa', 'Zondo', 'Ndaba', 'Nene', 'Mlambo', 'Mashaba', 'Ngwenya', 'Dlamini', 'Mbuyiseni', 'Buthelezi', 'Khathi', 'Mdluli', 'Mthiyane',
            'Mhlongo', 'Ntshangase', 'Nkosi', 'Zuma', 'Moloi', 'Mabaso', 'Motaung', 'Molefe', 'Sithole', 'Mthethwa', 'Mashaba', 'Mabuza', 'Maseko', 'Xaba', 'Mokwena', 'Naidoo', 'Reddy', 'Singh', 'Govender',
            'Panday', 'Chetty', 'Naicker', 'Nair', 'Kumar', 'Pillai', 'Moodley', 'Munsamy', 'Nkosi', 'Mnguni', 'Vilakazi', 'Khumalo', 'Mthembu', 'Mtshali', 'Ngubane', 'Sibanda', 'Ncube', 'Dube', 'Moyo', 'Zulu',
            'Gumede', 'Ndlovu', 'Sithole', 'Mlambo', 'Mhlongo', 'Mkhwanazi', 'Mthiyane', 'Mthembu', 'Ntuli', 'Zondi', 'Cele', 'Majola', 'Mthembu', 'Myeni', 'Langa', 'Zondo', 'Ndaba', 'Nene', 'Mlambo', 'Mashaba',
            'Ngwenya', 'Dlamini', 'Mbuyiseni', 'Buthelezi', 'Khathi', 'Mdluli', 'Mthiyane', 'Mhlongo', 'Ntshangase', 'Nkosi', 'Zuma', 'Moloi', 'Mabaso', 'Motaung', 'Molefe', 'Sithole', 'Mthethwa', 'Mashaba', 'Mabuza',
            'Maseko', 'Xaba', 'Mokwena', 'Naidoo', 'Reddy', 'Singh', 'Govender', 'Panday', 'Chetty', 'Naicker', 'Nair', 'Kumar', 'Pillai', 'Moodley', 'Munsamy', 'Nkosi', 'Mnguni', 'Vilakazi', 'Khumalo', 'Mthembu',
            'Mtshali', 'Ngubane', 'Sibanda', 'Ncube', 'Dube', 'Moyo', 'Zulu', 'Gumede', 'Ndlovu', 'Sithole', 'Mlambo', 'Mhlongo', 'Mkhwanazi', 'Mthiyane', 'Mthembu', 'Ntuli', 'Zondi', 'Cele', 'Majola', 'Mthembu',
            'Myeni', 'Langa', 'Zondo', 'Ndaba', 'Nene', 'Mlambo', 'Mashaba', 'Ngwenya', 'Dlamini', 'Mbuyiseni', 'Buthelezi', 'Khathi', 'Mdluli', 'Mthiyane', 'Mhlongo', 'Ntshangase', 'Nkosi', 'Zuma', 'Moloi', 'Mabaso',
            'Motaung', 'Molefe', 'Sithole', 'Mthethwa', 'Mashaba', 'Mabuza', 'Maseko', 'Xaba', 'Mokwena', 'Naidoo', 'Reddy', 'Singh', 'Govender', 'Panday', 'Chetty', 'Naicker', 'Nair', 'Kumar', 'Pillai', 'Moodley',
            'Munsamy', 'Nkosi', 'Mnguni', 'Vilakazi', 'Khumalo', 'Mthembu', 'Mtshali', 'Ngubane', 'Sibanda', 'Ncube', 'Dube', 'Moyo', 'Zulu', 'Gumede', 'Ndlovu', 'Sithole', 'Mlambo', 'Mhlongo', 'Mkhwanazi', 'Mthiyane',
            'Mthembu', 'Ntuli', 'Zondi', 'Cele', 'Majola', 'Mthembu', 'Myeni', 'Langa', 'Zondo', 'Ndaba', 'Nene', 'Mlambo', 'Mashaba', 'Ngwenya', 'Dlamini', 'Mbuyiseni', 'Buthelezi', 'Khathi', 'Mdluli', 'Mthiyane',
            'Mhlongo', 'Ntshangase', 'Nkosi', 'Zuma', 'Moloi', 'Mabaso', 'Motaung', 'Molefe', 'Sithole', 'Mthethwa', 'Mashaba', 'Mabuza', 'Maseko', 'Xaba', 'Mokwena', 'Naidoo', 'Reddy', 'Singh', 'Govender', 'Panday',
            'Chetty', 'Naicker', 'Nair', 'Kumar', 'Pillai', 'Moodley', 'Munsamy', 'Nkosi', 'Mnguni', 'Vilakazi', 'Khumalo', 'Mthembu', 'Mtshali', 'Ngubane', 'Sibanda', 'Ncube', 'Dube', 'Moyo', 'Zulu', 'Gumede',
            'Ndlovu', 'Sithole', 'Mlambo', 'Mhlongo', 'Mkhwanazi', 'Mthiyane', 'Mthembu', 'Ntuli', 'Zondi', 'Cele', 'Majola', 'Mthembu', 'Myeni', 'Langa', 'Zondo', 'Ndaba', 'Nene', 'Mlambo', 'Mashaba', 'Ngwenya',
            'Dlamini', 'Mbuyiseni', 'Buthelezi', 'Khathi', 'Mdluli', 'Mthiyane', 'Mhlongo', 'Ntshangase'
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
        'Zoulou', 'Xhosa', 'Afrikaner', 'Basotho', 'Bapedi', 'Venda', 'Tswana', 'Ndebele', 'Swazi', 'Khoisan',
        'San', 'Tsonga', 'Tshivenda', 'Sotho', 'Zoulou', 'Xhosa', 'Afrikaner', 'Basotho', 'Bapedi', 'Venda',
        'Tswana', 'Ndebele', 'Swazi', 'Khoisan', 'San', 'Tsonga', 'Tshivenda', 'Sotho', 'Zoulou', 'Xhosa',
        'Afrikaner', 'Basotho', 'Bapedi', 'Venda', 'Tswana', 'Ndebele', 'Swazi', 'Khoisan', 'San', 'Tsonga',
        'Tshivenda', 'Sotho', 'Zoulou', 'Xhosa', 'Afrikaner', 'Basotho', 'Bapedi', 'Venda', 'Tswana', 'Ndebele',
        'Swazi', 'Khoisan', 'San', 'Tsonga', 'Tshivenda', 'Sotho', 'Zoulou', 'Xhosa', 'Afrikaner', 'Basotho',
        'Bapedi', 'Venda', 'Tswana', 'Ndebele', 'Swazi', 'Khoisan', 'San', 'Tsonga', 'Tshivenda', 'Sotho',
        'Zoulou', 'Xhosa', 'Afrikaner', 'Basotho', 'Bapedi', 'Venda', 'Tswana', 'Ndebele', 'Swazi', 'Khoisan',
        'San', 'Tsonga', 'Tshivenda', 'Sotho', 'Zoulou', 'Xhosa', 'Afrikaner', 'Basotho', 'Bapedi', 'Venda',
        'Tswana', 'Ndebele', 'Swazi', 'Khoisan', 'San', 'Tsonga', 'Tshivenda', 'Sotho', 'Zoulou', 'Xhosa',
        'Afrikaner', 'Basotho', 'Bapedi', 'Venda', 'Tswana', 'Ndebele', 'Swazi', 'Khoisan', 'San', 'Tsonga',
        'Tshivenda', 'Sotho', 'Zoulou', 'Xhosa', 'Afrikaner', 'Basotho', 'Bapedi', 'Venda', 'Tswana', 'Ndebele',
        'Swazi', 'Khoisan', 'San', 'Tsonga', 'Tshivenda', 'Sotho', 'Zoulou', 'Xhosa', 'Afrikaner', 'Basotho',
        'Bapedi', 'Venda', 'Tswana', 'Ndebele', 'Swazi', 'Khoisan', 'San', 'Tsonga', 'Tshivenda', 'Sotho',
        'Zoulou', 'Xhosa', 'Afrikaner', 'Basotho', 'Bapedi', 'Venda', 'Tswana', 'Ndebele', 'Swazi', 'Khoisan',
        'San', 'Tsonga', 'Tshivenda', 'Sotho', 'Zoulou', 'Xhosa', 'Afrikaner', 'Basotho', 'Bapedi', 'Venda',
        'Tswana', 'Ndebele', 'Swazi', 'Khoisan', 'San', 'Tsonga', 'Tshivenda', 'Sotho', 'Zoulou', 'Xhosa',
        'Afrikaner', 'Basotho', 'Bapedi', 'Venda', 'Tswana', 'Ndebele', 'Swazi', 'Khoisan', 'San', 'Tsonga',
        'Tshivenda', 'Sotho', 'Zoulou', 'Xhosa', 'Afrikaner', 'Basotho', 'Bapedi', 'Venda', 'Tswana', 'Ndebele',
        'Swazi', 'Khoisan', 'San', 'Tsonga', 'Tshivenda', 'Sotho', 'Zoulou', 'Xhosa', 'Afrikaner', 'Basotho',
        'Bapedi', 'Venda', 'Tswana', 'Ndebele', 'Swazi', 'Khoisan', 'San', 'Tsonga', 'Tshivenda', 'Sotho',
        'Zoulou', 'Xhosa', 'Afrikaner', 'Basotho', 'Bapedi', 'Venda', 'Tswana', 'Ndebele', 'Swazi', 'Khoisan',
        'San', 'Tsonga', 'Tshivenda', 'Sotho', 'Zoulou', 'Xhosa', 'Afrikaner', 'Basotho', 'Bapedi', 'Venda',
        'Tswana', 'Ndebele', 'Swazi', 'Khoisan', 'San', 'Tsonga', 'Tshivenda', 'Sotho', 'Zoulou', 'Xhosa',
        'Afrikaner', 'Basotho', 'Bapedi', 'Venda', 'Tswana', 'Ndebele', 'Swazi', 'Khoisan', 'San', 'Tsonga',
        'Tshivenda', 'Sotho', 'Zoulou', 'Xhosa', 'Afrikaner', 'Basotho', 'Bapedi', 'Venda', 'Tswana', 'Ndebele',
        'Swazi', 'Khoisan', 'San', 'Tsonga', 'Tshivenda', 'Sotho', 'Zoulou', 'Xhosa', 'Afrikaner', 'Basotho',
        'Bapedi', 'Venda', 'Tswana', 'Ndebele', 'Swazi', 'Khoisan', 'San', 'Tsonga', 'Tshivenda', 'Sotho',
        'Zoulou', 'Xhosa', 'Afrikaner', 'Basotho', 'Bapedi', 'Venda', 'Tswana', 'Ndebele', 'Swazi', 'Khoisan',
        'San', 'Tsonga', 'Tshivenda', 'Sotho'
    ];

    $randomIndex = rand(0, count($origins) - 1);
    return $origins[$randomIndex];
}

function region()
{
    $regions = [
        "Gauteng", "KwaZulu-Natal", "Western Cape", "Eastern Cape", "Mpumalanga", "Limpopo", "North West", "Free State", "Northern Cape"
    ];

    $randomRegion = $regions[array_rand($regions)];
    return $randomRegion;
}

function city($region)
{
    $villesParRegion = [
        "Gauteng" => ["Johannesburg", "Pretoria", "Soweto"],
        "KwaZulu-Natal" => ["Durban", "Pietermaritzburg", "Newcastle"],
        "Western Cape" => ["Cape Town", "Stellenbosch", "George"],
        "Eastern Cape" => ["Port Elizabeth", "East London", "Uitenhage"],
        "Mpumalanga" => ["Nelspruit", "Mbombela", "Witbank"],
        "Limpopo" => ["Polokwane", "Mokopane", "Thohoyandou"],
        "North West" => ["Mahikeng", "Rustenburg", "Potchefstroom"],
        "Free State" => ["Bloemfontein", "Welkom", "Mangaung"],
        "Northern Cape" => ["Kimberley", "Upington", "Springbok"]
    ];

    $villeAleatoire = $villesParRegion[$region][array_rand($villesParRegion[$region])];
    return $villeAleatoire;
}

public function cities()
{
    $villes = [
        "Johannesburg", "Pretoria", "Soweto", "Durban", "Pietermaritzburg", "Newcastle", "Cape Town", "Stellenbosch", "George",
        "Port Elizabeth", "East London", "Uitenhage", "Nelspruit", "Mbombela", "Witbank", "Polokwane", "Mokopane", "Thohoyandou",
        "Mahikeng", "Rustenburg", "Potchefstroom", "Bloemfontein", "Welkom", "Mangaung", "Kimberley", "Upington", "Springbok"
    ];

    return $villes[array_rand($villes)];
}

function coordinates()
{
    // Limites géographiques de l'Afrique du Sud (latitude et longitude)
    $limites = [
        'nord' => -22.1254,   // Latitude Nord
        'sud' => -34.8333,     // Latitude Sud
        'ouest' => 16.4910,    // Longitude Ouest
        'est' => 32.8922       // Longitude Est
    ];

    // Génération de coordonnées aléatoires dans les limites de l'Afrique du Sud
    $latitude = $limites['sud'] + mt_rand() / mt_getrandmax() * ($limites['nord'] - $limites['sud']);
    $longitude = $limites['ouest'] + mt_rand() / mt_getrandmax() * ($limites['est'] - $limites['ouest']);

    return ['latitude' => $latitude, 'longitude' => $longitude];
}
 

public function address()
{
    $cities = [
        'Johannesburg' => [
            'Sandton', 'Rosebank', 'Melville', 'Maboneng', 'Soweto', 'Braamfontein', 'Randburg', 'Parkhurst', 'Auckland Park', 'Orlando',
        ],
        'Cape Town' => [
            'Sea Point', 'Green Point', 'Bo-Kaap', 'Observatory', 'Woodstock', 'Stellenbosch', 'Muizenberg', 'Hout Bay', 'Clifton', 'Constantia',
        ],
        'Durban' => [
            'Umhlanga Rocks', 'Berea', 'Morningside', 'Glenwood', 'Musgrave', 'Westville', 'Durban North', 'Amanzimtoti', 'Bluff', 'Umdloti Beach',
        ],
        'Pretoria' => [
            'Arcadia', 'Hatfield', 'Brooklyn', 'Sunnyside', 'Menlo Park', 'Lynnwood', 'Waterkloof', 'Centurion', 'Montana', 'Moreleta Park',
        ],
        'Port Elizabeth' => [
            'Walmer', 'Summerstrand', 'Mill Park', 'Central', 'Newton Park', 'Kabega Park', 'Humerail', 'Mount Croix', 'Lorraine', 'Humewood',
        ],
        'Bloemfontein' => [
            'Brandwag', 'Westdene', 'Universitas', 'Langenhoven Park', 'Willows', 'Bayswater', 'Heuwelsig', 'Arboretum', 'Navalsig', 'Fleurdal',
        ],
        'Nelspruit' => [
            'West Acres', 'Sonheuwel', 'Nelsville', 'Stonehenge', 'Mbombela', 'KaBokweni', 'Riverside', 'Vintonia', 'Steiltes', 'Mataffin',
        ],
        'Polokwane' => [
            'Flora Park', 'Ivy Park', 'Bendor', 'Welgelegen', 'Ladanna', 'Moregloed', 'Ster Park', 'Fauna Park', 'Marula Heights', 'Thornhill',
        ],
        'Kimberley' => [
            'Belgravia', 'Hillcrest', 'Monument Heights', 'Herlear', 'Royldene', 'New Park', 'Rhodesdene', 'De Beers', 'Memorial Road Area', 'Ernestville',
        ],
        'East London' => [
            'Quigney', 'Vincent', 'Berea', 'Selborne', 'Southernwood', 'Amalinda', 'Sunnyridge', 'Gonubie', 'Nahoon', 'Cambridge',
        ],
    ];

    $randomCity = array_rand($cities);

    // Choisissez un quartier aléatoire dans la ville
    $randomNeighborhood = $cities[$randomCity][array_rand($cities[$randomCity])];

    return "$randomNeighborhood, $randomCity";
}    

public function phone()
{
    $prefixes = ['+27(0)60', '+27(0)61', '+27(0)62', '+27(0)63', '+27(0)64', '+27(0)65', '+27(0)66', '+27(0)67', '+27(0)68', '+27(0)69'];
    
    // Choisissez un préfixe téléphonique aléatoire parmi les indicatifs de réseau mobile en Afrique du Sud
    $randomPrefix = $prefixes[array_rand($prefixes)];
    
    // Générez les 7 derniers chiffres aléatoires
    $secondPart = '';
    for ($i = 0; $i < 7; $i++) {
        $secondPart .= rand(0, 9);
    }
    
    return $randomPrefix . $secondPart;
}

    
    public function email()
    {
        // Générez un nom d'utilisateur aléatoire, par exemple un prénom suivi d'un numéro
        $username = $this->last_name() . rand(1, 100);

        // Le suffixe de l'adresse e-mail
        $suffix = '@27.SA';

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
            'Safika', 'Barloworld', 'Naspers', 'Bidvest', 'Remgro', 'Sasol', 'Anglo American', 'Sanlam', 'Standard Bank', 'Old Mutual',
            'MTN Group', 'Shoprite Holdings', 'Vodacom Group', 'Tiger Brands', 'Aspen Pharmacare', 'Investec', 'Imperial Logistics', 'Mediclinic International', 'BHP', 'Gold Fields',
            'Sibanye-Stillwater', 'AngloGold Ashanti', 'Exxaro Resources', 'Sappi', 'Mr Price Group', 'Woolworths Holdings', 'Netcare', 'Telkom Group', 'Life Healthcare', 'Pick n Pay Stores',
            'Clicks Group', 'Truworths International', 'Adcock Ingram Holdings', 'RMB Holdings', 'Reinet Investments', 'Massmart Holdings', 'Redefine Properties', 'Remgro', 'Bidcorp', 'Growthpoint Properties',
            'Capitec Bank Holdings', 'Kumba Iron Ore', 'Barclays Africa Group', 'RMB Holdings', 'Reinet Investments', 'Massmart Holdings', 'Redefine Properties', 'Bidcorp', 'Growthpoint Properties', 'Capitec Bank Holdings',
            'Kumba Iron Ore', 'Barclays Africa Group', 'Telkom Group', 'Nampak', 'Impala Platinum Holdings', 'Sanlam', 'Steinhoff International Holdings', 'Exxaro Resources', 'Netcare', 'Hosken Consolidated Investments',
            'Coronation Fund Managers', 'Murray & Roberts Holdings', 'AVI', 'Liberty Holdings', 'Reunert', 'Pioneer Foods Group', 'Exxaro Resources', 'RMB Holdings', 'Mondi', 'Shoprite Holdings', 'Anglo American Platinum',
            'Datatec', 'Vukile Property Fund', 'Redefine Properties', 'Woolworths Holdings', 'Sasol', 'BHP', 'Barloworld', 'Sanlam', 'Bidvest', 'Remgro', 'Sappi', 'Anglo American Platinum', 'Tiger Brands', 'Nedbank Group'
        ];
    
        $suffixes = [
            'Ltd', 'PLC', 'LLC', 'Limited', 'Holdings', 'Group', 'Corp', 'Corporation', 'Services', 'Enterprises', 'Solutions', 'Global', 'Ventures', 'Industries', 'Integrators', 'Associates', 'Incorporated',
            'Partners', 'Resources', 'Technologies', 'Logistics', 'Management', 'Consulting', 'Enterprises', 'Solutions', 'Group', 'Industries', 'Systems', 'Enterprises', 'Holdings', 'Development', 'Foundation'
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
        $platsSouthAfricains = [
            "Bunny Chow",
            "Bobotie",
            "Boerewors",
            "Sosaties",
            "Frikkadel",
            "Malva Pudding",
            "Chakalaka",
            "Samosa",
            "Biltong",
            "Droëwors",
            "Melktert",
            "Potjiekos",
            "Koeksisters",
            "Boerewors Roll",
            "Cape Malay Curry",
            "Samoosa",
            "Umngqusho",
            "Pickled Fish",
            "Waterblommetjie Bredie",
            "Karoo Lamb",
            "Crayfish",
            "Koeksisters",
            "Peppermint Crisp Tart",
            "Braaibroodjies",
            "Amarula Don Pedro",
            "Bokkoms",
            "Milk Tart",
            "Smiley",
            "Chutney",
            "Potbrood",
            "Tomato Bredie",
            "Boontjiesop",
            "Ostrich",
            "Cape Salmon",
            "Amagwinya",
            "Geelrys",
            "Monkey Gland Sauce",
            "Pap en Sous",
            "Snoek",
            "Vetkoek",
            "Babotie Rolls",
            "Pap and Wors",
            "Fish and Chips",
            "Durban Bunny Chow",
            "Gatsby Sandwich"
        ];
    
        // Sélection aléatoire d'un nom de plat sud-africain
        $nomPlat = $platsSouthAfricains[array_rand($platsSouthAfricains)];
    
        return $nomPlat;
    }
    
    
}
