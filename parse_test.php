<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// @mysql_connect("localhost",'root','Mimin0');
// @mysql_select_db("shemale_embeds");

  $content = fileGetContentz("http://cart.bilsteinus.com/search/setting=4600%20Series%20(Sport)");

$content = between('<h3 class="productlink">','<script type="text/javascript">', $content);
$items = array();
foreach ($content as $key => $cont) {
  $pos      = strpos($cont, "<a href='");
  $pos1     = strpos($cont, "'>");
  $text   = substr($cont, $pos, $pos1 - $pos);
  $text     = str_replace("<a href='", "", $text);
  $items[] = "http://cart.bilsteinus.com".$text;

}
print_r($items);

/*$items = array('24-000321','47-217522','24-001861','24-001960');
*/
$array_data = array();
foreach ($items as $key => $item) {
  $old_number = "";
  $content = fileGetContentz($item);

  $pos      = strpos($content, 'b>Part Number:</b>');
  $pos1     = strpos($content, '<span style="color: red">Series</span>');
  $part_number   = substr($content, $pos, $pos1 - $pos);
  $part_number      = str_replace('b>Part Number:</b>', "", $part_number);
  $part_number      = str_replace('<br /><br /><b>', "", $part_number);
  $old_number       = trim(str_replace('<b>Old Part Number</b>: ', "", $part_number));
  $part_number      = trim(str_replace('<br />', "", $part_number));
  $array_data[$item]['number'] = $part_number ;
  $array_data[$item]['old_number'] = $old_number  ;

  $pos      = strpos($content, '<div class="thumbnail">');
  $pos1     = strpos($content, 'class="lightbox"');
  $img   = substr($content, $pos, $pos1 - $pos);
  $img      = str_replace('<div class="thumbnail">', "", $img);
  $img      = str_replace('<a href="', "", $img);
  $img      = trim(str_replace('"', "", $img));
  $img      = "http://cart.bilsteinus.com".$img;
  $array_data[$item]['img'] = "<img width='100px' src='".$img."'>" ;
}

// foreach ($array_data as $key => $data) {
//   $rows = mysql_query("INSERT INTO `item`(`image`, `number`) VALUES ('".$data['img']."','".$data['number']."')");  
// }
//       $dirs = mysql_query("SELECT `dir` FROM `gay_downloads` WHERE `rn` = '" . $rn['paysite'] . "'");
//       while($key = mysql_fetch_array($dirs)){ 
//         $dir = $key['dir'];
//       } 

// $data = array('username' => 'test', 'password' => '1234');
// $attr = array('Content-Type' => 'text/html','Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8');

function login($url,$data,$attr){
   $ch = curl_init();
   
   if(strtolower((substr($url,0,5))=='https')) { // если соединяемся с https
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
   }
   curl_setopt($ch, CURLOPT_URL, $url);
   // откуда пришли на эту страницу
   curl_setopt($ch, CURLOPT_REFERER, $url);
   // cURL будет выводить подробные сообщения о всех производимых действиях
   curl_setopt($ch, CURLOPT_VERBOSE, 1);
   curl_setopt($ch, CURLOPT_HTTPHEADER, $attr);
   curl_setopt($ch, CURLOPT_POST, 1);
   curl_setopt($ch, CURLOPT_TIMEOUT , 1);
   curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
   curl_setopt($ch, CURLOPT_POSTFIELDS,implode("&" , $data));
   curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0");
   curl_setopt($ch, CURLOPT_HEADER, 1);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   //сохранять полученные COOKIE в файл
   curl_setopt($ch, CURLOPT_COOKIEJAR, '');
   curl_setopt($ch, CURLOPT_COOKIEFILE, '');

   $result=curl_exec($ch);

   curl_close($ch);

   return $result;
}

 function fileGetContentz($url){
sleep(1);
    $settings = array(
            CURLOPT_RETURNTRANSFER => true,
            // CURLOPT_FOLLOWLOCATION => true,
            //CURLOPT_MAXREDIRS      => 4,
            CURLOPT_HEADER         => false,
            CURLOPT_TIMEOUT        => 1,
            CURLOPT_USERAGENT      => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0',
            #CURLOPT_COOKIEJAR => '/logs/cookie'.$this->tubeRn.'.tmp'
    );

    $socket = curl_init($url);
    curl_setopt_array($socket, $settings);
    $a = curl_exec($socket);

    return $a;
    
}

function between($start, $end, $content)
{
    
    preg_match_all('~' . $start . '(.*?)' . $end . '~is', $content, $result);
    
    return $result[1];
    
}


?>