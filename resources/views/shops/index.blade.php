<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Shop') }}
        </h2>
    </x-slot>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-sm-12">
                    <div class="d-flex mb-3">
                        <div class="p-2">
                            <form action="{{route('shop.index')}}" method="get">
                                @csrf
                                <input type="text" class="form-control shadow-none" name="search" placeholder="Search by name, style, type..." value="{{request()->query('search')}}">
                            </form>
                        </div>
                        <div class="p-2">

                        </div>
                        <div class="p-2">

                        </div>

                    </div>
                    <div class="row">
                        @foreach($apparels as $apparel)
                        <div class="col-sm-3 mb-2 d-flex justify-content-center">

                            <div class="card rounded-0 border-white" style="width: 15rem; height:22rem;">
                                <div class="overflow-hidden">
                                    <a href="{{route('shop.addtocart', $apparel->id)}}"><img class="img-thumbnail" src="{{asset('images')}}/{{$apparel->image}}" style="width:14.5rem; height:16rem; margin:2px 2px 2px 2px;" alt="{{$apparel->name}}"></a>
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
            <div class="mx-auto d-flex justify-content-center p-5">{{ $apparels->appends(['search'=>request()->query('search')])->links() }}</div>
        </div>
    </section>
</x-app-layout>