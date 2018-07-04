@extends('layouts.app')

@section('title', 'Edit User ' . $user->first_name)

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Edit {{ $user->first_name }}</h3>
              <div class="pull-right">
                 <a href="{{ route('users.index') }}" class="btn btn-default btn-sm"> 
                    <i class="fa fa-arrow-left"></i> Back
                 </a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                {!! Form::model($user, ['method' => 'PUT', 'route' => ['users.update',  $user->id ] ]) !!}
                    @include('user._form')
                    <!-- Submit Form Button -->
                    {!! Form::submit('Save Changes', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>    
</section>
@endsection