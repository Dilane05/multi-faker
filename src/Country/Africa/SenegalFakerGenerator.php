<?php

namespace Cupidontech\MultiFaker\Country\Africa;

use Illuminate\Support\Str;
use Faker\Generator as BaseGenerator;

class SenegalFakerGenerator extends BaseGenerator
{
    // Implémentez les méthodes de génération spécifiques au senegal ici

    public function first_name()
    {
        $firstNames = [
        'Aissatou', 'Astou', 'Bineta', 'Codou', 'Daba', 'Diarry', 'Diouma', 'Fatou', 'Fatoumata', 'Khadidiatou', 'Kine', 'Lissa', 'Mame', 'Ndeye', 'Nene',
        'Nogaye', 'Ramatoulaye', 'Sokhna', 'Yacine', 'Ablaye', 'Abou', 'Amadou', 'Assane', 'Babacar', 'Boubacar', 'Cheikh', 'El Hadji', 'Ibrahima', 'Issa', 'Mamadou',
        'Mor', 'Moussa', 'Ousmane', 'Pape', 'Samba', 'Serigne', 'Seydou', 'Souleymane', 'Tafsir', 'Thierno', 'Adjoua', 'Aliou', 'Ami', 'Amy', 'Anta', 'Babou', 'Bamba',
        'Binta', 'Birane', 'Birima', 'Bouba', 'Cire', 'Coumba', 'Doudou', 'Fama', 'Farba', 'Fary', 'Fode', 'Gora', 'Gorgui', 'Ibou', 'Idrissa', 'Kane', 'Khady', 'Lamine',
        'Latyr', 'Madické', 'Mame Diarra', 'Mame Khady', 'Mamoudou', 'Mansour', 'Maram', 'Mariama', 'Matar', 'Mbacké', 'Mbagnick', 'Mbaye', 'Mignane', 'Mody', 'Momar',
        'Mouhamadou', 'Nafissatou', 'Ndèye', 'Ndiaga', 'Ndongo', 'Ngor', 'Omar', 'Ousseynou', 'Penda', 'Rokhaya', 'Sadio', 'Sagar', 'Salimata', 'Saliou', 'Samba', 'Seynabou',
        'Sokhna', 'Souleye', 'Tafsir', 'Tamsir', 'Thierno', 'Yacine', 'Yandé', 'Yaram', 'Yaye', 'Youssou', 'Zenabou', 'Alassane', 'Assane', 'Babacar', 'Birama', 'Cheikh',
        'Djibril', 'El Hadji', 'Ibrahima', 'Issa', 'Lamine', 'Mamadou', 'Mbaye', 'Mody', 'Mouhamed', 'Ousmane', 'Pape', 'Samba', 'Serigne', 'Seydou', 'Souleymane', 'Tafsir',
        'Thierno', 'Adama', 'Awa', 'Binta', 'Coumba', 'Fatou', 'Khady', 'Maimouna', 'Ndeye', 'Rokhaya', 'Sokhna', 'Aïda', 'Bineta', 'Codou', 'Nogaye', 'Maty', 'Ablaye', 'Amadou',
        'Cheikh', 'Doudou', 'Ibou', 'Mamoudou', 'Mbacké', 'Moussa', 'Ndiaga', 'Ndongo', 'Omar', 'Samba', 'Tafsir', 'Thierno', 'Yacine', 'Assane', 'Babacar', 'Birama', 'Djibril',
        'Ibrahima', 'Issa', 'Lamine', 'Mamadou', 'Mbaye', 'Mody', 'Mouhamed', 'Ousmane', 'Pape', 'Samba', 'Serigne', 'Seydou', 'Souleymane', 'Tafsir', 'Thierno', 'Adama', 'Awa',
        'Binta', 'Coumba', 'Fatou', 'Khady', 'Maimouna', 'Ndeye', 'Rokhaya', 'Sokhna', 'Aïda', 'Bineta', 'Codou', 'Nogaye', 'Maty', 'Ablaye', 'Amadou', 'Cheikh', 'Doudou', 'Ibou',
        'Mamoudou', 'Mbacké', 'Moussa', 'Ndiaga', 'Ndongo', 'Omar', 'Samba', 'Tafsir', 'Thierno', 'Yacine', 'Aissatou', 'Astou', 'Bineta', 'Codou', 'Daba', 'Diarry', 'Diouma',
        'Fatou', 'Fatoumata', 'Khadidiatou', 'Kine', 'Lissa', 'Mame', 'Ndeye', 'Nene', 'Nogaye', 'Ramatoulaye', 'Sokhna', 'Yacine', 'Ablaye', 'Abou', 'Amadou', 'Assane', 'Babacar',
        'Boubacar', 'Cheikh', 'El Hadji', 'Ibrahima', 'Issa', 'Mamadou', 'Mor', 'Moussa', 'Ousmane', 'Pape', 'Samba', 'Serigne', 'Seydou', 'Souleymane', 'Tafsir', 'Thierno', 'Adjoua',
        'Aliou', 'Ami', 'Amy', 'Anta', 'Babou', 'Bamba', 'Binta', 'Birane', 'Birima', 'Bouba', 'Cire', 'Coumba', 'Doudou', 'Fama', 'Farba', 'Fary', 'Fode', 'Gora', 'Gorgui', 'Ibou',
        'Idrissa', 'Kane', 'Khady', 'Lamine', 'Latyr', 'Madické', 'Mame Diarra', 'Mame Khady', 'Mamoudou', 'Mansour', 'Maram', 'Mariama', 'Matar', 'Mbacké', 'Mbagnick', 'Mbaye', 'Mignane',
        'Mody', 'Momar', 'Mouhamadou', 'Nafissatou', 'Ndèye', 'Ndiaga', 'Ndongo', 'Ngor', 'Omar', 'Ousseynou', 'Penda', 'Rokhaya', 'Sadio', 'Sagar', 'Salimata', 'Saliou', 'Samba', 'Seynabou',
        'Sokhna', 'Souleye', 'Tafsir', 'Tamsir', 'Thierno', 'Yacine', 'Yandé', 'Yaram', 'Yaye', 'Youssou', 'Zenabou'
        ];

        $randomIndex = rand(0, count($firstNames) - 1);
        return $firstNames[$randomIndex];
    }

