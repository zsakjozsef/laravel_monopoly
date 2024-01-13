@extends('layouts.main')
@section('content')

<table class="w-100">
    @for ($i = 1; $i <= 11; $i++)
        <tr class="w-100">
            @for ($j = 1; $j <= 11; $j++)
                @if ($i == 1 || $i == 11 || $j == 1 || $j == 11)
                    <th class="bg-dark text-center">{{$i}}-{{$j}}</th>
                @elseif ($i >2 && $i < 11 || $j > 1 || $j < 11)
                    <th class="bg-warning text-center">{{$i}}-{{$j}}</th>
                @endif
            @endfor
        </tr>
    @endfor
</table>
<hr>
<table class="w-100">
    <tr class="w-100">
        <th class="border border-dark">1-1</th>
        <th class="border border-dark">1-2</th>
        <th class="border border-dark">1-3</th>
        <th class="border border-dark">1-4</th>
        <th class="border border-dark">1-5</th>
        <th class="border border-dark">1-6</th>
        <th class="border border-dark">1-7</th>
        <th class="border border-dark">1-8</th>
        <th class="border border-dark">1-9</th>
        <th class="border border-dark">1-10</th>
        <th class="border border-dark">1-11</th>
    </tr>
    <tr class="w-100">
        <th class="border border-dark">2-1</th>
        <th class="" colspan="9">2</th>
        <th class="border border-dark">2-11</th>
    </tr>
    <tr class="w-100">
        <th class="border border-dark">3-1</th>
        <th class="" colspan="9">3</th>
        <th class="border border-dark">3-11</th>
    </tr>
    <tr class="w-100">
        <th class="border border-dark">4-1</th>
        <th class="" colspan="9">4</th>
        <th class="border border-dark">4-11</th>
    </tr>
    <tr class="w-100">
        <th class="border border-dark">5-1</th>
        <th class="" colspan="9">5</th>
        <th class="border border-dark">5-11</th>
    </tr>
    <tr class="w-100">
        <th class="border border-dark">6-1</th>
        <th class="" colspan="9">6</th>
        <th class="border border-dark">6-11</th>
    </tr>
    <tr class="w-100">
        <th class="border border-dark">7-1</th>
        <th class="" colspan="9">7</th>
        <th class="border border-dark">7-11</th>
    </tr>
    <tr class="w-100">
        <th class="border border-dark">8-1</th>
        <th class="" colspan="9">8</th>
        <th class="border border-dark">8-11</th>
    </tr>
    <tr class="w-100">
        <th class="border border-dark">9-1</th>
        <th class="" colspan="9">9</th>
        <th class="border border-dark">9-11</th>
    </tr>
    <tr class="w-100">
        <th class="border border-dark">10-1</th>
        <th class="" colspan="9">10</th>
        <th class="border border-dark">10-11</th>
    </tr>
    <tr class="w-100">
        <th class="border border-dark">11-1</th>
        <th class="border border-dark">11-2</th>
        <th class="border border-dark">11-3</th>
        <th class="border border-dark">11-4</th>
        <th class="border border-dark">11-5</th>
        <th class="border border-dark">11-6</th>
        <th class="border border-dark">11-7</th>
        <th class="border border-dark">11-8</th>
        <th class="border border-dark">11-9</th>
        <th class="border border-dark">11-10</th>
        <th class="border border-dark">11-11</th>
    </tr>
</table>
<hr>



    <div class="container-fluid py-5">
        <div class="container py-5">
            {{-- ELSŐ SOR VÉGE --}}
            <div class="row d-flex">
                @foreach ($mezok as $mezo)
                    @if ($mezo->szam >= 10 && $mezo->szam <= 20)
                        <div class="col-1 border border-dark">
                            <p>{{$mezo->nev}}</p>
                        </div> 
                    @endif
                @endforeach

            </div>
            {{-- ELSŐ SOR VÉGE --}}
            {{-- KÖZÉPSŐ RÉSZ --}}
            <div class="d-flex m-0 p-0">
                <div class="col-1">
                    @foreach ($mezok->reverse() as $mezo)
                        @if ($mezo->szam >= 1 && $mezo->szam <= 9)
                            <div class="col-auto border border-dark">
                                <p>{{$mezo->nev}}</p>   
                            </div> 
                        @endif
                    @endforeach
                </div>
                <div class="col-9"></div>
                <div class="col-1">
                        @foreach ($mezok->reverse() as $mezo)
                            @if ($mezo->szam >= 1 && $mezo->szam <= 9)
                                <div class="col-auto border border-dark">
                                    <p>{{$mezo->nev}}</p>   
                                </div> 
                            @endif
                        @endforeach
                </div>
               
               
                
            </div>
            {{-- KÖZÉPSŐ RÉSZ VÉGE --}}
            {{-- ALSÓ SOR --}}
            <div class="row">
                @foreach ($mezok as $mezo)
                    @if ($mezo->szam >= 10 && $mezo->szam <= 20)
                        <div class="col-1 border border-dark">
                            <p>{{$mezo->nev}}</p>   
                        </div> 
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection