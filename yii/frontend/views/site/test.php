<?php

use common\models\ApiLogin;

$CONST = 1000000;
$kvt = 1000;
$date = "20250211";
$channel = 29;
$coefficient = 100000;

$curl = curl_init();
$login = ApiLogin::find()->where(['id_organization' => 49])->one();

//echo "http://user:{$login['password']}@192.168.40.215:{$login['port']}/crq?req=archive&type=b&n1={$channel}&n2={$channel}&t1={$date}000000w&t2=20250121233000w&interval=main";

curl_setopt_array($curl, array(
    CURLOPT_URL => "http://user:{$login['password']}@192.168.40.215:{$login['port']}/crq?req=archive&type=b&n1={$channel}&n2={$channel}&t1={$date}000000w&t2={$date}233000w&interval=main",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);
curl_close($curl);
//print_r($response);
$result = explode(",", $response);
//echo "<br/>http://user:c8H_us3r@192.168.40.215:10006/crq?req=archive&type=b&n1={$channel}&n2={$channel}&t1={$date}000000w&t2={$date}233000w&interval=main<br/>";


echo mb_substr($result[6],0,1,'UTF-8');
echo $result[6]."<br>";
echo $result[9]."<br>";
die;

echo "<br/>1=-5*8--";echo $result1 = ((float)$result[5] + (float)$result[8]);// * $coefficient;
echo "<br/>2=-11*14--";echo $result2 = ((float)$result[11] + (float)$result[14]);// * $coefficient;
echo "<br/>3=-17*20--";echo $result3 = ((float)$result[17] + (float)$result[20]);// * $coefficient;
echo "<br/>4=-23*26--";echo $result4 = ((float)$result[23] + (float)$result[26]);// * $coefficient;
echo "<br/>5=-29*32--";echo $result5 = ((float)$result[29] + (float)$result[32]);// * $coefficient;
echo "<br/>6=-35*38--";echo $result6 = ((float)$result[35] + (float)$result[38]);// * $coefficient;
echo "<br/>7=-41*44--";echo $result7 = ((float)$result[41] + (float)$result[44]);// * $coefficient;
echo "<br/>8=-47*50--";echo $result8 = ((float)$result[47] + (float)$result[50]);// * $coefficient;
echo "<br/>9=-53*56--";echo $result9 = ((float)$result[53] + (float)$result[56]);// * $coefficient;
echo "<br/>10=-59*62--";echo $result10 = ((float)$result[59] + (float)$result[62]);// * $coefficient;
echo "<br/>11=-65*68-";echo $result11 = ((float)$result[65] + (float)$result[68]);// * $coefficient;
echo "<br/>12=-71*74-";echo $result12 = ((float)$result[71] + (float)$result[74]);// * $coefficient;
echo "<br/>13=-77*80-";echo $result13 = ((float)$result[77] + (float)$result[80]);// * $coefficient;
echo "<br/>14=-83*92-";echo $result14 = ((float)$result[83] + (float)$result[86]);// * $coefficient;
echo "<br/>15=-89*92-";echo $result15 = ((float)$result[89] + (float)$result[92]);// * $coefficient;
echo "<br/>16=-95*98-";echo $result16 = ((float)$result[95] + (float)$result[98]);// * $coefficient;
echo "<br/>17=-101*104-";echo $result17 = ((float)$result[101] + (float)$result[104]);// * $coefficient;
echo "<br/>18=-107*110-";echo $result18 = ((float)$result[107] + (float)$result[110]);// * $coefficient;
echo "<br/>19=-113*116-";echo $result19 = ((float)$result[113] + (float)$result[116]);// * $coefficient;
echo "<br/>20=-119*122-";echo $result20 = ((float)$result[119] + (float)$result[122]);// * $coefficient;
echo "<br/>21=-125*128-";echo $result21 = ((float)$result[125] + (float)$result[128]);// * $coefficient;
echo "<br/>22=-131*134-";echo $result22 = ((float)$result[131] + (float)$result[134]);// * $coefficient;
echo "<br/>23=-137*140-";echo $result23 = ((float)$result[137] + (float)$result[140]);// * $coefficient;
echo "<br/>24=-143*146-";echo $result24 = ((float)$result[143] + (float)$result[146]);// * $coefficient;
echo "<br/>All G="; echo $all = $result1 + $result2 + $result3 + $result4 + $result5 + $result6 + $result7 + $result8 + $result9 + $result10 + $result11 + $result12 + $result13 + $result14 + $result15 + $result16 + $result17 + $result18 + $result19 + $result20 + $result21 + $result22 + $result23 + $result24;
echo "<br/>";
//3.959
//3.959200


//$g1 = 2025840;
//$g2 = 0;
//$g3 = 778320;
//$g4 = 0;
//
//$g = $g1 + $g2 + $g3 + $g4;
//echo "<br/>All G-1=2025840";
//echo "<br/>All G-2=0";
//echo "<br/>All G-3=778320";
//echo "<br/>All G-4=0";
//echo "<br/>All=".$g;


//echo "<br/>".$result[0]."-0<br/>";
//echo $result[1]."-1<br/>";
//echo $result[2]."-2<br/>";
//echo $result[3]."-3<br/>";
//die;
//echo $result[4]."-4<br/>";
//echo $result[5]."-5<br/>";
////echo $result[6]."-6<br/>";
////echo $result[7]."-7<br/>";
//echo $result[8]."-8<br/>";
////echo $result[9]."-9<br/>";
////echo $result[10]."-10<br/>";
//echo $result[11]."-11<br/>";
////echo $result[12]."-12<br/>";
////echo $result[13]."-13<br/>";
//echo $result[14]."-14<br/>";
////echo $result[15]."-15<br/>";
////echo $result[16]."-16<br/>";
//echo $result[17]."-17<br/>";
////echo $result[18]."-18<br/>";
////echo $result[19]."-19<br/>";
//echo $result[20]."-20<br/>";
////echo $result[21]."-21<br/>";
////echo $result[22]."-22<br/>";
//echo $result[23]."-23<br/>";
////echo $result[24]."-24<br/>";
////echo $result[25]."-25<br/>";
//echo $result[26]."-26<br/>";
////echo $result[27]."-27<br/>";
////echo $result[28]."-28<br/>";
//echo $result[29]."-29<br/>";
////echo $result[30]."-30<br/>";
////echo $result[31]."-31-<br/>";
//echo $result[32]."-32-<br/>";
////echo $result[33]."-33-<br/>";
////echo $result[34]."-34-<br/>";
//echo $result[35]."-35-<br/>";
////echo $result[36]."-36-<br/>";
////echo $result[37]."-37-<br/>";
//echo $result[38]."-38-<br/>";
////echo $result[39]."-39-<br/>";
////echo $result[40]."-40-<br/>";
//echo $result[41]."-41-<br/>";
////echo $result[42]."-42-<br/>";
////echo $result[43]."-43-<br/>";
//echo $result[44]."-44-<br/>";
////echo $result[45]."-45-<br/>";
////echo $result[46]."-46-<br/>";
//echo $result[47]."-47-<br/>";
////echo $result[48]."-48-<br/>";
////echo $result[49]."-49-<br/>";
//echo $result[50]."-50-<br/>";
////echo $result[51]."-51-<br/>";
////echo $result[52]."-52-<br/>";
//echo $result[53]."-53-<br/>";
////echo $result[54]."-54-<br/>";
////echo $result[55]."-55-<br/>";
//echo $result[56]."-56-<br/>";
////echo $result[57]."-57-<br/>";
////echo $result[58]."-58-<br/>";
//echo $result[59]."-59-<br/>";
////echo $result[60]."-60-<br/>";
////echo $result[61]."-61-<br/>";
//echo $result[62]."-62-<br/>";
////echo $result[63]."-63-<br/>";
////echo $result[64]."-64-<br/>";
//echo $result[65]."-65-<br/>";
////echo $result[66]."-66-<br/>";
////echo $result[67]."-67-<br/>";
//echo $result[68]."-68-<br/>";
////echo $result[69]."-69-<br/>";
////echo $result[70]."-70-<br/>";
//echo $result[71]."-71-<br/>";
////echo $result[72]."-72-<br/>";
////echo $result[73]."-73-<br/>";
//echo $result[74]."-74-<br/>";
////echo $result[75]."-75-<br/>";
////echo $result[76]."-76-<br/>";
//echo $result[77]."-77-<br/>";
////echo $result[78]."-78-<br/>";
////echo $result[79]."-79-<br/>";
//echo $result[80]."-80-<br/>";
////echo $result[81]."-81-<br/>";
////echo $result[82]."-82-<br/>";
//echo $result[83]."-83-<br/>";
////echo $result[84]."-84-<br/>";
////echo $result[85]."-85-<br/>";
//echo $result[86]."-86-<br/>";
////echo $result[87]."-87-<br/>";
////echo $result[88]."-88-<br/>";
//echo $result[89]."-89-<br/>";
////echo $result[90]."-90-<br/>";
////echo $result[91]."-91-<br/>";
//echo $result[92]."-92-<br/>";
////echo $result[93]."-93-<br/>";
////echo $result[94]."-94-<br/>";
//echo $result[95]."-95-<br/>";
////echo $result[96]."-96-<br/>";
////echo $result[97]."-97-<br/>";
//echo $result[98]."-98-<br/>";
////echo $result[99]."-99-<br/>";
////echo $result[100]."-100<br/>";
//echo $result[101]."-101<br/>";
////echo $result[102]."-102<br/>";
////echo $result[103]."-103<br/>";
//echo $result[104]."-104<br/>";
////echo $result[105]."-105<br/>";
////echo $result[106]."-106<br/>";
//echo $result[107]."-107<br/>";
////echo $result[108]."-108<br/>";
////echo $result[109]."-109<br/>";
//echo $result[110]."-110<br/>";
////echo $result[111]."-111<br/>";
////echo $result[112]."-112<br/>";
//echo $result[113]."-113<br/>";
////echo $result[114]."-114<br/>";
////echo $result[115]."-115<br/>";
//echo $result[116]."-116<br/>";
////echo $result[117]."-117<br/>";
////echo $result[118]."-118<br/>";
//echo $result[119]."-119<br/>";
////echo $result[120]."-120<br/>";
////echo $result[121]."-121<br/>";
//echo $result[122]."-122<br/>";
////echo $result[123]."-123<br/>";
////echo $result[124]."-124<br/>";
//echo $result[125]."-125<br/>";
////echo $result[126]."-126<br/>";
////echo $result[127]."-127<br/>";
//echo $result[128]."-128<br/>";
////echo $result[129]."-129<br/>";
////echo $result[130]."-130<br/>";
//echo $result[131]."-131<br/>";
////echo $result[132]."-132<br/>";
////echo $result[133]."-133<br/>";
//echo $result[134]."-134<br/>";
////echo $result[135]."-135<br/>";
////echo $result[136]."-136<br/>";
//echo $result[137]."-137<br/>";
////echo $result[138]."-138<br/>";
////echo $result[139]."-139<br/>";
//echo $result[140]."-140<br/>";
////echo $result[141]."-141<br/>";
////echo $result[142]."-142<br/>";
//echo $result[143]."-143<br/>";
////echo $result[144]."-144<br/>";
////echo $result[145]."-145<br/>";
//echo $result[146]."-146<br/>";
//echo $result[147]."-147<br/>";
//echo $result[148]."<br/>";
//echo $result[149]."<br/>";
//echo $result[150]."<br/>";
//echo $result[151]."<br/>";
//echo $result[152]."<br/>";
//echo $result[153]."<br/>";
//echo $result[154]."<br/>";
//echo $result[155]."<br/>";
//echo $result[156]."<br/>";
//echo $result[157]."<br/>";
//echo $result[158]."<br/>";
//echo $result[159]."<br/>";
//echo $result[160]."<br/>";
//echo $result[161]."<br/>";
//echo $result[162]."<br/>";
//echo $result[163]."<br/>";
//echo $result[164]."<br/>";
//echo $result[165]."<br/>";
//echo $result[166]."<br/>";
//echo $result[167]."<br/>";
//echo $result[168]."<br/>";
//echo $result[169]."<br/>";
//echo $result[170]."<br/>";
//echo $result[171]."<br/>";
//echo $result[172]."<br/>";
//echo $result[173]."<br/>";
//echo $result[174]."<br/>";
//echo $result[175]."<br/>";
//echo $result[176]."<br/>";
//echo $result[177]."<br/>";
//echo $result[178]."<br/>";
//echo $result[179]."<br/>";
//echo $result[180]."<br/>";
//echo $result[181]."<br/>";
//echo $result[182]."<br/>";
//echo $result[183]."<br/>";
//echo $result[184]."<br/>";
//echo $result[185]."<br/>";
//echo $result[186]."<br/>";
//echo $result[187]."<br/>";
//echo $result[188]."<br/>";
//echo $result[189]."<br/>";
//echo $result[190]."<br/>";
//echo $result[193]."<br/>";
//echo $result[194]."<br/>";
//echo $result[195]."<br/>";
//echo $result[196]."<br/>";
$this->registerJsFile('https://code.jquery.com/jquery-3.6.0.min.js', ['depends' => [\yii\web\JqueryAsset::class]]);
?>
<div id="result"></div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const username = 'user';
        const password = 'c8H_us3r';
        const credentials = btoa(`${username}:${password}`);

        fetch('http://192.168.40.215:10006/crq?req=current', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Basic ${credentials}`,
            },
        })
            .then(function (response) {
                console.log('Статус ответа:', response.status);
                if (!response.ok) {
                    throw new Error('Ошибка сети: ' + response.statusText);
                }
                return response.json();
            })
            .then(function (data) {
                console.log('Данные:', data);
            })
            .catch(function (error) {
                console.error('Произошла ошибка:', error);
            });
    });
</script>

<?php
header("Access-Control-Allow-Origin: *"); // Разрешить запросы с любого домена
header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); // Разрешенные методы
header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Разрешенные заголовки

// Обработка предварительного запроса (preflight)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0); // Ответ на OPTIONS-запрос
}

// Ваш код обработки запроса
echo json_encode(['status' => 'success', 'message' => 'Запрос выполнен']);