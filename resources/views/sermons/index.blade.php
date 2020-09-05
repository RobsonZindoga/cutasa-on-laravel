@extends('layouts.app', ['page' => __('Sermons'), 'pageSlug' => 'sermons'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a data-toggle="modal" data-target="#addEvent" class="pull-right">add</a>
            <h5 class="title">Sermons Dashboard</h5>
            <hr>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table tablesorter " id="">
                <thead class=" text-primary">
                <tr>
                    <th>
                    Event Name
                    </th>
                    <th>
                    Description
                    </th>
                    
                    <th class="text-center">
                    Date
                    </th>
                    <th class="text-center">
                    Category
                    </th>
                    <th class="text-center">
                    Image
                    </th>
                    <th>
                        
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($sermons as $sermon)
                    <tr>
                    <td>
                    {{$sermon->title}}
                    </td>
                    <td>
                    {{$sermon->description}}
                    </td>
                    <td>
                    {{$sermon->created_at}}
                    </td>
                    <td class="text-center">
                    
                    </td>
                    <td class="text-center">
                        {{$sermon->video_url}}
                    </td>
                    <td>
                        <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" data-abc="true">
                                            Actions
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                            <h6 class="dropdown-header">Action</h6>
                                            <a class="dropdown-item download" data-abc="true" data-toggle="modal"
                                                data-target="#viewEvent{{$sermon->id }}">View</a>
                                            <a class="dropdown-item edit" data-abc="true" data-toggle="modal"
                                                data-target="#editEvent{{ $sermon->id }}">Update</a>
                                            <a class="dropdown-item edit" data-abc="true" target="_blank"
                                                href="/{{ $sermon->image_url }}">Download Image</a>
                                            <div class="dropdown-divider">
                                            </div>
                                            <form class="dropdown-item" action="{{ route('admin-events.destroy', $sermon->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    class="btn btn-link btn-block m-0 shadow-none btn-lg p-0 text-left"
                                                    type="submit">
                                                    Delete
                                                </button>
                                            </form>

                                            </span>
                                        </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
</div>   
@endsection

@include('sermons.create')
@include('sermons.edit')