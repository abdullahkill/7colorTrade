@extends('layout/layout')
@section('content')

<div class="container-fluid page-body-wrapper">

    <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <div class="navbar-brand-wrapper">
                <a class="navbar-brand brand-logo bank-logo" href="index.html"><img
                        src="{{asset('upload/Group8008.png')}}" alt="logo" /></a>
            </div>
            <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Notification<div>
                    <small>View Notification</small>
                </div>
            </h4>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
            </ul>
        </div>
    </nav>
    <div class="global-container">
        <div class="card login-form pro_main_cover">
            <div class="card-body">
                <h4 class="card-title "><b>Notification</b></h4>
                <div class="card-text">
                    <form class="form-cover">
                        <div class="col-xs-10 col-6 col-lg-12 col-sm-12 d-flex">
                           
                        </div><br>
                        
                        <div class="form-group">
                        </div>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> Date</th>
                                    <th>Notification</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (auth()->user()->unreadNotifications as $notification)
                                <tr>
                                    
                                    <td><li class="dot">
                                        {{$notification->created_at}}</td>
                                    <td>{{$notification->data['offer_id']}}</td>
                                </li>
                                </tr>
                @endforeach

                @foreach (auth()->user()->readNotifications  as $notification)
                                
                                    @if($notification->read_at == NULL)

                                    @else
                                    <tr>
                                    <td>{{$notification->created_at}}</td>
                                    <td>{{$notification->data['offer_id']}}</td>
                                    
                                </tr>
                                    @endif
                                
                @endforeach

                @foreach (auth()->user()->unreadNotifications as $notification)
                {{$notification->markAsRead()}} 
                @endforeach
                            </tbody>
                        </table>
                </div><br><br><br>
                @endsection
