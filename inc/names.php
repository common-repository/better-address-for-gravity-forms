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
                'Australian Capital Territory'   => 'Australian Capital Territory',
                'Northern Territory'    => 'Northern Territory',
                'New South Wales'   => 'New South Wales',
                'Queensland'   => 'Queensland',
                'South Australia'    => 'South Australia',
                'Tasmania'   => 'Tasmania',
                'Victoria'   => 'Victoria',
                'Western Australia'    => 'Western Australia'
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
                'Acre' => 'Acre',		
                'Alagoas' => 'Alagoas',		
                'Amapá' => 'Amapá',		
                'Amazonas' => 'Amazonas',		
                'Bahia' => 'Bahia',		
                'Ceará' => 'Ceará',		
                'Distrito Federal' => 'Distrito Federal',		
                'Espírito Santo' => 'Espírito Santo',		
                'Goiás' => 'Goiás',		
                'Maranhão' => 'Maranhão',		
                'Mato Grosso' => 'Mato Grosso',		
                'Mato Grosso do Sul' => 'Mato Grosso do Sul',		
                'Minas Gerais' => 'Minas Gerais',		
                'Pará' => 'Pará',		
                'Paraíba' => 'Paraíba',		
                'Paraná' => 'Paraná',		
                'Pernambuco' => 'Pernambuco',		
                'Piauí' => 'Piauí',		
                'Rio de Janeiro' => 'Rio de Janeiro',		
                'Rio Grande do Norte' => 'Rio Grande do Norte',		
                'Rio Grande do Sul' => 'Rio Grande do Sul',		
                'Rondônia' => 'Rondônia',		
                'Roraima' => 'Roraima',		
                'Santa Catarina' => 'Santa Catarina',		
                'São Paulo' => 'São Paulo',		
                'Sergipe' => 'Sergipe',		
                'Tocantins' => 'Tocantins'
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
                'Bengo'   => 'Bengo',
                'Benguela'   => 'Benguela',
                'Bié'   => 'Bié',
                'Cabinda'   => 'Cabinda',
                'Cunene'   => 'Cunene',
                'Huambo'   => 'Huambo',
                'Huíla'   => 'Huíla',
                'Kuando Kubango'   => 'Kuando Kubango',
                'Kwanza Norte'   => 'Kwanza Norte',
                'Kwanza Sul'   => 'Kwanza Sul',
                'Luanda'   => 'Luanda',
                'Lunda Norte'   => 'Lunda Norte',
                'Lunda Sul'   => 'Lunda Sul',
                'Malanje'   => 'Malanje',
                'Moxico'   => 'Moxico',
                'Namibe'   => 'Namibe',
                'Uíge'   => 'Uíge',
                'Zaire'   => 'Zaire'
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
                'Drenthe'    => 'Drenthe',
                'Flevoland'    => 'Flevoland',
                'Friesland'    => 'Friesland',
                'Gelderland'    => 'Gelderland',
                'Groningen'    => 'Groningen',
                'Limburg'    => 'Limburg',
                'Noord-Brabant'    => 'Noord-Brabant',
                'Noord-Holland'    => 'Noord-Holland',
                'Overijssel'    => 'Overijssel',
                'Utrecht'    => 'Utrecht',
                'Zeeland'    => 'Zeeland',
                'Zuid-Holland'    => 'Zuid-Holland'
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
                'Buenos Aires' => 'Buenos Aires',
                'Catamarca' => 'Catamarca',
                'Chaco' => 'Chaco',
                'Chubut' => 'Chubut',
                'Córdoba' => 'Córdoba',
                'Corrientes' => 'Corrientes',
                'Entre Ríos' => 'Entre Ríos',
                'Formosa' => 'Formosa',
                'Jujuy' => 'Jujuy',
                'La Pampa' => 'La Pampa',
                'La Rioja' => 'La Rioja',
                'Mendoza' => 'Mendoza',
                'Misiones' => 'Misiones',
                'Neuquén' => 'Neuquén',
                'Río Negro' => 'Río Negro',
                'Salta' => 'Salta',
                'San Juan' => 'San Juan',
                'San Luis' => 'San Luis',
                'Santa Cruz' => 'Santa Cruz',
                'Santa Fe' => 'Santa Fe',
                'Santiago del Estero' => 'Santiago del Estero',
                'Tierra del Fuego' => 'Tierra del Fuego',
                'Tucumán' => 'Tucumán'
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
                'Bagerhat' => 'Bagerhat',
                'Bandarban' => 'Bandarban',
                'Barguna' => 'Barguna',
                'Barisal' => 'Barisal',
                'Bhola' => 'Bhola',
                'Bogra' => 'Bogra',
                'Brahmanbaria' => 'Brahmanbaria',
                'Chandpur' => 'Chandpur',
                'Chittagong' => 'Chittagong',
                'Chuadanga' => 'Chuadanga',
                'Comilla' => 'Comilla',
                'Cox\'s Bazar' => 'Cox\'s Bazar',
                'Dhaka' => 'Dhaka',
                'Dinajpur' => 'Dinajpur',
                'Faridpur' => 'Faridpur',
                'Feni' => 'Feni',
                'Gaibandha' => 'Gaibandha',
                'Gazipur' => 'Gazipur',
                'Gopalganj' => 'Gopalganj',
                'Habiganj' => 'Habiganj',
                'Jaipurhat' => 'Jaipurhat',
                'Jamalpur' => 'Jamalpur',
                'Jessore' => 'Jessore',
                'Jhalakati' => 'Jhalakati',
                'Jhenaidah' => 'Jhenaidah',
                '29' => 'Jhenaidah',
                'Khulna' => 'Khulna',
                'Kishoreganj' => 'Kishoreganj',
                'Kurigram' => 'Kurigram',
                'Kushtia' => 'Kushtia',
                'Lakshmipur' => 'Lakshmipur',
                'Lalmonirhat' => 'Lalmonirhat',
                'Madaripur' => 'Madaripur',
                'Magura' => 'Magura',
                'Manikganj' => 'Manikganj',
                'Meherpur' => 'Meherpur',
                'Moulvibazar' => 'Moulvibazar',
                'Munshiganj' => 'Munshiganj',
                'Mymensingh' => 'Mymensingh',
                'Naogaon' => 'Naogaon',
                'Narail' => 'Narail',
                'Narayanganj' => 'Narayanganj',
                'Narsingdi' => 'Narsingdi',
                'Natore' => 'Natore',
                'Nawabganj' => 'Nawabganj',
                'Netrakona' => 'Netrakona',
                'Nilphamari' => 'Nilphamari',
                'Noakhali' => 'Noakhali',
                'Pabna' => 'Pabna',
                'Panchagarh' => 'Panchagarh',
                'Parbattya Chattagram' => 'Parbattya Chattagram',
                'Patuakhali' => 'Patuakhali',
                'Pirojpur' => 'Pirojpur',
                'Rajbari' => 'Rajbari',
                'Rajshahi' => 'Rajshahi',
                'Rangpur' => 'Rangpur',
                'Satkhira' => 'Satkhira',
                'Shariatpur' => 'Shariatpur',
                'Sherpur' => 'Sherpur',
                'Sirajganj' => 'Sirajganj',
                'Sunamganj' => 'Sunamganj',
                'Sylhet' => 'Sylhet',
                'Tangail' => 'Tangail',
                'Thakurgaon' => 'Thakurgaon'
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
                'Chuquisaca' => 'Chuquisaca',
                'Cochabamba' => 'Cochabamba',
                'El Beni' => 'El Beni',
                'La Paz' => 'La Paz',
                'Oruro' => 'Oruro',
                'Pando' => 'Pando',
                'Potosí' => 'Potosí',
                'Santa Cruz' => 'Santa Cruz',
                'Tarija' => 'Tarija'
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
                'Blagoevgrad' => 'Blagoevgrad',
                'Burgas' => 'Burgas',                
                'Dobrich' => 'Dobrich',                
                'Gabrovo' => 'Gabrovo',                
                'Haskovo' => 'Haskovo',                
                'Kardzhali' => 'Kardzhali',                
                'Kyustendil' => 'Kyustendil',                
                'Lovech' => 'Lovech',                
                'Montana' => 'Montana',                
                'Pazardzhik' => 'Pazardzhik',                
                'Pernik' => 'Pernik',                
                'Pleven' => 'Pleven',                
                'Plovdiv' => 'Plovdiv',                
                'Razgrad' => 'Razgrad',                
                'Ruse' => 'Ruse',                
                'Shumen' => 'Shumen',                
                'Silistra' => 'Silistra',                
                'Sliven' => 'Sliven',                
                'Smolyan' => 'Smolyan',                
                'Sofia' => 'Sofia',                
                'Sofia-Grad' => 'Sofia-Grad',                
                'Stara Zagora' => 'Stara Zagora',                
                'Targovishte' => 'Targovishte',                
                'Varna' => 'Varna',                
                'Veliko Tarnovo' => 'Veliko Tarnovo',                
                'Vidin' => 'Vidin',                
                'Vratsa' => 'Vratsa',                
                'Yambol' => 'Yambol'
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
                'Anhui' => 'Anhui',		
                'Beijing' => 'Beijing',		
                'Chongqing' => 'Chongqing',		
                'Fujian' => 'Fujian',		
                'Gansu' => 'Gansu',		
                'Guangdong' => 'Guangdong',		
                'Guangxi Zhuangzu' => 'Guangxi Zhuangzu',		
                'Guizhou' => 'Guizhou',		
                'Hainan' => 'Hainan',		
                'Hebei' => 'Hebei',		
                'Heilongjiang' => 'Heilongjiang',		
                'Henan' => 'Henan',		
                'Hubei' => 'Hubei',		
                'Hunan' => 'Hunan',		
                'Inner Mongolia' => 'Inner Mongolia',		
                'Jiangsu' => 'Jiangsu',		
                'Jiangxi' => 'Jiangxi',		
                'Jilin' => 'Jilin',		
                'Liaoning' => 'Liaoning',		
                'Macau' => 'Macau',		
                'Ningxia Huizi' => 'Ningxia Huizi',		
                'Qinghai' => 'Qinghai',		
                'Shaanxi' => 'Shaanxi',		
                'Shandong' => 'Shandong',		
                'Shanghai' => 'Shanghai',		
                'Shanxi' => '',		
                'Sichuan' => 'Sichuan',		
                'Tianjin' => 'Tianjin',		
                'Tibet' => 'Tibet',		
                'Xinjiang' => 'Xinjiang',		
                'Yunnan' => 'Yunnan',		
                'Zhejiang' => 'Zhejiang'
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
                'Attica' => 'Attica',		
                'Central Greece' => 'Central Greece',		
                'Central Macedonia' => 'Central Macedonia',		
                'Crete' => 'Crete',		
                'Eastern Macedonia and Thrace' => 'Eastern Macedonia and Thrace',		
                'Epirus' => 'Epirus',		
                'Ionian Islands' => 'Ionian Islands',		
                'Northern Aegean' => 'Northern Aegean',		
                'JPeloponnese' => 'Peloponnese',		
                'Southern Aegean' => 'Southern Aegean',		
                'Thessaly' => 'Thessaly',		
                'Western Greece' => 'Western Greece',		
                'Western Macedonia' => 'Western Macedonia'
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
                'Central and Western' => 'Central and Western',
                'Eastern' => 'Eastern',
                'Islands' => 'Islands',
                'Kowloon City' => 'Kowloon City',
                'Kwai Tsing' => 'Kwai Tsing',
                'Kwun Tong' => 'Kwun Tong',
                'North' => 'North',
                'Sai Kung' => 'Sai Kung',
                'Sham Shui Po' => 'Sham Shui Po',
                'Sha Tin' => 'Sha Tin',
                'Southern' => 'Southern',
                'Tai Po' => 'Tai Po',
                'Tsuen Wan' => 'Tsuen Wan',
                'Tuen Mun' => 'Tuen Mun',
                'Wan Chai' => 'Wan Chai',
                'Wong Tai Sin' => 'Wong Tai Sin',
                'Yau Tsim Mong' => 'Yau Tsim Mong',
                'Yuen Long' => 'Yuen Long'
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
                'Bács-Kiskun' => 'Bács-Kiskun',
                'Baranya' => 'Baranya',
                'Békés' => 'Békés',
                'Békéscsaba' => 'Békéscsaba',
                'Borsod-Abaúj-Zemplén' => 'Borsod-Abaúj-Zemplén',
                'Budapest' => 'Budapest',
                'Csongrád' => 'Csongrád',
                'Debrecen' => 'Debrecen',
                'Dunaújváros' => 'Dunaújváros',
                'Eger' => 'Eger',
                'Érd' => 'Érd',
                'Fejér' => 'Fejér',
                'Győr' => 'Győr',
                'Győr-Moson-Sopron' => 'Győr-Moson-Sopron',
                'Hajdú-Bihar' => 'Hajdú-Bihar',
                'Heves' => 'Heves',
                'Hódmezővásárhely' => 'Hódmezővásárhely',
                'Jász-Nagykun-Szolnok' => 'Jász-Nagykun-Szolnok',
                'Kaposvár' => 'Kaposvár',
                'Kecskemét' => 'Kecskemét',
                'Komárom-Esztergom' => 'Komárom-Esztergom',
                'Miskolc' => 'Miskolc',
                'Nagykanizsa' => 'Nagykanizsa',
                'Nógrád' => 'Nógrád',
                'Nyíregyháza' => 'Nyíregyháza',
                'Pécs' => 'Pécs',
                'Pest' => 'Pest',
                'Salgótarján' => 'Salgótarján',
                'Somogy' => 'Somogy',
                'Sopron' => 'Sopron',
                'Szabolcs-Szatmár-Bereg' => 'Szabolcs-Szatmár-Bereg',
                'Szeged' => 'Szeged',
                'Székesfehérvár' => 'Székesfehérvár',
                'Szekszárd' => 'Szekszárd',
                'Szolnok' => 'Szolnok',
                'Szombathely' => 'Szombathely',
                'Tatabánya' => 'Tatabánya',
                'Tolna' => 'Tolna',
                'Vas' => 'Vas',
                'Veszprém' => 'Veszprém',
                'Veszprém' => 'Veszprém',
                'Zala' => 'Zala',
                'Zalaegerszeg' => 'Zalaegerszeg'
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
                'Andaman and Nicobar Islands' => 'Andaman and Nicobar Islands',
                'Andhra Pradesh' => 'Andhra Pradesh',
                'Arunachal Pradesh' => 'Arunachal Pradesh',
                'Assam' => 'Assam',
                'Bihar' => 'Bihar',
                'Chandigarh' => 'Chandigarh',
                'Chhattisgarh' => 'Chhattisgarh',
                'Dadra and Nagar Haveli' => 'Dadra and Nagar Haveli',
                'Daman and Diu' => 'Daman and Diu',
                'Delhi' => 'Delhi',
                'Goa' => 'Goa',
                'Gujarat' => 'Gujarat',
                'Haryana' => 'Haryana',
                'Himachal Pradesh' => 'Himachal Pradesh',
                'Jammu and Kashmir' => 'Jammu and Kashmir',
                'Jharkhand' => 'Jharkhand',
                'Karnataka' => 'Karnataka',
                'Kerala' => 'Kerala',
                'Lakshadweep' => 'Lakshadweep',
                'Madhya Pradesh' => 'Madhya Pradesh',
                'Maharashtra' => 'Maharashtra',
                'Manipur' => 'Manipur',
                'Meghalaya' => 'Meghalaya',
                'Mizoram' => 'Mizoram',
                'Nagaland' => 'Nagaland',
                'Odisha' => 'Odisha',
                'Puducherry' => 'Puducherry',
                'Punjab' => 'Punjab',
                'Rajasthan' => 'Rajasthan',
                'Sikkim' => 'Sikkim',
                'Tamil Nadu' => 'Tamil Nadu',
                'Telangana' => 'Telangana',
                'Tripura' => 'Tripura',
                'Uttarakhand' => 'Uttarakhand',
                'Uttar Pradesh' => 'Uttar Pradesh',
                'West Bengal' => 'West Bengal'
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
                'Aceh' => 'Aceh',
                'Bali' => 'Bali',
                'Bangka-Belitung' => 'Bangka-Belitung',
                'Banten' => 'Banten',
                'Bengkulu' => 'Bengkulu',
                'Gorontalo' => 'Gorontalo',
                'Jakarta Raya' => 'Jakarta Raya',
                'Jambi' => 'Jambi',
                'Jawa Barat' => 'Jawa Barat',
                'Jawa Tengah' => 'Jawa Tengah',
                'Jawa Timur' => 'Jawa Timur',
                'Kalimantan Barat' => 'Kalimantan Barat',
                'Kalimantan Selatan' => 'Kalimantan Selatan',
                'Kalimantan Tengah' => 'Kalimantan Tengah',
                'Kalimantan Timur' => 'Kalimantan Timur',
                'Kalimantan Utara' => 'Kalimantan Utara',
                'Kepulauan Riau' => 'Kepulauan Riau',
                'Lampung' => 'Lampung',
                'Maluku' => 'Maluku',
                'Maluku Utara' => 'Maluku Utara',
                'Nusa Tenggara Barat' => 'Nusa Tenggara Barat',
                'Nusa Tenggara Timur' => 'Nusa Tenggara Timur',
                'Papua' => 'Papua',
                'Papua Barat' => 'Papua Barat',
                'Riau' => 'Riau',
                'Sulawesi Barat' => 'Sulawesi Barat',
                'Sulawesi Selatan' => 'Sulawesi Selatan',
                'Sulawesi Tengah' => 'Sulawesi Tengah',
                'Sulawesi Tenggara' => 'Sulawesi Tenggara',
                'Sulawesi Utara' => 'Sulawesi Utara',
                'Sumatera Barat' => 'Sumatera Barat',
                'Sumatera Selatan' => 'Sumatera Selatan',
                'Sumatera Utara' => 'Sumatera Utara',
                'Yogyakarta' => 'Yogyakarta'
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
                'Alborz' => 'Alborz',
                'Ardebil' => 'Ardebil',
                'Bushehr' => 'Bushehr',
                'Chahar Mahall and Bakhtiari' => 'Chahar Mahall and Bakhtiari',
                'East Azarbaijan' => 'East Azarbaijan',
                'Esfahan' => 'Esfahan',
                'Fars' => 'Fars',
                'Gilan' => 'Gilan',
                'Golestan' => 'Golestan',
                'Hamadan' => 'Hamadan',
                'Hormozgan' => 'Hormozgan',
                'Ilam' => 'Ilam',
                'Kerman' => 'Kerman',
                'Kermanshah' => 'Kermanshah',
                'Khuzestan' => 'Khuzestan',
                'Kohgiluyeh and Buyer Ahmad' => 'Kohgiluyeh and Buyer Ahmad',
                'Kordestan' => 'Kordestan',
                'Lorestan' => 'Lorestan',
                'Markazi' => 'Markazi',
                'Mazandaran' => 'Mazandaran',
                'North Khorasan' => 'North Khorasan',
                'Qazvin' => 'Qazvin',
                'Qom' => 'Qom',
                'Razavi Khorasan' => 'Razavi Khorasan',
                'Semnan' => 'Semnan',
                'Sistan and Baluchestan' => 'Sistan and Baluchestan',
                'South Khorasan' => 'South Khorasan',
                'Tehran' => 'Tehran',
                'West Azarbaijan' => 'West Azarbaijan',
                'Yazd' => 'Yazd',
                'Zanjan' => 'Zanjan'
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
                'Carlow' => 'Carlow',
                'Cavan' => 'Cavan',
                'Clare' => 'Clare',
                'Cork' => 'Cork',
                'Donegal' => 'Donegal',
                'Dublin' => 'Dublin',
                'Galway' => 'Galway',
                'Kerry' => 'Kerry',
                'Kildare' => 'Kildare',
                'Kilkenny' => 'Kilkenny',
                'Laois' => 'Laois',
                'Leitrim' => 'Leitrim',
                'Limerick' => 'Limerick',
                'Longford' => 'Longford',
                'Louth' => 'Louth',
                'Mayo' => 'Mayo',
                'Meath' => 'Meath',
                'Monaghan' => 'Monaghan',
                'Offaly' => 'Offaly',
                'Roscommon' => 'Roscommon',
                'Sligo' => 'Sligo',
                'Tipperary' => 'Tipperary',
                'Waterford' => 'Waterford',
                'Westmeath' => 'Westmeath',
                'Wexford' => 'Wexford',
                'Wicklow' => 'Wicklow'
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
                'Abruzzi' => 'Abruzzi',
                'Apulia' => 'Apulia',
                'Basilicata' => 'Basilicata',
                'Calabria' => 'Calabria',
                'Campania' => 'Campania',
                'Emilia-Romagna' => 'Emilia-Romagna',
                'Friuli-Venezia Giulia' => 'Friuli-Venezia Giulia',
                'Lazio' => 'Lazio',
                'Liguria' => 'Liguria',
                'Lombardy' => 'Lombardy',
                'Marche' => 'Marche',
                'Molise' => 'Molise',
                'Piedmont' => 'Piedmont',
                'Sardinia' => 'Sardinia',
                'Sicily' => 'Sicily',
                'Trentino-Alto Adige' => 'Trentino-Alto Adige',
                'Tuscany' => 'Tuscany',
                'Umbria' => 'Umbria',
                'Valle d\'Aosta' => 'Valle d\'Aosta',
                'Veneto' => 'Veneto'
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
                'Aichi' => 'Aichi',
                'Akita' => 'Akita',
                'Aomori' => 'Aomori',
                'Chiba' => 'Chiba',
                'Ehime' => 'Ehime',
                'Fukui' => 'Fukui',
                'Fukuoka' => 'Fukuoka',
                'Fukushima' => 'Fukushima',
                'Gifu' => 'Gifu',
                'Gumma' => 'Gumma',
                'Hiroshima' => 'Hiroshima',
                'Hokkaido' => 'Hokkaido',
                'Hyogo' => 'Hyogo',
                'Ibaraki' => 'Ibaraki',
                'Ishikawa' => 'Ishikawa',
                'Iwate' => 'Iwate',
                'Kagawa' => 'Kagawa',
                'Kagoshima' => 'Kagoshima',
                'Kanagawa' => 'Kanagawa',
                'Kochi' => 'Kochi',
                'Kumamoto' => 'Kumamoto',
                'Kyoto' => 'Kyoto',
                'Mie' => 'Mie',
                'Miyagi' => 'Miyagi',
                'Miyazaki' => 'Miyazaki',
                'Nagano' => 'Nagano',
                'Nagasaki' => 'Nagasaki',
                'Nara' => 'Nara',
                'Niigata' => 'Niigata',
                'Oita' => 'Oita',
                'Okayama' => 'Okayama',
                'Okinawa' => 'Okinawa',
                'Osaka' => 'Osaka',
                'Saga' => 'Saga',
                'Saitama' => 'Saitama',
                'Shiga' => 'Shiga',
                'Shimane' => 'Shimane',
                'Shizuoka' => 'Shizuoka',
                'Tochigi' => 'Tochigi',
                'Tokushima' => 'Tokushima',
                'Tokyo' => 'Tokyo',
                'Tottori' => 'Tottori',
                'Toyama' => 'Toyama',
                'Wakayama' => 'Wakayama',
                'Yamagata' => 'Yamagata',
                'Yamaguchi' => 'Yamaguchi',
                'Yamanashi' => 'Yamanashi'
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
                'Bomi' => 'Bomi',
                'Bong' => 'Bong',
                'Gbarpolu' => 'Gbarpolu',
                'Grand Bassa' => 'Grand Bassa',
                'Grand Cape Mount' => 'Grand Cape Mount',
                'Grand Gedeh' => 'Grand Gedeh',
                'Grand Kru' => 'Grand Kru',
                'Lofa' => 'Lofa',
                'Margibi' => 'Margibi',
                'Maryland' => 'Maryland',
                'Montserrado' => 'Montserrado',
                'Nimba' => 'Nimba',
                'Rivercess' => 'Rivercess',
                'River Gee' => 'River Gee',
                'Sinoe' => 'Sinoe'
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
                'Johor' => 'Johor',
                'Kedah' => 'Kedah',
                'Kelantan' => 'Kelantan',
                'Kuala Lumpur' => 'Kuala Lumpur',
                'Labuan' => 'Labuan',
                'Melaka' => 'Melaka',
                'Negeri Sembilan' => 'Negeri Sembilan',
                'Pahang' => 'Pahang',
                'Perak' => 'Perak',
                'Perlis' => 'Perlis',
                'Pulau Pinang' => 'Pulau Pinang',
                'Putrajaya' => 'Putrajaya',
                'Sabah' => 'Sabah',
                'Sarawak' => 'Sarawak',
                'Selangor' => 'Selangor',
                'Terengganu' => 'Terengganu'
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
                'Aguascalientes' => 'Aguascalientes',		
                'Baja California' => 'Baja California',		
                'Baja California Sur' => 'Baja California Sur',		
                'Campeche' => 'Campeche',		
                'Chiapas' => 'Chiapas',		
                'Chihuahua' => 'Chihuahua',	
                'Ciudad de México' => 'Ciudad de México',	
                'Coahuila' => 'Coahuila',		
                'Colima' => 'Colima',		
                'Durango' => 'Durango',		
                'Guanajuato' => 'Guanajuato',		
                'Guerrero' => 'Guerrero',		
                'Hidalgo' => 'Hidalgo',		
                'Jalisco' => 'Jalisco',		
                'México' => 'México',		
                'Michoacán' => 'Michoacán',		
                'Morelos' => 'Morelos',		
                'Nayarit' => 'Nayarit',		
                'Nuevo' => 'Nuevo León',		
                'Oaxaca' => 'Oaxaca',		
                'Puebla' => 'Puebla',		
                'Querétaro' => 'Querétaro',		
                'Quintana Roo' => 'Quintana Roo',		
                'San Luis Potosí' => 'San Luis Potosí',		
                'Sinaloa' => 'Sinaloa',		
                'Sonora' => 'Sonora',		
                'Tabasco' => 'Tabasco',		
                'Tamaulipas' => 'Tamaulipas',		
                'Tlaxcala' => 'Tlaxcala',		
                'Veracruz' => 'Veracruz',		
                'Yucatán' => 'Yucatán',		
                'Zacatecas' => 'Zacatecas'
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
                'Anenii Noi' => 'Anenii Noi',
                'Bălţi' => 'Bălţi',
                'Basarabeasca' => 'Basarabeasca',
                'Bender' => 'Bender',
                'Briceni' => 'Briceni',
                'Cahul' => 'Cahul',
                'Călăraşi' => 'Călăraşi',
                'Cantemir' => 'Cantemir',
                'Căuşeni' => 'Căuşeni',
                'Chişinău' => 'Chişinău',
                'Cimişlia' => 'Cimişlia',
                'Criuleni' => 'Criuleni',
                'Donduşeni' => 'Donduşeni',
                'Drochia' => 'Drochia',
                'Dubăsari' => 'Dubăsari',
                'Edineţ' => 'Edineţ',
                'Făleşti' => 'Făleşti',
                'Floreşti' => 'Floreşti',
                'Găgăuzia' => 'Găgăuzia',
                'Glodeni' => 'Glodeni',
                'Hînceşti' => 'Hînceşti',
                'Ialoveni' => 'Ialoveni',
                'Leova' => 'Leova',
                'Nisporeni' => 'Nisporeni',
                'Ocniţa' => 'Ocniţa',
                'Orhei' => 'Orhei',
                'Rezina' => 'Rezina',
                'Rîşcani' => 'Rîşcani',
                'Sîngerei' => 'Sîngerei',
                'Şoldăneşti' => 'Şoldăneşti',
                'Soroca' => 'Soroca',
                'Ştefan Vodă' => 'Ştefan Vodă',
                'Străşeni' => 'Străşeni',
                'Taraclia' => 'Taraclia',
                'Teleneşti' => 'Teleneşti',
                'Transnistria' => 'Transnistria',
                'Ungheni' => 'Ungheni'
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
                'One' => 'One',
                'Two' => 'Two',
                'Three' => 'Three',
                'Four' => 'Four',
                'Five' => 'Five',
                'Six' => 'Six',
                'Seven' => 'Seven'
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
                'Auckland' => 'Auckland',
                'Bay of Plenty' => 'Bay of Plenty',
                'Canterbury' => 'Canterbury',
                'Chatham Islands' => 'Chatham Islands',
                'Gisborne' => 'Gisborne',
                'Hawke\'s Bay' => 'Hawke\'s Bay',
                'Manawatu-Wanganui' => 'Manawatu-Wanganui',
                'Marlborough' => 'Marlborough',
                'Nelson' => 'Nelson',
                'Northland' => 'Northland',
                'Otago' => 'Otago',
                'Southland' => 'Southland',
                'Taranaki' => 'Taranaki',
                'Tasman' => 'Tasman',
                'Waikato' => 'Waikato',
                'Wellington' => 'Wellington',
                'West Coast' => 'West Coast'
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
                'Abia' => 'Abia',
                'Adamawa' => 'Adamawa',
                'Akwa Ibom' => 'Akwa Ibom',
                'Anambra' => 'Anambra',
                'Bauchi' => 'Bauchi',
                'Bayelsa' => 'Bayelsa',
                'Benue' => 'Benue',
                'Borno' => 'Borno',
                'Cross River' => 'Cross River',
                'Delta' => 'Delta',
                'Ebonyi' => 'Ebonyi',
                'Edo' => 'Edo',
                'Ekiti' => 'Ekiti',
                'Enugu' => 'Enugu',
                'Federal Capital Territory' => 'Federal Capital Territory',
                'Gombe' => 'Gombe',
                'Imo' => 'Imo',
                'Jigawa' => 'Jigawa',
                'Kaduna' => 'Kaduna',
                'Kano' => 'Kano',
                'Katsina' => 'Katsina',
                'Kebbi' => 'Kebbi',
                'Kogi' => 'Kogi',
                'Kwara' => 'Kwara',
                'Lagos' => 'Lagos',
                'Nasarawa' => 'Nasarawa',
                'Niger' => 'Niger',
                'Ogun' => 'Ogun',
                'Ondo' => 'Ondo',
                'Osun' => 'Osun',
                'Oyo' => 'Oyo',
                'Plateau' => 'Plateau',
                'Rivers' => 'Rivers',
                'Sokoto' => 'Sokoto',
                'Taraba' => 'Taraba',
                'Yobe' => 'Yobe',
                'Zamfara' => 'Zamfara'
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
                'Azad Kashmir' => 'Azad Kashmir',
                'Balochistan' => 'Balochistan',
                'Federally Administered Tribal Areas' => 'Federally Administered Tribal Areas',
                'Gilgit-Baltistan' => 'Gilgit-Baltistan',
                'Islamabad' => 'Islamabad',
                'Khyber-Pakhtunkhwa' => 'Khyber-Pakhtunkhwa',
                'Punjab' => 'Punjab',
                'Sindh' => 'Sindh'
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
                'Alto Paraguay' => 'Alto Paraguay',
                'Alto Paraná' => 'Alto Paraná',
                'Amambay' => 'Amambay',
                'Asunción' => 'Asunción',
                'Boquerón' => 'Boquerón',
                'Caaguazú' => 'Caaguazú',
                'Caazapá' => 'Caazapá',
                'Canindeyú' => 'Canindeyú',
                'Central' => 'Central',
                'Concepción' => 'Concepción',
                'Cordillera' => 'Cordillera',
                'Guairá' => 'Guairá',
                'Itapúa' => 'Itapúa',
                'Misiones' => 'Misiones',
                'Ñeembucú' => 'Ñeembucú',
                'Paraguarí' => 'Paraguarí',
                'Presidente Hayes' => 'Presidente Hayes',
                'San Pedro' => 'San Pedro'
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
                'Amazonas' => 'Amazonas',
                'Ancash' => 'Ancash',
                'Apurímac' => 'Apurímac',
                'Arequipa' => 'Arequipa',
                'Ayacucho' => 'Ayacucho',
                'Cajamarca' => 'Cajamarca',
                'Callao' => 'Callao',
                'Cusco' => 'Cusco',
                'Huancavelica' => 'Huancavelica',
                'Huánuco' => 'Huánuco',
                'Ica' => 'Ica',
                'Junín' => 'Junín',
                'Junín' => 'Junín',
                'Lambayeque' => 'Lambayeque',
                'Lima (Province)' => 'Lima (Province)',
                'Lima' => 'Lima',
                'Loreto' => 'Loreto',
                'Madre de Dios' => 'Madre de Dios',
                'Moquegua' => 'Moquegua',
                'Pasco' => 'Pasco',
                'Piura' => 'Piura',
                'Puno' => 'Puno',
                'San Martín' => 'San Martín',
                'Tacna' => 'Tacna',
                'Tumbes' => 'Tumbes',
                'Ucayali' => 'Ucayali'
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
                'Abra' => 'Abra',
                'Agusan del Norte' => 'Agusan del Norte',
                'Agusan del Sur' => 'Agusan del Sur',
                'Aklan' => 'Aklan',
                'Albay' => 'Albay',
                'Antique' => 'Antique',
                'Apayao' => 'Apayao',
                'Aurora' => 'Aurora',
                'Basilan' => 'Basilan',
                'Bataan' => 'Bataan',
                'Batanes' => 'Batanes',
                'Batangas' => 'Batangas',
                'Benguet' => 'Benguet',
                'Biliran' => 'Biliran',
                'Bohol' => 'Bohol',
                'Bukidnon' => 'Bukidnon',
                'Bulacan' => 'Bulacan',
                'Cagayan' => 'Cagayan',
                'Camarines Norte' => 'Camarines Norte',
                'Camarines Sur' => 'Camarines Sur',
                'Camiguin' => 'Camiguin',
                'Capiz' => 'Capiz',
                'Catanduanes' => 'Catanduanes',
                'Cavite' => 'Cavite',
                'Cebu' => 'Cebu',
                'Compostela Valley' => 'Compostela Valley',
                'Cotabato' => 'Cotabato',
                'Davao del Norte' => 'Davao del Norte',
                'Davao del Sur' => 'Davao del Sur',
                'Davao Occidental' => 'Davao Occidental',
                'Davao Oriental' => 'Davao Oriental',
                'Dinagat Islands' => 'Dinagat Islands',
                'Eastern Samar' => 'Eastern Samar',
                'Guimaras' => 'Guimaras',
                'Ifugao' => 'Ifugao',
                'Ilocos Norte' => 'Ilocos Norte',
                'Ilocos Sur' => 'Ilocos Sur',
                'Iloilo' => 'Iloilo',
                'Isabela' => 'Isabela',
                'Kalinga' => 'Kalinga',
                'Laguna' => 'Laguna',
                'Lanao del Norte' => 'Lanao del Norte',
                'Lanao del Sur' => 'Lanao del Sur',
                'La Union' => 'La Union',
                'Leyte' => 'Leyte',
                'Maguindanao' => 'Maguindanao',
                'Marinduque' => 'Marinduque',
                'Masbate' => 'Masbate',
                'Metropolitan Manila' => 'Metropolitan Manila',
                'Misamis Occidental' => 'Misamis Occidental',
                'Misamis Oriental' => 'Misamis Oriental',
                'Mountain' => 'Mountain',
                'Negros Occidental' => 'Negros Occidental',
                'Negros Oriental' => 'Negros Oriental',
                'Northern Samar' => 'Northern Samar',
                'Nueva Ecija' => 'Nueva Ecija',
                'Nueva Vizcaya' => 'Nueva Vizcaya',
                'Occidental Mindoro' => 'Occidental Mindoro',
                'Oriental Mindoro' => 'Oriental Mindoro',
                'Palawan' => 'Palawan',
                'Pampanga' => 'Pampanga',
                'Pangasinan' => 'Pangasinan',
                'Quezon' => 'Quezon',
                'Quirino' => 'Quirino',
                'Rizal' => 'Rizal',
                'Romblon' => 'Romblon',
                'Samar' => 'Samar',
                'Sarangani' => 'Sarangani',
                'Siquijor' => 'Siquijor',
                'Sorsogon' => 'Sorsogon',
                'South Cotabato' => 'South Cotabato',
                'Southern Leyte' => 'Southern Leyte',
                'Sultan Kudarat' => 'Sultan Kudarat',
                'Sulu' => 'Sulu',
                'Surigao del Norte' => 'Surigao del Norte',
                'Surigao del Sur' => 'Surigao del Sur',
                'Tarlac' => 'Tarlac',
                'Tawi-Tawi' => 'Tawi-Tawi',
                'Zambales' => 'Zambales',
                'Zamboanga del Norte' => 'Zamboanga del Norte',
                'Zamboanga del Sur' => 'Zamboanga del Sur',
                'Zamboanga-Sibugay' => 'Zamboanga-Sibugay'
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
                'Alba' => 'Alba',
                'Arad' => 'Arad',
                'Argeș' => 'Argeș',
                'Bacău' => 'Bacău',
                'Bihor' => 'Bihor',
                'Bistrița-Năsăud' => 'Bistrița-Năsăud',
                'Botoșani' => 'Botoșani',
                'Brăila' => 'Brăila',
                'Brașov' => 'Brașov',
                'Bucharest' => 'Bucharest',
                'Buzău' => 'Buzău',
                'Călărași' => 'Călărași',
                'Caraș-Severin' => 'Caraș-Severin',
                'Cluj' => 'Cluj',
                'Constanța' => 'Constanța',
                'Covasna' => 'Covasna',
                'Dâmbovița' => 'Dâmbovița',
                'Dolj' => 'Dolj',
                'Galați' => 'Galați',
                'Giurgiu' => 'Giurgiu',
                'Gorj' => 'Gorj',
                'Harghita' => 'Harghita',
                'Hunedoara' => 'Hunedoara',
                'Ialomița' => 'Ialomița',
                'Iași' => 'Iași',
                'Ilfov' => 'Ilfov',
                'Maramureș' => 'Maramureș',
                'Mehedinți' => 'Mehedinți',
                'Mureș' => 'Mureș',
                'Neamț' => 'Neamț',
                'Olt' => 'Olt',
                'Prahova' => 'Prahova',
                'Sălaj' => 'Sălaj',
                'Satu Mare' => 'Satu Mare',
                'Sibiu' => 'Sibiu',
                'Suceava' => 'Suceava',
                'Teleorman' => 'Teleorman',
                'Timiș' => 'Timiș',
                'Tulcea' => 'Tulcea',
                'Vâlcea' => 'Vâlcea',
                'Vaslui' => 'Vaslui',
                'Vrancea' => 'Vrancea'
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
                'Eastern Cape' => 'Eastern Cape',
                'Free State' => 'Free State',
                'Gauteng' => 'Gauteng',
                'KwaZulu-Natal' => 'KwaZulu-Natal',
                'Limpopo' => 'Limpopo',
                'Mpumalanga' => 'Mpumalanga',
                'Northern Cape' => 'Northern Cape',
                'North-West' => 'North-West',
                'Western Cape' => 'Western Cape'
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
                'A Coruña' => 'A Coruña',		
                'Albacete' => 'Albacete',                
                'Alicante' => 'Alicante',                
                'Almería' => 'Almería',                
                'Araba/Álava' => 'Araba/Álava',                
                'Asturias' => 'Asturias',                
                'Ávila' => 'Ávila',                
                'Badajoz' => 'Badajoz',                
                'Baleares' => 'Baleares',                
                'Barcelona' => 'Barcelona',                
                'Bizkaia' => 'Bizkaia',                
                'Burgos' => 'Burgos',                
                'Cáceres' => 'Cáceres',                
                'Cádiz' => 'Cádiz',                
                'Cantabria' => 'Cantabria',                
                'Castellón' => 'Castellón',                
                'Ceuta' => 'Ceuta',                
                'Ciudad Real' => 'Ciudad Real',                
                'Córdoba' => 'Córdoba',                
                'Cuenca' => 'Cuenca',                
                'Gipuzkoa' => 'Gipuzkoa',                
                'Girona' => 'Girona',                
                'Granada' => 'Granada',                
                'Guadalajara' => 'Guadalajara',                
                'Huelva' => 'Huelva',                
                'Huesca' => 'Huesca',                
                'Jaén' => 'Jaén',                
                'La Rioja' => 'La Rioja',                
                'Las Palmas' => 'Las Palmas',                
                'León' => 'León',                
                'Lleida' => 'Lleida',                
                'Lugo' => 'Lugo',                
                'Madrid' => 'Madrid',                
                'Málaga' => 'Málaga',                
                'Melilla' => 'Melilla',                
                'Murcia' => 'Murcia',                
                'Navarra' => 'Navarra',                
                'Ourense' => 'Ourense',                
                'Palencia' => 'Palencia',                
                'Pontevedra' => 'Pontevedra',                
                'Salamanca' => 'Salamanca',                
                'Santa Cruz de Tenerife' => 'Santa Cruz de Tenerife',                
                'Segovia' => 'Segovia',                
                'Sevilla' => 'Sevilla',                
                'Soria' => 'Soria',                
                'Tarragona' => 'Tarragona',                
                'Teruel' => 'Teruel',                
                'Toledo' => 'Toledo',                
                'Valencia' => 'Valencia'
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
                'Aargau' => 'Aargau',
                'Appenzell Inner Rhodes' => 'Appenzell Inner Rhodes',
                'Appenzell Outer Rhodes' => 'Appenzell Outer Rhodes',
                'Basel-Landschaft' => 'Basel-Landschaft',
                'Basel-Stadt' => 'Basel-Stadt',
                'Bern' => 'Bern',
                'Fribourg' => 'Fribourg',
                'Geneva' => 'Geneva',
                'Glarus' => 'Glarus',
                'Graubünden' => 'Graubünden',
                'Jura' => 'Jura',
                'Lucerne' => 'Lucerne',
                'Neuchâtel' => 'Neuchâtel',
                'Nidwalden' => 'Nidwalden',
                'Obwalden' => 'Obwalden',
                'Sankt Gallen' => 'Sankt Gallen',
                'Schaffhausen' => 'Schaffhausen',
                'Schwyz' => 'Schwyz',
                'Solothurn' => 'Solothurn',
                'Thurgau' => 'Thurgau',
                'Ticino' => 'Ticino',
                'Uri' => 'Uri',
                'Valais' => 'Valais',
                'Vaud' => 'Vaud',
                'Zug' => 'Zug',
                'Zurich' => 'Zurich'
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
                'Arusha' => 'Arusha',
                'Dar es Salaam' => 'Dar es Salaam',
                'Dodoma' => 'Dodoma',
                'Geita' => 'Geita',
                'Iringa' => 'Iringa',
                'Kagera' => 'Kagera',
                'Katavi' => 'Katavi',
                'Kigoma' => 'Kigoma',
                'Kilimanjaro' => 'Kilimanjaro',
                'Lindi' => 'Lindi',
                'Manyara' => 'Manyara',
                'Mara' => 'Mara',
                'Mbeya' => 'Mbeya',
                'Morogoro' => 'Morogoro',
                'Mtwara' => 'Mtwara',
                'Mwanza' => 'Mwanza',
                'Njombe' => 'Njombe',
                'Pemba North' => 'Pemba North',
                'Pemba South' => 'Pemba South',
                'Pwani' => 'Pwani',
                'Rukwa' => 'Rukwa',
                'Ruvuma' => 'Ruvuma',
                'Shinyanga' => 'Shinyanga',
                'Simiyu' => 'Simiyu',
                'Singida' => 'Singida',
                'Tabora' => 'Tabora',
                'Tanga' => 'Tanga',
                'Zanzibar North' => 'Zanzibar North',
                'Zanzibar South and Central' => 'Zanzibar South and Central',
                'Zanzibar West' => 'Zanzibar West'
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
                'Amnat Charoen' => 'Amnat Charoen',
                'Ang Thong' => 'Ang Thong',
                'Bangkok Metropolis' => 'Bangkok Metropolis',
                'Bueng Kan' => 'Bueng Kan',
                'Buri Ram' => 'Buri Ram',
                'Chachoengsao' => 'Chachoengsao',
                'Chai Nat' => 'Chai Nat',
                'Chaiyaphum' => 'Chaiyaphum',
                'Chanthaburi' => 'Chanthaburi',
                'Chiang Mai' => 'Chiang Mai',
                'Chiang Rai' => 'Chiang Rai',
                'Chon Buri' => 'Chon Buri',
                'Chumphon' => 'Chumphon',
                'Kalasin' => 'Kalasin',
                'Kamphaeng Phet' => 'Kamphaeng Phet',
                'Kanchanaburi' => 'Kanchanaburi',
                'Khon Kaen' => 'Khon Kaen',
                'Krabi' => 'Krabi',
                'Lampang' => 'Lampang',
                'Lamphun' => 'Lamphun',
                'Loei' => 'Loei',
                'Lop Buri' => 'Lop Buri',
                'Mae Hong Son' => 'Mae Hong Son',
                'Maha Sarakham' => 'Maha Sarakham',
                'Mukdahan' => 'Mukdahan',
                'Nakhon Nayok' => 'Nakhon Nayok',
                'Nakhon Pathom' => 'Nakhon Pathom',
                'Nakhon Phanom' => 'Nakhon Phanom',
                'Nakhon Ratchasima' => 'Nakhon Ratchasima',
                'Nakhon Sawan' => 'Nakhon Sawan',
                'Nakhon Si Thammarat' => 'Nakhon Si Thammarat',
                'Nan' => 'Nan',
                'Narathiwat' => 'Narathiwat',
                'Nong Bua Lam Phu' => 'Nong Bua Lam Phu',
                'Nong Khai' => 'Nong Khai',
                'Nonthaburi' => 'Nonthaburi',
                'Pathum Thani' => 'Pathum Thani',
                'Pattani' => 'Pattani',
                'Phangnga' => 'Phangnga',
                'Phatthalung' => 'Phatthalung',
                'Phayao' => 'Phayao',
                'Phetchabun' => 'Phetchabun',
                'Phetchaburi' => 'Phetchaburi',
                'Phichit' => 'Phichit',
                'Phitsanulok' => 'Phitsanulok',
                'Phrae' => 'Phrae',
                'Phra Nakhon Si Ayutthaya' => 'Phra Nakhon Si Ayutthaya',
                'Phuket' => 'Phuket',
                'Prachin Buri' => 'Prachin Buri',
                'Prachuap Khiri Khan' => 'Prachuap Khiri Khan',
                'Ranong' => 'Ranong',
                'Ratchaburi' => 'Ratchaburi',
                'Rayong' => 'Rayong',
                'Roi Et' => 'Roi Et',
                'Sa Kaeo' => 'Sa Kaeo',
                'Sakon Nakhon' => 'Sakon Nakhon',
                'Samut Prakan' => 'Samut Prakan',
                'Samut Sakhon' => 'Samut Sakhon',
                'Samut Songkhram' => 'Samut Songkhram',
                'Saraburi' => 'Saraburi',
                'Satun' => 'Satun',
                'Sing Buri' => 'Sing Buri',
                'Si Sa Ket' => 'Si Sa Ket',
                'Songkhla' => 'Songkhla',
                'Sukhothai' => 'Sukhothai',
                'Suphan Buri' => 'Suphan Buri',
                'Surat Thani' => 'Surat Thani',
                'Surin' => 'Surin',
                'Tak' => 'Tak',
                'Trang' => 'Trang',
                'Trat' => 'Trat',
                'Ubon Ratchathani' => 'Ubon Ratchathani',
                'Udon Thani' => 'Udon Thani',
                'Uthai Thani' => 'Uthai Thani',
                'Uttaradit' => 'Uttaradit',
                'Yala' => 'Yala',
                'Yasothon' => 'Yasothon'	
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
                'Adana' => 'Adana',
                'Adıyaman' => 'Adıyaman',
                'Afyonkarahisar' => 'Afyonkarahisar',
                'Ağri' => 'Ağri',
                'Aksaray' => 'Aksaray',
                'Amasya' => 'Amasya',
                'Ankara' => 'Ankara',
                'Antalya' => 'Antalya',
                'Ardahan' => 'Ardahan',
                'Artvin' => 'Artvin',
                'Aydın' => 'Aydın',
                'Balıkesir' => 'Balıkesir',
                'Bartın' => 'Bartın',
                'Batman' => 'Batman',
                'Bayburt' => 'Bayburt',
                'Bilecik' => 'Bilecik',
                'Bingöl' => 'Bingöl',
                'Bitlis' => 'Bitlis',
                'Bolu' => 'Bolu',
                'Burdur' => 'Burdur',
                'Bursa' => 'Bursa',
                'Çanakkale' => 'Çanakkale',
                'Çankırı' => 'Çankırı',
                'Çorum' => 'Çorum',
                'Denizli' => 'Denizli',
                'Diyarbakır' => 'Diyarbakır',
                'Düzce' => 'Düzce',
                'Edirne' => 'Edirne',
                'Elazığ' => 'Elazığ',
                'Erzincan' => 'Erzincan',
                'Erzurum' => 'Erzurum',
                'Eskişehir' => 'Eskişehir',
                'Gaziantep' => 'Gaziantep',
                'Giresun' => 'Giresun',
                'Gümüşhane' => 'Gümüşhane',
                'Hakkari' => 'Hakkari',
                'Hatay' => 'Hatay',
                'Iğdır' => 'Iğdır',
                'Isparta' => 'Isparta',
                'İstanbul' => 'İstanbul',
                'İzmir' => 'İzmir',
                'Kahramanmaraş' => 'Kahramanmaraş',
                'Karabük' => 'Karabük',
                'Karaman' => 'Karaman',
                'Kars' => 'Kars',
                'Kastamonu' => 'Kastamonu',
                'Kayseri' => 'Kayseri',
                'Kilis' => 'Kilis',
                'Kırıkkale' => 'Kırıkkale',
                'Kırklareli' => 'Kırklareli',
                'Kırşehir' => 'Kırşehir',
                'Kocaeli' => 'Kocaeli',
                'Konya' => 'Konya',
                'Kütahya' => 'Kütahya',
                'Malatya' => 'Malatya',
                'Manisa' => 'Manisa',
                'Mardin' => 'Mardin',
                'Mersin' => 'Mersin',
                'Muğla' => 'Muğla',
                'Muş' => 'Muş',
                'Nevşehir' => 'Nevşehir',
                'Niğde' => 'Niğde',
                'Ordu' => 'Ordu',
                'Osmaniye' => 'Osmaniye',
                'Rize' => 'Rize',
                'Sakarya' => 'Sakarya',
                'Samsun' => 'Samsun',
                'Şanlıurfa' => 'Şanlıurfa',
                'Siirt' => 'Siirt',
                'Sinop' => 'Sinop',
                'Şırnak' => 'Şırnak',
                'Sivas' => 'Sivas',
                'Tekirdağ' => 'Tekirdağ',
                'Tokat' => 'Tokat',
                'Trabzon' => 'Trabzon',
                'Tunceli' => 'Tunceli',
                'Uşak' => 'Uşak',
                'Van' => 'Van',
                'Yalova' => 'Yalova',
                'Yozgat' => 'Yozgat',
                'Zonguldak' => 'Zonguldak'	
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