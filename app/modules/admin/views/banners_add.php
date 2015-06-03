<div class="panel panel-default">
    <div class="panel-heading">
        <b>Cadastro de banners</b>
    </div>
    <div class="panel-body">
        <?php

        echo form_open_multipart('admin/banners/add', array('role'=>'form'));

        echo div(array('class'=>'form-group'));
        echo form_label('Título do banner', 'title');
        echo form_input(array('name'=>'title', 'value'=> set_value('title'), 'class'=>'form-control'));
        echo form_error('title');
        echo close_div();

        echo row();
        echo col(2);
        echo div(array('class'=>'form-group'));
        echo form_label('Ordem de exibição', 'order');
        echo form_input(array('name'=>'order', 'class'=>'form-control'));
        echo form_error('order');
        echo close_div(2);

        $options = config_item('pos_banners');

        echo col(2);
        echo div(array('class'=>'form-group'));
        echo form_label('Posição', 'position');
        //echo form_input(array('name'=>'position', 'class'=>'form-control'));
        echo form_dropdown('position', $options, null, null, 'form-control');
        echo form_error('position');
        echo close_div(2);

        // Opções de status
        $options = array(
                          '0'  => 'Indisponível',
                          '1'  => 'Publicado'
                        );


        echo col(3);
        echo div(array('class'=>'form-group'));
        echo form_label('Status', 'status');
        echo form_dropdown('status', $options, null, null, 'form-control');
        echo close_div(3);

        echo div(array('class'=>'form-group'));
        echo form_label('Imagem do banner', 'userfile');
        echo form_input(array('name'=>'userfile', 'type'=>'file'));
        echo close_div();

        echo hr();

        echo row();
        echo col();
        echo form_button(
                array(
                  'type'=>'submit', 
                  'name'=>'submit', 
                  'content'=>'Cadastrar', 
                  'class'=>'btn btn-primary'
                  )
                );
        echo nbs(); // &nbsp;
        echo anchor('admin/banners', 'Cancelar', array('class'=>'btn btn-danger'));
        echo close_div(2);

        echo form_close();
        ?>
    </div>
</div>