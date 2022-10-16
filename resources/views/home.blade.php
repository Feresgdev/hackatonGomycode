@extends('layout.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">


                        {{ __('You are logged in!') }}


                    </div>
                </div>
                <li class="nav-item nav-icon dropdown caption-content">
                    <a href="#" class="search-toggle dropdown-toggle  d-flex align-items-center" id="dropdownMenuButton4"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <div class="caption ml-3">
                            <h6 class="mb-0 line-height">Get Instructor help List<i class="las la-angle-down ml-2"></i>
                            </h6>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="dropdownMenuButton">
                        @foreach ($users as $user)
                            @if ($user->role == 'instructor')
                                <li class="dropdown-item d-flex svg-icon">
                                    <svg class="svg-icon mr-0 text-primary" id="h-01-p" width="20"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <a href="/user/{{ $user->id }}/profile">{{ $user->name }}</a>
                                </li>
                            @endif
                        @endforeach

                    </ul>
                </li>
            </div>
        </div>
    </div>
@endsection
