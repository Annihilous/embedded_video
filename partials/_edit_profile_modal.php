<!-- Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel">
  <div class="modal-dialog container-sm background-white" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="text-center">
          <h4 class="modal-title" id="editProfileModalLabel">Edit Profile</h4>
        </div>
      </div>
      <div class="modal-body">
        <div class="container modal-form-container">
          <form>
            <div class="row">
              <div class="col-sm-4 profile-thumb">
                <img src="http://face.famouswiki.com/p/pat-sajak-32341/pat-sajak-32341.jpg">
              </div>
              <div class="col-sm-8">
                <input class="form-control" type="text" name="fname" placeholder="First Name"><br>
                <input class="form-control" type="text" name="lname", placeholder="Last Name">
              </div>
            </div>
            <br>
            <input class="form-control" type="text" name="email" placeholder="Email Adress"><br>
            <input class="form-control" type="text" name="phone" placeholder="Phone Number"><br>
            <div class="row">
              <div class="col-sm-6">
                <input class="form-control" type="text" name="date-of-birth" placeholder="Date of Birth"><br>
              </div>
              <div class="col-sm-6">
                <input class="form-control" type="text" name="gender", placeholder="Gender">
              </div>
            </div>
            <input class="form-control" type="text" name="address" placeholder="Street Address"><br>
            <div class="row">
              <div class="col-sm-5">
                <input class="form-control" type="text" name="city" placeholder="City"><br>
              </div>
              <div class="col-sm-3">
                <input class="form-control" type="text" name="state" placeholder="State"><br>
              </div>
              <div class="col-sm-4">
                <input class="form-control" type="text" name="zip" placeholder="Zip"><br>
              </div>
            </div>
            <input id="givingAddressCheckbox" class="form-checkbox" type="checkbox" name="giving-address-checkbox"><span class="text-sm">&nbsp Send Giving information to a different address</span></br></br>
            <div id="givingAddressFields">
              <input class="form-control" type="text" name="giving-address" placeholder="Contribution Address"><br>
              <div class="row">
                <div class="col-sm-5">
                  <input class="form-control" type="text" name="giving-city" placeholder="City"><br>
                </div>
                <div class="col-sm-3">
                  <input class="form-control" type="text" name="giving-state" placeholder="State"><br>
                </div>
                <div class="col-sm-4">
                  <input class="form-control" type="text" name="giving-zip" placeholder="Zip"><br>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer modal-form-footer">
        <button type="button" class="btn btn-primary btn-block">Updte Profile</button>
      </div>
    </div>
  </div>
</div>