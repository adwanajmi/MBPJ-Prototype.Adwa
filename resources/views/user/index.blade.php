@extends('base')
@section('content')

<div class="card h-md-100 ecommerce-card-min-width">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">User</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          <tr>
           <td> @foreach ($user as $u )</td>

            <td>{{ $u->role }}</td>

            <td>@endforeach</td>
            <td class="text-end">
                <div>
                  <button class="btn p-0" type="button" href="/user/edit" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></button>
                  <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                </div>
              </td>
          </tr>

      </tbody>
        <tr>
           <td>@foreach ($user as $u )</td>

            <td>{{ $u->role }}</td>

            <td>@endforeach</td>

            <td class="text-end">
                <div>
                  <button class="btn p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></button>
                  <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                </div>
              </td>
        </tr>


    </table>
  </div>


@endsection
