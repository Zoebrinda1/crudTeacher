@extends("layouts.app")

@section("content")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Edition d'un nouvel enseigant</h3>
    
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

    <form style = "width:65%;" method="POST" action= " {{route('enseignant.update', ['enseignant'=>$enseignant->id])}}" >
@csrf


  <div class="mb-3">
    <label for="exampleInputEmail1">Nom </label>
    <input type="text" class="form-control" name="Nom" values="{{$enseignant->Nom}}" >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1">Prénom </label>
    <input type="text" class="form-control"name="Prénom" values="{{$enseignant->Prénom}}"  >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1"> Email</label>
    <input type="text" class="form-control" name="Email" values="{{$enseignant->Email}}"  >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1">Téléphone</label>
    <input type="phoneNumber" class="form-control" name="Téléphone" values="{{$enseignant->Téléphone}}"  >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1">Statut</label>
    <select class="form-control" name="statut_id"  >
        <option value = ""></option>
        @foreach($statuts as $statut)
        @if($statut->id == $enseignant->statut_id)
        <option values = "{{$statut->id}}" selected>{{$statut->id}}</option>
        @else
        <option values = "{{$statut->id}}" >{{$statut->id}}</option>
        @endif
        @endforeach
</select>
  </div>
  
  <button type="submit" class="btn btn-primary">Enregistrer</button>
  <button type="{{route('enseignant')}}" class="btn btn-danger">Annuler</button>
</form>
  
  </div>
</div>
@endsection
    