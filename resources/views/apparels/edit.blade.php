<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Apparel') }}
        </h2>
    </x-slot>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                @if(session()->has('updated'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Apparel updated successfully',
                        footer: '<a href="/apparels">Return to inventory</a>'
                    })
                </script>
                @else
                @endif
                <div class="col-sm-7">
                    <a href="{{route('apparel.index')}}" class="btn btn-light fw-bold mb-3">Return to Inventory</a>
                    <div class="card mb-3">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="img-thumbnail" src="{{asset('images')}}/{{$apparel->image}}" style="width:14.5rem; height:16rem; margin:2px 2px 2px 2px;" alt="{{$apparel->name}}">
                                </div>
                                <div class="col-sm-8">
                                    <h4 class="card-title">{{$apparel->name}}</h4>
                                    <p class="card-text">SKU: {{$apparel->sku}}</p>
                                    <hr>
                                    <p><u>Inventory details</u></p>
                                    <p>{{$apparel->quantity}} remaining</p>
                                    <p>Purchase Price: <span class="text-danger">Php {{number_format($apparel->purchasePrice,2)}} </span></p>
                                    <p>Retail Price: <span class="text-success">Php {{number_format($apparel->retailPrice,2)}} </span></p>
                                    <hr>
                                    <p><u>Product details</u></p>
                                    <p>Color: {{$apparel->color}}</p>
                                    <p>Style: {{$apparel->style}}</p>
                                    <p>Type: {{$apparel->type}}</p>
                                    <hr>
                                    <p><u>Others</u></p>
                                    <p>Created at: {{$apparel->created_at}}</p>
                                    <p>Last updated: {{$apparel->updated_at}}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <p class="card-text mb-3">Please fill out all the fields below and click on the "Update" button to update the apparel to the inventory.</p>

                    <hr>
                    <form action="{{route('apparel.update', $apparel->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control shadow-none @error('name') is-invalid @enderror" value="{{$apparel->name}}" name="name" id="name">
                            @error('name')
                            <small id="helpId" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="sku" class="form-label">SKU (Stock Keeping Unit) </label>
                            <input type="text" class="form-control shadow-none @error('sku') is-invalid @enderror" value="{{$apparel->sku}}" name="sku" id="sku">
                            @error('sku')
                            <small id="helpId" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <hr>
                        <h5 class="">I. Pricing</h5>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity </label>
                            <input type="number" class="form-control shadow-none @error('quantity') is-invalid @enderror" value="{{$apparel->quantity}}" name="quantity" id="quantity">
                            @error('quantity')
                            <small id="helpId" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="purchasePrice" class="form-label">Purchase Price </label>
                                    <input type="number" class="form-control shadow-none @error('purchasePrice') is-invalid @enderror" value="{{$apparel->purchasePrice}}" name="purchasePrice" id="purchasePrice">
                                    @error('purchasePrice')
                                    <small id="helpId" class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="retailPrice" class="form-label">Retail Price </label>
                                    <input type="number" class="form-control shadow-none @error('retailPrice') is-invalid @enderror" value="{{$apparel->retailPrice}}" name="retailPrice" id="retailPrice">
                                    @error('retailPrice')
                                    <small id="helpId" class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5 class="">II. Description</h5>
                        <div class="mb-3">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" class="form-control shadow-none @error('color') is-invalid @enderror" value="{{$apparel->color}}" name="color" id="color">
                            @error('color')
                            <small id="helpId" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="style" class="form-label">Style</label>
                            <select class="form-control shadow-none @error('style') is-invalid @enderror" value="{{$apparel->style}}" name="style" id="style">
                                <option value="">Select style</option>
                                <option>Casual</option>
                                <option>Elegant</option>
                                <option>Boho</option>
                                <option>Preppy</option>
                                <option>Coordinates</option>
                                <option>Basics</option>
                                <option>Street</option>
                                <option>Cute</option>
                            </select>
                            @error('style')
                            <small id="helpId" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <select class="form-control shadow-none @error('type') is-invalid @enderror" name="type" id="type">
                                <option value="">Select type</option>
                                <option>Top</option>
                                <option>Tee</option>
                                <option>Bodycon</option>
                                <option>Cami</option>
                                <option>Polo</option>
                                <option>Romper</option>
                                <option>Tie dye
                                </option>
                                <option>Graphic</option>
                                <option>Shirt</option>
                            </select>
                            @error('type')
                            <small id="helpId" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="file" class="form-label">Image</label>
                            <input type="file" class="form-control shadow-none  @error('file') is-invalid @enderror" onchange="previewFile(this)" name="file">
                            <img id="previewImg" alt="Apparel image" style="max-width:15rem; margin-top:2rem;">
                            @error('file')
                            <small id="helpId" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-dark float-end">Update</button>

                        <br>
                        <br>
                        <hr>
                        <p class="fw-bold">Delete Apparel</p>
                        <a href="{{route('apparel.destroy', $apparel->id)}}" class="btn btn-danger float-start" onclick="return confirm('Are you sure you want to delete this apparel?')"> Delete</a>
                    </form>
                </div>
            </div>
    </section>
</x-app-layout>