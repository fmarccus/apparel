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
                <div class="col-sm-12">
                    <canvas id="userChart" height="100px"></canvas>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="card border-white rounded-0 gradient-blue text-light" style="height:8rem">
                        <div class="card-body">
                            <h1 class="card-title ">{{$users}} <i class="float-end fa-2x fa-solid fa-users"></i></h1>
                            <p class="card-text ">Registered users</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="card border-white rounded-0 gradient-green text-light" style="height:8rem">
                        <div class="card-body">
                            <h1 class="card-title">{{$verified_users}} <i class="fa-2x float-end fa-solid fa-user-check"></i></h1>
                            <p class="card-text">Verified users</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="card border-white rounded-0 gradient-yellow text-light" style="height:8rem">
                        <div class="card-body">
                            <h1 class="card-title">{{$unverified_users}} <i class="fa-2x float-end fa-solid fa-user-large-slash"></i></h1>
                            <p class="card-text">Unverified users</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="card border-white rounded-0 gradient-pink text-light" style="height:8rem">
                        <div class="card-body">
                            <h1 class="card-title">{{$server_accounts}} <i class="fa-2x float-end fa-solid fa-user-tie"></i></h1>
                            <p class="card-text">Server accounts</p>
                        </div>
                    </div>
                </div>
                <!-- APPARELS -->
                <h2 class="mt-5 text-center">Inventory Information</h2>
                <hr>
                <div class="col-sm-12">
                    <canvas id="apparelChart" height="100px"></canvas>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="card border-white rounded-0 velvet-sun text-light" style="height:10rem;">
                        <div class="card-body">
                            <h1 class="card-title">{{$unique_apparels}} <i class="fa-2x float-end fa-solid fa-shirt"></i></h1>
                            <p class="card-text">Unique apparels</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="card border-white rounded-0 orange-coral text-light" style="height:10rem;">
                        <div class="card-body">
                            <h1 class="card-title">{{$quantity_apparels}} <i class="fa-2x float-end fa-solid fa-cart-flatbed"></i></h1>
                            <p class="card-text">Total apparels on hand</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="card border-white rounded-0 broken-hearts text-light" style="height:10rem;">
                        <div class="card-body">
                            <h1 class="card-title">P{{number_format($cheapest_apparel,2)}} <i class="fa-2x float-end fa-solid fa-arrow-down-1-9"></i></h1>
                            <p class="card-text">Cheapest apparel</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="card border-white rounded-0 relay text-light" style="height:10rem;">
                        <div class="card-body">
                            <h1 class="card-title">P{{number_format($expensive_apparel,2)}} <i class="fa-2x float-end fa-solid fa-arrow-up-9-1"></i></h4>
                                <p class="card-text">Most expensive apparel</p>
                        </div>
                    </div>
                </div>
                <!-- APPARELS BY CATEGORY -->
                <h4 class="mt-5">Unique Apparels by Category</h4>
                <div class="progress mt-2 mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$bodycon}}" aria-valuemin="0" aria-valuemax="{{$bodycon}}" style="width: {{$bodycon+5}}%">{{$bodycon}} BODYCON</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$cami}}" aria-valuemin="0" aria-valuemax="{{$cami}}" style="width: {{$cami+5}}%">{{$cami}} CAMI</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$graphic}}" aria-valuemin="0" aria-valuemax="{{$graphic}}" style="width: {{$graphic+5}}%">{{$graphic}} GRAPHIC</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$polo}}" aria-valuemin="0" aria-valuemax="{{$polo}}" style="width: {{$polo+5}}%">{{$polo}} POLO</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$romper}}" aria-valuemin="0" aria-valuemax="{{$romper}}" style="width: {{$romper+5}}%">{{$romper}} ROMPER</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$shirt}}" aria-valuemin="0" aria-valuemax="{{$shirt}}" style="width: {{$shirt+5}}%">{{$shirt}} SHIRT</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$tee}}" aria-valuemin="0" aria-valuemax="{{$tee}}" style="width: {{$tee+5}}%">{{$tee}} TEE</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$tiedye}}" aria-valuemin="0" aria-valuemax="{{$tiedye}}" style="width: {{$tiedye+5}}%">{{$tiedye}} TIE DYE</div>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$top}}" aria-valuemin="0" aria-valuemax="{{$top}}" style="width: {{$top+5}}%">{{$top}} TOP</div>
                </div>
                <!-- SHIPPING INFORMATION -->

                <h2 class="mt-5 text-center">Shipping Information</h2>
                <hr>
                <div class="col-sm-4 mb-2">
                    <div class="card border-white rounded-0 opa text-light" style="height:10rem">
                        <div class="card-body">
                            <h1 class="card-title">{{$pending_orders}} <i class="fa-2x float-end fa-solid fa-business-time"></i></h4>
                                <p class="card-text">Pending orders</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-2">
                    <div class="card border-white rounded-0 aqualicious text-light" style="height:10rem">
                        <div class="card-body">
                            <h1 class="card-title">{{$for_delivery_orders}} <i class="fa-2x float-end fa-solid fa-truck"></i></h1>
                            <p class="card-text">For delivery</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-2">
                    <div class="card border-white rounded-0 teal-love text-light" style="height:10rem">
                        <div class="card-body">
                            <h1 class="card-title">{{$completed_orders}} <i class="fa-2x float-end fa-solid fa-square-check"></i></h1>
                            <p class="card-text">Orders completed</p>
                        </div>
                    </div>
                </div>
                <!-- SALES INFORMATION -->
                <h2 class="mt-5 text-center">Sales Information</h2>
                <hr>
                <div class="col-sm-12">
                    <canvas id="saleChart" height="100px"></canvas>
                </div>
                <div class="col-sm-4 mb-2">
                    <div class="card border-white rounded-0 lunada">
                        <div class="card-body">
                            <h1 class="card-title">P{{number_format($expenditures,2)}} <i class="fa-2x float-end fa-solid fa-money-bill-1"></i></h4>
                                <p class="card-text">Expenditure</p>
                                <h1 class="card-title">{{number_format($apparels_sold,0)}} <small class="text-success">({{number_format($apparels_sold/$quantity_apparels,5)}}%)</small> </h1>
                                <p class="card-text">Apparels sold</p>
                                <h1 class="card-title">{{number_format($quantity_apparels,0)}} <small class="text-danger">({{(1 - number_format($apparels_sold/$quantity_apparels,5))*100}}%)</small></h1>
                                <p class="card-text">Remaining to be sold</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-2">
                    <div class="card border-white rounded-0 lunada">
                        <div class="card-body">
                            <h1 class="card-title">P{{number_format($target_gross_sales,2)}} <i class="fa-2x float-end fa-solid fa-money-bill-trend-up"></i></h1>
                            <p class="card-text">Target gross sales</p>
                            <h1 class="card-title">P{{number_format($curr_gross_sales,2)}} <small class="text-success">({{number_format($curr_gross_sales/$target_gross_sales,5)}}%)</small></h1>
                            <p class="card-text">Current gross sales</p>
                            <h1 class="card-title">P{{number_format($diff_gross_sales,2)}} <small class="text-danger">({{(1 - number_format($curr_gross_sales/$target_gross_sales,5))*100}}%)</small></h4>
                                <p class="card-text">Remaining to reach target gross sales</p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-2">
                    <div class="card border-white rounded-0 lunada">
                        <div class="card-body">
                            <h1 class="card-title">P{{number_format($target_profit,2)}} <i class="fa-2x float-end fa-solid fa-peso-sign"></i></h4>
                                <p class="card-text">Target profit</p>
                                <h1 class="card-title">P{{number_format($curr_profit,2)}} <small class="text-success">({{number_format($curr_profit/$target_profit,5)}}%)</small></h1>
                                <p class="card-text">Current profit</p>
                                <h1 class="card-title">P{{number_format($diff_profit,2)}} <small class="text-danger">({{(1 - number_format($curr_profit/$target_profit,5))*100}}%)</small></h1>
                                <p class="card-text">Remaining to reach target profit</p>
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
                                <li class="list-group-item"> <a href="/apparels/edit/{{$most_sold_apparel->item_id}}">{{$most_carted_apparel->item_name}} <span class="text-info fw-bold">({{$most_carted_apparel->item_qty}})</span></a></li>
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
                                <li class="list-group-item"> <a href="/apparels/edit/{{$most_sold_apparel->item_id}}">{{$least_sold_apparel->item_name}} <span class="text-info fw-bold">({{$least_sold_apparel->item_qty}})</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</x-app-layout>
  
