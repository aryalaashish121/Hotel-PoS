
@extends('layouts.app')



@section('content')
<div class="container-fluid">
    <div class="fade-in row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Rooms') }}</div>

                <div class="card-body justify-content-center">
                    <div class="col-sm-6">
                        <div class="card">
                        <div class="card-header"><strong>{{__('Update  Rooms')}}</strong></div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{route('admin.rooms.update',$rooms)}}" method="POST">
                            @csrf
                            @method('PUT')
                        <div class="card-body">
                        <div class="form-group">
                        <label class="form-col-form-label" for="inputSuccess1">{{__('Room Name')}}</label>
                        <input class="form-control" value="{{$rooms->name}}" name="name" id="roomsname" type="text">
                        </div>

                        <div class="form-group">
                            <label class="form-col-form-label" for="inputSuccess1">{{__('Room no.')}}</label>
                            <input class="form-control"value="{{$rooms->room_no}}" name="room_no" id="room_no" type="text">
                        </div>

                        <div class="form-group">
                            <label class="form-col-form-label" for="inputSuccess1">{{__('Room rate')}}</label>
                            <input class="form-control" value="{{$rooms->rate}}" name="rate" id="roomrate" type="text">
                        </div>

                        <div class="form-group">
                            <label class="form-col-form-label" for="inputSuccess1">{{__('Room Contact no.')}}</label>
                            <input class="form-control" value="{{$rooms->contact}}" name="contact" id="room_contact_no" type="text">
                        </div>

                        <div class="form-group">
                            <label for="sel1">Select Room Type </label>
                            <select class="form-control" id="roomtype_id" name="roomtype_id">
                                @foreach (\App\Models\RoomType::all() as $roomType)
                                <option value="{{$rooms->roomtype_id}}">{{$roomType->name}}</option>
                                @endforeach
                             
                            </select>
                        </div>
                        <div class="card-footer justify-content-center">
                            <button class="btn btn-block btn-outline-success active" type="submit" aria-pressed="true">{{__('Save')}}</button>
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