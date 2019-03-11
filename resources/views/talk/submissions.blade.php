@extends('layouts.app')

@section('content')
<header class="masthead">
    <div class="container h-100">
        <div class="h-100" style="padding-top:70px;">
            <main class="py-4">  
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <table class="table table-striped task-table">
                                    <thead>
                                    <th>Name</th>
                                    <th>Email To</th>
                                    <th>Title</th>
                                    <th>Abstract</th>
                                    </thead>
                                    <tbody>
                                    @foreach ($talks as $talk)
                                        <tr>
                                            <td class="table-text"><div>{{ $talk->name }}</div></td>
                                            <td class="table-text"><div>{{ $talk->email }}</div></td>
                                            <td class="table-text"><div>{{ $talk->title }}</div></td>
                                            <td class="table-text"><div>{{ $talk->abstract }}</div></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</header>
@endsection
