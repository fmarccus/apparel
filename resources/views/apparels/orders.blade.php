<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <!-- @if(session()->has('deleted'))
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Apparel deleted',
                    })
                </script>
                @else
                @endif -->
                <div class="col-sm-12">
                    <div class="d-flex mb-3">
                        <div class="p-2">
                            <form action="{{route('apparel.orders')}}" method="get">
                                @csrf
                                <input type="text" class="form-control shadow-none" name="search" placeholder="Search by name, sku, type..." value="{{request()->query('search')}}">
                            </form>
                        </div>
                        <div class="p-2">

                        </div>
                        <div class="p-2">

                        </div>

                        <div class="ms-auto p-2"></div>

                    </div>
                    <table class="table bg-white table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>User ID</th>
                                <th>Item ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Last Updated</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td><a href="{{route('apparel.order_details', $order->id)}}">{{$order->id}}</a></td>
                                <td>{{$order->user_id}}</td>
                                <td>{{$order->item_id}}</td>
                                <td>{{$order->item_name}}</td>
                                <td><img class="img-thumbnail mx-auto" src="{{asset('images')}}/{{$order->item_image}}" style="width:6rem; height:8rem; margin:2px 2px 2px 2px;" alt=""></td>
                                <td> @if($order->item_status == "Pending")
                                    <span class="badge rounded-pill bg-warning">{{$order->item_status}}</span>
                                    @elseif($order->item_status == "To receive")
                                    <span class="badge rounded-pill bg-info">{{$order->item_status}}</span>
                                    @elseif($order->item_status == "Completed")
                                    <span class="badge rounded-pill bg-primary">{{$order->item_status}}</span>
                                    @endif
                                </td>
                                <td>{{$order->updated_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mx-auto d-flex justify-content-center p-5">{{ $orders->appends(['search'=>request()->query('search')])->links() }}</div>

                </div>
            </div>

        </div>
    </section>
</x-app-layout>