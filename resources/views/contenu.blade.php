@extends('accueil')

@push('stylesheets')
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script src="{{ elixir('js/all.js') }}"></script>
@endpush

@section('content')
<link href="{{ elixir('css/app.css') }}" rel="stylesheet">
<script src="{{ elixir('js/all.js') }}"></script>
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
@endsection