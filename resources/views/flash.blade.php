@if(Session::has('success'))
<div class="container p-4">

    <div class="alert alert-success alert-dismissable fixed-center m-3">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ Session::get('success') }}

        </div>
</div>



@endif


@if(Session::has('info'))
<div class="container p-4">

    <div class="alert alert-info alert-dismissable m-3">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ Session::get('info') }}

        </div>
</div>



  @endif

@if (session('status'))

    <div class="container p-4">

        <div class="alert alert-success alert-dismissable m-3">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('status') }}

        </div>


@endif



@if(Session::has('danger'))

<div class="container p-4">
    <div class="alert alert-danger alert-dismissable">

        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ Session::get('danger') }}

        </div>
</div>



@endif

@if(!empty($warning))
<div class="container p-4">

    <div class="alert alert-warning alert-dismissable m-3">

        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ $warning }}

        </div>
</div>

@endif
