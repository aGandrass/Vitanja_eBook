@extends('layouts.header')
@section('content')
<div class="container-fluid" id="sectionHeader">

  <div class="row">
    <div class="col">
      <div class="margin40top"></div>
      <h2 class="text-center">#GetVitanized</h2>
      <h1 class="text-center"><b>7 Day Raw <span style="color: #f9beb8">KETO</span> Breakfast Guide</b></h1>
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
          <h5 class="text-center">Get the FREE eBook</h5>
          <div class="margin20top"></div>
          <p class="text-center">Simply sign up and download your<br>7 Day Raw Keto Breakfast Guide</p>
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
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="formGDPR" value="1">
              <label class="form-check-label" for="form GDPR">I agree to the GDPR Terms & Conditions <button class="btn-infoModal" type="button" data-toggle="modal" data-target="#infoModal"><span style="margin-left: 10px" class="oi oi-info" title="info" aria-hidden="true"></span></button></label>
            </div>
            <div class="margin20top"></div>
            <button class="btn btn-secondary btn-lg btn-block disabled" type="submit" name="formSubmit" id="formSubmit" disabled>Download eBook</button>
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
            <a href="https://www.facebook.com/healthcoachintraining/" target="_blank"><img style="width: 30px;" src="images/facebook_icon.png" alt="Facebook Vitanja"></a>
            <a href="https://www.instagram.com/vitanja_lifestyle/" target="_blank"><img style="width: 30px;" src="images/instagram_icon.png" alt="Instagram Vitanja"></a>
            <a href="https://www.linkedin.com/company/vitanja/" target="_blank"><img style="width: 30px;" src="images/linkedin_icon.png" alt="LinkedIn Vitanja"></a>
            <div class="margin40top"></div>
            <p>&copy; Copyrights by Vitanja. All Rights Reserved.</p>
          </div>
        </div>
      </div>

    </div><!-- END CONTAINER -->
  </footer>

</div><!-- END CONTAINER-FLUID -->
<!-- INFO  MODAL -->
<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">GDPR Terms & Conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-justify">
          I confirm that I am at least 16 years of age or older.<br><br>
          I have read and accept any EULA, Terms and Conditions, Acceptable Use Policy, and/or Data Processing Addendum which has been provided to me in connection with the software, products and/or services.<br><br>
          I have been fully informed and consent to the collection and use of my personal data for any purpose in connection with the software, products and/or services.<br><br>
          I understand that certain data, including personal data, must be collected or processed in order for you to provide any products or services I have requested or contracted for.  I understand that in some cases it may be required to use cookies or similar tracking to provide those products or services.<br><br>
          I understand that I have the right to request access annually to any personal data you have obtained or collected regarding me. You have agreed to provide me with a record of my personal data in a readable format.<br><br>
          I also understand that I can revoke my consent and that I have the right to be forgotten. If I revoke my consent you will stop collecting or processing my personal data. I understand that if I revoke my consent, you may be unable to provide contracted products or services to me, and I can not hold you responsible for that.<br><br>
          Likewise, if I properly request to be forgotten, you will delete the data you have for me, or make it inaccessible. I also understand that if there is a dispute regarding my personal data, I can contact someone who is responsible for handling data-related concerns. If we are unable to resolve any issue, you will provide an independent service to arbitrate a resolution. If I have any questions regarding my rights or privacy, I can contact the email address provided.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- END INFO MODAL -->
<script type="text/javascript">
  $(function() {
    $('input[name=formGDPR]').change(function() {
      if($(this).is(':checked')) {
        $('#formSubmit').removeClass('disabled');
        $('#formSubmit').prop('disabled', false);
      } else {
        $('#formSubmit').addClass('disabled');
        $('#formSubmit').prop('disabled', true);
      }
    })
  });
</script>
@endsection
