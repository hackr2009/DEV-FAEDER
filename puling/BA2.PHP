<?php
define('API_KEY','375497527:AAF7XVxefYT_j3KfH_a3MTNCbZ_kqEtDtW4');
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($datas));
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents('php://input'));
$chat_id = $update->message->chat->id;
$text = $update->message->text;
$message_id = $update->message->message_id;


function SendMessage($ChatId, $TextMsg)
{
 bot('sendMessage',[
'chat_id'=>$ChatId,
'text'=>$TextMsg,
'parse_mode'=>"html"
]);
}
if($text == "/start"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"اهــلـا سـيـديـي 🗯🎖

فــي بـوت الـردود 🗣🔌

قــم بــتـرقـيـتـي مـشـرف لـاصـنـع تـفـاعـل فـي مـجـمـوعـتـك 🎆


BY: @RUESAPI ",
]);
}
if($text == "هلو"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"هـلـاوات☂",
 ]);
 }
 
if($text == "شلونك"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"الــحـمـدالـله☺",
 ]);
 }

if($text == "دي"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"امـشـيك بـيـهـا هـاـي بـنـعـال🌝🍌",
 ]);
 }

if($text == "اتحبني"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اعــشـقـك يـرب الـكـعـبـة 😻",
 ]);
 }

if($text == "مها"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"هـاـي الـروح والـكـلـب 🙈😻",
 ]);
 }

if($text == "باي"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ويـن خـلـيـنـة بـتـونـسـيـن 😻😹",
 ]);
 }
 
if($text == "بغداد"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"عـــشـق لـايـنـتـهــي 😻🌿",
 ]);
 }
 
if($text == "احبك"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"امـــوت عـلـيـك 😻😽",
 ]);
 }

if($text == "احبج"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"امــوت علـيـك حـيـاــتـي 😻🙊",
 ]);
 }

if($text == "شكرا"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"عــــفـواا 🌞🌿",
 ]);
 }
 
if($text == "تف"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تــفــوو ع وجــهــك كــوااد 🌝🐜",
 ]);
 }

if($text == "بوت"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"كــول حــبـحـيـاتــي 🌝🌿",
 ]);
 }
 
if($text == "انجب"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"وكــــك انــجـبـيـت 😷🔪",
 
 ]);
 }

if($text == "منو صنعك"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"هــذا الهــيـبـة الـتـسـطـر 😻🔥
 
           ►▇ @EEZIN ▇◐►",
 ]);
 }

if($text == "اكفر"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اكــفـر وشــوف ادحـــس الــعـيـر بـــكـسـمـك 🌞🔥",
 ]);
 }
 
if($text == "استغفر الله"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"بـــركـاتـك مــولـايــي 🌚🐗",
 ]);
 }

if($text == "رويس"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"هــذا الـضـلـع الـمـايـنـشـلـع فــديـتـه 😻😹",
 ]);
 }
 
if($text == "😳"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"هـــاا بــس لـاشــفـت خــالـتـك الـحـمـرة 🙀😹",
 ]);
 }
 
if($text == "🌚"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اهــــوو اصــخـام الـجـدر تــفــوو ع هــيـج وجــه 🌚🔥",
 ]);
 }

if($text == "😻"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"فـــديـت الـــحـب 🙈😻",
 ]);
 }
 
if($text == "😿"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اشــبـيـك حـــب  😿😹",
 ]);
 }
 
if($text == "😹"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"دومـــهــا ابــنـصـخـل 😹😹",
 ]);
 }
 
if($text == "🌝"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"فـــديــت الــكـمـر",
 ]);
 }
 
if($text == "😽"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"لــتـبـوــس لـاابـلـشـحـاطـة ع حــلـكـك 😾😹",
 ]);
 }
 
 
if($text == "داني"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ءوووف اخو بكر هذ 😻💜",
 ]);
 }
 
if($text == "اتخليني"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"بـــااع هــذاا مـــدود 🌞😹",
 ]);
 }
 
if($text == "هينة"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تـــعـال لــك زبــالـة 🌝😹",
 ]);
 }
 
if($text == "زاحف"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"زاخـــف عــلـخـتـك مــثـلاا",
 ]);
 }

if($text == "بكر"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ءوووف هـــذا تــاج راســي",
 ]);
 }

if($text == "ياسر"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ء ووف اخو بكر هذا فديته 😻💙",
 ]);
 }
?>$text == "نعال"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ع وجـــهــك",
 ]);
 }
 
if($text == "اتخليني"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"بـــااع هــذاا مـــدود 🌞😹",
 ]);
 }
 
if($text == "هينة"){
 bot('sendMessage',[
 'chat_id'=>$ch