@extends("layouts.app")

@section("content")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Ajout d'une nouvelle matière</h3>
    
    <div class= "mt-4">
 
    @if(session()->has("success"))
    <div class= "alert alert-success">
    <h3> {{session()->get('success')}} </h3>
</div>
    @endif

        @if ($errors->any())
        <div class= "alert alert-danger">
        <ul >
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
</div>
        @endif

    <form style = "width:65%;" method="post" action= " {{route('matiere.create')}}" >
@csrf


  <div class="mb-3">
    <label for="exampleInputEmail1">Niveau</label>
    <input type="text" class="form-control" name="Niveaux"  >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1">Elément Constitutifs</label>
    <input type="text" class="form-control"name="EC"   >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1">Code de l'EC</label>
    <input type="text" class="form-control" name="codeEC"  >
    </div>
  <div class="mb-3">
    <label for="exampleInputPassword1">Crédit de l'EC</label>
    <input type="integer" class="form-control" name="créditEC"  >
  </div>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1">Nombre d'heures de cours </label>
    <input type="integer" class="form-control" name="heure"  >
  </div>
  
  <button type="submit" class="btn btn-primary">Enregistrer</button>
  <button type="{{route('matiere')}}" class="btn btn-danger">Annuler</button>
</form>
  
  </div>
</div>
@endsection