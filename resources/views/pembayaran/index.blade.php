@extends('base')
<style>
    #outer
{
    width:100%;
    text-align: center;
}
.inner
{
    display: inline-block;
}
</style>
@section('content')

@if (auth()-> user()->role =="Admin" || auth()-> user()->role =="Penyelia" )
<div class="card h-md-100 ecommerce-card-min-width">
    <div class="card-header">
        <div class="row flex-between-end">
          <div class="col-auto flex-lg-grow-1 flex-lg-basis-0 align-self-center">
            <h5 class="mb-0" data-anchor="data-anchor">Pembayaran</h5>
          </div>
          <div class="col-auto ms-auto">
            <div class="col-auto"><a class="btn btn-falcon-default btn-sm" href="/pembayaran/create"><span class="fas fa-pencil-alt fs--2 me-1"></span>Create New</a></div>

          </div>
        </div>
      </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nama Pembayar</th>
          <th scope="col">Tarikh</th>
          <th scope="col">Kaedah Pembayaran</th>
          <th scope="col">Jumlah Pembayaran (RM)</th>
          <th scope="col">Actions</th>

          <td class="">
            <div>
                <div id="outer">
                    <div class="inner">
                    <a class="btn btn-info" href="{{ route('pembayaran.show',$pembayaran->id) }}">Show</a>
                    </div>
                    <div class="inner">
                    <a class="btn btn-primary" href="{{ route('pembayaran.edit',$pembayaran->id) }}">Edit</a>
                    </div>
                    <div class="inner">
                        <form action="{{ route('pembayaran.destroy',$pembayaran->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>

            </div>
          </td>
        </tr>

        @endforeach


      </tbody>
    </table>
  </div>

        </tr>
      </thead>
      <tbody>
          @foreach ($pembayaran as $pembayaran)
        <tr>
          <td>{{ $pembayaran->namaPembayar }}</td>
          <td>{{ $pembayaran->tarikhPembayaran }}</td>
          <td>{{ $pembayaran->kaedahPembayaran }}</td>
          <td>RM {{ $pembayaran->totalPembayaran }}</td>

          <td class="">
            <div>
                <div id="outer">
                    <div class="inner">
                    <a class="btn btn-info" href="{{ route('pembayaran.show',$pembayaran->id) }}">Show</a>
                    </div>
                    <div class="inner">
                    <a class="btn btn-primary" href="{{ route('pembayaran.edit',$pembayaran->id) }}">Edit</a>
                    </div>
                    <div class="inner">
                        <form action="{{ route('pembayaran.destroy',$pembayaran->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>

            </div>
          </td>
        </tr>

        @endforeach
      </tbody>
    </table>
  </div>

  @endif

@endsection
