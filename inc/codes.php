<?php if ( ! defined( 'ABSPATH' ) ) exit; 

function gfba_australia() {
    add_filter( 'gform_address_types', 'australian_address_type', 10, 2 );
    function australian_address_type( $australian_address_types, $form_id ) {
        $australian_address_types['australia'] = array (
            'label'       => 'Australian',
            'country'     => 'Australia',
            'zip_label'   => 'Postcode',
            'state_label' => 'State',
            'states'      => array (
                ''      => '',
                'ACT'   => 'Australian Capital Territory',
                'NT'    => 'Northern Territory',
                'NSW'   => 'New South Wales',
                'QLD'   => 'Queensland',
                'SA'    => 'South Australia',
                'TAS'   => 'Tasmania',
                'VIC'   => 'Victoria',
                'WA'    => 'Western Australia'
            )
        );
        return $australian_address_types;
    }
}

function gfba_brazil() {
    add_filter( 'gform_address_types', 'brazilian_address_type', 10, 2 );
    function brazilian_address_type( $brazilian_address_types, $form_id ) {
        $brazilian_address_types['brazil'] = array (
            'label'       => 'Brazilian',
            'country'     => 'Brazil',
            'zip_label'   => 'CEP',
            'state_label' => 'State',
            'states'      => array (
                ''   => '',
                'AC' => 'Acre',		
                'AL' => 'Alagoas',		
                'AP' => 'Amapá',		
                'AM' => 'Amazonas',		
                'BA' => 'Bahia',		
                'CE' => 'Ceará',		
                'DF' => 'Distrito Federal',		
                'ES' => 'Espírito Santo',		
                'GO' => 'Goiás',		
                'MA' => 'Maranhão',		
                'MT' => 'Mato Grosso',		
                'MS' => 'Mato Grosso do Sul',		
                'MG' => 'Minas Gerais',		
                'PA' => 'Pará',		
                'PB' => 'Paraíba',		
                'PR' => 'Paraná',		
                'PE' => 'Pernambuco',		
                'PI' => 'Piauí',		
                'RJ' => 'Rio de Janeiro',		
                'RN' => 'Rio Grande do Norte',		
                'RS' => 'Rio Grande do Sul',		
                'RO' => 'Rondônia',		
                'RR' => 'Roraima',		
                'SC' => 'Santa Catarina',		
                'SP' => 'São Paulo',		
                'SE' => 'Sergipe',		
                'TO' => 'Tocantins'
            )
        );
        return $brazilian_address_types;
    }
}

function gfba_angola() {
    add_filter( 'gform_address_types', 'angolan_address_type', 10, 2 );
    function angolan_address_type( $angolan_address_types, $form_id ) {
        $angolan_address_types['angola'] = array (
            'label'       => 'Angolan',
            'country'     => 'Angola',
            'zip_label'   => 'Postcode',
            'state_label' => 'Province',
            'states'      => array (
                ''      => '',
                'BGO'   => 'Bengo',
                'BGU'   => 'Benguela',
                'BIE'   => 'Bié',
                'CAB'   => 'Cabinda',
                'CNN'   => 'Cunene',
                'HUA'   => 'Huambo',
                'HUI'   => 'Huíla',
                'CCU'   => 'Kuando Kubango',
                'CNO'   => 'Kwanza Norte',
                'CUS'   => 'Kwanza Sul',
                'LUA'   => 'Luanda',
                'LNO'   => 'Lunda Norte',
                'LSU'   => 'Lunda Sul',
                'MAL'   => 'Malanje',
                'MOX'   => 'Moxico',
                'NAM'   => 'Namibe',
                'UIG'   => 'Uíge',
                'ZAI'   => 'Zaire'
            )
        );
        return $angolan_address_types;
    }
}

function gfba_netherlands() {
    add_filter( 'gform_address_types', 'netherlands_address_type', 10, 2 );
    function netherlands_address_type( $netherlands_address_types, $form_id ) {
        $netherlands_address_types['netherlands'] = array (
            'label'       => 'Netherlands',
            'country'     => 'Netherlands',
            'zip_label'   => 'Postcode',
            'state_label' => 'Province',
            'states'      => array (
                ''      => '',
                'DR'    => 'Drenthe',
                'FL'    => 'Flevoland',
                'FR'    => 'Friesland',
                'GE'    => 'Gelderland',
                'GR'    => 'Groningen',
                'LI'    => 'Limburg',
                'NB'    => 'Noord-Brabant',
                'NH'    => 'Noord-Holland',
                'OV'    => 'Overijssel',
                'UT'    => 'Utrecht',
                'ZE'    => 'Zeeland',
                'ZH'    => 'Zuid-Holland'
            )
        );
        return $netherlands_address_types;
    }
}

function gfba_argentina() {
    add_filter( 'gform_address_types', 'argentinian_address_type', 10, 2 );
    function argentinian_address_type( $argentinian_address_types, $form_id ) {
        $argentinian_address_types['Argentina'] = array (
            'label'       => 'Argentinian',
            'country'     => 'Argentina',
            'zip_label'   => 'Postal Code',
            'state_label' => 'Province',
            'states'      => array (
                ''  => '',
                'B' => 'Buenos Aires',
                'K' => 'Catamarca',
                'H' => 'Chaco',
                'U' => 'Chubut',
                'X' => 'Córdoba',
                'W' => 'Corrientes',
                'E' => 'Entre Ríos',
                'F' => 'Formosa',
                'Y' => 'Jujuy',
                'L' => 'La Pampa',
                'F' => 'La Rioja',
                'M' => 'Mendoza',
                'N' => 'Misiones',
                'Q' => 'Neuquén',
                'R' => 'Río Negro',
                'A' => 'Salta',
                'J' => 'San Juan',
                'D' => 'San Luis',
                'Z' => 'Santa Cruz',
                'S' => 'Santa Fe',
                'G' => 'Santiago del Estero',
                'V' => 'Tierra del Fuego',
                'T' => 'Tucumán'
            )
        );
        return $argentinian_address_types;
    }
}

function gfba_bangladesh() {
    add_filter( 'gform_address_types', 'bangladesh_address_type', 10, 2 );
    function bangladesh_address_type( $bangladesh_address_types, $form_id ) {
        $bangladesh_address_types['bangladesh'] = array (
            'label'       => 'Bangladeshis',
            'country'     => 'Bangladesh',
            'zip_label'   => 'District code',
            'state_label' => 'District',
            'states'      => array (
                ''          => '',
                '05' => 'Bagerhat',
                '01' => 'Bandarban',
                '02' => 'Barguna',
                '06' => 'Barisal',
                '07' => 'Bhola',
                '03' => 'Bogra',
                '04' => 'Brahmanbaria',
                '09' => 'Chandpur',
                '10' => 'Chittagong',
                '12' => 'Chuadanga',
                '08' => 'Comilla',
                '11' => 'Cox\'s Bazar',
                '13' => 'Dhaka',
                '14' => 'Dinajpur',
                '15' => 'Faridpur',
                '16' => 'Feni',
                '19' => 'Gaibandha',
                '18' => 'Gazipur',
                '17' => 'Gopalganj',
                '20' => 'Habiganj',
                '24' => 'Jaipurhat',
                '21' => 'Jamalpur',
                '22' => 'Jessore',
                '25' => 'Jhalakati',
                '23' => 'Jhenaidah',
                '29' => 'Khagrachari',
                '27' => 'Khulna',
                '26' => 'Kishoreganj',
                '28' => 'Kurigram',
                '30' => 'Kushtia',
                '31' => 'Lakshmipur',
                '32' => 'Lalmonirhat',
                '36' => 'Madaripur',
                '37' => 'Magura',
                '33' => 'Manikganj',
                '39' => 'Meherpur',
                '38' => 'Moulvibazar',
                '35' => 'Munshiganj',
                '34' => 'Mymensingh',
                '48' => 'Naogaon',
                '43' => 'Narail',
                '40' => 'Narayanganj',
                '42' => 'Narsingdi',
                '44' => 'Natore',
                '45' => 'Nawabganj',
                '41' => 'Netrakona',
                '46' => 'Nilphamari',
                '47' => 'Noakhali',
                '49' => 'Pabna',
                '52' => 'Panchagarh',
                '56' => 'Parbattya Chattagram',
                '51' => 'Patuakhali',
                '50' => 'Pirojpur',
                '53' => 'Rajbari',
                '54' => 'Rajshahi',
                '55' => 'Rangpur',
                '58' => 'Satkhira',
                '62' => 'Shariatpur',
                '57' => 'Sherpur',
                '59' => 'Sirajganj',
                '61' => 'Sunamganj',
                '60' => 'Sylhet',
                '63' => 'Tangail',
                '64' => 'Thakurgaon'
            )
        );
        return $bangladesh_address_types;
    }
}

