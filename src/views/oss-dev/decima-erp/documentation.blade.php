<div id="dec-documentation-main" class="bs-docs-container">
  <div class="col-md-3" role="complementary">
    <nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm">
      <ul class="nav bs-docs-sidenav">
        <li class="active">
          <a href="#dec-documentation-overview">Información general</a>
          <ul class="nav">
            <li class=""><a href="#dec-documentation-overview-01">Introducción</a></li>
            <li class=""><a id="dec-documentation-download" href="#dec-documentation-overview-02">Descargar</a></li>
            <li class=""><a href="#dec-documentation-overview-03">Comunidad</a></li>
            <li class=""><a href="#dec-documentation-overview-04">Compatibilidad con navegadores web</a></li>
            <li class=""><a href="#dec-documentation-overview-05">Licencia</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
  <div class="col-md-9" role="main">
    <div class="bs-docs-section">
      <h1 id="dec-documentation-overview" class="page-header">Información general</h1>

      <h2 id="dec-documentation-overview-01">Introducción</h2>
      <p><strong><em>DecimaERP</em></strong> es una sistema modular basado en web que nace como iniciativa para apoyar el proceso de aprendizaje en las carreras de la Facultad de Ciencias Económicas y Empresariales de la <a href="http://www.uca.edu.sv" target="_blank">Universidad Centroamericana José Simeón Cañas UCA</a>. Se decide publicarlo como <strong><em>Software Libre</em></strong> para facilitar la distribución entre los estudiantes y otras personas interesadas.</p>
      <p>Además de uso en el aula, <strong><em>DecimaERP</em></strong> puede utilizarse como una herramienta de apoyo a la <a href="https://es.wikipedia.org/wiki/Peque%C3%B1a_y_mediana_empresa" target="_blank">MiPyME</a>, en el manejo de sus procesos e información financiera. <strong><em>DecimaERP</em></strong> está en continuo desarrollo para la adición de nuevos módulos y cuenta con una comunidad creciente que lo respalda.</p>

      <h2 id="dec-documentation-overview-02">Descargar</h2>
      <p>Es necesario para poder utilizar la imagen pre-instalada que tenga previamente instalado el software <a href="https://www.virtualbox.org/wiki/Downloads" target="_blank">Oracle VM VirtualBox</a>.</p>
      <p>Descargue el archivo <a href="https://goo.gl/6MHn4k" target="_blank">DecimaERPv1.0.1.ova (626 MB)</a> y utilice la funcionalidad de importar imagen de <a href="https://www.virtualbox.org/wiki/Downloads" target="_blank">Oracle VM VirtualBox</a>. Las configuraciones predeterminadas de la imagen pre-instalada deberían ser lo suficientemente buenas para la mayoría de lo usuarios, solo habría necesidad de cambiarlas si se enfrenta a problemas de rendimiento.</p>
      <p>Una vez iniciada la máquina virtual, utilice el <a href="#dec-documentation-overview-04">navegador web</a> de su sistema operativo anfitrión y coloque la <a href="https://es.wikipedia.org/wiki/Direcci%C3%B3n_IP" target="_blank">dirección IP</a> que se muestra en la máquina virtual, ejemplo: <a href="http://192.168.56.101/" target="_blank">http://192.168.56.101/</a></p>
      <p>El siguiente video, le muestra paso a paso el proceso antes descrito:</p>
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Ebhe1NkqwcQ" allowfullscreen=""></iframe>
      </div>
      <!-- <code>preventDefault</code> -->
      <div class="bs-callout bs-callout-info" id="callout-third-party-libs">
        <h4>La credenciales para iniciar sesión por primera vez en <strong><em>DecimaERP</em></strong> son:</h4>
        <ul>
          <li><strong>correo electrónico:</strong> root@decimaerp.com</li>
          <li><strong>contraseña:</strong> root</li>
        </ul>
        <h4>La credenciales de la imagen virtual son:</h4>
        <ul>
          <li><strong>usuario:</strong> decimaerp</li>
          <li><strong>contraseña:</strong> decimaerp</li>
          <li><strong>contraseña root de mysql:</strong> root</li>
        </ul>
      </div>

      <h2 id="dec-documentation-overview-03">Comunidad</h2>
      <p>La comunidad de <strong><em>DecimaERP</em></strong> está conformada por estudiantes universitarios (que utilizan el software en su proceso de aprendizaje), usuarios del software (que utilizan el software en sus empresas) y todo el equipo de trabajo que se encuentra detrás del desarrollo del proyecto.</p>
      <p>En la pestaña de <strong><em>Comunidad</em></strong> puede encontrar un espacio donde puede publicar preguntas sobre el uso del software, reportar bugs, solicitar nuevas funcionalidades y solventar dudas en general.</p>

      <h2 id="dec-documentation-overview-04">Compatibilidad con navegadores web</h2>
      <p><strong><em>DecimaERP</em></strong> ha sido pensado para utilizarse en las versiones más recientes de los navegadores de escritorio más usados.</p>

      <h3 id="dec-documentation-overview-04">Navegadores soportados</h3>
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <td></td>
              <th>Chrome</th>
              <th>Firefox</th>
              <th>Internet Explorer 10</th>
              <th>Opera</th>
              <th>Safari</th>
              <th>Edge</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Mac</th>
              <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Soportado</td>
              <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Soportado</td>
              <td class="text-muted">N/A</td>
              <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> No Soportado</td>
              <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> No Soportado</td>
              <td class="text-muted">N/A</td>
            </tr>
            <tr>
              <th scope="row">Windows</th>
              <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Soportado</td>
              <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Soportado</td>
              <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Soportado</td>
              <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> No Soportado</td>
              <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> No Soportado</td>
              <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> No Soportado</td>
            </tr>
            <tr>
              <th scope="row">Linux</th>
              <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Soportado</td>
              <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Soportado</td>
              <td class="text-muted">N/A</td>
              <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> No Soportado</td>
              <td class="text-muted">N/A</td>
              <td class="text-muted">N/A</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h2 id="dec-documentation-overview-05">Licencia</h2>
      <p><strong><em>DecimaERP</em></strong> está licenciado bajo la <a href="http://www.gnu.org/licenses/agpl-3.0.html" target="_blank">Licencia Pública General de Affero (en inglés, Affero General Public License, también Affero GPL o AGPL)</a>, esta licencia garantiza a los usuarios finales (personas, organizaciones, compañías) la libertad de usar, estudiar, compartir (copiar) y modificar el software. Su propósito es declarar que el software cubierto por esta licencia es <strong><em>Software Libre</em></strong> y protegerlo de intentos de apropiación que restrinjan esas libertades a los usuarios.</p>
    </div>
  </div>
