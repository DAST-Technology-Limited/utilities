@extends('blog.app')

@section('content')


   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<section class="about container" id="about" style="margin-top:1rem;">
    <div class="contentBx">
        <h2 class="titleText">Admin Actions</h2>
        <p class="title-text">
            Never miss out again with where blockchain web3 and tech is going! DAST Blog got you covered!
        </p>
        
<p>Total Editors: {{ $totalUsersWithLevelTwo }}</p>
        <a href="#blogs" style="background: rgb(5, 171, 7);color:white;" class="btn2">View Users</a>
        <a href="/create" style="background: rgb(1, 1, 37);color:white;" class="btn2">Create Post</a>
    </div>
    <div class="imgBx">
        <img src="https://media.istockphoto.com/id/1438623716/photo/black-woman-with-laptop-reading-typing-and-working-for-online-digital-newspaper-marketing-or.webp?b=1&s=170667a&w=0&k=20&c=l6JsW73GP3gWBLPDEdYbDmp-exPW02MRWpjpEzdPjLg=" alt="" class="fitBg">
    </div>
</section>

{{-- <div class="post container" id="blogs"> --}}
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">user->id</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Level</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if ($user->level_id == 1)
                                User
                            @elseif ($user->level_id == 2)
                                Editor
                            @elseif ($user->level_id == 3)
                                Admin
                            @else
                                Unknown
                            @endif
                        </td>
                        <td>
                            <a style="color:green;" href="{{ route('users.updateLevel', $user->id) }}">
                                <img style="width: 30px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8No7tEwRUGaUFt0M4reOoNQdeS8Wtv32eqw&usqp=CAU" alt="">
                            </a>
                            <a style="color:green;" href="{{ route('users.demoteLevel', $user->id) }}" onclick="event.preventDefault(); document.getElementById('demote-form-{{ $user->id }}').submit();">
                                <img style="width: 30px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKKzFjRgauOimxXhDMtRYB0htnib_VOIOgGg&usqp=CAU" alt="">
                            </a>
                            <form id="demote-form-{{ $user->id }}" action="{{ route('users.demoteLevel', $user->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('PUT')
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        {{ $users->links() }}
    </div>
    

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