function gfba_bolivia() {
    add_filter( 'gform_address_types', 'bolivian_address_type', 10, 2 );
    function bolivian_address_type( $bolivian_address_types, $form_id ) {
        $bolivian_address_types['Bolivia'] = array (
            'label'       => 'Bolivian',
            'country'     => 'Bolivia',
            'zip_label'   => 'Department code',
            'state_label' => 'Department',
            'states'      => array (
                ''  => '',
                'H' => 'Chuquisaca',
                'C' => 'Cochabamba',
                'B' => 'El Beni',
                'L' => 'La Paz',
                'O' => 'Oruro',
                'N' => 'Pando',
                'P' => 'Potosí',
                'S' => 'Santa Cruz',
                'T' => 'Tarija'
            )
        );
        return $bolivian_address_types;
    }
}

function gfba_bulgaria() {
    add_filter( 'gform_address_types', 'bulgarian_address_type', 10, 2 );
    function bulgarian_address_type( $bulgarian_address_types, $form_id ) {
        $bulgarian_address_types['bulgaria'] = array (
            'label'       => 'Bulgarian',
            'country'     => 'Bulgaria',
            'zip_label'   => 'District code',
            'state_label' => 'District',
            'states'      => array (
                ''   => '',
                '01' => 'Blagoevgrad',
                '02' => 'Burgas',                
                '08' => 'Dobrich',                
                '07' => 'Gabrovo',                
                '26' => 'Haskovo',                
                '09' => 'Kardzhali',                
                '10' => 'Kyustendil',                
                '11' => 'Lovech',                
                '12' => 'Montana',                
                '13' => 'Pazardzhik',                
                '14' => 'Pernik',                
                '15' => 'Pleven',                
                '16' => 'Plovdiv',                
                '17' => 'Razgrad',                
                '18' => 'Ruse',                
                '27' => 'Shumen',                
                '19' => 'Silistra',                
                '20' => 'Sliven',                
                '21' => 'Smolyan',                
                '23' => 'Sofia',                
                '22' => 'Sofia-Grad',                
                '24' => 'Stara Zagora',                
                '25' => 'Targovishte',                
                '03' => 'Varna',                
                '04' => 'Veliko Tarnovo',                
                '05' => 'Vidin',                
                '06' => 'Vratsa',                
                '28' => 'Yambol'
            )
        );
        return $bulgarian_address_types;
    }
}

function gfba_china() {
    add_filter( 'gform_address_types', 'chinese_address_type', 10, 2 );
    function chinese_address_type( $chinese_address_types, $form_id ) {
        $chinese_address_types['china'] = array (
            'label'       => 'Chinese',
            'country'     => 'china',
            'zip_label'   => 'Province code',
            'state_label' => 'Province',
            'states'      => array (
                ''   => '',
                'AH' => 'Anhui',
                'BJ' => 'Beijing',
                'CQ' => 'Chongqing',
                'FJ' => 'Fujian',
                'GS' => 'Gansu',
                'GD' => 'Guangdong',
                'GX' => 'Guangxi Zhuangzu',
                'GZ' => 'Guizhou',
                'HI' => 'Hainan',
                'HE' => 'Hebei',
                'HL' => 'Heilongjiang',
                'HA' => 'Henan',
                'HB' => 'Hubei',
                'HN' => 'Hunan',
                'NM' => 'Inner Mongolia',
                'JS' => 'Jiangsu',
                'JX' => 'Jiangxi',
                'JL' => 'Jilin',
                'LN' => 'Liaoning',
                'MO' => 'Macau',
                'NX' => 'Ningxia Huizi',
                'QH' => 'Qinghai',
                'SN' => 'Shaanxi',
                'SD' => 'Shandong',
                'SH' => 'Shanghai',
                'SX' => 'Shanxi',
                'SC' => 'Sichuan',
                'TJ' => 'Tianjin',
                'XZ' => 'Tibet',
                'XJ' => 'Xinjiang',
                'YN' => 'Yunnan',
                'ZJ' => 'Zhejiang'
            )
        );
        return $chinese_address_types;
    }
}

function gfba_greece() {
    add_filter( 'gform_address_types', 'greek_address_type', 10, 2 );
    function greek_address_type( $greek_address_types, $form_id ) {
        $greek_address_types['greece'] = array (
            'label'       => 'Greek',
            'country'     => 'Greece',
            'zip_label'   => 'Region code',
            'state_label' => 'Region',
            'states'      => array (
                ''  => '',
                'I' => 'Attica',		
                'H' => 'Central Greece',		
                'B' => 'Central Macedonia',		
                'M' => 'Crete',		
                'A' => 'Eastern Macedonia and Thrace',		
                'D' => 'Epirus',		
                'F' => 'Ionian Islands',		
                'K' => 'Northern Aegean',		
                'J' => 'Peloponnese',		
                'L' => 'Southern Aegean',		
                'E' => 'Thessaly',		
                'G' => 'Western Greece',		
                'C' => 'Western Macedonia'
            )
        );
        return $greek_address_types;
    }
}

function gfba_hong_kong() {
    add_filter( 'gform_address_types', 'hong_kong_address_type', 10, 2 );
    function hong_kong_address_type( $hong_kong_address_types, $form_id ) {
        $hong_kong_address_types['hong_kong'] = array (
            'label'       => 'Hong Kong',
            'country'     => 'Hong Kong',
            'zip_label'   => 'District code',
            'state_label' => 'District',
            'states'      => array (
                ''   => '',
                'CW' => 'Central and Western',
                'EA' => 'Eastern',
                'IS' => 'Islands',
                'KC' => 'Kowloon City',
                'KI' => 'Kwai Tsing',
                'KU' => 'Kwun Tong',
                'NO' => 'North',
                'SK' => 'Sai Kung',
                'SS' => 'Sham Shui Po',
                'ST' => 'Sha Tin',
                'SO' => 'Southern',
                'TP' => 'Tai Po',
                'TW' => 'Tsuen Wan',
                'TM' => 'Tuen Mun',
                'WC' => 'Wan Chai',
                'WT' => 'Wong Tai Sin',
                'YT' => 'Yau Tsim Mong',
                'YL' => 'Yuen Long'
            )
        );
        return $hong_kong_address_types;
    }
}

function gfba_hungary() {
    add_filter( 'gform_address_types', 'hungary_address_type', 10, 2 );
    function hungary_address_type( $hungary_address_types, $form_id ) {
        $hungary_address_types['hungary'] = array (
            'label'       => 'Hungarian',
            'country'     => 'Hungary',
            'zip_label'   => 'County code',
            'state_label' => 'County',
            'states'      => array (
                ''   => '',
                'BK' => 'Bács-Kiskun',
                'BA' => 'Baranya',
                'BE' => 'Békés',
                'BC' => 'Békéscsaba',
                'BZ' => 'Borsod-Abaúj-Zemplén',
                'BU' => 'Budapest',
                'CS' => 'Csongrád',
                'DE' => 'Debrecen',
                'DU' => 'Dunaújváros',
                'EG' => 'Eger',
                'ER' => 'Érd',
                'FE' => 'Fejér',
                'GY' => 'Győr',
                'GS' => 'Győr-Moson-Sopron',
                'HB' => 'Hajdú-Bihar',
                'HE' => 'Heves',
                'HV' => 'Hódmezővásárhely',
                'JN' => 'Jász-Nagykun-Szolnok',
                'KV' => 'Kaposvár',
                'KM' => 'Kecskemét',
                'KE' => 'Komárom-Esztergom',
                'MI' => 'Miskolc',
                'NK' => 'Nagykanizsa',
                'NO' => 'Nógrád',
                'NY' => 'Nyíregyháza',
                'PS' => 'Pécs',
                'PE' => 'Pest',
                'ST' => 'Salgótarján',
                'SO' => 'Somogy',
                'SN' => 'Sopron',
                'SZ' => 'Szabolcs-Szatmár-Bereg',
                'SD' => 'Szeged',
                'SF' => 'Székesfehérvár',
                'SS' => 'Szekszárd',
                'SK' => 'Szolnok',
                'SH' => 'Szombathely',
                'TB' => 'Tatabánya',
                'TO' => 'Tolna',
                'VA' => 'Vas',
                'VE' => 'Veszprém',
                'VM' => 'Veszprém',
                'ZA' => 'Zala',
                'ZE' => 'Zalaegerszeg'
            )
        );
        return $hungary_address_types;
    }
}

