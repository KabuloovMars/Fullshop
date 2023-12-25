<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  @include('admin.css')
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
        @include('admin.nav')
      <div class="main-sidebar sidebar-style-2">
       @include('admin.sidebar')
      </div>
      <!-- Main Content -->
<div class="main-content">
    @if (Session::has('massage'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{ session()->get('massage') }}</strong>
      </div>
    @endif
      <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4>Category Add</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('storeCategory') }}" method="post">
                @csrf
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control">
            </div>

        </div>
            <div class="card-footer text-right">
                <button class="btn btn-primary mr-1" type="submit">Submit</button>
            </div>
        </form>
        </div>

      </div>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Simple Table</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-md">
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  @php
                      $i = 1;
                  @endphp
                  @foreach ($categories as $category)

                  <tr>
                      <td>{{$i}}</td>
                      <td>{{$category->name}}</td>
                      <td>{{$category->created_at}}</td>
                      <td>
                          <div class="badge badge-success">Active</div>
                        </td>
                        <td><a href="{{ route('editCategory', $category->id) }}" class="btn btn-primary">Edit</a></td>
                        <td><a href="{{ route('deleteCategory', $category->id) }}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach

                </table>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

</div>
</div>
</section>
@include('admin.footer')
</div>
  <!-- General JS Scripts -->

  @include('admin.js')
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
