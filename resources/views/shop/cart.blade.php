@extends('layout.master')
@section('content')
    <div class="uk-section">
        <div class="uk-container">

                <table class="uk-table uk-table-middle  uk-table-divider uk-table-responsive ">
                    <thead>
                    <tr>
                        <th class="uk-width-large">Product Name</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th>Discount</th>
                        <th ><button class="uk-button-small uk-button-danger uk-border-rounded">CLEAR CART</button></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="p-img">
                                <img class="uk-preserve-width" data-src="https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=650&h=433&q=80"
                                     data-srcset="https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=650&h=433&q=80 650w,
                          https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=1300&h=866&q=80 1300w"
                                     sizes="(min-width: 100px) 100px, 100vw" width="100" height="auto" alt="" uk-img>
                            </div>
                            <div class="product-info">

                            </div>
                        </td>
                        <td>
                            <form>
                                <select class="uk-select uk-form-width-small uk-border-rounded">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </form>
                        </td>
                        <td>KSH</td>
                        <td>table data</td>
                        <td ><a class="uk-danger"><span uk-icon="close" uk-tooltip="remove item"></span></a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="p-img">
                                <img class="uk-preserve-width" data-src="https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=650&h=433&q=80"
                                     data-srcset="https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=650&h=433&q=80 650w,
                          https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=1300&h=866&q=80 1300w"
                                     sizes="(min-width: 100px) 100px, 100vw" width="100" height="auto" alt="" uk-img>
                            </div>
                            <div class="p-info">

                            </div>
                        </td>
                        <td>
                            <form>
                                <select class="uk-select uk-form-width-small uk-border-rounded">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </form>
                        </td>
                        <td>KSH</td>
                        <td>table data</td>
                        <td><a><span uk-icon="close" uk-tooltip="remove item"></span></a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="p-img">
                            <img class="uk-preserve-width " data-src="https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=650&h=433&q=80"
                                 data-srcset="https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=650&h=433&q=80 650w,
                          https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=1300&h=866&q=80 1300w"
                                 sizes="(min-width: 100px) 100px, 100vw" width="100" height="auto" alt="" uk-img>
                            </div>
                            <div class="product-info">

                            </div>
                        </td>
                        <td>
                            <form>
                                <select class="uk-select uk-form-width-small uk-border-rounded">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </form>
                        </td>
                        <td>KSH</td>
                        <td>table data</td>
                        <td ><a><span uk-icon="close" uk-tooltip="remove item"></span></a></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <form class="uk-form-horizontal ">
                                <div class="uk-margin" uk-margin>
                                        <input class="uk-input uk-form-width-medium uk-border-rounded" type="text" placeholder="Coupon Code" >
                                    <button class="uk-button uk-button-default uk-border-rounded">APPLY COUPON</button>
                                </div>

                            </form>
                        </td>
                        <td>Subtotal: KSH</td>

                    </tr>

                    </tbody>
                </table>
            <hr>
            <div class="uk-float-left">
                <button class="uk-button uk-button-default uk-border-rounded" ><a href="/products"><span uk-icon="arrow-left"></span> CONTINUE SHOPING</a></button>
            </div>
            <div class="uk-float-right">
                <button class="uk-button uk-button-default uk-border-rounded"><a href="#"> UPDATE CART</a></button>
                <button class="uk-button uk-button-default uk-border-rounded"><a href="/checkout">CHECKOUT</a></button>
            </div>


        </div>
    </div>

    <div class="uk-section">
        <div class="uk-container">
            <ul class="uk-flex-center" uk-tab>
                <li class="uk-acti<u"><a href="#">you may also like</a></li>
            </ul>


            <div class="uk-grid" data-uk-grid-margin>

                <div uk-slider >

                    <div class="uk-position-relative uk-visible-toggle ">

                        <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-2 uk-grid">
                            <li>
                                <div>
                                    <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-text-center">
                                        <div class="uk-card-media-top">
                                            <img data-src="https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=650&h=433&q=80"
                                                 data-srcset="https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=650&h=433&q=80 650w,
                          https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=1300&h=866&q=80 1300w"
                                                 sizes="(min-width: 650px) 650px, 100vw" width="650" height="433" alt="" uk-img>
                                        </div>

                                        <h5><a class="uk-link-heading" href="/detail">product 11</a></h5>
                                        <h6>KSH 900</h6>
                                        <button class="uk-button-default uk-button-small butn" ><a href="#"  >ADD TO CART </a></button>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-text-center">
                                        <div class="uk-card-media-top">
                                            <img data-src="https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=650&h=433&q=80"
                                                 data-srcset="https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=650&h=433&q=80 650w,
                          https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=1300&h=866&q=80 1300w"
                                                 sizes="(min-width: 650px) 650px, 100vw" width="650" height="433" alt="" uk-img>
                                        </div>

                                        <h5><a class="uk-link-heading" href="/detail">product 11</a></h5>
                                        <h6>KSH 900</h6>
                                        <button class="uk-button-default uk-button-small butn" ><a href="#"  >ADD TO CART</a></button>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-text-center">
                                        <div class="uk-card-media-top">
                                            <img data-src="https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=650&h=433&q=80"
                                                 data-srcset="https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=650&h=433&q=80 650w,
                          https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=1300&h=866&q=80 1300w"
                                                 sizes="(min-width: 650px) 650px, 100vw" width="650" height="433" alt="" uk-img>
                                        </div>

                                        <h5><a class="uk-link-heading" href="/detail">product 11</a></h5>
                                        <h6>KSH 900</h6>
                                        <button class="uk-button-default uk-button-small butn" ><a href="#"  >ADD TO CART </a></button>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-text-center">
                                        <div class="uk-card-media-top">
                                            <img data-src="https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=650&h=433&q=80"
                                                 data-srcset="https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=650&h=433&q=80 650w,
                          https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=1300&h=866&q=80 1300w"
                                                 sizes="(min-width: 650px) 650px, 100vw" width="650" height="433" alt="" uk-img>
                                        </div>

                                        <h5><a class="uk-link-heading" href="/detail">product 11</a></h5>
                                        <h6>KSH 900</h6>
                                        <button class="uk-button-default uk-button-small butn" ><a href="#"  >ADD TO CART </a></button>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-text-center">
                                        <div class="uk-card-media-top">
                                            <img data-src="https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=650&h=433&q=80"
                                                 data-srcset="https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=650&h=433&q=80 650w,
                          https://images.unsplash.com/photo-1522201949034-507737bce479?fit=crop&w=1300&h=866&q=80 1300w"
                                                 sizes="(min-width: 650px) 650px, 100vw" width="650" height="433" alt="" uk-img>
                                        </div>
                                        <h5><a class="uk-link-heading" href="/detail">product 11</a></h5>
                                        <h6>KSH 900</h6>
                                        <button class="uk-button-default uk-button-small butn" ><a href="#"  >ADD TO CART </a></button>

                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>

                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

                </div>
            </div>
        </div>
    </div>
    @stop
