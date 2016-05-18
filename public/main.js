$(document).ready(function(){
	var $order = $('#order');

	var orderTemp = "<li>name: {{ name }}, drink: {{ drink }}, Ordered: {{ created_at }} <button class=\"remove\" data-id=\"{{ id }}\">&times;</button></li>";

	function addOrder(order){
		$order.append(Mustache.render(orderTemp, order));
	}

	$.ajax({	
		type: 'GET',
		url: '/api/getall',
		success: function(orders){
			$.each(orders, function(i, order){
				addOrder(order);
			});
		},
		error: function(){
			alert('error loading orders');
		}
	});

	$('#add-order').on('click', function(){
		var order = {
			drink: $('#drink').val(),
			name: $('#name').val()
		};

		$.ajax({
			type: 'post',
			url: 'api/store',
			data: order,
			success: function(newOrder){
				addOrder(newOrder);
			}, error: function(){
				alert('Whoops something went wrong');
			}
		});
	});

	$order.delegate('.remove','click', function(){
		var $li = $(this).closest('li');
		$.ajax({
			type: 'DELETE',
			url: '/api/' + $(this).attr('data-id'),
			success: function(){
				$li.fadeOut(700, function(){
					remove()
				});
			},
			error: function(){
				alert('Noooowwayy');
			}
		});
	});
});