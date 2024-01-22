<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="card">
        <div class="card-header bg-black"></div>
        <div class="card-body">

          <div class="container mt-3">
            <div class="row">
              <div class="col-xl-12">
                <i class="far fa-building text-danger fa-6x float-start"></i>
              </div>
            </div>


            <div class="row mx-3">
              <div class="col-10">

                <ul class="list-unstyled float-end">
                  <li style="font-size: 30px; color: red;">Kabulov</li>
                  <li>kabulovm@gmail.com</li>
                  <li>+998907071905</li>
                  <li></li>
                </ul>
              </div>
            </div>

            <div class="row text-center mx-3">
              <h3 class="text-uppercase text-center mt-5" style="font-size: 40px;">Invoice</h3>
              {{-- <p>123456789</p> --}}
            </div>

            <div class="row mx-3">
              <table>
                <thead>
                  <tr>
                    <th scope="col">Description</th>
                    <th scope="col">quantity</th>
                    <th scope="col">Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{ $products->product_name }}</td>
                    <td>{{ $products->product_quantity }}</td>
                    <td><i class="fas fa-dollar-sign"></i>${{ $products->product_price }}</td>
                  </tr>
                  {{-- <tr>
                    <td>JBL Speaker</td>
                    <td><i class="fas fa-dollar-sign"></i> 300,00</td>
                  </tr> --}}
                  {{-- <tr>
                    <td>Macbook Air</td>
                    <td><i class="fas fa-dollar-sign"></i> 1000,00</td>
                  </tr>
                  <tr>
                    {{-- <td>Iphone 11 PRO</td>
                    <td><i class="fas fa-dollar-sign"></i> 5000,00</td>
                  </tr> --}}
                </tbody>
              </table>

            </div>
            <div class="row">
              <div class="col-xl-10">
                <ul class="list-unstyled float-end me-0">
                  <li><span class="me-3 float-start">Total Amount:</span><i class="fas fa-dollar-sign"></i> ${{ $products->total_price }}
                  </li>
                  {{-- <li> <span class="me-5">Discount:</span><i class="fas fa-dollar-sign"></i> 500,00</li>
                  <li><span class="float-start" style="margin-right: 35px;">Shippment: </span><i
                      class="fas fa-dollar-sign"></i> 500,00</li> --}}
                </ul>
              </div>
            </div>
            <hr>
            <div class="row mt-2 mb-5">
                <h6>Client:</h6>
                <p class="fw-bold">Name: <span class="text-muted">{{ $products->user_name }}</span></p>
                <p class="fw-bold">Phone: <span class="text-muted">{{ $products->user_phone }}</span></p>
                <p class="fw-bold mt-3">{{ $products->user_email }}</p>
                <p class="fw-bold mt-3">{{ $products->user_address }}</p>
                <p class="fw-bold mt-3">{{ $products->user_phone }}</p>
            </div>

            <div class="row mt-2 mb-5">
                <p class="fw-bold">Date: <span class="text-muted">{{ $products->created_at }}</span></p>
                <p class="fw-bold mt-3">Signature:</p>
            </div>

            <div class="row">
              <div class="col-xl-10" style="margin-left:60px">
                <p class="float-end"
                  style="font-size: 30px; color: red; font-weight: 400;font-family: Arial, Helvetica, sans-serif;">
                  Total:
                  <span><i class="fas fa-dollar-sign"></i>${{ $products->total_price }}</span></p>
              </div>

            </div>
        </div>



        </div>
        <div class="card-footer bg-black"></div>
      </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
