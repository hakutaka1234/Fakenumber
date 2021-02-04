<?php

/*CODE : HAKU
  ONLY : HAKU*/


menu:
system('clear');
$WarnaRandom = array(
"\033[0;30m",
"\033[0;31m",
"\033[0;32m",
"\033[0;33m",
"\033[0;34m",
"\033[0;35m",
"\033[0;36m",
"\033[0;37m",
"\033[37;1m",
"\033[1;30m",
"\033[1;32m",
"\033[1;33m",
"\033[1;34m",
"\033[1;35m",
"\033[1;36m",
"\033[37;1m",
"\033[1;37m"
);
$rundom = $WarnaRandom[mt_rand(0, sizeof($WarnaRandom) - 1)];
echo "$rundom
                      Ẇ̴̨̛̈́Ễ̴̢̧̛͖̗̫̙̦̒͒L̷͓͙̲͕̖̇̏̽̔̓̇́̐͝C̸̡̛̩̠̺͍̯̞̥͚͆̌̚͝Ớ̴͕̳̽̓̊̕ͅM̴͇̉͌E̸͎͑͋̾̑͆̚ ̵̼̹̦̩͈͖̈́̽̾̒̌̔͘͝T̶̢̧̨̠̞̣̳̥̖̂̅͛͂Ǫ̷̢̳͉͉̼͚̪͛͑̑̾͂̈́ ̴͙̞̺̺̑̊̐̊̈́M̴͉̥͖̺̭͓̯̣͔̈́̾̇͘͝Y̴̢̡̬̪̳̩̓̈́͆̀͜͠ ̴͖̭̲̥̙̬̩́͗̌̋́̾̑͜T̷̥̠͇̪̹̪̥̃̉̋̀͒͘͠O̶̢̮̝͉̖̻̬̍̓̒O̸͖͛͑̓̋̍̎̿Ḽ̸̦͜͝ͅS̵̡̟͕͙̭̹͗ͅ

";
echo "
               |AUTHOR : HAKUTAKA               |
               |GITHUB : github.com/hakutaka1234|
