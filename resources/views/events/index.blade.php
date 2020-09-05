@extends('layouts.app', ['page' => __('Events'), 'pageSlug' => 'events'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a data-toggle="modal" data-target="#addEvent" class="pull-right">add</a>
            <h5 class="title">Events Dashboard</h5>
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
                @foreach ($events ?? '' as $event)
                    <tr>
                    <td>
                    {{$event->title}}
                    </td>
                    <td>
                    {{$event->description}}
                    </td>
                    <td>
                    {{$event->date}}
                    </td>
                    <td class="text-center">
                    {{$event->category_id}}
                    </td>
                    <td class="text-center">
                        {{$event->image_url}}
                    </td>
                    <td>
                        <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" data-abc="true">
                                            Actions
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                            <h6 class="dropdown-header">Action</h6>
                                            <a class="dropdown-item download" data-abc="true" data-toggle="modal"
                                                data-target="#viewEvent{{$event->id }}">View</a>
                                            <a class="dropdown-item edit" data-abc="true" data-toggle="modal"
                                                data-target="#editEvent{{ $event->id }}">Update</a>
                                            <a class="dropdown-item edit" data-abc="true" target="_blank"
                                                href="/{{ $event->image_url }}">Download Image</a>
                                            <div class="dropdown-divider">
                                            </div>
                                            <form class="dropdown-item" action="{{ route('admin-events.destroy', $event->id) }}"
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

@include('events.create')
@include('events.edit')