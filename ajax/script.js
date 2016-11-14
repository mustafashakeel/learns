(function(window){
	'use strict';
	var App = window.App || {},
	 $ = window.jQuery;


$('#getinfo').click(function(){
	$('#content').load('http://coffeerun-v1-rest-api.herokuapp.com/api/coffeeorders/',function(responseTxt, statusTxt, xhr){
		var  aa = responseTxt;
		
		for( var i in aa){
			console.log( "info   " , i , "   ", aa[i]);

		}
		return i;
		


	});
})
	 $('#form1').submit(function(){
	 	var aa = $('#form1').serialize();
	 	console.log(aa);
	 	$.post('page.php',aa,function(data){
	 		$('#content').html(data);

	 	})
	 	return false;
	 });


	 function RemoteServer(url){
	 	if(!url){
	 		throw new Error('No URL Provided ');
	 	}
	 	this.server = url;

	 }
	 RemoteServer.prototype.add = function(key, val){
	 	$.post(this.server, val,function(response){
	 		console.log("Yippie ", response );
	 	});
	 }

	 App.RemoteServer = RemoteServer;
	 window.App = App;


})(window);

//var aaa = RemoteServer.add("http://coffeerun-v1-rest-api.herokuapp.com/api/coffeeorders/");