<!-- Modal -->
<div class="modal fade" id="updateGiftModal" tabindex="-1" role="dialog" aria-labelledby="updateGiftModalLabel">
  <div class="modal-dialog container-md background-white" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="text-center">
          <h4 class="modal-title" id="updateGiftModalLabel">Update Gift</h4>
        </div>
      </div>
      <div class="modal-body">
        <div class="container modal-form-container">
          <form>
            <div class="row">
              <div class="col-xs-12">
                <input class="form-control" type="text" name="gift-amount" placeholder="Amount"><br>
              </div>
              <div class="col-sm-6">
                <input class="form-control" type="text" name="frequency" placeholder="Frequency"><br>
              </div>
              <div class="col-sm-6">
                <input class="form-control" type="text" name="bill-on", placeholder="Bill On">
              </div>
            </div>
            <div class="row">
              <p class="form-indent">Payment Info</p>
              <div class="col-sm-6">
                <input class="form-control" type="text" name="cc-number" placeholder="CC"><br>
              </div>
              <div class="col-sm-3">
                <input class="form-control" type="text" name="cc-exp", placeholder="Exp.">
              </div>
              <div class="col-sm-3">
                <input class="form-control" type="text" name="cc-cvc", placeholder="CVC">
              </div>
            </div>
            <div class="row">
              <p class="form-indent">Contribution Address</p>
              <div class="col-xs-12">
                <input class="form-control" type="text" name="address-street" placeholder="Street Address"><br>
              </div>
              <div class="col-sm-6">
                <input class="form-control" type="text" name="address-city" placeholder="City"><br>
              </div>
              <div class="col-sm-3">
                <input class="form-control" type="text" name="address-state", placeholder="State">
              </div>
              <div class="col-sm-3">
                <input class="form-control" type="text" name="address-zip", placeholder="Zip">
              </div>
            </div>
            <button type="button" class="btn btn-primary btn-block">Update Gift</button>
          </form>
        </div>
      </div>
      <div class="pad text-center">
        <a href="" class=" cancel-gift-link text-danger">Cancel this Recurring Gift</a>
      </div>
    </div>
  </div>
</div>
