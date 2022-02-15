@extends('base')
@section('content')

<a href="/pembayaran/create">Create New Pembayaran</a>

<ul>
@foreach ($pembayaran as $pembayaran)
    <li><a href="/pembayaran/{{$pembayaran->id}}">Nama Pembayar: {{ $pembayaran->namaPembayar }}</a>, Tarikh: {{ $pembayaran->tarikhPembayaran }}, Jumlah: {{ $pembayaran->totalPembayaran }}</li>
@endforeach
</ul>

<div class="card mb-3">
    <div class="card-header">
      <div class="row align-items-center">
        <div class="col">
          <h5 class="mb-0">Informasi </h5>
        </div>
        <div class="col-auto"><a class="btn btn-falcon-default btn-sm" href="#!"><svg class="svg-inline--fa fa-pencil-alt fa-w-16 fs--2 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pencil-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M497.9 142.1l-46.1 46.1c-4.7 4.7-12.3 4.7-17 0l-111-111c-4.7-4.7-4.7-12.3 0-17l46.1-46.1c18.7-18.7 49.1-18.7 67.9 0l60.1 60.1c18.8 18.7 18.8 49.1 0 67.9zM284.2 99.8L21.6 362.4.4 483.9c-2.9 16.4 11.4 30.6 27.8 27.8l121.5-21.3 262.6-262.6c4.7-4.7 4.7-12.3 0-17l-111-111c-4.8-4.7-12.4-4.7-17.1 0zM124.1 339.9c-5.5-5.5-5.5-14.3 0-19.8l154-154c5.5-5.5 14.3-5.5 19.8 0s5.5 14.3 0 19.8l-154 154c-5.5 5.5-14.3 5.5-19.8 0zM88 424h48v36.3l-64.5 11.3-31.1-31.1L51.7 376H88v48z"></path></svg><!-- <span class="fas fa-pencil-alt fs--2 me-1"></span> Font Awesome fontawesome.com -->Ubah</a></div>
      </div>
    </div>
    <div class="card-body bg-light border-top">
      <div class="row">
        <div class="col-lg col-xxl-5">
          <h6 class="fw-semi-bold ls mb-3 text-uppercase">Akaun Informasi</h6>
          <div class="row">
            <div class="col-5 col-sm-4">
              <p class="fw-semi-bold mb-1">Nama</p>
            </div>
            <div class="col">dcfasyo_Dfdjl</div>
          </div>
          <div class="row">
            <div class="col-5 col-sm-4">
              <p class="fw-semi-bold mb-1">Username</p>
            </div>
            <div class="col">2019/01/12 23:13</div>
          </div>
          <div class="row">
            <div class="col-5 col-sm-4">
              <p class="fw-semi-bold mb-1">Email</p>
            </div>
            <div class="col"><a href="mailto:tony@gmail.com">tony@gmail.com</a></div>
          </div>

        </div>

      </div>
    </div>
  </div>





@endsection
