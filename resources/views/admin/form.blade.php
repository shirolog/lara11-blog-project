<!DOCTYPE html>
<html>
  <head> 
    @include('admin.layout')
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
        @include('admin.sidebar')

      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Basic forms</h2>
          </div>
        </div>

        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Basic forms            </li>
          </ul>
        </div>
        
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <!-- Basic Form-->
              <div class="col-lg-6">
                <div class="block">
                  <div class="title"><strong class="d-block">Basic Form</strong><span class="d-block">Lorem ipsum dolor sit amet consectetur.</span></div>
                  <div class="block-body">
                    <form>
                      <div class="form-group">
                        <label class="form-control-label">Email</label>
                        <input type="email" placeholder="Email Address" class="form-control">
                      </div>
                      <div class="form-group">       
                        <label class="form-control-label">Password</label>
                        <input type="password" placeholder="Password" class="form-control">
                      </div>
                      <div class="form-group">       
                        <input type="submit" value="Signin" class="btn btn-primary">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Horizontal Form-->
              <div class="col-lg-6">
                <div class="block">
                  <div class="title"><strong class="d-block">Horizontal Form</strong><span class="d-block">Lorem ipsum dolor sit amet consectetur.</span></div>
                  <div class="block-body">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Email</label>
                        <div class="col-sm-9">
                          <input id="inputHorizontalSuccess" type="email" placeholder="Email Address" class="form-control form-control-success"><small class="form-text">Example help text that remains unchanged.</small>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Password</label>
                        <div class="col-sm-9">
                          <input id="inputHorizontalWarning" type="password" placeholder="Pasword" class="form-control form-control-warning"><small class="form-text">Example help text that remains unchanged.</small>
                        </div>
                      </div>
                      <div class="form-group row">       
                        <div class="col-sm-9 offset-sm-3">
                          <input type="submit" value="Signin" class="btn btn-primary">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Inline Form-->
              <div class="col-lg-8">                           
                <div class="block">
                  <div class="title"><strong>Inline Form</strong></div>
                  <div class="block-body">
                    <form class="form-inline">
                      <div class="form-group">
                        <label for="inlineFormInput" class="sr-only">Name</label>
                        <input id="inlineFormInput" type="text" placeholder="Jane Doe" class="mr-sm-3 form-control">
                      </div>
                      <div class="form-group">
                        <label for="inlineFormInputGroup" class="sr-only">Username</label>
                        <input id="inlineFormInputGroup" type="text" placeholder="Username" class="mr-sm-3 form-control form-control">
                      </div>
                      <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-primary">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Modal Form-->
              <div class="col-lg-4">
                <div class="block">
                  <div class="title"><strong>Modal Form</strong></div>
                  <div class="block-body text-center">
                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Form in simple modal </button>
                    <!-- Modal-->
                    <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Signin Modal</strong>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                            <form>
                              <div class="form-group">
                                <label>Email</label>
                                <input type="email" placeholder="Email Address" class="form-control">
                              </div>
                              <div class="form-group">       
                                <label>Password</label>
                                <input type="password" placeholder="Password" class="form-control">
                              </div>
                              <div class="form-group">       
                                <input type="submit" value="Signin" class="btn btn-primary">
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Form Elements -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>All form elements</strong></div>
                  <div class="block-body">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Normal</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Help text</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control"><small class="help-block-none">A block of help text that breaks onto a new line and may extend beyond one line.</small>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Password</label>
                        <div class="col-sm-9">
                          <input type="password" name="password" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Placeholder</label>
                        <div class="col-sm-9">
                          <input type="text" placeholder="placeholder" class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Disabled</label>
                        <div class="col-sm-9">
                          <input type="text" disabled="" placeholder="Disabled input here..." class="form-control">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Checkboxes and radios <br><small class="text-primary">Normal Bootstrap elements</small></label>
                        <div class="col-sm-9">
                          <div>
                            <input id="option" type="checkbox" value="">
                            <label for="option">Option one is this and that—be sure to include why it's great</label>
                          </div>
                          <div>
                            <input id="optionsRadios1" type="radio" checked="" value="option1" name="optionsRadios">
                            <label for="optionsRadios1">Option one is this and that be sure to include why it's great</label>
                          </div>
                          <div>
                            <input id="optionsRadios2" type="radio" value="option2" name="optionsRadios">
                            <label for="optionsRadios2">Option two can be something else and selecting it will deselect option one</label>
                          </div>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Inline checkboxes</label>
                        <div class="col-sm-9">
                          <label class="checkbox-inline">
                            <input id="inlineCheckbox1" type="checkbox" value="option1"> a
                          </label>
                          <label class="checkbox-inline">
                            <input id="inlineCheckbox2" type="checkbox" value="option2"> b
                          </label>
                          <label class="checkbox-inline">
                            <input id="inlineCheckbox3" type="checkbox" value="option3"> c
                          </label>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Checkboxes &amp; radios <br><small class="text-primary">Custom elements</small></label>
                        <div class="col-sm-9">
                          <div class="i-checks">
                            <input id="checkboxCustom1" type="checkbox" value="" class="checkbox-template">
                            <label for="checkboxCustom1">Option one</label>
                          </div>
                          <div class="i-checks">
                            <input id="checkboxCustom2" type="checkbox" value="" checked="" class="checkbox-template">
                            <label for="checkboxCustom2">Option two checked</label>
                          </div>
                          <div class="i-checks">
                            <input id="checkboxCustom" type="checkbox" value="" disabled="" checked="" class="checkbox-template">
                            <label for="checkboxCustom">Option three checked and disabled</label>
                          </div>
                          <div class="i-checks">
                            <input id="checkboxCustom3" type="checkbox" value="" disabled="" class="checkbox-template">
                            <label for="checkboxCustom3">Option four disabled</label>
                          </div>
                          <div class="i-checks">
                            <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                            <label for="radioCustom1">Option one</label>
                          </div>
                          <div class="i-checks">
                            <input id="radioCustom2" type="radio" checked="" value="option2" name="a" class="radio-template">
                            <label for="radioCustom2">Option two checked</label>
                          </div>
                          <div class="i-checks">
                            <input id="radioCustom3" type="radio" disabled="" checked="" value="option2" class="radio-template">
                            <label for="radioCustom3">Option three checked and disabled</label>
                          </div>
                          <div class="i-checks">
                            <input id="radioCustom4" type="radio" disabled="" name="a" class="radio-template">
                            <label for="radioCustom4">Option four disabled</label>
                          </div>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Select</label>
                        <div class="col-sm-9">
                          <select name="account" class="form-control mb-3 mb-3">
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                          </select>
                        </div>
                        <div class="col-sm-9 ml-auto">
                          <select multiple="" class="form-control">
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                          </select>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row has-success">
                        <label class="col-sm-3 form-control-label">Input with success</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control is-valid">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row has-danger">
                        <label class="col-sm-3 form-control-label">Input with error</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control is-invalid">
                          <div class="invalid-feedback">Please provide your name.</div>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Control sizing</label>
                        <div class="col-sm-9">
                          <div class="form-group">
                            <input type="text" placeholder=".input-lg" class="form-control form-control-lg">
                          </div>
                          <div class="form-group">
                            <input type="text" placeholder="Default input" class="form-control">
                          </div>
                          <div class="form-group">
                            <input type="text" placeholder=".input-sm" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Column sizing</label>
                        <div class="col-sm-9">
                          <div class="row">
                            <div class="col-md-3">
                              <input type="text" placeholder=".col-md-3" class="form-control">
                            </div>
                            <div class="col-md-4">
                              <input type="text" placeholder=".col-md-4" class="form-control">
                            </div>
                            <div class="col-md-5">
                              <input type="text" placeholder=".col-md-5" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="line"> </div>
                      <div class="row">
                        <label class="col-sm-3 form-control-label">Material Inputs</label>
                        <div class="col-sm-9">
                          <div class="form-group-material">
                            <input id="register-username" type="text" name="registerUsername" required class="input-material">
                            <label for="register-username" class="label-material">Username</label>
                          </div>
                          <div class="form-group-material">
                            <input id="register-email" type="email" name="registerEmail" required class="input-material">
                            <label for="register-email" class="label-material">Email Address      </label>
                          </div>
                          <div class="form-group-material">
                            <input id="register-password" type="password" name="registerPassword" required class="input-material">
                            <label for="register-password" class="label-material">Password        </label>
                          </div>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Input groups</label>
                        <div class="col-sm-9">
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                              <input type="text" placeholder="Username" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <input type="text" class="form-control">
                              <div class="input-group-append"><span class="input-group-text">.00</span></div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                              <input type="text" class="form-control">
                              <div class="input-group-append"><span class="input-group-text">.00</span></div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <input type="checkbox">
                                </div>
                              </div>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <input type="checkbox" class="checkbox-template">
                                </div>
                              </div>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <input type="radio">
                                </div>
                              </div>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <input type="radio" class="radio-template">
                                </div>
                              </div>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Button addons</label>
                        <div class="col-sm-9">
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <button type="button" class="btn btn-primary">Go!</button>
                              </div>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <input type="text" class="form-control">
                              <div class="input-group-append">
                                <button type="button" class="btn btn-primary">Go!</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">With dropdowns</label>
                        <div class="col-sm-9">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <button data-toggle="dropdown" type="button" class="btn btn-outline-secondary dropdown-toggle">Action <span class="caret"></span></button>
                              <div class="dropdown-menu"><a href="#" class="dropdown-item">Action</a><a href="#" class="dropdown-item">Another action</a><a href="#" class="dropdown-item">Something else here</a>
                                <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Separated link</a>
                              </div>
                            </div>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-secondary">Cancel</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        @include('admin.footer')
      </div>
    </div>
    @include('admin.script')
  </body>
</html>