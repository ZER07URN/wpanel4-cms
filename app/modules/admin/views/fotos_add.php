<div class="panel panel-default">
    <div class="panel-heading">
        <b>Cadastrar foto individual</b>
    </div>
    <div class="panel-body">
        <?php

        echo form_open_multipart('admin/fotos/add/'.$album_id, array('role'=>'form'));

        echo div(array('class'=>'form-group'));
        echo form_label('Selecione a imagem', 'userfile');
        echo form_input(array('name'=>'userfile', 'type'=>'file'));
        echo form_error('userfile');
        echo close_div();

        echo div(array('class'=>'form-group'));
        echo form_label('Descrição', 'descricao');
        echo form_input(array('name'=>'descricao', 'value'=> set_value('descricao'), 'class'=>'form-control'));
        echo form_error('descricao');
        echo close_div();

        echo row();

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
        echo anchor('admin/fotos/index/'.$album_id, 'Cancelar', array('class'=>'btn btn-danger'));
        echo close_div(2);

        echo form_close();
        ?>
    </div>
</div>