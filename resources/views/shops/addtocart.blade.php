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
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title fw-bold">Size Guide</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Content here
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 d-grid">
                                    <button type="submit" class="btn btn-dark btn-lg text-uppercase fw-bolder rounded-0">Add to Cart</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-4 p-1 bg-white rounded-0">
                        <div class="container">
                            <!-- Button trigger modal -->
                            <a type="button" class="text-dark fw-bold text-decoration-none text-sm mt-3" data-bs-toggle="modal" data-bs-target="#shipping">
                                <i class="fa-solid fa-truck me-2"></i>Free Shipping <br>
                                <small class="text-muted">Estimated delivery on</small>
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="shipping" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fw-bold">Shipping Information</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Body
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
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
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fw-bold">COD Policy</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            COD Policy
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
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
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fw-bold">Return Policy</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Return Policy
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
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
                <h4 class="fw-bold mb-3">Customers Also Viewed</h4>
                @foreach($related_apparels as $related_apparel)
                <div class="col-sm-3 mb-2 d-flex justify-content-center">
                    <div class="card rounded-0 border-white" style="width: 15rem; height:22rem;">
                        <div class="overflow-hidden">
                            <a href="{{route('shop.addtocart', [$related_apparel->id, $related_apparel->type])}}"><img class="img-thumbnail" src="{{asset('images')}}/{{$related_apparel->image}}" style="width:14.5rem; height:16rem; margin:2px 2px 2px 2px;" alt="{{$apparel->name}}"></a>
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