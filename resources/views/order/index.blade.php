@extends('layouts.app')
@section('title', 'order')
@section('content')
    <div class="bg-white woocommerce-order-received">
        <!-- SHOP ORDER COMPLETED
                        ================================================== -->
        <div class="container py-8 py-lg-11">
            <div class="row">
                <div class="col-xl-8 mx-xl-auto">
                    <header class="entry-header">
                        <h1 class="entry-title">Order received</h1>
                    </header>

                    <div class="entry-content">
                        <div class="woocommerce">
                            <div class="woocommerce-order">
                                <p
                                    class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">
                                </p>
                                <ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">
                                    <li class="woocommerce-order-overview__order order">
                                        Order number:
                                        <strong>21706</strong>
                                    </li>

                                    <li class="woocommerce-order-overview__date date">
                                        Date:
                                        <strong>November 16, 2020</strong>
                                    </li>

                                    <li class="woocommerce-order-overview__total total">
                                        Total:
                                        <strong><span class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">$</span>109.95</span></strong>
                                    </li>

                                    <li class="woocommerce-order-overview__payment-method method">
                                        Payment method:
                                        <strong>Paypal payments</strong>
                                    </li>
                                </ul>

                                <section class="woocommerce-order-details">
                                    <h2 class="woocommerce-order-details__title">Order details</h2>
                                    <table
                                        class="woocommerce-table woocommerce-table--order-details shop_table order_details">
                                        <thead>
                                            <tr>
                                                <th class="woocommerce-table__product-name product-name">Product</th>
                                                <th class="woocommerce-table__product-table product-total">Total</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr class="woocommerce-table__line-item order_item">
                                                <td class="woocommerce-table__product-name product-name">
                                                    <a href="#">Hoodie</a>
                                                </td>

                                                <td class="woocommerce-table__product-total product-total">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>59.00</span>
                                                </td>
                                            </tr>

                                            <tr class="woocommerce-table__line-item order_item">
                                                <td class="woocommerce-table__product-name product-name">
                                                    <a href="#">Seo Books</a>
                                                </td>

                                                <td class="woocommerce-table__product-total product-total">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>67.00</span>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                <th scope="row">Payment method:</th>
                                                <td>Paypal payments</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Total:</th>
                                                <td><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>109.95</span>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
