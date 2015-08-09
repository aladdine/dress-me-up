<h4 style="text-align: center;">To Scan, just center a barcoder or QR code between the brackets & hold still.</h4>
<div id="scanner">
 <img width="100%"src="img/macy_13.png">
</div>
<h4 style="text-align: center;">Or type code here</h4>
<div class="input-group">
  <input type="text" class="form-control" placeholder="Or type code here" id="upc" value="749372521125" aria-describedby="basic-addon2">
  <span class="input-group-addon" id="scan">Go</span>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">

     
	 $("#scan").click(function() {
	 		$.ajax({
				url:'http://origin-api.macys.com/v3/catalog/product?upc='+ $('#upc').val(),
			headers: {
				'Accept':'application/json',
				'X-Macys-Webservice-Client-Id':"atthack2015"
			},

			success:function(data) {
					console.log(data);
					$('#scan-item').slideUp();
					$('body').css('background-color','#FFF');
					$('#display-matches').show();
					$('#display-matches_image').html("<img width='200px' src='"+data.product[0].image[0].imageurl+"'>");


				
					$('#display-matches_color').html("");
					for (i=0; data.product[0].colorMap.length - 1; ++i ) {
		                    $('#display-matches_color').append("<div class='sizes' id='color_" + data.product[0].colorMap[i].colornormal + "' style='float: left; width: 25px; padding: 3px; height: 25px; margin: 10px; border: 1px solid #000; background-color:" + data.product[0].colorMap[i].colornormal + ";'></div>");
		                    if (i>4 && i%5==0) {
		                    	$('#display-matches_color').append('<div style="clear: both;"></div>');
		                    }

					}
					$('#display-matches_color').append('<div style="clear: both;"></div>');
					
                  
			}, // success function end here

			}); // ajax call ends here


             $.ajax({
				url:'http://origin-api.macys.com/v3/catalog/product?upc='+ $('#upc').val(),
			headers: {
				'Accept':'application/json',
				'X-Macys-Webservice-Client-Id':"atthack2015"
			},

			success:function(data) {
		
                    
                   
                    $('#display-matches_size').html("");
					for (i=0; data.product[0].SizeMap.length - 1; ++i ) {
		                    $('#display-matches_size').append("<div class='sizes' id='size_" + data.product[0].SizeMap[i].size_value + "' style='float: left; font-size: 9px; width: 25px; padding: 3px; margin: 10px; height: 25px; border: 1px solid #000; background-color: #ccc;'>" + data.product[0].SizeMap[i].size_value + "</div>");
		                    if (i>4 && i%5==0) {
		                    	$('#display-matches_size').append('<div style="clear: both;"></div>');
		                    }

		                    
					}
					$('#display-matches_size').append('<div style="clear: both;"></div>');



					
					
					
					
			}, // success function end here

			}); // ajax call ends here

            
             $.ajax({
				url:'http://origin-api.macys.com/v3/catalog/product?upc='+ $('#upc').val(),
			headers: {
				'Accept':'application/json',
				'X-Macys-Webservice-Client-Id':"atthack2015"
			},

			success:function(data) {
		
                    
                   

					$('#display-matches_info').html("<br><p>Product Details:</p>");
					$('#display-matches_info').append("<h4>" + data.product[0].summary.name + "</h4>");
					$('#display-matches_info').append("<p>Regular Price: $" + data.product[0].price.regular.value + "</p>");
					$('#display-matches_info').append("<p style='fill: red;'>Sale Price: $" + data.product[0].price.sale.value + "</p>");

					
					
					
					
			}, // success function end here

			}); // ajax call ends here



	}); // click event listener ends here


</script>


