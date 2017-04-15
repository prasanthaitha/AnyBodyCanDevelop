{{$tras[0]->train_no}}

{{$tras[0]->train_name}}
@foreach($tras as $tra1)




<a href= "/search/{{$tra1->stn_id}}"> {{$tra1->stn_name}} </a>


{{$tra1->time}}
@endforeach
