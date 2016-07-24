$(document).ready(function() {
	$("#btn_edit").click(function(event) {
		var id1=$("#id_edit").val();
		var nid1=$("#nid_edit").val();
		var name1=$("#name_edit").val();
		var des1=$("#des_edit").val();
		var req1=$("#req_edit").val();
		var cap1=$("#cap_edit").val();
		$.ajax({
			url: 'forms/edit.php',
			type: 'POST',
			data: {"id":id1,"nid":nid1,"name":name1,"des":des1,"req":req1,"cap":cap1},
			success:function (result) {
				if (result==1) {alert('EDIT Done');location.reload(true);}
				else {alert('something wrong');}
			}
		});
	});
	$(".btn_del").click(function(event) {
		var id2=$(this).closest('tr').children('td:first').text();
		$.ajax({
			url: 'forms/delete.php',
			type: 'POST',
			data: {"id":id2},
			success:function (result) {
				if (result==1) {alert('Deletion Done');location.reload(true);}
				else {alert('something wrong');}
			}
		});
	});
	$("#btn_in").click(function(event) {
		var id=$("#id_in").val();
		var name=$("#name_in").val();
		var des=$("#des_in").val();
		var req=$("#req_in").val();
		var cap=$("#cap_in").val();
		$.ajax({
			url: 'forms/insert.php',
			type: 'POST',
			data: {"id":id,"name":name,"des":des,"req":req,"cap":cap},
			success:function (result) {
				if (result==1) {alert('insertion Done');location.reload(true);}
				else {alert('something wrong');}
			}
		});
	});
});