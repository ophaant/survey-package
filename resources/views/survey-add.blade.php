@extends('survey::templates.html')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h2 class="display-3">Add a Survey</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <form action="{{ route('save-survey') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}"/>
                    @if($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>

                    @endif
                </div>

                <div class="form-group">
                    <label>
                        <input type="checkbox" name="is_published"/>
                        Publish the Survey
                    </label>
                </div>

                <div class="form-group">
                    <button class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
