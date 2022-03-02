@extends('base')
@section('content')



<div class="card h-md-100 ecommerce-card-min-width">
    <div class="card-header">
        <div class="row flex-between-end">
          <div class="col-auto flex-lg-grow-1 flex-lg-basis-0 align-self-center">
            <h5 class="mb-0" data-anchor="data-anchor">Penyelenggaraan</h5>
          </div>

          @if (auth()-> user()->role =="Admin" || auth()-> user()->role =="Penyelia" )


          <div class="col-auto ms-auto">
            <div class="col-auto"><a class="btn btn-falcon-default btn-sm" href="/penyelenggaraan/create"><span class="fas fa-pencil-alt fs--2 me-1"></span>Create New</a></div>
          </div>

          @endif

        </div>
      </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Jumlah Bayaran</th>
          <th scope="col">Baki Bayaran</th>

          @if (auth()-> user()->role =="Admin" || auth()-> user()->role =="Penyelia" )
          <th scope="col">Actions</th>
          @endif


        </tr>
      </thead>



      <tbody>
          @foreach ($penyelenggaraan as $penyelenggaraan)
        <tr>
          <td>RM {{ $penyelenggaraan->jumlahBayaran }}</td>
          <td>RM {{ $penyelenggaraan->bakiBayaran }}</td>


          <td class="text-end">

            @if (auth()-> user()->role =="Admin" || auth()-> user()->role =="Penyelia" )

            <div>
                <form action="{{ route('penyelenggaraan.destroy',$penyelenggaraan->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('penyelenggaraan.show',$penyelenggaraan->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('penyelenggaraan.edit',$penyelenggaraan->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>

            @endif

          </td>
        </tr>

        @endforeach


      </tbody>
    </table>
  </div>


@endsection
