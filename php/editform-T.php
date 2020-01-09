
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>网易邮箱注册</title>
	
	<link rel="stylesheet" type="text/css" href="../css/A_RegistrationForm.css">
<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php 
	// 引入数据库
	include("conn.php");
	$sql="select news_name,news_author,news_time,news_content from news where news_id=?";
	$stmt=mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,"i", $news_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt,$news_name,$news_author,$news_time,$news_content);
    mysqli_stmt_fetch($stmt);//获取结果集的记录行

 ?>

<main>
<form  action="editform_db_T.php?news_id=<?php echo $news_id;?>" method="post" class="edit">
		<!-- 推文标题 -->
       <div id ="essay_name">
				<dl class="name-item">
					<dt class="name-item-txt" id="prompt" >
						推文标题
					</dt>
					<dd class="name-item-cs" >
						<input type="text" name="essay_name" id="essayNameIpt" value="<?php echo $news_name; ?>" >
					</dd>
				</dl>
			</div>
		
		<!-- 推文作者 -->
		<div id ="essay_author">
				<dl class="name-item">
					<dt class="name-item-txt" id="prompt" >
						推文作者
					</dt>
					<dd class="name-item-cs" >
						<input type="text" name="essay_author" id="essayAuthorIpt" value="<?php echo $news_author; ?>" >
					</dd>
				</dl>
			</div>

		<!-- 推文发布时间 -->
		<div id ="essay_time">
				<dl class="name-item">
					<dt class="name-item-txt" id="prompt" >
						推文时间
					</dt>
					<dd class="name-item-cs" >
						<input type="text" name="essay_time" id="essayTimeIpt" value="<?php echo $news_time; ?>">
					</dd>
				</dl>
		</div>
		<!-- 推文内容 -->
		<div id ="essay_content">
				<dl class="name-item">
					<dt class="name-item-txt" id="prompt" >
						推文内容
					</dt>
					<dd class="name-item-cs" >
						<textarea class="form-control" rows="20" name="essay_content" id="essayContenteIpt"  style="border-color:grey;" > 
							<?php echo $news_content;?>
						</textarea>
						<!-- <input type="text" name="essay_content" id="essaycontentIpt" > -->
					</dd>
				</dl>
			</div>
			<!--  -->
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
