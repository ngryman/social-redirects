(function() {
	var url; (url = {
		'/@': 'https://twitter.com/:you',
		'/~': 'https://github.com/:you',
		'/+': 'https://plus.google.com/:you',
		'/f': 'https://facebook.com/:you',
		'/in': 'https://linkedin.com/in/:you'
	}[window.location.pathname]) && window.location.replace(url);
})();