@extends('layouts.app', ['page' => __('Donations'), 'pageSlug' => 'donations'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a data-toggle="modal" data-target="#addDonation" class="pull-right">add</a>
            <h5 class="title">Donations Dashboard</h5>
            <hr>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table tablesorter " id="">
                <thead class=" text-primary">
                <tr>
                    <th>
                    Donation Name
                    </th>
                    <th>
                    Description
                    </th>
                    
                    <th class="text-center">
                    Date Created
                    </th>
                    
                    <th>
                        Amount
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($donations as $donation)
                    <tr>
                    <td>
                    {{$donation->name}}
                    </td>
                    <td>
                    {{$donation->description}}
                    </td>
                    <td>
                    {{$donation->created_at}}
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
                                                data-target="#viewDonation{{$donation->id }}">View</a>
                                            <a class="dropdown-item edit" data-abc="true" data-toggle="modal"
                                                data-target="#editDonation{{ $donation->id }}">Update</a>
                                            <div class="dropdown-divider">
                                            </div>
                                            <form class="dropdown-item" action="{{ route('admin-donation.destroy', $donation->id) }}"
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

@include('donations.create')
@include('donations.edit')