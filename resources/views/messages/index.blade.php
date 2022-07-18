<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Messages') }}
        </h2>
    </x-slot>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="d-flex mb-3">
                        <div class="p-2">
                            <form action="{{route('messages.index')}}" method="get">
                                @csrf
                                <input type="text" class="form-control shadow-none" name="search" placeholder="Search by name, nature, message..." value="{{request()->query('search')}}">
                            </form>
                        </div>
                        <div class="p-2">

                        </div>
                        <div class="p-2">

                        </div>

                        <div class="ms-auto p-2"></div>

                    </div>
                    <div class="table-responsive">
                        <table class="table bg-white table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Nature</th>
                                    <th>Message</th>
                                    <th>Sent at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($messages as $message)
                                <tr>
                                    <td>{{$message->name}}</td>
                                    <td><a href="https://mail.google.com/mail/?view=cm&fs=1&to={{$message->email}}&su=Reply to {{$message->nature}}&body={{$message->message}}" target="_blank">{{$message->email}}</a></td>
                                    <td>{{$message->contact}}</td>
                                    <td>{{$message->nature}}</td>
                                    <td>{{$message->message}}</td>
                                    <td>{{$message->created_at}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mx-auto d-flex justify-content-center p-5">{{ $messages->appends(['search'=>request()->query('search')])->links() }}</div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-app-layout>