<?php

require  './../vendor/autoload.php';

use App\Serpette\Serpette;

/*
ARRAY OF LOCALISATIONS =

3   =>   [0 => "1005811",1 => "Bordeaux",2 => "Bordeaux,Nouvelle-Aquitaine,France",3 =>"9069522",4 =>"FR",5 =>"City"],       
4   =>   [0 => "1006262",1 => "Le Havre",2 => "Le Havre,Normandy,France",3 =>"9068565",4 =>"FR",5 =>"City"],
5   =>   [0 => "1006235",1 => "Lille",2 => "Lille,Hauts-de-France,France",3 =>"9068898",4 =>"FR",5 =>"City"],
6   =>   [0 => "1006410",1 => "Lyon",2 => "Lyon,Auvergne-Rhone-Alpes,France",3 =>"9069525",4 =>"FR",5 =>"City"], 
7   =>   [0 => "1006356",1 => "Marseille",2 => "Marseille,Provence-Alpes-Cote d'Azur,France",3 =>"20332",4 =>"FR",5 =>"City"],
8   =>   [0 => "1006161",1 => "Montpellier",2 => "Montpellier,Occitanie,France",3 =>"9068897",4 =>"FR",5 =>"City"],
9   =>   [0 => "1006285",1 => "Nantes",2 => "Nantes,Pays de la Loire,France",3 =>"20329",4 =>"FR",5 =>"City"],
10  =>   [0 => "1006094",1 => "Paris",2 => "Paris,Paris,Ile-de-France,France",3 =>"20321",4 =>"FR",5 =>"City"],
11  =>   [0 => "1005876",1 => "Rennes",2 => "Rennes,Brittany,France",3 =>"20316",4 =>"FR",5 =>"City"],
12  =>   [0 => "1006268",1 => "Rouen",2 => "Rouen,Normandy,France",3 =>"9068565",4 =>"FR",5 =>"City"],
13  =>   [0 => "1006219",1 => "Toulouse",2 => "Toulouse,Occitanie,France",3 =>"9068897",4 =>"FR",5 =>"City"],

ARRAY OF SEARCH ENGINES

0   => 'google.be',
1   => 'google.ca',
2   => 'google.ch',
3   => 'google.com',
4   => 'google.de',
5   => 'google.en-uk',
6   => 'google.es',
7   => 'google.fr',
8   => 'google.it',
9   => 'google.nl',
10  => 'google.pt',

ARRAY OF LANGS

0   => 'fr',
1   => 'de',
2   => 'it',
3   => 'es',
4   => 'en-gb',
5   => 'en-usa',
6   => 'nl',
7   => 'pt',



ARRAY OF USER AGENTS
*/
$uas = [
    'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
    'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',
    'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36',
    'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0',
    'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_3) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.5 Safari/605.1.15',
    'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.116 Safari/537.36',
    'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.106 Safari/537.36',
    'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:72.0) Gecko/20100101 Firefox/72.0',
    'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36',
    'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36',
    'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
    'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:73.0) Gecko/20100101 Firefox/73.0',
    'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36',
    'Mozilla/5.0 (Windows NT 10.0; rv:68.0) Gecko/20100101 Firefox/68.0',
    'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36',
    'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.100 Safari/537.36',
    'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:73.0) Gecko/20100101 Firefox/73.0'
];

$ua = $uas[rand(0,16)];
$query = "Créer son site internet";

$search =  [
    "location"  => [
        "g"             =>  "1005805",
        "short_name"    =>  "Anglet",
        "long_name"     =>  "Anglet,Nouvelle-Aquitaine,France",
        "p"             =>  "9069522",
        "land"          =>  "FR",
        "type"          =>  "City",
        "key"           =>  null,
    ],
    "se"                => "google.fr",
    "lang"              => "fr",
    "ua"                => $ua,
    "query"             => $query,
    "request"           => null,
];

$bordeaux = [
    "location"  => [
        "g"             =>  "1005811",
        "short_name"    =>  "Bordeaux",
        "long_name"     =>  "Bordeaux,Nouvelle-Aquitaine,France",
        "p"             =>  "9069522",
        "land"          =>  "FR",
        "type"          =>  "City",
    ],
    "se"                => "google.fr",
    "lang"              => "fr",
    "ua"                => $ua,
    "query"             => $query,
];

$paris = [
    "location"  => [
        "g"             =>  "1006094",
        "short_name"    =>  "Paris",
        "long_name"     =>  "Paris,Paris,Ile-de-France,France",
        "p"             =>  "20321",
        "land"          =>  "FR",
        "type"          =>  "City",
    ],
    "se"                => "google.fr",
    "lang"              => "fr",
    "ua"                => $ua,
    "query"             => $query,
    "request"           => null,
];

$lyon = [
    "location"  => [
        "g"             =>  "1006410",
        "short_name"    =>  "Lyon",
        "long_name"     =>  "Lyon,Auvergne-Rhone-Alpes,France",
        "p"             =>  "9069525",
        "land"          =>  "FR",
        "type"          =>  "City",
    ],
    "se"                => "google.fr",
    "lang"              => "fr",
    "ua"                => $ua,
    "query"             => $query,
    "request"           => null,
];

$serpette = new App\Serpette\Serpette($bordeaux);
$serpette->makeUrl();
$serpette->gSearch();
//var_dump($serpette->getSearch());
$json = json_encode($serpette->getSearch());
$backup_file = 'backup'.uniqId().'.bck';
$fh = fopen($backup_file, "w+");
fwrite($fh, $json);
fclose($fh);