<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Completed Orders') }}
        </h2>
    </x-slot>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-sm-12">
                    @foreach($completed_orders as $completed_order)
                    <div class="card mb-3 rounded-0 border-white">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-sm-2">
                                    <a href="/shop/apparels/addtocart/{{$completed_order->item_id}}/{{$completed_order->item_type}}" title="{{$completed_order->item_name}}">
                                        <img class="img-thumbnail" src="{{asset('images')}}/{{$completed_order->item_image}}" style="width:14.5rem; height:16rem; margin:2px 2px 2px 2px;" alt="">
                                    </a>
                                </div>
                                <div class="col-sm-10">

                                    @if($completed_order->item_status == "Pending")
                                    <span class="float-end badge rounded-pill bg-warning">{{$completed_order->item_status}}</span>
                                    @elseif($completed_order->item_status == "For delivery")
                                    <span class="float-end badge rounded-pill bg-info">{{$completed_order->item_status}}</span>
                                    @elseif($completed_order->item_status == "Completed")
                                    <span class="float-end badge rounded-pill bg-primary">{{$completed_order->item_status}}</span>
                                    @endif

                                    </p>
                                    <p class="card-text mt-5 fw-bold" style="font-size:16px;">{{$completed_order->item_name}}</p>
                                    <p class="text-muted" style="font-size:12px"> Variation: {{$completed_order->item_size}}</p>
                                    <p class="card-text" style="font-size:14px">x{{$completed_order->item_qty}}</p>
                                    <p class="float-end">Total: <span class="fw-bold" style="color:#fa6338">P{{number_format($completed_order->item_total, 2)}}</span> </p>
                                    <br><br><br>
                                    <p class="text-muted">Order completed at: {{$completed_order->updated_at}}</p>
                                </div>

                            </div>

                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </section>
</x-app-layout>