(function ($) { 
    "use strict";


	var feed = new instafeed({
			get: 'user',
			userId: "brooklynfilmfestival",
			target: "instafeed",
			resolution: "low_resolution",
            tagName: 'Brooklyn Film Festival 2019',
            limit: 6,
			clientId: '9f9dcb4472ca4e49b6d927c56148c966',
	});
    feed.run();
    
}) (jQuery);
