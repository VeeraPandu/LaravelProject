<h1>Using if else Directive</h1>
@if (count($records)==4)
4 records available
@elseif(count($records)==3) 
4 records available 
@elseif(count($records)==2)
4 records available
@elseif(count($records)==1)
4 records available
@elseif(count($records)>4)
More than 4 records available
@else 
No records Available
@endif