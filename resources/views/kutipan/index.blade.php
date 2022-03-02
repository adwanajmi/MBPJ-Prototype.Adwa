@extends('base')
@section('content')

<div class="card h-md-100 ecommerce-card-min-width">
    <div class="card-header">
        <div class="row flex-between-end">
          <div class="col-auto flex-lg-grow-1 flex-lg-basis-0 align-self-center">
            <h5 class="mb-0" data-anchor="data-anchor">Kutipan</h5>
          </div>
          <div class="col-auto ms-auto">
            <div class="col-auto"><a class="btn btn-falcon-default btn-sm" href="/kutipan/create"><span class="fas fa-pencil-alt fs--2 me-1"></span>Create New</a></div>

          </div>
        </div>
      </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID Pembayaran</th>
          <th scope="col">Nama Pembayar</th>
          <th scope="col">Kaedah Bayaran</th>
          <th scope="col">Akaun No</th>
          <th scope="col">Actions</th>


        </tr>
      </thead>
      <tbody>
          @foreach ($kutipan as $kutipan)
        <tr>
          <td>{{ $kutipan->pembayaran_id }}</td>
          <td>{{ $kutipan->namaPembayar }}</td>
          <td>{{ $kutipan->kaedahBayaran }}</td>
          <td>{{ $kutipan->accountNo }}</td>

          <td class="text-end">
            <div>
                <form action="{{ route('kutipan.destroy',$kutipan->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('kutipan.show',$kutipan->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('kutipan.edit',$kutipan->id) }}">Edit</a>

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
