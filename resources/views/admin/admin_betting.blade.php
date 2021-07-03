@extends('admin/layout/layout')
@section('content')


<!-- start: header -->

<!-- end: header -->

<!-- end: sidebar -->
<!-- start: page -->

<section role="main" class="content-body card-margin">
    <header class="page-header">
        <h2>Basic Forms</h2>

        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Forms</span></li>
                <li><span>Basic</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                    </div>

                    <h2 class="card-title">Form Elements</h2>
                </header>
                <div class="card-body">
                        @if(Session::get('error'))
                        <div class="alert alert-danger">
                            {{Session::get('error')}}
                        </div>
                        @endif
                        
                    <form method="post" action="{{route('newBedding.create')}}">
@csrf
                        @foreach($color as $colour)

                        <div class="form-group row">
                            <label class="col-lg-2 control-label text-lg-right pt-2">Color</label>
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text" style="background-color:{{$colour->color_code}}">
                                        
                                        </span>
                                    </span>
                                    <input type="hidden" name="color[]" value="{{$colour->id}}">
                                    <input type="text" class="form-control"  placeholder="Color" value="{{$colour->color_name}}" readonly>
                                </div>
                            </div>
                            <label class="col-lg-2 control-label text-lg-right pt-2">Number</label>
                            <div class="col-lg-3">
                                <Select name="number[]" class="form-control" required>
                                    <option value="" selected disable>Select Number</option>
                                    @for($i=0; $i <= 9; $i++) <option value="{{$i}}"> {{$i}} </option>
                                        @endfor
                                </Select>
                            </div>

                        </div>  
                        @endforeach
                        <div>
                         <button class="btn btn-success">Add Game</button>
                        </div>

                    </form>
                </div>
            </section>
        </div>
    </div>


</section>
</div>











@endSection
