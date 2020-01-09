<!DOCTYPE html>
<html lang="zh-CN">
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>校园114党员服务中心</title>
	
	<link rel="stylesheet" type="text/css" href="../css/a.css">
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   
</head>
<body style="background-color: #f5f5f5">
    
	<div id="header">
		<img src="../image/picture1.png" class="picture1"><span>校园114党员服务中心</span> 
		<div class="header1">
	 	 <?php include("A_header.php");?>
	 </div>
	</div>
   
  <div class="left-part">
	 <h2><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>&nbsp功能</h2> 
	
         <!-- 侧导航栏 -->
  <div id="nav">

		<ul>
			<li id="item1">
				用户管理
				<ul class="second-nav" >
					<li id="item2"></li>
					<li id="item3"></li>
					<li id="item4"></li>
					<li id="item5"></li>
				</ul>
			</li>
			<li id="item6" >用户统计</li>
		</ul>
	 </div>
  </div> 
    
    <div id="main">
             
    	<!-- frameborder:是否显示 <iframe> 周围的边框 -->
        <iframe src="home_page_right.php" frameborder="0" id="mainframe" style="border: 3px dashed grey;background-color: white"></iframe>
       
	</div>

<!-- 页脚 -->
<div id="footer" style="color: grey">
	校园114党员服务中心
</div>
</body>
 <script src="../lib/jQuery/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="../js/echarts.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
		 <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		//（2）发送AJAX请求
		var arr=[];
		$.get("menu_db.php",null,function(data){
			arr=$.parseJSON(data);
			str="<ul >";
			//console.log("data");
			//(4)解析JSON数据，并动态生成菜单的HTML结构
			$.each(arr,function(index,obj){
				if(obj.level==1){
					str+="<li  id='item"+obj.id+"'>";
					str+=obj.name;str+="<span class='caret'>"+"</span>";
					str+="</li>";
				}
				
			});
			str+="</ul>";
			$("#nav").html(str);
		});

		//jQuery的一级菜单单击事件注册
	//click表示注册的事件，#nav ul li表示HTML的访问层次，第3个为单击处理函数
	$("body").on("click","#nav ul li",function(e){ 
		//新点击后，移除上一次的二级菜单
		$("ul.second-nav").remove();
		//开始生成二级菜单的HTML结构
		str="<ul style='background-color:white' class='second-nav'>";
		//取得一级菜单的id
		id=this.id;
		id=id.substring(4,id.length);

		//循环遍历菜单数组arr
		//arr此变量为页面级变量，多个回调函数中都需要用到
		$.each(arr,function(index,obj){
			//满足二级菜单且父级菜单为点击项
			if(obj.level==2&&obj.parent_id==id){
				//拼接二级菜单的HTML结构
				str+="<li id='item"+obj.id+"'>";//
				str+="<a href ='"+ obj.url+"'>";
				str+=obj.name+"</a></li>";

			}
		});
		str+="</ul>";
		//将拼接好的二级菜单结构追加到一级菜单对象中
		$(this).append(str);
	});

	//二级菜单事件注册
    $("body").on("click","#nav ul.second-nav a",function(e){ 
    	//删除所有该一级下的二级菜单的active类
            $("nav ul.second-nav a").removeClass("active");
    	//获取当前点击对象
            currentNode=this;  //console.log(url);

        //获取当前点击对象的href值
           url=$(currentNode).attr("href");

    	//当前对象添加active类
           $(currentNode).addClass("active");

    	//设置右边iframe的src属性值
            $("#mainframe").attr("src",url);

    	//阻止默认行为（event.preventDefault()）和阻止冒泡（event.stopPropagation())）
           return false;
       });
	</script>
</html>