var Flickr = require('flickrapi'),
	// flickr = new Flickr({
	// 	api_key:"ef6252d82cd28e0a1084ce13ac378101",
	// 	secret:"a8de5bb73d4e6241"
	// })

	flickrOptions = {
      	api_key:"ef6252d82cd28e0a1084ce13ac378101",
		secret:"a8de5bb73d4e6241"
    };
 
Flickr.tokenOnly(flickrOptions, function(error, flickr) {
  

  console.log(flickr);
});


var flickr = new Flickr();

flickr.photos.search({
  user_id: flickr.options.coolmushoo,
  page: 1,
  per_page: 500
}, function(err, result) {
  // result is Flickr's response
});

