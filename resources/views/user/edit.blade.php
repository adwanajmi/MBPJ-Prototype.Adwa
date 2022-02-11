@extends('base')
@section('content')

<div class="card mb-3">
    <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto flex-lg-grow-1 flex-lg-basis-0 align-self-center">
          <h5 class="mb-0" data-anchor="data-anchor" id="basic-form">Edit Information </div>

      </div>
    </div>
    <div class="card-body bg-light">
      <div class="tab-content">
        <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-bb654daf-be1a-40fe-b687-3e45244388c2" id="dom-bb654daf-be1a-40fe-b687-3e45244388c2">
          <form>
            <div class="mb-3">
              <label class="form-label" for="basic-form-name">Name</label>
              <input class="form-control" id="basic-form-name" type="text" placeholder="Name">
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-form-email">Email address</label>
              <input class="form-control" id="basic-form-email" type="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-form-password">Password</label>
              <input class="form-control" id="basic-form-password" type="password" placeholder="Password">
            </div>

            <div class="mb-3">
                <label class="form-label" for="basic-form-password" :value="__('Confirm Password')"> Confirm Password</label>
                <input class="form-control" id="basic-form-password" type="password" name="password_confirmation" placeholder="Confirm">
            </div>

            <div class="mb-3">
              <label class="form-label" for="basic-form-gender">Select Role</label>
              <select class="form-select" id="basic-form-gender" aria-label="Default select example">
                <option selected="selected" ></option>
                <option value="male">Pelanggan</option>
                <option value="female">Penyelia</option>
                <option value="other">Admin</option>
              </select>
            </div>

            <button class="btn btn-primary" type="submit">Save</button>
          </form>
        </div>
        @endsection
