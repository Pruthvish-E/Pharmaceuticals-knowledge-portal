<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Stock</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<body>
		<div class="container">
			<br />
			<br />
			<br />
			<h2 align="center">Add New Stock</h2><br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Add Stock</span>
					<input type="text" name="search_text" id="search_text" placeholder="DID,MF_DATE,NO_OF_UNITS" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />
	</body>
</html>


<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"producer_stock.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keypress(function(event){
                var keycode = (event.keyCode ? event.keyCode : event.which);
                if(keycode == '13'){
                    alert('Stock Added');
                    var search = $(this).val();
                    load_data(search);  
                }
                //Stop the event from propogation to other handlers
                //If this line will be removed, then keypress event handler attached 
                //at document level will also be triggered
                event.stopPropagation();
            });
             
//             //Bind keypress event to document
            // $(document).keypress(function(event){
            //     var keycode = (event.keyCode ? event.keyCode : event.which);
            //     if(keycode == '13'){
            //         alert('You pressed a "enter" key in textbox');
            //         var search = $(this).val();
            //         load_data(search);    
            //     }
            // });



// 	$('#search_text').keyup(function(){
// 		var search = $(this).val();
// 		if(search != '')
// 		{
// 			load_data(search);
// 		}
// 		else
// 		{
// 			load_data();			
// 		}
// 	});
 });
</script>