<script type="text/javascript">
  
      var labels =  {{ Js::from($labels) }};
      var users =  {{ Js::from($data) }};
  
      const data = {
        labels: labels,
        datasets: [{
          label: 'Number of Registered Users',
          backgroundColor: 'rgb(204, 204, 255)',
          borderColor: 'rgb(255, 99, 132)',
          data: users,
        }]
      };
  
      const config = {
        type: 'bar',
        data: data,
        options: {}
      };
  
      const myChart = new Chart(
        document.getElementById('userChart'),
        config
      );

     
</script>
<script type="text/javascript">
     var labels1 =  {{ Js::from($labels1) }};
      var users1 =  {{ Js::from($data1) }};
  
      const data1 = {
        labels: labels1,
        datasets: [{
          label: 'Number of Unique Apparels added in Inventory',
          backgroundColor: 'rgb(255, 204, 209)',
          borderColor: 'rgb(255, 204, 209)',
          data: users1,
        }]
      };
  
      const config1 = {
        type: 'bar',
        data: data1,
        options: {}
      };
  
      const myChart1 = new Chart(
        document.getElementById('apparelChart'),
        config1
      );
</script>
<script type="text/javascript">
     var labels2 =  {{ Js::from($labels2) }};
      var users2 =  {{ Js::from($data2) }};
  
      const data2 = {
        labels: labels2,
        datasets: [{
          label: 'Total Sales per month',
          backgroundColor: 'rgb(102, 255, 78)',
          borderColor: 'rgb(102, 255, 78)',
          data: users2,
        }]
      };
  
      const config2 = {
        type: 'line',
        data: data2,
        options: {}
      };
  
      const myChart2 = new Chart(
        document.getElementById('saleChart'),
        config2
      );
</script>