function gfba_india() {
    add_filter( 'gform_address_types', 'indian_address_type', 10, 2 );
    function indian_address_type( $indian_address_types, $form_id ) {
        $indian_address_types['india'] = array (
            'label'       => 'Indian',
            'country'     => 'India',
            'zip_label'   => 'Post code',
            'state_label' => 'State',
            'states'      => array (
                ''   => '',
                'AN' => 'Andaman and Nicobar Islands',
                'AD' => 'Andhra Pradesh',
                'AR' => 'Arunachal Pradesh',
                'AS' => 'Assam',
                'BR' => 'Bihar',
                'CH' => 'Chandigarh',
                'CT' => 'Chhattisgarh',
                'DN' => 'Dadra and Nagar Haveli',
                'DD' => 'Daman and Diu',
                'DL' => 'Delhi',
                'GA' => 'Goa',
                'GJ' => 'Gujarat',
                'HR' => 'Haryana',
                'HP' => 'Himachal Pradesh',
                'JK' => 'Jammu and Kashmir',
                'JH' => 'Jharkhand',
                'KA' => 'Karnataka',
                'KL' => 'Kerala',
                'LD' => 'Lakshadweep',
                'MP' => 'Madhya Pradesh',
                'MH' => 'Maharashtra',
                'MN' => 'Manipur',
                'ML' => 'Meghalaya',
                'MZ' => 'Mizoram',
                'NL' => 'Nagaland',
                'OR' => 'Odisha',
                'PY' => 'Puducherry',
                'PB' => 'Punjab',
                'RJ' => 'Rajasthan',
                'SK' => 'Sikkim',
                'TN' => 'Tamil Nadu',
                'TG' => 'Telangana',
                'TR' => 'Tripura',
                'UT' => 'Uttarakhand',
                'UP' => 'Uttar Pradesh',
                'WB' => 'West Bengal'
            )
        );
        return $indian_address_types;
    }
}

function gfba_indonesia() {
    add_filter( 'gform_address_types', 'indonesian_address_type', 10, 2 );
    function indonesian_address_type( $indonesian_address_types, $form_id ) {
        $indonesian_address_types['indonesia'] = array (
            'label'       => 'Indonesian',
            'country'     => 'Indonesia',
            'zip_label'   => 'Province code',
            'state_label' => 'Province',
            'states'      => array (
                ''   => '',
                'AC' => 'Aceh',
                'BA' => 'Bali',
                'BB' => 'Bangka-Belitung',
                'BT' => 'Banten',
                'BE' => 'Bengkulu',
                'GO' => 'Gorontalo',
                'JK' => 'Jakarta Raya',
                'JA' => 'Jambi',
                'JR' => 'Jawa Barat',
                'JT' => 'Jawa Tengah',
                'JI' => 'Jawa Timur',
                'KB' => 'Kalimantan Barat',
                'KS' => 'Kalimantan Selatan',
                'KT' => 'Kalimantan Tengah',
                'KM' => 'Kalimantan Timur',
                'KU' => 'Kalimantan Utara',
                'KR' => 'Kepulauan Riau',
                'LA' => 'Lampung',
                'MA' => 'Maluku',
                'MU' => 'Maluku Utara',
                'NB' => 'Nusa Tenggara Barat',
                'NT' => 'Nusa Tenggara Timur',
                'PA' => 'Papua',
                'IB' => 'Papua Barat',
                'RI' => 'Riau',
                'SR' => 'Sulawesi Barat',
                'SE' => 'Sulawesi Selatan',
                'ST' => 'Sulawesi Tengah',
                'SG' => 'Sulawesi Tenggara',
                'SW' => 'Sulawesi Utara',
                'SB' => 'Sumatera Barat',
                'SL' => 'Sumatera Selatan',
                'SU' => 'Sumatera Utara',
                'YO' => 'Yogyakarta'
            )
        );
        return $indonesian_address_types;
    }
}

function gfba_iran() {
    add_filter( 'gform_address_types', 'iran_address_type', 10, 2 );
    function iran_address_type( $iran_address_types, $form_id ) {
        $iran_address_types['iran'] = array (
            'label'       => 'Iranian',
            'country'     => 'Iran',
            'zip_label'   => 'Province code',
            'state_label' => 'Province',
            'states'      => array (
                ''   => '',
                'AL' => 'Alborz',
                'AR' => 'Ardebil',
                'BS' => 'Bushehr',
                'CM' => 'Chahar Mahall and Bakhtiari',
                'EA' => 'East Azarbaijan',
                'ES' => 'Esfahan',
                'FA' => 'Fars',
                'GI' => 'Gilan',
                'GO' => 'Golestan',
                'HD' => 'Hamadan',
                'HG' => 'Hormozgan',
                'IL' => 'Ilam',
                'KE' => 'Kerman',
                'BK' => 'Kermanshah',
                'KZ' => 'Khuzestan',
                'KB' => 'Kohgiluyeh and Buyer Ahmad',
                'KD' => 'Kordestan',
                'LO' => 'Lorestan',
                'MK' => 'Markazi',
                'MN' => 'Mazandaran',
                'KS' => 'North Khorasan',
                'QZ' => 'Qazvin',
                'QM' => 'Qom',
                'KV' => 'Razavi Khorasan',
                'SM' => 'Semnan',
                'SB' => 'Sistan and Baluchestan',
                'KJ' => 'South Khorasan',
                'TE' => 'Tehran',
                'WA' => 'West Azarbaijan',
                'YA' => 'Yazd',
                'ZA' => 'Zanjan'
            )
        );
        return $iran_address_types;
    }
}

function gfba_ireland() {
    add_filter( 'gform_address_types', 'irish_address_type', 10, 2 );
    function irish_address_type( $irish_address_types, $form_id ) {
        $irish_address_types['ireland'] = array (
            'label'       => 'Irish',
            'country'     => 'Ireland',
            'zip_label'   => 'Postcode',
            'state_label' => 'Country',
            'states'      => array (
                ''   => '',
                'CW' => 'Carlow',
                'CN' => 'Cavan',
                'CE' => 'Clare',
                'CK' => 'Cork',
                'DL' => 'Donegal',
                'DN' => 'Dublin',
                'GY' => 'Galway',
                'KY' => 'Kerry',
                'KE' => 'Kildare',
                'KK' => 'Kilkenny',
                'LS' => 'Laois',
                'LM' => 'Leitrim',
                'LK' => 'Limerick',
                'LD' => 'Longford',
                'LH' => 'Louth',
                'MO' => 'Mayo',
                'MH' => 'Meath',
                'MN' => 'Monaghan',
                'OY' => 'Offaly',
                'RN' => 'Roscommon',
                'SO' => 'Sligo',
                'TY' => 'Tipperary',
                'WD' => 'Waterford',
                'WH' => 'Westmeath',
                'WX' => 'Wexford',
                'WW' => 'Wicklow'
            )
        );
        return $irish_address_types;
    }
}

