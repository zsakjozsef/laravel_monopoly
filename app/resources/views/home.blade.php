@extends('layouts.main')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-2 p-4">
                    <div class="row shadow-lg w-100 h-100">
                    </div>
                </div>
                <?php/*BAL OLDAL*/?>
                <div class="col-8">
                    <div class="table p-4">
                        <div class="row">
                            <div class="col p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div class="col-1 p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div class="col-1 p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div class="col-1 p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div class="col-1 p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div class="col-1 p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div class="col-1 p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div class="col-1 p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div class="col-1 p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div class="col-1 p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div class="col p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                        </div>
                        <div class="row">
                            <div class="col p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div class="col-9 p-0"></div>
                            <div class="col p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                        </div>
                        <div class="row">
                            <div class="col p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div class="col-9 p-0"></div>
                            <div class="col p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                        </div>
                        <div class="row">
                            <div class="col p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div class="col-9 p-0"></div>
                            <div class="col p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                        </div>
                        <div class="row">
                            <div class="col p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div class="col-9 p-0"></div>
                            <div class="col p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                        </div>
                        <div class="row">
                            <div class="col p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div class="col-9 p-0"></div>
                            <div class="col p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                        </div>
                        <div class="row">
                            <div class="col p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div class="col-9 p-0"></div>
                            <div class="col p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                        </div>
                        <div class="row">
                            <div class="col p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div class="col-9 p-0"></div>
                            <div class="col p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                        </div>
                        <div class="row">
                            <div class="col p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div class="col-9 p-0"></div>
                            <div class="col p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                        </div>
                        <div class="row">
                            <div id="1" class="col p-0">
                                @foreach($tablefields as $tablefield)
                                @if($tablefield->number==1)
                                <a class="btn btn-secondary w-100 h-100">
                                    {{ $tablefield->title }}
                                    <p>{{ $tablefield->price}}</p>
                                </a>
                                @endif
                            @endforeach
                            </div>
                            <div class="col-9 p-0"></div>
                            <div class="col p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                        </div>
                        <div class="row">
                            <div id="0" class="col p-0">
                                @foreach($tablefields as $tablefield)
                                    @if($tablefield->number == 0)
                                    <a class="btn btn-secondary w-100 h-100">
                                        {{ $tablefield->title }}
                                        <p>{{ $tablefield->price}}</p>
                                    </a>
                                    @endif
                                @endforeach
                            </div>
                            <div id="39" class="col p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div id="38" class="col-1 p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div id="37" class="col-1 p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div id="36" class="col-1 p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div id="35" class="col-1 p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div id="34" class="col-1 p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div id="33" class="col-1 p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div id="32" class="col-1 p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div id="31" class="col-1 p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                            <div id="30" class="col p-0"><a class="btn btn-secondary w-100 h-100">*</a></div>
                        </div>
                    </div>
                </div>
                <?php/*BAL OLDAL VÉGE*/?>
                <div class="col-2 p-4">
                    <div class="row shadow-lg w-100 h-100">
                    </div>
                </div>
            </div>
            <hr >
        </div>
    </section>
@endsection