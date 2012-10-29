function get_cookie(cookieName){
	var arrCookie = document.cookie.split("; ");
	for(var i=0;i < arrCookie.length;i++){
		var arr = arrCookie[i].split("=");
		if(cookieName == arr[0]){
			return arr[1];
		}
	}
}