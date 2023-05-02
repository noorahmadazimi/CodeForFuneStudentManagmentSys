@extends('dashboard.layouts.maintemplate')

@section('title', 'Register Student')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Register Student Project</h1>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                {{-- --------- Check in Flash Message -------- --}}
                     
                @if(Session('status'))
                   <h6 class="alert alert-success">{{ Session('status') }}</h6>
                @endif

                @if(Session('badstatus'))
                <h6 class="alert alert-danger">{{ Session('badstatus') }}</h6>
                @endif

                @if(Session('updatestatus'))
                <h6 class="alert alert-success">{{ Session('updatestatus') }}</h6>
                @endif
                {{-- ---------------- X -------------------- --}}


                <form action="{{url('saveProject')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label><b>Student Name</b></label>
                        <input type="text" name="name" class="form-control @error('student_name') is-invalid @enderror" value="{{old('student_name')}}" placeholder="Type Student Name">
                        @error('student_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror 
                    </div>

                    <div class="form-group">
                        <label><b>Email</b></label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="Type Email">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror 
                    </div>
                    
                    <div class="form-group">
                        <label><b>Contact No</b></label>
                        <input type="text" name="contact_no" class="form-control @error('contact_no') is-invalid @enderror" value="{{old('contact_no')}}" placeholder="Contact No">
                        @error('contact_no')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror 
                    </div>
                    
                    <div class="form-group">
                        <label><b>Date</b></label>
                        <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{old('date')}}" placeholder="Contact No">
                        @error('date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror 
                    </div>

                    <div class="form-group">
                        <label><b>Project Name</b></label>
                        <input type="text" name="project_name" class="form-control @error('student_name') is-invalid @enderror" value="{{old('student_name')}}" placeholder="Type Student Name">
                        @error('student_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror 
                    </div>
                    
                    <div class="form-group">
                        <label><b>Student Image</b></label>
                        <input type="file" name="profile_img" class="form-control @error('student_name') is-invalid @enderror" value="{{old('student_name')}}" placeholder="Enter Student Image">
                        <label><b>Project Image</b></label>
                        <input type="file" name="project_img" class="form-control @error('student_name') is-invalid @enderror" value="{{old('student_name')}}" placeholder="Enter Project Image">
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Save</button>
                    <br><br>
                </form>


                

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                       <div class="card">
                       <div class="card-body">
                        <div class="table table-border table-stripted">
                        <Caption>Student Project Details</Caption>
                           <table class="table table-border table-stripted col-12 col-md-12">
                           <thead>
                           <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Phone Number</th>
                              <th>Date of Project</th>
                              <th>Project Name</th>
                              <th>Profile Image</th>
                              <th>Project Image</th>
                           
                           </tr>
                           </thead>
                           <tbody>
                           @foreach($st as $st)
                            <tr>
                            <td>{{$st->id}}</td>
                            <td>{{$st->stname}}</td>
                            <td>{{$st->number}}</td>
                            <td>{{$st->date}}</td>
                            <td>{{$st->projec_name}}</td>
                            <td><img src="{{ asset('profiles_img/'.$st->profile_image) }}" width="70px" height="70px" alt="profile_image"></td>
                            <td><img src="{{ asset('projects_img/'.$st->project_image) }}" width="70px" height="70px" alt="Project_image"></td>
                            <td> <a href="{{url('edit/'.$st->id)}}" class="btn btn-outline-success">Edit</a></td>
                            <td> <a href="#" class="btn btn-outline-danger">Delete</a></td>
                            </tr>

                           @endforeach
                           
                           </tbody>
                           
                           </table>
                        </div>

                       </div>
                       </div>

                     </div>
                  </div>
                </div>
@endsection

