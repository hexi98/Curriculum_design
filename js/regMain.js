// *****************************

// author：hexi
// time: 2018/05
// function:注册表单的校验

// ***************************** 
// 注册校验
var arrErrorInfos=["长度2～5个汉字",
				   "请输入正确的学号",
				   "密码长度应为6~16个字符",
				   "密码过于简单，请尝试“字母+数字”的组合",
				   "两次填写的密码不一致",
				   "请填写正确的手机号"];

var arrCorrectInfos=["用户名可用",
					 "学号可用",
					 "密码可用",
					 "密码一致",
					 "手机号码可用"];

var arrInfos=["请你的真实姓名",
			  "请输入13个字符的学号",
			  "6~16个字符，区分大小写",
			  "请再次填写密码",
			  "忘记密码时，可以通过该手机号码快速找回密码"];

// get input objects
// 姓名
var objName=document.getElementById("nameIpt");
// 班级
// var objClass=document.getElementById("mainClassIpt");
// 学号
var objSno=document.getElementById("mainSnoIpt");
// 密码
var objPwd=document.getElementById("mainPwdIpt");
// 确认密码
var objCfmPwd=document.getElementById("mainCfmPwdIpt");
// 手机号
var objMobile = document.getElementById("mainMobileIpt");

var objSubmit=document.getElementById("mainRegA");

// get tips objects
// 姓名提示
var objNameTips=document.getElementById("nameTips");
// 学号提示
var objMainSnoTips=document.getElementById("mainSnoTips");
// 密码提示
var objMainPwdTips=document.getElementById("mainPwdTips");
// 确认密码提示
var objMainCfmPwdTips=document.getElementById("mainCfmPwdTips");
// 手机号提示
var objMainMobileTips=document.getElementById("mainMobileTips");


// get error objects
// var objConfict=document.getElementById("conflictDiv");

// functions
// 用户名校验
function isCorrectName(s)
{
	// 用户名：由3-6个汉字组成
	var pattern=/^[\u4e00-\u9fa5_]{2,5}$/;
	if (!pattern.exec(s)) return false;
	return true;
}
// 学号校验
function isCorrectSno(s){
	// 学号：由13位数字组成
	var pattern=/^[0-9]{13}$/;
	if (!pattern.exec(s)) return false;
	return true;
}
// 密码校验
function isCorrectPwd(s){
	// 正则表达式校验（6-16个字符，大小写英文，数字），ok返回true，否则返回false
	var pattern=/^[a-zA-Z0-9]{6,16}$/;
	var words = /[a-zA-Z]/;
	if (!pattern.exec(s)) return false;
	if(!words.exec(s)) return false;
	return true;
}
// 确认密码校验
function isCorrectCfmPwd(s){
	// 判断和pwd是否一致，ok返回true，否则返回false
	if(s!=objPwd.value)
		return false;
	else return true;
}
// 手机号校验
function isMobile(s) {
	// 只判断后11位的手机号是否为数字

	// 分离出后11位数字
	var str = s;
	var s2 = str.substring(str.length-11,str.length);
	// 正则表达式校验，ok返回true，否则返回false
	var proof = /^[1][3,4,5,7,8][0-9]{9}$/;
	if(!proof.exec(s2)) return false;
	else	return true;
}

// 产生错误提示、正确提示、输入提示
function createTips(obj,index,flag){
	
	var str="";
	// ****创建span对象
	var span=document.createElement("span");
	// 动态生成结构
	switch(flag){
		case 1:
			// 设置元素属性 “txt-succ" 是class的值
			span.setAttribute("class","txt-succ");
			str="<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>"+"<b class='ico ico-suc-sml'></b>&nbsp;&nbsp;" + arrCorrectInfos[index];
			break;
		case 2:
			// 补充相应的错误提示
			span.setAttribute("class","txt-err");
			str="<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>"+"<b class='ico ico-warn-sml'></b>&nbsp;&nbsp;" + arrErrorInfos[index];
			break;
		default:
			span.setAttribute("class","txt-tips");
			str=arrInfos[index];
	}
	// 把str赋值给span
	span.innerHTML=str;
	obj.innerHTML="";
	// ****添加子元素 动态给出错误提示
	// obj是父对象 span：插入的内容
	obj.appendChild(span);
}


// events 事件驱动 失去焦点触发事件 事件属性：onblur
// 名字
objName.onblur=(function(){
	var strInput=this.value;
	// var objNameError=document.getElementById("conflictDiv");

	// 去前后空格
	str=strInput.replace(/(^\s*)|(\s*$)/g, "");
	// 未输入时的提示
	if(str.length==0){
		createTips(objNameTips,0,3);
		return false;
	}

	if(!isCorrectName(str)){

		createTips(objNameTips,0,2);
		return false;
	}
	else{
		createTips(objNameTips,0,1);
		return true;
	}
});
// 学号
objSno.onblur=(function(){
	var strInput=this.value;
	// 学号未输入
	if(strInput.length==0)
	{
		createTips(objMainSnoTips,1,3);
		return false;
	}

	// 判断学号是否正确
	if(!isCorrectSno(strInput))
	{
		// 不正确，给出对应的错误提示
		createTips(objMainSnoTips,1,2);
		return false;
	}
	else
	{
		//给出对应的正确提示
		createTips(objMainSnoTips,1,1);
		return true;
	}
});

//密码
objPwd.onblur=(function(){
	var strInput=this.value;
	//**************************************

	// 密码输入后，确认密码置空
	objCfmPwd.value="";
	// 确认密码修改为输入提示
	createTips(objMainCfmPwdTips,3,3);

	//**************************************

	var words = /[a-zA-Z]/;
	
	// 密码未输入
	if(strInput.length==0){
		// 创建密码输入提示
		createTips(objMainPwdTips,1,3);
		return false;
	}
	
	// 判断密码是否正确
    if(!isCorrectPwd(strInput)){
		// 不正确，给出对应的错误提示
		//密码太短
		if(strInput.length<6 && strInput.length>0)
		{
			createTips(objMainPwdTips,2,2);
		}
		//密码太简单
		else if(!words.exec(strInput))
		{
			createTips(objMainPwdTips,3,2);
		}
		return false;
	}
	else{
		// 正确提示
		createTips(objMainPwdTips,2,1);
		return true;
	}
});
// 确认密码
objCfmPwd.onblur=(function(){
	var strInput=this.value;
	
	// 确认密码未输入
	if(strInput.length==0){
		// 输入提示
		createTips(objMainCfmPwdTips,3,3);
		return false;
	}
	// 判断确认密码是否正确
	if(!isCorrectCfmPwd(strInput)){
		// 不正确提示
		createTips(objMainCfmPwdTips,4,2);
		return false;
	}
	else{
		// 正确提示
		createTips(objMainCfmPwdTips,3,1);
		return true;
	}
});
// 手机号
objMobile.onblur=(function(){
	var strInput=this.value;
	
	// 手机号未输入
	if(strInput.length<5){
		// 给出未输入提示
		createTips(objMainMobileTips,5,2);
		return false;
	}
	// 手机是否输入正确
	if(!isMobile(strInput)){
		// 不正确提示
		createTips(objMainMobileTips,5,2);
		return false;
	}
	else{
		// 正确提示
		createTips(objMainMobileTips,4,1);
		return true;
	}
});

// objSubmit.onclick=function(){
// 	// 获取表单对象
// 	objRegForm=document.getElementById("regMain");
// 	// 提交表单
// 	objRegForm.submit();
// }

// init ================================
// 默认不现实用户名错误提示
// if(objConfict) objConfict.style.display="none";

