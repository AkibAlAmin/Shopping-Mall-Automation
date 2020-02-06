<div>
    <form action="{{url('calculator')}}" method="POST">
        {{ csrf_field() }}
<div>
<input type="text" name="firstvalue" placeholder="Put First Value" required value="{{ old('firstvalue') }}"/>
</div>

<div>
    <input type="text" name="secondvalue" placeholder="Put Secound Value" required value="{{ old('secondvalue') }}"/>
</div>

<div>
    <button type="submit" value="add" name="sign">Addition</button>
    <button type="submit" value="sub" name="sign">Subtraction</button>
    <button type="submit" value="mul" name="sign">Multiplication</button>
    <button type="submit" value="div" name="sign">Divition</button>
</div>
    </form>
    @if (session('result'))
    <div class="alert alert-success">
        {{ session('result') }}
    </div>
@endif


</div>

