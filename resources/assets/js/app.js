
require('./bootstrap');
require('./datatables')
require('./select2')
require('bootstrap-sass');
require('notyf');

jQuery(document).ready(function($) {
    window.notyf = new Notyf();
	/**
	 * Laravel Ajax Setup
	 */
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': Laravel.csrfToken,
            'Accept': 'application/json'
        }
    });

    /**
     * New instance of Select2
     */
    $('.select2').select2({
        theme: "bootstrap"
    });
});
