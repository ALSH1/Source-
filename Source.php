<?php
# ------------------------------------------------
# -- This Source Was Developed By (ABS) @[@$DevUser].--
# --   This Is The Source Channel @saiko_2k .   --
# --                - DevProx -                 --
# --        -- https://t.me/saiko_2k --         --
# ------------------------------------------------ 
ob_start();
$get_toke = file_get_contents('info.php');
$get_token = explode("\n", $get_toke);

$url_info = file_get_contents("https://api.telegram.org/bot$get_token[0]/getMe");
$json_info = json_decode($url_info);

$userBot = $json_info->result->username;
$idBot = $json_info->result->id;

$DevUser = $get_token[2];

$DevId = $get_token[1];
$Dev = array("$DevId","961743188");

//$API_KEY = $get_token[0];
$API_KEY = "1149431461:AAF8oV3dh5a1tv2dt8P9a7xTfZ_VMwgvX1E";

define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$DevProx=[]){
$DevProx = http_build_query($DevProx);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$DevProx";
$DevProx = file_get_contents($url);
return json_decode($DevProx);}
# --     Source DevProx     --
$channel = "SAIKO_2K";
$token = API_KEY;
# --     Source DevProx     --
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$text = $message->text;
$firstname = $update->callback_query->from->first_name;
$usernames = $update->callback_query->from->username;
$chatid = $update->callback_query->message->chat->id;
$fromid = $update->callback_query->from->id;
$reply = $update->message->reply_to_message->forward_from->id;
$data = $update->callback_query->data;
$tc = $update->message->chat->type;
$namegroup = $update->message->chat->title;
$newchatmemberid = $update->message->new_chat_member->id;
$newchatmemberu = $update->message->new_chat_member->username;
$edit = $update->edited_message->text;
$re_id = $update->message->reply_to_message->from->id;
$re = $update->message->reply_to_message;
$re_user = $update->message->reply_to_message->from->username;
$re_name = $update->message->reply_to_message->from->first_name;
$re_msgid = $update->message->reply_to_message->message_id;
$message_edit_id = $update->edited_message->message_id;
$chat_edit_id = $update->edited_message->chat->id;
$edit_for_id = $update->edited_message->from->id;
$caption = $update->message->caption;
$name = $update->message->from->first_name;
$name20 = substr($name,0,20).""; 
$user = $update->message->from->username;
$mid = $message->message_id;
# --     Source DevProx     --
$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
$status = $statjson['result']['status'];
$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
$statusrt = $statjsonrt['result']['status'];
$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
$statusq = $statjsonq['result']['status'];
$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
$you = $info['result']['status'];
$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$channel."&user_id=".$from_id));
$tch = $forchannel->result->status;
$settings = json_decode(file_get_contents("data/$chat_id/$chat_id.json"),true);
$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
$user = json_decode(file_get_contents("data/user.json"),true);
$infos = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$idBot"), true);
$bot = $infos['result']['status'];
$can_bot_chang_info = $infos['result']['can_change_info'];
$can_bot_delete =  $infos['result']['can_delete_messages'];
$can_bot_restrict = $infos['result']['can_restrict_members'];
$can_bot_invite = $infos['result']['can_invite_users'];
$can_bot_pin = $infos['result']['can_pin_messages'];
$can_bot_promote = $infos['result']['can_promote_members'];
$filterget = $settings["filterlist"];
$allmsgpv = file_get_contents("data/allmsgpv.txt");
# --     Source DevProx     --
function SendMessage($chat_id, $text){ bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>$text, 'parse_mode'=>'MarkDown']); }
function Forward($berekoja,$azchejaei,$kodompayam){ bot('ForwardMessage',[ 'chat_id'=>$berekoja, 'from_chat_id'=>$azchejaei, 'message_id'=>$kodompayam ]); }
function getUserProfilePhotos($token,$from_id) { $url = 'https://api.telegram.org/bot'.$token.'/getUserProfilePhotos?user_id='.$from_id; $result = file_get_contents($url); $result = json_decode ($result); $result = $result->result; return $result; }
function objectToArrays($object){ if(!is_object($object) && !is_array($object)) { return $object;} if(is_object($object)) { $object = get_object_vars($object);} return array_map("objectToArrays", $object); }
# --     Source DevProx     --
if ($tc == 'private'){  
$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($from_id, $user["userlist"])) {
$user["userlist"][]="$from_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);}
}
elseif ($tc == 'group' | $tc == 'supergroup'){  
$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);}
}
# --     Source DevProx     --
# --     info developers   --
$developers_info = file_get_contents("data/developers/developer.txt");
$developer = explode ("\n",$developers_info);
$developers_infos = file_get_contents("data/developers/developers.txt");
$developers = explode("\n",$developers_infos);
$list_developers ="";
$list_developers = $list_developers."⌯ ".$developers_infos."\n〰️➖〰️➖〰️➖〰️➖〰️\n❗️🎒 ⌯ الٱيـديـٱت ⌯» ⤈ \n" ."⌯ `".$developers_info . "`";
# --     Source DevProx     --
# --      info mangers      --
$mangers_info = file_get_contents("data/manger/$chat_id.txt");
$manger  = explode("\n",$mangers_info);
$mangers_infos = file_get_contents("data/manger/$chat_id/mange.txt");
$mangers = explode ("\n",$mangers_infos);
# --     Source DevProx     --
# --      info admins       --
$admin_users_info = file_get_contents("data/admin_user/$chat_id.txt");
$admin_user  = explode("\n",$admin_users_info);
$admin_users_infos = file_get_contents("data/admin_user/$chat_id/mange.txt");
$admin_users = explode ("\n",$admin_users_infos);
# --     Source DevProx     --
# --      info vipmem       --
$vipmems_info = file_get_contents("data/vipmem/$chat_id.txt");
$vipmem  = explode("\n",$vipmems_info);
$vipmems_infos = file_get_contents("data/vipmem/$chat_id/mange.txt");
$vipmems = explode ("\n",$vipmems_infos);
# --     Source DevProx     --
# --      auto folders      --
mkdir("data");
mkdir("data/developers");
mkdir("data/manger");
mkdir("data/manger/$chat_id");
mkdir("data/admin_user");
mkdir("data/admin_user/$chat_id");
mkdir("data/vipmem");
mkdir("data/vipmem/$chat_id");
mkdir("statistics");
mkdir("SudoOrders");

date_default_timezone_set('Asia/Baghdad');
$today = date("l");
$nmonth = date("m");
$times = date("h:i");
$year = date("Y");

switch ($today) 
{
case "Saturday":  
$today="السبت"; 
break; 
case "Sutoday":  
$today="الأحد"; 
break;  
case "Motoday":  
$today="الاثنين"; 
break; 
case "Tuesday":  
$today="الثلاثاء"; 
break; 
case "Wednesday": 
$today="الأربعاء"; 
break; 
case "Thursday":  
$today="الخميس"; 
break; 
case "Friday":  
$today="الجمعة"; 
break; 
}  
$date = date('h:i:s'); $d = date('A');
 $aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
date_default_timezone_set('Asia/Baghdad');
$time = date('h:i a');
$year = date('Y');
$month = date('n');
$day = date('j');
$time = time() + (979 * 11 + 1 + 30);
$JJ =
$time = date('h:i a');
$year = date('Y');
$month = date('n');
$day = date('j');


# --     Source DevProx     --
$setch = file_get_contents("SudoOrders/setch.txt");
$setchannel = file_get_contents("SudoOrders/setchannel.txt");
if($text == "تفعيل"  or $text == "/start"  or $text == "ايديي" or $text == "ايدي" or $text == "صلاحيتي" or $text == "فحص البوت" or $text == "الاوامر" or $text == "الاعدادات" or $text == "رتبتي" or $text == "كشف" or $text == "الرتبه" or $text == "رتبته" or $text == "اضف رد" or $text == "حذف رد" or $text == "فحص" or $text == "الالعاب" or $text == "وضع قناة" or $text == "تفعيل اشتراك المجموعه" or $text == "تعطيل اشتراك المجموعه" or $text == "زخرفه"){
if($setchannel == "الاشتراك الاجباري مفعل"){
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$setch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❗️🚸 ⌯ عذرٱ لٱيمكنك ٱستخدٱم ٱڵبوت \n❗️🔑 ⌯ رجائٱ ٱشترك في قنٱة ٱڵبوت \n❗️🎗 ⌯ ڵتتمكن من ٱستخدٱمه \n❗️📣 ⌯ ٱڵقنٱة ⌯» { [$setch] } \n ",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⌯ أّلَقِنـااة ⁦ਊ",'url'=>"t.me/$setch"]],]])]); return false;}
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>" ",'reply_to_message_id'=>$message->message_id,]);}}
# --     Source DevProx     --
if(in_array($re,$Dev)){
$info = "مطور اساسي 👷";
}elseif($statusrt == "creator"){
$info = "ٱڵمنشئ";
}elseif($statusrt == "administrator"){
$info = "ٱڵـۧمشرف";
}elseif(in_array($re_id,$admin_user) ){
$info = "ٱلٱدمـۧن";
}elseif(in_array($re_id,$manger) ){
$info = "ٱڵمدير";
}elseif(in_array($re_id,$vipmem) ){
$info = "عضو مميز";
}elseif(in_array($re_id,$developer) ){
$info = "ٱڵمطۄر";
}elseif($statusrt== "member" ){
$info = "فقط عضو";
}
if(!$username){
$usew = "$first_name";
}elseif($re_user){
$usew = "@$re_user";
}
# --     Source DevProx     --
if($re and $text == "رفع مطور" and $re_id !=$id_Bot and  in_array($from_id,$Dev) and !in_array($re_id,$developer)){
file_put_contents("data/developers/developer.txt",$re_id ."\n " , FILE_APPEND);
file_put_contents("data/developers/developers.txt",'[@'.$re_user ."]". "\n " , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ [$usew] ❩\n🔑 ⌯ *تـۖم رفعه فيۧ قٱئمة ٱڵمطورين* \n ✓", 'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

elseif($re and $text == "رفع مطور"  and $re_id !=$id_Bot and in_array($from_id,$Dev)  and in_array($re_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ [$usew] ❩\n🔑 ⌯ *هوَ بٱڵفعڵ مطور في ٱڵـبوت* \n ✓", 'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($re and $text == "رفع مطور اساسي" and $re_id !=$id_Bot and  in_array($from_id,$Dev)){
file_put_contents("$re_id.txt",$re_id);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
📬┊العضو » [$usew]
👤┊ايديه » {$re_id}
🎖┊تم رفعه مطور اساسي معك
➖
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل مطور اساسي" || $text == "تنزيل مطور الاساسي"  and in_array($re_id,$Dev)){
			file_put_contents("$re_id.txt","");
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
📬┊العضو » [$usew]
👤┊ايديه » {$re_id}
🎖┊تم تنزيله مطور اساسي
➖
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
if($text == "حذف المطورين" || $text == "مسح المطورين" and in_array($from_id,$Dev)){
file_put_contents("data/developers/developer.txt"," ");
file_put_contents("data/developers/developers.txt"," ");
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯» [$info](tg://user?id=$re_id) \n🔑 ⌯ تـۖم حـذف مطورين ٱڵبوت \n ✓", 'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل مطور" and in_array($re_id,$developer)){
$re_id_info = file_get_contents("data/developers/$chat_id.txt");
$devr = file_get_contents("data/developers/$chat_id/developer.txt");
$devr1 = explode("             \n",$devr);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace("⌯ ❨ [" . "@". $re_user ."] ❩ " . "•" . " ❨ `". $re_id ."` ❩ ","",$devr1);
file_put_contents("data/developers/developer.txt",$str);
file_put_contents("data/developers/developers.txt",$str);
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ [$usew] ❩\n🔑 ⌯ *تـۖم تنزيڵه من قٱئمة ٱڵمطورين* \n ✓", 'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }}

if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل مطور" and !in_array($re_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ [$usew] ❩\n🔑 ⌯ *هوَ ڵيس مطور ڵيتم تنزيڵه* \n ✓", 'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); } }

if($text == "المطورين" and in_array($from_id,$Dev) and $developers_info != NULL or $text == "المطورين ،⚜️‘" and in_array($from_id,$Dev) and $developers_info != NULL){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"❗️🎒 ⌯ مطورين ٱڵـبوت ⌯» ⤈ \n〰️➖〰️➖〰️➖〰️➖〰️\n$list_developers\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }
if($text == "المطورين" and in_array($from_id,$Dev) and $developers_info == NULL or $text == "المطورين ،⚜️‘" and in_array($from_id,$Dev) and $developers_info == NULL){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"❗️📛 ⌯ *عذرٱ ڵم يتم رفع ٱي مطورين*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }
# --     Source DevProx     --
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "رفع مدير" || $text == "رفع المدير"  and !in_array($re_id,$manger)){
file_put_contents("data/manger/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
file_put_contents("data/manger/$chat_id/mange.txt" , "⌯ ❨ [" . "@". $re_user ."] ❩ " . "•" . " ❨ `". $re_id ."` ❩ ". "\n" , FILE_APPEND);
bot('SendMessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ [$usew] ❩\n🔑 ⌯ *تـۖم رفعه فيۧ قٱئمة ٱڵمدرٱء* \n ✓",'parse_mode'=>'markdown', 'reply_to_message_id'=>$message->message_id, 'disable_web_page_preview'=>true, ]); }

elseif($re and $text == "رفع مدير" || $text == "رفع المدير" and in_array($re_id,$manger)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ [$usew] ❩\n🔑 ⌯ *هوَ بٱڵفعڵ مدير في ٱڵـمجموعة* \n ✓",'parse_mode'=>'markdown','parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($text == "حذف المدراء" || $text == "مسح المدراء" ){
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯» [$info](tg://user?id=$re_id) \n🔑 ⌯ تـۖم حـذف ٱڵمدرٱء \n ✓",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  ]); }

if($re and $text == "تنزيل مدير" || $text == "تنزيل المدير"  and in_array($re_id,$manger)){
$re_id_info = file_get_contents("data/manger/$chat_id.txt");
$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
$mdrs1 = explode(" \n",$mdrs);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace("⌯ ❨ [" . "@". $re_user ."] ❩ " . "•" . " ❨ `". $re_id ."` ❩ ","",$mdrs1);
file_put_contents("data/manger/$chat_id.txt",$str);
file_put_contents("data/manger/$chat_id/mange.txt",$str2);
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"🚸 ⌯ *ٱڵـۧمـۧديـۧر* ⌯» ❨ [$usew] ❩\n🔑 ⌯ *تـۖم تنزيڵه من قٱئمة ٱڵمدرٱء* \n ✓",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير" and !in_array($re_id,$manger)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ [$usew] ❩\n🔑 ⌯ *هوَ ڵيس مدير ڵيتم تنزيڵه* \n ✓",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($text == "المدراء" || $text == "قائمه المدراء" and $mangers_info != NULL and $mangers_info != " "){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"❗️🎒 ⌯ قٱئمة ٱڵـمدرٱء ⌯» ⤈ \n〰️➖〰️➖〰️➖〰️➖〰️\n$mangers_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }
if($text == "المدراء" ||  $text == "قائمه المدراء" and $mangers_info == NULL || $mangers_info == " " || $mangers_info == ""){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"❗️📛 ⌯ *لٱ يوجد مدرٱء*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }
}
# --     Source DevProx     --
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "رفع ادمن"  and !in_array($re_id,$admin_user)){
file_put_contents("data/admin_user/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
file_put_contents("data/admin_user/$chat_id/mange.txt" , "⌯ ❨ [" . "@". $re_user ."] ❩ " . "•" . " ❨ `". $re_id ."` ❩ ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ [$usew] ❩\n🔑 ⌯ *تـۖم رفعه فيۧ قٱئمة ٱلٱدمنية* \n ✓",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

elseif($re and $text == "رفع ادمن" and in_array($re_id,$admin_user)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"🚸 ⌯ *ٱلٱدمـن* ⌯» ❨ [$usew] ❩\n🔑 ⌯ *هوَ بٱڵفعڵ ٱدمن في ٱڵـمجموعة* \n ✓",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($text == "حذف الادمنيه" || $text == "مسح الادمنيه" ){
file_put_contents("data/admin_user/$chat_id.txt","");
file_put_contents("data/admin_user/$chat_id.txt","");
file_put_contents("data/admin_user/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯» [$info](tg://user?id=$re_id) \n🔑 ⌯ تـۖم حـذف ٱلٱدمنية \n ✓",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  ]); }

if($re and $text == "تنزيل ادمن" and in_array($re_id,$admin_user)){
$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
$admn1 = explode(" \n",$admn);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace("⌯ ❨ [" . "@". $re_user ."] ❩ " . "•" . " ❨ `". $re_id ."` ❩ ","",$admn1);
file_put_contents("data/admin_user/$chat_id.txt",$str);
file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"🚸 ⌯ *ٱلٱدمـن* ⌯» ❨ [$usew] ❩\n🔑 ⌯ *تـۖم تنزيڵه من قٱئمة ٱلٱدمنية* \n ✓",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($re and $text == "تنزيل ادمن"  and !in_array($re_id,$admin_user)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ [$usew] ❩\n🔑 ⌯ *هوَ ڵيس ٱدمن ڵيتم تنزيڵه* \n ✓",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($text == "الادمنيه" || $text == "الادمنية" and $admin_users_info != NULL and $admin_users_info != " "){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"❗️🎒 ⌯ قٱئمة ٱلٱدمنية ⌯» ⤈ \n〰️➖〰️➖〰️➖〰️➖〰️\n$admin_users_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }
if($text == "الادمنيه" || $text == "الادمنية" and $admin_users_info == NULL || $admin_users_info == " " || $admin_users_info == ""){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"❗️📛 ⌯ *لٱ يوجد ٱدمنية*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }
}
# --     Source DevProx     --
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "رفع مميز"  and !in_array($re_id,$vipmem)){
file_put_contents("data/vipmem/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
file_put_contents("data/vipmem/$chat_id/mange.txt" , "⌯ ❨ [" . "@". $re_user ."] ❩ " . "•" . " ❨ `". $re_id ."` ❩ ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ [$usew] ❩\n🔑 ⌯ *تـۖم رفعه فيۧ قٱئمة ٱڵمميزين* \n ✓",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

elseif($re and $text == "رفع مميز"  and in_array($re_id,$vipmem)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"🚸 ⌯ *ٱڵـمميز* ⌯» ❨ [$usew] ❩\n🔑 ⌯ *هوَ بٱڵفعڵ مميز في ٱڵـمجموعة* \n ✓",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($text == "حذف المميزين" ){
file_put_contents("data/vipmem/$chat_id.txt","");
file_put_contents("data/vipmem/$chat_id.txt","");
file_put_contents("data/vipmem/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯» [$info](tg://user?id=$re_id) \n🔑 ⌯ تـۖم حـذف ٱلٱعضٱء ٱڵمميزين \n ✓",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  ]); }

if($re and $text == "تنزيل مميز" and in_array($re_id,$vipmem)){
$re_id_info = file_get_contents("data/vipmem/$chat_id.txt");
$mdrs = file_get_contents("data/vipmem/$chat_id/mange.txt");
$mdrs1 = explode(" \n",$mdrs);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace("⌯ ❨ [" . "@". $re_user ."] ❩ " . "•" . " ❨ `". $re_id ."` ❩ ","",$mdrs1);
file_put_contents("data/vipmem/$chat_id.txt",$str);
file_put_contents("data/vipmem/$chat_id/mange.txt",$str2);
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"🚸 ⌯ *ٱڵـمميز* ⌯» ❨ [$usew] ❩\n🔑 ⌯ *تـۖم تنزيڵه من قٱئمة ٱڵمميزين* \n ✓",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($re and $text == "تنزيل مميز" and !in_array($re_id,$vipmem)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ [$usew] ❩\n🔑 ⌯ *هوَ ڵيس مميز ڵيتم تنزيڵه* \n ✓",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }

if($text == "المميزين" || $text == "قائمه المميزين" and $vipmems_info != NULL and $vipmems_info != " "){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"❗️🎒 ⌯ قٱئمة ٱڵـمميزين ⌯» ⤈ \n〰️➖〰️➖〰️➖〰️➖〰️\n$vipmems_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }
if($text == "المميزين" ||  $text == "قائمه المميزين" and $vipmems_info == NULL || $vipmems_info == " " || $vipmems_info == ""){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"❗️📛 ⌯ *لٱ يوجد مميزين*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }
}
# --     Source DevProx     --
if($status != "creator" and $status != "administrator" and !in_array($from_id,$Dev) and !in_array($from_id,$developer)){
if($text == "رفع مدير" || $text == "رفع منشئ" or $text == "رفع الادمنيه" or $text == "رفع المشرفين" or $text == "تفعيل"){
bot('SendMessage',['chat_id'=>$chat_id,'text'=>"❗️📛 ⌯ *عذرٱ هذٱ ٱلٱمر ڵيس ڵك*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]);}}
# --     Source DevProx     --
if(!in_array($from_id,$Dev)){
if($text == "رفع مطور" || $text == "تنزيل مطور" or $text == "الاحصائيات" or $text == "المطورين" or $text == "مسح المطورين" or $text == "المشتركين" or $text == "حذف المطورين" or $text == "م8" or $text == "الكروبات" or $text == "تفعيل الاشتراك الاجباري" or $text == "تعطيل الاشتراك الاجباري"){
bot('SendMessage',['chat_id'=>$chat_id,'text'=>"❗️📛 ⌯ *عذرٱ هذٱ ٱلٱمر ڵيس ڵك*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]);}}
# --     Source DevProx     --
if($status != "creator" and $status != "administrator" and !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$manger) and !in_array($from_id,$admin_user)){
if($text == "رفع ادمن" || $text == "رفع مميز" or $text == "تنزيل مميز" or $text == "تنزيل ادمن" or $text == "قفل الفيديو" or $text == "فتح الفيديو" or $text == "تفعيل الايدي" or $text == "تعطيل الايدي"  or $text == "تفعيل اشتراك المجموعه"){
bot('SendMessage',['chat_id'=>$chat_id,'text'=>"❗️📛 ⌯ *عذرٱ هذٱ ٱلٱمر ڵيس ڵك*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]);}}
# --     Source DevProx     --
if($status != "creator" and $status != "administrator" and !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$manger) and !in_array($from_id,$admin_user)){
if($text == "فتح الروابط"  || $text == "الادمنيه" || $text == "المميزين" || $text == "قفل الروابط" or $text == "قفل التوجيه" or $text == "فتح التوجيه" or $text == "تفعيل الالعاب" or $text == "تعطيل الالعاب" or $text == "تفعيل الرابط" or $text == "تعطيل الرابط"){
bot('SendMessage',['chat_id'=>$chat_id,'text'=>"❗️📛 ⌯ *عذرٱ هذٱ ٱلٱمر ڵيس ڵك*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]);}}
# --     Source DevProx     --
if($status != "creator" and $status != "administrator" and !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$manger) and !in_array($from_id,$admin_user)){
if($text == "قفل المعرف" or $text == "فتح المعرف" or $text == "قفل البوتات" or $text == "فتح البوتات" or $text == "قفل المتحركه" or $text == "قفل الاشعارات" or $text == "قفل البوتات بالطرد" or $text == "قفل الكل" or $text == "فتح الكل" or $text == "قفل الصور" or $text == "فتح الصور" or $text == "قفل الكفر" or $text == "فتح الكفر" or $text == "قفل الفشار" or $text == "فتح الفشار" or $text == "قفل الطائفيه" or $text == "فتح الطائفيه" or $text == "قفل الفارسيه" or $text == "فتح الفارسيه"){
bot('SendMessage',['chat_id'=>$chat_id,'text'=>"❗️📛 ⌯ *عذرٱ هذٱ ٱلٱمر ڵيس ڵك*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]);}}
# --     Source DevProx     --
if($status != "creator" and $status != "administrator" and !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$manger) and !in_array($from_id,$admin_user)){
if($text == "وضع رابط"  || $text == "حذف الرابط" || $text == "صنع رابط" || $text == "انشاء رابط" || $text == "تفعيل الرابط" or $text == "تعطيل الرابط" or $text == "قفل الدردشة" or $text == "فتح الدردشة" or $text == "قفل الدردشه" or $text == "فتح الدردشه" or $text == "كتم" or $text == "حظر" or $text == "طرد" or $text == "تقييد" or $text == "الغاء حظر" or $text == "الغاء كتم" or $text == "الغاء تقييد" or $text == "وضع ترحيب" or $text == "حذف الترحيب"){
bot('SendMessage',['chat_id'=>$chat_id,'text'=>"❗️📛 ⌯ *عذرٱ هذٱ ٱلٱمر ڵيس ڵك*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]);}}
# --     Source DevProx     --
if($text == "صيح للادمنيه" or $text == "تاك للادمنيه"){
$up = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatAdministrators?chat_id=".$chat_id),true);
$result = $up['result'];
foreach($result as $key=>$value){
$found = $result[$key]['status'];
if($found == "creator"){
$owner = $result[$key]['user']['id'];
$owner2 = $result[$key]['user']['username'];
}
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$in_names = str_replace(['[',']'],'',$result[$key]['user']['username']);
$msg = $msg."⌯"." ❨ "."@[$in_names]"." ❩\n";
}
}
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"❗️🚸 ⌯ وينكم يٱڵربع 
〰️➖〰️➖〰️➖〰️➖〰️
⌯ ❨ @[".$result[$key]['user']['username']."] ❩
$msg",'reply_to_message_id'=>$message_id,'parse_mode'=>"MarkDown",]);}
# --     Source DevProx     --
$set = file_get_contents("SudoOrders/set.txt");
$setch = file_get_contents("SudoOrders/setch.txt");
if(in_array($from_id,$Dev)){
if ($text == "تغيير الاشتراك الاجباري" or $text == "تعيين الاشتراك الاجباري" or $text == "تغيير قناة الاشتراك" or $text == "تعيين قناة الاشتراك"){
file_put_contents("SudoOrders/set.txt","setch");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"*❗️🚸 ⌯ ٱرسڵ ڵي معرف قنٱة ٱلٱشترٱك ٱلٱن*\n",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
if($text && $set =="setch" and in_array($from_id,$Dev)){
file_put_contents("SudoOrders/setch.txt",$text); 
file_put_contents("SudoOrders/set.txt","");
bot("sendmessage",["chat_id"=>$chat_id,"text"=>"🚸 ⌯ تـۖم حفظ قنٱة ٱلٱشترٱك \n🔑 ⌯ ٱلٱن قم برفع ٱڵـبوت ٱدمن في ٱڵقنٱة \n🎗 ⌯ بعدهٱ قم بتفعيل الاشتراك الاجباري ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}

if(in_array($from_id,$Dev)){
if($text == "مسح قناة الاشتراك" or $text == "حذف قناة الاشتراك"){
file_put_contents("SudoOrders/setch.txt","");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ تـۖم حذف قنٱة ٱلٱشترٱك ٱلٱجبٱري",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}

if($text == "جلب قناة الاشتراك" or $text == "قناة الاشتراك" or $text == "الاشتراك الاجباري" or $text == "قناة الاشتراك الاجباري"){
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ *قنٱة ٱلٱشترٱك* ⌯» [$setch]",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
}
# --     Source DevProx     --
$setlink = file_get_contents("data/$chat_id/set.txt");
$linktxt = file_get_contents("data/$chat_id/link.txt");
if ($text == "وضع رابط" or $text == "ضع رابط" or $text == "وضع الرابط" or $text == "ضع الرابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'group' | $tc == 'supergroup'){
file_put_contents("data/$chat_id/set.txt","setlink");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ ٱرسڵ رآبط ٱڵمجمۄعة ڵيتم حفظة",'parse_mode'=>'markdown','reply_to_message_id'=>$message_id,]);}}}

if($text && $setlink =="setlink"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'group' | $tc == 'supergroup'){
file_put_contents("data/$chat_id/link.txt",$text); 
file_put_contents("data/$chat_id/set.txt","");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 تـۖم صـنـع ٱڵـرآبـط ٱڵـجـډيـډ\nٱرسـڵ (الرابط) ڵـعـړض ٱڵـرآبـط ٱڵـجـډيـډ",'parse_mode'=>'markdown','reply_to_message_id'=>$message_id,]);}}}

if ($text == "حذف الرابط" or $text == "مسح الرابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'group' | $tc == 'supergroup'){
file_put_contents("data/$chat_id/link.txt","");
bot("sendMessage",["chat_id"=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم حـذف رٱبط ٱڵمجموعة \n ✓",'parse_mode'=>'markdown','reply_to_message_id'=>$message_id,]);}}}
# --     Source DevProx     --
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($text == "معلومات المجموعه" || $text == "معلومات المجموعة"){
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg);
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$cmmyz = count($vipmems)-1;
$cmanger = count($mangers)-1;
$cadmin = count($admin_users)-1;
bot('SendMessage',['chat_id'=>$chat_id,'text'=>"📂 ⌯ ٱڵـمجموعة⌯» ❨ $namegroup ❩
💳 ⌯ ٱلٱيـدي ⌯» ❨ $chat_id ❩ 
📋 ⌯ عدد ٱلٱعضٱء ⌯» ❨ $MEMH ❩
📑 ⌯ عدد ٱلٱدمنية ⌯» ❨ $cadmin ❩
📰 ⌯ عدد ٱڵمدرٱء ⌯» ❨ $cmanger ❩
📃 ⌯ عدد ٱڵمنشئين ⌯» ❨ $cmsg ❩
🔖 ⌯ عدد ٱڵمميزين ⌯» ❨ $cmmyz ❩
📝 ⌯ عدد ٱڵرسٱئل ⌯» ❨ $message->message_id ❩",'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]);}}
# --     Source DevProx     --
if($text == "ايدي المجموعه" or $text == "ايدي المجموعة"){bot('sendMessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ ٱيـۧډي ٱڵمجموعة ⌯» " . $chat_id,'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]);}
if($text == "اسم المجموعه" or $text == "اسم المجموعة"){bot('sendMessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ ٱسم ٱڵمجموعة ⌯» ❨" . $namegroup . "❩",'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]);}
# --     Source DevProx     --
$abs = explode('كول',$text);
if($abs){bot('sendMessage',['chat_id'=>$chat_id,'text'=>$abs[1],'parse_mode'=>'MarkDown',]);}
# --     Source DevProx     --
# link
if($settings["lock"]["link"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
if (strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https://") == true or strstr($text,"://") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id,]);}}}
# photo
if($settings["lock"]["photo"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
if ($update->message->photo){  
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}
# inline
$inline = json_decode(file_get_contents('php://input'),true);
if($settings["lock"]["inline"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
if(isset($inline['message']['reply_markup']['inline_keyboard'][0][0]['text'])){
bot('deleteMessage',['chat_id'=>$message->chat->id,'message_id'=>$message->message_id]);}}}
# gif
if($settings["lock"]["gif"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
if ($update->message->document){  
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}
# document
if($settings["lock"]["document"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
if ($update->message->document){  
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}
# video
if($settings["lock"]["video"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
if ($update->message->video){  
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}
# ar
if ($settings["lock"]["ar"] == "مقفول️"){
if (strstr($text,"ض") == true  or strstr($text,"ص") == true or strstr($text,"ق") == true  or  strstr($text,"ف") == true   or strstr($text,"غ") == true or  strstr($text,"ع") == true  or strstr($text,"ه") == true or strstr($text,"خ") == true  or  strstr($text,"ح") == true   or strstr($text,"ج") == true or strstr($text,"ش") == true  or strstr($text,"س") == true or strstr($text,"ي") == true  or  strstr($text,"ب") == true   or strstr($text,"ل") == true or  strstr($text,"ا") == true  or strstr($text,"ت") == true or strstr($text,"ن") == true  or  strstr($text,"م") == true   or strstr($text,"ك") == true or strstr($text,"ظ") == true or strstr($text,"ط") == true  or  strstr($text,"ذ") == true   or strstr($text,"د") == true or  strstr($text,"ز") == true  or strstr($text,"ر") == true or strstr($text,"و") == true  or  strstr($text,"ة") == true   or strstr($text,"ث") == true or strstr($text,"ؤ") == true  or strstr($text,"ء") == true or strstr($text,"ى") == true  or  strstr($text,"ئ") == true   or strstr($text,"آ") == true or  strstr($text,"إ") == true  or strstr($text,"أ") == true ) {
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$vipmem) ){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
# en
if ($settings["lock"]["en"] == "مقفول️"){
if (strstr($text,"q") == true  or strstr($text,"w") == true or strstr($text,"e") == true  or  strstr($text,"r") == true   or strstr($text,"t") == true or  strstr($text,"y") == true  or strstr($text,"u") == true or strstr($text,"i") == true  or  strstr($text,"o") == true   or strstr($text,"p") == true or strstr($text,"a") == true  or strstr($text,"s") == true or strstr($text,"d") == true  or  strstr($text,"f") == true   or strstr($text,"g") == true or  strstr($text,"h") == true  or strstr($text,"j") == true or strstr($text,"k") == true  or  strstr($text,"l") == true   or strstr($text,"z") == true or strstr($text,"x") == true or strstr($text,"c") == true  or  strstr($text,"v") == true   or strstr($text,"b") == true or  strstr($text,"n") == true  or strstr($text,"m") == true or strstr($text,"Q") == true  or  strstr($text,"X") == true   or strstr($text,"C") == true or strstr($text,"F") == true  or strstr($text,"G") == true or strstr($text,"H") == true  or  strstr($text,"A") == true   or strstr($text,"L") == true or  strstr($text,"O") == true  or strstr($text,"P") == true ) {
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$vipmem) ){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
# edit 
if($editgetsettings["lock"]["edit"] == "مقفول"){
if ( $you != 'creator' && $you != 'administrator' && $edit_for_id != $Dev && $edit_for_id != $manger && $edit_for_id != $admin_user && $edit_for_id != $vipmem && $edit_for_id != $developer){
if ($update->edited_message->text){  
bot('deletemessage',['chat_id'=>$chat_edit_id,'message_id'=>$message_edit_id]);}}}
# contact
if ($settings["lock"]["contact"] == "مقفول"){
if($update->message->contact){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
# edit media
$edit_media  = $update->edited_message->message_id;
$edit_chat_id_media = $update->edited_message->chat->id;
$edit_medias  = $update->edited_message->text;
$video_media = $update->edited_message->video;
$voice_media = $update->edited_message->voice;
$photo_media = $update->edited_message->photo;
$document_media = $update->edited_message->document;
$audio_media = $update->edited_message->audio;
$location_media = $update->edited_message->location;
if ($editgetsettings["lock"]["editmd"] == "مقفول"){
if ( $you != 'creator' && $you != 'administrator' && $edit_for_id != $Dev && $edit_for_id != $manger && $edit_for_id != $admin_user && $edit_for_id != $vipmem && $edit_for_id != $developer){
if(edit_medias || $photo_media || $document_media || $video_media || $voice_media || $audio_media || $location_media || preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$edit_medias) ){
bot('deleteMessage',['chat_id'=>$edit_chat_id_media,'message_id'=>$edit_media,]);}}}
# tag
if ($settings["lock"]["tag"] == "مقفول"){
if (strstr($text ,"#") == true or strstr($caption,"#") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
// username 
if ($settings["lock"]["username"] == "مقفول"){
if (strstr($text ,"@") == true or strstr($caption,"@") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
# audio
if ($settings["lock"]["audio"] == "مقفول"){
if($update->message->audio){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
# voice 
if ($settings["lock"]["voice"] == "مقفول"){
if($update->message->voice){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
# markdown
if ($settings["lock"]["markdown"] == "مقفول"){
if($update->message->entities){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
# bot
if($settings["lock"]["bot"] == "مقفول"){
if ($message->new_chat_member->is_bot) {
$hardmodebot = $settings["information"]["hardmodebot"];
if($hardmodebot == "مفتوح"){
bot('kickChatMember',['chat_id'=>$chat_id,'user_id'=>$update->message->new_chat_member->id]);}
else{
bot('kickChatMember',['chat_id'=>$chat_id,'user_id'=>$update->message->new_chat_member->id]);
bot('kickChatMember',['chat_id'=>$chat_id,'user_id'=>$from_id]);}}}
# sticker 
if ($settings["lock"]["sticker"] == "مقفول"){
if($update->message->sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
# is_sticker
if ($settings["lock"]["is_sticker"] == "مقفول"){
if($update->message->sticker->is_sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
# forward
if ($settings["lock"]["forward"] == "مقفول"){
if($update->message->forward_from | $update->message->forward_from_chat){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}}}
# fshar 
if ($settings["lock"]["fshar"] == "مقفول"){
if (strstr($text ,"كس") == true or strstr($text ,"ديس") == true or strstr($text ,"انيجمك") == true  or  strstr($text ,"انيج") == true or strstr($text ,"نيج") == true or strstr($text ,"عير") == true or strstr($text ,"كسختك") == true or strstr($text ,"كسمك") == true or strstr($text ,"كسربك") == true or strstr($text ,"ابو العيوره") == true or strstr($text ,"منيوج") == true or strstr($text ,"كحبه") == true or strstr($text ,"كحاب") == true or strstr($text ,"الكحبه") == true or strstr($text ,"عير بطيزك") == true or strstr($text ,"كس امك") == true or strstr($text ,"امك الكحبه") == true or strstr($text ,"عيرك") == true or strstr($text ,"عير بيك") == true or strstr($text ,"نتنايج") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('SendMessage',['chat_id'=>$chat_id,'text'=>"📛 ⌯ *عذرأ عزيزي* ⌯» [$name20](tg://user?id=$from_id) \n🚸 ⌯ *ممنوع ٱڵـفشٱر هنا* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true]);
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
# kaf
if ($settings["lock"]["kaf"] == "مقفول"){
if (strstr($text ,"خره بالله") == true or strstr($text ,"خبربك") == true or strstr($text ,"كسدينربك") == true  or  strstr($text ,"خرب بالله") == true or strstr($text ,"خرب الله") == true or strstr($text ,"خره بربك") == true or strstr($text ,"الله الكواد") == true or strstr($text ,"خره بمحمد") == true or strstr($text ,"كسم الله") == true or strstr($text ,"كسم ربك") == true or strstr($text ,"كسربك") == true or strstr($text ,"كسختالله") == true or strstr($text ,"كسخت الله") == true or strstr($text ,"خره بدينك") == true or strstr($text ,"خرهبدينك") == true or strstr($text ,"كسالله") == true or strstr($text ,"خربالله") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('SendMessage',['chat_id'=>$chat_id,'text'=>"📛 ⌯ *عذرأ عزيزي* ⌯» [$name20](tg://user?id=$from_id) \n🚸 ⌯ *ممنوع ٱڵـكفر هنا* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true]);
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
# taf
if ($settings["lock"]["taf"] == "مقفول"){
if (strstr($text ,"شيعي نكس") == true or strstr($text ,"سني نكس") == true or strstr($text ,"شيعه") == true  or  strstr($text ,"الشيعه") == true or strstr($text ,"السنه") == true or strstr($text ,"طائفتكم") == true or strstr($text ,"شيعي") == true or strstr($text ,"طائفيه") == true or strstr($text ,"انا سني") == true or strstr($text ,"انا شيعي") == true or strstr($text ,"مسيحي") == true or strstr($text ,"يهودي") == true or strstr($text ,"صابئي") == true or strstr($text ,"ملحد") == true or strstr($text ,"بالسنه") == true or strstr($text ,"بالشيعه") == true or strstr($text ,"شيعة") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('SendMessage',['chat_id'=>$chat_id,'text'=>"📛 ⌯ *عذرأ عزيزي* ⌯» [$name20](tg://user?id=$from_id) \n🚸 ⌯ *ممنوع ٱڵـتكلم بٱڵـطائفية هنا* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true]);
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
# farsi
if ($settings["lock"]["farsi"] == "مقفول"){
if (strstr($text ,"ڬ") == true or strstr($text ,"ٺ") == true or strstr($text ,"چ") == true  or  strstr($text ,"ڇ") == true or strstr($text ,"ڿ") == true or strstr($text ,"ڀ") == true or strstr($text ,"ڎ") == true or strstr($text ,"ݫ") == true or strstr($text ,"ژ") == true or strstr($text ,"ڟ") == true or strstr($text ,"ݜ") == true or strstr($text ,"ڸ") == true or strstr($text ,"پ") == true or strstr($text ,"۴") == true or strstr($text ,"مک") == true or strstr($text ,"زدن") == true or strstr($text ,"سکس") == true or strstr($text ,"سکسی") == true or strstr($text ,"کسی") == true or strstr($text ,"دخترا") == true or strstr($text ,"دیوث") == true or strstr($text ,"کلیپشن") == true or strstr($text ,"خوششون") == true or strstr($text ,"میدا") == true or strstr($text ,"که") == true or strstr($text ,"بدانیم") == true or strstr($text ,"باید") == true or strstr($text ,"زناشویی") == true or strstr($text ,"آموزش") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('SendMessage',['chat_id'=>$chat_id,'text'=>"📛 ⌯ *عذرأ عزيزي* ⌯» [$name20](tg://user?id=$from_id) \n🚸 ⌯ *ممنوع ٱڵتكلم بٱڵغة ٱڵفارسية هنا* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true]);
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
# getlink
if ($settings["lock"]["getlink"] == "مقفول"){
$getlinkk = $update->message->text;
if($getlinkk == "الرابط"){
if ($tc == 'group' | $tc == 'supergroup'){
bot('SendMessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ ٱڵـرٱبط معطڵ لٱ يمكنني ٱرسٱڵـه",'reply_to_message_id'=>$message_id,]);}}}
# muteall
if ($settings["lock"]["mute_all"] == "مقفول"){
if($update->message){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}}
# replay
if ($settings["lock"]["reply"] == "مقفول"){
if($update->message->reply_to_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}}}
# tgservic
if ($settings["lock"]["tgservic"] == "مقفول"){
if($update->message->new_chat_member | $update->message->new_chat_photo | $update->message->new_chat_title | $update->message->left_chat_member | $update->message->pinned_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}}}
# text
if ($settings["lock"]["text"] == "مقفول"){
if($update->message->text){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}}}
# video note
if ($settings["lock"]["video_msg"] == "مقفول"){
if($update->message->video_note){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}}}
# --     Source DevProx     --
if($settings["lock"]["linkk"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
if (strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https://") == true or strstr($text,"://") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id,]);
bot('kickChatMember',['user_id'=>$from_id,'chat_id'=>$chat_id,]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"📛 ⌯ *عذرأ عزيزي* ⌯» [$first_name](tg://user?id=$from_id) \n🚸 ⌯ *ممنوع نشر ٱڵروٱبط هنٱ تم طردك* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,]);}}}
# --     Source DevProx     --
if($settings["lock"]["linkw"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
if (strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https://") == true or strstr($text,"://") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($text,"https://") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id,]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"📛 ⌯ *عذرأ عزيزي* ⌯» [$name20](tg://user?id=$from_id) \n🚸 ⌯ *ممنوع نشر ٱڵروٱبط هنٱ* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,]);}}}
# --     Source DevProx     --
if ($settings["lock"]["forwardr"] == "مقفول"){
if($update->message->forward_from || $update->message->forward_from_chat || $update->message->forward_from_chat->is_bot){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id,]);
bot('restrictChatMember',['user_id'=>$from_id,   'chat_id'=>$chat_id,'can_post_messages'=>false,]);}}}}
# --     Source DevProx     --
if ($settings["lock"]["forwardw"] == "مقفول"){
if($update->message->forward_from || $update->message->forward_from_chat || $update->message->forward_from_chat->is_bot){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id,]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"📛 ⌯ *عذرأ عزيزي* ⌯» [$name20](tg://user?id=$from_id) \n🚸 ⌯ *ممنوع ٱعٱدة ٱڵتوجيه هنٱ* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,]);}}}}
# --     Source DevProx     --
if ($settings["lock"]["userr"] == "مقفول"){
if (strstr($text,"@") == true or strstr($caption,"@") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);bot('restrictChatMember',['user_id'=>$from_id,   'chat_id'=>$chat_id,'can_post_messages'=>false,]);}}}
# --     Source DevProx     --
if ($settings["lock"]["userw"] == "مقفول"){
if (strstr($text,"@") == true or strstr($caption,"@") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"📛 ⌯ *عذرأ عزيزي* ⌯» [$name20](tg://user?id=$from_id) \n🚸 ⌯ *ممنوع نشر ٱڵمعرفٱت @ هنٱ* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,]);}}}}
# --     Source DevProx     --
if($text== "قفل التوجيه بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵـتوجيه بٱڵتقييد \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id, ]);
$settings["lock"]["forwardr"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings); } } }

if($text== "قفل التوجيه بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️📛 ⌯ *ڵڵمشرفين فقط* ",'parse_mode'=>"markdown",'reply_to_message_id'=>$message_id, ]); } } } } 

if($text== "فتح التوجيه بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فتح ٱڵـتوجيه بٱڵتقييد \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id, ]);
$settings["lock"]["forwardr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings); } } }

if($text== "فتح التوجيه بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️📛 ⌯ *ڵڵمشرفين فقط* ",'parse_mode'=>"markdown",'reply_to_message_id'=>$message_id, ]); } } } }
# --     Source DevProx     --
if($text== "قفل الروابط بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵـرۄٱبط بٱڵتقييد \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id, ]);
$settings["lock"]["linkr"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings); } } }

if($text== "قفل الروابط بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️📛 ⌯ *ڵڵمشرفين فقط* ",'parse_mode'=>"markdown",'reply_to_message_id'=>$message_id, ]); } } } }

if($text== "فتح الروابط بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فتح ٱڵـرۄٱبط بٱڵتقييد \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id, ]);
$settings["lock"]["linkr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings); } } }

if($text== "فتح الروابط بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️📛 ⌯ *ڵڵمشرفين فقط* ",'parse_mode'=>"markdown",'reply_to_message_id'=>$message_id, ]); } } } }
# --     Source DevProx     --
$set = file_get_contents("SudoOrders/set.txt");
$idtext = file_get_contents("sethelp/idtext.txt");
if(in_array($from_id,$Dev)){
if ($text == "تعيين امر الايدي" or $text == "تعيين الايدي"){
file_put_contents("SudoOrders/set.txt","setidtext");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"❗️🚸 ⌯ رجٱئٱ ٱتبع ٱڵتعڵيمٱت ڵڵتعيين 
❗️🔑 ⌯ ڵطبع كڵيشة ٱلٱيدي ٱرسڵ كڵيشة تحتوي عڵى ٱڵنصوص ٱڵتي بٱڵڵغة ٱلٱنجڵيزية ٱدنٱه 
〰️➖〰️➖〰️➖〰️➖〰️
 username  ⇝ ڵطبع ٱڵمعرف •
 id  ⇝ ڵطبع ٱلٱيدي • 
 name  ⇝ ڵطبع ٱلٱسم • 
 photos  ⇝ ڵطبع عدد ٱڵصور • 
 rank  ⇝ ڵطبع ٱڵـُرتب • 
 msgs  ⇝ ڵطبع عدد ٱڵرسٱئڵ • 
 formsg  ⇝ ڵطبع ٱڵتفٱعڵ • 
 rate  ⇝ ڵطبع نسبة ٱڵتفٱعڵ • 
 nkat  ⇝ ڵطبع عدد ٱڵنقٱط • 
 cont  ⇝ ڵطبع عدد ٱڵجهٱت • 
 edit  ⇝ ڵطبع عدد ٱڵتعديلٱت • 
 idgp  ⇝ ڵطبع ٱيدي ٱڵمجـمۄعة • 
〰️➖〰️➖〰️➖〰️➖〰️", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id ,]);}
if($text && $set =="setidtext"){
file_put_contents("sethelp/idtext.txt",$text); 
file_put_contents("SudoOrders/set.txt","");
bot("sendmessage",[ "chat_id"=>$chat_id, "text" => "❗️🚸 ⌯ تـۖم حفـۨظ ٱڵكڵيشة ٱڵجډيډة", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id ,]);} }


if(in_array($from_id,$Dev)){
if($text == "حذف كليشة الايدي" or $text == "حذف الايدي"){
file_put_contents("sethelp/idtext.txt",""); 
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم حـذف كڵيشة ٱلٱيدي \n ✓",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}
# --     Source DevProx     --
if ($settings["lock"]["iduser"] == "معطل"){
$iduserr = $update->message->text;
if($iduserr == "ايدي"){
if ($tc == 'group' | $tc == 'supergroup'){
bot('SendMessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ٱلٱيدي مۘعطڵ", 'reply_to_message_id'=>$message_id, ]);} } }
# --     Source DevProx     --
if($settings["information"]["add"] == "مقفول") {
if($newchatmemberid == true){
$add = $settings["addlist"]["$from_id"]["add"];
$addplus = $add +1;
$settings["addlist"]["{$from_id}"]["add"]="$addplus";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
}
if($settings["information"]["add"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
if ($tc == 'group' | $tc == 'supergroup'){
$youadding = $settings["addlist"]["$from_id"]["add"];
$setadd = $settings["information"]["setadd"];
$addtext = $settings["addlist"]["$from_id"]["addtext"];
$msg = $settings["information"]["lastmsgadd"];
if($youadding < $setadd){
if($addtext == false){
bot('SendMessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ ٱڵـعضو ⌯» [$name](tg://user?id=$from_id)
❗️🔑 ⌯ عذرٱ لاتستطيع ٱڵتحدث هنٱ
❗️🎗 ⌯ قم بٱضٱفة ⌯» ❨ $setadd ❩ عضو ڵڵتكڵم", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true ]);
bot('deletemessage',[ 'chat_id'=>$chat_id, 'message_id'=>$message_id ]);
bot('deletemessage',[ 'chat_id'=>$chat_id, 'message_id'=>$msg ]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsgadd"]="$msgplus";
$settings["addlist"]["$from_id"]["addtext"]="true";
$settings["addlist"]["$from_id"]["add"]=0;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('deletemessage',[ 'chat_id'=>$chat_id, 'message_id'=>$message_id ]); } } } } }
# --     Source DevProx     --
$reply = $update->message->reply_to_message;
$asa = json_decode(file_get_contents('added.json'),true);
$get_myid = file_get_contents("data/ids/idset.txt");
$_get_ = file_get_contents("data/ids/id.txt");
$get_ALONE = file_get_contents("data/ids/id_.txt");
$GETGG1ZZ = file_get_contents("data/ids/abs.txt");
$_GG1ZZ_ = explode("\n",$GETGG1ZZ);
$newiddd = $update->message->new_chat_member->id;
if($update->message->new_chat_member and $from_id != $newiddd){
$asa['sss'][$chat_id][$from_id] = ($asa['sss'][$chat_id][$from_id]+1);
file_put_contents('added.json', json_encode($asa));}
if($text == "جهاتيي" or $text == "جهاتي" or $text == "اضافاتي" and $asa['sss'][$chat_id][$from_id] == 0){bot('sendmessage',['chat_id'=>$chat_id,'text'=>"
❗️🚸 ⌯ عدد جهٱتك ٱڵمضٱفة ⌯» ❨ *".$asa[ sss ][$chat_id][$from_id]."* ❩",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);}
# --     Source DevProx     --
if($message and $tc == "supergroup"){
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('msgs.json', json_encode($msgs));}
# --     Source DevProx     --
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][0][0]["file_id"];
$count=$result["result"]["total_count"];
$game = json_decode(file_get_contents('game.json'),true);
$from_name = $message->from->first_name;
$get_game = file_get_contents("game.txt");
$game1 = explode("\n",$get_game);
# --     Source DevProx     --
$edit = json_decode(file_get_contents('edit.json'),true);
$editMessage = $update->edited_message;
if($editMessage){
$edit['edit'][$chat_edit_id][$edit_for_id] = ($edit['edit'][$chat_edit_id][$edit_for_id]+1);
file_put_contents('edit.json', json_encode($edit));
}
if($edit['edit'][$chat_id][$from_id] == null){
$editt = 0;
}else{
$editt = $edit['edit'][$chat_id][$from_id];
}
if($text == 'تعديلاتي'){ bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>'❗️🚸 ⌯ عدد تعديلٱتك ⌯» ❨ '.$editt.' ❩', ]); }
# --     Source DevProx     --
if(in_array($from_id,$Dev)){
$rtbte = "مطور اساسي 👷";
}if(in_array($from_id,$admin_user) ){
$rtbte = "ٱلٱدمـۧن";
}if(in_array($from_id,$manger) ){
$rtbte = "ٱڵمدير";
}if(in_array($from_id,$vipmem) ){
$rtbte = "عضو مميز";
}if(in_array($from_id,$developer) ){
$rtbte = "ٱڵمطۄر";
}if(!in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
$rtbte = "فقط عضو";
}
if($status == "creator"){
$mokae = "ٱڵمنشئ";
}if($status == "administrator"){
$mokae = "ٱلٱدمـۧن";
}if($status !=  creator  && $status !=  administrator){
$mokae = "فقط عضو";
}
if($text=="رتبتي" ){ bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ رتـبتک ⌯» $rtbte", 'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->message_id, ]); }
if($text=="موقعي" ){ bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ موقعک ⌯» $mokae", 'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->message_id, ]); }
if(in_array($from_id,$Dev)){
$info = "مطور اساسي 👷";
}elseif($status == "creator"){
$info = "منشى المجموعة 🕵";
}elseif($status == "administrator"){
$info = "مشرف المجموعة 👮";
}elseif(in_array($from_id,$admin_user) ){
$info = "ادمن في مجموعة 💂";
}elseif(in_array($from_id,$manger) ){
$info = "مدير المجموعة 🙇";
}elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز 👼";
}elseif(in_array($from_id,$developer) ){
$info = "من المطورين 👷";
}elseif($status == "member" ){
$info = "عضو فقط 😿";
}
if(!$username){
$usr = "لايوجد يوزر 😐";
}elseif($username){
$usr = "$username";
}

$title =$message->chat->title;
$from_id   = $message->from->id; 
$user = $message->from->username; 
  if($text=="معلوماتي"){
  $Bio = file_get_contents("https://t.me/".$message->from->username);
$Bio = explode('<div class="tgme_page_',$Bio);
$Bio = str_replace('description">','',str_replace('</div>','',$Bio[5]));
$member = bot('getchatmemberscount',['chat_id'=>$chat_id])->result; $result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
  $file_id=$result["result"]["photos"][0][0]["file_id"];
  $count=$result["result"]["total_count"];
  var_dump(bot("sendphoto",[
  "chat_id"=>$chat_id,
'photo' =>$file_id,
  "caption"=>"
🔘¦ 𝗨𝗦☆𝗡𝗔☆➜🇮🇶 [ $first_name ]  
🔘¦ 𝗦𝗧𝗔𝗧𝗦 ☆➜🇮🇶 [ $usr ]  
🔘¦ 𝗥𝗔𝗡𝗞☆➜🇮🇶 [ $info ]
🔘¦ 𝗜𝗗☆➜🇮🇶 [ $from_id  ]
🔘¦ 𝗣𝗛 ☆➜🇮🇶 [ $count ]
",
'parse_mode'=>'HTML', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  ]));
  }
# --     Source DevProx     --
if($msgs['msgs'][$chat_id][$from_id] > 8000){
$rate = array("100%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 7000){
$rate = array("97%","90%","99%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 6000){
$rate = array("83%","80%","87%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 3000){
$rate = array("77%","70%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$rate = array('69%','56%',);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 200){
$rate = array("40%","43%","39%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 100){
$rate = array("36%","29%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$rate = array('18%','20%','6%',);
$rate1 = array_rand($rate,1);
}
if($username){
$usr = "@$username";
}if($file_id == NULL){
$photo = "⚠️ ⌯ لٱ ٱستطيع عرض صورتک 
📛 ⌯ ربمٱ لٱ تمتڵك صورة شخصية 
📛 ⌯ ٱو ٱنك قمت بحظر ٱڵـبوت 
📛 ⌯ ٱو ٱنك قفڵتهٱ من ٱلٱعدٱدٱت 
〰️➖〰️➖〰️➖〰️➖〰️";
}
if($msgs['msgs'][$chat_id][$from_id] > 8000){
$active = array("حارك الكروب ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 7000){
$active = array("معلك لربك ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 6000){
$active = array("جهنم حبي ","نار وشرار ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 3000){
$active = array("خوش متفاعل ","اسطورة التفاعل ","الله مال تفاعل ","نايس التفاعل ","قمه التفاعل ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$active = array('متوسط ','متفاعل ',);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$active = array('ضعيف ',);
$abstfal = array_rand($active,1);
}
# --     Source DevProx     --
$idtext = file_get_contents("sethelp/idtext.txt");
if(!$re && $text=="ايدي" and $idtext == NULL){
$iduser = $settings["lock"]["iduser"];
if ($iduser == "مفعل") {
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][0][0]["file_id"];
$count=$result["result"]["total_count"];
var_dump(
bot("sendphoto",[ "chat_id"=>$chat_id, "caption"=>"
🔘¦ 𝗨𝗦☆𝗡𝗔☆➜🇮🇶 [ $first_name ]  
🔘¦ 𝗦𝗧𝗔𝗧𝗦 ☆➜🇮🇶 [ $usr ]  
🔘¦ 𝗥𝗔𝗡𝗞☆➜🇮🇶 [ $info ]
🔘¦ 𝗜𝗗☆➜🇮🇶 [ $from_id  ]
🔘¦ 𝗣𝗛 ☆➜🇮🇶 [ $count ]
", "photo"=>"$file_id", 'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id, ])); } }

$textid = array("id","Id","ايدي");
$idtext = file_get_contents("sethelp/idtext.txt");
if(!$re && in_array($text,$textid) and $file_id == NULL and $idtext == NULL){
$iduser = $settings["lock"]["iduser"];
if ($iduser == "مفعل"){
bot("sendmessage",[ "chat_id"=>$chat_id, "text"=>"$photo
🔘¦ 𝗨𝗦☆𝗡𝗔☆➜🇮🇶 [ $first_name ]  
🔘¦ 𝗦𝗧𝗔𝗧𝗦 ☆➜🇮🇶 [ $usr ]  
🔘¦ 𝗥𝗔𝗡𝗞☆➜🇮🇶 [ $info ]
🔘¦ 𝗜𝗗☆➜🇮🇶 [ $from_id  ]
🔘¦ 𝗣𝗛 ☆➜🇮🇶 [ $count ]
", 'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id, ]); }}
# --     Source DevProx     --
$idtext = file_get_contents("sethelp/idtext.txt");
if(!$re && $text=="ايدي" and $idtext != NULL){
$iduser = $settings["lock"]["iduser"];
if ($iduser == "مفعل") {
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][0][0]["file_id"];
$count=$result["result"]["total_count"];
$idtext = file_get_contents("sethelp/idtext.txt");
$texting = str_replace(["idgp","username","name","id","formsg","nkat","photos","msgs","rate","rank","edit","cont"],["$chat_id","$usr","$first_name","$from_id","$active[$abstfal]","".$game['game'][$chat_id][$from_id]."","$count","".$msgs['msgs'][$chat_id][$from_id]."","$rate[$rate1]","$info","$editt","".$asa[ sss ][$chat_id][$from_id].""],"$idtext");
var_dump(
bot("sendphoto",[ "chat_id"=>$chat_id, "caption"=>"$texting", "photo"=>"$file_id", 'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id, ])); } }
$textid = array("id","Id","ايدي");
$idtext = file_get_contents("sethelp/idtext.txt");
if(!$re && in_array($text,$textid) and $file_id == NULL and $idtext != NULL){
$iduser = $settings["lock"]["iduser"];
if ($iduser == "مفعل"){
$idtext = file_get_contents("sethelp/idtext.txt");
$texting = str_replace(["idgp","username","name","id","formsg","nkat","photos","msgs","rate","rank","edit","cont"],["$chat_id","$usr","$first_name","$from_id","$active[$abstfal]","".$game['game'][$chat_id][$from_id]."","$count","".$msgs['msgs'][$chat_id][$from_id]."","$rate[$rate1]","$info","$editt","".$asa[ sss ][$chat_id][$from_id].""],"$idtext");
bot("sendmessage",[ "chat_id"=>$chat_id, "text"=>"$texting", 'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id, ]); }}
# --     Source DevProx     --
if($text=="صورتي"){
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
if($e == 0){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️📛 ⌯ ٱنت لٱ تمتڵك صورة شخصية",'reply_to_message_id'=>$message->message_id, ]); }
else{
if($e != 0){
bot("sendphoto",[ "chat_id"=>$chat_id, "caption"=>"❗️🚸 ⌯ فـي حسٱبك ( $e ) من ٱڵـصور‌‏", "photo"=>"$file_id", 'reply_to_message_id'=>$message->message_id, ]); } } }

if(strpos($text, "صورتي") !== false){
$n = str_replace("صورتي ", "", $text);
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][$n-1][0]["file_id"];
if($e == 0){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️📛 ⌯ ٱنت لٱ تمتڵك صورة شخصية",'reply_to_message_id'=>$message->message_id, ]); }
else{
if($n <= $e){
bot('sendphoto',[ 'chat_id'=>$chat_id, 'photo'=>$f, 'caption'=>"❗️🚸 ⌯ صورتك رقم ( $n )",'reply_to_message_id'=>$message->message_id, ]); }
else{ bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ ٱنت لٱ تمتڵك ٱكثر من ( $n ) صور",'reply_to_message_id'=>$message->message_id, ]); } } }
# --     Source DevProx     --
if(in_array($from_id,$Dev)){
$info = "مطور اساسي 👷";
}elseif($status == "creator"){
$info = "المنشئ 👮";
}elseif($status == "administrator"){
$info = "المشرف 🕵";
}elseif(in_array($from_id,$admin_user) ){
$info = "الادمن 👷";
}elseif(in_array($from_id,$manger) ){
$info = "المدير 👷";
}elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز";
}elseif(in_array($from_id,$developer) ){
$info = "المطور";
}

$repic = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getUserProfilePhotos?user_id=".$re_id),true); 
$file_id = $repic["result"]["photos"][0][0]["file_id"]; 
$count = $repic["result"]["total_count"];
if(in_array($re,$Dev)){
$kshfre = "مطور اساسي 👷";
}elseif(in_array($re_id,$admin_user) ){
$kshfre = "ٱلٱدمـۧن";
}elseif(in_array($re_id,$manger) ){
$kshfre = "ٱڵمدير";
}elseif(in_array($re_id,$vipmem) ){
$kshfre = "عضو مميز";
}elseif(in_array($re_id,$developer) ){
$kshfre = "ٱڵمطۄر";
}elseif($statusrt == "creator"){
$kshfre = "ٱڵمنشئ ٱلٱسٱسي";
}elseif($statusrt == "administrator"){
$kshfre = "ٱلٱدمـۧن";
}elseif($statusrt != creator && $statusrt != administrator && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$vipmem) && !in_array($re_id,$developer) ){
$kshfre = "فقط عضو";
}
if($reply and $text == "كشف" or $reply and $text == "ايدي"){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"📝 ⌯ ٱسمه ⌯» ❨ $re_name ❩
📰 ⌯ معرفه ⌯» ❨ [@$re_user] ❩ 
💳 ⌯ ٱيـډيه ⌯» ❨ $re_id ❩ 
📽 ⌯ صوره ⌯» ❨ $count ❩ 
📑 ⌯ رتبته ⌯» ❨ $kshfre ❩
🔖 ⌯ نوع ٱڵكشف ⌯» ❨ بٱڵرد ❩", 'parse_mode'=>'MarkDown','disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id, ]); }
# --     Source DevProx     --
if( $text == "تفاعلي" || $text == "نسبه تفاعلي" or $text == "نسبة تفاعلي"){
bot("SendMessage",[ 'chat_id'=>$chat_id, 'text'=>"📋 ⌯ تفٱعڵک ⌯» ❨ $active[$abstfal] ❩
📃 ⌯ ٱڵنسبه ⌯» ❨ $rate[$rate1] ❩", 'reply_to_message_id'=>$message->message_id, ]); }
# --     Source DevProx     --
if($text == "اسمي" || $text == "اسميي"){ bot("SendMessage",[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ ٱسمک ⌯» ❨ $first_name ❩", 'reply_to_message_id'=>$message->message_id, ]); }
if($text == "معرفي" || $text == "يوزري"){ bot("SendMessage",[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ مۘعرفک ⌯» ❨ $usr ❩", 'reply_to_message_id'=>$message->message_id, ]); }
# --     Source DevProx     --
if(in_array($re,$Dev)){
$infobot = "ٱڵمطۄر ٱلٱسٱسي";
}elseif(in_array($re_id,$admin_user) ){
$infobot = "ٱلٱدمـۧن";
}elseif(in_array($re_id,$manger) ){
$infobot = "ٱڵمدير";
}elseif(in_array($re_id,$vipmem) ){
$infobot = "عضو مميز";
}elseif(in_array($re_id,$developer) ){
$infobot = "ٱڵمطۄر";
}elseif(!in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$vipmem) && !in_array($re_id,$developer) ){
$infobot = "فقط عضو";
}
if($statusrt == "creator"){
$infogp = "ٱڵمنشئ ٱلٱسٱسي";
}elseif($statusrt == "administrator"){
$infogp = "ٱلٱدمـۧن";
}elseif($statusrt != creator && $statusrt != administrator){
$infogp = "فقط عضو";
}
if($rt and $text == "الرتبه" || $text == "رتبته" or $text == "الرتبة" or $text == "رتبتة"){
bot("SendMessage",[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ رتبته بٱڵبوت ⌯» ❨ $infobot ❩ 
🔑 ⌯ رتبته بٱڵكروب ⌯» ❨ $infogp ❩ ", 'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]); }
# --     Source DevProx     --
$kshf_by_id = str_replace("كشف ","$kshf_by_id",$text); 
if($text == "كشف $kshf_by_id"){
$dets = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$kshf_by_id"));
$absname =$dets->result->first_name;
$absid =$dets->result->id;
$absuser =$dets->result->username;
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$kshf_by_id);
$kshfid = json_decode($get, true);
$re_ru = $kshfid['result']['status'];
$result = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getUserProfilePhotos?user_id=$kshf_by_id"),true); 
$file_id = $result["result"]["photos"][0][0]["file_id"]; 
$count = $result["result"]["total_count"];
if(in_array($re_ru,$Dev)){
$kshfid = "مطور اساسي 👷";
}elseif(in_array($re_ru,$admin_user) ){
$kshfid = "ٱلٱدمـۧن";
}elseif(in_array($re_ru,$manger) ){
$kshfid = "ٱڵمدير";
}elseif(in_array($re_ru,$vipmem) ){
$kshfid = "عضو مميز";
}elseif(in_array($re_ru,$developer) ){
$kshfid = "ٱڵمطۄر";
}elseif($re_ru == "creator"){
$kshfid = "ٱڵمنشئ ٱلٱسٱسي";
}elseif($re_ru == "administrator"){
$kshfid = "ٱلٱدمـۧن";
}elseif($re_ru != creator && $re_ru != administrator && !in_array($re_ru,$Dev) && !in_array($re_ru,$manger) && !in_array($re_ru,$admin_user) && !in_array($re_ru,$vipmem) && !in_array($re_ru,$developer)){
$kshfid = "فقط عضو";
}
bot('sendMessage', [ 'chat_id'=>$chat_id, 'text'=>"📝 ⌯ ٱسمه ⌯» ❨ $absname ❩
📰 ⌯ معرفه ⌯» ❨ @$absuser ❩ 
💳 ⌯ ٱيـډيه ⌯» ❨ $absid ❩ 
📽 ⌯ صوره ⌯» ❨ $count ❩ 
📑 ⌯ رتبته ⌯» ❨ $kshfid ❩
🔖 ⌯ نوع ٱڵكشف ⌯» ❨ بٱلٱيدي ❩", 'reply_to_message_id'=>$message->message_id, ]); }
# kickme
if ($settings["lock"]["kickme"] == "مقفول"){
$KickmeText = $update->message->text;
if($KickmeText == "اطردني"){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('SendMessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ هذه ٱڵخٱصية معطڵة ", 'reply_to_message_id'=>$message_id, ]); } } } }
# game
if($settings["lock"]["game"] == "مقفول"){
if($update->message->game){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('deletemessage',[ 'chat_id'=>$chat_id, 'message_id'=>$message_id ]); } } } }
# --     Source DevProx     --
$henare = array("لكك جرجف احترم اسيادكك لا اكتلكك وازربب على كبركك،💩🖐🏿","هشش فاشل لتضل تمسلت لا اخربط تضاريس وجهك جنه ابط عبده، 😖👌🏿","دمشي لك ينبوع الفشل مو زين ملفيك ونحجي وياك هي منبوذ 😏🖕??","ها الغليض التفس ابو راس المربع متعلملك جم حجايه وجاي تطكطكهن علينه دبطل😒🔪","حبيبي راح احاول احترمكك هالمره بلكي تبطل حيونه، 🤔🔪");
$rehena = array_rand($henare, 1);
if($reply and !in_array($re_id,$Dev)){
if($text == "هينه" or $text == "بعد هينه" or $text == "هينه بعد" or $text == "هينها" or $text == "هينهه" or $text == "رزله" or $text == "رزلها" or $text == "رزلهه"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"صارر ستاذيي 🏃🏻‍♂️♥️", 'reply_to_message_id'=>$message->message_id, ]);
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"$henare[$rehena]",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }

if($reply and in_array($re_id,$Dev)){
if($text == "هينه" or $text == "بعد هينه" or $text == "هينه بعد" or $text == "هينها" or $text == "هينهه" or $text == "رزله" or $text == "رزلها" or $text == "رزلهه"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"دي لكك تريد اهينن تاج راسكك؟😏🖕🏿",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }
# --     Source DevProx     --
$boshre = array("مواححح افيـش عافيههه😍🔥💗","امممووااهحح شهلعسـل🥺🍯??","مواححح،ءوفف اذوب🤤💗");
$rebosh = array_rand($boshre, 1);
if($reply and !in_array($re_id,$Dev)){
if($text == "بوسه" or $text == "بعد بوسه" or $text == "بوسه بعد" or $text == "بوسها" or $text == "بوسهه" or $text == "ضل بوس" or $text == "بعد بوسها" or $text == "بوسها بعد"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"صارر ستاذيي 🏃🏻‍♂️♥️", 'reply_to_message_id'=>$message->message_id, ]);
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"$boshre[$rebosh]",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }

if($reply and in_array($re_id,$Dev)){
if($text == "بوسه" or $text == "بعد بوسه" or $text == "بوسه بعد" or $text == "بوسها" or $text == "بوسهه" or $text == "ضل بوس" or $text == "بعد بوسها" or $text == "بوسها بعد"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"مواححح احلاا بوسةة المطوريي😻🔥💗",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }
# --     Source DevProx     --
$sehare = array("تتعـال ححـب محتاجيـك🙂🍭","تعال يولل استاذكك ايريدككك😒🔪","يمعوود تعـاال يريدوكك🤕♥️","تعـال لكك ديصيحـوك😐🖤");
$reseha = array_rand($sehare, 1);
if($reply and !in_array($re_id,$Dev)){
if($text == "صيحه" or $text == "صحيها" or $text == "صيحهه" or $text == "صيحو"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"صارر ستاذيي 🏃🏻‍♂️♥️", 'reply_to_message_id'=>$message->message_id, ]);
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"$sehare[$reseha]",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }

if($reply and in_array($re_id,$Dev)){
if($text == "صيحه" or $text == "صحيها" or $text == "صيحهه" or $text == "صيحو"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"تعال مطوريي محتاجيكك🏃🏻‍♂️♥️",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }
# --     Source DevProx     --
mkdir("data/kickme");
mkdir("data/kickmelist");
$absdev = "$DevId";
$absmessage = $message->message_id;
$Kickmetxt = file_get_contents("data/$chat_id/kickme.txt");
$iku = file_get_contents("data/$chat_id/iku.txt");
if ($text =="اطردني" or $text == "ادفرني" and $from_id != $absdev){
if ($settings["lock"]["kickme"] == "مفتوح"){
file_put_contents("data/$chat_id/kickme.txt","yes");
file_put_contents("data/$chat_id/iku.txt",$from_id);
bot("sendMessage",[ "chat_id"=>$chat_id, "text"=>"❗️🚸 ⌯ هڵ ٱنت متأكد من ٱڵمغٱدرة 
❗️☑️ ⌯ ٱرسل { نعم } ڵيتم ٱلٱمـر 
❗️🔘 ⌯ ٱرسل { لا } لٱڵغٱء ٱلٱمـر ", 'parse_mode'=>"HTML", 'reply_to_message_id'=>$absmessage, ]); } }
if($text == "نعم" && $Kickmetxt =="yes" and $from_id == $iku){ file_put_contents("kickme.txt","");
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('KickChatMember',[ 'chat_id'=>$chat_id, 'user_id'=>$from_id, ]);
bot('sendmessage',[ 'chat_id'=>$from_id, 'text'=>"❗️🚸 ⌯ رٱبط ٱڵمجموعه ٱڵتي تم طردك منهٱ \n$getlinkde", ]);
bot("sendmessage",[ "chat_id"=>$chat_id, "text"=>"❗️🚸 ⌯ تـۖم طردك هيج هيج مٱبيك فٱيدة ", 'parse_mode'=>"HTML", "reply_to_message_id"=>$absmessage, ]); 
file_put_contents("data/kickme/$chat_id.txt",$from_id . "\n" , FILE_APPEND);
file_put_contents("data/kickmelist/$chat_id.txt",".» $username.". "\n" , FILE_APPEND);
}
if($text == "لا" && $Kickmetxt =="yes" and $from_id == $iku){ 
file_put_contents("kickme.txt","");
bot("sendmessage",[ "chat_id"=>$chat_id, "text"=>"❗️🚸 ⌯ تـۖم ٱڵغٱء ٱلٱمـر ڵن ٱطردك ", 'parse_mode'=>"HTML", "reply_to_message_id"=>$absmessage, ]); }

if ($text =="اطردني" and $from_id == $absdev){
bot("sendMessage",[ "chat_id"=>$chat_id, "text"=>"❗️📛 ⌯ لٱ ٱستطيع طرد ٱڵمطورين", 'parse_mode'=>"HTML", 'reply_to_message_id'=>$absmessage, ]); }

if ($text =="اطردني" and $status == 'administrator'){
bot("sendMessage",[ "chat_id"=>$chat_id, "text"=>"❗️📛 ⌯ لٱ ٱستطيع طرد ٱڵمشرفين ", 'parse_mode'=>"HTML", 'reply_to_message_id'=>$absmessage, ]); }

if($from_id != $absdev){
if ($text =="اطردني" and $status == 'craetor'){
bot("sendMessage",[ "chat_id"=>$chat_id, "text"=>"❗️📛 ⌯ لٱ ٱستطيع طرد ٱڵمنشئين", 'parse_mode'=>"HTML", 'reply_to_message_id'=>$absmessage, ]); } }

if($status == "member"){
if ($text =="اطردني" and in_array($from_id,$vipmem)){
bot("sendMessage",[ "chat_id"=>$chat_id, "text"=>"❗️📛 ⌯ لٱ ٱستطيع طرد ٱڵمميزين", 'parse_mode'=>"HTML", 'reply_to_message_id'=>$absmessage, ]); } }

if ($text =="اطردني" and in_array($from_id,$admin_user)){
bot("sendMessage",[ "chat_id"=>$chat_id, "text"=>"❗️📛 ⌯ لٱ ٱستطيع طرد ٱلٱدمنيه", 'parse_mode'=>"HTML", 'reply_to_message_id'=>$absmessage, ]); }

if ($text =="اطردني" and in_array($from_id,$manger)){
bot("sendMessage",[ "chat_id"=>$chat_id, "text"=>"❗️📛 ⌯ لٱ ٱستطيع طرد ٱڵمشرفين ", 'parse_mode'=>"HTML", 'reply_to_message_id'=>$absmessage, ]); }
# --     Source DevProx     --
date_default_timezone_set('Asia/Baghdad');
$as = date('i')+30; # وقت تقييد التكرار
mkdir("data/$chat_id");
mkdir("data/$chat_id/spam");
if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$manger) || in_array($from_id,$developer) ) {
if(strpos($text,"ضع تكرار") !== false or strpos($text,"وضع تكرار") !== false){
$spamx = str_replace(["ضع تكرار ","وضع تكرار "],"",$text);
if(is_numeric($spamx)){
if($spamx > 0){
file_put_contents("data/$chat_id/spam/spamxe.txt",$spamx);
file_put_contents("data/$chat_id/spam/tim.txt",$as); 
var_dump(bot('sendMessage',[ 
'chat_id' => $chat_id,
'text' =>"❗️🚸 ⌯ تـۖم وضـع ٱڵـتـكـرٱر 
❗️🔑 ⌯ ڵڵعدد ( $spamx ) في ٱڵـمجموعة",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id' => $message->message_id,
]));
}}}}
$weplus = 1;
$timex = date("Y-m-d-h-i-A");
$timex = str_replace("am", "", $timex);
$NBots = file_get_contents("data/$chat_id/spam/$from_id/$timex.txt");
$timex_spam = $NBots + 1;
mkdir("data/$chat_id/spam/$from_id");
file_put_contents("data/$chat_id/spam/$from_id/$timex.txt",$timex_spam);
$tkrar = file_get_contents("data/$chat_id/spam/$from_id/$timex.txt");
$nomtkrar = file_get_contents("data/$chat_id/spam/spamxe.txt");
if($settings["lock"]["spam"] == "مقفول️"){
if($tkrar >=$nomtkrar) {
var_dump(bot('restrictChatMember',[
'user_id'=>$from_id,   
'chat_id'=>$chat_id,
'can_post_messages'=>false,
'until_date'=>time()+$weplus*1600,
]));
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱڵـعضو ⌯» ❨ [$name20](tg://user?id=$from_id) ❩ \n🔑 ⌯ قٱم بٱڵتكرٱر ٱڵمحدد تم تقييده \n ✓",'parse_mode'=>"markdown",
]);}}
# location
if ($settings["lock"]["location"] == "مقفول"){
if($update->message->location){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
bot('deletemessage',[ 'chat_id'=>$chat_id, 'message_id'=>$message_id ]); } } } }
# --     Source DevProx     --
function check_filter($str){
global $filterget;
foreach($filterget as $d){
if (mb_strpos($str, $d) !== false) {
return true;
}
}
}

if($settings["filterlist"] != false){
if ($status != 'creator' && $status != 'administrator' ) {
$check = check_filter("$text");
if ($check == true) {
bot('deletemessage',[ 'chat_id'=>$chat_id, 'message_id'=>$message_id, ]); } } }
# --     Source DevProx     --
if(in_array($from_id,$Dev)){
$info = "مطور اساسي";
}if($status == "creator"){
$info = "ٱڵمنشئ";
}if($status == "administrator"){
$info = "ٱڵـۧمشرف";
}if(in_array($from_id,$admin_user) ){
$info = "ٱلٱدمـۧن";
}if(in_array($from_id,$manger) ){
$info = "ٱڵمدير";
}if(in_array($from_id,$vipmem) ){
$info = "عضو مميز";
}if(in_array($from_id,$developer) ){
$info = "ٱڵمطۄر";
}if($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
$info = "فقط عضو";
}
if(!$username){
$usr = "لايوجد";
}elseif($username){
$usr = "@$username";
}
# --     Source DevProx     --
if($text =="قائمة المنع" or $text =="قائمه المنع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$filter = $settings["filterlist"];
for($z = 0;$z <= count($filter)-1;$z++){
$result = $result.$filter[$z]."\n";
}
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🎒 ⌯ قٱئمة ٱڵكڵمٱت ٱڵممنوعة ⌯» ⤈  
〰️➖〰️➖〰️➖〰️➖〰️
$result", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]);}}
# --     Source DevProx     --
  
elseif (strpos($text , "فلتر") !== false or strpos($text , "امنع") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$text1 = str_replace(['امنع','فلتر'],'',$text);
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ ٱڵكڵمة ( *$text1* ) تـۖم منعهٱ
❗️🔑 ⌯ فـي ٱڵـمجموعة ",'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]);
$settings = json_decode(file_get_contents("data/$chat_id/$chat_id.json"),true);
$settings["filterlist"][]="$text1";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }
# --     Source DevProx     --
elseif (strpos($text  , "الغاء منع") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
$textalmna = str_replace(['الغاء منع'],'',$text);
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ ٱڵكڵمة ( *$textalmna* ) تـۖم ٱڵغٱء منعهٱ
❗️🔑 ⌯ فـي ٱڵـمجموعة ",'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]);
$settings = json_decode(file_get_contents("data/$chat_id/$chat_id.json"),true);
$key = array_search($textalmna,$settings["filterlist"]);
unset($settings["filterlist"][$key]);
$settings["filterlist"] = array_values($settings["filterlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
}
# --     Source DevProx     --
elseif($text =="حذف قائمه المنع" or $text =="حذف قائمة المنع" or $text =="مسح قائمه المنع" or $text =="مسح قائمة المنع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم حـذف قٱئمة ٱڵمنع \n ✓", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]);
$settings = json_decode(file_get_contents("data/$chat_id/$chat_id.json"),true);
unset($settings["filterlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }

if($settings["information"]["step"] == "setrules"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$plus = mb_strlen("$text ");
if($plus < 1000000) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم وضع قوٱنين ٱڵمجموعة \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["information"]["rules"]="$text";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ لٱ يمكنك وضع ٱكثر من ( 100000 ) حرف", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } } }
# --     Source DevProx     --
if($settings["information"]["lockchannel"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
if ($tc == 'group' | $tc == 'supergroup'){
$usernamechannel = $settings["information"]["setchannel"];
$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$usernamechannel."&user_id=".$from_id));
$tch = $forchannel->result->status;
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
$msg = $settings["information"]["lastmsglockchannel"];
$channeltext = $settings["channellist"]["$from_id"]["channeltext"];
if($channeltext == false){
bot('SendMessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ ٱڵـعضو ⌯» [$name](tg://user?id=$from_id)
❗️🔑 ⌯ عذرٱ لاتستطيع ٱڵتحدث هنٱ
❗️🎗 ⌯ قم بٱلٱشترٱك قي قناة ٱڵمجـمۄعة ڵتتمكن من ٱڵتحدث في هذه ٱڵمجموعه
❗️📣 ⌯ ٱڵقنٱة ⌯» { [$usernamechannel] }", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⌯ أّلَقِنـااة ⁦ਊ",'url'=>"t.me/$usernamechannel"]],]])]);
bot('deletemessage',[ 'chat_id'=>$chat_id, 'message_id'=>$message_id ]);
bot('deletemessage',[ 'chat_id'=>$chat_id, 'message_id'=>$msg ]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsglockchannel"]="$msgplus";
$settings["channellist"]["$from_id"]["channeltext"]="true";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('deletemessage',[ 'chat_id'=>$chat_id, 'message_id'=>$message_id ]); } } } } }
# --     Source DevProx     --
if($settings["information"]["step"] == "setchannel"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
if(strpos($text  , '@') !== false) {
$plus = mb_strlen("$text ");
if($plus < 25) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم وضع ⌯» @$text \n🎗 ⌯ ٱرسڵ ( تفعيل اشتراك المجموعه ) وتٱكد من رفع ٱڵبوت ٱدمن في ٱڵقناة\n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["information"]["setchannel"]="$text ";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"*❗️📛 ⌯ ٱڵمعرف غير صحيح*", 'reply_to_message_id'=>$message_id,   ]); } }
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️📛 ⌯ خطأ يجب ان تضع @ للمعرف  ", 'reply_to_message_id'=>$message_id, ]); } } } }
# --     Source DevProx     --
if($settings["information"]["step"] == "setwelcome"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$plus = mb_strlen("$text ");
if($plus < 200) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ تـۖم تعيين ٱڵترحيب ٱڵـجـډيـډ 
❗️🔑 ⌯ ٱڵترحيب ٱڵـجـډيـډ هو :
〰️➖〰️➖〰️➖〰️➖〰️
$text ",'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["information"]["textwelcome"]="$text ";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>" ❗️🚸 ⌯ لٱ يمكنك وضع ٱكثر من ( 200 ) حرف ",'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]); } } } }
# --     Source DevProx     --
elseif ($tc == 'private'){ 
if(in_array($from_id, $user["banlist"])) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"لقد تم حظرك من البوت", 'reply_markup'=>json_encode(['KeyboardRemove'=>[ ],'remove_keyboard'=>true ]) ]); } }

elseif ($tc == 'group' | $tc == 'supergroup'){ 
if(in_array($from_id, $user["banlist"])) {
bot('KickChatMember',[ 'chat_id'=>$chat_id, 'user_id'=>$from_id ]); } }
# --     Source DevProx     --
if($text  == "تفعيل الاعضاء" or $text  == "تفعيل اضافه الاعضاء" or $text  == "تفعيل اضافة الاعضاء"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم تـفعيـۧڵ ٱضٱفة ٱلٱعضٱء \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["information"]["add"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
} 
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); }   }}}

elseif($text  == "تعطيل الاعضاء" or $text  == "تعطيل اضافه الاعضاء" or $text  == "تعطيل اضافة الاعضاء"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم تـعطيـۧڵ ٱضٱفة ٱلٱعضٱء \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["information"]["add"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]);   }	   }}}
# --     Source DevProx     --
elseif (strpos($text  , 'وضع عدد الاضافه') !== false or strpos($text  , 'وضع الاعضاء') !== false ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$code = str_replace(['وضع عدد الاضافه ','وضع الاعضاء '],'',$text );
if($code <= 20 && $code >= 1){
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم وضع عدد ٱلٱضٱفه ⌯» *$code* \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]);
$settings["information"]["setadd"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
} 
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ لٱ يمكنك وضع ٱكثر من ( 20 ) عضو", 'reply_to_message_id'=>$message_id, 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, ]);  }}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]);   }	   }}
# --     Source DevProx     --
if($text =="قفل الروابط" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵـرۄٱبط بنجٱح \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["lock"]["link"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }

elseif($text =="فتح الروابط" or $text =="فتح روابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵـرۄٱبط بنجٱح \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["lock"]["link"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }
# --     Source DevProx     --
if($text =="قفل الاونلاين" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱلٱۄنلٱين بنجٱح \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["lock"]["inline"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }

elseif($text =="فتح الاونلاين" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱلٱۄنلٱين بنجٱح \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["lock"]["inline"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }
# --     Source DevProx     --
if($text =="تعطيل اطردني" or $text =="تعطيل ادفرني"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم تـعطيـۧڵ ٱمـر ٱطردني \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["lock"]["kickme"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }

elseif($text =="تفعيل اطردني" or $text =="تفعيل ادفرني"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم تـفعيـۧڵ ٱمـر ٱطردني \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["lock"]["kickme"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }
# --     Source DevProx     --
if($text =="تعطيل الرابط" or $text =="تعطيل جلب الرابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم تـعطيـۧڵ رٱبـط ٱڵمجـمۄعة \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["lock"]["getlink"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }

elseif($text =="تفعيل الرابط" or $text =="تفعيل جلب الرابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم تـفعيـۧڵ رٱبـط ٱڵمجـمۄعة \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["lock"]["getlink"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }
# --     Source DevProx     --
if($text =="قفل الانكليزيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱلٱنكڵيزيه بنجٱح \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["lock"]["en"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }

elseif($text =="فتح الانكليزيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱلٱنكڵيزيه بنجٱح \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["lock"]["en"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }
# --     Source DevProx     --
elseif($text =="قفل الصور" or $text =="قفل صور"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {	
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵـصـۄر بنجٱح \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["lock"]["photo"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }

elseif($text =="فتح الصور" or $text =="فتح صور"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵـصـۄر بنجٱح \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]);
$settings["lock"]["photo"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }
# --     Source DevProx     --
elseif($text =="قفل الملصقات المتحركة" or $text =="قفل الملصقات المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {	
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵمڵصقٱت ٱڵـمتحركة \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["lock"]["is_sticker"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }

elseif($text =="فتح الملصقات المتحركة" or $text =="فتح الملصقات المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵمڵصقٱت ٱڵـمتحركة \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]);
$settings["lock"]["is_sticker"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }
# --     Source DevProx     --
elseif($text =="تفعيل الردود" or $text =="تفعيل ردود البوت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {	
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم تـفعيـۧڵ رډوډ ٱڵبوت \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["lock"]["rdodsg"]="مفعڵه";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }

elseif($text =="تعطيل الردود" or $text =="تعطيل ردود البوت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم تـعطيـۧڵ رډوډ ٱڵبوت \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]);
$settings["lock"]["rdodsg"]="معطڵه";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }
# --     Source DevProx     --
elseif($text =="قفل المتحركة" or $text =="قفل المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"?? ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵـمتحركة بنجٱح \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]);
$settings["lock"]["gif"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>" ❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }

elseif($text =="فتح المتحركة" or $text =="فتح المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵـمتحركة بنجٱح \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["lock"]["gif"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }
# --     Source DevProx     --
elseif($text =="قفل الماركداون" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵمٱركدٱون بنجٱح \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]);
$settings["lock"]["markdown"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>" ❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }

elseif($text =="فتح الماركداون" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵمٱركدٱون بنجٱح \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["lock"]["markdown"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }
# --     Source DevProx     --
elseif($text =="قفل العربيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵـعربية بنجٱح \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]);
$settings["lock"]["ar"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>" ❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }

elseif($text =="فتح العربيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵـعربية بنجٱح \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["lock"]["ar"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }
# --     Source DevProx     --
elseif($text =="قفل الملفات" or $text =="قفل ملفات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵـمٌلفـآټ بنجٱح \n ✓", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]);
$settings["lock"]["document"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]); } } }

elseif($text =="فتح الملفات" or $text =="فتح ملفات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵـمٌلفـآټ بنجٱح \n ✓", 'reply_to_message_id'=>$message_id, 'reply_markup'=>$inlinebutton, ]);
$settings["lock"]["document"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($text =="قفل الفيديو" or $text =="قفل فيديو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵـفيډيۄ بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["video"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

elseif($text =="فتح الفيديو" or $text =="فتح فيديو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵـفيډيۄ بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["video"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($text =="قفل التعديل" or $text =="قفل تعديل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵتعديڵ بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["edit"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

elseif($text =="فتح التعديل" or $text =="فتح تعديل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵتعديڵ بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["edit"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($text =="قفل الالعاب" or $text =="قفل العاب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱلٱڵعٱب بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["game"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

elseif($text =="فتح الالعاب" or $text =="فتح العاب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱلٱڵعٱب بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["game"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($text =="قفل المواقع" or $text =="قفل الموقع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵـمۄٱقع بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["location"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

elseif($text =="فتح المواقع" or $text =="فتح الموقع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵـمۄٱقع بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["location"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($text =="قفل الجهات" or $text =="قفل جهات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵـجهٱت بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["contact"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

elseif($text =="فتح الجهات" or $text =="فتح جهات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵـجهٱت بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["contact"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($text =="قفل تعديل الميديا" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ تعديڵ ٱڵميديٱ \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["editmd"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

elseif($text =="فتح تعديل الميديا" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح تعديڵ ٱڵميديٱ \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["editmd"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($text =="قفل التاك" or $text =="قفل الهاشتاك"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵـهٱشتٱك بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["tag"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

elseif($text =="فتح التاك" or $text =="فتح الهاشتاك"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵـهٱشتٱك بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["tag"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($text =="قفل المعرفات" or $text =="قفل المعرف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵـمعرف بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["username"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

elseif($text =="فتح المعرفات" or $text =="فتح المعرف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵـمعرف بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["username"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($text =="قفل الصوت" or $text =="قفل الموسيقى"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵـصۄت بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["audio"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

elseif($text =="فتح الصوت" or $text =="فتح صوت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵـصۄت بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["audio"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($text =="قفل الرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵـرد بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["reply"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

elseif($text =="فتح الرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵـرد بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["reply"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($text =="قفل الاشعارات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱلٱشعٱرٱت بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["tgservic"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

elseif($text =="فتح الاشعارات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱلٱشعٱرٱت بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["tgservic"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($text =="قفل بصمة الفيديو" or $text =="قفل بصمه الفيديو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ بصمٱت ٱڵفيديو \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["video_msg"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

elseif($text =="فتح بصمة الفيديو" or $text =="فتح بصمه الفيديو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح بصمٱت ٱڵفيديو \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["video_msg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif ($text  == "قفل البوتات" or $text  == "قفل بوتات" or $text  == "قفل البوت") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵـبوتٱت بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["bot"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

elseif ($text  == "فتح البوتات" or $text  == "فتح بوتات"  or $text  == "فتح البوت") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵـبوتٱت بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["bot"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
if($text =="تعطيل الاشتراك الاجباري"){
if (in_array($from_id,$Dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم تـعطيـۧڵ ٱلٱشترٱك ٱلٱجبٱري \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
file_put_contents("SudoOrders/setchannel.txt","الاشتراك الاجباري معطل");}}

if($text =="تفعيل الاشتراك الاجباري"){
if (in_array($from_id,$Dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم تـفعيـۧڵ ٱلٱشترٱك ٱلٱجبٱري \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
file_put_contents("SudoOrders/setchannel.txt","الاشتراك الاجباري مفعل");}}
# --     Source DevProx     --
if($text == "تفعيل اشتراك المجموعه"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم تـفعيـۧڵ ٱلٱشترٱك ٱلٱجبٱري \n🎗 ⌯ ڵڵمجموعة ⌯» $namegroup \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["information"]["lockchannel"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}

elseif($text == "تعطيل اشتراك المجموعه"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم تـعطيـۧڵ ٱلٱشترٱك ٱلٱجبٱري \n🎗 ⌯ ڵڵمجموعة ⌯» $namegroup \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["information"]["lockchannel"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}
# --     Source DevProx     --
elseif(strpos($text  , 'وضع قناة') !== false or strpos($text  , 'اضف قناة') !== false or strpos($text  , 'ضع قناة') !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$code = $num = str_replace(['وضع قناة ','اضف قناة','ضع قناة'],'',$text );
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم وضع ⌯» *$code* \n🎗 ⌯ ٱرسڵ ( تفعيل اشتراك المجموعه ) وتٱكد من رفع ٱڵبوت ٱدمن في ٱڵقناة\n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["information"]["setchannel"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}  
# --     Source DevProx     --
elseif( $text =="قفل الايدي" or $text == "تعطيل الايدي"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم تـعطيـۧڵ ٱلٱيـدي بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["iduser"]="معطل";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

elseif($text =="فتح الايدي" or $text == "تفعيل الايدي"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم تـفعيـۧڵ ٱلٱيـدي بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["iduser"]="مفعل";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
if($text =="قفل البصمات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵـبصمٱت بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["voice"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

elseif($text =="فتح البصمات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵـبصمٱت بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["voice"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($text =="قفل الملصقات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵمڵصقٱت بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["sticker"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

elseif($text =="فتح الملصقات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵمڵصقٱت بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["sticker"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($text =="قفل التوجيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵـتوجيه بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["forward"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
elseif($text =="فتح التوجيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵـتوجيه بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["forward"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($text =="قفل الفشار"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵـفشٱر بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["fshar"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

elseif($text =="فتح الفشار"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵـفشٱر بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["fshar"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($text =="قفل الكفر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵـكفر بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["kaf"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

elseif($text =="فتح الكفر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵـكفر بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["kaf"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($text =="قفل الطائفيه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵطٱئفيه بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["taf"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

elseif($text =="فتح الطائفيه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵطٱئفيه بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["taf"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($text =="قفل الفارسيه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵفٱرسية بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["farsi"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

elseif($text =="فتح الفارسيه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵفٱرسية بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["farsi"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif( $text =="قفل الكلايش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {	
$pluscharacter = $settings["information"]["pluscharacter"];
$downcharacter = $settings["information"]["downcharacter"];
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵكلٱيش بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["lockcharacter"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

elseif( $text =="فتح الكلايش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵكلٱيش بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["lockcharacter"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif(strpos($text  , "ضع عدد الاحرف") !== false or strpos($text  , "وضع كلايش") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	$num = str_replace(['وضع كلايش ','ضع عدد الاحرف '],'',$text );
$add = $settings["information"]["added"];
if ($add == true) {
$te = explode(" ",$num);
$startlock = $te[0];
$endlock = $te[1];
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تم وضع ⌯» *$startlock* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["information"]["downcharacter"]="$startlock";
$settings["information"]["pluscharacter"]="$endlock";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings); 
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
if( $text =="قفل الدردشه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵـډرډشة بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["text"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

elseif( $text =="فتح الدردشه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵـډرډشة بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["text"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
if($text== "قفل الروابط بالتحذير" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵروٱبط بٱڵتحذير \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
$settings["lock"]["linkw"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);}}}

if($text== "فتح الروابط بالتحذير" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵروٱبط بٱڵتحذير \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
$settings["lock"]["linkw"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);}}}
# --     Source DevProx     --
if($text== "قفل التوجيه بالتحذير" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵتوجيه بٱڵتحذير \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
$settings["lock"]["forwardw"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);}}}

if($text== "فتح التوجيه بالتحذير" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵتوجيه بٱڵتحذير \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
$settings["lock"]["forwardw"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);}}}
# --     Source DevProx     --
if($text== "قفل المعرفات بالتحذير" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵمعرفٱت بٱڵتحذير \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
$settings["lock"]["userw"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);}}}

if($text== "فتح المعرفات بالتحذير" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵمعرفٱت بٱڵتحذير \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
$settings["lock"]["userw"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);}}}
# --     Source DevProx     --
if($text== "قفل المعرفات بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵمعرفٱت بٱڵتقييد \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
$settings["lock"]["userr"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);}}}

if($text== "قفل المعرفات بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"❗️📛 ⌯ *ڵڵمشرفين فقط* ",'reply_to_message_id'=>$message_id,]);}}}}

if($text== "فتح المعرفات بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵمعرفٱت بٱڵتقييد \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
$settings["lock"]["userr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);}}}

if($text== "فتح المعرفات بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"❗️📛 ⌯ *ڵڵمشرفين فقط* ",'reply_to_message_id'=>$message_id,]);}}}}
# --     Source DevProx     --
if($text== "قفل البوتات بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵبوتٱت بٱڵطرد \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
$settings["lock"]["botk"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);}}}

if($text== "قفل البوتات بالطرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"❗️📛 ⌯ *ڵڵمشرفين فقط* ",'reply_to_message_id'=>$message_id,]);}}}}

if($text== "فتح البوتات بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵبوتٱت بٱڵطرد \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
$settings["lock"]["botk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);}}}

if($text== "فتح البوتات بالطرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"❗️📛 ⌯ *ڵڵمشرفين فقط* ",'reply_to_message_id'=>$message_id,]);}}}}
# --     Source DevProx     --
if($text== "قفل الروابط بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵروٱبط بٱڵطرد \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
$settings["lock"]["linkk"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);}}}

if($text== "قفل الروابط بالطرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"❗️📛 ⌯ *ڵڵمشرفين فقط* ",'reply_to_message_id'=>$message_id,]);}}}}

if($text== "فتح الروابط بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵروٱبط بٱڵطرد \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
$settings["lock"]["linkk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);}}}

if($text== "فتح الروابط بالطرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"❗️📛 ⌯ *ڵڵمشرفين فقط* ",'reply_to_message_id'=>$message_id,]);}}}}
# --     Source DevProx     --
if($text== "قفل التوجيه بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵتوجيه بٱڵطرد \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
$settings["lock"]["forwardk"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);}}}

if($text== "فتح التوجيه بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵتوجيه بٱڵطرد \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
$settings["lock"]["forwardk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);}}}
# --     Source DevProx     --
if($text== "قفل المعرفات بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵمعرفٱت بٱڵطرد \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
$settings["lock"]["userk"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);}}}

if($text== "فتح المعرفات بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵمعرفٱت بٱڵطرد \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
$settings["lock"]["userk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);}}}
# --     Source DevProx     --
elseif(strpos($text  , "حظر عام") !== false) {
if (in_array($from_id,$Dev)) {
$text = str_replace(['حظر عام '],'',$text );
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
bot('KickChatMember',['chat_id'=>$chat_id,'user_id'=>$id]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ [$text] ❩\n🔑 ⌯ *تـۖم حظره من كڵ ٱڵكروبٱت* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$user["banlist"][]="$text";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);}}
# --     Source DevProx     --
elseif (strpos($text  , "الغاء العام") !== false or strpos($text  , "الغاء الحظر العام") !== false) {
if (in_array($from_id,$Dev)) {
$text = str_replace(['الغاء العام ','الغاء الحظر العام '],'',$text );
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ [$text] ❩\n🔑 ⌯ *تـۖم ٱڵغٱء حظره من كڵ ٱڵكروبٱت* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$key = array_search($text,$user["banlist"]);
unset($user["banlist"][$key]);
$user["banlist"] = array_values($user["banlist"]); 
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
# --     Source DevProx     --
elseif($text == "المحظورين عام" or $text == "قائمه العام") {
if ( in_array($from_id,$Dev)) {
$silent = $user["banlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result.$silent[$z]."\n";
}
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"❗️🎒 ⌯ قٱئمة ٱڵـحظر ٱڵعٱم ⌯» ⤈ 
〰️➖〰️➖〰️➖〰️➖〰️
$result",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}
# --     Source DevProx     --
elseif($text  == "تقييد" && $re or $text  == "كتم" && $re){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$vipmem) && !in_array($re_id,$developer)) {
$add = $settings["information"]["added"];
if ($add == true){
bot('restrictChatMember',['user_id'=>$re_id,'chat_id'=>$chat_id,'can_post_messages'=>false,]);
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ [$usew] ❩\n🔑 ⌯ *تـۖم تقييده من ٱڵـمجموعة* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$re_msgid,]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ *عذرٱ لٱ تستطيع تقييد* ⌯» ⤈ \n❨ [$usew] ❩\n🔑 ⌯  *ڵان تمت ترقيتهُ مسبقٱ* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif (strpos($text  , "تقييد لمدة ") !== false && $re or strpos($text  , "كتم لمدة") !== false && $re) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$vipmem) && !in_array($re_id,$developer)) {
$add = $settings["information"]["added"];
$we = str_replace(['تقييد لمدة ','كتم لمدة'],'',$text );
if ($we <= 1000 && $we >= 1){
if ($add == true) {
$weplus = $we + 0;
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ [$usew] ❩\n🔑 ⌯ *تـۖم تقييده ڵمدة $we دقائق* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
bot('restrictChatMember',['user_id'=>$re_id,'chat_id'=>$chat_id,'can_post_messages'=>false,'until_date'=>time()+$weplus*60,]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ يجب اختيار عدد بين 1 الى 1000",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}
else{bot('sendmessage',['chat_id' => $chat_id,'text'=>"🚸 ⌯ *عذرٱ لٱ تستطيع تقييد* ⌯» ⤈ \n❨ [$usew] ❩\n🔑 ⌯  *ڵان تمت ترقيتهُ مسبقٱ* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($text  == "الغاء تقييد" && $re or $text  == "الغاء التقييد" && $re or $text  == "الغاء كتم" && $re or $text  == "الغاء الكتم" && $re){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('restrictChatMember',[
'user_id'=>$re_id,   
'chat_id'=>$chat_id,
'can_post_messages'=>true,
'can_add_web_page_previews'=>false,
'can_send_other_messages'=>true,
'can_send_media_messages'=>true,]);
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ [$usew] ❩\n🔑 ⌯ *تـۖم ٱڵغٱء تقييده من ٱڵـمجموعة* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$re_msgid,]);
$key = array_search($re_id,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($text  == "المقيدين" or $text  == "المكتومين") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"❗️🎒 ⌯ قٱئمة ٱڵـمقيدين ⌯» ⤈ 
〰️➖〰️➖〰️➖〰️➖〰️
$result",'parse_mode'=>"MarkDown",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}
# --     Source DevProx     --
elseif($text  == "حذف المقيدين" or $text  == "حذف المكتومين" or $text  == "مسح المقيدين" or $text  == "مسح المكتومين") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
bot('restrictChatMember',[
'user_id'=>$silent[$z],   
'chat_id'=>$chat_id,
'can_post_messages'=>true,
'can_add_web_page_previews'=>false,
'can_send_other_messages'=>true,
'can_send_media_messages'=>true,]);}
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم حـذف ٱڵمقيدين \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
unset($settings["silentlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
if($can_bot_chang_info == 1){ 
$canchangeinfo = "✅";
}else{
$canchangeinfo = "❌";
}
if($can_bot_delete == 1){ 
$candeletemessages = "✅";
}else{
$candeletemessages = "❌";
}
if($can_bot_restrict == 1){ 
$canrestrictmembers = "✅";
}else{
$canrestrictmembers = "❌";
}
if($can_bot_invite == 1){ 
$caninviteusers = "✅";
}else{
$caninviteusers = "❌";
}
if($can_bot_pin == 1){ 
$canpinmessages = "✅";
}else{
$canpinmessages = "❌";
}
if($can_bot_promote == 1){ 
$canpromotemembers = "✅";
}else{
$canpromotemembers = "❌";
}
# --     Source DevProx     --
if($rt && $text =="رفع ادمن بالكروب" or $re && $text =="رفع منشئ" and $canpromotemembers == "✅"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ [$usew] ❩\n🔑 ⌯  *تـۖم رفعه ٱدمن فيۧ ٱڵكروب* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
bot('promoteChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id,
'can_change_info'=>True,
'can_delete_messages'=>True,
'can_invite_users'=>True,
'can_restrict_members'=>True,
'can_pin_messages'=>True,
'can_promote_members'=>false]);}}

if($rt && $text =="رفع ادمن بالكروب" or $re && $text =="رفع منشئ" and $canpromotemembers == "❌"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ڵيس ڵدي صلاحية رفع مشرفين 
🔑 ⌯ قم بٱعطائي صلاحية رفع ٱڵمشرفين",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}
# --     Source DevProx     --
elseif($rt && $text =="تنزيل ادمن بالكروب" or $re && $text =="تنزيل منشئ" and $canpromotemembers == "✅"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ [$usew] ❩\n🔑 ⌯  *تـۖم تنزيڵه ٱدمن من ٱڵكروب* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
bot('restrictChatMember',[
'user_id'=>$re_id,   
'chat_id'=>$chat_id,
'can_post_messages'=>true,
'can_add_web_page_previews'=>false,
'can_send_other_messages'=>true,
'can_send_media_messages'=>true,]);}}

if($rt && $text =="تنزيل ادمن بالكروب" or $text =="تنزيل منشئ" and $canpromotemembers == "❌"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ڵيس ڵدي صلاحية رفع مشرفين 
🔑 ⌯ قم بٱعطائي صلاحية رفع ٱڵمشرفين",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}
# --     Source DevProx     --
$linktxt = file_get_contents("data/$chat_id/link.txt");
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($text == "صنع رابط وهمي" || $text == "صنع رابط" || $text == "انشاء رابط" and $caninviteusers == "✅"){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('SendMessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 تـۖم صـنـع ٱڵـرآبـط ٱڵـجـډيـډ\nٱرسـڵ (الرابط) ڵـعـړض ٱڵـرآبـط ٱڵـجـډيـډ ",'parse_mode'=>'markdown','reply_to_message_id'=>$message_id,'disable_web_page_preview'=>true,]);
file_put_contents("data/$chat_id/link.txt","$getlinkde");}}

if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($text == "صنع رابط وهمي" || $text == "صنع رابط" || $text == "انشاء رابط"  and $caninviteusers == "❌"){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('SendMessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ڵيس ڵدي صلاحية دعوة ٱڵمستخدمين 
🔑 ⌯ قم بٱعطائي صلاحية دعوة ٱڵمستخدمين",'parse_mode'=>'markdown','reply_to_message_id'=>$message_id,'disable_web_page_preview'=>true,]);}}
# --     Source DevProx     --
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if($text == "فحص البوت" or $text == "كشف البوت" or $text == "فحص" or $text == "صلاحيه البوت" or $text == "صلاحية البوت"){
bot('SendMessage',['chat_id'=>$chat_id,'text'=>"❗️🎒 ⌯ صلاحية البوت في المجموعه
〰️➖〰️➖〰️➖〰️➖〰️
علامة ❪  ✅ ❫ تعني يمتلك صلاحية
علامة ❪ ❌ ❫ تعني لايمتلك صلاحية
〰️➖〰️➖〰️➖〰️➖〰️
🗑 ⌯ حذف الرسائل ⌯» ❪ $candeletemessages ❫
👥 ⌯ دعوة مستخدمين ⌯» ❪ $caninviteusers ❫
📛 ⌯ حظر مستخدمين ⌯» ❪ $canrestrictmembers ❫
📌 ⌯ تثبيت الرسائل ⌯» ❪ $candeletemessages ❫
⚙️ ⌯ تغيير المعلومات ⌯» ❪ $canchangeinfo ❫
👨🏻‍💻 ⌯ رفع وتنزيل مشرفين ⌯» ❪ $canpromotemembers ❫
〰️➖〰️➖〰️➖〰️➖〰️",'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]);}}
# --     Source DevProx     --
if ($text && $tc == "supergroup" ){
$newmessg = $allmsg + 1;
file_put_contents("data/allmsg.txt","$newmessg");
}
if ($text && $tc == "private" ){
$newmessg = $allmsgpv + 1;
file_put_contents("data/allmsgpv.txt","$newmessg");
}
if(in_array($from_id,$Dev)){
if($text == "الرسائل" or $text == "مجموع الرسائل" or $text == "رسائل الكل" or $text == "عدد الرسائل"){
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"🚸 ⌯ عدد رسٱئڵ ٱڵخٱص ⌯» ⤈ \n⌯ ❨ $allmsgpv ❩\n🔑 ⌯ عدد رسٱئڵ ٱڵمجموعٱت ⌯» ⤈ \n⌯ ❨ $allmsg ❩\n ✓",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}
# --     Source DevProx     --
if($can_change_info == 1){ 
$canchangeinfo1 = "✓";
}else{
$canchangeinfo1 = "✗";
}
if($can_delete_messages == 1){ 
$candeletemessages1 = "✓";
}else{
$candeletemessages1 = "✗";
}
if($can_restrict_members == 1){ 
$canrestrictmembers1 = "✓";
}else{
$canrestrictmembers1 = "✗";
}
if($can_invite_users == 1){ 
$caninviteusers1 = "✓";
}else{
$caninviteusers1 = "✗";
}
if($can_pin_messages == 1){ 
$canpinmessages1 = "✓";
}else{
$canpinmessages1 = "✗";
}
if($can_promote_members == 1){ 
$canpromotemembers1 = "✓";
}else{
$canpromotemembers1 = "✗";
}
if(in_array($from_id,$Dev)){
$slahee = "❗️🚸 ⌯ ٱنت مطور ٱڵبوت";
}elseif($status == "creator"){
$slahee = "❗️🚸 ⌯ ٱنت منشئ ٱڵمجـمۄعة";
}elseif($status == "administrator"){
$slahee = "❗️🎒 ⌯ صلاحياتك عزيزي الادمن
〰️➖〰️➖〰️➖〰️➖〰️
علامة ❪  ✅ ❫ تعني يمتلك صلاحية
علامة ❪ ❌ ❫ تعني لايمتلك صلاحية
〰️➖〰️➖〰️➖〰️➖〰️
🗑 ⌯ حذف الرسائل ⌯» ❪ $candeletemessages1 ❫
👥 ⌯ دعوة مستخدمين ⌯» ❪ $caninviteusers1 ❫
📛 ⌯ حظر مستخدمين ⌯» ❪ $canrestrictmembers1 ❫
📌 ⌯ تثبيت الرسائل ⌯» ❪ $candeletemessages1 ❫
⚙️ ⌯ تغيير المعلومات ⌯» ❪ $canchangeinfo1 ❫
👨🏻‍💻 ⌯ رفع وتنزيل مشرفين ⌯» ❪ $canpromotemembers1 ❫
〰️➖〰️➖〰️➖〰️➖〰️";
}elseif(in_array($from_id,$admin_user) ){
$slahee = "❗️🚸 ⌯ ٱنت ٱدمن في ٱڵبوت";
}elseif(in_array($from_id,$manger) ){
$slahee = "❗️🚸 ⌯ ٱنت مدير في ٱڵبوت
";
}elseif(in_array($from_id,$vipmem) ){
$slahee = "❗️🚸 ⌯ ٱنت عضو مميز في ٱڵبوت";
}elseif(in_array($from_id,$developer) ){
$slahee = "❗️🚸 ⌯ ٱنت مطور في ٱڵبوت";
}elseif($status == "member" ){
$slahee = "❗️🚸 ⌯ ٱنت مجرد عضو فقط";
}
if($text == "صلاحياتي" or $text == "صلاحيتي"){
bot('SendMessage',['chat_id'=>$chat_id,'text'=>"$slahee",'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]);}
# --     Source DevProx     --
if ($settings["information"]["welcome"] == "مقفول"){
if($update->message->new_chat_member){
if ($tc == "group" | $tc == "supergroup"){
$text1 = $settings["information"]["textwelcome"];
$newmemberuser = $update->message->new_chat_member->username;
$name = $update->message->new_chat_member->first_name;
date_default_timezone_set('Asia/Baghdad');
$date = date('Y-m-d');
$date2 = date("H:i");
$text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$date | $date2"],"$text1");
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"$text",'reply_to_message_id'=>$message_id,]);}}}
# lock character
if($settings["lock"]["lockcharacter"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
$plus = mb_strlen("$text ");
$pluscharacter = $settings["information"]["pluscharacter"];
$downcharacter = $settings["information"]["downcharacter"];
if ($pluscharacter < $plus or $plus < $downcharacter) {   
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}
# --     Source DevProx     --
$setnamebot = file_get_contents("SudoOrders/set.txt");
$namebot = file_get_contents("SudoOrders/namebot.txt");
if(in_array($from_id,$Dev)){
if ($text == "تعيين اسم البوت" or $text == "وضع اسم البوت" or $text == "تغيير اسم البوت" and $namebot == null){
file_put_contents("SudoOrders/set.txt","setnamebot");
bot("sendMessage",["chat_id"=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم حـذف ٱسـم ٱڵـبۄت \n ✓",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}

if(in_array($from_id,$Dev)){
if ($text == "حذف اسم البوت" or $text == "مسح اسم البوت"){
file_put_contents("SudoOrders/namebot.txt","بروكس");
bot("sendMessage",["chat_id"=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ ٱرسـڵ ٱسـم ٱڵـبۄت ٱلٱن \n ✓",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}
# --     Source DevProx     --
if($text && $setnamebot =="setnamebot" and in_array($from_id,$Dev)){
file_put_contents("SudoOrders/namebot.txt",$text); 
file_put_contents("SudoOrders/set.txt","");
bot("sendmessage",["chat_id"=>$chat_id,"text" => "🚸 ⌯ تم حفظ ٱلٱسم بنجٱح
🔑 ⌯ ٱسمي ٱلٱن ⌯» ❨ $text ❩",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}

$botproxre = array("صيحوڵي بروكس كٱفي بوت 😒🔪","ڵتكول بوت ٱسمي بروكس 😒🔪","عندي ٱسم تره 😒💔","ٱنت ٱڵبوت ڵك 😒??");
$reproxbot = array_rand($botproxre, 1);
if($text == "بوت" || $text == "البوت شنو اسمه" || $text == "شسمه البوت" || $text == "البوت شسمه" || $text == "اسم البوت" and $namebot == NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"$botproxre[$reproxbot]",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}

$botre = array("صيحوڵي $namebot كٱفي بوت 😒🔪","ڵتكول بوت ٱسمي $namebot 😒🔪","عندي ٱسم تره 😒💔","ٱنت ٱڵبوت ڵك 😒💔");
$rebot = array_rand($botre, 1);
if($text == "بوت" || $text == "البوت شنو اسمه" || $text == "شسمه البوت" || $text == "البوت شسمه" || $text == "اسم البوت" and $namebot != NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"$botre[$rebot]",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}

$namere = array("😸♥️ هلٱ كڵبي ويٱك $namebot تفضڵ","ترةه مصختهٱا ٱحجيي شرٱيد 😕😒💔","ٱطڵقق وٱحدد يصيح $namebot 😻♥️","خبصتت ٱمنةة شتريدد عٱاد 🤧😒💔");
$rename = array_rand($namere, 1);
if($text == "$namebot" and $namebot != NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>$namere[$rename],'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}

$proxre = array("😸♥️ هلٱ كڵبي ويٱك بروكس تفضڵ","ترةه مصختهٱا ٱحجيي شرٱيد 😕😒💔","ٱطڵقق وٱحدد يصيح بروكس 😻♥️","خبصتت ٱمنةة شتريدد عٱاد 🤧😒💔");
$reprox = array_rand($proxre, 1);
if($text == "بروكس" and $namebot == NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>$proxre[$reprox],'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}
# --     Source DevProx     --
$startt = file_get_contents("SudoOrders/set.txt");
$starttext = file_get_contents("SudoOrders/start.txt");
if ($text == "تعيين رد الخاص" or $text == "تعيين الستارت" or $text == "تعيين رد الخاص ،📄‘" and in_array($from_id,$Dev)){
file_put_contents("SudoOrders/set.txt","setstart");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ حسنٱ ٱرسـڵ كليشة ٱڵستٱرت ٱلٱن ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}

if($text && $startt =="setstart" and in_array($from_id,$Dev)){
file_put_contents("SudoOrders/start.txt",$text); 
file_put_contents("SudoOrders/set.txt","");
bot("sendmessage",["chat_id"=>$chat_id,"text" => "🚸 ⌯ تـۖم حفظ كليشة ٱڵستٱرت
🔑 ⌯ ٱصبحت ٱلٱن ⌯» ❨ $text ❩",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}

if ($text == "حذف رد الخاص" or $text == "حذف الستارت" or $text == "حذف رد الخاص ،📃‘" and in_array($from_id,$Dev)){
file_put_contents("SudoOrders/start.txt","");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"❗️☻ تـۖم حذف كليشة ٱڵستٱرت بنجٱح",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
# --     Source DevProx     --
$user = $update->message->from->username;
$times = date('h:i:s');
$pirvate = explode("\n",file_get_contents("statistics/pirvate.txt"));
$statspv = count($pirvate)-1;
$startt = file_get_contents("SudoOrders/set.txt");
$starttext = file_get_contents("SudoOrders/start.txt");
if($text=="/start" and $starttext == null){
$st1 = file_get_contents("SudoOrders/startlock.txt");
if($st1 == "رد الخاص مفعل"){
if($tc == "private"){
if( !in_array($from_id,$Dev) && !in_array($from_id,$developer)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"📰 ⌯ مرحبٱ انا بوت ٱسمي $namebot 
📑 ⌯ ٱختصٱصي حمٱية ٱڵمجموعات 
من ٱڵتفليش وٱڵسبام وٱڵـخخ .. . ،
📃 ⌯ تفعيڵي سهڵ ومجانا فقط قم بٱضٱفتي 
ٱڵى مجموعتكك وارفعني ادمن بعدها قم بٱرساڵ ٱمر ❨ تفعيل ❩
📋 ⌯ سيتم رفع ٱلٱدمنيه وٱڵمنشئ تڵقٱئيٱ
〰️➖〰️➖〰️➖〰️➖〰️
⌯ [اضغط هنا لاضافة البوت '📣،](https://telegram.me/$userBot?startgroup=start)",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⌯ أّلَمَطّوِڒٍ ⁦ਊ",'url'=>"t.me/$DevUser"]],]])]);
bot('sendmessage',['chat_id'=>$Dev[0],'text'=>"🎒 ⌯ هنٱك مشترك جديد في ٱڵبوت ⌯» ⤈ 
〰️➖〰️➖〰️➖〰️➖〰️
🚸 ⌯ اسمه ⌯» $name
🔑 ⌯ معرفه ⌯» ❨ @$user ❩
💫 ⌯ ايديه ⌯» ❨ $from_id ❩
🔅 ⌯ عدد مشتركين ٱڵبوت ⌯» ❨ $statspv ❩
〰️➖〰️➖〰️➖〰️➖〰️
❗️⏰ ⌯ ٱڵوقت ⌯» $times
❗️📆 ⌯ ٱڵتٱريخ ⌯» ".date("Y")."/".date("n")."/".date("d")."",]);}}}}

$starttext = file_get_contents("SudoOrders/start.txt");
if($text=="/start" and $starttext != null){
if($tc == "private"){
$st1 = file_get_contents("SudoOrders/startlock.txt");
if($st1 == "رد الخاص مفعل"){
if( !in_array($from_id,$Dev) && !in_array($from_id,$developer)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"$starttext",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⌯ أّلَمَطّوِڒٍ ⁦ਊ",'url'=>"t.me/$DevUser"]],]])]);
bot('sendmessage',['chat_id'=>$Dev[0],'text'=>"🎒 ⌯ هنٱك مشترك جديد في ٱڵبوت ⌯» ⤈ 
〰️➖〰️➖〰️➖〰️➖〰️
🚸 ⌯ اسمه ⌯» $name
🔑 ⌯ معرفه ⌯» ❨ @$user ❩
💫 ⌯ ايديه ⌯» ❨ $from_id ❩
🔅 ⌯ عدد مشتركين ٱڵبوت ⌯» ❨ $statspv ❩
〰️➖〰️➖〰️➖〰️➖〰️
❗️⏰ ⌯ ٱڵوقت ⌯» $times
❗️📆 ⌯ ٱڵتٱريخ ⌯» ".date("Y")."/".date("n")."/".date("d")."",]);}}}}
# --     Source DevProx     --
$startt = file_get_contents("SudoOrders/set.txt");
$starttext = file_get_contents("SudoOrders/start.txt");
if($text=="جلب الستارت" or $text=="جلب رد الخاص" or $text=="جلب رد الخاص ،📑‘" and $starttext == null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"📰 ⌯ مرحبٱ انا بوت ٱسمي $namebot 
📑 ⌯ ٱختصٱصي حمٱية ٱڵمجموعات 
من ٱڵتفليش وٱڵسبام وٱڵـخخ .. . ،
📃 ⌯ تفعيڵي سهڵ ومجانا فقط قم بٱضٱفتي 
ٱڵى مجموعتكك وارفعني ادمن بعدها قم بٱرساڵ ٱمر ❨ تفعيل ❩
📋 ⌯ سيتم رفع ٱلٱدمنيه وٱڵمنشئ تڵقٱئيٱ
〰️➖〰️➖〰️➖〰️➖〰️
⌯ [اضغط هنا لاضافة البوت '📣،](https://telegram.me/$userBot?startgroup=start)",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,]);}}}

$starttext = file_get_contents("SudoOrders/start.txt");
if($text=="جلب الستارت" or $text=="جلب رد الخاص" or $text=="جلب رد الخاص ،📑‘" and $starttext != null){
if($tc == "private"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"$starttext",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,]);}}} 
# --     Source DevProx     --
if($text =="تعطيل رد الخاص" or $text =="تعطيل رد الخاص ،📂‘"){
if (in_array($from_id,$Dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم تـعطيـۧڵ رد ٱڵخٱص \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
file_put_contents("SudoOrders/startlock.txt","رد الخاص معطل");}}

if($text =="تفعيل رد الخاص" or $text =="تفعيل رد الخاص ،📁‘"){
if (in_array($from_id,$Dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم تـفعيـۧڵ رد ٱڵخٱص \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
file_put_contents("SudoOrders/startlock.txt","رد الخاص مفعل");}}
# --     Source DevProx     --
if( $text=="/start" &&  $tc == "private" or $text=="رجوع ،🔙‘" &&  $tc == "private" ){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"❗️🚸 ⌯ *مرحبٱ عزيزي ٱڵـمطور* \n❗️🔑 ⌯ *ٱنت ٱڵمطور ٱلٱسٱسي هنٱ* \n❗️🔅 ⌯ *ٱڵيك ٱزرٱر سورس ديف بروكس* \n❗️🎗 ⌯ *تستطيع ٱڵتحكم بكل ٱلٱوٱمر فقط ٱضغط على ٱلٱمر ٱڵذي تريد تنفيذه*",
'parse_mode'=>'MarkDown',
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[ ['text'=>"تعيين اسم البوت"],['text'=>"تحديث ،♻️‘"],['text'=>"ضع كليشه المطور"] ],
[['text'=>"المشتركين ،📋‘"],['text'=>"المطورين ،⚜️‘"],['text'=>"الاحصائيات ‘🗃،"]],
[['text'=>"اذاعه عام ،📣‘"],['text'=>"اذاعه خاص ،🔊‘"]],
[['text'=>"اذاعه عام بالتوجيه ،🔔‘"],['text'=>"اذاعه خاص بالتوجيه ،🔉‘"]],
[['text'=>"⌯ ❨ تعيين كلايش الاوامر ❩ ⌯"]],
[['text'=>"المجموعات ،🗳‘"],['text'=>"تحديث السورس"],['text'=>"ِحظر مجموعة ،🏮‘"]],
[['text'=>"حذف قناة الاشتراك"],['text'=>"قناة الاشتراك"],['text'=>"تعيين قناة الاشتراك"]],
[['text'=>"تعطيل الاشتراك الاجباري"],['text'=>"تفعيل الاشتراك الاجباري"]],
[['text'=>"حذف رد التواصل ،📧‘"],['text'=>"تعيين رد التواصل ،📨‘"]],
[['text'=>"جلب رد التواصل ،📩‘"]],
[['text'=>"تعطيل التواصل ،📤‘"],['text'=>"تفعيل التواصل ،📥‘"]],
[['text'=>"حذف رد عام ،📭‘"],['text'=>"الردود العام ،📪‘"],['text'=>"اضف رد عام ،📬‘"]],
[['text'=>"حذف رد الخاص ،📃‘"],['text'=>"تعيين رد الخاص ،📄‘"]],
[['text'=>"جلب رد الخاص ،📑‘"],['text'=>"تفعيل رد الخاص ،📁‘"] ],
[['text'=>"• تفعيل الترحيب ؛ ⚜"],['text'=>"• تعطيل الترحيب ؛ ❎"]],
[['text'=>"• تعيين الترحيب ؛ 💥"],['text'=>"• حذف الترحيب ؛ 🗑"]],
[['text'=>"• جلب الترحيب ؛ 👻"],['text'=>"تعطيل رد الخاص ،📂‘"]],

],
'resize_keyboard'=>true
])
]);
}
}
if($text=="⌯ ❨ تعيين كلايش الاوامر ❩ ⌯" &&  $tc == "private"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"❗️🚸 ⌯ *ٱهلٱ بك مجددٱ عزيزي ٱڵـمطور *\n❗️🔑 ⌯ *ٱڵيك ٱلٱزرٱر ٱڵخٱصه بتعديل وتغيير كلايش سورس ديف بروكس فقط ٱضغط على ٱلٱمر ٱڵذي تريد تنفيذه*",
'parse_mode'=>'MarkDown',
'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[ ['text'=>"حذف كليشة الايدي"],['text'=>"تعيين كليشة الايدي"] ],
[['text'=>"تعيين امر الاوامر"]],
[['text'=>"تعيين امر م3"],['text'=>"تعيين امر م2"],['text'=>"تعيين امر م1"]],
[['text'=>"تعيين امر م5"],['text'=>"تعيين امر م4"]],
[['text'=>"تعيين امر م8"],['text'=>"تعيين امر م7"],['text'=>"تعيين امر م6"]],
[['text'=>"تعيين امر م9"]],
[['text'=>"استعادة كلايش الاوامر"]],
[ ['text'=>"رجوع ،🔙‘"] ],
],
'resize_keyboard'=>true
])
]);
}
}
$wel = file_get_contents("wel.txt");
$well = file_get_contents("well.txt");
if ($text == "• تعيين الترحيب ؛ 💥" or $text == "تعيين الترحيب" and in_array($from_id,$Dev)){
file_put_contents("well.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال الترحيب الان ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $well =="nam" and in_array($from_id,$Dev)){
file_put_contents("wel.txt",$text); 
file_put_contents("well.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ الترحيب بنجاح ✓
🔱✣ اصبح الان  ❨ $text ❩
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$wel = file_get_contents("wel.txt");
if($text=="• جلب الترحيب ؛ 👻" and $wel == null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• { `رد الترحيب الحالي` } •

👨‍✈️❉ اهلا انا اسمي $namebot 🎗
🏅❉ عملي هو حماية مجموعتك •
☢❉ من الاعلانات والتفليش ..الخ •
🔰❉ خالي من الاعلانات وآمن •

⚜❉ ارفعني ادمن وارسل تفعيل •

♻️
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"",'url'=>"t.me/DBROKSBOT"]],
]])
]);
}}}
$wel = file_get_contents("wel.txt");
if($text=="• جلب الترحيب ؛ 👻" and $wel != null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• { `رد الترحيب الجديد` } •

$wel
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"",'url'=>"t.me/DBROKSBOT"]],
]])
]);
}}}
if($text =="• تعطيل الترحيب ؛ ❎" ){
if (in_array($from_id,$Dev)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تعطيل الترحيب ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("openwel.txt","✖");
}
}
if($text =="• تفعيل الترحيب ؛ ⚜" ){
if (in_array($from_id,$Dev)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تفعيل الترحيب ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("openwel.txt","✔");
}
}
if ($text == "• حذف الترحيب ؛ 🗑" or $text == "حذف الترحيب" and in_array($from_id,$Dev)){
file_put_contents("wel.txt","");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ تم بنجاح حذف كليشه الترحيب ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
# --     Source DevProx     --
elseif($text =="ِحظر مجموعة ،🏮‘" ){
if ($tc == "private") {
if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯» ٱڵمطۄر \n🔑 ⌯ ٱرسـڵ (غادر + ايدي المجموعه) \n ✓",'reply_to_message_id'=>$message_id,]);}}}
# --     Source DevProx     --
elseif(strpos($text  , "مغادره") !== false or strpos($text  , "غادر") !== false) {
$text = str_replace(['غادر ','مغادره '],'',$text );
if(in_array($from_id,$Dev) or in_array($from_id,$developer)) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ تـۖم مغٱدرة ٱڵمجموعة \n❗️🔑 ⌯ تـۖم حذف جميع بيٱنٱتهٱ ",'reply_to_message_id'=>$message_id,]);
bot('sendmessage',['chat_id'=>$text,'text'=>"⚠️ ⌯ بٱمر من ٱڵمطور تم مغٱدرة هذه ٱڵـمجموعة ",]);
bot('LeaveChat',['chat_id'=>$text,]);
unlink("data/$text.json");
unlink("data/$text/$text.json");
rmdir("data/$text");}}
# --     Source DevProx     --
if(strpos($text,"كللهم") !== false){
$abs = str_replace(['كللهم','-','1','2','3','4','5','6','7','8','9','0'],'',$text );
$abs1 = str_replace(['كللهم '],'',$text );
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendMessage',['chat_id'=>$abs1,'text'=>"$abs",'parse_mode'=>'MarkDown',]);
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم ٱرسٱڵ ٱڵرسٱڵه بنجٱح \n ✓",'parse_mode'=>'MarkDown','reply_to_message_id'=>$message_id,]);}}
# --     Source DevProx     --
mkdir("data/addrd");
$opption = file_get_contents("data/addrd/$chat_id/opption.txt");
$get_from_id = file_get_contents("data/addrd/$chat_id/from_id.txt");
$get_rd = file_get_contents("data/addrd/$chat_id/getrd.txt");
$opption_ = file_get_contents("data/addrd/opption.txt");
$get_from_id1_ = file_get_contents("data/addrd/from_id.txt");
$absRDall = file_get_contents("data/addrd/getrd.txt");
$get_from_id_1 = explode("\n",$get_from_id1_);
$get_from_id_ = explode("\n",$get_from_id);
# --     Source DevProx     --
if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$useradmin) || in_array($from_id,$getCCmember) ) {
if($text == "اضف رد"){
mkdir("data/addrd/$chat_id");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/$chat_id/media/sticker");
mkdir("data/addrd/$chat_id/media/video");
mkdir("data/addrd/$chat_id/media/videonote");
mkdir("data/addrd/$chat_id/media/document");
mkdir("data/addrd/$chat_id/media/photo");
mkdir("data/addrd/$chat_id/media/audio");
mkdir("data/addrd/$chat_id/media/contact");
file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
file_put_contents("data/addrd/$chat_id/opption.txt","IQABS");
bot("SendMessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ حسنٱ ٱرسـڵ ٱڵكلمة ٱلٱن ",'reply_to_message_id'=>$message->message_id, ]);}

if($text and in_array($from_id,$get_from_id_) and $opption == "IQABS"){
file_put_contents("data/addrd/$chat_id/opption.txt","abs");
file_put_contents("data/addrd/$chat_id/mod.txt",$text);
file_put_contents("data/addrd/$chat_id/media/media.txt",$text);
file_put_contents("data/addrd/$chat_id/getrd.txt", "- ". $text . "\n" , FILE_APPEND);
bot("SendMessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ ٱرسـڵ ٱڵـرد 
❗️🔑 ⌯ يمكنك أضآفة : 
⌯ ( نص • بصمه • متحركه • ملصق • صوره • فيديو • اغنيه) ⌯ ",'reply_to_message_id'=>$message->message_id, ]);}

if($message and in_array($from_id,$get_from_id_) and $opption == "abs"){
file_put_contents("data/addrd/$chat_id/opption.txt","");
$IQABS3 = file_get_contents("data/addrd/$chat_id/mod.txt");
$IQABS4 = file_get_contents("data/addrd/$chat_id/media/media.txt");

$IQABS2 = fopen("data/addrd/$chat_id/mod.txt", "a") or die("Unable to open file!"); 
fwrite($IQABS2, "$IQABS3\n");
fclose($IQABS2);

$IQABS5 = fopen("data/addrd/$chat_id/media/media.txt", "a") or die("Unable to open file!"); 
fwrite($IQABS5, "$IQABS4\n");
fclose($IQABS5);

file_put_contents("data/addrd/$chat_id/$IQABS3.txt",$text);
file_put_contents("data/addrd/$chat_id/mod.txt","");
file_put_contents("data/addrd/$chat_id/media/media.txt","");
file_put_contents("data/addrd/$chat_id/media/$IQABS4.txt",$message->voice->file_id);
file_put_contents("data/addrd/$chat_id/media/sticker/$IQABS4.txt",$message->sticker->file_id );
file_put_contents("data/addrd/$chat_id/media/document/$IQABS4.txt",$message->document->file_id);
file_put_contents("data/addrd/$chat_id/media/videonote/$IQABS4.txt",$message->video_note->file_id);
file_put_contents("data/addrd/$chat_id/media/contact/$IQABS4.txt",$message->contact->phone_number);
file_put_contents("data/addrd/$chat_id/media/video/$IQABS4.txt",$message->video->file_id);
file_put_contents("data/addrd/$chat_id/media/photo/$IQABS4.txt",$message->photo[0]->file_id);
file_put_contents("data/addrd/$chat_id/media/audio/$IQABS4.txt",$message->audio->file_id );
bot("SendMessage",["chat_id"=>$chat_id,"text"=>"❗️☻ تـۖم حفـۨظ ٱڵـرد ٱڵـجـډيـډ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);}
# --     Source DevProx     --
if($text == "حذف رد" or $text == "مسح رد"){
file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
file_put_contents("data/addrd/$chat_id/opption.txt","delete");
bot("SendMessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ حسنٱ ٱرسـڵ ٱڵكلمة ڵحذفهٱ ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);}

if(file_exists("data/addrd/$chat_id/$text.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
$str = str_replace("- $text","",$get_rd);
file_put_contents("data/addrd/$chat_id/getrd.txt",$str);
file_put_contents("data/addrd/$chat_id/from_id.txt","");
file_put_contents("data/addrd/$chat_id/opption.txt","");
unlink("data/addrd/$chat_id/$text.txt");
unlink("data/addrd/$chat_id/media/$text.txt");
unlink("data/addrd/$chat_id/media/sticker/$text.txt");
unlink("data/addrd/$chat_id/media/video/$text.txt");
unlink("data/addrd/$chat_id/media/videonote/$text.txt");
unlink("data/addrd/$chat_id/media/document/$text.txt");
unlink("data/addrd/$chat_id/media/photo/$text.txt");
unlink("data/addrd/$chat_id/media/audio/$text.txt");
unlink("data/addrd/$chat_id/media/contact/$text.txt");
bot("SendMessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ ٱڵكلمة *($text)*
❗️⚠️ ⌯ تـۖم حـذفهٱ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);}

elseif(!file_exists("data/addrd/$chat_id/$text.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
file_put_contents("data/addrd/$chat_id/from_id.txt","");
file_put_contents("data/addrd/$chat_id/opption.txt","");
bot("SendMessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ هذٱ ٱڵرد غير موجود",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);}
# --     Source DevProx     --
if($text == "حذف الردود" or $text == "مسح الردود"){
$links = __DIR__ . "/data/addrd/$chat_id";
$media = __DIR__ . "/data/addrd/$chat_id/media";
$media_contact = __DIR__ . "/data/addrd/$chat_id/media/contact";
$media_document = __DIR__ . "/data/addrd/$chat_id/media/document";
$media_video = __DIR__ . "/data/addrd/$chat_id/media/video";
$media_videonote = __DIR__ . "/data/addrd/$chat_id/media/videonote";
$media_photo = __DIR__ . "/data/addrd/$chat_id/media/photo";
$media_sticker = __DIR__ . "/data/addrd/$chat_id/media/sticker";
$media_audio = __DIR__ . "/data/addrd/$chat_id/media/audio";

$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);

foreach ($files as $file) {
if(is_file($links . "/" . $file)){
unlink ($links . "/" .$file);
}
}
foreach ($files_media as $filemedia) {
if(is_file($media . "/" . $filemedia)){
unlink ($media . "/" .$filemedia);
}
}
foreach ($files_media_contact as $file_media_contact) {
if(is_file($media_contact . "/" . $file_media_contact)){
unlink ($media_contact . "/" .$file_media_contact);
}
}
foreach ($files_media_document as $file_media_document) {
if(is_file($media_document . "/" . $file_media_document)){
unlink ($media_document . "/" .$file_media_document);
}
}
foreach ($files_media_video as $file_media_video) {
if(is_file($media_video . "/" . $file_media_video)){
unlink ($media_video . "/" .$file_media_video);
}
}
foreach ($files_media_videonote as $file_media_videonote) {
if(is_file($media_videonote . "/" . $file_media_videonote)){
unlink ($media_videonote . "/" .$file_media_videonote);
}
}
foreach ($files_media_photo as $file_media_photo) {
if(is_file($media_photo . "/" . $file_media_photo)){
unlink ($media_photo . "/" .$file_media_photo);
}
}
foreach ($files_media_sticker as $file_media_sticker) {
if(is_file($media_sticker . "/" . $file_media_sticker)){
unlink ($media_sticker . "/" . $file_media_sticker);
}
}
foreach ($files_media_audio as $file_media_audio) {
if(is_file($media_audio . "/" . $file_media_audio)){
unlink ($media_audio . "/" . $file_media_audio);
}
}
bot("SendMessage",['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم حـذف ٱڵرډوډ \n ✓",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);
file_put_contents("data/addrd/$chat_id/getrd.txt", "");
}
# --     Source DevProx     --
if($text == "الردود" and $get_rd != NULL and $get_rd != "" and $get_rd != " " and $get_rd != "\n\n" and $get_rd != "\n" and $get_rd != "\n\n\n" and $get_rd != "\n\n\n\n" and $get_rd != "\n\n\n\n\n" and $get_rd != "\n\n\n\n\n\n"){
bot("SendMessage",['chat_id'=>$chat_id,'text'=>"❗️🎒 ⌯ رډوډ ٱڵمجموعة :
〰️➖〰️➖〰️➖〰️➖〰️
$get_rd",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);}

if($text == "الردود" and $get_rd == NULL || $get_rd == "" || $get_rd == " " || $get_rd == "\n\n" || $get_rd == "\n" || $get_rd == "\n\n\n" || $get_rd == "\n\n\n\n" || $get_rd == "\n\n\n\n\n" || $get_rd == "\n\n\n\n\n\n"){
bot("SendMessage",['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ لٱ تـوجـد رډوډ مضـٱفـة",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);}}
# --     Source DevProx     --
if(in_array($from_id,$Dev)){
if($text == "اضف رد عام" || $text == "اضف رد عام ،📬‘"){
mkdir("data/addrd/media");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/media/sticker");
mkdir("data/addrd/media/video");
mkdir("data/addrd/media/videonote");
mkdir("data/addrd/media/document");
mkdir("data/addrd/media/photo");
mkdir("data/addrd/media/audio");
mkdir("data/addrd/media/contact");

file_put_contents("data/addrd/from_id.txt",$from_id);
file_put_contents("data/addrd/opption.txt","I_GG1ZZ");
bot("SendMessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ حسنٱ ٱرسـڵ ٱڵكلمة ٱلٱن ",'reply_to_message_id'=>$message->message_id, ]);}
if($text and in_array($from_id,$get_from_id_1) and $opption_ == "I_GG1ZZ"){
file_put_contents("data/addrd/opption.txt","SaveIngRD");
file_put_contents("data/addrd/mod.txt",$text);
file_put_contents("data/addrd/media/media.txt",$text);
file_put_contents("data/addrd/getrd.txt", "- ". $text . "\n" , FILE_APPEND);
bot("SendMessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ ٱرسـڵ ٱڵـرد 
❗️🔑 ⌯ يمكنك أضآفة : 
⌯ ( نص • بصمه • متحركه • ملصق • صوره • فيديو • اغنيه) ⌯ ",'reply_to_message_id'=>$message->message_id, ]);}

if($message and in_array($from_id,$get_from_id_1) and $opption_ == "SaveIngRD"){
file_put_contents("data/addrd/opption.txt","");
$IQABS3 = file_get_contents("data/addrd/mod.txt");
$IQABS4 = file_get_contents("data/addrd/media/media.txt");

$IQABS2 = fopen("data/addrd/mod.txt", "a") or die("Unable to open file!"); 
fwrite($IQABS2, "$IQABS3\n");
fclose($IQABS2);

$IQABS5 = fopen("data/addrd/media/media.txt", "a") or die("Unable to open file!"); 
fwrite($IQABS5, "$IQABS4\n");
fclose($IQABS5);

file_put_contents("data/addrd/$IQABS3.txt",$text);
file_put_contents("data/addrd/mod.txt","");
file_put_contents("data/addrd/media/media.txt","");
file_put_contents("data/addrd/media/$IQABS4.txt",$message->voice->file_id);
file_put_contents("data/addrd/media/sticker/$IQABS4.txt",$message->sticker->file_id );
file_put_contents("data/addrd/media/document/$IQABS4.txt",$message->document->file_id);
file_put_contents("data/addrd/media/videonote/$IQABS4.txt",$message->video_note->file_id);
file_put_contents("data/addrd/media/contact/$IQABS4.txt",$message->contact->phone_number);
file_put_contents("data/addrd/media/video/$IQABS4.txt",$message->video->file_id);
file_put_contents("data/addrd/media/photo/$IQABS4.txt",$message->photo[0]->file_id);
file_put_contents("data/addrd/media/audio/$IQABS4.txt",$message->audio->file_id );
bot("SendMessage",["chat_id"=>$chat_id,"text"=>"❗️☻ تـۖم حفـۨظ ٱڵـرد ٱڵـجـډيـډ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);}
# --     Source DevProx     --
if($text == "حذف رد عام" || $text == "حذف رد عام ،📭‘" ){
file_put_contents("data/addrd/from_id.txt",$from_id);
file_put_contents("data/addrd/opption.txt","I_delete");
bot("SendMessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ حسنٱ ٱرسـڵ ٱڵكلمة ڵحذفهٱ ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);}

if(file_exists("data/addrd/$text.txt") and in_array($from_id,$get_from_id_1) and $opption_ == "I_delete"){
$str = str_replace("- $text","",$absRDall);
file_put_contents("data/addrd/getrd.txt",$str);
file_put_contents("data/addrd/from_id.txt","");
file_put_contents("data/addrd/opption.txt","");
unlink("data/addrd/$text.txt");
unlink("data/addrd/media/$text.txt");
unlink("data/addrd/media/sticker/$text.txt");
unlink("data/addrd/media/video/$text.txt");
unlink("data/addrd/media/videonote/$text.txt");
unlink("data/addrd/media/document/$text.txt");
unlink("data/addrd/media/photo/$text.txt");
unlink("data/addrd/media/audio/$text.txt");
unlink("data/addrd/media/contact/$text.txt");
bot("SendMessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ ٱڵكلمة *($text)*
❗️⚠️ ⌯ تـۖم حـذفهٱ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);}

elseif(!file_exists("data/addrd/$text.txt") and in_array($from_id,$get_from_id_1) and $opption_ == "I_delete"){
file_put_contents("data/addrd/from_id.txt","");
file_put_contents("data/addrd/opption.txt","");
bot("SendMessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ لٱ تـوجـد رډوډ مضـٱفـة",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);}
# --     Source DevProx     --
if($text == "حذف ردود العام" || $text == "حذف ردود المطور"){
$links = __DIR__ . "/data/addrd";
$media = __DIR__ . "/data/addrd/media";
$media_contact = __DIR__ . "/data/addrd/media/contact";
$media_document = __DIR__ . "/data/addrd/media/document";
$media_video = __DIR__ . "/data/addrd/media/video";
$media_videonote = __DIR__ . "/data/addrd/media/videonote";
$media_photo = __DIR__ . "/data/addrd/media/photo";
$media_sticker = __DIR__ . "/data/addrd/media/sticker";
$media_audio = __DIR__ . "/data/addrd/media/audio";

$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);

foreach ($files as $file) {
if(is_file($links . "/" . $file)){
unlink ($links . "/" .$file);
}
}
foreach ($files_media as $filemedia) {
if(is_file($media . "/" . $filemedia)){
unlink ($media . "/" .$filemedia);
}
}
foreach ($files_media_contact as $file_media_contact) {
if(is_file($media_contact . "/" . $file_media_contact)){
unlink ($media_contact . "/" .$file_media_contact);
}
}
foreach ($files_media_document as $file_media_document) {
if(is_file($media_document . "/" . $file_media_document)){
unlink ($media_document . "/" .$file_media_document);
}
}
foreach ($files_media_video as $file_media_video) {
if(is_file($media_video . "/" . $file_media_video)){
unlink ($media_video . "/" .$file_media_video);
}
}
foreach ($files_media_videonote as $file_media_videonote) {
if(is_file($media_videonote . "/" . $file_media_videonote)){
unlink ($media_videonote . "/" .$file_media_videonote);
}
}
foreach ($files_media_photo as $file_media_photo) {
if(is_file($media_photo . "/" . $file_media_photo)){
unlink ($media_photo . "/" .$file_media_photo);
}
}
foreach ($files_media_sticker as $file_media_sticker) {
if(is_file($media_sticker . "/" . $file_media_sticker)){
unlink ($media_sticker . "/" . $file_media_sticker);
}
}
foreach ($files_media_audio as $file_media_audio) {
if(is_file($media_audio . "/" . $file_media_audio)){
unlink ($media_audio . "/" . $file_media_audio);
}
}
bot("SendMessage",['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم حـذف رډوډ ٱڵـمطور \n ✓",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);
file_put_contents("data/addrd/getrd.txt", "");
}
# --     Source DevProx     --
if($text == "الردود العامه" || $text == "الردود العام ،📪‘" || $text == "ردود المطور" and $absRDall != NULL and $absRDall != "" and $absRDall != " " and $absRDall != "\n\n" and $absRDall != "\n" and $absRDall != "\n\n\n" and $absRDall != "\n\n\n\n" and $absRDall != "\n\n\n\n\n" and $absRDall != "\n\n\n\n\n\n"){
bot("SendMessage",['chat_id'=>$chat_id,'text'=>"❗️🎒 ⌯ رډوډ ٱڵـمطور : 
〰️➖〰️➖〰️➖〰️➖〰️
$absRDall",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);}

if($text == "الردود العامه" || $text == "الردود العام ،📪‘"and $absRDall == NULL || $absRDall == "" || $absRDall == " " || $absRDall == "\n\n" || $absRDall == "\n" || $absRDall == "\n\n\n" || $absRDall == "\n\n\n\n" || $absRDall == "\n\n\n\n\n" || $absRDall == "\n\n\n\n\n\n"){
bot("SendMessage",['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ لٱ تـوجـد رډوډ مضـٱفـة",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);}}
# --     Source DevProx     --
if($message->text and file_exists("data/addrd/$text.txt")) {
$Aabs = file_get_contents("data/addrd/$text.txt");
bot('SendMessage',['chat_id'=>$chat_id,'text'=>$Aabs,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,]);}
if($message->text and file_exists("data/addrd/media/$text.txt")) {
$Aabs = file_get_contents("data/addrd/media/$text.txt");
bot('Sendvoice',['chat_id'=>$chat_id,'voice'=>$Aabs,'reply_to_message_id'=>$message->message_id,]);}
if($message->text and file_exists("data/addrd/media/audio/$text.txt")) {
$Aabs = file_get_contents("data/addrd/media/audio/$text.txt");
bot('SendAudio',['chat_id'=>$chat_id,'audio'=>$Aabs,'reply_to_message_id'=>$message->message_id,]);}
if($message->text and file_exists("data/addrd/media/sticker/$text.txt")) {
$Aabs = file_get_contents("data/addrd/media/sticker/$text.txt");bot('sendsticker',['chat_id'=>$chat_id,'sticker'=>$Aabs,'reply_to_message_id'=>$message->message_id,]);}
if($message->text and file_exists("data/addrd/media/video/$text.txt")) {
$Aabs = file_get_contents("data/addrd/media/video/$text.txt");
bot('Sendvideo',['chat_id'=>$chat_id,'video'=>$Aabs,'caption'=>$message->caption,'reply_to_message_id'=>$message->message_id,]);}
if($message->text and file_exists("data/addrd/media/photo/$text.txt")) {
$Aabs = file_get_contents("data/addrd/media/photo/$text.txt");
bot('Sendphoto',['chat_id'=>$chat_id,'photo'=>$Aabs,'caption'=>$message->caption,'reply_to_message_id'=>$message->message_id,]);}
if($message->text and file_exists("data/addrd/media/videonote/$text.txt")) {
$Aabs = file_get_contents("data/addrd/media/videonote/$text.txt");
bot('Sendvideonote',['chat_id'=>$chat_id,'video_note'=>$Aabs,'reply_to_message_id'=>$message->message_id,]);}
if($message->text and file_exists("data/addrd/media/document/$text.txt")) {
$Aabs = file_get_contents("data/addrd/media/document/$text.txt");
bot('SendDocument',['chat_id'=>$chat_id,'document'=>$Aabs,'reply_to_message_id'=>$message->message_id,]);}
if($message->text and file_exists("data/addrd/media/contact/$text.txt")) {
$Aabs = file_get_contents("data/addrd/media/contact/$text.txt");
bot('SendContact',['chat_id'=>$chat_id,'phone_number'=>$Aabs,'first_name'=>$message->from->first_name,'last_name'=>$message->from->last_name,'reply_to_message_id'=>$message->message_id,]);}
# --     Source DevProx     --
if($settings["lock"]["rdodsg"] == "مفعڵه"){
if($message->text and file_exists("data/addrd/$chat_id/$text.txt")) {
$Aabs = file_get_contents("data/addrd/$chat_id/$text.txt");
bot('SendMessage',['chat_id'=>$chat_id,'text'=>$Aabs,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,]);}}
if($settings["lock"]["rdodsg"] == "مفعڵه"){
if($message->text and file_exists("data/addrd/$chat_id/media/$text.txt")) {
$Aabs = file_get_contents("data/addrd/$chat_id/media/$text.txt");
bot('Sendvoice',['chat_id'=>$chat_id,'voice'=>$Aabs,'reply_to_message_id'=>$message->message_id,]);}}
if($settings["lock"]["rdodsg"] == "مفعڵه"){
if($message->text and file_exists("data/addrd/$chat_id/media/audio/$text.txt")) {
$Aabs = file_get_contents("data/addrd/$chat_id/media/audio/$text.txt");
bot('SendAudio',['chat_id'=>$chat_id,'audio'=>$Aabs,'reply_to_message_id'=>$message->message_id,]);}}
if($settings["lock"]["rdodsg"] == "مفعڵه"){
if($message->text and file_exists("data/addrd/$chat_id/media/sticker/$text.txt")) {
$Aabs = file_get_contents("data/addrd/$chat_id/media/sticker/$text.txt");
bot('sendsticker',['chat_id'=>$chat_id,'sticker'=>$Aabs,'reply_to_message_id'=>$message->message_id,]);}}
if($settings["lock"]["rdodsg"] == "مفعڵه"){
if($message->text and file_exists("data/addrd/$chat_id/media/video/$text.txt")) {
$Aabs = file_get_contents("data/addrd/$chat_id/media/video/$text.txt");
bot('Sendvideo',['chat_id'=>$chat_id,'video'=>$Aabs,'caption'=>$message->caption,'reply_to_message_id'=>$message->message_id,]);}}
if($settings["lock"]["rdodsg"] == "مفعڵه"){
if($message->text and file_exists("data/addrd/$chat_id/media/photo/$text.txt")) {
$Aabs = file_get_contents("data/addrd/$chat_id/media/photo/$text.txt");
bot('Sendphoto',['chat_id'=>$chat_id,'photo'=>$Aabs,'caption'=>$message->caption,'reply_to_message_id'=>$message->message_id,]);}}
if($settings["lock"]["rdodsg"] == "مفعڵه"){
if($message->text and file_exists("data/addrd/$chat_id/media/videonote/$text.txt")) {
$Aabs = file_get_contents("data/addrd/$chat_id/media/videonote/$text.txt");
bot('Sendvideonote',['chat_id'=>$chat_id,'video_note'=>$Aabs,'reply_to_message_id'=>$message->message_id,]);}}
if($settings["lock"]["rdodsg"] == "مفعڵه"){
if($message->text and file_exists("data/addrd/$chat_id/media/document/$text.txt")) {
$Aabs = file_get_contents("data/addrd/$chat_id/media/document/$text.txt");
bot('SendDocument',['chat_id'=>$chat_id,'document'=>$Aabs,'reply_to_message_id'=>$message->message_id,]);}}
if($settings["lock"]["rdodsg"] == "مفعڵه"){
if($message->text and file_exists("data/addrd/$chat_id/media/contact/$text.txt")) {
$Aabs = file_get_contents("data/addrd/$chat_id/media/contact/$text.txt");
bot('SendContact',['chat_id'=>$chat_id,'phone_number'=>$Aabs,'first_name'=>$message->from->first_name,'last_name'=>$message->from->last_name,'reply_to_message_id'=>$message->message_id,]);}}
# --     Source DevProx     --
if( $text =="الاعدادات" or $text =="اعدادات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
$locklink = $settings["lock"]["link"];
$markdown = $settings["lock"]["markdown"];
$editmd = $settings["lock"]["editmd"];
$lockusername = $settings["lock"]["username"];
$locktag = $settings["lock"]["tag"];
$rdodsg = $settings["lock"]["rdodsg"];
$ar = $settings["lock"]["ar"];
$inline = $settings["lock"]["inline"];
$en = $settings["lock"]["en"];
$spam = $settings["lock"]["spam"];
$is_sticker = $settings["lock"]["is_sticker"]; 
$lockedit = $settings["lock"]["edit"];
$lockfshar = $settings["lock"]["fshar"];
$lockkaf = $settings["lock"]["kaf"];
$locktaf = $settings["lock"]["taf"];
$lockfarsi = $settings["lock"]["farsi"];
$lockbots = $settings["lock"]["bot"];
$lockforward = $settings["lock"]["forward"];
$locktg = $settings["lock"]["tgservic"];
$lockreply = $settings["lock"]["reply"];
$lockdocument = $settings["lock"]["document"];
$lockgif = $settings["lock"]["gif"];
$iduser = $settings["lock"]["iduser"];
$lockvideo_note = $settings["lock"]["video_msg"];
$locklocation = $settings["lock"]["location"];
$lockphoto = $settings["lock"]["photo"];
$lockcontact = $settings["lock"]["contact"];
$lockaudio = $settings["lock"]["audio"];
$lockvoice = $settings["lock"]["voice"];
$locksticker = $settings["lock"]["sticker"];
$lockgame = $settings["lock"]["game"];
$lockvideo = $settings["lock"]["video"];
$locktext = $settings["lock"]["text"];
$mute_all = $settings["lock"]["mute_all"];
$welcome = $settings["information"]["welcome"];
$add = $settings["information"]["add"];
$setwarn = $settings["information"]["setwarn"];
$charge = $settings["information"]["charge"];
$lockauto = $settings["lock"]["lockauto"];
$lockcharacter = $settings["lock"]["lockcharacter"];
$startlock = $settings["information"]["timelock"];
$endlock = $settings["information"]["timeunlock"];
$startlockcharacter = $settings["information"]["pluscharacter"];
$endlockcharacter = $settings["information"]["downcharacter"];
$linkr = $settings["lock"]["linkr"];
$linkkick = $settings["lock"]["linkk"];
$botk = $settings["lock"]["botk"];
$userres = $settings["lock"]["userr"];
$forwardr = $settings["lock"]["forwardr"];
$forwardk = $settings["lock"]["forwardk"];
$forwardw = $settings["lock"]["forwardw"];
$linkw = $settings["lock"]["linkw"];
$userw = $settings["lock"]["userw"];
$userkick = $settings["lock"]["userk"];
$byee = $settings["information"]["bye"];
$lockgamess = $settings["lock"]["gamess"];
$getlinks = $settings["lock"]["getlink"];
$text = str_replace("| فعال |","","❗️🎒 ⌯ اعدادات المجموعة ⌯» ⤈
〰️➖〰️➖〰️➖〰️➖〰️
❗️🗯 ⌯ ٱڵرد ⌯» $lockreply 
❗️🧩 ⌯ ٱڵروٱبط ⌯» $locklink 
❗️♟ ⌯ ٱڵمعرف ⌯» $lockusername 
❗️🕹 ⌯ ٱڵمٱركدٱون ⌯» $markdown 
❗️🧬 ⌯ ٱڵتوجيه ⌯» $lockforward 
❗️🚸 ⌯ ٱڵبوتٱت ⌯» $lockbots 
❗️🥁 ⌯ ٱلٱشعٱرٱت ⌯» $locktg 
❗️🖲 ⌯ ٱلٱونلٱين ⌯» $inline 
❗️🎬 ⌯ ٱڵفيديو ⌯» $lockvideo 
❗️🔖 ⌯ ٱڵهٱشتٱك ⌯» $locktag 
❗️🖇 ⌯ ٱڵتكرٱر ⌯» $spam 
❗️🎭 ⌯ ٱڵمڵصقٱت ⌯» $locksticker 
❗️🛠 ⌯ ٱڵتعديل ⌯» $lockedit 
❗️🎤 ⌯ ٱڵصوت ⌯» $lockaudio 
❗️🎧 ⌯ ٱڵبصمٱت ⌯» $lockvoice 
❗️📑 ⌯ ٱڵكلٱيش ⌯» $lockcharacter 
❗️🎨 ⌯ ٱڵمتحركه ⌯» $lockgif 
❗️📕 ⌯ ٱڵعربيه ⌯» $ar 
❗️📘 ⌯ ٱلٱنكڵيزيه ⌯» $en 
❗️📙 ⌯ ٱڵـفٱرسية ⌯» $lockfarsi
❗️🔖 ⌯ ٱڵصور ⌯» $lockphoto 
❗️💳 ⌯ ٱلٱيدي ⌯» $iduser 
❗️🔞 ⌯ ٱڵفشٱر ⌯» $lockfshar 
❗️📿 ⌯ ٱڵكفر ⌯» $lockkaf
❗️🧿 ⌯ ٱڵطٱئفيه ⌯» $locktaf
❗️📱 ⌯ ٱڵموٱقع ⌯» $locklocation 
❗️🗂 ⌯ ٱڵمڵفٱت ⌯» $lockdocument 
❗️📟 ⌯ ٱڵجهات ⌯» $lockcontact 
❗️🎮 ⌯ ٱلٱلعٱب ⌯» $lockgame 
❗️📋 ⌯ ٱڵردود ⌯» $rdodsg 
❗️💬 ⌯ ٱڵدردشه ⌯» $locktext 
❗️🗺 ⌯ تعديڵ ٱڵميديٱ ⌯» $editmd 
❗️📣 ⌯ بصمة ٱڵفيديو ⌯» $lockvideo_note 
❗️💫 ⌯ ٱڵمڵصقٱت ٱڵمتحركه ⌯» $is_sticker 
〰️➖〰️➖〰️➖〰️➖〰️
❗️🎒 ⌯ اعدادات اخرى للمجموعه ⌯» ⤈
〰️➖〰️➖〰️➖〰️➖〰️
❗️🧩 ⌯ ٱڵروٱبط بٱڵتقييد ⌯» $linkr 
❗️♟ ⌯ ٱڵمعرف بٱڵتقييد ⌯» $userres 
❗️🧬 ⌯ ٱڵتوجيه بٱڵتقييد ⌯» $forwardr 
❗️🧩 ⌯ ٱڵروٱبط بٱڵطرد ⌯» $linkkick 
❗️♟ ⌯ ٱڵمعرف بٱڵطرد ⌯» $userkick 
❗️🚸 ⌯ ٱڵبوتٱت بٱڵطرد ⌯» $botk 
❗️🧬 ⌯ ٱڵتوجيه بٱڵطرد ⌯» $forwardk 
❗️🧩 ⌯ ٱڵروٱبط بٱڵتحذير ⌯» $linkw 
❗️♟ ⌯ ٱڵمعرف بٱڵتحذير ⌯» $userw 
❗️🧬 ⌯ ٱڵتوجيه بٱڵتحذير ⌯» $forwardw 
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
👨‍💻 ¦ ⌯ لُلُاسِـتْـفَـسِارَ⌯ » [@$DevUser]
");
$text2 = str_replace("| غير مفعل |","","$text");
bot('sendmessage',[ 'chat_id'=>$chat_id,'text'=>"$text2",'reply_to_message_id'=>$message_id,]);}}
# --     Source DevProx     --
if($text == "بوت غادر" or $text == "$namebot غادر"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ تـۖم مغٱدرة ٱڵمجموعة \n❗️🔑 ⌯ تـۖم حذف جميع بيٱنٱتهٱ ",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
bot('LeaveChat',['chat_id'=>$chat_id,]);
unlink("data/$chat_id.json");
unlink("data/$chat_id/$chat_id.json");
rmdir("data/$chat_id");}}
# --     Source DevProx     --
elseif($text  == 'تعطيل' ){
if (in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯» ❨ [$name20](tg://user?id=$from_id) ❩ \nڵقد تـۖم تـعطيـۧڵ ٱڵمجـمۄعة بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
unlink("data/$chat_id/$chat_id.json");}} 
  # --     Source DevProx     --
if($text =="ضع قوانين" or $text =="وضع قوانين" or $text =="اضف قوانين"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){ 
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ ضع قوانين + الكليشة 
❗️🔑 ⌯ ٱستخدم ٱڵدوٱڵ ٱلٱتية ڵڵطبع 
〰️➖〰️➖〰️➖〰️➖〰️
time ⇝ ڵطبع ٱڵوقت
username ⇝ ڵطبع ٱڵمعرف 
gpname ⇝ ڵطبع ٱسم ٱڵمجـمۄعة",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}
# --     Source DevProx     --
elseif( $text =="القوانين"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$vipmem) && !in_array($from_id,$developer) ){
if ($tc == 'group' | $tc == 'supergroup'){  
$date = date('Y-m-d');
$date2 = date("H:i");
$text1 = $settings["information"]["rules"];
$text = str_replace(["gpname","username","time"],["$namegroup","[@$username]","$date | $date2"],"$text1");
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"$text",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}
else
{
date_default_timezone_set('Asia/Baghdad');
$date = date('Y-m-d');
$date2 = date("H:i");
$text1 = $settings["information"]["rules"];
$text = str_replace(["gpname","username","time"],["$namegroup","[@$username]","$date | $date2"],"$text1");
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"$text",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}
# --     Source DevProx     --
elseif (strpos($text  , 'ضع قوانين ') !== false or strpos($text  , 'وضع قوانين ') !== false or strpos($text  , 'اضف قوانين ') !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$code = str_replace(['ضع قوانين  ','وضع قوانين  ','اضف قوانين  '],'',$text );
$plus = mb_strlen("$code");
if($plus < 100000) {
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯» ❨  ❨ $first_name ❩ \n🔑 ⌯ تـۖم وضع قوٱنين ٱڵمجموعة \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["information"]["rules"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ لٱ يمكنك وضع ٱكثر من ( 100000 ) حرف",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif( $re && $text =="تثبيت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) { 
bot('pinChatMessage',['chat_id'=>$chat_id,'message_id'=>$re_msgid]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯» ❨  ❨ $first_name ❩ \n🔑 ⌯ تـۖم تثبيت ٱڵـرسٱڵة بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}
# --     Source DevProx     --
elseif($text =="الغاء التثبيت" or $text =="الغاء تثبيت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) { 
bot('unpinChatMessage',['chat_id'=>$chat_id,'message_id'=>$re_msgid]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯» ❨  ❨ $first_name ❩ \n🔑 ⌯ تـۖم ٱڵـغٱء تثبيت ٱڵـرسالة \n ✓",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}
# --     Source DevProx     --
elseif( $re && $text == "حذف" or $text == "مسح"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) { 
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$re_msgid]);
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️☻ تـۖم حـذف ٱڵرسٱڵة مع رسٱڵة ٱلٱمـر "]);}}
# --     Source DevProx     --
elseif (strpos($text  , 'مسح ') !== false){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$num = str_replace(['مسح'],'',$text );
if ($num <= 300 && $num >= 1){
$add = $settings["information"]["added"];
if ($add == true) {
for($i=$message_id; $i>=$message_id-$num; $i--){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$i,]);}
bot('sendmessage',['chat_id' => $chat_id,'text' =>"❗️🚸 ⌯ تـۖم حـذف ( $num ) مـن ٱڵـرسٱئـڵ",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_markup'=>$inlinebutton,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}
else{bot('sendmessage',['chat_id' => $chat_id,'text'=>"❗️🚸 ⌯ ٱختر رقم ٱكثر من 1 وٱقڵ من 300",'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif (  strpos($text  , 'ضع اسم') !== false  ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$newname= str_replace(['ضع اسم'],'',$text );
bot('setChatTitle',['chat_id'=>$chat_id,'title'=>$newname]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯» ❨  ❨ $first_name ❩ \n🔑 ⌯ تـۖم تغيير ٱسم ٱڵـمجموعة \n🎗 ⌯ ٱلٱسم ٱڵجديد ⌯» $newname\n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}
# --     Source DevProx     --
$linktxt = file_get_contents("data/$chat_id/link.txt");
if( $text =="الرابط" and $caninviteusers == "❌" and $linktxt == null){
if ($tc == 'group' | $tc == 'supergroup'){  
$getlinkk = $settings["lock"]["getlink"];
if ($getlinkk == "مفتوح") {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ڵيس ڵدي صلاحية دعوة ٱڵمستخدمين 
🔑 ⌯ ٱرسڵ ڵي  ( ضع رابط ) ڵيتم حفظه
 ✓",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

$linktxt = file_get_contents("data/$chat_id/link.txt");
if( $text =="الرابط" and $linktxt != null){
if ($tc == 'group' | $tc == 'supergroup'){  
$getlinkk = $settings["lock"]["getlink"];
if ($getlinkk == "مفتوح") {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ ٱسـم ٱڵمجـمۄعة ⌯» ⤈
• $namegroup •
❗️🔑 ⌯ رآبــط ٱڵمجـمۄعة ⌯» ⤈
• $linktxt •",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
if($text== "قفل التكرار" ){
if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$manger) || in_array($from_id,$developer) ) {
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵتكرٱر بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
$settings["lock"]["spam"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);}}}

if($text== "فتح التكرار" ){
if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$manger) || in_array($from_id,$developer) ) {
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵتكرٱر بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
$settings["lock"]["spam"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);}}}
# --     Source DevProx     --
$date = date('h:i:s'); $d = date('A');
$aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
date_default_timezone_set('Asia/Baghdad');
$times = date('h:i:s');
$year = date('Y');
$month = date('n');
$day = date('j');
$time = time() + (979 * 11 + 1 + 30);
$abes1 = "http://api.telegram.org/bot".API_KEY."/getChatMembersCount?chat_id=$chat_id";
$abes2 = file_get_contents($abes1);
$abes3 = json_decode($abes2);
$abes4 = $abes3->result;
$title = $message->chat->title;
# --     Source DevProx     --
if($text == "الساعة" or $text == "الزمن" or $text == "الساعه" or $text == "الوقت"){
bot ('sendMessage',['chat_id'=>$chat_id,'text'=>"❗️⏰ ⌯ ٱڵوقت ⌯» $times
❗️📆 ⌯ ٱڵتٱريخ ⌯» ".date("Y")."/".date("n")."/".date("d")."",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,]);}
# --     Source DevProx     --
$set = file_get_contents("SudoOrders/set.txt");
$kdevelopers = file_get_contents("SudoOrders/devtext.txt");
if(in_array($from_id,$Dev)){
if($text == "ضع كليشه المطور" or $text == "وضع كليشه المطور" or $text == "تغيير كليشه المطور"){
file_put_contents("SudoOrders/set.txt","setdevtext");
bot("sendMessage",["chat_id"=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ ٱرسـڵ كڵيشة ٱڵـمطور ٱلٱن \n ✓",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}
if($text && $set =="setdevtext" and in_array($from_id,$Dev)){
file_put_contents("SudoOrders/devtext.txt",$text); 
file_put_contents("SudoOrders/set.txt","");
bot("sendmessage",["chat_id"=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم حفظ كڵيشة ٱڵـمطۄر \n ✓",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
# --     Source DevProx     --
if($text == "المطور" ){
if($tc == 'group' | $tc == 'supergroup'){
$export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
$l = $export->result;
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"$kdevelopers",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
bot('sendmessage',['chat_id'=>$Dev[0],'text'=>"🎒 ⌯ هناك من بحاجه الى مساعده ⌯» ⤈ 
〰️➖〰️➖〰️➖〰️➖〰️
🚸 ⌯ اسم الشخص ⌯» $name
🔑 ⌯ معرف الشخص ⌯» ❨ @$user ❩
💫 ⌯ ايدي الشخص ⌯» ❨ $from_id ❩
〰️➖〰️➖〰️➖〰️➖〰️
🎒 ⌯ معلومات المجموعه ⌯» ⤈ 
〰️➖〰️➖〰️➖〰️➖〰️
📣 ⌯ اسم المجموعه ⌯» ❨ $title ❩
🔅 ⌯ عدد الاعضاء ⌯» ❨ $abes4 ❩
🎗 ⌯ ايدي المجموعه ⌯» ⤈ 
❨ $chat_id ❩
🔕 ⌯ رابط المجموعه ⌯» ⤈
❨ $l ❩
〰️➖〰️➖〰️➖〰️➖〰️
❗️⏰ ⌯ ٱڵوقت ⌯» $times
❗️📆 ⌯ ٱڵتٱريخ ⌯» ".date("Y")."/".date("n")."/".date("d")."",]);}}
# --     Source DevProx     --
if($text  == "تفعيل" ) {
if ( $status == 'creator' or $status == 'administrator'){
$export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
$l = $export->result;
bot('sendMessage',[
'chat_id'=>$DevId,
'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯» ❨ [$name20](tg://user?id=$from_id) ❩ \nڵقد تـۖم تـفعيـۧڵ ٱڵمجـمۄعة بنجٱح \nتم رفع ٱلٱدمنيه وٱڵمنشئ ٱلٱسٱسي \n ✓",
'parse_mode'=>"MARKDOWN",
"message_id"=>$message_id,
]);}}
if($text  == "تفعيل" ) {
if ( $status == 'creator' or $status == 'administrator'){
$url = file_get_contents("https://api.telegram.org/bot$token/getChatMembersCount?chat_id=$chat_id");
$getchat = json_decode($url, true);
$howmember = $getchat["result"];
$add = $settings["information"]["added"];
$dataadd = $settings["information"]["dataadded"];
if ($add == true) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❗️☻ ٱڵمجـمۄعة ،بٱڵتاكيد ،مۧفعڵـة",
'reply_to_message_id'=>$message_id,
]); 
}
else
{
if($howmember >= 1){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯» ❨ [$name20](tg://user?id=$from_id) ❩ \nڵقد تـۖم تـفعيـۧڵ ٱڵمجـمۄعة بنجٱح \nتم رفع ٱلٱدمنيه وٱڵمنشئ ٱلٱسٱسي \n ✓",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,		
]); 
bot('sendmessage',[
'chat_id'=>$Dev[0],
'text'=>"🎒 ⌯ تم تفعيل مجموعه جديده ⌯» ⤈ 
〰️➖〰️➖〰️➖〰️➖〰️
🚸 ⌯ اسم الضافني ⌯» $name
🔑 ⌯ معرف الضافني ⌯» ❨ @$user ❩
💫 ⌯ ايدي الضافني ⌯» ❨ $from_id ❩
〰️➖〰️➖〰️➖〰️➖〰️
🎒 ⌯ معلومات المجموعه ⌯» ⤈ 
〰️➖〰️➖〰️➖〰️➖〰️
📣 ⌯ اسم المجموعه ⌯» ❨ $title ❩
🔅 ⌯ عدد الاعضاء ⌯» ❨ $abes4 ❩
🎗 ⌯ ايدي المجموعه ⌯» ⤈ 
❨ $chat_id ❩
🔕 ⌯ رابط المجموعه ⌯» ⤈
❨ $l ❩
〰️➖〰️➖〰️➖〰️➖〰️
❗️⏰ ⌯ ٱڵوقت ⌯» $times
❗️📆 ⌯ ٱڵتٱريخ ⌯» ".date("Y")."/".date("n")."/".date("d")."
", 
]); 
file_put_contents("data/$chat_id/spam/spamxe.txt","5");
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
$settings = '{"lock": {
"text": "مفتوح",
"photo": "مفتوح",
"link": "مفتوح",
"tag": "مفتوح",
"username": "مفتوح",
"sticker": "مفتوح",
"video": "مفتوح",
"voice": "مفتوح",
"getlink": "مفتوح",
"audio": "مفتوح",
"iduser": "مفعل",
"gif": "مفتوح",
"inline": "مفتوح",
"is_sticker": "مفتوح",
"linkr": "مفتوح",
"forwardw": "مفتوح",
"userw": "مفتوح",
"linkw": "مفتوح",
"forwardk": "مفتوح",
"botk": "مفتوح",
"userk": "مفتوح",
"linkk": "مفتوح",
"forwardr": "مفتوح",
"userr": "مفتوح",
"bot": "مفتوح",
"forward": "مفتوح",
"spam": "مفتوح",
"document": "مفتوح",
"tgservic": "مفتوح",
"edit": "مفتوح",
"reply": "مفتوح",
"contact": "مفتوح",
"location": "مفتوح",
"game": "مفتوح",
"editmd": "مفتوح",
"mute_all": "مفتوح",
"mute_all_time": "مفتوح",
"fshar": "مفتوح",
"kaf": "مفتوح",
"taf": "مفتوح",
"farsi": "مفتوح",
"lockauto": "مفتوح",
"lockcharacter": "مفتوح",
"video_msg": "مفتوح"
},
"information": {
"added": "true",
"welcome": "مفتوح",
"add": "مفتوح",
"rdodsg": "مفعڵه",
"markdown": "مفتوح",
"lockchannel": "مفتوح",
"hardmodebot": "مفتوح",
"charge": "999 يوم",
"setadd": "3",
"dataadded": "",
"en": "مفتوح",
"kickme": "مفتوح",
"ar": "مفتوح",
"expire": "",
"textwelcome": "❗️🚸 ⌯ أهـلاً بِـك عزيزي",
"rules": "لاتوجد قوانين",
"msg": "",
"timelock": "00:00",
"timeunlock": "00:00",
"pluscharacter": "300",
"downcharacter": "0",
"setwarn": "3"
}
}';
$settings = json_decode($settings,true);
$settings["information"]["expire"]="$next_date";
$settings["information"]["dataadded"]="$dateadd";
$settings["information"]["msg_id"]="$message_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] \nايدي المجموعة : [$chat_id]\n〰️➖〰️➖〰️➖〰️➖〰️\n");
fclose($gpadd);
}
else
{
if ($add != true) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❗️🚸 ⌯ عذرٱ عدد ٱلٱعضٱء قڵيڵ جدٱ
❗️🔑 ⌯ ڵيس ڵديك عڵى ٱلٱقڵ عضو وٱحد
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"$dataadd",'url'=>"https://t.me/saiko_2k"]
],
]
])
]); 
}
}
}
}
}
elseif ( $text  == "تفعيل") {
if ($status == 'creator' or $status == 'administrator'){
if ($tc == 'group' | $tc == 'supergroup'){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$howmember = $getchat["result"];
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
file_put_contents("groupslink.txt","➺ " . $namegroup . " » " . $getlinkde . "«" . "\n" , FILE_APPEND);
$add = $settings["information"]["added"];
if ($add != true) {
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯» ❨ [$name20](tg://user?id=$from_id) ❩\nڵقد تـۖم تـفعيـۧڵ ٱڵمجـمۄعة بنجٱح \nتم رفع ٱلٱدمنيه وٱڵمنشئ ٱلٱسٱسي \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);  
bot('sendmessage',['chat_id'=>$Dev[0],'text'=>"🎒 ⌯ تم تفعيل مجموعه جديده ⌯» ⤈ 
〰️➖〰️➖〰️➖〰️➖〰️
🚸 ⌯ اسم الضافني ⌯» $name
🔑 ⌯ معرف الضافني ⌯» ❨ @$user ❩
💫 ⌯ ايدي الضافني ⌯» ❨ $from_id ❩
〰️➖〰️➖〰️➖〰️➖〰️
🎒 ⌯ معلومات المجموعه ⌯» ⤈ 
〰️➖〰️➖〰️➖〰️➖〰️
📣 ⌯ اسم المجموعه ⌯» ❨ $title ❩
🔅 ⌯ عدد الاعضاء ⌯» ❨ $abes4 ❩
🎗 ⌯ ايدي المجموعه ⌯» ⤈ 
❨ $chat_id ❩
🔕 ⌯ رابط المجموعه ⌯» ⤈
❨ $l ❩
〰️➖〰️➖〰️➖〰️➖〰️
❗️⏰ ⌯ ٱڵوقت ⌯» $times
❗️📆 ⌯ ٱڵتٱريخ ⌯» ".date("Y")."/".date("n")."/".date("d")."", 
]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
$settings = '{"lock": {
"text": "مفتوح",
"photo": "مفتوح",
"link": "مفتوح",
"tag": "مفتوح",
"username": "مفتوح",
"sticker": "مفتوح",
"video": "مفتوح",
"voice": "مفتوح",
"editmd": "مفتوح",
"getlink": "مفتوح",
"audio": "مفتوح",
"iduser": "مفعل",
"gif": "مفتوح",
"is_sticker": "مفتوح",
"linkr": "مفتوح",
"forwardw": "مفتوح",
"userw": "مفتوح",
"linkw": "مفتوح",
"forwardk": "مفتوح",
"botk": "مفتوح",
"userk": "مفتوح",
"linkk": "مفتوح",
"forwardr": "مفتوح",
"userr": "مفتوح",
"markdown": "مفتوح",
"bot": "مفتوح",
"inline": "مفتوح",
"forward": "مفتوح",
"document": "مفتوح",
"tgservic": "مفتوح",
"edit": "مفتوح",
"reply": "مفتوح",
"en": "مفتوح",
"kickme": "مفتوح",
"ar": "مفتوح",
"contact": "مفتوح",
"rdodsg": "مفعڵه",
"location": "مفتوح",
"game": "مفتوح",
"mute_all": "مفتوح",
"mute_all_time": "مفتوح",
"fshar": "مفتوح",
"kaf": "مفتوح",
"taf": "مفتوح",
"farsi": "مفتوح",
"lockauto": "مفتوح",
"lockcharacter": "مفتوح",
"video_msg": "مفتوح"
},
"information": {
"added": "true",
"welcome": "مفتوح",
"add": "مفتوح",
"spamx": "5",
"lockchannel": "مفتوح",
"hardmodebot": "مفتوح",
"charge": "999 يوم",
"setadd": "3",
"dataadded": "",
"expire": "",
"msg": "",
"timelock": "00:00",
"timeunlock": "00:00",
"pluscharacter": "300",
"downcharacter": "0",
"textwelcome": "❗️🚸 ⌯ أهـلاً بِـك عزيزي",
"rules": "لاتوجد قوانين",
"setwarn": "3"
}
}';
$settings = json_decode($settings,true);
$settings["information"]["expire"]="$next_date";
$settings["information"]["dataadded"]="$dateadd";
$settings["information"]["msg_id"]="$message_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : ( $namegroup ) \nايدي المجموعة : ( $chat_id )\n〰️➖〰️➖〰️➖〰️➖〰️\n");
fclose($gpadd);
}
else{
$dataadd = $settings["information"]["dataadded"];
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯» ❨ [$name20](tg://user?id=$from_id) ❩\nڵقد تـۖم تـفعيـۧڵ ٱڵمجـمۄعة بنجٱح \nتم رفع ٱلٱدمنيه وٱڵمنشئ ٱلٱسٱسي \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);}}}}
# --     Source DevProx     --
elseif($text == "قفل الكل") {
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if($add == true) {
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ جـمـيع ٱڵـوسـآئط \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["link"]="مقفول";
$settings["lock"]["inline"]="مقفول";
$settings["lock"]["en"]="مقفول";
$settings["lock"]["ar"]="مقفول";
$settings["lock"]["photo"]="مقفول";
$settings["lock"]["is_sticker"]="مقفول";
$settings["lock"]["gif"]="مقفول";
$settings["lock"]["markdown"]="مقفول";
$settings["lock"]["document"]="مقفول";
$settings["lock"]["video"]="مقفول";
$settings["lock"]["edit"]="مقفول";
$settings["lock"]["game"]="مقفول";
$settings["lock"]["location"]="مقفول";
$settings["lock"]["contact"]="مقفول";
$settings["lock"]["editmd"]="مقفول";
$settings["lock"]["tag"]="مقفول";
$settings["lock"]["username"]="مقفول";
$settings["lock"]["audio"]="مقفول";
$settings["lock"]["reply"]="مقفول";
$settings["lock"]["tgservic"]="مقفول";
$settings["lock"]["bot"]="مقفول";
$settings["lock"]["voice"]="مقفول";
$settings["lock"]["sticker"]="مقفول";
$settings["lock"]["forward"]="مقفول";
$settings["lock"]["fshar"]="مقفول";
$settings["lock"]["kaf"]="مقفول";
$settings["lock"]["taf"]="مقفول";
$settings["lock"]["farsi"]="مقفول";
$settings["lock"]["lockcharacter"]="مقفول";
$settings["lock"]["text"]="مقفول";
$settings["lock"]["spam"]="مقفول️";
$settings["lock"]["mute_all"]="مقفول";
$settings["lock"]["mute_all_time"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}

elseif($text =="فتح الكل"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح جـمـيع ٱڵـوسـآئط \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["link"]="مفتوح";
$settings["lock"]["inline"]="مفتوح";
$settings["lock"]["en"]="مفتوح";
$settings["lock"]["ar"]="مفتوح";
$settings["lock"]["photo"]="مفتوح";
$settings["lock"]["is_sticker"]="مفتوح";
$settings["lock"]["gif"]="مفتوح";
$settings["lock"]["markdown"]="مفتوح";
$settings["lock"]["document"]="مفتوح";
$settings["lock"]["video"]="مفتوح";
$settings["lock"]["edit"]="مفتوح";
$settings["lock"]["game"]="مفتوح";
$settings["lock"]["location"]="مفتوح";
$settings["lock"]["contact"]="مفتوح";
$settings["lock"]["editmd"]="مفتوح";
$settings["lock"]["tag"]="مفتوح";
$settings["lock"]["username"]="مفتوح";
$settings["lock"]["audio"]="مفتوح";
$settings["lock"]["reply"]="مفتوح";
$settings["lock"]["tgservic"]="مفتوح";
$settings["lock"]["bot"]="مفتوح";
$settings["lock"]["voice"]="مفتوح";
$settings["lock"]["sticker"]="مفتوح";
$settings["lock"]["forward"]="مفتوح";
$settings["lock"]["fshar"]="مفتوح";
$settings["lock"]["kaf"]="مفتوح";
$settings["lock"]["taf"]="مفتوح";
$settings["lock"]["farsi"]="مفتوح";
$settings["lock"]["lockcharacter"]="مفتوح";
$settings["lock"]["text"]="مفتوح";
$settings["lock"]["spam"]="مفتوح";
$settings["lock"]["mute_all"]="مفتوح";
$settings["lock"]["mute_all_time"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($text == "قفل التفليش") {
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if($add == true) {
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم قفـڵ ٱڵتفڵيش بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["linkw"]="مقفول";
$settings["lock"]["forwardw"]="مقفول";
$settings["lock"]["userw"]="مفتوح";
$settings["lock"]["photo"]="مقفول";
$settings["lock"]["bot"]="مقفول";
$settings["lock"]["video"]="مقفول";
$settings["lock"]["gif"]="مقفول";
$settings["lock"]["sticker"]="مقفول";
$settings["lock"]["lockcharacter"]="مقفول";
$settings["lock"]["fshar"]="مقفول";
$settings["lock"]["kaf"]="مقفول";
$settings["lock"]["taf"]="مقفول";
$settings["lock"]["farsi"]="مقفول";
$settings["lock"]["spam"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}

elseif($text == "فتح التفليش"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم فـتـۧح ٱڵتفڵيش بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["lock"]["link"]="مفتوح";
$settings["lock"]["forward"]="مفتوح";
$settings["lock"]["photo"]="مفتوح";
$settings["lock"]["bot"]="مفتوح";
$settings["lock"]["video"]="مفتوح";
$settings["lock"]["gif"]="مفتوح";
$settings["lock"]["sticker"]="مفتوح";
$settings["lock"]["lockcharacter"]="مفتوح";
$settings["lock"]["fshar"]="مفتوح";
$settings["lock"]["kaf"]="مفتوح";
$settings["lock"]["taf"]="مفتوح";
$settings["lock"]["farsi"]="مفتوح";
$settings["lock"]["spam"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
$user = $update->message->from->username;
$message_id = $message->message_id;
$gp_get = file_get_contents("statistics/groups.txt");
$groups = explode("\n",$gp_get);
$IQABS = file_get_contents("statistics/abs.txt");
$pirvate = explode("\n",file_get_contents("statistics/pirvate.txt"));
$forward = $update->message->forward_from;
$statspv = count($pirvate)-1;
$statsgp = count($groups)-1;
# --     Source DevProx     --
if($text == "المجموعات" or $text == "المجموعات ،🗳‘"){bot('sendMessage',['chat_id'=>$chat_id,'text'=>"❗️🎒 ⌯ مجموعٱت ٱڵـبوت ⌯» ⤈ \n " . $gp_get,'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,]);}
# --     Source DevProx     --
if($text == "اذاعه بالتوجيه" || $text == "اذاعه عام بالتوجيه" || $text == "اذاعه للكل بالتوجيه" || $text =="اذاعه عام بالتوجيه ،🔔‘" and $from_id == $DevId){
file_put_contents("statistics/abs.txt","abs");
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ ٱرسڵ ٱڵرسٱڵه ٱلٱن ڵتوجيهٱ \n ✓",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}
if($message and $IQABS == "abs" and $from_id == $DevId ){
for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',['chat_id'=>$groups[$i],'from_chat_id'=>$chat_id,'message_id'=>$message_id,]);} 
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',['chat_id'=>$pirvate[$i],'from_chat_id'=>$chat_id,'message_id'=>$message->message_id,
]);
unlink("statistics/abs.txt");
} 
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ تـۖم ٱذٱعة رسٱڵتك بٱڵتوجية \n❗️🔑 ⌯ في ⌯» ❨ $statsgp ❩ مجموعة \n❗️🎗 ⌯ ‏والى ⌯» ❨ $statspv ❩ مشترك 
 ✓",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);} 
# --     Source DevProx     --
if($text and $tc == "private" and !in_array($from_id, $pirvate)){
file_put_contents("statistics/pirvate.txt", "$from_id\n",FILE_APPEND);}
if($text and $tc == "supergroup" and !in_array($chat_id, $groups)){
file_put_contents("statistics/groups.txt", "$chat_id\n",FILE_APPEND);}
# --     Source DevProx     --
if($text == "اذاعه خاص" || $text =="اذاعه خاص ،🔊‘" and $from_id == $DevId){
file_put_contents("statistics/abs.txt","pvsd");
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ ٱرسڵ ٱڵرسٱڵه ٱلٱن لٱذٱعتهٱ \n ✓",'parse_mode'=>"MarkDown",'reply_to_message_id'=>$message->message_id]);}
if($message and $IQABS == "pvsd" and $from_id == $DevId ){
for ($i=0; $i<count($pirvate); $i++) { 
bot('sendMessage',['chat_id'=>$pirvate[$i],'text'=>"$text",'parse_mode'=>"MarkDown",'disable_web_page_preview'=>true,
]);
file_put_contents("statistics/abs.txt","DevProx");
} 
$statspv = count($pirvate)-1;
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ تـۖم ٱذٱعة رسٱڵتك بنجٱح\n❗️🔑 ⌯ الى ⌯» ❨ $statspv ❩ مشترك 
 ✓",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}
# --     Source DevProx     --
if ($text == "اذاعه للكل" || $text == "اذاعه عام" || $text == "اذاعه"  ||$text == "اذاعه عام ،📣‘" and $from_id == $DevId){
file_put_contents("statistics/abs.txt","absd");
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ ٱرسڵ ٱڵرسٱڵه ٱلٱن لٱذٱعتهٱ \n ✓",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}
if($message and $IQABS == "absd" and $from_id == $DevId ){
for ($i=0; $i<count($groups); $i++) { 
bot('sendMessage',['chat_id'=>$groups[$i],'text'=>"$text",'parse_mode'=>"MarkDown",'disable_web_page_preview'=>true,]);} 
for ($i=0; $i<count($pirvate); $i++) { 
bot('sendMessage',['chat_id'=>$pirvate[$i],'text'=>"$text",'parse_mode'=>"MarkDown",'disable_web_page_preview'=>true,
]);
unlink("statistics/abs.txt");
} 
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ تـۖم ٱذٱعة رسٱڵتك بنجٱح \n❗️🔑 ⌯ في ⌯» ❨ $statsgp ❩ مجموعة \n❗️🎗 ⌯ ‏والى ⌯» ❨ $statspv ❩ مشترك 
 ✓",'parse_mode'=>"MarkDown",'reply_to_message_id'=>$message->message_id]);}
# --     Source DevProx     --
if($text == "اذاعه خاص بالتوجيه" || $text == "اذاعه خاص بالتوجيه ،🔉‘" and $from_id == $DevId){
file_put_contents("statistics/abs.txt","pvfwd");
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ ٱرسڵ ٱڵرسٱڵه ٱلٱن ڵتوجيهٱ \n ✓",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}
if($message and $IQABS == "pvfwd" and $from_id == $DevId ){
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',['chat_id'=>$pirvate[$i],'from_chat_id'=>$chat_id,'message_id'=>$message->message_id,
]);
unlink("statistics/abs.txt");
}
$statspv = count($pirvate)-1;
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ تـۖم ٱذٱعة رسٱڵتك بٱڵتوجية \n❗️🔑 ⌯ الى ⌯» ❨ $statspv ❩ مشترك 
 ✓",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}
# --     Source DevProx     --
if($from_id == $DevId){ if($text == "الاحصائيات" || $text == "الاحصائيات ‘🗃،"){ bot("SendMessage",[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ عدد ٱڵمشتركين ⌯» ❨ $statspv ❩
🔑 ⌯ عدد ٱڵمجموعٱت ⌯» ❨ $statsgp ❩
 ✓", 'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->message_id ]);} }
if($from_id == $DevId){ if($text == "عدد المشتركين" || $text == "المشتركين" || $text == "المشتركين ،📋‘"){ bot("SendMessage",[ 'chat_id'=>$chat_id, 'text'=>"🚸 ⌯ عدد ٱڵمشتركين ⌯» ❨ $statspv ❩", 'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->message_id ]);} }
# --     Source DevProx     --
if (strpos($text  , "ضع ترحيب") !== false or strpos($text  , "وضع ترحيب") !== false or strpos($text  , "اضف ترحيب") !== false) {
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$we = str_replace(['ضع ترحيب ','اضف ترحيب ','وضع ترحيب'],'',$text);
$plus = mb_strlen("$we");
if($plus < 100000) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ تـۖم تعيين ٱڵترحيب ٱڵـجـډيـډ 
❗️🔑 ⌯ ٱڵترحيب ٱڵـجـډيـډ هو :
〰️➖〰️➖〰️➖〰️➖〰️
$we",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["information"]["textwelcome"]="$we";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ لٱ يمكنك وضع ٱكثر من ( 100000 ) حرف",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif ($text == "الترحيب" or $text == "جلب الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$text = $settings["information"]["textwelcome"];
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"$text",'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,]);
$settings["information"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);}}}
# --     Source DevProx     --
elseif ($text  == "تفعيل الترحيب" or $text  == "تفعيل ترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$text = $settings["information"]["textwelcome"];
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم تـفعيـۧڵ ٱڵترحيب بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["information"]["welcome"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif ($text  == "تعطيل الترحيب" or $text  == "تعطيل ترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم تـعطيـۧڵ ٱڵترحيب بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["information"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($rt && $text == "طرد"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$vipmem) && !in_array($re_id,$developer)) {
bot('KickChatMember',['chat_id'=>$chat_id,'user_id'=>$re_id]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ [$usew] ❩\n🔑 ⌯ *تـۖم طردة من ٱڵـمجموعة* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);} 
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ *عذرٱ لٱ تستطيع طرد* ⌯» ⤈ \n❨ [$usew] ❩\n🔑 ⌯  *ڵان تمت ترقيتهُ مسبقٱ* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif( $re && $text == "حظر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$vipmem) && !in_array($re_id,$developer)) {
bot('KickChatMember',['chat_id'=>$chat_id,'user_id'=>$re_id]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ [$usew] ❩\n🔑 ⌯ *تـۖم حظرة من ٱڵـمجموعة* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ *عذرٱ لٱ تستطيع حظر* ⌯» ⤈ \n❨ [$usew] ❩\n🔑 ⌯  *ڵان تمت ترقيتهُ مسبقٱ* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($rt && $text == "الغاء حظر" or $re && $text == "الغاء الحظر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
bot('unbanChatMember',['chat_id'=>$chat_id,'user_id'=>$re_id]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ [$usew] ❩\n🔑 ⌯ *تـۖم ٱڵغٱء حظرة من ٱڵـمجموعة* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ *عذرٱ لٱ تستطيع ٱڵغٱء حظر* ⌯» ⤈ \n❨ [$usew] ❩\n🔑 ⌯  *ڵان تمت ترقيتهُ مسبقٱ* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}

$user = $update->message->from->username;
# --     Source DevProx     --
mkdir("data/banduser");
$get_Busers = file_get_contents("data/banduser/$chat_id.txt");
$get_Buser = explode("\n",$get_Busers);
$kick = explode(" " ,$text);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if($kick[0] == "طرد" || $kick[0] == "حظر" and isset($kick[1])){
$text = str_replace(['حظر ','طرد '],'',$text);
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
if($text != $DevId && !in_array($text,$Dev) and !in_array($text,$manger) and !in_array($text,$developer) and !in_array($text,$vipmem) and !in_array($text,$admin_user) and !in_array($text,$Dev)){
if(strpos($text ,"@") !== false and !in_array($text,$get_Buser)){
file_put_contents("data/banduser/$chat_id.txt","\n" . $text ."\n" , FILE_APPEND);}
if($stat !== false and !in_array("@$username",$get_Buser)){
file_put_contents("data/banduser/$chat_id.txt","\n" . "@$username" ."\n" , FILE_APPEND);}
bot('KickChatMember',['chat_id'=>$chat_id,'user_id'=>$id]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ $text ❩\n🔑 ⌯ *تـۖم حظرة من ٱڵـمجموعة* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ *عذرٱ لٱ تستطيع حظر* ⌯» ⤈ \n❨ $text ❩\n🔑 ⌯  *ڵان تمت ترقيتهُ مسبقٱ* \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if($kick[0] == "الغاء" and $kick[1] == "حظر" and isset($kick[2])){
$text = str_replace('الغاء حظر ','',$text);
$stat = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
if($stat != false and in_array("@$username",$get_Buser)){
$str2 = str_replace("@$username",'',$get_Busers);
$ex2 = explode("\n",$str2);
file_put_contents("data/banduser/$chat_id.txt",$ex2);}
if(strpos($text ,"@") !== false and in_array($text,$get_Buser)){
$str = str_replace("$text",'',$get_Busers);
$ex = explode("\n",$str);
file_put_contents("data/banduser/$chat_id.txt",$ex);}
bot('promoteChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id,
'can_send_messages'=>true,
]);
bot('sendmessage',['chat_id' => $chat_id,'text'=>"🚸 ⌯ *ٱڵـعضو* ⌯» ❨ $text ❩\n🔑 ⌯ *تـۖم ٱڵغٱء حظرة من ٱڵـمجموعة* \n ✓",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,'disable_web_page_preview'=>true,]);}
# --     Source DevProx     --
if($text == "حذف المحظورين" or $text == "مسح المحظورين"){
file_put_contents("data/banduser/$chat_id.txt","");
bot("SendMessage",['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم حـذف ٱڵمحظورين \n ✓",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,'disable_web_page_preview'=>true,]);}}

if($text == "المحضورين" or $text == "المحظورين" and $get_Busers != NULL || $get_Busers != ""){
bot("SendMessage",['chat_id'=>$chat_id,'text'=>"❗️🎒 ⌯ قٱئمة ٱڵـمحظورين ⌯» ⤈ 
〰️➖〰️➖〰️➖〰️➖〰️
[$get_Busers]",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,'disable_web_page_preview'=>true,]);}

if($text == "المحظورين" and $get_Busers == NULL || $get_Busers == ""){
bot("SendMessage",['chat_id'=>$chat_id,'text'=>"❗️📛 ⌯ *لٱ يوجد محظورين* ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,'disable_web_page_preview'=>true,]);}
# --     Source DevProx     --
if($text == "رابط حذف" or $text == "رابط الحذف" or $text == "اريد رابط الحذف" or $text == "اريد رابط حذف" or $text == "شمرلي رابط الحذف"){
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ [ اضغط هنا لحذف الحساب ](https://telegram.org/deactivate) 
❗️🔑 ⌯ [ اضغط هنا لديك مفاجئه ](https://t.me/saiko_2k)",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id, ]);}
# --     Source DevProx     --
if($text == "ايديي" or $text == "أيديي"){bot('SendMessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ ٱيـۧډيک ⌯» ❨ $from_id ❩",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);}
# --     Source DevProx     --
$idleft = $update->message->left_chat_member->id;
$idbot = bot('getme',['d'])->result->id;
if($update->message->left_chat_member and $idleft==$idbot){
bot('sendMessage',['chat_id'=>$Dev[0],'text'=>"❗️🎒 ⌯ قام شخص بطرد البوت ⌯» ⤈ 
〰️➖〰️➖〰️➖〰️➖〰️
🚸 ⌯ اسم الطردني ⌯» $name
🔑 ⌯ معرف الطردني ⌯» ❨ @$user ❩
💫 ⌯ ايدي الطردني ⌯» ❨ $from_id ❩
〰️➖〰️➖〰️➖〰️➖〰️
🎒 ⌯ معلومات المجموعه ⌯» ⤈ 
〰️➖〰️➖〰️➖〰️➖〰️
🚸 ⌯ اسم المجموعه ⌯» ❨ $title ❩
🔑 ⌯ ايدي المجموعه ⌯» ⤈ 
❨ $chat_id ❩
〰️➖〰️➖〰️➖〰️➖〰️
🔕 ⌯ تم حذف جميع بياناتها
〰️➖〰️➖〰️➖〰️➖〰️
❗️⏰ ⌯ ٱڵوقت ⌯» $times
❗️📆 ⌯ ٱڵتٱريخ ⌯» ".date("Y")."/".date("n")."/".date("d")."",]);
unlink("data/$chat_id.json");
unlink("data/$chat_id/$chat_id.json");
rmdir("data/$chat_id");}
# --     Source DevProx     --
if($text =="السورس" || $text =="سورس"){
bot("sendmessage",['chat_id'=>$chat_id,'text'=>"🗄 ⌯ ❨ Source DevProx ❩
〰️➖〰️➖〰️➖〰️➖〰️
👋 ⁞ اهلا بك عزيزي في سورس ↫ ديف بروكس
🔥 ⁞ [قناة السورس](t.me/SAIKO_2K)
〰️➖〰️➖〰️➖〰️➖〰️",'parse_mode'=>'MarkDown','disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,]);}
# --     Source DevProx     --
if($text == "تحديث" and in_array($from_id,$Dev) or $text == "تحديث ،♻️‘" and in_array($from_id,$Dev)){
bot ('sendMessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ تـۖم تـۧـحـډيـث ٱڵـبـۄت",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,]);}
# --     Source DevProx     --
if($text =="تعطيل التواصل" or $text =="تعطيل التواصل ،📤‘"){
if (in_array($from_id,$Dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم تـعطيـۧڵ ٱڵتوٱصڵ بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
file_put_contents("SudoOrders/twasllock.txt","النواصل معطل");}}

if($text =="تفعيل التواصل" or $text =="تفعيل التواصل ،📥‘"){
if (in_array($from_id,$Dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم تـفعيـۧڵ ٱڵتوٱصڵ بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
file_put_contents("SudoOrders/twasllock.txt","التواصل مفعل");}}
# --     Source DevProx     --
$Twassl = file_get_contents("SudoOrders/set.txt");
$Twasl = file_get_contents("SudoOrders/twasl.txt");
$locktwas = file_get_contents("SudoOrders/twasllock.txt");
if($text != "/start" and $Twasl == null and !in_array($from_id,$Dev)){
if($locktwas == "التواصل مفعل"){
if($tc == 'private'){
bot('forwardMessage',['chat_id'=>$Dev[0],'from_chat_id'=>$chat_id,'message_id'=>$update->message->message_id,'text'=>$text,]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ تـۖم ٱرسٱڵ رسٱڵتك ٱڵى ٱڵمطور
🔑 ⌯ معرف ٱڵمطور ⌯» [@$DevUser]
 ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,]);}}}

$Twassl = file_get_contents("SudoOrders/set.txt");
$Twasl = file_get_contents("SudoOrders/twasl.txt");
$locktwas = file_get_contents("SudoOrders/twasllock.txt");
if($text != "/start" and $Twasl != null and !in_array($from_id,$Dev)){
if($locktwas == "التواصل مفعل"){
if($tc == 'private'){
bot('forwardMessage',['chat_id'=>$Dev[0],'from_chat_id'=>$chat_id,'message_id'=>$update->message->message_id,'text'=>$text,]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"$Twasl",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[  
[['text'=>'✅ ⌯ تابع قناة السورس -','url'=>'https://t.me/saiko_2k']],]])]);}}}
# --     Source DevProx     --
if($message->reply_to_message->forward_from->id and in_array($from_id,$Dev)){
bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>$text,]);
bot('sendmessage',['chat_id'=>$Dev[0],'text'=>"🚸 ⌯ تـۖم ٱرسٱڵ رسٱڵتك بنجٱح
 ✓",]);}
# --     Source DevProx     --
$twasl = file_get_contents("SudoOrders/twasl.txt");
if($text=="جلب رد التواصل ،📩‘" or $text=="جلب رد التواصل" and $twasl == null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ تـۖم ٱرسٱڵ رسٱڵتك ٱڵى ٱڵمطور
🔑 ⌯ معرف ٱڵمطور ⌯» [@$DevUser]
 ✓",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,]);}}}

$twasl = file_get_contents("SudoOrders/twasl.txt");
if($text=="جلب رد التواصل ،📩‘" or $text=="جلب رد التواصل" and $twasl != null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"$twasl",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,]);}}}
# --     Source DevProx     --
$Twassl = file_get_contents("SudoOrders/set.txt");
$Twasl = file_get_contents("SudoOrders/twasl.txt");
if ($text == "تعيين رد التواصل ،📨‘" and in_array($from_id,$Dev) or $text == "تعيين رد التواصل" and in_array($from_id,$Dev)){
file_put_contents("SudoOrders/set.txt","settwasl");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ حسنٱ ٱرسـڵ كليشة ٱڵتوٱصڵ ٱلٱن ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}

if ($text == "حذف رد التواصل ،📧‘" and in_array($from_id,$Dev) or $text == "حذف رد التواصل" and in_array($from_id,$Dev)){
file_put_contents("SudoOrders/twasl.txt","");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"❗️☻ تـۖم حذف كليشة ٱڵتوٱصڵ بنجٱح",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}

if($text && $Twassl =="settwasl" and in_array($from_id,$Dev)){
file_put_contents("SudoOrders/twasl.txt",$text); 
file_put_contents("SudoOrders/set.txt","");
bot("sendmessage",["chat_id"=>$chat_id,"text"=>"🚸 ⌯ تـۖم حفظ كليشة ٱڵتوٱصڵ
🔑 ⌯ ٱصبحت ٱلٱن ⌯» ❨ $text ❩",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
# --     Source DevProx     --
$absrd = array('هلو' => 'اࠗط็ـلق֯ق֯ هٞللاࠗ୨و 𖠙 🤤♥️','هلاو' => 'اࠗط็ـلق֯ق֯ هٞللاࠗ୨و 𖠙 🤤♥️','هلااو' => 'اࠗط็ـلق֯ق֯ هٞللاࠗ୨و 𖠙 🤤♥️','هلوو' => 'اࠗط็ـلق֯ق֯ هٞللاࠗ୨و 𖠙 🤤♥️','هيلاو' => 'اࠗط็ـلق֯ق֯ هٞللاࠗ୨و 𖠙 🤤♥️','هيلاوو' => 'اࠗط็ـلق֯ق֯ هٞللاࠗ୨و 𖠙 🤤♥️',
'دي' => 'آخـلُِآقٌڪڪ لُِڪڪ 𖠙 😒🔪','ديي' => 'آخـلُِآقٌڪڪ لُِڪڪ 𖠙 😒🔪','دي بابه' => 'آخـلُِآقٌڪڪ لُِڪڪ 𖠙 😒🔪','شخباركم' => 'مٱﺷ͠ يةھَہّ يـﻋ̝̚مريي ۅٱﻧـﺗ̲ـت 𖠙 🤤♥️','عبس' => 'ٲلمبرمج ماڵتي فديتهہ 😻💙 [@IQ_ABS]',
'السلام عليكم' => 'يٱھَہّلْـٱٱ ۅﻋ̝̚لْـيڪْم ٱلْـﺳ̭͠ لْـٱم 𖠙 🤤♥️','سلام عليكم' => 'يٱھَہّلْـٱٱ ۅﻋ̝̚لْـيڪْم ٱلْـﺳ̭͠ لْـٱم 𖠙 🤤♥️',
'بوت عواي' => 'اطردكك تجرب ؟ ، 😕🔪','بوت زربه' => 'اطردكك تجرب ؟ ، 😕🔪','البوت عاوي' => 'اطردكك تجرب ؟ ، 😕🔪','البوت زربه' => 'اطردكك تجرب ؟ ، 😕🔪',
'السورس عاوي' => 'لُِآ سوورس خـآلُِتڪ دِي لُِڪ 𖠙 😒🔪','سورس عاوي' => 'لُِآ سوورس خـآلُِتڪ دِي لُِڪ 𖠙 😒🔪','السورس زربه' => 'لُِآ سوورس خـآلُِتڪ دِي لُِڪ 𖠙 😒🔪','سورس ديف بروكس' => 'لُِآ سوورس خـآلُِتڪ دِي لُِڪ 𖠙 😒🔪','سورس بروكس' => 'لُِآ سوورس خـآلُِتڪ دِي لُِڪ 𖠙 😒🔪','سورس عبس' => 'لُِآ سوورس خـآلُِتڪ دِي لُِڪ 𖠙 😒🔪',
'اكلك' => 'ڪوولُِ مآڪوولُِ لُِآحٍدِ 𖠙 😉♥️','اكلج' => 'ڪوولُِ مآڪوولُِ لُِآحٍدِ 𖠙 😉♥️','اكلكم' => 'ڪوولُِ مآڪوولُِ لُِآحٍدِ 𖠙 😉♥️',
'نايمين' => 'طُآمسين ووعٍيوونڪ 𖠙 😪🖤ۦ','ميتين' => 'طُآمسين ووعٍيوونڪ 𖠙 😪🖤ۦ','باي' => 'أُرٌجُعُ عٍيدِهـآآ مٍوو تنِْسةه 𖠙 🤤♥️',
'بااي' => 'أُرٌجُعُ عٍيدِهـآآ مٍوو تنِْسةه 𖠙 🤤♥️','اولي احسن' => 'أُرٌجُعُ عٍيدِهـآآ مٍوو تنِْسةه 𖠙 🤤♥️','باي انام' => 'أُرٌجُعُ عٍيدِهـآآ مٍوو تنِْسةه 𖠙 🤤♥️',
'شونك' => 'مٱﺷ͠ يةھَہّ يـﻋ̝̚مريي ۅٱﻧـﺗ̲ـت 𖠙 🤤♥️','شونج' => 'مٱﺷ͠ يةھَہّ يـﻋ̝̚مريي ۅٱﻧـﺗ̲ـت 𖠙 🤤♥️','شلونك' => 'مٱﺷ͠ يةھَہّ يـﻋ̝̚مريي ۅٱﻧـﺗ̲ـت 𖠙 🤤♥️','شلونج' => 'مٱﺷ͠ يةھَہّ يـﻋ̝̚مريي ۅٱﻧـﺗ̲ـت 𖠙 🤤♥️','شونكم' => 'مٱﺷ͠ يةھَہّ يـﻋ̝̚مريي ۅٱﻧـﺗ̲ـت 𖠙 🤤♥️','شلونكم' => 'مٱﺷ͠ يةھَہّ يـﻋ̝̚مريي ۅٱﻧـﺗ̲ـت 𖠙 🤤♥️','شخبارك' => 'مٱﺷ͠ يةھَہّ يـﻋ̝̚مريي ۅٱﻧـﺗ̲ـت 𖠙 🤤♥️',
);
foreach ( $absrd as $absrd1 => $absrd2 ) {
if($settings["lock"]["rdodsg"] == "مفعڵه") {
if($text == $absrd1){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>$absrd2,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id]);}}}
# --     Source DevProx     --
$game = json_decode(file_get_contents('game.json'),true);
$from_name = $message->from->first_name;
$get_game = file_get_contents("game.txt");
$game1 = explode("\n",$get_game);
$iqabs = array('❗️🚸 ⌯ ٱوڵ وٱحد يرتبهٱ { ل ، س ، ا ، ق ، ت ، ب ،ا } يربح','❗️🚸 ⌯ ٱوڵ وٱحد يرتبهٱ { ه ، ا ، ع ، ر ، ا } يربح','❗️🚸 ⌯ ٱوڵ وٱحد يرتبهٱ { ر ، و ، ح ، س } يربح','❗️🚸 ⌯ ٱوڵ وٱحد يرتبهٱ { ن ، ف ، ه ، ق } يربح','❗️🚸 ⌯ ٱوڵ وٱحد يرتبهٱ { و ، ن ، ي ، ا ، ف } يربح','❗️🚸 ⌯ ٱوڵ وٱحد يرتبهٱ { ن ، و ، ه ، ب ، ز } يربح','❗️🚸 ⌯ ٱوڵ وٱحد يرتبهٱ { ر ، ك ، و ، س ، ت ، ن ، ا ، ي } يربح','❗️🚸 ⌯ ٱوڵ وٱحد يرتبهٱ { ا ، ن ، م ، ل ، ي } يربح','❗️🚸 ⌯ ٱوڵ وٱحد يرتبهٱ { و ، ه ، ق ، ه } يربح','❗️🚸 ⌯ ٱوڵ وٱحد يرتبهٱ { ف ، ي ، س ، ه ، ن } يربح','❗️🚸 ⌯ ٱوڵ وٱحد يرتبهٱ { ج ، ا ، د ، ج ، ه } يربح','❗️🚸 ⌯ ٱوڵ وٱحد يرتبهٱ { س ، م ، ر ، د ، ه } يربح','❗️🚸 ⌯ ٱوڵ وٱحد يرتبهٱ { ا ، ن ، ا ، و ، ل } يربح','❗️🚸 ⌯ ٱوڵ وٱحد يرتبهٱ { ه ، غ ، ف ، ر ، } يربح','❗️🚸 ⌯ ٱوڵ وٱحد يرتبهٱ { ج ، ه ، ث ، ل ، ا } يربح','❗️🚸 ⌯ ٱوڵ وٱحد يرتبهٱ { خ ، م ، ب ، ط } يربح');
$get_iqabs = array_rand($iqabs, 1);
$fast = array('❗️🚸 ⌯ ٱسرع وٱحد يرسڵ { عباس } يربح','❗️🚸 ⌯ ٱسرع وٱحد يرسڵ { بغداد } يربح','❗️🚸 ⌯ ٱسرع وٱحد يرسڵ { قناة } يربح','❗️🚸 ⌯ ٱسرع وٱحد يرسڵ { ديف بروكس } يربح','❗️🚸 ⌯ ٱسرع وٱحد يرسڵ { رمضان } يربح','❗️🚸 ⌯ ٱسرع وٱحد يرسڵ { لابتوب } يربح','❗️🚸 ⌯ ٱسرع وٱحد يرسڵ { كمبيوتر } يربح','❗️🚸 ⌯ ٱسرع وٱحد يرسڵ { تلفون } يربح','❗️🚸 ⌯ ٱسرع وٱحد يرسڵ { مطبخ } يربح','❗️🚸 ⌯ ٱسرع وٱحد يرسڵ { اليمن } يربح','❗️🚸 ⌯ ٱسرع وٱحد يرسڵ { سوريا } يربح','❗️🚸 ⌯ ٱسرع وٱحد يرسڵ { العراق } يربح','❗️🚸 ⌯ ٱسرع وٱحد يرسڵ { السعوديه } يربح','❗️🚸 ⌯ ٱسرع وٱحد يرسڵ { مصر } يربح','❗️🚸 ⌯ ٱسرع وٱحد يرسڵ { السودان } يربح');
$faster = array_rand($fast, 1);
$mthal = array('❗️🚸 ⌯ ٱكمڵ ٱڵمثٱڵ ٱڵتٱڵي
{ لكل حالة مقاله ولكل .... برع } ','❗️🚸 ⌯ ٱكمڵ ٱڵمثٱڵ ٱڵتٱڵي
{ عادت .... الى عادتها القديمه } ','❗️🚸 ⌯ ٱكمڵ ٱڵمثٱڵ ٱڵتٱڵي
{ من .... العلى سهر الليالي } ','❗️🚸 ⌯ ٱكمڵ ٱڵمثٱڵ ٱڵتٱڵي
{ مخرب .... الف عمار } ','❗️🚸 ⌯ ٱكمڵ ٱڵمثٱڵ ٱڵتٱڵي
{ من .... لقي } ','❗️🚸 ⌯ ٱكمڵ ٱڵمثٱڵ ٱڵتٱڵي
{ ادخلها من ..... واخرجها من الثانيه } ','❗️🚸 ⌯ ٱكمڵ ٱڵمثٱڵ ٱڵتٱڵي
{ ادق من خيط .... } ','❗️🚸 ⌯ ٱكمڵ ٱڵمثٱڵ ٱڵتٱڵي
{ اذا التقت .... هانت الحقوق } ','❗️🚸 ⌯ ٱكمڵ ٱڵمثٱڵ ٱڵتٱڵي
{ كل .... فيه خير } ','❗️🚸 ⌯ ٱكمڵ ٱڵمثٱڵ ٱڵتٱڵي
{ كما تدين .... } ','❗️🚸 ⌯ ٱكمڵ ٱڵمثٱڵ ٱڵتٱڵي
{ الصميل خرج من .... } ',' ❗️🚸 ⌯ ٱكمڵ ٱڵمثٱڵ ٱڵتٱڵي
{ اللي مايعرف .... يشويه } ',' ❗️🚸 ⌯ ٱكمڵ ٱڵمثٱڵ ٱڵتٱڵي
{ الهربات كثير و ..... وحده } ',' ❗️🚸 ⌯ ٱكمڵ ٱڵمثٱڵ ٱڵتٱڵي
{ القبيلي .... نفسه } '
);
$qui1 = array('❗️🚸 ⌯ سؤٱڵ ⌯» ماهو اسرع المخلوقات البحريه على الاطلاق؟!','❗️🚸 ⌯ سؤٱڵ ⌯» ماهي اقوى انواع الحجارة؟!','❗️?? ⌯ سؤٱڵ ⌯» ماهي السورة التي ذكر فيها بالعوض؟!','❗️🚸 ⌯ سؤٱڵ ⌯» ماهي اول عمله اسلاميه؟!','❗️🚸 ⌯ سؤٱڵ ⌯» ماهو الحيوان الذي اذا قطعت احدى اذرعته نمت مره اخرى؟!','❗️🚸 ⌯ سؤٱڵ ⌯» ماهو اسرع الحيوان الذي يصاب بالحصبه كالانسان؟!','❗️🚸 ⌯ سؤٱڵ ⌯» ماهو العنصر الذي اذا وجد في الحليب اصبح الحليب غذاء كامل؟!','❗️🚸 ⌯ سؤٱڵ ⌯» من هو مؤسس علم الجبر؟!','❗️🚸 ⌯ سؤٱڵ ⌯» من هو اقوى الحيوانات ذاكرة؟!');
$qui2 = array_rand($qui1,1);
$ope1 = array('
❗️🚸 ⌯ مٱ هو عكس كڵمة  { جاوع }','❗️🚸 ⌯ مٱ هو عكس كڵمة  { فارغ }','❗️🚸 ⌯ مٱ هو عكس كڵمة  { سمين }','❗️🚸 ⌯ مٱ هو عكس كڵمة  { بخيل }','
❗️🚸 ⌯ مٱ هو عكس كڵمة  { شجاع }','
❗️🚸 ⌯ مٱ هو عكس كڵمة  { الخوف }','
❗️🚸 ⌯ مٱ هو عكس كڵمة  { عاقل }','
❗️🚸 ⌯ مٱ هو عكس كڵمة  { كن }','
❗️🚸 ⌯ مٱ هو عكس كڵمة  { الذهاب }','
❗️🚸 ⌯ مٱ هو عكس كڵمة  { العودة }','
❗️🚸 ⌯ مٱ هو عكس كڵمة  { مطفئه }','
❗️🚸 ⌯ مٱ هو عكس كڵمة  { الليل }','
❗️🚸 ⌯ مٱ هو عكس كڵمة  { مضلم }','
❗️🚸 ⌯ مٱ هو عكس كڵمة  { حالي }'
);
$ope2 = array_rand($ope1 ,1);
$mog1 = array('
❗️🚸 ⌯ ٱوڵ وٱحد يطڵع ٱڵمختلف يربح
{ 😫😫😫😫😩😫😫😫 }','
❗️🚸 ⌯ ٱوڵ وٱحد يطڵع ٱڵمختلف يربح
{ ✌️✌️🤘✌️✌️✌️✌️✌️ }','
❗️🚸 ⌯ ٱوڵ وٱحد يطڵع ٱڵمختلف يربح
{ 🧝‍♂🧝‍♂🧝‍♂🧝‍♂🧝‍♀🧝‍♂🧝‍♂🧝‍♂ }','
❗️🚸 ⌯ ٱوڵ وٱحد يطڵع ٱڵمختلف يربح
{ 😰😰😰😰😥😰😰😰 }','
❗️🚸 ⌯ ٱوڵ وٱحد يطڵع ٱڵمختلف يربح
{ 💏💏💏👩‍❤️‍💋‍👩💏💏💏💏 }','
❗️🚸 ⌯ ٱوڵ وٱحد يطڵع ٱڵمختلف يربح
{ 👨‍👦👨‍👧👨‍👦👨‍??👨‍👦👨‍👦👨‍??👨‍👦 }','
❗️🚸 ⌯ ٱوڵ وٱحد يطڵع ٱڵمختلف يربح
{ ❤️❤️❤️❤️🧡❤️❤️❤️️ }','
❗️🚸 ⌯ ٱوڵ وٱحد يطڵع ٱڵمختلف يربح
{ 💗💗💗💗💗💗💓💗 }');
$mog2 = array_rand($mog1, 1);
$meen1 = array('
❗️🚸 ⌯ مٱ معنى هذه ٱڵكڵمه :؟ { فحط }',' ❗️🚸 ⌯ مٱ معنى هذه ٱڵكڵمه :؟ { ذهب }',' ❗️🚸 ⌯ مٱ معنى هذه ٱڵكڵمه :؟ { عاد }','
❗️🚸 ⌯ مٱ معنى هذه ٱڵكڵمه :؟ { يلفظ }','
❗️🚸 ⌯ مٱ معنى هذه ٱڵكڵمه :؟ { خروج }','
❗️🚸 ⌯ مٱ معنى هذه ٱڵكڵمه :؟ { يراعي }','
❗️🚸 ⌯ مٱ معنى هذه ٱڵكڵمه :؟ { ينتظر }','
❗️🚸 ⌯ مٱ معنى هذه ٱڵكڵمه :؟ { مؤمن }','
❗️🚸 ⌯ مٱ معنى هذه ٱڵكڵمه :؟ { مسلم }','
❗️🚸 ⌯ مٱ معنى هذه ٱڵكڵمه :؟ { بيت }','
❗️🚸 ⌯ مٱ معنى هذه ٱڵكڵمه :؟ { محافظة }','
❗️🚸 ⌯ مٱ معنى هذه ٱڵكڵمه :؟ { دولة }');
$ras = array('113+133-2=??','876+11-9=??','197×2-190=??','44-15+15=??','13+12-13-1+4=??','900000+2-900000=??','5322+1-1=??','21+25-13=??','909+75-5=??','44-1+11=??','532+256=??','6321+4667-10000=??');
$rass = array_rand($ras, 1);
$meen2 = array_rand($meen1, 1);
mkdir("game/$chat_id");
$level = file_get_contents("game/$chat_id/game.txt");
$mthals = array_rand($mthal, 1);
if(in_array($chat_id,$game1) and $text == '244' or $text == '878'  or $text == '204'  or $text == '44'  or $text == '15'  or $text == '2' or  $text == '5322' or $text == '33' or $text == '979' or $text == '34' or $text == '788' or $text == '988'){
if($level == "gamere"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❗️🚸 ⌯ ڵقد ربحت وحصڵت عڵى نقطة 
❗️🔑 ⌯ ٱصبح ڵديك ⌯» ❨ ".$game['game'][$chat_id][$from_id]." ❩ نقطه",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","DevProx");
}}
if($text =="امثله" or $text =="امثلة"){
file_put_contents("game/$chat_id/game.txt","gamem");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفعله") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$mthal[$mthals],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="رياضيات" or $text =="الرياضيات"){
file_put_contents("game/$chat_id/game.txt","gamere");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفعله") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ras[$rass],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="كلمات" or $text =="الاسرع"){
file_put_contents("game/$chat_id/game.txt","gamew");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفعله") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$fast[$faster],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="معاني" or $text =="المعاني"){
file_put_contents("game/$chat_id/game.txt","gamees");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفعله") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$meen1[$meen2],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="اسئله" or $text =="الاسئله" or $text == "الاسئلة"){
file_put_contents("game/$chat_id/game.txt","gameq");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفعله") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$qui1[$qui2],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="المختلف" or $text =="مختلف"){
file_put_contents("game/$chat_id/game.txt","gamed");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفعله") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$mog1[$mog2],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="العكس" or $text =="عكس"){
file_put_contents("game/$chat_id/game.txt","gameo");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفعله") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ope1[$ope2],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="الترتيب" or $text =="ترتيب"){
file_put_contents("game/$chat_id/game.txt","gamet");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفعله") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$iqabs[$get_iqabs],
'reply_to_message_id'=>$message->message_id]);
}}
if(in_array($chat_id,$game1) and $text == 'سحور' or $text == 'سياره'  or $text == 'استقبال'  or $text == 'قنفه'  or $text == 'ايفون'  or $text == 'بزونه' or  $text == 'مطبخ' or $text == 'كرستيانو' or $text == 'دجاجه' or $text == 'مدرسه' or $text == 'الوان' or $text == 'غرفه' or $text == 'ثلاجه' or $text == 'قهوه' or $text == 'سفينه' or $text == 'اليمن'){
if($level == "gamet"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❗️🚸 ⌯ ڵقد ربحت وحصڵت عڵى نقطة 
❗️🔑 ⌯ ٱصبح ڵديك ⌯» ❨ ".$game['game'][$chat_id][$from_id]." ❩ نقطه",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","DevProx");
}}
if(in_array($chat_id,$game1) and $text == '🧝‍♀' or $text == '👩‍❤️‍💋‍👩'  or $text == '😩'  or $text == "🧡" or $text == " ‍‍‍👨‍👦" or $text == '💓'  or $text == '🤘'  or $text == '👨' or  $text == '😥'){
if($level == "gamed"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("gamess.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❗️🚸 ⌯ ڵقد ربحت وحصڵت عڵى نقطة 
❗️🔑 ⌯ ٱصبح ڵديك ⌯» ❨ ".$game['game'][$chat_id][$from_id]." ❩ نقطه",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","DevProx");
}}
if(in_array($chat_id,$game1) and $text == 'ينطق' or $text == 'مغادره'  or $text == 'منزل'  or $text == 'ينتظر'  or $text == 'يراعي'  or $text == 'مؤمن' or  $text == 'مسلم' or $text == 'دولة' or $text == 'دوله' or $text == 'مدينه' or $text == 'مدينة' or $text == "هرب" or $text == "رجع" or $text == "راح"){
if($level == "gamees"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("gamess.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❗️🚸 ⌯ ڵقد ربحت وحصڵت عڵى نقطة 
❗️🔑 ⌯ ٱصبح ڵديك ⌯» ❨ ".$game['game'][$chat_id][$from_id]." ❩ نقطه",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","DevProx");
}}
if(in_array($chat_id,$game1) and $text == 'شابع' or $text == 'ممتلئ'  or $text == 'مليان'  or $text == 'نحيف'  or $text == 'سخي'  or $text == 'خائف' or  $text == 'الشجاعه' or $text == 'مجنون' or $text == 'لاتكن' or $text == 'الاياب' or $text == 'الإياب' or $text == 'الرجوع' or $text == 'منيره' or $text == 'النهار' or $text == 'منير' or $text == 'مضيئ' or $text == "مالح" or $text == "حامض"){
if($level == "gameo"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("gamess.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❗️🚸 ⌯ ڵقد ربحت وحصڵت عڵى نقطة 
❗️🔑 ⌯ ٱصبح ڵديك ⌯» ❨ ".$game['game'][$chat_id][$from_id]." ❩ نقطه",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","DevProx");
}}
if(in_array($chat_id,$game1) and $text == 'شقي' or $text == 'دقه'  or $text == 'دقة'  or $text == 'حليمه'  or $text == 'حليمة'  or $text == 'طلب' or  $text == 'غلب' or $text == 'الوجوه' or $text == 'الوجوة' or $text == 'الاوجه' or $text == 'الاوجة' or $text == 'اذن' or $text == 'أذن' or $text == 'الابره' or $text == 'الابرة' or $text == "تاخير" or $text == "تدان" or $text == "الجنه" or $text == "الجنة" or $text == "الصقر" or $text == "الودافه" or $text == "قاتل"){
if($level == "gamem"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❗️🚸 ⌯ ڵقد ربحت وحصڵت عڵى نقطة 
❗️🔑 ⌯ ٱصبح ڵديك ⌯» ❨ ".$game['game'][$chat_id][$from_id]." ❩ نقطه",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","DevProx");
}}
if(in_array($chat_id,$game1) and $text == 'نجم البحر' or $text == 'الخوارزمي'  or $text == 'سمك التونه'  or $text == 'سمك التونة'  or $text == 'الالماس'  or $text == 'البقره' or  $text == 'البقرة' or $text == 'الدينار الذهبي' or $text == 'القرد' or $text == 'الحديد' or $text == 'الجمل' or $text == 'الدينار'){
if($level == "gameq"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❗️🚸 ⌯ ڵقد ربحت وحصڵت عڵى نقطة 
❗️🔑 ⌯ ٱصبح ڵديك ⌯» ❨ ".$game['game'][$chat_id][$from_id]." ❩ نقطه",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","DevProx");
}}
if(in_array($chat_id,$game1) and $text == 'كمبيوتر' or $text == 'عباس'  or $text == 'اليمن'  or $text == 'مصر'  or $text == 'السودان'  or $text == 'سوريا' or  $text == 'العراق' or $text == 'رمضان' or $text == 'لابتوب' or $text == 'تلفون' or $text == 'ديف بروكس' or $text == 'قناة' or $text == 'بغداد' or $text == 'مطبخ'){
if($level == "gamew"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❗️🚸 ⌯ ڵقد ربحت وحصڵت عڵى نقطة 
❗️🔑 ⌯ ٱصبح ڵديك ⌯» ❨ ".$game['game'][$chat_id][$from_id]." ❩ نقطه",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","DevProx");
}}
$abssmile = array('🍏','🍎','843578','9755','25677','578866','14589','🍐','🍊','🍋','🍌','🍉','🍇','🍓','🍈','🍒','🍑','🍍','🥥','🥝','🍅','🍆','🥑','🥦','??','🌶','🌽','🥕','🥔','🍠','🥐','🍞','🥖','🥨','🧀','🥚','🍳','🥞','🥓','🥩','🍗','🍖','🌭','🍔','🍟','🍕','🥪','🥙','🍼','☕️','🍵','🥤','🍶','🍺','🍻','🏀','⚽️','🏈','⚾️','🎾','🏐','🏉','🎱','🏓','🏸','🥅','🎰','🎮','🎳','🎯','🎲','🎻','🎸','🎺','🥁','🎹','🎼','🎧','🎤','🎬','🎨','🎭','🎪','🎟','🎫','🎗','🏵','🎖','🏆','🥌','🛷','🚕','7643','93289','3457','95439','378865','24568','9976','289','2288','2854','🚗','🚙','🚌','🚎','🏎','🚓','🚑','🚚','🚛','🚜','🇮🇶','⚔','🛡','🔮','🌡','💣','📌','📍','📓','📗','📂','📅','📪','📫','📬','📭','⏰','📺','🎚','☎️','📡');$AbbS = array_rand($abssmile,1);
if($text =="سمايلات" || $text =="سمايل"){
file_put_contents("game/$chat_id/game.txt","games");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفعله") {
file_put_contents("game.txt",$chat_id);bot('sendMessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ ٱوڵ وٱحد يدز هذٱ ٱڵسمٱيڵ { `$abssmile[$AbbS]` } يربح",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}}
if(in_array($text,$abssmile) and in_array($chat_id,$game1) and $level == "games"){file_put_contents("gamess.txt","");$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);file_put_contents('game.json', json_encode($game));bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"❗️🚸 ⌯ ڵقد ربحت وحصڵت عڵى نقطة 
❗️🔑 ⌯ ٱصبح ڵديك ⌯» ❨ ".$game['game'][$chat_id][$from_id]." ❩ نقطه",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);file_put_contents("game.txt","DevProx");}
if($text == "نقودي" || $text == "عدد نقودي" || $text == "نقاطي" || $text == "عدد نقاطي" and $game['game'][$chat_id][$from_id]  > 0){bot('sendMessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ ڵديك { ".$game['game'][$chat_id][$from_id]." } من نقٱط ٱڵعب ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}
if($text == "نقودي" || $text == "عدد نقودي" || $text == "نقاطي" || $text == "عدد نقاطي" and $game['game'][$chat_id][$from_id]  == NULL || $game['game'][$chat_id][$from_id]  == 0){bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"❗️🚸 ⌯ ڵيس ڵديك نقٱط ٱڵعب ٱولٱ \n❗️🔑 ⌯ ٱرسڵ ( الالعاب ) ڵڵعب",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}
if($text == "بيع نقودي" || $text == "بيع نقاطي" || $text == "بيع النقود" || $text =="بيع النقاط" and $game['game'][$chat_id][$from_id]  >= 19 and $game['game'][$chat_id][$from_id]  != null){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ تـۖم خصم ❨ 20 ❩ من نقٱطك
🔑 ⌯ تـۖم ٱضٱفة ❨ 200 ❩ رسٱڵه ڵك
 ✓",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+200);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-20);file_put_contents('game.json', json_encode($game));
}
if($text == "بيع نقودي" || $text == "بيع نقاطي" || $text == "بيع النقود" || $text =="بيع النقاط" and $game['game'][$chat_id][$from_id]  > 49 and $game['game'][$chat_id][$from_id]  != null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🚸 ⌯ تـۖم خصم ❨ 50 ❩ من نقٱطك
🔑 ⌯ تـۖم ٱضٱفة ❨ 600 ❩ رسٱڵه ڵك
 ✓",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+600);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-50);file_put_contents('game.json', json_encode($game));
}
if($text == "بيع نقودي" || $text == "بيع نقاطي" || $text == "بيع النقود" || $text =="بيع النقاط" and $game['game'][$chat_id][$from_id]  > 99 and $game['game'][$chat_id][$from_id]  != null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🚸 ⌯ تـۖم خصم ❨ 100 ❩ من نقٱطك
🔑 ⌯ تـۖم ٱضٱفة ❨ 1000 ❩ رسٱڵه ڵك
 ✓",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1000);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-100);file_put_contents('game.json', json_encode($game));
}
if($text == "رسائلي"){bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ رسٱئڵك ⌯» *❨ ".$msgs['msgs'][$chat_id][$from_id]." ❩*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);}
elseif($text == "بيع نقودي" || $text == "بيع نقاطي" || $text == "بيع النقود" || $text =="بيع النقاط" and $game['game'][$chat_id][$from_id]  == NULL || $game['game'][$chat_id][$from_id]  < 19){bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"🚸 ⌯ عذرٱ لٱ يمكنك بيع ٱڵنقاط
🔑 ⌯ يجب ٱن تكون نقٱطك ٱكثر من 20
 ✓",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);}
 # --     Source DevProx     --
if($text == "الالعاب" || $text == "اللعبه"){
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفعله"){
bot("SendMessage",['chat_id'=>$chat_id,'text'=>"*
❗️🎒 ⌯ List of games
❗️🎒  ⌯ قائمة الالعاب
〰️➖〰️➖〰️➖〰️➖〰️
❗️🧬 ⌯ ٱرسڵ ⌯» ( الاسرع ) للعب
❗️📕 ⌯ ٱرسڵ ⌯» ( امثله ) للعب
❗️🎗 ⌯ ٱرسڵ ⌯» ( ترتيب ) للعب
❗️📯 ⌯ ٱرسڵ ⌯» ( العكس ) للعب
❗️⚜️ ⌯ ٱرسڵ ⌯» ( معاني ) للعب
❗️📌 ⌯ ٱرسڵ ⌯» ( المختلف ) للعب
❗️🎨 ⌯ ٱرسڵ ⌯» ( سمايلات ) للعب
❗️🎰 ⌯ ٱرسڵ ⌯» ( رياضيات ) للعب
❗️🎭 ⌯ ٱرسڵ ⌯» ( الاسئله ) للعب
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
👨‍💻 ¦ ⌯ لُلُاسِـتْـفَـسِارَ⌯ » [@$DevUser]

*",'reply_to_message_id'=>$message->message_id,'parse_mode'=>"MARKDOWN",]);}
else{bot("SendMessage",['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ *عذرٱ ٱلٱڵعٱب معطڵة* ",'reply_to_message_id'=>$message->message_id,'parse_mode'=>"MARKDOWN",]);}}
# --     Source DevProx     --
if($text =="تعطيل الالعاب" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم تـعطيـۧڵ ٱلٱڵعٱب بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
$settings["lock"]["gamess"]="مقفله";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
elseif($text =="تفعيل الالعاب" or $text =="تفعيل اللعبه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم تـفعيـۧڵ ٱلٱڵعٱب بنجٱح \n ✓",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
$settings["lock"]["gamess"]="مفعله";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}
# --     Source DevProx     --
if($text == "حذف رسايلي" or $text == "حذف رسائلي" or $text == "مسح رسايلي" or $text == "مسح رسائلي"){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ تـۖم حذف { ".$msgs['msgs'][$chat_id][$from_id]." } من رسٱئڵك ٱڵمضٱفة",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]=0);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-20);file_put_contents('game.json', json_encode($game));}
# --     Source DevProx     --
if ($settings["lock"]["gamess"] == "مقفله"){
$gamesText = $update->message->text;
if($gamesText == "الالعاب"){
if ($tc == 'group' | $tc == 'supergroup'){
bot('SendMessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ *عذرٱ ٱلٱڵعٱب معطڵة* ",'reply_to_message_id'=>$message_id,'parse_mode'=>"MARKDOWN",]);}}}
# --     Source DevProx     --
if($text =="جوائز النقاط" or $text =="جوائز الالعاب"){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🎒 ⌯ جوائز الالعاب ⌯» ⤈ 
〰️➖〰️➖〰️➖〰️➖〰️
كل 20 نقطه = 200 رساله
كل 50 نقطه = 600 رساله
كل 100 نقطه = 1000 رساله
〰️➖〰️➖〰️➖〰️➖〰️",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);}
# --     Source DevProx     --
if(preg_match('/^(بحث) (.*)/s', $text, $stor)){ $rs = 'https://play.google.com/store/search?q='.urlencode($stor[2]); $rs1 = 'http://www.mobogenie.com/search.html?q='.urlencode($stor[2]); $rs2 = 'http://www.mobomarket.net/search?keyword='.urlencode($stor[2]); $rs3 = "http://www.apkmirror.com/?s=".urlencode($stor[2])."&post_type=app_release&searchtype=apk"; $rs4 = 'http://www.appsodo.com/search_'.urlencode($stor[2])."_1"; $rs5 = 'https://es.aptoide.com/search?query='.urlencode($stor[2])."&type=apps"; $rs6 = 'http://html5.oms.apps.opera.com/en_in/catalog.php?search='.urlencode($stor[2]); $rs7 = 'https://www.androiddrawer.com/search-results/?q='.urlencode($stor[2]);
bot('sendChatAction', [ 'chat_id'=>$chat_id, 'action'=>'typing',]);
sleep(1);
bot('sendMessage',[ 'chat_id'=>$chat_id, 'parse_mode'=>'markdown', 'disable_web_page_preview'=>true, 'text'=>"🚸 ⌯ ٱهلٱ عزيزي ⌯» [$name20](tg://user?id=$from_id)
🔑 ⌯ تم ٱنتهٱء ٱڵبحث عن ٱڵتطبيق
🎗 ⌯ روٱبط بحثك ڵڵتحميڵ ٱڵمبٱشر ⌯» ⤈  
〰️➖〰️➖〰️➖〰️➖〰️\n[Googli Play Market]($rs)\n\n[Mobogenie Market]($rs1)\n\n[Mobo Market]($rs2)\n\n[Apkmirror Market]($rs3)\n\n[Appsodo Market]($rs4)\n\n[Appoide Market]($rs5)\n\n[Opera Market]($rs5)\n\n[Androide Dwar Market]($rs7)\n",]);}
# --     Source DevProx     --
if(preg_match('/^(زخرفه) (.*)/s', $text, $match)){
$apiabs = file_get_contents("https://iq3abs.000webhostapp.com/api/z.php?text=".$match[2]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ ٱڵكڵمة { $match[2] }\n❗️🔑 ⌯ تـۖمت زخرفتهٱ ٱڵى ( 29 ) نوع \n❗️🎗 ⌯ ٱضـغط عڵى ٱڵـكڵمة ڵـنسخهٱ\n〰️➖〰️➖〰️➖〰️➖〰️\n$apiabs",
'parse_mode'=>'MarkDown','reply_to_message_id'=>$message->message_id,]);}

$abszk = file_get_contents("data/$chat_id/abszk.txt");
if($text == "زخرفة" or $text == "زخرفلي" or $text == "زخرفه" or $text == "زغرفه" or $text == "زغرفة"){
file_put_contents("data/$chat_id/abszk.txt","setzkrfa");
bot("sendMessage",[ "chat_id"=>$chat_id, "text"=>"❗️🚸 ⌯ ٱرسل ڵي ٱڵكلمة ڵزخرفتهٱ \nيمكنك ٱڵزخرفة بٱڵلغة { en } ⌯ { ar } ", 'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message_id,]);}

if($text && $abszk == "setzkrfa"){
file_put_contents("data/$chat_id/abszk.txt","");
$apiabs = file_get_contents("https://iq3abs.000webhostapp.com/api/z.php?text=".$text);
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"❗️🚸 ⌯ ٱڵكڵمة { $text }\n❗️🔑 ⌯ تـۖمت زخرفتهٱ ٱڵى ( 29 ) نوع \n❗️🎗 ⌯ ٱضـغط عڵى ٱڵـكڵمة ڵـنسخهٱ\n〰️➖〰️➖〰️➖〰️➖〰️\n$apiabs",
'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message_id,]);}
# --     Source DevProx     --
mkdir("sethelp");
$set = file_get_contents("SudoOrders/set.txt");
$help1 = file_get_contents("sethelp/help1.txt");
if ($text == "تعيين امر م1" and in_array($from_id,$Dev) or $text == "تعيين امر م١" and in_array($from_id,$Dev)){
file_put_contents("SudoOrders/set.txt","sethelp1");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"❗️☻ ⌯ ٱرسـڵ كڵيشة (م1) ٱلٱن ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
if($text && $set =="sethelp1" and in_array($from_id,$Dev)){
file_put_contents("sethelp/help1.txt",$text); 
file_put_contents("SudoOrders/set.txt","");
bot("sendmessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ تـۖم حفـۨظ ٱڵكڵيشة ٱڵـجـډيـډه",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
# --     Source DevProx     --
$set = file_get_contents("SudoOrders/set.txt");
$help2 = file_get_contents("sethelp/help2.txt"); 
if ($text == "تعيين امر م2" and in_array($from_id,$Dev) or $text == "تعيين امر م٢" and in_array($from_id,$Dev)){
file_put_contents("SudoOrders/set.txt","sethelp2");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"❗️☻ ⌯ ٱرسـڵ كڵيشة (م2) ٱلٱن ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
if($text && $set =="sethelp2" and in_array($from_id,$Dev)){
file_put_contents("sethelp/help2.txt",$text); 
file_put_contents("SudoOrders/set.txt","");
bot("sendmessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ تـۖم حفـۨظ ٱڵكڵيشة ٱڵـجـډيـډه",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
# --     Source DevProx     --
$set = file_get_contents("SudoOrders/set.txt");
$help3 = file_get_contents("sethelp/help3.txt");
if ($text == "تعيين امر م3" and in_array($from_id,$Dev) or $text == "تعيين امر م٣" and in_array($from_id,$Dev)){
file_put_contents("SudoOrders/set.txt","sethelp3");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"❗️☻ ⌯ ٱرسـڵ كڵيشة (م3) ٱلٱن ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
if($text && $set =="sethelp3" and in_array($from_id,$Dev)){
file_put_contents("sethelp/help3.txt",$text); 
file_put_contents("SudoOrders/set.txt","");
bot("sendmessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ تـۖم حفـۨظ ٱڵكڵيشة ٱڵـجـډيـډه",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
# --     Source DevProx     --
$set = file_get_contents("SudoOrders/set.txt");
$help4 = file_get_contents("sethelp/help4.txt");
if ($text == "تعيين امر م4" and in_array($from_id,$Dev) or $text == "تعيين امر م٤" and in_array($from_id,$Dev)){
file_put_contents("SudoOrders/set.txt","sethelp4");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"❗️☻ ⌯ ٱرسـڵ كڵيشة (م4) ٱلٱن ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
if($text && $set =="sethelp4" and in_array($from_id,$Dev)){
file_put_contents("sethelp/help4.txt",$text); 
file_put_contents("SudoOrders/set.txt","");
bot("sendmessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ تـۖم حفـۨظ ٱڵكڵيشة ٱڵـجـډيـډه",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
# --     Source DevProx     --
$set = file_get_contents("SudoOrders/set.txt");
$help5 = file_get_contents("sethelp/help5.txt");
if ($text == "تعيين امر م5" and in_array($from_id,$Dev) or $text == "تعيين امر م٥" and in_array($from_id,$Dev)){
file_put_contents("SudoOrders/set.txt","sethelp5");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"❗️☻ ⌯ ٱرسـڵ كڵيشة (م5) ٱلٱن ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
if($text && $set =="sethelp5" and in_array($from_id,$Dev)){
file_put_contents("sethelp/help5.txt",$text); 
file_put_contents("SudoOrders/set.txt","");
bot("sendmessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ تـۖم حفـۨظ ٱڵكڵيشة ٱڵـجـډيـډه",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
# --     Source DevProx     --
$set = file_get_contents("SudoOrders/set.txt");
$help6 = file_get_contents("sethelp/help6.txt");
if ($text == "تعيين امر م6" and in_array($from_id,$Dev) or $text == "تعيين امر م٦" and in_array($from_id,$Dev)){
file_put_contents("SudoOrders/set.txt","sethelp6");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"❗️☻ ⌯ ٱرسـڵ كڵيشة (م6) ٱلٱن ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
if($text && $set =="sethelp6" and in_array($from_id,$Dev)){
file_put_contents("sethelp/help6.txt",$text); 
file_put_contents("SudoOrders/set.txt","");
bot("sendmessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ تـۖم حفـۨظ ٱڵكڵيشة ٱڵـجـډيـډه",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
# --     Source DevProx     --
$set = file_get_contents("SudoOrders/set.txt");
$help7 = file_get_contents("sethelp/help7.txt");
if ($text == "تعيين امر م7" and in_array($from_id,$Dev) or $text == "تعيين امر م٧" and in_array($from_id,$Dev)){
file_put_contents("SudoOrders/set.txt","sethelp7");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"❗️☻ ⌯ ٱرسـڵ كڵيشة (م7) ٱلٱن ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
if($text && $set =="sethelp7" and in_array($from_id,$Dev)){
file_put_contents("sethelp/help7.txt",$text); 
file_put_contents("SudoOrders/set.txt","");
bot("sendmessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ تـۖم حفـۨظ ٱڵكڵيشة ٱڵـجـډيـډه",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
# --     Source DevProx     --
$set = file_get_contents("SudoOrders/set.txt");
$help8 = file_get_contents("sethelp/help8.txt");
if ($text == "تعيين امر م8" and in_array($from_id,$Dev) or $text == "تعيين امر م٨" and in_array($from_id,$Dev)){
file_put_contents("SudoOrders/set.txt","sethelp8");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"❗️☻ ⌯ ٱرسـڵ كڵيشة (م8) ٱلٱن ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
if($text && $set =="sethelp8" and in_array($from_id,$Dev)){
file_put_contents("sethelp/help8.txt",$text); 
file_put_contents("SudoOrders/set.txt","");
bot("sendmessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ تـۖم حفـۨظ ٱڵكڵيشة ٱڵـجـډيـډه",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
# --     Source DevProx     --
$set = file_get_contents("SudoOrders/set.txt");
$help9 = file_get_contents("sethelp/help9.txt");
if ($text == "تعيين امر م9" and in_array($from_id,$Dev) or $text == "تعيين امر م٩" and in_array($from_id,$Dev)){
file_put_contents("SudoOrders/set.txt","sethelp9");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>" ❗️☻ ⌯ ٱرسـڵ كڵيشة (م9) ٱلٱن",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
if($text && $set =="sethelp9" and in_array($from_id,$Dev)){
file_put_contents("sethelp/help9.txt",$text); 
file_put_contents("SudoOrders/set.txt","");
bot("sendmessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ تـۖم حفـۨظ ٱڵكڵيشة ٱڵـجـډيـډه",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}


# --     Source DevProx     --
$set = file_get_contents("SudoOrders/set.txt");
$help = file_get_contents("sethelp/help.txt");
if ($text == "تعيين امر الاوامر" and in_array($from_id,$Dev)){
file_put_contents("SudoOrders/set.txt","sethelp");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"❗️☻ ⌯ ٱرسـڵ كڵيشة (الاوامر) ٱلٱن ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
if($text && $set =="sethelp" and in_array($from_id,$Dev)){
file_put_contents("sethelp/help.txt",$text); 
file_put_contents("SudoOrders/set.txt","");
bot("sendmessage",["chat_id"=>$chat_id,"text"=>"❗️🚸 ⌯ تـۖم حفـۨظ ٱڵكڵيشة ٱڵـجـډيـډه",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
# --     Source DevProx     --
if(in_array($from_id,$Dev)){
if($text == "استعاده الاوامر" or $text == "استعاده الكلايش" or $text == "استعادة كلايش الاوامر"){
file_put_contents("sethelp/help.txt",""); 
file_put_contents("sethelp/help1.txt",""); 
file_put_contents("sethelp/help2.txt",""); 
file_put_contents("sethelp/help3.txt",""); 
file_put_contents("sethelp/help4.txt",""); 
file_put_contents("sethelp/help5.txt",""); 
file_put_contents("sethelp/help6.txt",""); 
file_put_contents("sethelp/help7.txt",""); 
file_put_contents("sethelp/help8.txt",""); 
file_put_contents("sethelp/help9.txt",""); 
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"🚸 ⌯ ٱهلٱ عزيزي ⌯»  ❨ $first_name \n🔑 ⌯ تـۖم ٱستعٱدة كلٱيش ٱلٱوٱمر \n ✓",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}
# --     Source DevProx     --
$help = file_get_contents("sethelp/help.txt");
if($text =="الاوامر" or $text =="مساعدة" or $text =="مساعده"){ if($help == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🙋‍♂️ ¦ ⌯ اهلآ بـك عزيزي ⌯  
❗️?? ⌯ اهلا بك في قائمة الاوامر 
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
⚙️ ⌯ {م1} ⌯» اوامـر حماية المجموعة 
⚜️ ⌯ {م2} ⌯» اوامـر المشرفين
📂 ⌯ {م3} ⌯» اوامـر الخدمة
📋 ⌯ {م4} ⌯» اوامـر الوضع والتعيين
📨 ⌯ {م5} ⌯» اوامـر الرفع والتنزيل
🖲 ⌯ {م6} ⌯» اوامـر التفعيل والتعطيل
🗃 ⌯ {م7} ⌯» اوامـر حذف القوائم
🗂 ⌯ {م8} ⌯» اوامـر المطورين
📭 ⌯ {م9} ⌯» آوآمـر آلتسلية 
🎯 ⌯ {الالعاب} ⌯» لعرض قائمة الالعاب
👨‍💻 ⌯ {الـمـطـور} ⌯» مـطـور الـبـوت
🦅 ⌯ {الـسـورس} ⌯» سـورس الـبـوت
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
👨‍💻 ¦ ⌯ لُلُاسِـتْـفَـسِارَ⌯ » [@$DevUser]

",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}}

if($text =="الاوامر" or $text =="مساعدة" or $text =="مساعده"){ if($help != null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"$help",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}}
# --     Source DevProx     --
$help1 = file_get_contents("sethelp/help1.txt");
if($text =="م1" and $help1 == null or $text =="م١" and $help1 == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🙋‍♂️ ¦ ⌯ اهلآ بـك عزيزي ⌯ 
❗️🎒  ⌯ اوامر حماية المجموعه
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
🗯 ⌯ قفل • فتح ⌯» الرد
🧩 ⌯ قفل • فتح ⌯» الروابط
♟ ⌯ قفل • فتح ⌯» المعرف
🚸 ⌯ قفل • فتح ⌯» البوتات
🎨 ⌯ قفل • فتح ⌯» المتحركه
🎭 ⌯ قفل • فتح ⌯» الملصقات
🗂 ⌯ قفل • فتح ⌯» الملفات
🔖 ⌯ قفل • فتح ⌯» الصور
🎬 ⌯ قفل • فتح ⌯» الفيديو
🖲 ⌯ قفل • فتح ⌯» الاونلاين
💬 ⌯ قفل • فتح ⌯» الدردشه
🧬 ⌯ قفل • فتح ⌯» التوجيه
🎧 ⌯ قفل • فتح ⌯» البصمات
🎤 ⌯ قفل • فتح ⌯» الصوت
📟 ⌯ قفل • فتح ⌯» الجهات
🕹 ⌯ قفل • فتح ⌯» الماركداون
🖇 ⌯ قفل • فتح ⌯» التكرار
🏮 ⌯ قفل • فتح ⌯» الهاشتاك
🛠 ⌯ قفل • فتح ⌯» التعديل
🥁 ⌯ قفل • فتح ⌯» الاشعارات
📑 ⌯ قفل • فتح ⌯» الكلايش
📱 ⌯ قفل • فتح ⌯» المواقع
🔞 ⌯ قفل • فتح ⌯» الفشار
📿 ⌯ قفل • فتح ⌯» الكفر
🧿 ⌯ قفل • فتح ⌯» الطائفيه
🗃 ⌯ قفل • فتح ⌯» الكل
📕 ⌯ قفل • فتح ⌯» العربيه
📘 ⌯ قفل • فتح ⌯» الانجليزيه
📙 ⌯ قفل • فتح ⌯» الفارسيه
🧧 ⌯ قفل • فتح ⌯» التفليش
🗺 ⌯ قفل • فتح ⌯» تعديل الميديا
📣 ⌯ قفل • فتح ⌯» بصمة الفيديو
💫 ⌯ قفل • فتح ⌯» الملصقات المتحركه
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
❗️📮 ⌯ اوامر حمايه اخرى
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
❕ ⌯ قفل • فتح + الامر ⌯» ⤈
🧬 ⌯ التوجيه ⌯» ⤈
⌯ بالتقييد • بالتحذير • بالطرد ⌯
🧩 ⌯ الروابط ⌯» ⤈
⌯ بالتقييد • بالتحذير • بالطرد ⌯
♟ ⌯ المعرفات ⌯» ⤈
⌯ بالتقييد • بالتحذير • بالطرد ⌯
🚸 ⌯ البوتات ⌯» ⤈
⌯ بالتقييد • بالطرد ⌯
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
👨‍💻 ¦ ⌯ لُلُاسِـتْـفَـسِارَ⌯ » [@$DevUser]

",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}

if($text =="م1" and $help1 != null or $text =="م١" and $help1 != null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"$help1",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}
# --     Source DevProx     --
$help2 = file_get_contents("sethelp/help2.txt");
if($text =="م2" and $help2 == null or $text =="م٢" and $help2 == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🙋‍♂️ ¦ ⌯ اهلآ بـك عزيزي ⌯ 
❗️🎒  ⌯ اوامر المشرفين
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
❗️📮 ⌯ اوامر الطرد والحظر
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
🏌🏻‍♀️ ⌯ طرد ⌯» لطرد العضو
🔞 ⌯ حظر • الغاء حظر ⌯» لحظر العضو
🚫 ⌯ كتم • الغاء كتم ⌯» لكتم العضو
📛 ⌯ تقييد • الغاء التقييد ⌯» لتقييد العضو
🔇 ⌯ امنع + الكلمه
🔊 ⌯ الغاء منع + الكلمه
⏱ ⌯ كتم • تقييد ⌯» لمدة + عدد الدقائق
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
❗️📮 ⌯ قوائم المجموعة
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
♨️ ⌯ حذف • مسح + اسم القائمة ⌯» ⤈
🧧 ⌯ اسم القائمة ⌯» لعرض معلوماتها
🚸 ⌯ { المميزين } • { قائمه المنع }
🔑 ⌯ { المنشئين } • { المحظورين }
🎗 ⌯ { المدراء } • { الاعدادات }
⚜️ ⌯ { الادمنيه } • { المكتومين }
🏆 ⌯ { المقيدين } • { الردود }
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
❗️📮 ⌯ اوامر اخرى
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
🔱 ⌯ تثبيت • الغاء التثبيت
💢 ⌯ تنظيف + العدد

🗯 ⌯ اضف • حذف ⌯» رد
💬 ⌯ جلب • حذف ⌯» الترحيب
💭 ⌯ اضف ترحيب + الكليشه

📬 ⌯ فحص البوت
📭 ⌯ صلاحيتي
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
👨‍💻 ¦ ⌯ لُلُاسِـتْـفَـسِارَ⌯ » [@$DevUser]

",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}

if($text =="م2" and $help2 != null or $text =="م٢" and $help2 != null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',['chat_id'=>$chat_id,'text'=>"$help2",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}
# --     Source DevProx     --
$help3 = file_get_contents("sethelp/help3.txt");
if($text =="م3" and $help3 == null or $text =="م٣" and $help3 == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🙋‍♂️ ¦ ⌯ اهلآ بـك عزيزي ⌯ 
❗️🎒  ⌯ اوامر الخدمه
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
⏰ ⌯ الوقت 
📆 ⌯ التاريخ
💬 ⌯ زخرفه
🧩 ⌯ الرابط
🚸 ⌯ موقعي
🎗 ⌯ رتبتي
🔅 ⌯ معلوماتي
☎️ ⌯ جهاتي
🧼 ⌯ صورتي
🧻 ⌯ صورتي + الرقم
✉️ ⌯ رسائلي
🔖 ⌯ اسمي
📦 ⌯ معرفي
🦠 ⌯ ايدي
🧬 ⌯ ايديي
💎 ⌯ نقاطي
💵 ⌯ بيع نقاطي
🎮 ⌯ الالعاب
🥇 ⌯ جوائز الالعاب
🗞 ⌯ القوانين
📛 ⌯ رابط الحذف
📰 ⌯ السورس
📓 ⌯ المطور
📋 ⌯ ايدي المجموعه
📜 ⌯ اسم المجموعه
🧾 ⌯ معلومات المجموعه
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
❗️📮 ⌯ اوامر اخرى
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
🧽 ⌯ رتبتة ⌯» بالرد
📢 ⌯ بحث + اسم التطبيق
🔑 ⌯ كشف ⌯» بالرد  • بالايدي
💌 ⌯ بوسه • بوسها ⌯» بالرد
🗡 ⌯ هينه • هينها ⌯» بالرد
📣 ⌯ صيحه • صيحها ⌯» بالرد
💭 ⌯ زخرفه + الكلمه ⌯» للزخرفه
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
👨‍💻 ¦ ⌯ لُلُاسِـتْـفَـسِارَ⌯ » [@$DevUser]

",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}

if($text =="م3" and $help3 != null or $text =="م٣" and $help3 != null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"$help3",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}
# --     Source DevProx     --
$help4 = file_get_contents("sethelp/help4.txt");
if($text =="م4" and $help4 == null or $text =="م٤" and $help4 == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🙋‍♂️ ¦ ⌯ اهلآ بـك عزيزي ⌯ 
❗️🎒  ⌯ اوامر الوضع
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
❗️📮 ⌯ اوامر وضع عدد اضافة الاعضاء
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
🎖 ⌯ تفعيل • تعطيل ⌯» اضافة الاعضاء
🥇 ⌯ وضع ⌯» عدد الاضافه + العدد
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
❗️📮 ⌯ اوامر الاشتراك الاجباري للمجموعه
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
💷 ⌯ تفعيل • تعطيل ⌯» اشتراك المجموعه
💵 ⌯ وضع قناة + قناة اشتراك اجباري
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
❗️📮 ⌯ اوامر وضع التكرار
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
📌 ⌯ قفل • فتح ⌯» التكرار
📛 ⌯ ضع ⌯» تكرار + العدد
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
❗️📮 ⌯ اوامر وضع الرابط
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
🧩 ⌯ تفعيل • تعطيل ⌯» الرابط
🖇 ⌯ ضع ⌯» رابط
📎 ⌯ صنع رابط وهمي
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
❗️📮 ⌯ ضع + الامر
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
🔖 ⌯ ضع ⌯» اسم + الاسم
🚸 ⌯ ضع ⌯» ترحيب + الكليشه
📁 ⌯ ضع ⌯» قوانين + الكليشة
🖍 ⌯ ضع ⌯» عدد الاحرف + العدد
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
👨‍💻 ¦ ⌯ لُلُاسِـتْـفَـسِارَ⌯ » [@$DevUser]
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}
if($text =="م4" and $help4 != null or $text =="م٤" and $help4 != null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"$help4",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}
# --     Source DevProx     --
$help5 = file_get_contents("sethelp/help5.txt");
if($text =="م5" and $help5 == null or $text =="م٥" and $help5 == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🙋‍♂️ ¦ ⌯ اهلآ بـك عزيزي ⌯ 
❗️🎒  ⌯ اوامر الرفع والتنزيل
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
❗️📮 ⌯ الاوامر  الخاصه بالمشرفين
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
🏅 ⌯ رفع المشرفين
🔆 ⌯ رفع • تنزيل ⌯» منشئ
🎗 ⌯ رفع • تنزيل ⌯» مدير
⚜️ ⌯ رفع • تنزيل ⌯» ادمن
🔅 ⌯ رفع • تنزيل ⌯» مميز
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
❗️📮 ⌯ الاوامر الخاصه بالمطورين
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
🎖 ⌯ رفع • تنزيل ⌯» مطور
🔱 ⌯ رفع • تنزيل ⌯» منشئ
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
👨‍💻 ¦ ⌯ لُلُاسِـتْـفَـسِارَ⌯ » [@$DevUser]

",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}

if($text =="م5" and $help5 != null or $text =="م٥" and $help5 != null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"$help5",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}
# --     Source DevProx     --
$help6 = file_get_contents("sethelp/help6.txt");
if($text =="م6" and $help6 == null or $text =="م٦" and $help6 == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🙋‍♂️ ¦ ⌯ اهلآ بـك عزيزي ⌯ 
❗️🎒  ⌯ اوامر التفعيل والتعطيل
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
❗️📮 ⌯ اوامر تفعيلات المشرفين
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
🎮 ⌯ تفعيل • تعطيل ⌯» الالعاب
🧩 ⌯ تفعيل • تعطيل ⌯» الرابط
🎗 ⌯ تفعيل • تعطيل ⌯» الايدي
🛑 ⌯ تفعيل • تعطيل ⌯» اطردني
🏵 ⌯ تفعيل • تعطيل ⌯» الترحيب
🧬 ⌯ تفعيل • تعطيل ⌯» ردود البوت
⛑ ⌯ تفعيل • تعطيل ⌯» اضافة الاعضاء
🎖 ⌯ تفعيل • تعطيل ⌯» اشتراك المجموعه
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
❗️📮 ⌯ اوامر تفعيلات المطورين
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
🏆 ⌯ تفعيل ⌯ تعطيل ⌯
📢 ⌯ تفعيل • تعطيل ⌯» التواصل
🎤 ⌯ تفعيل • تعطيل ⌯» رد الخاص
🎖 ⌯ تفعيل • تعطيل ⌯» الاشتراك الاجباري
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
👨‍💻 ¦ ⌯ لُلُاسِـتْـفَـسِارَ⌯ » [@$DevUser]

",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}

if($text =="م6" and $help6 != null or $text =="م٦" and $help6 != null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"$help6",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}
# --     Source DevProx     --
$help7 = file_get_contents("sethelp/help7.txt");
if($text =="م7" and $help7 == null or $text =="م٧" and $help7 == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🙋‍♂️ ¦ ⌯ اهلآ بـك عزيزي ⌯ 
❗️🎒  ⌯ اوامر حذف القوائم
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
❗️📮 ⌯ اوامر الحذف للمشرفين
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
🎗 ⌯ حذف المدراء
⚜️ ⌯ حذف الادمنيه
🔅 ⌯ حذف المميزين
🚷 ⌯ حذف المقيدين
📵 ⌯ حذف المكتومين
🚯 ⌯ حذف قائمه المنع
🚳 ⌯ حذف المحضورين
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
❗️📮 ⌯ اوامر الحذف للمطورين
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
🎖 ⌯ حذف المطورين
🏆 ⌯ حذف ردود المطور
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
👨‍💻 ¦ ⌯ لُلُاسِـتْـفَـسِارَ⌯ » [@$DevUser]

",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}

if($text =="م7" and $help7 != null or $text =="م٧" and $help7 != null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"$help7",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}
# --     Source DevProx     --
$help8 = file_get_contents("sethelp/help8.txt");
if($text =="م8" and $help8 == null or $text =="م٨" and $help8 == null){
if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🙋‍♂️ ¦ ⌯ اهلآ بـك عزيزي ⌯ 
❗️🎒  ⌯ اوامر المطورين
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
❗️📮 ⌯ تعيين كلايش الاوامر
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
📚 ⌯ استعاده الاوامر
📒 ⌯ تعيين ⌯» امر الاوامر
📕 ⌯ تعيين ⌯» امر م1 • امر م2
📗 ⌯ تعيين ⌯» امر م3 • امر م4
📘 ⌯ تعيين ⌯» امر م5 • امر م6
📙 ⌯ تعيين ⌯» امر م7 • امر م8
📙 ⌯ تعيين ⌯» امر م9
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
♻️ ⌯ تحديث
⚜️ ⌯ المطورين
🧬 ⌯ الاحصائيات
📋 ⌯ المشتركين
📑 ⌯ مجموع الرسائل
♻️ ⌯ تحديث السورس
⚠️ ⌯ اسم البوت + غادر
🏆 ⌯ ضع كليشه المطور
📌 ⌯ غادر + -ايدي المجموعه
🕹 ⌯ تعيين • تغيير ⌯» اسم البوت
🎖 ⌯ كللهم + -ايدي المجموعه + الكلام
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
❗️📮 ⌯ اوامر العام للمطورين
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
🗽 ⌯ اضف رد عام
🗼 ⌯ حذف رد عام
🏰 ⌯ ردود المطور • ردود العام


⛔️ ⌯ حظر عام
🛑 ⌯ الغاء العام
📮 ⌯ قائمه العام

📫 ⌯ تفعيل • تعطيل ⌯» رد الخاص
📬 ⌯ تعيين رد الخاص
📪 ⌯ جلب رد الخاص
📭 ⌯ حذف رد الخاص

✉️ ⌯ تفعيل • تعطيل ⌯» التواصل
📨 ⌯ تعيين رد التواصل
📩 ⌯ جلب رد التواصل
📧 ⌯ حذف رد التواصل

💷 ⌯ الاشتراك الاجباري
💵 ⌯ تعيين الاشتراك الاجباري
💶 ⌯ قناة الاشتراك
💴 ⌯ تغيير قناة الاشتراك
💰 ⌯ حذف قناة الاشتراك

📣 ⌯ اذاعه 
🎗 ⌯ اذاعه بالتوجيه
📢 ⌯ اذاعه خاص
📯 ⌯ اذاعه خاص بالتوجيه
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
👨‍💻 ¦ ⌯ لُلُاسِـتْـفَـسِارَ⌯ » [@$DevUser]

",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}

if($text =="م8" and $help8 != null or $text =="م٨" and $help8 != null){
if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"$help8",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}
$help9 = file_get_contents("sethelp/help9.txt");
if($text =="م9" and $help9 == null or $text =="م٩" and $help9 == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🙋‍♂️ ¦ ⌯ اهلآ بـك عزيزي ⌯ 
🔘┊في اوامر التسلية الاضافية !
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
🦓| رفع ⇚ حمار+🐐| رفع ⇚ صخل
🐶| رفع ⇚ كلب +🐒| رفع ⇚ قرد 
🐂| رفع ⇚ بقره+🐏| رفع ⇚ نعجه
🐏| رفع ⇚خروف+🐔| رفع⇐ دجاجه
👨‍✈️| رفع ⇚ رئيس+ 🧝| رفع ⇚ حاكم
🤴| رفع  ⇚ ملك+👸| رفع  ⇚ ملكه
🧝‍♂| رفع  ⇚ وزير+🧝‍♀| رفع  ⇚ وزيره
👨‍🎓| رفع ⇚ امير+🧑‍🎓| رفع  ⇚ اميره
👩‍💼| رفع ⇚ مزه+💁‍♀| رفع ⇚ مؤدبه
👮‍♂| رفع⇚شرطي+👮| رفع ⇐ مساعد
🙎| رفع⇚مجنون+🙎‍♀| رفع⇚مجنونه
👰| رفـع⇐زوجتي+🙋‍♂️| رفـع⇐زوجي
❤️| رفـع⇐ لقلبي
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
📅¦ ميلادي ⊰ لاظهار التاريخ الميلادي ⊰ 
📆¦ هجري⊰ لاظهار التاريخ الهجري ⊰ 
👨‍💼¦ تنزيل بصلاحيه بالرد⊰  لتنزيل
 عضو بصلاحيات معينهہ ⊰ 
👨‍✈️¦ رفع بصلاحيه بالرد⊰  لرفع 
عضو بصلاحيات معينهہ ⊰ 
👨‍👨‍👧‍👧¦ تاك للكل ⊰ لاظهار الاعضاء المتفاعلين ⊰
👥¦ المتفاعلين بالرد ⊰ لاظهار عدد
 المتفاعلين ف حساب العضو
●ـ▬ـ▬ஜ۩۞۩ஜ▬ـ▬ـ●
👨‍💻 ¦ ⌯ لُلُاسِـتْـفَـسِارَ⌯ » [@$DevUser]

",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"❗️🚸 ⌯ عذرٱ ڵم يتم تفعيڵ ٱڵمجموعه
❗️🔑 ⌯ ٱرسڵ ( تفعيل ) ڵڵتفعيڵ",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}


$message_idd = $update->message->message_id;
if($text == "ترقية ملك"  || $text == "رفع ملك"){
if($status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👤¦ العضو » [@$re_user](tg://user?id=$re_id)
*🎫¦ الايدي » {*$re_id*}
🛠¦ تم ترقيته ملك المجموعة
➖️*
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);}
}

$message_idd = $update->message->message_id;
if($text == "ترقية حمار"  || $text == "رفع حمار"){
if($status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👤¦ العضو » [@$re_user](tg://user?id=$re_id)
*🎫¦ الايدي » {*$re_id*}
⚡| تم رفع العضو حمارفي المجموعه 
تعال حبي استلم العربانه من المدير
✓️*

", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);}
}

$message_idd = $update->message->message_id;
if($text == "ترقية صخل"  || $text == "رفع صخل"){
if($status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👤¦ العضو » [@$re_user](tg://user?id=$re_id)
*🎫¦ الايدي » {*$re_id*}
⚡| تم رفع المتهم صخل بنجاح
الان اصبح صخل القروب
✓️*
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);}
}
$message_idd = $update->message->message_id;
if($text == "ترقيه كلب"  || $text == "رفع كلب"){
if($status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👤¦ العضو » [@$re_user](tg://user?id=$re_id)
*🎫¦ الايدي » {*$re_id*}
| تم رفع العضو إلى كلب بنجاح
تعال يالكلب اعطيك عضمه 😂
✓️*
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);}
}

$message_idd = $update->message->message_id;
if($text == "ترقيه قرد"  || $text == "رفع قرد"){
if($status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👤¦ العضو » [@$re_user](tg://user?id=$re_id)
*🎫¦ الايدي » {*$re_id*}
⚡| تم رفع العضو قرد
 بالقروب تعال حبي خذ الموز 😂
✓️*
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);}
}

$message_idd = $update->message->message_id;
if($text == "ترقيه بقره"  || $text == "رفع بقره"){
if($status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👤¦ العضو » [@$re_user](tg://user?id=$re_id)
*🎫¦ الايدي » {*$re_id*}
⚡| تم رفع العضو بقره
ها يالبقره تعال احلبك 😂
✓️*
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);}
}

$message_idd = $update->message->message_id;
if($text == "ترقيه خروف"  || $text == "رفع خروف"){
if($status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👤¦ العضو » [@$re_user](tg://user?id=$re_id)
*🎫¦ الايدي » {*$re_id*}
⚡| تم رفع العضو نعجه/خروف
طلع برا ابو البعرور الوصخ😂
✓️*
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);}
}

$message_idd = $update->message->message_id;
if($text == "ترقيه دجاجه"  || $text == "رفع دجاجه"){
if($status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👤¦ العضو » [@$re_user](tg://user?id=$re_id)
*🎫¦ الايدي » {*$re_id*}
⚡| تم رفع العضو دجاجه
 لاوصيـك اهم شي الـبـيـض 😂
✓️*
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);}
}

$message_idd = $update->message->message_id;
if($text == "ترقيه زوجتي"  || $text == "رفع زوجتي"){
if($status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👤¦ العضو » [@$re_user](tg://user?id=$re_id)
*🎫¦ الايدي » {*$re_id*}
🎫│تم زواجكم الاثنين بنجاح✔️
🛠╽الآن يمكنكم أخذ راحتكم🤤😉
✓️*
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);}
}

$message_idd = $update->message->message_id;
if($text == "ترقيه بقلبي"  || $text == "رفع بقلبي"){
if($status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👤¦ العضو » [@$re_user](tg://user?id=$re_id)
*🎫¦ الايدي » {*$re_id*}
🎫│تم رفع العضو داخل قلبك✔️
🛠╽تمت ترقيته بنجاح 😻??👋🏻
✓️*
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);}
}

$message_idd = $update->message->message_id;
if($text == "ترقيه رئيس"  || $text == "رفع رئيس"){
if($status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👤¦ العضو » [@$re_user](tg://user?id=$re_id)
*🎫¦ الايدي » {*$re_id*}
🛠¦ تم ترقيته رئيس المجموعه
➖️*
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);}
}

$message_idd = $update->message->message_id;
if($text == "ترقيه وزير"  || $text == "رفع وزير"){
if($status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👤¦ العضو » [@$re_user](tg://user?id=$re_id)
*🎫¦ الايدي » {*$re_id*}
🛠¦ تم ترقيته وزير المجموعهہ
➖️*
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);}
}

$message_idd = $update->message->message_id;
if($text == "ترقيه شرطي"  || $text == "رفع شرطي"){
if($status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👤¦ العضو » [@$re_user](tg://user?id=$re_id)
*🎫¦ الايدي » {*$re_id*}
🛠¦ تم ترقيته شرطي مناوب
➖️*
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);}
}
$message_idd = $update->message->message_id;
if($text == "ترقيه مساعد"  || $text == "رفع مساعد"){
if($status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👤¦ العضو » [@$re_user](tg://user?id=$re_id)
*🎫¦ الايدي » {*$re_id*}
🛠¦ تم ترقيته مساعد ظابط
➖️*
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);}
}

$message_idd = $update->message->message_id;
if($text == "ترقيه امير"  || $text == "رفع امير"){
if($status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👤¦ العضو » [@$re_user](tg://user?id=$re_id)
*🎫¦ الايدي » {*$re_id*}
🛠¦ تم ترقيته امير المجموعه
➖️*
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);}
}


$message_idd = $update->message->message_id;
if($text == "رفع مؤدبه"  || $text == "رفع مزه" and $from_id == $admin || in_array($from_id,$Dev)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [@$re_user](tg://user?id=$re_id)
*🎫¦ الايدي » {*`$re_id`*}
🛠¦ تم رفع المزه المؤدبة الان
✓️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$message_idd = $update->message->message_id;
if($text == "رفع حاكم"  || $text == "ترقيه حاكم"){
if($status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👤¦ العضو » [@$re_user](tg://user?id=$re_id)
*🎫¦ الايدي » {*$re_id*}
🛠¦ تـم تـرقـيـتـه الئ حـاكـم 😎
➖️*
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);}
}

$message_idd = $update->message->message_id;
if($text == "رفع مجنون"  || $text == "ترقيه مجنون"){
if($status ==  creator  or $status ==  administrator  or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
bot( SendMessage ,[ chat_id =>$chat_id,
 text =>"
👤¦ العضو » [@$re_user](tg://user?id=$re_id)
*🎫¦ الايدي » {*$re_id*}
🛠¦ تم ترشيحه للجنان العقلي
➖️*
", parse_mode => markdown , reply_to_message_id =>$message->message_id, disable_web_page_preview =>true,
]);}
}


date_default_timezone_set('Asia/Riyadh');
  $date = date('h:i:s');  $Y = date ("Y");  
  $D = date("d");   $M = date("m");
 $Hij  =  mktime(0, 0, 0, Date("m"), Date("j"), Date("Y"));
  $d = round($Hij/(60*60*24));       $y = round($d/354.37419);# @edes0n  
  $Remain = $d-($y*354.37419);  $m = round($Remain/29.531182);   
  $d = $Remain-($m*29.531182);  
$y = $y+1389;  $m = $m+10;  $d = $d+24;
function month_name(){ $month_n = array( 
        1 => 'يناير', 2 => 'فبراير',  3 => ' مارس', 
       4 => 'ابريل ', 5 => 'مايو ',6 => 'يونيو',
       7 => 'يوليو', 8 => 'اغسطس', 9 => 'سبتمبر',
     10 => 'اكتوبر', 11 => 'نوفمبر', 12 => 'ديسمبر'
);return $month_n[date('n')]; 
  } $nM = month_name();
function mon_name(){ $month_a = array( 
       1 => 'جمادى الاول', 2 => 'جمادى الثاني',  3 => ' رجب', 
       4 => 'شعبان ', 5 => 'رمضان ',6 => 'شوال',
       7 => 'ذو القعده', 8 => 'ذو الحجه', 9 => 'محرم',
   10 => 'صفر ', 11 => 'ربيع الاول', 12 => 'ربيع الثاني '
);return $month_a[date('n')];
  } $nm = mon_name();
if ($d>29.531182 and round($d) != 30){ 
  $m = $m+1;   $d = Round($d-29.531182);  
}else{  $d = Round($d);  }
function day_name(){ $ds = array('الأحد', 'الأثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت');
 return $ds[date('w')];
}$DY = day_name();

$hj = $DY."/".$nm."/".$y."/".$m."/".$d."هـ\nـ".$date." ";
$Md = $DY."/".$nM."/".$Y."/".$M."/".$D."م\nـ".$date." ";

if($text == "هجري"){
bot('sendMessage',
[ 'chat_id'=>$chat_id,
'text'=>"$hj",
    ]);
 }
if($text == "ميلادي"){
bot('sendMessage',
[ 'chat_id'=>$chat_id,
'text'=>"$Md",
    ]);
 }
 //••┉┉┉┉┉┉┉┉┉┉┉┉••//
$derb = file_get_contents("data/$chat_id/sen.txt");
$sww = file_get_contents("data/$chat_id/seen.txt");
$sew = file_get_contents("data/$chat_id/seeen.txt");
if($re and $text == "رفع بصلاحيه" || $text == "رفع بصلاحية" || $text == "رفع صلاحيه" || $text == "رفع صلاحية"){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
file_put_contents("data/$chat_id/sen.txt","name");
file_put_contents("data/$chat_id/seen.txt",$from_id);
file_put_contents("data/$chat_id/seeen.txt",$re_id);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👨‍✈️┇حسنا عزيزي $info
📛┇هاذا الامر يستخدم لرفع العضو بصلاحيه واحده فقط انت تختارها ✓
📕┇ارسل الان الصلاحيه التي تريدها للعضو » $re_id ، يمكنك ارسال رموز الصلاحيات للرفع 📌
ـــ  ــــ  ـــ  ـــ  ـــ
🗑┇حذف رسائل » {1}
🚫┇حظر مستخدمين » {2}
⛔️┇تثبيت رسائل » {3}
🚸┇دعوة مستخدمين » {4}
⚜┇اضافة مشرفين » {5}
♻️┇تغيير معلومات الجروب » {6}
🚸┇رفع بكامل الصلاحيات
❌┇الغاء » لالغاء الامر
ـــ  ــــ  ـــ  ـــ  ـــ
⚠️┇ملاحطة : للرفع بكل الصلاحيات عدا صلاحيات محددة » { تنزيل صلاحية } بالرد ✓",
]);
}}
if($text == "5" and $derb == "name"){
if($from_id == $sww){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👨‍✈️┇تم رفع العضو » $sew
📛┇مشرف بصلاحيه رفع مشرفين فقط✓
📕┇بواسطة » $info
➖ 
",
]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$sew,
 'can_change_info'=>false,
  'can_delete_messages'=>false,
  'can_invite_users'=>false,
  'can_restrict_members'=>false,
  'can_pin_messages'=>false,
  'can_promote_members'=>True,
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}
if($text == "1" and $derb == "name"){
if($from_id == $sww){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👨‍✈️┇تم رفع العضو » $sew
📛┇مشرف بصلاحيه حذف الرسائل فقط ✓
📕┇بواسطة » $info
➖ 
",
]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$sew,
 'can_change_info'=>false,
  'can_delete_messages'=>True,
  'can_invite_users'=>false,
  'can_restrict_members'=>false,
  'can_pin_messages'=>false,
  'can_promote_members'=>false,
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}
if( $text == "4" and $derb == "name"){
if($from_id == $sww){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👨‍✈️┇تم رفع العضو » $sew
📛┇مشرف بصلاحيه دعوة مستخدمين ✓
📕┇بواسطة » $info
➖ 
",
]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$sew,
 'can_change_info'=>false,
  'can_delete_messages'=>false,
  'can_invite_users'=>True,
  'can_restrict_members'=>false,
  'can_pin_messages'=>false,
  'can_promote_members'=>false,
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}
if($text  == "3" and $derb == "name"){
if($from_id == $sww){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👨‍✈️┇تم رفع العضو » $sew
📛┇مشرف بصلاحيه تثبيت رسائل ✓
📕┇بواسطة » $info
➖ 
",
]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$sew,
 'can_change_info'=>false,
  'can_delete_messages'=>false,
  'can_invite_users'=>false,
  'can_restrict_members'=>false,
  'can_pin_messages'=>True,
  'can_promote_members'=>false,
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}
if($text == "6" and $derb == "name"){
if($from_id == $sww){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👨‍✈️┇تم رفع العضو » $sew
📛┇مشرف بصلاحيه تغيير المعلومات ✓
📕┇بواسطة » $info
➖ 
",
]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$sew,
 'can_change_info'=>True,
  'can_delete_messages'=>false,
  'can_invite_users'=>false,
  'can_restrict_members'=>false,
  'can_pin_messages'=>false,
  'can_promote_members'=>false,
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}
if($text == "2" and $derb == "name"){
if($from_id == $sww){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👨‍✈️┇تم رفع العضو » $sew
📛┇مشرف بصلاحيه حظر مستخدمين ✓
📕┇بواسطة » $info
➖ 
",
]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$sew,
 'can_change_info'=>false,
  'can_delete_messages'=>false,
  'can_invite_users'=>false,
  'can_restrict_members'=>True,
  'can_pin_messages'=>false,
  'can_promote_members'=>false,
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}
if($text == "رفع بكامل الصلاحيات" and $derb == "name"){
if($from_id == $sww){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👨‍✈️┇تم رفع العضو » $sew
📛┇مشرف بكامل الصلاحيات ✓
📕┇بواسطة » $info
➖ 
",
]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$sew,
 'can_change_info'=>true,
  'can_delete_messages'=>true,
  'can_invite_users'=>true,
  'can_restrict_members'=>true,
  'can_pin_messages'=>True,
  'can_promote_members'=>True,
]);
}
}
if($text == "الغاء" and $derb == "name"){
if($from_id == $sww){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
📛┇تم الغاء الامر ✓
📕┇بواسطة » $info
➖ 
",
]);
file_put_contents("data/$chat_id/seen.txt","864321168");
}
}

$re         = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$ders = file_get_contents("data/$chat_id/san.txt");
$sws = file_get_contents("data/$chat_id/saan.txt");
$ses = file_get_contents("data/$chat_id/saaan.txt");
if($re and $text == "تنزيل عدا صلاحيه" || $text == "تنزيل بصلاحيه" || $text == "تنزيل بصلاحية" || $text == "تنزيل عدا صلاحية"){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
file_put_contents("data/$chat_id/san.txt","namee");
file_put_contents("data/$chat_id/saan.txt",$from_id);
file_put_contents("data/$chat_id/saaan.txt",$re_id);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👨‍✈️┇حسنا عزيزي $info
📛┇هاذا الامر يستخدم لرفع العضو بكامل الصلاحيات عدا صلاحية انت تحددها ✓
📕┇ارسل الان الصلاحيه التي تريدها للعضو » $re_id ، يمكنك ارسال فقط الصلاحيات : 📌
ـــ  ــــ  ـــ  ـــ  ـــ
🗑┇حذف رسائل » {1}
🚫┇حظر مستخدمين » {2}
⛔️┇تثبيت رسائل » {3}
🚸┇دعوة مستخدمين » {4}
⚜┇اضافة مشرفين » {5}
♻️┇تغيير معلومات الجروب » {6}
🚸┇تنزيل بكامل الصلاحيات
❌┇الغاء الامر » لالغاء الامر
ـــ  ــــ  ـــ  ـــ  ـــ
⚠️┇ملاحطة : للرفع بصلاحية محدده ارسل { رفع بصلاحيه } بالرد ✓",
]);
}}
if($text == "5" and $ders == "namee"){
if($from_id == $sws){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👨‍✈️┇تم رفع العضو » $ses
📛┇مشرف بكل الصلاحيات عدا صلاحية اضافة مشرفين ✓
📕┇بواسطة » $info
➖ 
",
]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$ses,
 'can_change_info'=>True,
  'can_delete_messages'=>True,
  'can_invite_users'=>True,
  'can_restrict_members'=>True,
  'can_pin_messages'=>True,
  'can_promote_members'=>false,
]);
}
}

if($message->left_chat_member){
bot('DeleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}
if($text == "2" and $ders == "namee"){
if($from_id == $sws){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👨‍✈️┇تم رفع العضو » $ses
📛┇مشرف بكل الصلاحيات عدا صلاحية حظر مستخدمين ✓
📕┇بواسطة » $info
➖ 
",
]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$ses,
 'can_change_info'=>True,
  'can_delete_messages'=>True,
  'can_invite_users'=>True,
  'can_restrict_members'=>false,
  'can_pin_messages'=>True,
  'can_promote_members'=>True,
]);
file_put_contents("data/$chat_id/saan.txt","330811864");
}
}
if($text == "1" and $ders == "namee"){
if($from_id == $sws){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👨‍✈️┇تم رفع العضو » $ses
📛┇مشرف بكل الصلاحيات عدا صلاحية حذف رسائل ✓
📕┇بواسطة » $info
➖ 
",
]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$ses,
 'can_change_info'=>True,
  'can_delete_messages'=>false,
  'can_invite_users'=>True,
  'can_restrict_members'=>True,
  'can_pin_messages'=>True,
  'can_promote_members'=>True,
]);
file_put_contents("data/$chat_id/saan.txt","330811864");
}
}
if($text == "4" and $ders == "namee"){
if($from_id == $sws){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👨‍✈️┇تم رفع العضو » $ses
📛┇مشرف بكل الصلاحيات عدا صلاحية دعوة مستخدمين ✓
📕┇بواسطة » $info
➖ 
",
]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$ses,
 'can_change_info'=>True,
  'can_delete_messages'=>True,
  'can_invite_users'=>false,
  'can_restrict_members'=>True,
  'can_pin_messages'=>True,
  'can_promote_members'=>True,
]);
file_put_contents("data/$chat_id/saan.txt","330811864");
}
}
if( $text == "3" and $ders == "namee"){
if($from_id == $sws){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👨‍✈️┇تم رفع العضو » $ses
📛┇مشرف بكل الصلاحيات عدا صلاحية تثبيت رسائل ✓
📕┇بواسطة » $info
➖ 
",
]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$ses,
 'can_change_info'=>True,
  'can_delete_messages'=>True,
  'can_invite_users'=>True,
  'can_restrict_members'=>True,
  'can_pin_messages'=>false,
  'can_promote_members'=>True,
]);
file_put_contents("data/$chat_id/saan.txt","330811864");
}
}
if($text == "6" and $ders == "namee"){
if($from_id == $sws){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👨‍✈️┇تم رفع العضو » $ses
📛┇مشرف بكل الصلاحيات عدا صلاحية تغيير المعلومات ✓
📕┇بواسطة » $info
➖ 
",
]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$ses,
 'can_change_info'=>false,
  'can_delete_messages'=>True,
  'can_invite_users'=>True,
  'can_restrict_members'=>True,
  'can_pin_messages'=>True,
  'can_promote_members'=>True,
]);
file_put_contents("data/$chat_id/saan.txt","330811864");
}
}
if($text == "الغاء الامر" and $ders == "namee"){
if($from_id == $sws){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
📛┇تم الغاء الامر ✓
📕┇بواسطة » $info
➖ 
",
]);
file_put_contents("data/$chat_id/saan.txt","330811864");
}
}
if($text == "تنزيل بكامل الصلاحيات" and $ders == "namee"){
if($from_id == $sws){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👨‍✈️┇تم تنزيل العضو » $ses
📛┇عضو بدون اي صلاحيه ✓
📕┇بواسطة » $info
➖ 
",
]);
 bot('restrictChatMember',[
   'user_id'=>$ses,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
file_put_contents("data/$chat_id/saan.txt","330811864");
}
}

$user = $message->from->username;
$ftag = file_get_contents("id$chat_id.txt");
$tagss = file_get_contents("user$chat_id.txt");
$tags = explode("\n",$ftag);

if ($text  and !in_array($from_id,$tags)){
file_put_contents("id$chat_id.txt","$from_id\n",FILE_APPEND);
file_put_contents("user$chat_id.txt","- { @$user }\n",FILE_APPEND);
}

if($text == "تاك للكل"){
$tagss = file_get_contents("user$chat_id.txt");
bot ( sendMessage ,[
 chat_id =>$chat_id,
 text =>"🎶 ¦ قائمه الاعضاء ¦ 🎶\n┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉\n$tagss", reply_to_message_id =>$message->message_id, 
]);
}

if($text == "المتفاعلين"){
bot ( sendMessage ,[
 chat_id =>$chat_id,
 text =>"عدد المتفاعلين هو :$count", reply_to_message_id =>$message->message_id, 
]);
}




 $USAIED = json_decode(file_get_contents('php://input'));
$SAIEDM = $USAIED->message;
$SAIEDT = $SAIEDM->text;
$SAIEDC = $SAIEDM->chat->id;
$DSAIED= $USAIED->callback_query;
$DSAIEDD = $DSAIED->data;
$SAIEDNEW = $SAIEDM->new_chat_member;
$SAIEDN = $SAIEDNEW->first_name;
$SAIEDI = $SAIEDNEW->id;
$DSAIEDN = $DSAIED->from->first_name;
$DSAIEDI = $DSAIED->from->id;
$DSAIEDC = $DSAIED->message->chat->id;
mkdir("SAIED");
$SAIEDRO = file_get_contents("SAIED/RO$SAIEDC.txt");
if($SAIEDT == "تفعيل التحقق"  and $SAIEDRO != "ON"){
bot('sendmessage',[
'chat_id'=>$SAIEDC,
'text'=>"• تم تفعيل التحقق من الروبوتات 👨‍✈️.
• سيتم تقييد اي شخص ينضم الى المجموعة ولن يستطيع ارسال الرسائل حتى يضغط على زر انا لست روبوت 📛.",
'reply_to_message_id'=>$SAIEDM->message_id,
]);
file_put_contents("SAIED/RO$SAIEDC.txt","ON");
}
if($SAIEDT == "تفعيل التحقق"  and $SAIEDRO == "ON"){
bot('sendmessage',[
'chat_id'=>$SAIEDC,
'text'=>"• تم تفعيل التحقق من الروبوتات بالتأكيد 👨‍✈️.",
'reply_to_message_id'=>$SAIEDM->message_id,
]);
}
if($SAIEDT == "تعطيل التحقق"  and $SAIEDRO == "ON"){
bot('sendmessage',[
'chat_id'=>$SAIEDC,
'text'=>"• تم تعطيل التحقق من الروبوتات 🛑.
• الان يستطيع اي شخص ينضم الى المجموعة ارسال الرسائل فيها 📝.",
'reply_to_message_id'=>$SAIEDM->message_id,
]);
unlink("SAIED/RO$SAIEDC.txt");
}
if($SAIEDT == "تعطيل التحقق"  and $SAIEDRO != "ON"){
bot('sendmessage',[
'chat_id'=>$SAIEDC,
'text'=>"• تم تعطيل التحقق من الروبوتات بالتأكيد 🛑.",
'reply_to_message_id'=>$SAIEDM->message_id,
]);
}
if($SAIEDNEW and $SAIEDRO == "ON"){
bot('restrictChatMember',[
'chat_id'=>$SAIEDC,
'user_id'=>$SAIEDI,
]);
 bot('sendMessage',[
'chat_id'=>$SAIEDC,
'text'=>"• اهلا بك يا [$SAIEDN](tg://user?id=$SAIEDI) ❤️.
• المعذرة تم تقييدك من ارسال الرسائل ⚠️.
• يرجى الضغط على أنا لست روبوت الموجودة في الأسفل حتى يتم فك التقييد عنك 🛑.",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"• انا لست ربوت 📛","callback_data"=>"RoBot-$SAIEDI"]],
]])
]);
}
$ROSAIED = explode('-', $DSAIEDD);
if($DSAIEDD == "RoBot-$ROSAIED[1]" and $DSAIEDI == $ROSAIED[1]){
bot('promoteChatMember',[
'chat_id'=>$DSAIEDC,
'user_id'=>$DSAIEDI,
]);
bot('EditMessageText',[
'chat_id'=>$DSAIEDC,
'message_id'=>$DSAIED->message->message_id,
'text'=>"• أهلا بك يا [$DSAIEDN](tg://user?id=$DSAIEDI) ❤️.
• تم الغاء التقييد عنك بنجاح يمكنك ارسال الرسائل الآن 📝.",
'parse_mode'=>"MarkDown",
]);
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$DSAIED->id,
'text'=>"• الأمر ليس لك 🌚", 
]);
}
if($status == "creator" and in_array($from_id,$Dev)){
if($text == "تنزيل الكل" or $text == "حذف الكل"){
$CMM = count($mmyazs)-1;
$CM = count($mangers)-1;
$CA = count($admin_users)-1;
$CALL = $CA + $CM + $CMM;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
📬┊بواسطـة $info
ـــ ـــ ـــ ــــ ــــ 
🗑┊تم حذف {$CA} من الادمنيه
🗑┊تم حذف {$CM} من المدراء
🗑┊تم حذف {$CMM} من المميزين
ـــ ـــ ـــ ــــ ــــ 
📛┊تم حذف {$CALL} من المرفوعين
🚸┊تم حذف الكل بنجاح 
✓
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id/mange.txt" ,"");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id/mange.txt" ,"");
file_put_contents("data/admin_user/$chat_id.txt","");
file_put_contents("data/admin_user/$chat_id/mange.txt","");
}
}
if( $text =="المشرفين" or $text == "المنشئين"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
👨‍✈️❉ منشى المجموعة :-
❉ $owner ➻ @$owner2

👮🏽‍♂❉ الاداريين | المشرفين :-
$msg
",
'reply_to_message_id'=>$message_id,

'parse_mode'=>"MarkDown",
 ]);
	}
}
if( $text =="رفع الادمنيه" or $text == "رفع الادمنية"){
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg)-1;
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🧟‍♂❉ تم رفع { $cmsg } من الادمنيه ✓
",
'reply_to_message_id'=>$message_id,
 ]);
	}
}
if($text == "عرض الكل" and $mmyazs_info != NULL and $admin_users_info != NULL and $mangers_infos != NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
$mangers_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
$admin_users_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
$mmyazs_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
 للاستفســــــٓــار @[@$DevUser] 📮❉ ",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}}
if($text == "عرض الكل" and $mmyazs_info == NULL and $admin_users_info != NULL and $mangers_infos != NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
$mangers_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
$admin_users_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
📛❉ لم يتم رفع اي مميز ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
 للاستفســــــٓــار @[@$DevUser] 📮❉",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}}
if($text == "عرض الكل" and $mmyazs_info != NULL and $admin_users_info == NULL and $mangers_infos != NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
$mangers_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
📛❉ لم يتم رفع اي ادمن ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
$mmyazs_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
 للاستفســــــٓــار @[@$DevUser] 📮❉",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}}
if($text == "عرض الكل" and $mmyazs_info == NULL and $admin_users_info != NULL and $mangers_infos == NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
📛❉ لم يتم رفع اي مدير ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
$admin_user_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
📛❉ لم يتم رفع اي مميز ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
 للاستفســــــٓــار @[@$DevUser] 📮❉",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}}
if($text == "عرض الكل" and $mmyazs_info != NULL and $admin_users_info == NULL and $mangers_infos == NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
📛❉ لم يتم رفع اي مدير ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
📛❉ لم يتم رفع اي ادمن ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
??‍🎤❉ المميزين :-
$mmyazs_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}}

if($text == "عرض الكل" and $mmyazs_info == NULL and $admin_users_info == NULL and $mangers_infos != NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
$mangers_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
📛❉ لم يتم رفع اي ادمن ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
📛❉ لم يتم رفع اي مميز ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}}
if($text == "عرض الكل" and $mmyazs_info != NULL and $admin_users_info != NULL and $mangers_infos == NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
📛❉ لم يتم رفع اي مدير ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
$admin_users_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
$mmyazs_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}}
if($text == "عرض الكل" and $mmyazs_info == NULL and $admin_users_info == NULL and $mangers_infos == NULL ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
??❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
📛❉ لم يتم رفع اي مدير ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
📛❉ لم يتم رفع اي ادمن ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
📛❉ لم يتم رفع اي مميز ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}}

if($text == " مـَسّـِآء الـخّـيًــر" || $text == " مَـــسُأُء أَلَــوّورّد " || $text == "مساء الخير" || $text == "مسا الخير"){
if ($tc == 'group' | $tc == 'supergroup'){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>"https://t.me/shehad2/8036",
 'reply_to_message_id'=>$message_id,
]);}}}
$rand = array('مزاج 🚶','في مانع 😒','صنافه','مدري لَيــِْ♡̷̴̬̩̃̊ـِْش😹😔','خلاص دامك ماتعرف اسكت لٱ تسئل 😹🐸');
$ra = array_rand($rand, 1);
if($text ==  "ليش"or $text =="لَيــِْ♡̷̴̬̩̃̊ـِْش "){
if ($tc == 'group' | $tc == 'supergroup'){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra]
]);
}
}
}
$rand = array('انَـَY̷ ̜̩̐̌̋O̷ ̜̩̐̌̋U̷ ̜̩̐̌̋ـَتَ الاجمل👍🌷','كـ جمالك حب 😘','مثلك 😍');
$ra = array_rand($rand, 1);
if($text == 'جميل'){
if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra]
]);
}
}
}
$rand = array('شو تسويها🙁','يله خلينا نشوف');
$ra = array_rand($rand, 1);
if($text == 'اسويها'){
if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
]);
}
}
}
if(preg_match('/^(.*)(م̷ـــِْن امس|من امس|امس |قبل يومين )(.*)/',$text) ){
if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
حاول الان حب لاتيئس ☹",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}
}
if($text == "ضابح" or $text == "ضايج"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"روح انتحر🌚🌷",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "🚶‍♂"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ع وين😉",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "😂"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لف اسنانك😚فضحتنا بين الأجانب😢",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "طمام"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"سوي زحاوق😋لرجع وماهي جاهزه😒😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if(preg_match('/^(.*)(ملف ردود|بوت ردود|ردود|ملف بوت ردود)(.*)/',$text) ){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ها حب تريد ملفي 😔رح اعطيك تَعاّإاّإلّ خاص 🚶
بس ارسل الملف", 
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}
}
$rand = array('احسن 😌مو لآزٍمٍ تدري بكل جديد','كلشي انت متعرفه اصلا 😴','م̷ـــِْن مِِـتــ ؟؟! ـى عرفت شي انت بدون ماعلمك 😔😹','عمرك لادريت ☹');
$ra = array_rand($rand, 1);

if($text == 'مدري'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra]
]);
}
}
}
if($text == "مالك"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مدري🤷‍♂سئل نفسك",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "وش"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"سوي الدقل. خل نسمع الاخبار📻😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "فهمت"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اكييد😌",
'reply_to_message_id'=>$message->message_id, 
]);
}}}

if($text == "ممكن طلب"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اتفظل بس لاتطلب حسابات🙂",
'reply_to_message_id'=>$message->message_id, 
]);
}}}

if($text == "??"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وش فْيَگ روح اقرب عياده استلم علاجك😬",
'reply_to_message_id'=>$message->message_id, 
]);
}}}
$rand = array('بويش تفكر شاركنا 🚶','لٱ تروح بعيد خلك معنا 🐸','شو مافهمت ??');
$ra = array_rand($rand, 1);

if($text == '🤔'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
$rand = array('معك حب شو تريد🙂','موجود ماتشوفني يعني 😕','مشغولين حب 😔بقي انت ماعندك شغل');
$ra = array_rand($rand, 1);

if($text == 'وينكم'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra]
]);
}}}
if($text == "تعال"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اجيك خاص😍",
'reply_to_message_id'=>$message->message_id, 
]);
}}}
if($text == "تعال خاص"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🤭😐😑",
'reply_to_message_id'=>$message->message_id, 
]);
}}}
$rand = array(' دِْۈۈۈۈم/يّارٌب ماتفارقك العافيه 😘ْ','يستاهل الحمد🙌','❤️');
$ra = array_rand($rand, 1);

if($text == 'الحمد لله'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
$rand = array('ع الجميع 🌹','علينا وعليكم 
اكثرو م̷ـــِْن الصلاة ع النبي واله 💐','اغنم حبي ودعي ليـّۓ معاك 🌺');
$ra = array_rand($rand, 1);

if($text == 'جمعه مباركه'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
$rand = array('هاا گـّيَفْ الـّحـّال ٱن شـْاءِ اللـٌہ بَخـّيَرٌ 🙂','وينك مغيب غلا 😉');
$ra = array_rand($rand, 1);

if($text == 'وعليكم السلام'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
$rand = array('🌺⌣{يـّـٌدِْۈۈ/عّزٌگ-ۈنَبْضّ قَلبْگ/ۈۈمْ}⌣ 🍂','تدوم العافيه عليك غلا 🤓');
$ra = array_rand($rand, 1);
if($text == 'دووم'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}}}
$rand = array('الْحٍمَدٍ للـّہ🌹
     وانت??','بخيـــ😃ــر دامـّگ بـْخـّيرٌ يـّٱلـّغـٌالـّے 🌾');
$ra = array_rand($rand, 1);

if($text == 'كيفك'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
if($text == "$namebot"){
$rand = array('سويت هواي شغلات سخيفه بحياتي بس عمري مصحت على واحد وكلتله انجب 😑','نعم حبي 😎','اشتعلو اهلي شتريد 😠','لك افداك اني حبيبي انت اموووح 💋','بووووووووو 👻 ها ها فزيت شفتك شفتك لا تحلف 😂','هياتني اجيت 🌚❤️','راجع المكت حبيبي عبالك اني سهل تحجي ويا 😒','باقي ويتمدد 😎','لك دبدل ملابسي اطلع برااااا 😵😡 ناس متستحي','دا اشرب جاي تعال غير وكت 😌','هوه غير يسكت عاد ها شتريد 😷','انت مو اجيت البارحه تغلط عليه ✋🏿😒');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}
if($text == 'تخليني'){
$rand = array('لمن يصير عدك 🌚💗' , 'ديلك وصخ 🌚🌼' , 'ي فتح حلكك دابول 🌚😹');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}
if($text == 'البوت'){
$rand = array('معاجبك 🌚🌼 ؟' , 'شبي 😒😹' , 'صكارك/ج 🌚💗');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}
if($text == 'البوت واكف'){
$rand = array('تخسه 🌚💗' , 'لتجذب 🌚🌼' , 'لاع مو هاي مشتغل 🌚😹');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}
if($text == 'منو حذف رسايلي'){
$rand = array('محد 🌚💗' , 'البوت 😹💚' , 'معرف 😹🌿');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}
if($text == 'اكطع'){
$rand = array('سلطه من بعد البوت' , 'النعال عراسك 😹😹😹🌚' , 'شعليك 🌚💗');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}
if($text == 'المدرسه'){
$rand = array('اشش خلينه ناسينها 😹🌚' , 'الله لا يشوفنه 😒💗' , 'حزوع 😹😹🌚');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}
if($text == 'يعني شكد'){
$rand = array('فوك متتوقع 😻💗' , 'حد الموت 🙊🌼' , 'حد الجنون 😻🙊');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}
if($text == 'تبادل'){
$rand = array('متمل انت 😒🌿' , 'لع منريد 😹🌚' , 'بعدكم عايشين 🌚💗');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}
if($text == 'البوت عاوي'){
$rand = array('مضغوط 🌚😹 ', 'اهينك 🌚😹 ؟');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}
if($text=="انجب" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"حاظر تاج راسي انجبيت 😇
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="انجب" and $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"فوك ما مصعدك ادمن و تكلي انجب 😏 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="انجب" and $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"انجب انته لا تندفر 😒",
'reply_to_message_id'=>$message->message_id, 
]);
}
$textreply = array('parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'انعل ابوك' => 'وابوك عل واهس🌚✋🏻',
'تتزوجني' => 'اي تعال والمهر عليه ولايهمك🙊😂',
'تعال خاص' => 'ماشي خاص ع اختك مثلا🌚☝️🏽️',
'بوسني' =>'ٲٳٲمــﮨ﴿💋﴾ﮨﮨﮨﮨ﴿😚﴾ﮨــوٱآاﮨـٍٰۣۗح✵❤ لحلك/ق',
'مرحبا'=>'[مـراحـݕ ياۿـلا┋ 💖😻](https://t.me/saiko_2k)',
'السلام عليكم' => 'وعـﻟﻳـكم الــﺳـلام 😻🌸',
'الحمد لله' => "عســاها دو{مـو يـوم}وم┋ 💜'ء",
'كيفكم' => "انـا الحمـد ﻟﻟـﮧ'ه شـوف البقيـﮧ'ه┋💝'ء",
'هاي' => "هـايـات يـروحـي┋🌸😻'ء",
'جاو' => "اﻟﻟـﮧ'ه ويـاك حيـاتي┋💛💭ء",
'سلام' => "سـلامات حـﺒﯥ┋💝✨",
'اعشقك' => "اؤوؤف شۿـال جفـاف ¦ 😹😻'ء",
'اخباركم' =>"انـا الحمـد ﻟﻟـﮧ'ه شـوف البقيـﮧ'ه┋💝'ء",
'شكرا' => "{ •• الـّ~ـعـفو •• }",
'تمام' => "عســاها دو{مـو يـوم}وم┋💜'ء",
'بوس القروب' => "😁🌹امووووح فديتكم عضو عضو بس بنات انا استحرم غمضن خ عنْتر ورطني المطور┋💜'ء",
'حكومه' => "تاج راسي وراس صاحبتي قول يا بعد قلبي وحاجاته┋💜'ء",
'تكرهني' => "طـبعاً مـا اكـرهك ¦ 😹✨'ء",
'😒' => 'ماﮧ❃لكہ/.  قالب خـلـ🌚ـقتك🚶🏻',
'🌚' => 'منور صخام الجدر😹☝',
'بوسه' => 'امــہـ😘😚😘😚😘ــہــواااااح',
'انته وين' => 'بالــبــ🏠ــيــت',
'وينك' =>'بالــســ🚗ــيــارﮭﮧ',
'مح' => 'محات حياتي🙈❤',
'منور' => 'نِْـِْـــِْ([💡])ِْــــًِـًًْـــِْـِْـِْـورِْكِْ',
'دي' => '🚬 😌 يقولوها بس ليك/ي',
'تخليني' => 'تعالي ورة الكروب واخليك 😻🚶',
'غنيلي' =>'💖احبك انا  🙊 انا احبك 🙉 واتحدى واحد بلبشر زيي يحبك 🙊',
'المدرسة' => '😒🍃 الله لا يـوريـنا',
'اقفل التلاجة' => 'طفيتهه 😒🍃',
'شغل الاسبلت' => 'شغلته 🌚🍃 بس هتموتو من البرد ما عندي شغل ها',
'مايا خليفة' => '😂 عيب صايمين',
'فطور' =>'واخيراً 😍😍 عايز افطر ياخ جعان مدير القروب دا جابني هنا وقتلني بالجوع ',
'ههه' => '❀دِْوم حبيْ❀',
'هههه' => '❀دِْوم حبيْ❀',
'ههههه' => '❀دِْوم حبيْ❀',
'هههههه' => '❀دِْوم حبيْ❀',
'ههههههه' => '❀دِْوم حبيْ❀',
'هههههههه' => '❀دِْوم حبيْ❀',
'ههههههههه' => '❀دِْوم حبيْ❀',
'تركيا' => '😐🍃 فديتهه',
'عراسي' => 'يـسـلـمراسـك',
'تبادل' => 'ماا مليت من التبادل😓😐?•',
'اقطع' =>'سِـلُـطِـُه مٌـنَ بّْعـدِ 😅الُبّـ🤖ـوَتْ🎄',
'صايم' => 'اعمل ليك شنة مثلا 😐🍃',
'عطشان' => 'امشي ٲشـﮩـرب مــوية',
'جعان' => 'تـ؏ـال اكـلـني☺ 😐😂',
'😐' => 'مالك عامل زي الصنم كدا😒👋🏻',
'😭' => '😢 لا👈تـبـكـي 😿',
'وينها' => 'عايز يدخل خاص 😹',
'😍' => 'آإمـ﴿😚﴾ـح',
'ممكن' => 'ﺗْـ•ـﮩ؏ْﮩـ•ــ🚶ـاْل طبعااا ممكن 😋',
'حلو' => 'ٱنـﮩـت الاحـلآ 🌚❤️️',
'غبي' => 'انـت ٱڵٱغبۍ',
'😔' => 'مالك زعلان 😿🍃',
'☹️' => 'ماتزعل פـٍـٍبيبي  😢❤️🍃',
'شاكر' => 'هوي دا الملك وسيدها مالك وماله اناديهو ليك 😂😂',
'السلمندر' => 'اها☻ بدينا دخول للخاص بالله ماتزعجوا لينا تاج راسنا دا  🤤😜',
'شنو تتمنه' => 'أمنية حياتي أن أغوص في أعماقك🍷🌝',
'دايخ' => 'مڪ͜͡ﮩـ❦ـبـ﴿☺️﴾ـہسैـل┇?🌿',
'زهجان' => 'نِتـ؏ـاآركك ! 🙂🌸',
'👞' => 'ع راسك وراس الخلفك 🌚😹',
'😑' => 'مالك عصبي 🙁💔',
'🚶' => 'وين رايح وين جاي 🌚😹😹',
'وين المدير' => 'مالك عايز منو شنو🙄💔🍃',
'ماتدخل خاص' => 'مالك داخل خاص ع خالتك خلي يستفاد😕😹🙊',
'تنح' => 'من ما يكون معاك ببتدي يتنح كدا الشافع دا😸🤘🏿',
'🙄' => 'نزل عيونك لتنحول 😐😹😹' ,
);foreach($textreply as $txt => $send){if($text == $txt and in_array($chat_id, $replay_)){bot('sendMessage',['chat_id'=>$chat_id,'text'=>$send,'reply_to_message_id'=>$message->message_id,'parse_mode'=>'MARKDOWN','disable_web_page_preview'=>'true',]);}}
if($text == 'هلو' or $text == 'هلاو' or $text == 'هليو' or $text == 'مرحبا' or $text == 'هَــ(✋️)ــِلاؤ ↝ ✩🎀 شپـ👬ـأأب' or $text == 'مرحبه' or $text == 'مرحبة' or $text == 'سلام' or $text == 'هلو شلونكم' or $text == 'هلو شلونك' or $text == 'هلو شلونج' or $text == 'هلو اشلونج' or $text == 'هلو اشلونكم' or $text == 'ئلو' or $text == 'الو'  or $text == 'هلاو شلونكم' or $text == 'مرحبا شلونكم' or $text == 'سلام عليكم'  or $text == 'سلام عليكم ورحمه الله وبركاته' or $text == 'هاي' or $text == 'هلـِْ❀͜ـِْہٷاتہٞ❥' or $text == 'هِلَوِوِ' or $text == 'هلا حبي'  or $text == 'هاي شبابً شخباركم' or $text == 'مساء الخير' or $text == 'صباح الخير'  or $text == 'السلام عليكم' and $id != $reply_emoji){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$hi[$reply_hi], 
'reply_to_message_id'=>$message->message_id
]);
}


if($text == 'شلونكم' or $text == 'شلونج' or $text == 'اشلونج' or $text == 'اشلونكم'  or $text == 'شلونك' or $text == 'شونك'  or $text == 'اشلونك' or $text == 'شونج'  or $text == 'شخبارج'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$ho[$reply_ho],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'دوم' or $text == 'دومج' or $text == 'ادومين' or $text == 'ادوم'  or $text == 'دومج❤️'   or $text == 'دوم❤️'  or $text == 'دومج ❤️'  or $text == 'دوم ❤️' or $text == 'دايمه'  or $text == 'دايمة'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$dom[$reply_dom],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'شبيك' or $text == 'شبيج' or $text == 'اشبيك' or $text == 'اشبيج' or $text == 'اشبيكم' or $text == 'شبيكم' or $text == 'اشبيج😒' or $text == 'شبيج😒' or $text == 'اشبيج 😒' or $text == 'شبيج 😒' or $text == ' ٍّ﴿شـ✍️ـبـﮩٍّﮩٍّ﴿😪﴾ﮩٍّـيــج﴾ُ '){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$sh[$reply_sh],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'ليش' or $text == 'لويش' or $text == 'زين ليش' or $text == 'زين لويش' or $text == 'ليشش'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$why[$reply_why],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'هيج' or $text == 'هيجي' or $text == 'مو هيج' or $text == 'زين هيج' or $text == 'ليش هيج'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$thj[$reply_th],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'باي' or $text == 'باي باي' or $text == 'مع السلامه' or $text == 'مع سلامه'  or $text == 'مع السلامة' or $text == 'مع سلامة' or $text == 'بااي'  or $text == 'باااي' or $text == 'بايي'  or $text == 'جاو'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$bey[$reply_bey],
'reply_to_message_id'=>$message->message_id
]);
}


if($text == 'احم' or $text == 'ئحم' or $text == 'حم' or $text == 'أحم' or $text == 'أحم' or $text == 'احم احم'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$ahm[$reply_ahm],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'تعالي خاص' or $text == 'تعال خاص' or $text == 'تعي خاص' or $text == 'نع خاص' or $text == 'خاص'  or $text == 'خاصج'  or $text == 'خاصك'  or $text == 'شوف الخاص'  or $text == 'شوف خاصك'  or $text == 'شوفي خاصج' or $text == 'تعاي خاص😂'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$pv[$reply_pv],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'احبك' or $text == 'احبج' or $text == 'i love you' or $text == 'حبج' or $text == 'حبك' or $text == '❤️❤️' or $text == 'love' or $text == ' ilove u' or $text == 'احبج❤️' or $text == 'حبك❤️' or $text == 'احبك❤️' or $text == 'حبج❤️' or $text == 'احبج ❤️'  or $text == 'حبج ❤️'  or $text == 'حبك ❤️' or $text == 'احبك ❤️' or $text == 'احّ ـّـٌٍ❣ـٍّبّكَ' ){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$lov[$reply_lov],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'bot' or $text == 'BOT' or $text == 'بوت' or $text == 'البوت'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$boting[$reply_bot],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'اكلج' or $text == 'اكلك' or $text == 'كلك' or $text == 'كلج'  or $text == 'ممكن طلب'  or $text == 'ببكن طلب'  or $text == 'اكول'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$tal[$reply_tal],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'شبي' or $text == 'شبيه' or $text == 'شبيها' or $text == 'شبيهة'  or $text == 'كلي شبي'  or $text == 'كلي شبيه'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$wh[$reply_wh],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'ولد' or $text == 'اي ولد' or $text == 'ي ولد' or $text == 'يي ولد'  or $text == 'رجال'  or $text == 'لج اني ولد'  or $text == 'مو بنيه'  or $text == 'مو بنية'  or $text == 'مو بنت'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$boy[$reply_boy],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'بنت' or $text == 'اي بنت' or $text == 'ي بنت' or $text == 'يي بنت'  or $text == 'بنيه'  or $text == 'بنية'  or $text == 'ي ابنيه'  or $text == 'اي ابنية' or $text == 'اي ابنيه'  or $text == 'مو ولد'  or $text == 'مو صبي'  or $text == 'مش ولد'  or $text == 'مش صبي'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$girl[$reply_girl],
'reply_to_message_id'=>$message->message_id
]);
}

if($text == 'اي وينهة' or $text == 'اي وينه' or $text == 'وينة' or $text == 'وينهة'  or $text == 'وينها'  or $text == 'وينه' or $text == 'اي وينهة' or $text == 'اي وينها' ){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$ru[$reply_ru],
'reply_to_message_id'=>$message->message_id
]);
}
if($text == "صلوا على محمد"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اللهم صل علـّۓ  محمد وال محمد🌸",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😔"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"سلامات 😨❤️🍃",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "شكرا"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"•• الـّ~ـعـفو ••",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "😭"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"سلامات 🐸",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😡"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ابرد ياجني عتقرح😹🌚",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😍"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"دومك الفرحه ماتغيب عنك 🌚",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😉"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"😘",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😋"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🙄اشفيك",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "☹️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"خلك كذا احسن ☹",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "باي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بايات حياتي 😍 $name",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($text == "شو اسمه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"😂 اسمي ولا اسمه",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "اسمه"){
bot( sendMessage ,[
 chat_id =>$chat_id, 
 text =>"وانا شو عرفني اساله😂",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "اسمك"){
bot( sendMessage ,[
 chat_id =>$chat_id, 
 text =>"تصدق اني نسيت اسمي😂 ولا قولك انا 😂بوت ردود ضيفني لمجموعتك واتفاعل مع المشتركين",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "واو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"جميل 🌝🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}


$rend = array(
"مع السلامه حبيب🙂",
"في معية •اللّـہ̣̥ ي قَلبـ♡ــيے",
"سلم ع الاصحاب🚶‍♂",
"هااا لَيــِْ♡̷̴̬̩̃̊ـِْش. تركتنا🙄☹️",
"احسنت صنعاً 
الضيف الخفيف قميل🌚",
"$name غادر💔
خلاص انا مُـ (⊙︿⊙) ـآآبـِي القروب رح غادر☹️"
);

$ra = array_rand($rand, 1);

if($left){ 
bot('SendMessage',[
'chat_id'=>$chat_id,  
'message_id'=>$message->message_id,  
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}


$rand = array(
'زين ابوك يدري انو دزيت صوتك/ج 😧',
'ولك كافي بصمات عفناها🤒',
'شو هاي اني ما أسمع😔😕',
'نت زباله ماتنفتح حب💔🌚
شبيها',
'شو ماتمل دايما دز بصمات🤧');
$ra = array_rand($rand, 1);

if($message->voice  &&$from_id!==$sudo){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}

$rand = array(
        'زين ابوگ يدري انو دزيت صوره😨',
    'مْنـۈۋۈر هاي الي بـ الصوره انت 😍',
    'ولك شو مامليت م̷ـــِْن الصور انت 😒',
    'ماتنفتح الصوره نت زباله😔.
    شبيها حب☹️',
    'هاي صورتك لْـۆ صورت ابوك😻😸',
    'وووف دوختنا بصورك🤕',
    'ي جمالاھ😻 صوره تجنن',
    'كل صورك حلوه😕بس هاي مو زين😥',
"حبي $name اريدك تصمم ليـّۓ صوره ممكن😘😻");

    $ra = array_rand($rand, 1);
    if($message->photo &&$from_id!==$sudo){
    bot('SendMessage',[
    'chat_id'=>$chat_id,    
    'text'=>$rand[$ra],
    'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
    ]);
    }
if($text == "اتكرم" or $text == "تكرمم"){
bot( sendMessage ,[
 chat_id =>$chat_id, 
 text =>"🌷اللّـہ̣̥ يكرمك",
 reply_to_message_id =>$message->message_id, 
]);
}
    
if($text == "ابشر" or $text == "ابشرر"){
bot( sendMessage ,[
 chat_id =>$chat_id, 
 text =>"🌷بشــرڰ رَبّـ❤ـيٌ بالخير",
 reply_to_message_id =>$message->message_id, 
]);
}
    
    $desc = str_replace("ضع وصف لمجموعه ", "$desc", $text);
    if ($text=="ضع وصف لمجموعة $desc") {
        bot('setChatDescription',[
            'chat_id'=>$chat_id,
            'description'=>" $desc"
        ]);
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"تم وضع الوصف | `$desc`",
            'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,  'reply_to_message_id'=>$message->message_id,
        ]);
    }
    

$rand = array('لٱ تعب حالك التلي رح يوقف قريب','اي  ');
$ra = array_rand($rand, 1);

if($text == 'تبادل'){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra], 'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
# --     Source DevProx     --
if($text == "تحديث السورس" and in_array($from_id,$Dev) or $text == "تحديث سورس" and in_array($from_id,$Dev)){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>'⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
➖➖  ❨ 0% ❩  ➖➖','reply_to_message_id'=>$message->message_id, ]);
sleep(1);
bot('editMessageText',['chat_id'=>$chat_id,'message_id'=>$message_id + 1,'text'=>'⬛️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
➖➖  ❨ 10% ❩  ➖➖','reply_to_message_id'=>$message->message_id, ]);
sleep(1);
bot('editMessageText',['chat_id'=>$chat_id,'message_id'=>$message_id + 1,'text'=>'⬛️⬛️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
➖➖  ❨ 20% ❩  ➖➖','reply_to_message_id'=>$message->message_id, ]);
sleep(10);
bot('editMessageText',['chat_id'=>$chat_id,'message_id'=>$message_id + 1,'text'=>'⬛️⬛️⬛️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
➖➖  ❨ 30% ❩  ➖➖','reply_to_message_id'=>$message->message_id, ]);
sleep(1);
bot('editMessageText',['chat_id'=>$chat_id,'message_id'=>$message_id + 1,'text'=>'⬛️⬛️⬛️⬛️⬜️⬜️⬜️⬜️⬜️⬜️
➖➖  ❨ 40% ❩  ➖➖','reply_to_message_id'=>$message->message_id, ]);
sleep(1);
bot('editMessageText',['chat_id'=>$chat_id,'message_id'=>$message_id + 1,'text'=>'⬛️⬛️⬛️⬛️⬛️⬜️⬜️⬜️⬜️⬜️
➖➖  ❨ 50% ❩  ➖➖','reply_to_message_id'=>$message->message_id, ]);
sleep(1);
bot('editMessageText',['chat_id'=>$chat_id,'message_id'=>$message_id + 1,'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬜️⬜️⬜️⬜️
➖➖  ❨ 60% ❩  ➖➖','reply_to_message_id'=>$message->message_id, ]);
sleep(1);
bot('editMessageText',['chat_id'=>$chat_id,'message_id'=>$message_id + 1,'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️⬜️⬜️
➖➖  ❨ 70% ❩  ➖➖','reply_to_message_id'=>$message->message_id, ]);
sleep(1);
bot('editMessageText',['chat_id'=>$chat_id,'message_id'=>$message_id + 1,'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️⬜️
➖➖  ❨ 80% ❩  ➖➖','reply_to_message_id'=>$message->message_id, ]);
sleep(1);
bot('editMessageText',['chat_id'=>$chat_id,'message_id'=>$message_id + 1,'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
➖➖  ❨ 90% ❩  ➖➖','reply_to_message_id'=>$message->message_id, ]);
sleep(1);
bot('editMessageText',['chat_id'=>$chat_id,'message_id'=>$message_id + 1,'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️
➖➖  ❨ 100% ❩  ➖➖','reply_to_message_id'=>$message->message_id, ]);
sleep(2);
bot('editMessageText',['chat_id'=>$chat_id,'message_id'=>$message_id + 1,'text'=>"❗️🚸 ⌯ جٱري تـۧحډيث سۄرس ډيف برۄكس",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);
sleep(3);
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"❗️🔑 ⌯ تـۖم ٱڵتـۧحډيث ٱڵى ٱلٱصدٱر ٱڵجډيـډ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);} 
# --     Source DevProx     --
echo "Errors No found";
# ------------------------------------------------
# -- This Source Was Developed By (ABS) @[@$DevUser].--
# --   This Is The Source Channel @saiko_2k .   --
# --                - DevProx -                 --
# --        -- https://t.me/saiko_2k --         --
# ------------------------------------------------ 