$rundom [̲̅ NOTE] | KETIK RUN UNTUK MENJALANKAN TOOLS |
$rundom [̲̅ NOTE] | KETIK EXIT UNTUK KELUAR           |
$rundom [̲̅ NOTE] | TEKAN ENTER UNTUK MENGUBAH WARNA  |
";
echo "$rundom PILIH :$rundom ";
$pilih = trim(fgets(STDIN));
if($pilih == "RUN"){
$WarnaRandom = array(
"\033[0;30m",
"\033[0;31m",
"\033[0;32m",
"\033[0;33m",
"\033[0;34m",
"\033[0;35m",
"\033[0;36m",
"\033[0;37m",
"\033[37;1m",
"\033[1;30m",
"\033[1;32m",
"\033[1;33m",
"\033[1;34m",
"\033[1;35m",
"\033[1;36m",
"\033[37;1m",
"\033[1;37m"
);
$Negara = array(
'abkhazia',
'afghanistan',
'aland-islands',
'albania',
'algeria',
'american-samoa',
'andorra',
'angola',
'anguilla',
'antigua-and-barbuda',
'argentina',
'armenia',
'aruba',
'ascension-island',
'australia',
'australian-antarctic-territory',
'austria',
'azerbaijan',
'bahamas',
'bahrain',
'bangladesh',
'barbados',
'belarus',
'belgium',
'belize',
'benin',
'bermuda',
'bhutan',
'bolivia',
'bonaire',
'bosnia-and-herzegovina',
'botswana',
'brazil',
'british-indian-ocean-territory',
'british-virgin-islands',
'brunei',
'bulgaria',
'burkina-fasoburma',
'burundi',
'cambodia',
'cameroon',
'canada',
'canary-islands',
'cape-verde',
'cayman-islands',
'central-african-republic',
'ceuta',
'chad',
'chagos-islands',
'chile',
'peoples-republic-of-china',
'christmas-island',
'cocos-islands',
'colombia',
'comoros',
'republic-of-congo',
'democratic-republic-of-congo',
'cook-islands',
'costa-rica',
'croatia',
'cuba',
'curacao',
'curacao-and-the-caribbean-netherlands',
'cyprus',
'czech-republic',
'denmark',
'diego-garcia',
'djibouti',
'dominica',
'dominican-republic',
'east-timor',
'easter-island',
'ecuador',
'egypt',
'el-salvador',
'england',
'equatorial-guinea',
'eritrea',
'estonia',
'ethiopia',
'falkland-islands',
'faroe-islands',
'federated-states-of-micronesia',
'fiji',
'finland',
'france',
'french-overseas-departments-and-territories',
'french-guiana',
'french-polynesia',
'gabon',
'gambia',
'georgia',
'germany',
'ghana',
'gibraltar',
'greece',
'greenland',
'grenada',
'guadeloupe',
'guam',
'guatemala',
'guernsey',
'guinea',
'guinea-bissau',
'guyana',
'haiti',
'hawaii',
'honduras',
'hong-kong',
'hungary',
'iceland',
'india',
'indonesia',
'iran',
'iraq',
'ireland',
'isle-of-man',
'israel',
'italy',
'ivory-coast',
'jamaica',
'jan-mayen',
'japan',
'jersey',
'jordan',
'kazakhstan',
'kenya',
'kiribati',
'kosovo',
'kuwait',
'kyrgyzstan',
'laos',
'latvia',
'lebanon',
'lesotho',
'liberia',
'libya',
'liechtenstein',
'lithuania',
'luxembourg',
'macau',
'republic-of-macedonia',
'madagascar',
'madeira',
'malawi',
'malaysia',
'mali',
'malta',
'marshall-islands',
'martinique',
'mauritania',
'mauritius',
'mayotte',
'melilla',
'mexico',
'moldova',
'monaco',
'mongolia',
'montenegro',
'montserrat',
'morocco',
'mozambique',
'myanmar',
'artsakh',
'namibia',
'nauru',
'nepal',
'netherlands',
'new-caledonia',
'new-zealand',
'nicaragua',
'niger',
'nigeria',
'niue',
'norfolk-island',
'north-koreand',
'northern-cyprus',
'northern-ireland',
'northern-mariana-islands',
'norway',
'oman',
'pakistan',
'palau',
'palestine-state-of',
'panama',
'papua-new-guinea',
'paraguay',
'peru',
'philippines',
'poland',
'pitcairn-islands',
'plazas-de-soberanía',
'portugal',
'príncipe',
'puerto-rico',
'qatar',
'reunion',
'romania',
'russia',
'rwanda',
'saba',
'sahrawi-arab-democratic-republic',
'saint-barthelem',
'saint-helena-and-tristan-da-cunha',
'saint-kitts-and-nevissaint-lucia',
'collectivity-of-saint-martin',
'saint-pierre-and-miquelon',
'saint-vincent-and-the-grenadines',
'samoa',
'san-marino',
'sao-tome-and-príncipe',
'saudi-arabia',
'scotland',
'senegal',
'serbia',
'seychelles',
'sierra-leone',
'singapore',
'sint-eustatiussint-maarten',
'slovakia',
'slovenia',
'solomon-islands',
'somalia',
'south-africa',
'south-georgia-and-the-south-sandwich-islands',
'south-korea',
'south-ossetia',
'south-sudan',
'spain',
'sri-lanka',
'sudan',
'suriname',
'svalbard',
'swaziland',
'sweden',
'switzerland',
'syria',
'taiwan',
'tajikistan',
'tanzania',
'thailand',
'togo',
'tokelau',
'tonga',
'trinidad-and-tobago',
'tristan-da-cunha',
'tunisia',
'turkey',
'turkmenistan',
'turks-and-caicos-islands',
'tuvalu',
'uganda',
'ukraine',
'united-arab-emirates',
'united-kingdom',
'united-states',
'united-states-virgin-islands',
'uruguay',
'uzbekistan',
'vanuatu',
'vatican-city',
'venezuela',
'vietnam',
'u.s.-virgin-islands',
'wales',
'wallis-and-futuna',
'western-sahara',
'yemen',
'zambia',
'zimbabwe');
sort($Negara);
/*print_r($Negara);*/
$warnamemek = $WarnaRandom[mt_rand(0, sizeof($WarnaRandom) - 1)];
echo "$warnamemek";
echo "
[ 0] ~ ABKHAZIA
[ 1] ~ AFGHANISTAN
[ 2] ~ ALAND-ISLANDS
[ 3] ~ ALBANIA
[ 4] ~ ALGERIA
[ 5] ~ AMERICAN-SAMOA
[ 6] ~ ANDORRA
[ 7] ~ ANGOLA
[ 8] ~ ANGUILLA   
[ 9] ~ ANTIGUA-AND-BARBUDA
[10] ~ ARGENTINA
[11] ~ ARMENIA
[12] ~ ARTSAKH
[13] ~ ARUBA
[14] ~ ASCENSION-ISLAND
[15] ~ AUSTRALIA
[16] ~ AUSTRALIAN-ANTARCTIC-TERRITORY
[17] ~ AUSTRIA
[18] ~ AZERBAIJAN
[19] ~ BAHAMAS
[20] ~ BAHRAIN
[21] ~ BANGLADESH
[22] ~ BARBADOS
[23] ~ BELARUS
[24] ~ BELGIUM
[25] ~ BELIZE
[26] ~ BENIN
[27] ~ BERMUDA
[28] ~ BHUTAN
[29] ~ BOLIVIA
[30] ~ BONAIRE
[31] ~ BOSNIA-AND-HERZEGOVINA
[32] ~ BOTSWANA
[33] ~ BRAZIL
[34] ~ BRITISH-INDIAN-OCEAN-TERRITORY
[35] ~ BRITISH-VIRGIN-ISLANDS
[36] ~ BRUNEI
[37] ~ BULGARIA
[38] ~ BURKINA-FASOBURMA
[39] ~ BURUNDI
[40] ~ CAMBODIA
[41] ~ CAMEROON
[42] ~ CANADA
[43] ~ CANARY-ISLANDS
[44] ~ CAPE-VERDE
[45] ~ CAYMAN-ISLANDS
[46] ~ CENTRAL-AFRICAN-REPUBLIC
[47] ~ CEUTA
[48] ~ CHAD
[49] ~ CHAGOS-ISLANDS
[50] ~ CHILE
[51] ~ CHRISTMAS-ISLAND
[52] ~ COCOS-ISLANDS
[53] ~ COLLECTIVITY-OF-SAINT-MARTIN
[54] ~ COLOMBIA
[55] ~ COMOROS
[56] ~ COOK-ISLANDS
[57] ~ COSTA-RICA
[58] ~ CROATIA
[59] ~ CUBA
[60] ~ CURACAO
[61] ~ CURACAO-AND-THE-CARIBBEAN-NETHERLANDS
[62] ~ CYPRUS
[63] ~ CZECH-REPUBLIC
[64] ~ DEMOCRATIC-REPUBLIC-OF-CONGO
[65] ~ DENMARK
[66] ~ DIEGO-GARCIA
[67] ~ DJIBOUTI
[68] ~ DOMINICA
[69] ~ DOMINICAN-REPUBLIC
[70] ~ EAST-TIMOR
[71] ~ EASTER-ISLAND
[72] ~ ECUADOR
[73] ~ EGYPT
[74] ~ EL-SALVADOR
[75] ~ ENGLAND
[76] ~ EQUATORIAL-GUINEA
[77] ~ ERITREA
[78] ~ ESTONIA
[79] ~ ETHIOPIA
[80] ~ FALKLAND-ISLANDS
[81] ~ FAROE-ISLANDS
[82] ~ FEDERATED-STATES-OF-MICRONESIA
[83] ~ FIJI
[84] ~ FINLAND
[85] ~ FRANCE
[86] ~ FRENCH-GUIANA
[87] ~ FRENCH-OVERSEAS-DEPARTMENTS-AND-TERRITORIES
[88] ~ FRENCH-POLYNESIA
[89] ~ GABON
[90] ~ GAMBIA
[91] ~ GEORGIA
[92] ~ GERMANY
[93] ~ GHANA
[94] ~ GIBRALTAR
[95] ~ GREECE
[96] ~ GREENLAND
[97] ~ GRENADA
[98] ~ GUADELOUPE
[99] ~ GUAM
[100] ~ GUATEMALA
[101] ~ GUERNSEY
[102] ~ GUINEA
[103] ~ GUINEA-BISSAU
[104] ~ GUYANA
[105] ~ HAITI
[106] ~ HAWAII
[107] ~ HONDURAS
[108] ~ HONG-KONG
[109] ~ HUNGARY
[110] ~ ICELAND
[111] ~ INDIA
[112] ~ INDONESIA
[113] ~ IRAN
[114] ~ IRAQ
[115] ~ IRELAND
[116] ~ ISLE-OF-MAN
[117] ~ ISRAEL
[118] ~ ITALY
[119] ~ IVORY-COAST
[120] ~ JAMAICA
[121] ~ JAN-MAYEN
[122] ~ JAPAN
[123] ~ JERSEY
[124] ~ JORDAN
[125] ~ KAZAKHSTAN
[126] ~ KENYA
[127] ~ KIRIBATI
[128] ~ KOSOVO
[129] ~ KUWAIT
[130] ~ KYRGYZSTAN
[131] ~ LAOS
[132] ~ LATVIA
[133] ~ LEBANON
[134] ~ LESOTHO
[135] ~ LIBERIA
[136] ~ LIBYA
[137] ~ LIECHTENSTEIN
[138] ~ LITHUANIA
[139] ~ LUxEMBOURG
[140] ~ MACAU
[141] ~ MADAGASCAR
[142] ~ MADEIRA
[143] ~ MALAWI
[144] ~ MALAYSIA
[145] ~ MALI
[146] ~ MALTA
[147] ~ MARSHALL-ISLANDS
[148] ~ MARTINIQUE
[149] ~ MAURITANIA
[150] ~ MAURITIUS
[151] ~ MAYOTTE
[152] ~ MELILLA
[153] ~ MExICO
[154] ~ MOLDOVA
[155] ~ MONACO
[156] ~ MONGOLIA
[157] ~ MONTENEGRO
[158] ~ MONTSERRAT
[159] ~ MOROCCO
[160] ~ MOZAMBIQUE
[161] ~ MYANMAR
[162] ~ NAMIBIA
[163] ~ NAURU
[164] ~ NEPAL
[165] ~ NETHERLANDS
[166] ~ NEW-CALEDONIA
[167] ~ NEW-ZEALAND
[168] ~ NICARAGUA
[169] ~ NIGER
[170] ~ NIGERIA
[171] ~ NIUE
[172] ~ NORFOLK-ISLAND
[173] ~ NORTH-KOREAND
[174] ~ NORTHERN-CYPRUS
[175] ~ NORTHERN-IRELAND
[176] ~ NORTHERN-MARIANA-ISLANDS
[177] ~ NORWAY
[178] ~ OMAN
[179] ~ PAKISTAN
[180] ~ PALAU
[181] ~ PALESTINE-STATE-OF
[182] ~ PANAMA
[183] ~ PAPUA-NEW-GUINEA
[184] ~ PARAGUAY
[185] ~ PEOPLES-REPUBLIC-OF-CHINA
[186] ~ PERU
[187] ~ PHILIPPINES
[188] ~ PITCAIRN-ISLANDS
[189] ~ PLAZAS-DE-SOBERANíA
[190] ~ POLAND
[191] ~ PORTUGAL
[192] ~ PRíNCIPE
[193] ~ PUERTO-RICO
[194] ~ QATAR
[195] ~ REPUBLIC-OF-CONGO
[196] ~ REPUBLIC-OF-MACEDONIA
[197] ~ REUNION
[198] ~ ROMANIA
[199] ~ RUSSIA
[200] ~ RWANDA
[201] ~ SABA
[202] ~ SAHRAWI-ARAB-DEMOCRATIC-REPUBLIC
[203] ~ SAINT-BARTHELEM
[204] ~ SAINT-HELENA-AND-TRISTAN-DA-CUNHA
[205] ~ SAINT-KITTS-AND-NEVISSAINT-LUCIA
[206] ~ SAINT-PIERRE-AND-MIQUELON
[207] ~ SAINT-VINCENT-AND-THE-GRENADINES
[208] ~ SAMOA
[209] ~ SAN-MARINO
[210] ~ SAO-TOME-AND-PRíNCIPE
[211] ~ SAUDI-ARABIA
[212] ~ SCOTLAND
[213] ~ SENEGAL
[214] ~ SERBIA
[215] ~ SEYCHELLES
[216] ~ SIERRA-LEONE
[217] ~ SINGAPORE
[218] ~ SINT-EUSTATIUSSINT-MAARTEN
[219] ~ SLOVAKIA
[220] ~ SLOVENIA
[221] ~ SOLOMON-ISLANDS
[222] ~ SOMALIA
[223] ~ SOUTH-AFRICA
[224] ~ SOUTH-GEORGIA-AND-THE-SOUTH-SANDWICH-ISLANDS
[225] ~ SOUTH-KOREA
[226] ~ SOUTH-OSSETIA
[227] ~ SOUTH-SUDAN
[228] ~ SPAIN
[229] ~ SRI-LANKA
[230] ~ SUDAN
[231] ~ SURINAME
[232] ~ SVALBARD
[233] ~ SWAZILAND
[234] ~ SWEDEN
[235] ~ SWITZERLAND
[236] ~ SYRIA
[237] ~ TAIWAN
[238] ~ TAJIKISTAN
[239] ~ TANZANIA
[240] ~ THAILAND
[241] ~ TOGO
[242] ~ TOKELAU
[243] ~ TONGA
[244] ~ TRINIDAD-AND-TOBAGO
[245] ~ TRISTAN-DA-CUNHA
[246] ~ TUNISIA
[247] ~ TURKEY
[248] ~ TURKMENISTAN
[249] ~ TURKS-AND-CAICOS-ISLANDS
[250] ~ TUVALU
[251] ~ U.S.-VIRGIN-ISLANDS
[252] ~ UGANDA
[253] ~ UKRAINE
[254] ~ UNITED-ARAB-EMIRATES
[255] ~ UNITED-KINGDOM
[256] ~ UNITED-STATES
[257] ~ UNITED-STATES-VIRGIN-ISLANDS
[258] ~ URUGUAY
[259] ~ UZBEKISTAN
[260] ~ VANUATU
[261] ~ VATICAN-CITY
[262] ~ VENEZUELA
[263] ~ VIETNAM
[264] ~ WALES
[265] ~ WALLIS-AND-FUTUNA
[266] ~ WESTERN-SAHARA
[267] ~ YEMEN
[268] ~ ZAMBIA
[269] ~ ZIMBABWE
";
echo "PILIH NEGARANYA ANJING =>> ";
$Neg = trim(fgets(STDIN));
echo "\n";
echo "\r";
/*echo "\033[0;34mMasukan Kode : \033[0;32m";
$input = trim(fgets(STDIN));*/
while(true){
$WarnaRandom = array(
"\033[0;30m",
"\033[0;31m",
"\033[0;32m",
"\033[0;33m",
"\033[0;34m",
"\033[0;35m",
"\033[0;36m",
"\033[0;37m",
"\033[37;1m",
"\033[1;30m",
"\033[1;32m",
"\033[1;33m",
"\033[1;34m",
"\033[1;35m",
"\033[1;36m",
"\033[37;1m",
"\033[1;37m"
);
$warnamemek = $WarnaRandom[mt_rand(0, sizeof($WarnaRandom) - 1)];
$ch = curl_init(); 
$url = "https://fakenumber.net/phone-number/$Negara[$Neg]"; 
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($ch);
error_reporting(0);
$j = array(
	'1',
	'2',
	'3',
	'4',
	'5',
	'6',
	'7',
	'8',
	'9',
	'10',
	'11',
	'12',
	'13',
	'14',
	'15',
	'16',
	'17',
	'18',
	'19'
);
$k = $j[mt_rand(0, sizeof($j) - 1)];
// echo $result;
$g = explode('<div class="fake-phone-number">',$result)[1];
$gy = explode('<span>',$g)[$k];
$gh = explode('</span></a>',$gy)[0];
echo "$warnamemek [+] Your Number : [$warnamemek".$gh."$warnamemek]";
echo "\n";
}
}
elseif($pilih == "EXIT"){
system(exit);
}goto menu;
