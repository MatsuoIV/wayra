<html>

<head>
	<meta charset="utf-8">
	<link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	<script language="javascript">

	function habilita(form)

	{
	form.facultad.disabled = false;
	form.universidad.disabled = true;
	}

	function deshabilita(form)
	{
	form.facultad.disabled = true;
	form.universidad.disabled = false;
	}
	</script>

</head>

<body>
	<div class="container">
		
		<!--<div class="span8">-->
			<h1>Registro de asistencia</h1><br />
			<legend>Por favor llenar los campos mostrados:</legend>
			<?php 

				$atributos = array('class'	=>	'form-horizontal');

				$boton = 'class="btn btn-primary"';

				$lista = 'class="span4"';

				echo form_open(base_url().'registro',$atributos);

				$nombre = array(
						'name'	=>	'nombre',
						'id'	=>	'nombre',
						'class'	=>	'input-xlarge',
						'value'	=>	''
					);

				$ap_paterno = array(
						'name'	=>	'ap_paterno',
						'id'	=>	'ap_paterno',
						'class'	=>	'input-xlarge',
						'value'	=>	''
					);

				$ap_materno = array(
						'name'	=>	'ap_materno',
						'id'	=>	'ap_materno',
						'class'	=>	'input-xlarge',
						'value'	=>	''
					);

				$dni = array(
						'name'	=>	'dni',
						'id'	=>	'dni',
						'class'	=>	'input-small',
						'value'	=>	''
					);

				$edad = array(
						'name'	=>	'edad',
						'id'	=>	'edad',
						'class'	=>	'input-mini',
						'value'	=>	''
					);

				$mail = array(
						'name'	=>	'mail',
						'id'	=>	'mail',
						'class'	=>	'input-xlarge',
						'value'	=>	''
					);

				$telefono = array(
						'name'	=>	'telefono',
						'id'	=>	'telefono',
						'class'	=>	'input-small',
						'value'	=>	''
					);

				$facultad = array(
						'name'	=>	'facultad',
						'id'	=>	'facultad',
						'class'	=>	'span3',
						'value'	=>	''
					);

				$universidad = array(
						'name'	=>	'universidad',
						'id'	=>	'universidad',
						'class'	=>	'input-xlarge',
						'value'	=>	'',
						'disabled' => 'disabled'
					);

				$lista_facs = array(
						'none'	=>	'--Selecciona una facultad--',
		                'faua'	=> 	'Facultad de Arquitectura, Urbanismo y Artes',
		                'fc'    => 	'Facultad de Ciencias',
		                'fia'   => 	'Facultad de Ingeniería Ambiental',
		                'fiecs' => 	'Facultad de Ingeniería Económica y Ciencias Sociales',
		                'fiee'	=> 	'Facultad de Ingeniería Eléctrica y Electrónica',
		                'figmm' => 	'Facultad de Ingeniería Geológica, Minera y Metalúrgica',
		                'fiis'	=> 	'Facultad de Ingeniería Industrial y de Sistemas',
		                'fim'	=> 	'Facultad de Ingeniería Mecánica',
		                'fip'	=> 	'Facultad de Ingeniería de Petroleo',
		                'fiqt'	=> 	'Facultad de Ingeniería Química y Textil'
		            );

				/*$lista_univ = array(
						'none'	=>	'--Selecciona una facultad--',
						'pucp'	=>	'Pontificia Universidad Católica del Perú',
						'uap'	=>	'Universidad Alas Peruanas',
						'uac'	=>	'Universidad Andina del Cusco',
						'uancv'	=>	'Universidad Andina Nestor Cáceres Velásquez',
						'uarm'	=>	'Universidad Antonio Ruiz de Montoya',
						'ucsm'	=>	'Universidad Católica de Santa María',
						'uct'	=>	'Universidad Católica de Trujillo',
						'uladech'	=>	'Universidad Católica los Ángeles de Chimbote',
						'ucst'	=>	'Universidad Católica Santo Toribio',
						'ucsp'	=>	'Universidad Católica San Pablo',
						'ucss'	=>	'Universidad Católica Sedes Sapientiae',
						'ucv'	=>	'Universidad César Vallejo',
						'ucip'	=>	'Universidad Científica del Perú',
						'ucs'	=>	'Universidad Científica del Sur',
						'ucci'	=>	'Universidad Continental de Ciencias e Ingeniería',
						'ucpmi'	=>	'Universidad Cristiana del Perú María Inmaculada',
						'uch'	=>	'Universidad de Ciencias y Humanidades',
						'uh'	=>	'Universidad de Huánuco',
						'ul'	=>	'Universidad de Lima',
						'upi'	=>	'Universidad de Piura',
						'usmp'	=>	'Universidad de San Martín de Porres',
						'up'	=>	'Universidad del Pacífico',
						'ue'	=>	'Universidad ESAN',
						'unife'	=>	'Universidad Femenina del Sagrado Corazón',
						'uigv'	=>	'Universidad Inca Garcilaso de la Vega',
						'ujbm'	=>	'Universidad Jaime Bausate y Meza',
						'ujcm'	=>	'Universidad José Carlos Mariátegui',
						'umch'	=>	'Universidad Marcelino Champagnat',
						'unas'	=>	'Universidad Nacional Agraria de la Selva',
						'unalm'	=>	'Universidad Nacional Agraria La Molina',
						'unamd'	=>	'Universidad Nacional Amazónica de Madre de Dios',
						'undac'	=>	'Universidad Nacional Daniel Alcides Carrión',
						'unc'	=>	'Universidad Nacional de Cajamarca',
						'une'	=>	'Universidad Nacional de Educación Enrique Guzman y Valle',
						'unh'	=>	'Universidad Nacional de Huancavelica',
						'unap'	=>	'Universidad Nacional de la Amazonía Peruana',
						'unm'	=>	'Universidad Nacional de Moquegua',
						'unp'	=>	'Universidad Nacional de Piura',
						'unsa'	=>	'Universidad Nacional de San Agustín',
						'unsaa'	=>	'Universidad Nacional de San Antonio Abad ',
						'unsch'	=>	'Universidad Nacional San Cristóbal de Huamanga',
						'unsm'	=>	'Universidad Nacional de San Martín',
						'unt'	=>	'Universidad Nacional de Trujillo',
						'untu'	=>	'Universidad Nacional de Tumbes',
						'unu'	=>	'Universidad Nacional de Ucayali',
						'unalt'	=>	'Universidad Nacional del Altiplano',
						'unac'	=>	'Universidad Nacional del Callao',
						'uncp'	=>	'Universidad Nacional del Centro del Perú',
						'uns'	=>	'Universidad Nacional del Santa',
						'unfv'	=>	'Universidad Nacional Federico Villarreal',
						'unhv'	=>	'Universidad Nacional Hermilio Valdizán',
						'uniap'	=>	'Universidad Nacional Intercultural de la Amazonía Peruana',
						'unjbg'	=>	'Universidad Nacional Jorge Basadre Grohmann',
						'unjfsc'	=>	'Universidad Nacional José Faustino Sanchez Carrión',
						'unjma'	=>	'Universidad Nacional José María Arguedas',
						'unmsm'	=>	'Universidad Nacional Mayor de San Marcos',
						'unmba'	=>	'Universidad Nacional Micaela Bastidas de Apurimac',
						'unprg'	=>	'Universidad Nacional Pedro Ruiz Gallo',
						'unslg'	=>	'Universidad Nacional San Luis Gonzaga de Ica',
						'unsam'	=>	'Universidad Nacional Santiago Antúnez de Mayolo',
						'untecs'	=>	'Universidad Nacional Tecnológica del Cono Sur de Lima',
						'untrm'	=>	'Universidad Nacional Toribio Rodríguez de Mendoza de Amazonas',
						'udala'	=>	'Universidad Para el Desarrollo Andino Lircay Angaraes',
						'upchi'	=>	'Universidad Particular de Chiclayo',
						'upch'	=>	'Universidad Peruana Cayetano Heredia',
						'upc'	=>	'Universidad Peruana de Ciencias Aplicadas',
						'upci'	=>	'Universidad Peruana de Ciencias e Informática',
						'upig'	=>	'Universidad Peruana de Integración Global',
						'upla'	=>	'Universidad Peruana de las Américas',
						'uplan'	=>	'Universidad Peruana Los Andes',
						'upu'	=>	'Universidad Peruana Unión',
						'upav'	=>	'Universidad Privada Abraham Valdelomar',
						'upao'	=>	'Universidad Privada Antenor Orrego',
						'upagu'	=>	'Universidad Privada Antonio Guillermo Urrelo',
						'upcti'	=>	'Universidad Privada de Ciencias y Tecnología de Ica',
						'upj'	=>	'Universidad Privada de Jaén',
						'upm'	=>	'Universidad Privada de Moquegua',
						'upp'	=>	'Universidad Privada de Pucallpa',
						'upt'	=>	'Universidad Privada de Tacna',
						'upn'	=>	'Universidad Privada del Norte',
						'upjxxii'	=>	'Universidad Privada Juan XXII',
						'uw'	=>	'Universidad Wiener',
						'upnsp'	=>	'Universidad Privada Nuestra Señora de La Paz',
						'upsjb'	=>	'Universidad Privada San Juan Bautista',
						'upsp'	=>	'Universidad Privada San Pedro',
						'upsb'	=>	'Universidad Privada Sergio Bernales',
						'upt'	=>	'Universidad Privada Telesup',
						'urp'	=>	'Universidad Ricardo Palma',
						'usil'	=>	'Universidad San Ignacio de Loyola',
						'uss'	=>	'Universidad Señor de Sipán',
						'uta'	=>	'Universidad Tecnológica de los Andes',
						'utp'		=>	'Universidad Tecnológica del Perú'
					);*/

				$uni_si = array(
					    'name'        => 'uni',
					    'value'       => 'si',
					    'checked'     => TRUE,
					    'onClick'	  => 'habilita(this.form)'
		    		);

				$uni_no = array(
					    'name'        => 'uni',
					    'value'       => 'no',
					    'checked'     => FALSE,
					    'onClick'	  => 'deshabilita(this.form)'
		    		);
			?>

			<fieldset>
			<div class="control-group">
				<label class="control-label" for="nombre">Nombres</label>
				<div class="controls">
					<?php echo form_input($nombre); ?>
					<p class="help-block"><?php echo form_error('nombre'); ?></p>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="ap_paterno">Apellido Paterno</label>
				<div class="controls">
					<?php echo form_input($ap_paterno); ?>
					<p class="help-block"><?php echo form_error('ap_paterno'); ?></p>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="ap_materno">Apellido Materno</label>
				<div class="controls">
					<?php echo form_input($ap_materno); ?>
					<p class="help-block"><?php echo form_error('ap_materno'); ?></p>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="dni">DNI</label>
				<div class="controls">
					<?php echo form_input($dni); ?>
					<p class="help-block"><?php echo form_error('dni'); ?></p>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="edad">Edad</label>
				<div class="controls">
					<?php echo form_input($edad); ?>
					<p class="help-block"><?php echo form_error('edad'); ?></p>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="mail">E-mail</label>
				<div class="controls">
					<?php echo form_input($mail); ?>
					<p class="help-block"><?php echo form_error('mail'); ?></p>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="telefono">Teléfono</label>
				<div class="controls">
					<?php echo form_input($telefono); ?>
					<p class="help-block"><?php echo form_error('telefono'); ?></p>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">¿Es usted estudiante de la UNI?</label>
				<div class="controls">
					<label class="radio"><?php echo form_radio($uni_si);?> SI, soy estudiante de la UNI.</label>
					<label class="radio"><?php echo form_radio($uni_no);	?> NO.</label>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="facultad">Selecione su facultad:</label>
				<div class="controls">
					<?php echo form_dropdown('facultad', $lista_facs, 'none', $lista); ?>
					<p class="help-block"><?php echo form_error('facultad'); ?></p>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="universidad">Universidad</label>
				<div class="controls">
					<?php echo form_input($universidad); ?>
					<p class="help-block"><?php echo form_error('universidad'); ?></p>
				</div>
			</div>

			<!--<div><?php //echo validation_errors(); ?></div>-->
			
			<div class="form-actions">
				<?php echo form_submit('enviar','Enviar',$boton); ?>
			</div>
			
			<?php echo form_close();?>
			</fieldset>
		<!--</div>-->
	</div>

</body>

</html>