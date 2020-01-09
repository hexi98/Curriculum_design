<!-- *****************************

author：hexi
time: 2018/04
function:头部导航栏

*****************************  --> 
<!-- 头部导航区 -->
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>

		
<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="ke.css"> -->
    
	<header>
	<nav class="navbar navbar-default navbar-fixed-top">

		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">校园114</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li >
		        	<a href="curriculum_design.php">首页 <span class="sr-only">(current)</span></a>
		        </li>
		        <li >
		          <a href="Introduction.php"   role="button" aria-haspopup="true" aria-expanded="false">部门介绍</a>
	
		        </li>
		      </ul>
		      <div class="head-welcome">
		      	<?php
			        // 在php.ini里 session.auto_start = 1，所以不用在手工启动
					if(isset($_SESSION["user"]))
						{

							// echo "欢迎你,".$_SESSION["user"]." ";
							echo "欢迎你，"."<a href='Personal.php'>".$_SESSION["user"]."</a>"." ";
							echo"<a href='logout.php'>退出</a>"." ";

						}
					else
					{
						echo "欢迎你,未知用户&nbsp";
						echo "<a href='LoginForm.php'>登录</a>&nbsp";
						echo"<a href='RegistrationForm.php'>注册</a>&nbsp";
					}
					 ?>
		      </div>
			
		   <!--    <form class="navbar-form navbar-right">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-success">Submit</button>
		      </form>  -->
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		        
		</nav>
</header>

