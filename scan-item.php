<h3 style="text-align: center;">To Scan, just center a barcoder or QR code between the brackets & hold still.</h3>
<div id="scanner">
 <img width="100%"src="img/macy_13.png">
</div>
<h3 style="text-align: center;">Or type code here</h3>
<div class="input-group">
  <input type="text" class="form-control" placeholder="Or type code here" value="749372521125" aria-describedby="basic-addon2">
  <span class="input-group-addon" id="scan">Go</span>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
	 $("#scan").click(function() {


	 $.ajax({
			url:'http://origin-api.macys.com/v3/catalog/product?upc=50946872827',
headers: {

'Accept':'application/json',

'X-Macys-Webservice-Client-Id':"atthack2015"

},

			success:function(data) {
				console.log(data.product[0].image[0].imageurl);
			}

});

	});

</script>


