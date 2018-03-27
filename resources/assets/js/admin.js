import $ from 'jquery';
import 'materialize-css/dist/js/materialize.min.js';

$(document).ready(function(){
    let postURL = "<?php echo url('addmore'); ?>";
    let i=1;

    $('#add').click(function(){
        i++;
        $('#dynamic_field').append('' +
            '<tr id="row'+i+'" class="dynamic-added">' +
                '<td>' +
                    '<input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" />' +
                '</td>' +
                '<td>' +
                    '<input type="text" name="price[]" placeholder="Prix" class="form-control name_list" />' +
                '</td>' +
                '<td>' +
                    '<select name="category[]">\n' +
                        '<option value="salade">Salade</option>' +
                        '<option value="plat">Plat</option>' +
                        '<option value="dessert">Dessert</option>' +
                    '</select>' +
                '</td>' +

                '<td>' +
                    '<button class="btn waves-effect waves-light red btn_remove" name="remove" id="'+i+'">X</button>' +
                '</td>' +
            '</tr>'
        );
    });


    $(document).on('click', '.btn_remove', function(){
        let button_id = $(this).attr("id");
        $('#row'+button_id+'').remove();
    });
});