<section class="navigationbar" id="navbar">
            <div class="container">
<nav class="navbar navbar-inverse">
    
                    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                      </button>
                      
         <a class="navbar-brand" href="#"><img class="img-fluid" src="{{asset('assets/site/images/logo.png')}}"></a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
             
            @foreach($navbar as $item)

               
                  
                        
                     
                <li>
                    <a href="{{ $item->fullUrl() }}"><i class="{{$item->icon}}" aria-hidden="true"></i>{{ $item->title_locale }}</a>
                </li>
               
            @endforeach

           
        </ul>
    </div>
  
</nav>
</div>
    
    </section>