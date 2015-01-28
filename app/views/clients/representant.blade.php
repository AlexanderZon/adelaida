
    <div class="col-md-12">
        <div class="portlet box green-haze">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-male"></i>Añadir Representante
				</div>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form action="#" id="form-representant" class="form-horizontal">
					<div class="form-body">
			        	<input id="representant-finded" type="hidden" name="finded" value="false"/>
						<div class="form-group">
				            <label class="control-label col-md-4">Cédula</label>
				            <div class="col-md-8">
				              <input id="representant-identification_number" class="form-control" placeholder="Escriba La Cédula de la persona" name="identification_number" type="text" required>
				            </div>	
						</div>
						<div class="form-group">
				            <label class="control-label col-md-4">Nombre</label>
				            <div class="col-md-8">
				              <input id="representant-first_name" class="form-control" placeholder="Escriba el Nombre de la persona" name="first_name" type="text" required/>
				            </div>
						</div>
						<div class="form-group">
				            <label class="control-label col-md-4">Apellido</label>
				            <div class="col-md-8">
				              <input id="representant-last_name" class="form-control" placeholder="Escriba el Apellido de la persona" name="last_name" type="text" required/>
				            </div>
						</div>
						<div class="form-group">
				            <label class="control-label col-md-4">Teléfono</label>
				            <div class="col-md-8">
				              <input id="representant-phone" class="form-control" placeholder="Escriba el Teléfono de la persona" name="phone" type="text" required/>
				            </div>
						</div>
						<div class="form-group">
				            <label class="control-label col-md-4">Email</label>
				            <div class="col-md-8">
				              <input id="representant-email" class="form-control" placeholder="Escriba el Email de la persona" name="email" type="text" required/>
				            </div>
						</div>
					</div>
					<div class="form-actions">
						<div class="row">
							<div class="col-md-offset-3 col-md-9">
								<button type="submit" class="btn green">Crear</button>
								<a href="#" class="btn default" id="go-back">Volver</a>
							</div>
						</div>
					</div>
				</form>
				<!-- END FORM-->
			</div>
		</div>
	</div>

        <script type="text/javascript">
        	
        	$('#go-back').on('click', function(e){
        		$('.fancybox-close').click();
        	});

			$('#representant-identification_number').on('keyup', function(e){
				//console.log('encontrando a '+$(this).val());
				$.ajax({
    				url: '{{ $route }}/findrepresentant',
    				type: 'post',
    				data: {'identification_number':$(this).val()},
    				success: function(data){
    					if(data != 0){
    						$('#representant-first_name').val(data.first_name);
    						$('#representant-first_name').attr('readonly', 'true');
    						$('#representant-last_name').val(data.last_name);
    						$('#representant-last_name').attr('readonly', 'true');
    						$('#representant-phone').val(data.phone);
    						$('#representant-phone').attr('readonly', 'true');
    						$('#representant-email').val(data.email);
    						$('#representant-email').attr('readonly', 'true');
    						$('#representant-finded').val(data.id);
    					}
    					else{
    						$('#representant-first_name').removeAttr('readonly');
    						$('#representant-last_name').removeAttr('readonly');
    						$('#representant-phone').removeAttr('readonly');
    						$('#representant-email').removeAttr('readonly');
    						$('#representant-finded').val('false');
    						$('#representant-first_name').val('');
    						$('#representant-last_name').val('');
    						$('#representant-phone').val('');
    						$('#representant-email').val('');
    					}
    					console.log(data);
    				},
    				error: function(e){
    					console.log(e);
    				}
    			});
			});

    		$('#form-representant').on('submit', function(e){
    			e.preventDefault();
    			if($('#representant-finded').val() != 'false'){
    				$('input[name=id_person]').val($('#representant-finded').val());
    				$('#form-display-representant-span').html($('#representant-identification_number').val() + ' - ' + $('#representant-first_name').val());
    				$('#form-display-representant').css({
    					'display':'block'
    				});
    				$('#add-representant').css({
    					'display':'none'
    				});
    				$('.fancybox-close').click();
    				return false;
    			}
    			else{
	    			var elem = $(this);
	    			$.ajax({
	    				url: '{{ $route }}/representant',
	    				type: 'post',
	    				data: elem.serialize(),
	    				success: function(data){
		    				$('input[name=id_person]').val(data.id);
		    				$('#form-display-representant-span').html(data.identification_number + ' - ' + data.first_name);
		    				$('#form-display-representant').css({
		    					'display':'block'
		    				});
		    				$('#add-representant').css({
		    					'display':'none'
		    				});
		    				$('.fancybox-close').click();
	    					console.log(data);
	    				},
	    				error: function(e){
	    					console.log(e);
	    				}
	    			});
	    			$('#fancybox-inner').html('<img src="/javascripts/fancybox/fancybox_loading.gif"/>');
	    			//console.log(elem.serialize());
	    			return false;
	    		}
    		});

        </script>