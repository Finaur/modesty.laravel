@extends('backend.layout.defaultView')

@section('content')

	<section class="vbox">
        <section class="scrollable padder">
            <div class="m-b-md">
               <h2 class="font-thin m-b">Discover <span class="musicbar animate inline m-l-sm" style="width:20px;height:20px"> <span class="bar1 a1 bg-primary lter"></span> <span class="bar2 a2 bg-info lt"></span> <span class="bar3 a3 bg-success"></span> <span class="bar4 a4 bg-warning dk"></span> <span class="bar5 a5 bg-danger dker"></span> </span></h2>
            </div>
            @if (Session::has('message'))
            <div class="row wrapper">
              <div class="alert alert-info"><i class="icon-check icon"></i> {{ Session::get('message') }}</div>
            </div>
            @endif
            <div class="row">
               <div class="col-sm-12">
                  <form id="wizardform" method="get" action="index.html">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <ul class="nav nav-tabs font-bold">
                              <li><a href="#step1" data-toggle="tab">
                                 Dashboard</a>
                              </li>
                           </ul>
                        </div>
                        <div class="panel-body">
                          <p>welcome <strong>{{ Auth::user()->user_name }}</strong></p>
                           <p>
                              This twitter bootstrap plugin builds a wizard out of a formatter tabbable structure. It allows to build a wizard functionality using buttons to go through the different wizard steps and using events allows to hook into each step individually.
                           </p>
                           <div class="line line-lg"></div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
        </section>
    </section> 

@stop