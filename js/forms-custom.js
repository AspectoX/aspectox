/* 
 Assan v1.3
 Sky forms custom js
 */

$(function()
			{
				// Validation
				$("#sky-form").validate(
				{					
					// Rules for form validation
					rules:
					{
						name:
						{
							required: true
						},
						email:
						{
							required: true,
							email: true
						},
						message:
						{
							required: true,
							minlength: 10
						},
						captcha:
						{
							required: true,
							//remote: 'sky-form/captcha/process.php'
						}
					},
										
					// Messages for form validation
					messages:
					{
						name:
						{
							required: 'Por favor, introduzca su nombre',
						},
						email:
						{
							required: 'Por favor, introduzca su dirección de correo electrónico',
							email: 'Por favor, introduce una dirección de correo electrónico válida'
						},
						message:
						{
							required: 'Por favor, introduzca su mensaje'
						},
						captcha:
						{
							required: 'Por favor ingrese los caracteres',
							remote: 'Se requiere código de imagen correcta'
						}
					},
										
					// Ajax form submition					
					submitHandler: function(form)
					{
						$(form).ajaxSubmit(
						{
							beforeSend: function()
							{
								$('#sky-form button[type="submit"]').attr('disabled', true);
							},
							success: function()
							{
								$("#sky-form").addClass('submited');
							}
						});
					},
					
					// Do not change code below
					errorPlacement: function(error, element)
					{
						error.insertAfter(element.parent());
					}
				});
			});
                        
                        
                        
                        
                        
                        