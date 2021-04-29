@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Category List</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('categories.create') }}">Create New Category</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->name }}</td>
            <td>
                <form action="{{ route('categories.destroy',$value->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('categories.show',$value->id)}}">Show</a>
                    <a class="btn btn-primary" href="{{ route('categories.edit',$value->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $data->links() }}
@endsection