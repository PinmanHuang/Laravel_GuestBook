$("document").ready(function(){
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$("#submitButton").click(function(){
		var title = $(".title").val();
		var content = $(".content").val();
		$.ajax({
			type: 'POST',
			url: 'addMsg',
			data: {
				"title": title,
				"content": content
			},
			dataType: 'json',
			success: function(msg){
				console.log(msg);
				//alert("成功");
				$(".inForm").append("<div>"+title+"<div><div>"+content+"</div>");
			},
			error: function(xhr, status, error){
				var err = eval("(" + xhr.responseText + ")");
  				alert(err.Message);
			}
		});
	});
});