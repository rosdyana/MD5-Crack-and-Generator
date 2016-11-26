<?php
set_time_limit(0);
//////////////////////////////////////////
// CONFIGURATION WORLDLISTS
@$dir="dictionary";
@$dico1 = "$dir/2.txt";
@$dico2 = "$dir/1.txt";
@$dico3 = "$dir/3.txt";
@$dico4 = "$dir/4.txt";
@$dico5 = "$dir/5.txt";
@$dico6 = "$dir/6.txt";
@$dico7 = "$dir/7.txt";
@$dico8 = "$dir/8.txt";
@$dico9 = "$dir/9.txt";
@$dico10= "$dir/10.txt";
//////////////////////////////////////////
@$dico1_pass = count(file($dico1)); 
@$dico2_pass = count(file($dico2)); 
@$dico3_pass = count(file($dico3)); 
@$dico4_pass = count(file($dico4)); 
@$dico5_pass = count(file($dico5)); 
@$dico6_pass = count(file($dico6)); 
@$dico7_pass = count(file($dico7)); 
@$dico8_pass = count(file($dico8)); 
@$dico9_pass = count(file($dico9)); 
@$dico10_pass= count(file($dico10));
//////////////////////////////////////////
?>
<html>
<head>
<link REL="SHORTCUT ICON" HREF="http://i472.photobucket.com/albums/rr90/babycorp/indonesia.gif">
<script language="JavaScript">

function tb5_makeArray(n){
 this.length = n;
 return this.length;
}

tb5_messages = new tb5_makeArray(1);
tb5_messages[0] = ":: Md5 Hash Cracker and Generator ::";
tb5_rptType = 'infinite';
tb5_rptNbr = 10;
tb5_speed = 50;
tb5_delay = 2000;
var tb5_counter=1;
var tb5_currMsg=0;
var tb5_stsmsg="";
function tb5_shuffle(arr){
var k;
for (i=0; i<arr.length; i++){
 k = Math.round(Math.random() * (arr.length - i - 1)) + i;
 temp = arr[i];arr[i]=arr[k];arr[k]=temp;
}
return arr;
}
tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){
 tb5_arr[i] = i;
 tb5_sts[i] = "_";
}
tb5_arr = tb5_shuffle(tb5_arr);
function tb5_init(n){
var k;
if (n == tb5_arr.length){
 if (tb5_currMsg == tb5_messages.length-1){
 if ((tb5_rptType == 'finite') && (tb5_counter==tb5_rptNbr)){
 clearTimeout(tb5_timerID);
 return;
 }
 tb5_counter++;
 tb5_currMsg=0;
 }
 else{
 tb5_currMsg++;
 }
 n=0;
 tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
 tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
 for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){
 tb5_arr[i] = i;
 tb5_sts[i] = "_";
 }
 tb5_arr = tb5_shuffle(tb5_arr);
 tb5_sp=tb5_delay;
}
else{
 tb5_sp=tb5_speed;
 k = tb5_arr[n];
 tb5_sts[k] = tb5_messages[tb5_currMsg].charAt(k);
 tb5_stsmsg = "";
 for (var i=0; i<tb5_sts.length; i++)
 tb5_stsmsg += tb5_sts[i];
 document.title = tb5_stsmsg;
 n++;
 }
 tb5_timerID = setTimeout("tb5_init("+n+")", tb5_sp);
}
function tb5_randomizetitle(){
 tb5_init(0);
}
tb5_randomizetitle();

