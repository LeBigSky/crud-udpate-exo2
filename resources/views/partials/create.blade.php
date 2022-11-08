<section>
    <h1> Ajouter un membre</h1>
        <div class="container d-flex justify-content-center gap-2">
            
            <form class="d-flex gap-2" action="{{ route('store.membre') }}" method="POST">
            @csrf
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom">
            </div>
         
            <div>
                <label for="age">Age</label>
                <input type="number" name="age" id="age">
            </div>
            <div>
                <label for="genre">Genre</label>
                <select name="genre" id="genre">
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                </select>
            </div>
            <button type="submit">Ajouter le membre</button> 
            </form>
    </div>
    </section>