@extends('layouts.main')
@section('content')
<div class="container">
    <div class="table_">
        <div class="row d-flex justify-content-between">
            @foreach ($mezok as $mezo)
                @if ($mezo->szam >= 10 && $mezo->szam <= 20)
                    <div class="{{$mezo->szam == 10 || $mezo->szam == 20 ? 'sarok' : 'col-lg col-1'}} border border-dark">
                        <div class="text-center p-0 m-0"><a class="mezo_nev text-dark">{{$mezo->nev}}</a><br><p class="mezo_ar">{{$mezo->ar != '0' ? $mezo->ar : ''}}</p></div>
                        <div class="d-flex">
                            <div class="col-1"></div>
                            <div class="col-1"></div>
                            <div class="col-1"></div>
                            <div class="col-1"></div>
                            <div class="col-1"></div>
                            <div class="col-1"></div>
                            <div class="col-1"></div>
                            <div class="col-1"></div>
                            <div class="col-1"></div>
                            <div class="col-1"></div>
                            <div class="col-1"></div>
                            <div class="col-1"></div>
                        </div>
                        <div class="bottom_info d-flex" style="background-color: {{$mezo->szin}}">
                            @if($mezo->tipus == '4')
                            <p class="p-0 m-0">T:****</p>
                            @endif
                            @if($mezo->tipus == '5')
                            <p class="p-0 m-0">T:*** | H:* | Sz:*</p>
                            @endif
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        {{-- KÖZÉPSŐ RÉSZ --}}
        <div class="row d-flex justify-content-between">
            {{-- ELSŐ OSZLOP --}}
            <div class="col-2 oszlop_bal">
                @foreach ($mezok->reverse() as $mezo)
                    @if ($mezo->szam >= 1 && $mezo->szam <= 9)
                        <div class="oszlop_bal_elem border border-dark">
                            <div class="text-center p-0 m-0"><a class="mezo_nev text-dark">{{$mezo->nev}}</a><p class="mezo_ar">{{$mezo->ar != '0' ? $mezo->ar : ''}}</p></div>
                            <div class="d-flex">
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                            </div>
                            <div class="bottom_info d-flex" style="background-color: {{$mezo->szin}}">
                                @if($mezo->tipus == '4')
                                <p class="p-0 m-0">T:****</p>
                                @endif
                                @if($mezo->tipus == '5')
                                <p class="p-0 m-0">T:*** | H:* | Sz:*</p>
                                @endif
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            {{-- KÖZÉPSŐ RÉSZ --}}
            <div class="col-lg col-8 oszlop_kozep center bg-light border border-dark">
                <div class="w-100  text-dark bg-light">
                    {{--IDE JÖNNEK A DOLGOK--}}
                </div>
            </div>
            {{-- HARMADIK OSZLOP --}}
            <div class="col-2 oszlop_jobb">
                @foreach ($mezok as $mezo)
                    @if ($mezo->szam >= 21 && $mezo->szam <= 29)
                        <div class="oszlop_jobb_elem border border-dark">
                            <div class="text-center p-0 m-0"><a class="mezo_nev text-dark">{{$mezo->nev}}</a><br><p class="mezo_ar">{{$mezo->ar != '0' ? $mezo->ar : ''}}</p></div>
                            <div class="d-flex">
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                                <div class="col-1"></div>
                            </div>
                            <div class="bottom_info d-flex" style="background-color: {{$mezo->szin}}">
                                @if($mezo->tipus == '4')
                                <p class="p-0 m-0">T:****</p>
                                @endif
                                @if($mezo->tipus == '5')
                                <p class="p-0 m-0">T:*** | H:* | Sz:*</p>
                                @endif
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        {{-- ALSÓ RÉSZ --}}
        <div class="row d-flex justify-content-between">
            @foreach ($mezok->reverse() as $mezo)
                @if ($mezo->szam >= 30 && $mezo->szam <= 40)
                <div class="{{$mezo->szam == 30 || $mezo->szam == 40 ? 'sarok' : 'col-lg col-1'}} border border-dark">
                    <div class="text-center p-0 m-0"><a class="mezo_nev text-dark">{{$mezo->nev}}</a><br><p class="mezo_ar">{{$mezo->ar != '0' ? $mezo->ar : ''}}</p></div>
                    <div class="d-flex">
                        <div class="col-1"></div>
                        <div class="col-1"></div>
                        <div class="col-1"></div>
                        <div class="col-1"></div>
                        <div class="col-1"></div>
                        <div class="col-1"></div>
                        <div class="col-1"></div>
                        <div class="col-1"></div>
                        <div class="col-1"></div>
                        <div class="col-1"></div>
                        <div class="col-1"></div>
                        <div class="col-1"></div>
                    </div>
                    <div class="bottom_info d-flex" style="background-color: {{$mezo->szin}}">
                        @if($mezo->tipus == '4')
                        <p class="p-0 m-0">T:****</p>
                        @endif
                        @if($mezo->tipus == '5')
                        <p class="p-0 m-0">T:*** | H:* | Sz:*</p>
                        @endif
                    </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>

@endsection