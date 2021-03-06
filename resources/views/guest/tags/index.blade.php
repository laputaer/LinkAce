@extends('layouts.guest')

@section('content')

    <header class="d-flex align-items-center">
        <h3 class="mb-0">
            @lang('tag.tags')
        </h3>
    </header>

    <div class="card my-3 mb-3">
        <div class="card-table">

            @if(!$tags->isEmpty())

                @include('guest.tags.partials.table')

            @else

                <div class="alert alert-info m-3">
                    @lang('linkace.no_results_found', ['model' => trans('tag.tags')])
                </div>

            @endif

        </div>
    </div>

    @if(!$tags->isEmpty())
        {!! $tags->onEachSide(1)->appends(['orderBy' => $orderBy, 'orderDir' => $orderDir])->links() !!}
    @endif

@endsection
