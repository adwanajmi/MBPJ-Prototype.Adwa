@extends('base')
@section('content')

<div id="myDIV" class="card mb-3 mb-lg-0">
    <div class="card-header">
        <h5 class="mb-0">Pembayaran</h5>
      </div>

      <div class="card-body bg-light">
        <div class="position-relative rounded-1 border bg-white dark__bg-1100 p-3">
          <div class="position-absolute end-0 top-0 mt-2 me-3 z-index-1">
          </div>

    <form method="POST" action="/pembayaran">
        @csrf

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


        <div class="card-footer border-top text-end"><button type="submit">Hantar</button></div>
    </form>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

  </div>

@endsection
