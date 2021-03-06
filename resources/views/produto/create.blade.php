@extends('layout')  

@section('conteudo')
<script>
    function addProduto(url){
    confirma = confirm('Deseja Cadastrar o Produto?');
    dados = $('#formAdd').serialize();
    if (confirma){
    $.ajax({
    method: 'post',
            url: url,
            data: dados,
            dataType: 'html',
            success: function (data){
            alert('Produto Cadastrado com Sucesso!');
            location.href = '/produto';
            },
            error: function (argument){
            alert('Falha ao Cadastrar Produto!');
            }
    });
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
                                    <a href="/">
                                        <i class="flaticon-home"></i>
                                    </a>
                                </li>
                                <li class="separator">
                                    <i class="flaticon-right-arrow"></i>
                                </li>
                                <li class="nav-item">
                                    <a>Produtos</a>
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
                                        <div class="card-title">Cadastrar Produto</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <form action="" id="formAdd" onsubmit="return addProduto('{{route('produto.store')}}')">
                                                @csrf
                                                <div class="col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="pronom">Nome do Produto</label>
                                                        <input maxlength="50" style="width: 405px" type="text" class="form-control" id="ProNom" name="ProNom" placeholder="Digite o nome do Produto">                                                    
                                                    </div>
                                                    <div style="display: flex; margin-left: 10px">
                                                        <button class="btn btn-success" type="submit">Cadastrar</button>
                                                        <a href="{{url('/')}}/produto" class="btn btn-danger" style="margin-left: 5px">Voltar</a>
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