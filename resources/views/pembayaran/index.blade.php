@extends('base')
@section('content')

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

  <div id="myDIV" class="card mb-3 mb-lg-0">
    <div class="card-header">
      <h5 class="mb-0">Pembayaran</h5>
    </div>
    <div class="card-body bg-light">
      <div class="position-relative rounded-1 border bg-white dark__bg-1100 p-3">
        <div class="position-absolute end-0 top-0 mt-2 me-3 z-index-1">
        </div>
        <div class="row gx-2">
          <div class="col-sm-6 mb-3">
            <label class="form-label" for="field-name">Nama Pembayar</label>
            <input class="form-control form-control-sm" id="field-name" type="text" placeholder="Nama (e.g. Kasim Selamat)">
          </div>
          <div class="col-sm-6 mb-3">
            <label class="form-label" for="datepicker">Tarikh</label>
            <input class="form-control datetimepicker" id="datepicker" type="text" placeholder="d/m/y" data-options='{"disableMobile":true}' />
          </div>
          <div class="col-sm-6 mb-3">
            <label class="form-label" for="field-type">Kaedah Pembayaran</label>
            <select class="form-select form-select-sm" id="field-type">
              <option>Pilih Bayaran</option>
              <option>Tunai</option>
              <option>Cek</option>
              <option>Kad Kredit</option>
            </select>
          </div>
          <div class="col-sm-6 mb-3">
            <label class="form-label" for="field-name">Jumlah</label>
            <input class="form-control form-control-sm" id="field-name" type="float">
          </div>
        </div>
      </div>
      <div class="card-footer border-top text-end"><a class="btn btn-falcon-default btn-sm ms-2" href="/pembayaran/create"><svg class="svg-inline--fa fa-check fa-w-16 fs--2 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg><!-- <span class="fas fa-check fs--2 me-1"></span> Font Awesome fontawesome.com -->Teruskan</a></div>
    </div>
  </div>



@endsection
