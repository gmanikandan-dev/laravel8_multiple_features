<div class="container">
  <form action="{{ route('studentstore') }}" method="POST" autocomplete="off">
  @csrf
    <h2>Create State</h2>
    <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="first">Country</label>
              <input type="text" style="box-shadow:none !important;" class="form-control mt-1" name="name" placeholder="enter country...">
            </div>
          </div>
      <!--  col-md-6   -->

            <div class="col-md-6">
              <div class="form-group">
                    <select class="form-select input-group-sm" style="box-shadow:none !important;" name="country" id="state">
                          <option selected>Select Country</option>
                          @foreach($country as $key=>$value)
                          <option value="{{ $value['id'] }}">{{ $value['name'] }}</option>
                          @endforeach
                   </select>
              </div>
            </div>
      <!--  col-md-6   -->
    </div>


    <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <button type="reset" class="btn btn-primary">Submit</button>
            </div>
          </div>
      <!--  col-md-6   -->

            <div class="col-md-6">

              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                
              </div>
            </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->

    <!--  row   -->


  </form>
</div>