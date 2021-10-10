@extends("layouts.app")

@section("content")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste des enseignants enregistés</h3>
    <div class= "mt-4">
    <div class="d-flex justify-content-between mb-2">
    {{$enseignants->links()}}
  <div><a href = "{{route('enseignant.create')}}" class= "btn btn-primary">Ajouter un nouvel enseignant</a></div>
    </div>

    @if(session()->has("successDelete"))
    <div class= "alert alert-success">
    <h3> {{session()->get('successDelete')}} </h3>
</div>
    @endif


    <table class="table table-borderd table-hover ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Email</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Statut</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
      @foreach($enseignants as $enseignant)
    <tr>
      <th scope="row">{{$loop->index + 1}}</th>
      
      <td>{{$enseignant->Nom}}</td>

      <td>{{$enseignant->Prénom}}</td>

      <td>{{$enseignant->Email}}</td>

      <td>{{$enseignant->Téléphone}}</td>

      <td>{{$enseignant->statut_id}}</td>
      <td>
             <a href ="{{ route('enseignant.edit', ['enseignant'=>$enseignant->id]) }}" class = "btn btn-info">Editer</a>
              <a href = "#" class= "btn btn-danger" onclick="if(confirm('Voulez-vous vraiment supprimer cet enseignant?')){document.getElementById('form-{{$enseignant->id}}').submit() }">Supprimer</a>
  
              <form id = "form-{{$enseignant->id}}" action ="{{route('enseignant.supprimer', ['enseignant'=>$enseignant->id] ) }} " method ="post">
                  @csrf
                  <input type="hidden" name="_method" value="delete">
              </form>
    
      </td>
      
    </tr>
    @endforeach
    
  </tbody>
  
</table>
  </div>
</div>
@endsection
    