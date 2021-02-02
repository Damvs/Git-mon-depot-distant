$(document).ready(function() 
{
	// 1 - Méthode load	
	$("#button1").click(function() {
		$("#div1").load("contenu.php");
	});

	// 2 - Méthode get
	$("#button2").click(function() {
		$.get("contenu.php", function(data) 
		{
			$("#div1").html(data);
		});		
	});

	// 3 - Méthode low level (ajax)
	$("#button3").click(function() {
		$.ajax({
			url: "contenu.php", 
			success: function(data) 
			{
				$("#div1").html(data);
			},
		});		
	});
	
	// 4 - Méthode Post
	$("#button4").click(function() {
		$.post({
			url: "post.php", 
			data: { id:2},
			success: function(data) 
			{
				$("#div1").html(data);
			}
		});			
	});
		
	// 5 - Json (fichier)
	$("#button5").click(function() 
	{			
		$.getJSON('liens.json', function(response) {
			 $('#div1').html(response.id+" - "+response.titre+" - "+response.webmaster);            
        });	
	});
		
	$("#button6").click(function() 
	{		
		$.post({
			url: "post_json.php", 
			dataType: "json",
			success: function(data) 
			{			
				var contenu = '';
				
				$.each(data, function(key, val) {
		             contenu += val.id+" | "+val.titre+" | "+val.webmaster+"<br>";
		        });
		        								
				$("#div1").html(contenu);
			}
		});		
	});		
});