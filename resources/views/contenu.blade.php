@extends('accueil')

@push('stylesheets')
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
@endpush

@section('content')
@if (Auth::check()) 
<div class="miniature">
    <div  class="view view-fifth">  
         <img src="{{URL::asset('/img/fille.png')}}" alt=""> 
         <div class="mask">  
         <h2>Une fille parfaite</h2>  
         <p>«Je la suis depuis plusieurs jours. Je sais où elle fait ses courses, où elle travaille. Je ne connais pas la couleur de ses yeux ni comment est son regard quand elle a peur. Mais je le saurai bientôt.»</p> <a href="#" class="info">Voir plus</a></div>  
    </div>
        <div class="view view-fifth">  
         <img src="{{URL::asset('/img/fille.png')}}" alt=""> 
         <div class="mask">  
         <h2>Une fille parfaite</h2>  
         <p>«Je la suis depuis plusieurs jours. Je sais où elle fait ses courses, où elle travaille. Je ne connais pas la couleur de ses yeux ni comment est son regard quand elle a peur. Mais je le saurai bientôt.»</p> <a href="#" class="info">Voir plus</a></div>  
    </div>
            <div class="view view-fifth">  
         <img src="{{URL::asset('/img/fille.png')}}" alt=""> 
         <div class="mask">  
         <h2>Une fille parfaite</h2>  
         <p>«Je la suis depuis plusieurs jours. Je sais où elle fait ses courses, où elle travaille. Je ne connais pas la couleur de ses yeux ni comment est son regard quand elle a peur. Mais je le saurai bientôt.»</p> <a href="#" class="info">Voir plus</a></div>  
    </div>
            <div class="view view-fifth">  
         <img src="{{URL::asset('/img/fille.png')}}" alt=""> 
         <div class="mask">  
         <h2>Une fille parfaite</h2>  
         <p>«Je la suis depuis plusieurs jours. Je sais où elle fait ses courses, où elle travaille. Je ne connais pas la couleur de ses yeux ni comment est son regard quand elle a peur. Mais je le saurai bientôt.»</p> <a href="#" class="info">Voir plus</a></div>  
    </div>
</div>
@else
<div class="miniature">
    <div  class="view view-fifth">  
         <img src="{{URL::asset('/img/Voyage.jpg')}}" alt=""> 
         <div class="mask">  
         <h2>Voyage au centre de la Terre</h2>  
         <p>Dans la petite maison du vieux quartier de Hambourg où Axel, jeune homme assez timoré, travaille avec son oncle, l’irascible professeur Lidenbrock, géologue et minéralogiste ...</p> <a href="#" class="info">Voir plus</a></div>  
    </div>
    <div class="view view-fifth">  
         <img src="{{URL::asset('/img/Voyage.jpg')}}" alt=""> 
         <div class="mask">  
         <h2>Voyage au centre de la Terre</h2>  
         <p>Dans la petite maison du vieux quartier de Hambourg où Axel, jeune homme assez timoré, travaille avec son oncle, l’irascible professeur Lidenbrock, géologue et minéralogiste ...</p> <a href="#" class="info">Voir plus</a></div>  
    </div>
    <div class="view view-fifth">  
         <img src="{{URL::asset('/img/Voyage.jpg')}}" alt=""> 
         <div class="mask">  
         <h2>Voyage au centre de la Terre</h2>  
         <p>Dans la petite maison du vieux quartier de Hambourg où Axel, jeune homme assez timoré, travaille avec son oncle, l’irascible professeur Lidenbrock, géologue et minéralogiste ...</p> <a href="#" class="info">Voir plus</a></div>  
    </div>
    <div class="view view-fifth">  
         <img src="{{URL::asset('/img/Voyage.jpg')}}" alt=""> 
         <div class="mask">  
         <h2>Voyage au centre de la Terre</h2>  
         <p>Dans la petite maison du vieux quartier de Hambourg où Axel, jeune homme assez timoré, travaille avec son oncle, l’irascible professeur Lidenbrock, géologue et minéralogiste ...</p> <a href="#" class="info">Voir plus</a></div>  
    </div>
</div>
@endif
@endsection