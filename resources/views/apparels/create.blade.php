<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Apparel') }}
        </h2>
    </x-slot>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                @if(session()->has('success'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Apparel created successfully',
                        footer: '<a href="/apparels">Return to inventory</a>'
                    })
                </script>
                @else
                @endif
                <div class="col-sm-7">
                    <a href="{{route('apparel.index')}}" class="btn btn-light fw-bold mb-3">Return to Inventory</a>
                    <p class="card-text mb-3">Please fill out all the fields below and click on the "Submit" button to save the book to the database.</p>
                    <hr>
                    <form action="{{route('apparel.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control shadow-none @error('name') is-invalid @enderror" value="{{old('name')}}" name="name" id="name">
                            @error('name')
                            <small id="helpId" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="sku" class="form-label">SKU (Stock Keeping Unit) </label>
                            <input type="text" class="form-control shadow-none @error('sku') is-invalid @enderror" value="{{old('sku')}}" name="sku" id="sku">
                            @error('sku')
                            <small id="helpId" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <hr>
                        <h5 class="">I. Pricing</h5>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity </label>
                            <input type="number" class="form-control shadow-none @error('quantity') is-invalid @enderror" value="{{old('quantity')}}" name="quantity" id="quantity">
                            @error('quantity')
                            <small id="helpId" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="purchasePrice" class="form-label">Purchase Price </label>
                                    <input type="number" class="form-control shadow-none @error('purchasePrice') is-invalid @enderror" value="{{old('purchasePrice')}}" name="purchasePrice" id="purchasePrice">
                                    @error('purchasePrice')
                                    <small id="helpId" class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="retailPrice" class="form-label">Retail Price </label>
                                    <input type="number" class="form-control shadow-none @error('retailPrice') is-invalid @enderror" value="{{old('retailPrice')}}" name="retailPrice" id="retailPrice">
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
                            <input type="text" class="form-control shadow-none @error('color') is-invalid @enderror" value="{{old('color')}}" name="color" id="color">
                            @error('color')
                            <small id="helpId" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="style" class="form-label">Style</label>
                            <select class="form-control shadow-none @error('style') is-invalid @enderror" name="style" id="style">
                                <option value="0">Select style</option>
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
                                <option value="0">Select type</option>
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
                        <button type="submit" class="btn btn-dark float-end">Submit</button>
                    </form>
                </div>
            </div>
    </section>
</x-app-layout>