    public function last_name()
    {
        $lastNames = [
            'Diop', 'Sow', 'Diallo', 'Ndiaye', 'Fall', 'Cisse', 'Gueye', 'Faye', 'Ba', 'Kane',
        'Niang', 'Gaye', 'Diouf', 'Niang', 'Dione', 'Seck', 'Sarr', 'Ndoye', 'Ndiaye', 'Thiam',
        'Ndao', 'Dramé', 'Ndiaye', 'Kante', 'Camara', 'Ndiaye', 'Dabo', 'Mbodj', 'Sambou', 'Sagna',
        'Ndiaye', 'Diagne', 'Ndiaye', 'Sane', 'Sagna', 'Ndiaye', 'Traoré', 'Ndiaye', 'Mbengue', 'Cissé',
        'Sylla', 'Sow', 'Diagne', 'Thiam', 'Diallo', 'Diop', 'Faye', 'Ndiaye', 'Ndiaye', 'Kane',
        'Fall', 'Dione', 'Sene', 'Sow', 'Diallo', 'Ndiaye', 'Diouf', 'Niang', 'Gueye', 'Faye',
        'Ba', 'Sarr', 'Sow', 'Dramé', 'Diagne', 'Ndiaye', 'Diop', 'Sow', 'Diallo', 'Ndiaye',
        'Fall', 'Cisse', 'Gueye', 'Faye', 'Ba', 'Kane', 'Niang', 'Gaye', 'Diouf', 'Niang',
        'Dione', 'Seck', 'Sarr', 'Ndoye', 'Ndiaye', 'Thiam', 'Ndao', 'Dramé', 'Ndiaye', 'Kante',
        'Camara', 'Ndiaye', 'Dabo', 'Mbodj', 'Sambou', 'Sagna', 'Ndiaye', 'Diagne', 'Ndiaye', 'Sane',
        'Sagna', 'Ndiaye', 'Traoré', 'Ndiaye', 'Mbengue', 'Cissé', 'Sylla', 'Sow', 'Diagne', 'Thiam',
        'Diallo', 'Diop', 'Faye', 'Ndiaye', 'Ndiaye', 'Kane', 'Fall', 'Dione', 'Sene', 'Sow',
        'Diallo', 'Ndiaye', 'Diouf', 'Niang', 'Gueye', 'Faye', 'Ba', 'Sarr', 'Sow', 'Dramé',
        'Diagne', 'Ndiaye', 'Diop', 'Sow', 'Diallo', 'Ndiaye', 'Fall', 'Cisse', 'Gueye', 'Faye',
        'Ba', 'Kane', 'Niang', 'Gaye', 'Diouf', 'Niang', 'Dione', 'Seck', 'Sarr', 'Ndoye',
        'Ndiaye', 'Thiam', 'Ndao', 'Dramé', 'Ndiaye', 'Kante', 'Camara', 'Ndiaye', 'Dabo', 'Mbodj',
        'Sambou', 'Sagna', 'Ndiaye', 'Diagne', 'Ndiaye', 'Sane', 'Sagna', 'Ndiaye', 'Traoré', 'Ndiaye',
        'Mbengue', 'Cissé', 'Sylla', 'Sow', 'Diagne', 'Thiam', 'Diallo', 'Diop', 'Faye', 'Ndiaye',
        'Ndiaye', 'Kane', 'Fall', 'Dione', 'Sene', 'Sow', 'Diallo', 'Ndiaye', 'Diouf', 'Niang',
        'Gueye', 'Faye', 'Ba', 'Sarr', 'Sow', 'Dramé', 'Diagne', 'Ndiaye', 'Diop', 'Sow', 'Diallo',
        'Ndiaye', 'Fall', 'Cisse', 'Gueye', 'Faye', 'Ba', 'Kane', 'Niang', 'Gaye', 'Diouf',
        'Niang', 'Dione', 'Seck', 'Sarr', 'Ndoye', 'Ndiaye', 'Thiam', 'Ndao', 'Dramé', 'Ndiaye',
        'Kante', 'Camara', 'Ndiaye', 'Dabo', 'Mbodj', 'Sambou', 'Sagna', 'Ndiaye', 'Diagne', 'Ndiaye',
        'Sane', 'Sagna', 'Ndiaye', 'Traoré', 'Ndiaye', 'Mbengue', 'Cissé', 'Sylla', 'Sow', 'Diagne',
        'Thiam', 'Diallo', 'Diop', 'Faye', 'Ndiaye', 'Ndiaye', 'Kane', 'Fall', 'Dione', 'Sene',
        'Sow', 'Diallo', 'Ndiaye', 'Diouf', 'Niang', 'Gueye', 'Faye', 'Ba', 'Sarr', 'Sow',
        'Dramé', 'Diagne', 'Ndiaye', 'Diop', 'Sow', 'Diallo', 'Ndiaye', 'Fall', 'Cisse', 'Gueye',
        'Faye', 'Ba', 'Kane', 'Niang', 'Gaye', 'Diouf', 'Niang', 'Dione', 'Seck', 'Sarr', 'Ndoye',
        'Ndiaye', 'Thiam', 'Ndao', 'Dramé', 'Ndiaye', 'Kante', 'Camara', 'Ndiaye', 'Dabo', 'Mbodj',
        'Sambou', 'Sagna', 'Ndiaye', 'Diagne', 'Ndiaye', 'Sane', 'Sagna', 'Ndiaye', 'Traoré', 'Ndiaye',
        'Mbengue', 'Cissé', 'Sylla', 'Sow', 'Diagne', 'Thiam', 'Diallo', 'Diop', 'Faye', 'Ndiaye',
        'Ndiaye', 'Kane', 'Fall', 'Dione', 'Sene', 'Sow', 'Diallo', 'Ndiaye', 'Diouf', 'Niang',
        'Gueye', 'Faye', 'Ba', 'Sarr', 'Sow', 'Dramé', 'Diagne', 'Ndiaye', 'Diop', 'Sow', 'Diallo',
        'Ndiaye', 'Fall', 'Cisse', 'Gueye', 'Faye', 'Ba', 'Kane', 'Niang', 'Gaye', 'Diouf', 'Niang',
        'Dione', 'Seck', 'Sarr', 'Ndoye', 'Ndiaye', 'Thiam', 'Ndao', 'Dramé', 'Ndiaye', 'Kante', 'Camara',
        'Ndiaye', 'Dabo', 'Mbodj', 'Sambou', 'Sagna', 'Ndiaye', 'Diagne', 'Ndiaye', 'Sane', 'Sagna',
        'Ndiaye', 'Traoré', 'Ndiaye', 'Mbengue', 'Cissé', 'Sylla', 'Sow', 'Diagne', 'Thiam', 'Diallo',
        'Diop', 'Faye', 'Ndiaye', 'Ndiaye', 'Kane', 'Fall', 'Dione', 'Sene', 'Sow', 'Diallo', 'Ndiaye',
        'Diouf', 'Niang', 'Gueye', 'Faye', 'Ba', 'Sarr', 'Sow', 'Dramé', 'Diagne', 'Ndiaye', 'Diop',
        'Sow', 'Diallo', 'Ndiaye', 'Fall', 'Cisse', 'Gueye', 'Faye', 'Ba', 'Kane', 'Niang', 'Gaye',
        'Diouf', 'Niang', 'Dione', 'Seck', 'Sarr', 'Ndoye', 'Ndiaye', 'Thiam', 'Ndao', 'Dramé', 'Ndiaye',
        'Kante', 'Camara', 'Ndiaye', 'Dabo', 'Mbodj', 'Sambou', 'Sagna', 'Ndiaye', 'Diagne', 'Ndiaye', 'Sane',
        'Sagna', 'Ndiaye', 'Traoré', 'Ndiaye', 'Mbengue', 'Cissé', 'Sylla', 'Sow', 'Diagne', 'Thiam', 'Diallo',
        'Diop', 'Faye', 'Ndiaye', 'Ndiaye', 'Kane', 'Fall', 'Dione', 'Sene', 'Sow', 'Diallo', 'Ndiaye',
        'Diouf', 'Niang', 'Gueye', 'Faye', 'Ba', 'Sarr', 'Sow', 'Dramé', 'Diagne', 'Ndiaye', 'Diop', 'Sow',
        'Diallo', 'Ndiaye', 'Fall', 'Cisse', 'Gueye', 'Faye', 'Ba', 'Kane', 'Niang', 'Gaye', 'Diouf', 'Niang',
        'Dione', 'Seck', 'Sarr', 'Ndoye', 'Ndiaye', 'Thiam', 'Ndao', 'Dramé', 'Ndiaye', 'Kante', 'Camara', 'Ndiaye',
        'Dabo', 'Mbodj', 'Sambou', 'Sagna', 'Ndiaye', 'Diagne', 'Ndiaye', 'Sane', 'Sagna', 'Ndiaye', 'Traoré', 'Ndiaye',
        'Mbengue', 'Cissé', 'Sylla', 'Sow', 'Diagne', 'Thiam', 'Diallo', 'Diop', 'Faye', 'Ndiaye', 'Ndiaye', 'Kane', 'Fall',
        'Dione', 'Sene', 'Sow', 'Diallo', 'Ndiaye', 'Diouf', 'Niang', 'Gueye', 'Faye', 'Ba', 'Sarr', 'Sow', 'Dramé', 'Diagne',
        'Ndiaye', 'Diop', 'Sow', 'Diallo', 'Ndiaye', 'Fall', 'Cisse', 'Gueye', 'Faye', 'Ba', 'Kane', 'Niang', 'Gaye', 'Diouf',
        'Niang', 'Dione', 'Seck', 'Sarr', 'Ndoye', 'Ndiaye', 'Thiam', 'Ndao', 'Dramé', 'Ndiaye', 'Kante', 'Camara', 'Ndiaye', 'Dabo',
        'Mbodj', 'Sambou', 'Sagna', 'Ndiaye', 'Diagne', 'Ndiaye', 'Sane', 'Sagna', 'Ndiaye', 'Traoré', 'Ndiaye', 'Mbengue', 'Cissé',
        'Sylla', 'Sow', 'Diagne', 'Thiam', 'Diallo', 'Diop', 'Faye', 'Ndiaye', 'Ndiaye', 'Kane', 'Fall', 'Dione', 'Sene', 'Sow', 'Diallo',
        'Ndiaye', 'Diouf', 'Niang', 'Gueye', 'Faye', 'Ba', 'Sarr', 'Sow', 'Dramé', 'Diagne', 'Ndiaye', 'Diop', 'Sow', 'Diallo', 'Ndiaye',
        'Fall', 'Cisse', 'Gueye', 'Faye', 'Ba', 'Kane', 'Niang', 'Gaye', 'Diouf', 'Niang', 'Dione', 'Seck', 'Sarr', 'Ndoye', 'Ndiaye', 'Thiam',
        'Ndao', 'Dramé', 'Ndiaye', 'Kante', 'Camara', 'Ndiaye', 'Dabo', 'Mbodj', 'Sambou', 'Sagna', 'Ndiaye', 'Diagne', 'Ndiaye', 'Sane', 'Sagna',
        'Ndiaye', 'Traoré', 'Ndiaye', 'Mbengue', 'Cissé', 'Sylla', 'Sow', 'Diagne', 'Thiam', 'Diallo', 'Diop', 'Faye', 'Ndiaye', 'Ndiaye', 'Kane',
        'Fall', 'Dione', 'Sene', 'Sow', 'Diallo', 'Ndiaye', 'Diouf', 'Niang', 'Gueye', 'Faye', 'Ba', 'Sarr', 'Sow', 'Dramé', 'Diagne', 'Ndiaye',
        'Diop', 'Sow', 'Diallo', 'Ndiaye', 'Fall', 'Cisse', 'Gueye', 'Faye', 'Ba', 'Kane', 'Niang', 'Gaye', 'Diouf', 'Niang', 'Dione', 'Seck', 'Sarr',
        'Ndoye', 'Ndiaye', 'Thiam'
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
        'Sérère', 'Wolof', 'Pulaar', 'Mandinka', 'Diola', 'Soninké', 'Bambara', 'Toucouleur', 'Lebou', 'Balante',
        'Manjaque', 'Mankanya', 'Bassari', 'Bedik', 'Fula', 'Jola', 'Safiné', 'Sarakhollé', 'Serer', 'Sofa', 'Soussou',
        'Laalaa', 'Niominka', 'Sérèr-Nones', 'Djola-Fonyi', 'Pakhys', 'Badinka', 'Bagnoun', 'Yalunka', 'Dyola', 'Foni', 'Fulup',
        'Fulfulde', 'Halpulaar', 'Kuwaataay', 'Laeli', 'Mandjak', 'Mandjak-Bañoun', 'Manjago', 'Mankanya', 'Pulaar-Fulfulde', 'Fula-Pulaar',
        'Soninke', 'Susiya', 'Pular', 'Fulakunda', 'Karoninka', 'Badyara', 'Wolof-Judal', 'Wolofal', 'Pulhax', 'Aku',
        'Serer-Sine', 'Serer-Wolof', 'Serer-Ndut', 'Serer-Palor', 'Serer-Laalaa', 'Serer-Noon', 'Serer-Safene', 'Serer-Safene', 'Serer-Logone', 'Serer-Siin',
        'Serer-Soxe', 'Serer-Tokolor', 'Serer-Truef', 'Serer-Waro', 'Serer-Kaabu', 'Serer-Kajoor', 'Serer-Saroo', 'Serer-Tukulor', 'Serer-Diomani', 'Serer-Kiikuyu',
        'Serer-Kuwaa', 'Serer-Mboona', 'Serer-Ngel', 'Serer-Siin', 'Serer-Safene', 'Serer-Logone', 'Serer-Siin', 'Serer-Soxe', 'Serer-Tokolor', 'Serer-Truef',
        'Serer-Waro', 'Serer-Kaabu', 'Serer-Kajoor', 'Serer-Saroo', 'Serer-Tukulor', 'Serer-Diomani', 'Serer-Kiikuyu', 'Serer-Kuwaa', 'Serer-Mboona', 'Serer-Ngel',
        'Serer-Ndut', 'Serer-Palor', 'Serer-Laalaa', 'Serer-Noon', 'Serer-Safene', 'Serer-Safene', 'Serer-Logone', 'Serer-Siin', 'Serer-Soxe', 'Serer-Tokolor',
        'Serer-Truef', 'Serer-Waro', 'Serer-Kaabu', 'Serer-Kajoor', 'Serer-Saroo', 'Serer-Tukulor', 'Serer-Diomani', 'Serer-Kiikuyu', 'Serer-Kuwaa', 'Serer-Mboona',
        'Serer-Ngel'
        ];

        $randomIndex = rand(0, count($origins) - 1);
        return $origins[$randomIndex];
    }

