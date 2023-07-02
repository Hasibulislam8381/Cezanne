@extends('layouts.frontend.master')
@section('content')
{{-- bradcrump start --}}
<div class="page-title text-center">
    <div class="contact_tag1 text-center text-bold">Your All Carts</div>
    <hr class="hr_for_all">
</div>
{{-- bradcrump end --}}
    <div class="carts_page">
        <div class="container">
            <div class="carts_table table-responsive">
                <table style="text-align: center" class="table">
                    <thead style="background-color: #644700;color:white" class="">
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="tr-border">
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td><a href=""><i class="fa-solid fa-minus cart-minus"></i></a> <input class="small-input" type="text" name="" value="1"> <a href=""><i class="fa-solid fa-plus cart-plus"></i></a></td>
                            <td>345 BDT</td>
                            <td></td>
                            <td><a href=""><button class="btn btn-danger"><i
                                            class="fa-solid fa-trash"></i></button></a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td><a href=""><i class="fa-solid fa-minus cart-minus"></i></a> <input class="small-input" type="text" name="" value="1"> <a href=""><i class="fa-solid fa-plus cart-plus"></i></a></td>
                            <td>567 BDT</td>
                            <td></td>
                            <td><a href=""><button class="btn btn-danger"><i
                                            class="fa-solid fa-trash"></i></button></a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td><a href=""><i class="fa-solid fa-minus cart-minus"></i></a> <input class="small-input" type="text" name="" value="1"> <a href=""><i class="fa-solid fa-plus cart-plus"></i></a></td>
                            <td>567 BDT</td>
                            <td></td>
                            <td><a href=""><button class="btn btn-danger"><i
                                            class="fa-solid fa-trash"></i></button></a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td><a href=""><i class="fa-solid fa-minus cart-minus"></i></a> <input class="small-input" type="text" name="" value="1"> <a href=""><i class="fa-solid fa-plus cart-plus"></i></a></td>
                            <td>567 BDT</td>
                            <td></td>
                            <td><a href=""><button class="btn btn-danger"><i
                                            class="fa-solid fa-trash"></i></button></a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td><a href=""><i class="fa-solid fa-minus cart-minus"></i></a> <input class="small-input" type="text" name="" value="1"> <a href=""><i class="fa-solid fa-plus cart-plus"></i></a></td>
                            <td>894 BDT</td>
                            <td></td>
                            <td><a href=""><button class="btn btn-danger"><i
                                            class="fa-solid fa-trash"></i></button></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- For Mobile view --}}
            <div class="carts_table2 table-responsive">
                <table class="table">
            
                    <tbody>
                        <tr style="background-color: #644700;color:white">
                            <th  scope="row">SL</th>
                            <td>01</td>
                        </tr>
                        <tr>
                            <th scope="row">Product name</th>
                            <td>T-Shirt</td>
                        </tr>
                        <tr>
                            <th scope="row">Quantity</th>
                            <td><a href=""><i class="fa-solid fa-minus cart-minus"></i></a> <input class="small-input" type="text" name="" value="1"> <a href=""><i class="fa-solid fa-plus cart-plus"></i></a></td>
                        </tr>
                        <tr>
                            <th scope="row">Price</th>
                            <td>01</td>
                        </tr>
                        <tr>
                            <th scope="row">Image</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">Action</th>
                            <td><a href=""><button class="btn btn-danger"><i
                                class="fa-solid fa-trash"></i></button></a></td>
                        </tr>
                       
                       
                        
                      
                    </tbody>
                    <tbody >
                        <tr style="background-color: #644700;color:white">
                            <th  scope="row">Serial</th>
                            <td>01</td>
                        </tr>
                        <tr>
                            <th scope="row">Product name</th>
                            <td>T-Shirt</td>
                        </tr>
                        <tr>
                            <th scope="row">Quantity</th>
                            <td><a href=""><i class="fa-solid fa-minus cart-minus"></i></a> <input class="small-input" type="text" name="" value="1"> <a href=""><i class="fa-solid fa-plus cart-plus"></i></a></td>
                        </tr>
                        <tr>
                            <th scope="row">Price</th>
                            <td>03</td>
                        </tr>
                        <tr>
                            <th scope="row">Image</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">Action</th>
                            <td><a href=""><button class="btn btn-danger"><i
                                class="fa-solid fa-trash"></i></button></a></td>
                        </tr>
                       
                       
                        
                      
                    </tbody>
                    <tbody>
                        <tr style="background-color: #644700;color:white">
                            <th  scope="row">Serial</th>
                            <td>03</td>
                        </tr>
                        <tr>
                            <th scope="row">Product name</th>
                            <td>T-Shirt</td>
                        </tr>
                        <tr>
                            <th scope="row">Quantity</th>
                            <td><a href=""><i class="fa-solid fa-minus cart-minus"></i></a> <input class="small-input" type="text" name="" value="1"> <a href=""><i class="fa-solid fa-plus cart-plus"></i></a></td>
                        </tr>
                        <tr>
                            <th scope="row">Price</th>
                            <td>01</td>
                        </tr>
                        <tr>
                            <th scope="row">Image</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">Action</th>
                            <td><a href=""><button class="btn btn-danger"><i
                                class="fa-solid fa-trash"></i></button></a></td>
                        </tr>
                       
                       
                        
                      
                    </tbody>
                </table>
            </div>
            {{-- For Mobile view --}}
            <div class="buynow_return">
                <div class="return_shop">
                    <a href="" style="color: #644700"><i class="fa-solid fa-arrow-right fa-rotate-180"></i> Return to
                        shop</a>
                </div>
                <div class="cart_buy_now">
                    <a href=""><button><i class="fa-solid fa-bag-shopping fa-bounce"></i> Buy Now</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
