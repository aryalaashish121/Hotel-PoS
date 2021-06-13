@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="fade-in row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="alert alert-danger">
                   
                </div>    

                <a href="{{ route('admin.customer.create') }}"><span>ADD</span></a>
                <div class="card-header">{{ __('Manage Customers') }} </div>
                <div class="row">
                    <div class="col-3">
                    <div class="c-callout c-callout-info"><small class="text-muted">New Clients</small>
                    <div class="text-value-lg">9,123</div>
                    </div>
                    </div>
                    
                    <div class="col-3">
                    <div class="c-callout c-callout-danger"><small class="text-muted">Recuring Clients</small>
                    <div class="text-value-lg">22,643</div>
                    </div>
                    </div>
                    <div class="col-3">
                    <div class="c-callout c-callout-danger"><small class="text-muted">Recuring Clients</small>
                    <div class="text-value-lg">22,643</div>
                    </div>
                    </div>
                    <div class="col-3">
                    <div class="c-callout c-callout-danger"><small class="text-muted">Recuring Clients</small>
                     <div class="text-value-lg">22,643</div>
                    </div>
                    </div>
                    
                    </div>
                <div class="card-body">
                    <div class="card"><div class="card">
                        <div class="card-header"><i class="fa fa-align-justify"></i> Striped Table</div>
                        <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                        <tr>
                        <th>Customer Name</th>
                        <th>Created at</th>
                        <th>Mobile no. </th>
                        <th>Room no. </th>
                        <th>Status</th>
                        <th>{{__('Actions')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach (\App\Models\Customer::all() as $customer)
                                
                          
                        <tr>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->created_at}}</td>
                        <td>{{$customer->mobile}}</td>
                        <td>{{$customer->room_id}}</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td>
                            <form action="{{ route('admin.customer.edit', $customer) }}" >
                                @csrf
                                @method('POST')
                                <button class="btn btn-sm btn-pill btn-primary float-right " type="submit">{{__('EDIT')}}</button>
                            </form>

                            <form action="{{ route('admin.customer.destroy', $customer) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-pill btn-danger" type="submit">{{__('Delete')}}</button>
                            </form>

                        </td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                     
                        </div>
                        </div>
</div>    </div>    </div>    </div>    </div>    </div>    </div>
@endsection