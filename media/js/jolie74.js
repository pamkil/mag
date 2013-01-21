function add_to_cart(product_id) 
{
	//здесь, как и в PHP, значение количества по умолчанию 1
	//пишем запрос к файлу backend, его я опишу позже.
	$.post( "ajax/Ajaxcart/inc/" + product_id, { count: count}, update_cart()); 
	alert('Товар добавлен в корзину');
}
function update_cart() 
{
	$.post( "ajax/Ajaxcart/index/", {}, on_success); 
	
	function on_success(data)
	{
		$('#small_cart').html(data);
	}
}
function remove_from_cart(product_id) 
{
	$.post( "ajax/Ajaxcart/delete/" + product_id, {}, update_cart_interface); 
}
function update_product_count(product_id, count) 
{
	$.post( "ajax/Ajaxcart/count/" + product_id, {count:count}, update_cart_interface); 
}
function update_cart_interface() {
	$.post( "ajax/Ajaxcart/content/", {}, on_success); 
	function on_success(data)
	{
		$('#cart_interface').html(data);
	}
}
function inc_ajax(product_id)
{
	
	$.ajax
	(
		{
			type: "POST",
		
			url: "/ajax/Ajaxcart/inc/" + product_id,
			dataType: "text",
			success: function(data)
			{
				if(data)
				{
					$("#small_cart").html(data);
				}
			}		 
		}
	)
}
 
function dec_ajax(product_id)
{
	
	$.ajax
	(
		{
			type: "POST",
		
			url: "/ajax/Ajaxcart/dec/" + product_id,
			dataType: "text",
			success: function(data)
			{
				if(data)
				{
					$("#small_cart").html(data);
				}
			}		 
		}
	)
}
 
function count_ajax(product_id)
{
	
	$.ajax
	(
		{
			type: "POST",
		
			url: "/ajax/Ajaxcart/count/" + product_id,
			dataType: "text",
			success: function(data)
			{
				if(data)
				{
					$("#small_cart").html(data);
				}
			}		 
		}
	)
} 
 
 function delete_ajax(product_id)
{
	
	$.ajax
	(
		{
			type: "POST",
			
			url: "/ajax/Ajaxcart/delete/" + product_id,
			dataType: "text",
			success: function(data)
			{
				if(data)
				{
					$("#small_cart").html(data);
				}
			}		 
		}
	)
}

function clear_ajax()
{
	
	$.ajax
	(
		{
			type: "POST",
			
			url: "/ajax/Ajaxcart/clear/",
			dataType: "text",
			success: function(data)
			{
				if(data)
				{
					$("#small_cart").html(data);
				}
			}		 
		}
	)
}
     $(document).ready(function(){
          $("#email").blur(runajax);
     });