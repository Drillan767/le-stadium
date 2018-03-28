import 'materialize-css/dist/js/materialize.min.js'

$(document).ready(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('select').formSelect();

    let i=1;

    $('#add_dish').click(function(){
        i++;
        $('#dish_field').append('' +
            '<tr id="row'+i+'" class="dynamic-added">' +
                '<td>' +
                    '<input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" required />' +
                '</td>' +
                '<td>' +
                    '<input type="text" name="price[]" placeholder="Prix" class="form-control name_list" required />' +
                '</td>' +
                '<td>' +
                    '<select name="category[]" required>' +
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

        $('select').formSelect();
    });


    $(document).on('click', '.btn_remove', function(){
        let button_id = $(this).attr("id");
        $('#row'+button_id+'').remove();
    });

    $('.modal-trigger').click(function() {
        $('#modal').append('<img src="' + $(this).attr('data-content')+ '" />').modal();
    });

    $('.btn.red').click(function() {
        let self = $(this),
            id = $(this).attr('data-content');
        self.closest('tr').css('background', 'blue');
        $.post("/admin/gallery/delete/" + $(this).attr('data-content'), function(data){
            if(data === 'supprimé') {
                document.getElementById(id).remove();
            }
        });
    })


});