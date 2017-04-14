<?php

class CBackButtonWidget extends CWidget {

    public function run() {

        echo CHtml::button('Atrás', array(
            'name' => 'btnBack',
            'class' => 'btn btn-danger',
            'style' => 'width:100px;',
            'onclick' => "history.go(-1)",
                )
        );
    }

}