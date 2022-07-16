<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight fw-bold" style="color:#433123;">
            {{ __('Shop') }}
        </h2>
    </x-slot>
    <section class="pt-5 pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    <form action="{{route('shop.index')}}" method="get">
                        @csrf
                        <input type="text" class="form-control shadow-none mb-3" name="search" placeholder="Search by name, style, type..." value="{{request()->query('search')}}">
                    </form>
                    <div class="card mb-3 bg-white border-white rounded-0">
                        <div class="card-body">
                            <form action="{{route('shop.sort_type')}}" method="get">
                                @csrf
                                <p>Sort by type</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="category" value="Bodycon">
                                    <label class="form-check-label" for="category">
                                        Bodycon
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Cami" name="category">
                                    <label class="form-check-label" for="category">
                                        Cami
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Graphic" name="category">
                                    <label class="form-check-label" for="category">
                                        Graphic
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Polo" name="category">
                                    <label class="form-check-label" for="category">
                                        Polo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Romper" name="category">
                                    <label class="form-check-label" for="category">
                                        Romper
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Shirt" name="category">
                                    <label class="form-check-label" for="category">
                                        Shirt
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Tee" name="category">
                                    <label class="form-check-label" for="category">
                                        Tee
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Tie dye" name="category">
                                    <label class="form-check-label" for="category">
                                        Tie dye
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Top" name="category">
                                    <label class="form-check-label" for="category">
                                        Top
                                    </label>
                                </div>
                                <button class="mt-2 btn btn-sm btn-dark" type="submit"> Filter</button>
                                <a class="mt-1 btn btn-sm btn-light" href="{{route('shop.index')}}"> Reset</a>
                            </form>
                        </div>
                    </div>
                    <div class="card border-white rounded-0 mb-3">
                        <div class="card-body">
                            <form action="{{route('shop.sort_price')}}" method="get">
                                @csrf
                                <label for="formControlRange" class="">Select price range</label>
                                <input type="range" name="price" class="w-75 form-range" min="{{$cheapest_apparel}}" max="{{$expensive_apparel}}" id="formControlRange" onChange="document.getElementById('rangeval').innerText = document.getElementById('formControlRange').value">
                                <span id="rangeval">0</span>
                                <button class="mt-2 btn btn-sm btn-dark" type="submit"> Filter</button>
                                <a class="mt-1 btn btn-sm btn-light" href="{{route('shop.index')}}"> Reset</a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="mx-auto d-flex justify-content-center">{{ $apparels->appends(['search'=>request()->query('search')])->links() }}</div>
                        @foreach($apparels as $apparel)
                        <div class="col-sm-3 mb-2 d-flex justify-content-center">
                            <div class="card rounded-0 border-white" style="width: 15rem; height:22rem;">
                                <div class="overflow-hidden">
                                    <a href="{{route('shop.addtocart', [$apparel->id, $apparel->type])}}"><img class="" src="{{asset('images')}}/{{$apparel->image}}" style="width:14.5rem; height:16rem; margin:2px 2px 2px 2px;" alt="{{$apparel->name}}"></a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-3" style="font-size:16px;">{{ucwords($apparel->name)}}</h5>
                                    <span class="badge rounded-pill text-bg-dark float-end">{{$apparel->type}}</span>
                                    <br>
                                    <small class="float-end fw-bold" style="color:#fa6338">P{{number_format($apparel->retailPrice,2)}} </small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>