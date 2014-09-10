@extends('backend.layout.defaultView')

@section('content')

  <section class="vbox">
      <section class="scrollable padder">
          <div class="m-b-md">
             <h2 class="font-thin m-b">Tags<span class="musicbar animate inline m-l-sm" style="width:20px;height:20px"> <span class="bar1 a1 bg-primary lter"></span> <span class="bar2 a2 bg-info lt"></span> <span class="bar3 a3 bg-success"></span> <span class="bar4 a4 bg-warning dk"></span> <span class="bar5 a5 bg-danger dker"></span> </span></h2>
          </div>
          <div class="alert alert-danger"><i class="fa fa-ban-circle"></i><i class="fa fa-warning"></i> <strong>Warning!</strong> <a href="#" class="alert-link">when deleting a CATEGORY</a> will automatically delete news in this category. </div>
          @if (Session::has('message'))
            <div class="row wrapper">
              <div class="alert alert-info"><i class="icon-check icon"></i> {{ Session::get('message') }}</div>
            </div>
          @endif
        <section class="panel panel-default">
          <header class="panel-heading text-left bg-light"> Tags </header>
          <div class="row wrapper text-right">
            <div class="col-sm-3"></div>
            <div class="col-sm-4 m-b-xs"></div>
            <div class="col-sm-5 m-b-xs">
               <a href="{{url('tags/create')}}" class="btn btn-s-md btn-info ">
               <i class="icon-tag icon"></i>
               Create New Tags</a>
            </div>
          </div>
           <div class="table-responsive">
              <table class="table table-striped b-t b-light">
                 <thead>
                    <tr>
                       <th style="width:20px;">NO</th>
                       <th>Tags Name</th>
                       <th style="width:165px;">Action</th>
                    </tr>
                 </thead>
                 <?php $no = 1; ?>
                 <tbody>
                    @foreach($tags as $value)
                      <tr>
                        <td>{{ $no}}</td>
                        <td>{{$value -> tags_name}}</td>
                        <td> 
                          <a class="btn btn-small btn-info" href="{{ URL::to('tags/'.$value->tags_id.'/edit')}}"><i class="fa fa-pencil"></i></a>
                           <!-- <a class="btn btn-small btn-danger" href="{{ URL::to('tags/' . $value->tags_id ) }}" onclick="return confirm('if you delete this category Absolutly the following news will deleted, Are you sure you want to delete this item? ');"><i class="fa fa-trash-o"></i></a> -->

                          {{ Form::open(array('url' => 'tags/' . $value->tags_id, 'class' => 'pull-right')) }}
                              {{ Form::hidden('_method', 'DELETE') }}
                              {{ Form::submit('del', array('class' => 'btn btn-danger')) }}
                          {{ Form::close() }}
                          <a class="btn btn-small btn-warning" href="{{ URL::to('tags/'.$value->tags_id)}}"><i class="icon-eyeglasses icon"></i></a>
                       </td>
                      </tr>
                    <?php $no++; ?>
                  @endforeach 
                 </tbody>
                    
              </table>
           </div>
           <footer class="panel-footer">
              <div class="row">
                 <div class="col-sm-4 text-center"> <small class="text-muted inline m-t-sm m-b-sm"></small> </div>
                 <div class="col-sm-4 text-right text-center-xs">
                     {{$tags->links()}}

                 </div>
              </div>
           </footer>
        </section>
      </section>
  </section> 

@stop