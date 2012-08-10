/* Author: 
Chad Sterling
*/

function not_logged_in(responseText, textStatus, XMLHttpRequest)
{
	$("#resume_btn").click(function(){
$(this).hide();
});
}

$(document).ready(function(){
	$("#main").load("intro_no_login.php","",not_logged_in)
});