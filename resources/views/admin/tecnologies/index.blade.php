@extends('layouts.admin')

@section('content')

<div class="p-3">

    <h2>Tecnologies</h2>

    <div class="d-flex">

        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>

    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tecnologies as $item)

            <tr>
              <td>{{ $item->title }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>

</div>


@endsection
