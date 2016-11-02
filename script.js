$(document).ready( setupObservers );

function setupObservers()
{
	$("#getJSON").click(function(){
		$.getJSON( "json_data.php" + "?reference=" + $('#reference').val(), updateForm );
	});
}

function updateForm( json )
{
	$("#msg").empty();
	$("#msg").append("getJSON");
	$("#firstname").val(json.members[0].firstname);
	$("#lastname").val(json.members[0].lastname);
	$("#carmake").val(json.members[0].carmake);
	$("#carmodel").val(json.members[0].carmodel);
	$("#year").val(json.members[0].year);
	$("#miles").val(json.members[0].miles);
	$("#registration").val(json.members[0].registration);
	$("#annualprice").val(json.members[0].annualprice);
	$("#monthlyprice").val(json.members[0].monthlyprice);                    
}