@extends('layouts.app')

@section('content')
@if($msg=session()->get('msg'))
<script>
window.alert("{{$msg}}");
</script>
 
@endif

@if($errors->any())
     <script> var a=""; </script>
     @foreach($errors->all() as $err)
  
     <script>
          a = a + "{{$err}}\n";
     </script>
    
     @endforeach

     <script>
     window.alert(a);
     </script>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Regeister Here...</h2></div>
                <br>

                <div class="card-body">
                    <form method="POST" action="reg">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">First Name : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="fname" required>
                            <br>    
                            <br>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Last Name : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="lname" required>
                            <br>
                            <br>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required>
                            <br>
                            <br>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Username : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="name" type="text" name="uname" required>
                            <br>
                            <br>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Address : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="name" type="text" name="address" required>
                            <br>
                            <br>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="password" type="password" name="password" required><br>
                            <br>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password : </label>&nbsp;
                            <input id="password-confirm" type="password" class="form-control" name="rpassword" required>
                            <br>
                            <br>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">NIC : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="name" type="text" name="nic" required>
                            <br>
                            <br>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Phone Number : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="name" type="text"name="phone" required>
                            <br>
                            <br>
                        </div>

                        <div class="form-group row">
                            <input type="checkbox" name="agree" required>
                            <label for="name" >Agree with terms & conditions</label>
                        </div>
                        <br>
                        <br>
                        <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input id="name" type="checkbox"  name="p1">
                                <label for="name">Package 1</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label for="name">LKR 250</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label id="d">Qty:</label>
                                <input id="p1q" type="text"  name="p1q" oninput="myFunction1()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label id="d">Sub Total:</label>
                                <input id="p1t" type="text"  name="p1t">
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input id="name" type="checkbox"  name="p2">
                                <label for="name">Package 2</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label for="name">LKR 350</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label for="name">Qty:</label>
                                <input id="p2q" type="text" name="p2q" oninput="myFunction2()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label for="name">Sub Total:</label>
                                <input id="p2t" type="text"  name="p2t">
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            

                            <div class="col-md-6">
                                <input id="name" type="checkbox"  name="p3">
                                <label for="name">Package 3</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label for="name">LKR 500</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label for="name">Qty:</label>
                                <input id="p3q" type="text" name="p3q" oninput="myFunction3()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label for="name">Sub Total:</label>
                                <input id="p3t" type="text" name="p3t">
                                
                            </div>
                        </div><br>

                        <div class="form-group row">
                            

                            <div class="col-md-6">
                                <label for="name">Total : </label>&nbsp;&nbsp;&nbsp;
                                <input id="total" type="text" name="total">

                                
                            </div>
                        </div><br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function myFunction1(){
               var p1q = document.getElementById("p1q").value;
               document.getElementById("p1t").value = p1q*250;
               var p1t = document.getElementById("p1t").value*1;
               var p2t = document.getElementById("p2t").value*1;
               var p3t = document.getElementById("p3t").value*1;
               document.getElementById("total").value = p1t+p2t+p3t;
          }
function myFunction2(){
               var p2q = document.getElementById("p2q").value;
               document.getElementById("p2t").value = p2q*350;
               var p1t = document.getElementById("p1t").value*1;
               var p2t = document.getElementById("p2t").value*1;
               var p3t = document.getElementById("p3t").value*1;
               document.getElementById("total").value = p1t+p2t+p3t;
          }
function myFunction3(){
               var p3q = document.getElementById("p3q").value;
               document.getElementById("p3t").value = p3q*500;
               var p1t = document.getElementById("p1t").value*1;
               var p2t = document.getElementById("p2t").value*1;
               var p3t = document.getElementById("p3t").value*1;
               document.getElementById("total").value = p1t+p2t+p3t;
          }
</script>
@endsection
