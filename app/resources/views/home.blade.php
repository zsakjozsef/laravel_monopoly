@extends('layouts.main')
@section('content')
    <section class="py-auto">
        <div class="container p-2">
            {{-- ELSŐ SOR --}}
            <div class="row h-auto">
                <div id="10" class="col border border-primary">
                    {{(isset($mezo_10)) ? $mezo_10['nev'] : ''}}
                    <hr>
                    {{(isset($mezo_10)) ? $mezo_10['ar'] : ''}}
                    {{-- MEZŰ A BÁBÚKNAK --}}
                    <div class="row d-flex">
                        <div id="10-1" class="col-1"></div>
                        <div id="10-2" class="col-1"></div>
                        <div id="10-3" class="col-1"></div>
                        <div id="10-4" class="col-1"></div>
                        <div id="10-5" class="col-1"></div>
                        <div id="10-6" class="col-1"></div>
                        <div id="10-7" class="col-1"></div>
                        <div id="10-8" class="col-1"></div>
                        <div id="10-9" class="col-1"></div>
                        <div id="10-10" class="col-1"></div>
                        <div id="10-11" class="col-1"></div>
                        <div id="10-12" class="col-1"></div>
                    </div>
                </div>
                <div id="11" class="col-1 border border-primary">
                    {{-- MEZÖ NEVE --}}
                    <div class="text-center">
                        {{(isset($mezo_11)) ? $mezo_11['nev'] : ''}}
                    </div>
                    {{-- MEZÖ KÉPE --}}
                    <div>
                        {{(isset($mezo_11)) ? $mezo_11['kep'] : ''}}
                    </div>
                    {{-- MEZÖ ÁRA --}}
                    <div>
                        {{(isset($mezo_11)) ? $mezo_11['ar'] : ''}}
                    </div>
                    {{-- MEZŐ A BÁBÚKNAK --}}
                    <div class="row d-flex">
                        <div id="10-1" class="col-1"></div>
                        <div id="10-2" class="col-1"></div>
                        <div id="10-3" class="col-1"></div>
                        <div id="10-4" class="col-1"></div>
                        <div id="10-5" class="col-1"></div>
                        <div id="10-6" class="col-1"></div>
                        <div id="10-7" class="col-1"></div>
                        <div id="10-8" class="col-1"></div>
                        <div id="10-9" class="col-1"></div>
                        <div id="10-10" class="col-1"></div>
                        <div id="10-11" class="col-1"></div>
                        <div id="10-12" class="col-1"></div>
                    </div>
                    {{-- MEZÖ SZÍNE/TULAJDONOS/HÁZAK/SZÁLLODÁK --}}
                    <div class="row" style="background-color: {{isset($mezo_11) ? $mezo_11['szin'] : ''}}">
                        <div class="text-light">Mező ára: {{(isset($mezo_11)) ? $mezo_11['ar'] : ''}}</div>
                        <div class="text-light">
                            <i class="bi bi-file-person-fill"></i>
                                {{(isset($mezo_11)) ? $mezo_11['tulajdonos'] : ''}}
                        </div>
                        <div class="text-light">
                            <i class="fa fa-building" aria-hidden="true"></i>
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div id="12" class="col-1 border border-primary">
                    {{(isset($mezo_12)) ? $mezo_12['nev'] : ''}}
                </div>
                <div id="13" class="col-1 border border-primary">{{(isset($mezo_13)) ? $mezo_13['nev'] : ''}}</div>
                <div id="14" class="col-1 border border-primary">{{(isset($mezo_14)) ? $mezo_14['nev'] : ''}}</div>
                <div id="15" class="col-1 border border-primary">{{(isset($mezo_15)) ? $mezo_15['nev'] : ''}}</div>
                <div id="16" class="col-1 border border-primary">{{(isset($mezo_16)) ? $mezo_16['nev'] : ''}}</div>
                <div id="17" class="col-1 border border-primary">{{(isset($mezo_17)) ? $mezo_17['nev'] : ''}}</div>
                <div id="18" class="col-1 border border-primary">{{(isset($mezo_18)) ? $mezo_18['nev'] : ''}}</div>
                <div id="19" class="col-1 border border-primary">{{(isset($mezo_19)) ? $mezo_19['nev'] : ''}}</div>
                <div id="20" class="col border border-primary">{{(isset($mezo_20)) ? $mezo_20['nev'] : ''}}</div>
            </div>
            {{-- ELSŐ SOR VÉGE --}}
            {{-- KÖZÉPSŐ RÉSZ --}}
            <div class="row h-100">
                {{-- Bal oszlop --}}
                <div class="col border border-primary">
                    <div class="row h-100">
                        <div id="9" class="col-12 border border-primary">9</div>
                        <div id="8" class="col-12 border border-primary">8</div>
                        <div id="7" class="col-12 border border-primary">7</div>
                        <div id="6" class="col-12 border border-primary">6</div>
                        <div id="5" class="col-12 border border-primary">5</div>
                        <div id="4" class="col-12 border border-primary">4</div>
                        <div id="3" class="col-12 border border-primary">3</div>
                        <div id="2" class="col-12 border border-primary">2</div>
                        <div id="1" class="col-12 border border-primary">1</div>
                    </div>
                </div>
                {{-- Bal oszlop vége --}}
                {{-- KÖZÉPSŐ RÉSZ --}}
                <div class="col-9">
                </div>
                {{-- KÖZÉPSŐ RÉSZ VÉGE --}}
                {{-- JOBB OLDALO OSZLOP --}}
                <div class="col border border-primary">
                    <div class="row h-100">
                        <div id="21" class="col-12 border border-primary">21</div>
                        <div id="22" class="col-12 border border-primary">22</div>
                        <div id="23" class="col-12 border border-primary">23</div>
                        <div id="24" class="col-12 border border-primary">24</div>
                        <div id="25" class="col-12 border border-primary">25</div>
                        <div id="26" class="col-12 border border-primary">26</div>
                        <div id="27" class="col-12 border border-primary">27</div>
                        <div id="28" class="col-12 border border-primary">28</div>
                        <div id="29" class="col-12 border border-primary">29</div>
                    </div>
                </div>
                {{-- JOBB OLDALO OSZLOP VÉGE --}}
            </div>
            {{-- KÖZÉPSŐ RÉSZ VÉGE --}}
            {{-- Utolsó SOR --}}
            <div class="row">
                <div id="0" class="col border border-primary">0</div>
                <div id="39" class="col-1 border border-primary">39</div>
                <div id="38" class="col-1 border border-primary">38</div>
                <div id="37" class="col-1 border border-primary">37</div>
                <div id="36" class="col-1 border border-primary">36</div>
                <div id="35" class="col-1 border border-primary">35</div>
                <div id="34" class="col-1 border border-primary">34</div>
                <div id="33" class="col-1 border border-primary">33</div>
                <div id="32" class="col-1 border border-primary">32</div>
                <div id="31" class="col-1 border border-primary">31</div>
                <div id="30" class="col border border-primary">30</div>
            </div>
            {{-- Utolsó SOR VÉGE --}}
        </div>
    </section>
@endsection