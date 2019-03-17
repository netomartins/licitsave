<?php
session_start();
require '../check.php';
include_once("../conexao.php");	
//error_reporting(0);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LicitSave - Painel de Controle</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
</head>
<body class="hold-transition skin-blue sidebar-mini">

  
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
     <span class="logo-mini"><b>L</b>icit</span>
        <img src="../imagens/licitacao2.jpg" width="45" height="45" class="img-circle" alt="User Image"> <b>Licit</b>Save</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Licit</b>Save</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="index.php" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
	  
        <ul class="nav navbar-nav">
		
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../imagens/usuario.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['usuarioNome']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../imagens/usuario.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['usuarioNome']; ?>
                  <small><?php echo 'Bem Vindo!'?></small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../imagens/usuario.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['usuarioNome']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU NAVEGAÇÃO</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-gavel"></i> <span>Licitações</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="novalicitacao.php"><i class="fa fa-plus-circle"></i> Nova Licitação</a></li>
            <li class="active"><a href="licitacoes.php"><i class="fa fa-search"></i> Buscar Licitações</a></li>
          </ul>
		  <li><a href="usuarios.php"><i class="fa fa-user-circle"></i> Usuários</a></li>
		  <li><a href="documentos.php"><i class="fa fa-book"></i> Documentos da Empresa</a></li>
		  <li><a href="../logout.php"><i class="fa fa-times"></i> Sair</a></li>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        LicitSave
        <small>Painel de Controle</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
	
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        
        <!-- ./col -->
      
        <!-- ./col -->
     
        <!-- ./col -->
       
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      
      <!-- /.row (main row) -->
	  
	 
	  
	  
	  
	  <div class="row">
        <!-- Left col -->
		<div class="col-md-12">
		<div class="box box-info">
            <div class="box-header">
              <i class="fa fa-gavel"></i>

              <h3 class="box-title">Licitação Nº <?php 
								$id = $_GET['id'];
								$result_usuario = "SELECT * FROM licitacao WHERE id = '$id'";
								$resultado_usuario = mysqli_query($conn, $result_usuario);
								$resultado = mysqli_fetch_assoc($resultado_usuario);						
								echo $resultado['id']; 
								?></h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                
				  <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
		<div class="col-md-12">

                        

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Ano:</label>
                                        <input type="text" class="form-control" id="cad_licita_ano" name="cad_licita_ano" placeholder="<?php 
								$id = $_GET['id'];
								$result_usuario = "SELECT * FROM licitacao WHERE id = '$id'";
								$resultado_usuario = mysqli_query($conn, $result_usuario);
								$resultado = mysqli_fetch_assoc($resultado_usuario);						
								echo $resultado['ano']; 
								?>" disabled>
                                    </div>
                                </div>


                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label>Nº Processo:</label>
                                        <input type="text" class="form-control" id="cad_licita_numprocesso" name="cad_licita_numprocesso" placeholder="<?php 
								$id = $_GET['id'];
								$result_usuario = "SELECT * FROM licitacao WHERE id = '$id'";
								$resultado_usuario = mysqli_query($conn, $result_usuario);
								$resultado = mysqli_fetch_assoc($resultado_usuario);						
								echo $resultado['num_processo']; 
								?>" disabled>
                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label>Nº Edital:</label>
                                        <input type="text" class="form-control" id="cad_licita_numedital" name="cad_licita_numedital" placeholder="<?php 
								$id = $_GET['id'];
								$result_usuario = "SELECT * FROM licitacao WHERE id = '$id'";
								$resultado_usuario = mysqli_query($conn, $result_usuario);
								$resultado = mysqli_fetch_assoc($resultado_usuario);						
								echo $resultado['num_edital']; 
								?>" disabled>
                                    </div>

                                </div>
                            </div>
							
							<div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Objeto:</label>
                                        <input type="text" class="form-control" id="cad_licita_objeto" name="cad_licita_objeto" placeholder="<?php 
								$id = $_GET['id'];
								$result_usuario = "SELECT * FROM licitacao WHERE id = '$id'";
								$resultado_usuario = mysqli_query($conn, $result_usuario);
								$resultado = mysqli_fetch_assoc($resultado_usuario);						
								echo $resultado['objeto']; 
								?>" disabled>
                                    </div>
                                </div>


                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label>Modalidade:</label>
                                        <input type="text" class="form-control" id="cad_licita_modalidade" name="cad_licita_modalidade" placeholder="<?php 
								$id = $_GET['id'];
								$result_usuario = "SELECT * FROM licitacao WHERE id = '$id'";
								$resultado_usuario = mysqli_query($conn, $result_usuario);
								$resultado = mysqli_fetch_assoc($resultado_usuario);						
								echo $resultado['modalidade']; 
								?>" disabled>
                                    </div>

                                </div>
								
								
								<div class="col-md-4">

                                    <div class="form-group">
                                        <label>Entidade:</label>
                                        <input type="text" class="form-control" id="cad_licita_entidade" name="cad_licita_entidade" placeholder="<?php 
								$id = $_GET['id'];
								$result_usuario = "SELECT * FROM licitacao WHERE id = '$id'";
								$resultado_usuario = mysqli_query($conn, $result_usuario);
								$resultado = mysqli_fetch_assoc($resultado_usuario);						
								echo $resultado['entidade']; 
								?>" disabled>
                                    </div>

                                </div>
								
								

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label>Cidade:</label>
                                        <input type="text" class="form-control" id="cad_licita_cidade" name="cad_licita_cidade" placeholder="<?php 
								$id = $_GET['id'];
								$result_usuario = "SELECT * FROM licitacao WHERE id = '$id'";
								$resultado_usuario = mysqli_query($conn, $result_usuario);
								$resultado = mysqli_fetch_assoc($resultado_usuario);						
								echo $resultado['cidade']; 
								?>" disabled>
                                    </div>

                                </div>
								
                            </div>
							
                    </div>
					</div>
					</div>
					</div>
					
					
					<div class="col-md-4">
          <!-- Info Boxes Style 2 -->
          
          <!-- /.info-box -->
          <!-- /.info-box -->
          <!-- /.info-box -->
          <!-- /.info-box -->

          
          <!-- /.box -->

          <!-- PRODUCT LIST -->
		  
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Enviar Arquivos</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<form method="POST" enctype="multipart/form-data">
				<div class="form-group">
                  <label for="exampleInputEmail1">Nº Edital / Nº Contrato</label>
                  <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição do Arquivo" required>
                </div>
				<div class="form-group">
					<label>Tipo de Documento:</label>
					<select id="tipo_doc" name="tipo_doc" class="form-control">					  
					  <option value="Edital">Edital</option>
					  <option value="Contrato">Contrato</option>					  
					</select>
                </div>
      <input type="file" name="fileUpload">
      <input type="submit" value="Enviar" />
    </form>


    <?php
      //$ext2 = strtolower(substr($_FILES['fileUpload']['name'],-4));
	  if(isset($_FILES['fileUpload']))
   {
	   $ext2 = strtolower(substr($_FILES['fileUpload']['name'],-4));
	   if($ext2 == ".pdf"){
      date_default_timezone_set("Brazil/East"); //Definindo timezone padrão

      $ext = strtolower(substr($_FILES['fileUpload']['name'],-4)); //Pegando extensão do arquivo
      $new_name = md5(uniqid(time())) . $ext; //Definindo um novo nome para o arquivo
      $dir = 'uploads/'; //Diretório para uploads

      move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
	  $id_licita = $_GET['id'];
	  $tipo_doc = $_POST['tipo_doc'];
	  $descricao = $_POST['descricao'];
		  $sql = "INSERT INTO arquivos(descricao, id_licitacao, nome_arquivo, tipo) VALUES ('$descricao', $id_licita,'$new_name','$tipo_doc')";
		$conn->query($sql);
	   }
   else {
	   echo "Extensão $ext2 não permitida!";
   }

   }
	  
    ?>
            </div>
            <!-- /.box-body -->
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
		
		
		
		<div class="col-md-8">
          <!-- Info Boxes Style 2 -->
          
          <!-- /.info-box -->
          <!-- /.info-box -->
          <!-- /.info-box -->
          <!-- /.info-box -->

          
          <!-- /.box -->

          <!-- PRODUCT LIST -->
		  
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Arquivos da Licitação Nº <?php 
								$id = $_GET['id'];
								$result_usuario = "SELECT * FROM licitacao WHERE id = '$id'";
								$resultado_usuario = mysqli_query($conn, $result_usuario);
								$resultado = mysqli_fetch_assoc($resultado_usuario);						
								echo $resultado['id']; 
								?></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="text-align: center;">ID</th>
				  <th style="text-align: center;">Descricao</th>
                  <th style="text-align: center;">Tipo</th>
				  <th style="text-align: center;">Ação</th>
				  
                  
                </tr>
                </thead>
                <tbody>
				<?php 
					$result_usuario = "SELECT * FROM arquivos";
					$resultado_usuario = mysqli_query($conn, $result_usuario);
					while($resultado = mysqli_fetch_assoc($resultado_usuario)){		
						$id = $resultado['id'];
						$descricao = $resultado['descricao'];
						$tipo = $resultado['tipo'];
						$nome_arquivo = $resultado['nome_arquivo'];
						
						
				?>
				
				<tr>
                  <td><?php echo $id; ?></td>
                  <td><?php echo $descricao; ?></td>
                  <td><?php echo $tipo; ?></td>                  
                  <td style="text-align: center;"><a href="uploads/<?php echo $nome_arquivo; ?>" target="_blank"><i class="fa fa-download"></i> Baixar</a></td>
                </tr>
				<?php } ?>
                
                
                
                </tbody>
                <tfoot>
                <tr>
                  <th style="text-align: center;">ID</th>
				  <th style="text-align: center;">Descricao</th>
                  <th style="text-align: center;">Tipo</th>
				  <th style="text-align: center;">Ação</th>
                </tr>
                </tfoot>
              </table>
              </div>
              <!-- /.table-responsive -->
            </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
		
		
		
					<!-- Trigger the modal with a button -->
					<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Informação</h4>
						  </div>
						  <div class="modal-body">
							<p>Licitação Salva.</p>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
						  </div>
						</div>

					  </div>
					</div>
					
			
     <div>
	 <div class="row">
        <!-- Left col -->
        <div class="col-md-18">
		
          <!-- MAP & BOX PANE -->
          
          <!-- /.row -->

          <!-- TABLE: LATEST ORDERS -->
          
        <!-- /.col -->

        
		
		
	  
	  
	  
	  
	  
	  
    
  </div>
        
        
        <!-- right col -->
      </div>
	  
	  
	  

    </section>
	
	
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2018 <a href="#">LicitSave</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>




<script>
  $(function () {
    $("#example1").DataTable({
	  "order": [[ 0, "desc" ]],
	  "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>






	



</body>


</html>
