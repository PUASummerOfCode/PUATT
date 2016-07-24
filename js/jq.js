$(document).ready(function() {
	$("#btn_edit_courses").click(function(event) {
		var id1=$("#id_edit").val();
		var nid1=$("#nid_edit").val();
		var name1=$("#name_edit").val();
		var des1=$("#des_edit").val();
		var req1=$("#req_edit").val();
		var cap1=$("#cap_edit").val();
		$.ajax({
			url: 'forms/edit_courses.php',
			type: 'POST',
			data: {"id":id1,"nid":nid1,"name":name1,"des":des1,"req":req1,"cap":cap1},
			success:function (result) {
				if (result==1) {alert('EDIT Done');location.reload(true);}
				else {alert('something wrong');}
			}
		});
	});
	$(".btn_del_courses").click(function(event) {
		var id2=$(this).closest('tr').children('td:first').text();
		$.ajax({
			url: 'forms/delete_courses.php',
			type: 'POST',
			data: {"id":id2},
			success:function (result) {
				if (result==1) {alert('Deletion Done');location.reload(true);}
				else {alert('something wrong');}
			}
		});
	});
	$("#btn_in_courses").click(function(event) {
		var id=$("#id_in").val();
		var name=$("#name_in").val();
		var des=$("#des_in").val();
		var req=$("#req_in").val();
		var cap=$("#cap_in").val();
		$.ajax({
			url: 'forms/insert_courses.php',
			type: 'POST',
			data: {"id":id,"name":name,"des":des,"req":req,"cap":cap},
			success:function (result) {
				if (result==1) {alert('insertion Done');location.reload(true);}
				else {alert('something wrong');}
			}
		});
	});





	$("#btn_edit_rooms").click(function(event) {
		var id1=$("#id_edit").val();
		var nid1=$("#nid_edit").val();
		var type1=$("#type_edit").val();
		var cap1=$("#cap_edit").val();
		var ava1=$("#ava_edit").val();
		$.ajax({
			url: 'forms/edit_rooms.php',
			type: 'POST',
			data: {"id":id1,"nid":nid1,"type":type1,"cap":cap1,"ava":ava1},
			success:function (result) {
				if (result==1) {alert('EDIT Done');location.reload(true);}
				else {alert('something wrong');}
			}
		});
	});
	$(".btn_del_rooms").click(function(event) {
		var id2=$(this).closest('tr').children('td:first').text();
		$.ajax({
			url: 'forms/delete_rooms.php',
			type: 'POST',
			data: {"id":id2},
			success:function (result) {
				if (result==1) {alert('Deletion Done');location.reload(true);}
				else {alert('something wrong');}
			}
		});
	});
	$("#btn_in_rooms").click(function(event) {
		var id=$("#id_in").val();
		var type=$("#type_in").val();
		var cap=$("#cap_in").val();
		var ava=$("#ava_in").val();
		$.ajax({
			url: 'forms/insert_rooms.php',
			type: 'POST',
			data: {"id":id,"type":type,"cap":cap,"ava":ava},
			success:function (result) {
				if (result==1) {alert('insertion Done');location.reload(true);}
				else {alert('something wrong');}
			}
		});
	});





	$("#btn_edit_instructor").click(function(event) {
		var id1=$("#id_edit").val();
		var nid1=$("#nid_edit").val();
		var name1=$("#name_edit").val();
		var info1=$("#info_edit").val();
		var courses1=$("#courses_edit").val();
		var ava1=$("#ava_edit").val();
		$.ajax({
			url: 'forms/edit_instructor.php',
			type: 'POST',
			data: {"id":id1,"nid":nid1,"name":name1,"info":info1,"courses":courses1,"ava":ava1},
			success:function (result) {
				if (result==1) {alert('EDIT Done');location.reload(true);}
				else {alert('something wrong');}
			}
		});
	});
	$(".btn_del_instructor").click(function(event) {
		var id2=$(this).closest('tr').children('td:first').text();
		$.ajax({
			url: 'forms/delete_instructor.php',
			type: 'POST',
			data: {"id":id2},
			success:function (result) {
				if (result==1) {alert('Deletion Done');location.reload(true);}
				else {alert('something wrong');}
			}
		});
	});
	$("#btn_in_instructor").click(function(event) {
		var id=$("#id_in").val();
		var name=$("#name_in").val();
		var info=$("#info_in").val();
		var courses=$("#courses_in").val();
		var ava=$("#ava_in").val();
		$.ajax({
			url: 'forms/insert_instructor.php',
			type: 'POST',
			data: {"id":id,"name":name,"info":info,"courses":courses,"ava":ava},
			success:function (result) {
				if (result==1) {alert('insertion Done');location.reload(true);}
				else {alert('something wrong');}
			}
		});
	});

});