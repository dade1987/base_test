{{-- Opening Hours
    1 (for Monday) through 7 (for Sunday)
--}}
@php
    $week = [1=>'Monday', 2=>'Tuesday', 3=>'Wednesday', 4=>'Thursday', 5=>'Friday', 6=>'Saturday', 7=>'Sunday'];
    $restaurant_panel=Panel::get($row);
@endphp
<div class="card border-0 shadow mb-5">
	<div class="card-header bg-gray-100 py-4 border-0">
		<div class="media align-items-center">
			<div class="media-body">
				<p class="subtitle text-sm text-primary">Opening in 5 minutes</p>
				<h4 class="mb-0">Opening Hours </h4>
			</div>
			<button type="button" data-title="modifica"
				data-href="{{ $restaurant_panel->relatedUrl(['related_name'=>'opening_hour','act'=>'index_edit']) }}" data-toggle="modal" class="btn btn-secondary mb-2" data-target="#myModalIframe">
            <i class="fa fa-edit"></i>
			</button>
            {{--
            <svg class="svg-icon svg-icon svg-icon-light w-3rem h-3rem ml-3 text-muted">
				<use xlink:href="#wall-clock-1"> </use>
            </svg>
            --}}
		</div>
	</div>
	<div class="card-body">
		<table class="table text-sm">
            @for($day=1;$day<=7;$day++)
            {{-- ORIGINALE
            <tr>
                <th class="pl-0 border-0">{{ $week[$day] }}</th>
                @php
                $orari=$row->openingHours->where('day_of_week',$day);
                @endphp
                @foreach($orari as $v)
                    <td class="pr-0text-right border-0">
                        {{ substr($v->open_at,0,-3) }} - {{ substr($v->close_at,0,-3) }}
                    </td>
                @endforeach
            </tr>
            --}}
            <tr>
                <th class="pl-0 border-0">{{ $week[$day] }}</th>
                @php
                $orari=$row->openingHours->where('day_of_week',$day);
                @endphp
                @if(count($orari) == 0)
                    <td class="pr-0 text-left border-0" style="padding-left: 0px;">
                        ND
                    </td>
                @else
                    @foreach($orari as $v)
                        @if($v->is_closed)
                            <td class="pr-0 text-left border-0" style="padding-left: 0px;">
                                CHIUSO
                            </td>
                        @else
                            <td class="pr-0 text-left border-0" style="padding-left: 0px;">
                                {{ substr($v->open_at,0,-3) }} - {{ substr($v->close_at,0,-3) }}
                            </td>
                        @endif
                    @endforeach
                @endif
            </tr>
            @endfor
            {{--
                <tr>
                    <th class="pl-0">Saturday</th>
                    <td class="pr-0 text-right">Closed</td>
                </tr>
            --}}
		</table>
	</div>
</div>
