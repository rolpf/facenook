@extends('layouts.app')

@section('content')

 <div class="profil">
     <div class="container">
            <div class="container-gauche">
                <h1>Mon profil</h1>
                <div class="photos-profil">
                    <img src="css/img/icon_people.png">
                </div>
                <div class="informations-utilisateur">
                    <p>Nombre d'amis : </p>
                </div>
                <div class="photos">
                    <h1>Photos : </h1>
                        <!-- <img src="css/img/Marie.png"> -->
                </div>
            </div>


          

            <div class="container-droit">
                <p>Salut nom utilisateur </p>
                    <div class="ecrire-post">
                        <h6>decrivez-nous votre journée</h6>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium, tempore iusto assumenda illum quibusdam velit ut corporis odio. Ullam illum
                             sit tenetur corporis quis molestias quae eum 
                             accusantium libero nam?</p>
                    </div>
            </div>



     </div>
    </div>

                
 
@endsection