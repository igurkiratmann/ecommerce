@extends('index')

@section('login')


    <div class="container">
  
        <div class="row">
            <form action="login" method="post">
            @csrf
                <div class="form-group">
                  
                <label for="">Email </label>
                <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="enter email here">
                <small id="emailHelpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" id="" placeholder="enter password here">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </div>
   
@endsection