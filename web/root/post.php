<?php
session_start();
if(isset($_SESSION['name'])){
    $text = $_POST['text'];
     
    $cb = fopen("./log.html", 'a');
    fwrite($cb, "
	<li class='chatmsg'><div class='msgcont'><span class='msg'><img class='chatflag' alt='' title='il' src='/cf/il.gif'><span class='chatname' role='button' title='".$_SESSION['name']."' tabindex='-1' style='color: rgb(13, 52, 16); cursor: pointer;'>".$_SESSION['name']."</span>: ".stripslashes(htmlspecialchars($text))."</span><span class='chatts'>15:25:17</span></div></li>
	
	
	
	
");
    fclose($cb);
}
?>