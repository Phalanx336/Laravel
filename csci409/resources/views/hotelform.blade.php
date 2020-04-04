<?php
?>

<!--<form method="post" action="/hotels/store">
    <label for="name">Name:</label><br>
    <input type="text" id="name" value="John">
    <label for="address 1">Name:</label><br>
    <input type="text" id="address 1" value="Address">
    <label for="address 2">Name:</label><br>
    <input type="text" id="address 2" value="Address">
    <label for="city">Name:</label><br>
    <input type="text" id="city" value="City">
    <label for="state">Name:</label><br>
    <input type="text" id="state" value="State">
    <label for="zip">Name:</label><br>
    <input type="text" id="zip" value="Zip">
    <label for="description">Name:</label><br>
    <input type="text" id="description" value="Description">
    <input type="submit" value="submit">
</form>-->

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Image</th>
    </tr>
    </thead>
    <tbody>
    @foreach($hotels as $hotel)
        <tr>
            <td>{{$hotel->id}}</td>
            <td>{{$hotel->name}}</td>
            <td>
                {{$hotel->address_1}}<br />
                {{$hotel->address_2}}<br />
                {{$hotel->city}} {{$hotel->state}}, {{$hotel->zip}}
            </td>
            <td>
                <img src="{{$hotel->image}}" style="width:50%;height:50%;"/>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
