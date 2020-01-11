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
<li class="dropdown open">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img id="imgNavSel" src="{{(isset($_COOKIE['lang']))?'/lang/'.$_COOKIE['lang'].'.jpg':'ru.jpg'}}" alt="..." class="img-thumbnail icon-small">&nbsp;&nbsp;
                            <span id="lanNavSel">
							{{(isset($_COOKIE['lang']))?$_COOKIE['lang']:'ru'}}
							</span> 
							<span class="caret"></span></a>
                        <ul class="dropdown-menu mumu" role="menu">
                            <li><a id="navFra" href="/?lang=fr" class="language">
                                    <img id="imgNavFra" src="{{asset('lang/fr.jpg')}}" alt="France" class="img-thumbnail icon-small">&nbsp;
                                    <span id="lanNavFra">Française</span>&nbsp;
                                </a></li>
                            <li><a id="navEng" href="/?lang=en" class="language">
                                    <img id="imgNavEng" src="{{asset('lang/en.jpg')}}" alt="English" class="img-thumbnail icon-small">&nbsp;
                                    <span id="lanNavEng">English</span>&nbsp;
                                </a></li>
                            <li><a id="navRus" href="/?lang=ru" class="language">
                                    <img id="imgNavRus" src="{{asset('lang/ru.jpg')}}" alt="Russia" class="img-thumbnail icon-small">&nbsp;
                                    <span id="lanNavRus">Русский</span>&nbsp;
                                </a></li>
                        </ul>
</li>
	     <div id="header" >
		  <div class="etno">
			 <a href="{{asset('home')}}"><img src="{{asset('media/img/etnostyle.png')}}"></a>
			 </div>
		     <div class="ssylki">
	             <a href="{{asset('about')}}">@lang('base.about')</a> &nbsp &nbsp &nbsp
		         <a href="{{asset('catalog')}}">@lang('base.catalog')</a> &nbsp &nbsp &nbsp
		         <a href="#">@lang('base.delivery')</a> &nbsp &nbsp &nbsp
		         <a href="{{asset('comments')}}">@lang('base.reviews')</a> &nbsp &nbsp &nbsp
		         <a href="{{asset('contact')}}">@lang('base.contacts')</a>
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