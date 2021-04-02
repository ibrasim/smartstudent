@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('About this Laravel Project') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                        
                    @endif

                    {{ __('You are logged in!') }}
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis excepturi alias, adipisci molestiae quo autem incidunt quisquam earum sunt modi officiis. Sint aperiam reiciendis mollitia doloribus ex sapiente doloremque eius?</p>
                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">card header</div>

                <div class="card-body">
               
               

               <h1>in card body</h1>
               <p>https://www.cloudways.com/blog/routing-in-laravel/</p>
<p>           https://www.itsolutionstuff.com/post/laravel-6-custom-middleware-exampleexample.html</p>
    
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
