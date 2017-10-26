@extends('layouts.master')

@section('title')
    Autenticação
@stop

@section('content')
    <div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <span class="anchor" id="formLogin"></span>

                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Login</h3>
                        </div>
                        <div class="card-body">
                        <form>
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label for="validationServer01">First name</label>
                              <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
                            </div>
                            <div class="col-md-6 mb-3">
                              <label for="validationServer02">Last name</label>
                              <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label for="validationServer03">City</label>
                              <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
                              <div class="invalid-feedback">
                                Please provide a valid city.
                              </div>
                            </div>
                            <div class="col-md-3 mb-3">
                              <label for="validationServer04">State</label>
                              <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
                              <div class="invalid-feedback">
                                Please provide a valid state.
                              </div>
                            </div>
                            <div class="col-md-3 mb-3">
                              <label for="validationServer05">Zip</label>
                              <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
                              <div class="invalid-feedback">
                                Please provide a valid zip.
                              </div>
                            </div>
                          </div>

                          <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>
                    </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->
@endsection
