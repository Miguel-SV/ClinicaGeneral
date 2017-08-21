<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script>

    $( document ).ready(function(){
        
        Materialize.updateTextFields();
        $('.modal-trigger').leanModal();
        $(".button-collapse").sideNav();
        $(".dropdown-button").dropdown();
        $('#textarea1').trigger('autoresize');
        $('input#input_text, textarea#textarea1').characterCounter();
        $('select').material_select();
        
       
        
        
       $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15, // Creates a dropdown of 15 years to control year
            format: 'yyyy-mm-dd'
       });

    });
    
    $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
        $('#modal1').modal('open');
        $('#modal1').modal('close')
  });
</script>