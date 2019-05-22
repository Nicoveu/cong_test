var verifyURL = '{:U("Index/verify")}';
function change_code(obj){
	$("#code").attr("str",verifyURL+ '/' +Math.random());
	return false;
}