    function region()
    {
        $regions = [
            "Dakar", "Diourbel", "Fatick", "Kaffrine", "Kaolack", "Kédougou", "Kolda", "Louga", "Matam", "Saint-Louis", "Sédhiou", "Tambacounda", "Thiès", "Ziguinchor"
        ];

        $regionAleatoire = $regions[array_rand($regions)];
        return $regionAleatoire;
    }

    function city($region)
    {
        $villesParRegion = [
            "Dakar" => ["Dakar", "Guédiawaye", "Pikine"],
            "Diourbel" => ["Diourbel", "Bambey", "Mbacké"],
            "Fatick" => ["Fatick", "Gossas", "Foundiougne"],
            "Kaffrine" => ["Kaffrine", "Birkilane", "Koungheul"],
            "Kaolack" => ["Kaolack", "M'bour", "Nioro du Rip"],
            "Kédougou" => ["Kédougou", "Salemata", "Saraya"],
            "Kolda" => ["Kolda", "Médina Yoro Foulah", "Vélingara"],
            "Louga" => ["Louga", "Kébémer", "Linguère"],
            "Matam" => ["Matam", "Kanel", "Ranérou"],
            "Saint-Louis" => ["Saint-Louis", "Dagana", "Podor"],
            "Sédhiou" => ["Sédhiou", "Bounkiling", "Goudomp"],
            "Tambacounda" => ["Tambacounda", "Goudiry", "Koumpentoum"],
            "Thiès" => ["Thiès", "Mbour", "Tivaouane"],
            "Ziguinchor" => ["Ziguinchor", "Bignona", "Oussouye"]
        ];

        $villeAleatoire = $villesParRegion[$region][array_rand($villesParRegion[$region])];
        return $villeAleatoire;
    }

