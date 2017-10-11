/**
 * Created by DIEGO ALEJANDRO on 5/10/2017.
 */
$(document).ready(function() {
    $('#mainTable').DataTable({
        ajax: {
            url: '/provider/dataTable',
            dataSrc: ''
        },
        columns: [
            { data: 'id' },
            { data: 'name' },
            { data: 'telefono' },
            { data: 'direccion' },
            { data: 'description' },
        ]
    });
});