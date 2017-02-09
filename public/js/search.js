function do_search(){
	var site_root = "hfinotice.sinaapp.com";
	var key = $("#search-key").val();
	var q = "site:" + site_root + " " + key;
	$("search-q").val(q);
	$("#search-form").submit();
}