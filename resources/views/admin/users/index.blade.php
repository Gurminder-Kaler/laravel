@extends('layouts.admin')
@section('content')

    <h1>Users</h1>

   <table class="table">
     <thead class="thead-dark">
       <tr>
         <th scope="col">Id</th>
         <th scope="col">User Name</th>
         <th scope="col">Photo</th>
         <th scope="col">Email</th>
         <th scope="col">Role</th>
         <th scope="col">Status</th>
         <th scope="col">Created At</th>
         <th scope="col">Updated At</th>
       </tr>
     </thead>
     <tbody>
     @if($users)
         @foreach($users as $user)

       <tr>
         <td>{{$user->id}}</td>
         <td><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a></td>
         {{--<td><img height="50px" width="50px" src="{{$user->photo ? $user->photo->file : 'No Photo for the user added'}}" alt=" No photo for the user added"></td>--}}
         <td><img height="50px" width="50px" src="{{$user->photo ? $user->photo->file :'http://placehold.it/400x400'}}" class="img img-responsive img-rounded" alt="NO photo to edit"></td>
         <td>{{$user->email}}</td>
         <td>{{$user->role['name']}}</td>
         {{--<td>{{$user->role->name}}</td>--}}
         {{--<td>bobo</td>--}}
         <td>{{$user->is_active == 1 ? 'Active': 'Not Active'}}</td>
         <td>{{$user->created_at->diffForHumans()}}</td>
         <td>{{$user->updated_at->diffForHumans()}}</td>
       </tr>
@endforeach
     @endif
     </tbody>
   </table>
       @endsection