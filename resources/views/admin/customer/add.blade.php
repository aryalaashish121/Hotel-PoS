
@extends('layouts.app')



@section('content')
<div class="container-fluid">
    <div class="fade-in row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                <div class="alert alert-danger">
                    <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
                </div>

                <div class="card-header">{{ __('Customers') }}</div>
                

                <div class="card-body justify-content-center">
                    <div class="col-sm-12 ">
                        <div class="card">
                        <div class="card-header"><strong>{{__('Add New Customer')}}</strong></div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{route('admin.customer.store')}}" method="POST">
                            @csrf
                    <div class="row">
                        <div class="card-body col ml-2">
                        <div class="form-group">
                        <label class="form-col-form-label" for="inputSuccess1">{{__('Customer Name')}}</label>
                        <input class="form-control" name="name" id="roomsname" type="text">
                        </div>

                        <div class="form-group">
                            <label class="form-col-form-label" for="inputSuccess1">{{__('Address')}}</label>
                            <input class="form-control" name="address" id="address" type="text">
                        </div>

                        <div class="form-group">
                            <label class="form-col-form-label" for="inputSuccess1">{{__('Contact no. ')}}</label>
                            <input class="form-control" name="mobile" id="mobile" type="text">
                        </div>
                        </div>
                       
                        {{-- new column --}}
                        <div class="card-body col mr-2">
                            <div class="form-group">
                                <label for="sel1">Select Room Type </label>
                                <select class="form-control" id="roomtype_id" name="roomtype_id">
                                    @foreach (\App\Models\RoomType::all() as $roomType)
                                    <option value="{{$roomType->id}}">{{$roomType->name}}</option>
                                    @endforeach
                                 
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Select Room no. </label>
                                <select class="form-control" id="room_id" name="room_id">
                                    @foreach (\App\Models\Room::all() as $rooms)
                                    <option value="{{$rooms->id}}">{{$rooms->room_no}}</option>
                                    @endforeach
                                 
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-col-form-label" for="inputSuccess1">{{__('Room rate')}}</label>
                                <input class="form-control" value="" name="rate" id="roomrate" type="text">
                            </div>
                            
                            <div class="form-group">
                                <label class="form-col-form-label" for="inputSuccess1">{{__('Advance Amount')}}</label>
                                <input class="form-control" name="advance" id="advance_amount" type="text">
                            </div>
                            
                            <div class="card-footer justify-content-center">
                                <button class="btn btn-block btn-outline-success active" type="submit" aria-pressed="true">{{__('Save')}}</button>
                                </div>
                            </div>
                    </div>
                        </form>
                        </div>
                    </div>
               
             
                </div>
            </div>
        </div>
    </div>
</div>

@endsection