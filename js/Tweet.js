/* 
*****************************

author：hexi
time: 2018/06/04
function:获取推文的内容和每篇推文的评论

*****************************
*/
// 实现的内容：点击推文的标签，iframe中能出现相应的文章内容

// 防止事件重复执行
var isLoading = false;
var isLoading1 = false;
// // 评论的总条数
// var count = 0;

// 发送AJAX请求，获取评论的内容**********************
$.get("comment_db.php",function(data1)
{
	
	// if(isLoading) return;
	// isLoading = true;
	arr1=$.parseJSON(data1);
});
// ************************************************

// var isLoading = false;

//  发送AJAX请求，获取新闻的内容 *******************
$.get("news_db.php",function(data){

		//请求状态为请求中则返回
	if(isLoading) return;
	//改变请求状态
	isLoading = true;
	// console.log(data);
	// 经测试，正确
	arr=$.parseJSON(data);
	// 会输出两次
	// 

	$.each(arr,function(index,obj){
		// console.log(obj.newsId);

	});
	// event.preventDefault();
});

// *************************************************

// 相当于二级菜单点击事件.
// 点击不同推文的按钮，会呈现出不同的推文内容。
// 这就要求按钮的id值和推文的id值一一对应	
// 已经获取了新闻所在数据库的id，然后该怎么做呢？？
// 获取到id之后，该怎么把数据库中的新闻内容呈现在右边页面中呢？

// 点击按钮，获取按钮的id值
// 推文按钮id值，新闻id值，评论newsID值一一对应 已实现
// 接下来需要解决：如何将新闻内容呈现到iframe中？如何将评论呈现在html中？
// 思路一：【新闻内容】将内容放到新的html中，再通过URL转入iframe
// 思路二：直接在页面上显示
// var isLoading = false;

$("body").on("click","ul li",function(e){
	if(isLoading1) return;
	//改变请求状态
	isLoading1 = true;

	$(".right-part").show();
	$(".left-part").hide();
	id=this.id;
	id=id.substring(12,id.length);
	console.log(id); 
// // *************************************************
	// 获取新闻的内容
  $.ajax({  
		
	    cache: true,  
	    type: "POST",  
	    url:"news_db.php",  
	    data:{"newsId":id},// 你的formid  
	    async: true,  //发送同步请求
	    error: function(request) {  
	    alert("Connection error:"+request.error);  
	    },  
	    success: function(data) {   
	              	arr=$.parseJSON(data);
	              	// console.log(arr);
	                }  
	            });
	// 从数据库中读取新闻的id，如果与按钮的id相对应的新闻，就输出相应的新闻内容
	// 输出两个值？？ 如何避免data的重复获取？ajax？？
// *************************************************

// 输出推文的内容
	// 遍历数组arr如果newsid=id；
	for(var i=0 in arr){
		// console.log(arr[i]);
		if(arr[i].newsId == id)
		{

			str="<h4 style='text-align:center;padding-top:1em'>"+arr[i].name+"</h4>";
			// $(".tweet-Content").text(str);
			str+="<p style='color:grey'> 发布者："+ "<span style='color:black'>"+arr[i].author +"</span>"+" ";
			str+="发布时间："+arr[i].time+"</p>";
			str+="<p>"+arr[i].content+"</p>";
			$(".tweet-Content").append(str);
			// 经测试，内容输出正确
		}
	}
		

// *************************************************

// 如何将当前页面的评论插入到数据库中
// 首先需要获取新闻的id。===》已获取
// 然后把新闻id发送到数据库端。 ===》怎么发送？ajax？？
// 阻止form表单的默认行为，在点击“发表”按钮之后，给表单增加id值
// 可以把id值写入到某个属性，读取属性值
$("form").on("click",function(e){
	// 经测试，在点击发表按钮之后，能够输出正确的id值
	console.log(id);
	// 接下来的问题是，如何将id值赋值给form。
	// 用input试一试
						
	CommentStr="<input type='text' name='newsId' style='color: black' value='"+id+"'>";

	console.log(CommentStr);

	$("#message").append(CommentStr);

});

// *************************************************

// *********************************************************

// 如何实现评论的分页？
// 1.当前新闻页的评论总条数  ==》 count 已实现
// 2.规定每一页显示的评论条数

var pagesize =5;
// 总的页数
var totalPage=0;
// 当前页数 默认为第一页
var pno = 1;

var objPage = document.getElementById('page');
var count = 0;

// *************************************************
	// 从数据库中读出评论对应的news_id值，如果和推文的id相对应，则输出值

		var html = "";
		// 存储所有信息
		var All=new Array();
		// 用于存储相应的content值
		var Allcontent = new Array();
		// 存储学号
		var AllSno = new Array();
		// 存储时间
		var AllTime = new Array();
		// 存储姓名
		var AllName = new Array();
		
		for(var i=0 in arr1)
		{
			// 评论新闻的id对应
			if(arr1[i].newsId == id)
			{
				// 统计当前新闻页的评论总数
				count++;
				Allcontent[i]=arr1[i].content;
				AllName [i]=arr1[i].name;
				AllTime[i]=arr1[i].commentTime;
				All[i]=" "+AllName [i]+": "+Allcontent[i]+" "+"<span style='color:grey;'>"+AllTime[i]+"</span>"+"<br>";
				$(".tweet-Select_Comment").html(All);
			}
		}

		return false;
// *************************************************

});


// **********************|| ajax分页 start|| *************************
// 	$("#pageButton").pagination({
//     pageSize: 10,
//     remote: {
//         url: 'comment_db.php',
//         success: function (data) {
//             // data为ajax返回数据
//             console.log(data);
//         },
//         totalName:'total'
//     }
// });
// **********************|| ajax分页 end|| *************************