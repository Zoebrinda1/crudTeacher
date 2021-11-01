@extends("layouts.app")

@section("content")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste des matières enregistées</h3>
    <div class= "mt-4">
    <div class="d-flex justify-content-between mb-2">
    {{$matieres->links()}}
  <div><a href = "{{route('matiere.create')}}" class= "btn btn-primary">Ajouter une nouvelle matiere</a></div>
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
      <th scope="col">Niveaux</th>
      <th scope="col">EC</th>
      <th scope="col">Code EC</th>
      <th scope="col">Crédit EC</th>
      <th scope="col">Heures</th>
      
    </tr>
  </thead>
  <tbody>
      @foreach($matieres as $matiere)
    <tr>
      <th scope="row">{{$loop->index + 1}}</th>
      
      <td>{{$matiere->niveaux}}</td>

      <td>{{$matiere->EC}}</td>

      <td>{{$matiere->codeEC}}</td>

      <td>{{$matiere->créditEC}}</td>

      <td>{{$matiere->heure}}</td>
            

    @endforeach
    
  </tbody>
  
</table>
  </div>
</div>
@endsection