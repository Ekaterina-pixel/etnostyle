<!DOCTYPE html>
<html>
     <head>
	     <meta charset="utf-8">
		 <title>Etnostyle</title>
		 <meta name="description" content="Заказ этноодежды-заказ этноаксессуаров">
		 <meta name="keywords" content="Этноодежда, этностайл, бесплатная доставка"> 
	     <link rel="stylesheet" type="text/css" href="media/style.css">
     </head>

	 <body>
	     <div id="header" >
		     <div class="ssylki">
	             <a href="{{asset('about')}}">О НАС</a> &nbsp &nbsp &nbsp
		         <a href="#">КАТАЛОГ</a> &nbsp &nbsp &nbsp
		         <a href="#">ДОСТАВКА</a> &nbsp &nbsp &nbsp
		         <a href="{{asset('comments')}}">ОТЗЫВЫ</a> &nbsp &nbsp &nbsp
		         <a href="{{asset('contact')}}">КОНТАКТЫ</a>
			 </div>
		     <div class="etno">
			 <a href="#"><img src="media/img/etnostyle.png"></a>
			 </div>
		 </div>
		 
		 <div class="poloska">
		     <p><img src="media/img/figura.png"></p>
		 </div>
		 
		 <div id="body">
         @yield('content')
		 </div>
		 
		 <div id="footer">
		     <div class="img">
		         <img src="media/img/ETNOSTYLE2.png">
			 </div>
		     <div class="flex">
			         <div class="rollover"><a href="#"></a></div>&nbsp &nbsp
			         <div class="rollover1"><a href="#"></a></div>&nbsp &nbsp
			         <div class="rollover2"><a href="#"></a></div>&nbsp &nbsp
			         <div class="rollover3"><a href="#"></a></div>
			 </div>
		 </div>
     </body>
</html>