var Client = require('node-rest-client').Client;
var client = new Client();

var flickrapi = "https://api.flickr.com/services/rest/?method=flickr.photos.search&text=billiards&user_id=coolmushoo@yahoo.com&format=json&api_key=ef6252d82cd28e0a1084ce13ac378101&nojsoncallback=1";

client.get(flickrapi, function(data, response) {
   	console.log(data);

   // var photos = data.photos.photo;
   // photos.forEach(function(elem) {
   //   console.log(elem.title);
   // });
});



/// ----------------------------------

// var Client = require('node-rest-client').Client;
// var client = new Client();

// 	var moneyAPI1 = "https://openexchangerates.org/api/latest.json?app_id=7352e5f344774600ae67e08dccdaef58";


// client.get(moneyAPI1,function(data,response){
// 	console.log(data);
// 	var rates = data.rates;

// 	console.log(rates);

// })