    public function cities()
    {
        $villes = [
        "Dakar", "Guédiawaye", "Pikine", "Diourbel", "Bambey", "Mbacké", "Fatick", "Gossas", "Foundiougne",
        "Kaffrine", "Birkilane", "Koungheul", "Kaolack", "M'bour", "Nioro du Rip", "Kédougou", "Salemata", "Saraya",
        "Kolda", "Médina Yoro Foulah", "Vélingara", "Louga", "Kébémer", "Linguère", "Matam", "Kanel", "Ranérou",
        "Saint-Louis", "Dagana", "Podor", "Sédhiou", "Bounkiling", "Goudomp", "Tambacounda", "Goudiry", "Koumpentoum",
        "Thiès", "Mbour", "Tivaouane", "Ziguinchor", "Bignona", "Oussouye"
        ];

        return $villes[array_rand($villes)];
    }

    function coordinates()
    {
        // Limites géographiques du Sénégal (latitude et longitude)
        $limites = [
            'nord' => 16.6916,   // Latitude Nord
            'sud' => 12.3072,     // Latitude Sud
            'ouest' => -17.7777,   // Longitude Ouest
            'est' => -11.3457      // Longitude Est
        ];
    
        // Génération de coordonnées aléatoires dans les limites du Sénégal
        $latitude = $limites['sud'] + mt_rand() / mt_getrandmax() * ($limites['nord'] - $limites['sud']);
        $longitude = $limites['ouest'] + mt_rand() / mt_getrandmax() * ($limites['est'] - $limites['ouest']);
    
        return ['latitude' => $latitude, 'longitude' => $longitude];
    }
    

