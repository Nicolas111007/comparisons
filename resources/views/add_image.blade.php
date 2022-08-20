<form method="post" action="">
      @csrf
       <div class="form-group">
           <label for="nom">Nom :</label>
           <input type="text" class="form-control" name="nom"/>
       </div>

       <div class="form-group">
           <label for="prenom">Prénom :</label>
           <input type="text" class="form-control" name="prenom"/>
       </div>

       <div class="form-group">
         <label for="email">Email :</label>
         <input type="email" class="form-control" name="email"/>
     </div>

     <div class="form-group">
       <label for="num_tel">Numéro de téléphone :</label>
       <input type="text" class="form-control" name="num_tel"/>
   </div>

   <span>Admin</span>
   <div class="mt-2">
     <label class="inline-flex items-center">
       <input type="radio" class="form-radio" name="admin" value="1">
       <span class="ml-2">Oui</span>
     </label>
     <label class="inline-flex items-center ml-6">
       <input type="radio" class="form-radio" name="admin" value="0">
       <span class="ml-2">Non</span>
     </label>
  </div>

  <div class="form-group">
    <label for="description">Descri :</label>
    <input type="text" class="form-control" name="description"/>
</div>

//add_image.blade.php
<div class="container">
  <form method="post" action="{{ route('images.store') }}" 
		enctype="multipart/form-data">
    @csrf
    <div class="image">
      <label><h4>Add image</h4></label>
      <input type="file" class="form-control" required name="image">
    </div>

    <div class="post_button">
      <button type="submit" class="btn btn-success">Add</button>
    </div>
  </form>
</div>

<button type="submit" class="btn btn-primary mt-5">Ajouter</button>
   </form>
</div>
</div>