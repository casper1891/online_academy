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
    Add Subject
@endsection

@section('nav_2')
    Contact
@endsection

@section('h1')
    Add subject
@endsection

@section('h2_1')
    subject
@endsection

@section('h2_2')
    add
@endsection

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Subjects Table</h3>
            <div class="card-tools">
                <div >
                    <a class="btn btn-outline-danger float-right mr-3" href="{{ route('subjects.create') }}">+Add</a>

                </div>
            </div>
        </div>

        <div class="card-body table-responsive p-0" style="height: 300px;">
            <table class="table table-head-fixed text-nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>sub_name</th>
                        <th>img</th>
                        <th>pic</th>
                        <th>Active</th>

                    </tr>
                </thead>
                <tbody>

                    @forelse ($subjects as $subject)
                        <tr>
                            <td>{{ $subject->id }}</td>
                            <td>{{ $subject->sub_name }}</td>
                            <td>{{ $subject->img }}</td>
                            <td><img src="{{asset('storage/$subject->img')}}" alt="" srcset=""></td>
                            <td>
                                @if ($subject->active == 1)
                                    {{ 'yes' }}
                                @else
                                    {{ 'no' }}
                                @endif

                            </td>
                            <td>
                                <a href="{{route('subjects.edit',$subject->id)}}" title="Edit" class="d-block">
                                    <button class="border-light shadow-none width="18" height="18">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                  </svg>
                                </button>
                                </a>
                            </td>
                            <td>
                                <form action="{{route('subjects.destroy',$subject->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                <button title="Delete" class="border-light shadow-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash text-danger" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                      </svg>
                                    </button>
                                </form>
                            </td>

                        </tr>

                    @empty
                        <td colspan="3" class="text-center">
                            No subject added
                        </td>
                    @endforelse




                </tbody>
            </table>
        </div>

    </div>
@endsection
