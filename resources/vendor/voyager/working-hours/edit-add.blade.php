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
                            <input type="text" name="day" id="day" class="form-control"
                                value="{{ old('day', $dataTypeContent->day) }}" required>
                        </div>

                        <!-- Opening Time -->
                        <div class="form-group">
                            <label for="opening_time">Opening Time</label>
                            <input type="text" name="opening_time" id="opening_time" class="form-control"
                                value="{{ old('opening_time', \Carbon\Carbon::parse($dataTypeContent->opening_time)->format('h:i A')) }}" required>
                        </div>

                        <!-- Closing Time -->
                        <div class="form-group">
                            <label for="closing_time">Closing Time</label>
                            <input type="text" name="closing_time" id="closing_time" class="form-control"
                                value="{{ old('closing_time', \Carbon\Carbon::parse($dataTypeContent->closing_time)->format('h:i A')) }}" required>
                        </div>

                        <!-- Is Closed Checkbox -->
                        <div class="form-group">
                            <label for="is_closed">Is Closed</label>
                            <input type="checkbox" name="is_closed" id="is_closed"
                                {{ $dataTypeContent->is_closed ? 'checked' : '' }}>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css"/>

    <script>
        $(document).ready(function(){
            $('#opening_time').timepicker({
                timeFormat: 'h:mm p',
                interval: 30,
                minTime: '12:00am',
                maxTime: '11:59pm',
                dynamic: false,
                dropdown: true,
                scrollbar: true
            });

            $('#closing_time').timepicker({
                timeFormat: 'h:mm p',
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
