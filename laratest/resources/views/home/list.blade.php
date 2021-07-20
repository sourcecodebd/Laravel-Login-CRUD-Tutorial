@extends('layout.main')
	
	@section('title')
    View User List
	@endsection

	@section('main_content')	
	<div class="regblock">

	@section('nav_bar')
    <a href="{{route('home.index')}}"> Home</a>
	<a href="{{route('home.create')}}"> Create User</a>
    <a href="{{route('product.index')}}"> Product</a>
    <a href="{{route('logout.index')}}"> Logout</a>
    <br><br>
	@endsection

	@section('page_title')
	<div class="logintitleblock">
    <h1>User List</h1>
	</div>
	@endsection

    <table border="1" style="border-radius: 5%; border: 2px solid white; background-color: white; text-align:center; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <tr>
            <td>Id</td>
            <td>Username</td>
            <td>Password</td>
            <td>Name</td>
            <td>Type</td>
            <td>Action</td>
        </tr>

        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['user_id'] }}</td>
            <td>{{ $list[$i]['username'] }}</td>
            <td>{{ $list[$i]['password'] }}</td>
            <td>{{ $list[$i]['name'] }}</td>
            <td>{{ $list[$i]['type'] }}</td>
            <td>
                <div class="link">
                <a href="{{ route('home.edit', [$list[$i]['user_id']]) }}">Edit</a>
                </div>
                <div class="link">
                <a href="{{ route('home.delete', [$list[$i]['user_id']]) }}">Delete</a>
                </div>
                <div class="link">
                <a href="{{ route('home.show', [$list[$i]['user_id']]) }}">Details</a>
                </div>
            </td>
        </tr>
        @endfor
        <tr>
		    <td><div class="link"><a href="{{route('home.index')}}">Back</a></div></td>
		<tr>
    </table>

</div>

<div class="sessionmsg">
    {{session('msg')}}
</div>

@endsection