</script>
<style type="text/css">
<!--
body, table, select, input {
color:#00FF00; background-color:#000000;
font-family:Arial; font-weight:bolder; font-size:12pt }
.activ{ color:#FFFFFF
//-->
</style>
<style type="text/css">
a:link { text-decoration:none; font-weight:bold; color:#FFFFFF; }
a:visited { text-decoration:none; font-weight:bold; color:#FFFFFF; }
a:hover { text-decoration:none; font-weight:bold; background-color:#255; }
a:active { text-decoration:none; font-weight:bold; background-color:#255; }
a:focus { text-decoration:none; font-weight:bold; background-color:#255; }
</style>
</head>
<body>
<center>
<center>
<img src="http://r3m1ck.us/IDC.jpg" alt="" width="150" height="175" /></center>
<table border="1" cellpadding="2">
<tr><td bgcolor="000000"><font size="4" class="activ">Md5 Hash Cracker and Generator</font></td></tr>
</table>
<br>
<center>hash example : 20d3e09043e4f8e3440308aa5a473fad </center>
<br>
<form action="index.php" method="post">
<table border="1" cellpadding="2">
<tr>
<td bgcolor="000000">Worldlist</td>
<td><select name="dictionary" size="1">
<option value="<?php  echo $dico1; ?>"> List1   (<?php  echo $dico1_pass; ?>)</option>
<option value="<?php  echo $dico2; ?>"> List2  (<?php  echo $dico2_pass; ?>)</option>
<option value="<?php  echo $dico3; ?>"> List3  (<?php  echo $dico3_pass; ?>)</option>
<option value="<?php  echo $dico4; ?>"> List4  (<?php  echo $dico4_pass; ?>)</option>
<option value="<?php  echo $dico5; ?>"> List5  (<?php  echo $dico5_pass; ?>)</option>
<option value="<?php  echo $dico6; ?>"> List6  (<?php  echo $dico6_pass; ?>)</option>
<option value="<?php  echo $dico7; ?>"> List7  (<?php  echo $dico7_pass; ?>)</option>
<option value="<?php  echo $dico8; ?>"> List8  (<?php  echo $dico8_pass; ?>)</option>
<option value="<?php  echo $dico9; ?>"> List9  (<?php  echo $dico9_pass; ?>)</option>
<option value="<?php  echo $dico10; ?>"> List10 (<?php  echo $dico10_pass; ?>)</option>
</select></td>
</tr>
<tr>
<td bgcolor="000000">Hash</td>
<td><input type="text" name="hash" size="35" /> <input type="submit" name="ok" value=" Crack " /></td>           
</tr>
<tr>
<td bgcolor="000000">Pass</td>
<td><input type="text" name="pass" size="35" /> <input type="submit" name="ok" value=" Crypt " /></td>
</tr>
</table>
</form>
<br>
<br>
<?php
$ok = isset($_POST['ok']) ? $_POST['ok'] : '';
$dictionary = isset($_POST['dictionary']) ? $_POST['dictionary'] : '';
$pass = isset($_POST['pass']) ? trim($_POST['pass']) : '';
$hash = isset($_POST['hash']) ? trim($_POST['hash']) : '';

// Mode l33t ( a=4, e=3, o=0, A=4, E=3 & O=0 )
$letters = array('a', 'e', 'o', 'A', 'E', 'O');
$l3tt3rs = array('4', '3', '0', '4', '3', '0');

if(($ok == ' Crypt ') && (!$pass)){ echo '<center><font size=48 / style=Bobcat / color=00FF00><b><S><blink>Lets Flow!</blink></b></s></font></center>'; exit; }
if(($ok == ' Crack ') && (!$hash)){ echo '<center><font size=48 / style=Bobcat / color=00FF00><b><S><blink>Lets Flow!</blink></b></s></font></center>'; exit; }
if(($ok == ' Crack ') && (strlen($hash) <> 32)){ echo '<center><font size=48 / style=Bobcat / color=00FF00><b><S><blink>This is not a Hash Dude...</blink></b></s></font></center>'; exit; }

if(($ok == ' Crack ') && ($hash != '')){
$file = @fopen($dictionary,'r') or die ("<h3>Impossible $dictionary</h3>");
$i = 1;

while(!feof ($file)){
$buf = fgets($file, 4096);
$buf1= md5(trim($buf));                
$buf2= md5(md5(trim($buf)));          
$buf3= md5(strtolower(trim($buf)));  
$buf4= md5(strtoupper(trim($buf))); 
$buf5= md5(ucfirst(trim($buf)));   
$buf6= md5(str_replace($letters, $l3tt3rs, trim($buf))); 

if($hash == $buf1){
$pass1 = $buf;
@fclose($file);
echo "<h3>$hash </br><font color=white>Cracking Successful Password =</font><font color=red size=20> $pass1</font></h3>\n";
break;}

else
if($hash == $buf2){
$pass2 = $buf;
@fclose($file);
echo "<h3>$hash </br><font color=white>Cracking Successful Password =</font><font color=red size=20> $pass</font></h3>2\n";
break;}

else
if($hash == $buf3){
$pass3 = $buf;
fclose($file);
echo "<h3>$hash </br><font color=white>Cracking Successful Password =</font><font color=red size=20> ".strtolower($pass3)."</font></h3>\n";
break;}

else
if($hash == $buf4){
$pass4 = $buf;
@fclose($file);
echo "<h3>$hash </br><font color=white>Cracking Successful Password =</font><font color=red size=20> ".strtoupper($pass4)."</font></h3>\n";
break;}

else
if($hash == $buf5){
$pass5 = $buf;
@fclose($file);
echo "<h3>$hash </br><font color=white>Cracking Successful Password =</font><font color=red size=20> ".ucfirst($pass5)."</font></h3>\n";
break;}

else
if($hash == $buf6){
$i++;
$pass6 = $buf;
fclose($file);
echo "<h3>$hash </br><font color=white>Cracking Successful Password =</font><font color=red size=20> ".str_replace($letters, $l3tt3rs, $pass6)."</font></h3>\n";
break;}

$i++; }
@fclose($file);
}

else
if(($ok == ' Crypt ') && ($pass != '')){
$crypt1 = md5($pass);
$crypt2 = md5(md5($pass));
$crypt3 = md5(strtolower($pass));
$crypt4 = md5(strtoupper($pass));
$crypt5 = md5(str_replace($letters, $l3tt3rs, $pass));
?>
<table border=1 cellpadding=2>
<tr><td bgcolor=000000>Word  </td><td bgcolor=000000><font class=activ><?php  echo $pass; ?></font></td></tr>
<tr><td bgcolor=red>Md5 Hash</td><td bgcolor=000000><font class=activ><?php  echo $crypt1; ?></font></td></tr>
</table>
<?php }else{ echo "";} ?>

<center><div class='footer'>

     Copyright &copy; 2010~dead <a href="http://r3m1ck.us/" target=_blank>r3m1ck</a>
  </div></center>                
</center>
</body>
</html>

