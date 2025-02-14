@extends('master')
@section('title','Contact')
@section('content')
<!-- Main Content-->
<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <div class="my-5">
                        @isset($data)
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="fw-bolder">Form submission successful!</div>
                        <p><strong>Name: </strong>{{ $data->name ?? ''}}</p>
                        <p><strong>Email: </strong>{{ $data->email ?? ''}}</p>
                        <p><strong>Message: </strong>{{ $data->message ?? ''}}</p>
                        @else
                        <p>Vous souhaitez nous contacter ?</p>
                        <p>Remplissez le formulaire ci-dessous pour nous envoyer un message et nous
                            vous répondrons dans les plus brefs délais !</p>
                        <br>
                        <form id="contactForm" method="post" data-sb-form-api-token="YOUR_API_TOKEN">
                            @csrf
                            <div class="form-floating">
                                <input class="form-control" name="name" id="name" type="text"
                                    placeholder="Entrez votre nom..." data-sb-validations="required" required />
                                <label for="name">Votre Nom</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Vous devez entrer un nom.
                                </div>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" name="email" id="email" type="email"
                                    placeholder="Entrez votre adresse email..." data-sb-validations="required,email" />
                                <label for="email">Addresse email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Un adresse email est
                                    requise.
                                </div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">L'adresse email n'est pas
                                    valide.
                                </div>
                            </div>
                            <div class="form-floating">
                                <textarea name="message" class="form-control" id="message"
                                    placeholder="Entrez votre message ici..." style="height: 12rem"
                                    data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Un message est requis.
                                </div>
                            </div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary text-uppercase disable" id="submitButton"
                                type="submit">Send</button>
                        </form>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection