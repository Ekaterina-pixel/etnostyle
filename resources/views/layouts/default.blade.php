<!DOCTYPE html>
<html>
     <head>
	     <meta charset="utf-8">
		 <title>Etnostyle</title>
		 <meta name="description" content="Заказ этноодежды-заказ этноаксессуаров">
		 <meta name="keywords" content="Этноодежда, этностайл, бесплатная доставка"> 
	     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		 <link rel="stylesheet" type="text/css" href="{{asset('media/style.css')}}">
		 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     </head>

	 <body>
	     <div id="header" >
		  <div class="etno">
			 <a href="{{asset('home')}}"><img src="{{asset('media/img/etnostyle.png')}}"></a>
			 </div>
		     <div class="ssylki">
	             <a href="{{asset('about')}}">О НАС</a> &nbsp &nbsp &nbsp
		         <a href="{{asset('catalog')}}"">КАТАЛОГ</a> &nbsp &nbsp &nbsp
		         <a href="#">ДОСТАВКА</a> &nbsp &nbsp &nbsp
		         <a href="{{asset('comments')}}">ОТЗЫВЫ</a> &nbsp &nbsp &nbsp
		         <a href="{{asset('contact')}}">КОНТАКТЫ</a>
			 </div>
		    
		 </div>
		 
		
		 
		 <div id="bodys">
         @yield('content')
		 </div>
		 
		 <div id="footer">
		     <div class="img">
		         <img src="{{asset('media/img/ETNOSTYLE2.png')}}">
			 </div>
		     <div class="flex">
			         <div class="rollover"><a href="#"></a></div>&nbsp &nbsp
			         <div class="rollover1"><a href="#"></a></div>&nbsp &nbsp
			         <div class="rollover2"><a href="#"></a></div>&nbsp &nbsp
			         <div class="rollover3"><a href="#"></a></div>
			 </div>
		 </div>
		 @section('scripts')
		 @show
     </body>
</html>