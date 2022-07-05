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
                @if(session()->has('updated'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Item status updated successfully',
                        footer: '<a href="/orders">Return to orders</a>'
                    })
                </script>
                @else
                @endif
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
                                                <td>STATUS</td>
                                                <td>
                                                    @if($order->item_status == "Pending")
                                                    <span class="badge rounded-pill bg-warning">{{$order->item_status}}</span>
                                                    @elseif($order->item_status == "For delivery")
                                                    <span class="badge rounded-pill bg-info">{{$order->item_status}}</span>
                                                    @elseif($order->item_status == "Completed")
                                                    <span class="badge rounded-pill bg-primary">{{$order->item_status}}</span>
                                                    @endif
                                                </td>
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
                                    <form action="{{route('apparel.change_order_status' ,$order->id)}}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <input type="hidden" name="item_id" value="{{Crypt::encrypt($order->item_id)}}">
                                            <input type="hidden" name="item_qty" value="{{Crypt::encrypt($order->item_qty)}}">

                                            <label for="item_status" class="form-label">Item Status</label>
                                            <select class="form-control shadow-none @error('item_status') is-invalid @enderror" name="item_status" id="item_status">
                                                <option value="">Select item status</option>
                                                <option>Pending</option>
                                                <option>For delivery</option>
                                                <option>Completed</option>
                                            </select>
                                            @error('item_status')
                                            <small id="helpId" class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                        <button onclick="return confirm('Change item status?')" class="btn btn-dark" type="submit">Done</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
</x-app-layout>