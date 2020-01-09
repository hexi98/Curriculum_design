
<!-- 
*****************************

author：hexi
time: 2018/05
function:推文主页面

*****************************
 -->
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<?php
	include("header.php");
	?>

   <link rel="stylesheet" type="text/css" href="../css/Tweet.css">
   <style type="text/css">
     .breadcrumb{
      margin-top: 3.5em;
     }
     .right-part{
      display: none;
     }
   </style>

</head>
<body>

<!-- <主要信息> -->
  <ol class="breadcrumb">
      <li><a href="curriculum_design.php">首页</a></li>
      <li><a href="SocialPractice.php">社会实践</a></li>
      <li class="active">支教风采</li>
    </ol>

<div id="mainbar"> 
	 <div class="left-part">
    
	 	<h2><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>&nbsp我们，相遇过...</h2> 
        <!-- 侧导航栏-->
     <ul class="nav nav-pills nav-stacked" id="tweet-choice"><!-- glyphicon glyphicon-asterisk -->
        <li role="presentation" id="tweet-choice1" name="item1">◉ 出征，我们相约马岙村。
        </li>
  		  <li role="presentation" id="tweet-choice2" name="item2">◉ 以梦为马，驻守马岙。</li>
  		  <li role="presentation" id="tweet-choice3" name="item3">◉ 怀揣支教梦，走进马岙小学</li>
  		  <li role="presentation" id="tweet-choice4" name="item4">◉ 正青春，我们不愿将就</li>
  		  <li role="presentation" id="tweet-choice5" name="item5">◉ 不忘初心，继续前行</li>
     </ul>

	 </div>

	 <div class="right-part">
          <!-- 用于存储推文的信息 -->
          <div class="tweet-Content">
          
          </div>
          <!-- 推文点赞 -->
          <div class="tweet-Like">
             <a href="#" style="color:black"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true">点赞</span></a>
          </div>

           <hr style="border:#000 1px dotted" >
          <!-- 推文评论框 -->
          <div class="tweet-Comment" >
              <?php 
                    include("comment_index.php");
              ?>
          </div> 
          <!-- 评论内容 -->
          <div class="tweet-Select_Comment">
                
          </div>
         <div id="pageButton"> 

         </div>

           <hr style="border:#000 1px dotted" >
           
	 </div> <!-- end of right-part -->

</div> <!-- end of mainbar -->


<!-- 页脚 -->
<?php
  include("../html/footer.html");
?>

<script  charset="UTF-8" src="../lib/jQuery/jquery-3.3.1.js"></script>
<script  charset="UTF-8" src="../lib/pagination/mricode.pagination.js"></script>
<script charset="UTF-8" src="../js/Tweet.js"></script>  
<script type="text/javascript">
  
</script>
</body>
</html>