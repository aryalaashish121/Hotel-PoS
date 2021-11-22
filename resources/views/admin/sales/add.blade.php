@extends('layouts.app')



@section('content')

<div class="container-fluid">
    <div class="fade-in row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Sales') }}</div>

                <div class="card-body justify-content-center">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header"><strong>{{ __('Add New Room ') }}</strong></div>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="" method="POST">
                                @csrf
                                <div class="card-body">
                                    
                                    
                                    <livewire:customerfilter />
                            </form>
                        </div>

                        {{-- sales content strats from here --}}
                        <div class="card-body justify-content-center">
                            <form action="">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="form-col-form-label"
                                            for="inputSuccess1">{{ __('Item name.') }}</label>
                                        <input class="form-control" name="room_no" id="room_no" type="text">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-col-form-label"
                                            for="inputSuccess1">{{ __('Price') }}</label>
                                        <input class="form-control" name="rate" id="roomrate" type="text">
                                    </div>
                                </div>

                                <div class="card-footer justify-content-center">
                                    <button class="btn btn-block btn-outline-success active" type="submit"
                                        aria-pressed="true">{{ __('Save') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           <livewire:addsales />
            @livewireScripts
           
        </div>
    </div>
</div>
</div>
</div>
@endsection
