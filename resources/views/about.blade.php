@extends('layouts.main')

@section('about')
    <div class="row d-flex justify-content-center">
        <div class="col-md-7">
            <div class="card p-3 py-4">
                <div class="text-center">
                    <img src="img/{{ $gambar }}" width="100" class="rounded-circle">
                </div>
                <div class="text-center">
                    <h5 class="mt-2 mb-0">{{ $nama }}</h5>
                    <span>{{ $profesi }}</span>
                    <div class="px-4 mt-1">
                        <p class="fonts">{{ $deskripsi }}</p>
                    </div>
                    <ul class="social-list">
                        <li><i class="fa fa-facebook"></i></li>
                        <li><i class="fa fa-dribbble"></i></li>
                        <li><i class="fa fa-instagram"></i></li>
                        <li><i class="fa fa-linkedin"></i></li>
                        <li><i class="fa fa-google"></i></li>
                    </ul>
                    <div class="buttons">
                        <button class="btn btn-outline-primary px-4">Message</button>
                        <button class="btn btn-primary px-4 ms-3">Contact</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
