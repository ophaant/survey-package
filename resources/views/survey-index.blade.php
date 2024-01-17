@extends('survey::templates.html')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h2 class="display-3">Lis of Survey</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Published</th>
                </tr>
                </thead>

                <tbody>
                @foreach($audits as $audit)
                    <tr>
                        <td>{{ $audit->id }}</td>
                        <td>{{ $audit->name }}</td>
                        <td>{{ ($audit->is_published == true) ? 'Published' : 'Unpublished' }}</td>
                        <td>View / Delete</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        {{ $audits->render() }}
    </div>
@endsection
