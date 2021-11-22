<div class="row" id="app">
    <Admin></Admin>
    
    <div class="form-group ml-6">
        <label class="form-col-form-label"
            for="inputSuccess1">{{ __('Room no.') }}</label>
           
        <input wire:model="search1" id="search1"  class="form-control" name="room_no" id="room_no" type="text">
        @error('search1') <div class="error text-danger">{{$message}}</div> @enderror
        <div class="abolute rounded w-full bg-gray-200 pl-2">
            
            <ul id="search1-results">
              @foreach($search1_results as $search1)
                <li onclick="$('#search1').val(this.innerHTML); $('#search1-results').empty()"> 
                  {{ $search1['name'] }}
                </li>
              @endforeach
            </ul>                     
          </div>
       
    </div>

    <div class="form-group ml-6">
        <label class="form-col-form-label"
            for="inputSuccess1">{{ __('Customer Name') }}</label>
        <input class="form-control" name="rate" id="roomrate" type="text">
    </div>

    <div class="form-group ml-6">
        <label class="form-col-form-label"
            for="inputSuccess1">{{ __('Contact no.') }}</label>
        <input class="form-control" name="contact" id="room_contact_no" type="text">
    </div>

    <div class="form-group ml-6">
        <label for="sel1">Select Room Type </label>
        <select class="form-control" id="roomtype_id" name="roomtype_id">
            @foreach (\App\Models\RoomType::all() as $roomType)
                <option value="{{ $roomType->id }}">{{ $roomType->name }}</option>
            @endforeach

        </select>
    </div>
</div>
