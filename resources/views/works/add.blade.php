@extends('layouts.admin.layout')
@section('title', 'Add Project')
@section('content')

<div class="col-md-8 col-lg-9 offset-md-4">
    <h2>Add New Projects</h2>
    <form action="{{ route('projects.submit') }}" method="POST" class="form-contact" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-5">
                <div class="form-group">
                    <input class="form-control" name="image" type="file" required>
                </div>
                <div class="form-group">
                    <input class="form-control" name="title" type="text" placeholder="Enter Title" required maxlength="30">
                </div>
                <div class="form-group">
                    <input class="form-control" name="description" type="text" placeholder="Enter Description" required>
                </div>
                <div class="form-group text-center text-md-right">
                    <button type="submit" class="btn active btn--leftBorder">Save Project</button>
                </div>
            </div>
        </div>
    </form>
</div>
<hr>

<table class="table">
    <thead>
        <tr>
            <th>#id</th>
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            <th> </th>
        </tr>
    </thead>
    <tbody>
        @foreach (App\Models\Project::all() as $item)
            <tr>
                <form action="{{ route('projects.edit', ['project' => $item->id]) }}" method="POST">
                    @csrf
                    <td>
                        {{ $item->id }}
                    </td>
                    <td>
                        <img src="{{ asset($item->image) }}" style="max-width:150px;" alt="">
                        {{-- <input type="text" class="form-control" name="icon" placeholder="Enter Icon" required
                            value="{{ $item->icon }}"> --}}
                    </td>
                    <td>
                        <input type="text" class="form-control" name="title" placeholder="Enter Title" required
                            value="{{ $item->title }}">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="description" placeholder="Enter Description" required
                            value="{{ $item->description }}">
                    </td>
                    <td>
                        {{-- <button type="submit" class="btn btn-primary">Update</button> --}}
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('projects.delete', ['project' => $item->id]) }}" class="btn btn-danger"> Delete</a>
                    </td>
                </form>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
