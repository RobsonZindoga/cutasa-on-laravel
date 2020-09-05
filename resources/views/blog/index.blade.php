@extends('layouts.app', ['page' => __('Blog Articles'), 'pageSlug' => 'blog'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a data-toggle="modal" data-target="#addEvent" class="pull-right">add</a>
            <h5 class="title">Blog Articles Dashboard</h5>
            <hr>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table tablesorter " id="">
                <thead class=" text-primary">
                <tr>
                    <th>
                    Title
                    </th>
                    <th>
                    Author
                    </th>
                    
                    <th class="text-center">
                    Date Published
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
                @foreach ($articles as $blog)
                    <tr>
                    <td>
                    
                    </td>
                    <td>
                    
                    </td>
                    <td>
                
                    </td>
                    <td class="text-center">
                
                    </td>
                    <td class="text-center">
                    
                    </td>
                    <td>
                        <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" data-abc="true">
                                            Actions
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                            <h6 class="dropdown-header">Action</h6>
                                            <a class="dropdown-item download" data-abc="true" data-toggle="modal"
                                                data-target="#viewEvent{{$blog->id }}">View</a>
                                            <a class="dropdown-item edit" data-abc="true" data-toggle="modal"
                                                data-target="#editEvent{{ $blog->id }}">Update</a>
                                            <a class="dropdown-item edit" data-abc="true" target="_blank"
                                                href="/{{ $blog->image_url }}">Download Image</a>
                                            <div class="dropdown-divider">
                                            </div>
                                            <form class="dropdown-item" action="{{ route('admin-blog.destroy', $blog->id) }}"
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

@include('blog.create')
@include('blog.edit')