function gfba_italy() {
    add_filter( 'gform_address_types', 'italy_address_type', 10, 2 );
    function italy_address_type( $italy_address_types, $form_id ) {
        $italy_address_types['italy'] = array (
            'label'       => 'Italian',
            'country'     => 'Italy',
            'zip_label'   => 'Region code',
            'state_label' => 'Region',
            'states'      => array (
                ''   => '',
                'AB' => 'Abruzzi',
                'PU' => 'Apulia',
                'BC' => 'Basilicata',
                'LB' => 'Calabria',
                'CM' => 'Campania',
                'ER' => 'Emilia-Romagna',
                'FV' => 'Friuli-Venezia Giulia',
                'LZ' => 'Lazio',
                'LG' => 'Liguria',
                'LM' => 'Lombardy',
                'MH' => 'Marche',
                'ML' => 'Molise',
                'PM' => 'Piedmont',
                'SD' => 'Sardinia',
                'SC' => 'Sicily',
                'TT' => 'Trentino-Alto Adige',
                'TC' => 'Tuscany',
                'UM' => 'Umbria',
                'VD' => 'Valle d\'Aosta',
                'VN' => 'Veneto'
            )
        );
        return $italy_address_types;
    }
}

function gfba_japan() {
    add_filter( 'gform_address_types', 'japan_address_type', 10, 2 );
    function japan_address_type( $japan_address_types, $form_id ) {
        $japan_address_types['japan'] = array (
            'label'       => 'Japanese',
            'country'     => 'Japan',
            'zip_label'   => 'Prefecture code',
            'state_label' => 'Prefecture',
            'states'      => array (
                ''   => '',
                'AI' => 'Aichi',
                'AK' => 'Akita',
                'AO' => 'Aomori',
                'CH' => 'Chiba',
                'EH' => 'Ehime',
                'FI' => 'Fukui',
                'FO' => 'Fukuoka',
                'FS' => 'Fukushima',
                'GF' => 'Gifu',
                'GM' => 'Gumma',
                'HS' => 'Hiroshima',
                'HK' => 'Hokkaido',
                'HG' => 'Hyogo',
                'IB' => 'Ibaraki',
                'IS' => 'Ishikawa',
                'IW' => 'Iwate',
                'KG' => 'Kagawa',
                'KS' => 'Kagoshima',
                'KN' => 'Kanagawa',
                'KC' => 'Kochi',
                'KM' => 'Kumamoto',
                'KY' => 'Kyoto',
                'ME' => 'Mie',
                'MG' => 'Miyagi',
                'MZ' => 'Miyazaki',
                'NN' => 'Nagano',
                'NS' => 'Nagasaki',
                'NR' => 'Nara',
                'NI' => 'Niigata',
                'OT' => 'Oita',
                'OY' => 'Okayama',
                'ON' => 'Okinawa',
                'OS' => 'Osaka',
                'SG' => 'Saga',
                'ST' => 'Saitama',
                'SH' => 'Shiga',
                'SM' => 'Shimane',
                'SZ' => 'Shizuoka',
                'TC' => 'Tochigi',
                'TS' => 'Tokushima',
                'TK' => 'Tokyo',
                'TT' => 'Tottori',
                'TY' => 'Toyama',
                'WK' => 'Wakayama',
                'YT' => 'Yamagata',
                'YC' => 'Yamaguchi',
                'YN' => 'Yamanashi'
            )
        );
        return $japan_address_types;
    }
}

function gfba_liberia() {
    add_filter( 'gform_address_types', 'liberia_address_type', 10, 2 );
    function liberia_address_type( $liberia_address_types, $form_id ) {
        $liberia_address_types['liberia'] = array (
            'label'       => 'Liberian',
            'country'     => 'Liberia',
            'zip_label'   => 'Countries code',
            'state_label' => 'Country',
            'states'      => array (
                ''   => '',
                'BM' => 'Bomi',
                'BG' => 'Bong',
                'GP' => 'Gbarpolu',
                'GB' => 'Grand Bassa',
                'CM' => 'Grand Cape Mount',
                'GD' => 'Grand Gedeh',
                'GK' => 'Grand Kru',
                'LF' => 'Lofa',
                'MG' => 'Margibi',
                'MY' => 'Maryland',
                'MO' => 'Montserrado',
                'NI' => 'Nimba',
                'RI' => 'Rivercess',
                'RG' => 'River Gee',
                'SI' => 'Sinoe'
            )
        );
        return $liberia_address_types;
    }
}

function gfba_malaysia() {
    add_filter( 'gform_address_types', 'malay_address_type', 10, 2 );
    function malay_address_type( $malay_address_types, $form_id ) {
        $malay_address_types['malaysia'] = array (
            'label'       => 'Malay',
            'country'     => 'Malaysia',
            'zip_label'   => 'Postcode',
            'state_label' => 'State',
            'states'      => array (
                ''   => '',
                'JH' => 'Johor',
                'KH' => 'Kedah',
                'KN' => 'Kelantan',
                'KL' => 'Kuala Lumpur',
                'LA' => 'Labuan',
                'ME' => 'Melaka',
                'NS' => 'Negeri Sembilan',
                'PH' => 'Pahang',
                'PK' => 'Perak',
                'PL' => 'Perlis',
                'PG' => 'Pulau Pinang',
                'PJ' => 'Putrajaya',
                'SA' => 'Sabah',
                'SK' => 'Sarawak',
                'SL' => 'Selangor',
                'TE' => 'Terengganu'
            )
        );
        return $malay_address_types;
    }
}

function gfba_mexico() {
    add_filter( 'gform_address_types', 'mexican_address_type', 10, 2 );
    function mexican_address_type( $mexican_address_types, $form_id ) {
        $mexican_address_types['mexico'] = array (
            'label'       => 'Mexican',
            'country'     => 'Mexico',
            'zip_label'   => 'Postcode',
            'state_label' => 'State',
            'states'      => array (
                ''    => '',		
                'AGU' => 'Aguascalientes',		
                'BCN' => 'Baja California',		
                'BCS' => 'Baja California Sur',		
                'CAM' => 'Campeche',		
                'CHP' => 'Chiapas',		
                'CHH' => 'Chihuahua',	
                'CMX' => 'Ciudad de México',	
                'COA' => 'Coahuila',		
                'COL' => 'Colima',		
                'DUR' => 'Durango',		
                'GUA' => 'Guanajuato',		
                'GRO' => 'Guerrero',		
                'HID' => 'Hidalgo',		
                'JAL' => 'Jalisco',		
                'MEX' => 'México',		
                'MIC' => 'Michoacán',		
                'MOR' => 'Morelos',		
                'NAY' => 'Nayarit',		
                'NLE' => 'Nuevo León',		
                'OAX' => 'Oaxaca',		
                'PUE' => 'Puebla',		
                'QUE' => 'Querétaro',		
                'ROO' => 'Quintana Roo',		
                'SLP' => 'San Luis Potosí',		
                'SIN' => 'Sinaloa',		
                'SON' => 'Sonora',		
                'TAB' => 'Tabasco',		
                'TAM' => 'Tamaulipas',		
                'TLA' => 'Tlaxcala',		
                'VER' => 'Veracruz',		
                'YUC' => 'Yucatán',		
                'ZAC' => 'Zacatecas'
            )
        );
        return $mexican_address_types;
    }
}

function gfba_moldova() {
    add_filter( 'gform_address_types', 'moldova_address_type', 10, 2 );
    function moldova_address_type( $moldova_address_types, $form_id ) {
        $moldova_address_types['moldova'] = array (
            'label'       => 'Moldovan',
            'country'     => 'Moldova',
            'zip_label'   => 'Districts code',
            'state_label' => 'District',
            'states'      => array (
                ''   => '',
                'AN' => 'Anenii Noi',
                'BT' => 'Bălţi',
                'BA' => 'Basarabeasca',
                'BD' => 'Bender',
                'BR' => 'Briceni',
                'CH' => 'Cahul',
                'CA' => 'Călăraşi',
                'CN' => 'Cantemir',
                'CU' => 'Căuşeni',
                'CV' => 'Chişinău',
                'CS' => 'Cimişlia',
                'CR' => 'Criuleni',
                'DO' => 'Donduşeni',
                'DR' => 'Drochia',
                'DB' => 'Dubăsari',
                'ED' => 'Edineţ',
                'FA' => 'Făleşti',
                'FL' => 'Floreşti',
                'GA' => 'Găgăuzia',
                'GL' => 'Glodeni',
                'HI' => 'Hînceşti',
                'IA' => 'Ialoveni',
                'LE' => 'Leova',
                'NI' => 'Nisporeni',
                'OC' => 'Ocniţa',
                'OH' => 'Orhei',
                'RZ' => 'Rezina',
                'RS' => 'Rîşcani',
                'SI' => 'Sîngerei',
                'SD' => 'Şoldăneşti',
                'SO' => 'Soroca',
                'SV' => 'Ştefan Vodă',
                'ST' => 'Străşeni',
                'TA' => 'Taraclia',
                'TE' => 'Teleneşti',
                'DU' => 'Transnistria',
                'UG' => 'Ungheni'
            )
        );
        return $moldova_address_types;
    }
}

