@extends('layouts.app')
@section('title', 'cart')
@section('script')
    <script src="{{ asset('assets/js/checkbox.js') }}"></script>
    <script src="{{ asset('assets/js/toast.js') }}"></script>
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/toast.css') }}">
@endsection
@section('content')
    <form class="woocommerce-cart-form table-responsive" action="{{ route('carts.delete-cart') }}" method="post">
        @csrf
        @method('DELETE')
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ __('delete_label') }}</h5>
                    </div>
                    <div class="modal-body delete_item">
                        Do you want to delete items?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">{{ __('cancel') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('delete') }}</button>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="selected_items" id="selectedItemsInput" value="">
    </form>
    <header class="py-8 py-md-10" style="background-image: none;">
        <div class="container text-center py-xl-2">
            <h1 class="display-4 fw-semi-bold mb-0"> {{ __('shop_cart') }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-scroll justify-content-center">
                    <li class="breadcrumb-item">
                        <a class="text-gray-800" href="#">
                            {{ __('home') }}
                        </a>
                    </li>
                    <li class="breadcrumb-item text-gray-800 active" aria-current="page">
                        {{ __('shop_cart') }}
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
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div id="primary" class="content-area">
                <main id="main" class="site-main ">
                    <div class="page type-page status-publish hentry">
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
                                                        {{ __('select_all') }}
                                                    </div>
                                                </th>
                                                <th class="product-name">{{ __('product') }}</th>
                                                <th class="product-price">{{ __('price') }}</th>
                                                <th class="product-quantity">{{ __('quantity') }}</th>
                                                <th class="product-remove">{{ __('acion') }}</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @php
                                                $total = 0;
                                            @endphp
                                            @if (count($cart) > 0)
                                                @foreach ($cart as $item)
                                                    <tr class="woocommerce-cart-form__cart-item cart_item">
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input flexCheckDefault"
                                                                    type="checkbox"
                                                                    data-price="{{ number_format($item->course->discounted_price, 2) }}"
                                                                    data-id="{{ $item->id }}"
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
                                                                    class="woocommerce-Price-currencySymbol">$</span>{{ number_format($item->course->discounted_price, 2) }}</span>
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
                                                                    {{ __('delete') }}
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="5" class="actions">
                                                        <input class="button" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal" value="Delete select cart"
                                                            onclick="handleDeleteButtonClick()">
                                                    </td>
                                                </tr>
                                            @else
                                                <tr>
                                                    <td colspan="5" class="text-center">{{ __('empty_cart') }}</td>
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
                        <h2>{{ __('title_card') }}</h2>

                        <table class="shop_table shop_table_responsive">
                            <tbody>
                                <tr class="order-total">
                                    <th>{{ __('total') }}</th>
                                    <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">{{ __('monetary_unit') }}</span>
                                                {{ $total }}</span></strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="wc-proceed-to-checkout">
                            <a href="shop-checkout.html" class="checkout-button button alt wc-forward">
                                {{ __('process') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
