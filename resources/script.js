//all
$(document).ready(function() {
	$("body").removeClass("preload");
});

//form.html i edit.html
$('#inpSub').bind('click', function(e){
	e.preventDefault();
	if ($("#wordAddForm input:checkbox:checked").length == 0 || $('#inpTxt').val()=="" || $('#txtArea').val()==""){
	 	alert("Please fill all required inputs, and choose at least one category");
	}
	else{
		$('#wordAddForm').submit();
	}
});
$('#wordAddForm input').bind('keypress keydown keyup', function(e){
	if(e.keyCode == 13) { e.preventDefault(); }
});

//users.html
let val = 2;
$('td button').bind('click', function(e){
	e.preventDefault(); 
});

function more(){
    $("table").append("<tr id='u"+val+"'> <td> <input type='email' name='mail"+val+"' placeholder="+'"'+"User SUT's email address"+'"'+" required> </td> <td> <select name='type"+val+"'> <option value='Student'>Student</option> <option value='Teacher'>Teacher</option> </select> </td> <td> <button onclick='less("+val+")'>Remove</button> </td> </tr>");
	val++;
}
function less(x){
    $("#u"+x).remove();
}

