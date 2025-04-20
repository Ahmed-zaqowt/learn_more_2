@extends('SiteOne.master')
@section('content')


    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach ($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div>

            <form enctype="multipart/form-data" id="contactForm" method="POST" action="{{ route('site1.postcontact') }}">
                @csrf
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input name="name"
                class="form-control @error('name')
                              is-invalid
                        @enderror " type="text"
                                placeholder="Your Name *" />
                            @error('name')
                                <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input name="email" class="form-control" id="email" type="email"
                                placeholder="Your Email *" />
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input name="phone" class="form-control" id="phone" type="tel"
                                placeholder="Your Phone *" />
                        </div>
                        <div class="form-group mb-md-0 mt-3">
                            <!-- Phone number input-->
                            <input name="image" class="form-control" id="image" type="file" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea name="msg" class="form-control" id="message" placeholder="Your Message *"></textarea>
                        </div>
                    </div>
                </div>





                <button class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
            </form>
        </div>
    </section>


@stop
