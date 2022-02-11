@extends('base')
@section('content')

<div class="card h-md-100 ecommerce-card-min-width">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Activity</th>
          <th scope="col">Date</th>
          <th scope="col">User</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Saman semua orang</td>
          <td>Tak tahu</td>
          <td>Tak tahu</td>
          <td class="text-end">
            <div>
              <button class="btn p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></button>
              <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
            </div>
          </td>
        </tr>
        <tr>
          <td>Rompak orang</td>
          <td>tak tahu</td>
          <td>Tak tahu</td>
          <td class="text-end">
            <div>
              <button class="btn p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></button>
              <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
            </div>
          </td>
        </tr>


      </tbody>
    </table>
  </div>
  

@endsection
