@extends('bases.master')

@section('styles')
	<link type="text/css" href="{{ asset('assets/css/login.css') }}" rel="stylesheet" />
@stop

@section('content')
	<div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-text">
                        <h2 style="font-size: 20px;">CONTACTEZ-NOUS</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-form-area ptb-100">
        <div class="container-fluid">
            <form id="contactForm" action="" method="POST">
                <div class="row contact-wrap">
                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Full Name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Job Description"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="text-center">
                            <button type="submit" class="btn contact-btn">Submit</button>
                        </div>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="map-area pb-100">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.1610127505137!2d-3.9783475854389385!3d5.392418736773158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc19345661af3c7%3A0xfde21c611e00748c!2sRadio%20Cocody%20FM%20(98.5)!5e0!3m2!1sfr!2sci!4v1624409279065!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    
@stop