doctype html  
html(lang='en')  
	head
		title Pug
		style(href="/y2018/m10/test/css/app.css")
	body
	  	@foreach($data as $p)
	    	h2 test
	  	@endforeach
		