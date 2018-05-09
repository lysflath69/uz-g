$( document ).ready(function() {
	var trainList = $(".train-table");
	trainList.addClass("table table-striped");
	trainList.find("span.button").remove()
	var encoding = '<head><meta charset="UTF-8"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" ></head>';
	$("html").empty();
	$("html").append(encoding);
	$("html").append(trainList);
});