function gfba_nepal() {
    add_filter( 'gform_address_types', 'nepal_address_type', 10, 2 );
    function nepal_address_type( $nepal_address_types, $form_id ) {
        $nepal_address_types['nepal'] = array (
            'label'       => 'Nepalis',
            'country'     => 'Nepal',
            'zip_label'   => 'Province code',
            'state_label' => 'Province',
            'states'      => array (
                ''   => '',
                'ON' => 'One',
                'TW' => 'Two',
                'TH' => 'Three',
                'FO' => 'Four',
                'FI' => 'Five',
                'SI' => 'Six',
                'SE' => 'Seven'
            )
        );
        return $nepal_address_types;
    }
}

function gfba_new_zealand() {
    add_filter( 'gform_address_types', 'new_zealand_address_type', 10, 2 );
    function new_zealand_address_type( $new_zealand_address_types, $form_id ) {
        $new_zealand_address_types['new_zealand'] = array (
            'label'       => 'New Zealand',
            'country'     => 'New Zealand',
            'zip_label'   => 'Region code',
            'state_label' => 'Region',
            'states'      => array (
                ''   => '',
                'AU' => 'Auckland',
                'BP' => 'Bay of Plenty',
                'CA' => 'Canterbury',
                'CI' => 'Chatham Islands',
                'GI' => 'Gisborne',
                'HB' => 'Hawke\'s Bay',
                'MW' => 'Manawatu-Wanganui',
                'MA' => 'Marlborough',
                'NE' => 'Nelson',
                'NO' => 'Northland',
                'OT' => 'Otago',
                'SO' => 'Southland',
                'TK' => 'Taranaki',
                'TS' => 'Tasman',
                'WK' => 'Waikato',
                'WG' => 'Wellington',
                'WC' => 'West Coast'
            )
        );
        return $new_zealand_address_types;
    }
}

function gfba_nigeria() {
    add_filter( 'gform_address_types', 'nigeria_address_type', 10, 2 );
    function nigeria_address_type( $nigeria_address_types, $form_id ) {
        $nigeria_address_types['nigeria'] = array (
            'label'       => 'Nigerian',
            'country'     => 'Nigeria',
            'zip_label'   => 'State code',
            'state_label' => 'State',
            'states'      => array (
                ''   => '',
                'AB' => 'Abia',
                'AD' => 'Adamawa',
                'AK' => 'Akwa Ibom',
                'AN' => 'Anambra',
                'BA' => 'Bauchi',
                'BY' => 'Bayelsa',
                'BE' => 'Benue',
                'BO' => 'Borno',
                'CR' => 'Cross River',
                'DE' => 'Delta',
                'EB' => 'Ebonyi',
                'ED' => 'Edo',
                'EK' => 'Ekiti',
                'EN' => 'Enugu',
                'FC' => 'Federal Capital Territory',
                'GO' => 'Gombe',
                'IM' => 'Imo',
                'JI' => 'Jigawa',
                'KD' => 'Kaduna',
                'KN' => 'Kano',
                'KT' => 'Katsina',
                'KE' => 'Kebbi',
                'KO' => 'Kogi',
                'KW' => 'Kwara',
                'LA' => 'Lagos',
                'NA' => 'Nasarawa',
                'NI' => 'Niger',
                'OG' => 'Ogun',
                'ON' => 'Ondo',
                'OS' => 'Osun',
                'OY' => 'Oyo',
                'PL' => 'Plateau',
                'RI' => 'Rivers',
                'SO' => 'Sokoto',
                'TA' => 'Taraba',
                'YO' => 'Yobe',
                'ZA' => 'Zamfara'
            )
        );
        return $nigeria_address_types;
    }
}

function gfba_pakistan() {
    add_filter( 'gform_address_types', 'pakistan_address_type', 10, 2 );
    function pakistan_address_type( $pakistan_address_types, $form_id ) {
        $pakistan_address_types['pakistan'] = array (
            'label'       => 'Pakistanis',
            'country'     => 'Pakistan',
            'zip_label'   => 'Province code',
            'state_label' => 'Province',
            'states'      => array (
                ''   => '',
                'JK' => 'Azad Kashmir',
                'BA' => 'Balochistan',
                'TA' => 'Federally Administered Tribal Areas',
                'NA' => 'Gilgit-Baltistan',
                'IS' => 'Islamabad',
                'NW' => 'Khyber-Pakhtunkhwa',
                'PB' => 'Punjab',
                'SD' => 'Sindh'
            )
        );
        return $pakistan_address_types;
    }
}

function gfba_paraguay() {
    add_filter( 'gform_address_types', 'paraguay_address_type', 10, 2 );
    function paraguay_address_type( $paraguay_address_types, $form_id ) {
        $paraguay_address_types['paraguay'] = array (
            'label'       => 'Paraguayan',
            'country'     => 'Paraguay',
            'zip_label'   => 'Department code',
            'state_label' => 'Department',
            'states'      => array (
                ''   => '',
                'AG' => 'Alto Paraguay',
                'AA' => 'Alto Paraná',
                'AM' => 'Amambay',
                'AS' => 'Asunción',
                'BQ' => 'Boquerón',
                'CG' => 'Caaguazú',
                'CZ' => 'Caazapá',
                'CY' => 'Canindeyú',
                'CE' => 'Central',
                'CN' => 'Concepción',
                'CR' => 'Cordillera',
                'GU' => 'Guairá',
                'IT' => 'Itapúa',
                'MI' => 'Misiones',
                'NE' => 'Ñeembucú',
                'PG' => 'Paraguarí',
                'PH' => 'Presidente Hayes',
                'SP' => 'San Pedro'
            )
        );
        return $paraguay_address_types;
    }
}

function gfba_peru() {
    add_filter( 'gform_address_types', 'peru_address_type', 10, 2 );
    function peru_address_type( $peru_address_types, $form_id ) {
        $peru_address_types['peru'] = array (
            'label'       => 'Peruvian',
            'country'     => 'Peru',
            'zip_label'   => 'Region code',
            'state_label' => 'Region',
            'states'      => array (
                ''   => '',
                'AM' => 'Amazonas',
                'AN' => 'Ancash',
                'AP' => 'Apurímac',
                'AR' => 'Arequipa',
                'AY' => 'Ayacucho',
                'CJ' => 'Cajamarca',
                'CL' => 'Callao',
                'CS' => 'Cusco',
                'HV' => 'Huancavelica',
                'HC' => 'Huánuco',
                'IC' => 'Ica',
                'JU' => 'Junín',
                'LL' => 'La Libertad',
                'LB' => 'Lambayeque',
                'LP' => 'Lima [Province]',
                'LR' => 'Lima',
                'LO' => 'Loreto',
                'MD' => 'Madre de Dios',
                'MQ' => 'Moquegua',
                'PA' => 'Pasco',
                'PI' => 'Piura',
                'PU' => 'Puno',
                'SM' => 'San Martín',
                'TA' => 'Tacna',
                'TU' => 'Tumbes',
                'UC' => 'Ucayali'
            )
        );
        return $peru_address_types;
    }
}

