$(function(){
	$('#findName').click(function(){
		var name = $('#name').val();
        if(name.trim().length == 0){
        	$('#name').val('');
        	alert('输入不能为空');
            return;
        }
	});
}