<?php
// 重定向函数
function page_redirect($category,$url,$info){
	echo "<script>";
	echo "alert('".$info."');";
	if($category==1){
		echo "window.location=\"$url\";";
	}
	else{
		echo "window.history.back();";
	}
	echo "</script>";
	die();
}

?>