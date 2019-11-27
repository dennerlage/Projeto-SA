@extends('layout')  

@section('conteudo')
            <div class="main-panel">
                <div class="content">
                    <div class="page-inner">
                        <div class="page-header">
                            <h4 class="page-title">Caminho</h4>
                            <ul class="breadcrumbs">
                                <li class="nav-home">
                                    <a href="index.html">
                                        <i class="flaticon-home"></i>
                                    </a>
                                </li>
                                <li class="separator">
                                    <i class="flaticon-right-arrow"></i>
                                </li>
                                <li class="nav-item">
                                    <a>Operações</a>
                                </li>
                                <li class="separator">
                                    <i class="flaticon-right-arrow"></i>
                                </li>
                                <li class="nav-item">
                                    <a>Cadastrar</a>
                                </li>
                                <li class="separator">
                                    <i class="flaticon-right-arrow"></i>
                                </li>
                                <li class="nav-item">
                                    <a>Elementos</a>
                                </li>
                                <li class="separator">
                                    <i class="flaticon-right-arrow"></i>
                                </li>
                                <li class="nav-item">
                                    <a>Editar Elemento</a>
                                </li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Editar Elemento</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <label for="openom">Nome do Elemento</label>
                                                    <input maxlength="50" style="width: 405px" type="text" class="form-control" id="openom" placeholder="Digite o nome da Operação">                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label for="opecod">Código Operação</label>
                                                    <input style="width: 155px" type="number" class="form-control" id="opecod" placeholder="Digite o Produto">                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label for="elerit">Ritmo</label>
                                                    <input style="width: 155px" type="number" class="form-control" id="elerit" placeholder="Digite a Máquina">                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label for="eleint">EleInt</label>
                                                    <input style="width: 155px" type="text" class="form-control" id="eleint" placeholder="Digite Tip Est">                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label for="elecon">EleCon</label>
                                                    <input style="width: 155px" type="text" class="form-control" id="elecon" placeholder="Digite OpeCro">                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label for="eleqtdvez">Quantidade de Vezes</label>
                                                    <input style="width: 155px" type="text" class="form-control" id="eleqtdvez" placeholder="Digite OpeCro">                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label for="eleporpçs">Peças</label>
                                                    <input style="width: 155px" type="text" class="form-control" id="eleporpçs" placeholder="Digite OpeCro">                                                    
                                                </div>
                                                <div style="display: flex; margin-left: 10px">
                                                    <button class="btn btn-warning">Editar</button>
                                                    <a href="cadastrarOperacoes.html"><button style="margin-left: 5px" class="btn btn-danger">Voltar</button></a>
                                                </div>
                                            </div>
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