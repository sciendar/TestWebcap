@extends('index')

@section('content')
    <div class="container contact-section my-5">
        <div class="card">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card-body contact text-center h-100 white-text">

                        <h3 class="my-4 pb-2">Contact information</h3>
                        <ul class="text-lg-left list-unstyled ml-4">
                            <li>
                                <p><i class="fas fa-map-marker-alt pr-2"></i>Zaporizhzhia, vul. Borodinska, 65</p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone pr-2"></i>+38 (067) 123-45-67</p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope pr-2"></i>contact@example.com</p>
                            </li>
                        </ul>
                        <hr class="hr-light my-4">
                        <ul class="list-inline text-center list-unstyled">
                            <li class="list-inline-item">
                                <a class="p-2 fa-lg tw-ic">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-2 fa-lg li-ic">
                                    <i class="fab fa-linkedin-in"> </i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-2 fa-lg ins-ic">
                                    <i class="fab fa-instagram"> </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card-body form">
                        <form class="was-validated" method="POST" action="{{ route('send') }}" enctype="multipart/form-data">
                            @csrf

                            @auth
                                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                            @else
                                <input type="hidden" name="user_id" value="">
                            @endauth

                            <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i>Write to us:</h3>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name">Your name</label>
                                    <input type="text" id="form-contact-name" class="form-control" name="name" length="50" value="{{ old('name') }}" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="email">Your email</label>
                                    <input type="email" id="form-contact-email" class="form-control" name="email" length="50" value="{{ old('email') }}" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="phone">Your phone</label>
                                    <input type="text" id="form-contact-phone" class="form-control" name="phone" length="20" value="{{ old('phone') }}">
                                </div>

                                <div class="col-md-6">
                                    <label for="image">Your image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image" id="image" value="{{ old('image') }}" accept=".png, .jpg, .jpeg" required>
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="message">Your message</label>
                                    <textarea id="form-contact-message" class="form-control md-textarea" rows="3" name="message" length="500" value="{{ old('message') }}" required></textarea>
                                    <button class="btn-floating btn-lg blue">
                                        <i class="far fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
