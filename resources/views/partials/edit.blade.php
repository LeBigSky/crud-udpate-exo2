<section>
    <h1> Modifier un membre</h1>
        <div class="container d-flex justify-content-center gap-2">
            <form class="d-flex gap-2" action="/update/{{ $edit['id'] }}" method="POST">
            @csrf
            <div>
                <label for="espece">Nom</label>
                <input type="text" name="nom" id="nom" value="{{ $edit['nom'] }}">
            </div>
         
            <div>
                <label for="age">Age</label>
                <input type="number" name="age" id="age" value="{{ $edit['age'] }}">
            </div>
            <div>
                <label for="genre">Genre</label>
                <select name="genre" id="genre" value="{{ $edit['genre'] }}">
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                </select>
            </div>
            <button type="submit">Modifier le membre</button> 
            </form>
    </div>
    </section>