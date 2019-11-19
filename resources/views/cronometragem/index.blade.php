@extends('layout')  

@section('conteudo')
            <div class="main-panel">
                <div class="content">
                    <div class="page-inner">
                        <h1 class="text-center">Cronômetro com JavaScript</h1>
                        <div id="cronometro" class="text-center">
                            <div class="form-group"><h2 id="reloj">00 : 00 : 00</h2></div>
                            <form name="cron" action="#" >
                                <div style="display: flex; margin-left: 255px;">
                                    <input class="btn btn-dark" style="width: 100px; text-align: center" type="button" value="Iniciar" name="empieza" />
                                    <input class="btn btn-dark" style="margin-left: 10px; width: 100px; text-align: center" type="button" value="Parar" name="para" /><br/>
                                    <input class="btn btn-dark" style="margin-left: 10px; width: 100px; text-align: center" type="button" value="Continuar" name="continua" />
                                    <input class="btn btn-dark" style="margin-left: 10px; width: 100px; text-align: center" type="button" value="Reiniciar" name="reinicia" />
                                    <input class="btn btn-dark" style="margin-left: 10px; width: 100px; text-align: center" type="button" value="Próximo" name="proximo"/>
                                </div>
                            </form>
                        </div>
                        <!-- Table -->
                        <br><br><br>
                        <div class="col-md-12">
                            <div class="card">

                                <div class="card-header">

                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title">Cronometragem</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="add-row" class="display table table-striped table-hover" >
                                            <thead>
                                                <tr>
                                                    <th>Nº Cronômetro</th>
                                                    <th>Nome</th>
                                                    <th>Tempo</th>

                                                </tr>
                                            </thead>
                                            <tbody id="corpoTabela">
                                                <tr>
                       
                                                </tr>
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