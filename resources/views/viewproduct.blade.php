@extends("masterpage")


@section("linksection")
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection


@section("main-content")
    <center>
        <h1 class="hading">
            View-product
        </h1>
    </center>

    <center>
        @if ($message = Session::get('message'))
        <h2>{{$message}}</h2>
    @endif
        <table border="2" cellpadding="5.50" cellspacing="2" class="tbl">
            <thead>
                <tr class="view">
                    <th>Pid </th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Price</th>                   
                    <th>Catagery</th>
                    <th>Type</th>    
                    <th>Action</th>                
                    {{-- <th>Image</th> --}}
                </tr>
            </thead>
            <?php
                // while($row=mysqli_fetch_assoc($data))
                // {

                // }
            ?>
            <tbody>
                {{-- one row acess --}}
                @foreach($allproducts as $row)
                    <tr>
                        <td>{{$row->pid}}</td>
                        <td>{{$row->code}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->price}}</td>
                        <td>{{$row->category}}</td>
                        <td>{{$row->type}}</td>
                        <td>
                            <a href="/deleteproduct/{{$row->pid}}" class="delete">Delete</a>
                            <a href="/editproduct/{{$row->pid}}" class="edit">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </center>
@endsection