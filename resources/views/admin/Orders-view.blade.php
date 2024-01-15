<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    <style>
        .btn {
  border: none;
  font-family: 'Lato';
  font-size: inherit;
  color: inherit;
  background: none;
  cursor: pointer;
  padding: 25px 80px;
  display: inline-block;
  margin: 15px 30px;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-weight: 700;
  outline: none;
  position: relative;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
}

.btn:after {
  content: '';
  position: absolute;
  z-index: -1;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
}

/* Pseudo elements for icons */
.btn:before {
  font-family: 'FontAwesome';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  position: relative;
  -webkit-font-smoothing: antialiased;
}


/* Icon separator */
.btn-sep {
  padding: 25px 60px 25px 120px;
}

.btn-sep:before {
  background: rgba(0,0,0,0.15);
}

/* Button 1 */
.btn-1 {
  background: #3498db;
  color: #fff;
}

.btn-1:hover {
  background: #2980b9;
}

.btn-1:active {
  background: #2980b9;
  top: 2px;
}

.btn-1:before {
  position: absolute;
  height: 100%;
  left: 0;
  top: 0;
  line-height: 3;
  font-size: 140%;
  width: 60px;
}

/* Button 2 */
.btn-2 {
  background: #2ecc71;
  color: #fff;
}

.btn-2:hover {
  background: #27ae60;
}

.btn-2:active {
  background: #27ae60;
  top: 2px;
}

.btn-2:before {
  position: absolute;
  height: 100%;
  left: 0;
  top: 0;
  line-height: 3;
  font-size: 140%;
  width: 60px;
}

/* Button 3 */
.btn-3 {
  background: #e74c3c;
  color: #fff;
}

.btn-3:hover {
  background: #c0392b;
}

.btn-3:active {
  background: #c0392b;
  top: 2px;
}

.btn-3:before {
  position: absolute;
  height: 100%;
  left: 0;
  top: 0;
  line-height: 3;
  font-size: 140%;
  width: 60px;
}

/* Button 3 */
.btn-4 {
  background: #34495e;
  color: #fff;
}

.btn-4:hover {
  background: #2c3e50;
}

.btn-4:active {
  background: #2c3e50;
  top: 2px;
}

.btn-4:before {
  position: absolute;
  height: 100%;
  left: 0;
  top: 0;
  line-height: 3;
  font-size: 140%;
  width: 60px;
}

/* Icons */

.icon-cart:before {
  content: "\f07a";
}

.icon-heart:before {
  content: "\f55a";
}

.icon-info:before {
  content: "\f05a";
}

.icon-send:before {
  content: "\f1d8";
}
    </style>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            {{-- navbar --}}
            @include('admin.nav')
            {{-- sidebar --}}
            @include('admin.sidebar')
            <!-- Main Content -->

            <div class="main-content">
                @if (Session::has('message'))
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>{{ session()->get('message') }}</strong>
                </div>
            @endif
                <section class="section">
                    <div class="section-body">
                        <div class="row">

                            <div class="col-9">
                                <div class="card">
                                  <div class="card-header">
                                    <h4>Orders table</h4>
                                    <div class="card-header-form">
                                      <form action="{{ route('searchOrders') }}" method="GET">
                                        <div class="input-group">
                                          <input type="text" name="search" class="form-control" placeholder="Search">
                                          <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                  <div class="card-body p-0">
                                    <div class="table-responsive">
                                      <table class="table table-striped">
                                        <tr>
                                          <th>User_id</th>
                                          <th>Product_id</th>
                                          <th>User name</th>
                                          <th>User email</th>
                                          <th>User phone</th>
                                          <th>Product name</th>
                                          <th>Product price</th>
                                          <th>Product quantity</th>
                                          <th>Status</th>
                                          <th>img</th>
                                          <th></th>
                                        </tr>

                                        @foreach ($orders as $order )

                                        <tr>

                                        <td>{{ $order->user_id }}</td>
                                        <td>{{ $order->product_id }}</td>

                                          <td>{{ $order->user_name }}</td>
                                          <td>{{ $order->user_email }}</td>
                                          <td>{{ $order->user_phone }}</td>
                                          <td>{{ $order->product_name }}</td>
                                          <td>{{ $order->product_price }}</td>
                                          <td>{{ $order->product_quantity }}</td>
                                          <td>
                                            <div class="badge badge-success">Prossesing</div>
                                          </td>
                                          <td>
                                            <img alt="image" src="storage/product-img/{{ $order->img }}" class="" width="80"
                                              data-toggle="tooltip" title="Wildan Ahdian">
                                          </td>
                                          <td>

                                            <a href=""><button class="btn btn-1 btn-sep icon-cart">Accept</button></a>
                                          </td>

                                        </tr>

                                        @endforeach




                                    </table>
                                    {{-- {{ $orders->links() }} --}}
                                    </div>
                                  </div>
                                </div>
                              </div>


                        </div>

                    </div>

                </section>
            </div>
        </div>
    </div>


    {{-- footer --}}


    @include('admin.footer')
    </div>
    </div>
    </div>
    {{-- Js --}}
    @include('admin.js')
</body>

</html>
