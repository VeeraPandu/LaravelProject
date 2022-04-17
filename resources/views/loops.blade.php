<h1>User Display with foreach loop Directive</h1>
@foreach($users as $item)
    <li>{{$item}}</li>
@endforeach

<h1>User Display with for loop Directive</h1>
@for($i=0;$i<count($users);$i++)
<li>{{$users[$i]}}</li>
@endfor

<h1>User Display with forelse loop Directive</h1>
@forelse($users as $item)
<li>This is {{$item}}</li>
@empty
    <p style="color:red">No user available</p>
@endforelse
<h1>User Display with while loop Directive</h1>
@php
$i=0;
@endphp
@while($i<count($users))
    {{$users[$i]}}
    @php
    $i++
    @endphp
@endwhile
<h1>User Display with if else loop Directive</h1>

{{--@while($i<count($users))
{{$users[i]}}
@endwhile--}}