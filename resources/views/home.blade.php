@extends('layouts.header')
@section('content')
<div class="container-fluid" id="sectionHeader">

  <div class="row">
    <div class="col">
      <div class="margin40top"></div>
      <h2 class="text-center">#GetVitanized</h2>
      <h1 class="text-center"><b>7 Day Raw <span style="color: #f9beb8">KETO</span> Smoothie Guide</b></h1>
    </div><!-- END COL -->
  </div><!-- END ROW -->

  <div class="row">
    <div class="col">
      <div class="margin20top"></div>
      <h3 class="text-center">Upgrade your lifestyle with Vitanja Food Design and become<br>the best version of yourself</h3>
    </div><!-- END COL -->
  </div><!-- END ROW -->

  <div class="container">
    <div class="row">
      <div class="col-md col-sm">
        <div class="margin60top"></div>
        <div class="box">
          <h5 class="text-center">Get This eBook For FREE</h5>
          <div class="margin20top"></div>
          <p class="text-center">Get full access to our FREE Keto Smoothie Guide by entering your best email</p>
          <div class="margin40top"></div>
          <form id="leadForm" action="/generateLead" method="post">
            {{ csrf_field() }}
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><span class="oi oi-person" title="person" aria-hidden="true"></span></div>
              </div>
              <input class="form-control form-control-lg" type="text" id="formName" name="formName" value="" placeholder="Enter your name" required>
            </div>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><span class="oi oi-envelope-closed" title="envelope-closed" aria-hidden="true"></span></div>
              </div>
              <input class="form-control form-control-lg" type="email" id="formMail" name="formMail" value="" placeholder="Enter your email address" required>
            </div>
            <div class="margin20top"></div>
            <button class="btn btn-secondary btn-lg btn-block" type="submit" name="formSubmit">Download eBook</button>
            <div class="margin20top"></div>
          </form>
        </div>
      </div><!-- END COL-MD-6 -->

      <div class="col-md col-sm">
        <div class="margin60top"></div>
        <div class="imgBox">
          <img style="width: 100%;" src="/images/vitanja_ebook.png" alt="Vitanja eBook">
          <p class="contentBox">Smoothies are kind of amazing. They are a quick and easy way to fill your tummy, get a bunch of nutrients at once, and, of course, they taste incredibly good.</p>
        </div>
      </div><!-- END COL-MD-6 -->
    </div><!-- END ROW -->
  </div><!-- END CONTAINER -->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md col-sm">
          <div class="margin100top"></div>
          <div class="imgBox">
            <a href="https://www.vitanja.com" target="_blank">
              <img style="width: 80px;" src="images/vitanja_icon.png" alt="Vitanja Logo">
            </a>
          </div>
        </div><!-- END COL -->
      </div><!-- END ROW -->
      <div class="row">
        <div class="col-md col-sm">
          <div class="margin40top"></div>
          <div class="imgBox">
            <p>&copy; Copyrights by Vitanja. All Rights Reserved.</p>
          </div>
        </div>
      </div>

    </div><!-- END CONTAINER -->
  </footer>

</div><!-- END CONTAINER-FLUID -->
@endsection
