@extends('bases.master')

@section('style')
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <section class="dashboard section-padding">
        <div class="container">
            <div class="row">
                @include('include.dash-sidebar')
                
                <div class="col-sm-8 col-md-9">
                    {{-- <div class="prop-info text-center">
                        <i class="fa fa-align-left fa-5x"></i>
                        <h3 style="font-weight:bold">Vous n'avez aucune offre en ligne actuellement.</h3>
                        <p>Look for work here <a href="#">Home</a></p>
                    </div><!-- /.prop-info --> --}}
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">LISTE DES EMPLOYES</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Poste</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Contact</th>
                                            <th>Contrat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#">Femme nounou</a>
                                            </td>
                                            <td>
                                                {{-- <img src="{{ asset('assets/img/users/1.jpg') }}" class="img-responsive img-circle pull-left" width="50" height="50" alt="Image"/> --}}
                                                <a href="#">Madeleine</a>
                                            </td>
                                            <td>
                                                <a href="#">Kouao</a>
                                            </td>
                                            <td>
                                                <a href="#"> 4676785544</a>
                                            </td>
                                            <td>
                                                <a href="#"> Encours</a>
                                            </td>
                                            <td>
                                                <a href="#" class="kafe-btn kafe-btn-mint-small"> Faire un rapport</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">Femme de ménage</a>
                                            </td>
                                            <td>
                                                {{-- <img src="{{ asset('assets/img/users/1.jpg') }}" class="img-responsive img-circle pull-left" width="50" height="50" alt="Image"/> --}}
                                                <a href="company.html">Madeleine</a>
                                            </td>
                                            <td>
                                                <a href="#">Kouao</a>
                                            </td>
                                            <td>
                                                <a href="#"> 4676785544</a>
                                            </td>
                                            <td>
                                                <a href="#"> Terminé</a>
                                            </td>
                                            <td>
                                                <a href="#" class="kafe-btn kafe-btn-mint-small"> Faire un rapport</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Poste</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Contact</th>
                                            <th>Contrat</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div><!-- /.table-responsive -->
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function () {
            $("#example1").dataTable();
        });
    </script>
@endsection