@extends('clients.layouts.master')
@section('fruitsShop')
    <div class="tab-class text-center">
        <div class="row g-4">
            <div class="col-lg-4 text-start">
                <h1>Our Organic Products</h1>
            </div>
            <div class="col-lg-8 text-end">
                <ul class="nav nav-pills d-inline-flex text-center mb-5">
                    <li class="nav-item">
                        <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                            <span class="text-dark" style="width: 130px;">All Products</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                            <span class="text-dark" style="width: 130px;">Vegetables</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                            <span class="text-dark" style="width: 130px;">Fruits</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                            <span class="text-dark" style="width: 130px;">Bread</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                            <span class="text-dark" style="width: 130px;">Meat</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="{{ asset('assets/clients/img/fruite-item-5.jpg') }}"
                                            class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Grapes</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                            eiusmod te incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="{{ asset('assets/clients/img/fruite-item-5.jpg') }}"
                                            class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Grapes</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                            eiusmod te incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="{{ asset('assets/clients/img/fruite-item-2.jpg') }}"
                                            class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Raspberries</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                            eiusmod te incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="{{ asset('assets/clients/img/fruite-item-4.jpg') }}"
                                            class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Apricots</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                            eiusmod te incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="{{ asset('assets/clients/img/fruite-item-3.jpg') }}"
                                            class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Banana</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                            eiusmod te incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="{{ asset('assets/clients/img/fruite-item-1.jpg') }}"
                                            class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Oranges</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                            eiusmod te incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="{{ asset('assets/clients/img/fruite-item-2.jpg') }}"
                                            class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Raspberries</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                            eiusmod te incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="{{ asset('assets/clients/img/fruite-item-5.jpg') }}"
                                            class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Grapes</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                            eiusmod te incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab-2" class="tab-pane fade show p-0">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="{{ asset('assets/clients/img/fruite-item-5.jpg') }}"
                                            class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Grapes</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                            eiusmod te incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="{{ asset('assets/clients/img/fruite-item-2.jpg') }}"
                                            class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Raspberries</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                            eiusmod te incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab-3" class="tab-pane fade show p-0">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="{{ asset('assets/clients/img/fruite-item-1.jpg') }}"
                                            class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Oranges</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                            eiusmod te incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="{{ asset('assets/clients/img/fruite-item-6.jpg') }}"
                                            class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Apple</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                            eiusmod te incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab-4" class="tab-pane fade show p-0">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="{{ asset('assets/clients/img/fruite-item-5.jpg') }}"
                                            class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Grapes</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                            eiusmod te incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="{{ asset('assets/clients/img/fruite-item-4.jpg') }}"
                                            class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Apricots</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                            eiusmod te incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab-5" class="tab-pane fade show p-0">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="{{ asset('assets/clients/img/fruite-item-3.jpg') }}"
                                            class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Banana</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                            eiusmod te incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="{{ asset('assets/clients/img/fruite-item-2.jpg') }}"
                                            class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Raspberries</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                            eiusmod te incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="{{ asset('assets/clients/img/fruite-item-1.jpg') }}"
                                            class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 10px;">Fruits</div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4>Oranges</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                            eiusmod te incididunt</p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                            <a href="#"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('vesitableShop')
    <h1 class="mb-0">Fresh Organic Vegetables</h1>
    <div class="owl-carousel vegetable-carousel justify-content-center">
        <div class="border border-primary rounded position-relative vesitable-item">
            <div class="vesitable-img">
                <img src="{{ asset('assets/clients/img/vegetable-item-6.jpg') }}" class="img-fluid w-100 rounded-top"
                    alt="">
            </div>
            <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">
                Vegetable</div>
            <div class="p-4 rounded-bottom">
                <h4>Parsely</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                <div class="d-flex justify-content-between flex-lg-wrap">
                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                            class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                </div>
            </div>
        </div>
        <div class="border border-primary rounded position-relative vesitable-item">
            <div class="vesitable-img">
                <img src="{{ asset('assets/clients/img/vegetable-item-1.jpg') }}" class="img-fluid w-100 rounded-top"
                    alt="">
            </div>
            <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">
                Vegetable</div>
            <div class="p-4 rounded-bottom">
                <h4>Parsely</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                <div class="d-flex justify-content-between flex-lg-wrap">
                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                            class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                </div>
            </div>
        </div>
        <div class="border border-primary rounded position-relative vesitable-item">
            <div class="vesitable-img">
                <img src="{{ asset('assets/clients/img/vegetable-item-3.png') }}"
                    class="img-fluid w-100 rounded-top bg-light" alt="">
            </div>
            <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">
                Vegetable</div>
            <div class="p-4 rounded-bottom">
                <h4>Banana</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                <div class="d-flex justify-content-between flex-lg-wrap">
                    <p class="text-dark fs-5 fw-bold mb-0">$7.99 / kg</p>
                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                            class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                </div>
            </div>
        </div>
        <div class="border border-primary rounded position-relative vesitable-item">
            <div class="vesitable-img">
                <img src="{{ asset('assets/clients/img/vegetable-item-4.jpg') }}" class="img-fluid w-100 rounded-top"
                    alt="">
            </div>
            <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">
                Vegetable</div>
            <div class="p-4 rounded-bottom">
                <h4>Bell Papper</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                <div class="d-flex justify-content-between flex-lg-wrap">
                    <p class="text-dark fs-5 fw-bold mb-0">$7.99 / kg</p>
                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                            class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                </div>
            </div>
        </div>
        <div class="border border-primary rounded position-relative vesitable-item">
            <div class="vesitable-img">
                <img src="{{ asset('assets/clients/img/vegetable-item-5.jpg') }}" class="img-fluid w-100 rounded-top"
                    alt="">
            </div>
            <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">
                Vegetable</div>
            <div class="p-4 rounded-bottom">
                <h4>Potatoes</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                <div class="d-flex justify-content-between flex-lg-wrap">
                    <p class="text-dark fs-5 fw-bold mb-0">$7.99 / kg</p>
                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                            class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                </div>
            </div>
        </div>
        <div class="border border-primary rounded position-relative vesitable-item">
            <div class="vesitable-img">
                <img src="{{ asset('assets/clients/img/vegetable-item-6.jpg') }}" class="img-fluid w-100 rounded-top"
                    alt="">
            </div>
            <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">
                Vegetable</div>
            <div class="p-4 rounded-bottom">
                <h4>Parsely</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                <div class="d-flex justify-content-between flex-lg-wrap">
                    <p class="text-dark fs-5 fw-bold mb-0">$7.99 / kg</p>
                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                            class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                </div>
            </div>
        </div>
        <div class="border border-primary rounded position-relative vesitable-item">
            <div class="vesitable-img">
                <img src="{{ asset('assets/clients/img/vegetable-item-5.jpg') }}" class="img-fluid w-100 rounded-top"
                    alt="">
            </div>
            <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">
                Vegetable</div>
            <div class="p-4 rounded-bottom">
                <h4>Potatoes</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                <div class="d-flex justify-content-between flex-lg-wrap">
                    <p class="text-dark fs-5 fw-bold mb-0">$7.99 / kg</p>
                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                            class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                </div>
            </div>
        </div>
        <div class="border border-primary rounded position-relative vesitable-item">
            <div class="vesitable-img">
                <img src="{{ asset('assets/clients/img/vegetable-item-6.jpg') }}" class="img-fluid w-100 rounded-top"
                    alt="">
            </div>
            <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">
                Vegetable</div>
            <div class="p-4 rounded-bottom">
                <h4>Parsely</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                <div class="d-flex justify-content-between flex-lg-wrap">
                    <p class="text-dark fs-5 fw-bold mb-0">$7.99 / kg</p>
                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                            class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('bestsalerProduct')
