<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Users') }}
        </h2>
    </x-slot>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                @if(session()->has('deleted'))
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'User deleted',
                    })
                </script>
                @else
                @endif
                <div class="col-sm-12">
                    <div class="d-flex mb-3">
                        <div class="p-2">
                            <form action="{{route('apparel.users')}}" method="get">
                                @csrf
                                <input type="text" class="form-control shadow-none" name="search" placeholder="Search by name and email" value="{{request()->query('search')}}">
                            </form>
                        </div>
                        <div class="p-2">

                        </div>
                        <div class="p-2">

                        </div>



                    </div>
                    <table class="table table-bordered table-striped bg-white">
                        <thead>
                            <tr>
                                <th>User #</th>
                                <th>User Type</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Verify Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->userType}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->email_verified_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mx-auto d-flex justify-content-center p-5">{{ $users->appends(['search'=>request()->query('search')])->links() }}</div>

                </div>
            </div>

        </div>
    </section>
</x-app-layout>