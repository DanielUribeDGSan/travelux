$(function () {
    $('input[id="fecha_inicio"]').daterangepicker({
        autoUpdateInput: false,
        autoApply: true,
        opens: "center",
        locale: {
            cancelLabel: 'Clear',
            format: "MM/DD/YYYY",
            separator: " - ",
            applyLabel: "Aplicar",
            cancelLabel: "Cancelar",
            fromLabel: "From",
            toLabel: "To",
            customRangeLabel: "Custom",
            daysOfWeek: [
                "Do",
                "Lu",
                "Ma",
                "Mi",
                "Ju",
                "Vi",
                "Sa",
            ],
            monthNames: [
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo",
                "Junio",
                "Julio",
                "Agosto",
                "Septiembre",
                "Octubre",
                "Noviembre",
                "Diciembre"
            ],
            firstDay: 1
        },
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'), 10)
    }, function (start, end, label) {
        var years = moment().diff(start, 'years');

    });
    $('input[id="fecha_inicio"]').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('YYYY-MM-DD'));
    });

    $('input[id="fecha_inicio"]').on('cancel.daterangepicker', function (ev, picker) {
        $(this).val('');
    });

});

$(function () {
    $('input[id="fecha_regreso"]').daterangepicker({
        autoUpdateInput: false,
        autoApply: true,
        opens: "center",
        locale: {
            cancelLabel: 'Clear',
            format: "MM/DD/YYYY",
            separator: " - ",
            applyLabel: "Aplicar",
            cancelLabel: "Cancelar",
            fromLabel: "From",
            toLabel: "To",
            customRangeLabel: "Custom",
            daysOfWeek: [
                "Do",
                "Lu",
                "Ma",
                "Mi",
                "Ju",
                "Vi",
                "Sa",
            ],
            monthNames: [
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo",
                "Junio",
                "Julio",
                "Agosto",
                "Septiembre",
                "Octubre",
                "Noviembre",
                "Diciembre"
            ],
            firstDay: 1
        },
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'), 10)
    }, function (start, end, label) {
        var years = moment().diff(start, 'years');

    });
    $('input[id="fecha_regreso"]').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('YYYY-MM-DD'));
    });

    $('input[id="fecha_regreso"]').on('cancel.daterangepicker', function (ev, picker) {
        $(this).val('');
    });

});


// Form 2


$(function () {
    $('input[id="fecha_inicio2"]').daterangepicker({
        autoUpdateInput: false,
        autoApply: true,
        opens: "center",
        locale: {
            cancelLabel: 'Clear',
            format: "MM/DD/YYYY",
            separator: " - ",
            applyLabel: "Aplicar",
            cancelLabel: "Cancelar",
            fromLabel: "From",
            toLabel: "To",
            customRangeLabel: "Custom",
            daysOfWeek: [
                "Do",
                "Lu",
                "Ma",
                "Mi",
                "Ju",
                "Vi",
                "Sa",
            ],
            monthNames: [
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo",
                "Junio",
                "Julio",
                "Agosto",
                "Septiembre",
                "Octubre",
                "Noviembre",
                "Diciembre"
            ],
            firstDay: 1
        },
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'), 10)
    }, function (start, end, label) {
        var years = moment().diff(start, 'years');

    });
    $('input[id="fecha_inicio2"]').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('YYYY-MM-DD'));
    });

    $('input[id="fecha_inicio2"]').on('cancel.daterangepicker', function (ev, picker) {
        $(this).val('');
    });

});

$(function () {
    $('input[id="fecha_regreso2"]').daterangepicker({
        autoUpdateInput: false,
        autoApply: true,
        opens: "center",
        locale: {
            cancelLabel: 'Clear',
            format: "MM/DD/YYYY",
            separator: " - ",
            applyLabel: "Aplicar",
            cancelLabel: "Cancelar",
            fromLabel: "From",
            toLabel: "To",
            customRangeLabel: "Custom",
            daysOfWeek: [
                "Do",
                "Lu",
                "Ma",
                "Mi",
                "Ju",
                "Vi",
                "Sa",
            ],
            monthNames: [
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo",
                "Junio",
                "Julio",
                "Agosto",
                "Septiembre",
                "Octubre",
                "Noviembre",
                "Diciembre"
            ],
            firstDay: 1
        },
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'), 10)
    }, function (start, end, label) {
        var years = moment().diff(start, 'years');

    });
    $('input[id="fecha_regreso2"]').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('YYYY-MM-DD'));
    });

    $('input[id="fecha_regreso2"]').on('cancel.daterangepicker', function (ev, picker) {
        $(this).val('');
    });

});

// Form 2


$(function () {
    $('input[id="fecha_inicio3"]').daterangepicker({
        autoUpdateInput: false,
        autoApply: true,
        opens: "center",
        locale: {
            cancelLabel: 'Clear',
            format: "MM/DD/YYYY",
            separator: " - ",
            applyLabel: "Aplicar",
            cancelLabel: "Cancelar",
            fromLabel: "From",
            toLabel: "To",
            customRangeLabel: "Custom",
            daysOfWeek: [
                "Do",
                "Lu",
                "Ma",
                "Mi",
                "Ju",
                "Vi",
                "Sa",
            ],
            monthNames: [
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo",
                "Junio",
                "Julio",
                "Agosto",
                "Septiembre",
                "Octubre",
                "Noviembre",
                "Diciembre"
            ],
            firstDay: 1
        },
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'), 10)
    }, function (start, end, label) {
        var years = moment().diff(start, 'years');

    });
    $('input[id="fecha_inicio3"]').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('YYYY-MM-DD'));
    });

    $('input[id="fecha_inicio3"]').on('cancel.daterangepicker', function (ev, picker) {
        $(this).val('');
    });

});

$(function () {
    $('input[id="fecha_regreso3"]').daterangepicker({
        autoUpdateInput: false,
        autoApply: true,
        opens: "center",
        locale: {
            cancelLabel: 'Clear',
            format: "MM/DD/YYYY",
            separator: " - ",
            applyLabel: "Aplicar",
            cancelLabel: "Cancelar",
            fromLabel: "From",
            toLabel: "To",
            customRangeLabel: "Custom",
            daysOfWeek: [
                "Do",
                "Lu",
                "Ma",
                "Mi",
                "Ju",
                "Vi",
                "Sa",
            ],
            monthNames: [
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo",
                "Junio",
                "Julio",
                "Agosto",
                "Septiembre",
                "Octubre",
                "Noviembre",
                "Diciembre"
            ],
            firstDay: 1
        },
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'), 10)
    }, function (start, end, label) {
        var years = moment().diff(start, 'years');

    });
    $('input[id="fecha_regreso3"]').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('YYYY-MM-DD'));
    });

    $('input[id="fecha_regreso3"]').on('cancel.daterangepicker', function (ev, picker) {
        $(this).val('');
    });

});