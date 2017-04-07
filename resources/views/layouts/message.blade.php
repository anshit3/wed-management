@if(count($errors)>0)
    <div class="row">
        <div class="col-lg-4 col-md-offset-3 error">
            <ul>
                @foreach($errors->all() as $error)
                    <li style="text-align: center">
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
@if(Session::has('message'))
    <div class="row">
        <div class="col-lg-4">
            <div class="col-md-3 col-md-offset-3 success">
                {{Session::get('message')}}
            </div>
        </div>
    </div>
@endif