function gfba_philippines() {
    add_filter( 'gform_address_types', 'philippines_address_type', 10, 2 );
    function philippines_address_type( $philippines_address_types, $form_id ) {
        $philippines_address_types['philippines'] = array (
            'label'       => 'Filipino',
            'country'     => 'Philippines',
            'zip_label'   => 'Province code',
            'state_label' => 'Province',
            'states'      => array (
                ''   => '',
                'AB' => 'Abra',
                'AN' => 'Agusan del Norte',
                'AS' => 'Agusan del Sur',
                'AK' => 'Aklan',
                'AL' => 'Albay',
                'AQ' => 'Antique',
                'AP' => 'Apayao',
                'AU' => 'Aurora',
                'BS' => 'Basilan',
                'BA' => 'Bataan',
                'BN' => 'Batanes',
                'BT' => 'Batangas',
                'BG' => 'Benguet',
                'BI' => 'Biliran',
                'BO' => 'Bohol',
                'BK' => 'Bukidnon',
                'BU' => 'Bulacan',
                'CG' => 'Cagayan',
                'CN' => 'Camarines Norte',
                'CS' => 'Camarines Sur',
                'CM' => 'Camiguin',
                'CP' => 'Capiz',
                'CT' => 'Catanduanes',
                'CV' => 'Cavite',
                'CB' => 'Cebu',
                'CL' => 'Compostela Valley',
                'NC' => 'Cotabato',
                'DV' => 'Davao del Norte',
                'DR' => 'Davao del Sur',
                'DC' => 'Davao Occidental',
                'DO' => 'Davao Oriental',
                'DI' => 'Dinagat Islands',
                'ES' => 'Eastern Samar',
                'GU' => 'Guimaras',
                'IF' => 'Ifugao',
                'IN' => 'Ilocos Norte',
                'IS' => 'Ilocos Sur',
                'II' => 'Iloilo',
                'IB' => 'Isabela',
                'KA' => 'Kalinga',
                'LG' => 'Laguna',
                'LN' => 'Lanao del Norte',
                'LS' => 'Lanao del Sur',
                'LU' => 'La Union',
                'LE' => 'Leyte',
                'MG' => 'Maguindanao',
                'MQ' => 'Marinduque',
                'MB' => 'Masbate',
                'MM' => 'Metropolitan Manila',
                'MD' => 'Misamis Occidental',
                'MN' => 'Misamis Oriental',
                'MT' => 'Mountain',
                'ND' => 'Negros Occidental',
                'NR' => 'Negros Oriental',
                'NS' => 'Northern Samar',
                'NE' => 'Nueva Ecija',
                'NV' => 'Nueva Vizcaya',
                'MC' => 'Occidental Mindoro',
                'MR' => 'Oriental Mindoro',
                'PL' => 'Palawan',
                'PM' => 'Pampanga',
                'PN' => 'Pangasinan',
                'QZ' => 'Quezon',
                'QR' => 'Quirino',
                'RI' => 'Rizal',
                'RO' => 'Romblon',
                'SM' => 'Samar',
                'SG' => 'Sarangani',
                'SQ' => 'Siquijor',
                'SR' => 'Sorsogon',
                'SC' => 'South Cotabato',
                'SL' => 'Southern Leyte',
                'SK' => 'Sultan Kudarat',
                'SU' => 'Sulu',
                'ST' => 'Surigao del Norte',
                'SS' => 'Surigao del Sur',
                'TR' => 'Tarlac',
                'TT' => 'Tawi-Tawi',
                'ZM' => 'Zambales',
                'ZN' => 'Zamboanga del Norte',
                'ZS' => 'Zamboanga del Sur',
                'ZY' => 'Zamboanga-Sibugay'
            )
        );
        return $philippines_address_types;
    }
}

function gfba_romania() {
    add_filter( 'gform_address_types', 'romanian_address_type', 10, 2 );
    function romanian_address_type( $romanian_address_types, $form_id ) {
        $romanian_address_types['romania'] = array (
            'label'       => 'Romanian',
            'country'     => 'Romania',
            'zip_label'   => 'Country code',
            'state_label' => 'Country',
            'states'      => array (
                ''  => '',
                'AB' => 'Alba',
                'AR' => 'Arad',
                'AG' => 'Argeș',
                'BC' => 'Bacău',
                'BH' => 'Bihor',
                'BN' => 'Bistrița-Năsăud',
                'BT' => 'Botoșani',
                'BR' => 'Brăila',
                'BV' => 'Brașov',
                'BI' => 'Bucharest',
                'BZ' => 'Buzău',
                'CL' => 'Călărași',
                'CS' => 'Caraș-Severin',
                'CJ' => 'Cluj',
                'CT' => 'Constanța',
                'CV' => 'Covasna',
                'DB' => 'Dâmbovița',
                'DJ' => 'Dolj',
                'GL' => 'Galați',
                'GR' => 'Giurgiu',
                'GJ' => 'Gorj',
                'HR' => 'Harghita',
                'HD' => 'Hunedoara',
                'IL' => 'Ialomița',
                'IS' => 'Iași',
                'IF' => 'Ilfov',
                'MM' => 'Maramureș',
                'MH' => 'Mehedinți',
                'MS' => 'Mureș',
                'NT' => 'Neamț',
                'OT' => 'Olt',
                'PH' => 'Prahova',
                'SJ' => 'Sălaj',
                'SM' => 'Satu Mare',
                'SB' => 'Sibiu',
                'SV' => 'Suceava',
                'TR' => 'Teleorman',
                'TM' => 'Timiș',
                'TL' => 'Tulcea',
                'VL' => 'Vâlcea',
                'VS' => 'Vaslui',
                'VN' => 'Vrancea'
            )
        );
        return $romanian_address_types;
    }
}

function gfba_south_africa() {
    add_filter( 'gform_address_types', 'south_african_address_type', 10, 2 );
    function south_african_address_type( $south_african_address_types, $form_id ) {
        $south_african_address_types['south_africa'] = array (
            'label'       => 'South African',
            'country'     => 'South Africa',
            'zip_label'   => 'Province code',
            'state_label' => 'Province',
            'states'      => array (
                ''  => '',
                'EC' => 'Eastern Cape',
                'FS' => 'Free State',
                'GT' => 'Gauteng',
                'NL' => 'KwaZulu-Natal',
                'NP' => 'Limpopo',
                'MP' => 'Mpumalanga',
                'NC' => 'Northern Cape',
                'NW' => 'North-West',
                'WC' => 'Western Cape'
            )
        );
        return $south_african_address_types;
    }
}

function gfba_spain() {
    add_filter( 'gform_address_types', 'spain_address_type', 10, 2 );
    function spain_address_type( $spain_address_types, $form_id ) {
        $spain_address_types['spain'] = array (
            'label'       => 'Spanish',
            'country'     => 'Spain',
            'zip_label'   => 'Province code',
            'state_label' => 'Province',
            'states'      => array (
                ''  => '',
                'C' => 'A Coruña',		
                'AB' => 'Albacete',                
                'A' => 'Alicante',                
                'AL' => 'Almería',                
                'VI' => 'Araba/Álava',                
                'O' => 'Asturias',                
                'AV' => 'Ávila',                
                'BA' => 'Badajoz',                
                'PM' => 'Baleares',                
                'B' => 'Barcelona',                
                'BI' => 'Bizkaia',                
                'BU' => 'Burgos',                
                'CC' => 'Cáceres',                
                'CA' => 'Cádiz',                
                'S' => 'Cantabria',                
                'CS' => 'Castellón',                
                'CE' => 'Ceuta',                
                'CR' => 'Ciudad Real',                
                'CO' => 'Córdoba',                
                'CU' => 'Cuenca',                
                'SS' => 'Gipuzkoa',                
                'GI' => 'Girona',                
                'GR' => 'Granada',                
                'GU' => 'Guadalajara',                
                'H' => 'Huelva',                
                'HU' => 'Huesca',                
                'J' => 'Jaén',                
                'LO' => 'La Rioja',                
                'GC' => 'Las Palmas',                
                'LE' => 'León',                
                'L' => 'Lleida',                
                'LU' => 'Lugo',                
                'M' => 'Madrid',                
                'MA' => 'Málaga',                
                'ML' => 'Melilla',                
                'MU' => 'Murcia',                
                'NA' => 'Navarra',                
                'OR' => 'Ourense',                
                'P' => 'Palencia',                
                'PO' => 'Pontevedra',                
                'SA' => 'Salamanca',                
                'TF' => 'Santa Cruz de Tenerife',                
                'SG' => 'Segovia',                
                'SE' => 'Sevilla',                
                'SO' => 'Soria',                
                'T' => 'Tarragona',                
                'TE' => 'Teruel',                
                'TO' => 'Toledo',                
                'V' => 'Valencia'
            )
        );
        return $spain_address_types;
    }
}

