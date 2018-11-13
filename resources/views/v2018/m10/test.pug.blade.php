doctype html  
html(lang='en')  
	head
		title Pug
		style(href="/y2018/m10/css/app.css" style='text/css' rel='stylesheet')
	body
		h1 this is October 1018
		div.container.row
	   		div
				| @if(session('success'))
				p(style='color:red') SUCCESS:{{session('success')}}
			    | @endif
			    form(action='/2018/10/posttest',method='post')
			    	input(type='hidden' value!=csrf_token() name='_token')
			    	input(type='text',name='name')
			    	| @if($errors->has('name'))
			    	p Errors:{{$errors->first("name")}}
			    	| @endif
			    	input(type='submit',value='submit test')
			   		