@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-12" style="margin-top: 68px;">
        @if($user->friends)
            @foreach ($user->friends as $user_1)
                <div class="col-sm-3 text-center" style="padding: 5px;">
                    <div style="box-shadow: 0 0 10px 1px grey; padding: 20px;">
                    <img src="/uploads/images/{{ $user_1->user2->profile_image }}" alt="Profile Picture" width="50" height="50">
                        {{ $user_1->user2->name }}<br />
                        <a href="{{ route('front.profile', $user_1->user2->id) }}">View User</a>
                    </div>
                </div>
            @endforeach 
            
            @if ($user->friends()->count() == 0)
                <h1 class="text-center">This User does not have any friends</h1>
            @endif
        @endif
        </div>
    </div>
@endsection
