<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">

	<head>

	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <!-- Bootstrap Core CSS -->
	    <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	    <!-- MetisMenu CSS -->
	    <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

	    <!-- Custom CSS -->
	    <link href="<?php echo Yii::app()->request->baseUrl; ?>/dist/css/sb-admin-2.css" rel="stylesheet">

	    <!-- Morris Charts CSS -->
	    <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/morrisjs/morris.css" rel="stylesheet">

	    <!-- Custom Fonts -->
	    <link href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->

		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>

	<body>
	<div id="page">
		<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../inicio/panel"><?php echo $this->pageTitle=Yii::app()->name; ?></a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-header">
                <li style="padding-left: 17px">
                    <a href="../inicio/panel"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                </li>
                <li>
                    <a href="../secretaria/panel"> 
                        <i class="fa fa-comments fa-fw" aria-hidden="true"></i> Secretaría
                    </a>
                </li>
                <li >
                    <a href="#"> 
                        <i class="fa fa-plus fa-fw" aria-hidden="true"></i> Módulo #2
                    </a>
                </li>
                <li >
                    <a href="#"> 
                        <i class="fa fa-plus fa-fw" aria-hidden="true"></i> Módulo #3
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> Nuevo Comentario
                                    <span class="pull-right text-muted small">Hace 4 minutos</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 Nuevos Seguidores
                                    <span class="pull-right text-muted small">Hace 12 minutos</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Mensaje Enviado
                                    <span class="pull-right text-muted small">Hace 27 minutos</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> Nueva Tarea
                                    <span class="pull-right text-muted small">Hace 43 minutos</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Servidor Reiniciado
                                    <span class="pull-right text-muted small">11:32 AM</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="notificaciones">
                                <strong>Todas las notificaciones</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
			<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> <?php echo CHtml::encode(Yii::app()->user->name); ?><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-gear fa-fw"></i> Ajustes</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw" aria-hidden="true"></i> Agenda</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i> Calendario</a>
                        </li>
                        <li>
                            <a href="logout"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
		
		<?php echo $content; ?>


		<!--<div id="footer">
			Copyright &copy; <?php echo date('Y'); ?> by Creaciones Ben-Hur C.A.<br/>
			All Rights Reserved.<br/>
			<?php echo Yii::powered(); ?>
		</div>-->

    <!-- jQuery -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/dist/js/sb-admin-2.js"></script>

	</body>

</html>