    public function address()
    {
        $cities = [
            'Dakar' => [
                'Plateau', 'Medina', 'Derkle', 'Yoff', 'Hann-Bel Air', 'Almadies', 'Mermoz-Sacre-Coeur', 'Ouakam', 'Fann-Point E-Amitié', 'Grand Dakar',
            ],
            'Thiès' => [
                'Médina Fall', 'Mbour', 'Pout', 'Kayar', 'Jaxaay-Parcelles', 'Ngoundiane', 'Khombole', 'Tassette', 'Fandène', 'Pout',
            ],
            'Kaolack' => [
                'Nioro', 'Guinguinéo', 'Mboss', 'Ndiaffate', 'Foundiougne', 'Keur Massar', 'Khelcom', 'Toubacouta', 'Kaël', 'Gossas',
            ],
            'Ziguinchor' => [
                'Boudody', 'Sindian', 'Niaguis', 'Mpack', 'Cap Skirring', 'Oussouye', 'Bignona', 'Djiroholo', 'Nyassia', 'Enampore',
            ],
            'Saint-Louis' => [
                'Gandon', 'Rao', 'Ndiébène Gandiole', 'Gandon', 'Ndiébène Gandiole', 'Mboro', 'Lompoul', 'Potou', 'Ndiago', 'Nguékokh',
            ],
            'Tambacounda' => [
                'Goudiry', 'Koumpentoum', 'Kédougou', 'Bakel', 'Niakhar', 'Kolda', 'Vélingara', 'Médina Yoro Foulah', 'Sédhiou', 'Saraya',
            ],
            'Louga' => [
                'Kébémer', 'Linguère', 'Kanel', 'Dahra', 'Gandiole', 'Ranérou', 'Mékhé', 'Kothiary', 'Mérina Dakhar', 'Coki',
            ],
            'Kolda' => [
                'Vélingara', 'Médina Yoro Foulah', 'Sédhiou', 'Saraya', 'Dialambéré', 'Mampatim', 'Ciribaya', 'Pakour', 'Bounkiling', 'Médina Wandifa',
            ],
            'Fatick' => [
                'Foundiougne', 'Diourbel', 'Sokone', 'Passy', 'Djirnda', 'Niakhar', 'Diakhao', 'Ndiob', 'Ngayokhème', 'Palmarin',
            ],
            'Kédougou' => [
                'Salemata', 'Saraya', 'Kéniaba', 'Djimbira', 'Mako', 'Salémata', 'Kéniaba', 'Dindéfelo', 'Kédougou', 'Sindia',
            ],
        ];
    
        $randomCity = array_rand($cities);
    
        // Choisissez un quartier aléatoire dans la ville
        $randomNeighborhood = $cities[$randomCity][array_rand($cities[$randomCity])];
    
        return "$randomNeighborhood, $randomCity";
    }
    

