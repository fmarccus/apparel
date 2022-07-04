<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Order Details') }}
        </h2>
    </x-slot>
    <section class="pt-5 pb-5">
        <div class="container">
            <a href="{{route('apparel.orders')}}" class="btn btn-light mb-3 fw-bold">Return to Orders</a>

            <div class="row">

                <div class="col-sm-7">
                    <div class="card rounded-0 border-white">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img class="img-thumbnail mx-auto" src="{{asset('images')}}/{{$order->item_image}}" style="width:6rem; height:8rem; margin:2px 2px 2px 2px;" alt="">
                                </div>
                                <div class="col-sm-9">
                                    <table class="table table-bordered table-striped">

                                        <tbody>
                                            <tr>
                                                <td colspan="2" style="text-align: center; font-weight:bold">ORDER DETAILS</td>
                                            </tr>
                                            <tr>

                                                <td>ORDER ID</td>
                                                <td>{{$order->id}}</td>

                                            </tr>
                                            <tr>
                                                <td>ORDERED BY USER</td>
                                                <td>{{$order->user_id}}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="text-align: center; font-weight:bold">ITEM DETAILS</td>
                                            </tr>
                                            <tr>
                                                <td>ITEM NAME</td>
                                                <td>{{$order->item_name}}</td>
                                            </tr>
                                            <tr>
                                                <td>ITEM SIZE</td>
                                                <td>{{$order->item_size}}</td>
                                            </tr>
                                            <tr>
                                                <td>ITEM PRICE</td>
                                                <td>P{{number_format($order->item_price, 2)}}</td>
                                            </tr>
                                            <tr>
                                                <td>ITEM QUANTITY</td>
                                                <td>{{$order->item_qty}}</td>
                                            </tr>
                                            <tr>
                                                <td>ITEM TOTAL</td>
                                                <td>P{{number_format($order->item_total,2)}}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="text-align: center; font-weight:bold">TIMESTAMPS</td>
                                            </tr>
                                            <tr>
                                                <td>ORDER DATE</td>
                                                <td>{{$order->created_at}}</td>
                                            </tr>
                                            <tr>
                                                <td>LAST UPDATE</td>
                                                <td>{{$order->updated_at}}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </section>
</x-app-layout>