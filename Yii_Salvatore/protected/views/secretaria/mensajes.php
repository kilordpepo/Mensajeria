    <?php
        /* @var $this secretariaController */
        /* @var $mensaje messageForm */
        /* @var $form CActiveForm  */
    ?>
    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Secretaría | Mensajes</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row form">
                <?php $form=$this->beginWidget('CActiveForm', array(
                        'id'=>'message-form',
                        'enableClientValidation'=>true,
                        'clientOptions'=>array(
                            'validateOnSubmit'=>true,
                        ),
                    )); 
                ?>
                <div class="col-lg-12">
                    <form role="form">
                        <fieldset>
                            <div class="form-group col-lg-8" >
                                <?php echo $form->labelEx($mensaje,'Usuario Destinatario:'); ?>
                                <?php echo $form->textField($mensaje,'usuario',array(
                                        'id'=> 'username',
                                        'class' => 'form-control',
                                        'type'=>'text',
                                        'placeholder'=>'Usuario Destinatario'
                                    )); ?>
                                <a style="color: #F44336"><?php echo $form->error($mensaje,'usuario'); ?></a>
                            </div>
                            <div class="form-group col-lg-8">
                                <?php echo $form->labelEx($mensaje,'Mensaje:'); ?>
                                <?php echo $form->textArea($mensaje,'mensaje',array(
                                        'id'=> 'mensaje',
                                        'class' => 'form-control',
                                        'type'=>'text',
                                        'rows'=>'6',
                                        'placeholder'=>'Mensaje'
                                    )); ?>
                                <a style="color: #F44336"><?php echo $form->error($mensaje,'mensaje'); ?></a>
                            </div>
                            <div class="form-group col-lg-8">
                                <?php echo $form->labelEx($mensaje,'Tipo de Mensaje:'); ?><br>
                                <?php echo $form->radioButtonList($mensaje, 'type', array('0'=>'Común', '1'=>'Importante', '2'=>'Urgente')); ?><br>
                                <a style="color: #F44336"><?php echo $form->error($mensaje,'type'); ?></a>
                            </div>
                            <!-- Botones -->
    
                                <!-- Continuar -->
                                <div class="col-lg-1  col-lg-offset-6" style="margin-bottom: 10px">
                                    <?php echo CHtml::ajaxSubmitButton('Enviar','','',array(
                                                                "class"=>"btn btn-success",
                                                                "style"=>"width:100px"
                                                                )); ?>
                                </div>
                                <!-- Continuar -->
                                
                                <!-- Atras -->
                                <div class="col-lg-1" style="margin-bottom: 10px">
                                    <?php $this->widget('application.ext.data.CBackButtonWidget')?>
                                </div>
                                <!-- Atras -->
                            
                            <!-- Botones -->
                        </fieldset>
                    </form>
                </div>              
            </div>
            <?php $this->endWidget(); ?>
            <!-- /.row -->
            


        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->