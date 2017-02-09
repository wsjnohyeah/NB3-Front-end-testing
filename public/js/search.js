var domainroot="hfinotice.sinaapp.com";
function Bingsitesearch(curobj){
	curobj.q.value="site:"+domainroot+" "+curobj.keyword.value;
}
function Clearcontent(){
	$("input").val("");
}