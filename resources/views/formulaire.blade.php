
@extends('layouts.app')

@section('title', 'Formulaire')

@section('content')
    <!-- Ton formulaire ici -->


               <!-- Form wizard with icon tabs section start -->

                <section id="icon-tabs">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form wizard with icon tabs</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        {{-- <form action="{{ route('formulaire.traiter') }}" class="icons-tab-steps wizard-circle"> --}}
                                            <form action="{{ route('voitures.store') }}" method="POST">
                                            <!-- Step 1 -->
                                            <h6><i class="step-icon la la-home"></i> Step 1</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="marque">Marque :</label>
                                                            <input type="text" class="form-control" id="marque">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="modele">Modele :</label>
                                                            <input type="text" class="form-control" id="modele">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="annee">Annee :</label>
                                                            <input type="text" class="form-control" id="annee">
                                                        </div>
                                                    </div>

                                                    
                                                
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="couleur">Couleur :</label>
                                                            <input type="text" class="form-control" id="couleur">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label for="prix">Prix" :</label>
                                                        <input type="number" class="form-control" id="prix">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label for="immatriculation">Immatriculation" :</label>
                                                        <input type="text" class="form-control" id="immatriculation">
                                                    </div>
                                                </div>
                                            </div>
                                            </fieldset>

                                          
                                            
                                            <button type="submit" class="btn btn-primary">Ajouter</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                
                <!-- Form wizard with icon tabs section end -->

                @section('page-js')
{{-- <script>
    $(document).ready(function() {
        // Initialisation du form wizard
        $(".icons-tab-steps").steps({
            headerTag: "h6",
            bodyTag: "fieldset",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: 'Soumettre',
                next: 'Suivant',
                previous: 'Précédent'
            },
            onFinished: function (event, currentIndex) {
                // Soumission du formulaire lorsqu'on clique sur "Finish"
                $(".icons-tab-steps").submit();
            }
        });

        // Validation du formulaire
        $(".icons-tab-steps").validate({
            errorPlacement: function errorPlacement(error, element) {
                element.after(error);
            },
            rules: {
                // Ajoutez vos règles de validation ici
                firstName2: "required",
                lastName2: "required",
                emailAddress3: {
                    required: true,
                    email: true
                }
            },
            messages: {
                // Messages d'erreur personnalisés
                firstName2: "Veuillez entrer votre prénom",
                lastName2: "Veuillez entrer votre nom",
                emailAddress3: {
                    required: "Veuillez entrer votre email",
                    email: "Veuillez entrer un email valide"
                }
            }
        });
    });
</script>
@endsection --}}


@endsection

















               <!-- Form wizard with icon tabs section start -->

               <section id="icon-tabs">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form wizard with icon tabs</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    
                                        <form action="{{ route('voitures.store') }}" method="POST" > 
                                            @csrf
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Marque</label>
                                                        <input type="text" name="marque" class="form-control" required id="marque">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Modèle</label>
                                                        <input type="text" name="modele" class="form-control" required id="modele">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="annee">Année</label>
                                                        <input type="number" name="annee" class="form-control" required id="annee">
                                                    </div>
                                                </div>

                                                
                                            
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="couleur">Couleur :</label>
                                                        <input type="text" name="couleur" class="form-control" required id="couleur">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="prix">Prix :</label>
                                                <input type="number" step="0.01" name="prix" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="immatriculation">Immatriculation :</label>
                                                <input type="text" name="immatriculation" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Ajouter</button>
                                        </fieldset>

                                      
                                        
                                       
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            
            <!-- Form wizard with icon tabs section end -->

            @section('page-js')
{{-- <script>
$(document).ready(function() {
    // Initialisation du form wizard
    $(".icons-tab-steps").steps({
        headerTag: "h6",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        titleTemplate: '<span class="step">#index#</span> #title#',
        labels: {
            finish: 'Soumettre',
            next: 'Suivant',
            previous: 'Précédent'
        },
        onFinished: function (event, currentIndex) {
            // Soumission du formulaire lorsqu'on clique sur "Finish"
            $(".icons-tab-steps").submit();
        }
    });

    // Validation du formulaire
    $(".icons-tab-steps").validate({
        errorPlacement: function errorPlacement(error, element) {
            element.after(error);
        },
        rules: {
            // Ajoutez vos règles de validation ici
            firstName2: "required",
            lastName2: "required",
            emailAddress3: {
                required: true,
                email: true
            }
        },
        messages: {
            // Messages d'erreur personnalisés
            firstName2: "Veuillez entrer votre prénom",
            lastName2: "Veuillez entrer votre nom",
            emailAddress3: {
                required: "Veuillez entrer votre email",
                email: "Veuillez entrer un email valide"
            }
        }
    });
});
</script>
@endsection --}}


@endsection