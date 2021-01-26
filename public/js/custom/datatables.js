$('.datatable').DataTable({
    "bPaginate": false,
    "bInfo": false,
    "bFilter": false,
    "bAutoWidth": false,
    "aoColumns" : [
        { sWidth: '30%' },
        { sWidth: '50%' },
        { sWidth: '20%' },
    ]
});
$('.datatable').attr('style', 'border-collapse: collapse !important');