</div>
<div id='dec-documentation-op-modal' class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
			<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title text-center">Planes de "<strong><em>DecimaERP</em></strong> Online"</h3>
      </div>
			<div class="modal-body clearfix">
				<div class="row">
          <div class="col-lg-6 col-md-6">
              <div class="thumbnail">
                  <div class="caption">
                      <h4 class="pull-right">$60/trimestral ó $96/semestral</h4>
                      <h4><strong>Personal</strong></h4>
                      <p>Ideal para comerciantes individuales que solo deseen manejar su propia información financiera, incluye:</p>
                      <ul>
                        <li><strong><em>1 usuario</em></strong></li>
                        <li><strong><em>1 empresa</em></strong></li>
                        <li>Soporte por correo electrónico</li>
                        <li>Acceso inmediato a nuevas actualizaciones</li>
                        <li>Respaldos diarios de la base de datos</li>
                      </ul>
                  </div>
              </div>
              <div class="thumbnail">
                  <div class="caption">
                      <h4 class="pull-right">$90/trimestral ó $144/semestral</h4>
                      <h4><strong>Profesional</strong></h4>
                      <p>Ideal para profesionales que deseen manejar la información financiera de múltiples empresas, incluye:</p>
                      <ul>
                        <li><strong><em>Hasta 5 usuarios</em></strong></li>
                        <li><strong><em>Hasta 3 empresas</em></strong></li>
                        <li>Soporte por correo electrónico</li>
                        <li>Acceso inmediato a nuevas actualizaciones</li>
                        <li>Respaldos diarios de la base de datos</li>
                      </ul>
                  </div>
              </div>
              <p>Se garantiza un acceso 24/7 a <strong><em>DecimaERP online</em></strong>, excepto en momentos donde sea necesario realizar tareas de mantenimiento, esta tareas se harán siempre fuera del horario laboral y se notificará con antelación a todos nuestros clientes.</p>
          </div>
          <div class="col-lg-6 col-md-6">
            {!! Form::open(array('id' => 'dec-documentation-op-modal-form', 'url' => URL::to('accounting/transactions/close-fiscal-year'), 'role' => 'form', 'onsubmit' => 'return false;')) !!}
              <legend>Formulario de Solicitud</legend>
  						<div class="form-group mg-hm">
  							{!! Form::label('dec-documentation-op-email', 'Correo electrónico', array('class' => 'control-label')) !!}
  							<div class="input-group">
  								<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
  								{!! Form::text('dec-documentation-op-email', '' , array('id' => 'dec-documentation-op-email', 'class' => 'form-control', 'data-mg-required' => '')) !!}
  							</div>
  						</div>
  						<div class="form-group mg-hm">
  							{!! Form::label('dec-documentation-op-name', 'Nombre de contacto', array('class' => 'control-label')) !!}
  							<div class="input-group">
  								<span class="input-group-addon"><i class="fa fa-user"></i></span>
  								{!! Form::text('dec-documentation-op-name', '' , array('id' => 'dec-documentation-op-name', 'class' => 'form-control', 'data-mg-required' => '')) !!}
  							</div>
  						</div>
              <div class="form-group mg-hm" data-mg-required="">
    						{!! Form::label('dec-documentation-op-plan', 'Plan de interés', array('class' => 'control-label')) !!}
    						<div class="radio" style="margin-top: 0px;">
    							<label>
    								{!! Form::radio('dec-documentation-op-plan', 'A', false, array('id' => 'dec-documentation-op-0')) !!} Personal (trimestral)
    							</label>
    						</div>
    						<div class="radio">
    							<label>
    								{!! Form::radio('dec-documentation-op-plan', 'B', false, array('id' => 'dec-documentation-op-1')) !!} Personal (semestral)
    							</label>
    						</div>
    						<div class="radio">
    							<label>
    								{!! Form::radio('dec-documentation-op-plan', 'C', false, array('id' => 'dec-documentation-op-2')) !!} Profesional (trimestral)
    							</label>
    						</div>
    						<div class="radio">
    							<label>
    								{!! Form::radio('dec-documentation-op-plan', 'D', false, array('id' => 'dec-documentation-op-3')) !!} Profesional (semestral)
    							</label>
    						</div>
    					</div>
  						<div class="form-group mg-hm">
  							{!! Form::label('dec-documentation-op-observation', 'Observaciones', array('class' => 'control-label')) !!}
  							{!! Form::textareacustom('dec-documentation-op-observation', 2, 500, array('class' => 'form-control'), '') !!}
  						</div>
  						<div class="form-group mg-hm">
  							{!! Form::label('dec-documentation-op-country', 'País', array('class' => 'control-label')) !!}
  							<div class="input-group">
  								<span class="input-group-addon"><i class="fa fa-globe"></i></span>
  								{!! Form::text('dec-documentation-op-country', 'El Salvador' , array('id' => 'dec-documentation-op-country', 'class' => 'form-control', 'disabled' => 'disabled')) !!}
  							</div>
  						</div>
           {!! Form::close() !!}
          </div>
				 </div>
			</div>
			<div class="modal-footer" style="text-align:center;">
				<button type="button" class="btn btn-default" data-dismiss="modal">{{ Lang::get('toolbar.close') }}</button>
				<button id="dec-documentation-op-btn-modal" type="button" class="btn btn-primary">Enviar solicitud</button>
			</div>
    </div>
  </div>
</div>
<script type='text/javascript'>

</script>
