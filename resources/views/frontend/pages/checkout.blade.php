@extends('layouts.frontend.master')
@section('content')
    <section class="checkout_page">
        <div class="container">
            <div class="customer_info">
                <div class="row">
                    <div class="col-md-6">
                <div class="curtomer_header">Deliver To</div>
                <div class="customer_info">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>Masud</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>rafik@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>01629386012</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>Baridhara 7,Road 12,Baridhara</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <div class="curtomer_header">Product Details</div>
                <div class="product_info">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Product Name</td>
                                <td>T-shirt</td>
                            </tr>

                            <tr>
                                <td>Product Details</td>
                               <td>Height:35'Width:40' Full Cotton : 150gsm</td>
                            </tr>
                            <tr>
                                <td>Quantity</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Apply Cupon</td>
                                <td><input class="form-control" type="text"></td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>259৳</td>
                            </tr>
                            <tr>
                                <td>Delivery Charge</td>
                                <td>40৳</td>
                            </tr>
                            <tr>
                                <td>Total Amount</td>
                                <td>299৳</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            {{-- full row complete --}}
                <div class="place_order">
                    <p>Total amount: 299৳</p>
                    <a href=""><button>Place Order</button></a>
                </div>
            </div>
        </div>
    </section>
@endsection
