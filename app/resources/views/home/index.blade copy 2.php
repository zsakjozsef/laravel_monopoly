@extends('layouts.main')
@section('content')

<div class="container">
    <div class="row d-flex justify-content-between">
        @foreach ($mezok as $mezo)
            @if ($mezo->szam >= 10 && $mezo->szam <= 20)
                <div class="col-lg col-1 border border-dark">{{--ITT A MÉRETET MAJD--}}
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
    <div class="row">
    {{-- ELSŐ OSZLOP --}}
                <div class="col-2 border border-dark">
s
                </div>
                <div class="col-sm border border-dark">
s
                </div>

                <div class="col-2 border border-dark">
s
                </div>


    </div>
    {{-- ALSÓ RÉSZ --}}
    <div class="row d-flex justify-content-between">
        @foreach ($mezok->reverse() as $mezo)
            @if ($mezo->szam >= 30 && $mezo->szam <= 40)
                <div class="col-lg col-1 border border-dark">{{--ITT A MÉRETET MAJD--}}
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


<hr>



<table class="w-100">
    <tr class="w-100">
        @foreach ($mezok as $mezo)
            @if ($mezo->szam >= 10 && $mezo->szam <= 20)
                <td class="border border-dark">
                    <div class="row">
                        <p class="text-center">
                            {{$mezo->nev}}
                        </p>
                    </div>
                    <div class="row">
                        <p class="text-center">
                            {{$mezo->ar}}
                        </p>
                    </div>
                </td>
            @endif
        @endforeach
    </tr>
    {{-- KÖZÉPSŐ RÉSZ --}}
<!-- Középső rész 9 sorral -->
<tr>
    <td colspan="3" class="border-cell"></td>
    <td colspan="3" rowspan="9" class="center-cell">
      <!-- Középső rész tartalma -->
      <!-- Itt jönnek az 1-9 sorok -->
      <table>
        <!-- Példa az első sorra -->
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
        </tr>
        <!-- Itt jönnek a többi sorok -->
        <!-- ... -->
      </table>
    </td>
    <td colspan="3" class="border-cell"></td>
  </tr>
    {{--
    @foreach ($mezok->reverse() as $mezo)
            <tr class="w-100">
                <td class="border border-dark">5 </td>
                <td class="text-center" colspan="9">#</td>
                <td class="border border-dark">5</td>
            </tr> 

    @endforeach
    --}}
    {{-- ALSÓ SOR --}}
    <tr class="w-100">
    @foreach ($mezok->reverse() as $mezo)
        @if ($mezo->szam >= 30 && $mezo->szam <= 40)
            <td class="border border-dark">
                <div class="row">
                    <p class="text-center">
                        {{$mezo->nev}}
                    </p>
                </div>
                <div class="row">
                    <p class="text-center">
                        {{$mezo->ar}}
                    </p>
                </div>
            </td>
        @endif
    @endforeach
    </tr>
</table>
<style>
    table {
        border-collapse: collapse;
        widtd: 80vw;
        height: 95vh;
    }
    </style>
@endsection