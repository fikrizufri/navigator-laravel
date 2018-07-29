@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div>
                        <ul>
                            @foreach($menus as $menu)
                                    <li>{{ $menu->menu }}
                                        
                                        <ul>
                                            @foreach ($menu->parents as $submenu)
                                            <li>{{ $submenu->menu }}</li>
                                            @endforeach
                                            
                                        </ul>
                                        
                                        
                                    </li>                   
                            @endforeach
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
