<section class="category-area category-area-two pt-100 pb-70">
    <section class="container box">
        <div class="section-title">
            <h2>Nos domaines de prestation</h2>
        </div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item mb-2 active" role="presentation">
                <button class="nav-link active" id="pills-service-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Dépannage</button>
            </li>
            <li class="nav-item mb-2" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Demander une résource ménagère</button>
            </li>
            <li class="nav-item mb-2" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Demande de réssource technicien</button>
            </li>
            <li class="nav-item mb-2" role="presentation">
                <button class="nav-link" id="pills-mecanicien-tab" data-bs-toggle="pill" data-bs-target="#pills-mecanicien" type="button" role="tab" aria-controls="pills-mecanicien" aria-selected="false">Demande de réssource</button>
            </li>
            
        </ul>
        <div class="tab-content" id="pills-tabContent">

            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-md-5">
                        <center> <img src="{{ asset('images/client.png') }}" class="img_box_left"></center>
                    </div>
                    <div class="col-md-2">
                        <center>
                            <div class="">
                                <button class="btn btn1 btn-outline-dark">
                                    +225 0577555576
                                </button>
                            </div>
                            <!-- <br> -->
                            <div class=""> 
                                <button class="btn btn-outline-dark">
                                    Réserver chez nous
                                </button>
                            </div>
                        </center>
                    </div>
                    <div class="col-md-5">
                        <center>
                            <img src="{{ asset('images/client.png') }}" class="img_box_right">
                        </center>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-md-6">
                        <h2 style="padding: 20px;">Lorem TITLE</h2>
                        <p style="padding: 20px;">                            
                            Lorem Lorem ipsum dolor sit amet consectetur 
                            adipisicing elit. Alias quae quos nesciunt laboriosam doloremque, 
                            veniam sint explicabo omnis distinctio obcaecati, temporibus aliquid 
                            reiciendis atque ipsa odio voluptatum vel, quas optio?
                        </p>
                        <p style="padding: 20px;"> 
                            Lorem Lorem ipsum dolor sit amet consectetur 
                            adipisicing elit. Alias quae quos nesciunt laboriosam doloremque, 
                            veniam sint explicabo omnis distinctio obcaecati, temporibus aliquid 
                            reiciendis atque ipsa odio voluptatum vel, quas optio?
                        </p>
                    </div>
                    <div class="col-md-5">
                        <center>
                            <img src="{{ asset('images/client.png') }}" class="img_box_right">
                        </center>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row">
                    <div class="col-md-5">
                        <center> 
                            <img src="{{ asset('images/client.png') }}" class="img_box_left">
                        </center>
                    </div>
                    <div class="col-md-2">
                        <center>
                            <button class="btn btn1 btn-outline-dark">LoremIpsum</button>
                            <br><button class="btn btn-outline-dark">LoremIpsum</button>
                        </center>
                    </div>
                    <div class="col-md-5">
                        <center>
                            <img src="{{ asset('images/client.png') }}" class="img_box_right">
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>