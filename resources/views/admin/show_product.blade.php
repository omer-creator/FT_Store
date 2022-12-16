<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
        .center{
            margin: auto;
            width: 50px;
            border: 2px solid white;
            text-align: center;
            margin-top: 40px;
        }
        .font_size{
            text-align: center;
            font-size: 40px;
            padding-top: 20px;
        }
        .img_size{
            width: 150px;
            height: 150px;
        }
        .th_color{
            background-color: skyblue;
        }
        .th_design{
            padding: 30px;
        }
    </style>

</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

            <!-- partial:partials/_navbar.html -->
            @include('admin.header')
            <!-- partial -->
            <div class="main-panel">
                <h2 class="font_size">All Products</h2>
                <table class="center">
                    <tr class="th_color">
                        <th class="th_design">ProductTitle</th>
                        <th class="th_design">Description</th>
                        <th class="th_design">Catagory</th>
                        <th class="th_design">Price</th>
                        <th class="th_design">Quantity</th>
                        <th class="th_design">Discount Price</th>
                        <th class="th_design">Product Image</th>
                    </tr>
                    @foreach($product as $product)
                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->catagory}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->discount_price}}</td>
                        <td><img class="img_size" src="/product/{{$product->image}}"></td>
                    </tr>
                    @endforeach
                </table>

            </div>
            <!-- container-scroller -->
            <!-- plugins:js -->
            <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
            <!-- endinject -->
            <!-- Plugin js for this page -->
            @include('admin.script')
            <!-- End custom js for this page -->
</body>

</html>