<?php

/* @var $this yii\web\View */

$this->title = 'Agenda da empresa';
?>
    <!-- FullCalendar -->
	<link href='css/fullcalendar.css' rel='stylesheet' />
	<link href='css/index.css' rel='stylesheet' />
    <!-- Custom CSS -->
    <style>
	#calendar {
		width: 80%;
	}
	.col-centered{
		float: none;
		margin: 0 auto;
	}
    </style>
    
<div class="site-index">
    <div class="jumbotron">
        <!-- <h1>Bem vindo!</h1> -->
        <div class="col-lg-12 text-center">
        	<div id="calendar" class="col-centered"></div>
        </div>
	</div>
	
	<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="addEvent.php">
			
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Event</h4>
			  </div>
			  <div class="modal-body">
				
				  <!--<div class="form-group">
					<label for="title" class="col-sm-2 control-label">Title</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
					</div>
				  </div> -->
				  
				  <div class="form-group">
					<label for="start" class="col-sm-2 control-label">Cliente</label>
					<div class="col-sm-10">
					<select name="id_cliente" class="form-control" id="id_cliente">
					  
					</select>
					</div>
				  </div>
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Tipo</label>
					<div class="col-sm-10">
					  <input type="radio" name="tipo" id="id_servico" value="P.O">Pedido Orçamentos 
					  <input type="radio" name="tipo" id="id_servico" value="S.S" checked>Solicitação de Serviço
					</div>
				  </div>
				  
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Funcionarios</label>
					<div class="col-sm-10">
					  
					  </div>
				  </div>
				  
				  <div class="form-group">
					<label for="start" class="col-sm-2 control-label">Horario Inicio</label>
					<div class="col-sm-10">
					  <input type="datetime-local" name="start" class="form-control" id="start">
					</div>
				  </div>
				  
				  <div class="form-group">
					<label for="start" class="col-sm-2 control-label">Horario Fim</label>
					<div class="col-sm-10">
					  <input type="datetime-local" name="end" class="form-control" id="end">
					</div>
				  </div>
				  
				  <hr>
				  <button id="addServico" class="btn btn-success" type="button">Adicionar Servico</button>
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Serviço</label>
					<table>
					  <tr>
					  	<div class="col-sm-6"><select name="id_servico" class="form-control" id="id_servico">
					  	<?php 
					  		
					  	?>
					  	</select></div>
					  	<td><div class="col-sm-12"><input type="number" class="form-control" name="quantidade"></div></td>
					  	<td><div class="col-sm-12"><input type="number" class="form-control" name="preco_servico"></div></td>
					  </tr>
					</table>
				  </div>
				  
				  <div id="servico_form"> </div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>
	<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="editEventTitle.php">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Event</h4>
			  </div>
			  <div class="modal-body">
			  		<input type="hidden" name="id" class="form-control" id="id">
			  		<textarea name="title" class="form-control" id="title" disabled="disabled"> </textarea>
			  		
			  		<div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
						  <div class="checkbox">
							<label class="text-danger"><input type="checkbox"  name="delete"> Delete event</label>
						  </div>
						</div>
					</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>	
	<!-- FullCalendar -->
	<script src='js/jquery.js'></script>
	<script src='js/moment.min.js'></script>
	<script src='js/fullcalendar.min.js'></script>
	<script src='lang/pt-br.js'></script>
	
	<script>
	//$(document).ready(function() {
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			allDaySlot: false,
			defaultView: 'agendaWeek',
			defaultDate: '2017-09-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			nowIndicator:true,
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd').modal('show');
			},
			eventRender: function(event, element) {
				element.bind('dblclick', function() {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
					$('#ModalEdit').modal('show');
				});
			},
			eventDrop: function(event, delta, revertFunc) { // si changement de position
				edit(event);
			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur
				edit(event);
			},
			events: []
		});
		function edit(event){
			start = event.start.format('YYYY-MM-DD HH:mm:ss');
			if(event.end){
				end = event.end.format('YYYY-MM-DD HH:mm:ss');
			}else{
				end = start;
			}
			id =  event.id;
			Event = [];
			Event[0] = id;
			Event[1] = start;
			Event[2] = end;
			$.ajax({
			 url: 'editEventDate.php',
			 type: "POST",
			 data: {Event:Event},
			 success: function(rep) {
					if(rep == 'OK'){
						alert('Saved');
					}else{
						alert('Could not be saved. try again.'); 
					}
				}
			});
		}
	//});
</script>
<!-- 
    <div class="body-content">
	    <div class="row">
            <div class="col-lg-4">

                <h2>Heading</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">

                <h2>Heading</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>
 
    </div> 
-->
</div>