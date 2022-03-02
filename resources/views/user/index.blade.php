@extends('base')
@section('content')

<div class="card h-md-100 ecommerce-card-min-width">
    <div class="card-header">
        <div class="row flex-between-end">
          <div class="col-auto flex-lg-grow-1 flex-lg-basis-0 align-self-center">
            <h5 class="mb-0" data-anchor="data-anchor">Manage Users</h5>
          </div>
          <div class="col-auto ms-auto">

          </div>
        </div>
      </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">User</th>
          <th scope="col">Role</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($user as $user)
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->role }}</td>
          <td class="text-end">
            <div>
                <form action="{{ route('user.destroy',$user->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('user.show',$user->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Edit</a>

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
