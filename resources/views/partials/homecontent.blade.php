<section>
    <div class="container">
        <button type="button" class="btn btn-warning my-3" ><a style="text-decoration: none; color: black;" href="{{ route('create') }}">CREER  &#10133;</a></button>
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                  <th>Nom</th>
                  <th>Age</th>
                  <th>Genre</th>
                  <th>Show</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($membres as $membre )
            
                
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="ms-3">
                      <h4>{{ $membre['nom'] }}</h4>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="fw-normal mb-1">{{ $membre['age'] }}</p>
                </td>
                <td>
                    <p class="fw-normal mb-1">{{ $membre['genre'] }}</p>
                  </td>
                <td>
                    <a class="text-white" style="text-decoration: none" href={{ "show/".$membre['id'] }}>
                  <button type="button" class="btn btn-info btn-sm btn-rounded">
                    Show
                  </button>
                    </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    
</section>