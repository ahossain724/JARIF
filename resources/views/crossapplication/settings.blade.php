@extends('pages.home')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Settings</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Cross Application</a></li>
            <li class="breadcrumb-item active">Settings</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default w-100">
        <div class="card-header">
          <h3 class="card-title">Defaults</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize">
              <i class="fas fa-expand"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
          </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label>Multiple</label>
                  <select class="duallistbox w-100" multiple="multiple">
                    <option selected>Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          
        </div>
        <!-- /.card-header -->
         <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
      </div>
      <!-- /.card -->

      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Codes</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize">
              <i class="fas fa-expand"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col">
              <div>
                <label>Code Type</label>
                <select class="form-control select2bs4 w-100">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
             
            </div>

            <!-- /.col -->
            <div class="col">
              <div class="form-group">
                <label>Code</label>
                <input class="form-control w-100" data-placeholder="Enter a Code"
                        >
              </div>
           
            </div>
            <div class="col">
              <div>
                <label>Detailed Description</label>
                <input class="form-control w-100"/>
              </div>
            </div>
            <div class="col">
              <div>
                <label>Alternate Code</label>
                <input class="form-control w-100"/>
              </div>
            </div>
            <div class="col">
              <div class="row">
                <div class="col">
                  <label>Active</label>
                </div>
                <div class="col">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked />
                </div>
              </div>
            </div>
            <!-- /.col -->
            <div class="row">
              <div class="col-md-6">
                <div>
                  <label>Team</label>
                  <select multiple="multiple" class="w-100">
                    <option></option>
                    <option selected>Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div>
                  <label>Property List</label>
                  <textarea rows="3" class="form-control h-100 w-100"></textarea>
                </div>
              </div>
            </div>
          <!-- /.row -->
          </br>
          <div class="row">
            <div class="col-md-2">
              <button type="button" class="btn btn-block btn-primary">Save</button>
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-block btn-primary">Refresh</button>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
         
        </div>
      </div>

      
    </div>
    <!-- Transaction Codes-->
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">Transaction Codes</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="maximize">
            <i class="fas fa-expand"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <div>
              <label>Transaction Type</label>
              <select class="form-control select2bs4 w-100">
                <option selected="selected">Alabama</option>
                <option>Alaska</option>
                <option>California</option>
                <option>Delaware</option>
                <option>Tennessee</option>
                <option>Texas</option>
                <option>Washington</option>
              </select>
            </div>
           
          </div>

          <!-- /.col -->
          <div class="col">
            <div class="form-group">
              <label>Code</label>
              <input class="form-control w-100" data-placeholder="Enter a Code">
            </div>
         
          </div>
          <div class="col">
            <div>
              <label>Description</label>
              <input class="form-control w-100"/>
            </div>
          </div>
          <div class="col">
            <div>
              <label>Starting</label>
              <input class="form-control w-100"/>
            </div>
          </div>
          <div class="col">
            <div>
              <label>Increment</label>
              <input class="form-control w-100"/>
            </div>
          </div>
          <div class="col">
            <div>
              <label>Prefix</label>
              <input class="form-control w-100"/>
            </div>
          </div>
          <div class="col">
            <div>
              <label>Suffix</label>
              <input class="form-control w-100"/>
            </div>
          </div>
          <div class="col">
            <div class="row">
              <div class="col">
                <label>Active</label>
              </div>
              <div class="col">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked />
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="row">
            <div class="col-md-6">
              <div>
                <label>Team</label>
                <select multiple="multiple" class="w-100">
                  <option></option>
                  <option selected>Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div>
                <label>Format</label>
                <textarea rows="3" class="form-control h-100 w-100"></textarea>
              </div>
            </div>
          </div>
        <!-- /.row -->
        </br>
        <div class="row">
          <div class="col-md-2">
            <button type="button" class="btn btn-block btn-primary">Save</button>
          </div>
          <div class="col-md-2">
            <button type="button" class="btn btn-block btn-primary">Refresh</button>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
       
      </div>
    </div>
    </div>
    <!--Currencies-->
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">Currencies</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="maximize">
            <i class="fas fa-expand"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <div>
              <label>Currency</label>
              <select class="form-control select2bs4 w-100">
                <option selected="selected">Alabama</option>
                <option>Alaska</option>
                <option>California</option>
                <option>Delaware</option>
                <option>Tennessee</option>
                <option>Texas</option>
                <option>Washington</option>
              </select>
            </div>
           
          </div>

          <!-- /.col -->
          <div class="col">
            <div class="form-group">
              <label>Short Name</label>
              <input class="form-control w-100" data-placeholder="Enter a Code">
            </div>
         
          </div>
          <div class="col">
            <div>
              <label>Name</label>
              <input class="form-control w-100"/>
            </div>
          </div>
          <div class="col">
            <div>
              <label>Cent</label>
              <input class="form-control w-100"/>
            </div>
          </div>
          <div class="col">
            <div>
              <label>Cents</label>
              <input class="form-control w-100"/>
            </div>
          </div>
          <div class="col">
            <div>
              <label>Decimal Places</label>
              <input class="form-control w-100"/>
            </div>
          </div>
          <div class="col">
            <div class="row">
              <div class="col">
                <label>Active</label>
              </div>
              <div class="col">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked />
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="row">
            <div class="col">
              <div>
                <label>Exchange Rate</label>
                <input class="form-control w-100"/>
              </div>
            </div>
              <div class="col">
                <div>
                  <label>Exchange Rate(Sell)</label>
                  <input class="form-control w-100"/>
                </div>
              </div>
              <div class="col">
                <div>
                  <label>Exchange Rate(Buy)</label>
                  <input class="form-control w-100"/>
                </div>
              </div>
              <div class="col">
                <div>
                  <label>Word Formula</label>
                  <input class="form-control w-100"/>
                </div>
               </div>
               <div class="col">
                <div class="form-group">
                  <label>Effectivity Date</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
              </div>
               <div class="col">
                <div class="row">
                  <div class="col">
                    <label>Active</label>
                  </div>
                  <div class="col">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked />
                  </div>
                </div>
              </div>
              
            </div>
           </div>
          
        </br>
        <div class="row">
          <div class="col-md-2">
            <button type="button" class="btn btn-block btn-primary">Save</button>
          </div>
          <div class="col-md-2">
            <button type="button" class="btn btn-block btn-primary">Refresh</button>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
       
      </div>
    </div>
    
    <!-- /.container-fluid -->
  </section>
    
  </div>
  
  @endsection
 