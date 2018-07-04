@extends('layouts.app')

@section('title', 'Edit Post ')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Post</h3>
              <div class="pull-right">
                 <a href="{{ route('posts.index') }}" class="btn btn-default btn-sm"> 
                    <i class="fa fa-arrow-left"></i> Back
                 </a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                {!! Form::model($post, ['method' => 'PUT', 'route' => ['posts.update',  $post->id ] ]) !!}
                    @include('post._form')
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