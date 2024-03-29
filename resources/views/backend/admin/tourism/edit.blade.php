@extends('backend.layouts.master')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>League Elements</h1>
        <!-- validation error -->
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif


        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">View</li>
                <li class="breadcrumb-item active">Tournament</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-15">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tournament Form</h5>

                        <!-- General Form Elements -->
                        <form action="{{route('admin.tourism.update',$tour->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name"><b>Title:-<b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title" id="title" value="{{$tour->title}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name"><b>Start Date:-<b></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="sdate" id="s-date" value="{{$tour->sdate}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name"><b>End Date:-<b></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="edate" id="e-date" value="{{$tour->edate}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name"><b>Place:-<b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="place" id="place" value="{{$tour->place}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="image"><b>Image:-<b></label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" name="image">
                                </div>
                            </div>
                            <br>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form><!-- End General Form Elements -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
