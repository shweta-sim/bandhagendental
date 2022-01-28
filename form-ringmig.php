<form action="thanks.php" method="post" name="ringmig" id="ringmig" onSubmit="return validate_ringmig(this)">
          <div class="row">
            <div class="col-md-6 text-center">
              <div class="form-group">
                <input type="text" class="form-control" id="dittnam" name="dittnam" placeholder="Ditt nam*">
              </div>
            </div>
            <div class="col-md-6 text-center">
              <div class="form-group">
                <input type="text" class="form-control" id="tel" name="tel" placeholder="Tel*">
              </div>
            </div>
            <div class="col-md-12 text-center">
              <div class="form-group">
                <input type="text" class="form-control" id="epost" name="epost" placeholder="E-post*">
              </div>
            </div>
            <div class="form-group text-center">
              <input type="checkbox" id="accept" name="accept" class="checkbox"> Jag accepterar  <a href="javascript:void();" data-toggle="modal" data-target="#data-policy">dataskyddspolitiken!</a>.
          </div>
            <div class="col-md-12 text-center">
              <div class="form-group">
                  <div class="inner-links-modal">
                    <button type="submit" class="links-modal" name="btn-ringmig" id="btn-ringmig">Ring mig</button>
                  </div>
              </div>
            </div>
          </div>
         
        </form>