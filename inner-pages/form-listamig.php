<form action="thanks.php" method="post" name="listamig" id="listamig" onSubmit="return validate_listamig(this)">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="row">
                <div class="col-md-4 text-center">
                  <div class="form-group">
                    <input type="text" class="form-control" id="namn" name="namn" placeholder="Namn*">
                  </div>
                </div>
                <div class="col-md-4 text-center">
                  <div class="form-group">
                    <input type="text" class="form-control" id="telefon" name="telefon" placeholder="Telefon*">
                  </div>
                </div>
                <div class="col-md-4 text-center">
                  <div class="form-group">
                    <input type="text" class="form-control" id="personnummer" name="personnummer" placeholder="Personnummer*">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-center">
                  <div class="form-group">
                    <input type="text" class="form-control" id="adress" name="adress" placeholder="Adress*">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 text-center">
                  <div class="form-group">
                    <input type="text" class="form-control" id="postnummer" name="postnummer" placeholder="Postnummer*">
                  </div>
                </div>
                <div class="col-md-4 text-center">
                  <div class="form-group">
                    <input type="text" class="form-control" id="ort" name="ort" placeholder="Ort*">
                  </div>
                </div>
                <div class="col-md-4 text-center">
                  <div class="form-group">
                    <input type="text" class="form-control" id="epost" name="epost" placeholder="E-post*">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-center">
                  <div class="form-group">
                    <textarea class="form-control" id="onskemal" name="onskemal" rows="5" placeholder="Speciella önskemål / Övrigt*"></textarea>
                  </div>
                </div>
              </div>
              <div class="form-group text-center">
              <input type="checkbox" id="accept" name="accept" class="checkbox"> Jag accepterar  <a href="javascript:void();" data-toggle="modal" data-target="#data-policy">dataskyddspolitiken!</a>.
          </div>
              <div class="text-center">
                <button type="submit" class="btn btn-default" name="btn-listamig" id="btn-lisatmig">Lista mig</button>
              </div>
            </div>
          </div>
          
        </form>


