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
                <h4 class="mt-5">Apparels by Category</h4>
                <div class="progress mt-2 mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$bodycon}}" aria-valuemin="0" aria-valuemax="{{$bodycon}}" style="width: {{$bodycon}}%">{{$bodycon}} bodycon</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$cami}}" aria-valuemin="0" aria-valuemax="{{$cami}}" style="width: {{$cami}}%">{{$cami}} cami</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$graphic}}" aria-valuemin="0" aria-valuemax="{{$graphic}}" style="width: {{$graphic}}%">{{$graphic}} graphic</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$polo}}" aria-valuemin="0" aria-valuemax="{{$polo}}" style="width: {{$polo}}%">{{$polo}} polo</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$romper}}" aria-valuemin="0" aria-valuemax="{{$romper}}" style="width: {{$romper}}%">{{$romper}} romper</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$shirt}}" aria-valuemin="0" aria-valuemax="{{$shirt}}" style="width: {{$shirt}}%">{{$shirt}} shirt</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$tee}}" aria-valuemin="0" aria-valuemax="{{$tee}}" style="width: {{$tee}}%">{{$tee}} tee</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$tiedye}}" aria-valuemin="0" aria-valuemax="{{$tiedye}}" style="width: {{$tiedye}}%">{{$tiedye}} tiedye</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$top}}" aria-valuemin="0" aria-valuemax="{{$top}}" style="width: {{$top}}%">{{$top}} top</div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>