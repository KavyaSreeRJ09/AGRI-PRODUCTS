$.ajax({
	url: 'https://macro-agriculture-forestry-and-fishing.p.rapidapi.com/3/variable',
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': 'f297174c6dmsh5ea7fbdb901990fp1f74fdjsn31a61fdba7c2',
		'X-RapidAPI-Host': 'macro-agriculture-forestry-and-fishing.p.rapidapi.com'
	},
	success: function(response) {
		console.log(response);
	},
	error: function(err) {
		console.error(err);
	}
});


