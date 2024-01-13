@extends('layouts.main')
@section('content')
<div class="container">
    <div class="table_">
        <div class="row d-flex justify-content-between">
            @foreach ($mezok as $mezo)
                @if ($mezo->szam >= 10 && $mezo->szam <= 20)
                    <div class="{{$mezo->szam == 10 || $mezo->szam == 20 ? 'sarok' : 'col-lg col-1'}} border border-dark">
                        <div class="">
                            <p class="text-center">
                                {{$mezo->nev}}
                            </p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        {{-- KÖZÉPSŐ RÉSZ --}}
        <div class="row justify-content-between">
            {{-- ELSŐ OSZLOP --}}
            <div class="col-auto oszlop_bal">
                @foreach ($mezok->reverse() as $mezo)
                    @if ($mezo->szam >= 1 && $mezo->szam <= 9)
                        <div class="col-12 border border-dark">
                            <p class="text-center">
                                {{$mezo->nev}}
                            </p>
                        </div>
                    @endif
                @endforeach
            </div>
            {{-- KÖZÉPSŐ RÉSZ --}}
            <div class="col oszlop_kozep w-100">
                <div class="col-12 border border-danger text-dark">
                    KÖZÉPSŐ RÉSZggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg
                    gggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg
                </div>
            </div>
            {{-- HARMADIK OSZLOP --}}
            <div class="col-auto oszlop_jobb">
                @foreach ($mezok as $mezo)
                    @if ($mezo->szam >= 21 && $mezo->szam <= 29)
                        <div class="col-12 border border-dark">

                                <p class="text-center">
                                    {{$mezo->nev}}
                                </p>
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
                        <div class="">
                            <p class="text-center">
                                {{$mezo->nev}}
                            </p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>

@endsection