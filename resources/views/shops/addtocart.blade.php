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
                <div class="col-sm-6">
                    <img src="{{asset('images')}}/{{$apparel->image}}" class="img-fluid" alt="{{$apparel->name}}">
                </div>
                <div class="col-sm-6">
                    <div class="card border-white rounded-0">
                        <div class="card-body">
                            <h4 class="card-title">{{ucwords($apparel->name)}}</h4>
                            <p class="card-text text-secondary">SKU: {{$apparel->sku}}</p>
                            <h3 class="text-danger fw-bolder">Php {{number_format($apparel->retailPrice,2)}}</h3>
                            <hr>
                            <form action="" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">Size</label>
                                    <select class="w-50 form-select shadow-none @error('size') is-invalid @enderror" name="size" id="size">
                                        <option selected>Select size</option>
                                        <option value="">S</option>
                                        <option value="">M</option>
                                        <option value="">L</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        <label for="qty" class="form-label fw-bold">Quantity</label>
                                        <input type="number" min=1 max=100 class="form-control shadow-none w-50" name="qty" id="qty">
                                    
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
        </div>
    </section>
</x-app-layout>


<script>
    $(document).ready(function() {

        var quantitiy = 0;
        $('.quantity-right-plus').click(function(e) {

            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            $('#quantity').val(quantity + 1);


            // Increment

        });

        $('.quantity-left-minus').click(function(e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            // Increment
            if (quantity > 0) {
                $('#quantity').val(quantity - 1);
            }
        });

    });
</script>