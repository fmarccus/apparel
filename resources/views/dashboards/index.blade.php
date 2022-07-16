<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <section class="pt-5 pb-5">
        <div class="container">
            <!-- sidebar -->
            <button class="btn btn-dark mb-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                Show Sidebar
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Rye Apparels</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div>
                        <!-- Message -->
                    </div>
                    <ul class="list-group list-group-flush" aria-labelledby="dropdownMenuButton">
                        <li><a class="list-group-item" href="/dashboard">Home</a></li>
                        <li><a class="list-group-item" href="/apparels/dashboard">Dashboard</a></li>
                        <li><a class="list-group-item" href="/apparels">Inventory</a></li>
                        <li><a class="list-group-item" href="/orders">Orders</a></li>
                        <li><a class="list-group-item" href="/users">Manage Users</a></li>
                    </ul>

                </div>
            </div>
            <!-- sidebar -->
            <div class="row">
                <!-- USER DATA -->
                <h4>User Information</h4>

                <div class="col-sm-3 mb-2">
                    <div class="card border-white rounded-0">
                        <div class="card-body">
                            <h4 class="card-title">{{$users}}</h4>
                            <p class="card-text">users</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="card border-white rounded-0">
                        <div class="card-body">
                            <h4 class="card-title">{{$verified_users}}</h4>
                            <p class="card-text">verified users</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="card border-white rounded-0">
                        <div class="card-body">
                            <h4 class="card-title">{{$unverified_users}}</h4>
                            <p class="card-text">unverified users</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="card border-white rounded-0">
                        <div class="card-body">
                            <h4 class="card-title">{{$server_accounts}}</h4>
                            <p class="card-text">server accounts</p>
                        </div>
                    </div>
                </div>
                <!-- APPARELS -->
                <h4 class="mt-5">Basic Information</h4>
                <div class="col-sm-3 mb-2">
                    <div class="card border-white rounded-0" style="height:10rem;">
                        <div class="card-body">
                            <h4 class="card-title">{{$unique_apparels}}</h4>
                            <p class="card-text">unique apparels</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="card border-white rounded-0" style="height:10rem;">
                        <div class="card-body">
                            <h4 class="card-title">{{$quantity_apparels}}</h4>
                            <p class="card-text">total apparels on hand</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="card border-white rounded-0" style="height:10rem;">
                        <div class="card-body">
                            <h4 class="card-title">P{{number_format($cheapest_apparel,2)}}</h4>
                            <p class="card-text">cheapest apparel</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="card border-white rounded-0" style="height:10rem;">
                        <div class="card-body">
                            <h4 class="card-title">P{{number_format($expensive_apparel,2)}}</h4>
                            <p class="card-text">most expensive apparel</p>
                        </div>
                    </div>
                </div>
                <!-- APPARELS BY CATEGORY -->
                <h4 class="mt-5">Unique Apparels by Category</h4>
                <div class="progress mt-2 mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$bodycon}}" aria-valuemin="0" aria-valuemax="{{$bodycon}}" style="width: {{$bodycon+5}}%">{{$bodycon}} Bodycon</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$cami}}" aria-valuemin="0" aria-valuemax="{{$cami}}" style="width: {{$cami+5}}%">{{$cami}} Cami</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$graphic}}" aria-valuemin="0" aria-valuemax="{{$graphic}}" style="width: {{$graphic+5}}%">{{$graphic}} Graphic</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$polo}}" aria-valuemin="0" aria-valuemax="{{$polo}}" style="width: {{$polo+5}}%">{{$polo}} Polo</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$romper}}" aria-valuemin="0" aria-valuemax="{{$romper}}" style="width: {{$romper+5}}%">{{$romper}} Romper</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$shirt}}" aria-valuemin="0" aria-valuemax="{{$shirt}}" style="width: {{$shirt+5}}%">{{$shirt}} Shirt</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$tee}}" aria-valuemin="0" aria-valuemax="{{$tee}}" style="width: {{$tee+5}}%">{{$tee}} Tee</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$tiedye}}" aria-valuemin="0" aria-valuemax="{{$tiedye}}" style="width: {{$tiedye+5}}%">{{$tiedye}} Tiedye</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$top}}" aria-valuemin="0" aria-valuemax="{{$top}}" style="width: {{$top+5}}%">{{$top}} Top</div>
                </div>
                <!-- SHIPPING INFORMATION -->

                <h4 class="mt-5">Shipping Information</h4>
                <div class="col-sm-4">
                    <div class="card border-white rounded-0">
                        <div class="card-body">
                            <h4 class="card-title">{{$pending_orders}}</h4>
                            <p class="card-text">pending orders</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card border-white rounded-0">
                        <div class="card-body">
                            <h4 class="card-title">{{$for_delivery_orders}}</h4>
                            <p class="card-text">for delivery</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card border-white rounded-0">
                        <div class="card-body">
                            <h4 class="card-title">{{$completed_orders}}</h4>
                            <p class="card-text">orders completed</p>
                        </div>
                    </div>
                </div>
                <!-- SALES INFORMATION -->
                <h4 class="mt-5">Sales Information</h4>
                <div class="col-sm-4">
                    <div class="card border-white rounded-0">
                        <div class="card-body">
                            <h4 class="card-title">P{{number_format($expenditures,2)}}</h4>
                            <p class="card-text">expenditure</p>
                            <h4 class="card-title">{{number_format($apparels_sold,0)}} <small class="text-success">({{number_format($apparels_sold/$quantity_apparels,5)}}%)</small> </h4>
                            <p class="card-text">apparels sold</p>
                            <h4 class="card-title">{{number_format($quantity_apparels,0)}} <small class="text-danger">({{(1 - number_format($apparels_sold/$quantity_apparels,5))*100}}%)</small></h4>
                            <p class="card-text">remaining to be sold</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card border-white rounded-0">
                        <div class="card-body">
                            <h4 class="card-title">P{{number_format($target_gross_sales,2)}}</h4>
                            <p class="card-text">target gross sales</p>
                            <h4 class="card-title">P{{number_format($curr_gross_sales,2)}} <small class="text-success">({{number_format($curr_gross_sales/$target_gross_sales,5)}}%)</small></h4>
                            <p class="card-text">current gross sales</p>
                            <h4 class="card-title">P{{number_format($diff_gross_sales,2)}} <small class="text-danger">({{(1 - number_format($curr_gross_sales/$target_gross_sales,5))*100}}%)</small></h4>
                            <p class="card-text">remaining to reach target gross sales</p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card border-white rounded-0">
                        <div class="card-body">
                            <h4 class="card-title">P{{number_format($target_profit,2)}}</h4>
                            <p class="card-text">target profit</p>
                            <h4 class="card-title">P{{number_format($curr_profit,2)}} <small class="text-success">({{number_format($curr_profit/$target_profit,5)}}%)</small></h4>
                            <p class="card-text">current profit</p>
                            <h4 class="card-title">P{{number_format($diff_profit,2)}} <small class="text-danger">({{(1 - number_format($curr_profit/$target_profit,5))*100}}%)</small></h4>
                            <p class="card-text">remaining to reach target profit</p>
                        </div>
                    </div>
                </div>
                <h4 class="mt-5">Apparel Statistics</h4>
                <div class="col-sm-4">
                    <div class="card border-white rounded-0">
                        <div class="card-body">
                            <h5 class="card-title">Most sold apparels</h5>
                            <ul class="list-group list-group-flush">
                                @foreach($most_sold_apparels as $most_sold_apparel)
                                <li class="list-group-item"> <a href="/apparels/edit/{{$most_sold_apparel->item_id}}">{{$most_sold_apparel->item_name}} <span class="text-info fw-bold">({{$most_sold_apparel->item_qty}})</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card border-white rounded-0">
                        <div class="card-body">
                            <h5 class="card-title">Most carted apparels</h5>
                            <ul class="list-group list-group-flush">
                                @foreach($most_carted_apparels as $most_carted_apparel)
                                <li class="list-group-item"> <a href="/apparels/edit/{{$most_sold_apparel->item_id}}">{{$most_carted_apparel->item_name}} <span class="text-info fw-bold">({{$most_sold_apparel->item_qty}})</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card border-white rounded-0">
                        <div class="card-body">
                            <h5 class="card-title">Least sold apparels</h5>
                            <ul class="list-group list-group-flush">
                                @foreach($least_sold_apparels as $least_sold_apparel)
                                <li class="list-group-item"> <a href="/apparels/edit/{{$most_sold_apparel->item_id}}">{{$least_sold_apparel->item_name}} <span class="text-info fw-bold">({{$most_sold_apparel->item_qty}})</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>