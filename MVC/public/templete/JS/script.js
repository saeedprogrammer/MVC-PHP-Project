$(function()
{
	
	$("#menue").click(function()
	{
		console.log($("#navBar").hasClass("expanded_navBar"));
		if ( $("#navBar").hasClass("expanded_navBar"))
		{
			
			$("#navBar").addClass("collapsed_navBar");
			$("#navBar").removeClass("expanded_navBar");
		} 
		else
		{
			$("#navBar").addClass("expanded_navBar");
			$("#navBar").removeClass("collapsed_navBar");
		}
		
	});
})