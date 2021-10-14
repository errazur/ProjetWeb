

@extends('layouts.app')

@section('content')

    <div class="m-4">



        <div class="flex flex-row mb-28">
            <div>
                <img src=" {{ URL::asset('/images/terrain.jpg') }}" alt=""
                    class="img-responsive box-border m-4 w-8/12 border-8 border-violet" />
                <div class="text-black text-4xl -mt-36 ml-44">
                    VS
                </div>
            </div>

            <div class="flex flex-col mt-10">
                <div class="bg-violet border-2 shadow h-36 flex self-end mr-8 w-60">
                    JOURNER 28/30
                </div>

                <div class="bg-violet border-2 shadow h-36 w-60 flex self-end mr-8 mt-10 items-center">
                    <img src=" {{ URL::asset('/images/joueur.jpg') }}" alt="" class="img-responsive box-border m-4 w-24" />
                    Joueur du jour !
                </div>
            </div>

        </div>


        <div class="bg-violet">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut unde repellendus architecto voluptatem. Sit
            debitis
            expedita officia unde, deserunt quibusdam accusantium, esse placeat obcaecati harum consequatur enim aliquam
            corporis odit.
        </div>

    </div>
@endsection
