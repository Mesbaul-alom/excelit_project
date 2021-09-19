@extends('teacher/teacher_master',['data'=>$teacherdata]);

@section('main_content')

<!-- Modal -->
<div class="modal fade" id="resltview" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">edit profile</h5>





          <button  type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form   method="post" action="{{ route('teacher') }}">
                <input type="password" class="form-control" id="inputPassword2" placeholder="Password"> <br>
                <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                <div class="modal-footer">

                    <button type="button" href="/teacher" data-toggle="modal" data-target="#resltview" class="btn btn-primary">View result</button>
                  </div>

            </form>
          ...
        </div>

      </div>
    </div>
  </div>





<div class="container">
    <div class="main-body">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src={{asset('assets/images/users').'/'.$teacherdata->image}} alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                            <div class="mt-3">
                                @php
//print_r($teacherdata);
                                @endphp

                                <h4>{{$teacherdata->first_name}}</h4>
                                <h4>{{$teacherdata->id}}</h4>
                                <p class="text-secondary mb-1">Lecturer</p>
                                <p class="text-muted font-size-sm">X medical</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <p>{{$teacherdata->first_name}}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <p>{{$teacherdata->email}}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <p>{{$teacherdata->phone}}</p>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary">
                                <button type="button"  data-toggle="modal" data-target="#resltview" class="btn btn-primary">Edit details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
