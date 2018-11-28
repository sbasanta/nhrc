<div class="footer col-md-12 bg-official" >
  <center>
  <p>Dignity, Equality & Justice For all<br>
  &copy; 2018, National Human Right Commision - Nepal</p>
</center>
</div>


  {{-- <script src="{{asset('js/app.js')}}"></script> --}}

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('assets/datatable/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/datatable/datatables.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#example').DataTable();
} );
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js\parsley.min.js')}}"></script>

<script type="text/javascript">
$(document).ready(function() {
  $('#example').DataTable();
} );

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<script type="text/javascript">
 $(document).on('click','#editbutton' ,function (e) {
 e.preventDefault();
    var button = $(this); // Button that triggered the modal
    var etitle = button.data('etitle') // Extract info from data-* attributes
   var ntitle = button.data('ntitle')
   var published_date = button.data('published_date')
   var link = button.data('link')
   var file1 = button.data('file1')
   var file2 = button.data('file2')
   var id=button.data('id');
$('#etitle').val(etitle);
$('#ntitle').val(ntitle);
$('#published_date').val(published_date);
$('#link').val(link);
$('#editbookform').prop('action','book/'+id);
$('#hiddenforfile1').val(file1);
$('#hiddenforfile2').val(file2);

   // var modal = $(this)
   // modal.find('.modal-body #etitle').val(etitle)
   // modal.find('.modal-body #ntitle').val(ntitle)
   // modal.find('.modal-body #published_date').val(published_date)
   // modal.find('.modal-body #link').val(link)
   // modal.find('.modal-body #file1').val(file1)
   // modal.find('.modal-body #file2').val(file2)




$('#editmodal').modal('show');



})
</script>
