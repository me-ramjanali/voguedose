<script>
	$(document).ready(function() {
		$('form#add_product').on('submit', function(e){
			e.preventDefault();
			var code = $('input#code').val(),
				type = $('input#type').val(),
				color = $('input#color').val(),
				fit = $('input#fit').val(),
				size = $('input#size').val(),
				price = $('input#price').val();
			var dataArr = {};
			if(code == ''){
				alert('Please input Code');
				$('input#code').focus();
				return false;
			}else{
				dataArr['code'] = code;
			}
			if(type == ''){
				alert('Please input Type');
				$('input#type').focus();
				return false;
			}else{
				dataArr['type'] = type;
			}
			if(color == ''){
				alert('Please input Color');
				$('input#color').focus();
				return false;
			}else{
				dataArr['color'] = color;
			}
			if(fit == ''){
				alert('Please input Fit');
				$('input#fit').focus();
				return false;
			}else{
				dataArr['fit'] = fit;
			}
			if(size == ''){
				alert('Please input Size');
				$('input#size').focus();
				return false;
			}else{
				dataArr['size'] = size;
			}
			if(price == ''){
				alert('Please input Price');
				$('input#price').focus();
				return false;
			}else{
				dataArr['price'] = price;
			}
			dataArr['files'] = $("#files").prop('files');
			if(dataArr['files'].length == 0){
				alert('Please select picture');
				$('input#files').focus();
				return false;
			}
			var formData = new FormData($(this)[0]);
			$.ajaxSetup({
	            headers:
	            {
	                'X-CSRF-Token': $('input[name="_token"]').val()
	            }
	        });
        	formData.append('info', JSON.stringify(dataArr));
        	$.ajax({
		        type:"POST",
		        cache:false,
				contentType: false,
    			processData: false,
    			dataType : 'json',
		        url: "{{ URL::to('admin/add_product') }}",
		        data: formData,
		        success: function () {
		        	alert("Product successfully added");
		        	$('#myModal').modal().hide(function(){
		        		$('form#add_product')[0].reset();
		        		location.reload();
		        	});
		        }
	      	});
		});
	});
</script>