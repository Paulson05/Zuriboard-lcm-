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
                    <form>
                        <div class="card " style=" width: 100%; height: 100%; border-radius: 9px;">
                            <div class="row">
                                <div class="  col-6 off-set-2 " >
                                    <label>First NAME</label>
                                    <input class="form-control">
                                </div>
                                <div class="  col-6  " >
                                    <label>LAST NAME</label>

                                    <input class="form-control ">
                                </div>
                                <div class="  col-6" >
                                    <label>Middle NAME</label>

                                    <input class="form-control">
                                </div>
                                <div class="  col-6 " >
                                    <label>Username</label>

                                    <input class="form-control ">
                                </div>
                                <div class="  col-6 " >
                                    <label>Gender</label>

                                    <select class="form-control ">
                                       <option>Select Gender</option>
                                       <option>male</option>
                                       <option>female</option>
                                       <option>prefare not to say</option>
                                   </select>
                                </div>
                                <div class="  col-6 " >
                                    <label>Age</label>
                                    <input class="form-control">
                                </div>
                                <div class="  col-6 " >
                                    <label>Track</label>
                                    <select class="form-control">
                                        <option>Select a Track</option>
                                        <option>Front END</option>
                                        <option>Back End</option>
                                        <option>Design</option>
                                        <option>Mobile</option>

                                    </select>
                                </div>
                                <div class="  col-6 " >
                                    <label>Experience Level</label>

                                    <select class="form-control ">
                                        <option>Select Experience</option>
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Mid-level</option>
                                        <option>Expertption></option>
                                    </select>
                                </div>
                                <div class="  col-6 " >
                                    <label>Employment Status</label>

                                    <select class="form-control ">
                                        <option>Select Exployment status</option>
                                        <option>unemplyed</option>
                                        <option>employed</option>
                                        <option>self-employed</option>
                                    </select>
                                </div>
                                <div class="  col-6 " >
                                    <label>Education</label>

                                    <select class="form-control ">
                                        <option>Select one</option>
                                        <option>none</option>
                                        <option>Grade School</option>
                                        <option>High School</option>
                                        <option>Bachelor's Degree</option>
                                        <option>Master Degree</option>
                                        <option>Post graduate Degree</option>
                                    </select>
                                </div>


                            </div>
                                 <div class="row">
                                     <div class="col-12 ">
                                         <label>Email</label>
                                         <input class="form-control">
                                     </div>
                                     <div class="col-12 ">
                                         <label>Password</label>
                                         <input class="form-control">
                                     </div>
                                     <div class="col-12 ">
                                         <label>Comfirm Password</label>
                                         <input class="form-control">
                                     </div>
                                     <div class="col-12 ">
                                         <label>How did you hear about us?</label>

                                         <select class="form-control ">
                                             <option>Select one</option>
                                             <option>Reskill America</option>
                                             <option>Don Jazzy</option>
                                             <option>Ogbeni Dipo</option>
                                             <option>woman will</option>
                                             <option>Covenat university</option>
                                             <option>HNG</option>
                                             <option>I4Good</option>
                                             <option>ZUri team</option>
                                             <option>Connect nigeria</option>
                                             <option>Tech Canble</option>
                                             <option>Benjamin Dada</option>
                                             <option>kayode abbass</option>
                                             <option>Salem King</option>
                                             <option>Tech point</option>
                                             <option>whatsapp</option>
                                             <option>twitter</option>
                                             <option>Facebook</option>
                                         </select>
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
        </div>
@endsection
