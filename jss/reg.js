// JavaScript Document
function InputCheck(RegForm){
	if (RegForm.username.value==""){
		alert("用户名不可为空");
		RegForm.username.focus();
		return false;
	}
	
	if (RegForm.tel.value==""){
		alert("电话不可为空");
		RegForm.tel.focus();
		return false;
	}
	
	if (isNaN(RegForm.tel.value)){
		alert("电话只能为数字");
		RegForm.tel.focus();
		return false;
	}
	if (RegForm.email.value==""){
		alert("邮件不可为空");
		RegForm.email.focus();
		return false;
	}
	return true;
}
//-->