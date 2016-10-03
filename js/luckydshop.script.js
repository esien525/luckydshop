if(typeof(ms)=='undefined'){luckydshop={jQuery:window.jQuery,extend:function(obj){this.jQuery.extend(this,obj);}}}

luckydshop.extend({
	user : {		
		uploadPreview1: function(input,ori_photo)
		{			
			if (input.files && input.files[0]) 
			{
				var reader = new FileReader();
				
				if ((input.files[0].size/1024)>2000)
				{
					alert("Image's maximum size is 2.0Mb");
					
					$('#Product_photo').val('');
					$('#Product_product_photo').val(ori_photo);
				}
				else
				{
					reader.onload = function (e) 
					{
						$('#userImgPrev1').attr('src', e.target.result);
						$('#userImgPrev1').attr('alt', e.target.result);
					}
					
					reader.readAsDataURL(input.files[0]);
				}
			}			
		},
		uploadPreview2: function(input,ori_photo)
		{			
			if (input.files && input.files[0]) 
			{
				var reader = new FileReader();
				
				if ((input.files[0].size/1024)>2000)
				{
					alert("Image's maximum size is 2.0Mb");
					
					$('#Product_image2').val('');
					$('#Product_product_photo2').val(ori_photo);
				}
				else
				{
					reader.onload = function (e) 
					{
						$('#userImgPrev2').attr('src', e.target.result);
						$('#userImgPrev2').attr('alt', e.target.result);
					}
					
					reader.readAsDataURL(input.files[0]);
				}
			}			
		},
		uploadPreview3: function(input,ori_photo)
		{			
			if (input.files && input.files[0]) 
			{
				var reader = new FileReader();
				
				if ((input.files[0].size/1024)>2000)
				{
					alert("Image's maximum size is 2.0Mb");
					
					$('#Product_image3').val('');
					$('#Product_product_photo3').val(ori_photo);
				}
				else
				{
					reader.onload = function (e) 
					{
						$('#userImgPrev3').attr('src', e.target.result);
						$('#userImgPrev3').attr('alt', e.target.result);
					}
					
					reader.readAsDataURL(input.files[0]);
				}
			}			
		},
		uploadPreview4: function(input,ori_photo)
		{			
			if (input.files && input.files[0]) 
			{
				var reader = new FileReader();
				
				if ((input.files[0].size/1024)>2000)
				{
					alert("Image's maximum size is 2.0Mb");
					
					$('#Product_image4').val('');
					$('#Product_product_photo4').val(ori_photo);
				}
				else
				{
					reader.onload = function (e) 
					{
						$('#userImgPrev4').attr('src', e.target.result);
						$('#userImgPrev4').attr('alt', e.target.result);
					}
					
					reader.readAsDataURL(input.files[0]);
				}
			}			
		},
		uploadPreview5: function(input,ori_photo)
		{			
			if (input.files && input.files[0]) 
			{
				var reader = new FileReader();
				
				if ((input.files[0].size/1024)>2000)
				{
					alert("Image's maximum size is 2.0Mb");
					
					$('#Product_image5').val('');
					$('#Product_product_photo5').val(ori_photo);
				}
				else
				{
					reader.onload = function (e) 
					{
						$('#userImgPrev5').attr('src', e.target.result);
						$('#userImgPrev5').attr('alt', e.target.result);
					}
					
					reader.readAsDataURL(input.files[0]);
				}
			}			
		},
		uploadPreview6: function(input,ori_photo)
		{			
			if (input.files && input.files[0]) 
			{
				var reader = new FileReader();
				
				if ((input.files[0].size/1024)>2000)
				{
					alert("Image's maximum size is 2.0Mb");
					
					$('#Product_image6').val('');
					$('#Product_product_photo6').val(ori_photo);
				}
				else
				{
					reader.onload = function (e) 
					{
						$('#userImgPrev6').attr('src', e.target.result);
						$('#userImgPrev6').attr('alt', e.target.result);
					}
					
					reader.readAsDataURL(input.files[0]);
				}
			}			
		},
		uploadPreview7: function(input,ori_photo)
		{			
			if (input.files && input.files[0]) 
			{
				var reader = new FileReader();
				
				if ((input.files[0].size/1024)>2000)
				{
					alert("Image's maximum size is 2.0Mb");
					
					$('#Product_image7').val('');
					$('#Product_product_photo7').val(ori_photo);
				}
				else
				{
					reader.onload = function (e) 
					{
						$('#userImgPrev7').attr('src', e.target.result);
						$('#userImgPrev7').attr('alt', e.target.result);
					}
					
					reader.readAsDataURL(input.files[0]);
				}
			}			
		},
		uploadPreview8: function(input,ori_photo)
		{			
			if (input.files && input.files[0]) 
			{
				var reader = new FileReader();
				
				if ((input.files[0].size/1024)>2000)
				{
					alert("Image's maximum size is 2.0Mb");
					
					$('#Product_image8').val('');
					$('#Product_product_photo8').val(ori_photo);
				}
				else
				{
					reader.onload = function (e) 
					{
						$('#userImgPrev8').attr('src', e.target.result);
						$('#userImgPrev8').attr('alt', e.target.result);
					}
					
					reader.readAsDataURL(input.files[0]);
				}
			}			
		},
		uploadPreview9: function(input,ori_photo)
		{			
			if (input.files && input.files[0]) 
			{
				var reader = new FileReader();
				
				if ((input.files[0].size/1024)>2000)
				{
					alert("Image's maximum size is 2.0Mb");
					
					$('#Product_image9').val('');
					$('#Product_product_photo9').val(ori_photo);
				}
				else
				{
					reader.onload = function (e) 
					{
						$('#userImgPrev9').attr('src', e.target.result);
						$('#userImgPrev9').attr('alt', e.target.result);
					}
					
					reader.readAsDataURL(input.files[0]);
				}
			}			
		},
		uploadPreview10: function(input,ori_photo)
		{			
			if (input.files && input.files[0]) 
			{
				var reader = new FileReader();
				
				if ((input.files[0].size/1024)>2000)
				{
					alert("Image's maximum size is 2.0Mb");
					
					$('#Product_image10').val('');
					$('#Product_product_photo10').val(ori_photo);
				}
				else
				{
					reader.onload = function (e) 
					{
						$('#userImgPrev10').attr('src', e.target.result);
						$('#userImgPrev10').attr('alt', e.target.result);
					}
					 
					reader.readAsDataURL(input.files[0]);
				}
			}			
		},
	},
	cart : {
		delete_product: function(ac_id)
		{
			if (confirm("Are you sure want to remove this product?")) 
			{
				var values = {'ac_id':ac_id};
			    $.ajax({
					type: "GET",
					url:  JS_SERVER+JS_ROOT+"/addCart/deleteProduct",
					data: values
					}).success(function( response ) {
						location.reload();
					}).fail(function( response ){
						console.log(response);
						});
			}			
		},
		delete_cart: function(cart_id)
		{
			if (confirm("Are you sure want to clear the shopping cart?")) 
			{
				var values = {'cart_id':cart_id};
			    $.ajax({
					type: "GET",
					url:  JS_SERVER+JS_ROOT+"/addCart/deleteCart",
					data: values
					}).success(function( response ) {
						location.reload();
					}).fail(function( response ){
						console.log(response);
						});
			}			
		},
		change_quantity: function(action, ac_id,cart_id)
		{
			$('#load'+ac_id).show();
			var count = (action == '1') ? 1 : -1;

			var values = {'count':count, 'ac_id':ac_id,'cart_id':cart_id};
			    $.ajax({
					type: "GET",
					url:  JS_SERVER+JS_ROOT+"/addCart/changeQuantity",
					data: values
					}).success(function( response ) {
						var data = response.split('@@@');
						$('#ac_subtotal_'+ac_id).html(data[0]);
						$('#subtotal').html(data[1]);
						$('#grand_total').html(data[1]);
						$('#load'+ac_id).delay(3000).hide();
					}).fail(function( response ){
						console.log(response);
						});
		},
	},
});
