<div id="rdv" class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-5 text-white mb-4">Bienvenue sur Akdital</h1>
                        <p class="text-white mb-0">Notre plateforme en ligne de gestion des rendez-vous médicaux. Nous avons simplifié le processus de prise de rendez-vous pour offrir à nos patients un accès facile et pratique à nos services médicaux. Grâce à notre système en ligne, vous pouvez prendre rendez-vous avec les médecins de votre choix, selon votre disponibilité et vos besoins.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Prendre Rendez-Vous</h1>
                        <form method="POST" action="{{url('appointment')}}">
                            @csrf
                            <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" name="name" placeholder="Votre nom" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" name="email" placeholder="Votre Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="date" class="form-control bg-light border-0"
                                            name="date" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" name="doctor" style="height: 55px;">
                                    <option >---select doctor---</option>
                                    @foreach($doctor as $doctors)
                                        <option value="{{$doctors->name}}">{{$doctors->name}} --- {{$doctors->specialty}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Number" name="number" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <!-- <input type="text"  placeholder="Number" style="height: 55px;"> -->
                                    <textarea class="form-control bg-light border-0" id="" name="message"  placeholder="Entrer message" style="height: 55px;" cols="30"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Prendre Rendez Vous</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>