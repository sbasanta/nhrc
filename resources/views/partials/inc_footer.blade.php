<div class="footer col-md-12 bg-official" >
  <center>
  <p>Dignity, Equality & Justice For all<br>
  &copy; 2018, National Human Right Commision - Nepal</p>
</center>
</div>
<script type="text/javascript">
$(document).ready(function() {
  $('#example').DataTable();
} );
</script>

<script type="text/javascript">
	$('#edit').on('show.bs.modal', function (event) {
		console.log('modal open');
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>
</body>
</html>
