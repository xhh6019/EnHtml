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
		alert("邮箱不可为空");
		RegForm.email.focus();
		return false;
	}
	var apos=RegForm.email.value.indexOf("@")
	var dotpos=RegForm.email.value.lastIndexOf(".")
	if (apos < 1 || dotpos-apos < 2) {
		alert("邮箱格式不正确");
		RegForm.email.focus();
		return false;
	}
	return true;
}
//-->