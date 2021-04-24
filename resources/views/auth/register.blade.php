@extends('templates.defaults')
@section('content')
    <div>

        <div class="jumbotron " style="height: 190vh; width:100%;  ">
            <div class="mt-3">
                <h1 class="text-center mt-3" style="font-size: 20px;">CREATE YOUR ACCOUNT</h1>
            </div>
            <div>
                <h1 class="text-sm-center " style="font-size: 10px;">ALL FIELDS ARE REQUIRED</h1>
                <span class="mb-5">Note: This workspace requires you to register with the same email address and username as you have on the slack workspace</span>
            </div>

            <div class="">
                <div class="">
                    <form method="POST" action="{{ route('auth.postregister') }}">
                        @csrf
                        <div class="card " style=" width: 100%; height: 100%; border-radius: 9px;">
                            <div class="row">
                                <div class="  col-6 off-set-2 " >
                                    <label>First NAME</label>
                                    <input class="form-control @error('first_name'){{"is-invalid"}}@enderror" name="first_name"  value = "{{Request::old('first_name') ?: ''}}">
                                    @error('first_name')
                                    <span class="form-text text-danger">{{$errors->first('first_name')}}</span>
                                    @enderror
                                </div>
                                <div class="  col-6  " >
                                    <label>LAST NAME</label>

                                    <input class="form-control @error('last_name'){{"is-invalid"}}@enderror " name="last_name" value = "{{Request::old('last_name') ?: ''}}">
                                    @error('last_name')
                                    <span class="form-text text-danger">{{$message}}</span>
                                    @enderror


                                </div>
                                <div class="  col-6" >
                                    <label>Middle NAME</label>

                                    <input class="form-control @error('middle_name'){{"is-invalid"}}@enderror" name="middle_name" value = "{{Request::old('middle_name') ?: ''}}">
                                    @error('middle_name')
                                    <span class="form-text text-danger">{{$errors->first('middle_name')}}</span>
                                    @enderror
                                </div>
                                <div class="  col-6 " >
                                    <label>Username</label>
                                    <input class="form-control @error('username'){{"is-invalid"}}@enderror " name="username" value = "{{Request::old('username') ?: ''}}">
                                    @error('username')
                                    <span class="form-text text-danger">{{$errors->first('username')}}</span>
                                    @enderror
                                </div>
                                <div class="  col-6 " >
                                    <label>Gender</label>

                                    <select class="form-control @error('gender'){{"is-invalid"}}@enderror "name="gender" value = "{{Request::old('gender') ?: ''}}">
                                       <option value="">Select Gender</option>
                                       <option value="male">male</option>
                                       <option value="female">female</option>
                                       <option value="none">prefare not to say</option>
                                   </select>
                                   @error('gender')
                                   <span class="form-text text-danger">{{$errors->first('gender')}}</span>
                                   @enderror
                                </div>
                                <div class="  col-6 " >
                                    <label>Age</label>
                                    <input type="date" name="age" class="form-control @error('age'){{"is-invalid"}}@enderror" value = "{{Request::old('age') ?: ''}}">
                                    @error('age')
                                    <span class="form-text text-danger">{{$errors->first('age')}}</span>
                                    @enderror
                                </div>
                                <div class="  col-6 " >
                                    <label>Track</label>
                                    <select name="track" class="form-control @error('track'){{"is-invalid"}}@enderror" value = "{{Request::old('track') ?: ''}}">
                                        <option value="">---Select a Track---</option>
                                        <option value="frontend">Front END</option>
                                        <option value="backend">Back End</option>
                                        <option value="design">Design</option>
                                        <option value="mobile">Mobile</option>
                                        @error('track')
                                        <span class="form-text text-danger">{{$message}}</span>
                                        @enderror
                                    </select>

                                </div>
                                <div class="  col-6 " >
                                    <label>Experience Level</label>

                                    <select name="experience" class="form-control @error('experience'){{"is-invalid"}}@enderror" value = "{{Request::old('experience') ?: ''}}">
                                        <option value="">---Select Experience---</option>
                                        @foreach($tracks as $track)
                                        
                                        <option value="{{$track->id }}">{{ $track->track_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('experience')
                                    <span class="form-text text-danger">{{$errors->first('experience')}}</span>
                                    @enderror
                                </div>
                                <div class="  col-6 " >
                                    <label>Employment Status</label>

                                    <select name="employment" class="form-control @error('employment'){{"is-invalid"}}@enderror" value = "{{Request::old('employment') ?: ''}}">
                                        <option value="">---Select Exployment status---</option>
                                        <option value="unemploed">unemplyed</option>
                                        <option value="employed">employed</option>
                                        <option value="self-employed">self-employed</option>
                                    </select>
                                    @error('employment')
                                    <span class="form-text text-danger">{{$errors->first('employment')}}</span>
                                    @enderror
                                </div>
                                <div class="  col-6 " >
                                    <label  >Education</label>

                                    <select name="education" class="form-control @error('education'){{"is-invalid"}}@enderror" value = "{{Request::old('education') ?: ''}}">
                                        <option value="">---Select one---</option>
                                        <option value="none">none</option>
                                        <option value="grade">Grade School</option>
                                        <option value="high-school">High School</option>
                                        <option value="bachelor degree">Bachelor degree</option>
                                        <option>post graduate diploma</option>
                                    </select>
                                    @error('education')
                                    <span class="form-text text-danger">{{$message}}</span>
                                    @enderror
                                </div>


                            </div>
                                 <div class="row">
                                     <div  class="col-12 ">
                                         <label>Email</label>
                                         <input  name="email" class="form-control @error('email'){{"is-invalid"}}@enderror" value = "{{Request::old('email') ?: ''}}">
                                         @error('email')
                                         <span class="form-text text-danger">{{$errors->first('email')}}</span>
                                         @enderror
                                     </div>
                                     <div class="col-12 ">
                                         <label>Password</label>
                                         <input  type="password" name="password" class="form-control @error('password'){{"is-invalid"}}@enderror" value = "{{Request::old('password') ?: ''}}">
                                         @error('password')
                                         <span class="form-text text-danger">{{$errors->first('password')}}</span>
                                         @enderror
                                     </div>
                                     <div class="col-12 ">
                                         <label>Comfirm Password</label>
                                         <input type="password" name="confirmed_password" class="form-control @error('confirmed_password'){{"is-invalid"}}@enderror" value = "{{Request::old('cpnfirmed_password') ?: ''}}">
                                         @error('confirmed_password')
                                         <span class="form-text text-danger">{{$errors->first('confirmed_password')}}</span>
                                         @enderror
                                     </div>
                                     <div class="col-12 ">
                                         <label>How did you hear about us?</label>

                                         <select name="info" class="form-control @error('info'){{"is-invalid"}}@enderror"value = "{{Request::old('info') ?: ''}}">
                                             <option  value="">---Select one---</option>
                                             <option value="Reskill America">Reskill America</option>
                                             <option value="Don Jazzy">Don Jazzy</option>
                                             <option value="Ogbeni Dipo">Ogbeni Dipo</option>
                                             <option value="woman will">woman will</option>
                                             <option value="Covenant university">Covenant university</option>
                                             <option value="HNG">HNG</option>
                                             <option value="I4Good">I4Good</option>
                                             <option value="ZUri team">ZUri team</option>
                                             <option value="Connect nigeria">Connect nigeria</option>
                                             <option value="Tech Canble">Tech Canble</option>
                                             <option value="Benjamin Dada">Benjamin Dada</option>
                                             <option value="kayode abbass">kayode abbass</option>
                                             <option value="Salem King">Salem King</option>
                                             <option value="Tech point">Tech point</option>
                                             <option value="whatsapp">whatsapp</option>
                                             <option value="twitter">twitter</option>
                                             <option value="Facebook">Facebook</option>
                                         </select>
                                         @error('info')
                                         <span class="form-text text-danger">{{$message}}</span>
                                         @enderror
                                     </div>
                                 </div>
                            <div class="col-12">
                               <div  class="btn-text">
                                   <span><a>Already Register?</a></span>
                                   <button type="submit" class="btn btn-success justify-content-end " style="background-color: #880000!important;">Register</button>
                               </div>

                            </div>
                        </div>

                    </form>
                </div>

            </div>
   </div>
   @foreach($tracks as $track)
   <p>{{ $track->track_name }}</p>
   @endforeach
        </div>
@endsection
