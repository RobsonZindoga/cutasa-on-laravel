@extends('layouts.app', ['page' => __('members'), 'pageSlug' => 'members'])

@section('content')

<div class="card">
    <div class="card-header">
        <a data-toggle="modal" data-target="#addEvent" class="pull-right">
            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="green" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
            </svg>
        </a>
        <h5 class="title">Member Dashboard</h5>
        <hr>
    </div>

    <div class="card-body">
        <v-client-table :data="{{json_encode($members)}}" :columns="{{json_encode(['name','email','contact','address','graduation', 'field_of_study'])}}" >

        </v-client-table>

    </div>
</div>

@endsection

@include('member.edit')
