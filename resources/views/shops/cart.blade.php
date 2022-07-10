<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cart') }}
        </h2>
    </x-slot>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                @if(session()->has('deleted'))
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Item removed from cart',
                    })
                </script>
                @else
                @endif
                <div class="col-sm-12">
                    @foreach($items as $item)
                    <div class="card mb-3 rounded-0 border-white">
                        <div class="card-body">
                            <div class="row">
                                <a href="{{route('shop.removefromcart', $item->id)}}" onclick="return confirm('Are you sure you want to delete this item from your cart?')"><i class="text-dark fa-lg ms-2 fa-solid fa-rectangle-xmark"></i></a>
                                <div class="col-sm-2">
                                    <a href="/shop/apparels/addtocart/{{$item->item_id}}" title="{{$item->item_name}}">
                                        <img class="img-thumbnail" src="{{asset('images')}}/{{$item->item_image}}" style="width:14.5rem; height:16rem; margin:2px 2px 2px 2px;" alt="">
                                    </a>
                                </div>
                                <div class="col-sm-10">

                                    @if($item->item_status == "Pending")
                                    <span class="float-end badge rounded-pill bg-warning">{{$item->item_status}}</span>
                                    @elseif($item->item_status == "For delivery")
                                    <span class="float-end badge rounded-pill bg-info">{{$item->item_status}}</span>
                                    @elseif($item->item_status == "Completed")
                                    <span class="float-end badge rounded-pill bg-primary">{{$item->item_status}}</span>
                                    @endif

                                    </p>
                                    <p class="card-text mt-5 fw-bold" style="font-size:16px;">{{$item->item_name}}</p>
                                    <p class="text-muted" style="font-size:12px"> Variation: {{$item->item_size}}</p>
                                    <p class="card-text" style="font-size:14px">x{{$item->item_qty}}</p>
                                    <p class="float-end">Item Price: <span class="fw-bold" style="color:#fa6338">P{{number_format($item->item_total, 2)}}</span> </p>
                                </div>

                            </div>

                        </div>
                    </div>

                    @endforeach
                    <div class="col-sm-12">
                        <div class="card rounded-0 border-white" style="height:5rem">
                            <div class="card-body">
                                <p class="card-text float-end fw-bold"> Total: <span style="font-size:20px; color:#fa6338">P{{number_format($total_amount,2)}}</span> <button class="ms-3 btn btn-dark rounded-0">Check Out</button></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>