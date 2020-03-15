@extends('layouts.master')
@section('content')

                    @if (session()->has('success'))
                    <div class="container">
                        <h1 class="display-4 mt-5">
                            <div class="text-center alert alert-success">
                                {!! session()->get('success')!!}
                            </div>
                        </h1>
                    </div>
                    @endif
                    @endsection


@section('js')
<script>
    $(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
    location.href = "{{route('/')}}";
    }, 5000);
    });
</script>
@endsection