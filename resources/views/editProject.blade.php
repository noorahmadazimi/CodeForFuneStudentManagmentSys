@extends('dashboard.layouts.maintemplate')

@section('title', 'Register Student')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update Student Project</h1>
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
                {{-- ---------------- X -------------------- --}}


                <form action="{{url('edit/'.$std->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <label><b>Student Name</b></label>
                        <input type="text" name="name" class="form-control @error('student_name') is-invalid @enderror" value="{{$std->stname}}" placeholder="Type Student Name">
                        @error('student_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror 
                    </div>

                    <div class="form-group">
                        <label><b>Email</b></label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$std->email}}" placeholder="Type Email">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror 
                    </div>
                    
                    <div class="form-group">
                        <label><b>Contact No</b></label>
                        <input type="text" name="contact_no" class="form-control @error('contact_no') is-invalid @enderror" value="{{$std->number}}" placeholder="Contact No">
                        @error('contact_no')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror 
                    </div>
                    
                    <div class="form-group">
                        <label><b>Date</b></label>
                        <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{$std->date}}" placeholder="Contact No">
                        @error('date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror 
                    </div>

                    <div class="form-group">
                        <label><b>Project Name</b></label>
                        <input type="text" name="project_name" class="form-control @error('student_name') is-invalid @enderror" value="{{$std->projec_name}}" placeholder="Type Student Name">
                        @error('student_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror 
                    </div>
                    
                    <div class="form-group">
                        <label><b>Student Image</b></label>
                        <input type="file" name="profile_img" class="form-control @error('student_name') is-invalid @enderror"  placeholder="Enter Student Image">
                        <img src="{{ asset('profiles_img/'.$std->profile_image) }}" width="70px" height="70px" alt="profile_image">
                            
                        <label><b>Project Image</b></label>
                        <input type="file" name="project_img" class="form-control @error('student_name') is-invalid @enderror" placeholder="Enter Project Image">
                        <img src="{{ asset('projects_img/'.$std->project_image) }}" width="70px" height="70px" alt="Project_image">
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/stProject" class="btn btn-danger">Back</a>
                    <br><br>
                </form>


                

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

@endsection

