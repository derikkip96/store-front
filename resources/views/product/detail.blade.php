@extends('layout.master')
@section('content')
    <div class="uk-section uk-section-default">
        <div class="uk-container">
            <div class="uk-grid-match uk-child-width-1-2@m" uk-grid>
                <div class="product-img">
                    <img data-src="https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=650&h=433&q=80"
                         data-srcset="https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=650&h=433&q=80 650w,
                      https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=1300&h=866&q=80 1300w"
                         sizes="(min-width: 650px) 650px, 100vw"  alt="" uk-img>
                </div>

                <div class="product-desc">
                      <h3>product1 </h3>
                         <h>KSH 900</h>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </p>
                    <hr>
                    <center><button class="uk-button-default uk-button-small butn" ><a href="/shop/cart"  >ADD TO CART</a></button></center>

                </div>
            </div>

        </div>
    </div>

    <div class="uk-section">
        <div class="uk-container">

            <ul class="uk-flex-center" uk-tab>
                <li class="uk-active"><a href="#">you may also like</a></li>
            </ul>


            <div class="uk-grid" data-uk-grid-margin>

                <div uk-slider>

                    <div class="uk-position-relative uk-visible-toggle ">

                        <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-2 uk-grid">
                            <li>
                                @include('product.partials.single-grid')
                            </li>
                            <li>
                                @include('product.partials.single-grid')
                            </li>
                            <li>
                                @include('product.partials.single-grid')
                            </li>
                            <li>
                                @include('product.partials.single-grid')
                            </li>
                            <li>
                                @include('product.partials.single-grid')
                            </li>
                        </ul>

                    </div>

                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

                </div>
            </div>
        </div>
    </div>

    @stop