function gfba_switzerland() {
    add_filter( 'gform_address_types', 'switzerland_address_type', 10, 2 );
    function switzerland_address_type( $switzerland_address_types, $form_id ) {
        $switzerland_address_types['switzerland'] = array (
            'label'       => 'Swiss',
            'country'     => 'Switzerland',
            'zip_label'   => 'Canton code',
            'state_label' => 'Canton',
            'states'      => array (
                ''   => '',
                'AG' => 'Aargau',
                'AI' => 'Appenzell Inner Rhodes',
                'AR' => 'Appenzell Outer Rhodes',
                'BL' => 'Basel-Landschaft',
                'BS' => 'Basel-Stadt',
                'BE' => 'Bern',
                'FR' => 'Fribourg',
                'GE' => 'Geneva',
                'GL' => 'Glarus',
                'GR' => 'Graubünden',
                'JU' => 'Jura',
                'LU' => 'Lucerne',
                'NE' => 'Neuchâtel',
                'NW' => 'Nidwalden',
                'OW' => 'Obwalden',
                'SG' => 'Sankt Gallen',
                'SH' => 'Schaffhausen',
                'SZ' => 'Schwyz',
                'SO' => 'Solothurn',
                'TG' => 'Thurgau',
                'TI' => 'Ticino',
                'UR' => 'Uri',
                'VS' => 'Valais',
                'VD' => 'Vaud',
                'ZG' => 'Zug',
                'ZH' => 'Zurich'
            )
        );
        return $switzerland_address_types;
    }
}

function gfba_tanzania() {
    add_filter( 'gform_address_types', 'tanzania_address_type', 10, 2 );
    function tanzania_address_type( $tanzania_address_types, $form_id ) {
        $tanzania_address_types['tanzania'] = array (
            'label'       => 'Tanzanian',
            'country'     => 'Tanzania',
            'zip_label'   => 'Region code',
            'state_label' => 'Region',
            'states'      => array (
                ''   => '',
                'AS' => 'Arusha',
                'DS' => 'Dar es Salaam',
                'DO' => 'Dodoma',
                'GE' => 'Geita',
                'IG' => 'Iringa',
                'KG' => 'Kagera',
                'KA' => 'Katavi',
                'KM' => 'Kigoma',
                'KL' => 'Kilimanjaro',
                'LI' => 'Lindi',
                'MY' => 'Manyara',
                'MA' => 'Mara',
                'MB' => 'Mbeya',
                'MO' => 'Morogoro',
                'MT' => 'Mtwara',
                'MZ' => 'Mwanza',
                'NJ' => 'Njombe',
                'PN' => 'Pemba North',
                'PS' => 'Pemba South',
                'PW' => 'Pwani',
                'RU' => 'Rukwa',
                'RV' => 'Ruvuma',
                'SY' => 'Shinyanga',
                'SI' => 'Simiyu',
                'SD' => 'Singida',
                'TB' => 'Tabora',
                'TN' => 'Tanga',
                'ZN' => 'Zanzibar North',
                'ZS' => 'Zanzibar South and Central',
                'ZW' => 'Zanzibar West'
            )
        );
        return $tanzania_address_types;
    }
}

function gfba_thailand() {
    add_filter( 'gform_address_types', 'thailand_address_type', 10, 2 );
    function thailand_address_type( $thailand_address_types, $form_id ) {
        $thailand_address_types['thailand'] = array (
            'label'       => 'Thai',
            'country'     => 'Thailand',
            'zip_label'   => 'Province code',
            'state_label' => 'Province',
            'states'      => array (
                ''   => '',
                'AC' => 'Amnat Charoen',
                'AT' => 'Ang Thong',
                'BM' => 'Bangkok Metropolis',
                'BK' => 'Bueng Kan',
                'BR' => 'Buri Ram',
                'CC' => 'Chachoengsao',
                'CN' => 'Chai Nat',
                'CY' => 'Chaiyaphum',
                'CT' => 'Chanthaburi',
                'CM' => 'Chiang Mai',
                'CR' => 'Chiang Rai',
                'CB' => 'Chon Buri',
                'CP' => 'Chumphon',
                'KL' => 'Kalasin',
                'KP' => 'Kamphaeng Phet',
                'KN' => 'Kanchanaburi',
                'KK' => 'Khon Kaen',
                'KR' => 'Krabi',
                'LG' => 'Lampang',
                'LN' => 'Lamphun',
                'LE' => 'Loei',
                'LB' => 'Lop Buri',
                'MH' => 'Mae Hong Son',
                'MS' => 'Maha Sarakham',
                'MD' => 'Mukdahan',
                'NN' => 'Nakhon Nayok',
                'NP' => 'Nakhon Pathom',
                'NF' => 'Nakhon Phanom',
                'NR' => 'Nakhon Ratchasima',
                'NS' => 'Nakhon Sawan',
                'NT' => 'Nakhon Si Thammarat',
                'NA' => 'Nan',
                'NW' => 'Narathiwat',
                'NB' => 'Nong Bua Lam Phu',
                'NH' => 'Nong Khai',
                'NO' => 'Nonthaburi',
                'PT' => 'Pathum Thani',
                'PI' => 'Pattani',
                'PG' => 'Phangnga',
                'PL' => 'Phatthalung',
                'PY' => 'Phayao',
                'PH' => 'Phetchabun',
                'PE' => 'Phetchaburi',
                'PC' => 'Phichit',
                'PS' => 'Phitsanulok',
                'PR' => 'Phrae',
                'PA' => 'Phra Nakhon Si Ayutthaya',
                'PU' => 'Phuket',
                'PB' => 'Prachin Buri',
                'PK' => 'Prachuap Khiri Khan',
                'RN' => 'Ranong',
                'RT' => 'Ratchaburi',
                'RY' => 'Rayong',
                'RE' => 'Roi Et',
                'SK' => 'Sa Kaeo',
                'SN' => 'Sakon Nakhon',
                'SP' => 'Samut Prakan',
                'SS' => 'Samut Sakhon',
                'SM' => 'Samut Songkhram',
                'SR' => 'Saraburi',
                'SA' => 'Satun',
                'SB' => 'Sing Buri',
                'SI' => 'Si Sa Ket',
                'SG' => 'Songkhla',
                'SO' => 'Sukhothai',
                'SH' => 'Suphan Buri',
                'ST' => 'Surat Thani',
                'SU' => 'Surin',
                'TK' => 'Tak',
                'TG' => 'Trang',
                'TT' => 'Trat',
                'UR' => 'Ubon Ratchathani',
                'UN' => 'Udon Thani',
                'UT' => 'Uthai Thani',
                'UD' => 'Uttaradit',
                'YL' => 'Yala',
                'YS' => 'Yasothon'
            )
        );
        return $thailand_address_types;
    }
}

