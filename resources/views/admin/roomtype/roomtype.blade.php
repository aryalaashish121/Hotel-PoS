@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="fade-in row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Manage Room Types') }} </div>

                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> 
                            {{__('Avaiable Room Types')}}
                                                  
                            <a class="c-sidebar-nav-link float-right" href="{{ route('admin.roomtype.create') }}">{{__('ADD')}}</a>
                        </div>
                        
                        <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                        <tr>
                        <th>Room Type</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th colspan="2">Actions</th>
                        
                        </tr>
                        </thead>
                        <tbody>
                            @foreach (\App\Models\RoomType::all() as $roomTypes)
                        <tr>
                           
                        <td>{{ $roomTypes->name}}</td>
                        <td>{{ $roomTypes->created_at}}</td>
                        <td><span class="badge badge-success">{{__('Active')}}</span></td>
                        <td>
                           
                              
                            <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                                <form action="{{ route('admin.roomtype.edit', $roomTypes) }}" method="GET">
                                    @csrf
                                <button class="btn btn-sm btn-pill btn-info" type="submit">{{__('Update')}}</button>
                                </form>
                                <form action="{{ route('admin.roomtype.destroy', $roomTypes) }}" method="delete">
                                    @csrf
                                    @method('delete')
                                <button class="btn btn-sm btn-pill btn-danger" type="submit">{{__('Delete')}}</button>
                            </form>
                            </div>
                            
                        </td>
                   
                        </tr>
                        @endforeach
                       
                        </tbody>
                        </table>
                        <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection