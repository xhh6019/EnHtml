// JavaScript Document
function InputCheck(RegForm){
	if (RegForm.username.value==""){
		alert("�û�������Ϊ��");
		RegForm.username.focus();
		return false;
	}
	
	if (RegForm.tel.value==""){
		alert("�绰����Ϊ��");
		RegForm.tel.focus();
		return false;
	}
	
	if (isNaN(RegForm.tel.value)){
		alert("�绰ֻ��Ϊ����");
		RegForm.tel.focus();
		return false;
	}
	if (RegForm.email.value==""){
		alert("�ʼ�����Ϊ��");
		RegForm.email.focus();
		return false;
	}
	return true;
}
//-->