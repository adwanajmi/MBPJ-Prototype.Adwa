@extends('base')
@section('content')

<div class="card h-md-100 ecommerce-card-min-width">
    <div class="card-header">
        <div class="row flex-between-end">
          <div class="col-auto flex-lg-grow-1 flex-lg-basis-0 align-self-center">
            <h5 class="mb-0" data-anchor="data-anchor">Laporan</h5>
          </div>
          <div class="col-auto ms-auto">
            <div class="col-auto"><a class="btn btn-falcon-default btn-sm" href="/laporan/create"><span class="fas fa-pencil-alt fs--2 me-1"></span>Create New</a></div>

          </div>
        </div>
      </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Tajuk</th>
          <th scope="col">Detail Laporan</th>
          <th scope="col">Jenis Laporan</th>
          <th scope="col">Tarikh</th>
          <th scope="col">Actions</th>


        </tr>
      </thead>
      <tbody>
          @foreach ($laporan as $laporan)
        <tr>
          <td>{{ $laporan->tajukLaporan }}</td>
          <td>{{ $laporan->detailLaporan }}</td>
          <td>{{ $laporan->jenisLaporan }}</td>
          <td>{{ $laporan->tarikh }}</td>

          <td class="text-end">
            <div>
                <form action="{{ route('laporan.destroy',$laporan->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('laporan.show',$laporan->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('laporan.edit',$laporan->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
          </td>
        </tr>

        @endforeach


      </tbody>
    </table>
  </div>


@endsection
