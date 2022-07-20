<style>
    .gradient-blue {
        background: linear-gradient(45deg, #4099ff, #73b4ff);
    }

    .gradient-green {
        background: rgb(51, 222, 183);
        background: linear-gradient(90deg, rgba(51, 222, 183, 1) 35%, rgba(74, 221, 180, 1) 70%, rgba(180, 231, 194, 1) 100%);
    }

    .gradient-yellow {
        background: #CAC531;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #F3F9A7, #CAC531);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #F3F9A7, #CAC531);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    .gradient-pink {
        background: #800080;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #ffc0cb, #800080);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #ffc0cb, #800080);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

    .velvet-sun {
        background: #e1eec3;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #f05053, #e1eec3);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #f05053, #e1eec3);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

    .orange-coral {
        background: #ff9966;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #ff5e62, #ff9966);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #ff5e62, #ff9966);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

    .relay {
        background: #3A1C71;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #FFAF7B, #D76D77, #3A1C71);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #FFAF7B, #D76D77, #3A1C71);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    .broken-hearts {
        background: #F2994A;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #F2C94C, #F2994A);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #F2C94C, #F2994A);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    .teal-love {
        background: #AAFFA9;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #11FFBD, #AAFFA9);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #11FFBD, #AAFFA9);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

    .aqualicious {
        background: #50C9C3;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #96DEDA, #50C9C3);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #96DEDA, #50C9C3);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

    .opa {
        background: #DAE2F8;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to top, #D6A4A4, #DAE2F8);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to top, #D6A4A4, #DAE2F8);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

    .lunada {
        background: #ECE9E6;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #FFFFFF, #ECE9E6);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #FFFFFF, #ECE9E6);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */



    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <section class="pt-5 pb-5">
        <div class="container">


            <div class="row">
                <!-- USER DATA -->
                <h2 class="text-center">User Information</h2>
                <hr>

                <div class="col-sm-3 mb-2">
                    <div class="card border-white rounded-0 gradient-blue text-light" style="height:8rem">
                        <div class="card-body">
                            <h1 class="card-title ">{{$users}}</h1>
                            <p class="card-text ">registered users</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="card border-white rounded-0 gradient-green text-light" style="height:8rem">
                        <div class="card-body">
                            <h1 class="card-title">{{$verified_users}}</h1>
                            <p class="card-text">verified users</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="card border-white rounded-0 gradient-yellow text-light" style="height:8rem">
                        <div class="card-body">
                            <h1 class="card-title">{{$unverified_users}}</h1>
                            <p class="card-text">unverified users</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="card border-white rounded-0 gradient-pink text-light" style="height:8rem">
                        <div class="card-body">
                            <h1 class="card-title">{{$server_accounts}}</h1>
                            <p class="card-text">server accounts</p>
                        </div>
                    </div>
                </div>
                <!-- APPARELS -->
                <h2 class="mt-5 text-center">Inventory Information</h4>
                    <hr>
                    <div class="col-sm-3 mb-2">
                        <div class="card border-white rounded-0 velvet-sun text-light" style="height:10rem;">
                            <div class="card-body">
                                <h1 class="card-title">{{$unique_apparels}}</h1>
                                <p class="card-text">unique apparels</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-2">
                        <div class="card border-white rounded-0 orange-coral text-light" style="height:10rem;">
                            <div class="card-body">
                                <h1 class="card-title">{{$quantity_apparels}}</h1>
                                <p class="card-text">total apparels on hand</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-2">
                        <div class="card border-white rounded-0 broken-hearts text-light" style="height:10rem;">
                            <div class="card-body">
                                <h1 class="card-title">P{{number_format($cheapest_apparel,2)}}</h1>
                                <p class="card-text">cheapest apparel</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-2">
                        <div class="card border-white rounded-0 relay text-light" style="height:10rem;">
                            <div class="card-body">
                                <h1 class="card-title">P{{number_format($expensive_apparel,2)}}</h4>
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

                    <h2 class="mt-5 text-center">Shipping Information</h2>
                    <hr>
                    <div class="col-sm-4 mb-2">
                        <div class="card border-white rounded-0 opa text-light" style="height:10rem">
                            <div class="card-body">
                                <h1 class="card-title">{{$pending_orders}}</h4>
                                    <p class="card-text">pending orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-2">
                        <div class="card border-white rounded-0 aqualicious text-light" style="height:10rem">
                            <div class="card-body">
                                <h1 class="card-title">{{$for_delivery_orders}}</h1>
                                <p class="card-text">for delivery</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-2">
                        <div class="card border-white rounded-0 teal-love text-light" style="height:10rem">
                            <div class="card-body">
                                <h1 class="card-title">{{$completed_orders}}</h1>
                                <p class="card-text">orders completed</p>
                            </div>
                        </div>
                    </div>
                    <!-- SALES INFORMATION -->
                    <h2 class="mt-5 text-center">Sales Information</h2>
                    <hr>
                    <div class="col-sm-4 mb-2">
                        <div class="card border-white rounded-0 lunada">
                            <div class="card-body">
                                <h1 class="card-title">P{{number_format($expenditures,2)}}</h4>
                                    <p class="card-text">expenditure</p>
                                    <h1 class="card-title">{{number_format($apparels_sold,0)}} <small class="text-success">({{number_format($apparels_sold/$quantity_apparels,5)}}%)</small> </h1>
                                    <p class="card-text">apparels sold</p>
                                    <h1 class="card-title">{{number_format($quantity_apparels,0)}} <small class="text-danger">({{(1 - number_format($apparels_sold/$quantity_apparels,5))*100}}%)</small></h1>
                                    <p class="card-text">remaining to be sold</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-2">
                        <div class="card border-white rounded-0 lunada">
                            <div class="card-body">
                                <h1 class="card-title">P{{number_format($target_gross_sales,2)}}</h1>
                                <p class="card-text">target gross sales</p>
                                <h1 class="card-title">P{{number_format($curr_gross_sales,2)}} <small class="text-success">({{number_format($curr_gross_sales/$target_gross_sales,5)}}%)</small></h1>
                                <p class="card-text">current gross sales</p>
                                <h1 class="card-title">P{{number_format($diff_gross_sales,2)}} <small class="text-danger">({{(1 - number_format($curr_gross_sales/$target_gross_sales,5))*100}}%)</small></h4>
                                    <p class="card-text">remaining to reach target gross sales</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-2">
                        <div class="card border-white rounded-0 lunada">
                            <div class="card-body">
                                <h1 class="card-title">P{{number_format($target_profit,2)}}</h4>
                                    <p class="card-text">target profit</p>
                                    <h1 class="card-title">P{{number_format($curr_profit,2)}} <small class="text-success">({{number_format($curr_profit/$target_profit,5)}}%)</small></h1>
                                    <p class="card-text">current profit</p>
                                    <h1 class="card-title">P{{number_format($diff_profit,2)}} <small class="text-danger">({{(1 - number_format($curr_profit/$target_profit,5))*100}}%)</small></h1>
                                    <p class="card-text">remaining to reach target profit</p>
                            </div>
                        </div>
                    </div>
                    <h2 class="mt-5 text-center">Miscellaneous</h2>
                    <hr>
                    <div class="col-sm-4 mb-2">
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
                    <div class="col-sm-4 mb-2">
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
                    <div class="col-sm-4 mb-2">
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