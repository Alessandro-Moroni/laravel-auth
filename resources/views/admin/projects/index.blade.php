@extends('layouts.admin')

@section('content')

<div class="p-3">
    <h2>Projects</h2>

    @if (session('error'))

    <div class="alert alert-danger" role="alert">
        {{session('error')}}
    </div>
    @endif

    @if (session('success'))

    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif

    <div>
        <form action="{{ route('admin.projects.store') }}" method="POST" class="d-flex">
            @csrf
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="title">
            <button class="btn btn-outline-success" type="submit">Add</button>
        </form>

    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $item)

            <tr>
              <td>
                <input type="text" value="{{ $item->title }}">
              </td>

              <td>
                <button type="button" class="btn btn-primary">
                    <i class="fa-solid fa-pen"></i>
                </button>

                <button type="button" class="btn btn-danger">
                    <i class="fa-solid fa-trash"></i>
                </button>
              </td>
            </tr>
            @endforeach

        </tbody>
    </table>

</div>

@endsection
