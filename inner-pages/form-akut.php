<form action="thanks.php" method="post" name="akut" id="akut" onSubmit="return validate_akut(this)">
          <div class="row">
            <div class="col-md-3 text-center">
              <div class="form-group">
                <input type="text" class="form-control" id="namn" name="namn" placeholder="Namn*">
              </div>
            </div>
            <div class="col-md-3 text-center">
              <div class="form-group">
                <input type="text" class="form-control" id="telefon" name="telefon" placeholder="Telefon*">
              </div>
            </div>
            <div class="col-md-3 text-center">
              <div class="form-group">
                <input type="text" class="form-control" id="personnummer" name="personnummer" placeholder="Personnummer*">
              </div>
            </div>
            <div class="col-md-3 text-center">
              <div class="form-group">
                <input type="text" class="form-control" id="epost" name="epost" placeholder="E-post*">
              </div>
            </div>
          </div>
          
          <div class="form-group text-center">
              <input type="checkbox" id="accept" name="accept" class="checkbox"> Jag accepterar  <a href="javascript:void();" data-toggle="modal" data-target="#data-policy">dataskyddspolitiken!</a>.
          </div>          

          <div class="text-center">
            <button type="submit" class="btn btn-default" name="btn-akut" id="btn-akut">Ring mig</button>
          </div>
  </form>