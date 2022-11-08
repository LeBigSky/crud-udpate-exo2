<section>
    <button type="button" class="btn btn-warning my-3"><a style="text-decoration: none; color: black;" href="{{ route('home') }}"> &#x21A9;
        STEP BACK</a></button>
    
    <div class="mt-5">
    
        <div class="container w-50 border d-flex flex-column justify-content-cente bg-warning mb-3">
            <h4> Etudiant n° {{ $membre->id }}</h4>
        </div>
        <div class="container w-50 border d-flex flex-column align-items-center align-middle gap-3">
            <h2 class="my-3"> {{ $membre->nom }}</h2> 
            <p class="d-flex justify-content-center" style= "text-align: center" > Age: {{ $membre['age'] }}</p>
        </div>
        <div class="d-flex justify-content-center gap-5 mt-5">
           <a href="/edit/{{ $membre->id }}"><button class="btn btn-info">EDIT</button> </a>
           <a href="/delete/{{ $membre->id }}"><button class="btn btn-danger">DELETE</button></a>
        </div>
        
    </div>
</section>