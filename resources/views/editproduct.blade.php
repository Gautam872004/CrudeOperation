@extends("masterpage")

@section("linksection")
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@section("main-content")
<center>
    <h1 class="hading">
        Edit-Products
    </h1>
</center>

<center>
    {{-- if condition --}}
    @if ($message = Session::get('message'))
        <h2>{{$message}}</h2>
    @endif
    

    <form action="/updateproduct/{{$data -> pid }}" method="post">
        @csrf
        <table>
            <tbody>
                <tr>
                    <th class="product">
                        Product-Code:
                    </th>
                    <td>
                        <input type="text" name="productcode" value="{{$data -> code }}"/>
                    </td>
                </tr>
                <tr>
                    <th class="product">
                        Product-Name:
                    </th>
                    <td>
                        <input type="text" name="productname" value="{{$data -> name }}"/>
                    </td>
                </tr>
                <tr>
                    <th class="product">
                        Product-Price:
                    </th>
                    <td>
                        <input type="number" name="productprice" value="{{$data -> price }}"/>
                    </td>
                </tr>
                <tr>
                    <th class="product">
                        Product-type:
                    </th>
                    <td>
                        <input type="radio" name="producttype" value="simple" @if($data->type == "simple") checked @endif/><label class="product"><b>: Simple</b></label>
                        <input type="radio" name="producttype" value="variable" @if($data->type =="variable") checked @endif/><label class="product"><b>: Variable</b></label>
                    </td>
                </tr>
                <tr>
                    <th class="product">
                        Product-catagery:
                    </th>
                    <td>
                        <select name="productcatagery">
                            <option value="cloth"    @if($data->category == "cloth") selected @endif>Cloth</option>
                            <option value="shous"    @if($data->category == "shous") selected @endif>shous</option>
                            <option value="watch"    @if($data->category == "watch") selected @endif>watch</option>
                            <option value="cosmatic" @if($data->category == "cosmatic") selected @endif>cosmatic</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        <button type="submit" class="btn">Update😊</button>
                    </th>
                </tr>
            </tbody>
        </table>
    </form>
</center>
@endsection