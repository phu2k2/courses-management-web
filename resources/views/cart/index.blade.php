@extends('layouts.app')
@section('title', 'cart')
@section('script')
    <script src="{{ asset('assets/js/checkbox.js') }}"></script>
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/toast.css') }}">
@endsection
@section('script')
    <script src="{{ asset('assets/js/toast.js') }}"></script>
@endsection
@section('content')
    <form action="#" method="post">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Do you want to delete ?</h5>
                        </button>
                    </div>
                    <div class="modal-body delete_item">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="selected_items" id="selectedItemsInput" value="">
    </form>
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
        @include('layouts.message')
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
                                <div class="woocommerce-cart-form table-responsive">
                                    <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="form-check">
                                                        <input class="form-check-input header-checkbox" type="checkbox"
                                                            onchange="handleCheckboxClick()">
                                                        Select All
                                                    </div>
                                                </th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-remove">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @php
                                                $total = 0;
                                            @endphp
                                            @if (count($cart) > 0)
                                                @foreach ($cart as $item)
                                                    @php
                                                        $discountAmount = $item->course->price * ($item->course->discount / 100);
                                                        $discountedPrice = $item->course->price - $discountAmount;
                                                    @endphp
                                                    <tr class="woocommerce-cart-form__cart-item cart_item">
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input flexCheckDefault"
                                                                    type="checkbox" data-price="{{ $discountedPrice }}"
                                                                    data-id="{{ $item->course->title }}"
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
                                                                    <a
                                                                        href="shop-single.html">{{ $item->course->title }}</a>
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
                                                            <form method="POST"
                                                                action="{{ route('carts.destroy', $item->id) }}"
                                                                onsubmit="return confirm('Are you sure you want to delete')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="hidden" name="id"
                                                                    value="{{ $item->id }}">
                                                                <button type="submit" class="btn btn-danger"
                                                                    style="padding: 0.7rem 1.5rem">
                                                                    Delete
                                                                </button>
                                                            </form>
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
                                                        <input class="button" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal" value="Delete cart"
                                                            onclick="handleDeleteButtonClick()">
                                                    </td>
                                                </tr>
                                            @else
                                                <tr>
                                                    <td colspan="5" class="text-center">Empty courses!</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
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
