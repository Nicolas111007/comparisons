@foreach ($contracts3 as $contracts3)
@foreach ($prices as $prices7)

    @if ($contracts3['var_fix']==0 && $contracts3['id'] == $suppliercont)
        
        @if ($suppliercont == $prices7['contract_id'] && $area == $prices7['area_id'] && $prices7['date_price_val']=='2022-04-01')
            
                <p>{{$prices7->date_price_val}} 1</p>
            @else
                <p class="font-bold">Ce contrat n'existe pas dans votre région1</p>
            
        @endif

    @elseif ($contracts3['var_fix']==1 && $contracts3['id'] == $suppliercont)
        
        @if ($suppliercont == $prices7['contract_id'] && $area == $prices7['area_id'] && $prices7['date_price_val']==$contbeg)
            
                <p>{{$prices7->date_price_val}} 2</p>
            @else
                <p class="font-bold">Ce contrat n'existe pas dans votre région2</p>
            
        @endif
        
    
    @endif
@endforeach

@if ($area == $prices7['area_id'] && $suppliercont == $prices7['id'])
    
        <p>$suppliercont: {{$suppliercont}} 1</p>
        <p>$prices7['id']: {{$prices7['id']}} 1</p>
        <p>$area: {{$area}} 1</p>
        <p>$prices7['area_id']: {{$prices7['area_id']}} 1</p>
        <p>$prices7['date_price_val']: {{$prices7['date_price_val']}} 1</p>
    
@else
    @php
        $i++
    @endphp
    
@endif