@extends('layouts.app', ['page' => __('category'), 'pageSlug' => 'category'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a data-toggle="modal" data-target="#addCategory" class="pull-right">
                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="green" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                    </svg>
                </a>
            <h5 class="title">Category Dashboard</h5>
            <hr>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table tablesorter " id="">
                <thead class=" text-primary">
                <tr>
                    <th>
                    Category Name
                    </th>
                    <th>
                    Description
                    </th>
                    
                    <th class="text-center">
                    Date Created
                    </th>
                    
                    <th>
                        
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                    <tr>
                    <td>
                    {{$category->name}}
                    </td>
                    <td>
                    {{$category->description}}
                    </td>
                    <td>
                    {{$category->created_at}}
                    </td>
                    <td class="text-center">
                    
                    </td>
                    <td>
                        <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" data-abc="true">
                                            Actions
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                            <h6 class="dropdown-header">Actions</h6>
                                            <a class="dropdown-item download" data-abc="true" data-toggle="modal"
                                                data-target="#viewCategory{{$category->id }}">View</a>
                                            <a class="dropdown-item edit" data-abc="true" data-toggle="modal"
                                                data-target="#editCategory{{ $category->id }}">Update</a>
                                            <div class="dropdown-divider">
                                            </div>
                                            <form class="dropdown-item" action="{{ route('admin-category.destroy', $category->id) }}"
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

@include('category.create')
@include('category.edit')