function gfba_turkey() {
    add_filter( 'gform_address_types', 'turkey_address_type', 10, 2 );
    function turkey_address_type( $turkey_address_types, $form_id ) {
        $turkey_address_types['turkey'] = array (
            'label'       => 'Turkish',
            'country'     => 'Turkey',
            'zip_label'   => 'Province code',
            'state_label' => 'Province',
            'states'      => array (
                ''   => '',
                'AA' => 'Adana',
                'AD' => 'Adıyaman',
                'AF' => 'Afyonkarahisar',
                'AG' => 'Ağri',
                'AK' => 'Aksaray',
                'AM' => 'Amasya',
                'AN' => 'Ankara',
                'AL' => 'Antalya',
                'AR' => 'Ardahan',
                'AV' => 'Artvin',
                'AY' => 'Aydın',
                'BK' => 'Balıkesir',
                'BR' => 'Bartın',
                'BM' => 'Batman',
                'BB' => 'Bayburt',
                'BC' => 'Bilecik',
                'BG' => 'Bingöl',
                'BT' => 'Bitlis',
                'BL' => 'Bolu',
                'BD' => 'Burdur',
                'BU' => 'Bursa',
                'CK' => 'Çanakkale',
                'CI' => 'Çankırı',
                'CM' => 'Çorum',
                'DN' => 'Denizli',
                'DY' => 'Diyarbakır',
                'DU' => 'Düzce',
                'ED' => 'Edirne',
                'EG' => 'Elazığ',
                'EN' => 'Erzincan',
                'EM' => 'Erzurum',
                'ES' => 'Eskişehir',
                'GA' => 'Gaziantep',
                'GI' => 'Giresun',
                'GU' => 'Gümüşhane',
                'HK' => 'Hakkari',
                'HT' => 'Hatay',
                'IG' => 'Iğdır',
                'IP' => 'Isparta',
                'IB' => 'İstanbul',
                'IZ' => 'İzmir',
                'KM' => 'Kahramanmaraş',
                'KB' => 'Karabük',
                'KR' => 'Karaman',
                'KA' => 'Kars',
                'KS' => 'Kastamonu',
                'KY' => 'Kayseri',
                'KI' => 'Kilis',
                'KK' => 'Kırıkkale',
                'KL' => 'Kırklareli',
                'KH' => 'Kırşehir',
                'KC' => 'Kocaeli',
                'KO' => 'Konya',
                'KU' => 'Kütahya',
                'ML' => 'Malatya',
                'MN' => 'Manisa',
                'MR' => 'Mardin',
                'IC' => 'Mersin',
                'MG' => 'Muğla',
                'MS' => 'Muş',
                'NV' => 'Nevşehir',
                'NG' => 'Niğde',
                'OR' => 'Ordu',
                'OS' => 'Osmaniye',
                'RI' => 'Rize',
                'SK' => 'Sakarya',
                'SS' => 'Samsun',
                'SU' => 'Şanlıurfa',
                'SI' => 'Siirt',
                'SP' => 'Sinop',
                'SR' => 'Şırnak',
                'SV' => 'Sivas',
                'TG' => 'Tekirdağ',
                'TT' => 'Tokat',
                'TB' => 'Trabzon',
                'TC' => 'Tunceli',
                'US' => 'Uşak',
                'VA' => 'Van',
                'YL' => 'Yalova',
                'YZ' => 'Yozgat',
                'ZO' => 'Zonguldak'
            )
        );
        return $turkey_address_types;
    }
}

function gfba_united_kingdom() {
    add_filter( 'gform_address_types', 'united_kingdom_address_type', 10, 2 );
    function united_kingdom_address_type( $united_kingdom_address_types, $form_id ) {
        $united_kingdom_address_types['united_kingdom'] = array (
            'label'       => 'British',
            'country'     => 'United Kingdom',
            'zip_label'   => 'County code',
            'state_label' => 'County',
            'states'      => array (
                ''  => '',
                'Aberdeenshire'                 => 'Aberdeenshire',
                'Angus/Forfarshire'             => 'Angus/Forfarshire',
                'Argyllshire'                   => 'Argyllshire',
                'Ayrshire'                      => 'Ayrshire',
                'Banffshire'                    => 'Banffshire',
                'Bedfordshire'                  => 'Bedfordshire',
                'Berkshire'                     => 'Berkshire',
                'Berwickshire'                  => 'Berwickshire',
                'Blaenau Gwent'                 => 'Blaenau Gwent',
                'Bridgend'                      => 'Bridgend',
                'Buckinghamshire'               => 'Buckinghamshire',
                'Buteshire'                     => 'Buteshire',
                'Caerphilly'                    => 'Caerphilly',
                'Caithness'                     => 'Caithness',
                'Cambridgeshire'                => 'Cambridgeshire',
                'Cardiff'                       => 'Cardiff',
                'Carmarthenshire'               => 'Carmarthenshire',
                'Ceredigion'                    => 'Ceredigion',
                'Cheshire'                      => 'Cheshire',
                'Clackmannanshire'              => 'Clackmannanshire',
                'Conwy'                         => 'Conwy',
                'Cornwall'                      => 'Cornwall',
                'Cromartyshire'                 => 'Cromartyshire',
                'Cumberland'                    => 'Cumberland',
                'Denbighshire'                  => 'Denbighshire',
                'Derbyshire'                    => 'Derbyshire',
                'Devon'                         => 'Devon',
                'Dorset'                        => 'Dorset',
                'Dumfriesshire'                 => 'Dumfriesshire',
                'Dunbartonshire/Dumbartonshire' => 'Dunbartonshire/Dumbartonshire',
                'Durham'                        => 'Durham',
                'East Lothian/Haddingtonshire'  => 'East Lothian/Haddingtonshire',
                'Essex'                         => 'Essex',
                'Fife'                          => 'Fife',
                'Flintshire'                    => 'Flintshire',
                'Gloucestershire'               => 'Gloucestershire',
                'Gwynedd'                       => 'Gwynedd',
                'Hampshire'                     => 'Hampshire',
                'Herefordshire'                 => 'Herefordshire',
                'Hertfordshire'                 => 'Hertfordshire',
                'Huntingdonshire'               => 'Huntingdonshire',
                'Inverness-shire'               => 'Inverness-shire',
                'Isle of Anglesey'              => 'Isle of Anglesey',
                'Kent'                          => 'Kent',
                'Kincardineshire'               => 'Kincardineshire',
                'Kinross-shire'                 => 'Kinross-shire',
                'Kirkcudbrightshire'            => 'Kirkcudbrightshire',
                'Lanarkshire'                   => 'Lanarkshire',
                'Lancashire'                    => 'Lancashire',
                'Leicestershire'                => 'Leicestershire',
                'Lincolnshire'                  => 'Lincolnshire',
                'Merthyr Tydfil'                => 'Merthyr Tydfil',
                'Middlesex'                     => 'Middlesex',
                'Midlothian/Edinburghshire'     => 'Midlothian/Edinburghshire',
                'Monmouthshire'                 => 'Monmouthshire',
                'Morayshire'                    => 'Morayshire',
                'Nairnshire'                    => 'Nairnshire',
                'Neath Port Talbot'             => 'Neath Port Talbot',
                'Newport'                       => 'Newport',
                'Norfolk'                       => 'Norfolk',
                'Northamptonshire'              => 'Northamptonshire',
                'Northern Ireland'              => 'Northern Ireland',
                'Northumberland'                => 'Northumberland',
                'Nottinghamshire'               => 'Nottinghamshire',
                'Orkney'                        => 'Orkney',
                'Oxfordshire'                   => 'Oxfordshire',
                'Peeblesshire'                  => 'Peeblesshire',
                'Pembrokeshire'                 => 'Pembrokeshire',
                'Perthshire'                    => 'Perthshire',
                'Powys'                         => 'Powys',
                'Renfrewshire'                  => 'Renfrewshire',
                'Rhondda Cynon Taff'            => 'Rhondda Cynon Taff',
                'Ross-shire'                    => 'Ross-shire',
                'Roxburghshire'                 => 'Roxburghshire',
                'Rutland'                       => 'Rutland',
                'Selkirkshire'                  => 'Selkirkshire',
                'Shetland'                      => 'Shetland',
                'Shropshire'                    => 'Shropshire',
                'Somerset'                      => 'Somerset',
                'Staffordshire'                 => 'Staffordshire',
                'Stirlingshire'                 => 'Stirlingshire',
                'Suffolk'                       => 'Suffolk',
                'Surrey'                        => 'Surrey',
                'Sussex'                        => 'Sussex',
                'Sutherland'                    => 'Sutherland',
                'Swansea'                       => 'Swansea',
                'Torfaen'                       => 'Torfaen',
                'Vale of Glamorgan'             => 'Vale of Glamorgan',
                'Warwickshire'                  => 'Warwickshire',
                'West Lothian/Linlithgowshire'  => 'West Lothian/Linlithgowshire',
                'Westmorland'                   => 'Westmorland',
                'Wigtownshire'                  => 'Wigtownshire',
                'Wiltshire'                     => 'Wiltshire',
                'Worcestershire'                => 'Worcestershire',
                'Wrexham'                       => 'Wrexham',
                'Yorkshire'                     => 'Yorkshire'
            )
        );
        return $united_kingdom_address_types;
    }
}