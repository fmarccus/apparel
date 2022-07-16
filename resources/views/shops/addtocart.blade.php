<style>
    ol li {
        list-style: decimal;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add to cart') }}
        </h2>
    </x-slot>
    <section class="pt-5 pb-5">
        <div class="container">
            <a href="{{route('shop.index')}}" class="btn btn-light mb-3 fw-bold">Return to Shop</a>

            <div class="row justify-content-center">
                @if(session()->has('success'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Item added to cart',
                        footer: '<a href="/cart">Check my cart</a>'
                    })
                </script>
                @else
                @endif
                <div class="col-sm-6">
                    <img src="{{asset('images')}}/{{$apparel->image}}" class="img-fluid" alt="{{$apparel->name}}">
                </div>
                <div class="col-sm-6">
                    <div class="card border-white rounded-0">
                        <div class="card-body">
                            <h4 class="card-title">{{ucwords($apparel->name)}}</h4>
                            <p class="card-text text-secondary">SKU: {{$apparel->sku}}</p>
                            <h3 class="fw-bolder" style="color:#fa6338">P{{number_format($apparel->retailPrice,2)}}</h3>
                            <hr>
                            <form action="{{route('shop.confirmitem')}}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="item_size" class="form-label fw-bold">Size</label>
                                    <select class="w-50 form-select shadow-none @error('item_size') is-invalid @enderror" name="item_size" id="item_size">
                                        <option selected>Select size</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                    </select>
                                    @error('item_size')
                                    <small id="helpId" class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        <label for="item_qty" class="form-label fw-bold">Quantity</label>
                                        <input type="number" min="1" max="100" class="form-control shadow-none w-50 @error('item_qty') is-invalid @enderror" name="item_qty" id="item_qty">
                                        @error('item_qty')
                                        <small id="helpId" class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                        <input type="hidden" name="user_id" value="{{Crypt::encrypt($user_id)}}">
                                        <input type="hidden" name="item_id" value="{{Crypt::encrypt($apparel->id)}}">
                                        <input type="hidden" name="item_name" value="{{Crypt::encrypt($apparel->name)}}">
                                        <input type="hidden" name="item_type" value="{{Crypt::encrypt($apparel->type)}}">
                                        <input type="hidden" name="orig_price" value="{{Crypt::encrypt($apparel->purchasePrice)}}">
                                        <input type="hidden" name="item_price" value="{{Crypt::encrypt($apparel->retailPrice)}}">
                                        <input type="hidden" name="item_image" value="{{Crypt::encrypt($apparel->image)}}">


                                    </div>
                                </div>
                                <div class="mb-4">
                                    <!-- Button trigger modal -->
                                    <a type="button" class="text-dark text-sm" data-bs-toggle="modal" data-bs-target="#modelId">
                                        <i class="fa-solid fa-ruler-horizontal me-2"></i>Size Guide
                                    </a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content rounded-0">
                                                <div class="modal-body">
                                                    <p class="text-center fw-bolder mt-5 mb-5">Size Guide</p>
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" style="font-size:12px">
                                                            <thead>
                                                                <tr>
                                                                    <th>Size</th>
                                                                    <th>Sleeve Length</th>
                                                                    <th>Top Length</th>
                                                                    <th>Bust</th>
                                                                    <th>Waist Size</th>
                                                                    <th>Hip Size</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>S</td>
                                                                    <td>24</td>
                                                                    <td>72</td>
                                                                    <td>72</td>
                                                                    <td>62-94</td>
                                                                    <td>83</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>M</td>
                                                                    <td>25.2</td>
                                                                    <td>74</td>
                                                                    <td>76</td>
                                                                    <td>66-98</td>
                                                                    <td>87</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>L</td>
                                                                    <td>26.4</td>
                                                                    <td>76</td>
                                                                    <td>81</td>
                                                                    <td>71-103</td>
                                                                    <td>92</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <hr>
                                                    <small class="text-muted" style="font-size:11px">*Data obtained was manually obtained from measuring the product, it may be off 1-2CM.</small>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 d-grid">
                                    <button type="submit" class="btn btn-dark text-uppercase rounded-0" style="font-size:1.2rem;">Add to Cart</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-4 p-1 bg-white rounded-0">
                        <div class="container">
                            <!-- Button trigger modal -->
                            <a type="button" class="text-dark fw-bold text-decoration-none text-sm mt-3" data-bs-toggle="modal" data-bs-target="#shipping">
                                <i class="fa-solid fa-truck me-2"></i>Free Shipping <br>
                                <small class="text-muted">Learn More</small>
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="shipping" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content rounded-0">
                                        <div class="modal-body">
                                            <p class="fw-bolder mt-5 text-center">Shipping Info</p>
                                            <hr>
                                            <small class="text-muted mb-5">Shipping to: Philippines</small><br><br>
                                            <small class="text-success text-uppercase mb-5">Free Standard Shipping</small><br><br>
                                            <table class="table table-bordered table-striped text-center" style="font-size:12px">
                                                <thead>
                                                    <tr>
                                                        <th>Shipping Method</th>
                                                        <th>Shipping Time</th>
                                                        <th>Costs</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-uppercase">Standard Shipping</td>
                                                        <td>Estimated to be delivered on</td>
                                                        <td class="p-5">Free Shipping Sitewide</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <!-- Button trigger modal -->
                            <a type="button" class="text-dark fw-bold text-decoration-none text-sm" data-bs-toggle="modal" data-bs-target="#cod">
                                <i class="fa-solid fa-hand-holding-dollar me-2"></i>COD Policy <br>
                                <small class="text-muted">Learn More</small>
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="cod" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content rounded-0">
                                        <div class="modal-body">
                                            <p class="fw-bolder text-center mt-5">COD Policy</p>
                                            <hr>
                                            <small class="text-muted">The subtotal of the order shall not exceed 10500 PHP</small>
                                            <br><br>
                                            <small class="text-muted"> COD fee is free for COD orders.</small>
                                            <br><br>
                                            <small class="text-muted"> We do not support opening the package for inspection.</small>
                                            <br><br>
                                            <small class="text-dark"> Cash on delivery is not supported in these situations:</small>
                                            <ol class="text-muted" style="font-size:12px">
                                                <li>The selected city does not support COD service at present.</li>
                                                <li>Incorrect phone number format</li>
                                                <li>According to your historical order records, your COD service has been suspended</li>
                                            </ol>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <!-- Button trigger modal -->
                            <a type="button" class="text-dark fw-bold text-decoration-none text-sm" data-bs-toggle="modal" data-bs-target="#return">
                                <i class="fa-solid fa-shield-halved me-2"></i>Return Policy <br>
                                <small class="text-muted">Learn More</small>
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="return" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content rounded-0">

                                        <div class="modal-body">
                                            <p class="fw-bolder text-center mt-5">COD Policy</p>
                                            <hr>
                                            <small class="text-danger">Items in this category are not able to be returned or exchanged, please understand.</small>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 p-1 bg-white rounded-0">
                        <div class="container">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                            <i class="fa-solid fa-plus me-2"></i>Description
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="text-sm">Color:</p>
                                                    <p class="text-sm">Style:</p>
                                                    <p class="text-sm">Type:</p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="text-sm">{{$apparel->color}}</p>
                                                    <p class="text-sm">{{$apparel->style}}</p>
                                                    <p class="text-sm">{{$apparel->type}}</p>
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

            <div class="row mt-5">
                <h3 class="fw-bold mb-3">Customers Also Viewed</h3>
                @foreach($related_apparels as $related_apparel)
                <div class="col-sm-3 mb-2 d-flex justify-content-center">
                    <div class="card rounded-0 border-white" style="width: 15rem; height:22rem;">
                        <div class="overflow-hidden">
                            <a href="{{route('shop.addtocart', [$related_apparel->id, $related_apparel->type])}}"><img class="" src="{{asset('images')}}/{{$related_apparel->image}}" style="width:14.5rem; height:16rem; margin:2px 2px 2px 2px;" alt="{{$apparel->name}}"></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center mb-3" style="font-size:16px;">{{ucwords($related_apparel->name)}}</h5>
                            <span class="badge rounded-pill text-bg-dark float-end">{{$related_apparel->type}}</span>
                            <br>
                            <small class="float-end fw-bold" style="color:#fa6338">P{{number_format($related_apparel->retailPrice,2)}} </small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>