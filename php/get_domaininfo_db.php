<?php 
  
   include("conn.php");
  
   $sql="select class from student ";
	$stmt=mysqli_prepare($conn,$sql);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt,$class);

    $count1=0;$count2=0;$count3=0;$count4=0;$count5=0;

	while(mysqli_stmt_fetch($stmt)){
           $len=strlen($class);
   		 // $arrMail=explode("@",$user_name);
             $rest = substr($class,0,$len-3);
		  // echo $arrMail[1]." ";
		if($rest=="计算机"){
			$count1++;
		}
		else if($rest=="软工"){
			$count2++;
		}
		else if($rest=="物联网"){
			$count3++;
		}
		else if($rest=="信息"){
			$count4++;
		}
		else{
			$count5++;
		}
		
	}
	$arr=[$count1, $count2, $count3,$count4, $count5];
  

 mysqli_stmt_close($stmt);
	mysqli_close($conn); 
	echo json_encode($arr);
 ?>