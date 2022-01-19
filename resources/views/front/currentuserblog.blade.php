@extends('layouts.app')

@section('content')

@include('inc.navbar')

<!-- User Created Blogs -->
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Body</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>
    <tbody>
    @foreach($blogs as $blog)
    <tr>
    <td>{{$blog->title}}</td>
    <td>{{$blog->body}}</td>
    <td>{{$blog->created_at}}</td>
    <td>{{$blog->updated_at}}</td>
    <td><a href="{{route('blogs.edit', $blog->id)}}"><button>Edit</button></a></td>
    <td>
        <form action="{{route('blogs.destroy',$blog->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form></td>

    </tr>
    @endforeach
    </tbody>
</table>
<a href="{{route('blogs.create')}}"><button>Create a Blog</button></a>
<a href="{{route('home')}}"><button>Go Back To Dashboard</button></a>



@endsection

    
