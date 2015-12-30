@extends('layout')
@section('title', 'Server Error')
@section('content')
<div>
    <section class="content">
        <div class="error-page">
            <h2 class="headline text-yellow">503</h2>
            <div class="error-content">
                <h3>
                    <i class="fa fa-warning text-yellow"></i>
                        Server Error.
                </h3>
                <p>
                    Sorry, something went wrong with our server.
                    Click <a href="#">here</a> togo back home
                </p>
                <form class="search-form">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                                <button type="submit" name="submit" class="btn btn-warning btn-flat">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection