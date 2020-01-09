<!DOCTYPE html>
<html>
<head>
	<title>教师联系方式查找</title>
	<style type="text/css">
	body{
		 background-color: #f5f5f5;
	}
		.breadcrumb
		{
			margin-top: 3.5em;
		}
		.ResultIframe{
			
		}
		#form-control{
			width: 120%;
		}
		#Search-btn,.form-group{
			margin-left:1em;
			display: inline-block;
		}
		#Search-btn{
			position: relative;
			float: right;
			right: 2em;
	
		}
	</style>
</head>
<body>
<?php
	include("header.php");
?>
 <ol class="breadcrumb">
      <li><a href="curriculum_design.php">首页</a></li>
      <li class="active">教师联系方式查询</a></li>
 </ol>

<!-- 搜索框 -->
<div class="search">
	<form class="navbar-form navbar-left" action="Teacher_db.php" method="post" id="formId" target="ResultIframe">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="请输入需要查找的教师姓名" name="TeachName" id="form-control">

        </div>

        <button type="submit" class="btn btn-success" id="Search-btn">
        	<span class="glyphicon glyphicon-zoom-in">
				</span> 查找</button>
	</form>
</div>
<iframe src(unknown) class="ResultIframe" name="ResultIframe" style="display: none;"></iframe>
<!-- 呈现搜索内容 -->
<div class="Result">
	
</div>

</body>
<?php
	include("../html/footer.html");
?>

<script  charset="UTF-8" src="../lib/jQuery/jquery-3.3.1.js"></script>
<script  charset="UTF-8" src="../lib/pagination/mricode.pagination.js"></script>
<script  charset="UTF-8" src="../js/Teacher.js"></script>
</html>