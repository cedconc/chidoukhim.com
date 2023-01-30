@extends('layouts.profile')

@section('styles')
    <style type="text/css">
        .avatar-img{
            height: 4rem;
            width: 4rem;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
             border-radius: 50%;
        }

        td{
            vertical-align: middle!important;
        }

    </style>

@endsection


@section('content')

    <div class="row">
        <h2 class="text-center col-md-12">{{ __('Mes chidouhs') }}</h2>
    </div>

    <div class="row mt-4">

        <table class="col-md-12 table  table-hover table-borderless">
            <thead>
                <tr style="font-weight: bold;">
                    <td>#</td>
                    <td class="text-center">{{ __('Concernés') }}</td>
                    <td>{{ __('Date') }}</td>
                    <td>{{ __('Statut') }}</td>
                    <td>{{ __('Voir') }}</td>
                    <td>{{ __('Actions') }}</td>



                </tr>
            </thead>

            <tbody>
                @foreach ($chidours as $chidour)
                @if (isset($chidour->origine_user) && isset($chidour->cible_user))
                <tr>
                    <td>{{ $chidour->id }}</td>
                    <td>

                        <div class="row" style="text-align: -webkit-center;">
                            <div class="col-md-6">
                                @if (isset($chidour->origine_user) && isset($chidour->origine_user->photo_1))
                                <div class="avatar-img" style="background-image: url('{{ assets_base() . $chidour->origine_user->photo_1 }}');"></div>
                                @else
                                <div class="avatar-img" style="background-image: url('https://fakeimg.pl/404/?text=404 }}');"></div>
                                @endif
                                {{ $chidour->origine_user->name }} {{ $chidour->origine_user->prenom }}
                            </div>

                            <div class="col-md-6">
                                @if(isset($chidour->cible_user) && isset($chidour->cible_user->photo_1))
                                <div class="avatar-img" style="background-image: url('{{ assets_base() . $chidour->cible_user->photo_1 }}');"></div>
                                @else
                                <div class="avatar-img" style="background-image: url('https://fakeimg.pl/404/?text=404');"></div>
                                @endif
                                {{ $chidour->cible_user->name }} {{ $chidour->cible_user->prenom }}
                            </div>

                        </div>


                    </td>
                    <td>{{ $chidour->created_at->format('d-m-Y, H:i:s') }}</td>
                    <td>
                        @if ( $chidour->fini )
                            <span class="badge badge-danger">{{ __('Fermé') }}</span>
                        @else
                            <span class="badge badge-success">{{ __('En cours') }}</span>
                        @endif

                        @if ( $chidour->marie )
                            <br>
                            <span class="badge badge-success">{{ __('Mariés') }}</span>

                        @endif
                    </td>
                    <td><a href="/chidour/{{ $chidour->id }}" class="text-primary"><i class="fa fa-eye"></i> {{ __('Voir') }}</a></td>
                    <td>

                        <form id="chidour-actions_{{ $chidour->id }}" action="{{ route('actions_chidour') }}" method="post">
                            @csrf
                            <input type="hidden" value="{{ $chidour->id }}" name="chidour_id">
                            <select name="actions" id="actions_{{ $chidour->id }}" class="form-control actions">
                                <option disabled selected>{{ __('Choisir') }}</option>
                                <option value="marie">{{ __('Annoncer mariage') }}</option>
                                <option value="fini">{{ __('Annuler chidour') }}</option>
                            </select>
                        </form>


                        @if ($chidour->marie)
                        <br>
                                <button class="btn btn-primary">{{ __('Je fais un don') }}</button>
                        @endif

                    </td>




                </tr>
                @endif
                @endforeach
            </tbody>
        </table>

    </div>

@endsection


@section('scripts')
    <script>
        $('.actions').change(function(){
            var id = $(this).attr('id');

            $('#chidour-' + id).submit();
        });
    </script>
@endsection

