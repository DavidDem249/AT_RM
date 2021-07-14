<div>
    
    <div class="row">

        <div class="col-lg-6 ">
            <div class="contact-form-area ptb ">
            	<center>
            		<span class="mt-3" style="color:green;font-size: 17px;font-weight: bold;">
            			@if(session()->has('message'))
            				Message envoyé avec succès
            			@endif
            		</span> 
            	</center>
                <div class="container-fluid">
                    <!-- <div  class=" text-white text-center py-2">
                        <h2 style=" "> Envoyez votre message</h2>
                    </div><br> -->
                    <!--route cree manasse route('message') wire:submit.prevent="sendMessage"  -->
                    <form wire:submit.prevent="sendMessage">
                        <div class="row contact-wrap m-4">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="nom" id="name" class="form-control" data-error="Svp, entrez votre nom" placeholder="{{ $email }} Votre nom" wire:model='nom'>
                                    <!-- <div class="help-block with-errors"></div> -->
                                    @error('nom') 
										<span class="text-danger" style="color: red;">
											Le nom svp
										</span>
									@enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="prenom" id="name" name="name" class="form-control" data-error="Svp, entrez votre prénom" placeholder="Prenom" wire:model='prenom'>
                                    <!-- <div class="help-block with-errors"></div> -->
                                    @error('prenom') 
										<span class="text-danger" style="color: red;">
											Le prénom svp
										</span>
									@enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" name="surname" class="form-control" data-error="Svp, entrez votre email" placeholder="email" wire:model='email'>
                                    <!-- <div class="help-block with-errors"></div> -->
                                    @error('email') 
										<span class="text-danger text-sm" style="color: red;">
											Adresse mail svp
										</span>
									@enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone_number" data-error="Svp, entrez votre numero" class="form-control" placeholder="Votre numero de telephone" wire:model='phone'>
                                    <!-- <div class="help-block with-errors"></div> -->
                                    @error('phone') 
										<span class="text-danger" style="color: red;">
											Numéro svp
										</span>
									@enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="subject" id="msg_subject" class="form-control" data-error="Svp, entrez votre subject" placeholder="Objet" wire:model='subject'>
                                    <!-- <div class="help-block with-errors"></div> -->
                                    @error('subject') 
										<span class="text-danger" style="color: red;">
											L'objet svp
										</span>
									@enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" data-error="Ecrivez votre message" placeholder="Ecrivez votre message" wire:model='message'></textarea>
                                    <!-- <div class="help-block with-errors"></div> -->
                                    @error('message') 
										<span class="text-danger" style="color: red;">
											Le message svp
										</span>
									@enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <div class="text-center">
                                	<div wire:loading.delay wire:target="sendMessage">
								        <div class="lds-dual-ring"></div>
								    </div>
                                    <button type="submit" class="btn contact-btn" wire:loading.attr="disabled" style="width: 100%;">ENVOYER
                                    </button>
                                </div>
                                <!-- <div id="msgSubmit" class="h3 text-center hidden"></div> -->
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>

        <!--image-->
        <div class="col-lg-6 ">
            <br>
            <center>
                <div class='ih-item  square effect13 from_top_and_bottom scale_up'>
                    <a class='lightbox-link' rel='12077'>
                        <img src="{{ asset('images/contact-2.jpg') }}" width='700px' height='400px' />
                        <div class='info'><br><br><br><br>
                            <h3>Contactez-nous</h3>
                            <p>Nous ferons le mieux possible pour vous satisfaire</p>
                        </div>
                    </a>
                </div>
            </center>
        </div>
        <!--mage-->
    </div>
</div>
