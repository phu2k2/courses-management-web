@extends('layouts.app')
@section('title', 'cart')
@section('script')
    <script type="module" src="{{ asset('assets/js/cart.js') }}"></script>
    <script src="{{ asset('assets/js/checkbox.js') }}"></script>
@endsection
@section('content')
    <header class="py-8 py-md-10" style="background-image: none;">
        <div class="container text-center py-xl-2">
            <h1 class="display-4 fw-semi-bold mb-0">Shop Cart</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-scroll justify-content-center">
                    <li class="breadcrumb-item">
                        <a class="text-gray-800" href="#">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item text-gray-800 active" aria-current="page">
                        Shop Cart
                    </li>
                </ol>
            </nav>
        </div>
        <!-- Img -->
        <img class="d-none img-fluid" src="...html" alt="...">
    </header>
    <!-- SHOP CART
                                                        ================================================== -->
    <div class="container pb-6 pb-xl-10">
        <div class="row">
            <div id="primary" class="content-area">
                <main id="main" class="site-main ">
                    <div class="page type-page status-publish hentry">
                        <!-- .entry-header -->
                        <div class="entry-content">
                            <div class="woocommerce">
                                <form class="woocommerce-cart-form table-responsive"
                                    action="{{ route('carts.delete-cart') }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                                        <thead>
                                            <tr>
                                                <th class=""> <input type="checkbox" id="checkAll"> Select All
                                                <th>
                                                    <div class="form-check">
                                                        <input class="form-check-input header-checkbox" type="checkbox"
                                                            onchange="handleCheckboxClick()">
                                                    </div>
                                                </th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-remove">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            @foreach ($cart as $item)
                                                @php
                                                    $total = 0;
                                                    $discountAmount = $item->course->price * ($item->course->discount / 100);
                                                    $discountedPrice = $item->course->price - $discountAmount;
                                                @endphp
                                                <tr class="woocommerce-cart-form__cart-item cart_item">
                                                    <td class="">
                                                        <input name='ids[]' type="checkbox" id="checkItem"
                                                            value="{{ $item->course->id }}">
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input flexCheckDefault" type="checkbox"
                                                                data-price="{{ $discountedPrice }}"
                                                                onchange="calculateTotal()">
                                                        </div>
                                                    </td>
                                                    <td class="product-name" data-title="Product">
                                                        <div class="d-flex align-items-center">
                                                            <a href="shop-single.html">
                                                                <img src="{{ $item->course->poster_url }}"
                                                                    class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                    alt="">
                                                            </a>
                                                            <div class="ms-6">
                                                                <a href="shop-single.html">{{ $item->course->title }}</a>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td class="product-price" data-title="Price">
                                                        <span class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol">$</span>{{ $discountedPrice }}</span>
                                                    </td>

                                                    <td class="product-quantity" data-title="Quantity">
                                                        <!-- Quantity -->
                                                        <div class="border rounded mw-70p">
                                                            <input
                                                                class="form-control form-control-sm border-0 quantity px-2"
                                                                readonly name="quantity" value="1" type="number">

                                                        </div>
                                                        <!-- End Quantity -->
                                                    </td>


                                                    <td class="product-remove">
                                                        <a href="#" class="remove btn btn-danger font-size-sm"
                                                            aria-label="Remove this item">
                                                            Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="5" class="actions">
                                                    <div class="coupon">
                                                        <label for="coupon_code">Coupon:</label>
                                                        <input type="text" name="coupon_code" class="input-text"
                                                            id="coupon_code" value="" placeholder="Coupon code"
                                                            autocomplete="off"> <input type="submit" class="button"
                                                            name="apply_coupon" value="Apply coupon">
                                                    </div>

                                                    <input type="submit" class="button" name="update_cart"
                                                        value="Update cart">
                                                    <input class="button" type="submit" name="submit"
                                                        value="Remove All Cart"
                                                        onclick="return confirm('Are you sure you want to delete?')" />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                        <!-- .entry-content -->
                    </div>
                </main>
            </div>
            <div id="secondary" class="sidebar" role="complementary">
                <div class="cart-collaterals">
                    <div class="cart_totals">
                        <h2>Cart totals</h2>

                        <table class="shop_table shop_table_responsive">
                            <tbody>
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">£</span>
                                                {{ $total }}</span></strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="wc-proceed-to-checkout">
                            <a href="shop-checkout.html" class="checkout-button button alt wc-forward">
                                Proceed to checkout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
