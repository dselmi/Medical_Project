@extends('layouts.backend')

@section('css_before')
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
@endsection

@section('js_after')
<!-- jQuery (required for DataTables plugin) -->
<script src="{{ asset('js/lib/jquery.min.js') }}"></script>

<!-- Page JS Plugins -->
<script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>

<!-- Page JS Code -->
<script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
@endsection

@section('content')
<!-- Hero -->
<div class="content header-title-content">
<div class="block-content block-content-full ">
            <div class="d-flex justify-content-between align-items-center">
            <h5 class="flex-grow-1 fw-semibold my-2 my-sm-3">
                <img class="profile-user-img img-fluid img " src="{{asset('images/accueil.png')}}" alt="avatar"
                    style="width: 30px;border-radius: 50%"> Liste des fiches d'écoute
            </h5>
        <br>
     </div>
         <div class="card">
        <div class="card-body">
            @if(count($fiches) > 0)
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Lieu</th>
                            <th>CIN/Passport</th>
                            <th>Télephone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fiches as $fiche)
                        <tr>
                            <td>{{$fiche->date}}</td>
                            <td>{{$fiche->renseignement->lieu_naissance ?? ''}}</td>
                            <td>{{$fiche->renseignement->cin_passeport?? ''}}</td>
                            <td>{{$fiche->renseignement->phone?? ''}}</td>
                            <td class="text-center">



                                <a href="{{ route('ecoute.edit.index', $fiche->id) }}" class="btn btn-warning "
                                    role="button"><img class="profile-user-img img-fluid img"
                                        src="{{asset('images/soin-des-yeux.png')}}" alt="avatar" style="width: 25px;">
                                </a>

                                <a href="{{ route('ecoute.edit.index', $fiche->id) }}" class="btn btn-secondary "
                                    role="button"><img class="profile-user-img img-fluid img"
                                    src="{{asset('images/bouton-modifier.png')}}" alt="avatar" style="width: 25px;">
                                </a>

                                <a class="btn btn-danger delete-fiche" href="#"
                                    data-url="{{ route('ecoute.delete', $fiche->id) }}">
                                    <img class="profile-user-img img-fluid img"
                                        src="{{asset('images/supprimer.png')}}" alt="avatar" style="width: 25px;">
                                </a>
                            </td>
                        </tr>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div class="col col-lg-4 alert alert-warning border-0 bg-warning alert-dismissible fade show py-2">
                <div class="d-flex align-items-center">
                    <div class="font-35 text-dark"><div class="font-35 text-dark"><img class="profile-user-img img-fluid img"
                        src="{{asset('images/info.png')}}" alt="avatar" style="width: 40px;">
                    </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 text-dark">Aucun fiche d'écoute trouvé</h6>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
</div>
<!-- END Page Content -->
@endsection
@push('js_after')
<script>
    $(document).on('click','.delete-fiche',function(event){
        event.preventDefault();
        let url = $(this).data('url')
        var csrf = $('meta[name="csrf-token"]').attr('content')
        $.ajax({
            beforeSend: function(xhr){
                return xhr.setRequestHeader('X-CSRF-TOKEN',csrf);
            },
            url,
            type:"delete",
            success:function(){
                location.reload()
            }
        })
    });
</script>
@endpush
