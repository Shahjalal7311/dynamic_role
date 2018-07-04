@extends('layouts.app')

@section('title', 'Posts')

@section('content')

<section class="content-header">
  <h1>
    Dashboard
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">Post</li>
  </ol>
</section>
 <section class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">{{ $result->total() }} {{ str_plural('Post', $result->count()) }}</h3>
              <div class="pull-right">
                @can('add_posts')
                    <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm"> 
                        <i class="glyphicon glyphicon-plus-sign"></i> Create
                    </a>
                @endcan
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Created At</th>
                        @can('edit_posts', 'delete_posts')
                            <th class="text-center">Actions</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @foreach($result as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->user['name'] }}</td>
                            <td>{{ $item->created_at->toFormattedDateString() }}</td>
                            @can('edit_posts', 'delete_posts')
                            <td class="text-center">
                                @include('shared._actions', [
                                    'entity' => 'posts',
                                    'id' => $item->id
                                ])
                            </td>
                            @endcan
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                {{ $result->links() }}
              </ul>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>    
</section>

@endsection