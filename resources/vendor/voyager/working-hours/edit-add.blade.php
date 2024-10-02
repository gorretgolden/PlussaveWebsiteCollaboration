@extends('voyager::master')

@section('content')
<div class="page-content edit-add container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bordered">
                <div class="panel-body">
                    @include('voyager::multilingual.input-hidden')
                    <form role="form" action="{{ route('voyager.working-hours.update', $dataTypeContent->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Day -->
                        <div class="form-group">
                            <label for="day">Day</label>
                            <select name="day" id="day" class="form-control" required>
                                <option value="Monday" {{ old('day', $dataTypeContent->day) === 'Monday' ? 'selected' : '' }}>Monday</option>
                                <option value="Tuesday" {{ old('day', $dataTypeContent->day) === 'Tuesday' ? 'selected' : '' }}>Tuesday</option>
                                <option value="Wednesday" {{ old('day', $dataTypeContent->day) === 'Wednesday' ? 'selected' : '' }}>Wednesday</option>
                                <option value="Thursday" {{ old('day', $dataTypeContent->day) === 'Thursday' ? 'selected' : '' }}>Thursday</option>
                                <option value="Friday" {{ old('day', $dataTypeContent->day) === 'Friday' ? 'selected' : '' }}>Friday</option>
                                <option value="Saturday" {{ old('day', $dataTypeContent->day) === 'Saturday' ? 'selected' : '' }}>Saturday</option>
                                <option value="Sunday" {{ old('day', $dataTypeContent->day) === 'Sunday' ? 'selected' : '' }}>Sunday</option>
                            </select>
                        </div>

                        <!-- Opening Time -->
                        <div class="form-group">
                            <label for="opening_time">Opening Time</label>
                            <input type="text" name="opening_time" id="opening_time" class="form-control"
                                value="{{ old('opening_time', $dataTypeContent->opening_time) }}" required>
                        </div>

                        <!-- Closing Time -->
                        <div class="form-group">
                            <label for="closing_time">Closing Time</label>
                            <input type="text" name="closing_time" id="closing_time" class="form-control"
                                value="{{ old('closing_time', $dataTypeContent->closing_time) }}" required>
                        </div>

                        <!-- Is Closed Checkbox -->
                        <div class="form-group">
                            <label for="is_closed">Is Closed</label>
                            <select name="is_closed" id="is_closed" class="form-control">
                                <option value="1" {{ $dataTypeContent->is_closed ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ !$dataTypeContent->is_closed ? 'selected' : '' }}>No</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css"/>

    <script>
        $(document).ready(function(){
            // Initialize timepicker for opening time
            $('#opening_time').timepicker({
                timeFormat: 'h:mm p', // 12-hour format
                interval: 30,
                minTime: '12:00am',
                maxTime: '11:59pm',
                dynamic: false,
                dropdown: true,
                scrollbar: true
            });

            // Initialize timepicker for closing time
            $('#closing_time').timepicker({
                timeFormat: 'h:mm p', // 12-hour format
                interval: 30,
                minTime: '12:00am',
                maxTime: '11:59pm',
                dynamic: false,
                dropdown: true,
                scrollbar: true
            });
        });
    </script>
@endsection
