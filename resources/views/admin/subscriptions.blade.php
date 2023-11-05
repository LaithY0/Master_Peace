@extends('admin.index')


@section('title', 'Dashboard')

@section('body')

<div class="card-body table-responsive">

    <div>
        @if (count($errors) >0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if (\Session::has('success'))
                <div class="alert alert-success " id="success-alert">
                    <p>{{ \Session::get('success') }}</p>
                </div>

                <script>
                    var milliseconds = 2500;
                    setTimeout(function () {
                    document.getElementById('success-alert').remove();
                    }, milliseconds);
                    </script>
 

            @endif
    </div>

    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>User name</th>
                <th>Phone number</th>
                <th>Subscription start</th>
                <th>Subscription end</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
           
                    
               
            <tr>
                <td>{{$user->fname}} {{$user->lname}}</td>
                <td> {{$user->phone}} </td>
                <td>
                    @foreach ($subscriptions->where('user_id', $user->id) as $subscription)
                        {{$subscription->start_in}}
                    @endforeach
                </td>
                <td>
                    @foreach ($subscriptions->where('user_id', $user->id) as $subscription)
                        {{$subscription->end_in}}
                    @endforeach
                </td>
                <td> @foreach ($subscriptions->where('user_id', $user->id) as $subscription)
                    {{$subscription->price}}
                @endforeach
             </td> 
                <td>
                                    
                 <a href="{{ route('deletesubscriptions', $user->id ) }}" style="margin-left: 1rem;"> <i class="fa-solid fa-trash" style="color: #dd2727;"></i></i></a> 
                
                </td>
            </tr>
           
            @endforeach
        </tbody>
    </table>
</div>


@endsection
