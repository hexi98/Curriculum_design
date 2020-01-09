/*
*****************************

author:hexi
date:2018/06/07
function:教师联系方式的输出

*****************************
*/
// 点击查找按钮，发送AJAX请求
$("body").on("submit",function(e){
	// 获取输入框中的教师名
		var name=document.getElementById('form-control').value;
		// console.log(name);
		// 发送AJAX请求，传入TeachName的值
		$.get('Teacher_db.php',{TeachName:name},function(data){
	
		// console.log(data);

		arr=$.parseJSON(data);
		// console.log(arr[0].name);
		// 异步
		  $.ajax({  
	                cache: true,  
	                type: "POST",  
	                url:"Teacher_db.php",  
	                data:$('#formId').serialize(),// 你的formid  
	                async: false,  
	                error: function(request) {  
	                    alert("Connection error:"+request.error);  
	                },  
	                success: function(data) {  
						str="<h4>"+arr[0].name+"</h4>";
						str+="<p>"+"职位："+arr[0].position+"</p>";
						str+="<p>"+"办公室："+arr[0].office+"</p>";
						str+="<p>"+"联系方式："+arr[0].phone+"</p>";
						str+="<p>"+"邮箱："+arr[0].mail+"</p>";
						$(".Result").html(str);

	                }  

	            }); 
		 });

});
