@extends('admin.index')


@section('title' , 'Dashbord')


@section('body')


          @if (\Session::has('success'))
                     <div class="alert alert-success " style="width: 50%;" id="success-alert">
                         <p>{{ \Session::get('success') }}</p>
                     </div>

                     <script>
                        var milliseconds = 2000;
                        setTimeout(function () {
                        document.getElementById('success-alert').remove();
                        }, milliseconds);
                        </script>
     
                 @endif
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Comment</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($user as $user)
        <tr>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->phone}}</td>
          <td>{{$user->comment}}</td>
          <td> 
             <a href="{{ route('deletecomment', $user->id ) }}"  style="margin-left: 1.5rem;">
              <i class="fa-solid fa-trash" style="color: #dd2727;"></i>
          </td>
        
        </tr>
       @endforeach
        </tfoot>
      </table>
    </div>
  

@endsection

