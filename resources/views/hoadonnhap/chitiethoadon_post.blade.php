       @extends('layouts.dash')
       @section('section')
        <div class="dashboard-wrapper" style="margin-left: 320px">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div style="border-bottom: 1px solid black" class="row">
                          <h2>Quản lý hóa đơn nhập</h2>
                        </div>
                        @foreach($laydata as $da)
                        <form style="margin-top: 40px;margin-bottom: 40px" action="/product/CTHD1" method="post">
                          @csrf
                          <label>Mã sery sản phẩm</label>
                            <input type="" value="{{$namencc}}" style="display: none;" name="tenncc">
                          <input type="text" value="{{$da->id}}" style="display: none;" name="id">
                           <input value="{{$da->Mancc}}" type="text" style="display: none;" name="ncc">
                           <input value="{{$da->Mancc}}" type="text" style="display: none;" name="ncc">
                          <input type="text" value="{{$da->masery}}" name="sery">
                           <input type="submit" value="check" style="color: white;background-color:#24315f ">
                        <label style="margin-left: 100px">Tên sản phẩm</label>
                          <input value="{{$da->name}}" type="text" name="name">
                          <label style="margin-left: 30px">Số lượng</label>
                          <input  style="width: 50px" type="text" name="soluong">
                          <label style="margin-left: 30px">Đơn giá</label>
                          <input value="{{$da->price}}" type="text" name="price">
                          <input type="submit" value="Thêm" style="color: white;background-color:#24315f ">
                          </form>
                          @endforeach
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
       
        @stop()