<div class="text-center mx-auto mb-5" style="max-width: 700px;">
    <h1 class="display-4">Bestseller Products</h1>
    <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which
        looks reasonable.</p>
</div>
<div class="row g-4">
    <div class="col-lg-6 col-xl-4">
        <div class="p-4 rounded bg-light">
            <div class="row align-items-center">
                <div class="col-6">
                    <img src="{{ asset('assets/clients/img/best-product-1.jpg') }}"
                        class="img-fluid rounded-circle w-100" alt="">
                </div>
                <div class="col-6">
                    <a href="#" class="h5">Organic Tomato</a>
                    <div class="d-flex my-3">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="mb-3">3.12 $</h4>
                    <a href="#"
                        class="btn border border-secondary rounded-pill px-3 text-primary"><i
                            class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-4">
        <div class="p-4 rounded bg-light">
            <div class="row align-items-center">
                <div class="col-6">
                    <img src="{{ asset('assets/clients/img/best-product-2.jpg') }}"
                        class="img-fluid rounded-circle w-100" alt="">
                </div>
                <div class="col-6">
                    <a href="#" class="h5">Organic Tomato</a>
                    <div class="d-flex my-3">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="mb-3">3.12 $</h4>
                    <a href="#"
                        class="btn border border-secondary rounded-pill px-3 text-primary"><i
                            class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-4">
        <div class="p-4 rounded bg-light">
            <div class="row align-items-center">
                <div class="col-6">
                    <img src="{{ asset('assets/clients/img/best-product-3.jpg') }}"
                        class="img-fluid rounded-circle w-100" alt="">
                </div>
                <div class="col-6">
                    <a href="#" class="h5">Organic Tomato</a>
                    <div class="d-flex my-3">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="mb-3">3.12 $</h4>
                    <a href="#"
                        class="btn border border-secondary rounded-pill px-3 text-primary"><i
                            class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-4">
        <div class="p-4 rounded bg-light">
            <div class="row align-items-center">
                <div class="col-6">
                    <img src="{{ asset('assets/clients/img/best-product-4.jpg') }}"
                        class="img-fluid rounded-circle w-100" alt="">
                </div>
                <div class="col-6">
                    <a href="#" class="h5">Organic Tomato</a>
                    <div class="d-flex my-3">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="mb-3">3.12 $</h4>
                    <a href="#"
                        class="btn border border-secondary rounded-pill px-3 text-primary"><i
                            class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-4">
        <div class="p-4 rounded bg-light">
            <div class="row align-items-center">
                <div class="col-6">
                    <img src="{{ asset('assets/clients/img/best-product-5.jpg') }}"
                        class="img-fluid rounded-circle w-100" alt="">
                </div>
                <div class="col-6">
                    <a href="#" class="h5">Organic Tomato</a>
                    <div class="d-flex my-3">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="mb-3">3.12 $</h4>
                    <a href="#"
                        class="btn border border-secondary rounded-pill px-3 text-primary"><i
                            class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-4">
        <div class="p-4 rounded bg-light">
            <div class="row align-items-center">
                <div class="col-6">
                    <img src="{{ asset('assets/clients/img/best-product-6.jpg') }}"
                        class="img-fluid rounded-circle w-100" alt="">
                </div>
                <div class="col-6">
                    <a href="#" class="h5">Organic Tomato</a>
                    <div class="d-flex my-3">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="mb-3">3.12 $</h4>
                    <a href="#"
                        class="btn border border-secondary rounded-pill px-3 text-primary"><i
                            class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="text-center">
            <img src="{{ asset('assets/clients/img/fruite-item-1.jpg') }}" class="img-fluid rounded"
                alt="">
            <div class="py-4">
                <a href="#" class="h5">Organic Tomato</a>
                <div class="d-flex my-3 justify-content-center">
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4 class="mb-3">3.12 $</h4>
                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                        class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="text-center">
            <img src="{{ asset('assets/clients/img/fruite-item-2.jpg') }}" class="img-fluid rounded"
                alt="">
            <div class="py-4">
                <a href="#" class="h5">Organic Tomato</a>
                <div class="d-flex my-3 justify-content-center">
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4 class="mb-3">3.12 $</h4>
                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                        class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="text-center">
            <img src="{{ asset('assets/clients/img/fruite-item-3.jpg') }}" class="img-fluid rounded"
                alt="">
            <div class="py-4">
                <a href="#" class="h5">Organic Tomato</a>
                <div class="d-flex my-3 justify-content-center">
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4 class="mb-3">3.12 $</h4>
                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                        class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="text-center">
            <img src="{{ asset('assets/clients/img/fruite-item-4.jpg') }}" class="img-fluid rounded"
                alt="">
            <div class="py-2">
                <a href="#" class="h5">Organic Tomato</a>
                <div class="d-flex my-3 justify-content-center">
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star text-primary"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4 class="mb-3">3.12 $</h4>
                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                        class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
            </div>
        </div>
    </div>
</div>
@endsection