    public function phone()
    {
        $prefix = '+221'; // Préfixe téléphonique du Sénégal
    
        // Générez le premier chiffre aléatoire parmi 70, 76, 77, 78 ou 79 (indicatifs de réseau mobile au Sénégal)
        $firstDigit = '7' . [0, 6, 7, 8, 9][rand(0, 4)];
    
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
        $suffix = '@221.sen';

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

    public function food()
    {
        $platsSenegalais = [
            "Thiéboudienne",
            "Mafé",
            "Yassa Poulet",
            "Yassa Poisson",
            "Ceebu Jen",
            "Camarão à Brás",
            "Dibi",
            "Chere",
            "Boulettes de Poisson",
            "Dakhine",
            "Chawarma",
            "Chere",
            "Couscous Sénégalais",
            "Fonio",
            "Kaldou",
            "Thiéré au Poisson",
            "Thiéré à la Viande",
            "Lakh",
            "Lassi",
            "Jus de Bissap",
            "Thiakry",
            "Bouye",
            "Capitaine",
            "Daurade",
            "Bar aux Crevettes",
            "Bissap",
            "Bouye",
            "Détchi",
            "Domoda",
            "Gbofloto",
            "Jollof Rice",
            "Kédjenou de Poulet",
            "Laakh",
            "Lakh",
            "Maasa",
            "Ngalakh",
            "Poulet Yassa",
            "Sombe",
            "Thiakry",
            "Vermicelles au Lait",
            "Yassa Guinaar",
            "Yassa Guinaar Poisson",
            "Yassa Guinaar Poulet"
        ];
    
        // Sélection aléatoire d'un nom de plat sénégalais
        $nomPlat = $platsSenegalais[array_rand($platsSenegalais)];
    
        return $nomPlat;
    }
    
}
