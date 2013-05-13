app.get(/^\/(@|~|\+|f|in)$/, function(req, res) {
	res.redirect({
		'@':  'https://twitter.com/:you',
		'~':  'https://github.com/:you',
		'+':  'https://plus.google.com/:you',
		'f':  'https://facebook.com/:you',
		'in': 'https://linkedin.com/in/:you'
	}[req.params[0]], 301);
});