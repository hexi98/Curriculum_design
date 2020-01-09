<!-- 
*****************************

author：hexi
time: 2018/06
function:评论框和评论显示

***************************** 
-->
<!-- 显示评论 -->
<!-- author：hexi -->
<!DOCTYPE html>
<html>
<head>
	<title>文章评论</title>
<meta charset="utf-8">
 
<style type="text/css">  
    #comments{  
        margin:10px auto;  
        background-color: rgba(255,255,255,0.9);
        /*display: none;*/
    }  
    #post{  
        margin-top:10px;  
    }  
    #comments p,  
    #post p{  
        line-height:30px;  
    }  
    #comments p span{  
        margin:4px;  
        color:#bdb8b8;  
    }  
    #message{  
        position: absolute;  
        top: 40%;  
        left: 100px;  
        width: 200px;  
        height: 50px;  
        background: #f2f2f2;  
        border: 1px solid;  
        border-radius: 3px;  
        line-height: 50px;  
        text-align: center;  
        display: none;  
    }  
</style> 

</head>
<body>
<!--onclick="return false" -->
<form  action="comment_insert.php" method="post"  >
	<div id="comments">
	<p>评论一下：</p>
	<p><textarea class="input" id="txt" name="txt" style="width:100%; height:80px"></textarea></p>
	<p><input type="submit" class='btn' value="发表" id="add"></p> 
    </div>
     <div id="message"></div>
       
     
<hr style="border: 1px dashed #000">

</form>
 
</body>

<script charset="UTF-8" type="text/javascript" src="../lib/jQuery/jquery-3.3.1.js"></script>   
<script  charset="UTF-8" src="../lib/pagination/mricode.pagination.js"></script>
<script charset="UTF-8" src="../js/Tweet.js"></script>
</html>