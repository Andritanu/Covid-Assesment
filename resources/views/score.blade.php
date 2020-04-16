@extends('layouts.appa')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center">Hasil untuk anda</div>

                <div class="card-body" align="center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{Auth::user()->name}}, berikut adalah hasil setelah anda mengisi assesment di halaman sebelumnya
                    <br>
                    @foreach ($scores as $score)
                     {{$score->YA}} Jawaban YA &nbsp; &nbsp;
                      <br> 
                      @if( $score->YA <=21 and $score->YA >= 14 )
                      Resiko Anda terkena Covid-19 TINGGI
                      @elseif($score->YA <=14 and $score->YA >= 7)
                      Resiko Anda terkena Covid-19 SEDANG
                      @elseif($score->YA <=7)
                      Resiko Anda terkena Covid-19 RENDAH
                      @endif
                    @endforeach
                    <div class="card-header" align="center">Terimakasih telah menggunaka aplikasi ini</div>

                    
                   

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
