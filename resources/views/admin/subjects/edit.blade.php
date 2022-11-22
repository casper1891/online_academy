{{--
this_year
title=
css//style
nav_1//home
nav_2//contact
nav_3 // any new choice

--}}
@extends('admin.layout.master')

@section('title')
    manager_subjects
@endsection

@section('this_year')
    2022
@endsection

@section('nav_1')
    New Subject
@endsection

@section('nav_2')
    Contact
@endsection

@section('h1')
    Edit subject
@endsection

@section('h2_1')
    subject
@endsection

@section('h2_2')
    edit
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">edit subject details</h3>
        </div>


        <form action="{{route('subjects.update',$subject->id)}}" method="post"  enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="form-group">
                    <label for="name">sub_name</label>
                    <input type="text" name='sub_name' class="form-control" id="name" value={{ $subject->sub_name }}>
                </div>

                <div class="form-group">
                    <label for="img">img</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name='img' id="img" >
                            <div>
                                <img src="{{asset('img.$subject->img')}}" alt="">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="form-group clearfix">
                    <label for="radioPrimary3" class="mr-3">
                        Status :
                        </label>
                    <div class="icheck-primary d-inline">

                    <input type="radio" id="radioPrimary1" name="active" {{($subject->active==1?'checked':'')}} value="1">
                    <label for="radioPrimary1">
                        active
                    </label>
                    </div>
                    <div class="icheck-primary d-inline">
                    <input type="radio" id="radioPrimary2" name="active" value="0" {{($subject->active==0?'checked':'')}}>
                    <label for="radioPrimary2">
                        not active
                    </label>
                    </div>

                    </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
