@extends('frontend.layouts.app')

@section('content')
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>
                        <i class="fa fa-dashboard"></i> {{ __('navs.frontend.dashboard') }}
                    </strong>
                </div><!--card-header-->

                <div class="card-body">
                    <div class="row">
                        <div class="col col-sm-4 order-1 order-sm-2  mb-4">
                            <div class="card mb-4 bg-light">
                                <img class="card-img-top" src="{{ $logged_in_user->picture }}" alt="Profile Picture">

                                <div class="card-body">
                                    <h4 class="card-title">
                                        {{ $logged_in_user->name }}<br/>
                                    </h4>

                                    <p class="card-text">
                                        <small>
                                            <i class="fa fa-envelope-o"></i> {{ $logged_in_user->email }}<br/>
                                            <i class="fa fa-calendar-check-o"></i> {{ __('strings.frontend.general.joined') }} {{ $logged_in_user->created_at->timezone(get_user_timezone())->format('F jS, Y') }}
                                        </small>
                                    </p>

                                    <p class="card-text">

                                        <a href="{{ route('frontend.user.account')}}" class="btn btn-info btn-sm mb-1">
                                            <i class="fa fa-user-circle-o"></i> {{ __('navs.frontend.user.account') }}
                                        </a>

                                        @can('view backend')
                                            &nbsp;<a href="{{ route ('admin.dashboard')}}" class="btn btn-danger btn-sm mb-1">
                                                <i class="fa fa-user-secret"></i> {{ __('navs.frontend.user.administration') }}
                                            </a>
                                        @endcan
                                    </p>
                                </div>
                            </div>

                            <div class="card mb-4">
                                <div class="card-header"><h4 class="modal-title" id="myModalLabel">  </h4></div>
                                <!-- Trigger the modal with a button -->
<a href="#" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#myModal">CREATE STUDY PLAN</a>

<!-- Modal -->
<div id="myModal" class="modal fade" role="document">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
             <h4 class="modal-title">Enter your Research study plan here</h4>
             <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">


        <div class="form-group">
    <label class="col-md-6 control-label">select number of Research Studies </label>
    <div class="col-md-2">
        <select class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option> 
            <option value="5">5</option>        
        </select>
    </div>
</div>

                        {!!Form::label('name', 'STUDY TITLE', ['class' => 'control-label col-sm-10'])!!}
                          
                         {!! Form::input('study_name', 'study_name', null, ['class' => 'form-control','placeholder'=>'study title goes here']) !!}
      

                            
                                  {!! Form::label('objectives', 'OBJECTIVES:', ['class' => 'col-md-4 control-label']) !!}
                                  
                                  {!!Form::text('objectives',null, ['class' => 'form-control','rows'=>5]) !!}

                                   {!!Form::text('objectives',null, ['class' => 'form-control','rows'=>5]) !!}

                                 
                        

        {!! Form::close() !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>







                                <div class="card-body">
                                    <!--<h4 class="card-title">Info card title</h4> -->
                                      <ul><a href="#" class="btn btn-secondary btn-sm btn-block">Research and Study Plan</a></ul>  
                                      <ul><a href="#" class="btn btn-secondary btn-sm btn-block"> Conferences/workshops Attended</a></ul>
                                      <ul><a href="#" class="btn btn-secondary btn-sm btn-block">Manuscript and Publications</a></ul>
                                      <ul><a href="#" class="btn btn-secondary btn-sm btn-block">Public Engagement</a></ul>
                                      <ul><a href="#" class="btn btn-secondary btn-sm btn-block">General Comments</a></ul>
                                   
                                </div>
                            </div><!--card-->
                        </div><!--col-md-4-->

                        <div class="col-md-8 order-2 order-sm-1">
                            <div class="row">
                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            Sumarry Reports
                                        </div><!--card-header-->

                                        <div class="card-body">
                                            This section displays  summary of student activities.
                                           
                                            <table class="table table-hover">
  
  <tbody>
    <tr>
      <td scope="row">No. of Courses attended:</td>
      <td>0</td>
      
    </tr>
    <tr>
      <td scope="row">Number. of Meetings with Supervisors:</td>
      <td>0</td>
    </tr>
     <tr>
      <td scope="row">No. of Conferences attended:</td>
      <td>0</td>
    </tr>
     <tr>
      <td scope="row">No. of Publications:</td>
      <td>0</td>
    </tr>
  </tbody>
</table>
                                        </div><!--card-body-->
                                    </div><!--card-->
                                </div><!--col-md-6-->
                            </div><!--row-->

                            <div class="row">
                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-header"><i class="fa fa-group" style="font-size:48px"></i>
                                          Item

                                        </div><!--card-header-->

                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non qui facilis deleniti expedita fuga ipsum numquam aperiam itaque cum maxime.
                                        </div><!--card-body-->
                                    </div><!--card-->
                                </div><!--col-md-6-->
                            </div><!--row-->

                            <div class="row">
                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            Item
                                        </div><!--card-header-->

                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non qui facilis deleniti expedita fuga ipsum numquam aperiam itaque cum maxime.
                                        </div><!--card-body-->
                                    </div><!--card-->
                                </div><!--col-md-6-->

                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            Item
                                        </div><!--card-header-->

                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non qui facilis deleniti expedita fuga ipsum numquam aperiam itaque cum maxime.
                                        </div><!--card-body-->
                                    </div><!--card-->
                                </div><!--col-md-6-->

                                <div class="w-100"></div>

                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            Item
                                        </div><!--card-header-->

                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non qui facilis deleniti expedita fuga ipsum numquam aperiam itaque cum maxime.
                                        </div><!--card-body-->
                                    </div><!--card-->
                                </div><!--col-md-6-->

                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            Item
                                        </div><!--card-header-->

                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non qui facilis deleniti expedita fuga ipsum numquam aperiam itaque cum maxime.
                                        </div><!--card-body-->
                                    </div><!--card-->
                                </div><!--col-md-6-->
                            </div><!--row-->
                        </div><!--col-md-8-->
                    </div><!-- row -->
                </div> <!-- card-body -->
            </div><!-- card -->
        </div><!-- row -->
    </div><!-- row -->
@endsection
