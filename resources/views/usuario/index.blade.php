@extends('layout')  

@section('conteudo')
<script> 
    function delUsuario(id, url){
        confirma = confirm('Deseja Realmente Eliminar o Usuário?');
        if(confirma){
            dados = $('#' + id).serialize();
            $.ajax({
                method: 'post',
                url: url,
                data: dados,
                dataType: 'html',
                success: function (data){
                    $('#linha' + id).remove();
                    $('.data-original-title').remove();
                },
                error: function (argument){
                    alert('Falha ao Eliminar Usuário!');
                }
            });
        }
    }
</script>
<div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                        <h4 class="page-title">Caminho</h4>
                        <ul class="breadcrumbs">
                            <li class="nav-home">
                                <a href="/">
                                    <i class="flaticon-home"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a>Usuários</a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a>Listar</a>
                            </li>
                        </ul>
                    </div> 
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Usuários</h4>
                                    <a href="{{route('usuario.create')}}" class="btn btn-primary btn-round ml-auto" >
                                        <i class="fa fa-plus"></i>
                                        Adicionar Usuário
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="add-row" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Nome</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($usuarios as $u)
                                            <tr id="linhadel{{$u->UsuCod}}">
                                                <td>{{$u->UsuCod}}</td>
                                                <td>{{$u->UsuNom}}</td>
                                                <td>
                                                    <div class="form-button-action" style="margin-left: 550px">
                                                        <a href="{{route('usuario.edit', $u->UsuCod)}}"><button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Editar Usuário">
                                                            <i class="fa fa-edit"></i>
                                                        </button></a>
                                                        <button href="" onclick="return delUsuario('del{{$u->UsuCod}}', '{{route('usuario.destroy', $u->UsuCod)}}')" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remover Usuário">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <form action="" id="del{{$u->UsuCod}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <!-- End Sidebar -->
        <div>
            <footer class="footer">
                <div class="container-fluid">
                    <h4>CronoTime Todos os direitos reservados, copyright © 2019</h4>				
                </div>
            </footer>
        </div>
    </div>
    <!-- End Custom template -->
    <!--   Core JS Files   -->
    <script src="{{url('/')}}/js/core/jquery.3.2.1.min.js"></script>
    <script src="{{url('/')}}/js/core/popper.min.js"></script>
    <script src="{{url('/')}}/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="{{url('/')}}/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="{{url('/')}}/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{url('/')}}/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


    <!-- Chart JS -->
    <script src="{{url('/')}}/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="{{url('/')}}/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="{{url('/')}}/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="{{url('/')}}/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="{{url('/')}}/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{url('/')}}/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{url('/')}}/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

    <!-- Sweet Alert -->
    <script src="{{url('/')}}/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Atlantis JS -->
    <script src="{{url('/')}}/js/atlantis.min.js"></script>

    </body>
</html>

@stop