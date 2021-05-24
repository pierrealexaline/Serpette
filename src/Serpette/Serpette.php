<?php

namespace App\Serpette;  

/**
 * Serpette a class to get SERP from Google.
 */

class Serpette{

    private $search;

    public const KEY_PATTERN = [
        4=>'E',5=>'F',6=>'G',7=>'H',8=>'I',9=>'J',10=>'K',11=>'L',12=>'M',13=>'N',14=>'O',15=>'P',16=>'Q',17=>'R',18=>'S',19=>'T',20=>'U',
        21=>'V',22=>'W',23=>'X',24=>'Y',25=>'z',26=>'a',27=>'b',28=>'c',29=>'d',30=>'e',31=>'f',32=>'g',33=>'h',34=>'i',35=>'j',36=>'k',37=>'l',38=>'m',39=>'n',40=>'o',
        41=>'p',42=>'q',43=>'r',44=>'s',45=>'t',46=>'u',47=>'v',48=>'w',49=>'x',50=>'y',51=>'z',52=>'0',53=>'1',54=>'2',55=>'3',56=>'4',57=>'5',58=>'6',59=>'7',60=>'8',
        61=>'9',62=>'-',63=>' ',64=>'A',65=>'B',66=>'C',67=>'D',68=>'E',69=>'F',70=>'G',71=>'H',72=>'I',73=>'J', 76=>'M', 83=>'T', 89=>'L'
    ];
    
    public function __construct(array $search)
    {
        $this->search->query                    = $search['query'];
        $this->search->se                       = $search['se'];
        $this->search->lang                     = $search['lang'];
        $this->search->ua                       = $search['ua'];

        $this->search->location->long_name      = $search['location']['long_name'];
        $this->search->location->short_name     = $search['location']['short_name'];
        $this->search->location->p              = $search['location']['p'];
        $this->search->location->g              = $search['location']['g'];
        $this->search->location->key            = self::KEY_PATTERN[strlen($this->search->location->long_name)];
        $this->search->location->land           = $search['location']['land'];
        $this->search->location->type           = $search['location']['type'];
        $this->search->result                   = null;
    } 

    public function getSearch()
    {
        return $this->search;
    }

    public function makeUrl():?string
    {
        return $this->search->request = "https://www." . $this->search->se . "/search?ie=UTF-8&oe=UTF-8&hl=" . $this->search->lang . 
        "&q=" . urlencode($this->search->query) . "&tci=g:" . $this->search->g . ",p:" . $this->search->p . 
        "&glp=1&num=100&uule=w+CAIQICI" . $this->search->location->key . base64_encode($this->search->location->long_name);  
    }

    public function gSearch()
    {
        $crawl = curl_init(); 
        curl_setopt($crawl, CURLOPT_URL, $this->search->request);
        @curl_setopt ( $crawl, CURLOPT_USERAGENT, $this->search->ua);
        curl_setopt($crawl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crawl, CURLOPT_CONNECTTIMEOUT, 10); // spend 10 seconds max to connect
        curl_setopt($crawl, CURLOPT_TIMEOUT, 20); // operation must take 20s max before hard stopped
        @$this->search->result->content = curl_exec($crawl); 
        @$this->search->result->http_code = curl_getinfo($crawl, CURLINFO_HTTP_CODE);
        curl_close($crawl);

        return $this->search;
    }
}
