@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container category">
        <div class="row justify-content-md-center">
            <div class="col-12 category-list">
                @foreach($categories as $category)
                    <div class="col-md-3 category-item">
                        <img src="{{ asset('uploads/' . $category->photo) }}" alt="..." class="img-thumbnail cat-image">
                        <span>{{ $category->name }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <h2 class="text-center mt-5">Последние добавленные товары</h2>

    <div class="container">
        <div class="col-12">
            <div class="row mt-5 justify-content-md-center">
                <div class="col-lg-3 col-md-4 col-sm-6 mb--65 mb-md--50">
                    <div class="payne-product">
                        <div class="product__inner">
                            <div class="product__image">
                                <figure class="product__image--holder">
                                    <a href="product-details.html" class="product-overlay">
                                        <img src="http://dummyimage.com/245x300/c0c0c0" alt="Product">
                                    </a>
                                </figure>

                                <div class="product__action">
                                    <a href="cart.html" class="action-btn">
                                        <svg class="bi bi-bag-fill" width="20px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 4h14v10a2 2 0 01-2 2H3a2 2 0 01-2-2V4zm7-2.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z"/>
                                        </svg>
                                        <span class="sr-only">Add To Cart</span>
                                    </a>
                                </div>
                            </div>
                            <div class="product__info">
                                <h4 class="product__title">
                                    <a href="product-details.html">Lexbaro Begadi</a>
                                </h4>
                                <div class="product__price">
                                    <span class="money">132.00</span>
                                    <span class="sign">$</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb--65 mb-md--50">
                    <div class="payne-product">
                        <div class="product__inner">
                            <div class="product__image">
                                <figure class="product__image--holder">
                                    <a href="product-details.html" class="product-overlay">
                                        <img src="http://dummyimage.com/245x300/c0c0c0" alt="Product">
                                    </a>
                                </figure>

                                <div class="product__action">
                                    <a href="cart.html" class="action-btn">
                                        <svg class="bi bi-bag-fill" width="20px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 4h14v10a2 2 0 01-2 2H3a2 2 0 01-2-2V4zm7-2.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z"/>
                                        </svg>
                                        <span class="sr-only">Add To Cart</span>
                                    </a>
                                </div>
                            </div>
                            <div class="product__info">
                                <h4 class="product__title">
                                    <a href="product-details.html">Lexbaro Begadi</a>
                                </h4>
                                <div class="product__price">
                                    <span class="money">132.00</span>
                                    <span class="sign">$</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb--65 mb-md--50">
                    <div class="payne-product">
                        <div class="product__inner">
                            <div class="product__image">
                                <figure class="product__image--holder">
                                    <a href="product-details.html" class="product-overlay">
                                        <img src="http://dummyimage.com/245x300/c0c0c0" alt="Product">
                                    </a>
                                </figure>

                                <div class="product__action">
                                    <a href="cart.html" class="action-btn">
                                        <svg class="bi bi-bag-fill" width="20px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 4h14v10a2 2 0 01-2 2H3a2 2 0 01-2-2V4zm7-2.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z"/>
                                        </svg>
                                        <span class="sr-only">Add To Cart</span>
                                    </a>
                                </div>
                            </div>
                            <div class="product__info">
                                <h4 class="product__title">
                                    <a href="product-details.html">Lexbaro Begadi</a>
                                </h4>
                                <div class="product__price">
                                    <span class="money">132.00</span>
                                    <span class="sign">$</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb--65 mb-md--50">
                    <div class="payne-product">
                        <div class="product__inner">
                            <div class="product__image">
                                <figure class="product__image--holder">
                                    <a href="product-details.html" class="product-overlay">
                                        <img src="http://dummyimage.com/245x300/c0c0c0" alt="Product">
                                    </a>
                                </figure>

                                <div class="product__action">
                                    <a href="cart.html" class="action-btn">
                                        <svg class="bi bi-bag-fill" width="20px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 4h14v10a2 2 0 01-2 2H3a2 2 0 01-2-2V4zm7-2.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z"/>
                                        </svg>
                                        <span class="sr-only">Add To Cart</span>
                                    </a>
                                </div>
                            </div>
                            <div class="product__info">
                                <h4 class="product__title">
                                    <a href="product-details.html">Lexbaro Begadi</a>
                                </h4>
                                <div class="product__price">
                                    <span class="money">132.00</span>
                                    <span class="sign">$</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-md-center">
                <div class="col-lg-3 col-md-4 col-sm-6 mb--65 mb-md--50">
                    <div class="payne-product">
                        <div class="product__inner">
                            <div class="product__image">
                                <figure class="product__image--holder">
                                    <a href="product-details.html" class="product-overlay">
                                        <img src="http://dummyimage.com/245x300/c0c0c0" alt="Product">
                                    </a>
                                </figure>

                                <div class="product__action">
                                    <a href="cart.html" class="action-btn">
                                        <svg class="bi bi-bag-fill" width="20px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 4h14v10a2 2 0 01-2 2H3a2 2 0 01-2-2V4zm7-2.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z"/>
                                        </svg>
                                        <span class="sr-only">Add To Cart</span>
                                    </a>
                                </div>
                            </div>
                            <div class="product__info">
                                <h4 class="product__title">
                                    <a href="product-details.html">Lexbaro Begadi</a>
                                </h4>
                                <div class="product__price">
                                    <span class="money">132.00</span>
                                    <span class="sign">$</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb--65 mb-md--50">
                    <div class="payne-product">
                        <div class="product__inner">
                            <div class="product__image">
                                <figure class="product__image--holder">
                                    <a href="product-details.html" class="product-overlay">
                                        <img src="http://dummyimage.com/245x300/c0c0c0" alt="Product">
                                    </a>
                                </figure>

                                <div class="product__action">
                                    <a href="cart.html" class="action-btn">
                                        <svg class="bi bi-bag-fill" width="20px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 4h14v10a2 2 0 01-2 2H3a2 2 0 01-2-2V4zm7-2.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z"/>
                                        </svg>
                                        <span class="sr-only">Add To Cart</span>
                                    </a>
                                </div>
                            </div>
                            <div class="product__info">
                                <h4 class="product__title">
                                    <a href="product-details.html">Lexbaro Begadi</a>
                                </h4>
                                <div class="product__price">
                                    <span class="money">132.00</span>
                                    <span class="sign">$</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb--65 mb-md--50">
                    <div class="payne-product">
                        <div class="product__inner">
                            <div class="product__image">
                                <figure class="product__image--holder">
                                    <a href="product-details.html" class="product-overlay">
                                        <img src="http://dummyimage.com/245x300/c0c0c0" alt="Product">
                                    </a>
                                </figure>

                                <div class="product__action">
                                    <a href="cart.html" class="action-btn">
                                        <svg class="bi bi-bag-fill" width="20px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 4h14v10a2 2 0 01-2 2H3a2 2 0 01-2-2V4zm7-2.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z"/>
                                        </svg>
                                        <span class="sr-only">Add To Cart</span>
                                    </a>
                                </div>
                            </div>
                            <div class="product__info">
                                <h4 class="product__title">
                                    <a href="product-details.html">Lexbaro Begadi</a>
                                </h4>
                                <div class="product__price">
                                    <span class="money">132.00</span>
                                    <span class="sign">$</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb--65 mb-md--50">
                    <div class="payne-product">
                        <div class="product__inner">
                            <div class="product__image">
                                <figure class="product__image--holder">
                                    <a href="product-details.html" class="product-overlay">
                                        <img src="http://dummyimage.com/245x300/c0c0c0" alt="Product">
                                    </a>
                                </figure>

                                <div class="product__action">
                                    <a href="cart.html" class="action-btn">
                                        <svg class="bi bi-bag-fill" width="20px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 4h14v10a2 2 0 01-2 2H3a2 2 0 01-2-2V4zm7-2.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z"/>
                                        </svg>
                                        <span class="sr-only">Add To Cart</span>
                                    </a>
                                </div>
                            </div>
                            <div class="product__info">
                                <h4 class="product__title">
                                    <a href="product-details.html">Lexbaro Begadi</a>
                                </h4>
                                <div class="product__price">
                                    <span class="money">132.00</span>
                                    <span class="sign">$</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection