@extends('layouts.admin.layout')
@section('title', 'Add Services')
@section('content')

    
        <h2>Add New Projects</h2>
        <form action="{{ route('services.submit') }}" method="POST" class="form-contact" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    @if (env('theme',"theme1")=="theme1")
                        <div class="form-group">
                            <input class="form-control" name="icon" type="text" placeholder="Enter Icon" required>
                        </div>
                       @else 
                        <div class="form-group">
                            <input class="form-control" name="icon" type="file"  accept="images/*" placeholder="Enter Icon" required>
                        </div>
                    @endif
                    <div class="form-group">
                        <input class="form-control" name="title" type="text" placeholder="Enter Title" required
                            >
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="description" type="text" placeholder="Enter Description" required></textarea>
                       
                    </div>
                    <div class="form-group text-center text-md-right">
                        <button type="submit" class="btn btn-success">Save Project</button>
                    </div>
                </div>
            </div>
        </form>

    

    <hr>

    <table class="table">
        <thead>
            <tr>
                <th>#id</th>
                <th>Icon</th>
                <th>Title</th>
                <th>Description</th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Service::all() as $item)
                <tr>
                    <form action="{{ route('services.edit', ['service' => $item->id]) }}" method="POST">
                        @csrf
                        <td>
                            {{ $item->id }}
                        </td>
                        <td>
                            @if (env('theme',"theme1")=="theme1")
                                <input type="text" class="form-control" name="icon" placeholder="Enter Icon" required
                                value="{{ $item->icon }}">
                            @else
                                <img src="{{asset($item->icon)}}" alt="" style="width:150px;">
                            @endif
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
                            <a href="{{ route('services.delete', ['service' => $item->id]) }}" class="btn btn-danger"> Delete</a>
                        </td>
                    </form>
                </tr>
            @endforeach
        </tbody>
    </table>



@endsection
