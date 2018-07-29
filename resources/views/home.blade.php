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
                                        @if($menu->id) > 0 )
                                        <ul>
                                            <li>1</li>
                                        </ul>
                                        
                                        @endif
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
