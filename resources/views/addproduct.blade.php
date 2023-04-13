@extends("masterpage")

@section("linksection")
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@section("main-content")
<center>
    <h1 class="hading">
        Add-Products
    </h1>
</center>

<center>
    {{-- if condition --}}
    @if ($message = Session::get('message'))
        <h2>{{$message}}</h2>
    @endif
    

    <form action="/insertproduct" method="post">
        @csrf
        <table>
            <tbody>
                <tr>
                    <th class="product">
                        Product-Code:
                    </th>
                    <td>
                        <input type="text" name="productcode"/>
                    </td>
                </tr>
                <tr>
                    <th class="product">
                        Product-Name:
                    </th>
                    <td>
                        <input type="text" name="productname"/>
                    </td>
                </tr>
                <tr>
                    <th class="product">
                        Product-Price:
                    </th>
                    <td>
                        <input type="number" name="productprice"/>
                    </td>
                </tr>
                <tr>
                    <th class="product">
                        Product-type:
                    </th>
                    <td>
                        <input type="radio" name="producttype" value="simple"/><label class="product"><b>: Simple</b></label>
                        <input type="radio" name="producttype" value="variable"/><label class="product"><b>: Variable</b></label>
                    </td>
                </tr>
                <tr>
                    <th class="product">
                        Product-catagery:
                    </th>
                    <td>
                        <select name="productcatagery">
                            <option value="cloth"   >Cloths</option>
                            <option value="shous"   >shous</option>
                            <option value="watch"   >watch</option>
                            <option value="cosmatic">cosmatic</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        <button type="submit" class="btn">Submit😊</button>
                    </th>
                </tr>
            </tbody>
        </table>
    </form>
</center>
@endsection