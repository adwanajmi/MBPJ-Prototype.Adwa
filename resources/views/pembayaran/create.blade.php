@extends('base')
@section('content')

<div class="card">
    <div class="card-header bg-light">
      <h5 class="mb-0">  Method</h5>
    </div>
    <div class="card-body">
      <form>
        <div class="form-check mb-0">
          <input class="form-check-input" type="radio" value="" id="credit-card" checked="checked" name="payment-method">
          <label class="form-check-label mb-2 fs-1" for="credit-card">Credit Card
          </label>
        </div>
        <div class="row gx-0 ps-2 mb-4">
          <div class="col-sm-8 px-3">
            <div class="mb-3">
              <label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0" for="inputNumber">Card Number</label>
              <input class="form-control" id="inputNumber" type="text" placeholder="•••• •••• •••• ••••">
            </div>
            <div class="row align-items-center">
              <div class="col-6">
                <label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0">Exp Date</label>
                <input class="form-control" type="text" placeholder="mm/yyyy">
              </div>
              <div class="col-6">
                <label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0">CVV<a class="d-inline-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Card verification value" aria-label="Card verification value"><svg class="svg-inline--fa fa-question-circle fa-w-16 ms-2" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path></svg><!-- <span class="fa fa-question-circle ms-2"></span> Font Awesome fontawesome.com --></a></label>
                <input class="form-control" type="text" placeholder="123" maxlength="3" pattern="[0-9]{3}">
              </div>
            </div>
          </div>
          <div class="col-4 ps-3 text-center pt-2 d-none d-sm-block">
            <div class="rounded-1 p-2 mt-3 bg-100">
              <div class="text-uppercase fs--2 fw-bold">We Accept</div><img src="/assets/img/icons/icon-payment-methods-grid.png" alt="" width="120">
            </div>
          </div>
        </div>
        <div class="form-check d-flex align-items-center">
          <input class="form-check-input" type="radio" value="" id="paypal" name="payment-method">
          <label class="form-check-label mb-0 ms-2" for="paypal"><img src="/assets/img/icons/icon-paypal-full.png" height="20" alt="">
          </label>
        </div>
        <div class="border-dashed-bottom my-5"></div>
        <div class="row">
          <div class="col-md-7 col-xl-12 col-xxl-7 px-md-3 mb-xxl-0 position-relative">

            <div class="vertical-line d-none d-md-block d-xl-none d-xxl-block"> </div>
          </div>
          <div class="col-md-5 col-xl-12 col-xxl-5 ps-lg-4 ps-xl-2 ps-xxl-5 text-center text-md-start text-xl-center text-xxl-start">
            <div class="fs-2 fw-semi-bold">All Total: <span class="text-primary">$3320</span></div>
            <button class="btn btn-success mt-3 px-5" type="submit">Confirm &amp; Pay</button>
            <p class="fs--1 mt-3 mb-0">By clicking <strong>Confirm &amp; Pay </strong>button you agree to the <a href="#!">Terms &amp; Conditions</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
  
@endsection
