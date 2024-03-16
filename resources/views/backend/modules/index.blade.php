@extends('backend.master')

@section('title','Pages')

@push('css')
   
@endpush
 
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modules</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Module</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Module</h3>
                <a href="{{ route('admin.modules.create') }}"><h3 class="card-title float-right">Create Module</h3></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">Sl</th>
                            
                            <th class="text-center">Name</th>
                            <th class="text-center">Created At</th>
                            
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($modules as $key=>$module)
                            <tr>
                                <td class="text-center text-muted">{{ $key + 1 }}</td>
                                <td style="width: 30%">{{ $module->name }}</td>
                              
                              
                                <td class="text-center">{{ $module->created_at->diffForHumans() }}</td>
                                <td class="text-center">
                                    <a class="btn btn-info btn-sm" href="{{ route('admin.modules.edit',$module->id) }}"><i
                                            class="fas fa-edit"></i>
                                        <span>Edit</span>
                                    </a>

                                    <form action="{{ route('admin.modules.destroy',$module->id) }}"
                                      method="POST" style="display: inline;">
                                      @csrf()
                                      @method('DELETE')
                                      <button type="submit" onclick="return confirm('Are your sure?')" class="btn btn-danger btn-sm">
                                          <i class="fas fa-trash-alt"></i>
                                          <span>Delete</span>
                                      </button>
                                  </form>


                                </td>
                            </tr>
                        @endforeach
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


     
@endsection

@push('js')
<script>

</script>

@endpush
