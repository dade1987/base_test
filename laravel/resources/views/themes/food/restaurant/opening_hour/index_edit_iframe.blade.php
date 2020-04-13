@php
    
@endphp

@extends('pub_theme::layouts.app_iframe')
@section('content')

<a href="{{ url_queries(['format'=>'iframe'],$_panel->createUrl()) }}" class="btn btn-secondary">Nuovo</a>


<table class="table bordered">
    @for($i=0;$i<7;$i++)
    <tr>
        <td> @lang('theme::txt.day_name.'.$i) </td>
        @foreach($rows->where('day_of_week',$i) as $v)
            @php
                $hour_panel=Panel::get($v);
                $params['item1']=$v;
                $params['format']='iframe';
            @endphp
            <td>
                @if($v->is_closed)
                    CHIUSO
                @else
                    {{ substr($v->open_at,0,-3) }} - {{ substr($v->close_at,0,-3) }}
                @endif
            </td>
            <td>
                <a href="{{ route('container0.container1.edit',$params) }}" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                {{ Form::bsBtnDelete(['panel'=>$hour_panel,'row'=>$v]) }}   
            </td>
        @endforeach
        {{-- 
            <button type="button" data-title="aggiungi piatto a {{ $cuisine->title }}"
                data-href="{{ $cuisine_panel->relatedUrl(['related_name'=>'recipe','act'=>'create']) }}" data-toggle="modal" class="btn btn-secondary mb-2" data-target="#myModalIframe">
                <i class="fa fa-plus"></i>Iframe
            </button>
            --}}

    </tr>
    @endfor
   
</table>

@endsection