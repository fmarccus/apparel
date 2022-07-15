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
                            <p class="card-text">total apparels</p>
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
                <h4 class="mt-5">Apparels by Category</h4>
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
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card border-white rounded-0">
                        <div class="card-body">
                            <h4 class="card-title">P{{number_format($gross_sales,2)}}</h4>
                            <p class="card-text">target gross sales</p>
                            <h4 class="card-title">P{{number_format($curr_gross_sales,2)}}</h4>
                            <p class="card-text">current gross sales</p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card border-white rounded-0">
                        <div class="card-body">
                            <h4 class="card-title">P{{number_format($profit,2)}}</h4>
                            <p class="card-text">target profit</p>
                            <h4 class="card-title">P{{number_format($curr_profit,2)}}</h4>
                            <p class="card-text">current profit</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-app-layout>