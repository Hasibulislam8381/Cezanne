@extends('layouts.frontend.master')
@section('content')
{{-- bradcrump start --}}
<div class="page-title text-center">
    <div class="contact_tag1 text-center text-bold">Your Wishlist</div>
    <hr class="hr_for_all">
</div>
{{-- bradcrump end --}}
    <div class="carts_page">

        <div class="container">
            <div class="wish_list">
                <i class="fa-regular fa-heart"></i>Wishlist
            </div>
            <div class="wishlist_table">
            <div class="carts_table">
                <table style="text-align: center" class="table">
                    <thead style="background-color: #644700;color:white" class="">
                        <tr>
                            <th scope="col">Serial</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>345 BDT</td>
                            <td></td>
                            <td class="icone_responsive" style="">
                                <a href=""><i style="font-size: 22px;padding-right:10px;color:#644700"
                                        class="fa-solid fa-cart-shopping"></i></i></a>
                                <a href=""><i style="font-size: 22px;color:#c0392b" class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>567 BDT</td>
                            <td></td>
                            <td class="icone_responsive" style="">
                                <a href=""><i style="font-size: 22px;padding-right:10px;color:#644700"
                                        class="fa-solid fa-cart-shopping"></i></i></a>
                                <a href=""><i style="font-size: 22px;color:#c0392b" class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>567 BDT</td>
                            <td></td>
                            <td class="icone_responsive" style="">
                                <a href=""><i style="font-size: 22px;padding-right:10px;color:#644700"
                                        class="fa-solid fa-cart-shopping"></i></i></a>
                                <a href=""><i style="font-size: 22px;color:#c0392b" class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>567 BDT</td>
                            <td></td>
                            <td class="icone_responsive" style="">
                                <a href=""><i style="font-size: 22px;padding-right:10px;color:#644700"
                                        class="fa-solid fa-cart-shopping"></i></i></a>
                                <a href=""><i style="font-size: 22px;color:#c0392b" class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>894 BDT</td>
                            <td></td>
                            <td class="icone_responsive" style="">
                                <a href=""><i style="font-size: 22px;padding-right:10px;color:#644700"
                                        class="fa-solid fa-cart-shopping"></i></i></a>
                                <a href=""><i style="font-size: 22px;color:#c0392b" class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
