
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>网易邮箱注册</title>
	
	<link rel="stylesheet" type="text/css" href="../css/A_RegistrationForm.css">
<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link rel="shortcut icon"  href="images/favicon.ico"> -->
</head>
<body>
<?php 
	// 引入数据库
    //$sid=$_GET["sid"];
	include("conn.php");
	// 查询对应id的记录，并且读取用户名，手机号，其中用户名为”xx@163.com“的形式
	$sql="select AFName,AFPclass,AFSno,AFmobile,hoppy,strength,InterestClass from application_form where AFId=?";
	$stmt=mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,"i", $AFId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt,$AFName,$AFPclass,$AFSno,$AFmobile,$hoppy,$strength,$InterestClass);
    mysqli_stmt_fetch($stmt);//获取结果集的记录行
	// 用户名的分离操作，分块显示到对应的表单域控件中
	// 提示：可将字符串转换为数组，php中可用explode函数
     //$arrMail=explode("@",$name);
 ?>

<main>
<form  action="editform_db_S.php?AFId=<?php echo $AFId;?>" method="post" class="edit">
	<!-- class="regForm" -->
	<!-- id="regMain" -->
		<!-- 姓名 -->
<div class="ApplicantsSno">
			<dl class="ApplicantsSno-item">
				<dt class="ApplicantsSno-item-txt" id="prompt">
					学号：
				</dt>
				<dd class="ApplicantsSno-item-cs">
					<input type="text" name="AppSno" style="color: black" value="<?php echo $AFSno; ?>" readonly="readonly">	
				</dd>
			</dl>
		</div>
		
		<!-- 兴趣爱好 -->
		<div class="Hobbies">
			<dl class="Hobbies-item">
				<dt class="Hobbies-item-txt" id="prompt">
					兴趣爱好：
				</dt>
				<dd class="Hobbies-item-cs">
					<input type="text" name="AppHoppy" style="color: black" value="<?php echo $hoppy; ?>" >
				</dd>
			</dl>
		</div>

		<!-- 特长 -->
		<div class="strength">
			<dl class="strength-item">
				<dt class="strength-item-txt" id="prompt">
					特长：
				</dt>
				<dd>
					<input type="text" name="AppStrength" style="color: black"  value="<?php echo $strength; ?>">
				</dd>
			</dl>
		</div>
		<!-- 感兴趣的支教科目 -->
			<div class="subject">
			<dl class="strength-item">
				<dt class="subject-item-txt" id="prompt">
					感兴趣的支教科目：
				</dt>
				<dd>
					<!-- <input type="text" name="AppSubject" style="color: black"> -->
					<select name="AppSubject" class="AppSubject-item" id="AppSubjectSelect">
						<option value="语文">语文</option>
						<option  value="数学">数学</option>
						<option value="英语">英语</option>
						<option value="计算机">计算机</option>
						<option value="体育">体育</option>
						<option value="科学">科学</option>
						<option value="音乐">音乐</option>
						<option value="美术">美术</option>
					</select>

				</dd>
			</dl>
		</div>
		
	<div id="register">
	
				<input type="submit" name="submit" value="保存修改" >
		
	</div>
</form>
</main>

<?php 
// 关闭数据库连接
     mysqli_stmt_close($stmt);
     mysqli_close($conn);
?>
</body>

<script>
	// 设置对应项域名，例如名称中域名为“163.com”，对应的select默认项为该项
	function setDomain(domain){
		// 获取select对象
		var select=document.getElementById("AppSubjectSelect");
		// 取得select的子元素对象
		var opts=select.childNodes;
		// 遍历查找对应的option项，并设置属性selected为“selected”
			for (var i = 0; i < opts.length; i++) {
				if(opts[i].value==domain)
					opts[i].setAttribute("selected","selected");
			}
	}
	// 调用并传入数据库中取得的域名
	setDomain("<?php echo $InterestClass; ?>");

</script>