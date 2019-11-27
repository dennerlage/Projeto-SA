@extends('layout')  

@section('conteudo')
<script>
    function addUsuario(url){
    confirma = confirm('Deseja Cadastrar o Usuario?');
    dados = $('#formAdd').serialize();
    if (confirma){
    if ($('#UsuSen').val() == $('#UsuSen2').val()){
        $.ajax({
        method: 'post',
                url: url,
                data: dados,
                dataType: 'html',
                success: function (data){
                alert('Usuário Cadastrado com Sucesso!');
                location.href = '/usuario';
                },
                error: function (argument){
                alert('Falha ao Cadastrar Usuário!');
                }
        });
    }else{
        alert('Senhas não compatíveis');
    }
    }

    return false;
 }
</script>
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Caminho</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="/usuario">
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
                                    <a>Cadastrar</a>
                                </li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Cadastrar Usuário</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <form method="post" id="formAdd" onsubmit="return addUsuario('{{route('usuario.store')}}')">
                                                @csrf
                                                <div class="col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="usunom">Nome Usuário</label>
                                                        <input data-background-color="dark" maxlength="50" style="width: 405px" type="text" class="form-control" id="UsuNom" name="UsuNom" placeholder="Digite o nome do Usuário">                                                    
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ususen">Senha</label>
                                                        <input maxlength="50" style="width: 115px" type="password" class="form-control" id="UsuSen" name="UsuSen" placeholder="Senha">                                                    
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ususen">Confirmar Senha</label>
                                                        <input maxlength="50" style="width: 115px" type="password" class="form-control" id="UsuSen2" name="UsuSen2" placeholder="Confirme">                                                    
                                                    </div>
                                                    <div style="display: flex; margin-left: 10px">
                                                        <button class="btn btn-success" type="submit">Cadastrar</button>
                                                        <a href="/usuario" style="margin-left: 5px" class="btn btn-danger">Voltar</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
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