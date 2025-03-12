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
      <div class="card card-default">
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
                  <select class="duallistbox" multiple="multiple">
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
                <select class="form-control select2bs4" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
              <!-- /.form-group -->
              {{-- <div class="form-group">
                <label>Disabled</label>
                <select class="form-control select2bs4" disabled="disabled" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div> --}}
              <!-- /.form-group -->
            </div>

            <!-- /.col -->
            <div class="col">
              <div class="form-group">
                <label>Code</label>
                <input class="form-control" data-placeholder="Enter a Code"
                        style="width: 100%;">
              </div>
           
            </div>
            <div class="col">
              <div>
                <label>Detailed Description</label>
                <input class="form-control" style="width: 100%;" />
              </div>
            </div>
            <div class="col">
              <div>
                <label>Alternate Code</label>
                <input class="form-control" style="width: 100%;" />
              </div>
            </div>
            <div class="col">
              <div>
                <label>Active</label>
                <input type="checkbox" class="form-control" style="width: 100%;" />
              </div>
            </div>
            <!-- /.col -->
          
          <!-- /.row -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
         
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
    
  </div>
  
  @endsection
 