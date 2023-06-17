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

<style>
    .search-form {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .search-input {
        padding: 8px 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-right: 8px;
        width: 200px;
    }

    .search-button {
        padding: 8px 12px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<form action="{{ route('users.search') }}" method="GET" class="search-form">
    <input type="text" name="search" class="search-input" placeholder="Search users">
    <button type="submit" class="search-button">Search</button>
</form>



<style>
    .user-details {
        margin-bottom: 10px;
        padding: 10px;
        background-color: #f5f5f5;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .message {
        padding: 10px;
        text-align: center;
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
        border-radius: 4px;
    }
</style>

@if(session('users'))
    @foreach(session('users') as $user)
        <div class="user-details">
            <p>Name: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
            <p>Level ID: {{ $user->level_id }}</p>
        </div>
    @endforeach
@elseif(session('message'))
    <p class="message">{{ session('message') }}</p>
@endif


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
                                <img style="width: 40px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAMAAABHPGVmAAAAaVBMVEX///8A/wEA/wD//f+X/pYn/yfk/uXa/9lX/1Yy/zI6/zyR/pJQ/1Cm/6XS/tLu/+9z/nO6/rpF/kX3/vew/7GN/ozE/sOE/oKd/pzx/vGp/qgb/xt9/nxe/l+2/rSI/4lm/mXK/sls/mwhJyXaAAADAElEQVRoge2Ya5OrIAyGJSrWXrzU2vt2z/b//8hDAGvQlU5je+Z84J3ZGbUsD0kgBKIoKCgoKCgoKCjo/1Mjs3q3qzPZfApQrBYCrMRiVbwfJNtcE4SWfspb+UZAHJ0q3S0Q6ZeqVD9aFfOQcQKP4af5cpmnnVEgkq7RFWAzgyG32KH6W2+K0nwqi81amK9Ladogcc9m7I0VIhm4Qyb4FdbIrU2oUi6j1l4R7S9zqfkG+MKHA1h/3rgMDPF2IqjyiKy16CbdgsXY6zEefE1kbhEKsuQwpP7fxNvk0jPgyIHoOZPEnhYF9AzxzWEkGA+vr/YPhIJ4LZ5SiUHf+lrcegbTV1GFLvAliyPxFc8OFXVlSOtpsCJ28OIRRS324cnnByCQK4/R4Pz3+OAqiP7wGDg5SUSyc+n+fBfEjrUyOCsYkBVmv+5FzYHUmQJXwhCpYpwuvvBNaaEgdocoU71JEUoLdIGclHMvnMTV4MZkPZDaHk/dj2eKENhKbf++STIhiSEpO5ts/rPd/FBfQY224lb5+v6bKQfpTSg+92M2HpGC2pF0xkL2MqRW/5Xjw4mmWbUc4tKx426aq/muTXpNO7Dbg+ubY9Qs6XuX2tRH2PEhhTOR4PxFXsWlmws8yMNd0Z32CoImE3gsQJ67HoHXo6QU8tgXDrzAkykc5ZRC7OgzbylYU5guxvLyK4UscZ3oGBU4SSu4tYwwcCGdboBXDzkJUg4ZgxCs1fuKAXFTvbNaBkE3lgIn1Q82rZtLcYuYRH3IWYcid/uNNw7EqRUbpHK2E1tIkPog6W2BPuvb4fjLGo+GJVELD8bPcDSi4jHGxd0BLMOdSFvMNaeIqVGZWplziFtVYmkE3oLZr1HBXem40FHHOlTeYvaJxkeHSgwWRKKbzDr5jg9Bt5XT4UHMO5FqPTnO4cEYxOsbyYgyfTDV60PMZzw7YivN9JXtbeKywMCnPPmqpq89Zq2PoUpzgUNucER3gfNOffwqyugfXKpZ0KevB4OCgoKCgoKCguboL5elGmQrXF/oAAAAAElFTkSuQmCC" alt="">
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


